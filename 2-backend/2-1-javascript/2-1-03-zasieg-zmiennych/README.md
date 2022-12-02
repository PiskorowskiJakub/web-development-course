# web-development-course

`Jakub Piskorowski on 01/12/2022 wersja: 1.0`

## Temat: Zasięg zmiennych w JavaScript

var, let i const, zasięg zmiennych w języku JavaScript.

Pliki źródłowe: 

---

## Objaśnienie

W JS metody do deklaracji zmiennych używamy słów kluczowych `var`, `let` i `const`. Każde z nich ma swoje przeznaczenie. 

- Słowo kluczowe `var` deklaruje zmienną o aktualnym kontekście wykonania, wraz z opcjonalną zainicjalizowaną  wartością.
- Słowo kluczowe `let` deklaruje zmienną w zasięgu bloku, wraz z opcjonalną zainicjalizowaną wartością.
- Słowo kluczowe `const` deklaruje stałe w zasięgu bloku, podobnie do słowa kluczowego `let`, ale nie można zmienić wartości stałej. Deklaracja `const` tworzy referencję typu read-only.

W JavaScript wszystkie zmienne zdefiniowane przy użyciu `var` na początku mają wartość `undefined`. Jest to spowodowane windowsem, który zapisuje w pamięci deklaracje zmiennych i inicjuje je wartością `undefined.`.

Jednak zmienne zdefiniowane za pomocą słów kluczowych `let` i `const`, nie są inicjalizowane z undefined. Są one raczej w stanie zwanym `Temporary Dead Zone`, dopóki ich definicje nie zostaną nie zostaną zewaluowane. 

### Zasięg zmiennych

Zmienne zdefiniowane za pomocą słowa kluczowego `var` mają zasięg, który jest ich bieżącym kontekstem wykonania. Nie mają one zasięgu blokowego, więc można uzyskać do nich dostęp spoza bloku, w którym zostały zdefiniowane. Może się tak stać pod warunkiem, że zmienne te nadal znajdują się w zasięgu kontekstu wykonania. Zmienne `let` i `const` mają jednak zasięg blokowy i nie można uzyskać do nich dostępu spoza bloku. 

Kod przedstawiający zasięg zmiennych:
``` JavaScript
{
    var x = 2;
    let y = 3;
    const z = 4;
    
    document.getElementById("test2").innerHTML = y;
    document.getElementById("test3").innerHTML = z;
}
if(true){
    document.getElementById("test1").innerHTML = x;
}
```
Kod źródłowy: [zasieg.html](zasieg.html)

### Warto zapamiętać

Gdy po prostu przypiszesz wartość do zmiennej, bez deklaracji za pomocą słów kluczowych (`x = "tekst";`), zmienna ta zostaje utworzona i dołączona do globalnego kontekstu wykonania. Robienie tego nie jest jednak zalecane, ponieważ znacznie utrudnia to debugowanie.

Zmienne zadeklarowane za pomocą słowa kluczowego `var` mogą być ponownie zadeklarowane w dowolnym momencie kodu, nawet jeśli są w tym samym kontekście wykonania. Nie dotyczy to zmiennych zdefiniowanych za pomocą słów kluczowych `let` i `const`, ponieważ można je zadeklarować tylko raz w ramach ich zasięgu leksykalnego.

Kolejną kwestią o której warto pamiętać to fakt, że mimo iż nie można przypisywać ponownie wartości do stałej, to nadal jest ona mutowalna. Dobrze można to zilustrować faktem, że jeśli wartością jest obiekt, właściwość obiektu będzie można modyfikować. 
``` JavaScript
    const obj = {
        firstName: "Favour"
    };
    obj.lastName = "Harrison";
    console.log(obj); //prints an object having both firstName and lastName properties
```

Źródło: [bulldogjob.pl](https://bulldogjob.pl/readme/var-let-i-const-hoisting-i-zasieg-w-javascript)