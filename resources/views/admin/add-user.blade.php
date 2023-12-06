@extends('layouts.user_type.auth')

@section('title', 'Manajemen User')

@section('content')

  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 mx-3 border-radius-lg" style="background-image: url('../assets/img/curved-images/curved14.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Tambahkan Pengguna</h5>
            </div>
            <div class="card-body">
              <form role="form text-left" method="POST" action="/user-management/add">
                @csrf
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" name="name" id="name" aria-label="Name" aria-describedby="name" value="{{ old('name') }}">
                  @error('name')
                    <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Phone Number" name="phone" id="phone" aria-label="Phone" aria-describedby="phone" value="{{ old('phone') }}">
                  @error('phone')
                  <p class="text-danger text-xs mt-2">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <button type="button" class="btn btn-primary btn-generate-password">Buat password</button>
                </div>
                <input type="text" class="form-control" placeholder="Password" name="password" id="password" aria-label="password" aria-describedby="password" value="{{ old('password') }}">
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Konfirmasi</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const generateButton = document.querySelector('.btn-generate-password');
        const generatedPasswordInput = document.querySelector('#password');

        generateButton.addEventListener('click', function () {
            const randomPassword = generateRandomPassword();
            generatedPasswordInput.value = randomPassword;
        });
        function generateRandomPassword() {
            const length = 14;
            const charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?";
            let password = "";
            for (let i = 0; i < length; i++) {
                const randomIndex = Math.floor(Math.random() * charset.length);
                password += charset.charAt(randomIndex);
            }
            return password;
        }
    });
</script>

@endsection

