<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
   <link rel="stylesheet" href="../../mainRaspberryDependencies/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>SkY_EDT</title>
</head>
<body>
<?php include "../../utilities/navbar.html" ?>
  <br />
  <header class="cd-main-header text-center flex flex-column flex-center">
    <h1 class="text-xl">Emploi du temps semaine 2</h1>
  </header>

  <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
    <div class="cd-schedule__timeline">
      <ul>
        <li><span>08:00</span></li>
        <li><span>08:30</span></li>
        <li><span>09:00</span></li>
        <li><span>09:30</span></li>
        <li><span>10:00</span></li>
        <li><span>10:30</span></li>
        <li><span>11:00</span></li>
        <li><span>11:30</span></li>
        <li><span>12:00</span></li>
        <li><span>12:30</span></li>
        <li><span>13:00</span></li>
        <li><span>13:30</span></li>
        <li><span>14:00</span></li>
        <li><span>14:30</span></li>
        <li><span>15:00</span></li>
        <li><span>15:30</span></li>
        <li><span>16:00</span></li>
        <li><span>16:30</span></li>
        <li><span>17:00</span></li>
        <li><span>17:30</span></li>
        <li><span>18:00</span></li>
        <li><span>18:30</span></li>
      </ul>
    </div> <!-- .cd-schedule__timeline -->
  
    <div class="cd-schedule__events">
      <ul>
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Monday</span></div>
  
          <ul>
            <li class="cd-schedule__event">
              <a data-start="09:00" data-end="10:30" data-content="event-elec-de-puissance-lundi" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Elec Puissance</em>
              </a>
            </li>
            <li class="cd-schedule__event">
              <a data-start="10:45" data-end="12:15" data-content="event-probabilites-lundi" data-event="event-2" href="#0">
                <em class="cd-schedule__name">Probabilités</em>
              </a>
            </li>

            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="16:00" data-content="event-graphes-lundi" data-event="event-3" href="#0">
                <em class="cd-schedule__name">Graphes</em>
              </a>
            </li>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Tuesday</span></div>
  
          <ul>
            <li class="cd-schedule__event">
              <a data-start="08:00" data-end="09:30"  data-content="event-economie-mardi" data-event="event-5" href="#0">
                <em class="cd-schedule__name">Economie</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="09:40" data-end="11:10"  data-content="event-anglais-mardi" data-event="event-5" href="#0">
                <em class="cd-schedule__name">Anglais</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="11:20" data-end="12:50" data-content="event-fhs-mardi" data-event="event-5" href="#0">
                <em class="cd-schedule__name">FHS</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="16:00"  data-content="event-elec-analogique-mardi" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Elec Analogique</em>
              </a>
            </li>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Wednesday</span></div>
  
          <ul>
            <li class="cd-schedule__event">
              <a data-start="08:00" data-end="09:30" data-content="event-probabilites-mercredi" data-event="event-2" href="#0">
                <em class="cd-schedule__name">Probabilités</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="15:30" data-content="event-physique-des-composants-mercredi" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Physique des composants</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="15:45" data-end="17:15"  data-content="event-elec-de-puissance-mercredi" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Elec Puissance</em>
              </a>
            </li>
          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Thursday</span></div>
  
          <ul>
            <li class="cd-schedule__event">
              <a data-start="08:30" data-end="10:00" data-content="event-physique-des-composants-jeudi" data-event="event-1" href="#0">
                <em class="cd-schedule__name">Physique des composants</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="10:15" data-end="11:45" data-content="event-probabilites-jeudi" data-event="event-2" href="#0">
                <em class="cd-schedule__name">Probabilités</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="15:00" data-content="event-heure-de-promo-jeudi" data-event="event-4" href="#0">
                <em class="cd-schedule__name">Heure de promo</em>
              </a>
            </li>

          </ul>
        </li>
  
        <li class="cd-schedule__group">
          <div class="cd-schedule__top-info"><span>Friday</span></div>
  
          <ul>
            <li class="cd-schedule__event">
              <a data-start="10:15" data-end="11:45"  data-content="event-probabilites-vendredi" data-event="event-2" href="#0">
                <em class="cd-schedule__name">Probabilités</em>
              </a>
            </li>
  
            <li class="cd-schedule__event">
              <a data-start="14:00" data-end="16:00" data-content="event-graphes-vendredi" data-event="event-3" href="#0">
                <em class="cd-schedule__name">Graphes</em>
              </a>
            </li>

          </ul>
        </li>
      </ul>
    </div>
  
    <div class="cd-schedule-modal">
      <header class="cd-schedule-modal__header">
        <div class="cd-schedule-modal__content">
          <span class="cd-schedule-modal__date"></span>
          <h3 class="cd-schedule-modal__name"></h3>
        </div>
  
        <div class="cd-schedule-modal__header-bg"></div>
      </header>
  
      <div class="cd-schedule-modal__body">
        <div class="cd-schedule-modal__event-info"></div>
        <div class="cd-schedule-modal__body-bg"></div>
      </div>
  
      <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
    </div>
  
    <div class="cd-schedule__cover-layer"></div>
  </div> <!-- .cd-schedule -->

  <script src="../assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../assets/js/main.js"></script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../../mainRaspberryDependencies/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="../../mainRaspberryDependencies/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="../../mainRaspberryDependencies/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>