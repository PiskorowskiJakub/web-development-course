# web-development-course

`Jakub Piskorowski on 22/08/2023 wersja: 1.0`

## Temat: Wstęp do pisania testów jednostkowych

Czym są testy jednostkowe i dlaczego warto je pisać?  
Dobre i złe praktyki pisania testów jednostkowych.


---


## Czym są testy jednostkowe?

``` text
Testy jednostkowe to metoda testowania wytwarzanego oprogramowania, polegająca na pisaniu metod testujących określone, małe fragmenty naszego programu (jednostki). Jednostkami mogą być np. metody lub klasy.
```

Zaczynając przygodę z programowaniem ciężko dostrzec **zalety pisania testów jednostkowych**. Wszystko wydaje się niby proste, jednak nasuwa się pytanie: **po co testować coś, co sami piszemy?**

### Testy jednostkowe są dla programistów

Jako programista powinieneś uwielbiać testy jednostkowe - one są stworzone dla Ciebie. Pilnują Twojego kodu! Dzięki testom jednostkowym przestaniesz popełniać błache błędy, ponieważ istnieje dodatkowa warstwa kontroli. Ta warstwa będzie grać na Twoją korzyść im większy będzie projekt.

Źródło: [p-programowanie.pl](https://www.p-programowanie.pl/paradygmaty-programowania/po-co-testy-jednostkowe)

Przeznaczeniem testów jednostkowych jest sprawdzenie działania tylko jednej małej jednostki w aplikacji – tą jednostką jest po prostu **metoda**. Każda metoda powinna być traktowana jak **czarna skrzynka – nie powinno interesować nas co się dzieje w środku, interesuje nas tylko co "wchodzi" do metody oraz co z niej "wychodzi"**. Bardzo ważne jest to, że jeden test jednostkowy powinien sprawdzać działanie dokładnie jednej metody.

Źródło: [1024kb.pl](https://1024kb.pl/nauka-java/wstep-do-testow-jednostkowych/)

### Po co pisać testy - praktyczny przykład

Pierwszym projektem, który dostałem praktycznie na wyłączność, był projekt dla niemieckiego klienta. Klient chciał, by ten projekt został napisany w języku VBA, a formularze osadzone w dokumentach Excelowych na podstawie danych z bazy same odtwarzały swój kształt i wygląd po włączeniu.

Jako, że byłem sam w tym projekcie, to pełniłem też rolę QA. Byłem odpowiedzialny za utrzymywanie spójności, jakości oraz testowalności aplikacji. Pomijając już fakt, że aplikacja powinna robić to, czego klient od niej chciał.

Po przekroczeniu pewnego poziomu złożoności aplikacji zauważyłem, że wprowadzanie zmian stało się bardzo uciążliwe. Gdy testowałem, okazało się, że przypadkowo uszkodziłem inną część aplikacji. Wiele razy musiałem się cofać i naprawiać coś, co myślałem, że działa.

Dodatkowo testy regresji, czyli sprawdzenia, że aplikacja nadal łącznie robi to, co powinna, zajmowały bardzo dużo czasu. Około 20% czasu w ramach jednej iteracji. A wszystko wskazywało na to, że będę marnował na to coraz więcej czasu.

Do głowy przyszło mi, by spróbować to zautomatyzować. Jako, że można w łatwy sposób wyklikać makra w Excelu, pokazałem, jakie czynności mają być wykonane, a następnie napisałem kilka linijek sprawdzających, czy efekt jest taki, jak spodziewany.

Tak samo zacząłem robić dla mniejszych modułów i procedur. Pisałem kod, który sprawdzał, czy moduł lub procedura robią dokładnie to, co powinny.

Doszedłem do wprawy w tym, co robiłem i uzyskałem pewność, że nadal wszystko działa jak powinno. Zbindowałem nawet procedurę, która uruchamia mi inne procedury sprawdzające, pod odpowiednią kombinację klawiszy.

Takim oto sposobem odkryłem coś, co już znałem z poprzedniego projektu, ale czego sensu nie rozumiałem.

Zauważ – napisane przeze mnie procedury to nic innego, jak testy jednostkowe, czy testy integracyjne. Procedury, które wyklikiwałem to były testy GUI.

Nie odkryłem w tym momencie niczego nowego. Ale nagle zrozumiałem, dlaczego warto pisać testy i dlaczego mi – jako programiście – są potrzebne. Nawet dodam, iż poczułem, że są mi niezbędne do pracy.

Poświęciłem trochę czasu na napisanie własnych modułów, które umożliwiały mi testowanie. Generowałem sobie wyniki w osobnym arkuszu.

Źródło: [devenv.pl](https://devenv.pl/testy-jednostkowe-czy-naprawde-ich-potrzebujemy/)


---

### Weryfikacja działania bez uruchamiania systemu

Ciągłe ręczne sprawdzanie działania aplikacji to straszna strata czasu. Trzeba poczekać na odpalenie serwera, rozgrzanie systemu. Trzeba przeklikać się przez interfejs i badać rezultat.  
Dobre testy mogą tutaj bardzo pomóc!

Dzięki automatycznej weryfikacji, że testowany kod spełnia pewne założenia, nie musimy uruchamiać całego systemu. Wystarczy włączyć testy i poczekać chwilę na ich wykonanie.

**Zielony pasek w test runnerze oznacza jedną z dwóch rzeczy: albo nasz kod działa, jak powinien (hurra!), albo mamy źle napisane testy (buuu).** Innej możliwości nie ma.

Sposób działania testów jest dość banalny:
- autor testu (programista) dostarcza dane wejściowe (input),
- test wykonuje instrukcje i…
- sprawdza, czy rezultat działań (output) jest zgodny z oczekiwaniami.

Zatem: czy testy eliminują powstawanie błędów?

To właśnie wspomniany plot twist… Otóż: niekoniecznie!

Zgodnie z ustaloną wcześniej definicją: testy to po prostu kod. Kod testujący i kod testowany są napisane przez takiego samego programistę (a najczęściej tę samą osobę).

Bardzo często wchodzimy w świat testów z oczekiwaniem, że testy wyeliminują bugi w systemie. Niestety jest to błędne założenie. A potem z rozczarowaniem stwierdzamy, że tak się nie dzieje, i zniechęceni zamykamy temat.

Już na początku przygody z testami trzeba zaakceptować smutny fakt:

**Testy weryfikują, że kod działa tak, jak chce tego programista, a nie tak, jak powinien!**

Prawda jest taka, że świetne testy chronią przed bugami przy zmianach w kodzie. Ale nauka pisania testów trwa i wymaga praktyki. Jednak, gdy już nauczymy się pisać testy tam gdzie trzeba i tak jak trzeba, zmiany w istniejącym kodzie będą o wiele łatwiejsze. 

Źródło: [devstyle.pl](https://devstyle.pl/2020/06/25/mega-pigula-wiedzy-o-testach-jednostkowych/)

## Dobre i złe praktyki pisania testów jednostkowych

- **Arrange-Act-Assert:** Kod powinien być ustrykturyzowany wg zasady AAA.  
**Arrange:** wszystkie dane wejściowe i preconditions,  
**Act:** działanie na metodzie/funkcji/klasie testowanej,  
**Assert:** upewnienie się, że zwrócone wartości są zgodne z oczekiwanymi.
``` php
public void Add_AddingTwoValues_ReturnsProperValue()
{
    // Arrange:
    var calc = new Calculator();
 
    // Act:
    int result = calc.Add(2, 3);
 
    // Assert:
    Assert.AreEqual(5, result);
}
```

- **Nazewnictwo:** Najważniejszą regułą w zakresie nazewnictwa testów jest stosowanie takiej nazwy, która pozwoli określić jednoznacznie co testujemy. Jest kilka konwencji nazewnictwa testów jednostkowych, a jej wybór to preferencja osobista lub projektowa. Ja korzystam najczęściej z konwencji **MetodaTestowana_Scenariusz_OczekiwaneZachowanie** (Add_AddingTwoValues_ReturnsProperValue).
- **Testowanie prywatnych składowych:** Nie powinno się testować prywatnych składowych klasy (private, internal); powinniśmy testować jedynie publiczne API klas. Nie interesuje nas ich wewnętrzna implementacja, wobec czego nie powinniśmy testować jej prywatnych składowych.
- **Testy zawierające konfigurację:** Testy jednostkowe nie powinny mieć żadnej konfiguracji.
- **Testy korzystające z konsoli systemowej:** Testy nie powinny zawierać odwołań do konsoli systemowej. Niektórzy używają Console.Writeline w celu sprawdzenia czegoś ręcznie, jest to jednak oczywisty antywzorzec.
- **Łapanie wszystkich wyjątków:** Łapanie wszystkich wyjątków i objęcie w try-catch może spowodować niewyłapanie błędu w logice testowanego kodu. Do asercji związanych z oczekiwaniem wyjątku służą oddzielne metody klasy Assert.
- **Instrukcje warunkowe w teście:** Test jednostkowy nie powinien zawierać instrukcji warunkowych (if, switch). Wiąże się to z zasadą pojedynczej odpowiedzialności testu. Test z instrukcją warunkową powinniśmy podzielić na tyle testów, ile istnieje bloków warunkowych.
