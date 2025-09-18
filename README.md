# Creacion-y-uso-de-elementos-basicos-en-php
## Bloque 1: Conceptos básicos (introducción a php)

### Variables y Condicionales

1. **Mayor de dos números**  
   Pide dos números y muestra cuál es mayor o si son iguales.  

```php
<?php
$numero1 = (int) readline("Ingresa un numero:");
$numero2 = (int) readline("Ingresa otro numero:");
$respuesta = "Los numero son iguales";
if ($numero1>$numero2) {
    $respuesta= "El numero mayor es: " . $numero1;
}
if ($numero1<$numero2) {
    $respuesta="El numero mayor es: " . $numero2;
}
echo($respuesta);
?>
```

2. **Edad permitida**  
   Pide la edad de una persona y muestra:  
   - `"Eres menor de edad"` si es < 18.  
   - `"Eres mayor de edad"` si es ≥ 18.  

```php
<?php
$edad = (int) readline("Ingresa tu edad:");
$respuesta = "Eres menor de edad";
if ($edad>=18) {
    $respuesta= "Eres mayor de edad";
}
echo($respuesta);
?>
```
3. **Positivo, negativo o cero**  
   Comprueba si un número almacenado en una variable es positivo, negativo o cero.  
   
```php
<?php
$numero = 18;
$respuesta = "El numero es positivo";
if ($numero<0) {
    $respuesta= "El numero es negativo";
}
if ($numero ==0) {
    $respuesta = "El numero es cero";
}
echo($respuesta);
?>
```

4. **Nota final**  
   Pide la nota de un alumno y muestra:  
   - `"Suspenso"` (< 5), `"Aprobado"` (5–6), `"Notable"` (7–8), `"Sobresaliente"` (9–10).  

```php
<?php
$nota = (int) readline("¿Que nota has tenido?:");
$respuesta = "Tienes un suspenso";
if ($nota>4 && $nota<7) {
    $respuesta= "tienes un aprobado";
}
if ($nota>6 && $nota<9) {
    $respuesta = "Tienes un notable";
}
if ($nota>8) {
    $respuesta = "Tienes un sobresaliente";
}
echo($respuesta);
?>
```

---

### 2️⃣ Bucles (for, while, foreach)

5. **Contar del 1 al 100**  
   Muestra los números del 1 al 100 en pantalla.

```php
<?php
for ($i=1; $i < 101; $i++) { 
    echo($i . "\n");
}
?>
```  

6. **Suma acumulada**  
   Calcula la suma de los números del 1 al 50 usando un bucle.  

```php
<?php
$respuesta = 0;
for ($i=1; $i < 51; $i++) { 
    $respuesta = $respuesta + $i;
}
echo($respuesta);
?>
```

7. **Tabla de multiplicar**  
   Pide un número y genera su tabla de multiplicar del 1 al 10.  

```php
<?php
$numero = (int) readline("Dime un numero para imprimir la tabla de multiplicar:");
for ($i=1; $i <= 10; $i++) { 
    echo($numero . " x " . $i . " = " . $numero * $i . "\n");
}
?>
```

8. **Números pares**  
   Muestra todos los números pares entre 1 y 50.  

```php
<?php
for ($i=1; $i < 51; $i++) { 
    if($i % 2 == 0){
        echo($i . "\n");
    }
}
?>
```

9. **Cuenta atrás**  
   Haz un bucle que cuente de 10 a 1 y luego muestre `"¡Fin!"`.

```php
<?php
$numero = 11;
for ($i=0; $i < 11; $i++) { 
    $numero --;
    if($numero == 0){
        $numero="¡Fin!";
    }
    echo($numero . "\n");
}
?>
```

10. **Factorial**  
    Calcula el factorial de un número introducido (ejemplo: `5! = 120`).  

```php
<?php
$numero = (int) readline("Introduce un numero para calcular el factorial:");
$respuesta = 1;
for ($i=$numero; $i > 0; $i--) { 
    $respuesta *= $i;
}
echo($respuesta);
?>
```

---

### 3️⃣ Combinando Condicionales y Bucles

11. **Números primos**  
    Escribe un algoritmo que muestre los números primos entre 1 y 50.  

```php
<?php
for ($i=2; $i <= 50; $i++) { 
    $esprimo = true;
    for ($j=2; $j <= i-1 ; $j++) { 
        if ($i % $j == 0) {
            $esprimo = false;
            break;
        }
    }
    if ($esprimo) {
        echo $i . "\n";
    }
}
?>
```

12. **Fibonacci**  
    Genera los primeros 20 términos de la secuencia de Fibonacci.  

```php
<?php
$numero1 = 0;
$numero2 = 1;

echo $numero1 ."\n";
echo $numero2 ."\n";

for ($i=0; $i <= 18; $i++) { 
    $respuesta = $numero1 + $numero2;
    echo $respuesta . "\n";
    $numero1 = $numero2;
    $numero2 = $respuesta;
}
?>
```

13. **Múltiplos de un número**  
    Pide un número `n` y muestra sus múltiplos hasta 100. 
```php
<?php
$numero = (int) readline("Dime un numero:");

for ($i=1; $i <= 100; $i++) { 
    $respuesta = $numero *$i;
    if($respuesta>100){
        break;
    }
    echo $respuesta . "\n";
}
?> 
```

14. **Suma de pares e impares**  
    Calcula la suma de los números pares e impares entre 1 y 100 por separado. 

```php
<?php
$sumaPares = 0;
$sumaImpares = 0;

for ($i=0; $i <= 100; $i++) { 
    if($i % 2 == 0){
        $sumaPares += $i;
    }
    if($i % 2 != 0){
        $sumaImpares += $i;
    }
}
echo "La suma de los numeros pares da = " . $sumaPares . "\n";
echo "La suma de los numeros impares da = " . $sumaImpares . "\n";
?>
``` 

15. **Adivinar número**  
    Genera un número aleatorio entre 1 y 20.  
    Pide al usuario que lo adivine y usa un bucle con condicionales para dar pistas: `"Mayor"` o `"Menor"`.  

```php
<?php
$numero_aleatorio = random_int(1,20);
$numero = (int) readline("Dime un numero entr el 1 y el 20 a ver si lo adivinas: ");
$respuesta = "Fallaste, el numero era : " . $numero_aleatorio . "\n";
if ($numero == $numero_aleatorio) {
    $respuesta = "¡Acertaste!, el numero es: " . $numero . "\n";
}
echo $respuesta;
?>
``` 
---

### 4️⃣ Construcción de Algorítmicos

16. **Número perfecto**  
    Comprueba si un número es perfecto (la suma de sus divisores propios es igual al número). 
     
```php
<?php
$numero = (int) readline("Dime un numero para verificar si es un numero perfecto ");
$suma = 0;
$resultado = "El numero no es perfecto";
for ($i=1; $i <$numero ; $i++) { 
    if($numero % $i == 0){
        $suma += $i;
    }
}
if ($suma == $numero) {
    $resultado = "El numero es perfecto";
}
echo $resultado;
?>
```

17. **Invertir número**  
    Escribe un algoritmo que invierta los dígitos de un número (ejemplo: `123 → 321`).  

18. **Palíndromo**  
    Comprueba si una palabra almacenada en una variable es palíndroma.  

19. **Máximo común divisor (MCD)**  
    Escribe un algoritmo que calcule el MCD de dos números.  

20. **Triángulo de asteriscos**  
    Muestra en pantalla un triángulo de altura `n` usando `*`.  
    Ejemplo con `n = 5`:  
    ```
    *
    **
    ***
    ****
    *****
    ```

---