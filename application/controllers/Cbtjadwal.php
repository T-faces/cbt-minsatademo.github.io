<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbtjadwal extends CI_Controller { public function __construct() { goto GqSid; O5hsI: redirect("\141\x75\x74\x68"); goto DetbE; KXxSq: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\162\165"))) { goto C4n1e; } goto srXpD; L6d5C: $this->load->library(["\144\141\x74\x61\x74\141\x62\154\x65\x73", "\x66\x6f\162\155\137\166\141\154\x69\x64\x61\x74\151\157\x6e"]); goto B76DJ; XshrT: if (!$this->ion_auth->logged_in()) { goto sOrJK; } goto KXxSq; B76DJ: $this->form_validation->set_error_delimiters('', ''); goto yrKsd; ADF2C: sOrJK: goto O5hsI; srXpD: show_error("\x48\141\156\171\x61\x20\101\x64\x6d\x69\156\x69\163\164\162\x61\x74\157\x72\x20\x64\141\156\x20\147\165\162\x75\x20\171\141\x6e\x67\x20\144\x69\x62\x65\162\151\x20\x68\x61\x6b\x20\x75\156\x74\165\153\x20\x6d\145\156\x67\x61\x6b\x73\x65\163\40\x68\x61\154\x61\x6d\141\156\40\151\156\151\x2c\40\x3c\141\40\150\x72\145\146\75\42" . base_url("\144\141\x73\150\142\157\141\x72\x64") . "\x22\76\x4b\x65\155\x62\141\x6c\x69\x20\153\x65\x20\x6d\145\156\165\x20\141\x77\x61\154\74\57\141\x3e", 403, "\101\x6b\163\145\x73\x20\x54\145\x72\x6c\141\x72\141\x6e\147"); goto USJ2b; DetbE: kn2D3: goto L6d5C; GqSid: parent::__construct(); goto XshrT; USJ2b: C4n1e: goto kC_vd; kC_vd: goto kn2D3; goto ADF2C; yrKsd: } public function output_json($data, $encode = true) { goto UFCtN; CRNzv: YJT42: goto JTCcp; nQsgf: $data = json_encode($data); goto CRNzv; JTCcp: $this->output->set_content_type("\x61\160\x70\x6c\x69\143\141\164\151\x6f\156\57\152\163\157\x6e")->set_output($data); goto NAopr; UFCtN: if (!$encode) { goto YJT42; } goto nQsgf; NAopr: } public function index() { goto Gq23_; wEMx6: $level = $lvl == null ? "\x30" : $lvl; goto wCogY; D5VXz: $setting = $this->dashboard->getSetting(); goto G9fJL; xBiwS: x8TOh: goto uzC9d; gdXpE: $smt = $this->dashboard->getSemesterActive(); goto LKJ8b; NUQc8: $data["\153\x65\x6c\x61\163"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto aZOYP; NWZqn: $data["\x67\x75\x72\x75"] = $guru; goto cBtb6; AeaFe: $data["\x69\x64\x5f\154\x65\x76\145\x6c"] = null; goto QN6sV; Iw7kh: goto x8TOh; goto J3v0c; MSiUV: LtI7m: goto WQv8W; vUazK: goto x8TOh; goto Xlpf9; SB0X6: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto NWZqn; B1Ln2: $id_mapel = $this->input->get("\x69\144"); goto PNynh; BAKz9: $this->load->model("\x44\x72\157\160\144\x6f\x77\156\x5f\155\x6f\x64\x65\x6c", "\144\162\157\x70\144\157\x77\156"); goto igJol; zUqGv: if ($type == "\62") { goto wrQvr; } goto m3yX5; t6eHh: $data["\x69\144\137\154\145\x76\145\x6c"] = ''; goto Iw7kh; aZOYP: if ($this->ion_auth->is_admin()) { goto JIERl; } goto SB0X6; vzJYn: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto YixpJ; r6HTs: $id_level = $this->input->get("\151\144"); goto i3_3T; XP1aV: Y_FAb: goto HCKPM; Uz5e6: $data["\x73\145\163\x69\163"] = $this->dropdown->getAllSesi(); goto CmgLM; afGr2: pgm0i: goto Wmizx; dP34a: l9TF3: goto uHPaw; zlCBG: goto klUT_; goto XP1aV; JX7oB: foreach ($terpakai as $idj => $rows) { $jadwal_terpakai[$idj] = count($rows); ZDkfj: } goto LlrV7; a6sg4: goto LtI7m; goto w21s6; b073K: u8h1V: goto ydjUN; dU3as: $data["\151\144\x5f\x6d\x61\x70\145\154"] = ''; goto dsmgv; yYvM2: F9c9w: goto fo3CA; LKJ8b: $data["\164\160"] = $this->dashboard->getTahun(); goto upomV; juwbt: $data["\x6a\x61\x64\167\x61\x6c\163"] = $this->cbt->getAllDataJadwal($guru->id_guru, null, $id_level); goto jO9Pg; LlrV7: EVT3l: goto IVVpo; dflSF: $data["\151\144\137\147\x75\x72\165"] = null; goto Gd10R; jO9Pg: $data["\151\x64\137\147\x75\x72\165"] = ''; goto dU3as; o7iCM: $data["\x6a\141\144\x77\x61\154\x73"] = $this->cbt->getAllDataJadwal($id_guru); goto WNmGT; Wmizx: $data["\x6d\x61\x70\145\154\x73"] = $arrMapel; goto GaYaA; xqYQZ: $data["\154\145\x76\145\154"] = $level; goto Q0FOC; jgsQC: $data["\154\145\x76\145\x6c\x73"] = $this->dropdown->getAllLevel($setting->jenjang); goto NUQc8; is4IV: $terpakai = $this->cbt->getJadwalTerpakai(); goto JiIP5; XFcd4: $data["\151\x64\x5f\154\145\x76\x65\x6c"] = null; goto zlCBG; i3_3T: $data["\151\x64\x5f\154\x65\x76\x65\154"] = $id_level; goto kiWcJ; IVVpo: $data["\164\157\164\141\x6c\137\163\x69\x73\x77\141"] = $jadwal_terpakai; goto WY5NB; ju9I4: $tp = $this->dashboard->getTahunActive(); goto gdXpE; ydjUN: $id_mapel = $this->input->get("\x69\144"); goto d5eNy; V4gMv: $data["\151\x64\x5f\154\145\166\145\x6c"] = $id_level; goto juwbt; U9P0h: if ($type == "\x33") { goto F9c9w; } goto J4pl5; upomV: $data["\164\x70\137\x61\x63\x74\x69\x76\145"] = $tp; goto vzJYn; w21s6: JIERl: goto d084n; kiWcJ: $data["\152\141\144\x77\141\x6c\x73"] = $this->cbt->getAllDataJadwal(null, null, $id_level); goto zfTHA; O7jnV: $data["\x69\144\137\154\x65\166\145\154"] = null; goto C6MtV; Xlpf9: wrQvr: goto B1Ln2; d5eNy: $data["\151\x64\137\x6d\x61\160\x65\x6c"] = $id_mapel; goto Z4wS9; cBtb6: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto iY0Qg; Q1uNI: $data["\x66\x69\x6c\164\x65\x72\163"] = ["\60" => "\x53\x65\155\x75\x61", "\61" => "\107\165\162\165", "\62" => "\115\141\x70\145\x6c", "\x33" => "\x4c\145\166\145\154"]; goto puXtf; lzglV: $data["\151\144\137\x6c\145\x76\x65\x6c"] = null; goto UpyG6; iLgpc: if ($type == "\60") { goto l9TF3; } goto w6bwI; Gq23_: $this->load->model("\x43\x62\164\x5f\x6d\x6f\144\x65\x6c", "\143\142\x74"); goto tBgE1; CmgLM: $data["\152\x65\x6e\151\x73"] = $this->cbt->getAllJenisUjian(); goto V_ev5; RpCpL: if ($type == "\60") { goto Y_FAb; } goto npKEf; gN8CY: $data["\x69\144\137\x66\151\x6c\164\145\x72"] = $type == null ? '' : $type; goto RpCpL; y16Ll: $data["\152\155\154\115\141\160\145\x6c"] = []; goto xqYQZ; QN6sV: goto x8TOh; goto dP34a; Z4wS9: $data["\x6a\141\x64\167\141\154\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru, $id_mapel); goto IxeiZ; ivmxx: $mode = $this->input->get("\155\157\x64\145"); goto Rl15b; IxeiZ: $data["\x69\144\137\x67\x75\x72\165"] = ''; goto hXSZn; oMKXy: $this->load->view("\143\142\x74\57\x6a\x61\x64\167\141\x6c\x2f\x64\x61\164\141"); goto rNwxB; V_ev5: $data["\x6a\x61\x64\x77\141\x6c"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto vXCbO; C6MtV: goto klUT_; goto b073K; ha_D5: $arrMapel = []; goto a9U5m; zfTHA: $data["\x69\x64\137\147\x75\x72\x75"] = ''; goto omEw8; omEw8: $data["\x69\144\137\x6d\x61\160\x65\154"] = ''; goto xBiwS; DWBJC: $this->load->view("\x63\142\x74\x2f\x6a\141\144\167\141\154\57\x64\x61\x74\141"); goto IaLPQ; JiIP5: $jadwal_terpakai = []; goto JX7oB; Us6I5: $data["\151\x64\x5f\147\165\x72\x75"] = null; goto W7Yal; Gd10R: $data["\x69\144\x5f\155\x61\160\x65\154"] = null; goto lzglV; yK0uO: $data["\155\157\x64\145"] = $mode == null ? "\x31" : $mode; goto vvkeZ; J3v0c: RqpbI: goto r6HTs; VBry0: $data["\151\144\137\x6d\x61\160\145\x6c"] = null; goto XFcd4; WY5NB: wdbuc: goto A7a3U; X8D8E: $this->load->view("\155\x65\155\x62\145\x72\x73\57\x67\165\x72\x75\x2f\164\x65\x6d\160\154\141\x74\145\163\57\x68\145\141\144\x65\162", $data); goto oMKXy; m3yX5: if ($type == "\63") { goto RqpbI; } goto Us6I5; QSbpY: $data["\x69\x64\137\x67\x75\x72\165"] = ''; goto t6eHh; w6bwI: if ($type == "\61") { goto aSLUf; } goto zUqGv; hXSZn: $data["\x69\144\x5f\154\x65\166\145\154"] = ''; goto tP6i0; y0yJs: aSLUf: goto NDudZ; fo3CA: $id_level = $this->input->get("\151\144"); goto V4gMv; nsoHZ: $this->load->model("\x4b\x65\x6c\x61\163\x5f\x6d\x6f\x64\145\154", "\x6b\145\154\x61\163"); goto BAKz9; iY0Qg: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto ha_D5; mdnad: $data["\155\x61\160\x65\154\x73"] = $this->dropdown->getAllMapel(); goto Q1uNI; d084n: $data["\x70\x72\157\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto r6Z9B; UpyG6: goto x8TOh; goto y0yJs; mRVh_: $data["\x69\x64\x5f\x6d\141\160\145\x6c"] = null; goto O7jnV; GaYaA: $data["\x66\x69\x6c\x74\x65\x72\163"] = ["\60" => "\123\x65\155\x75\141", "\x32" => "\115\141\160\x65\154", "\63" => "\114\x65\166\x65\154"]; goto gN8CY; a9U5m: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; YJjdY: } goto afGr2; YixpJ: $data["\163\155\x74\137\141\143\164\151\166\x65"] = $smt; goto ivmxx; uHPaw: $data["\x6a\x61\x64\x77\x61\154\163"] = $this->cbt->getAllDataJadwal(); goto dflSF; tP6i0: goto klUT_; goto yYvM2; vXCbO: $data["\152\155\x6c\111\x73\x74"] = []; goto y16Ll; Q0FOC: if (!($lvl != null)) { goto wdbuc; } goto is4IV; aZihu: $data["\x69\x64\137\154\x65\x76\x65\154"] = ''; goto vUazK; HCKPM: $data["\152\x61\144\167\x61\154\x73"] = $this->cbt->getAllDataJadwal($guru->id_guru); goto DbNG6; tBgE1: $this->load->model("\x44\141\x73\x68\142\x6f\141\162\144\137\155\x6f\144\x65\x6c", "\x64\141\x73\x68\142\x6f\x61\x72\144"); goto nsoHZ; DbNG6: $data["\151\x64\137\147\165\x72\x75"] = null; goto mRVh_; uzC9d: $this->load->view("\x5f\x74\x65\155\160\x6c\x61\164\x65\x73\x2f\144\141\163\x68\142\157\141\162\144\x2f\137\x68\x65\x61\x64\x65\x72", $data); goto DWBJC; Rd0tr: $data["\x69\144\x5f\147\x75\162\165"] = $id_guru; goto o7iCM; wCogY: $user = $this->ion_auth->user()->row(); goto D5VXz; rNwxB: $this->load->view("\155\x65\x6d\142\x65\162\163\57\147\x75\162\165\57\164\x65\x6d\160\154\x61\164\x65\163\57\x66\157\x6f\164\145\162"); goto a6sg4; G9fJL: $data = ["\x75\x73\145\x72" => $user, "\x6a\x75\x64\165\x6c" => "\x4a\141\144\x77\x61\x6c\x20\120\x65\156\151\154\141\x69\x61\x6e", "\163\x75\142\x6a\165\x64\x75\154" => "\x50\110\x2f\120\124\x53\57\x50\101\x54\x2f\125\x53\x42\x4b", "\x73\x65\164\164\151\156\x67" => $setting]; goto ju9I4; puXtf: $data["\x69\x64\137\146\x69\154\164\x65\x72"] = $type == null ? '' : $type; goto iLgpc; Rl15b: $type = $this->input->get("\x74\x79\x70\145"); goto yK0uO; vvkeZ: $data["\162\x75\141\156\x67\163"] = $this->cbt->getAllRuang(); goto Uz5e6; WNmGT: $data["\x69\x64\137\x6d\141\x70\145\x6c"] = ''; goto aZihu; NDudZ: $id_guru = $this->input->get("\151\x64"); goto Rd0tr; IaLPQ: $this->load->view("\137\x74\145\x6d\160\x6c\x61\x74\145\163\x2f\x64\x61\163\150\142\x6f\141\x72\144\57\137\x66\157\157\x74\145\162"); goto MSiUV; QtpKR: $data["\x6a\141\144\167\x61\154\x73"] = $this->cbt->getAllDataJadwal(null, $id_mapel); goto QSbpY; npKEf: if ($type == "\62") { goto u8h1V; } goto U9P0h; dsmgv: klUT_: goto X8D8E; A7a3U: $data["\141\144\141\137\165\152\x69\141\156"] = $this->cbt->getDataJadwalByTgl(date("\131\55\x6d\55\x64")); goto jgsQC; PNynh: $data["\x69\x64\x5f\155\141\160\145\154"] = $id_mapel; goto QtpKR; r6Z9B: $data["\147\x75\x72\x75\x73"] = $this->dropdown->getAllGuru(); goto mdnad; J4pl5: $data["\151\144\x5f\147\x75\162\x75"] = null; goto VBry0; W7Yal: $data["\151\x64\x5f\155\141\160\x65\x6c"] = null; goto AeaFe; igJol: $lvl = $this->input->get("\154\x65\x76\x65\154", true); goto wEMx6; WQv8W: } public function add($id_jadwal) { goto XLuNk; IjahT: $this->load->view("\155\x65\155\x62\145\162\x73\57\x67\x75\x72\165\57\x74\x65\x6d\x70\154\x61\164\145\x73\x2f\150\x65\141\144\145\162", $data); goto Q3_eq; XLuNk: $this->load->model("\x43\142\164\137\x6d\x6f\144\145\154", "\x63\x62\164"); goto JWJ76; Ij1EZ: $enable = $this->input->get("\145\156\141\x62\x6c\145", true); goto HVhyG; x3JUH: goto RpY4C; goto bWeSq; ysSWK: $gurus = $this->dropdown->getAllGuru(); goto WfAz8; uW3zw: $data["\x74\160"] = $this->dashboard->getTahun(); goto PaC1L; XNrQT: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto SSEDv; gRhJy: $data["\144\151\163\x61\142\x6c\145\137\x6f\160\163\151"] = $enable != null && $enable == 1; goto C2HyU; kb4M5: $this->load->model("\x44\162\x6f\x70\144\157\167\156\x5f\x6d\x6f\x64\145\x6c", "\x64\x72\157\160\144\157\x77\x6e"); goto Ij1EZ; V9cjj: $data["\x67\x75\162\165"] = $guru; goto ZomgQ; SSEDv: $data["\163\155\x74\137\x61\x63\164\151\x76\x65"] = $smt; goto pQ2Rg; AelH1: $data["\147\x75\x72\165"] = $gurus; goto UN2Wd; HVhyG: $user = $this->ion_auth->user()->row(); goto gR0YJ; g1uih: aZu3P: goto f6sGD; pQ2Rg: if ($id_jadwal == 0) { goto aZu3P; } goto keyun; NbUp7: $data["\x70\162\x6f\146\x69\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto AelH1; JWJ76: $this->load->model("\104\x61\163\x68\142\157\141\x72\144\x5f\155\157\x64\145\154", "\144\x61\163\x68\x62\x6f\141\x72\144"); goto rrg1h; XmqCd: $tp = $this->dashboard->getTahunActive(); goto kbgE8; ZomgQ: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto PDdnj; rrg1h: $this->load->model("\x4b\145\154\141\163\137\x6d\x6f\144\x65\x6c", "\153\x65\x6c\x61\163"); goto kb4M5; qurZu: $data["\x6a\x65\x6e\151\x73"] = $this->cbt->getAllJenisUjian(); goto layAr; gR0YJ: $data = ["\x75\163\145\x72" => $user, "\152\x75\x64\x75\154" => $id_jadwal == 0 ? "\x54\141\x6d\x62\x61\150\x20\112\141\144\x77\x61\154\40\125\152\x69\x61\156" : "\x45\144\151\x74\40\x4a\x61\144\x77\141\154\40\125\x6a\x69\x61\x6e", "\163\165\142\x6a\x75\144\165\154" => "\112\x61\x64\x77\141\154", "\163\145\164\164\x69\x6e\147" => $this->dashboard->getSetting()]; goto XmqCd; STR3I: $data["\163\145\x73\151\x73"] = $this->dropdown->getAllSesi(); goto qurZu; yqr6i: RpY4C: goto d38Hc; PaC1L: $data["\x74\160\137\x61\x63\x74\x69\x76\x65"] = $tp; goto XNrQT; C02vR: goto MlV_L; goto g1uih; f2oeV: foreach ($mapel as $m) { $arrMapel[$m->id_mapel] = $m->nama_mapel; XcPoM: } goto V4XhO; D154J: $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\164\x65\x73\57\144\x61\163\x68\x62\157\141\x72\144\57\x5f\146\x6f\x6f\164\145\x72"); goto yqr6i; jysed: $data["\155\141\160\145\154"] = $arrMapel; goto IjahT; cvlm7: $arrMapel = []; goto f2oeV; V4XhO: MKJKq: goto jysed; f6sGD: $data["\x6a\x61\144\167\x61\154"] = json_decode(json_encode($this->cbt->dummyJadwal())); goto t6NlN; C2HyU: if ($this->ion_auth->is_admin()) { goto YnrSy; } goto rVPUm; WfAz8: $data["\162\165\141\156\x67\163"] = $this->cbt->getAllRuang(); goto STR3I; keyun: $data["\152\141\144\x77\x61\x6c"] = $this->cbt->getJadwalById($id_jadwal); goto C02vR; kbgE8: $smt = $this->dashboard->getSemesterActive(); goto uW3zw; UN2Wd: $data["\x6d\141\160\x65\154"] = $this->dropdown->getAllMapel(); goto baI0c; PDdnj: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto cvlm7; t6NlN: MlV_L: goto ysSWK; Q3_eq: $this->load->view("\x63\142\x74\57\x6a\x61\x64\x77\x61\x6c\57\141\144\x64"); goto MdBmN; baI0c: $this->load->view("\137\164\x65\155\160\x6c\141\x74\145\163\x2f\144\x61\163\150\x62\x6f\x61\162\x64\x2f\137\150\145\141\x64\x65\x72", $data); goto Z817r; layAr: $data["\x6b\145\x6c\141\x73"] = $this->cbt->getKelas($tp->id_tp, $smt->id_smt); goto gRhJy; MdBmN: $this->load->view("\x6d\145\x6d\x62\145\162\x73\x2f\147\x75\x72\165\57\x74\x65\155\160\x6c\x61\x74\145\163\57\x66\157\157\164\x65\x72"); goto x3JUH; Z817r: $this->load->view("\x63\x62\164\x2f\x6a\141\144\x77\x61\154\57\141\x64\144"); goto D154J; rVPUm: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto V9cjj; bWeSq: YnrSy: goto NbUp7; d38Hc: } public function getBankMapel($id_mapel) { goto NN1ck; VSQ0b: foreach ($banks as $key => $bank) { goto tFkYf; pC1Rx: $ada5 = $num5 == (int) $bank->tampil_esai; goto Ninfl; BYvqx: $ada1 = $num1 == (int) $bank->tampil_pg; goto j2r7S; gWAtC: $ada4 = $num4 == (int) $bank->tampil_isian; goto pC1Rx; kH1Ht: $num4 = isset($cek_soal["\x34"]) ? count($cek_soal["\x34"]) : 0; goto a8_Rh; KXo2P: LTPYn: goto httNq; BHVAk: $filtered[$key] = $bank->bank_kode; goto NLold; oJUEu: $num2 = isset($cek_soal["\x32"]) ? count($cek_soal["\x32"]) : 0; goto LVZBp; LVZBp: $num3 = isset($cek_soal["\63"]) ? count($cek_soal["\x33"]) : 0; goto kH1Ht; a8_Rh: $num5 = isset($cek_soal["\x35"]) ? count($cek_soal["\65"]) : 0; goto BYvqx; xPNSL: $num1 = isset($cek_soal["\61"]) ? count($cek_soal["\61"]) : 0; goto oJUEu; Ninfl: if (!($ada1 && $ada2 && $ada3 && $ada4 && $ada5)) { goto SMcza; } goto BHVAk; j2r7S: $ada2 = $num2 == (int) $bank->tampil_kompleks; goto ypqiy; NLold: SMcza: goto KXo2P; tFkYf: $cek_soal = $this->cbt->getJumlahJenisSoal($key); goto xPNSL; ypqiy: $ada3 = $num3 == (int) $bank->tampil_jodohkan; goto gWAtC; httNq: } goto z0zgR; NN1ck: $this->load->model("\103\142\164\137\155\157\x64\145\x6c", "\143\x62\x74"); goto OqY23; z0zgR: UIj0Z: goto Oaoue; OqY23: $this->load->model("\104\141\163\150\142\157\x61\x72\144\x5f\x6d\157\144\145\154", "\x64\x61\163\150\142\157\x61\x72\144"); goto tuIL3; YygX2: $filtered = []; goto VSQ0b; Oaoue: $this->output_json($filtered); goto WQx4G; egbO8: $banks = $this->cbt->getAllBankSoalByMapel($tp->id_tp, $smt->id_smt, $id_mapel); goto YygX2; OV8ee: $smt = $this->dashboard->getSemesterActive(); goto egbO8; tuIL3: $tp = $this->dashboard->getTahunActive(); goto OV8ee; WQx4G: } public function saveJadwal() { goto kYXyM; MfYHc: $this->load->model("\x44\x61\163\x68\x62\x6f\141\162\144\137\x6d\x6f\144\145\154", "\144\141\x73\x68\142\157\x61\x72\144"); goto ypeLP; EO27I: if (!$id) { goto Rx5lc; } goto gMOV3; AEX5W: Rx5lc: goto yKWUk; ourqg: $data["\163\165\143\143\x65\x73\163"] = $status; goto S_r42; gMOV3: $this->logging->saveLog(4, "\x6d\145\x6e\x67\145\144\x69\164\x20\152\141\144\167\141\154\x20\x70\145\154\141\x6a\x61\162\x61\x6e"); goto sb3Hn; znPzl: $res = $this->cbt->saveJadwalUjian($tp->id_tp, $smt->id_smt); goto KcY5U; S_r42: $id = $this->input->post("\151\x64\x5f\152\141\144\x77\141\154", true); goto EO27I; NoJhO: Xb6MT: goto ourqg; BEKqe: $status = $res; goto NoJhO; JDaPR: K5v4E: goto Nd9E1; pUYjA: $status = FALSE; goto be2e7; KcY5U: $data["\x6d\145\163\163\x61\147\x65"] = $res ? "\112\141\x64\x77\141\154\x20\x62\x65\x72\150\141\x73\151\154\x20\x64\x69\163\x69\155\x70\141\156" : "\x4a\141\x64\x77\x61\x6c\x20\163\165\144\x61\x68\x20\141\x64\141"; goto BEKqe; be2e7: goto Xb6MT; goto hHSHp; rr24z: $tp = $this->dashboard->getTahunActive(); goto AC6ap; s8b3F: $data["\155\145\x73\x73\141\x67\145"] = "\x4b\x65\163\x61\x6c\x61\x68\x61\x6e\40\64\60\x34"; goto pUYjA; kYXyM: $this->load->model("\x43\142\164\137\x6d\157\x64\145\154", "\x63\x62\x74"); goto MfYHc; ypeLP: $this->load->model("\x4c\x6f\x67\137\155\157\x64\145\154", "\x6c\157\x67\x67\x69\156\147"); goto rr24z; AC6ap: $smt = $this->dashboard->getSemesterActive(); goto JF13a; Nd9E1: $this->output_json($data); goto St2E8; sb3Hn: goto K5v4E; goto AEX5W; JF13a: if ($this->input->post()) { goto z08wO; } goto s8b3F; hHSHp: z08wO: goto znPzl; yKWUk: $this->logging->saveLog(3, "\155\x65\x6e\141\155\142\141\150\x20\x6a\141\x64\167\141\x6c\x20\x70\145\154\141\x6a\x61\x72\x61\156"); goto JDaPR; St2E8: } public function deleteJadwal() { goto gtPuh; Jw0fz: $hapusNilaiSiswa = $this->master->delete("\143\x62\164\x5f\163\x6f\x61\x6c\137\163\151\163\x77\x61", $id, "\x69\144\x5f\x6a\x61\144\167\x61\x6c"); goto sgHt7; MoBRy: $data["\x73\x74\x61\x74\x75\x73"] = false; goto pZVko; uKASK: AecTa: goto c8qV0; hPWF2: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto CMWWO; pZVko: $data["\155\x65\163\x73\141\x67\x65"] = "\x4a\141\x64\x77\141\x6c\x20\125\152\151\141\156\40\x73\x65\144\x61\x6e\x67\x20\x64\x69\x67\x75\x6e\141\x6b\141\156"; goto RzwAy; egXrI: $jadwal = $this->cbt->getJadwalById($id); goto dlMlN; gtPuh: $this->load->model("\x4d\x61\x73\x74\x65\162\x5f\x6d\157\144\x65\154", "\155\141\163\x74\x65\162"); goto n8syz; GDguk: $data["\155\x65\x73\x73\x61\x67\145"] = "\142\145\x72\150\x61\x73\x69\x6c"; goto x3a26; c8qV0: $data["\163\164\x61\164\x75\x73"] = false; goto N8imw; PTYz5: GOCwu: goto Jw0fz; x3a26: V1fdT: goto aGnMt; M5NMu: $data["\x73\164\141\x74\x75\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto GDguk; RzwAy: goto V1fdT; goto PTYz5; fKs2d: $this->load->model("\114\157\147\x5f\x6d\x6f\144\x65\x6c", "\x6c\157\x67\147\151\x6e\147"); goto zhUJ8; dlMlN: if ($terpakai && $jadwal->rekap == 0) { goto AecTa; } goto mpywy; n8syz: $this->load->model("\x43\x62\x74\x5f\155\157\144\145\x6c", "\143\x62\164"); goto fKs2d; aGnMt: goto PSz4j; goto uKASK; q8bGm: $this->logging->saveLog(5, "\155\145\x6e\147\150\141\160\165\163\x20\152\141\x64\167\x61\x6c\40\x75\152\x69\141\156"); goto M5NMu; mpywy: if ($this->master->delete("\x63\142\x74\x5f\152\141\x64\167\x61\x6c", $id, "\151\x64\x5f\152\x61\x64\x77\141\x6c")) { goto GOCwu; } goto MoBRy; Jo80d: $this->output_json($data); goto FKLaj; ke5GP: $data["\x73\164\141\x74\165\163"] = false; goto egXrI; CMWWO: $terpakai = isset($jadwal_dikerjakan[$id]) && count($jadwal_dikerjakan[$id]) > 0; goto ke5GP; sgHt7: $hapusDurasiSiswa = $this->master->delete("\x63\142\164\x5f\144\165\x72\x61\163\x69\137\163\x69\163\167\x61", $id, "\x69\x64\x5f\152\141\144\x77\141\x6c"); goto q8bGm; zhUJ8: $id = $this->input->get("\151\144\x5f\x6a\x61\144\167\141\154", true); goto hPWF2; N8imw: $data["\x6d\x65\163\x73\141\x67\145"] = "\110\x61\163\151\x6c\x20\x55\152\x69\x61\x6e\x20\x62\x65\154\x75\x6d\40\x64\151\162\x65\x6b\141\160"; goto tVXpy; tVXpy: PSz4j: goto Jo80d; FKLaj: } public function deleteAllJadwal() { goto qoeaR; qyGG1: $data["\155\145\163\163\x61\x67\x65"] = "\x48\141\163\x69\x6c\x20\x55\152\151\141\x6e\40\142\x65\x6c\x75\155\x20\144\151\x72\145\153\141\160"; goto hCU5T; HOMeH: $data["\155\x65\163\x73\141\147\x65"] = "\x62\x65\162\150\x61\x73\151\x6c"; goto LXNOr; fEoxs: $hapusDurasiSiswa = $this->master->delete("\143\x62\164\x5f\x64\165\x72\x61\163\151\x5f\163\x69\x73\167\141", $arrId, "\151\x64\137\152\141\144\x77\141\x6c"); goto ojaz4; suKBF: $digunakan = []; goto JlWiH; a5c8y: $backuped = []; goto suKBF; LXNOr: mQFsG: goto Igs5T; Nyz5Q: $data["\x64\x69\147\165\x6e\141\153\141\156"] = $count_terpakai; goto U4CoP; JlWiH: foreach ($jadwals as $jadwal) { goto I1x6p; vyNCr: array_push($backuped, $jadwal->rekap); goto DtIi6; DtIi6: array_push($digunakan, $terpakai); goto Mkcsa; I1x6p: $terpakai = isset($jadwal_dikerjakan[$jadwal->id_jadwal]) && count($jadwal_dikerjakan[$jadwal->id_jadwal]) > 0 ? 1 : 0; goto vyNCr; Mkcsa: BwsaY: goto pmHHd; pmHHd: } goto oPN9k; ylcTY: $arrId = json_decode($this->input->post("\x63\x68\x65\143\x6b\x65\x64", true)); goto L6_E2; qoeaR: $this->load->model("\x4d\x61\163\164\x65\162\137\x6d\x6f\144\x65\154", "\155\x61\163\164\x65\162"); goto JbZpU; vp0Uv: $jadwals = $this->cbt->getJadwalByArrId($arrId); goto YaE3r; z8Mnq: if ($this->master->delete("\143\142\x74\x5f\x6a\x61\144\167\x61\x6c", $arrId, "\x69\x64\137\x6a\141\144\x77\141\x6c")) { goto F7Uq1; } goto Y4CDs; HFCvu: $hapusNilaiSiswa = $this->master->delete("\143\x62\x74\137\x73\x6f\141\154\137\x73\x69\x73\x77\141", $arrId, "\151\x64\137\x6a\141\144\x77\141\x6c"); goto fEoxs; cpdxa: $this->output_json($data); goto QRhcF; ojaz4: $this->logging->saveLog(5, "\155\x65\x6e\x67\x68\x61\x70\165\163\40\x6a\141\144\167\x61\154\40\165\x6a\x69\141\156"); goto ctchV; L6_E2: ob_start(); goto vp0Uv; diTXi: F7Uq1: goto HFCvu; P1UHc: $data["\163\164\x61\x74\165\x73"] = false; goto qyGG1; Y4CDs: ob_end_clean(); goto CDayB; hCU5T: abHBN: goto Nyz5Q; ZmAve: $data["\163\164\141\164\165\163"] = $hapusNilaiSiswa && $hapusDurasiSiswa; goto HOMeH; KdcZL: $count_terpakai = array_count_values($digunakan); goto I2hhh; CDayB: $data["\163\x74\x61\x74\x75\x73"] = false; goto WOy5o; WOy5o: $data["\x6d\x65\163\x73\x61\147\145"] = "\112\x61\144\x77\141\154\x20\x55\x6a\151\141\x6e\x20\x73\145\144\141\x6e\147\x20\x64\x69\147\165\x6e\x61\153\x61\x6e"; goto KANqv; ctchV: ob_end_clean(); goto ZmAve; Ja0Mq: ob_end_clean(); goto P1UHc; e6a1K: if ($count_terpakai[1] > 0 && $counts[0] > 0) { goto oKf3o; } goto z8Mnq; I2hhh: $counts = array_count_values($backuped); goto e6a1K; Igs5T: goto abHBN; goto Y2gY4; U4CoP: $data["\x62\x61\143\x6b\x75\160"] = $counts; goto cpdxa; JbZpU: $this->load->model("\103\142\x74\x5f\155\x6f\144\x65\154", "\143\142\164"); goto EsCMW; Y2gY4: oKf3o: goto Ja0Mq; YaE3r: $jadwal_dikerjakan = $this->cbt->getJadwalTerpakai(); goto a5c8y; oPN9k: uAfSR: goto KdcZL; EsCMW: $this->load->model("\114\x6f\x67\137\x6d\x6f\144\145\154", "\x6c\x6f\x67\147\x69\156\147"); goto ylcTY; KANqv: goto mQFsG; goto diTXi; QRhcF: } }
