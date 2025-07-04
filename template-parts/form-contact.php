    <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Contáctanos</h6>
                        <h2 class="mb-4">Llena el formulario, llámanos o escríbenos por nuestros canales de comunicación</h1>
                                  <p class="mb-2 text-dark"><i class="fa fa-phone-alt me-3 text-dark"></i>+56 75 2 414833 / +56 9 42651531</p>
                    <a href="mailto:intraterra@intraterra.cl" class="mb-2 d-block text-black">
                        <i class="fa fa-envelope me-3"></i>intraterra@intraterra.cl
                    </a>
                        <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="cf-name" required class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" name="cf-email" required class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" name="cf-phone" required class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Teléfono</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" required name="cf-message" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Enviar Mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>