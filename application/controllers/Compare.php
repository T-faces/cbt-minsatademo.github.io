<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto WBZKi; WBZKi: if (defined("\x42\101\123\105\120\x41\124\110")) { goto l3j8E; } goto NteSZ; NteSZ: exit("\x4e\x6f\x20\x64\x69\x72\145\x63\164\x20\163\x63\162\x69\160\x74\40\141\143\x63\145\x73\163\40\x61\x6c\154\157\167\x65\144"); goto AD6SK; AD6SK: l3j8E: goto ZXS1j; ZXS1j: class Compare extends CI_Controller { function __construct() { goto ALij8; mhGOQ: $this->DB1 = $this->load->database("\155\x61\x69\156\137\147\x61\162\165\x64\141", TRUE); goto BfByN; BfByN: $this->DB2 = $this->load->database("\154\151\166\x65", TRUE); goto xplM_; ALij8: parent::__construct(); goto TKDVh; TKDVh: $this->CHARACTER_SET = "\165\x74\146\70\40\103\x4f\114\x4c\101\124\105\40\165\x74\146\70\137\x67\x65\x6e\145\162\x61\154\x5f\143\x69"; goto mhGOQ; xplM_: } function index() { goto ZFtXX; oR373: $tables_to_create = array_diff($development_tables, $live_tables); goto yEnaQ; OJoyM: echo "\x3c\150\x32\76\124\150\145\x20\x64\x61\x74\x61\142\141\x73\145\40\x61\x70\x70\x65\141\162\163\40\164\157\40\142\145\x20\165\160\x20\x74\157\40\x64\141\x74\145\x3c\57\x68\x32\x3e\xa"; goto MT0Nq; MbjiA: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto wzLa9; D0OG9: echo "\x3c\x70\162\145\x3e\12"; goto bc5Vi; bc5Vi: kpimC: goto I137o; ZFtXX: $sql_commands_to_run = array(); goto yjGBj; p0Rfm: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto StPrC; MT0Nq: goto kpimC; goto BdvuI; StPrC: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto MbjiA; wzLa9: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto I0rbk; } goto OJoyM; qMk_4: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\162\x6f\160")) : array(); goto p0Rfm; hQZJt: echo "\x3c\160\x3e\124\x68\x65\x20\146\157\154\154\x6f\x77\151\156\147\40\123\x51\x4c\40\x63\157\155\x6d\141\x6e\144\x73\40\156\145\x65\x64\x20\164\x6f\40\x62\145\x20\145\170\145\143\165\x74\x65\144\x20\x74\x6f\40\142\162\x69\x6e\x67\x20\x74\x68\x65\40\x4c\151\x76\145\40\144\x61\164\141\x62\x61\163\145\40\164\x61\x62\x6c\x65\163\40\x75\160\40\164\x6f\x20\x64\x61\x74\x65\x3a\x20\74\57\160\76\xa"; goto NA2X5; BdvuI: I0rbk: goto eBzWk; yEnaQ: $tables_to_drop = array_diff($live_tables, $development_tables); goto rw7dt; LOwgz: f004B: goto D0OG9; x5izs: $live_tables = $this->DB2->list_tables(); goto oR373; rw7dt: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\143\162\x65\141\164\x65")) : array(); goto qMk_4; NA2X5: echo "\x3c\160\x72\145\x20\163\x74\x79\x6c\145\x3d\47\x70\x61\144\x64\151\x6e\147\x3a\40\62\x30\x70\x78\73\x20\142\x61\143\153\147\x72\157\165\x6e\x64\x2d\x63\x6f\154\x6f\162\x3a\40\43\106\x46\x46\x41\106\60\73\47\x3e\xa"; goto BLKnV; yjGBj: $development_tables = $this->DB1->list_tables(); goto x5izs; BLKnV: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\12"; MO9aO: } goto LOwgz; eBzWk: echo "\x3c\150\62\76\x54\150\145\x20\x64\x61\164\x61\x62\141\x73\x65\40\x69\163\x20\x6f\x75\164\40\157\x66\x20\x53\171\156\x63\41\x3c\x2f\150\62\76\xa"; goto hQZJt; I137o: } function manage_tables($tables, $action) { goto Xqq9V; ONN3O: MHoWF: goto uOyvU; kh6q0: if (!($action == "\144\x72\x6f\160")) { goto k7Urv; } goto IW9UJ; qd2Zi: foreach ($tables as $table) { goto QY7JT; CeJd0: $table_structure = $query->row_array(); goto eTprz; B78lY: t5_3v: goto gkho0; QY7JT: $query = $this->DB1->query("\123\x48\117\127\40\x43\122\105\101\124\x45\40\124\101\x42\x4c\x45\x20\x60{$table}\x60\x20\55\55\40\x63\162\x65\141\164\145\x20\x74\x61\142\154\x65\x73"); goto CeJd0; eTprz: $sql_commands_to_run[] = $table_structure["\x43\x72\145\141\x74\x65\40\124\141\x62\x6c\x65"] . "\73"; goto B78lY; gkho0: } goto XfAsc; IW9UJ: foreach ($tables as $table) { $sql_commands_to_run[] = "\104\122\117\x50\x20\x54\101\x42\x4c\x45\x20{$table}\73"; wZQHp: } goto ONN3O; XfAsc: O38kf: goto QPZpk; QPZpk: v_Ei5: goto kh6q0; j_CW_: return $sql_commands_to_run; goto xRj5w; b8zja: if (!($action == "\143\x72\x65\x61\164\145")) { goto v_Ei5; } goto qd2Zi; uOyvU: k7Urv: goto j_CW_; Xqq9V: $sql_commands_to_run = array(); goto b8zja; xRj5w: } function compare_table_structures($development_tables, $live_tables) { goto d5nWo; fGeV9: foreach ($live_tables as $table) { goto aqc1l; vRnA2: $live_table_structures[$table] = $table_structure["\103\162\x65\x61\164\x65\40\x54\x61\x62\154\x65"]; goto xrBg7; xrBg7: Jncwx: goto wtEr1; p5npe: $table_structure = $query->row_array(); goto vRnA2; aqc1l: $query = $this->DB2->query("\123\110\x4f\x57\40\103\122\105\101\x54\x45\x20\124\x41\102\x4c\105\40\x60{$table}\140\x20\x2d\x2d\40\154\x69\166\145"); goto p5npe; wtEr1: } goto LAllG; L9Byv: N0pNX: goto FtMFu; LAllG: zLZfw: goto ytCIz; FtMFu: return $tables_need_updating; goto OlPuL; pQxEI: $live_table_structures = $development_table_structures = array(); goto Ayv2e; Ayv2e: foreach ($development_tables as $table) { goto nJ0Dc; gEKs_: VoQ9F: goto x5D0Y; GlyJl: $table_structure = $query->row_array(); goto LPc0a; nJ0Dc: $query = $this->DB1->query("\123\x48\117\127\x20\x43\x52\105\101\124\x45\x20\124\x41\x42\x4c\x45\x20\x60{$table}\140\40\x2d\x2d\x20\144\x65\166"); goto GlyJl; LPc0a: $development_table_structures[$table] = $table_structure["\x43\162\x65\x61\x74\145\x20\124\x61\x62\x6c\145"]; goto gEKs_; x5D0Y: } goto matWL; d5nWo: $tables_need_updating = array(); goto pQxEI; matWL: xKr1M: goto fGeV9; ytCIz: foreach ($development_tables as $table) { goto MDeVd; fXb4E: e2axn: goto Tr2Im; Tr2Im: oeHIJ: goto UZ2Bu; o0oOj: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto Lm9YP; MDeVd: $development_table = $development_table_structures[$table]; goto o0oOj; gkF65: $tables_need_updating[] = $table; goto fXb4E; Lm9YP: if (!($this->count_differences($development_table, $live_table) > 0)) { goto e2axn; } goto gkF65; UZ2Bu: } goto L9Byv; OlPuL: } function count_differences($old, $new) { goto O4YA1; pW2Jz: return $differences; goto UB9OM; nOTGZ: if (!($old[$i] != $new[$i])) { goto wUK_m; } goto W_Zyz; W_Zyz: $differences++; goto RN0Cx; t6q3g: $i++; goto PdpA4; pOk6I: $new = explode("\x20", $new); goto iTfpj; jxFjY: TXNgR: goto pW2Jz; oJ0V6: JU4at: goto Lunju; l1EYV: return $differences; goto VHJad; wNQRH: $new = trim(preg_replace("\57\x5c\163\53\57", '', $new)); goto CQkRg; KekxW: $old = explode("\x20", $old); goto pOk6I; SGbAD: $i = 0; goto oJ0V6; iTfpj: $length = max(count($old), count($new)); goto SGbAD; Lunju: if (!($i < $length)) { goto TXNgR; } goto nOTGZ; est0_: yFaLo: goto t6q3g; CQkRg: if (!($old == $new)) { goto VZBui; } goto l1EYV; VHJad: VZBui: goto KekxW; RN0Cx: wUK_m: goto est0_; O4YA1: $differences = 0; goto IVzJL; IVzJL: $old = trim(preg_replace("\57\x5c\x73\53\x2f", '', $old)); goto wNQRH; PdpA4: goto JU4at; goto jxFjY; UB9OM: } function update_existing_tables($tables) { goto LMTEk; tT1Ds: fHl1G: goto CoV3Q; we_uJ: OGUxT: goto tT1Ds; AwMMf: $table_structure_live = array(); goto q3Vgh; LMTEk: $sql_commands_to_run = array(); goto cESrN; cESrN: $table_structure_development = array(); goto AwMMf; q3Vgh: if (!(is_array($tables) && !empty($tables))) { goto fHl1G; } goto m5hvI; m5hvI: foreach ($tables as $table) { goto ooMfe; sp3qg: E4xB3: goto y5uJH; ooMfe: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto JzgWl; JzgWl: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto sp3qg; y5uJH: } goto we_uJ; AWpMT: return $sql_commands_to_run; goto KtF1E; CoV3Q: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto AWpMT; KtF1E: } function table_field_data($database, $table) { goto JLksY; UqjXw: irZ1T: goto U6Ytj; I5ItU: mysql_select_db($database["\x64\141\x74\x61\142\x61\163\x65"]); goto jjLcS; pkk28: goto irZ1T; goto vZunJ; vZunJ: AHSBS: goto KpWf4; yAx9T: $fields[] = $row; goto pkk28; U6Ytj: if (!($row = mysql_fetch_assoc($result))) { goto AHSBS; } goto yAx9T; JLksY: $conn = mysqli_connect($database["\150\157\163\164\x6e\141\x6d\x65"], $database["\x75\x73\145\162\x6e\141\155\x65"], $database["\160\141\163\x73\167\x6f\162\x64"]); goto I5ItU; KpWf4: return $fields; goto ZLOta; jjLcS: $result = mysql_query("\x53\x48\117\x57\40\x43\117\x4c\125\x4d\x4e\123\40\x46\122\x4f\x4d\x20\140{$table}\140"); goto UqjXw; ZLOta: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto I_HTs; I_HTs: $sql_commands_to_run = array(); goto DVXfk; xV8uh: MxibQ: goto gne1L; gne1L: return $sql_commands_to_run; goto E2q0f; DVXfk: foreach ($source_field_structures as $table => $fields) { goto hJZQV; JtGKy: RzU3b: goto PFl5M; PFl5M: bYJ7Z: goto AKE6Y; hJZQV: foreach ($fields as $field) { goto nCHSp; X614d: if (!(is_array($differences) && !empty($differences))) { goto JU5RI; } goto Az1w0; Az1w0: $modify_field = "\x41\114\x54\105\x52\x20\124\101\102\114\x45\40{$table}\40\x4d\117\x44\x49\x46\131\x20\x43\x4f\114\125\x4d\116\x20\140" . $fields[$n]["\x46\x69\x65\154\144"] . "\140\x20" . $fields[$n]["\124\171\160\x65"] . "\40\103\110\101\122\101\x43\x54\105\x52\x20\123\x45\x54\x20" . $this->CHARACTER_SET; goto qMhOC; N7Dkb: goto GadoW; goto h780B; BKfuW: $add_field .= isset($field["\x4e\165\x6c\x6c"]) && $field["\116\165\154\154"] == "\x59\105\123" ? "\x20\116\x75\x6c\154" : ''; goto lh2EN; Ivk2J: DKsKW: goto dpjHD; aObsq: $previous_field = $fields[$n]["\106\151\145\x6c\144"]; goto YCLYJ; RCME1: $sql_commands_to_run[] = $add_field; goto N7Dkb; xE9E1: $n++; goto GARIB; C5sHJ: $modify_field .= isset($previous_field) && $previous_field != '' ? "\40\101\x46\x54\105\x52\x20" . $previous_field : ''; goto ZFj2D; y0l8Q: tSljV: goto yNx7f; WfH7C: $add_field .= isset($field["\105\170\x74\162\x61"]) && $field["\105\x78\164\x72\141"] != '' ? "\40" . $field["\105\170\164\x72\x61"] : ''; goto cTvci; pv_aN: JU5RI: goto aObsq; M_Mvw: $modify_field = ''; goto MGSDG; m6yDu: GadoW: goto zyJPD; YCLYJ: vteAr: goto Fs1Rt; h780B: lF5sx: goto M_Mvw; icnBq: $sql_commands_to_run[] = $modify_field; goto y0l8Q; JBSvX: D6PoI: goto m6yDu; yFWh6: $add_field = "\x41\x4c\x54\105\x52\40\x54\101\x42\114\105\x20{$table}\40\101\104\104\x20\x43\x4f\114\x55\x4d\116\40\140" . $field["\x46\x69\x65\x6c\x64"] . "\x60\x20" . $field["\x54\171\x70\145"] . "\x20\x43\x48\101\122\101\103\124\105\x52\40\123\105\124\40" . $this->CHARACTER_SET; goto BKfuW; dKrIn: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto X614d; ns7r4: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\x46\151\145\154\x64"] == $destination_field_structures[$table][$n]["\106\x69\145\154\144"])) { goto vteAr; } goto dKrIn; Fs1Rt: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto tSljV; } goto icnBq; GARIB: goto DKsKW; goto JBSvX; dpjHD: if (!($n < count($fields))) { goto D6PoI; } goto ns7r4; YzmKR: $modify_field .= isset($fields[$n]["\105\x78\x74\x72\x61"]) && $fields[$n]["\105\170\x74\162\141"] != '' ? "\x20" . $fields[$n]["\105\170\x74\x72\141"] : ''; goto C5sHJ; ZFj2D: $modify_field .= "\x3b"; goto pv_aN; MGSDG: $n = 0; goto Ivk2J; yNx7f: YCOmW: goto xE9E1; zyJPD: WcE31: goto S87WV; FACoD: $modify_field .= isset($fields[$n]["\x4e\x75\154\x6c"]) && $fields[$n]["\116\x75\x6c\154"] == "\131\105\x53" ? "\x20\x4e\x55\114\x4c" : "\40\x4e\117\x54\x20\x4e\x55\114\x4c"; goto YzmKR; cTvci: $add_field .= "\73"; goto RCME1; nCHSp: if ($this->in_array_recursive($field["\x46\x69\x65\154\x64"], $destination_field_structures[$table])) { goto lF5sx; } goto yFWh6; qMhOC: $modify_field .= isset($fields[$n]["\x44\145\146\x61\165\154\164"]) && $fields[$n]["\104\145\x66\x61\165\x6c\164"] != '' ? "\x20\x44\105\106\101\x55\114\x54\x20\x27" . $fields[$n]["\104\145\146\x61\x75\x6c\164"] . "\x27" : ''; goto FACoD; lh2EN: $add_field .= "\40\x44\x45\106\101\125\x4c\124\x20" . $field["\x44\145\146\x61\x75\154\x74"]; goto WfH7C; S87WV: } goto JtGKy; AKE6Y: } goto xV8uh; E2q0f: } function in_array_recursive($needle, $haystack, $strict = false) { goto EgaZR; sODHP: return false; goto BAewx; QI8sp: et3ma: goto sODHP; EgaZR: foreach ($haystack as $array => $item) { goto VF2mn; mvipt: h1FPP: goto Ayhzx; YBb3N: return true; goto JSA5i; z3BlV: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto hIvXw; } goto YBb3N; JSA5i: hIvXw: goto mvipt; VF2mn: $item = $item["\106\151\x65\154\x64"]; goto z3BlV; Ayhzx: } goto QI8sp; BAewx: } }
