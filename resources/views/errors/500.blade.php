<?php $title = ' 500'; ?>
@extends('layouts.error')
@section('content')

    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">500</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> HTTP 500 Internal Server Error</h4>
                        <p>The server encountered an unexpected condition that prevented it from fulfilling the request</p>
						<div>
                            <a class="btn btn-primary" href="javascript:history.go(-1)">Back to Previous Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection