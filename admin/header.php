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
         <a target="_self" href="http://logout:logout@dr.trybuch.com/admin">Logout</a>
          </h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul>
      <section class="top-bar-section">
        <ul class="right">
          <li class="divider"></li>
          <li class="has-dropdown">
            <a href="/specialities">Patients</a>
            <ul class="dropdown">
              <li><label>Patient List</label></li>
              <li><a id="patientList" target="_self" href="#">Patient List</a><li>
              <li class="divider"></li>
              <li><label>Add Patient</label></li>
              <li><a id="addPatient" target="_self" href="#">Add Patient</a><li>
            </ul>
          <li class="divider"></li>
          <li class="has-dropdown"><a href="/about">Requests</a>
            <ul class="dropdown">
              <li><label>New Request</label></li>
              <li><a id="newRequest" target="_self" href="#">New Request</a><li>
              <li class="divider"></li>
               <li><label>Request List</label></li>
              <li><a id="requestList" target="_self" href="#">Request List</a><li>
           </ul>
          </li>
        </ul>
      </section>
    </nav>
    <div id="bodyspacer"></div>
