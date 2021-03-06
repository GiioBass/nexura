@extends('layout')
@section('content')
    <div class=" d-flex justify-content-center" style="width:100%;">
        <div class="card  mt-5" style="width:60%;">
            <div class="card-body">
                <div class="mb-5">
                    <h2 class="card-title">Crear empleado</h2>
                </div>
                <form class="" style="width:90%;">
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title', 'post') is-invalid @enderror"
                                id="name">
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row
                                mb-3">
                        <label for="exampleInputEmail1" class=" col-sm-2 form-label">Correo electrónico</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control @error('title', 'post') is-invalid @enderror"
                                id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <fieldset class="row
                                    mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input @error('title', 'post') is-invalid @enderror" type="radio"
                                    name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('title', 'post') is-invalid @enderror" type="radio"
                                    name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Femenino
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input @error('title', 'post') is-invalid @enderror" type="radio"
                                    name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Third disabled radio
                                </label>
                            </div>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                    <div class="row
                                            mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Área</label>
                        <div class="col-sm-10">

                            <select class="form-select @error('title', 'post') is-invalid @enderror"
                                aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row
                                                mb-3">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 form-label">Example
                            textarea</label>
                        <div class="col-sm-10">
                            <textarea class="form-control @error('title', 'post') is-invalid @enderror" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row
                                                        mb-3">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 form-label"></label>
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-check-input @error('title', 'post') is-invalid @enderror"
                                id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 form-label">Roles</label>
                        <div class="col-sm-10">
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label @error('title', 'post') is-invalid @enderror"
                                    for="exampleCheck1">Check me out</label>
                            </div>
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label @error('title', 'post') is-invalid @enderror"
                                    for="exampleCheck1">Check me out</label>
                            </div>
                            <div>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label @error('title', 'post') is-invalid @enderror"
                                    for="exampleCheck1">Check me out</label>
                            </div>
                        </div>
                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row mb-3 mt-5">
                        <label for="exampleFormControlTextarea1" class="col-sm-2 form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
