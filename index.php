<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Report main page
 *
 * @package    report
 * @copyright  2019 Paulo Jr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 /**
  * Estes são como includes de bibliotecas do moodle para poder utilizar variáveis e funções globais
  */
require(__DIR__.'/../../config.php');
require_once($CFG->libdir.'/adminlib.php');

/**
 * Função para configurar o menu do relatório
 */
admin_externalpage_setup('reporteduardoatv3', '', null, '', array('pagelayout'=>'report'));

/**
 * Parte de exibição da tela
 */

 /**
  * O cabeçalho o moodle já colocar o padrao,o mesmo para o footer
  */
echo $OUTPUT->header();

/**
 * Adicionado pelo dev para aparecer no header
 * Neste caso apenas exibe um texto referente a chave 'pluginname'
 */
echo $OUTPUT->heading(get_string('pluginname',  'report_eduardoatv3'));
echo get_string('heading', 'report_eduardoatv3');

/**
 * Creating a static table
 */

 /**
  * First instantiate a table object using moodle function 'html_table()'
  */

  $table = new html_table();

  /**
   * Configure the size of each three columns 
   */

$table->size = array('33%', '33%', '33%');

/**
 * Next fill the content for table's head
 */
$table->head = array(
    get_string('col_name', 'report_eduardoatv3'),
    get_string('col_date', 'report_eduardoatv3'),
    get_string('col_job', 'report_eduardoatv3')
);

/**
 * Fill the body content of table
 */
$table->data = array(
    array('<a href="https://pt.wikipedia.org/wiki/Fl%C3%A1vio_Augusto_da_Silva" target="_blank">Flavio Augusto</a>', '07/02/1972', get_string('job_business', 'report_eduardoatv3')),
    array('<a href="https://en.wikipedia.org/wiki/Kiko_Loureiro" target="_blank">Kiko Loureiro</a>', '16/06/1972', get_string('job_musician', 'report_eduardoatv3')),
    array('<a href="https://en.wikipedia.org/wiki/Jorge_Paulo_Lemann" target="_blank">Jorge P Lemann</a>', '26/08/1939', get_string('job_business', 'report_eduardoatv3')),
    array('<a href="https://pt.wikipedia.org/wiki/Alex_Kipman" target="_blank">Alex Kipman</a>', '23/06/1979', get_string('job_engineer', 'report_eduardoatv3')),
    array('<a href="https://en.wikipedia.org/wiki/Carlos_Ghosn" target="_blank">Carlos Ghosn</a>', '09/03/1954', get_string('job_business', 'report_eduardoatv3'))    
);

/**
 * Now just render the table by running the following instruction
 */
echo html_writer::table($table);


echo $OUTPUT->footer();