<?php

namespace Database\Seeders;

use App\Models\Tratamiento;
use Illuminate\Database\Seeder;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tratamiento::create(['nombre'=> 'Consulta General',
                            'descripcion' => 'En odontología prevenir es literalmente curar. Un diagnóstico a tiempo te ayudará a evitar patologías bucodentales más graves en el futuro.',
                            'precio' => '200.00',]);

        Tratamiento::create(['nombre'=> 'Limpieza Dental',
                            'descripcion' => 'La limpieza dental, también llamada profilaxis, es un procedimiento en el cual se removerán manchas, sarro y placa dentobacteriana para mantener la salud de tus dientes y encías.',
                            'precio' => '750.00',]);


        Tratamiento::create(['nombre'=> 'Blanqueamiento dental',
                            'descripcion' => 'Su objetivo es conseguir mejorar el color de los dientes produciéndose en pocas semanas un rejuvenecimiento dental dando luminosidad y brillo.
                                            Se realiza utilizando un agente blanqueador con un  acelerador del proceso con la tecnología de luz led fría.
                                            El resultado varía según el paciente y dependerá de los factores genéticos del paciente y también de los hábitos  pero podemos mejorar de 5 a 8 tonos en la mayoría de los tratamientos. ',
                            'precio' => '350.00',]);

        Tratamiento::create(['nombre'=> 'Resina dental',
                            'descripcion' => 'Es una restauración duradera y estética que se adapta perfectamente a la superficie de tu diente y permite corregir caries, cavidades o fisuras. También es una opción para reemplazar amalgamas.
                            Devolviendo al diente su función y forma, manteniendo la apariencia natural.',
                            'precio' => '820.00',]);

        Tratamiento::create(['nombre'=> 'Endodoncia',
                            'descripcion' => 'Es una alternativa que te permite salvar tu diente de una extracción.
                            Lo cual funciona retirando la pulpa del diente, el espacio que queda se limpia, se vuelve a dar forma y se rellena con un material especial para después rehabilitar el diente con un endoposte y una corona.',
                            'precio' => '3100.00',]);                           

        Tratamiento::create(['nombre'=> 'Extracción dental',
                            'descripcion' => 'La cirugía maxilofacial ayudará a devolver la funcionalidad y estética a tu boca.
                            Es la especialidad que se encarga de realizar extracciones o cirugías relacionadas con los dientes y la mandíbula. Sobretodo al presentar fracturas, dolor de dientes o caries profundas (no tratables con endodoncia)',
                            'precio' => '1100.00',]);

        Tratamiento::create(['nombre'=> 'Ortodoncia',
                            'descripcion' => 'Los tratamientos de ortodoncia realizan suaves movimientos que desplazan los dientes de forma individual o en bloque corrigiendo su posición. 
                            Una ortodoncia, tiene el doble objetivo de conseguir una buena oclusión y una correcta alineación de los dientes. De este modo se obtienen beneficios estéticos y funcionales.',
                            'precio' => '5720.00',]);

        Tratamiento::create(['nombre'=> 'Implante dental',
                            'descripcion' => 'Los implantes dentales son lo más cercano a un diente natural, por lo que volverás a sonreír con confianza.
                            Es una prótesis hecha de titanio que se inserta en el hueso de la mandíbula para sustituir uno o varios dientes perdidos o ausentes.',
                            'precio' => '8500.00',]);

        Tratamiento::create(['nombre'=> 'Periodoncia',
                            'descripcion' => 'Es la especialidad que se encarga de tratar las principales enfermedades de las encías causadas por una mala higiene, como:
                                            Gingivitis (causa inflamación de las encías)
                                            Periodontitis (infección de las encías)',
                            'precio' => '2450.00',]);

        Tratamiento::create(['nombre'=> 'Guarda Oclusar',
                            'descripcion' => 'Es una pieza removible que se fabrica al tamaño de tus dientes para corregir el bruxismo.
                            El cual sucede cuando al dormir una persona aprieta y rechina los dientes de manera inconsciente, lo que ocasiona tensión en los músculos del cuello y la boca, provocando dolor de dientes y desgaste.',
                            'precio' => '1670.00',]);
    }
}
