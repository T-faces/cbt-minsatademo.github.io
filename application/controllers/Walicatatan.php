<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Walicatatan extends CI_Controller { public function __construct() { goto lepr6; w6oRy: F9hL3: goto IkyyE; yfUA_: redirect("\141\x75\164\150"); goto w6oRy; IkyyE: $this->load->library(["\x64\x61\x74\141\x74\141\x62\x6c\x65\x73", "\x66\157\x72\155\x5f\166\x61\x6c\151\x64\x61\164\x69\x6f\156"]); goto KkYDE; mVg6i: $this->load->model("\x44\x61\163\150\142\157\141\162\x64\x5f\155\x6f\x64\145\154", "\x64\x61\163\x68\x62\x6f\141\x72\144"); goto TMjf7; SUdni: cbbAZ: goto yfUA_; TMjf7: $this->load->model("\113\x65\x6c\141\x73\137\x6d\157\x64\x65\x6c", "\153\145\154\141\163"); goto kJyiq; kJyiq: $this->load->model("\x44\x72\157\160\x64\157\167\156\137\155\157\144\145\154", "\x64\162\157\x70\144\157\x77\x6e"); goto vbbW0; uc7Ot: show_error("\x48\x61\x6e\171\x61\40\x41\144\x6d\x69\156\151\163\164\x72\141\164\x6f\x72\x20\144\141\x6e\40\x67\x75\162\165\x20\x79\141\156\x67\x20\x64\151\x62\x65\x72\x69\40\x68\141\153\x20\x75\x6e\x74\165\x6b\40\155\145\156\x67\141\153\163\145\x73\x20\150\x61\154\x61\155\x61\x6e\40\151\156\151\54\40\74\141\40\150\x72\145\146\75\42" . base_url("\x64\x61\163\150\142\x6f\141\x72\x64") . "\x22\76\x4b\145\x6d\142\141\154\151\40\153\145\x20\x6d\x65\156\x75\x20\141\x77\141\154\x3c\57\x61\x3e", 403, "\x41\x6b\163\x65\x73\x20\124\145\162\154\141\162\x61\x6e\147"); goto J6O6a; sgOW6: if (!$this->ion_auth->logged_in()) { goto cbbAZ; } goto s3GF6; KkYDE: $this->load->model("\x4d\141\x73\x74\145\162\x5f\x6d\157\144\145\x6c", "\155\x61\163\x74\x65\162"); goto mVg6i; s3GF6: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) { goto yfZYB; } goto uc7Ot; vbbW0: $this->form_validation->set_error_delimiters('', ''); goto dfxwj; XCoP5: goto F9hL3; goto SUdni; J6O6a: yfZYB: goto XCoP5; lepr6: parent::__construct(); goto sgOW6; dfxwj: } public function output_json($data, $encode = true) { goto ByHJd; LgCCK: xE9lW: goto LA_fz; LA_fz: $this->output->set_content_type("\141\x70\160\154\151\x63\x61\x74\151\x6f\x6e\57\152\x73\x6f\x6e")->set_output($data); goto ys2lw; bEqMM: $data = json_encode($data); goto LgCCK; ByHJd: if (!$encode) { goto xE9lW; } goto bEqMM; ys2lw: } public function index() { goto CymUl; zjVRL: $data["\163\155\164"] = $this->dashboard->getSemester(); goto r25LT; XcQcV: $data["\x74\x70\x5f\141\143\164\151\166\145"] = $tp; goto zjVRL; Bq24z: $this->load->view("\x6d\x65\x6d\142\x65\162\x73\x2f\x67\x75\162\x75\57\x77\141\x6c\151\x2f\143\x61\164\x61\x74\141\156"); goto rUKWR; rUKWR: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\x67\x75\x72\x75\57\164\x65\155\160\x6c\141\164\x65\163\x2f\x66\157\x6f\x74\145\162"); goto tnW6J; QvbPq: $data["\x63\141\x74\141\x74\x61\x6e\x5f\x6b\145\154\x61\163"] = $this->kelas->getCatatanKelas($guru->wali_kelas, $tp->id_tp, $smt->id_smt); goto AbUwJ; i7GjP: $smt = $this->master->getSemesterActive(); goto g1P5c; r25LT: $data["\x73\x6d\164\137\x61\143\x74\151\166\x65"] = $smt; goto AkzGA; wZfZ1: $data["\x67\165\x72\165"] = $guru; goto QvbPq; jN_AH: $tp = $this->master->getTahunActive(); goto i7GjP; AbUwJ: $data["\x63\x61\x74\141\164\141\x6e\137\163\x69\163\167\x61"] = $this->kelas->getCatatanSiswa($tp->id_tp, $smt->id_smt, $guru->wali_kelas); goto kl_bY; CymUl: $user = $this->ion_auth->user()->row(); goto MspnM; g1P5c: $data["\164\160"] = $this->dashboard->getTahun(); goto XcQcV; kl_bY: $this->load->view("\x6d\x65\155\x62\145\162\x73\57\x67\x75\162\x75\57\x74\145\x6d\160\154\x61\x74\x65\x73\57\150\x65\141\144\145\162", $data); goto Bq24z; AkzGA: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto wZfZ1; MspnM: $data = ["\165\163\x65\x72" => $user, "\152\165\144\x75\154" => "\103\x61\x74\141\x74\141\156\40\x57\x61\154\x69\40\x4b\x65\154\x61\x73", "\163\165\x62\x6a\x75\x64\x75\154" => "\103\141\164\x61\164\141\x6e\x20\113\145\154\141\163", "\163\145\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto jN_AH; tnW6J: } public function siswa() { goto o63RT; S82Jc: $id_kelas = $this->input->get("\x69\144\137\153\145\154\x61\163"); goto cASAu; cASAu: $user = $this->ion_auth->user()->row(); goto MEbkM; WLT_h: $data["\x73\151\163\167\x61"] = $this->master->getSiswaById($id_siswa); goto aIBPj; E06V1: $data["\163\155\x74\137\141\x63\164\x69\166\x65"] = $smt; goto n2hFY; wu0_X: $data["\x74\x70\x5f\x61\x63\x74\151\166\145"] = $tp; goto eAHzY; eAHzY: $data["\163\155\164"] = $this->dashboard->getSemester(); goto E06V1; A8h4q: $data["\x74\x70"] = $this->dashboard->getTahun(); goto wu0_X; EEBwW: $tp = $this->master->getTahunActive(); goto L7lOQ; aIBPj: $data["\143\141\x74\141\x74\x61\156\137\163\x69\x73\x77\x61"] = $this->kelas->getAllCatatanSiswa($id_siswa, $tp->id_tp, $smt->id_smt); goto q9cEV; n2hFY: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto V1cv1; pzG6f: $this->load->view("\x6d\145\155\x62\145\x72\163\x2f\x67\165\x72\x75\57\x74\145\x6d\x70\154\141\x74\x65\163\57\146\x6f\x6f\164\x65\x72"); goto LAEnV; L7lOQ: $smt = $this->master->getSemesterActive(); goto A8h4q; MEbkM: $data = ["\x75\x73\x65\162" => $user, "\152\x75\144\165\154" => "\x43\x61\x74\x61\x74\141\x6e\x20\123\151\163\167\141", "\x73\165\142\152\165\x64\165\x6c" => "\103\141\x74\141\x74\x61\156\40\x53\151\163\167\x61", "\x73\145\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto EEBwW; V1cv1: $data["\x67\x75\162\x75"] = $guru; goto WLT_h; q9cEV: $data["\x69\144\x5f\x6b\145\154\141\x73"] = $id_kelas; goto IyoGk; FzTsb: $this->load->view("\155\145\155\x62\x65\x72\x73\57\x67\x75\x72\x75\x2f\167\x61\154\151\57\x70\145\162\x73\x69\163\x77\x61"); goto pzG6f; o63RT: $id_siswa = $this->input->get("\x69\144\137\163\151\163\167\x61"); goto S82Jc; IyoGk: $this->load->view("\x6d\x65\x6d\142\x65\x72\163\x2f\147\x75\x72\x75\57\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\57\x68\145\141\x64\x65\162", $data); goto FzTsb; LAEnV: } public function saveCatatanKelas() { goto Ues_g; QLSmF: $this->output_json($insert); goto aOGNb; kqCCf: $data = ["\151\x64\137\164\160" => $tp->id_tp, "\x69\144\137\163\155\x74" => $smt->id_smt, "\164\171\x70\145" => "\61", "\154\x65\166\145\154" => $level, "\151\x64\x5f\x6b\145\154\141\x73" => $guru->wali_kelas, "\x74\x65\x78\x74" => $text, "\x72\145\141\x64\151\156\x67" => serialize([])]; goto w5LaA; Nu0QK: $user = $this->ion_auth->user()->row(); goto aWUzQ; NlZ95: $level = $this->input->post("\x6c\x65\166\x65\x6c", true); goto kqCCf; bv1v1: $text = $this->input->post("\x74\x65\x78\164", true); goto NlZ95; aWUzQ: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto bv1v1; Ues_g: $tp = $this->dashboard->getTahunActive(); goto vG3X5; w5LaA: $insert = $this->master->create("\x6b\x65\x6c\141\x73\137\x63\141\x74\141\164\x61\156\137\x77\x61\x6c\x69", $data); goto QLSmF; vG3X5: $smt = $this->dashboard->getSemesterActive(); goto Nu0QK; aOGNb: } public function saveCatatanSiswa() { goto cJYRK; cJYRK: $tp = $this->dashboard->getTahunActive(); goto bL5GF; U2cdL: $data = ["\151\x64\x5f\x74\160" => $tp->id_tp, "\x69\x64\137\163\x6d\164" => $smt->id_smt, "\x74\171\160\x65" => "\x32", "\x6c\145\x76\x65\154" => $level, "\x69\x64\x5f\153\x65\154\x61\x73" => $guru->wali_kelas, "\x69\x64\x5f\163\151\163\167\141" => $id_siswa, "\x74\145\x78\x74" => $text, "\162\x65\141\x64\x69\156\147" => serialize([])]; goto tVJHB; RDCpQ: $text = $this->input->post("\164\145\x78\164", true); goto b0Xxo; ypSHS: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto R8gcg; wRw1i: $user = $this->ion_auth->user()->row(); goto ypSHS; BOAT1: $this->output_json($insert); goto MUw8C; tVJHB: $insert = $this->master->create("\153\145\x6c\x61\x73\137\143\x61\x74\x61\x74\141\x6e\137\167\x61\154\151", $data); goto BOAT1; R8gcg: $id_siswa = $this->input->post("\x69\144\137\x73\x69\x73\167\141"); goto RDCpQ; b0Xxo: $level = $this->input->post("\154\x65\166\x65\154", true); goto U2cdL; bL5GF: $smt = $this->dashboard->getSemesterActive(); goto wRw1i; MUw8C: } public function updateCatatanKelas() { } public function hapus($id_catatan) { $delete = $this->master->delete("\x6b\145\x6c\x61\163\x5f\x63\141\x74\x61\x74\141\x6e\x5f\x77\x61\154\x69", $id_catatan, "\151\x64\x5f\143\141\x74\x61\x74\x61\156"); $this->output_json($delete); } }
