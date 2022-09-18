<?php include('partials/header.php') ?>
    <main class="d-flex w-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                    
                    <div class="d-table-cell align-middle">
                        
                        <div class="text-center mt-4">
                            <h1>Task Management Account Activation</h1>  
                            <p class="lead">
                                Enter your new password to activate your account.
                            </p>
                        </div>
                       
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-4" id="login-wrapper">
                                    <script type="text/javascript" src="https://c2dcf332.caspio.com/dp/7d9cb00090a4104babe247da9ce1/emb"></script>
                                    <div id="already_activated" style="display: none;" class="row text-center">
                                        <p class="fw-bold">
                                            The account has been already activated.
                                        </p>
                                             
                                        <p class="fw-bold">
                                            Return to <a href="/tm-app/">login</a>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DataPageReady', function (event) {
            if (event.detail.appKey == '7d9cb00090a4104babe247da9ce1') {
                if($('#cbParamVirtual1').val() == 'Yes') {
                    $('#caspioform, .lead').hide();
                    $('#already_activated').show();
                } else {      
                    $('.cbFormPassword').val('');
                }
            } 
        });
    </script>
<?php include('partials/footer.php') ?>