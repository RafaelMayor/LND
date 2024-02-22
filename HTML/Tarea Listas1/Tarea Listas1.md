<div align="justify">

<div align="right">
Rafael Martín Mayor.
</div>

# **Tarea Listas1 HTML**

**Ejercicio 1**

Haz una lista ordenada de los cinco primeros países que vas a visitar en los próximos años. En la lista ordenada usarás números.

**Ejercicio 2**

Utilizando la lista anterior, invierte el orden de los números. Pista: reversed

**Ejercicio 3**

Haz una lista ordenada con letras en mayúscula de tus comidas favoritas. Pista: type A

**Ejercicio 4**

Utilizando la lista ordenada del ejercicio 3, ahora ordena tus comidas favoritas con números romanos en mayúscula. Pista: type l

**Ejercicio 5**

Haz una lista desordenada de tus películas favoritas. Utilizarás para el estilo de la lista cuadraditos negros. Pista: Type square

**Ejercicio 6**

Usando como ejemplo la lista desordenada del ejercicio 5, ahora utiliza como estilo de la lista puntos o circulitos negros. Pista: type disk

**Ejercicio 7**

Haz una lista anidada de ciudades que quieres visitar en los próximos cinco años de al menos tres países distintos



### Ejercicio 1
```html
<ol>
  <li>País 1</li>
  <li>País 2</li>
  <li>País 3</li>
  <li>País 4</li>
  <li>País 5</li>
</ol>
```

### Ejercicio 2
```html
<ol reversed>
  <li>País 5</li>
  <li>País 4</li>
  <li>País 3</li>
  <li>País 2</li>
  <li>País 1</li>
</ol>
```

### Ejercicio 3
```html
<ol type="A">
  <li>Comida A</li>
  <li>Comida B</li>
  <li>Comida C</li>
</ol>
```

### Ejercicio 4
```html
<ol type="I">
  <li>Comida I</li>
  <li>Comida II</li>
  <li>Comida III</li>
</ol>
```

### Ejercicio 5
```html
<ul style="list-style-type: square;">
  <li>Película 1</li>
  <li>Película 2</li>
  <li>Película 3</li>
</ul>
```

### Ejercicio 6
```html
<ul style="list-style-type: disc;">
  <li>Película 1</li>
  <li>Película 2</li>
  <li>Película 3</li>
</ul>
```

### Ejercicio 7
```html
<ul>
  <li>País 1
    <ul>
      <li>Ciudad 1</li>
      <li>Ciudad 2</li>
    </ul>
  </li>
  <li>País 2
    <ul>
      <li>Ciudad 3</li>
      <li>Ciudad 4</li>
    </ul>
  </li>
    <li>País 3
    <ul>
      <li>Ciudad 5</li>
      <li>Ciudad 6</li>
    </ul>
  </li>
</ul>
```

</div>