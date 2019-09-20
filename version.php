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
 * Version details
 *
 * @package    report
 * @copyright  2019 Paulo Jr
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 /**
  * Diz para o moodle que este arquivo só deve ser acessado se o usuário estiver logado,
  * caso contrário não permitir o acesso a este arquivo
  */
defined('MOODLE_INTERNAL') || die;

$plugin->version   = 2019091900;         // The current plugin version (Date: YYYYMMDDXX)
$plugin->requires  = 2015051100;         // Requires this Moodle version (see https://docs.moodle.org/dev/Releases)
$plugin->component = 'report_eduardoatv3';  // Full name of the plugin, inclui a categoria do plugin 'report' e o nome do plugin 'eduardoatv3'