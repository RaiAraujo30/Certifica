@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="/css/home/homepage.css">


@endsection

@section('content')

    <section class="container d-flex justify-content-center align-items-center home-page-container">

        <section class="box-conteudo d-flex flex-column align-items-start justify-content-start">
            <h1 class="w-100 text-center mb-3">Certifica</h1>

            <div class="text-conteudo-homepage">
                O Certifica é uma plataforma web desenvolvida pela Universidade Federal do 
                Agreste de Pernambuco por meio do Laboratório Multidisciplinar de Tecnologias 
                Sociais em parceria com a Pró-Reitoria de Extensão e Cultura. A ferramenta visa 
                contribuir para ampliar a eficiência da gestão pública no processo de elaboração, 
                gestão e acreditação de certificados emitidos por diversos setores institucionais. 
            </div>

        </section>

        <form class="form-homepage" method="POST" action="{{route('login') }}">
            @csrf
            <h4 class="text-center mb-5">Entrar</h4>

            <input
                class="input-home-form"
                type="email"
                name="email"
                placeholder="Insira seu e-mail"
                autofocus
            id="">

            <div class="form-group py-1">
                <label for="password" class="form-label">Senha</label>

                <div class="input-group">
                    <input
                            id="password"
                            type="password"
                            class="form-control"
                            name="password"
                            required
                            autocomplete="current-password"
                    >

                    <button
                            type="button"
                            class="btn btn-outline-secondary"
                            id="togglePassword"
                            tabindex="-1"
                    >
                        <i class="bi bi-eye" id="eyeIcon"></i>
                    </button>
                </div>
            </div>



            <div>
                <button class="button-homepage" type="submit">Entrar</button>
            </div>

            <div class="container-text-homeform">
                <a class="esqueceu-senha-link" href="{{ route('password.request') }}">
                    <p class="text-end text-homepage mt-2">Esqueceu sua senha?</p>
                </a>
            </div>

            <div class="container-text-homeform">
                <p class="text-homepage">Não possui conta? <a class="criar-conta-link" href="{{ route('register') }}">Criar Conta</a></p>
            </div>

        </form>
    </section>
    </html>

    @section('javascript')
        <script>
            if (!window.__togglePasswordInitialized) {
                window.__togglePasswordInitialized = true;

                document.addEventListener("DOMContentLoaded", function () {
                    const togglePassword = document.getElementById("togglePassword");
                    const password = document.getElementById("password");
                    const eyeIcon = document.getElementById("eyeIcon");

                    if (!togglePassword || !password || !eyeIcon) return;

                    togglePassword.addEventListener("click", function () {
                        const type =
                            password.getAttribute("type") === "password"
                                ? "text"
                                : "password";

                        password.setAttribute("type", type);

                        eyeIcon.classList.toggle("bi-eye");
                        eyeIcon.classList.toggle("bi-eye-slash");
                    });
                });
            }
        </script>
    @endsection


@endsection


