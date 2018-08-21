@extends('_layouts.master')

@section('body')
<section class="container mx-auto">
    <div>
        <div><img class="w-48 shadow rounded-lg" src="assets/images/jigsaw-logo.svg"></div>
        <img class="w-48" src="assets/images/jigsaw-type.svg"></div>
        <h2 class="subtitle">Jigsaw project</h2>
        <div class="links">
            <a href="http://jigsaw.tighten.co/docs/installation/" class="no-underline bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded" target="_blank">
                Documentation
            </a>
            <a href="https://github.com/tightenco/jigsaw/" class="no-underline bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded" target="_blank">
                GitHub
            </a>
        </div>
    </div>
</section>
@endsection
