<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\x45\120\101\x54\110") or exit("\x4e\157\x20\144\151\x72\145\x63\x74\40\163\143\162\151\160\164\40\x61\x63\x63\145\163\x73\40\x61\x6c\x6c\157\167\145\144"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; use PhpOffice\PhpWord\PhpWord; class Datajurusan extends CI_Controller { public function __construct() { goto VFmMI; ZT_EX: if (!$this->ion_auth->logged_in()) { goto jOQ2a; } goto hacbZ; hacbZ: if ($this->ion_auth->is_admin()) { goto okckf; } goto eMv5W; BDQ9O: goto v_xRs; goto e9l4G; eMv5W: show_error("\x48\x61\156\x79\x61\40\x41\x64\155\151\156\x69\163\164\162\141\x74\x6f\x72\40\171\141\156\x67\x20\x64\x69\x62\145\x72\151\40\x68\141\153\x20\165\156\x74\165\153\40\155\x65\156\x67\141\153\163\x65\x73\x20\150\141\x6c\141\155\x61\x6e\40\x69\x6e\151\54\x20\x3c\x61\40\x68\x72\145\x66\75\x22" . base_url("\144\141\163\x68\x62\x6f\141\162\x64") . "\x22\x3e\x4b\x65\x6d\x62\141\x6c\x69\40\x6b\145\x20\155\x65\x6e\165\40\141\167\x61\154\x3c\57\x61\x3e", 403, "\x41\x6b\163\145\x73\40\124\x65\162\154\x61\x72\x61\x6e\x67"); goto eNwUM; QOne2: $this->form_validation->set_error_delimiters('', ''); goto a2b0u; eNwUM: okckf: goto BDQ9O; Dv1BE: $this->load->model("\104\141\x73\x68\x62\x6f\x61\162\x64\x5f\x6d\157\x64\145\x6c", "\144\x61\163\x68\142\x6f\x61\162\144"); goto k9nX1; k9nX1: $this->load->model("\104\x72\x6f\x70\144\157\x77\156\137\x6d\x6f\x64\x65\x6c", "\x64\x72\x6f\x70\144\x6f\x77\156"); goto QOne2; e9l4G: jOQ2a: goto q5Qfd; iiYjl: $this->load->library(["\144\141\x74\x61\164\141\x62\154\x65\x73", "\146\157\162\x6d\137\x76\141\154\151\x64\141\x74\151\x6f\x6e"]); goto uSNjb; VFmMI: parent::__construct(); goto ZT_EX; q5Qfd: redirect("\x61\x75\164\x68"); goto wwgJZ; uSNjb: $this->load->model("\x4d\x61\x73\164\145\162\137\x6d\x6f\144\145\154", "\155\x61\163\x74\x65\x72"); goto Dv1BE; wwgJZ: v_xRs: goto iiYjl; a2b0u: } public function output_json($data, $encode = true) { goto E_aqJ; lJaP9: $data = json_encode($data); goto apee1; E_aqJ: if (!$encode) { goto zaLC2; } goto lJaP9; apee1: zaLC2: goto XIJlU; XIJlU: $this->output->set_content_type("\x61\160\x70\154\151\143\141\164\151\x6f\x6e\57\x6a\x73\x6f\156")->set_output($data); goto pXbFg; pXbFg: } public function index() { goto UQBBk; KFgtT: $data["\163\x6d\x74\x5f\x61\x63\164\x69\166\145"] = $this->dashboard->getSemesterActive(); goto hnS7W; Ijkm9: $this->load->view("\x6d\141\163\164\x65\x72\x2f\x6a\165\x72\x75\x73\141\156\x2f\x64\141\164\141"); goto mAetY; qyVcd: $this->load->view("\137\x74\x65\155\160\x6c\x61\164\x65\x73\x2f\144\141\x73\150\142\157\x61\x72\x64\57\x5f\x68\145\x61\144\x65\162", $data); goto Ijkm9; TZpdi: $data["\152\165\x72\165\x73\x61\156\137\155\141\x70\x65\x6c\x73"] = $jurusan_mapels; goto qyVcd; O3cSC: $data = ["\x75\x73\145\x72" => $user, "\152\x75\144\x75\x6c" => "\112\165\x72\x75\163\x61\x6e", "\x73\x75\x62\x6a\165\x64\165\154" => "\x44\141\x74\141\40\x4a\165\162\x75\x73\x61\156", "\x70\x72\157\x66\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\x65\x74\x74\x69\156\147" => $this->dashboard->getSetting()]; goto QCP3j; MV088: $jurusan_mapels = []; goto TbG4v; OkVzn: $jurusans = $this->master->getDataJurusan(); goto MV088; fbzb3: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto KFgtT; hnS7W: $data["\155\141\x70\x65\154\x5f\x70\145\155\x69\156\141\164\x61\x6e"] = $this->dropdown->getAllMapelPeminatan(); goto OkVzn; mAetY: $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\x65\x73\x2f\144\141\x73\x68\142\x6f\x61\x72\144\x2f\137\146\157\157\x74\x65\x72"); goto g53d8; QCP3j: $data["\164\x70"] = $this->dashboard->getTahun(); goto XUscC; UQBBk: $user = $this->ion_auth->user()->row(); goto O3cSC; XUscC: $data["\164\160\137\141\x63\x74\x69\166\145"] = $this->dashboard->getTahunActive(); goto fbzb3; TbG4v: foreach ($jurusans as $jurusan) { $jurusan_mapels[$jurusan->id_jurusan] = $this->master->getDataJurusanMapel(explode("\54", $jurusan->mapel_peminatan)); KPlxh: } goto Frysy; Frysy: E6Yor: goto apwQt; apwQt: $data["\x6a\165\162\165\x73\x61\156\163"] = $jurusans; goto TZpdi; g53d8: } public function add() { goto Ey7jx; DbpJP: array_push($mapels, $this->input->post("\x6d\141\x70\x65\x6c\133" . $i . "\135", true)); goto mNLtI; pIi2p: D96Hp: goto XrFaC; UZxpQ: SsNx3: goto qx1Mz; l9SUI: $i++; goto ZMQcx; ub1NY: if (!$check_mapel) { goto K9a14; } goto UeMfa; NMXCV: $this->master->create("\155\141\163\x74\145\162\137\x6a\165\162\x75\163\141\x6e", $insert, false); goto J7LMv; J7LMv: $data["\163\164\141\x74\x75\163"] = $insert; goto sfzkU; XrFaC: if (!($i <= $row_mapels)) { goto SsNx3; } goto DbpJP; Ey7jx: $mapels = []; goto ePQNn; mNLtI: PUrQF: goto l9SUI; ZMQcx: goto D96Hp; goto UZxpQ; UeMfa: $row_mapels = count($this->input->post("\x6d\141\x70\145\x6c", true)); goto sNaMX; sNaMX: $i = 0; goto pIi2p; qx1Mz: K9a14: goto AXIhi; sfzkU: $this->output_json($data); goto QNvJd; ePQNn: $check_mapel = $this->input->post("\155\x61\160\x65\154", true); goto ub1NY; AXIhi: $insert = ["\x6e\x61\155\x61\x5f\152\x75\162\165\x73\141\156" => $this->input->post("\156\141\x6d\141\137\x6a\x75\162\x75\163\141\156", true), "\153\x6f\x64\145\x5f\152\165\x72\x75\x73\x61\156" => $this->input->post("\x6b\x6f\144\x65\x5f\x6a\x75\x72\165\163\x61\156", true), "\155\x61\160\145\154\137\160\x65\155\151\x6e\141\164\x61\156" => implode("\x2c", $mapels)]; goto NMXCV; QNvJd: } public function data() { $this->output_json($this->master->getDataTableJurusan(), false); } public function save() { goto GRUJH; BEJmD: SqUqY: goto brLlg; Up_iY: $i++; goto Yg6Dq; EMC1L: cnE40: goto M3Ukg; o0HRe: $data["\163\x74\x61\164\165\163"] = $status; goto MCLSg; brLlg: kLOlu: goto Up_iY; nPgU0: $error[] = [$nama_jurusan => form_error($nama_jurusan)]; goto O_wDJ; y4VXa: $mode = $this->input->post("\x6d\157\x64\145", true); goto BTrP_; IfIGW: $status = TRUE; goto pFvbR; GYCYy: if (!($mode == "\145\x64\x69\164")) { goto Zg33V; } goto PB5Kr; ZgUfR: Pp7yQ: goto OujMn; LM0LD: $this->master->create("\x6d\141\x73\x74\x65\162\137\x6a\x75\162\165\163\x61\x6e", $insert, true); goto ltNBU; nOhvf: goto fnIYf; goto M91xR; JoBBF: $this->form_validation->set_rules($nama_jurusan, "\112\165\162\x75\163\141\156", "\x72\145\x71\x75\x69\x72\x65\x64"); goto y4Xws; Rg_xi: $data["\165\160\x64\141\x74\145"] = $update; goto id99D; xUh75: KCYAR: goto o0HRe; fGbGj: goto KCYAR; goto EMC1L; y4Xws: $this->form_validation->set_message("\162\145\161\165\151\162\x65\x64", "\x7b\x66\151\x65\154\x64\x7d\x20\127\141\x6a\151\x62\x20\x64\151\151\163\151"); goto jPPld; OujMn: if ($status) { goto cnE40; } goto OQtOv; O_wDJ: $status = FALSE; goto BEJmD; AR6MV: $data["\145\162\x72\x6f\x72\163"] = $error; goto O9yMV; ZxLtg: if (!($mode == "\x65\x64\x69\164")) { goto UaAOG; } goto ez3fx; Yg6Dq: goto hX8qs; goto ZgUfR; O9yMV: dcmGu: goto fGbGj; M91xR: FuVi1: goto LM0LD; uZuMs: Zg33V: goto YvIQG; D7Z9P: X7sOU: goto LicPr; PB5Kr: $update[] = array("\x69\x64\137\152\165\x72\x75\x73\141\x6e" => $this->input->post("\x69\144\137\x6a\165\162\165\163\141\x6e\x5b" . $i . "\x5d", true), "\x6e\x61\155\141\x5f\152\165\162\165\x73\x61\x6e" => $this->input->post($nama_jurusan, true)); goto uZuMs; jPPld: if ($this->form_validation->run() === FALSE) { goto IS2Ik; } goto JuTBA; BTrP_: $i = 1; goto xG9iK; M3Ukg: if ($mode == "\x61\144\x64") { goto FuVi1; } goto ZxLtg; YvIQG: goto mf7PL; goto D7Z9P; pNWLB: fnIYf: goto xUh75; pFvbR: goto SqUqY; goto qu5Pw; GRUJH: $rows = count($this->input->post("\156\x61\x6d\141\x5f\x6a\x75\x72\165\163\x61\x6e", true)); goto y4VXa; MCLSg: $this->output_json($data); goto D8uEm; OQtOv: if (!isset($error)) { goto dcmGu; } goto AR6MV; qu5Pw: IS2Ik: goto nPgU0; xG9iK: hX8qs: goto TqMb7; LicPr: $insert[] = ["\156\141\155\141\137\152\x75\162\165\x73\x61\x6e" => $this->input->post($nama_jurusan, true)]; goto yadbl; id99D: UaAOG: goto nOhvf; ez3fx: $this->master->update("\x6d\x61\163\164\145\x72\137\x6a\x75\162\165\x73\x61\x6e", $update, "\x69\x64\137\152\x75\162\x75\x73\x61\156", null, true); goto Rg_xi; wMH5X: $nama_jurusan = "\x6e\x61\x6d\x61\137\x6a\165\x72\165\163\141\156\x5b" . $i . "\135"; goto JoBBF; yadbl: mf7PL: goto IfIGW; ltNBU: $data["\x69\x6e\x73\145\162\x74"] = $insert; goto pNWLB; TqMb7: if (!($i <= $rows)) { goto Pp7yQ; } goto wMH5X; JuTBA: if ($mode == "\141\144\144") { goto X7sOU; } goto GYCYy; D8uEm: } public function update() { $data = $this->master->updateJurusan(); $this->output->set_content_type("\141\160\x70\154\151\143\141\x74\151\157\x6e\x2f\152\163\x6f\x6e")->set_output($data); } public function delete() { goto fzHSC; q9MTl: $tables = []; goto SXjD3; fzHSC: $chk = $this->input->post("\x63\x68\145\143\153\145\144", true); goto rzCqk; Xi0JZ: UjPvG: goto pu25n; M0lw9: $this->output_json(["\163\164\141\x74\x75\x73" => true, "\164\x6f\x74\141\154" => count($chk)]); goto fCB_5; FU1KB: CvBcx: goto gHlfW; cMgQh: mZQ61: goto UHzkG; iNJoh: foreach ($tabless as $table) { goto K5fv1; w5TKJ: foreach ($fields as $field) { goto d6f9t; zfvoi: XSDq_: goto HztP2; d6f9t: if (!($field->name == "\151\x64\137\x6a\165\162\x75\163\141\x6e" || $field->name == "\152\165\162\x75\163\141\x6e\x5f\x69\x64")) { goto R9rXU; } goto kfYPy; kfYPy: array_push($tables, $table); goto DW0n4; DW0n4: R9rXU: goto zfvoi; HztP2: } goto Idx2I; Iv4d4: vsgXn: goto l4Ida; K5fv1: $fields = $this->db->field_data($table); goto w5TKJ; Idx2I: DGQVg: goto Iv4d4; l4Ida: } goto BUWty; j2QrZ: $messages = []; goto q9MTl; I9ZlG: if (!$this->master->delete("\155\x61\163\164\145\x72\137\152\165\x72\x75\x73\141\x6e", $chk, "\151\144\x5f\152\165\162\x75\x73\141\156")) { goto p7NzT; } goto M0lw9; pu25n: $this->output_json(["\163\x74\x61\x74\x75\x73" => false, "\164\x6f\x74\x61\x6c" => "\104\x61\x74\141\40\112\x75\x72\165\x73\x61\x6e\x20\144\151\147\165\x6e\x61\x6b\x61\x6e\40\144\x69\40" . count($messages) . "\40\x74\141\x62\x65\x6c\72\x3c\x62\162\76" . implode("\74\x62\162\76", $messages)]); goto cMgQh; rzCqk: if (!$chk) { goto CvBcx; } goto j2QrZ; XwKJ3: Uoy2C: goto e_iSU; BUWty: jf76R: goto L1ugr; fCB_5: p7NzT: goto vMoFu; fydsF: m14k5: goto N5Dwp; gHlfW: $this->output_json(["\163\x74\141\164\x75\163" => false, "\x74\157\x74\x61\x6c" => "\x54\151\144\x61\153\x20\x61\x64\x61\40\x64\x61\164\141\40\171\x61\x6e\x67\40\144\151\160\x69\154\x69\x68\x21"]); goto fydsF; L1ugr: foreach ($tables as $table) { goto wiHuY; efRtF: heAKM: goto EYg7a; qo8ap: $this->db->where_in("\152\165\162\x75\x73\141\156\x5f\x69\144", $chk); goto HWql_; yglLS: $this->db->where_in("\151\144\x5f\152\x75\x72\165\163\141\156", $chk); goto R7mgn; lrVH9: ma_Gb: goto qo8ap; f1qLZ: K073i: goto eY7_6; kxUU1: if ($table == "\155\141\x73\x74\x65\x72\137\x6b\x65\154\141\x73") { goto ma_Gb; } goto yglLS; ci2V4: if (!($num > 0)) { goto K073i; } goto jWN0J; jWN0J: array_push($messages, $table); goto f1qLZ; LMAPu: zZ1_8: goto ci2V4; wiHuY: if (!($table != "\x6d\x61\163\164\x65\162\137\152\x75\162\165\163\x61\156")) { goto h2OnN; } goto kxUU1; eY7_6: h2OnN: goto efRtF; e1Dv2: goto zZ1_8; goto lrVH9; HWql_: $num = $this->db->count_all_results($table); goto LMAPu; R7mgn: $num = $this->db->count_all_results($table); goto e1Dv2; EYg7a: } goto XwKJ3; SXjD3: $tabless = $this->db->list_tables(); goto iNJoh; UHzkG: goto m14k5; goto FU1KB; e_iSU: if (count($messages) > 0) { goto UjPvG; } goto I9ZlG; vMoFu: goto mZQ61; goto Xi0JZ; N5Dwp: } public function load_jurusan() { $data = $this->master->getJurusan(); $this->output_json($data); } public function import($import_data = null) { goto jH7t3; jH7t3: $user = $this->ion_auth->user()->row(); goto zYTz5; N_lCa: $data["\164\x70"] = $this->dashboard->getTahun(); goto LQmzO; zYTz5: $data = ["\x75\163\x65\162" => $user, "\x6a\x75\x64\165\x6c" => "\x4a\x75\162\x75\163\x61\156", "\163\x75\x62\152\x75\x64\x75\x6c" => "\x49\155\x70\x6f\162\164\x20\x4a\165\162\165\x73\141\156", "\160\162\157\146\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\x74\151\156\147" => $this->dashboard->getSetting()]; goto Lzp32; NSOpa: f_fxU: goto N_lCa; dkvcA: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto stOdQ; LQmzO: $data["\164\160\137\141\x63\x74\151\166\x65"] = $this->dashboard->getTahunActive(); goto dkvcA; stOdQ: $data["\x73\155\164\137\x61\x63\x74\x69\166\145"] = $this->dashboard->getSemesterActive(); goto Idhk1; Lzp32: if (!($import_data != null)) { goto f_fxU; } goto gkmFr; Idhk1: $this->load->view("\x5f\164\x65\155\160\x6c\x61\164\145\163\57\x64\141\x73\150\142\x6f\141\x72\x64\57\137\150\x65\141\144\145\162", $data); goto smms1; dN_uN: $this->load->view("\137\164\145\x6d\160\154\x61\164\145\163\57\144\141\163\x68\142\157\x61\162\x64\57\x5f\x66\x6f\x6f\x74\x65\162"); goto M3bnP; gkmFr: $data["\151\155\160\x6f\162\164"] = $import_data; goto NSOpa; smms1: $this->load->view("\155\141\163\x74\x65\162\57\x6a\x75\x72\165\163\x61\x6e\x2f\151\x6d\160\157\x72\x74"); goto dN_uN; M3bnP: } public function preview() { goto cGmDB; VB9BM: $data[] = ["\x6e\x61\155\x61" => $sheetData[$i][1], "\x6b\x6f\144\145" => $sheetData[$i][2]]; goto fds35; jo_iz: if (!$this->upload->do_upload("\x75\x70\154\x6f\141\x64\x5f\146\x69\154\145")) { goto vXetN; } goto JaDpq; nrmkM: unlink($file); goto z4sY4; jjlcF: $this->load->library("\165\x70\x6c\157\x61\x64", $config); goto jo_iz; hPQ6z: $config["\x61\x6c\154\157\x77\x65\144\x5f\164\171\x70\145\163"] = "\x78\154\x73\x7c\170\x6c\x73\x78\174\x63\x73\166"; goto wFODZ; N96f4: die; goto m2erq; IiLkF: $sheetData = $spreadsheet->getActiveSheet()->toArray(); goto Ejyl9; tW5n0: cGhMq: goto kxigY; AA06s: $i++; goto ooLP8; wFODZ: $config["\155\x61\x78\x5f\x73\x69\x7a\x65"] = 2048; goto KWNMB; z4sY4: echo json_encode($data); goto Vkkm5; d4lf5: CMV_i: goto AA06s; XFHQI: $error = $this->upload->display_errors(); goto xCoBH; cGmDB: $config["\165\x70\x6c\x6f\x61\x64\137\x70\x61\x74\x68"] = "\56\57\165\x70\x6c\x6f\x61\x64\x73\57\x69\155\x70\x6f\x72\164\57"; goto hPQ6z; JaDpq: $file = $this->upload->data("\x66\165\154\154\137\160\x61\164\x68"); goto LHkrZ; ooLP8: goto cGhMq; goto K1JoT; jV5D9: $i = 1; goto tW5n0; yy901: KYwo2: goto hViAP; xCoBH: echo $error; goto N96f4; LHkrZ: $ext = $this->upload->data("\x66\151\x6c\x65\137\145\x78\164"); goto tq3nM; hViAP: F7Ovh: goto l_xX7; kxigY: if (!($i < count($sheetData))) { goto hX8aQ; } goto Qc7d8; tq3nM: switch ($ext) { case "\x2e\x78\x6c\x73\x78": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); goto F7Ovh; case "\x2e\x78\x6c\163": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); goto F7Ovh; case "\x2e\x63\x73\x76": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); goto F7Ovh; default: echo "\165\156\153\x6e\157\x77\156\x20\x66\x69\154\x65\x20\x65\170\x74"; die; } goto yy901; fds35: Y9EI0: goto d4lf5; Vkkm5: goto ZouAf; goto kq1Dm; Ejyl9: $data = []; goto jV5D9; l_xX7: $spreadsheet = $reader->load($file); goto IiLkF; kq1Dm: vXetN: goto XFHQI; K1JoT: hX8aQ: goto nrmkM; m2erq: ZouAf: goto wjnPo; Qc7d8: if (!($sheetData[$i][0] != null)) { goto Y9EI0; } goto VB9BM; KWNMB: $config["\x65\156\x63\162\171\160\x74\137\x6e\141\155\145"] = true; goto jjlcF; wjnPo: } public function previewWord() { goto wvhWP; GM12J: saFHB: goto MIbHz; PKJGk: wORxK: goto sVHN3; f0VrI: $tables = $dom->getElementsByTagName("\x74\x61\142\x6c\x65"); goto Et1ea; hAjbb: $i = 1; goto GM12J; pr4R3: $dom = new DOMDocument(); goto ml7Kh; IrFKk: fr0b0: goto iJFnr; HTe1h: $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord); goto gvvcH; UNITm: RjlRb: goto ME7T0; gkO6z: $file = $this->upload->data("\146\x75\154\154\137\160\141\x74\x68"); goto dvvI7; D7oiJ: if (!$this->upload->do_upload("\x75\x70\x6c\157\141\144\137\146\151\x6c\x65")) { goto fzqH_; } goto gkO6z; NcFjv: $cols = $rows[$i]->getElementsByTagName("\164\144"); goto Dgf8B; e3GJ3: $this->load->library("\165\x70\154\x6f\x61\x64", $config); goto D7oiJ; sVHN3: echo json_encode($data); goto P34Xn; tVLwd: unlink($file); goto U0Xf0; r2kDc: fzqH_: goto iFXb1; U0Xf0: $text = file_get_contents("\56\x2f\x75\160\154\157\141\x64\163\57\x74\145\155\x70\x2f\144\x6f\x63\56\x68\164\155\x6c"); goto pr4R3; CgF69: $config["\155\141\170\x5f\163\151\x7a\x65"] = 2048; goto vW3Mr; idFJT: $dom->preserveWhiteSpace = false; goto f0VrI; Et1ea: $rows = $tables->item(0)->getElementsByTagName("\164\x72"); goto hAjbb; wvhWP: $config["\165\x70\154\157\141\144\x5f\160\x61\164\x68"] = "\x2e\x2f\x75\160\x6c\157\141\144\163\57\x69\x6d\x70\x6f\x72\164\57"; goto vCjiC; kA1dx: die; goto UNITm; MIbHz: if (!($i < $rows->count())) { goto wORxK; } goto NcFjv; dvvI7: $phpWord = \PhpOffice\PhpWord\IOFactory::load($file); goto HTe1h; gXnky: goto saFHB; goto PKJGk; Dgf8B: $data[] = ["\x6e\x61\x6d\x61" => $cols->item(1)->nodeValue, "\153\x6f\x64\145" => $cols->item(2)->nodeValue]; goto IrFKk; gvvcH: try { $htmlWriter->save("\56\x2f\165\160\154\157\x61\x64\163\x2f\164\x65\155\x70\x2f\144\157\143\x2e\x68\164\155\x6c"); } catch (\PhpOffice\PhpWord\Exception\Exception $e) { } goto tVLwd; P34Xn: goto RjlRb; goto r2kDc; vW3Mr: $config["\145\x6e\143\x72\x79\160\x74\137\x6e\x61\155\145"] = true; goto e3GJ3; K9HWj: echo $error; goto kA1dx; iJFnr: $i++; goto gXnky; ml7Kh: $dom->loadHTML($text); goto bfceq; iFXb1: $error = $this->upload->display_errors(); goto K9HWj; bfceq: $data = []; goto idFJT; vCjiC: $config["\x61\154\x6c\x6f\x77\145\x64\137\164\171\160\x65\x73"] = "\144\157\x63\170"; goto CgF69; ME7T0: } public function do_import() { goto s8MPg; ErEaQ: $this->output->set_content_type("\141\160\x70\x6c\x69\143\x61\164\151\157\x6e\57\152\x73\x6f\156")->set_output($save); goto TwTDn; cxyg9: $save = $this->master->create("\x6d\141\163\x74\x65\x72\x5f\x6a\165\162\x75\163\x61\x6e", $jurusan, true); goto ErEaQ; irIaS: Nhql4: goto cxyg9; H856k: $jurusan = []; goto c2CZV; s8MPg: $data = json_decode($this->input->post("\x6a\x75\x72\165\x73\141\156", true)); goto H856k; c2CZV: foreach ($data as $j) { $jurusan[] = ["\156\x61\x6d\x61\137\152\x75\162\x75\x73\x61\156" => $j->nama, "\x6b\x6f\144\x65\x5f\x6a\165\x72\x75\163\x61\x6e" => $j->kode]; JBaIx: } goto irIaS; TwTDn: } function updateById() { goto PdJZw; vEgVJ: $nama = $this->input->post("\x75\163\145\x72\156\141\x6d\x65", true); goto zlzff; PdJZw: $id = $this->input->post("\x69\x64\137\152\x75\x72\165\163\141\156"); goto vEgVJ; zlzff: $kode = $this->input->post("\x65\155\x61\151\154", true); goto J39zi; E71Gs: return $this->db->update("\x6d\141\163\x74\145\162\x5f\x6a\165\x72\x75\163\141\x6e"); goto ROV9B; PXmjO: $this->db->where("\151\x64\137\152\165\x72\x75\x73\141\156", $id); goto E71Gs; J39zi: $this->db->set("\x6e\x61\x6d\x61\137\152\x75\162\x75\x73\141\x6e", $nama); goto KGnf2; KGnf2: $this->db->set("\x6b\x6f\x64\x65\137\x6a\165\x72\x75\x73\141\x6e", $kode); goto PXmjO; ROV9B: } public function hapusById() { goto Gd_54; qRmY2: return $this->db->delete("\x6d\141\x73\x74\145\x72\137\152\x75\x72\x75\x73\141\x6e"); goto l_zZ0; Gd_54: $id = $this->input->post("\151\x64"); goto ibndi; ibndi: $this->db->where("\151\x64\137\152\165\x72\165\x73\141\156", $id); goto qRmY2; l_zZ0: } function exist($table, $data) { goto W34NE; woFi0: if ($count === 0) { goto bioU_; } goto KNnCe; BWndM: goto PZS6t; goto ZEbP7; KNnCe: return true; goto BWndM; W34NE: $query = $this->db->get_where($table, $data); goto k1Evv; ZEbP7: bioU_: goto G4ZG5; k1Evv: $count = $query->num_rows(); goto woFi0; G4ZG5: return false; goto lvTDw; lvTDw: PZS6t: goto MPu3x; MPu3x: } }
