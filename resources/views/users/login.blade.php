
<x-layout>
  <section id="login" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-sign-in-alt"></i> Login</h4>
            </div>
            <div class="card-body">
              <form action="/users/authenticate" method="POST">
                @csrf
                <div class="form-group">
                  <label for="username">Email</label>
                  <input type="text" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" required>
                </div>

                <input type="submit" value="Login" class="btn btn-secondary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout>