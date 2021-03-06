<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="images/table_tennis1.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="images/table_tennis3.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="images/table_tennis4.jpeg" alt="Third slide">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

<div class="container-fluid text-center usluge pb-5 icons ">

    <div class="row services pt-5 wow bounceInUp">
        <div class="col-2">

        </div>
        <div class="col-lg-2 services-box text-center">
            <div class="box-usluge p-4">
                <div class="unutra mt-5">

                    <i class="fas fa-table-tennis"></i>
                    <h3></h3>
                    <p> 5 Donic 25 mm stolova za trening i jedan sto sa robotom</p>
                </div>
            </div>
        </div>

        <div class="col-lg-2 services-box">
            <div class="box-usluge p-4">
                <div class="unutra mt-5">
                    <i class="fab fa-accessible-icon"></i>
                    <h3></h3>
                    <p>Sala je specijalno opremljena za osobe sa invaliditetom</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 services-box">
            <div class="box-usluge p-4">
                <div class="unutra mt-5">
                    <i class="fas fa-fire vatra"></i>
                    <i class="fas fa-snowflake"></i>
                    <h3></h3>
                    <p>Adekvatno grejanje i
                        klima uredjaj</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 services-box">
            <div class="box-usluge p-4">
                <div class="unutra mt-5">
                    <i class="fas fa-clock"></i>
                    <h3></h3>
                    <p>Radno vreme: <br> od 8 do 22 <br>svakim danom</p>
                </div>
            </div>
        </div>


    </div>
</div>
<?php
$sql = "SELECT * FROM news ORDER BY news_id DESC LIMIT 1";

$statement = $conn->prepare($sql);

$statement->execute();

$statement->setFetchMode(PDO::FETCH_ASSOC);

$vesti = $statement->fetchall();
function skracivanje($opis)
{
    return substr($opis, 0, 80) . '...';
};
?>

<div class=" pt-5 desavanjaa">
    <div class="container">
        <h2 class="text-center mb-5">Dešavanja</h2>
<?php foreach ($vesti as $vest) : ?>

        <div class="row">
            <div class="col-8">
          <h2 class="mb-5"><?php echo $vest['title'] ?></h2>
                <p><?php echo skracivanje($vest['text']) ?></p>
             <a href="index.php?stranica=event&id=<?php echo $vest["news_id"] ?>">saznaj više</a>
            </div>
            <div class="col-4">
                <img class="mb-5" src="uploads/<?php echo $vest['picture'] ?>" style="width: 100%" alt="">

            </div>
            <a class="btn btn-primary mb-4 starije " href="index.php?stranica=events">starije</a>
        </div>
<?php endforeach; ?>
    </div>
</div>


