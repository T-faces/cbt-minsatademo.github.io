<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walicatatan extends CI_Controller { public function __construct() { goto eXrHK; RFwlp: $this->load->library(["\144\x61\164\x61\164\141\142\x6c\x65\x73", "\146\157\162\x6d\137\166\x61\x6c\151\144\141\164\x69\x6f\156"]); goto XkxbM; nZRFU: IQpG5: goto Xo_j8; Vg0lw: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) { goto IQpG5; } goto Ud4wK; eXrHK: parent::__construct(); goto vvL0d; Ud4wK: show_error("\x48\141\156\171\x61\x20\x41\x64\155\x69\x6e\151\163\x74\162\x61\164\x6f\162\x20\144\141\156\40\x67\x75\162\x75\x20\x79\141\156\x67\40\144\x69\142\145\x72\x69\40\x68\x61\x6b\40\165\156\x74\x75\153\x20\x6d\x65\156\x67\141\x6b\x73\145\x73\40\x68\141\x6c\x61\x6d\141\x6e\40\151\156\x69\x2c\40\x3c\x61\x20\150\162\145\x66\75\x22" . base_url("\x64\x61\163\150\142\x6f\x61\x72\144") . "\42\x3e\x4b\145\155\x62\x61\154\151\x20\x6b\x65\40\x6d\145\x6e\165\x20\141\167\141\154\74\x2f\141\x3e", 403, "\101\x6b\163\145\x73\40\x54\x65\162\154\141\162\x61\156\x67"); goto nZRFU; Y7OUE: $this->load->model("\104\141\x73\150\142\x6f\x61\162\144\x5f\155\x6f\144\145\x6c", "\144\x61\x73\x68\x62\x6f\x61\x72\x64"); goto zRJYc; XkxbM: $this->load->model("\x4d\141\x73\x74\145\162\x5f\x6d\x6f\x64\145\154", "\155\141\163\164\145\162"); goto Y7OUE; zRJYc: $this->load->model("\113\145\154\141\x73\x5f\155\x6f\144\145\x6c", "\153\145\x6c\141\x73"); goto VkzZC; VkzZC: $this->load->model("\104\x72\157\x70\x64\157\167\156\137\155\157\x64\x65\154", "\x64\x72\157\x70\144\x6f\167\156"); goto xQWku; qG1eb: R0kpS: goto RFwlp; xQWku: $this->form_validation->set_error_delimiters('', ''); goto HEqhk; zk0iP: pbx7c: goto jGDfw; vvL0d: if (!$this->ion_auth->logged_in()) { goto pbx7c; } goto Vg0lw; Xo_j8: goto R0kpS; goto zk0iP; jGDfw: redirect("\x61\x75\164\150"); goto qG1eb; HEqhk: } public function output_json($data, $encode = true) { goto hxhxm; m0ZxT: M9O3d: goto c2KOY; V5XJl: $data = json_encode($data); goto m0ZxT; hxhxm: if (!$encode) { goto M9O3d; } goto V5XJl; c2KOY: $this->output->set_content_type("\141\160\x70\154\x69\143\141\x74\x69\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data); goto MGDf3; MGDf3: } public function index() { goto fMcIH; JljEq: $this->load->view("\x6d\x65\155\x62\x65\x72\x73\57\147\165\x72\x75\57\167\141\x6c\x69\57\x63\x61\x74\141\164\x61\x6e"); goto svpZX; NM5U2: $data = ["\x75\163\145\x72" => $user, "\x6a\x75\144\165\x6c" => "\103\141\164\x61\164\x61\x6e\x20\127\141\154\151\x20\113\145\154\141\163", "\x73\x75\x62\x6a\x75\144\165\x6c" => "\103\x61\164\x61\164\141\x6e\40\113\x65\x6c\x61\163", "\163\145\164\164\151\156\147" => $this->dashboard->getSetting()]; goto wrAjU; F4d_W: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto r3JSO; PKrE5: $smt = $this->master->getSemesterActive(); goto EPbZf; DlSnH: $data["\143\141\x74\x61\164\141\156\137\x6b\145\x6c\141\163"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto HK6Ac; DvnAS: $data["\164\x70\x5f\141\143\164\151\166\x65"] = $tp; goto F4d_W; sarV5: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto e0DHI; fMcIH: $user = $this->ion_auth->user()->row(); goto NM5U2; HK6Ac: $data["\x63\x61\x74\141\x74\141\156\137\163\151\163\167\141"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas); goto ExExl; EPbZf: $data["\x74\160"] = $this->dashboard->getTahun(); goto DvnAS; svpZX: $this->load->view("\x6d\145\155\142\x65\x72\x73\x2f\147\165\x72\x75\x2f\164\x65\x6d\160\x6c\x61\x74\145\x73\57\146\157\x6f\x74\145\162"); goto TD6Kl; wrAjU: $tp = $this->master->getTahunActive(); goto PKrE5; e0DHI: $data["\147\x75\x72\x75"] = $guru; goto DlSnH; r3JSO: $data["\163\x6d\x74\x5f\x61\x63\x74\x69\166\x65"] = $smt; goto sarV5; ExExl: $this->load->view("\155\x65\155\142\145\x72\163\x2f\147\x75\x72\x75\x2f\x74\145\x6d\x70\154\x61\164\x65\x73\57\150\x65\141\x64\145\162", $data); goto JljEq; TD6Kl: } public function siswa() { goto XXR1w; kGOGG: $data["\164\x70\137\x61\x63\x74\151\x76\145"] = $tp; goto J2Uei; m2Y7A: $user = $this->ion_auth->user()->row(); goto ONefY; j8zdd: $this->load->view("\x6d\145\155\x62\x65\x72\163\x2f\147\x75\162\165\57\x74\x65\155\160\154\141\x74\x65\163\57\150\145\141\144\145\x72", $data); goto mNHLc; mNHLc: $this->load->view("\155\x65\x6d\142\145\162\163\x2f\x67\x75\x72\x75\57\167\141\154\151\57\160\x65\162\163\151\x73\x77\141"); goto aweu1; vDWfb: $data["\164\x70"] = $this->dashboard->getTahun(); goto kGOGG; Ca87Z: $tp = $this->master->getTahunActive(); goto OfiIH; XXR1w: $id_siswa = $this->input->get("\x69\x64\137\163\x69\x73\x77\x61"); goto itXF3; lKy7A: $data["\143\141\x74\141\x74\x61\156\x5f\x73\151\x73\167\x61"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt); goto W0M6g; AUzKp: $data["\x73\x6d\164\x5f\141\x63\x74\x69\x76\145"] = $smt; goto IDDNL; W0M6g: $data["\151\x64\137\153\x65\154\x61\x73"] = $id_kelas; goto j8zdd; SoZmU: $data["\x67\165\162\x75"] = $guru; goto l4wD2; OfiIH: $smt = $this->master->getSemesterActive(); goto vDWfb; ONefY: $data = ["\x75\x73\x65\162" => $user, "\x6a\x75\x64\x75\x6c" => "\103\x61\x74\141\164\x61\156\40\123\151\163\x77\x61", "\163\x75\142\x6a\x75\x64\x75\154" => "\103\141\x74\141\x74\141\x6e\40\123\151\x73\167\x61", "\x73\x65\x74\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto Ca87Z; l4wD2: $data["\163\x69\x73\167\141"] = $this->master->getSiswaById($id_siswa); goto lKy7A; IDDNL: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto SoZmU; J2Uei: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto AUzKp; itXF3: $id_kelas = $this->input->get("\151\144\137\153\145\x6c\141\x73"); goto m2Y7A; aweu1: $this->load->view("\155\145\x6d\142\x65\x72\163\57\147\165\162\165\x2f\164\x65\155\160\154\141\x74\145\x73\x2f\146\157\157\164\145\162"); goto d8BQz; d8BQz: } public function saveCatatanKelas() { goto onLia; UKnGs: $user = $this->ion_auth->user()->row(); goto cSmJo; onLia: $tp = $this->dashboard->getTahunActive(); goto LEdT0; LEdT0: $smt = $this->dashboard->getSemesterActive(); goto UKnGs; cSmJo: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto AcdSZ; AcdSZ: $text = $this->input->post("\164\x65\170\x74", true); goto HaRsu; n5HaW: $data = ["\x69\x64\137\x74\x70" => $tp->id_tp, "\x69\x64\x5f\x73\155\x74" => $smt->id_smt, "\164\171\x70\145" => "\x31", "\x6c\145\166\145\154" => $level, "\151\144\x5f\153\x65\154\x61\163" => $guru->wali_kelas, "\164\145\x78\164" => $text, "\x72\145\141\x64\151\x6e\x67" => serialize([])]; goto HUErP; x9KZh: $this->output_json($insert); goto zPXPY; HUErP: $insert = $this->master->create("\x6b\x65\x6c\141\x73\x5f\143\141\x74\x61\164\141\x6e\x5f\167\141\x6c\151", $data); goto x9KZh; HaRsu: $level = $this->input->post("\x6c\x65\x76\x65\154", true); goto n5HaW; zPXPY: } public function saveCatatanSiswa() { goto aGVNo; PXjxn: $text = $this->input->post("\164\x65\x78\x74", true); goto UXwiy; YuJUG: $insert = $this->master->create("\153\145\154\x61\x73\137\x63\x61\164\x61\164\x61\156\137\167\141\x6c\151", $data); goto kXKQ4; URA23: $smt = $this->dashboard->getSemesterActive(); goto v2Oza; UXwiy: $level = $this->input->post("\x6c\145\166\x65\154", true); goto G3iVG; aGVNo: $tp = $this->dashboard->getTahunActive(); goto URA23; G3iVG: $data = ["\151\144\137\x74\160" => $tp->id_tp, "\151\x64\137\163\155\164" => $smt->id_smt, "\164\x79\x70\x65" => "\62", "\x6c\x65\x76\145\x6c" => $level, "\x69\144\137\x6b\x65\154\141\163" => $guru->wali_kelas, "\x69\x64\x5f\163\151\163\167\141" => $id_siswa, "\x74\145\170\x74" => $text, "\x72\145\x61\144\x69\x6e\x67" => serialize([])]; goto YuJUG; reMsi: $id_siswa = $this->input->post("\151\144\137\163\151\x73\x77\141"); goto PXjxn; kXKQ4: $this->output_json($insert); goto EfmQf; v2Oza: $user = $this->ion_auth->user()->row(); goto L46XO; L46XO: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto reMsi; EfmQf: } public function updateCatatanKelas() { } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\145\154\x61\x73\137\143\141\164\141\x74\141\x6e\x5f\167\x61\154\x69", $id_catatan, "\x69\144\x5f\x63\141\x74\x61\164\141\156"); $this->output_json($delete); } }
