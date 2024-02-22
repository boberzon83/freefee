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
                                        <p><strong>FINCAX</strong> te informa sobre su Política de protección de datos respecto del tratamiento y protección de los datos de carácter personal de los usuarios y clientes que puedan ser recabados por la navegación o contratación de servicios a través del sitio Web <strong>FREEFEE.ES</strong>.</p>
                                        <p>En este sentido, el Titular garantiza el cumplimiento de la normativa vigente en materia de protección de datos personales, reflejada en la Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y de Garantía de Derechos Digitales (LOPD GDD). Cumple también con el Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo de 27 de abril de 2016 relativo a la protección de las personas físicas (RGPD).</p>
                                        <p>El uso de sitio Web implica la aceptación de esta Política de protección de datos, así como las condiciones incluidas en el Aviso Legal.</p>
                                        <p>&nbsp;</p>
                                        <p>Identidad del responsable</p>
                                        <ul>
                                        <li>Titular: <strong>Manuel Mejías Naranjo</strong></li>
                                        <li>NIF/CIF: <strong>28748286B</strong></li>
                                        <li>Dirección: <strong>Avda. Ronda de Triana, 14E 41010 Sevilla</strong></li>
                                        <li>Correo electrónico: <a href="mailto:HOLA@FINCAX.ES"><strong>HOLA@FINCAX.ES</strong></a></li>
                                        <li>Sitio Web: <strong>FREEFEE.ES</strong></li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p><strong>Principios aplicados en el tratamiento de datos</strong></p>
                                        <p>En el tratamiento de tus datos personales, el Titular aplicará los siguientes principios que se ajustan a las exigencias del nuevo reglamento europeo de protección de datos:</p>
                                        <ul>
                                        <li><strong>Principio de licitud, lealtad y transparencia:</strong> El Titular siempre requerirá el consentimiento para el tratamiento de tus datos personales que puede ser para uno o varios fines específicos sobre los que te informará previamente con absoluta transparencia.</li>
                                        <li><strong>Principio de minimización de datos:</strong> El Titular te solicitará solo los datos estrictamente necesarios para el fin o los fines que los solicita.</li>
                                        <li><strong>Principio de limitación del plazo de conservación:</strong> Los datos se mantendrán durante el tiempo estrictamente necesario para el fin o los fines del tratamiento.</li>
                                        <li>El Titular te informará del plazo de conservación correspondiente según la finalidad. En el caso de suscripciones, el Titular revisará periódicamente las listas y eliminará aquellos registros inactivos durante un tiempo considerable.</li>
                                        <li><strong>Principio de integridad y confidencialidad:</strong> Tus datos serán tratados de tal manera que su seguridad, confidencialidad e integridad esté garantizada. Debes saber que el Titular toma las precauciones necesarias para evitar el acceso no autorizado o uso indebido de los datos de sus usuarios por parte de terceros.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p><strong>Obtención de datos personales</strong></p>
                                        <p>Para navegar por <strong>FREEFEE.ES </strong>no es necesario que facilites ningún dato personal. Los casos en los que sí proporcionas tus datos personales son los siguientes:</p>
                                        <ul>
                                        <li>Al contactar a través de los formularios de contacto o enviar un correo electrónico.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p><strong>Tus derechos</strong></p>
                                        <p>El Titular te informa que sobre tus datos personales tienes derecho a:</p>
                                        <ul>
                                        <li>Solicitar el acceso a los datos almacenados.</li>
                                        <li>Solicitar una rectificación o la cancelación.</li>
                                        <li>Solicitar la limitación de su tratamiento.</li>
                                        <li>Oponerte al tratamiento.</li>
                                        <li>Solicitar la portabilidad de tus datos.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p>El ejercicio de estos derechos es personal y por tanto debe ser ejercido directamente por el interesado, solicitándolo directamente al Titular, lo que significa que cualquier cliente, suscriptor o colaborador que haya facilitado sus datos en algún momento puede dirigirse al Titular y pedir información sobre los datos que tiene almacenados y cómo los ha obtenido, solicitar la rectificación de los mismos, solicitar la portabilidad de sus datos personales, oponerse al tratamiento, limitar su uso o solicitar la cancelación de esos datos en los ficheros del Titular.</p>
                                        <p>&nbsp;</p>
                                        <p>Para ejercitar tus derechos de acceso, rectificación, cancelación, portabilidad y oposición tienes que enviar un correo electrónico a <a href="mailto:HOLA@FREEFEE.ES"><strong>HOLA@FREEFEE.ES</strong></a> junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.</p>
                                        <p>&nbsp;</p>
                                        <p>Tienes derecho a la tutela judicial efectiva y a presentar una reclamación ante la autoridad de control, en este caso, la Agencia Española de Protección de Datos, si consideras que el tratamiento de datos personales que te conciernen infringe el Reglamento.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Finalidad del tratamiento de datos personales</strong></p>
                                        <p>Cuando te conectas al sitio Web para mandar un correo al Titular, te suscribes a su boletín o realizas una contratación, estás facilitando información de carácter personal de la que el responsable es el Titular. Esta información puede incluir datos de carácter personal como pueden ser tu dirección IP, nombre y apellidos, dirección física, dirección de correo electrónico, número de teléfono, y otra información. Al facilitar esta información, das tu consentimiento para que tu información sea recopilada, utilizada, gestionada y almacenada por freefee.es, sólo como se describe en el Aviso Legal y en la presente Política de protección de datos.</p>
                                        <p>Los datos personales y la finalidad del tratamiento por parte del Titular se utilizará para:</p>
                                        <p>&nbsp;</p>
                                        <ul>
                                        <li><strong>Formularios de contacto:</strong> el Titular solicita datos personales entre los que pueden estar: nombre y apellidos y teléfono. Los datos personales introducidos por usted serán recopilados y almacenados exclusivamente para fines internos y propios.</li>
                                        </ul>
                                        <p>La finalidad del registro del interesado mediante la aportación voluntaria de datos de carácter personal es ofrecerle contenidos o servicios que solo pueden ofrecerse a usuarios registrados, así como cualquier otra consulta que puedas tener y que no esté sujeta a las condiciones del sitio Web o de la contratación.</p>
                                        <ul>
                                        <li>Los datos que facilites al Titular estarán ubicados en FREEFEE</li>
                                        </ul>
                                        <p><strong>Seguridad de los datos personales</strong></p>
                                        <p>Para proteger tus datos personales, el Titular toma todas las precauciones razonables y sigue las mejores prácticas de la industria para evitar su pérdida, mal uso, acceso indebido, divulgación, alteración o destrucción de los mismos.</p>
                                        <p>El sitio Web está alojado en <strong>Clouding IO</strong>. La seguridad de tus datos está garantizada, ya que toman todas las medidas de seguridad necesarias para ello. Puedes consultar su política de protección de datos para tener más información.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Contenido de otros sitios web</strong></p>
                                        <p>Las páginas de este sitio Web pueden incluir contenido incrustado (por ejemplo, vídeos, imágenes, artículos, etc.). El contenido incrustado de otras web se comporta exactamente de la misma manera que si hubieras visitado la otra web.</p>
                                        <p>Estos sitios Web pueden recopilar datos sobre ti, utilizar cookies, incrustar un código de seguimiento adicional de terceros, y supervisar tu interacción usando este código.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Legitimación para el tratamiento de datos</strong></p>
                                        <p>La base legal para el tratamiento de tus datos es: el consentimiento.</p>
                                        <p>Para contactar con el Titular, suscribirte a un boletín o realizar comentarios en este sitio Web tienes que aceptar la presente Política de protección de datos.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Categorías de datos personales</strong></p>
                                        <p>Las categorías de datos personales que trata el Titular son:</p>
                                        <ul>
                                        <li>Datos identificativos.</li>
                                        </ul>
                                        <p>&nbsp;</p>
                                        <p><strong>Conservación de datos personales</strong></p>
                                        <p>Los datos personales que proporciones al Titular se conservarán hasta que solicites su supresión.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Derecho de supresión ("al olvido")</strong></p>
                                        <p>Podrás ejercitar este derecho ante la persona responsable solicitando la supresión de sus datos de carácter personal cuando concurra alguna de las siguientes circunstancias:</p>
                                        <ul>
                                        <li>Si tus datos personales ya no son necesarios en relación con los fines para los que fueron recogidos o tratados de otro modo.</li>
                                        <li>Si el tratamiento de tus datos personales se ha basado en el consentimiento que prestaste a la persona responsable, y retiras el mismo, siempre que el citado tratamiento no se base en otra causa que lo legitime.</li>
                                        <li>Si te has opuesto al tratamiento de tus datos personales al ejercitar el derecho de oposición en las siguientes circunstancias:
                                        <ul>
                                        <li>El tratamiento de la persona responsable se fundamentaba en el interés legítimo o en el cumplimiento de una misión de interés público, y no han prevalecido otros motivos para legitimar el tratamiento de tus datos.</li>
                                        <li>A que tus datos personales sean objeto de mercadotecnia directa, incluyendo la elaboración perfiles relacionada con la citada mercadotecnia.</li>
                                        </ul>
                                        </li>
                                        <li>Si tus datos personales han sido tratados ilícitamente.</li>
                                        <li>Si tus datos personales deben suprimirse para el cumplimiento de una obligación legal establecida en el Derecho de la Unión o de los Estados miembros que se aplique a la persona responsable del tratamiento.</li>
                                        <li>Si los datos personales se han obtenido en relación con la oferta de servicios de la sociedad de la información mencionados en el artículo 8, apartado 1 (condiciones aplicables al tratamiento de datos de los menores en relación con los servicios de la sociedad de la información).</li>
                                        <li>Si desea eliminar los datos de nuestra base de datos debe de escribir a hola@fincax.es solicitando la baja del usuario.</li>
                                        </ul>
                                        <p>Además, el RGPD al regular este derecho lo conecta de cierta forma con el denominado “derecho al olvido”, de manera que este derecho de supresión se amplíe de tal forma que la persona responsable del tratamiento que haya hecho públicos datos personales esté obligado a indicar a los responsables del tratamiento que estén tratando tales datos personales que supriman todo enlace a ellos, o las copias o réplicas de tales datos. No obstante, este derecho no es ilimitado, de tal forma que puede ser factible no proceder a la supresión cuando el tratamiento sea necesario para el ejercicio de la libertad de expresión e información, para el cumplimiento de una obligación legal, para el cumplimiento de una misión realizada en interés público o en el ejercicio de poderes públicos conferidos a la persona responsable, por razones de interés público, en el ámbito de la salud pública, con fines de archivo de interés público, fines de investigación científica o histórica o fines estadísticos, o para la formulación, el ejercicio o la defensa de reclamaciones.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Exactitud y veracidad de los datos personales</strong></p>
                                        <p>Te comprometes a que los datos facilitados al Titular sean correctos, completos, exactos y vigentes, así como a mantenerlos debidamente actualizados.</p>
                                        <p>Como Usuario del sitio Web eres el único responsable de la veracidad y corrección de los datos que remitas al sitio exonerando a el Titular de cualquier responsabilidad al respecto.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Aceptación y consentimiento</strong></p>
                                        <p>Como Usuario del sitio Web declaras haber sido informado de las condiciones sobre protección de datos de carácter personal, aceptas y consientes el tratamiento de los mismos por parte de el Titular en la forma y para las finalidades indicadas en esta Política de protección de datos.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Revocabilidad</strong></p>
                                        <p>Para ejercitar tus derechos de acceso, rectificación, cancelación, portabilidad y oposición tienes que enviar un correo electrónico a <strong>HOLA@FREEFEE.ES</strong> junto con la prueba válida en derecho como una fotocopia del D.N.I. o equivalente.</p>
                                        <p>El ejercicio de tus derechos no incluye ningún dato que el Titular esté obligado a conservar con fines administrativos, legales o de seguridad.</p>
                                        <p>&nbsp;</p>
                                        <p><strong>Cambios en la Política de protección de datos</strong></p>
                                        <p>El Titular se reserva el derecho a modificar la presente Política de protección de datos para adaptarla a novedades legislativas o jurisprudenciales, así como a prácticas de la industria.</p>
                                        <p>Estas políticas estarán vigentes hasta que sean modificadas por otras debidamente publicadas.</p>
                                        <p>&nbsp;</p>
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