<div id="onama"></div>
<div class="about pb-5">
    <div class="container-fluid">
        <div class="row red-1">
            <div class="col"></div>
            <div class="col-lg-3">
                <h2 class="text-center pb-5 pt-5">O nama</h2>
                <div class="aboutUs wow bounceInUp">
                    <img src="images/o_nama.jpg" class="img-fluid mb-3">
                    <p class="">Stonoteniska sala blizu kružnog toka na Veterniku je otvorena za sve entuzijaste, od predškolskog do
                        seniorskog doba.
                        Specijano je opremljena i za osobe sa invaliditetom, što znaci svi stonoteniseri
                        kao i oni koji hoće da nauče su dobrodošli.
                    </p>
                    <p class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#onama-detaljnije">
                            Detaljnije
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 istorijat">
                <h2 class="text-center pb-5 pt-5">Istorijat</h2>
                <div class="aboutUs wow bounceInUp">
                    <img src="images/tebale-tenni-istorijat.jpg" height="" class="img-fluid mb-3">
                    <p class="">Sve je počelo pre par godina u Torontu. Moj
                        prijatelj i čovek koji je u uskom krugu prijatelja poznat kao kum (ne mafijaški), po imenu Steva
                        me je ponovo zainteresovao za stoni tenis. <br>
                    </p>
                    <p class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#istorijat-detaljnije">
                            Detaljnije
                        </button>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 statut">
                <h2 class="text-center pb-5 pt-5">Stručni tim</h2>
                <div class="aboutUs wow bounceInUp">
                    <img src="images/approved2.jpg" class="img-fluid mb-3" style="height: 200px; width: 100%">
                    <p class="">Statut, Dozvola za rad, diploma. stručni tim
                    </p>
                    <p class="text-center">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#onama-detaljnije">
                            Detaljnije
                        </button>
                    </p>
                </div>
            </div>
            <div class="col"></div>

        </div>


        <!-- The Modal -->
        <div class="modal fade" id="onama-detaljnije">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Info</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>Stonoteniska sala blizu kružnog toka na Veterniku je otvorena za sve entuzijaste, od
                            predškolskog do seniorskog doba.
                            Specijano je opremljena i za osobe sa invaliditetom, što znaci svi stonoteniseri
                            kao i oni koji hoće da nauče su dobrodošli. <br> <br>Sala ima 5 stolova za trening i jedan sto sa
                            robotom.
                            Moguće su sve konfiguracije stolova od jednog do 3 stola za takmičenja, kao i 4 stola za
                            takmičenja
                            liga. Stolovi su Donic 25 mm, dok je pod višeslojna sportska profesionalna podloga
                            prekrivena sa 4.8
                            mm Gerflor Taraflex podlogom za stoni tenis sa hladnim varenjem između traka Taraflexa. <br><br>
                            Osvetljenje
                            je LED iznad stolova sa 750 luksa bez odsjaja sa stolova. Sto sa robotom ima dva usmerene
                            reflektora
                            direktno na sto. <br><br> Sala je opremljena sa dve velike svlačionice sa individualnim ormarićima za
                            odlaganje opreme i odeće. WC je po standardima svetske organizacije za osobe sa
                            invaliditetom.
                            Postoji posebna muška ženska svlačionica, kao i WC nadovezan na svlačionicu. U ženskom WC-u
                            postoji
                            i tuš sa odgovarajućom preklopnom stolicom prilegođenom osobama sa invaliditetom. Takođe
                            postoji i
                            WC sa tuš kabinom koji nije predviđen za osobe koje koriste invalidska kolica. <br><br> Sala ima
                            grejanje i
                            klima uredjaj koji je specijalizovan za prostore gde nije dozvoljeno povećana cirkulacija
                            vazduha
                            (nema promaje).  Izolacija je dovoljno dobra da su potrebe grejanja i hladjenja minimalne.
                            <br><br>
                            Visina
                            sale je odgovarajuća standardima takmicarskih sala čime obezbedjuje prozračnost. Boje zidova
                            su
                            nereflektujuća prijatna tamno zelena do visine od 2.80m iznad čega je neutralna krem bela
                            boja kao i
                            svoda sale. <br><br> Ulaz je prilagodjen osobama sa svim stepenima invaliditeta u nivou sa behatonom
                            koji je
                            ispred ulaza u salu i parkinga za osobe sa invaliditetom. Veliki parking pokriven tucanikom
                            se
                            nalazi u nastavku behatonskog dela parkinga. <br><br> Ulaz u salu je odvojen staklenim delom u kome
                            se nalazi
                            stelaža za odlaganje cipela. Iz ovog dela se ulazi ili direktno u salu (za osobe u
                            kolicima), ili na
                            druga vrata u deo gde se nalaze stolovi i klupe za gledaoce i roditelje. U ovom delu se
                            nalazi i
                            dispenzer za hladnu vodu i piće. <br><br> Sala je otvorena od 8 ujutru do 22 sata svakim danom
                            uključujući i
                            vikend. Ova sala je centar kluba Tvrđava 021 i otvorena je za sve entuzijaste. Zakazivanje
                            termina
                            se obavlja kontaktom sa Ilijom Durasinovićem. Cena upotrebe stola za jedan sat je 300 din, a
                            moze se
                            zakupiti i cela sala za turnire i lige. Rekreativci su dobro dosli, a za one koji žele
                            dodatnu
                            obuku, mogu se rezervisati termini sa trenerima. </p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Zatvori</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="istorijat-detaljnije">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Istorijat</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p>Kako je nastala ideja o sali u Veterniku <br><br> Sve je počelo pre par godina u Torontu. Moj
                        prijatelj i čovek koji je u uskom krugu prijatelja poznat kao kum (ne mafijaški), po imenu Steva
                        me je ponovo zainteresovao za stoni tenis. Ja nisam nikada bio dobar u stonom tenisu, ali mi to
                        nije nikada smetalo da volim da zaigram. To je počelo jedared mesecno, pa se malo proredilo, pa
                        onda malo zgusnulo. Prosle godine sam došao na par meseci u Novi Sad i pre nego sto sam došao sa
                        Stevom smo istraživali gde bi bilo najbolje trenirati u Novom Sadu. Tu smo se oboje slozili da
                        Djordje Stanic ima najbolje uslove za ono što meni treba. Dobru salu, dobru volju, mnogo znanja
                        i strpljenje da trenira čoveka koji nikada u zivotu nije imao trenera, a pogotovu nekoga koga
                        treba da posluša. Slučajno dok je taj trening tek krenuo i ja video sebe na video snimku i
                        shvatio da će tu trebati nekoliko decenija treninga, moj kumić je silom prilike morao da planira
                        preseljenje svoje stolarske radionice. On je imao plac na Veterniku i započeo je gradju manje
                        hale. Pošto je bilo mesta više nego sto je trebalo, a majstor malo više izbetonirao ne bili šta
                        više zaradio, a mozda je bio i vidovit, pa ondak moj kum kaze: sto ne staviš tu jedan ping-pong
                        sto pa mozeš igrati. I ja kao što Bog zapoveda posluša svog kuma kakav je i red u Vojvodini. E,
                        sada je postao problem što je taj deo prostora bio veci nego za jedan sto, pa smo onda nacrtali
                        plan da napravimo salu za stoni tenis. Ali ne bilo kakvu salu, nego salu gde će moći svi da
                        igraju. U Novom Sadu to "svi" znači i osobe sa invaliditetom koji koriste razna pomagala
                        ukljucujuči i kolica. <br><br> Zasto sam ja želeo da bude takva sala. Prvo zato što je Novi Sad poznat po
                        legendarnim, a i sadašnjim šampionima u stonom tenisu koji imaju različite stepene invaliditeta,
                        a nemaju pravu salu i uslove za celogodišnji trening. Drugi razlog je to sto sam ja proveo skoro
                        deceniju radeći kao neurolog u regionalnom rehabilitacionom centru za povrede kicmene moždine u
                        Teksasu bio prevaspitan da uvek gledam očima mojih pacijenata šta je "prijateljska" sredina za
                        aktivnost, a šta je komplikovana i praktično neupotrebljiva sredina, recimo zgrade sa liftom na
                        poluspratu, kao ona gde je moja majka živela u Novom Sadu, ili sportske sale bez kontrole
                        temperature, ili ti bez klime. A onda je došla dugotrajna diskusija i misljenja raznih
                        stručnjaka, prijatelja i amatera stručnjaka kakva bi bila adekvatna podloga za salu gde svi mogu
                        da igraju ukljucujuci i trenige od 8 sati za one koji to žele a da ne stradaju kolena, članci i
                        stopala. A ona je došla na red i ITTF, internacionalna federacija i njena pravila i preporuke o
                        visini prostora, o veličini spram broja stolova, osvetljenju, o boji zidova, o..... To sve
                        zajedno sa preporukama svetske i američke asocijacije o invaliditetu je dovelo do toga da je
                        nekoliko mudrih prijatelja reklo da je bolje da smo sve srušili prvo pa nanovo gradili nego
                        nastavili gde su stali. Mozda su imali i pravo, ali radovi su već poodmakli i nije bilo nazad.
                        <br><br>
                        Sada u igru ulazi i Voja, nas prijatelj i specijalista za veze i telefone, koji je između
                        ostalog prijatelj sa Ilijom (Ilija Durasinović), koji je na prvom susretu sa mojim kumom ga
                        potpuno pridobio svojim entuzijazmom. Mozda treba sada napomenuti da je sve radove organizovao i
                        nagledao moj kum Mićko, koji inače po mom sećanju, a to je bar 5-6 decenija unazad nije uzeo
                        ping-pong reket u ruku. Što se kaže ništa nije slučajno, Ilija je baš osnovao novi klub Tvrdjava
                        021 i okupio grupu mladih osoba sa invaliditetom koji su odlučili da krenu i nastave putem
                        svojih trenera i šampiona i da i oni zavetlaju obraz <br><br>
                        Novog Sada, Vojvodine i Srbije. Moj kum Mićko je dobio počasno mesto na osnivačkom "balu" i tako
                        je postala simbioza Tvrđava 021 i sale na Veterniku sa posebnim uslovima za osobe sa
                        invaliditetom. <br><br> Naravno tu nije ni blizu kraj priče. Tu se pojavljuje i moj zet koji je inace
                        verziran u grejanje, hlađenje i izolaciju industrijskih objekata i koji naređuje da se stave
                        takve i takve debele krovne ploče, da se mora izolovati pod i zidovi, da se mora napraviti
                        dvostruka atestirana vatrootporna izolacija izmedju sale za stoni tenis i sale za stolariju,
                        obzirom da po zakonu to su dve razlicite delatnosti pod istim krovom. Srećom za čitaoce zabole
                        me prsti kucajući pa neću dalje. <br><br> Naravno ne bi bilo sale da nije bilo mnogo ljudi koji su
                        učestvovali u izgradnji i montaži, naravno po ugovoru, pa cu samo spomenuti one koji su bili
                        uvek kada je trebalo. Josip i Goga su manje više stanovali bar 4-5 meseci u hali radeći na
                        zidovima, gipsu, krečenju, farbanju i svemu drugom. Bez Čede nebi bilo struje, bez Boleta delova
                        metalne konstrukcije i i gvozdenih vrata, bez Marijana vodoinstalacija, bez oluka i okapnica,
                        bez Sanjike ne bi bilo lepe keramike, i tako još možemo ići dalje, a greh je ne spomenuti sve,
                        uključujući i Atilu, Musculus, ..podove, Željka i njegovu ekipu za behaton i parking. Sigurno
                        neko nije spomenut, ali nikako ne mogu propustiti jednog izuzetnog čoveka, našeg prvog komsiju,
                        koji je stvarno za posebnu priču. Kada ne bi bilo takvih ljudi onda mislim da bi ovaj svet bio
                        osiromašen i besmislen. On nam je dao kabel za struju za sve ovo vreme, jer mi još nismo uspeli
                        da izvojujemo priključak od naših vajnih distibutera, ne zbog njih, nego sto to traje sve u
                        beskonačnost. E tu je naš komšija uskočio uključio kabel i stuju koji mi i sada koristimo za
                        trening. To bi vec bilo dovoljno, ali on je odbio da mi platimo struju, a mi smo bar nekoliko
                        puta iz raznih razloga izbili mu osigurače i ostao čovek bez struje i ništa. Kaže to je normalno
                        kada se radi i gradi. Pa gde to ima? Moj kum je prijavljen od prve komšinice kada je počeo
                        nešto da prepravlja u svojoj kući na Telepu. Inspekcija je došla sutradan. Nema veze jel imaš
                        papire i dozvole ili nemaš, manje više praksa je da te komšije prijave. LOL! Ali nas komšija je
                        pitao šta još treba da pomogne. O tome sam čitao samo u knjigama i čuo od mog dede da je tako
                        nekad bilo. Još uvek se zna sta je moba, ali se ne sećam da smo to radili, osim mog kuma koji
                        radi i šta ga zamoliš i šta on misli da bi ga ti zamolio a sramota te je da pitaš. <br><br> A sada nešto
                        o blizini ili daljini sale u Veterniku od centra Novog Sada. Veterenik je nekada bio kada se
                        išlo prema Futogu ili Bačkoj Palanci. GSP je bio apsolutni kraj grada i svojevremeno smo se
                        pitali koje bio tako pametan da izmesti GSP tako daleko kada je pre bio tu gde je sada fudbalski
                        stadion Vojvodine i Spens. A sada je Veternik nastavak Novog Sada. Adice su sada uz bulevar i
                        bliže nego Salajka ili kraj Podbare kada se ide autom. Sve u svemu oko 20 minuta autom od
                        Mileticevog spomenika do sale u Veterniku. A tamo, ako dodje cela ekipa, pa svako u svom
                        šleperu, mogu da parkiraju, a ne ako dodju samo sa autom. Ja sam daleke 1981 godine imao svoj
                        prvi stan u Veterniku baš tu kod kružnog toka, ali na suportnoj strani od crkve koje nije još ni
                        bilo. Svi su se pitali zašto sam se iselio iz Nogo Sada i što tako daleko. Ja sam radio u
                        bolnici i trebalo mi je malo jače od 5 minuta da stignem, jer onda nije bilo tu kuća i to je bio
                        samo put čist, a nije bilo ni radara tamo. E, sada treba punih 12 minuta do bolnice ili Limana
                        onih novijih. Ako vam je to mnogo dodjite u New York ili Toronto, ili dosta je i Beograd, pa da
                        vas pitam dokle ćete stići za 12 ili 20 minuta. Ja bih rekao nigde, osim ako ne setate kuče da
                        malo obavi svoje poslove. Čovek se navikne na sve, od inflacije, do pretakanja benzina, do
                        vožnje više od sata do posla. Ja
                        se takodje sećam mog prijatelja Steve Nikšića, čuvenog novinara koji je godinama vozio iz Novog
                        Sada u Beograd na posao. Mi smo svi mislili da je malko skrenuo, pošto je bio oštar novinar inače,
                        a onda sam ja vozio preko sata na moj posao u Americi, i nisam mislio da sam skrenuo. A možda i
                        jesam. Ali takvih je bilo kako kod nas kažu na miliune. LOL! <br><br> A sada kratko zašto imamo na slici
                        dva zeca koja igraju stoni tenis. E, pa Futog je blizu, a jednu noć mi zatekli dva zeca kako
                        igraju tenis u našoj novo sagradjenoj sali. E, pa kada mogu zečevi, mogu i svi koji imaju
                        interes za stoni tenis. Dobrodošli!</p>
                    <img src="images/Zecevi-u-novoj-sali.jpg" width="100%" alt="">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Zatvori</button>
                </div>

            </div>
        </div>
    </div>
