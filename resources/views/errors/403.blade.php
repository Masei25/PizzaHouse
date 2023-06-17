<?php $title = ' 403'; ?>
@extends('layouts.error')
@section('content')

   
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">403</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> HTTP 403 Forbidden</h4>
                        <p>Access Denied. You Do Not Have The Permission To Access This Page</p>
						<div>
                            <a class="btn btn-primary" href="javascript:history.go(-1)">Back to Previous Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection