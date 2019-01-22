-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 22 jan 2019 om 18:01
-- Serverversie: 5.6.38
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ma3`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ISB_act`
--

CREATE TABLE `ISB_act` (
  `id` int(11) NOT NULL,
  `act_naam` varchar(31) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artiest_id` int(11) NOT NULL,
  `omschrijving` varchar(274) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duur` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kinderen` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ISB_act`
--

INSERT INTO `ISB_act` (`id`, `act_naam`, `artiest_id`, `omschrijving`, `duur`, `type`, `kinderen`) VALUES
(1, 'Alegravito', 30, 'Een onemanshow met veel humor in een universele taal. Een clown, onschuldig, hartverscheurend, brutaal en meester van de onzin. Veel interactie met het publiek.', '45 min', 'voorstelling', 1),
(2, 'Castart Rollin', 9, 'Deze Beverse dansvereniging, waar jezelf inleven en plezier beleven centraal staat, duikt plots op in de straten en verrast. Stilstaan wordt wel heel moeilijk!', 'doorlopend', 'straatact', 1),
(3, 'Chringuito Paradise', 2, 'Alles staat klaar voor een geslaagde openingsplechtigheid van de cocktailbar. De champagne staat koud. Maar een ongeluk schuilt altijd in een klein hoekje…', '45 min', 'voorstelling', 1),
(4, 'Comme Un Vertige', 31, 'Op een luchtkader van 7 m hoog loert het gevaar om de hoek. Elke acrobaat tart dapper en gracieus de leegte om hem het gevoel te geven dat hij leeft. Met live rock-‘n-roll!', '45 min', 'voorstelling', 0),
(5, 'Contra', 26, 'De artiesten gaan op  zoek naar hun schaduw en gaan er mee in duet of in duel, met technieken zoals acrobatie, mime, theater en maskerspel.', '25 min', 'voorstelling', 1),
(6, 'De Bierpolitie', 20, 'De sympathieke agenten rijden rond in een veel te kleine interventiewagen. Besparingen! Hun alcoholcontroles zijn echter niet wat u denkt! Boetes zijn er nauwelijks, wel positieve aanbevelingen!', 'doorlopend', 'straatact', 0),
(7, 'De Kleinste Mobiele Cocktailbar', 10, 'Een interactieve, vurige en hilarische zoektocht naar mensen met ‘een alcoholtekort’. Een cocktail-consultatie waarbij de lachspieren het hard te verduren krijgen.', 'doorlopend', 'straatact', 0),
(8, 'De Protzuiger', 18, 'De protzuiger, die een sterk ontwikkeld reukorgaan heeft, trekt met zijn mobiele “afzuiginstallatie” rond. Zo zorgt hij voor een genietbare leefomgeving.', 'doorlopend', 'straatact', 1),
(9, 'Des Accords de mât', 5, 'Een acrobaat treft aan zijn Chinese mast een accordeonspeler aan. Een poëtische, energieke en muzikale ontmoeting, waarin het wederzijdse begrip tussen de twee groeit.', '30 min', 'voorstelling', 0),
(10, 'Duo Traumlicht und Waldlicht', 19, 'De met wiegende lampionbloemen verlichte “wensdroomboom” torent op sferische klanken boven de hoofden. Met haar wiebelende lichtboom laat Fiolina ons mee genieten van de dromen, die ze van de oude bomen wegplukte.', 'doorlopend', 'straatact', 1),
(11, 'Ekilibuâ', 25, 'Een koppel acteert op diverse houten haspels en combineert dit met acrobatie, messen gooien, evenwicht en objectmanipulatie.', '30 min', 'voorstelling', 1),
(12, 'F.I.S.H.', 41, 'Met veel humor drijven de straffe Kapitein, de punctuele Cartograaf en de olijke Kok hun kleurrijke reuze vissen, door middel van tandwielen, kettingen en raderwerken, aan.', 'doorlopend', 'straatact', 1),
(13, 'Familie Vestdijk', 33, 'De twee steltlopende stijve ouders op wandel met hun huilende baby in een te grote kinderwagen en hun zoontje van zes zijn een lust voor het  oog. De kleine humoristische acts, die zo nu en dan opvoeren, geven het geheel extra cachet.', 'doorlopend', 'straatact', 1),
(14, 'Fantasie Van Een Droom', 17, 'De jonge circusartiesten Zakki en Bobo uit Beveren zijn aan het slapen. Lees de brief voor en ga mee in hun levendige dromen …', '25 min', 'voorstelling', 1),
(15, 'Grime', 24, 'Mascara uit Beveren tovert bij de kinderen de leukste gezichten tevoorschijn.', 'doorlopend', 'activiteit', 1),
(16, 'Hippocampus', 41, 'De twee gladiatoren dobberen over de woelige baren. Lansen en degens worden gekruist. In oerkreten bazelen zij bezopen oneliners.', 'doorlopend', 'straatact', 1),
(17, 'HypErion', 21, 'Een clownesk typetje hupt op veerstelten door de menigte en brengt alle mensen aan het gniffelen.', 'doorlopend', 'straatact', 1),
(18, 'i-Puppets', 8, 'Ogen trekken aan je voorbij. De onderzoekers van deze planeet zijn vreemd, grappig en angstaanjagend.', 'doorlopend', 'straatact', 0),
(19, 'Jackpot', 41, 'Een onvoorspelbaar komische gokkast uit de roerige jaren twintig met binnenin drie illustere menselijke figuren. Haal de hendel over en ze komen één voor één voorbij. Is het geluk aan uw zijde? Drie op een rij is natuurlijk … JACKPOT!', 'doorlopend', 'straatact', 1),
(20, 'Juffrouw Suikerspin', 39, 'Een sprookjesachtig typetje met haar nostalgisch suikerspinnenkraam. Gratis deelt zij suikerspinnen uit aan jong en oud.', 'doorlopend', 'straatact', 1),
(21, 'L\'Homme Canon', 7, 'Met heel wat vuur, pyrotechniek en kluchtigheid herneemt dit viertal de ” Kanonman”: het traditionele nummer uit de circussen van weleer.', '20 min', 'voorstelling', 0),
(22, 'La Catastrophe Du Lapin', 4, 'Een steltenloper en een jongleur storten zich in een gekke wereld vol dansende kegels, balletjes … . Maar wat loopt dat verdwaald konijn daar te doen?', '30 min', 'voorstelling', 1),
(23, 'La Factoria', 16, 'Slagen Roos en Salim er in, met o.a. acrobatie en vliegwerk aan de trapeze, de 8 m hoge fabriek draaiende te houden? Kunnen ze hun eerste smakelijke lolly maken?', '30 min', 'voorstelling', 1),
(24, 'Lava Queens', 33, 'De prachtige Lava Queens op stelten zorgen met hun verlichte hoepelrokken voor een sprookjesachtige sfeer. Een vrolijk zonnig tafereel.', 'doorlopend', 'straatact', 1),
(25, 'Le Funambule Striptease', 29, 'De voorstelling zit vol hilarische komedie, improvisatie, circustechnieken en balanceerstunts. Het publiek zet Ben Zuddhist op weg naar een vurige finale.', '40 min', 'voorstelling', 0),
(26, 'Les Butors', 6, '“Les Butors” (= de roerdompen), die vreemde ‘hoempende’ geluiden voortbrengen, laten ons genieten van hun paringsdans op de roterende ladder van 7 m hoog.', '55 min', 'voorstelling', 0),
(27, 'Les Éclaireurs', 32, 'Een onbekend eiland dreigt te vergaan. Op de rug van “OISÔH”, een reuzenvogel van 7 bij 5 m, worden twee verkenners uitgestuurd om veiligere oorden op te zoeken en zo landen ze … in Beveren.', 'doorlopend', 'straatact', 1),
(28, 'Magic White Horses', 33, 'Deze prachtig verlichte witte viervoeters zijn half vrouw half paard. Zij creëren een magische sprookjessfeer.', 'doorlopend', 'straatact', 1),
(29, 'Men In Coats', 28, 'Een explosief duo, absurd en hilarisch. Hun handelsmerk is sprankelende visuele humor en  surrealistische slapstick die even grappig als inventief is.', '25 min', 'voorstelling', 1),
(30, 'Mi Grande', 36, 'Francesco zoekt naar de beste locatie om één grote reuzenzeepbel van 5 meter lang uit zijn zeepbellenstokjes te toveren. Een visuele en interactieve act met magie en improvisatie.', 'doorlopend', 'straatact', 1),
(31, 'Middeleeuws Tentenkamp', 40, 'Demonstraties van zwaardvechten en middeleeuws koken.  Kinderen zijn welkom op de kiddy battle en schietstand.', 'doorlopend', 'activiteit', 1),
(32, 'Naranja', 35, 'Naranja, een straattheater act op hoge stelten, is fris fruitig vrolijk. Zoet sappig en een tikkeltje zuur. Speels ondeugend en verleidelijk sensueel. Feestelijk geurend naar zomerse sinaasappels.', 'doorlopend', 'straatact', 0),
(33, 'Opi Bench', 38, 'De krachtige ballonnen, die opa voor zijn kleinkind kocht, tilden hem op. Met zijn wandelstok kon hij nog net de bank vastgrijpen. Zo wacht hij nu op zijn kleinkind.', 'doorlopend', 'straatact', 1),
(34, 'Princesse de la pinq', 34, 'Dit lief verlegen, schattig, sierlijk, speels clowntje danst met haar roze waaiers en glittert in het zonlicht. Een prachtige verschijning met haar lange benen.', 'doorlopend', 'straatact', 1),
(35, 'Quoi?fuur', 12, 'Eénmaal langs de kappersstoel van dit kapsalon gepasseerd, zal je leven nooit meer hetzelfde zijn. Opvallen doe je! Niets is onmogelijk voor dit wacko kapsalon.', 'doorlopend', 'activiteit', 1),
(36, 'Radio Mano Sport', 42, 'Deze zender geeft bij elke publieke beweging live en rechtstreeks een sportverslaggeving. Tussendoor hoor je krakende vinylplaten, jingles en reclame.', 'doorlopend', 'straatact', 0),
(37, 'Silento', 3, 'Dit dansduo, begeleid door een muzikant, ontdekt de sensuele liefde op de grond en aan het luchtkader. De choreografie mengt het horizontale met het verticale.', '30 min', 'voorstelling', 0),
(38, 'Strand', 18, '“Een dagje relaxen vraagt veel inspanning.” Een mimische clown act, doorspekt met slapstick en absurde humor.', '30 min', 'voorstelling', 1),
(39, 'The sky is the limit', 1, 'Een Amsterdamse jongleur en een onbevreesde Canadese éénwielerspecialist tonen met veel humor hun veelvoudige talenten.', '40 min', 'voorstelling', 1),
(40, 'Time To Loop', 27, 'Time to Loop is een verhaal over beweging, transformatie en liefde. De artiesten brengen dit op een elegante en acrobatische wijze en dit onder meer op de fiets.', '30 min', 'voorstelling', 1),
(41, 'Viva Victor', 15, 'Victor is jarig en krijgt van het publiek een cadeau dat uiteindelijk zijn leven zal veranderen. Visuele en absurde humor voor en in een caravan. Met publieksinteractie!', '40 min', 'voorstelling', 1),
(42, 'Vogelbaum und Blütenfee', 19, 'Een statige boom en een vogel zijn één geworden. Het bevallig vogelgezichtje bazelt een eigen taaltje en tiereliert er op los. Met de wervelende dans van de mooie Aziatische pop, die kwistig kushandjes geeft, wordt de extase van de lente gevierd.', 'doorlopend', 'straatact', 1),
(43, 'Workshop circustechnieken', 17, 'Wordt zelf circusartiest en wordt het derde lid van dit vrolijke trio.', '2u30 min', 'activiteit', 1),
(44, 'Gekkefietsencircuit', 43, 'Scouts en Chiro Sint-Martinus On Wheels zetten drie dagen lang het centrum op stelten met knotsgek fiets plezier en diertjes op wielen. Lol trappen krijgt plots een andere betekenis.', 'doorlopend', 'activiteit', 1),
(45, 'Clown Poefie', 22, 'Clown Poefie uit Kieldrecht tovert knappe ballonfiguren uit zijn mouw.', 'doorlopend', 'straatact', 1),
(46, 'Marino Punk', 23, 'Vrolijke accordeonmuziek met een hoek af', 'doorlopend', 'straatact', 0),
(47, 'Tomcat', 14, 'Geen veredeld balorkest, wel smaakvolle covers voor jongeren én oude zakken! Op het repertoire van TomCat staat een breed spectrum aan muziek. Van pop en rock over disco en soul naar latino en zelfs house. Dansbare nummers die overgoten worden met een flinke portie ambiance', 'doorlopend', 'straatact', 0),
(48, 'Reuzen van Beveren', 44, 'Sefken, Diederik, Aldegonde, Cieske, Brigand, Regina, Melkboerinneke, Birken, Judocus en Lodde bekijken het feest vanuit de hoogte.', 'doorlopend', 'straatact', 0),
(49, 'Tennessee Sun', 13, 'Met de vierkoppige band Tennessee Sun flits je terug in de tijd! Oorspronkelijk opgericht als een Johnny Cash tributeband is het repertoire inmiddels uitgebreid met pareltjes uit de jaren 50 en 60. Laat je onderdompelen in een dosis rockabilly, rock-‘n-roll en country.', 'doorlopend', 'straatact', 0),
(50, 'De Toape Geraapte', 11, 'Deze rondwandelende halve garen staan garant voor grappige ontmoetingen en liederen die elke vrouw charmeren. Van snoeiharde rock tot betoverende a-capella.', 'doorlopend', 'straatact', 0),
(51, 'Rock au vin', 45, 'Een mobiele minifanfare wandelt spelend tussen de terrasjes door en brengt de muziek tot bij u. Intiem en gezellig maar evengoed ambiance en dansbaar.', 'doorlopend', 'straatact', 0),
(52, 'Ballonnenpiraat', 37, 'De Ballonnenpiraat uit Beveren tovert in enkele minuten de tofste figuurtjes uit zijn mouw. Zeg nu zelf welk kind is er niet blij met een reuze octopus, een mooie kat of een coole auto, … .', 'doorlopend', 'straatact', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ISB_afbeelding`
--

CREATE TABLE `ISB_afbeelding` (
  `id` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `afbeelding` varchar(41) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ISB_afbeelding`
--

INSERT INTO `ISB_afbeelding` (`id`, `act_id`, `date`, `afbeelding`) VALUES
('‡', 24, '2019-01-22 16:31:13', 'act/lava-queens/2.jpg'),
('1', 1, '2019-01-22 16:31:13', 'act/alegravito/1.jpg'),
('10', 10, '2019-01-22 16:31:13', 'act/duo-traumlicht-und-waldlicht/1.jpg'),
('100', 22, '2019-01-22 16:31:13', 'act/la-catastrophe-du-lapin/2.jpg'),
('101', 22, '2019-01-22 16:31:13', 'act/la-catastrophe-du-lapin/3.jpg'),
('102', 22, '2019-01-22 16:31:13', 'act/la-catastrophe-du-lapin/4.jpg'),
('103', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/2.jpg'),
('104', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/3.jpg'),
('105', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/4.jpg'),
('106', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/5.jpg'),
('107', 13, '2019-01-22 16:31:13', 'act/familie-vestdijk/2.jpg'),
('108', 13, '2019-01-22 16:31:13', 'act/familie-vestdijk/3.jpg'),
('109', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/6.jpg'),
('11', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/1.jpg'),
('110', 13, '2019-01-22 16:31:13', 'act/familie-vestdijk/4.jpg'),
('111', 24, '2019-01-22 16:31:13', 'act/lava-queens/3.jpg'),
('113', 20, '2019-01-22 16:31:13', 'act/levend-theater/2.jpg'),
('114', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/1.jpg'),
('115', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/2.jpg'),
('116', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/3.jpg'),
('117', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/4.jpg'),
('118', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/5.jpg'),
('119', 11, '2019-01-22 16:31:13', 'act/ekilibuâ/6.jpg'),
('12', 12, '2019-01-22 16:31:13', 'act/F.I.S.H./1.jpg'),
('120', 46, '2019-01-22 16:31:13', 'act/marino-punk/2.jpg'),
('121', 46, '2019-01-22 16:31:13', 'act/marino-punk/3.jpg'),
('122', 15, '2019-01-22 16:31:13', 'act/grime/2.jpg'),
('123', 15, '2019-01-22 16:31:13', 'act/grime/3.jpg'),
('124', 29, '2019-01-22 16:31:13', 'act/men-in-coats/2.jpg'),
('125', 29, '2019-01-22 16:31:13', 'act/men-in-coats/3.jpg'),
('126', 42, '2019-01-22 16:31:13', 'act/vogelbaum-und-blütenfee/2.jpg'),
('127', 42, '2019-01-22 16:31:13', 'act/vogelbaum-und-blütenfee/3.jpg'),
('128', 42, '2019-01-22 16:31:13', 'act/vogelbaum-und-blütenfee/4.jpg'),
('129', 10, '2019-01-22 16:31:13', 'act/duo-traumlicht-und-waldlicht/2.jpg'),
('13', 13, '2019-01-22 16:31:13', 'act/familie-vestdijk/1.jpg'),
('130', 27, '2019-01-22 16:31:13', 'act/les-eclaireurs/2.jpg'),
('131', 27, '2019-01-22 16:31:13', 'act/les-eclaireurs/3.jpg'),
('132', 27, '2019-01-22 16:31:13', 'act/les-eclaireurs/4.jpg'),
('133', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/2.jpg'),
('134', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/3.jpg'),
('135', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/4.jpg'),
('136', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/5.jpg'),
('137', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/6.jpg'),
('138', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/7.jpg'),
('139', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/8.jpg'),
('14', 14, '2019-01-22 16:31:13', 'act/fantasie-van-een-droom/1.jpg'),
('140', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/9.jpg'),
('141', 51, '2019-01-22 16:31:13', 'act/rock-au-vin/2.jpg'),
('142', 51, '2019-01-22 16:31:13', 'act/rock-au-vin/3.jpg'),
('143', 35, '2019-01-22 16:31:13', 'act/quoifuur/2.jpg'),
('144', 35, '2019-01-22 16:31:13', 'act/quoifuur/3.jpg'),
('145', 35, '2019-01-22 16:31:13', 'act/quoifuur/4.jpg'),
('146', 35, '2019-01-22 16:31:13', 'act/quoifuur/5.jpg'),
('147', 35, '2019-01-22 16:31:13', 'act/quoifuur/6.jpg'),
('148', 35, '2019-01-22 16:31:13', 'act/quoifuur/7.jpg'),
('149', 35, '2019-01-22 16:31:13', 'act/quoifuur/8.jpg'),
('15', 15, '2019-01-22 16:31:13', 'act/grime/1.jpg'),
('150', 35, '2019-01-22 16:31:13', 'act/quoifuur/9.jpg'),
('151', 35, '2019-01-22 16:31:13', 'act/quoifuur/10.jpg'),
('152', 32, '2019-01-22 16:31:13', 'act/naranja/2.jpg'),
('153', 32, '2019-01-22 16:31:13', 'act/naranja/3.jpg'),
('154', 32, '2019-01-22 16:31:13', 'act/naranja/4.jpg'),
('155', 32, '2019-01-22 16:31:13', 'act/naranja/5.jpg'),
('156', 32, '2019-01-22 16:31:13', 'act/naranja/6.jpg'),
('157', 49, '2019-01-22 16:31:13', 'act/tennessee-sun/2.jpg'),
('158', 49, '2019-01-22 16:31:13', 'act/tennessee-sun/3.jpg'),
('159', 49, '2019-01-22 16:31:13', 'act/tennessee-sun/4.jpg'),
('16', 16, '2019-01-22 16:31:13', 'act/hippocampus/1.jpg'),
('160', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/2.jpg'),
('161', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/3.jpg'),
('162', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/4.jpg'),
('163', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/5.jpg'),
('164', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/6.jpg'),
('165', 47, '2019-01-22 16:31:13', 'act/tomcat/2.jpg'),
('166', 43, '2019-01-22 16:31:13', 'act/workshop-circustechnieken/2.jpg'),
('167', 43, '2019-01-22 16:31:13', 'act/workshop-circustechnieken/3.jpg'),
('168', 43, '2019-01-22 16:31:13', 'act/workshop-circustechnieken/4.jpg'),
('169', 19, '2019-01-22 16:31:13', 'act/jackpot/2.jpg'),
('17', 17, '2019-01-22 16:31:13', 'act/hyperion/1.jpg'),
('170', 19, '2019-01-22 16:31:13', 'act/jackpot/3.jpg'),
('171', 19, '2019-01-22 16:31:13', 'act/jackpot/4.jpg'),
('172', 12, '2019-01-22 16:31:13', 'act/F.I.S.H./2.jpg'),
('173', 12, '2019-01-22 16:31:13', 'act/F.I.S.H./3.jpg'),
('174', 12, '2019-01-22 16:31:13', 'act/F.I.S.H./4.jpg'),
('175', 16, '2019-01-22 16:31:13', 'act/hippocampus/2.jpg'),
('176', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/2.jpg'),
('177', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/3.jpg'),
('178', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/4.jpg'),
('179', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/5.jpg'),
('18', 18, '2019-01-22 16:31:13', 'act/i-puppets/1.jpg'),
('180', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/6.jpg'),
('181', 6, '2019-01-22 16:31:13', 'act/de-bierpolitie/2.jpg'),
('182', 6, '2019-01-22 16:31:13', 'act/de-bierpolitie/3.jpg'),
('183', 6, '2019-01-22 16:31:13', 'act/de-bierpolitie/4.jpg'),
('184', 37, '2019-01-22 16:31:13', 'act/silento/2.jpg'),
('185', 37, '2019-01-22 16:31:13', 'act/silento/3.jpg'),
('186', 37, '2019-01-22 16:31:13', 'act/silento/4.jpg'),
('187', 37, '2019-01-22 16:31:13', 'act/silento/5.jpg'),
('188', 30, '2019-01-22 16:31:13', 'act/mi-grande/2.jpg'),
('189', 30, '2019-01-22 16:31:13', 'act/mi-grande/3.jpg'),
('19', 19, '2019-01-22 16:31:13', 'act/jackpot/1.jpg'),
('190', 30, '2019-01-22 16:31:13', 'act/mi-grande/4.jpg'),
('191', 30, '2019-01-22 16:31:13', 'act/mi-grande/5.jpg'),
('192', 30, '2019-01-22 16:31:13', 'act/mi-grande/6.jpg'),
('2', 2, '2019-01-22 16:31:13', 'act/castart-rollin/1.jpg'),
('20', 20, '2019-01-22 16:31:13', 'act/levend-theater/1.jpg'),
('21', 21, '2019-01-22 16:31:13', 'act/homme-canon/1.jpg'),
('22', 22, '2019-01-22 16:31:13', 'act/la-catastrophe-du-lapin/1.jpg'),
('23', 23, '2019-01-22 16:31:13', 'act/la-factoria/1.jpg'),
('24', 24, '2019-01-22 16:31:13', 'act/lava-queens/1.jpg'),
('25', 25, '2019-01-22 16:31:13', 'act/le-funambule-striptease/1.jpg'),
('26', 26, '2019-01-22 16:31:13', 'act/les-butors/1.jpg'),
('27', 27, '2019-01-22 16:31:13', 'act/les-eclaireurs/1.jpg'),
('28', 28, '2019-01-22 16:31:13', 'act/magic-white-horses/1.jpg'),
('29', 29, '2019-01-22 16:31:13', 'act/men-in-coats/1.jpg'),
('3', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/1.jpg'),
('30', 30, '2019-01-22 16:31:13', 'act/mi-grande/1.jpg'),
('31', 31, '2019-01-22 16:31:13', 'act/middeleeuws-tentenkamp/1.jpg'),
('32', 32, '2019-01-22 16:31:13', 'act/naranja/1.jpg'),
('33', 33, '2019-01-22 16:31:13', 'act/opi-bench/1.jpg'),
('34', 34, '2019-01-22 16:31:13', 'act/princesse-de-la-pinq/1.jpg'),
('35', 35, '2019-01-22 16:31:13', 'act/quoifuur/1.jpg'),
('36', 36, '2019-01-22 16:31:13', 'act/radio-mano-sport/1.jpg'),
('37', 37, '2019-01-22 16:31:13', 'act/silento/1.jpg'),
('38', 38, '2019-01-22 16:31:13', 'act/strand/1.jpg'),
('39', 39, '2019-01-22 16:31:13', 'act/the-sky-is-the-limit/1.jpg'),
('4', 4, '2019-01-22 16:31:13', 'act/comme-un-vertige/1.jpg'),
('40', 40, '2019-01-22 16:31:13', 'act/time-to-loop/1.jpg'),
('41', 41, '2019-01-22 16:31:13', 'act/viva-victor/1.jpg'),
('42', 42, '2019-01-22 16:31:13', 'act/vogelbaum-und-blütenfee/1.jpg'),
('43', 43, '2019-01-22 16:31:13', 'act/workshop-circustechnieken/1.jpg'),
('44', 44, '2019-01-22 16:31:13', 'act/gekkenfietsencircuit/1.jpg'),
('45', 45, '2019-01-22 16:31:13', 'act/clown-poefie/1.jpg'),
('46', 46, '2019-01-22 16:31:13', 'act/marino-punk/1.jpg'),
('47', 47, '2019-01-22 16:31:13', 'act/tomcat/1.jpg'),
('48', 48, '2019-01-22 16:31:13', 'act/reuzen-van-beveren/1.jpg'),
('49', 49, '2019-01-22 16:31:13', 'act/tennessee-sun/1.jpg'),
('5', 5, '2019-01-22 16:31:13', 'act/contra/1.jpg'),
('50', 50, '2019-01-22 16:31:13', 'act/de-toape-geraapte/1.jpg'),
('51', 51, '2019-01-22 16:31:13', 'act/rock-au-vin/1.jpg'),
('52', 52, '2019-01-22 16:31:13', 'act/ballonnenpiraat/1.jpg'),
('53', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/2.jpg'),
('54', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/3.jpg'),
('55', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/4.jpg'),
('56', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/5.jpg'),
('57', 3, '2019-01-22 16:31:13', 'act/chringuito-paradise/6.jpg'),
('58', 1, '2019-01-22 16:31:13', 'act/alegravito/2.jpg'),
('59', 1, '2019-01-22 16:31:13', 'act/alegravito/3.jpg'),
('6', 6, '2019-01-22 16:31:13', 'act/de-bierpolitie/1.jpg'),
('60', 1, '2019-01-22 16:31:13', 'act/alegravito/4.jpg'),
('61', 4, '2019-01-22 16:31:13', 'act/comme-un-vertige/2.jpg'),
('62', 4, '2019-01-22 16:31:13', 'act/comme-un-vertige/3.jpg'),
('63', 4, '2019-01-22 16:31:13', 'act/comme-un-vertige/4.jpg'),
('64', 4, '2019-01-22 16:31:13', 'act/comme-un-vertige/5.jpg'),
('65', 52, '2019-01-22 16:31:13', 'act/ballonnenpiraat/2.jpg'),
('66', 52, '2019-01-22 16:31:13', 'act/ballonnenpiraat/3.jpg'),
('67', 52, '2019-01-22 16:31:13', 'act/ballonnenpiraat/4.jpg'),
('68', 52, '2019-01-22 16:31:13', 'act/ballonnenpiraat/5.jpg'),
('69', 25, '2019-01-22 16:31:13', 'act/le-funambule-striptease/2.jpg'),
('7', 7, '2019-01-22 16:31:13', 'act/de-kleinste-mobiele-cocktailbar/1.jpg'),
('70', 25, '2019-01-22 16:31:13', 'act/le-funambule-striptease/3.jpg'),
('71', 25, '2019-01-22 16:31:13', 'act/le-funambule-striptease/4.jpg'),
('72', 25, '2019-01-22 16:31:13', 'act/le-funambule-striptease/5.jpg'),
('73', 2, '2019-01-22 16:31:13', 'act/castart-rollin/2.jpg'),
('74', 2, '2019-01-22 16:31:13', 'act/castart-rollin/3.jpg'),
('75', 9, '2019-01-22 16:31:13', 'act/des-accords-de-mât/2.jpg'),
('76', 9, '2019-01-22 16:31:13', 'act/des-accords-de-mât/3.jpg'),
('77', 9, '2019-01-22 16:31:13', 'act/des-accords-de-mât/4.jpg'),
('78', 9, '2019-01-22 16:31:13', 'act/des-accords-de-mât/5.jpg'),
('79', 18, '2019-01-22 16:31:13', 'act/i-puppets/2.jpg'),
('8', 8, '2019-01-22 16:31:13', 'act/de-protzuiger/1.jpg'),
('80', 18, '2019-01-22 16:31:13', 'act/i-puppets/3.jpg'),
('81', 18, '2019-01-22 16:31:13', 'act/i-puppets/4.jpg'),
('82', 18, '2019-01-22 16:31:13', 'act/i-puppets/5.jpg'),
('83', 38, '2019-01-22 16:31:13', 'act/strand/1.jpg'),
('84', 38, '2019-01-22 16:31:13', 'act/strand/2.jpg'),
('85', 38, '2019-01-22 16:31:13', 'act/strand/3.jpg'),
('86', 38, '2019-01-22 16:31:13', 'act/strand/4.jpg'),
('87', 33, '2019-01-22 16:31:13', 'act/opi-bench/2.jpg'),
('88', 33, '2019-01-22 16:31:13', 'act/opi-bench/3.jpg'),
('89', 40, '2019-01-22 16:31:13', 'act/time-to-loop/2.jpg'),
('9', 9, '2019-01-22 16:31:13', 'act/des-accords-de-mât/1.jpg'),
('90', 40, '2019-01-22 16:31:13', 'act/time-to-loop/3.jpg'),
('91', 40, '2019-01-22 16:31:13', 'act/time-to-loop/4.jpg'),
('92', 23, '2019-01-22 16:31:13', 'act/la-factoria/1.jpg'),
('93', 23, '2019-01-22 16:31:13', 'act/la-factoria/2.jpg'),
('94', 5, '2019-01-22 16:31:13', 'act/contra/1.jpg'),
('95', 5, '2019-01-22 16:31:13', 'act/contra/2.jpg'),
('96', 5, '2019-01-22 16:31:13', 'act/contra/3.jpg'),
('97', 41, '2019-01-22 16:31:13', 'act/viva-victor/1.jpg'),
('98', 41, '2019-01-22 16:31:13', 'act/viva-victor/2.jpg'),
('99', 41, '2019-01-22 16:31:13', 'act/viva-victor/3.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ISB_artiest`
--

CREATE TABLE `ISB_artiest` (
  `id` int(11) NOT NULL,
  `artiest_naam` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(87) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ISB_artiest`
--

INSERT INTO `ISB_artiest` (`id`, `artiest_naam`, `land`, `website`) VALUES
(1, 'The Flying Dutchmen', 'NL/CAN', 'www.the-flying-dutchmen.com'),
(2, 'Cie Sitting Duck', 'BE', 'www.chiringuitoparadise.com'),
(3, 'Cie Xav To Yilo', 'FR', 'www.xavtoyilo.wixsite.com/xavtoyilo'),
(4, 'Krijmfresj', 'BE', 'www.krijmfresj.be'),
(5, 'Cie des cieux Galvanisés', 'FR', 'http://ciedescieuxgalvanises.fr'),
(6, 'Cirque Hirsute', 'FR', 'www.cirquehirsute.com'),
(7, 'Cie Lorsque Soudain', 'BE', 'https://www.facebook.com/LHOMME-CANON-par-la-compagnie-Lorsque-Soudain-720004204818475/'),
(8, 'Close-act Theatre', 'NL', 'www.closeact.com'),
(9, 'Castart', 'BE', 'www.castart.org'),
(10, 'Ron Jaluai', 'BE', 'www.ronjaluai.be'),
(11, 'De Toape Geraapte', 'BE', 'www.toapegeraapte.be'),
(12, 'Skriewer', 'BE', 'www.skriewer.be'),
(13, 'Tennessee Sun', 'BE', 'www.facebook.com/tennesseesun/'),
(14, 'Tomcat', 'BE', 'www.tomcat-music.be/'),
(15, 'Cie Krak', 'BE', 'www.compagniekrak.be'),
(16, 'Duo Musa', 'NL', 'www.duomusa.nl'),
(17, 'Trio met 2', 'BE', 'https://www.facebook.com/TrioMet2/'),
(18, 'Dirk van \'t sirk', 'BE', 'www.dirk-van-tsirk.be'),
(19, 'Pantao', 'DUI', 'www.pantao.de'),
(20, 'Undercover Theater', 'BE', 'www.undercovertheater.be'),
(21, 'Inpetto', 'BE', 'www.inpetto-kinderanimaties.be'),
(22, 'Clown Poefie', 'BE', 'www.poefie.be'),
(23, 'Marino Punk', 'BE', 'www.marinopunk.be'),
(24, 'Maschara', 'BE', NULL),
(25, 'Cie Maintomano', 'SP', 'www.maintomano.com'),
(26, 'Fabuloka', 'NL', 'www.fabuloka.com'),
(27, 'Duo Koas', 'I/GT', 'www.duokaos.com'),
(28, 'Men In Coats', 'BE', 'www.menincoats.co.uk'),
(29, 'Ben Zuddhist', 'GB', 'www.benzuddhist.com'),
(30, 'Ale Risorio', 'ARG', 'www.alerisorio.com'),
(31, 'Cie Avis de Tempëte', 'FR', 'www.cieavisdetempete.com'),
(32, 'Cie Paris Bénarès', 'SP', 'www.parisbenares.fr'),
(33, 'Kunst op stelten', 'NL', 'www.kunstopstelten.nl'),
(34, 'Medusa\'s world', 'NL', 'www.medusasworld.nl'),
(35, 'Stiltlife Streettheater', 'NL', 'www.stilt.life'),
(36, 'Zeepbellencompagnie', 'BE', 'www.reuzenzeepbellen.wixsite.com/reuzenzeepbellen'),
(37, 'Ballonnenpiraat', 'BE', 'www.ballonnenpiraat.be'),
(38, 'Dolle Pret', 'BE', 'www.dollepret.be'),
(39, 'Levend Theater', 'NL', 'www.levendtheater.com'),
(40, 'Reynaert Ridders', 'BE', 'www.facebook.com/Reynaert-Ridders'),
(41, 'Tukkersconnexion', 'NL', 'www.tukkersconnexion.com'),
(42, 'Kartje Kilo', 'BE', 'www.kartjekilo.be'),
(43, 'Gekkefietsencircuit', 'BE', NULL),
(44, 'Reuzen van Beveren', 'BE', 'www.beveren.be'),
(45, 'Rock au vin', 'BE', 'Www.rockauvin.be/');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ISB_locatie`
--

CREATE TABLE `ISB_locatie` (
  `id` int(11) NOT NULL,
  `locatie_naam` varchar(24) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ISB_locatie`
--

INSERT INTO `ISB_locatie` (`id`, `locatie_naam`) VALUES
(1, 'KA / BS De Bever'),
(2, 'Oud Atletiekplein'),
(3, 'Donkvijverstraat'),
(4, 'Diederik van Beverenlaan'),
(5, 'Podium Yzerhand'),
(6, 'Vrasenestraat'),
(7, 'Warande shopping'),
(8, 'Grote markt'),
(9, 'N70'),
(10, 'Kloosterstraat'),
(11, 'De Meerminnen'),
(12, 'Mobiele act');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ISB_programmatie`
--

CREATE TABLE `ISB_programmatie` (
  `id` int(11) NOT NULL,
  `datum` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_id` int(11) NOT NULL,
  `beginuur` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locatie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `ISB_programmatie`
--

INSERT INTO `ISB_programmatie` (`id`, `datum`, `act_id`, `beginuur`, `locatie_id`) VALUES
(1, 'vr 24.08', 39, '18:00', 1),
(2, 'vr 24.08', 39, '20:15', 1),
(3, 'vr 24.08', 3, '18:45', 1),
(4, 'vr 24.08', 3, '21:15', 1),
(5, 'vr 24.08', 37, '19:30', 1),
(6, 'vr 24.08', 37, '22:00', 1),
(7, 'vr 24.08', 22, '18:45', 2),
(8, 'vr 24.08', 22, '21:15', 2),
(9, 'vr 24.08', 9, '19:30', 2),
(10, 'vr 24.08', 9, '22:00', 2),
(11, 'vr 24.08', 26, '20:15', 2),
(12, 'vr 24.08', 21, '22:45', 2),
(13, 'vr 24.08', 18, NULL, 12),
(14, 'vr 24.08', 28, NULL, 12),
(15, 'vr 24.08', 2, NULL, 12),
(16, 'vr 24.08', 12, NULL, 12),
(17, 'vr 24.08', 10, NULL, 12),
(18, 'vr 24.08', 7, NULL, 12),
(19, 'vr 24.08', 50, NULL, 12),
(20, 'vr 24.08', 44, NULL, 1),
(21, 'vr 24.08', 35, '18:00', 3),
(22, 'vr 24.08', 49, '20:30', 5),
(23, 'vr 24.08', 33, '19:00', 6),
(24, 'vr 24.08', 48, NULL, 7),
(25, 'vr 24.08', 47, '20:00', 10),
(26, 'za 25.08', 41, '14:30', 1),
(27, 'za 25.08', 41, '16:45', 1),
(28, 'za 25.08', 23, '15:15', 1),
(29, 'za 25.08', 23, '17:30', 1),
(30, 'za 25.08', 14, '15:45', 1),
(31, 'za 25.08', 38, '16:15', 1),
(32, 'za 25.08', 16, NULL, 12),
(33, 'za 25.08', 24, NULL, 12),
(34, 'za 25.08', 42, NULL, 12),
(35, 'za 25.08', 6, NULL, 12),
(36, 'za 25.08', 17, NULL, 12),
(37, 'za 25.08', 8, NULL, 12),
(38, 'za 25.08', 43, '15:30', 1),
(39, 'za 25.08', 44, NULL, 1),
(40, 'za 25.08', 33, '18:00', 2),
(41, 'za 25.08', 45, '17:00', 2),
(42, 'za 25.08', 46, '18:00', 2),
(43, 'za 25.08', 35, '14:00', 3),
(44, 'za 25.08', 15, '14:30', 3),
(45, 'za 25.08', 33, '14:00', 7),
(46, 'za 25.08', 45, '15:00', 7),
(47, 'za 25.08', 15, '14:30', 7),
(48, 'zo 26.08', 11, '14:30', 1),
(49, 'zo 26.08', 11, '16:30', 1),
(50, 'zo 26.08', 5, '15:15', 1),
(51, 'zo 26.08', 5, '17:15', 1),
(52, 'zo 26.08', 40, '16:00', 1),
(53, 'zo 26.08', 40, '18:00', 1),
(54, 'zo 26.08', 29, '14:00', 2),
(55, 'zo 26.08', 29, '16:00', 2),
(56, 'zo 26.08', 29, '18:00', 2),
(57, 'zo 26.08', 25, '14:30', 2),
(58, 'zo 26.08', 25, '16:30', 2),
(59, 'zo 26.08', 1, '15:15', 2),
(60, 'zo 26.08', 1, '17:15', 2),
(61, 'zo 26.08', 4, '18:30', 2),
(62, 'zo 26.08', 27, NULL, 12),
(63, 'zo 26.08', 13, NULL, 12),
(64, 'zo 26.08', 34, NULL, 12),
(65, 'zo 26.08', 32, NULL, 12),
(66, 'zo 26.08', 30, NULL, 12),
(67, 'zo 26.08', 52, NULL, 12),
(68, 'zo 26.08', 33, '15:00', 2),
(69, 'zo 26.08', 20, '14:00', 2),
(70, 'zo 26.08', 31, '14:00', 2),
(71, 'zo 26.08', 19, '14:00', 3),
(72, 'zo 26.08', 36, '14:30', 3),
(73, 'zo 26.08', 35, '14:00', 3),
(74, 'zo 26.08', 15, '14:30', 3),
(75, 'zo 26.08', 44, '14:00', 3),
(76, 'zo 26.08', 48, NULL, 4),
(77, 'zo 26.08', 51, '16:00', 5),
(78, 'zo 26.08', 51, '18:00', 8),
(79, 'zo 26.08', 15, '14:30', 10);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `ISB_act`
--
ALTER TABLE `ISB_act`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ISB_afbeelding`
--
ALTER TABLE `ISB_afbeelding`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ISB_artiest`
--
ALTER TABLE `ISB_artiest`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ISB_locatie`
--
ALTER TABLE `ISB_locatie`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `ISB_programmatie`
--
ALTER TABLE `ISB_programmatie`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
