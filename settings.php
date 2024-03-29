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
 * Report settings
 *
 * @package    report
 * @copyright  2019 Paulo Jr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;
/**
 * A função 'get_string' é uma função global do moodle para buscar o texto de acordo com idioma configurado no moodle.
 * Os textos são organizados no formato de chave e valor. A chave é universal para todos os idiomas variando apenas o texto.
 * 
 * No caso abaixo 'pluginname' é a chave do texto que se quer recuperar e o segundo parâmetro é referente ao nome do plugin para dizer ao moodle 
 * em qual arquivo de internacionalização buscar pelo texto de acordo com a chave.
 */
$ADMIN->add('reports', new admin_externalpage('reporteduardoatv3', get_string('pluginname', 'report_eduardoatv3'), "$CFG->wwwroot/report/eduardoatv3/index.php"));
$settings = null;
