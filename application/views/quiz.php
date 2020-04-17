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
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Loader -->
    <img class="loader" src="<?= base_url('media/loader.gif') ?>" width="100px" alt="">

    <!-- Container -->
    <div class="container-fluid p-0">

        <!-- Nav -->
        <nav class="p-10 bgm-white z-depth-1">
            <div class="logo-container">
                <img class="logo di-block p-0" src="https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2846955712063145&height=50&width=50&ext=1587240740&hash=AeT7hpMs9S6oMtfM" alt="Perfil">
                <ul class="menu di-block p-0 m-l-15">
                    <p class="storage-name m-0"></p>
                    <ul class="submenu p-0 z-depth-1">
                        <li class="logout">Cerrar sesión</li>
                    </ul>
                </ul>
            </div>
        </nav>

        <div class="container container-question m-t-40">
            <section class="seccion-question">
                <div data-next-card=".question-2" data-id="1" data-yes="S" data-no="N" class="show question-1 row d-flex justify-content-center">
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
                <div data-next-card=".question-3" data-id="2" data-yes="S" data-no="N" class="hide question-2 row d-flex justify-content-center">
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
                <div data-next-card=".question-4" data-id="3" data-yes="N" data-no="T" class="hide question-3 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>3</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Te consideras un soñador?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-5" data-id="4" data-yes="S" data-no="N" class="hide question-4 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>4</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Con frecuencia te resulta facil entender los sentimientos de otras personas?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-6" data-id="5" data-yes="N" data-no="S" class="hide question-5 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>5</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Con frecuencia te resulta facil entender los sentimientos de otras personas?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-7" data-id="6" data-yes="T" data-no="F" class="hide question-6 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>6</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Consideras que la lógica generalmente es más importante que el corazón cuando se trata de tomar decisiones importantes?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-8" data-id="7" data-yes="T" data-no="F" class="hide question-7 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>7</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Es muy raro que te dejes llevar por fantasías o ideas?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-9" data-id="8" data-yes="T" data-no="F" class="hide question-8 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>8</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Tus sueños tienden a concentrarse en el mundo real y sus acontecimientos?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-10" data-id="9" data-yes="F" data-no="T" class="hide question-9 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>9</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Si tuvieras un negocio te costaría mucho despedir a empleados que son leales aunque su rendimiento estuviera por debajo de lo esperado?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-11" data-id="10" data-yes="F" data-no="T" class="hide question-10 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>10</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Si tuvieras un negocio te costaría mucho despedir a empleados que son leales aunque su rendimiento estuviera por debajo de lo esperado?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-12" data-id="11" data-yes="I" data-no="E" class="hide question-11 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>11</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Te resulta difícil presentarte a ti mismo ante otras personas?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-13" data-id="12" data-yes="I" data-no="E" class="hide question-12 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>12</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Normalmente no sueles iniciar las conversaciones?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-14" data-id="13" data-yes="E" data-no="I" class="hide question-13 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>13</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿No te importa ni te incomoda ser el centro de atención?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-15" data-id="14" data-yes="E" data-no="I" class="hide question-14 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>14</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿No te lleva mucho tiempo comenzar a implicarte en actividades sociales en tu nuevo entorno de trabajo?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-16" data-id="15" data-yes="E" data-no="I" class="hide question-15 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>15</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿No te lleva mucho tiempo comenzar a implicarte en actividades sociales en tu nuevo entorno de trabajo?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-17" data-id="16" data-yes="P" data-no="J" class="hide question-16 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>16</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Prefieres improvisar a tener que dedicar tiempo a desarrollar un plan detallado?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-18" data-id="17" data-yes="P" data-no="J" class="hide question-17 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>17</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Disponer de todas tus opciones es más importante que tener una lista preestablecida de cosas que hacer?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-19" data-id="18" data-yes="J" data-no="P" class="hide question-18 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>18</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿No tienes dificultades para diseñar una agenda personal de actividades y adherirte a ella?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card=".question-20" data-id="19" data-yes="P" data-no="J" class="hide question-19 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>19</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Tienes una tendencia a posponer cosas hasta que no queda tiempo suficiente para hacer todo lo que tienes que hacer?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-next-card="final" data-id="20" data-yes="P" data-no="J" class="hide question-20 row d-flex justify-content-center">
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <div class="card brd-2">
                            <div class="card-body card-padding">
                                <div class="number-card">
                                    <p>20</p>
                                </div>
                                <div class="m-t-30">
                                    <h1>¿Tienes una tendencia a posponer cosas hasta que no queda tiempo suficiente para hacer todo lo que tienes que hacer?</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-flex justify-content-center container-buttons">
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
                                    <p>Tu resultado es: </p>
                                </div>
                                <div class="m-t-30 text-center">
                                    <img class="img" src="https://image.flaticon.com/icons/svg/1256/1256650.svg" width="30%" alt="">
                                    <h1 class="title"></h1>
                                    <p class="descripcion"></p>
                                    <small class="character"></small>
                                    
                                </div>
                                <div class="p-20 text-center">
                                    <a href="whatsapp://send?text=Descubre%20tu%20personalidad%20https://959ce69b.ngrok.io/?utm_source=whatsapp">Compartir en whatsapp <i class="zmdi zmdi-arrow-right zmdi-hc-fw"></i> </a>
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

            $('.storage-name').html(localStorage.getItem('name') + '<i class="zmdi zmdi-chevron-down zmdi-hc-fw"></i>');
            $('.logo').attr('src', localStorage.getItem('img_perfil'));


            $('.logout').click(function() {

                FB.getLoginStatus(function(response) {
                    if (response && response.status === 'connected') {
                        FB.logout();
                        window.location.href = url;
                    }
                });
            });


            window.fbAsyncInit = function() {

                FB.init({
                    appId: '794359310972170',
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



            $('.container-fluid').fadeIn('slow');
            $('.loader').fadeOut('slow');

            $('.card-btn-error').click(function() {

                let element = $('.show');
                let clase = element[0].dataset.nextCard;
                let id_question = element[0].dataset.id;
                let type = element[0].dataset.no;

                if (clase != 'final') {


                    $('.show').find('.card').css('background-color', '#E24C4B');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');
                    $('.container-buttons').addClass('hide');

                    setTimeout(() => {

                        $('.show').addClass('hide');
                        $('.show').removeClass('show');

                        //Open next card
                        $(clase).addClass('show');
                        $(clase).removeClass('hide');
                        $('.container-buttons').removeClass('hide');

                        let json = {
                            'id_question': id_question,
                            'reply': type
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
                            'reply': type
                        }

                        objeto.push(json);
                        json = {};

                        //console.log(objeto);
                        get_response();

                    }, 3000);
                }

            });

            $('.card-btn-success').click(function() {

                let element = $('.show');
                let clase = element[0].dataset.nextCard;
                let id_question = element[0].dataset.id;
                let type = element[0].dataset.yes;

                if (clase != 'final') {


                    $('.show').find('.card').css('background-color', '#A4D166');
                    $('.show').find('p').css('color', 'white');
                    $('.show').find('h1').css('color', 'white');
                    $('.container-buttons').addClass('hide');


                    setTimeout(() => {

                        $('.show').addClass('hide');
                        $('.show').removeClass('show');

                        //Open next card
                        $(clase).addClass('show');
                        $(clase).removeClass('hide');
                        $('.container-buttons').removeClass('hide');


                        let json = {
                            'id_question': id_question,
                            'reply': type
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
                            'reply': type
                        }

                        objeto.push(json);
                        json = {};

                        //console.log(objeto);
                        get_response();

                    }, 3000);

                }

            });



            function get_response() {

                $.ajax({
                    type: 'POST',
                    url: url + 'C_home/post',
                    data: {
                        'id_profile': localStorage.getItem('user_id'),
                        'name': localStorage.getItem('name'),
                        'email': localStorage.getItem('email'),
                        'datos': objeto
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log(result); 
                        $('.title').text(result.title);
                        $('.descripcion').text(result.descripcion);
                        $('.character').text('Personajes: '+ result.character);
                    },
                    error: function(error) {
                    }

                });

            }




        });
    </script>

</body>

</html>