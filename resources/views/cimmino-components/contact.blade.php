{{-- Code For Eventually Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<section class="mb-4">
    <div class="container border border-success rounded" 
                        data-aos="flip-down"
                        data-aos-easing="ease-out-cubic"
                        data-aos-duration="1200">
        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center text-white my-4 border border-success rounded bg-success">Contact me</h2>
        <div class="row">
            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form name="contact-form" action={{route('send')}} method="POST">
                @csrf
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="name" class="">Il tuo nome</label>
                                <input type="text" id="name" name="name" class="form-control"   @error('name') border-danger @enderror value="{{old('name')}}">
                                
                            </div>
                        </div>
                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <label for="email" class="">La tua email</label>
                                <input type="text" id="email" name="email" class="form-control"  @error('email') border-danger @enderror value="{{old('email')}}">
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form mb-0">
                                <label for="subject" class="">Oggetto dell email</label>
                                <input type="text" id="subject" name="subject" class="form-control"  @error('subject') border-danger @enderror  value="{{old('subject')}}">
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-12">
                            <div class="md-form">
                                <label for="message">Il tuo Messaggio</label>
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"  @error('message') border-danger @enderror  value="{{old('message')}}"></textarea>
                                
                            </div>
                        </div>
                    </div>
                    <!--Grid row-->
                    <div class="row">
                        {{-- Grid Column --}}
                        <div class="text-center col-12 mb-3 mt-2">
                            <button type="submit" class="btn btn-success" >Send</button>
                        </div>
                    </div>
                    
                </form>
                
            </div>
            <!--Grid column-->
            <div class="col-10 text-center">
                <ul class="list-unstyled mb-1">
                    <li><i class="fas fa-map-marker-alt fa-2x"></i>
                        <p>Napoli,80024,Italia</p>
                    </li>
                    <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                        <p>cimminomicheleportfolio@gmail.com</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>