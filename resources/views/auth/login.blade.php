<x-layout>

    <div class="container-fluid body-login">
        <div class="row align-self-center height-login ">
          <div class="col-lg-10 col-xl-9 m-auto">
            <div class="card card-signin flex-row my-5 shadow">
              <div class="card-img-left2 d-none d-md-flex">
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">Accedi</h5>
                <form method="POST" action="{{route('login')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                          <label for="userMail" class="form-label">Indirizzo Mail:</label>
                          <input type="email" name="email" class="form-control" id="userMail">
                        </div>
                        <div class="mb-3">
                          <label for="userPass" class="form-label">Password:</label>
                          <input type="password" name="password" class="form-control" id="userPass">
                        </div>
                        <button type="submit" class="btn btn-primary">Accedi</button>
                        <p class="mt-2">
                          Non sei ancora iscritto? <a class="tc-accent" href="{{'register'}}">Registrati</a>
                        </p>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </x-layout>
