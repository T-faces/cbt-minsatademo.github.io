<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walistruktur extends CI_Controller { public function __construct() { goto b7TYo; Nn3xc: $this->load->model("\115\141\163\x74\145\162\137\155\x6f\x64\145\154", "\x6d\141\163\x74\x65\162"); goto beKSr; dtPgE: $this->load->library(["\x64\x61\x74\x61\164\141\x62\x6c\145\x73", "\146\x6f\x72\155\x5f\166\x61\154\x69\x64\x61\x74\151\x6f\156"]); goto Nn3xc; StiEn: $this->load->model("\x4b\145\x6c\141\x73\x5f\x6d\x6f\144\x65\x6c", "\153\145\x6c\x61\x73"); goto LPOJD; LPOJD: $this->load->model("\104\162\x6f\160\144\x6f\x77\156\137\x6d\x6f\144\x65\x6c", "\144\162\x6f\x70\144\x6f\167\x6e"); goto WXY1D; rCd9j: cldlr: goto xE69f; mrjqp: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto SLdv4; } goto c5GaF; WXY1D: $this->form_validation->set_error_delimiters('', ''); goto cwUht; xE69f: redirect("\x61\165\x74\x68"); goto vVr13; c5GaF: show_error("\110\x61\x6e\171\141\x20\101\144\x6d\151\156\x69\163\x74\x72\141\x74\157\x72\x20\x64\x61\x6e\40\x67\x75\x72\165\40\x79\x61\156\x67\40\x64\x69\x62\145\x72\x69\x20\150\141\x6b\x20\x75\156\x74\165\153\40\x6d\145\x6e\147\x61\x6b\163\x65\163\x20\x68\141\154\141\155\141\x6e\40\151\156\151\x2c\40\x3c\x61\x20\150\162\145\146\x3d\x22" . base_url("\144\x61\x73\x68\142\157\x61\162\144") . "\42\x3e\113\x65\x6d\142\141\x6c\x69\40\x6b\145\x20\155\x65\156\165\x20\141\167\141\154\x3c\x2f\141\x3e", 403, "\x41\x6b\163\145\163\x20\124\145\x72\x6c\x61\162\x61\x6e\x67"); goto MFehA; vVr13: hbP0l: goto dtPgE; beKSr: $this->load->model("\104\x61\x73\150\142\x6f\141\162\144\137\155\x6f\144\x65\x6c", "\x64\x61\163\150\142\x6f\x61\x72\x64"); goto StiEn; sFYal: if (!$this->ion_auth->logged_in()) { goto cldlr; } goto mrjqp; cOwUv: goto hbP0l; goto rCd9j; MFehA: SLdv4: goto cOwUv; b7TYo: parent::__construct(); goto sFYal; cwUht: } public function output_json($data, $encode = true) { goto ScFVY; qFuBE: brkw8: goto Fymdf; GdrQA: $data = json_encode($data); goto qFuBE; ScFVY: if (!$encode) { goto brkw8; } goto GdrQA; Fymdf: $this->output->set_content_type("\141\x70\x70\x6c\x69\x63\141\164\x69\157\156\57\152\163\157\156")->set_output($data); goto NgsC1; NgsC1: } public function index() { goto oO7Lf; HGyrg: kDJ_f: goto aKOLA; G90ER: $this->load->view("\x6d\145\x6d\142\145\x72\x73\x2f\x67\165\x72\165\x2f\164\145\x6d\x70\154\x61\164\x65\163\57\x66\157\157\164\145\162"); goto PSRq7; Y1jJU: $this->load->view("\155\x65\155\x62\145\162\x73\x2f\147\165\162\x75\57\x74\x65\x6d\x70\154\x61\164\x65\x73\57\150\x65\141\144\145\162", $data); goto O3m39; DZAYE: $data["\x73\x74\162\165\x6b\164\165\162"] = $struktur; goto StwDS; aKOLA: $data["\x73\x69\163\167\x61\x73"] = $siswas; goto K5lvp; eK8YG: $data = ["\x75\163\145\162" => $user, "\152\x75\x64\165\x6c" => "\123\164\162\165\x6b\x74\x75\162\x20\117\162\147\141\156\151\163\x61\x73\151", "\x73\165\x62\x6a\165\144\x75\x6c" => "\123\164\x72\x75\x6b\x74\165\162\40\x4f\162\147\x61\x6e\151\163\x61\x73\151", "\x73\x65\x74\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto Fu5rY; WzXkU: $data["\x73\155\x74\x5f\141\143\164\x69\166\x65"] = $smt; goto DOIvA; e93wv: VPQ95: goto c22oy; lgwFK: $smt = $this->master->getSemesterActive(); goto s4_T9; O3m39: $this->load->view("\x6d\x65\155\142\145\x72\x73\x2f\147\165\x72\165\57\x77\x61\x6c\x69\x2f\163\164\162\165\153\x74\165\162"); goto G90ER; qD763: $data["\x67\x75\x72\165\x73"] = $this->dropdown->getAllGuru(); goto mWOL_; Q4R2R: $data["\164\x70\x5f\x61\143\164\151\x76\x65"] = $tp; goto pltj3; CKjv8: if ($struktur == null) { goto VPQ95; } goto DZAYE; IW4Cd: $data["\147\165\162\165"] = $guru; goto qD763; pWhmX: foreach ($siswa as $key => $value) { $siswas[$value->id_siswa] = $value->nama; QQkGd: } goto HGyrg; j_y0H: $siswas[''] = "\x50\x69\154\151\150\40\x53\x69\x73\x77\141"; goto pWhmX; K5lvp: $data["\151\144\137\153\x65\x6c\x61\x73"] = $guru->wali_kelas; goto Y1jJU; pltj3: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto WzXkU; Fu5rY: $tp = $this->master->getTahunActive(); goto lgwFK; s4_T9: $data["\x74\x70"] = $this->dashboard->getTahun(); goto Q4R2R; mWOL_: $siswa = $this->kelas->getKelasSiswa($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto j_y0H; c22oy: $data["\163\x74\162\x75\153\x74\165\162"] = json_decode(json_encode($this->kelas->dummyStruktur())); goto aMOkl; oO7Lf: $user = $this->ion_auth->user()->row(); goto eK8YG; CDPSl: $struktur = $this->kelas->getStrukturKelas($guru->wali_kelas); goto CKjv8; aMOkl: m4SZ3: goto IW4Cd; DOIvA: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto CDPSl; StwDS: goto m4SZ3; goto e93wv; PSRq7: } public function save() { goto fAt_m; fAt_m: $data = ["\151\144\x5f\x6b\x65\154\141\x73" => $this->input->post("\151\144\137\x6b\145\154\141\163"), "\x6b\145\164\x75\141" => $this->input->post("\153\x65\164\165\141"), "\167\141\153\151\154\137\x6b\145\x74\x75\x61" => $this->input->post("\x77\141\153\x69\x6c\137\153\x65\164\165\x61"), "\x73\x65\x6b\x72\x65\164\141\162\x69\163\x5f\61" => $this->input->post("\x73\145\x6b\162\145\164\141\162\x69\163\137\61"), "\x73\x65\153\162\145\164\x61\x72\x69\x73\x5f\62" => $this->input->post("\x73\x65\x6b\162\145\164\x61\x72\x69\163\137\x32"), "\142\145\156\x64\141\x68\x61\162\x61\x5f\x31" => $this->input->post("\x62\145\156\x64\x61\150\x61\162\141\137\61"), "\142\x65\156\144\141\150\141\162\x61\137\62" => $this->input->post("\x62\145\x6e\x64\x61\x68\141\162\x61\137\x32"), "\x73\x69\145\137\145\153\163\x74\162\x61\x6b\165\162\151\153\x75\x6c\145\162" => $this->input->post("\x73\151\x65\x5f\145\x6b\x73\x74\x72\141\x6b\x75\162\x69\153\165\x6c\x65\162"), "\x73\151\145\137\x75\160\x61\143\141\162\x61" => $this->input->post("\x73\x69\145\137\x75\x70\x61\143\141\162\x61"), "\x73\151\x65\137\x6f\154\141\150\162\141\x67\x61" => $this->input->post("\x73\151\145\137\x6f\x6c\141\150\x72\141\x67\141"), "\x73\151\x65\x5f\x6b\x65\x61\x67\x61\155\x61\141\x6e" => $this->input->post("\x73\x69\x65\137\x6b\x65\x61\147\x61\x6d\141\141\156"), "\163\151\145\137\x6b\145\141\x6d\x61\156\x61\x6e" => $this->input->post("\163\x69\x65\x5f\x6b\145\x61\x6d\x61\x6e\141\156"), "\x73\x69\145\x5f\x6b\x65\164\x65\x72\x74\151\x62\x61\x6e" => $this->input->post("\x73\x69\x65\x5f\153\x65\x74\145\162\164\x69\142\x61\x6e"), "\163\151\145\137\x6b\x65\142\x65\x72\x73\x69\x68\141\156" => $this->input->post("\x73\151\145\137\153\x65\142\145\162\163\x69\150\x61\156"), "\x73\x69\x65\x5f\153\145\151\x6e\x64\141\150\141\156" => $this->input->post("\x73\151\x65\137\153\x65\151\156\144\141\x68\x61\156"), "\x73\151\145\137\x6b\x65\163\x65\150\x61\x74\x61\x6e" => $this->input->post("\163\x69\145\x5f\x6b\145\163\x65\x68\x61\x74\141\156"), "\163\151\x65\x5f\153\x65\153\145\154\165\x61\x72\147\x61\x61\156" => $this->input->post("\163\151\145\137\153\145\153\x65\x6c\x75\x61\x72\x67\141\x61\x6e"), "\163\x69\145\x5f\150\x75\x6d\x61\x73" => $this->input->post("\163\x69\145\x5f\x68\x75\x6d\x61\163")]; goto C6HxT; C6HxT: $insert = $this->db->replace("\x6b\145\x6c\x61\163\x5f\163\x74\x72\x75\x6b\x74\165\x72", $data); goto mJNu4; mJNu4: $this->output_json($insert); goto R02WS; R02WS: } }
