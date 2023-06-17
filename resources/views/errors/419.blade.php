<?php $title = ' 419'; ?>
@extends('layouts.error')
@section('content')

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">419</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> HTTP 419 Page Expired</h4>
                        <p>Sorry your session has expired. Please kindly refresh and try again</p>
						<div>
                            <a class="btn btn-primary" href="/apply">Back to Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
