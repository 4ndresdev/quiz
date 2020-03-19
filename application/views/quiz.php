<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
    <link href="<?= base_url('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="<?= base_url('css/generic.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/app.min.1.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/app.min.2.css') ?>" rel="stylesheet">
    <link href="<?= base_url('css/quiz.css') ?>" rel="stylesheet">
</head>

<body>

    <!-- Loader -->
    <img class="loader" src="<?= base_url('media/loader.gif') ?>" width="100px" alt="">

    <!-- Container -->
    <div class="container-fluid p-0">

        <!-- Nav -->
        <nav class="p-10 bgm-white z-depth-1">
            <div class="logo-container">
                <img class="logo di-block" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2846955712063145&height=50&width=50&ext=1587240740&hash=AeT7hpMs9S6oMtfM" alt="Perfil">
                <div class="dropdown di-block m-l-15">
                    <p class="waves-effect middle di-block storage-name m-0 f-18 bold" data-toggle="dropdown" aria-expanded="false"></p>
                    <ul class="dropdown-menu">
                        <li class="logout"><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container container-question m-t-40">
            <section class="seccion-question">
                <div data-next-card=".question-2" data-id="1" class="show question-1 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>1</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Te consideras una persona más práctica que creativa?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-3" data-id="2" class="hide question-2 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>2</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Tus planes de viaje generalmente están bien pensados?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-4" data-id="3" class="hide question-3 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>3</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿No te consideras un soñador?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card="final" data-id="4" class="hide question-4 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>4</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Con frecuencia te resulta difícil entender los sentimientos de otras personas?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="card card-btn-error brd-2">
                            <div class="card-body card-padding d-flex justify-content-center align-items-center">
                                <img src="<?= base_url('media/iconos/error.svg') ?>" width="50px" alt="Error">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5">
                        <div class="card card-btn-success brd-2">
                            <div class="card-body card-padding d-flex justify-content-center align-items-center">
                                <img src="<?= base_url('media/iconos/success.svg') ?>" width="50px" alt="Error">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



        <div class="container container-finish m-t-40">
            <section>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>Terminamos</p>
                                </div>
                                <div class="m-t-30">
                                    <p class="f-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et dignissimos esse unde, amet, fuga eius modi praesentium maiores ipsum hic error, veniam at ad consequuntur rerum eveniet debitis accusantium mollitia?</p>
                                    <p class="f-20">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et dignissimos esse unde, amet, fuga eius modi praesentium maiores ipsum hic error, veniam at ad consequuntur rerum eveniet debitis accusantium mollitia?</p>
                                </div>
                                <div class="p-20 text-center">
                                    <a class="btn-share" href="#">Compartir en facebook <i class="zmdi zmdi-arrow-right zmdi-hc-fw"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>



    </div>



    <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../vendors/bower_components/Waves/dist/waves.min.js"></script>
    <script src="../vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
    <script src="../js/functions.js"></script>

    <script>
        $(document).ready(function() {

            let url = '<?= base_url() ?>';
            let objeto = [];

            $('.storage-name').text(localStorage.getItem('name'));
            $('.logo').attr('src', localStorage.getItem('img_perfil'));


            window.fbAsyncInit = function() {
                FB.init({
                    appId: '1118991965133339',
                    cookie: true, // Enable cookies to allow the server to access the session.
                    xfbml: true, // Parse social plugins on this webpage.
                    version: 'v6.0' // Use this Graph API version for this call.
                });

            };


            (function(d, s, id) { // Load the SDK asynchronously
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = "https://connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));



            $('.logout').click(function() {
                window.location.href = url;
            });


            $('.container-fluid').fadeIn('slow');
            $('.loader').fadeOut('slow');

            $('.card-btn-error').click(function() {

                let element = $('.show');
                let clase = element[0].dataset.nextCard;
                let id_question = element[0].dataset.id;

                if (clase != 'final') {


                    $('.show').find('.card').css('background-color', '#E24C4B');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');

                    setTimeout(() => {

                        $('.show').addClass('hide');
                        $('.show').removeClass('show');

                        //Open next card
                        $(clase).addClass('show');
                        $(clase).removeClass('hide');

                        let json = {
                            'id_question': id_question,
                            'reply': 'no'
                        }

                        objeto.push(json);
                        json = {};


                    }, 1000);

                } else {

                    $('.show').find('.card').css('background-color', '#E24C4B');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');
                    $('.container-question').hide();
                    $('.loader').fadeIn('slow');

                    setTimeout(() => {

                        $('.loader').fadeOut('slow');
                        $('.container-finish').show();

                        let json = {
                            'id_question': id_question,
                            'reply': 'si'
                        }

                        objeto.push(json);
                        json = {};

                        console.log(objeto);

                    }, 3000);
                }

            });

            $('.card-btn-success').click(function() {

                let element = $('.show');
                let clase = element[0].dataset.nextCard;
                let id_question = element[0].dataset.id;

                if (clase != 'final') {


                    $('.show').find('.card').css('background-color', '#A4D166');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');



                    setTimeout(() => {

                        $('.show').addClass('hide');
                        $('.show').removeClass('show');

                        //Open next card
                        $(clase).addClass('show');
                        $(clase).removeClass('hide');

                        let json = {
                            'id_question': id_question,
                            'reply': 'si'
                        }

                        objeto.push(json);
                        json = {};

                    }, 1000);

                } else {

                    $('.show').find('.card').css('background-color', '#A4D166');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');
                    $('.container-question').hide();
                    $('.loader').fadeIn('slow');

                    setTimeout(() => {

                        $('.loader').fadeOut('slow');
                        $('.container-finish').show();

                        let json = {
                            'id_question': id_question,
                            'reply': 'si'
                        }

                        objeto.push(json);
                        json = {};

                        console.log(objeto);

                    }, 3000);

                }

            });



        });
    </script>

</body>

</html>