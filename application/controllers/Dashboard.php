<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\x53\x45\x50\x41\124\110") or exit("\x4e\157\x20\144\x69\x72\x65\143\164\40\x73\x63\x72\x69\160\x74\x20\x61\x63\x63\145\x73\163\x20\141\x6c\154\x6f\167\x65\x64"); class Dashboard extends CI_Controller { public function __construct() { goto s9JMO; gBbYR: $this->load->model("\x4c\157\x67\x5f\x6d\157\x64\145\154", "\x6c\157\x67\x67\x69\x6e\x67"); goto Hq3x7; Pv1Nm: $this->load->model("\x44\141\163\150\x62\x6f\141\162\144\137\155\x6f\x64\145\154", "\144\x61\163\150\142\x6f\x61\x72\144"); goto gBbYR; T3UAm: $this->load->model("\x4d\x61\x73\x74\x65\162\137\155\157\x64\x65\154", "\x6d\141\x73\x74\x65\x72"); goto Pv1Nm; WnMd_: redirect("\x61\x75\164\150"); goto KYrv9; QT1Tb: if ($this->ion_auth->logged_in()) { goto brq0z; } goto WnMd_; Hq3x7: $this->load->model("\104\162\x6f\x70\144\x6f\x77\x6e\x5f\x6d\157\144\145\x6c", "\144\x72\157\160\x64\157\167\156"); goto rOAEu; KYrv9: brq0z: goto T3UAm; rOAEu: $this->load->model("\103\x62\164\137\155\157\x64\x65\x6c", "\143\142\x74"); goto Qw2F1; s9JMO: parent::__construct(); goto QT1Tb; Qw2F1: } public function admin_box($setting, $tp, $smt) { goto Ez13d; g1iiV: return $info_box; goto sIQNl; xb3wU: goto M0XHs; goto xxuFL; JNw1d: $box = [["\x62\x6f\170" => "\x62\x6c\x75\x65", "\x74\157\164\141\154" => $this->dashboard->total("\155\x61\x73\x74\145\162\137\163\151\163\167\141"), "\x74\151\x74\154\x65" => "\123\x69\x73\x77\x61", "\165\162\x6c" => "\x64\141\164\141\163\x69\163\x77\141", "\x69\143\x6f\x6e" => "\165\x73\145\162\x73"], ["\142\157\x78" => "\143\171\x61\156", "\x74\x6f\164\x61\154" => $this->dashboard->total("\155\x61\x73\164\145\162\137\153\x65\x6c\141\x73", "\x69\x64\x5f\x74\x70\x3d" . $tp . "\40\x41\116\x44\x20\151\x64\x5f\x73\155\x74\75" . $smt), "\164\151\164\x6c\145" => "\122\x6f\x6d\x62\x65\x6c", "\x75\162\x6c" => "\x64\141\164\x61\x6b\x65\154\141\x73", "\151\x63\x6f\x6e" => "\142\x65\x6c\x6c"], ["\x62\157\x78" => "\164\x65\141\x6c", "\164\157\164\x61\154" => $this->dashboard->total("\155\141\163\164\x65\x72\x5f\x67\165\x72\165"), "\164\151\164\x6c\145" => "\x47\x75\x72\x75", "\165\162\x6c" => "\144\141\x74\141\x67\165\x72\165", "\151\x63\157\x6e" => "\165\163\145\162"], ["\142\x6f\170" => "\146\165\143\150\x73\151\141", "\x74\157\x74\141\x6c" => $this->dashboard->totalWaliKelas($tp, $smt), "\164\151\x74\154\145" => "\x57\141\x6c\151\x20\113\145\x6c\x61\x73", "\165\x72\154" => "\144\x61\x74\141\147\165\162\165", "\x69\143\x6f\156" => "\x75\x73\x65\162"], ["\x62\x6f\170" => "\163\x75\x63\143\x65\x73\x73", "\x74\x6f\164\141\154" => $this->dashboard->total("\x6d\141\x73\164\145\x72\137\x6d\141\x70\x65\x6c", $where), "\164\151\164\x6c\145" => "\115\141\160\145\154", "\x75\162\154" => "\x64\x61\x74\x61\155\x61\160\x65\154", "\x69\143\x6f\x6e" => "\142\157\157\153"], ["\142\157\x78" => "\x79\x65\154\x6c\x6f\x77", "\x74\x6f\x74\141\x6c" => $this->dashboard->total("\155\141\x73\164\145\x72\x5f\x65\x6b\x73\x74\162\x61"), "\164\x69\x74\154\145" => "\105\x6b\x73\x74\x72\x61\x6b\x75\x72\x69\x6b\x75\154\145\x72", "\165\162\154" => "\144\141\164\141\x65\x6b\x73\x74\x72\141", "\x69\143\157\x6e" => "\142\x6f\x6f\153"]]; goto U8Tqb; U8Tqb: $info_box = json_decode(json_encode($box), FALSE); goto g1iiV; bwvbM: $where = "\152\145\x6e\x6a\141\156\147\75\60\40\x4f\x52\40\x6a\x65\156\152\x61\156\147\x3d\x31"; goto W31E4; Ez13d: $where = ''; goto xswjE; GstM6: $where = "\152\x65\156\x6a\x61\x6e\x67\x3d\62\40\117\x52\x20\x6a\145\x6e\x6a\141\x6e\x67\x3d\61"; goto EsuXp; GBU6L: if ($setting->jenjang == "\62") { goto mTnJh; } goto xb3wU; W31E4: goto M0XHs; goto fl819; fl819: mTnJh: goto GstM6; EsuXp: M0XHs: goto JNw1d; xxuFL: KUxZE: goto bwvbM; xswjE: if ($setting->jenjang == "\x31") { goto KUxZE; } goto GBU6L; sIQNl: } public function guru_box($setting) { goto kSQy9; kSQy9: $where = ''; goto DLsmf; z4YMK: $info_box = json_decode(json_encode($box), FALSE); goto CN5U7; v4z0o: ay_Ed: goto JWEPn; bjaDh: $box = [["\x62\157\x78" => "\164\145\x61\x6c", "\x74\157\164\x61\x6c" => $this->dashboard->total("\155\x61\163\x74\145\162\x5f\x6b\145\x6c\x61\163"), "\164\x69\164\154\x65" => "\122\157\x6d\142\x65\154", "\x69\x63\157\x6e" => "\x75\x73\x65\x72"], ["\142\157\170" => "\x62\x6c\x75\145", "\164\157\164\141\x6c" => $this->dashboard->total("\x6d\x61\x73\164\145\162\x5f\163\151\163\x77\141"), "\x74\x69\164\x6c\145" => "\123\151\x73\x77\141", "\x69\x63\x6f\156" => "\x75\163\145\162\x73"], ["\x62\157\170" => "\146\165\x63\150\x73\151\x61", "\x74\x6f\164\141\x6c" => $this->dashboard->total("\x6d\141\163\x74\x65\x72\137\147\x75\162\165"), "\x74\151\164\154\x65" => "\107\x75\x72\x75", "\x69\143\157\156" => "\x75\x73\x65\162"], ["\142\x6f\170" => "\x73\165\143\x63\x65\x73\163", "\x74\x6f\x74\141\154" => $this->dashboard->total("\155\141\x73\164\x65\162\137\155\141\x70\x65\x6c", $where), "\164\151\164\x6c\145" => "\115\x61\160\145\154", "\x69\143\x6f\156" => "\142\x6f\157\x6b"]]; goto z4YMK; Iyvyx: goto yx_FX; goto IE4dJ; DLsmf: if ($setting->jenjang == "\61") { goto ay_Ed; } goto EzqFR; EzqFR: if ($setting->jenjang == "\x32") { goto He9SI; } goto n1wRL; JWEPn: $where = "\152\x65\156\x6a\141\156\147\75\60\x20\117\x52\40\152\x65\x6e\x6a\x61\x6e\x67\75\x31"; goto Iyvyx; CN5U7: return $info_box; goto TksVk; n1wRL: goto yx_FX; goto v4z0o; HktSH: yx_FX: goto bjaDh; ifVtC: $where = "\152\145\x6e\x6a\x61\156\x67\x3d\x32\x20\117\122\x20\x6a\145\156\x6a\x61\156\147\x3d\x31"; goto HktSH; IE4dJ: He9SI: goto ifVtC; TksVk: } public function ujian_box() { goto UHP1N; cGS5U: $info_box = json_decode(json_encode($box), FALSE); goto zejQj; zejQj: return $info_box; goto vaosm; UHP1N: $box = [["\x62\x6f\x78" => "\151\x6e\x64\x69\x67\157", "\x74\x6f\x74\141\x6c" => $this->dashboard->total("\x63\142\164\x5f\162\x75\x61\156\x67"), "\164\x69\x74\154\x65" => "\x52\x75\x61\156\x67\40\x55\x6a\151\x61\x6e", "\165\162\154" => "\x63\142\x74\x72\x75\141\156\x67", "\151\143\x6f\x6e" => "\x73\143\x68\157\x6f\x6c"], ["\x62\157\170" => "\155\x61\162\157\157\x6e", "\164\157\x74\x61\154" => $this->dashboard->total("\x63\142\x74\x5f\163\145\163\x69"), "\x74\151\164\x6c\145" => "\123\x65\163\151", "\x75\x72\x6c" => "\143\x62\164\163\x65\163\151", "\151\143\157\x6e" => "\143\154\x6f\143\153"], ["\142\x6f\x78" => "\147\x72\145\145\156", "\164\157\x74\141\154" => $this->dashboard->total("\x63\x62\x74\x5f\x62\x61\x6e\153\x5f\163\x6f\141\x6c"), "\x74\151\x74\x6c\x65" => "\x42\x61\x6e\x6b\x20\123\157\x61\x6c", "\x75\162\x6c" => "\143\142\x74\x62\x61\156\153\x73\157\141\154", "\151\143\x6f\x6e" => "\146\157\x6c\144\x65\162"], ["\142\x6f\170" => "\164\145\141\154", "\164\157\x74\x61\x6c" => $this->dashboard->totalJadwal(), "\x74\151\164\x6c\x65" => "\112\x61\144\167\141\154", "\165\162\154" => "\x63\142\x74\x6a\x61\144\167\141\154", "\x69\143\x6f\156" => "\x63\154\x6f\x63\x6b"]]; goto cGS5U; vaosm: } public function menu_siswa_box() { goto GSo_Z; KOVj6: $info_box = json_decode(json_encode($box), FALSE); goto r83XZ; GSo_Z: $box = [["\164\x69\x74\154\x65" => "\x4a\x61\144\167\x61\x6c\40\120\x65\x6c\x61\152\141\162\x61\156", "\x69\x63\x6f\156" => "\x69\143\x5f\157\156\x6c\151\x6e\145\x2e\160\156\x67", "\154\x69\x6e\x6b" => "\163\x69\163\x77\x61\x2f\152\x61\x64\x77\x61\154\160\x65\154\141\x6a\x61\162\141\156"], ["\x74\151\164\154\145" => "\115\x61\x74\145\x72\x69", "\151\x63\x6f\x6e" => "\151\143\137\x65\x6c\x65\x61\162\156\151\x6e\x67\56\160\x6e\x67", "\x6c\151\x6e\153" => "\x73\x69\163\x77\141\x2f\155\x61\x74\x65\x72\x69"], ["\164\x69\x74\x6c\145" => "\x54\165\147\141\163", "\x69\x63\157\x6e" => "\x69\143\137\x71\165\145\163\x74\x69\157\x6e\163\x2e\160\x6e\147", "\154\x69\x6e\x6b" => "\163\151\163\x77\141\x2f\x74\x75\x67\x61\x73"], ["\164\x69\x74\x6c\x65" => "\x55\x6a\151\x61\156\40\x2f\40\125\x6c\x61\156\x67\141\156", "\x69\143\157\156" => "\151\143\137\161\165\145\163\x74\151\x6f\x6e\x2e\x70\x6e\x67", "\154\x69\156\153" => "\x73\151\163\167\x61\x2f\143\x62\164"], ["\164\x69\164\154\x65" => "\x4e\x69\154\141\x69\40\x48\141\x73\151\x6c", "\151\143\157\x6e" => "\151\x63\x5f\x65\170\x61\x6d\56\x70\156\147", "\154\x69\x6e\x6b" => "\x73\x69\163\167\x61\x2f\x68\x61\x73\x69\154"], ["\164\x69\164\154\145" => "\x41\x62\x73\145\156\163\151", "\x69\x63\x6f\156" => "\x69\143\x5f\143\154\151\x70\x62\x6f\x61\162\144\x2e\160\x6e\147", "\154\151\x6e\x6b" => "\163\151\x73\167\x61\x2f\x6b\x65\x68\141\144\x69\x72\141\156"], ["\x74\151\164\154\x65" => "\x43\x61\x74\141\164\x61\x6e\x20\107\x75\x72\165", "\x69\143\157\x6e" => "\x69\x63\x5f\163\x74\x75\x64\145\x6e\x74\56\160\156\x67", "\154\151\156\153" => "\163\151\163\x77\141\x2f\x63\x61\164\141\164\141\156"]]; goto KOVj6; r83XZ: return $info_box; goto tuQ4M; tuQ4M: } public function index() { goto FfzKe; KTUqQ: $data["\x73\x6d\x74\137\x61\143\x74\x69\166\x65"] = $smt; goto m6kOl; fm9za: $data["\x72\x75\156\x6e\151\156\x67\137\164\x65\170\x74"] = $this->dashboard->getRunningText(); goto ag3Uu; THjf0: if ($this->ion_auth->in_group("\x73\x69\x73\x77\x61")) { goto NbO6a; } goto yOK_F; FPxIB: $kelass = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto lgAe0; EK1rL: $arrKbm = []; goto FI2N5; btlWq: $tkn["\152\x61\x72\141\153"] = "\61"; goto hUafG; a5Ncd: $this->load->view("\144\x69\x73\x61\142\154\x65\x5f\154\157\x67\x69\156", $data); goto zcBhj; Ge3VA: if ($this->ion_auth->in_group("\x67\165\x72\165")) { goto WTDT0; } goto gDgeB; vucOJ: if ($siswa == null) { goto VQcig; } goto SlkbL; XuZBt: $data["\x6a\141\144\x77\x61\154\x73\x5f\x75\x6a\151\141\156"] = $tglJadwals; goto E_a6n; Os60Q: $this->load->view("\x5f\164\x65\155\160\x6c\x61\x74\145\x73\x2f\x64\x61\163\150\x62\157\x61\x72\144\x2f\x5f\150\x65\x61\x64\x65\162", $data); goto XlYol; sAFY9: $data["\x6b\142\x6d\x73"] = $arrKbm; goto z_KZc; Dr9iW: $this->load->view("\155\145\x6d\x62\x65\162\163\x2f\147\x75\162\165\57\x74\x65\155\x70\x6c\141\164\145\163\x2f\x66\x6f\x6f\x74\x65\162"); goto vXRkk; vXRkk: goto gYQov; goto gj4GA; wdgYL: goto Lkfsk; goto MkTcj; r0KxX: $data["\x6a\x61\x64\167\141\x6c\x73"] = $arrJadwalKelas[$siswa->id_kelas] ?? []; goto fm9za; yV5wf: $data["\164\x6f\x6b\145\x6e"] = $token != null ? $token : json_decode(json_encode($tkn)); goto HFXOB; fXXed: $this->load->view("\144\151\x73\141\x62\154\x65\137\154\157\x67\x69\156", $data); goto cxAh8; tYlx_: hEL_r: goto uFGiY; E_a6n: $data["\x70\x65\156\x67\x61\x77\x61\163"] = $this->cbt->getAllPengawas($tp->id_tp, $smt->id_smt, null, null); goto ySa0z; lgAe0: fvhce: goto w49YN; nEh63: $data["\155\145\156\165"] = $this->menu_siswa_box(); goto vk2oV; F35tp: NbO6a: goto B0U3L; ZNQM9: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto KTUqQ; B0U3L: $siswa = $this->dashboard->getDataSiswa($user->username, $tp->id_tp, $smt->id_smt); goto vucOJ; UwFsi: $data["\164\160"] = $this->dashboard->getTahun(); goto tKjjn; uFGiY: goto mgxpt; goto F35tp; z_KZc: $data["\155\141\x70\145\154\x73"] = $this->master->getAllMapel(); goto G8o1R; aDiCR: $this->load->view("\155\x65\155\142\145\x72\163\57\x67\x75\162\165\57\x74\x65\155\160\154\x61\164\x65\x73\x2f\150\145\x61\144\x65\x72", $data); goto d7Mjp; G8o1R: $tglJadwals = $this->cbt->getAllJadwalByJenis(null, $tp->id_tp, $smt->id_smt); goto Ab6v8; u2pL6: NTVFa: goto dOCdb; SlkbL: $data["\x73\x69\163\x77\x61"] = $siswa; goto nEh63; HQJXS: FO31x: goto THjf0; d7Mjp: $this->load->view("\155\x65\155\x62\145\162\163\x2f\x67\165\x72\165\x2f\x64\141\163\x68\x62\157\x61\162\x64"); goto Dr9iW; lwlp2: $this->load->view("\137\x74\x65\155\160\154\141\164\x65\x73\x2f\144\141\163\x68\142\157\141\162\x64\57\x5f\x66\x6f\x6f\x74\145\162"); goto dusZU; mSBC7: $data["\147\x75\162\165"] = $guru; goto aDiCR; HwIk0: $smt = $this->dashboard->getSemesterActive(); goto UwFsi; UwDFh: $kbms = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt); goto Ef1FT; hUafG: $tkn["\x65\154\141\160\x73\145\144"] = "\x30\60\72\x30\60\x3a\x30\x30"; goto yV5wf; Ef1FT: foreach ($kbms as $kbm) { $kbm->istirahat = unserialize($kbm->istirahat); aFttT: } goto kkISB; w49YN: $data["\153\x65\154\141\163\145\163"] = $kelass; goto MwMZ7; MkTcj: VQcig: goto a5Ncd; qm8UN: $this->load->view("\155\x65\x6d\142\145\x72\163\x2f\x73\x69\x73\167\x61\x2f\144\x61\x73\x68\x62\157\x61\x72\x64"); goto vkl11; b5oty: $data["\x70\x72\157\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto Os60Q; zvXgI: $data = ["\x75\x73\145\x72" => $user, "\x6a\165\144\x75\154" => "\x42\145\x72\x61\x6e\x64\x61", "\x73\x75\142\x6a\x75\144\x75\154" => "\x48\x61\154\x61\x6d\x61\156\40\x55\x74\141\x6d\x61", "\163\145\164\x74\x69\156\x67" => $setting]; goto sUNVb; tA6dU: if ($guru == null) { goto ALG5W; } goto gbUli; yOK_F: $token = $this->cbt->getToken(); goto n0MYH; CxPY6: foreach ($jadwal as $key => $item) { $arrJadwalKelas[$item->id_kelas][$item->jam_ke] = $item; P0hoU: } goto HzDDl; q_gLr: $user = $this->ion_auth->user()->row(); goto zvXgI; vkl11: $this->load->view("\x6d\x65\x6d\x62\145\x72\163\57\163\151\163\167\141\57\164\145\x6d\160\154\141\164\145\x73\57\x66\157\157\164\x65\162"); goto wdgYL; aAAlG: mgxpt: goto Q3gHu; sUNVb: $tp = $this->dashboard->getTahunActive(); goto HwIk0; WAr63: $data["\165\152\x69\x61\x6e\x5f\142\157\170"] = $this->ujian_box(); goto b5oty; kkISB: RuScC: goto DWuW_; NJaXi: $jadwal = $this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, null, $day); goto UwDFh; gDgeB: goto hEL_r; goto u2pL6; zcBhj: Lkfsk: goto aAAlG; vk2oV: $data["\x6b\142\155\x73"] = $arrKbm[$siswa->id_kelas] ?? null; goto r0KxX; ag3Uu: $this->load->view("\155\145\x6d\142\x65\162\163\57\163\x69\163\167\x61\x2f\164\145\155\160\154\141\x74\145\x73\57\150\145\141\x64\145\x72", $data); goto qm8UN; cxAh8: gYQov: goto tYlx_; lT1n0: $tkn["\141\x75\164\157"] = "\60"; goto btlWq; HFXOB: $data["\x61\144\x61\137\x75\x6a\151\141\x6e"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\55\x64")); goto f8Eht; xMKok: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto tA6dU; f8Eht: $data["\x6a\x61\x64\x77\141\154\x73"] = $arrJadwalKelas; goto sAFY9; dOCdb: $data["\x69\x6e\146\157\x5f\x62\157\170"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt); goto WAr63; eFsBe: if ($this->ion_auth->is_admin()) { goto NTVFa; } goto Ge3VA; HzDDl: CjoIM: goto EK1rL; m6kOl: $kelass = []; goto tYPKY; DWuW_: $arrJadwalKelas = []; goto CxPY6; NGvX3: $data["\x75\152\151\x61\x6e\137\142\x6f\170"] = $this->ujian_box(); goto mSBC7; MwMZ7: $day = date("\116", strtotime(date("\131\55\155\55\144"))); goto NJaXi; dusZU: goto hEL_r; goto h9Ci2; gbUli: $data["\x69\x6e\146\x6f\x5f\x62\x6f\x78"] = $this->admin_box($setting, $tp->id_tp, $smt->id_smt); goto NGvX3; e8sf5: qP7mm: goto XuZBt; XlYol: $this->load->view("\x64\x61\163\150\142\x6f\141\x72\x64"); goto lwlp2; CjjmT: $data["\x67\165\x72\165\163"] = $this->dropdown->getAllGuru(); goto eFsBe; h9Ci2: WTDT0: goto xMKok; FfzKe: $setting = $this->dashboard->getSetting(); goto q_gLr; gj4GA: ALG5W: goto fXXed; FI2N5: foreach ($kbms as $key => $item) { $arrKbm[$item->id_kelas] = $item; Gxtn2: } goto HQJXS; tKjjn: $data["\164\x70\x5f\141\143\x74\151\166\145"] = $tp; goto ZNQM9; n0MYH: $tkn["\164\157\x6b\145\x6e"] = ''; goto lT1n0; Ab6v8: foreach ($tglJadwals as $tgl => $jadwalss) { goto wak2b; ikWx6: DTvG3: goto eahTw; wak2b: foreach ($jadwalss as $mpl => $jadwals) { goto sTGrR; sTGrR: foreach ($jadwals as $jadwal) { goto NpnrH; TXPWK: vOnqy: goto EUEgv; R6FTa: foreach ($jadwal->bank_kelas as $kb) { goto EQoH6; vDAW8: nbvxc: goto FoigO; yPx9T: $p = $this->cbt->getKelasUjian($kb["\153\145\154\141\163\x5f\x69\144"]); goto bdP3I; EQoH6: if (!($kb["\x6b\x65\154\x61\x73\x5f\151\x64"] != '')) { goto RJPBi; } goto yPx9T; JUyZ9: RJPBi: goto vDAW8; bdP3I: $jadwal->peserta[] = $p; goto JUyZ9; FoigO: } goto lNWvw; NpnrH: $jadwal->bank_kelas = unserialize($jadwal->bank_kelas); goto R6FTa; lNWvw: eIE0d: goto TXPWK; EUEgv: } goto kTGBZ; gnpku: yAomu: goto uguoE; kTGBZ: gkZi3: goto gnpku; uguoE: } goto cTNUp; cTNUp: m3IDq: goto ikWx6; eahTw: } goto e8sf5; ySa0z: $data["\162\x75\141\x6e\x67\163"] = $this->cbt->getDistinctRuang($tp->id_tp, $smt->id_smt, []); goto CjjmT; tYPKY: if (!($tp != null)) { goto fvhce; } goto FPxIB; Q3gHu: } public function checkTokenJadwal() { goto gGiHl; bkphF: $token->now = date("\x64\55\x6d\x2d\x59\40\x48\x3a\151\x3a\163"); goto Ilepf; F9cb4: $this->output_json($data); goto rpKxT; gGiHl: $data["\141\x64\x61\x5f\x75\x6a\x69\x61\156"] = $this->cbt->getDataJadwalByTgl(date("\131\x2d\x6d\55\x64")); goto Mi_m7; Mi_m7: $token = $this->cbt->getToken(); goto bkphF; Ilepf: $data["\164\157\x6b\x65\x6e"] = $token; goto F9cb4; rpKxT: } public function output_json($data, $encode = true) { goto gzRmB; gzRmB: if (!$encode) { goto dUO_h; } goto SiP0u; iSipB: $this->output->set_content_type("\141\x70\160\154\151\x63\x61\x74\151\157\x6e\57\152\163\157\x6e")->set_output($data); goto m5ELs; JBVc0: dUO_h: goto iSipB; SiP0u: $data = json_encode($data); goto JBVc0; m5ELs: } public function gantiTahun() { goto e0rN4; CFX5f: $this->output_json($data); goto uHBrZ; AUo0C: goto rNlAg; goto SHW1C; LrfSR: $data["\x73\x74\141\164\165\163"] = true; goto gt2Iz; VRcGo: if ($id_tp === $aktif) { goto KotF8; } goto FqnkG; g_Iak: $id_tp = $this->input->post("\151\144\x5f\x74\x70\133" . $i . "\135", true); goto vu8Cb; IXUNu: $rows = count($this->input->post("\x74\x61\x68\x75\156", true)); goto umV_R; FqnkG: $active = 0; goto AUo0C; H7Cir: VApF4: goto Q2Cm2; BFGVQ: $data["\x75\x70\144\141\164\x65"] = $update; goto LrfSR; mB_1N: goto dYa_1; goto Zs79S; x9Jjr: dYa_1: goto My7kq; SHW1C: KotF8: goto Xip_3; umV_R: $i = 0; goto x9Jjr; zxWlj: rNlAg: goto Kxh0L; gt2Iz: $this->logging->saveLog(4, "\x6d\x65\156\x67\147\141\x6e\164\x69\40\164\x61\x68\x75\156\40\141\x6a\x61\x72\x61\x6e\x20\x61\x6b\x74\x69\146"); goto CFX5f; My7kq: if (!($i <= $rows)) { goto qNpfo; } goto g_Iak; Zs79S: qNpfo: goto grFsi; vu8Cb: $tahun = $this->input->post("\164\x61\150\x75\156\x5b" . $i . "\135", true); goto VRcGo; grFsi: $this->dashboard->update("\x6d\141\163\164\145\x72\x5f\164\x70", $update, "\x69\x64\137\164\x70", null, true); goto BFGVQ; Kxh0L: $update[] = array("\x69\x64\x5f\164\x70" => $id_tp, "\x74\141\150\165\x6e" => $tahun, "\x61\143\164\151\166\145" => $active); goto H7Cir; e0rN4: $aktif = $this->input->post("\141\x63\164\x69\x76\145", true); goto IXUNu; Xip_3: $active = 1; goto zxWlj; Q2Cm2: $i++; goto mB_1N; uHBrZ: } public function gantiSemester() { goto mdTNJ; Fkae9: goto e5htD; goto FOP9n; ioS1e: sLjjf: goto SaIsf; BZifQ: $smt = $this->input->post("\x73\155\x74\133" . $i . "\x5d", true); goto OBung; PEFSL: $rows = count($this->input->post("\x73\155\x74", true)); goto DeKKH; UIhRQ: $this->output_json($data); goto ZVD1g; SKkz9: $active = 1; goto sPx8y; dj4jY: e5htD: goto Z51G4; WFXEH: $this->logging->saveLog(4, "\155\145\x6e\147\147\141\156\x74\151\x20\x73\x65\155\x65\163\164\x65\x72\x20\141\x6b\164\151\x66"); goto UIhRQ; FOP9n: z2OAJ: goto KRWuO; geF0n: $update[] = array("\151\144\137\x73\155\164" => $id_smt, "\163\155\x74" => $smt, "\141\x63\x74\151\166\x65" => $active); goto ioS1e; Z51G4: if (!($i <= $rows)) { goto z2OAJ; } goto QgACj; SmRLN: $data["\163\x74\x61\164\165\163"] = true; goto WFXEH; KY9Rp: x9od_: goto SKkz9; OBung: if ($id_smt === $aktif) { goto x9od_; } goto qpfhd; C1szQ: $data["\x75\160\x64\x61\164\145"] = $update; goto SmRLN; SaIsf: $i++; goto Fkae9; sPx8y: prLit: goto geF0n; mdTNJ: $aktif = $this->input->post("\141\x63\x74\x69\x76\x65", true); goto PEFSL; DeKKH: $i = 1; goto dj4jY; KRWuO: $this->dashboard->update("\x6d\141\163\x74\145\162\x5f\x73\x6d\x74", $update, "\151\144\x5f\x73\x6d\164", null, true); goto C1szQ; nZIzk: goto prLit; goto KY9Rp; QgACj: $id_smt = $this->input->post("\x69\144\x5f\x73\155\x74\133" . $i . "\135", true); goto BZifQ; qpfhd: $active = 0; goto nZIzk; ZVD1g: } public function getNotifikasi() { } public function getLog($limit) { $this->output_json($this->logging->loadAktifitas($limit)); } public function hapusLog() { goto LA4_y; VfVQO: goto pC55V; goto j0V2P; LA4_y: $this->db->trans_start(); goto irsjP; T4lvL: $this->output_json($deleted); goto vqxlb; CmeaY: $deleted = ["\163\x74\x61\164\x75\x73" => true, "\x6d\x65\163\163\x61\147\x65" => "\x62\x65\x72\150\x61\163\151\x6c"]; goto uUNTh; irsjP: if ($this->db->empty_table("\154\x6f\x67")) { goto K3dVH; } goto PvBJF; j0V2P: K3dVH: goto CmeaY; O5QXn: $this->db->trans_complete(); goto T4lvL; uUNTh: pC55V: goto O5QXn; PvBJF: $deleted = ["\163\164\141\x74\x75\x73" => false, "\x6d\x65\x73\163\x61\147\145" => "\x67\x61\147\141\154"]; goto VfVQO; vqxlb: } public function getLogSiswa($limit) { $this->output_json($this->logging->loadAktifitasSiswa($limit)); } public function getPengumuman($for) { $this->output_json($this->dashboard->loadPengumuman($for)); } public function getJadwalHariIni($id_kelas, $id_hari) { goto Cqo0a; JzffB: $this->output_json($this->dashboard->loadJadwalHariIni($tp->id_tp, $smt->id_smt, $id_kelas, $id_hari)); goto AmfUL; M4jjF: $smt = $this->dashboard->getSemesterActive(); goto JzffB; Cqo0a: $tp = $this->dashboard->getTahunActive(); goto M4jjF; AmfUL: } public function getJadwalKbm($id_kelas) { goto X1LdZ; X1LdZ: $tp = $this->dashboard->getTahunActive(); goto K5oWk; K5oWk: $smt = $this->dashboard->getSemesterActive(); goto x0qAg; gBgOI: $this->output_json(array("\x6a\141\144\x77\x61\154" => $jadwal, "\x69\x73\x74\151\x72\141\x68\141\x74" => $istirahat)); goto vtPMi; x0qAg: $jadwal = $this->dashboard->getJadwalKbm($tp->id_tp, $smt->id_smt, $id_kelas); goto jE8JG; jE8JG: $istirahat = unserialize($jadwal->istirahat); goto gBgOI; vtPMi: } }
