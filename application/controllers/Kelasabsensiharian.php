<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensiharian extends CI_Controller { public function __construct() { goto q_flr; x2TIy: sGyZR: goto nwrbl; JSfJw: $this->load->model("\x4d\141\x73\164\x65\x72\x5f\155\157\x64\x65\x6c", "\155\141\x73\x74\x65\x72"); goto vt4E4; brwfG: redirect("\x61\165\x74\150"); goto VYjf0; Zz4Qh: $this->form_validation->set_error_delimiters('', ''); goto pEqcM; htkSa: $this->load->model("\113\145\x6c\141\x73\x5f\x6d\x6f\144\x65\154", "\x6b\145\x6c\141\163"); goto Zz4Qh; VYjf0: Q5tOo: goto xa5jS; vt4E4: $this->load->model("\x44\x61\x73\x68\x62\x6f\141\162\144\137\155\157\144\x65\154", "\x64\x61\163\x68\x62\157\x61\162\144"); goto zJTfW; nwrbl: goto Q5tOo; goto YPbV5; YPbV5: e5o8X: goto brwfG; NS01v: show_error("\110\x61\156\171\141\40\101\x64\x6d\151\x6e\151\163\164\162\x61\164\157\162\40\171\141\156\147\x20\x64\x69\142\x65\x72\151\x20\x68\x61\x6b\40\x75\x6e\164\165\153\40\155\145\156\147\x61\153\x73\145\163\x20\x68\141\154\141\x6d\141\156\40\x69\x6e\x69\x2c\40\74\141\40\x68\x72\145\146\75\x22" . base_url("\x64\x61\163\150\142\x6f\x61\162\x64") . "\x22\x3e\113\145\x6d\x62\x61\x6c\x69\x20\153\145\40\x6d\x65\x6e\x75\x20\141\x77\141\x6c\74\57\141\76", 403, "\x41\153\163\145\163\40\x54\x65\x72\154\x61\x72\141\156\147"); goto x2TIy; xa5jS: $this->load->library(["\144\x61\164\x61\164\141\x62\154\x65\x73", "\146\157\162\x6d\x5f\166\141\x6c\151\x64\141\164\x69\x6f\156"]); goto JSfJw; q_flr: parent::__construct(); goto aNlsJ; zJTfW: $this->load->model("\x44\x72\157\x70\x64\x6f\x77\156\x5f\155\x6f\144\145\154", "\x64\162\157\x70\x64\x6f\167\x6e"); goto htkSa; bJyUH: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto sGyZR; } goto NS01v; aNlsJ: if (!$this->ion_auth->logged_in()) { goto e5o8X; } goto bJyUH; pEqcM: } public function output_json($data, $encode = true) { goto E5d6S; E5d6S: if (!$encode) { goto owK2f; } goto long_; GtMk8: $this->output->set_content_type("\141\x70\160\x6c\151\x63\x61\164\151\157\x6e\x2f\x6a\x73\x6f\156")->set_output($data); goto ycCg_; LmcX1: owK2f: goto GtMk8; long_: $data = json_encode($data); goto LmcX1; ycCg_: } public function index() { goto wsb1c; oYDme: $this->load->view("\x6b\x65\x6c\141\163\57\141\x62\x73\x65\156\x68\x61\x72\151\141\156\x2f\144\141\x74\141"); goto pvWL1; Es01V: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto sZ3PJ; ohdLI: $this->load->view("\x6d\x65\x6d\142\145\162\163\57\147\165\x72\165\x2f\x74\x65\155\160\x6c\141\x74\145\x73\57\146\x6f\x6f\164\x65\x72"); goto pZD52; P_uiD: $this->load->view("\153\145\x6c\x61\x73\x2f\x61\142\x73\x65\156\x68\x61\x72\x69\x61\156\x2f\x64\141\x74\141"); goto ohdLI; HooJj: $data["\147\x75\x72\x75"] = $this->dropdown->getAllGuru(); goto D_frR; HoeEQ: $nguru[$guru->id_guru] = $guru->nama_guru; goto yegqJ; Qvt_0: $data["\151\x64\137\x67\x75\x72\x75"] = $guru->id_guru; goto ZXncJ; TJf2t: $smt = $this->master->getSemesterActive(); goto U1j7t; gOaMY: if ($this->ion_auth->is_admin()) { goto pb5jE; } goto XtV7r; VT7FD: $data = ["\x75\163\x65\162" => $user, "\x6a\x75\x64\x75\154" => "\113\145\x68\x61\x64\x69\x72\x61\156\40\110\x61\x72\x69\141\x6e\40\123\x69\163\167\x61", "\x73\x75\142\x6a\165\144\x75\x6c" => "\104\x61\164\141\40\113\x65\x68\x61\x64\x69\x72\x61\x6e\40\123\x69\163\x77\x61", "\163\145\164\x74\x69\156\x67" => $this->dashboard->getSetting()]; goto xW5SB; qu3FR: $data["\160\x72\157\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto HooJj; sZ3PJ: $data["\x73\x6d\164\x5f\x61\x63\164\151\166\145"] = $smt; goto UW17D; xW5SB: $tp = $this->master->getTahunActive(); goto TJf2t; ZXncJ: $this->load->view("\155\145\x6d\142\x65\162\x73\x2f\147\165\162\x75\x2f\x74\145\x6d\160\x6c\x61\164\145\x73\57\x68\x65\x61\144\x65\162", $data); goto P_uiD; DQ8hm: $data["\x74\x70\137\141\x63\x74\151\x76\145"] = $tp; goto Es01V; Gsq8k: g7kMW: goto e6oDa; XtV7r: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto HoeEQ; pZD52: goto g7kMW; goto g69w3; UW17D: $data["\153\145\154\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto AWXfE; D_frR: $this->load->view("\x5f\x74\x65\155\160\x6c\x61\x74\145\x73\57\144\x61\x73\150\x62\157\141\162\x64\x2f\x5f\150\145\x61\x64\x65\x72", $data); goto oYDme; pvWL1: $this->load->view("\x5f\164\x65\x6d\160\x6c\x61\164\x65\163\57\144\141\163\x68\142\157\x61\x72\144\57\137\x66\157\157\164\145\162"); goto Gsq8k; yegqJ: $data["\x67\165\162\165"] = $guru; goto Qvt_0; g69w3: pb5jE: goto qu3FR; U1j7t: $data["\164\x70"] = $this->dashboard->getTahun(); goto DQ8hm; AWXfE: $data["\x6d\141\x70\145\154"] = $this->dropdown->getAllMapel(); goto gOaMY; wsb1c: $user = $this->ion_auth->user()->row(); goto VT7FD; e6oDa: } public function loadAbsensi() { goto FLrQL; y9F9q: goto hezWm; goto UvgVv; XT25z: U_Xcq: goto l4kQo; usPP3: $tahun = $this->input->post("\x74\x68\156", true); goto Y7n2E; ueTxW: $tanggal = str_pad($tanggal, 2, "\x30", STR_PAD_LEFT); goto WHQAN; U5nn2: foreach ($jadwal_materi as $jmtr) { goto YjydN; YjydN: foreach ($jmtr as $jam) { goto CmMyc; CmMyc: foreach ($jam as $jns) { array_push($arrIdKjm, $jns->id_kjm); w_nVh: } goto SvzRh; SvzRh: HeWuf: goto q6790; q6790: RBNdW: goto mQKnp; mQKnp: } goto Q7Flq; Q7Flq: e5cK9: goto cFGFp; cFGFp: oH9Jl: goto IpyP1; IpyP1: } goto TMvx4; QELb5: $hari = $this->input->post("\x68\141\x72\151", true); goto hpkRT; UvgVv: gvE4E: goto fzrSo; FLrQL: $id_kelas = $this->input->post("\x6b\x65\x6c\141\163", true); goto usPP3; T84ig: if (!(count($arrIdMapel) > 0)) { goto sv_FD; } goto rrZdM; Y8PHX: hezWm: goto xdC33; GNMiN: sv_FD: goto OCcSO; WHQAN: $info = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto rnhJ9; MwVXi: $bulan = str_pad($bulan, 2, "\60", STR_PAD_LEFT); goto ueTxW; hpkRT: $id_tp = $this->master->getTahunActive()->id_tp; goto Cwk6j; KJFsB: foreach ($jadwal as $jd) { array_push($arrIdMapel, $jd->id_mapel); OPJj1: } goto I6TRK; PtVKr: $tanggal = $this->input->post("\x74\x67\154", true); goto QELb5; xdC33: $jadwal = $this->dashboard->loadJadwalHariIni($id_tp, $id_smt, $id_kelas, $hari); goto YkgIK; BAl85: if (!($info != null)) { goto U_Xcq; } goto vrV38; XoN7s: $jadwal_materi = []; goto T84ig; rnhJ9: if ($info != null) { goto gvE4E; } goto BCt4d; Cwk6j: $id_smt = $this->master->getSemesterActive()->id_smt; goto MwVXi; l4kQo: $this->output_json(array("\164\x65\163\x74" => [$id_kelas, $tahun . "\x2d" . $bulan . "\x2d" . $tanggal, $arrIdMapel], "\154\x6f\x67" => $log, "\x69\x6e\146\157" => $info, "\x6a\x61\144\x77\x61\154" => $jadwal, "\155\141\164\x65\x72\151" => $jadwal_materi, "\x69\x73\164\x69\x72\141\x68\141\x74" => $istirahat)); goto rYyso; OCcSO: $arrIdKjm = []; goto U5nn2; vrV38: foreach ($siswa as $s) { goto JI_Eh; JI_Eh: $status_materi = []; goto QPU8x; dzp58: $status = []; goto cfeyi; fa7fs: $log[$s->id_siswa] = ["\x6e\x61\x6d\141" => $s->nama, "\156\x69\163" => $s->nis, "\153\x65\154\x61\163" => $s->nama_kelas, "\x73\x74\x61\164\x75\x73" => $status]; goto ONy8P; aEd97: M3ZgC: goto fa7fs; GKxBx: LHo_m: goto dzp58; oLnT5: $status_materi = $this->kelas->getRekapStatusMateri($s->id_siswa, $arrIdKjm); goto GKxBx; QPU8x: if (!(count($arrIdKjm) > 0)) { goto LHo_m; } goto oLnT5; cfeyi: foreach ($status_materi as $stat) { $status[$stat->jam_ke][$stat->id_mapel][$stat->jenis] = $stat; BJ0qu: } goto aEd97; ONy8P: n6iD2: goto OrLlq; OrLlq: } goto gE0Zo; BCt4d: $istirahat = []; goto y9F9q; gE0Zo: qH3ZR: goto XT25z; Y7n2E: $bulan = $this->input->post("\142\x6c\156", true); goto PtVKr; YkgIK: $arrIdMapel = []; goto KJFsB; rrZdM: $jadwal_materi = $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $bulan . "\55" . $tanggal, $arrIdMapel); goto GNMiN; he_pG: $log = []; goto BAl85; fzrSo: $istirahat = unserialize($info->istirahat); goto Y8PHX; cQbpy: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto he_pG; TMvx4: DOAPF: goto cQbpy; I6TRK: k9b5K: goto XoN7s; rYyso: } }
