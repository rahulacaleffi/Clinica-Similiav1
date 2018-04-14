app.controller('cadastrarColaboradorController',function($scope, $http, API_URL) {

    $scope.save = function() {
        if($scope.colaborador == null){
            $scope.colaborador = {};
        }

        $(".content-group").each(function (){
            $(this).removeClass("has-error");
            $(this).children().remove(".alert");
        });

        $http({
            method: 'POST',
            url: API_URL + "colaboradores/criarInteiro",
            data: { nome: $scope.colaborador.nome, telefone: $scope.colaborador.telefone, email: $scope.colaborador.email, endereco: $scope.colaborador.endereco, crx_tipo: $scope.colaborador.crx_tipo, crx_numero: $scope.colaborador.crx_numero, ambulatorio: $scope.colaborador.ambulatorio, wwr: $scope.colaborador.wwr, casosmensais: $scope.colaborador.casosmensais, metododasensacao : $scope.colaborador.metododasensacao, macreprw : $scope.colaborador.macreprw, contribuicao : $scope.colaborador.contribuicao },
            headers: {'Content-Type': 'application/json', 'Access-Control-Allow-Origin': '*' },
        }).then(function successCallback(response) {
            $('#formColaborador').trigger("reset");
            $scope.colaborador = {};
            showConfirmationMessage();
        }, function errorCallback(response) {
            if(response.status == 422){
                angular.forEach(response.data, function(value, key) {
                    $("input[id ^= '" + key + "']").closest(".content-group").addClass("has-error");
                    if( !$("input[id ^= '" + key + "']").closest(".content-group").has(".alert").length){
                        $("input[id ^= '" + key + "']").closest(".content-group").append("<div class='alert alert-danger' role='alert'>" + value + "</div>");
                    }
                });

                $doc.animate({
                    scrollTop: $("#" + Object.keys(response.data)[0]).parent().offset().top
                }, 800);
            } else {
                showErrorMessage();
            }
            
        });
    }
    
    function showConfirmationMessage(){
        BootstrapDialog.show({
            type:  BootstrapDialog.TYPE_SUCCESS,
            title: 'Confirmação de Inscrição',
            message: '<div class="text-center">Muito obrigado, ' + $scope.colaborador.nome +', por tornar-se um colaborador da <b>Clínica Similia</b>.<br>Para efetuar o pagamento e concluir a inscrição, entre em contato com o número de telefone para cursos: <span href="https://api.whatsapp.com/send?phone=5541991770301" target="_blank" class="mobile-only"><b>(41) 99177-0501</b></span>.</div>',
            cssClass: 'verify',
            buttons: [{
                label: 'OK',
                id: 'btn-ok',
                cssClass: 'btn-success',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });
    }

    function showErrorMessage(){
        BootstrapDialog.show({
            type:  BootstrapDialog.TYPE_DANGER,
            title: 'Erro de Inscrição',
            message: '<div class="text-center">Ops! Parece que você encontrou um problema técnico. Pedimos desculpas por isso.<br>Caso esteja usando um celular, tente utilizar com computador para realizar seu cadastro, pois há maior garantia de que irá funcionar.<br>Se possível, entre em contato com o número <span href="https://api.whatsapp.com/send?phone=5541997642312" target="_blank" class="mobile-only"><b>(41) 99764-2312</b></span> para nos ajudar a resolver o problema.<br>Não se esqueça de informar o máximo de detalhes possíveis, como qual dispositivo você está usando e quando foi que você tentou fazer a sua inscrição.<br>Contamos com a sua contribuição para melhorar o site!</div>',
            cssClass: 'verify',
            buttons: [{
                label: 'OK',
                id: 'btn-ok',
                action: function(dialogItself){
                    dialogItself.close();
                }
            }]
        });
    }
});