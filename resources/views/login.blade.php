@extends('default')

@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form id="formPeserta" class="login100-form validate-form">
        {{ csrf_field() }}
        <span class="login100-form-title p-b-26">
          Login Peserta
        </span>
        <span class="login100-form-title p-b-48">
          <i class="zmdi zmdi-font"></i>
        </span>

        <div class="wrap-input100 validate-input" data-validate = "Berisi 5 Angka">
          <input id="no_peserta" class="input100" type="text" name="no_peserta" placeholder="No.Peserta">
          <label for=""></label>
          <!-- <span class="focus-input100" data-placeholder="No. Peserta"></span> -->
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn">
              Login
            </button>
          </div>
        </div>

        <div class="text-center p-t-115">
          <span id="fail" class="txt1">
            
          </span>

          <a class="txt2" href="#">
          </a>
        </div>
      </form>
    </div>
  </div>
</div>


<div id="dropDownSelect1"></div>
@endsection