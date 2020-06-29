<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Dit svar på ^site_title har fået en ny kommentar af ^c_handle:\n\n^open^c_content^close\n\nYour svar var:\n\n^open^c_context^close\n\nDu kan svare ved at tilføje din egen kommentar:\n\n^url\n\nTak,\n\n^site_title",
		'a_commented_subject' => 'Dit ^site_title svar har en ny kommentar',

		'a_followed_body' => "Dit svar på ^site_title har et nyt relateret spørgsmål af ^q_handle:\n\n^open^q_title^close\n\nDit svar var:\n\n^open^a_content^close\n\nKlik forneden for at svarer det nye spørgsmål:\n\n^url\n\nThank you,\n\n^site_title",
		'a_followed_subject' => 'Dit ^site_title svar har et relateret spørgsmål',

		'a_selected_body' => "Tillykke! Dit svar på ^site_title er blevet valgt som det bedste af ^s_handle:\n\n^open^a_content^close\n\nSpørgsmålet var:\n\n^open^q_title^close\n\nKlik forneden for at se dit svar:\n\n^url\n\nThank you,\n\n^site_title",
		'a_selected_subject' => 'Dit ^site_title svar er blevet valgt!',

		'c_commented_body' => "En ny kommentar af ^c_handle er blevet tilføjet efter din kommentar på ^site_title:\n\n^open^c_content^close\n\nDiskussionen er følgende:\n\n^open^c_context^close\n\nDu kan svare ved at tilføje en anden kommentar:\n\n^url\n\nThank you,\n\n^site_title",
		'c_commented_subject' => 'Dit ^site_title kommentar er blevet tilføjet til',

		'confirm_body' => "Klik nedenfor for at bekræfte din e-mail-adresse til for ^site_title.\n\n^url\n\nBekræftelses kode: ^code\n\n Tak,\n^site_title",
		'confirm_subject' => '^site_title - E-mail-adresse Bekræftelse',

		'feedback_body' => "Kommentar:\n^message\n\nNavn:\n^name\n\nE-mail:\n^email\n\nForrige side:\n^previous\n\nBruger:\n^url\n\nIP adresse:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ feedback',

		'flagged_body' => "Et indlæg af ^p_handle er anmeldt med ^flags:\n\n^open^p_context^close\n\nKlik herunder for at se indlægget:\n\n^url\n\n\nKlik herunder for at gennemgå alle anmeldte indlæg:\n\n^a_url\n\n\nTak,\n\n^site_title",
		'flagged_subject' => '^site_title et anmeldt indlæg',

		'moderate_body' => "Et indlæg af ^p_handle kræver din godkendelse:\n\n^open^p_context^close\n\nKlik her for at godkende eller afvise indlægget:\n\n^url\n\n\nKlik her for at se alle afeventende indlæg:\n\n^a_url\n\n\nTak,\n\n^site_title",
		'moderate_subject' => '^site_title moderering',

		'new_password_body' => "Din nye adgangskode til ^site_title er forneden.\n\nPassword: ^password\n\nDet anbefales at ændre denne adgangskode umiddelbart efter at have logget ind\n\nTakker,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Din nye adgangskode',

		'private_message_body' => "Der er blevet sendt en privat besked til dig ^f_handle på ^site_title:\n\n^open^message^close\n\n^moreTakker,\n\n^site_title\n\n\nHvis du vil blokere private beskeder, skal du besøge din konto side:\n^a_url",
		'private_message_info' => "Flere informationer om ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Klik forneden for at besvarer til ^f_handle af privat besked:\n\n^url\n\n",
		'private_message_subject' => 'Besked fra ^f_handle på ^site_title',

		'q_answered_body' => "Dit spørgsmål på ^site_title er blevet besvaret af ^a_handle:\n\n^open^a_content^close\n\nDit spørgsmål var:\n\n^open^q_title^close\n\nHvis du kan lide dette svar, kan du vælge den som det bedste:\n\n^url\n\nThank you,\n\n^site_title",
		'q_answered_subject' => 'Dit ^site_title spørgsmål er blevet besvaret',

		'q_commented_body' => "Dit spørgsmål på ^site_title har fået en ny kommentar af ^c_handle:\n\n^open^c_content^close\n\nDit spørgsmål var:\n\n^open^c_context^close\n\nDu kan svare ved at tilføje din egen kommentar:\n\n^url\n\nTakker,\n\n^site_title",
		'q_commented_subject' => 'Dit ^site_title spørgsmål har fået en ny kommentar',

		'q_posted_body' => "Et nyt spørgsmål er blevet stillet af ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nKlik forneden for at se spørgsmålet:\n\n^url\n\nTakker,\n\n^site_title",
		'q_posted_subject' => '^site_title har fået et nyt spørgsmål',

		'reset_body' => "Klik nedenfor for at nulstille din adgangskode til ^site_title.\n\n^url\n\nAlternativt kan du indtaste koden nedenfor ind i feltet.\n\nCode: ^code\n\nHvis du ikke spurgte om at nulstille din adgangskode, kan du ignorere denne meddelelse.\n\nTakker,\n^site_title",
		'reset_subject' => '^site_title - Nulstil Glemt Adgangskode',

		'to_handle_prefix' => "^,\n\n",

		'welcome_body' => "Tak for tilmelding til ^site_title.\n\n^custom^confirmDine loginoplysninger er som følger:\n\nbrugernavn: ^handle\nEmail: ^email\n\nOpbevar venligst denne information sikkert for fremtidig reference.\n\nTakker,\n\n^site_title\n^url",
		'welcome_confirm' => "Klik nedenfor for at bekræfte din e-mail-adresse.\n\n^url\n\n",
		'welcome_subject' => 'Velkommen til ^site_title!',
		
		'remoderate_body' => "Et redigeret indlæg af ^p_handle kræver din godkendelse:\n\n^open^p_context^close\n\nKlik herunder for at godkende eller skjule det redigerede indlæg:\n\n^url\n\n\nKlik herunder for at se alle indlæg der afventer:\n\n^a_url\n\n\nTak\n\n^site_title",
		'remoderate_subject' => "^site_title moderering",
		'u_registered_body' => "En ny bruger har registreret sig som ^u_handle.\n\nKlik herunder for at se dennes profil:\n\n^url\n\nTak,\n\n^site_title",
		'u_to_approve_body' => "En ny bruger har registreret sig som ^u_handle.\n\nKlik herunder for at godkende brugeren:\n\n^url\n\nKlik herunder for at se alle brugere der afventer godkendelse:\n\n^a_url\n\nTak,\n\n^site_title",
		'u_registered_subject' => "^site_title har en ny bruger registreret",
		'u_approved_body' => "Du kan se din nye brugerprofil her:\n\n^url\n\nTak,\n\n^site_title",
		'u_approved_subject' => "Din ^site_title bruger er blevet godkendt",
		'wall_post_subject' => "Publicer på din ^site_title væg",
		'wall_post_body' => "^f_handle har skrevet på din væg på ^site_title:\n\n^open^post^close\n\nDu kan svare på indlægget her:\n\n^url\n\nTak,\n\n^site_title",		
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
