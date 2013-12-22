@extends('template.default')

@section('content')

<!-- Jumbotron -->
    <div class="jumbotron">
      <h1>Laravel Workshop</h1>
      <p class="lead">
          Bu uygulama 21 Aralık 2013, Cumartesi günü İstanbul Teknik Üniversitesi, Ayazağa Kampüsünde düzenlenen etkinlikte atölye
          çalışmasında hazırlanmıştır.
      </p>
      <p>
          <ul>
          <li>Laravel Fundamentals [ {{ HTML::link('https://twitter.com/emirkarsiyakali', 'Emir Karşıyakalı') }}, UBIT ]</li>
          <li>Test-driven Development with Laravel [ {{ HTML::link('https://twitter.com/yuxel', 'Osman Yüksel') }}, Sonsuzdöngü ]</li>
          <li>Events and Queues [ {{ HTML::link('https://twitter.com/ardadev', 'Arda Kılıçdağı') }}, Enüstkat Interactive ]</li>
          <li>Atölye Uygulaması [ {{ HTML::link('https://twitter.com/ibrahimhizliogl', 'İbrahim Hızlıoğlu', array('_blank' => 'target')) }}, Rabarba ]</li>
        </ul>
      </p>
    </div>

@stop