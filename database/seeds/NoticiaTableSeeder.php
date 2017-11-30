<?php

use Illuminate\Database\Seeder;

class NoticiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       DB::table('noticia')->insert([

	       	'titular'=>'Gonzalo Jara reconoce su esquizofrenia: "A veces se me olvida como jugar fútbol y me convierto en un payaso"',
	       	'entrada'=>'El defensa de la Universidad de Chile explicaría su mal rendimiento en su estadía en el equipo Azul.',
	       	'cuerpo'=>'Universidad de Chile.- Los hinchas de la Universidad de Chile se encuentran con la cabeza a dos manos tratando de entender la forma de jugar del defensa Gonzalo Jara quien se ha especializado en defraudar en los momentos claves del torneo. Para explicar su situación actual, Jarita anunció a través de las redes sociales, su situación actual en relación al fútbol soccer: "Hace algún tiempo vengo experimentando episodios de Alzheimer, donde se me olvida completamente jugar fútbol y aparece un ser en mi interior, un payaso tipo Chavo del 8, que siempre se manda cagadas y genera resultados catastróficos para las aspiraciones del equipo. Les pido que me tengan paciencia y si tienen buen humor, que se rían con mis chambonadas... no todo es ganar en la vida..."',
	       	'imagen'=>'https://s3-sa-east-1.amazonaws.com/lalegal/app/public/system/photos/12796/original/DPhEtY-XUAA4G01.jpg?1511704505',
	       	'fecha'=>'22/07/2020',
          'categoria_id'=>1,
          'user_id'=>2
       ]);

       DB::table('noticia')->insert([

          'titular'=>'Pisco chileno reconoce que es peruano y va al Mundial de Rusia 2018',
          'entrada'=>'Adios querido pisco...',
          'cuerpo'=>'Perú.- Luego de la clasificación de la Selección de Perú al mundial de Rusia 2018, muchos fueron los que salieron a celebrar a las calles por este gran evento futbolístico que cerró la nómina de países que disputarán la tan preciada copa dorada, la cual en este versión estará llena con la bebida alcohólica del país organizador, es decir, el vodka y del país vencedor, que en el caso de ser Perú, se llenaría con Pisco.Porque esta mañana, historiadores defensores del pisco dieron su versión final del gran debate sobre el origen del pisco. Un estudio del árbol genealógico del pisco mas una prueba de ADN demostró que el pisco chileno sería peruano, por lo que se sumaría para participar en esta gran velada intergaláctica del futbol sóccer mundial.',
          'imagen'=>'https://s3-sa-east-1.amazonaws.com/lalegal/app/public/system/photos/12711/original/Es-El-Pisco-Peruano-o-Chileno.png?1510832207',
          'fecha'=>'22/07/2020',
          'categoria_id'=>1,
          'user_id'=>1
       ]);
    }
}
