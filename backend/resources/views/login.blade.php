@extends('layout')

@section('title')Вход@endsection


@section('content')
    <div class="text-center">
    <div class="row align-items-start">
        <div class="col">
        </div>
        <div class="col">
            <div class="container" style="margin-top: 5%">
                <main class="form-signin">
                    <form method="post" action="/login/check">
                        @csrf
                        <img class="mb-4" src="../../public/" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Вход</h1>

                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating" style="margin-top: 7px">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="********">
                            <label for="floatingPassword">Пароль</label>
                        </div>

                        <div class="checkbox mb-3" style="margin-top: 10px">
                            <label>
                                <input type="checkbox" value="remember-me"> Запомнить меня
                            </label>
                        </div>
                        <div style="margin-bottom: 7px">
                            <label for="">Ещё не зарегисртрованны?</label>
                            <a href="registration">Зарегистрироваться</a>
                        </div>
                        <button class="w-100 btn btn-lg btn-outline-success" type="submit">Войти</button>
                        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                    </form>
                </main>
            </div>

        </div>
        <div class="col">

        </div>
    </div>
    </div>



@endsection
