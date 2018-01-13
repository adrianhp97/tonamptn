@extends('default')

@section('content')
<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <span class="login100-form-title p-b-26">
        {{ $peserta[0]['nama'] }}
      </span>
      <div>
        <span>{{ $peserta[0]['asal_sekolah'] }}</span> 
      </div>
      <div>
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
    </div>
  </div>
</div>


<div id="dropDownSelect1"></div>
@endsection