@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

    <div>
        <button type="button" class="rounded nextButton btn-outline-primary" id="submitButton" name="submitButton">Submit Button</button>
        <br>
        <span id="submitFeedback"></span>
        <br>

    </div>

<script src="//code.jquery.com/jquery.js"></script>
<script type="text/javascript" src="{{ secure_asset('js/iscat.js') }}"></script>

@endsection