- Quiero crear una aplicación en PHP Version 7.4.15
- Utiliza autoload de composer
- Quiero que uses POO y las clases ubícadas en el directorio src
- Estoy usando git, ya tengo iniciado el repositorio
- Cuando implementes una nueva feature o hagas un refactor proponme un mensaje de commit y pregúntame si quieres que los hagas tú.
- utiliza buenas prácticas
- Los ejemplos con código de cliente que manejen las clases ubicadas en src, quiero que estén en el directorio examples.

La estructura de los directorios examples y src sería la siguiente:

...
examples
    - structural
        - adapter
            - audio_player

src
    - Structural
        - Adapter
            - AudioPlayer
...

- En la estructura anterior, dentro del directorio audio_player habría un archivo index.php con el código cliente que utilizaría las clases de src/Structural/Adapter/AudioPlayer
- En la raíz del proyecto crea un archivo index.php con un indice a los ejemplos del código cliente.
- Para la interfaz en la vista utiliza la librería de Tailwind.