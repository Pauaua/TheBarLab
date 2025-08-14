@extends('layout')

@section('content')
<div class="container py-5">
    <h1 class="text-center text-white mb-5">Preguntas Frecuentes (FAQ)</h1>
    
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="accordion shadow" id="accordionFAQ">
                <!-- Sección 1: Sobre los Cursos -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            ¿Cuánto dura el curso de Bartender Profesional?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            El curso de Bartender Profesional tiene una duración de 3 meses. Las clases se imparten de lunes a viernes en horarios flexibles (mañana o tarde) para adaptarse a tu disponibilidad.
                        </div>
                    </div>
                </div>

                <!-- Sección 2: Requisitos -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            ¿Qué requisitos necesito para inscribirme?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Los requisitos básicos son:
                            <ul>
                                <li>Ser mayor de 18 años</li>
                                <li>Completar el formulario de inscripción</li>
                                <li>No se requiere experiencia previa</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sección 3: Materiales -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            ¿Qué materiales necesito para el curso?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            La escuela proporciona todos los materiales necesarios para las prácticas, incluyendo:
                            <ul>
                                <li>Cristalería profesional</li>
                                <li>Herramientas de bar</li>
                                <li>Licores y otros ingredientes</li>
                                <li>Manual del curso</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sección 4: Certificación -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                            ¿El curso otorga alguna certificación?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Sí, al completar exitosamente el curso recibirás un certificado oficial de The Bar Lab que acredita tu formación como Bartender Profesional, reconocido en el sector de la hostelería.
                        </div>
                    </div>
                </div>

                <!-- Sección 5: Modalidades de Pago -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                            ¿Qué formas de pago aceptan?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                        <div class="accordion-body">
                            Ofrecemos varias modalidades de pago:
                            <ul>
                                <li>Pago completo con descuento</li>
                                <li>Cuotas mensuales</li>
                                <li>Tarjetas de crédito y débito</li>
                                <li>Transferencia bancaria</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
