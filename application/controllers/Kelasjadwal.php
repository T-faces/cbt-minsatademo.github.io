<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasjadwal extends CI_Controller { public function __construct() { goto lbhSg; H267K: eYpb2: goto ar00U; WVc3T: $this->load->model("\104\x72\157\160\144\157\x77\x6e\x5f\x6d\x6f\x64\x65\x6c", "\144\162\157\160\144\157\x77\156"); goto bZOHQ; hhYNu: if ($this->ion_auth->logged_in()) { goto eYpb2; } goto dltak; lbhSg: parent::__construct(); goto hhYNu; bZOHQ: $this->form_validation->set_error_delimiters('', ''); goto WBLIf; ar00U: $this->load->library(["\144\141\164\x61\164\x61\x62\x6c\x65\163", "\146\x6f\x72\x6d\137\x76\141\154\151\144\141\164\x69\157\x6e"]); goto o2tI1; o2tI1: $this->load->model("\115\141\163\x74\x65\162\x5f\x6d\x6f\x64\145\154", "\x6d\141\x73\164\145\x72"); goto vRycx; vRycx: $this->load->model("\104\141\x73\150\x62\157\141\x72\x64\x5f\x6d\157\144\x65\154", "\144\x61\x73\x68\x62\x6f\141\162\144"); goto gR3mR; JkhQh: $this->load->model("\x4b\145\x6c\x61\163\137\x6d\x6f\144\145\x6c", "\x6b\145\x6c\x61\163"); goto WVc3T; gR3mR: $this->load->model("\103\x62\x74\x5f\155\157\x64\x65\x6c", "\x63\x62\x74"); goto jPsYn; jPsYn: $this->load->model("\114\x6f\x67\x5f\155\x6f\x64\145\154", "\x6c\157\147\147\x69\x6e\x67"); goto JkhQh; dltak: redirect("\x61\x75\164\x68"); goto H267K; WBLIf: } public function output_json($data, $encode = true) { goto B0AdH; KjNlw: $data = json_encode($data); goto hBeWG; rg69M: $this->output->set_content_type("\x61\x70\160\x6c\x69\143\141\164\151\x6f\x6e\x2f\152\163\x6f\156")->set_output($data); goto EAHaX; B0AdH: if (!$encode) { goto iOz17; } goto KjNlw; hBeWG: iOz17: goto rg69M; EAHaX: } public function index() { goto zLStn; zLStn: $user = $this->ion_auth->user()->row(); goto QymEb; KOYWj: goto NYU8U; goto py1qR; GLdvu: $tp = $this->dashboard->getTahunActive(); goto X3hRe; r4KuT: $data["\x6a\155\x6c\115\141\x70\x65\x6c"] = []; goto TYvA8; eDCd2: $data["\160\x72\157\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto GZHXf; X3hRe: $smt = $this->dashboard->getSemesterActive(); goto QwHxq; GZHXf: $this->load->view("\x5f\164\x65\155\x70\154\141\x74\145\x73\57\x64\x61\x73\150\142\x6f\141\x72\144\57\x5f\150\145\141\x64\145\162", $data); goto vyclE; aqMhg: $data["\x6b\145\x6c\x61\163"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto U17NF; TwCWZ: goto NYU8U; goto k8PiU; Uq4Dv: if ($this->ion_auth->in_group("\147\165\162\x75")) { goto Kfe_p; } goto TwCWZ; U17NF: $data["\x69\x64\137\153\145\x6c\141\163"] = "\60"; goto nKuh7; nKuh7: $data["\x6d\145\x74\x68\157\144"] = ''; goto nkcST; nkcST: $data["\152\x6d\154\x49\163\x74"] = []; goto r4KuT; QwHxq: $data["\164\160"] = $this->dashboard->getTahun(); goto j7ks_; TYvA8: if ($this->ion_auth->is_admin()) { goto HTEmh; } goto Uq4Dv; pag0m: $data["\x73\x6d\x74\137\x61\x63\x74\151\x76\145"] = $smt; goto aqMhg; aJ2Mv: $this->load->view("\155\145\155\142\145\x72\x73\57\x67\x75\162\x75\x2f\x74\x65\x6d\160\154\x61\164\x65\x73\x2f\x66\157\x6f\x74\145\x72"); goto hQxq8; NFs_r: $this->load->view("\x6d\x65\x6d\x62\145\162\x73\57\x67\x75\x72\x75\x2f\x74\145\x6d\x70\x6c\141\x74\145\163\57\x68\145\141\x64\x65\x72", $data); goto r02q7; h23g9: $data["\x67\x75\162\x75"] = $guru; goto NFs_r; QymEb: $data = ["\x75\163\145\x72" => $user, "\152\165\144\x75\154" => "\x4a\x61\144\167\141\x6c\40\x50\145\x6c\141\x6a\x61\162\141\x6e", "\163\x75\142\152\x75\x64\165\x6c" => "\123\145\164\x20\x4a\x61\144\167\x61\x6c\40\x50\x65\x6c\x61\x6a\141\162\141\x6e", "\163\x65\x74\x74\x69\x6e\x67" => $this->dashboard->getSetting()]; goto GLdvu; r02q7: $this->load->view("\x6d\145\155\x62\x65\162\x73\x2f\147\x75\162\x75\57\x6b\x65\154\x61\x73\57\x6a\141\x64\167\141\x6c\x2f\x64\141\164\x61"); goto aJ2Mv; py1qR: Kfe_p: goto Uf6IF; vfnE5: $this->load->view("\137\164\145\x6d\x70\x6c\141\164\145\x73\57\144\x61\163\150\x62\x6f\141\x72\x64\57\137\x66\157\157\164\145\x72"); goto KOYWj; Z02kX: $data["\163\155\164"] = $this->dashboard->getSemester(); goto pag0m; Uf6IF: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto h23g9; hQxq8: NYU8U: goto RSA1F; k8PiU: HTEmh: goto eDCd2; j7ks_: $data["\164\160\x5f\x61\143\164\151\x76\x65"] = $tp; goto Z02kX; vyclE: $this->load->view("\153\145\154\x61\x73\57\x6a\x61\x64\x77\141\154\57\144\x61\x74\141"); goto vfnE5; RSA1F: } public function kelas($kelas) { goto WXlKI; ZzLD2: $data["\x67\x75\162\165"] = $this->dashboard->getDetailGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto LJPV0; GcZV5: foreach ($jadm as $j) { $jadwal_mapel[] = ["\152\x61\x64\167\x61\154" => $this->kelas->getJadwalMapelByHari($tp->id_tp, $smt->id_smt, $j->jam_ke, $kelas)]; txZGX: } goto sbiyD; n2PE7: $data = ["\165\163\x65\162" => $user, "\152\165\x64\x75\154" => "\112\141\144\x77\141\x6c\40\x50\x65\x6c\141\x6a\141\162\141\156", "\163\165\x62\x6a\x75\x64\165\x6c" => "\123\x65\164\40\x4a\141\x64\167\x61\154\x20\120\145\x6c\x61\152\141\x72\141\156", "\163\x65\x74\164\x69\156\147" => $setting]; goto anggv; kHN0S: pwkSn: goto wy2tr; WeoWF: if (!($i < $jml_mapel)) { goto oxC1Y; } goto TLoZu; JhJtM: $data["\155\145\164\x68\157\144"] = "\x65\144\x69\164"; goto T1kqw; PYHVO: z4S7Y: goto C8tJk; xz9hT: $this->load->view("\155\145\155\x62\145\x72\163\57\147\x75\162\x75\x2f\153\145\x6c\141\x73\x2f\x6a\141\x64\x77\141\x6c\x2f\144\x61\x74\141"); goto xi3Ky; nix8m: $data["\155\141\160\x65\154\x73"] = $this->dropdown->getAllKodeMapel(); goto Mq6Bx; WXlKI: $user = $this->ion_auth->user()->row(); goto u3tlZ; iqDk9: lh2h_: goto WeoWF; MdhI6: goto lh2h_; goto HmV9w; HmV9w: oxC1Y: goto ooaIp; anggv: $tp = $this->dashboard->getTahunActive(); goto lZqNk; XEGaZ: $this->load->view("\153\x65\x6c\141\163\57\x6a\141\144\167\x61\154\x2f\x64\141\x74\141"); goto BNYuQ; tz0Ws: sHgTc: goto AXGBZ; T1kqw: goto sHgTc; goto yegOu; dMUNR: goto pwkSn; goto H0XgK; LPJ2_: $data["\153\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto yE7Nt; LJPV0: $this->load->view("\155\x65\155\x62\x65\162\163\57\147\x75\x72\x75\x2f\x74\145\x6d\160\154\x61\x74\145\163\57\150\145\141\144\145\162", $data); goto xz9hT; bDq97: $jml_mapel = $jadk == null ? 1 : $jadk->kbm_jml_mapel_hari; goto KZufO; FKoJ7: $jadm = $this->kelas->getJadwalMapelGroupJam($tp->id_tp, $smt->id_smt, $kelas); goto bDq97; U5y9v: goto pwkSn; goto XMYkZ; lm0nc: $data["\x70\162\157\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto yVOBU; xi3Ky: $this->load->view("\155\x65\x6d\142\145\162\163\x2f\x67\x75\x72\165\x2f\x74\x65\155\160\154\141\164\145\163\x2f\x66\x6f\157\164\145\162"); goto kHN0S; ooaIp: $data["\x6d\145\x74\150\x6f\144"] = "\141\144\144"; goto tz0Ws; AXGBZ: $data["\152\x61\144\167\141\154\137\155\x61\160\x65\154"] = $jadwal_mapel; goto nix8m; VS1s8: if ($jadk == null) { goto U0zzT; } goto r0hT8; BNYuQ: $this->load->view("\x5f\x74\x65\x6d\x70\154\141\164\x65\163\57\144\141\163\150\x62\x6f\141\x72\x64\x2f\x5f\x66\157\x6f\x74\145\x72"); goto U5y9v; ruhqt: $data["\x6a\141\x64\167\141\x6c\x5f\153\142\155"] = json_decode(json_encode(["\x69\x64\x5f\164\x70" => $tp->tahun, "\151\144\137\x73\155\x74" => $smt->smt, "\x69\144\137\x6b\145\154\141\x73" => $kelas, "\153\x62\x6d\137\x6a\141\x6d\137\160\x65\154" => '', "\153\x62\155\137\x6a\141\155\137\x6d\165\154\141\151" => '', "\x6b\142\155\x5f\152\x6d\154\x5f\155\141\x70\x65\x6c\x5f\x68\141\162\x69" => '', "\151\x73\164\151\x72\x61\x68\141\164" => serialize([]), "\x61\x64\x61" => false])); goto PYHVO; jL52l: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto rj5Ei; C8tJk: $data["\151\144\137\x6b\x65\154\x61\x73"] = $kelas; goto FKoJ7; yE7Nt: $jadk = $this->kelas->getJadwalKbm($tp->id_tp, $smt->id_smt, $kelas); goto VS1s8; VyV_D: goto z4S7Y; goto ygYL2; lZqNk: $smt = $this->dashboard->getSemesterActive(); goto FabBY; FabBY: $data["\164\x70"] = $this->dashboard->getTahun(); goto pWx1n; pWx1n: $data["\x74\160\x5f\141\x63\164\x69\x76\145"] = $tp; goto jL52l; Mq6Bx: if ($this->ion_auth->is_admin()) { goto HebUC; } goto CrN0g; CrN0g: if ($this->ion_auth->in_group("\x67\165\162\165")) { goto nXcxG; } goto dMUNR; yVOBU: $this->load->view("\137\x74\x65\155\x70\x6c\x61\164\145\163\x2f\144\x61\163\150\142\157\141\162\144\x2f\137\150\145\141\x64\145\x72", $data); goto XEGaZ; sbiyD: AbXZ8: goto JhJtM; KZufO: if ($jadm == null) { goto MnV8F; } goto GcZV5; TLoZu: $jadwal_mapel[] = ["\152\141\144\167\141\x6c" => $this->kelas->getDummyJadwalMapel($tp->id_tp, $smt->id_smt, $i + 1, $kelas)]; goto Wljlg; Wljlg: u2G4U: goto yR92A; rj5Ei: $data["\163\x6d\164\137\141\x63\164\x69\x76\x65"] = $smt; goto LPJ2_; yegOu: MnV8F: goto VJqXf; XMYkZ: nXcxG: goto ZzLD2; VJqXf: $i = 0; goto iqDk9; H0XgK: HebUC: goto lm0nc; yR92A: $i++; goto MdhI6; u3tlZ: $setting = $this->dashboard->getSetting(); goto n2PE7; ygYL2: U0zzT: goto ruhqt; r0hT8: $data["\x6a\x61\144\x77\141\154\x5f\153\x62\x6d"] = $jadk; goto VyV_D; wy2tr: } public function setJadwal() { goto vQDmc; Q9EHg: GzEkf: goto irFPD; irFPD: $id_tp = $this->master->getTahunActive()->id_tp; goto H63KZ; yGH6s: $this->logging->saveLog(3, "\155\145\x72\165\142\141\x68\x20\152\x61\144\x77\x61\154\x20\160\145\x6c\x61\152\x61\162\x61\156"); goto WprQN; WtnSw: $insert = ["\151\x64\x5f\x6b\142\155" => $id_tp . $id_smt . $id_kelas, "\151\x64\x5f\164\160" => $id_tp, "\151\x64\137\x73\155\x74" => $id_smt, "\151\144\x5f\153\x65\154\x61\163" => $id_kelas, "\x6b\142\155\137\152\x61\155\x5f\x70\145\x6c" => $this->input->post("\x6a\x61\155\x5f\155\141\160\145\154", true), "\153\x62\x6d\x5f\x6a\141\155\x5f\x6d\165\x6c\x61\x69" => $this->input->post("\152\141\155\137\155\x75\154\x61\151", true), "\153\142\x6d\137\x6a\x6d\x6c\x5f\x6d\x61\x70\x65\154\137\150\x61\x72\x69" => $this->input->post("\152\x6d\154\x5f\x6d\141\160\x65\154", true), "\151\x73\164\x69\x72\141\150\x61\164" => serialize($istirahat)]; goto qydVX; vQDmc: $istirahat = []; goto dN6cC; H63KZ: $id_smt = $this->master->getSemesterActive()->id_smt; goto OPkeT; OwSpS: $istirahat[] = ["\x69\163\x74" => $jamke, "\x64\x75\162" => $durasi]; goto luTAb; dN6cC: $i = 1; goto e8hdr; CthU6: $durasi = $this->input->post("\144\165\162\137\151\163\x74" . $i, true); goto EVaVo; EVaVo: if (!$jamke) { goto wil5_; } goto OwSpS; GaX8H: $this->output_json($data); goto ERVX0; luTAb: wil5_: goto FrsbX; WprQN: $data["\163\x74\141\x74\165\163"] = $update; goto GaX8H; GmWok: $i++; goto jEe4z; qydVX: $update = $this->db->replace("\153\x65\154\141\163\x5f\x6a\x61\x64\x77\141\x6c\137\153\x62\155", $insert); goto yGH6s; OPkeT: $id_kelas = $this->input->post("\x69\144\137\x6b\145\x6c\x61\163", true); goto WtnSw; FrsbX: KYLG7: goto GmWok; jEe4z: goto B7C_u; goto Q9EHg; fH3_0: $jamke = $this->input->post("\151\x73\x74" . $i, true); goto CthU6; z0g3V: if (!($i < 5)) { goto GzEkf; } goto fH3_0; e8hdr: B7C_u: goto z0g3V; ERVX0: } public function setMapel() { goto YnIk3; W6uXQ: foreach ($input as $d) { $data[] = ["\x69\x64\137\152\141\144\x77\141\154" => $d->id_tp . $d->id_smt . $id_kelas . $d->id_hari . $d->jam_ke, "\x69\144\x5f\164\160" => $d->id_tp, "\151\x64\137\x73\x6d\x74" => $d->id_smt, "\x69\x64\137\153\145\154\x61\163" => $id_kelas, "\151\x64\137\x68\x61\162\151" => $d->id_hari, "\x6a\141\x6d\x5f\153\x65" => $d->jam_ke, "\x69\144\x5f\155\141\x70\x65\154" => $d->id_mapel]; cAPLE: } goto ShPyj; oMR59: $update = $this->db->insert_batch("\x6b\x65\154\141\x73\x5f\152\141\x64\167\x61\x6c\x5f\x6d\x61\160\145\154", $data); goto SzqcS; f8a1R: $array = array("\151\x64\137\164\x70" => $input[0]->id_tp, "\151\144\137\x73\x6d\x74" => $input[0]->id_smt, "\x69\144\x5f\153\x65\x6c\x61\x73" => $id_kelas); goto sSCJb; ShPyj: N4BQV: goto oMR59; SzqcS: $res["\x73\x74\141\164\x75\x73"] = $update; goto f8P7l; YnIk3: $input = json_decode($this->input->post("\x64\x61\x74\x61", true)); goto o3DPu; wayze: $data = []; goto W6uXQ; wAIHL: $this->db->delete("\153\145\154\141\163\x5f\x6a\x61\144\167\141\154\x5f\155\x61\160\x65\x6c"); goto wayze; sSCJb: $this->db->where($array); goto wAIHL; o3DPu: $id_kelas = $this->input->post("\151\x64\x5f\x6b\x65\154\141\x73", true); goto f8a1R; f8P7l: $this->output_json($res); goto Nz_eP; Nz_eP: } }
