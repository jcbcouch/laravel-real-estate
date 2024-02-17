<x-layout>

  <section id="register" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-user-plus"></i> Register</h4>
            </div>
            <div class="card-body">
                <form action="/users" method='POST'>
                  @csrf
                
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" required>
                  @error('username')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" required>
                  @error('email')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" class="form-control" required>
                  @error('password')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" required>
                  @error('password_confirmation')
                    <p>{{$message}}</p>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="is_admin">Admin User</label>
                  <input type="checkbox" name="is_admin">
                </div>

                <input type="submit"  class="btn btn-secondary btn-block">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</x-layout>