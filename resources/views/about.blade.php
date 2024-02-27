@extends('layouts.app')

@section('content')
<div class="container">
   <p style="font-size: 1cm">   Despre noi </p> 
     <p style="color: black;">   Ne bucurăm să vă salutăm și să vă zicem bine ați venit în magazinul online FurnitureLand! <br>
        
        
        FurnitureLand este o echipă tânără și ambițioasă! <br>
        La FurnitureLand, suntem cu adevărat pasionați de mobilă, vânzări și asistență clienți. <br>
        Când vine vorba de experiență, nimeni nu ne poate învinge! Fondatorii și echipa de operatori FurnitureLand sunt persoane care au reușit deja să atingă succese în domeniul vânzărilor, tehnologiilor IT și care fac afaceri, dar rămânem în continuare ambițioși și gata să avansăm. <br>
        Atunci când sa creat proiectul FurnitureLand, am decis să ne concentrăm în primul rând pe necesitățile moderne ale tinerei generații, așa că am selectat cu atenție produsele pentru catalogul nostru de vânzări, astfel încât să puteți găsi nu doar gadgeturi, echipamente și accesorii moderne, dar și tot de ce aveți nevoie într-o eră a tehnologiilor. Pentru prima dată în mulți ani, pe piața din Republica Moldova a apărut un magazin online cu o versiune mobilă de înaltă calitate a site-ului. O căutare convenabilă și o interfață cu adevărat ușor de utilizat nu vă vor lăsa indiferenți și vă vor face pentru totdeauna clientul nostru fidel. <br>
         Acum poți fi sigur, FurnitureLand va deveni prietenul și ghidul tău în lumea tehnologiei.Vă vom ajuta să gasiți produsul dorit conform bugetului dumneavoastră, vă vom spune despre cele mai noi tehnologii și ne vom asigurăm că nu veți mai plăti suprapreț. <br>
        Datorită unui catalog bine structurat, unei descrieri detaliate a produselor și filtrelor speciale, puteți selecta cu ușurință produsul potrivit, iar dacă aveți nevoie de ajutor, consultanții noștri experimentați vă vor ajuta întotdeauna să navigați și să faceți alegerea corectă. <br>
        Primim și acceptăm întotdeauna păreri, comentarii și sugestii din partea clienților noștri, așa că nu ezitați să ne contactați în orice moment. Echipa noastră este întotdeauna gata să răspundă la orice întrebare, să vă ajute să luați decizia corectă, ne puteți considera consultantul dvs. personal la cumpărături. <br>
        Biroul și depozitul nostru sunt situate chiar în centrul Chișinăului. Acest lucru ne oferă posibilitatea de a livra rapid comanda la adresa indicată, iar dumneavoastră veți putea verifica și ridica singuri comanda la un moment convenabil pentru dvs. <br>
        Sortimentul magazinului nostru prezintă o varietate largă de mobila.     <br>
        Branduri cu renume mondial sunt prezentate pe site-ul nostru, așa ca: Confort,DP, noi îți aducem cele mai noi mobile la prețuri avantajoase. <br>
       Vom livra comanda dumneavoastră atunci cînd vă este convenabil și în orice oraș din Republica Moldova. <br>       
         Vă invităm să faceți cumpărături în magazinul nostru, să cumpărați la FurnitureLand este plăcut, profitabil și confortabil!</p> <br>
        
        <div style="display: flex"> <div>  <p style="font-size: 1cm; color:darkblue; ">Orarul nostru</p>
         <p style="color: darkblue; font-weight:400 ; font-size:0.6cm">Ln-Vi:	9:00 - 19:00 <br>
            Sm:	9:00 - 17:00 <br>
            Dm:	zi de odihnă <br>
         </p>  
          </div>   
        <div style="margin-left:220px;">
            <p style=" font-size: 1cm; color:darkblue; ">Contacteaza-ne</p>
            <p style="color: darkblue; font-weight: 400; font-size:0.6cm;"> <img style="height: 50px; " src={{asset("images/cell-phone.png" )}} alt="furniture image" class="img-thumbnail"> 079 232 232 </p>
            <p style="color: darkblue; font-weight: 400; font-size:0.6cm;;"> <img style="height: 50px; " src={{asset("images/gmail-logo.png" )}} alt="furniture image" class="img-thumbnail"> FurnitureLand@gmail.com </p>
        </div>
        <div style="margin-left:200px;">
            <p style=" font-size: 1cm; color:darkblue; ">Locatia noastra</p>

            <p style="color:darkblue; font-size:0.5cm"><img style="height: 50px; " src={{asset("images/location.png" )}} alt="furniture image" class="img-thumbnail"> str. Kogălniceanu 16, Chisinau
            </p>
        </div>
        </div><br>
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2720.3378851747257!2d28.83199361575422!3d47.01397233672012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97c25e620ec05%3A0xbdeb4a8633de92f8!2sStrada%20Mihail%20Kog%C4%83lniceanu%2016%2C%20Chi%C8%99in%C4%83u%2C%20Moldova!5e0!3m2!1sro!2s!4v1658068724263!5m2!1sro!2s" width="1300" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
</div>
@endsection
