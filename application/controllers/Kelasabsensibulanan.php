<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasabsensibulanan extends CI_Controller { public function __construct() { goto bwlPK; rYwAi: $this->load->model("\104\162\x6f\160\144\x6f\x77\x6e\x5f\x6d\157\x64\x65\x6c", "\x64\x72\157\160\x64\157\167\156"); goto WrqYl; x9aVS: $this->load->model("\x4d\141\163\164\145\x72\137\x6d\157\x64\x65\154", "\x6d\x61\163\x74\145\162"); goto B_sJd; phrta: if (!$this->ion_auth->logged_in()) { goto HePXe; } goto SjHSX; Qzimp: show_error("\x48\x61\x6e\171\x61\x20\x41\144\x6d\151\156\151\163\x74\162\x61\164\x6f\x72\40\x79\x61\x6e\147\x20\x64\151\142\x65\x72\x69\40\x68\141\153\40\x75\156\x74\165\x6b\x20\155\145\156\x67\141\153\x73\145\x73\x20\x68\141\x6c\x61\155\141\156\x20\x69\x6e\x69\54\x20\x3c\x61\x20\150\162\x65\146\75\42" . base_url("\x64\141\x73\x68\142\x6f\141\162\144") . "\42\x3e\113\145\155\x62\141\x6c\151\x20\x6b\145\x20\x6d\145\x6e\165\x20\x61\167\141\x6c\x3c\57\141\76", 403, "\101\x6b\x73\145\x73\x20\104\x69\x62\141\164\141\x73\151"); goto qhAF_; WqkxM: redirect("\141\x75\164\x68"); goto bxGwv; bwlPK: parent::__construct(); goto phrta; bxGwv: psebD: goto qcZXP; qcZXP: $this->load->library(["\144\x61\x74\x61\164\141\142\x6c\x65\163", "\x66\157\162\x6d\x5f\x76\141\154\x69\x64\141\x74\x69\157\156"]); goto x9aVS; B_sJd: $this->load->model("\104\x61\x73\x68\x62\x6f\141\x72\x64\137\x6d\157\x64\145\x6c", "\144\x61\x73\150\142\x6f\x61\162\144"); goto rYwAi; WrqYl: $this->load->model("\113\145\154\141\163\137\x6d\157\x64\x65\x6c", "\153\145\x6c\x61\163"); goto h0gkD; qhAF_: L0CoD: goto HZ1hf; HZ1hf: goto psebD; goto td4W3; td4W3: HePXe: goto WqkxM; SjHSX: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\x72\x75"))) { goto L0CoD; } goto Qzimp; h0gkD: $this->form_validation->set_error_delimiters('', ''); goto lqlA0; lqlA0: } public function output_json($data, $encode = true) { goto j6tce; OgnFR: $this->output->set_content_type("\141\x70\x70\x6c\151\x63\x61\x74\151\157\x6e\57\152\x73\157\x6e")->set_output($data); goto EyCMy; kbCVO: $data = json_encode($data); goto d2X7W; j6tce: if (!$encode) { goto tbFci; } goto kbCVO; d2X7W: tbFci: goto OgnFR; EyCMy: } public function index() { goto OuQdS; dBzRA: $data["\x61\x72\x72\x6b\145\x6c\141\163"] = $arrKelas; goto KVgkt; KNYC3: $data["\160\162\x6f\146\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto Bt0yA; gvS4x: $this->load->view("\155\145\155\x62\145\x72\x73\57\x67\x75\x72\165\57\164\145\155\x70\x6c\x61\x74\145\x73\57\x66\x6f\157\x74\145\162"); goto pqzRa; qtiij: $this->load->view("\x5f\164\x65\x6d\x70\154\x61\x74\x65\x73\57\144\x61\x73\x68\x62\x6f\x61\162\144\57\137\x68\x65\141\144\x65\x72", $data); goto gTImU; cHMmq: $smt = $this->master->getSemesterActive(); goto sNr0d; sNr0d: $data["\164\160"] = $this->dashboard->getTahun(); goto lVYtF; ovUr_: $data["\x67\165\162\x75"] = $guru; goto QVE21; sdaEC: jAqL1: goto nza3J; duq89: $nguru[$guru->id_guru] = $guru->nama_guru; goto ovUr_; k3oIG: EaXV8: goto sdaEC; nza3J: $arrId = []; goto D3MWU; xc0cE: $tp = $this->master->getTahunActive(); goto cHMmq; fRwpE: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto VVdXk; DeNLz: G94uW: goto Ahuk_; d2k8s: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto duq89; wEAST: $this->load->view("\x5f\164\x65\155\x70\154\x61\x74\145\x73\57\x64\141\163\150\x62\x6f\141\162\x64\x2f\137\146\x6f\x6f\x74\x65\162"); goto DeNLz; IVu5A: $data["\147\165\x72\x75"] = $this->dropdown->getAllGuru(); goto lVSb6; EQSlc: $data = ["\165\163\x65\162" => $user, "\152\x75\x64\x75\154" => "\x44\x61\146\164\x61\162\x20\110\x61\144\x69\162\x20\102\x75\x6c\x61\156\141\x6e", "\x73\165\142\x6a\165\x64\165\154" => "\104\141\x66\x74\141\x72\x20\x48\141\144\151\x72\x20\102\165\x6c\x61\156\x61\156\40\x53\x69\x73\x77\141", "\163\x65\164\164\x69\156\147" => $this->dashboard->getSetting()]; goto xc0cE; CBXai: $this->load->view("\x6d\145\x6d\142\x65\162\x73\x2f\147\x75\162\x75\x2f\164\145\155\160\154\x61\164\x65\x73\x2f\150\x65\x61\x64\145\x72", $data); goto eSBXr; lqJeB: foreach ($mapel as $m) { goto DxP6Z; DxP6Z: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto jhxKG; UMsCv: xTjgv: goto vsm9j; vsm9j: crnlH: goto dmjM4; jhxKG: foreach ($m->kelas_mapel as $kls) { $arrKelas[$m->id_mapel][] = ["\x69\x64\137\153\x65\x6c\141\163" => $kls->kelas, "\156\141\155\141\137\x6b\145\154\x61\x73" => $this->dropdown->getNamaKelasById($tp->id_tp, $smt->id_smt, $kls->kelas)]; zRhzh: } goto UMsCv; dmjM4: } goto k3oIG; Wh3En: $arrMapel = []; goto j7g2I; Bt0yA: $data["\153\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto IVu5A; zUE8o: if ($this->ion_auth->is_admin()) { goto xyOMC; } goto d2k8s; FQwM1: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto Wh3En; cAp7Z: QWGv5: goto TX4_S; w7tBX: foreach ($mapel[0]->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); o1KRl: } goto zwS1s; D3MWU: if (!($mapel != null)) { goto QWGv5; } goto w7tBX; eSBXr: $this->load->view("\153\145\x6c\x61\x73\57\141\x62\163\145\156\142\165\x6c\141\156\x61\x6e\x2f\144\141\164\141"); goto gvS4x; VVdXk: $data["\x73\155\164\x5f\141\x63\164\151\166\x65"] = $smt; goto zi1YO; j7g2I: $arrKelas = []; goto TqygG; VQDfw: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto FQwM1; lVYtF: $data["\164\x70\137\x61\143\x74\x69\x76\x65"] = $tp; goto fRwpE; zi1YO: $data["\x62\x75\154\141\156"] = $this->dropdown->getBulan(); goto zUE8o; TqygG: if (!($mapel != null)) { goto jAqL1; } goto lqJeB; lVSb6: $data["\155\x61\x70\145\154"] = $this->dropdown->getAllMapel(); goto qtiij; NVLgF: xyOMC: goto KNYC3; gTImU: $this->load->view("\153\x65\x6c\141\163\57\x61\142\163\145\x6e\x62\165\154\x61\156\x61\x6e\57\144\141\164\x61"); goto wEAST; TX4_S: $data["\155\141\160\145\x6c"] = $arrMapel; goto dBzRA; OuQdS: $user = $this->ion_auth->user()->row(); goto EQSlc; QVE21: $data["\151\x64\x5f\147\x75\162\x75"] = $guru->id_guru; goto VQDfw; zwS1s: d8xLh: goto cAp7Z; KVgkt: $data["\x6b\145\154\141\x73"] = count($arrId) > 0 ? $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId) : []; goto CBXai; pqzRa: goto G94uW; goto NVLgF; Ahuk_: } public function loadAbsensiMapel() { goto UT5V_; MbUKp: goto KSLNQ; goto ZMzZa; R5tlN: $mapel_bulan_ini = []; goto WRkL5; Mf1wV: $log = []; goto NP24p; WRkL5: $infos = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $id_tp, $id_smt); goto QXzf3; JadKv: $i++; goto ctI9J; m8suY: $this->output_json(["\154\157\147" => $log, "\x6a\141\144\167\x61\x6c" => $jadwal, "\x6d\141\x74\x65\162\x69" => $jadwal_materi, "\x6d\x61\160\x65\x6c\163" => $mapel_bulan_ini]); goto VUNK6; HnriL: iUBRh: goto JadKv; RlCyJ: $jadwal = $this->dashboard->getJadwalKbm($id_tp, $id_smt, $id_kelas); goto heOwH; UT5V_: $id_kelas = $this->input->post("\x6b\145\154\x61\x73", true); goto wvJie; sqIkm: $jadwal_materi = []; goto TeZKV; pzaA0: foreach ($siswa as $s) { goto fH2Q1; fr2be: B3fzV: goto HyJON; HyJON: $log[$s->id_siswa] = ["\x6e\x61\155\x61" => $s->nama, "\x6e\x69\x73" => $s->nis, "\153\145\154\141\x73" => $s->nama_kelas, "\155\141\164\x65\162\x69" => $arrMateri[1], "\164\x75\147\141\x73" => $arrMateri[2]]; goto n0fY4; Gm2fx: XHL0x: goto qWIiO; EwCCy: zHaDR: goto tnawa; U8EnU: $t = $i + 1 < 10 ? "\x30" . ($i + 1) : $i + 1; goto SQXXy; fH2Q1: $arrMateri = []; goto H1LTX; tnawa: $i++; goto cEspH; H1LTX: $i = 0; goto Gm2fx; cEspH: goto XHL0x; goto fr2be; qWIiO: if (!($i < $tgl)) { goto B3fzV; } goto U8EnU; SQXXy: $b = $bulan < 10 ? "\x30" . $bulan : $bulan; goto z0VuV; rIOM2: $arrMateri[2][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][2]) && isset($materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\55" . $t]) ? $materi_perbulan[$s->id_siswa][2][$tahun . "\55" . $b . "\x2d" . $t] : null; goto EwCCy; n0fY4: sw0MZ: goto u15qg; z0VuV: $arrMateri[1][] = $materi_perbulan != null && isset($materi_perbulan[$s->id_siswa]) && isset($materi_perbulan[$s->id_siswa][1]) && isset($materi_perbulan[$s->id_siswa][1][$tahun . "\55" . $b . "\x2d" . $t]) ? $materi_perbulan[$s->id_siswa][1][$tahun . "\x2d" . $b . "\55" . $t] : null; goto rIOM2; u15qg: } goto OV8EX; iJc5v: $bulan = $this->input->post("\142\154\x6e", true); goto avcbx; TeZKV: $i = 0; goto PCn6i; PCn6i: dkIYy: goto uRHr0; NP24p: $siswa = $this->kelas->getKelasSiswa($id_kelas, $id_tp, $id_smt); goto pzaA0; heOwH: if ($jadwal != null) { goto Y2b1f; } goto i56Eh; OV8EX: kWb2I: goto R5tlN; UDOFI: $tahun = $this->input->post("\x74\x68\x6e", true); goto iJc5v; VUNK6: KSLNQ: goto H1k2g; i56Eh: $this->output_json(["\152\x61\x64\167\x61\154" => $jadwal]); goto MbUKp; NQTEu: $jadwal->istirahat = unserialize($jadwal->istirahat); goto uGhZG; sjbIg: $t = $i + 1 < 10 ? "\x30" . ($i + 1) : $i + 1; goto CGuvo; ZMzZa: Y2b1f: goto NQTEu; CGuvo: $b = $bulan < 10 ? "\x30" . $bulan : $bulan; goto jJG18; QXzf3: foreach ($infos as $info) { goto JFWSa; LwCAJ: foreach ($dates as $date) { goto f7n6q; f7n6q: $d = explode("\x2d", $date); goto f1KJ0; MJIW4: vJDvf: goto YcOrn; f1KJ0: $mapel_bulan_ini[$d[2]][$info->jam_ke] = $date; goto MJIW4; YcOrn: } goto YFruA; MXxyZ: VVDqt: goto d8XSE; JFWSa: $dates = $this->total_hari($info->id_hari, $bulan, $tahun); goto LwCAJ; YFruA: X6YMl: goto MXxyZ; d8XSE: } goto RjTGL; uGhZG: $tgl = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun); goto sqIkm; RjTGL: XwM3G: goto m8suY; sM6nK: $id_smt = $this->master->getSemesterActive()->id_smt; goto RlCyJ; jJG18: $jadwal_materi[$t] = (array) $this->kelas->getAllMateriByTgl($id_kelas, $tahun . "\x2d" . $b . "\55" . $t, [$id_mapel]); goto HnriL; rprOO: $materi_perbulan = $this->kelas->getRekapBulananSiswa($id_mapel, $id_kelas, $tahun, $bulan); goto Mf1wV; uRHr0: if (!($i < $tgl)) { goto Rdoy_; } goto sjbIg; suMYv: Rdoy_: goto rprOO; avcbx: $id_tp = $this->master->getTahunActive()->id_tp; goto sM6nK; wvJie: $id_mapel = $this->input->post("\x6d\141\x70\x65\x6c", true); goto UDOFI; ctI9J: goto dkIYy; goto suMYv; H1k2g: } function total_hari($id_day, $bulan, $taun) { goto RK6kg; FvaI2: array_push($dates, date("\x59\55\155\x2d\144", strtotime($taun . "\55" . $bulan . "\55" . $i))); goto Ng3YY; ehpni: $i = 1; goto HbTEu; KpJdx: NiMeL: goto tiv0d; jffYv: $dates = []; goto MTLS6; NTXtB: $i++; goto tqY_m; RK6kg: $days = 0; goto jffYv; F0h20: $days++; goto FvaI2; tiv0d: return $dates; goto FL_dl; Ng3YY: gxBO1: goto yJdMZ; tqY_m: goto XcjkF; goto KpJdx; yJdMZ: b4wu5: goto NTXtB; MTLS6: $total_days = cal_days_in_month(CAL_GREGORIAN, $bulan, $taun); goto d6A3q; pjuTK: if (!(date("\x4e", strtotime($taun . "\x2d" . $bulan . "\x2d" . $i)) == $idday)) { goto gxBO1; } goto F0h20; HbTEu: XcjkF: goto exF6C; exF6C: if (!($i < $total_days)) { goto NiMeL; } goto pjuTK; d6A3q: $idday = $id_day == "\67" ? 0 : $id_day; goto ehpni; FL_dl: } }
