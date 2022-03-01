<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mass Polska</title>
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="sectionMap.css" />
    <link rel="stylesheet" href="sectionAbout.css" />
    <link rel="stylesheet" href="sectionWeAre.css" />
    <link rel="stylesheet" href="sectionServices.css" />
    <link rel="stylesheet" href="sectionContact.css" />

    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="mobile.css" />

    <script src="navigation.js"></script>
  </head>
  <body>
    <header class="header">
      <img class="logo" src="assets/logo.png" />
      <img
        onclick="onOpen()"
        class="hamburger"
        src="assets/hamburger.svg"
        alt="Lokalizacje"
      />
      <nav>
        <ul class="nav-list">
          <li class="nav-list-item"><a href="#home">Strona główna</a></li>
          <li class="nav-list-item"><a href="#salony">Salony</a></li>
          <li class="nav-list-item"><a href="#o-nas">O nas</a></li>
          <li class="nav-list-item"><a href="#uslugi">Usługi</a></li>
          <li class="nav-list-item"><a href="#kontakt">Kontakt</a></li>
          <li class="nav-list-item-button">
            <a href="/portal/">Strefa pracownika</a>
          </li>
        </ul>
        <ul class="nav-list-mobile">
          <button class="nav-list-mobile-button-close" onclick="onOpen()">
            <img src="assets/closeIcon.svg" alt="Lokalizacje" />
          </button>
          <li class="nav-list-item-strefa">
            <a href="/portal/">Strefa pracownika</a>
          </li>
          <li class="nav-list-item"><a href="#home">Strona główna</a></li>
          <li class="nav-list-item"><a href="#salony">Salony</a></li>
          <li class="nav-list-item"><a href="#o-nas">O nas</a></li>
          <li class="nav-list-item"><a href="#uslugi">Usługi</a></li>
          <li class="nav-list-item"><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>
      <form method="POST" action="mail.php">
        <button type="submit">Send</button>
      </form>
  
      <!-- <nav>
        <ul >
          <li><a href="#">Strona główna</a></li>
          <li><a href="#salony">Salony</a></li>
          <li><a href="#o-nas">O nas</a></li>
          <li><a href="#uslugi">Usługi</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
          <li><a href="/portal/">Strefa pracownika</a></li>
        </ul>
      </nav> -->
    </header>
      <div id="home" class="baner">
        <img class="baner-image" src="assets/baner.png" />

        <div class="baner-text">
          <h2>Postaw na rozwój</h2>
          <h3>
            i dołącz do pracowników naszej sieci salonów Plusa i Polsat Box
          </h3>
          <li id="button-aplikuj" class="nav-list-item-button --baner">
            <p>Aplikuj</p>
          </li>
        </div>
      </div>

      <section id="salony" class="section section-map">
        <h2 class="section-header">Nasze salony sprzedaży</h2>
        <img class="map" src="assets/map.svg" alt="Lokalizacje" />
        
        <div class="list-salons-wrapper">

          <ul class="list-salons">
            <li>
              <img src="assets/mapPin.svg" alt="Lokalizacje" />

              <a target="_blank" href="https://www.google.com/search?q=punkt%20plusa%20chojnice&sxsrf=APq-WBvqIEQNhrleSv7t2G32ZTZZR-z_nQ:1643906679018&ei=awb8YY2WLYSrrgSF-aX4BA&ved=2ahUKEwiG1JXN_eP1AhVuposKHc-HCzMQvS56BAgcECY&uact=5&oq=punkt+plusa+chijnice&gs_lcp=Cgdnd3Mtd2l6EAMyBAgAEA0yCggAEAgQDRAKEB46BwgAEEcQsAM6BAgjECc6CgguEMcBEKMCECc6CwgAEIAEELEDEIMBOgUIABCABDoECAAQQzoKCC4QxwEQrwEQQzoOCC4QgAQQsQMQxwEQowI6CAguEIAEELEDOgsIABCABBCxAxDJAzoFCAAQkgM6CggAELEDEIMBEEM6CAgAEIAEELEDOgsILhCABBDHARCvAToGCAAQFhAeOgUIIRCgAUoECEEYAEoECEYYAFCaCFi0LWC3LmgEcAJ4AIABlwKIAYkXkgEGMC4xOC4ymAEAoAEByAEIwAEB&sclient=gws-wiz&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3&tbm=lcl&rflfq=1&num=10&rldimm=5275805209198320004&lqi=ChRwdW5rdCBwbHVzYSBjaG9qbmljZVoWIhRwdW5rdCBwbHVzYSBjaG9qbmljZZIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVyqgETEAEqDyILcHVua3QgcGx1c2EoCw&rlst=f#rlfi=hd:;si:5275805209198320004,l,ChRwdW5rdCBwbHVzYSBjaG9qbmljZVoWIhRwdW5rdCBwbHVzYSBjaG9qbmljZZIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVyqgETEAEqDyILcHVua3QgcGx1c2EoCw;mv:[[53.7003588,17.6187948],[53.692747999999995,17.5705775]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!2m1!1e3!3sIAE,lf:1,lf_ui:3">
                Chojnice, C.H Carrefour ul Bayeux 1, <span>tel. 52 334 21</span></a>
            </li>
            <li>
              <img src="assets/mapPin.svg" alt="Lokalizacje" />
              <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+pabianice+zamkowa+24&tbm=lcl&sxsrf=APq-WBtqIcKrl5TdVUdvPvmRdUoVD0VFWg%3A1643906796945&ei=7Ab8Yd_0OO6PrgTY-IzQBg&oq=punkt+plusa+pabianice+zamkowa+24&gs_l=psy-ab.3..33i22i29i30k1.2049.2688.0.2924.3.3.0.0.0.0.134.382.0j3.3.0....0...1c.1.64.psy-ab..0.3.381...0i22i30k1.0.mC46FxaAVyw#rlfi=hd:;si:5609316115430853909,l,CiBwdW5rdCBwbHVzYSBwYWJpYW5pY2UgemFta293YSAyNFooIiBwdW5rdCBwbHVzYSBwYWJpYW5pY2UgemFta293YSAyNCoECAIQAZIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVy;mv:[[51.6652232,19.351053500000003],[51.6642159,19.350409499999998]]">
                Pabianice, ul Zamkowa 24, <span>tel. 42 227 16 04</span>
              </a>
            </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+poznan+dabrowskiego&tbm=lcl&sxsrf=APq-WBupNcunaEi6gqqNkctNKR6o2sZhzA%3A1643906685653&ei=fQb8Ya2KJ8yurgSJgKjICA&oq=punkt+plusa+poznan+da&gs_l=psy-ab.1.0.0i22i30k1j38.184012.185465.0.187813.9.9.0.0.0.0.236.946.0j5j1.6.0....0...1c.1.64.psy-ab..3.6.946...0i512k1.0.vdPsB39Bt3Q#rlfi=hd:;si:5628052590786201089,l,Ch9zYWxvbiBwbHVzYSBwb3puYW4gZGFicm93c2tpZWdvWiEiH3NhbG9uIHBsdXNhIHBvem5hbiBkYWJyb3dza2llZ2-SASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcqoBExABKg8iC3NhbG9uIHBsdXNhKAs,y,gxWnkQ9YZ40;mv:[[52.465868099999994,16.963445099999998],[52.3823371,16.815262699999998]]">
              Poznań, ul Dąbrowskiego 65, <span>tel. 61 8430 634 </span>
            </a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+poznan+ddruzbickiego&tbm=lcl&sxsrf=APq-WBuDIe2CMANQVwS6--WBrPvEtsiFEA%3A1643906874262&ei=Ogf8YaKzD9H3qwGjoouABA&oq=salon+plusa+poznan+ddruzbickiego&gs_l=psy-ab.3..33i10i160k1l3.45097.47513.0.47801.12.12.0.0.0.0.200.1311.0j7j1.8.0....0...1c.1.64.psy-ab..4.8.1310...33i160k1.0.nn05mk67JnQ#rlfi=hd:;si:3196904255673334280,l,CiBzYWxvbiBwbHVzYSBwb3puYW4gZHJ1xbxiaWNraWVnb1oiIiBzYWxvbiBwbHVzYSBwb3puYW4gZHJ1xbxiaWNraWVnb5IBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVymgEkQ2hkRFNVaE5NRzluUzBWSlEwRm5TVU5oYWs1NllYUlJSUkFCqgETEAEqDyILc2Fsb24gcGx1c2EoCw,y,K8GYG9sq6Dc;mv:[[52.4652907,16.961146199999998],[52.3925381,16.8558775]]"
            >Poznań C.H Plaza, ul K. Drużbickiego 2, <span>tel. 61 659 74 02</span>
          </a>
        </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+swarzed+poznnanska&tbm=lcl&sxsrf=APq-WBsFIhGwaO-DjSj3NXfwXpgBJsfYRg%3A1643906923077&ei=awf8YcWZBIX4qwHnt5K4CA&oq=salon+plusa+swarzed+poznnanska&gs_l=psy-ab.3..33i10i160k1.84244.88649.0.88788.18.17.0.0.0.0.243.1913.0j10j2.12.0....0...1c.1.64.psy-ab..6.12.1911...0i512k1j0i22i30k1j33i22i10i29i30k1.0.sFux86_EIWk#rlfi=hd:;si:16657277282248425232,l,CiBzYWxvbiBwbHVzYSBzd2FyesSZZHogcG96bmHFhHNrYVoiIiBzYWxvbiBwbHVzYSBzd2FyesSZZHogcG96bmHFhHNrYZIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVyqgETEAEqDyILc2Fsb24gcGx1c2EoCw;mv:[[52.4147658,17.1142081],[52.3805878,16.916445799999998]]"
            >Swarzędz C.H ETC, ul Poznańska 6, <span>tel. 61 665 10 62</span></a
            >
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+krapkowice&tbm=lcl&sxsrf=APq-WBsnrNsH4BbgKyO0vAX40Z2g8qz0Cg%3A1643907012886&ei=xAf8Yb7SNeenrgSu6YngBw&oq=salon+plusa+krapkowice&gs_l=psy-ab.3..0i512k1.38668.40123.0.40301.10.4.0.6.6.0.155.388.0j3.3.0....0...1c.1.64.psy-ab..1.9.399....0.LU67LU0kYrA#rlfi=hd:;si:8839299300526920315,l,ChZzYWxvbiBwbHVzYSBrcmFwa293aWNlWhgiFnNhbG9uIHBsdXNhIGtyYXBrb3dpY2WSASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcqoBExABKg8iC3NhbG9uIHBsdXNhKAs,y,mNFUMtDZA00;mv:[[50.476549399999996,17.9679498],[50.474127499999994,17.9646907]]"
            >Krapkowice, ul. 1 Maja 24, <span>tel. 77 466 92 92</span> </a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+szczecin+ku+sloncu&tbm=lcl&sxsrf=APq-WBuERVFheHcMyIL58P8C2duAt9tRvg%3A1643907054108&ei=7gf8YayQBumhrgTQub_gBQ&oq=salon+plusa+szczecin+ku+sloncu&gs_l=psy-ab.3..0i22i30k1.39796.42742.0.43079.18.18.0.0.0.0.213.2153.0j13j2.15.0....0...1c.1.64.psy-ab..3.15.2151...35i39k1j0i512k1j0i512i10k1j33i160k1j33i22i29i30k1j33i10i160k1j33i21k1.0.Md7U4aNguZY#rlfi=hd:;si:10813985382052511496,l,Ch5zYWxvbiBwbHVzYSBzemN6ZWNpbiBrdSBzbG9uY3VaICIec2Fsb24gcGx1c2Egc3pjemVjaW4ga3Ugc2xvbmN1kgEjdGVsZWNvbW11bmljYXRpb25zX3NlcnZpY2VfcHJvdmlkZXKqARMQASoPIgtzYWxvbiBwbHVzYSgL;mv:[[53.43736380000001,14.6656801],[53.379686899999996,14.4714624]]"
            >Szczecin, ul. Ku Słońcu 67, <span>tel. 91 486 91 71</span> </a
            >
          </li>
        </ul>
        <ul class="list-salons">
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+srem&tbm=lcl&sxsrf=APq-WBuer608NS-kd7fa34xdBvTQSH0M-w%3A1643907098067&ei=Ggj8YcuUA-2prgSivo_YBA&oq=salon+plusa+srem&gs_l=psy-ab.3..0i512k1j0i22i30k1l2.28079.28955.0.29156.6.6.0.0.0.0.146.726.0j6.6.0....0...1c.1.64.psy-ab..0.6.726...38j35i39k1j0i457i67k1j0i402k1j0i67k1.0.KqCHarPzQjs#rlfi=hd:;si:7358689126873726459,l,ChBzYWxvbiBwbHVzYSBzcmVtWhIiEHNhbG9uIHBsdXNhIHNyZW2SASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcqoBExABKg8iC3NhbG9uIHBsdXNhKAs,y,tdtS_aRqT_4;mv:[[52.096251099999996,17.0280922],[52.0759839,17.0090365]]">
              Śrem, ul Jana Kilińskiego 6, <span>tel 61 830 13 48</span> </a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+gorzow+3+maja&tbm=lcl&sxsrf=APq-WBv34tYXbxxWB19N2xjwrfg-WI6T0Q%3A1643907128171&ei=OAj8YZLpCcWQrgSStp2oBg&oq=punkt+plusa+gorzow+3+maja&gs_l=psy-ab.3..33i10i160k1l2.68982.78633.0.78765.37.29.0.0.0.0.682.3228.0j3j1j2j1j2.10.0....0...1c.1.64.psy-ab..27.10.3798.10..0i512i433k1j0i67k1j0i512k1j0i512i457k1j35i362i39k1j35i39k1j0i22i30k1.570.A2Kx51vccbE#rlfi=hd:;si:6350364466821431671,l,ChlwdW5rdCBwbHVzYSBnb3J6b3cgMyBtYWphWhsiGXB1bmt0IHBsdXNhIGdvcnpvdyAzIG1hamGSASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcpoBI0NoWkRTVWhOTUc5blMwVkpRMEZuU1VOSGRuRnBXR1JSRUFF;mv:[[52.762634299999995,15.2625927],[52.725167299999995,15.223937200000002]]"
            >Gorzów Wlkp, ul Konstytucji 3 Maja 102, <span>tel. 95 737 27 03</span></a
            >
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+gorzow+przemys%C5%82owa&tbm=lcl&sxsrf=APq-WBtkZHKScWnUWyDFm5ey9dwu09VWgw%3A1643907207698&ei=hwj8YZOSKuqrrgSmw73QAQ&oq=punkt+plusa+gorzow+przemys%C5%82owa&gs_l=psy-ab.3..33i160k1l5.36846.38615.0.38752.11.10.0.0.0.0.328.1093.0j5j0j1.6.0....0...1c.1.64.psy-ab..5.6.1093...33i22i29i30k1j33i10i160k1.0.9Hh2L-WCgnU#rlfi=hd:;si:10756495056357567318,l,Ch9wdW5rdCBwbHVzYSBnb3J6b3cgcHJ6ZW15c8WCb3dhWiEiH3B1bmt0IHBsdXNhIGdvcnpvdyBwcnplbXlzxYJvd2GSASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcqoBExABKg8iC3B1bmt0IHBsdXNhKAs;mv:[[52.7628059,15.2625927],[52.722135099999996,15.223937200000002]]">
              Gorzów Wlkp, ul Przemysłowa 2, <span>tel. 95 714 01 09</span> </a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+miedzychod&tbm=lcl&sxsrf=APq-WBtk9GE3Rc9SjxhpwQ51CiSkBWq4OQ%3A1643907247740&ei=rwj8YZu_LI6SrwSezINY&oq=punkt+plusa++miedzych&gs_l=psy-ab.3.0.0i22i30k1l2j38l2.34127.35845.0.37674.10.10.0.0.0.0.257.1172.1j4j2.7.0....0...1c.1.64.psy-ab..3.7.1170...35i39k1j0i512k1j0i22i10i30k1.0.Ik5ww9Gh2bc#rlfi=hd:;si:17765904409565374005,l,ChZwdW5rdCBwbHVzYSBtaWVkenljaG9kWhgiFnB1bmt0IHBsdXNhIG1pZWR6eWNob2SSARBjZWxsX3Bob25lX3N0b3JlqgETEAEqDyILcHVua3QgcGx1c2EoCw;mv:[[52.606086499999996,15.8987033],[52.599693,15.884603799999999]]"
            >Międzychód, ul 17 Stycznia 84/90, <span>tel. 95 748 47 25</span>
          </a>
        </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+gostynin&tbm=lcl&sxsrf=APq-WBtiBZxhmks7JIzkEFtHzgM5SrP5Xg%3A1643907286231&ei=1gj8YdHYDZCdrgTcoID4Bg&oq=punkt+plusa+gostynin&gs_l=psy-ab.3..0i22i30k1l2.39250.41993.0.42335.10.9.1.0.0.0.138.853.0j7.7.0....0...1c.1.64.psy-ab..2.8.854...35i39k1j0i512k1.0.6NIuKCXP_B4#rlfi=hd:;si:12892847260552154079,l,ChRwdW5rdCBwbHVzYSBnb3N0eW5pbloWIhRwdW5rdCBwbHVzYSBnb3N0eW5pbpIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVyqgETEAEqDyILcHVua3QgcGx1c2EoCw;mv:[[52.4294673,19.4636682],[52.4286396,19.460372]]">
              Gostynin, ul Rynek 15, <span>tel. 24 235 92 93</span></a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+nysa+wolnosci&tbm=lcl&sxsrf=APq-WBtcvbKDtWIciUTJjmjX86K_E4U6KQ%3A1643907329231&ei=AQn8YfTADcrmrgTYjZOYAQ&oq=punkt+plusa+nysa+wolnosci&gs_l=psy-ab.3..33i160k1.33775.36247.0.36489.13.13.0.0.0.0.159.1356.0j10.10.0....0...1c.1.64.psy-ab..3.10.1354...0i512k1j0i22i30k1j33i10i160k1.0.wvc8-kpnTTA#rlfi=hd:;si:15834155401437532102,l,ChlwdW5rdCBwbHVzYSBueXNhIHdvbG5vc2NpWhsiGXB1bmt0IHBsdXNhIG55c2Egd29sbm9zY2mSASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcg;mv:[[50.4782594,17.336593699999998],[50.4724838,17.3329618]]">
              Nysa, ul Wolności 2, <span>tel. 77 545 96 33</span> </a>
          </li>
        </ul>
        <ul class="list-salons">
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+konin+dworcowa&tbm=lcl&sxsrf=APq-WBuF4zHIYEWzA4LdfHUTwutYlq71-A%3A1643907366586&ei=Jgn8Yb6WI46trgSN14WgDA&oq=punkt+plusa+konin+dworcowa&gs_l=psy-ab.3..0i22i30k1.24613.27974.0.28069.18.16.1.0.0.0.322.1761.1j6j2j1.10.0....0...1c.1.64.psy-ab..7.11.1762...38j0i512k1j0i22i10i30k1j33i22i29i30k1.0.Hlby1l-QpMo#rlfi=hd:;si:17731451412831474401,l,ChpwdW5rdCBwbHVzYSBrb25pbiBkd29yY293YVocIhpwdW5rdCBwbHVzYSBrb25pbiBkd29yY293YZIBI3RlbGVjb21tdW5pY2F0aW9uc19zZXJ2aWNlX3Byb3ZpZGVyqgETEAEqDyILcHVua3QgcGx1c2EoCw;mv:[[52.230067399999996,18.2612029],[52.2274824,18.249990099999998]]">
              Konin, ul Dworcowa 6, <span>tel. 63 245 59 11</span> </a>
          </li>
          <li >
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+%C5%BCyrard%C3%B3w&tbm=lcl&sxsrf=APq-WBvb-lUGel53AomI1EBRngLqAHipJg%3A1643907395491&ei=Qwn8Yb6kHZHargSEtJ2oDA&oq=punkt+plusa+%C5%BB&gs_l=psy-ab.1.0.0i512k1j0i22i30k1l9.29443.30882.0.32957.3.2.1.0.0.0.155.279.0j2.2.0....0...1c.1.64.psy-ab..0.3.284....0.ejwE8jm55gE#rlfi=hd:;si:12872750588707730439,l,ChZwdW5rdCBwbHVzYSDFvHlyYXJkw7N3WhgiFnB1bmt0IHBsdXNhIMW8eXJhcmTDs3eSASN0ZWxlY29tbXVuaWNhdGlvbnNfc2VydmljZV9wcm92aWRlcqoBExABKg8iC3B1bmt0IHBsdXNhKAs,y,WXEtgfL5Oa0;mv:[[52.056169399999995,20.445232999999998],[52.0525406,20.4373243]]">
              Żyrardów, ul Okrzei 16, <span>tel. 46 855 04 44</span></a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+piotrk%C3%B3w+trybunalski&tbm=lcl&sxsrf=APq-WBt86QHY2wsmM_xO7pSIJTbB-ztnPA%3A1643907429212&ei=ZQn8YbOoDJb_rgTsmI3IBA&oq=punkt+plusa+piotrkow&gs_l=psy-ab.3.0.0i22i30k1l4.44244.45587.0.46759.8.8.0.0.0.0.161.833.0j6.6.0....0...1c.1.64.psy-ab..2.6.833...38j35i39k1j0i512k1.0.jfcvEzjsIiA#rlfi=hd:;si:10439571891306964735,l,CiFwdW5rdCBwbHVzYSBwaW90cmvDs3cgdHJ5YnVuYWxza2laIyIhcHVua3QgcGx1c2EgcGlvdHJrw7N3IHRyeWJ1bmFsc2tpkgEjdGVsZWNvbW11bmljYXRpb25zX3NlcnZpY2VfcHJvdmlkZXKqARMQASoPIgtwdW5rdCBwbHVzYSgL,y,Ln1dnYWpdAE;mv:[[51.4198561,19.688513999999998],[51.4032215,19.660195299999998]]">
              Piotrków Tryb., ul Słowackiego 123, <span>tel. 44 715 91 39</span></a>
          </li>
          <li >
            <img src="assets/mapPin.svg" alt="Lokalizacje" />
            <a target="_blank" href="https://www.google.com/search?q=punkt+plusa+jastrowie&tbm=lcl&sxsrf=APq-WBvNaDbpc3lIPn382WqZUKRaxTNIQQ%3A1643907476818&ei=lAn8YYG8MdH3qwGjoouABA&oq=punkt+plusa+jastrowie&gs_l=psy-ab.3..0i22i30k1.43960.46403.0.46572.9.8.0.0.0.0.313.746.0j1j1j1.3.0....0...1c.1.64.psy-ab..6.3.744....0.3K4xlEm9fIo#rlfi=hd:;si:17528155352053286609,l,ChVwdW5rdCBwbHVzYSBqYXN0cm93aWVaFyIVcHVua3QgcGx1c2EgamFzdHJvd2llkgEjdGVsZWNvbW11bmljYXRpb25zX3NlcnZpY2VfcHJvdmlkZXI,y,xj0aYW_s4iM;mv:[[53.41947197731903,16.812155998409892],[53.41911202268096,16.81155200159011]]">Jastrowie, ul Poznańska 14,
              <span>tel. 67 266 19 62</span>  </a>
          </li>
          <li >
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+drezdenko&tbm=lcl&sxsrf=APq-WBtuM8DeWmoU8UnPE6wonCoaKLDd2A%3A1643907524253&ei=xAn8Ya7xDtmGwPAPntS8-Aw&oq=punkt+plusa+drez&gs_l=psy-ab.1.0.0i22i30k1.30659.31880.0.33442.6.6.0.0.0.0.153.678.0j5.5.0....0...1c.1.64.psy-ab..1.5.678...35i39k1j0i67k1j0i512k1j0i22i10i30k1.0.1BfkqdV5fo0#rlfi=hd:;si:7040596039010759664,l,ChVzYWxvbiBwbHVzYSBkcmV6ZGVua29aFyIVc2Fsb24gcGx1c2EgZHJlemRlbmtvkgEjdGVsZWNvbW11bmljYXRpb25zX3NlcnZpY2VfcHJvdmlkZXKqARMQASoPIgtzYWxvbiBwbHVzYSgL;mv:[[52.841538299999996,15.8315897],[52.835838599999995,15.830994100000002]]">Drezdenko, ul Kościuszki 7, <span>tel. 95 762 15 57</span></a>
          </li>
          <li>
            <img src="assets/mapPin.svg" alt="Lokalizacje" />

            <a target="_blank" href="https://www.google.com/search?q=salon+plusa+wielen&tbm=lcl&sxsrf=APq-WBuQzoLwaHC8t6lRVOVyN9rwKfWOxA%3A1643907558683&ei=5gn8Yfr-KOT2qwH-1YSADQ&oq=salon+plusa+wielen&gs_l=psy-ab.3..0i22i30k1j0i457i22i30k1.27680.28295.0.28532.6.6.0.0.0.0.222.517.0j2j1.3.0....0...1c.1.64.psy-ab..3.3.517...0i512k1j0i512i10k1.0.8m3TpeRuh3g#rlfi=hd:;si:9801691808938333880,l,ChJzYWxvbiBwbHVzYSB3aWVsZW5aFCISc2Fsb24gcGx1c2Egd2llbGVukgEjdGVsZWNvbW11bmljYXRpb25zX3NlcnZpY2VfcHJvdmlkZXI;mv:[[52.9087458,16.18572],[52.63595420000001,16.005318]]">Wieleń, ul Kościuszki 44,<span>tel. 67 256 10 84</span> </a>
          </li>
        </ul>
      </div>
      </section>
      <section class="section section-about">
        <img class="map" src="assets/phone.png" alt="Lokalizacje" />
          <div>
            <h2 id="o-nas" class="section-header">O nas</h2>
            <div class="about-text">
              <p>Tworzymy dynamiczny i rozwojowy zespół. Swoją pracę opieramy na kilku wartościach, dla których każdego dnia chcemy wspólnie budować relacje z naszymi klientami.</p>
              <p>Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).</p>
              <p>Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce zobaczyć sam jej wygląd. Jedną z mocnych stron używania Lorem Ipsum jest to, że ma wiele różnych „kombinacji” zdań, słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, sprawiającego, że wygląda to „zbyt czytelnie” po polsku. </p>
              <p>Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i wpisanie w internetowej wyszukiwarce ‘lorem ipsum’ spowoduje znalezienie bardzo wielu stron, które wciąż są w budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie (humorystyczne wstawki itd).</p>
            </div>
          </div>
      </section>

      <section id="" class="section section-weare">
        <img class="weare-image" src="assets/idea.png" alt="Lokalizacje" />
        <div>
        <h2 class="section-header">Jesteśmy:</h2>
        <ul class="list-characteristic">
          <li>
            <img src="assets/checkedIcon.svg" alt="Lokalizacje" />
            <p><span>ZAANGAŻOWANI: </span>
              szanujemy ludzi, z którymi współpracujemy, dlatego z pełnym oddaniem   podejmujemy się nowych wyzwań.
            </p>
          </li>
          <li>
            <img src="assets/checkedIcon.svg" alt="Lokalizacje" />
            <p><span>OTWARCI: </span>
              na wyzwania, które stawia wymagający rynek naszych klientów.
            </p>
          </li>
          <li>
            <img src="assets/checkedIcon.svg" alt="Lokalizacje" />
            <p><span>ROZWOJOWI: </span>
              otwieramy się na zmiany i nieustannie poszukujemy najlepszych dróg do osiągnięcia celu.
            </p>
          </li>
        </ul>
        </div>
        
      </section>

      <section id="uslugi" class="section section-services">
        <h2 class="section-header">Nasze usługi</h2>
        <div class="services-list-wrapper">
          <div class="services-list-item">
            <img src="assets/phoneIcon.svg" alt="Lokalizacje" />
            <h3>Usługi sieci plus</h3>
            <ul>
              <li>
                  - zawieranie umów o świadczenie usług telekomunikacyjnych
              </li>
              <li>
                  - sprzedaż smartofonów, tabletów, routerów i modemów z oferty opertatora. Także bez umowy
              </li>
              <li>
                  - zmiany na koncie abonenckim
              </li>
              <li>
                  - wymiana karty SIM
              </li>
              <li>
                  - sprzedaż usług prepaid
              </li>
              <li>
                  - doładowania kart prepaid
              </li>
              <li>
                  - zabezpieczanie sprzętów przed uszkodzeniem ( folia hydrożelowa )
              </li>
            </ul>
          </div>

          <div class="services-list-item">
            <img src="assets/computerIcon.svg" alt="Lokalizacje" />
            <h3>Usługi Polsat Box</h3>
            <ul>
              <li>
                  - zawieranie umów na odbiór telewizji Polsat Box
              </li>
              <li>
                  - wymiana dekoderów
              </li>
              <li>
                  - instalacja zestawów do odbioru telewizji
              </li>
            </ul>
          </div>

          <div class="services-list-item">
            <img src="assets/settingsIcon.svg" alt="Obsługa posprzedażowa" />
            <h3>Obsługa posprzedażowa</h3>
            <ul>
              <li>
                  - przyjmowanie zgłoszeń reklamacyjnych i wysyłka do serwisu w imieniu klientów
              </li>
              <li>
                  - instruktaż obsługi urządzeń
              </li>
              <li>
                  - konfiguracja urządzeń
              </li>
            </ul>
          </div>
          <div class="services-list-item">
            <img src="assets/tagIcon.svg" alt="Obsługa posprzedażowa" />
            <h3>Sprzedaż akcesoriów</h3>
            <ul>
              <li>
                  - futerały, ładowarki, folie i szkła ochronne
              </li>
              <li>
                  - piloty do dekoderów CP
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section id="kontakt" class="section section-contact">
        <img class="section-contact-image" src="assets/facio.png" alt="Lokalizacje" />
        <div>
          <h2 class="section-header">Skontaktuj się z nami</h2>
          <p>Mass Polska spółka z ograniczoną odpowiedzialnością sp.k.</p>
          <ul class="section-contact-list">
            <li>
              <img src="assets/mapPin.svg" alt="Lokalizacje" />
              <a target="_blank" href="https://goo.gl/maps/na4u6jScjBJbRxmL8">ul Kościelna 33/212, 60-537 Poznań</a>
            </li>
            <li>
              <img src="assets/mailIconRed.svg" alt="Ikona mailu" />
              <a target="_blank" href="mailto:biuro@mass.com.pl">biuro@mass.com.pl</a>
            </li>
          </ul>
        </div>
      </section>
    </main>

    <footer class="section" id="footer">
      <img class="logo-white" src="assets/logoWhite.png" alt="Logo MASS na ciemnym tle" />
      <ul class="nav-footer-list">
        <li>
          <a target="_blank" href="">Zostań doradcą</a>
        </li>
        <li>
          <a href="#home">Strona główna</a>
        </li>
        <li>
          <a href="#o-nas">O nas</a>
        </li>
        <li>
          <a href="#salony">Punkty</a>
        </li>
        <li>
          <a href="#kontakt">Kontakt</a>
        </li>
        <li>
          <a href="#uslugi">Usługi</a>
        </li>
      </ul>
      <div>
        <p class="footer-masstext">Mass Polska spółka z ograniczoną odpowiedzialnością sp.k.</p>
        <ul class="nav-footer-list-info">
          <li>
            <img src="assets/pinMapWhite.svg" alt="Lokalizacje" />
            <a target="_blank" href="">ul Kościelna 33/212, 60-537 Poznań</a>
          </li>
          <li>
            <img src="assets/mailIcon.svg" alt="Ikona mailu" />
            <a target="_blank" href="">biuro@mass.com.pl</a>
          </li>
        </ul>
      </div>
    </footer>
  </body>
</html>