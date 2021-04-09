<section id="duvidas" class="contact">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif  
        <div class="section-title">
            <h2>Exponha as suas Dúvidas</h2>
        </div>
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{route('formulario.store')}}" method="POST" role="form" class="php-email-form2">
                <div class="form-row">
                 @csrf

                    <div class="col-lg-6 form-group">
                        <input type="text" name="nome" class="form-control" id="nome" value ="{{old('nome')}}"placeholder="Nome Completo" data-rule="minlen:4" data-msg="Por favor Insira pelo menos 4 caracteres" />
                        <div class="validate"></div>
                    </div>

                    <div class="col-lg-6 form-group">
                        <input type="email" class="form-control" name="email" id="email"value ="{{old('email')}}" placeholder="Email" data-rule="email" data-msg="por favor digite um email válido" />
                        <div class="validate"></div>
                    </div>

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="assunto" id="assunto" value ="{{old('assunto')}}"placeholder="Assunto" data-rule="minlen:1" data-msg="Insira pelo menos 1 caracter " />
                        <div class="validate"></div>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="menssagem" id="menssagem" value ="{{old('menssagem')}}"rows="5" data-rule="required" data-msg="Por favor escreva algo para nós" placeholder="Mensagem"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">A sua mensagem foi enviada com sucesso!</div>
                      </div>
               
                    <div class="text-center">
                        <button type="submit">Enviar Menssagem</button>
                       
                    </div> 
                    <p></p>
                    @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <ul>
                                    <li>{!! \Session::get('success') !!}</li>
                                </ul>
                            </div>
                        @endif

                </div>     
            </form>
            </div>
        </div>
    </div>
</section>
</main>