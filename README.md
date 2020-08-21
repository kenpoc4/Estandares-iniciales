# Estandares-iniciales

Plugin hecho por   =>   Kenny Poncio
https://github.com/kenpoc4

----------   DESCRIPCIÓN   ----------

    Plugin para Wordpress(Y adaptable para diseño nativo) que reinicia todas la configuraciones establecidas nativamente en CSS a un entorno (personalmente) más cómodo.

----------   CAMBIOS QUE REALIZA   ----------
    *** NORMALIZE:
                    Utiliza los estandares de la libreria #Normalize.
                    URL:    https://necolas.github.io/normalize.css/
                    GITHUB: https://github.com/necolas/normalize.css

    *** FRACMENTO DEL REPOSITORIO => reset-rems DE Mark Root-Wiley 
                    URL:    https://gist.github.com/mrwweb/5627502
        html {
        font-size: 62.5%;
        }

        body {
        font-size: 16px; 
        font-size: 1.6rem;
        line-height: 1.5;
        }
        Estableciendo la igualdad de 1rem = 10px

    *** TAMAÑO DE LAS CAJAS Y BORDES SEGÚN => @paul_irish
                    URL: https://www.paulirish.com/2012/box-sizing-border-box-ftw/
        html {
        box-sizing: border-box;
        }
        *, *:before, *:after {
        box-sizing: inherit;
        }

    *** CAMBIOS SUGERIDOS 
    
    h1, h2, h3, h4   =>   Margen= 1rem y Altura de linea= 1.2 
    h1               =>   Tamaño = 5rem
    h2               =>   Tamaño = 3.8rem
    h3               =>   Tamaño = 2.6rem
    h4               =>   Tamaño = 1.4rem
    a                =>   Sin decoración
    ul               =>   Sin estilo de lista, sin margen y sin padding
    img              =>   Altura maxima = 100%, y Altura = Auto
    contenedor       =>   Altura maxima = 12rem(120px), Altura = 95% y Margen = auto 0

----------   COMO USARLO   ----------

    1.- Instalar el repositorio como Plugin
    
    2.- Colocar 'normalize' y 'k_style' como las dependencias de tu hoja de estilos.
        (Si llega a desinstalar el plugin recuerde eliminar las dependencias anteriores de la hoja de estilos, de lo contrario no le cargara)
    
    3.- En caso de requerirlo no para Wordpress, basta con establecer las hojas de estilos CSS que se encuentran en /assets/css. Uno corresponde a "Normalize" y el otro a el resto de cambios.
    
    ***NOTA: NO SE RECOMIENDA SER INSTALADO EN PROYECTOS YA DESARROLLADOS A CAUSA DE POSIBLES CONFLICTOS CON EL CSS YA ESCRITO.
