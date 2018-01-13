@extends('default')

@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <span class="login100-form-title p-b-26">
        {{ $peserta[0]['nama'] }}
      </span>
      <div class="middle-span">
        <span>{{ $peserta[0]['asal_sekolah'] }}</span> 
      </div>
      <div class="middle-span">
        <span>
        <!-- @if ($peserta[0]['login'] === 1)
          Sudah Register
        @else
          Belum Register
        @endif -->
        @if ($peserta[0]['login'] == 'true')
          Sudah Register
        @else
          Belum Register
        @endif
        </span> 
      </div>
      <div class="container-login100-form-btn">
        <a href="/">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button class="login100-form-btn" >
              Back
            </button>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


<div id="dropDownSelect1"></div>
@endsection