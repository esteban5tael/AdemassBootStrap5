@extends('layouts.base')

@section('title')
    Class 04 | Exercise
@endsection

@section('h')
    Class 04 | Exercise
@endsection

@section('content')
    <br><br>
    <div class="container
    col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12 col-xs-12
    bg-secondary rounded
    mt-3">

        <div class="row ">

            <div class="col-12
            bg-light m-2 p-2 text-center">

                <form action="#" class="m-2 rounded" onsubmit="event.preventDefault(); showData();">
                    <div class="mb-3">
                        <label for="user" class="form-label">User</label>
                        <input type="user" class="form-control" id="user" name="user" placeholder="Johnn Doe"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            I Read The Terms and Condittions
                        </label>
                    </div>
                    <div class="col-auto mb-3">
                        <button type="submit" id="submit" class="btn btn-primary m-3">Register</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
    {{-- <div style="display: none;" class="card text-center"> --}}
    <hr class="outputDiv m-3">
    <div style="display: default;" class=" card text-center" id="outputDiv">
        asdfasdf
    </div>
@endsection

@section('scripts')
    <script>
        function showData() {
            // Captura los valores de los campos del formulario.
            const user = document.querySelector('#user').value;
            const email = document.querySelector('#email').value;
            const password = document.querySelector('#password').value;

            // Crea un mensaje con los datos capturados.
            const message = `
                <p><strong>User:</strong> ${user}</p>
                <p><strong>Email:</strong> ${email}</p>
            `;

            // Agrega el mensaje al div de salida.
            const outputDiv = document.getElementById('outputDiv');
            outputDiv.innerHTML = message;

            document.querySelector('#user').value = '';
            document.querySelector('#user').focus();

            document.querySelector('#email').value = '';
            document.querySelector('#password').value = '';

        }
    </script>
@endsection
