<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form 2/3</title>
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css')}}" />
    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}" />
  </head>
  <body>
    <section class="container shadow-lg mt-5 mx-auto form-container">
      <hr class="mb-3" id="progress2" />
      <h4 class="text-muted mb-2">2/3</h4>
      <h3 class="mb-5 fw-bolder section-title">
        Please provide your account details
      </h3>
      <form action="/storeit2" method="POST">
        @csrf
        @if(session('existUser'))
        <div>
          <p class="text-danger">
          {{ session('existUser') }}
          </p>
        </div>
        @endif
        <input
          onchange="isEmpty2()"
          class="form-control form-control-lg mb-4 custom-form-control"
          type="text"
          name="userName"
          placeholder="User Name"
          aria-label=".form-control-lg example"
          required
        />
        @if(session('wrong'))
        <div>
          <p class="text-danger">
          {{ session('wrong') }}
          </p>
        </div>
        @endif
        <input
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
          name="password"
          onchange="isEmpty2()"
          id="initial-password"
          class="form-control form-control-lg mb-4 custom-form-control"
          type="password"
          placeholder="Password"
          aria-label=".form-control-lg example"
          required
        />
        <input
          name="confirmPassword"
          onchange="isEmpty2()"
          id="confirm-password"
          class="form-control form-control-lg mb-4 custom-form-control"
          type="password"
          placeholder="Confirm password"
          aria-label=".form-control-lg example"
          required
        />
        @if(session('status'))
        <div>
          <p class="text-danger">
          {{ session('status') }}
          </p>
        </div>
        @endif
        <hr class="second-form-hr" />
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button
            class="btn btn-secondary border-0 me-md-2 form-prev-btn"
            type="button"
            onclick="location.href='{{ url('/') }}'"
          >
            Prev
          </button>
          <button
            id="next-btn2"
            class="btn btn-primary form-next-btn"
            type="submit"
            disabled
          >
            Next
          </button>
        </div>
      </form>
    </section>

   <!-- bootstrap js link  -->
   <script src="{{ asset('/js/bootstrap.bundle.min.js')}} "></script>
     <!-- custom js  -->
    <script src="{{ asset('/js/script.js')}} "></script>
  </body>
</html>
