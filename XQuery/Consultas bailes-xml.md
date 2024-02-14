<div align="justify">

<div align="right">
Rafael Martín Mayor.
</div>


## Consultas XQuery de bailes.xml:

**1. Mostrar el nombre de todos los bailes:**

```xquery
for $baile in doc("bailes.xml")//baile
return $baile/nombre
```

**2. Mostrar el nombre y precio de todos los bailes:**

```xquery
for $baile in doc("bailes.xml")//baile
return (
    <baile>
        <nombre>{$baile/nombre}</nombre>
        <precio>{$baile/precio}</precio>
    </baile>
)
```

**3. Mostrar el nombre y precio de todos los bailes donde su precio mayor que 40:**

```xquery
for $baile in doc("bailes.xml")//baile
where $baile/precio > 40
return (
    <baile>
        <nombre>{$baile/nombre}</nombre>
        <precio>{$baile/precio}</precio>
    </baile>
)
```

**4. Mostrar bailes ordenados por nombres:**

```xquery
for $baile in doc("bailes.xml")//baile
order by $baile/nombre
return $baile
```

**5. Mostrar los nombres de los bailes que contienen una a:**

```xquery
for $baile in doc("bailes.xml")//baile
where contains($baile/nombre, "a")
return $baile/nombre
```

**6. Mostrar el nombre de los bailes donde el apellido del profesor sea Lozano:**

```xquery
for $baile in doc("bailes.xml")//baile
where substring-after($baile/profesor, " ") = "Lozano"
return $baile/nombre
```

**7. Mostrar todos los bailes excepto el 3 y el 5:**

```xquery
for $baile in doc("bailes.xml")//baile
where position() != 3 and position() != 5
return $baile
```

**8. Mostrar profesores que den clases de bailes por una cuota mensual:**

```xquery
for $baile in doc("bailes.xml")//baile
where $baile/precio/@cuota = "Mensual"
return distinct $baile/profesor
```

**9. Mostrar el nombre de los bailes de la sala 1 que se pague con euros y el precio sea menor de 35:**

```xquery
for $baile in doc("bailes.xml")//baile
where $baile/sala = "1" and $baile/precio/@moneda = "Euros" and $baile/precio < 35
return $baile/nombre
```

</div>