</div>



<div id="cenovnik"></div>
<div class="pricing pb-5">
    <div class="container pt-5 ">
        <h2 class="text-center mb-5">Cenovnik</h2>
        <div class="card-deck mb-3 text-center wow bounceInUp">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><i class="fas fa-table-tennis"></i></h4>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cena zakupa jednog stola</li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <h1 class="card-title pricing-card-title">300RSD
                        <small class="text-muted">/ Sat</small>
                    </h1>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><i class="fas fa-table-tennis"></i></h4>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Cena upotrebe robota</li>
                        <li></li>
                        <li></li>
                        <li></li>

                    </ul>
                    <h1 class="card-title pricing-card-title">$15
                        <small class="text-muted">/ Sat</small>
                    </h1>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal"><i class="fas fa-table-tennis"></i></h4>
                </div>
                <div class="card-body">

                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Zakupljivanje sale</li>
                        <li>Kontakt</li>
                        <li>000/000-000</li>
                        <li></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="ping_pong">

</div>

<div id="galerija"></div>
<div class="pics pb-5 pt-5">
    <div class="container">
        <h2 class="text-center pb-5 mt-5">Galerija</h2>
        <div class="popup-gallery">
            <div class="row wow bounceInUp">
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/1.JPG">
                        <img src="images/gallery_small/1small.JPG" class="img-fluid">
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/2.JPG">
                        <img src="images/gallery_small/2small.JPG" class="img-fluid">
                    </a>
                </div>

                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/3.JPG">
                        <img src="images/gallery_small/3small.JPG" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/4.JPG">
                        <img src="images/gallery_small/4small.JPG" class="img-fluid">
                    </a>
                </div>


                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/5.JPG">
                        <img src="images/gallery_small/5small.JPG" class="img-fluid">
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/6.JPG">
                        <img src="images/gallery_small/6small.JPG" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="row wow bounceInUp">
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/7.JPG">
                        <img src="images/gallery_small/7small.JPG" class="img-fluid">
                    </a>
                </div>

                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/8.JPG">
                        <img src="images/gallery_small/8small.JPG" class="img-fluid">
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a class="test-popup-link" href="images/gallery/9.JPG">
                        <img src="images/gallery_small/9small.JPG" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
</div>
<div id="kontakt"></div>
<iframe class=""
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22472.077053447712!2d19.74574826999174!3d45.24759800000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b0e017fa0b959%3A0x36bc5e244e310333!2z0J3QvtCy0LAgMTAxIDM3LCDQktC10YLQtdGA0L3QuNC6!5e0!3m2!1ssr!2srs!4v1528457187206"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>