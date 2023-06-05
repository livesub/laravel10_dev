@extends('layouts.head')

@section('content')

  <form action='{{ route('join.store') }}' method='POST' role='form' class='form__auth'>
    {!! csrf_field() !!}

    <div class='page-header'>
      <h4>
      회원가입
      </h4>
    </div>


    <div class='form-group'>
      <div>이메일
        <input name='user_id' id='user_id' type='email' class='form-control' value="{{ old('user_id') }}">
      </div>
    </div>
    
    @error('user_id')
        <span class='invalid-feedback' role='alert'>
            <strong>이메일 형식으로 입력 하세요.</strong>
        </span>
    @enderror

    <div class='form-group'>
      <div>이름
        <input name='user_name' id='user_name' type='text' class='form-control' value="{{ old('user_name') }}">
      </div>
    </div>

    @error('user_name')
        <span class='invalid-feedback' role='alert'>
            <strong>이름을 입력하세요.</strong>
        </span>
    @enderror


    <div class='form-group'>
      <div>비밀번호
        <input name='user_pw' id='user_pw' type='password' class='form-control'>
      </div>
    </div>

    @error('user_pw')
        <span class='invalid-feedback' role='alert'>
            <strong>비밀번호를 입력하세요.</strong>
        </span>
    @enderror

    <div class='form-group'>
      <div>비밀번호 획인
        <input name='user_pw_confirmation' id='user_pw_confirmation' type='password' class='form-control'>
      </div>
    </div>

    @error('user_pw')
        <span class='invalid-feedback' role='alert'>
            <strong>비밀번호 확인를 입력하세요.</strong>
        </span>
    @enderror

    <div class='form-group'>
      <div>전화번호
        <input name='user_phone' id='user_phone' type='text' class='form-control' value="{{ old('user_phone') }}">
      </div>
    </div>

    @error('user_phone')
        <span class='invalid-feedback' role='alert'>
            <strong>전화번호를 입력하세요.</strong>
        </span>
    @enderror

    <div class='form-group' style='margin-top: 2em;'>
      <button class='btn btn-primary btn-lg btn-block' type='submit'>
        저장
      </button>
    </div>
  </form>


@endsection