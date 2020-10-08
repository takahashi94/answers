@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ $answers->links() }}
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">氏名</th>
                    <th scope="col">性別</th>
                    <th scope="col">年代</th>
                    <th scope="col">内容</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($answers as $item)
                  <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->fullName }}</td>
                    <td>{{ $item->gender_text }}</td>
                    <td>{{ $item->age_text }}</td>
                    <td>{{ $item->feedback }}</td>
                    <td><a href="{{ route('system.show', ['system' => $item->id]) }}"><button class="btn btn-primary">詳細</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
