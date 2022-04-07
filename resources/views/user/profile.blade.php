@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="profile-user">
                    @if ($user->image)
                        <div class="container-avatar">
                            <img src="{{ route('user.avatar', ['filename' => $user->image]) }}" alt="" class="avatar" />
                        </div>
                    @endif
                    <div class="user-info">
                        <h1>{{ '@'.$user->nick }}</h1>
                        <h2>{{ $user->name . ' ' . $user->last_name }}</h2>
                        <span>Se Unio {{ \FormatTime::LongTimeFilter($user->created_at) }}</span>
                    </div>
                </div>
                <hr>

                <div class="clearfix">
                    @foreach ($user->images as $image)
                        @include('includes.image', ['image' => $image])
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
