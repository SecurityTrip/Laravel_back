@extends('layout')

@section('title')Регистрация@endsection

@section('content')

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Регистриция</h3>
                            <form method="post" action="/registration/check">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="username" class="form-control form-control-lg" />
                                            <label class="form-label"  for="username">Логин</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4">

                                        <div class="form-outline">
                                            <input type="text" id="email" class="form-control form-control-lg" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="email" id="password1" class="form-control form-control-lg" />
                                            <label class="form-label" for="password1">Пароль</label>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mb-4 pb-2">

                                        <div class="form-outline">
                                            <input type="tel" id="password2" class="form-control form-control-lg" />
                                            <label class="form-label" for="password2">Повторите пароль</label>
                                        </div>

                                    </div>
                                </div>



                                <div class="mt-4 pt-2">
                                    <input class="btn btn-primary btn-lg" type="submit" value="Зарегистрироваться" />
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
