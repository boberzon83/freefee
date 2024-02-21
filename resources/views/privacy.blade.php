@extends('layouts.master-landing')

@section('title')
    Free Fee -  Venta sin costes
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-12">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="row">
                                <div class="col-xl-12 mb-3 text-center">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/freefee2.png') }}" alt="" height="130">
                                    </div>
                                </div>
                                <h2 class="text-primary mb-4">Política de protección de datos</h2>
                                <div>
                                    <span>
                                        <p><b>FINCAX</b> te informa sobre su Política de protección de datos respecto del tratamiento y protección de los datos de carácter personal de los usuarios y clientes que puedan ser recabados por la navegación o contratación de servicios a través del sitio Web <b>FREEFEE.ES</b>.</p>
                                        <p>En este sentido, el Titular garantiza el cumplimiento de la normativa vigente en materia de protección de datos personales, reflejada en la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y de Garantía de Derechos Digitales (LOPD GDD). Cumple también con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas (RGPD).</p>
                                        <p>El uso de sitio Web implica la aceptación de esta Política de protección de datos así como las condiciones incluidas en el Aviso Legal.</p>
                                        <p>&nbsp;</p>
                                        <p>Identidad del responsable</p>
                                        <ul>
                                            <li aria-level="1">Titular: <b>Israel Bernal Ruíz</b><b>    </b></li>
                                            <li aria-level="1">NIF/CIF: <b>27324300R</b></li>
                                            <li aria-level="1">Dirección: <b>Avda. Ronda de Triana, 14E 41010 Sevilla</b></li>
                                            <li aria-level="1">Correo electrónico: <a href="mailto:HOLA@FINCAX.ES"><b>HOLA@FINCAX.ES</b></a> <b>    </b></li>
                                            <li aria-level="1">Sitio Web: <b>FREEFEE.ES</b></li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h3><b>Principios aplicados en el tratamiento de datos</b></h3>
                                        <p>En el tratamiento de tus datos personales, el Titular aplicará los siguientes principios que se ajustan a las exigencias del nuevo reglamento europeo de protección de datos:</p>
                                        <ul>
                                            <li aria-level="1"><b>Principio de licitud, lealtad y transparencia:</b> El Titular siempre requerirá el consentimiento para el tratamiento de tus datos personales que puede ser para uno o varios fines específicos sobre los que te informará previamente con absoluta transparencia.</li>
                                            <li aria-level="1"><b>Principio de minimización de datos:</b> El Titular te solicitará solo los datos estrictamente necesarios para el fin o los fines que los solicita.</li>
                                            <li aria-level="1"><b>Principio de limitación del plazo de conservación:</b> Los datos se mantendrán durante el tiempo estrictamente necesario para el fin o los fines del tratamiento.</li>
                                            <li aria-level="1">El Titular te informará del plazo de conservación correspondiente según la finalidad. En el caso de suscripciones, el Titular revisará periódicamente las listas y eliminará aquellos registros inactivos durante un tiempo considerable.</li>
                                            <li aria-level="1"><b>Principio de integridad y confidencialidad:</b> Tus datos serán tratados de tal manera que su seguridad, confidencialidad e integridad esté garantizada. Debes saber que el Titular toma las precauciones necesarias para evitar el acceso no autorizado o uso indebido de los datos de sus usuarios por parte de terceros.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h3><b>Obtención de datos personales</b></h3>
                                        <p>Para navegar por <b>FREEFEE.ES </b>no es necesario que facilites ningún dato personal. Los casos en los que sí proporcionas tus datos personales son los siguientes:</p>
                                        <p><b>ELIMINA LOS QUE NO USES:</b></p>
                                        <ul>
                                            <li aria-level="1">Al contactar a través de los formularios de contacto o enviar un correo electrónico.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h3><b>Tus derechos</b></h3>
                                        <p>El Titular te informa que sobre tus datos personales tienes derecho a:</p>
                                        <ul>
                                            <li aria-level="1">Solicitar el acceso a los datos almacenados.</li>
                                            <li aria-level="1">Solicitar una rectificación o la cancelación.</li>
                                            <li aria-level="1">Solicitar la limitación de su tratamiento.</li>
                                            <li aria-level="1">Oponerte al tratamiento.</li>
                                            <li aria-level="1">Solicitar la portabilidad de tus datos.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p>El ejercicio de estos derechos es personal y por tanto debe ser ejercido directamente por el interesado, solicitándolo directamente al Titular, lo que significa que cualquier cliente, suscriptor o colaborador que haya facilitado sus datos en algún momento puede dirigirse al Titular y pedir información sobre los datos que tiene almacenados y cómo los ha obtenido, solicitar la rectificación de los mismos, solicitar la portabilidad de sus datos personales, oponerse al tratamiento, limitar su uso o solicitar la cancelación de esos datos en los ficheros del Titular.</p>
                                        <p>&nbsp;</p>
                                        <p>Para ejercitar tus derechos de acceso, rectificación, cancelación, portabilidad y oposición tienes que enviar un correo electrónico a <a href="mailto:HOLA@FREEFEE.ES"><b>HOLA@FREEFEE.ES</b></a> junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.</p>
                                        <p>&nbsp;</p>
                                        <p>Tienes derecho a la tutela judicial efectiva y a presentar una reclamación ante la autoridad de control, en este caso, la Agencia Española de Protección de Datos, si consideras que el tratamiento de datos personales que te conciernen infringe el Reglamento.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Finalidad del tratamiento de datos personales</b></h3>
                                        <p>Cuando te conectas al sitio Web para mandar un correo al Titular, te suscribes a su boletín o realizas una contratación, estás facilitando información de carácter personal de la que el responsable es el Titular. Esta información puede incluir datos de carácter personal como pueden ser tu dirección IP, nombre y apellidos, dirección física, dirección de correo electrónico, número de teléfono, y otra información. Al facilitar esta información, das tu consentimiento para que tu información sea recopilada, utilizada, gestionada y almacenada por superadmin.es , sólo como se describe en el Aviso Legal y en la presente Política de protección de datos.</p>
                                        <p>Los datos personales y la finalidad del tratamiento por parte del Titular es diferente según el sistema de captura de información:</p>
                                        <p>&nbsp;</p>
                                        <p><b>ELIMINA LOS QUE NO USES:</b></p>
                                        <ul>
                                            <li aria-level="1"><b>Formularios de contacto:</b> el Titular solicita datos personales entre los que pueden estar: nombre y apellidos y dirección de correo electrónicocon la finalidad de responder a tus consultas.</li>
                                            <li aria-level="1">Por ejemplo, el Titular utiliza esos datos para dar respuesta a tus mensajes, dudas, quejas, comentarios o inquietudes que puedas tener relativas a la información incluida en el sitio Web, los servicios que se prestan a través del sitio Web, el tratamiento de tus datos personales, cuestiones referentes a los textos legales incluidos en el sitio Web, así como cualquier otra consulta que puedas tener y que no esté sujeta a las condiciones del sitio Web o de la contratación.</li>
                                            <li aria-level="1"><b>Formularios de suscripción a contenidos:</b> el Titular solicita los siguientes datos personales: Nombre y apellidos y dirección de correo electrónico para gestionar la lista de suscripciones, enviar boletines, promociones y ofertas especiales.</li>
                                            <li aria-level="1">Los datos que facilites al Titular estarán ubicados en los servidores de The Rocket Science Group LLC d/b/a, con domicilio en EEUU. (Mailchimp).</li>
                                        </ul>
                                        <p>Existen otras finalidades por las que el Titular trata tus datos personales:</p>
                                        <ul>
                                            <li aria-level="1">Para garantizar el cumplimiento de las condiciones recogidas en el Aviso Legal y en la ley aplicable. Esto puede incluir el desarrollo de herramientas y algoritmos que ayuden a este sitio Web a garantizar la confidencialidad de los datos personales que recoge.</li>
                                            <li aria-level="1">Para apoyar y mejorar los servicios que ofrece este sitio Web.</li>
                                            <li aria-level="1">Para analizar la navegación. El Titular recoge otros datos no identificativos que se obtienen mediante el uso de cookies que se descargan en tu ordenador cuando navegas por el sitio Web cuyas caracterísiticas y finalidad están detalladas en la Política de Cookies .</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h3><b>Seguridad de los datos personales</b></h3>
                                        <p>Para proteger tus datos personales, el Titular toma todas las precauciones razonables y sigue las mejores prácticas de la industria para evitar su pérdida, mal uso, acceso indebido, divulgación, alteración o destrucción de los mismos.</p>
                                        <p>El sitio Web está alojado en <b>Clouding IO</b>. La seguridad de tus datos está garantizada, ya que toman todas las medidas de seguridad necesarias para ello. Puedes consultar su política de protección de datos para tener más información.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Contenido de otros sitios web</b></h3>
                                        <p>Las páginas de este sitio Web pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras web se comporta exactamente de la misma manera que si hubieras visitado la otra web.</p>
                                        <p>Estos sitios Web pueden recopilar datos sobre ti, utilizar cookies, incrustar un código de seguimiento adicional de terceros, y supervisar tu interacción usando este código.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Legitimación para el tratamiento de datos</b></h3>
                                        <p>La base legal para el tratamiento de tus datos es: el consentimiento.</p>
                                        <p>Para contactar con el Titular, suscribirte a un boletín o realizar comentarios en este sitio Web tienes que aceptar la presente Política de protección de datos.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Categorías de datos personales</b></h3>
                                        <p>Las categorías de datos personales que trata el Titular son:</p>
                                        <ul>
                                            <li aria-level="1">Datos identificativos.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <h3><b>Conservación de datos personales</b></h3>
                                        <p>Los datos personales que proporciones al Titular se conservarán hasta que solicites su supresión.</p>

                                        <p>&nbsp;</p>
                                        <h3><b>Derecho de supresión ("al olvido")</b></h3>
                                        Podrás ejercitar este derecho ante la persona responsable solicitando la supresión de sus datos de carácter personal cuando concurra alguna de las siguientes circunstancias:
                                        <ul>
                                            <li aria-level="1">Si tus datos personales ya no son necesarios en relación con los fines para los que fueron recogidos o tratados de otro modo.</li>
                                            <li aria-level="1">Si el tratamiento de tus datos personales se ha basado en el consentimiento que prestaste a la persona responsable, y retiras el mismo, siempre que el citado tratamiento no se base en otra causa que lo legitime.</li>
                                            <li aria-level="1">Si te has opuesto al tratamiento de tus datos personales al ejercitar el derecho de oposición en las siguientes circunstancias:
                                            <ul>
                                                <li aria-level="2">El tratamiento de la persona responsable se fundamentaba en el interés legítimo o en el cumplimiento de una misión de interés público, y no han prevalecido otros motivos para legitimar el tratamiento de tus datos.</li>
                                                <li aria-level="2">A que tus datos personales sean objeto de mercadotecnia directa, incluyendo la elaboración perfiles relacionada con la citada mercadotecnia.</li>
                                            </ul>
                                            <li aria-level="1">Si tus datos personales han sido tratados ilícitamente.</li>
                                            <li aria-level="1">Si tus datos personales deben suprimirse para el cumplimiento de una obligación legal establecida en el Derecho de la Unión o de los Estados miembros que se aplique a la persona responsable del tratamiento.</li>
                                            <li aria-level="1">Si los datos personales se han obtenido en relación con la oferta de servicios de la sociedad de la información mencionados en el artículo 8, apartado 1 (condiciones aplicables al tratamiento de datos de los menores en relación con los servicios de la sociedad de la información).</li>
                                            <li aria-level="1">Si desea eliminar los datos de nuestra base de datos debe de escribir a hola@fincax.es solicitando la baja del usuario.</li>
                                        </ul>
                                        Además, el RGPD al regular este derecho lo conecta de cierta forma con el denominado “derecho al olvido”, de manera que este derecho de supresión se amplíe de tal forma que la persona responsable del tratamiento que haya hecho públicos datos personales esté obligado a indicar a los responsables del tratamiento que estén tratando tales datos personales que supriman todo enlace a ellos, o las copias o réplicas de tales datos.
                                        No obstante, este derecho no es ilimitado, de tal forma que puede ser factible no proceder a la supresión cuando el tratamiento sea necesario para el ejercicio de la libertad de expresión e información, para el cumplimiento de una obligación legal, para el cumplimiento de una misión realizada en interés público o en el ejercicio de poderes públicos conferidos a la persona responsable, por razones de interés público, en el ámbito de la salud pública, con fines de archivo de interés público, fines de investigación científica o histórica o fines estadísticos, o para la formulación, el ejercicio o la defensa de reclamaciones.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Exactitud y veracidad de los datos personales</b></h3>
                                        <p>Te comprometes a que los datos facilitados al Titular sean correctos, completos, exactos y vigentes, así como a mantenerlos debidamente actualizados.</p>
                                        <p>Como Usuario del sitio Web eres el único responsable de la veracidad y corrección de los datos que remitas al sitio exonerando a el Titular de cualquier responsabilidad al respecto.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Aceptación y consentimiento</b></h3>
                                        <p>Como Usuario del sitio Web declaras haber sido informado de las condiciones sobre protección de datos de carácter personal, aceptas y consientes el tratamiento de los mismos por parte de el Titular en la forma y para las finalidades indicadas en esta Política de protección de datos.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Revocabilidad</b></h3>
                                        <p>Para ejercitar tus derechos de acceso, rectificación, cancelación, portabilidad y oposición tienes que enviar un correo electrónico a <b>HOLA@FREEFEE.ES</b> junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.</p>
                                        <p>El ejercicio de tus derechos no incluye ningún dato que el Titular esté obligado a conservar con fines administrativos, legales o de seguridad.</p>
                                        <p>&nbsp;</p>
                                        <h3><b>Cambios en la Política de protección de datos</b></h3>
                                        <p>El Titular se reserva el derecho a modificar la presente Política de protección de datos para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria.</p>
                                        <p>Estas políticas estarán vigentes hasta que sean modificadas por otras debidamente publicadas.</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

    @endsection
    @section('script')
        <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>

        <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
        
    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    @endsection
