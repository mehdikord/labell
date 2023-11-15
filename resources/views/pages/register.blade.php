@extends('app')

@section('title')
    Register Page
@endsection
@section('data')

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card">
                <div class="card-body">
                    <div class="pt-2 pb-2">
                        <h4 class="text-center">
                            Register
                        </h4>
                    </div>
                    <div class="mt-3">
                        <form method="post" action="{{route('submit_register')}}">

                            <div class="pt-3 pb-2">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
{{--                            <div class="pt-3 pb-2">--}}
{{--                                <label>Email</label>--}}
{{--                                <input class="form-control" type="email" name="email">--}}
{{--                            </div>--}}
{{--                            <div class="pt-3 pb-2">--}}
{{--                                <label>Password</label>--}}
{{--                                <input class="form-control" type="password" name="password">--}}
{{--                            </div>--}}
{{--                            <div class="pt-3 pb-2">--}}
{{--                                <label>Re Password</label>--}}
{{--                                <input class="form-control" type="password" name="password_confirmation">--}}
{{--                            </div>--}}
                            @csrf
                            <div class="mt-3 mb-3 text-center">
                                <button type="submit" class="btn btn-primary w-50">Register</button>
                            </div>
                        </form>
                    </div>





                </div>
            </div>



        </div>

    </div>


@endsection

