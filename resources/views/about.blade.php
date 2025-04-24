@extends('layouts.app')

@section('navigation')
    @include('navigation')
@endsection

@section('maincontent')
    
<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-3">За пекарна "Слонче"</h1>
            <p class="lead">
                Добре дошли в пекарна <b>Слонче</b>! Тук съчетаваме класическите вкусове и модерната визия, за да ви предложим най-сладкото изживяване. При нас ще откриете ръчно приготвени торти, сладкиши и десерти, изработени с внимание и любов към детайла.
            </p>
            <p>
                Нашият екип от сладкари вярва, че всяка торта трябва да разказва история – вашата! За рождени дни, сватби, специални поводи или просто защото животът е сладък – винаги ще ви предложим нещо уникално.
            </p>
            <ul>
                <li>Прясно изпечени сладки и кроасани всяка сутрин</li>
                <li>Индивидуални поръчки по ваш вкус</li>
                <li>Уютна атмосфера и усмихнат екип</li>
            </ul>
            <p class="mt-4">
                <b>Очакваме ви на адрес:</b> гр. Варна, ул. “Сладкишкова” 7  
                <br>
                <b>Телефон:</b> 0888 123 456
            </p>
        </div>
        <div class="col-md-4 text-center">
            
        </div>
    </div>

    <h3 class="mb-3">Галерия</h3>
    <div class="row g-3">
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Торта 1">
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Сладкиш 2">
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery3.jpg') }}" class="img-fluid rounded shadow-sm" alt="Кроасан 3">
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery4.jpg') }}" class="img-fluid rounded shadow-sm" alt="Десерт 4">
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery5.jpg') }}" class="img-fluid rounded shadow-sm" alt="Мъфин 5">
        </div>
        <div class="col-6 col-md-4">
            <img src="{{ asset('images/gallery6.jpg') }}" class="img-fluid rounded shadow-sm" alt="Печиво 6">
        </div>
    </div>
</div>


@endsection('maincontent')

@section('sidebar')
    @include('sidebar')
@endsection('sidebar')