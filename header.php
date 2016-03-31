<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Elan Trybuch"/>
    <meta name="keywords" content="Ellie, Ellie Trybuch, Eliezer, Eliezer Trybuch, Podiatry, Surgeon, Doctor, Health, Health Care Provider, Health Care, Bunion, Corns, Calluses, Fungus Nails, Onychomycosis, Hammertoes, Hell Spur, Plantar Fasciitis, Ingrown Toenail, Onychocryptosis, Neuroma, Orthotics, Plantar Warts, Tendonitis, Ulcers, Arthritis, Athlete's Foot">
    <meta name="description" content="Dr. Eliezer Trybuch, in practice for more than 33 year, has a warm, friendly and upbeat personality coupled with a well-trained background.">
    <title>Dr. Trybuch</title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation.min.js"></script>
    <script src="/js/vendor/modernizr.js"></script>
    <?php
    if($_SERVER['REQUEST_URI'] == "/request" || $_SERVER['REQUEST_URI'] == "/signup"){
      echo '<link rel="stylesheet" href="/css/datepicker.css"/>';
      echo '<script src="/js/vendor/datepicker.js"></script>';
    }
    ?>

  </head>
  <body>
    <nav class="top-bar" data-topbar id="header">
      <ul class="title-area">
        <li class="name">
          <h1>
            <a href="http://dr.trybuch.com">Home</a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul>
      <section class="top-bar-section">
        <ul class="right">
          <li class="divider"></li>
          <li class="has-dropdown">
            <a href="/specialities">Specialities</a>
            <ul class="dropdown">
              <li><label>Dermotological care</label></li>
              <li class="has-dropdown">
                <a href="/specialities/#Dermotological">Dermotological care</a>
                <ul class="dropdown">
                  <li><a target="_self" href="/specialities/#AthleteFoot">Athlete's Foot</a></li>
                  <li><a target="_self" href="/specialities/#FungusNails">Fungus Nails</a></li>
                  <li><a target="_self" href="/specialities/#PlantarWarts">Plantar Warts</a></li>
                  <li><a target="_self" href="/specialities/#Ulcers">Ulcers</a></li>
                  <li><a target="_self" href="/specialities/#CornsCalluses">Corns & Calluses</a></li>
                  <li><a target="_self" href="/specialities/#IngrownToenails">Ingrown Toenail</a></li>
                </ul>
              </li>
              <li class="divider"></li>
              <li><label>Skeletal care</label></li>
              <li class="has-dropdown">
                <a href="/specialities/#Skeletal">Skeletal care</a>
                <ul class="dropdown">
                  <li><a target="_self" href="/specialities/#HeelSpur">Heel Spur, Plantar Fascitis</a></li>
                  <li><a target="_self" href="/specialities/#Orthotics">Orthotics</a></li>
                  <li><a target="_self" href="/specialities/#Tendonitis">Tendonitis</a></li>
                  <li><a target="_self" href="/specialities/#Arthritis">Arthritis</a></li>
                </ul>
              </li>

              <li class="divider"></li>
              <li><label>Surgical Foot care</label></li>
              <li class="has-dropdown">
                <a href="/specialities/#Surgical">Surgical Foot care</a>
                <ul class="dropdown">
                  <li><a target="_self" href="/specialities/#Neuroma">Neuroma</a></li>
                  <li><a target="_self" href="/specialities/#Bunion">Bunion</a></li>
                  <li><a target="_self" href="/specialities/#Hammertoes">Hammertoes</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li class="divider"></li>
          <li class="has-dropdown"><a href="/about">About</a>
            <ul class="dropdown">
              <li><label>Doctor</label></li>
              <li><a target="_self" href="/about">Dr. Trybuch</a><li>
              <li class="divider"></li>
            </ul>
          </li>
          <li class="divider"></li>
          <li class="has-dropdown"><a target="_self" href="/info">Info</a>
              <ul class="dropdown">
                <li><label>Patient Info</label></li>
                <li><a target="_self" href="/info">Insurance</a><li>
                <li><a target="_self" href="/signup">New Patient Signup</a></li>
                <li><a target="_self" href="/request">Appointment Request</a></li>
                <li><a target="_self" href="/survey">Survey</a></li>
                <li><a target="_self" href="/contact">Contact</a></li>
                <li class="divider"></li>
                <li><label>Locations</label></li>
                <li><a target="_self" href="/location">Capitol Hill</a></li>
              </ul>
          </li>
        </ul>
      </section>
    </nav>
    <div id="bodyspacer"></div>
