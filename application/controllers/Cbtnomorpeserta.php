<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtnomorpeserta extends CI_Controller { public function __construct() { goto D4jmB; FcDdg: $this->load->model("\115\141\x73\164\x65\x72\x5f\155\157\x64\145\x6c", "\x6d\x61\x73\x74\145\x72"); goto liwn2; EoWdY: llo_M: goto icRy4; lCkf3: if (!$this->ion_auth->logged_in()) { goto llo_M; } goto drEAw; Fy4g0: VwPP9: goto mmr4m; aDfte: goto VwPP9; goto EoWdY; mKAkS: $this->load->model("\104\x72\x6f\x70\x64\x6f\167\156\137\155\157\144\x65\x6c", "\x64\162\x6f\160\144\157\167\x6e"); goto llfWN; DbrpD: show_error("\110\141\x6e\x79\141\40\x41\x64\x6d\x69\156\151\x73\164\162\x61\164\157\x72\40\171\x61\156\147\40\144\x69\x62\145\x72\151\40\150\141\153\40\x75\156\x74\x75\x6b\40\x6d\x65\x6e\147\x61\153\x73\145\x73\x20\150\141\154\141\155\141\156\40\151\x6e\151\54\x20\74\141\40\x68\162\145\146\x3d\42" . base_url("\x64\x61\163\x68\142\x6f\x61\x72\x64") . "\42\x3e\x4b\145\x6d\x62\141\154\x69\40\153\145\40\155\145\x6e\165\40\x61\167\x61\154\x3c\x2f\x61\76", 403, "\x41\x6b\163\x65\163\40\124\x65\x72\154\x61\162\x61\156\x67"); goto Fiy8Q; mmr4m: $this->load->library(["\x64\x61\x74\x61\164\x61\142\154\x65\x73", "\x66\157\x72\155\x5f\166\x61\154\x69\x64\x61\x74\x69\157\x6e"]); goto gTuth; D4jmB: parent::__construct(); goto lCkf3; GPtG1: $this->load->model("\103\142\164\137\155\157\144\145\x6c", "\x63\x62\164"); goto mKAkS; icRy4: redirect("\141\x75\x74\x68"); goto Fy4g0; llfWN: $this->form_validation->set_error_delimiters('', ''); goto HMwr_; liwn2: $this->load->model("\x44\141\163\150\x62\x6f\x61\162\x64\137\155\x6f\144\x65\154", "\144\141\x73\150\x62\x6f\141\x72\144"); goto GPtG1; Fiy8Q: GqWSF: goto aDfte; gTuth: $this->load->library("\165\160\154\157\x61\144"); goto FcDdg; drEAw: if ($this->ion_auth->is_admin()) { goto GqWSF; } goto DbrpD; HMwr_: } public function output_json($data, $encode = true) { goto wSh9_; FQfuE: iX2AQ: goto I_GKJ; lV6Q_: $data = json_encode($data); goto FQfuE; I_GKJ: $this->output->set_content_type("\141\160\x70\x6c\x69\x63\x61\x74\x69\x6f\156\57\x6a\163\157\x6e")->set_output($data); goto vc7lo; wSh9_: if (!$encode) { goto iX2AQ; } goto lV6Q_; vc7lo: } public function index() { goto eWP2y; Sb9Ov: $this->load->view("\x5f\164\145\155\160\x6c\x61\x74\145\163\x2f\x64\141\x73\x68\x62\x6f\x61\162\x64\x2f\x5f\150\x65\x61\x64\x65\162", $data); goto YkWla; Sbwgb: $data["\x73\x6d\x74\x5f\141\x63\x74\151\x76\145"] = $smt; goto hpuKF; dO0Vx: $data["\x74\160"] = $this->dashboard->getTahun(); goto LYpYy; YkWla: $this->load->view("\143\x62\x74\57\156\x6f\x6d\157\x72\x70\x65\x73\145\x72\x74\x61\x2f\x64\141\164\x61"); goto MyCic; ZUdAr: $data = ["\165\163\145\162" => $user, "\x6a\165\x64\x75\154" => "\x4e\x6f\155\x6f\162\x20\120\x65\x73\x65\x72\164\x61", "\x73\x75\142\152\x75\x64\165\x6c" => "\107\145\156\145\x72\x61\164\145\x20\x4e\157\x6d\157\162\x20\120\145\x73\x65\162\164\141\40\x55\x6a\151\x61\x6e", "\160\162\x6f\146\x69\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\145\x74\164\x69\156\147" => $this->dashboard->getSetting()]; goto r9eKe; LT55F: $data["\163\155\x74"] = $this->dashboard->getSemester(); goto Sbwgb; uWJDv: $data["\x73\x65\x73\x69"] = $this->dropdown->getAllSesi(); goto Sb9Ov; MyCic: $this->load->view("\137\164\x65\155\160\x6c\x61\x74\145\x73\x2f\144\x61\163\150\x62\157\x61\x72\x64\57\x5f\146\157\x6f\x74\145\x72"); goto TOeqN; Y4lb4: $data["\153\145\x6c\141\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto XDfbL; LYpYy: $data["\x74\160\137\x61\x63\164\151\166\145"] = $tp; goto LT55F; XDfbL: $data["\x72\165\141\156\147"] = $this->dropdown->getAllRuang(); goto uWJDv; r9eKe: $tp = $this->dashboard->getTahunActive(); goto agpRD; hpuKF: $data["\152\x61\144\x77\141\x6c"] = $this->dropdown->getAllJadwal($tp->id_tp, $smt->id_smt); goto Y4lb4; eWP2y: $user = $this->ion_auth->user()->row(); goto ZUdAr; agpRD: $smt = $this->dashboard->getSemesterActive(); goto dO0Vx; TOeqN: } public function saveNomor() { goto wqshE; DCA3U: $arrNomor = $this->cbt->getAllNomorPeserta(); goto qnNCr; qnNCr: $tp = $this->dashboard->getTahunActive(); goto UN1Sx; lLUUn: $this->output_json($update); goto db_VK; dVVD_: iXw0v: goto lLUUn; UN1Sx: $update = false; goto EgZt9; wqshE: $input = json_decode($this->input->post("\163\x69\x73\167\x61", true)); goto DCA3U; EgZt9: foreach ($input as $in) { goto Hti3R; PaxqN: $update = false; goto vnWD1; F0pfs: m8nPX: goto dZs9b; ak1nm: B8q0w: goto PaxqN; fsxQ5: if ($nomorAda != null && $nomorAda->nomor_peserta == $in->nomor && $nomorAda->id_siswa != $in->id) { goto B8q0w; } goto AUOW1; fEmPM: $update = $this->db->replace("\x63\142\164\x5f\x6e\157\x6d\157\162\x5f\x70\x65\163\x65\162\x74\141", $insert); goto yWKEN; AUOW1: $insert = ["\151\144\x5f\x6e\x6f\155\x6f\162" => $in->id . $tp->id_tp, "\x69\144\137\163\151\x73\x77\141" => $in->id, "\151\x64\137\x74\160" => $tp->id_tp, "\x6e\157\155\x6f\162\137\x70\x65\163\145\x72\164\141" => $in->nomor]; goto fEmPM; yWKEN: goto pKe5B; goto ak1nm; Hti3R: $nomorAda = isset($arrNomor[$in->id]) ? $arrNomor[$in->id] : null; goto fsxQ5; vnWD1: pKe5B: goto F0pfs; dZs9b: } goto dVVD_; db_VK: } public function resetNomor() { goto RhlaT; GkJFb: $this->output_json($res); goto vGzWV; RhlaT: $input = json_decode($this->input->get("\153\x65\x6c\141\x73", true)); goto xQYfZ; gZ5Fn: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $input); goto vlRy5; E17P6: $res["\x73\164\x61\x74\x75\x73"] = $update; goto GkJFb; D3w7F: $smt = $this->dashboard->getSemesterActive(); goto gZ5Fn; OiU8I: pUx2B: goto E17P6; vlRy5: foreach ($siswas as $siswa) { goto hts_6; hts_6: $insert = ["\x69\x64\137\156\x6f\155\157\x72" => $siswa->id_siswa . $tp->id_tp, "\151\x64\137\x73\151\x73\167\x61" => $siswa->id_siswa, "\151\144\x5f\x74\x70" => $tp->id_tp, "\156\157\155\157\162\137\x70\145\163\x65\x72\x74\141" => '']; goto SosaK; SosaK: $update = $this->db->replace("\143\x62\164\x5f\156\157\x6d\x6f\x72\137\x70\145\x73\145\162\x74\141", $insert); goto zqKKo; zqKKo: HS2MG: goto kfXbl; kfXbl: } goto OiU8I; xQYfZ: $tp = $this->dashboard->getTahunActive(); goto D3w7F; vGzWV: } public function getSiswaKelas($arr_kelas) { goto P08fb; HUm2I: $data["\x73\151\163\167\141"] = $siswas; goto Qp1mO; NVxYq: $siswas = $this->cbt->getSiswaByKelasArray($tp->id_tp, $smt->id_smt, $kelas); goto s3L5U; LUn8o: $this->output_json($data); goto SAEg2; Qgj60: $kelas = json_decode(urldecode($arr_kelas)); goto NVxYq; s3L5U: $arrNomor = $this->cbt->getAllNomorPeserta(); goto HUm2I; tJNKU: $smt = $this->dashboard->getSemesterActive(); goto Qgj60; Qp1mO: $data["\156\x6f\x6d\157\162"] = $arrNomor; goto LUn8o; P08fb: $tp = $this->dashboard->getTahunActive(); goto tJNKU; SAEg2: } }
