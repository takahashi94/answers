@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('システムへのご意見をお聞かせください') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('answer.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fullName" class="col-md-4 col-form-label text-md-right">{{ __('氏名') }}</label>

                            <div class="col-md-6">
                                <input id="fullName" type="text" class="form-control @error('fullName') is-invalid @enderror" name="fullName" value="{{ old('fullName') }}">

                                @error('fullName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('性別') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-check-inline">
                                    <input id="gender" type="radio" class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="1" checked>
                                    <label class="form-check-label">男性</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input id="gender" type="radio" class="form-check-input @error('gender') is-invalid @enderror" name="gender" value="2">
                                    <label class="form-check-label">女性</label>
                                </div>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age_id" class="col-md-4 col-form-label text-md-right">{{ __('年齢') }}</label>

                            <div class="col-md-6">
                                <select name="age_id" id="age_id" class="form-control">
                                  <option value="">選択してください</option>
                                  @foreach ($ages as $item)
                                      <option value="{{ $item->sort }}">{{ $item->age }}</option>
                                  @endforeach
                                </select>

                                @error('age_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                            <label for="is_send_email" class="col-md-4 col-form-label text-md-right">{{ __('メール送信可否') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="hidden" name="is_send_email" value="0">
                                    <input type="checkbox" name="is_send_email" id="is_send_email" value="1">
                                    <label for="is_send-email" class="form-check-label">送信を許可します</label>
                                </div>

                                @error('is_send_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                          <label for="feedback" class="col-md-4 col-form-label text-md-right">{{ __('ご意見') }}</label>

                          <div class="col-md-6">
                            <textarea class="form-control @error('feedback') is-invalid @enderror" name="feedback" value="{{ old('feedback') }}" id="feedback" cols="20" rows="5"></textarea>

                              @error('feedback')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
