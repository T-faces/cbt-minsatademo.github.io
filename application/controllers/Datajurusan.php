<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\120\x41\x54\x48") or exit("\x4e\x6f\x20\x64\x69\x72\145\x63\164\x20\x73\143\x72\151\x70\164\x20\x61\x63\143\x65\x73\x73\x20\141\x6c\x6c\157\167\145\x64"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; use PhpOffice\PhpWord\PhpWord; class Datajurusan extends CI_Controller { public function __construct() { goto IdKGR; gW2lb: redirect("\141\x75\x74\x68"); goto mfC8I; fZDS5: goto gvKYY; goto JMDOa; URWNu: if ($this->ion_auth->is_admin()) { goto SaJ2Y; } goto aykz4; nVm1A: $this->load->model("\x4d\x61\x73\x74\145\x72\137\155\x6f\x64\145\154", "\x6d\141\163\x74\x65\x72"); goto uj3_Z; IqhrT: $this->form_validation->set_error_delimiters('', ''); goto iVeX8; mfC8I: gvKYY: goto yQXnV; NomVA: SaJ2Y: goto fZDS5; aykz4: show_error("\x48\141\156\x79\x61\x20\101\x64\x6d\151\x6e\151\x73\164\x72\x61\164\157\162\x20\x79\141\156\x67\40\x64\x69\142\x65\x72\151\x20\150\x61\153\x20\x75\156\164\165\153\x20\155\x65\x6e\x67\x61\153\x73\x65\x73\40\x68\141\x6c\141\155\141\x6e\x20\x69\x6e\151\x2c\40\74\x61\40\150\162\x65\146\75\42" . base_url("\144\x61\x73\x68\x62\x6f\x61\x72\x64") . "\x22\76\113\x65\155\x62\x61\154\x69\40\x6b\145\40\x6d\x65\x6e\x75\40\141\167\x61\154\74\57\x61\76", 403, "\x41\x6b\x73\145\163\40\124\145\162\154\141\162\141\156\147"); goto NomVA; uj3_Z: $this->load->model("\x44\x61\x73\x68\142\157\141\162\144\137\155\157\x64\145\154", "\144\141\x73\x68\x62\x6f\141\162\x64"); goto Ap4Xh; Ap4Xh: $this->load->model("\104\162\157\x70\144\x6f\167\x6e\x5f\155\157\144\x65\154", "\x64\x72\x6f\x70\x64\157\167\x6e"); goto IqhrT; JMDOa: Gej76: goto gW2lb; IdKGR: parent::__construct(); goto LKObe; LKObe: if (!$this->ion_auth->logged_in()) { goto Gej76; } goto URWNu; yQXnV: $this->load->library(["\x64\x61\x74\x61\x74\x61\142\x6c\145\163", "\x66\157\162\155\137\x76\x61\154\151\144\141\x74\x69\x6f\x6e"]); goto nVm1A; iVeX8: } public function output_json($data, $encode = true) { goto MSsMW; tGrGs: OvdPg: goto d10jU; o6RfH: $data = json_encode($data); goto tGrGs; d10jU: $this->output->set_content_type("\141\160\160\154\151\143\141\x74\151\x6f\156\57\152\163\157\156")->set_output($data); goto tIRoV; MSsMW: if (!$encode) { goto OvdPg; } goto o6RfH; tIRoV: } public function index() { goto tGiCW; mJado: $data["\164\x70\137\x61\x63\164\151\166\x65"] = $this->dashboard->getTahunActive(); goto MZRHv; qdjMM: $data = ["\165\x73\145\162" => $user, "\152\x75\144\x75\x6c" => "\x4a\x75\162\x75\163\141\156", "\163\x75\x62\152\165\x64\165\154" => "\x44\x61\x66\164\x61\x72\x20\112\165\162\165\163\x61\x6e", "\160\162\x6f\x66\x69\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\163\145\164\164\151\x6e\147" => $this->dashboard->getSetting()]; goto owqnF; nFQ4n: GZ0Wm: goto vartM; t2336: $this->load->view("\137\164\x65\x6d\160\154\141\x74\145\163\x2f\x64\x61\163\150\x62\x6f\x61\162\x64\x2f\137\x66\157\x6f\x74\145\162"); goto aNzXz; X5nUZ: $data["\155\141\x70\x65\x6c\x5f\160\145\155\151\x6e\x61\x74\141\x6e"] = $this->dropdown->getAllMapelPeminatan(); goto XJoC0; owqnF: $data["\x74\x70"] = $this->dashboard->getTahun(); goto mJado; mq9Pd: $this->load->view("\x6d\141\163\x74\145\x72\x2f\x6a\165\162\165\x73\141\156\x2f\144\x61\164\x61"); goto t2336; vartM: $data["\x6a\165\162\x75\x73\141\156\163"] = $jurusans; goto AlEHs; JeIZ1: $data["\x73\155\x74\137\141\x63\x74\151\x76\x65"] = $this->dashboard->getSemesterActive(); goto X5nUZ; MZRHv: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto JeIZ1; RxPuO: foreach ($jurusans as $jurusan) { $jurusan_mapels[$jurusan->id_jurusan] = $this->master->getDataJurusanMapel(explode("\x2c", $jurusan->mapel_peminatan)); qVPZd: } goto nFQ4n; XJoC0: $jurusans = $this->master->getDataJurusan(); goto LZ00g; tGiCW: $user = $this->ion_auth->user()->row(); goto qdjMM; AlEHs: $data["\x6a\165\x72\x75\163\x61\156\137\x6d\x61\160\145\154\163"] = $jurusan_mapels; goto Ga439; Ga439: $this->load->view("\x5f\x74\145\x6d\160\154\141\x74\x65\x73\57\144\141\163\150\142\x6f\141\x72\x64\57\137\x68\x65\141\x64\145\162", $data); goto mq9Pd; LZ00g: $jurusan_mapels = []; goto RxPuO; aNzXz: } public function add() { goto eHQCl; v0wLY: HXDGY: goto rJokW; rMpf2: XLWmu: goto kUU9o; Ctnsz: $this->output_json($data); goto BrS1_; rJokW: $i++; goto UD_9m; kUU9o: if (!($i <= $row_mapels)) { goto skhS5; } goto G7CL2; dWvqJ: $data["\163\164\x61\x74\165\x73"] = $insert; goto Ctnsz; G7CL2: array_push($mapels, $this->input->post("\155\x61\x70\x65\154\133" . $i . "\x5d", true)); goto v0wLY; cScto: $insert = ["\x6e\141\x6d\x61\137\152\x75\162\x75\x73\x61\156" => $this->input->post("\x6e\x61\x6d\141\137\x6a\x75\x72\165\163\x61\156", true), "\x6b\x6f\x64\x65\x5f\152\x75\162\165\163\x61\156" => $this->input->post("\153\x6f\x64\x65\x5f\x6a\165\162\165\163\141\x6e", true), "\x6d\141\x70\145\x6c\137\x70\x65\x6d\151\x6e\141\x74\x61\x6e" => implode("\x2c", $mapels)]; goto lqVM0; kGXZs: $row_mapels = count($this->input->post("\x6d\x61\160\x65\154", true)); goto SGDbZ; UD_9m: goto XLWmu; goto E1Jdo; eHQCl: $mapels = []; goto QrqfW; lqVM0: $this->master->create("\155\141\163\164\x65\x72\137\x6a\x75\x72\x75\163\x61\156", $insert, false); goto dWvqJ; SGDbZ: $i = 0; goto rMpf2; c9M87: if (!$check_mapel) { goto JRG_O; } goto kGXZs; QrqfW: $check_mapel = $this->input->post("\x6d\141\x70\x65\154", true); goto c9M87; E1Jdo: skhS5: goto Qcv3w; Qcv3w: JRG_O: goto cScto; BrS1_: } public function data() { $this->output_json($this->master->getDataTableJurusan(), false); } public function save() { goto X2L91; WxvpV: $this->master->create("\155\141\x73\x74\145\x72\x5f\x6a\x75\x72\x75\x73\141\156", $insert, true); goto plZH7; uc360: ESRvJ: goto fy8pL; CQnB_: gTv6E: goto WxvpV; gRXOu: UTrNS: goto PULgC; X2L91: $rows = count($this->input->post("\156\141\155\141\137\152\165\x72\x75\163\x61\156", true)); goto ZkXd0; qnOoA: $this->master->update("\x6d\x61\163\164\145\162\x5f\152\x75\x72\x75\x73\x61\x6e", $update, "\x69\144\137\x6a\x75\x72\165\x73\x61\x6e", null, true); goto sJywe; lkefN: NisIf: goto VVykx; mnful: $this->form_validation->set_rules($nama_jurusan, "\112\x75\162\165\163\x61\x6e", "\162\x65\x71\x75\151\x72\x65\x64"); goto ckTXg; rJ6_X: if (!isset($error)) { goto Dag3h; } goto eXyAB; GRmd7: if ($status) { goto G_l_i; } goto rJ6_X; CWLrx: gSRmn: goto QU2wO; iG7Jt: GsKRA: goto AxGEn; ZkXd0: $mode = $this->input->post("\x6d\x6f\x64\x65", true); goto d6uXV; kb9I0: goto fRGi8; goto pXm6u; AGlti: $i++; goto xq_PE; VVykx: goto gSRmn; goto gRXOu; fy8pL: fRGi8: goto rvXVm; mfk1S: if ($mode == "\141\x64\144") { goto gTv6E; } goto q984L; E9J4Z: $this->output_json($data); goto Py2WJ; d6uXV: $i = 1; goto pYWf2; xq_PE: goto XMnU5; goto BYesr; Dah7x: if (!($i <= $rows)) { goto vdCik; } goto krIjt; jJ7zZ: wfcsq: goto uE3u2; pXm6u: G_l_i: goto mfk1S; sJywe: $data["\165\x70\144\141\x74\x65"] = $update; goto iG7Jt; PULgC: $insert[] = ["\x6e\141\x6d\141\x5f\x6a\165\162\x75\x73\x61\x6e" => $this->input->post($nama_jurusan, true)]; goto CWLrx; AxGEn: goto ESRvJ; goto CQnB_; QU2wO: $status = TRUE; goto RWe4W; Z8IXN: ZVr79: goto Yv6u3; rlWu1: if (!($mode == "\145\144\x69\164")) { goto NisIf; } goto tgrUt; rvXVm: $data["\x73\164\141\x74\165\x73"] = $status; goto E9J4Z; Yv6u3: $error[] = [$nama_jurusan => form_error($nama_jurusan)]; goto CXBHH; plZH7: $data["\x69\x6e\x73\x65\x72\164"] = $insert; goto uc360; tgrUt: $update[] = array("\x69\x64\x5f\x6a\165\x72\x75\x73\x61\156" => $this->input->post("\151\144\x5f\152\165\162\165\163\x61\156\133" . $i . "\x5d", true), "\156\141\x6d\141\x5f\152\165\162\165\x73\141\156" => $this->input->post($nama_jurusan, true)); goto lkefN; w5aR7: Dag3h: goto kb9I0; q984L: if (!($mode == "\x65\x64\151\164")) { goto GsKRA; } goto qnOoA; CXBHH: $status = FALSE; goto jJ7zZ; ckTXg: $this->form_validation->set_message("\x72\145\161\165\x69\162\145\x64", "\173\146\151\x65\154\144\175\x20\127\141\x6a\x69\142\x20\144\x69\151\163\151"); goto YAfPo; uE3u2: gKwTl: goto AGlti; eXyAB: $data["\x65\x72\x72\x6f\x72\x73"] = $error; goto w5aR7; YAfPo: if ($this->form_validation->run() === FALSE) { goto ZVr79; } goto MgeTq; BYesr: vdCik: goto GRmd7; krIjt: $nama_jurusan = "\x6e\141\x6d\141\x5f\152\165\x72\165\x73\141\156\133" . $i . "\x5d"; goto mnful; MgeTq: if ($mode == "\x61\144\144") { goto UTrNS; } goto rlWu1; RWe4W: goto wfcsq; goto Z8IXN; pYWf2: XMnU5: goto Dah7x; Py2WJ: } public function update() { $data = $this->master->updateJurusan(); $this->output->set_content_type("\141\160\160\x6c\x69\x63\141\164\151\157\156\57\152\x73\x6f\x6e")->set_output($data); } public function delete() { goto ZtfcJ; yVh_c: t6QK2: goto FC0SA; XMxaR: foreach ($tabless as $table) { goto zstoP; Wj5gp: tmSFs: goto YPSfY; jTn5R: foreach ($fields as $field) { goto KK37j; KK37j: if (!($field->name == "\151\144\x5f\x6a\x75\162\165\x73\141\156" || $field->name == "\152\x75\x72\165\x73\141\x6e\x5f\151\144")) { goto glVaD; } goto Tdbkh; kFk8J: glVaD: goto ICsAM; Tdbkh: array_push($tables, $table); goto kFk8J; ICsAM: dOI5V: goto rpnRL; rpnRL: } goto Wj5gp; zstoP: $fields = $this->db->field_data($table); goto jTn5R; YPSfY: fEXAn: goto W2YGX; W2YGX: } goto W_EbJ; E6BUz: $this->output_json(["\x73\164\141\164\x75\x73" => false, "\x74\157\x74\141\154" => "\124\x69\x64\x61\153\x20\141\x64\x61\40\144\141\x74\x61\40\x79\141\x6e\x67\40\144\151\160\x69\154\x69\x68\41"]); goto yVh_c; zM_sN: $messages = []; goto CZSqR; lR8zp: if (!$this->master->delete("\155\141\163\x74\x65\162\x5f\x6a\165\x72\x75\163\x61\156", $chk, "\151\144\x5f\x6a\x75\162\x75\163\x61\156")) { goto BmaQu; } goto H1WsF; H1WsF: $this->output_json(["\x73\164\x61\x74\x75\163" => true, "\164\157\x74\141\154" => count($chk)]); goto EfAz2; TzOYk: if (count($messages) > 0) { goto eHozL; } goto lR8zp; O0U4k: tYbZD: goto TzOYk; CZSqR: $tables = []; goto LAdU3; Caj12: OlDhV: goto hgY1f; W_EbJ: Vjy3a: goto uR4MA; n0K7X: if (!$chk) { goto HnZT1; } goto zM_sN; xFVEy: goto OlDhV; goto LXiTf; LXiTf: eHozL: goto LL2sW; LL2sW: $this->output_json(["\x73\164\x61\164\x75\163" => false, "\x74\157\164\x61\154" => "\x44\141\164\x61\x20\112\x75\162\165\x73\141\156\x20\144\151\x67\x75\x6e\x61\x6b\141\x6e\40\144\x69\40" . count($messages) . "\40\x74\141\142\145\154\x3a\x3c\x62\x72\76" . implode("\x3c\142\162\x3e", $messages)]); goto Caj12; ZtfcJ: $chk = $this->input->post("\x63\150\145\143\x6b\145\144", true); goto n0K7X; LAdU3: $tabless = $this->db->list_tables(); goto XMxaR; hgY1f: goto t6QK2; goto uFM6x; uR4MA: foreach ($tables as $table) { goto dgAyx; kT3tK: $this->db->where_in("\x69\x64\137\x6a\x75\x72\x75\x73\141\156", $chk); goto fHixw; sGWgR: En5e9: goto JlQLd; dgAyx: if (!($table != "\x6d\141\163\164\x65\162\137\x6a\x75\162\x75\163\x61\156")) { goto M4086; } goto sj547; KZ9P8: j_JPO: goto NQYCP; Aq5bm: goto j_JPO; goto sGWgR; qgQyV: bRZJO: goto CGxww; sj547: if ($table == "\x6d\141\x73\164\145\162\137\x6b\145\x6c\141\x73") { goto En5e9; } goto kT3tK; CGxww: M4086: goto IZYKX; s7V3f: array_push($messages, $table); goto qgQyV; NQYCP: if (!($num > 0)) { goto bRZJO; } goto s7V3f; JlQLd: $this->db->where_in("\152\165\162\165\163\141\156\x5f\x69\144", $chk); goto m7wBC; fHixw: $num = $this->db->count_all_results($table); goto Aq5bm; m7wBC: $num = $this->db->count_all_results($table); goto KZ9P8; IZYKX: M5eRq: goto Usf1N; Usf1N: } goto O0U4k; uFM6x: HnZT1: goto E6BUz; EfAz2: BmaQu: goto xFVEy; FC0SA: } public function load_jurusan() { $data = $this->master->getJurusan(); $this->output_json($data); } public function import($import_data = null) { goto tonO0; eSDDB: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto g1PIL; miVfl: $data["\164\x70\x5f\x61\143\x74\151\166\145"] = $this->dashboard->getTahunActive(); goto eSDDB; sHHpx: $data = ["\x75\x73\145\x72" => $user, "\152\x75\144\x75\x6c" => "\x49\155\x70\x6f\162\x74\40\112\165\x72\x75\x73\141\156", "\x73\165\x62\x6a\x75\144\x75\154" => "\x49\x6d\x70\157\x72\164\x20\112\165\162\x75\x73\141\156", "\x70\162\157\146\151\x6c\145" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\x6e\x67" => $this->dashboard->getSetting()]; goto W1E_y; WujnS: NSGvj: goto gWmZg; zSNPY: $this->load->view("\155\x61\163\x74\145\x72\x2f\152\165\162\165\x73\141\156\57\x69\x6d\x70\157\162\164"); goto V99go; W1E_y: if (!($import_data != null)) { goto NSGvj; } goto GGEao; GGEao: $data["\x69\155\160\157\162\x74"] = $import_data; goto WujnS; vVmQX: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\x74\145\163\57\144\x61\x73\150\x62\x6f\141\162\x64\57\x5f\150\145\141\144\x65\162", $data); goto zSNPY; g1PIL: $data["\x73\x6d\x74\x5f\x61\x63\164\151\166\x65"] = $this->dashboard->getSemesterActive(); goto vVmQX; gWmZg: $data["\164\160"] = $this->dashboard->getTahun(); goto miVfl; V99go: $this->load->view("\137\164\145\x6d\160\x6c\141\x74\x65\x73\57\x64\x61\x73\150\x62\x6f\141\162\x64\x2f\137\x66\x6f\x6f\164\x65\162"); goto HJJJO; tonO0: $user = $this->ion_auth->user()->row(); goto sHHpx; HJJJO: } public function preview() { goto C_09g; QCoE5: switch ($ext) { case "\x2e\x78\154\x73\170": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); goto fRvoY; case "\56\170\154\163": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); goto fRvoY; case "\56\143\x73\x76": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); goto fRvoY; default: echo "\165\156\x6b\156\x6f\167\156\x20\x66\151\x6c\145\x20\145\170\164"; die; } goto XQvHi; el0id: goto Z2W22; goto omqfw; omqfw: DICf0: goto npzIe; gQjid: echo json_encode($data); goto SEVjW; C_09g: $config["\x75\x70\154\x6f\x61\x64\137\x70\x61\164\x68"] = "\56\57\165\x70\154\157\141\144\x73\x2f\x69\155\x70\157\x72\x74\x2f"; goto RlPW7; dXSAo: SZkEW: goto Oq5Sj; ev4ZR: eIRga: goto rfpET; RlPW7: $config["\141\x6c\154\x6f\167\145\x64\x5f\164\171\x70\145\x73"] = "\170\154\163\x7c\170\x6c\163\170\x7c\143\x73\x76"; goto TminU; J2KIS: if (!$this->upload->do_upload("\x75\160\x6c\x6f\141\x64\137\146\151\x6c\x65")) { goto SZkEW; } goto l3VLZ; Oq5Sj: $error = $this->upload->display_errors(); goto lEqeQ; TminU: $config["\x6d\x61\170\137\163\151\172\145"] = 2048; goto Y7Mqk; oFth_: GDcni: goto ev4ZR; Y9H4_: if (!($i < count($sheetData))) { goto DICf0; } goto T3Te_; CGupI: $sheetData = $spreadsheet->getActiveSheet()->toArray(); goto oNJ9v; NprYb: $this->load->library("\165\x70\x6c\157\x61\144", $config); goto J2KIS; T3Te_: if (!($sheetData[$i][0] != null)) { goto GDcni; } goto MDCLk; JaQk7: Z2W22: goto Y9H4_; zhvLb: $i = 1; goto JaQk7; YCku2: fRvoY: goto iQsY8; vUNJC: $ext = $this->upload->data("\x66\151\154\145\x5f\x65\x78\x74"); goto QCoE5; lEqeQ: echo $error; goto aHhH7; XQvHi: H0ZrK: goto YCku2; oNJ9v: $data = []; goto zhvLb; aHhH7: die; goto CM1gx; MDCLk: $data[] = ["\x6e\141\155\x61" => $sheetData[$i][1], "\x6b\157\x64\145" => $sheetData[$i][2]]; goto oFth_; Y7Mqk: $config["\x65\156\x63\162\x79\160\164\137\156\141\x6d\145"] = true; goto NprYb; SEVjW: goto BxXBX; goto dXSAo; l3VLZ: $file = $this->upload->data("\146\165\154\154\137\160\x61\164\150"); goto vUNJC; CM1gx: BxXBX: goto QPvjm; npzIe: unlink($file); goto gQjid; rfpET: $i++; goto el0id; iQsY8: $spreadsheet = $reader->load($file); goto CGupI; QPvjm: } public function previewWord() { goto UtLsl; AjUhW: $data[] = ["\x6e\141\155\x61" => $cols->item(1)->nodeValue, "\x6b\157\x64\x65" => $cols->item(2)->nodeValue]; goto Ff9jr; E6ukr: oOG2p: goto VnZfG; Ff9jr: iKIU4: goto cTl1n; K57B9: $i = 1; goto E6ukr; Rajax: $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord); goto Iu11W; VnZfG: if (!($i < $rows->count())) { goto rgRCV; } goto z47BS; CXJQN: $data = []; goto W3Ec7; cTl1n: $i++; goto FKOS3; uEhz1: $this->load->library("\165\x70\x6c\157\141\x64", $config); goto sqW5S; e0HWB: die; goto hiq5w; z47BS: $cols = $rows[$i]->getElementsByTagName("\164\x64"); goto AjUhW; wcCLN: unlink($file); goto x5Fn7; SeWya: YyEhl: goto vourY; USnkr: echo $error; goto e0HWB; J58BH: $phpWord = \PhpOffice\PhpWord\IOFactory::load($file); goto Rajax; PIUVc: $file = $this->upload->data("\x66\165\x6c\x6c\x5f\160\141\x74\x68"); goto J58BH; zgOwf: $rows = $tables->item(0)->getElementsByTagName("\164\162"); goto K57B9; Bg8oc: goto eev0T; goto SeWya; sqW5S: if (!$this->upload->do_upload("\x75\x70\x6c\x6f\141\144\x5f\146\151\x6c\145")) { goto YyEhl; } goto PIUVc; Y1IxV: $dom->loadHTML($text); goto CXJQN; x5Fn7: $text = file_get_contents("\x2e\x2f\165\x70\154\157\x61\x64\x73\57\164\x65\155\160\x2f\144\x6f\x63\x2e\150\x74\x6d\154"); goto Swh9O; hRWKA: $config["\145\x6e\x63\x72\x79\160\164\137\156\x61\155\x65"] = true; goto uEhz1; UtLsl: $config["\165\x70\x6c\157\141\x64\x5f\x70\x61\164\150"] = "\x2e\x2f\x75\x70\x6c\157\141\144\163\57\x69\x6d\160\157\x72\164\57"; goto JDi9p; zCNRC: $config["\155\x61\170\x5f\163\151\x7a\x65"] = 2048; goto hRWKA; hiq5w: eev0T: goto pQmGV; JDi9p: $config["\x61\x6c\x6c\157\x77\x65\144\137\164\171\x70\x65\x73"] = "\144\x6f\x63\x78"; goto zCNRC; vourY: $error = $this->upload->display_errors(); goto USnkr; Iu11W: try { $htmlWriter->save("\x2e\57\x75\160\154\x6f\x61\x64\x73\x2f\x74\145\x6d\160\57\144\x6f\x63\x2e\150\x74\x6d\x6c"); } catch (\PhpOffice\PhpWord\Exception\Exception $e) { } goto wcCLN; SmhCd: rgRCV: goto arv2c; W3Ec7: $dom->preserveWhiteSpace = false; goto Z_bos; FKOS3: goto oOG2p; goto SmhCd; Swh9O: $dom = new DOMDocument(); goto Y1IxV; Z_bos: $tables = $dom->getElementsByTagName("\164\141\142\x6c\x65"); goto zgOwf; arv2c: echo json_encode($data); goto Bg8oc; pQmGV: } public function do_import() { goto Ym8aa; sEWqz: $save = $this->master->create("\x6d\141\163\x74\x65\162\x5f\x6a\165\162\x75\163\141\x6e", $jurusan, true); goto MxYkh; QW440: foreach ($data as $j) { $jurusan[] = ["\x6e\x61\155\141\x5f\x6a\165\162\165\x73\x61\156" => $j->nama, "\x6b\157\144\x65\137\152\165\x72\x75\163\141\156" => $j->kode]; XbAGv: } goto d4htW; MxYkh: $this->output->set_content_type("\141\160\x70\154\x69\x63\141\x74\151\x6f\x6e\x2f\152\x73\157\x6e")->set_output($save); goto z292O; Ym8aa: $data = json_decode($this->input->post("\x6a\165\x72\165\163\141\156", true)); goto e9TsS; d4htW: zRG1G: goto sEWqz; e9TsS: $jurusan = []; goto QW440; z292O: } function updateById() { goto Mtini; BsxGa: $this->db->set("\x6b\x6f\x64\x65\x5f\152\x75\x72\165\163\x61\156", $kode); goto jS1te; AG3Xi: $this->db->set("\156\141\155\x61\137\152\165\162\x75\163\x61\x6e", $nama); goto BsxGa; S1j9i: return $this->db->update("\155\141\163\164\x65\x72\x5f\x6a\165\x72\165\163\141\156"); goto Go7Wg; msMXe: $nama = $this->input->post("\x75\163\x65\x72\156\x61\x6d\x65", true); goto Wwa9V; Mtini: $id = $this->input->post("\x69\x64\137\152\165\162\x75\x73\x61\x6e"); goto msMXe; jS1te: $this->db->where("\151\x64\x5f\x6a\165\162\x75\163\141\x6e", $id); goto S1j9i; Wwa9V: $kode = $this->input->post("\145\155\141\151\154", true); goto AG3Xi; Go7Wg: } public function hapusById() { goto d0hmh; mwFDs: return $this->db->delete("\155\141\163\x74\145\162\137\x6a\x75\x72\165\x73\x61\x6e"); goto ISQa_; oolhy: $this->db->where("\x69\144\x5f\152\x75\162\165\x73\x61\x6e", $id); goto mwFDs; d0hmh: $id = $this->input->post("\151\x64"); goto oolhy; ISQa_: } function exist($table, $data) { goto CRUgu; ISTkZ: if ($count === 0) { goto alO88; } goto SekP2; SekP2: return true; goto Sod1z; CRUgu: $query = $this->db->get_where($table, $data); goto n8Z8Y; n8Z8Y: $count = $query->num_rows(); goto ISTkZ; NOPVz: return false; goto knpFP; Sod1z: goto YJivH; goto xidDk; knpFP: YJivH: goto WqkPH; xidDk: alO88: goto NOPVz; WqkPH: } }
