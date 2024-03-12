<div>

    <div class="py-5">
        <h2>
            Make an Appointment and We shall Call You
        </h2>
    </div>
    <!-- <form class="row g-3" action="" method="post">
        <div class="col-md-6">
            <input type="email" placeholder="Your email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <input type="text" placeholder="Your full name" class="form-control" id="name">
        </div>
        <div class="col-12">
            <input type="text" class="form-control" id="contact" placeholder="Your contact">
        </div>
        <div class="col-md-4">
            <select name="" class="form-select " id="">
                <option value="" selected disabled>Via..</option>
                <option value="">Zoom</option>
                <option value="">Phone Call</option>
                <option value="">WhatsApp Call</option>
                <option value="">Meet Up</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-between ">
            <button type="submit" class="btn btn-outline-secondary ">Submit</button>
            <a href="{{ url('/') }}" class="text-secondary ">Go back</a>
        </div>
    </form> -->

    <form class="row g-3" wire:submit="saveAppoint">
        <div class="col-md-6">
            <input type="email" wire:model="email" placeholder="Your email" class="form-control" id="inputEmail4">
            <small class="">
                @error('email') <span class="error text-danger  "><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
            </small>
        </div>
        
        <div class="col-md-6">
            <input type="text" wire:model="name" placeholder="Your full name" class="form-control" id="name">
            <small class="">
                @error('name') <span class="error text-danger " text-danger  ><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
            </small>
        </div>
        
        <div class="col-12">
            <input type="text" wire:model="contact" class="form-control" id="contact" placeholder="Your contact">
            <small class="">
                @error('contact') <span class="err text-danger  or"><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
            </small>
        </div>
        
        <div class="col-md-4">
            <select name="" wire:model="platform" class="form-select " id="">
                    <option value="" selected disabled>Via..</option>
                    <option value="zoom">Zoom</option>
                    <option value="phone">Phone Call</option>
                    <option value="whatsapp call">WhatsApp Call</option>
                    <option value="meet">Meet Up</option>
            </select>
            <small class="">
                @error('platform') <span class="err text-danger  or"><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
            </small>
        </div>
        
        <div class="col-12 d-flex justify-content-between ">
            <button type="submit" class="btn btn-outline-secondary ">Submit</button>
            <a href="{{ url('/') }}" class="text-secondary ">Go back</a>
        </div>
        @if (session('success'))
            <div class="bg-white text-success py-2">
                <small>
                    <b><i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}</b>
                </small>
            </div>
        @endif
    </form>

</div>