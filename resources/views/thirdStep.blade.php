<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form 3/3</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" />
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}" />
  </head>
  <body>
    <section class="container shadow-lg mt-5 mx-auto form-container">
      <hr class="mb-3" id="progress3" />
      <h4 class="text-muted mb-2">3/3</h4>
      <h3 class="mb-5 fw-bolder section-title">Summary</h3>
      <section class="details">
        <div id="personal-details" class="py-4 d-flex ">
          <div class="rounded-numbering me-5">
            <h4 class="text-center p-2 border border-3 rounded-circle">1</h4>
          </div>
          <div>
            <h4 class="text-primary pb-2">Personal Details</h4>
            <p><strong>First Name</strong>: {{ session('firstName')}}</p>
            <p><strong>Last Name</strong>: {{ session('lastName')}}</p>
            <p><strong>Email</strong>: {{ session('email')}}</p>
            <p><strong>Country</strong>: {{ session('country')}}</p>
          </div>
        </div>
        <div id="account-details" class="my-5 d-flex ">
          <div class="rounded-numbering me-5">
            <h4 class="text-center p-2 border border-3 rounded-circle">2</h4>
          </div>
          <div>
            <h4 class="text-primary pb-2">Account Details</h4>
            <p><strong>User Name</strong>: {{session('userName')}}</p>
            <p><strong>Password</strong>:  {{session('password')}}</p>
          </div>
        </div>
        <hr class="mt-3" />
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button
            class="btn btn-secondary border-0 me-md-2 form-prev-btn"
            type="button"
            onclick="location.href='{{ url('secondStep') }}'"
          >
            Prev
          </button>
          <form action="/finalStore" method="get">
          @csrf
            <button
              id="next-btn2"
              class="btn btn-primary form-next-btn"
              type="submit"
            >
              Submit <i class="fas fa-check"></i>               
            </button>
          </form>    
        </div>
      </section>
    </section>
    <!-- bootstrap js link  -->
   <script src="{{ asset('/js/bootstrap.bundle.min.js')}} "></script>
    <!-- fontawsome kit  -->
    <script src="https://kit.fontawesome.com/cf17740b74.js" crossorigin="anonymous"></script>
  </body>
</html>
