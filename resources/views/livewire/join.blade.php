<div>
    <div class="py-5">
        <h2>
            We are Glad to have you Onboard!
        </h2>
    </div>
    <form class="row g-3" action="" method="post">
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
                <option value="" selected disabled>Department</option>
                <option value="">FrontEnd designer</option>
                <option value="">BackEnd developer</option>
                <option value="">Fullstack developer</option>
                <option value="">Learner</option>
            </select>
        </div>
        <div class="col-12 d-flex justify-content-between ">
            <button type="submit" class="btn btn-outline-secondary ">Submit</button>
            <a href="{{ url('/') }}" class="text-secondary ">Go back</a>
        </div>
    </form>
</div>
