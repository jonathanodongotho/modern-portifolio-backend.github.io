<div>

    <div class="py-5">
        <h2>
            Hire Us Here
        </h2>
    </div>
    <form class="row g-3" wire:submit="saveHire">
        <div class="col-md-6">
            <input type="email" wire:model="email" placeholder="Your email" class="form-control" id="inputEmail4">
        </div>
        <small class="">
            @error('email') <span class="error text-danger  "><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
        </small>
        <div class="col-md-6">
            <input type="text" wire:model="name" placeholder="Your full name" class="form-control" id="name">
        </div>
        <small class="">
            @error('name') <span class="error text-danger " text-danger  ><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
        </small>
        <div class="col-12">
            <input type="text" wire:model="contact" class="form-control" id="contact" placeholder="Your contact">
        </div>
        <small class="">
            @error('contact') <span class="err text-danger  or"><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
        </small>
        <div class="col-md-4">
            <select id="inputState" wire:model="service" class="form-select">
                <option value="" selected disabled>Service</option>
                <option value="wed design">Web Design</option>
                <option value="CCTV">CCTV Camera Installation</option>
                <option value="networking">Network Installation</option>
                <option value="computer maintenance">Computer Maintenance</option>
                <option value="project invitation">Invite for Project</option>
            </select>
        </div>
        <small class="">
            @error('service') <span class="err text-danger  or"><i class="fa-solid fa-circle-xmark me-2"></i>{{ $message }}</span> @enderror 
        </small>
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
