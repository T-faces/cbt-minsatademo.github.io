<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelasmateri extends CI_Controller { public function __construct() { goto tyQgo; OG4AF: redirect("\141\x75\x74\x68"); goto WgFSF; GLPvo: $this->load->library(["\x64\x61\164\x61\x74\141\142\154\145\163", "\146\x6f\x72\x6d\137\166\141\x6c\x69\144\141\x74\x69\x6f\x6e"]); goto EO47T; pMTO2: $this->form_validation->set_error_delimiters('', ''); goto ZVY3v; LGgBK: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\x75"))) { goto bhny7; } goto fp5Zr; fp5Zr: show_error("\x48\x61\x6e\x79\x61\40\101\144\155\x69\156\x69\x73\x74\x72\x61\164\x6f\x72\x20\x64\141\x6e\x20\x67\x75\162\x75\x20\171\141\x6e\147\x20\144\151\x62\x65\x72\x69\x20\150\141\153\40\165\156\164\x75\153\40\x6d\x65\x6e\147\x61\153\x73\145\163\40\x68\x61\x6c\141\155\141\156\40\151\x6e\151\x2c\40\x3c\x61\40\x68\x72\145\146\x3d\42" . base_url("\144\x61\163\x68\142\157\141\162\144") . "\42\76\x4b\145\x6d\142\141\x6c\x69\40\153\145\40\x6d\145\156\x75\40\x61\x77\x61\154\74\x2f\x61\x3e", 403, "\x41\153\163\x65\x73\40\x54\145\x72\154\141\162\141\156\147"); goto FXwox; dc9ls: goto pqMD9; goto EyZY3; Z3xAM: $this->load->model("\x4b\x65\154\x61\x73\x5f\155\x6f\x64\x65\154", "\x6b\145\x6c\x61\x73"); goto OxI1b; tyQgo: parent::__construct(); goto kvwu1; kvwu1: if (!$this->ion_auth->logged_in()) { goto FN3pT; } goto LGgBK; FXwox: bhny7: goto dc9ls; ctJ17: $this->load->library("\165\160\x6c\x6f\141\144"); goto GLPvo; EyZY3: FN3pT: goto OG4AF; CLfz7: $this->load->model("\104\141\x73\150\142\157\x61\162\x64\x5f\155\x6f\x64\x65\x6c", "\x64\141\163\150\142\x6f\x61\162\144"); goto Z3xAM; EO47T: $this->load->helper("\155\x79"); goto TjZ_0; OxI1b: $this->load->model("\104\x72\157\160\x64\157\167\x6e\137\155\x6f\x64\x65\154", "\144\162\157\160\144\157\167\156"); goto HefaH; HefaH: $this->load->model("\x4c\x6f\x67\x5f\155\157\x64\x65\x6c", "\x6c\157\x67\x67\151\156\147"); goto pMTO2; WgFSF: pqMD9: goto ctJ17; TjZ_0: $this->load->model("\x4d\x61\x73\164\x65\x72\x5f\155\157\144\x65\x6c", "\155\x61\163\164\x65\162"); goto CLfz7; ZVY3v: } public function output_json($data, $encode = true) { goto eIOH5; rY_xe: $data = json_encode($data); goto HSgsz; HSgsz: NA2lh: goto LDeAW; LDeAW: $this->output->set_content_type("\x61\x70\160\154\x69\x63\141\x74\151\157\156\x2f\x6a\163\x6f\x6e")->set_output($data); goto XUN1z; eIOH5: if (!$encode) { goto NA2lh; } goto rY_xe; XUN1z: } public function index() { goto kIibX; suw_b: $jadwal_materi = []; goto gBT2p; c0gIo: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto AKNfu; V82D1: $tp = $this->dashboard->getTahunActive(); goto FLUVS; q4tjd: $jadwal_materi = []; goto qt1Vn; ZqR21: $data["\x6c\x65\166\x65\x6c"] = $this->dropdown->getAllLevel($setting->jenjang); goto pxjB1; mqf0N: $this->load->view("\x5f\x74\x65\x6d\160\154\141\x74\x65\163\57\144\x61\163\150\x62\x6f\141\162\144\x2f\137\x66\x6f\157\164\x65\162"); goto nWU1K; zWT1O: $this->load->view("\x5f\164\145\x6d\160\x6c\x61\164\145\163\57\144\141\163\150\x62\x6f\x61\162\x64\x2f\x5f\x68\x65\141\x64\x65\x72", $data); goto oyYCE; bEpB7: $data["\x67\x75\162\x75\163"] = $nguru; goto nZ33Q; YeSgW: $data["\152\x75\162\x75\163\x61\x6e"] = $this->dropdown->getAllJurusan(); goto ZqR21; gBT2p: if (!($id_guru != null)) { goto QxqQG; } goto yWU7d; SzIKT: $data = ["\x75\163\145\162" => $user, "\152\x75\x64\x75\154" => "\115\141\164\x65\162\151\x20\x42\x65\154\x61\x6a\141\162", "\163\165\142\152\165\144\165\x6c" => "\115\x61\x74\x65\x72\x69", "\x73\145\x74\164\151\x6e\147" => $setting]; goto V82D1; vY1dX: $data["\153\145\154\x61\163\137\155\x61\x74\145\162\151"] = $kelas_materi; goto wbjyt; a73Pn: $user = $this->ion_auth->user()->row(); goto gFu3i; AKNfu: $data["\x73\155\164\137\x61\143\x74\x69\166\x65"] = $smt; goto YeSgW; yy1zZ: $kelas_materi = []; goto suw_b; BOVzW: $data["\x6d\x61\x74\145\162\x69"] = $materi; goto vY1dX; YXtth: $data["\x67\x75\x72\x75\x73"] = $allGuru; goto xWC0i; nZ33Q: $data["\x67\165\x72\x75"] = $guru; goto U6TQU; TkQY3: $data["\x6a\x61\144\x77\x61\154\x5f\x6d\141\x74\x65\162\x69"] = $jadwal_materi; goto Krste; kV__f: foreach ($materi as $m) { goto doi0U; doi0U: $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto Xw_UX; Xw_UX: if (!($km == null)) { goto S9maz; } goto oh3zX; oh3zX: $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas)); goto cFBlR; hwAZR: PFnyj: goto TMNxL; q0BSd: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, $jenis, $tp->id_tp, $smt->id_smt); goto hwAZR; cFBlR: S9maz: goto WZ_59; WZ_59: $kelas_materi[$m->id_materi] = $km; goto q0BSd; TMNxL: } goto nW9RU; cz9rE: $data["\153\145\154\141\x73\137\155\x61\164\x65\162\151"] = $kelas_materi; goto TkQY3; VlsTa: $nguru[$guru->id_guru] = $guru->nama_guru; goto bEpB7; nW9RU: mSKgE: goto kC3WC; yWU7d: $materi = $this->kelas->getAllMateriKelas($id_guru, "\x31"); goto kV__f; xWC0i: $data["\x69\144\x5f\147\x75\x72\165"] = $id_guru == null ? '' : $id_guru; goto mFOEa; kIibX: $jenis = $this->input->get("\152\x65\156\151\163"); goto a73Pn; HJSCQ: $allGuru = $this->dropdown->getAllGuru(); goto NGe_K; wbjyt: $data["\152\x61\144\167\x61\x6c\137\x6d\x61\x74\145\x72\151"] = $jadwal_materi; goto zWT1O; NGe_K: array_unshift($allGuru, ["\x30\x30" => "\x53\145\x6d\165\141\x20\x47\165\x72\x75"]); goto YXtth; hg8Ei: $kelas_materi = []; goto q4tjd; gFu3i: $setting = $this->dashboard->getSetting(); goto SzIKT; vggPe: $id_guru = $this->input->get("\x69\x64"); goto STuGD; Krste: $this->load->view("\x6d\x65\155\x62\145\162\x73\57\147\x75\162\165\57\164\x65\155\x70\154\141\164\x65\x73\57\x68\145\x61\144\145\x72", $data); goto TNjjv; y9c42: $data["\x6d\x61\x74\145\162\x69"] = $materi; goto cz9rE; VeNqv: if ($this->ion_auth->is_admin()) { goto fOPwe; } goto A65l7; pxjB1: $data["\x6b\x65\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto VeNqv; jHN8q: goto f8leB; goto pUeHM; qt1Vn: foreach ($materi as $m) { goto btCGt; W1gfV: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, $jenis, $tp->id_tp, $smt->id_smt); goto g0Ihj; btCGt: $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto W1gfV; g0Ihj: XN9pO: goto KQHS7; KQHS7: } goto YsYSJ; A65l7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto uvxbQ; TNjjv: $this->load->view("\153\x65\154\141\163\57\x6d\141\x74\x65\162\x69\57\x64\x61\164\141"); goto ZDWjE; YsYSJ: R3IeB: goto VlsTa; nWU1K: f8leB: goto z3wT_; uvxbQ: $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\61"); goto hg8Ei; y0z2F: $data["\164\x70"] = $this->dashboard->getTahun(); goto vB6IW; ZDWjE: $this->load->view("\155\145\x6d\142\145\162\x73\57\x67\x75\162\x75\x2f\164\x65\x6d\160\154\x61\x74\145\163\57\146\157\x6f\x74\145\x72"); goto jHN8q; STuGD: $data["\x70\x72\157\146\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id); goto HJSCQ; mFOEa: $materi = []; goto yy1zZ; U6TQU: $data["\151\x64\137\147\x75\162\x75"] = $guru->id_guru; goto y9c42; pUeHM: fOPwe: goto vggPe; vB6IW: $data["\164\160\x5f\141\x63\164\151\166\x65"] = $tp; goto c0gIo; oyYCE: $this->load->view("\x6b\145\x6c\141\163\57\155\141\164\x65\162\x69\57\x64\141\x74\x61"); goto mqf0N; FLUVS: $smt = $this->dashboard->getSemesterActive(); goto y0z2F; kC3WC: QxqQG: goto BOVzW; z3wT_: } public function materi() { goto SzatY; Ikdqp: $data["\x67\165\162\x75"] = $guru; goto Sbehz; BwK_v: BB2Xq: goto Tt_v5; qPsyJ: $kelas_materi = []; goto Y_XIL; gZnwn: $data["\x6a\x61\144\x77\x61\x6c\x5f\155\141\164\x65\162\x69"] = $jadwal_materi; goto J0Rmo; lVjKU: $data["\164\x70\137\141\143\164\x69\166\x65"] = $tp; goto alRns; e2Vkp: $data["\151\x64\x5f\147\x75\x72\x75"] = $id_guru == null ? '' : $id_guru; goto Kw3lt; r8WgW: $data["\152\141\144\x77\141\154\137\x6d\141\x74\x65\162\151"] = $jadwal_materi; goto O5xD_; D3m1a: OMffs: goto NWSlP; Q4sYy: $this->load->view("\155\x65\155\142\x65\162\x73\57\x67\165\162\x75\57\x74\x65\155\160\x6c\141\x74\145\x73\x2f\x66\x6f\x6f\164\145\162"); goto iv3d9; jbOdS: $arr_kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto DF9gS; ugZEz: foreach ($materi as $m) { goto h2_0a; oI7sx: kZK6b: goto x0akv; h2_0a: $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto HvrP9; HvrP9: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\61", $tp->id_tp, $smt->id_smt); goto oI7sx; x0akv: } goto fcjI3; Kw3lt: $materi = []; goto BfHQo; BacDD: $data["\x67\x75\x72\165\x73"] = $nguru; goto Ikdqp; fcjI3: ty9NG: goto vSeAz; ZPtrV: $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\x31"); goto qPsyJ; XSWpb: $this->load->view("\x6b\145\x6c\x61\163\x2f\155\x61\164\145\x72\151\57\144\x61\x74\141"); goto Q4sYy; TwF9g: $id_guru = $this->input->get("\x69\144"); goto k3PO4; oKWjb: $data["\x6a\141\144\x77\x61\x6c\x5f\155\x61\x70\x65\154"] = $jadmpl; goto mms1p; VSF66: $jadmpl = $this->kelas->getJadwalMapel($tp->id_tp, $smt->id_smt); goto oKWjb; c3QBA: $data["\155\141\164\145\162\x69"] = $materi; goto LMgzx; wIn3S: $this->load->view("\x6b\x65\154\x61\x73\57\x6d\x61\x74\x65\x72\151\x2f\x64\141\x74\141"); goto RKWFH; ZGK16: $allGuru = $this->dropdown->getAllGuru(); goto UMT9M; KamxI: $smt = $this->dashboard->getSemesterActive(); goto TjAls; VdKOy: $data["\x73\x6d\164\x5f\x61\143\x74\151\x76\x65"] = $smt; goto d1VLJ; SonMs: $data["\147\x75\x72\x75\163"] = $allGuru; goto e2Vkp; iv3d9: goto OMffs; goto uPeFG; NETTn: $materi = $this->kelas->getAllMateriKelas($id_guru, "\61"); goto DpGGp; SzatY: $user = $this->ion_auth->user()->row(); goto AjlUs; AvU06: $tp = $this->dashboard->getTahunActive(); goto KamxI; k3PO4: $data["\160\162\157\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto ZGK16; uPeFG: Nm3cl: goto TwF9g; UTjsb: $data = ["\165\x73\145\x72" => $user, "\152\165\144\165\154" => "\115\x61\x74\x65\162\151\40\102\145\154\141\x6a\141\162", "\163\165\142\152\165\x64\165\x6c" => "\115\x61\x74\145\x72\151", "\x73\x65\x74\x74\x69\x6e\147" => $setting]; goto AvU06; TjAls: $data["\164\x70"] = $this->dashboard->getTahun(); goto lVjKU; B1mpT: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto ZPtrV; vSeAz: $nguru[$guru->id_guru] = $guru->nama_guru; goto BacDD; LwOf5: if (!($id_guru != null)) { goto Ourrk; } goto NETTn; UMT9M: $allGuru["\x30\60"] = "\123\145\155\x75\141\40\x47\165\x72\x75"; goto SonMs; jkwep: $data["\152\145\156\x69\163"] = "\x31"; goto VSF66; Sbehz: $data["\x69\144\x5f\147\165\162\165"] = $guru->id_guru; goto CtnHd; J0Rmo: $this->load->view("\155\145\155\142\145\162\x73\57\x67\165\162\165\57\164\x65\x6d\160\x6c\x61\x74\145\x73\57\x68\x65\x61\144\145\x72", $data); goto XSWpb; BfHQo: $kelas_materi = []; goto dlIk3; d1VLJ: $data["\152\x75\x72\165\163\x61\x6e"] = $this->dropdown->getAllJurusan(); goto Z3yg0; DF9gS: $data["\x6b\145\x6c\x61\163"] = $arr_kelas; goto jkwep; dlIk3: $jadwal_materi = []; goto LwOf5; CtnHd: $data["\155\141\x74\x65\162\x69"] = $materi; goto Ce1dZ; AjlUs: $setting = $this->dashboard->getSetting(); goto UTjsb; Ce1dZ: $data["\153\x65\x6c\x61\163\137\x6d\141\164\x65\x72\151"] = $kelas_materi; goto gZnwn; alRns: $data["\163\155\164"] = $this->dashboard->getSemester(); goto VdKOy; RKWFH: $this->load->view("\x5f\x74\x65\155\x70\x6c\141\164\145\x73\x2f\x64\x61\163\150\142\x6f\141\162\x64\57\x5f\x66\x6f\157\x74\x65\162"); goto D3m1a; O5xD_: $this->load->view("\137\x74\x65\155\x70\154\x61\x74\x65\x73\57\x64\x61\163\150\142\157\141\x72\144\57\x5f\x68\145\141\144\x65\162", $data); goto wIn3S; DpGGp: foreach ($materi as $m) { goto ZyLmF; XWZnd: $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas)); goto fpZ_z; skD5z: if (!(count($arrKls) > 0)) { goto LC8q2; } goto UFxoh; UFxoh: $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto Pa6P8; Pa6P8: if (!($km == null)) { goto pE8LX; } goto XWZnd; Gzvs4: $kelas_materi[$m->id_materi] = $km; goto gWi3x; gWi3x: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\x31", $tp->id_tp, $smt->id_smt); goto A1LUo; gd_3Q: XxVFW: goto MxNqr; ZyLmF: $arrKls = unserialize($m->materi_kelas); goto skD5z; A1LUo: LC8q2: goto gd_3Q; fpZ_z: pE8LX: goto Gzvs4; MxNqr: } goto BwK_v; LMgzx: $data["\x6b\x65\x6c\x61\x73\137\155\141\164\145\162\x69"] = $kelas_materi; goto r8WgW; Tt_v5: Ourrk: goto c3QBA; Y_XIL: $jadwal_materi = []; goto ugZEz; mms1p: if ($this->ion_auth->is_admin()) { goto Nm3cl; } goto B1mpT; Z3yg0: $data["\x6c\145\x76\x65\154"] = $this->dropdown->getAllLevel($setting->jenjang); goto jbOdS; NWSlP: } public function tugas() { goto KEkLs; yXQxo: $jadmpl = $this->kelas->getJadwalMapel($tp->id_tp, $smt->id_smt); goto cYMTN; JoynN: $data["\160\162\x6f\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto qhi04; qhi04: $allGuru = $this->dropdown->getAllGuru(); goto Bg7cl; iTM9d: if (!($id_guru != null)) { goto wMbYr; } goto RD8En; W0CP6: $smt = $this->dashboard->getSemesterActive(); goto vlS5F; rhk0L: $this->load->view("\153\x65\154\x61\163\57\x6d\141\x74\x65\x72\x69\x2f\x64\141\x74\141"); goto pBoYn; AxCx0: $data["\x6d\x61\164\x65\162\x69"] = $materi; goto xzn3V; xDx_r: $data["\151\144\x5f\147\x75\x72\165"] = $guru->id_guru; goto AxCx0; PYqyj: $kelas_materi = []; goto mXpaR; e6PBw: $data["\153\145\x6c\x61\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto A03HU; cYMTN: $data["\152\141\144\x77\141\154\x5f\155\x61\x70\145\x6c"] = $jadmpl; goto qF0OV; suFw0: Ztvrr: goto hbFgI; PPCfC: $this->load->view("\137\164\145\x6d\x70\x6c\141\x74\145\x73\x2f\144\x61\x73\150\142\157\141\x72\x64\x2f\x5f\x68\x65\x61\x64\x65\162", $data); goto b_qsz; Bg7cl: $allGuru["\60\x30"] = "\x53\145\155\165\x61\40\x47\165\162\165"; goto noHX0; APDzp: $data["\164\160\x5f\141\x63\x74\151\166\x65"] = $tp; goto YtEQx; hbFgI: $id_guru = $this->input->get("\x69\x64"); goto JoynN; Rd6FT: foreach ($materi as $m) { goto bC6kl; arUEX: S1apr: goto iOD9R; bC6kl: $kelas_materi[$m->id_materi] = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto sJZFp; sJZFp: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\x32", $tp->id_tp, $smt->id_smt); goto arUEX; iOD9R: } goto c3moV; jHtLF: $materi = []; goto zNzcv; MBujO: $materi = $this->kelas->getAllMateriKelas($guru->id_guru, "\x32"); goto PYqyj; vGMAv: $data["\152\x75\162\165\163\x61\x6e"] = $this->dropdown->getAllJurusan(); goto HYUrT; Wq8l6: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto MBujO; M9BIx: $data["\x73\x6d\164\x5f\x61\x63\x74\x69\x76\145"] = $smt; goto vGMAv; vlS5F: $data["\164\160"] = $this->dashboard->getTahun(); goto APDzp; kJMVI: $data["\x6b\145\x6c\x61\x73\137\155\x61\164\x65\x72\x69"] = $kelas_materi; goto UJwSG; M6FIh: $data["\x6d\x61\164\145\x72\x69"] = $materi; goto kJMVI; xzn3V: $data["\x6b\x65\x6c\x61\x73\137\155\141\x74\145\162\x69"] = $kelas_materi; goto xt9Gu; HYUrT: $data["\x6c\145\x76\x65\x6c"] = $this->dropdown->getAllLevel($setting->jenjang); goto e6PBw; mXpaR: $jadwal_materi = []; goto Rd6FT; KEkLs: $user = $this->ion_auth->user()->row(); goto OlQv7; pBoYn: $this->load->view("\155\x65\155\142\145\x72\x73\57\147\x75\x72\x75\57\x74\145\x6d\x70\x6c\141\164\x65\x73\57\x66\x6f\x6f\x74\145\x72"); goto fFExM; n40vg: $data["\147\165\x72\x75"] = $guru; goto xDx_r; KWQa3: NxzZv: goto aBsqN; aBsqN: wMbYr: goto M6FIh; b_qsz: $this->load->view("\153\145\x6c\141\163\x2f\155\x61\164\x65\x72\151\x2f\x64\x61\164\141"); goto suBGc; suBGc: $this->load->view("\137\164\x65\x6d\160\x6c\141\164\145\x73\x2f\x64\141\x73\150\142\x6f\x61\162\x64\57\137\146\157\x6f\164\x65\162"); goto IUzvA; c3moV: iK42n: goto srQqA; oDSzw: $tp = $this->dashboard->getTahunActive(); goto W0CP6; APCH5: $this->load->view("\155\145\155\142\145\x72\x73\57\x67\165\x72\x75\57\x74\145\x6d\x70\154\141\x74\x65\x73\57\x68\x65\x61\144\x65\162", $data); goto rhk0L; srQqA: $nguru[$guru->id_guru] = $guru->nama_guru; goto Of_HX; yS0QU: $data["\x69\x64\137\x67\165\x72\165"] = $id_guru == null ? '' : $id_guru; goto jHtLF; fFExM: goto c22aN; goto suFw0; A03HU: $data["\152\145\156\x69\163"] = "\x32"; goto yXQxo; xt9Gu: $data["\x6a\x61\144\x77\x61\154\x5f\x6d\141\164\145\162\x69"] = $jadwal_materi; goto APCH5; IUzvA: c22aN: goto J78Sd; TP96y: $data = ["\165\163\x65\x72" => $user, "\x6a\165\x64\x75\154" => "\x54\x75\147\141\163\40\x4b\x65\154\141\x73", "\x73\165\142\152\x75\x64\165\x6c" => "\x54\x75\x67\x61\x73", "\163\x65\x74\164\151\156\147" => $setting]; goto oDSzw; zNzcv: $kelas_materi = []; goto u5Q3M; OlQv7: $setting = $this->dashboard->getSetting(); goto TP96y; YtEQx: $data["\x73\155\164"] = $this->dashboard->getSemester(); goto M9BIx; Of_HX: $data["\147\x75\162\165\163"] = $nguru; goto n40vg; UJwSG: $data["\x6a\141\144\x77\141\x6c\x5f\x6d\x61\x74\x65\x72\x69"] = $jadwal_materi; goto PPCfC; noHX0: $data["\147\x75\x72\165\163"] = $allGuru; goto yS0QU; RD8En: $materi = $this->kelas->getAllMateriKelas($id_guru, "\x32"); goto er90j; qF0OV: if ($this->ion_auth->is_admin()) { goto Ztvrr; } goto Wq8l6; u5Q3M: $jadwal_materi = []; goto iTM9d; er90j: foreach ($materi as $m) { goto uohcl; uohcl: $arrKls = unserialize($m->materi_kelas); goto hg6z3; AaLzo: MxL1F: goto t_W_w; jTRGG: $jadwal_materi[$m->id_materi] = $this->kelas->getJadwalByMateri($m->id_materi, "\x32", $tp->id_tp, $smt->id_smt); goto AaLzo; VweDO: $km = $this->kelas->getNamaKelasById(unserialize($m->materi_kelas)); goto Kr8gA; hg6z3: if (!(count($arrKls) > 0)) { goto MxL1F; } goto VweDO; tIWyB: $km = $this->kelas->getNamaKelasByKode(unserialize($m->materi_kelas)); goto xWB5W; VHSl8: $kelas_materi[$m->id_materi] = $km; goto jTRGG; Kr8gA: if (!($km == null)) { goto qrdx9; } goto tIWyB; t_W_w: m2KGJ: goto E6302; xWB5W: qrdx9: goto VHSl8; E6302: } goto KWQa3; J78Sd: } public function data($guru = null) { goto T6ZU5; T6ZU5: $tp = $this->dashboard->getTahunActive(); goto qvw1m; OuAKL: $this->output_json($this->kelas->getMateriKelas($guru, $tp->id_tp, $smt->id_smt), false); goto bCBc3; qvw1m: $smt = $this->dashboard->getSemesterActive(); goto OuAKL; bCBc3: } public function add($jenis, $id_materi = null) { goto o28YG; Jzku9: $data["\147\165\162\165\163"] = $this->dropdown->getAllGuru(); goto YA9Fl; UozVf: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto X_vF8; Ev8J7: if ($this->ion_auth->is_admin()) { goto ADk21; } goto gEoGY; O7_pG: goto nLnY2; goto ExoR3; yOJON: $data["\151\x64\x5f\x67\x75\x72\x75"] = $guru->id_guru; goto R3DYn; L_qXx: $data["\164\x70"] = $this->dashboard->getTahun(); goto wGoA4; X_vF8: $data["\163\155\164\137\141\x63\164\151\x76\x65"] = $smt; goto P2gia; wGoA4: $data["\x74\160\x5f\141\143\164\151\166\x65"] = $tp; goto UozVf; F2gri: $data["\x6d\x61\x74\x65\x72\x69"] = json_decode(json_encode($this->kelas->getDummyMateri())); goto LcuNs; rBrw5: if ($id_materi == null) { goto sKuAL; } goto CmqkM; UecT7: $this->load->view("\x5f\164\x65\x6d\x70\x6c\x61\164\x65\163\x2f\x64\x61\163\150\x62\x6f\141\162\144\57\x5f\146\x6f\157\x74\x65\x72"); goto uTVQt; LyFNr: $tp = $this->dashboard->getTahunActive(); goto CboDk; CboDk: $smt = $this->dashboard->getSemesterActive(); goto L_qXx; LcuNs: $data["\x69\x64\137\147\165\x72\x75"] = ''; goto UuThM; SNawb: $data["\x6d\141\164\x65\x72\151"] = $this->kelas->getMateriKelasById($id_materi, $jenis); goto utJk_; gEoGY: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto goSv8; o28YG: $title = $jenis == "\x31" ? "\x4d\x61\164\x65\162\151" : "\x54\x75\147\x61\163"; goto pTN8X; SDhzC: K7t8w: goto bMKov; ExoR3: ADk21: goto AFAcS; R3DYn: $this->load->view("\155\x65\155\142\x65\162\163\x2f\147\165\162\165\57\164\x65\155\x70\154\141\164\145\x73\57\x68\x65\141\144\145\x72", $data); goto JNfr3; utJk_: goto K7t8w; goto arPUI; obm8X: $this->load->view("\155\145\155\142\x65\162\x73\x2f\147\x75\162\165\57\x74\x65\155\x70\x6c\x61\x74\145\163\x2f\146\157\157\x74\145\162"); goto O7_pG; jTVoK: $data["\147\x75\x72\x75\163"] = $nguru; goto fsBjr; ROBAZ: $data["\x6a\x65\156\x69\163"] = $jenis; goto Ev8J7; Frend: $data["\x6d\x61\164\x65\x72\151"] = json_decode(json_encode($this->kelas->getDummyMateri())); goto SDhzC; aKWgt: $this->load->view("\x6b\145\154\x61\163\x2f\x6d\141\x74\x65\162\x69\57\141\x64\144"); goto UecT7; JNfr3: $this->load->view("\x6b\145\x6c\141\163\57\155\x61\164\145\x72\151\x2f\141\144\144"); goto obm8X; YA9Fl: $this->load->view("\x5f\164\x65\155\160\x6c\141\x74\145\x73\x2f\x64\x61\x73\x68\142\x6f\141\x72\x64\57\x5f\x68\145\x61\x64\145\x72", $data); goto aKWgt; AFAcS: $data["\160\162\x6f\x66\x69\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto rBrw5; rCTL8: goto EDSGc; goto X0L7C; EhApo: $data["\x69\144\137\x67\165\162\165"] = $materi->id_guru; goto rCTL8; bMKov: $nguru[$guru->id_guru] = $guru->nama_guru; goto jTVoK; pTN8X: $user = $this->ion_auth->user()->row(); goto XGnTX; cO70Z: $data["\151\x64\137\155\141\164\145\x72\151"] = $id_materi; goto ROBAZ; uTVQt: nLnY2: goto ydZi_; atKXC: $data["\155\141\x74\145\162\151"] = $materi; goto EhApo; X0L7C: sKuAL: goto F2gri; XGnTX: $data = ["\165\163\145\x72" => $user, "\x6a\x75\144\x75\154" => $title, "\x73\165\142\152\165\x64\x75\x6c" => $id_materi == null ? "\x42\x75\x61\164\x20" . $title . "\40\x42\x61\162\x75" : "\105\x64\x69\164\x20" . $title, "\x73\x65\164\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto LyFNr; UuThM: EDSGc: goto Jzku9; arPUI: u93OI: goto Frend; P2gia: $data["\x6b\145\154\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto cO70Z; goSv8: if ($id_materi == null) { goto u93OI; } goto SNawb; CmqkM: $materi = $this->kelas->getMateriKelasById($id_materi, $jenis); goto atKXC; fsBjr: $data["\147\165\x72\165"] = $guru; goto yOJON; ydZi_: } public function dataAddKelas($guru) { goto yppuc; yppuc: $tp = $this->dashboard->getTahunActive(); goto Mj_DC; sRX9F: $kelas = unserialize($guru->mapel_kelas); goto vW6AT; Mj_DC: $smt = $this->dashboard->getSemesterActive(); goto LxxrI; vW6AT: $this->output_json($kelas); goto Cz1XV; LxxrI: $guru = $this->kelas->getGuruMapelKelas($guru, $tp->id_tp, $smt->id_smt); goto sRX9F; Cz1XV: } public function dataAddJadwal() { goto COfLU; COfLU: $id_kelas = $this->input->get("\x6b\x65\x6c\x61\x73"); goto z1MXu; xszaz: $jadwal_terisi = $this->kelas->getJadwalTerisi("\x6b\145\154\141\x73\x5f\152\141\x64\x77\141\x6c\x5f\155\x61\x74\145\x72\151", $id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto u1pSJ; pK14U: $mapel = $this->kelas->getJadwalMapelByMapel($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto xszaz; SZwP_: $smt = $this->dashboard->getSemesterActive(); goto pK14U; KKzET: $tp = $this->dashboard->getTahunActive(); goto SZwP_; u1pSJ: $this->output_json(["\155\x61\x70\x65\x6c" => $mapel, "\x74\x65\x72\151\x73\x69" => $jadwal_terisi]); goto t6S5c; z1MXu: $id_mapel = $this->input->get("\155\x61\x70\145\x6c"); goto KKzET; t6S5c: } public function saveJadwal() { goto oGlTV; KHQ9X: $jam_ke = $this->input->post("\x6a\x61\x6d\137\x6b\x65", true); goto MHmL_; EZT1F: $this->logging->saveLog(3, "\x6d\x65\162\x75\142\x61\x68\40\x6a\141\144\167\141\154\x20\155\141\x74\145\162\x69"); goto d_nls; r3ixI: $tp = $this->dashboard->getTahunActive(); goto n5aEv; n5aEv: $smt = $this->dashboard->getSemesterActive(); goto E3vg7; MHmL_: $jadwal = $this->input->post("\152\x61\144\x77\141\x6c\x5f\x6d\x61\x74\x65\162\x69", true); goto r3ixI; nOchF: $jenis = $this->input->post("\x6a\x65\x6e\151\163", true); goto KHQ9X; E3vg7: $jdwl = str_replace("\x2d", '', $jadwal); goto JyXws; d_nls: $this->output_json($update); goto ozXpF; fs5gb: $update = $this->db->replace("\x6b\145\x6c\x61\x73\x5f\152\141\x64\x77\x61\154\137\155\141\x74\145\x72\151", $insert); goto EZT1F; yhGQl: $id_mapel = $this->input->post("\x69\144\x5f\x6d\141\x70\x65\x6c", true); goto UDCIN; JyXws: $insert = ["\x69\x64\x5f\x6b\x6a\x6d" => $id_kelas . $tp->id_tp . $smt->id_smt . $jdwl . $jam_ke . $jenis, "\151\x64\x5f\x74\x70" => $tp->id_tp, "\151\144\137\x73\155\164" => $smt->id_smt, "\x69\x64\x5f\x6b\x65\154\141\x73" => $id_kelas, "\x69\144\x5f\x6d\x61\x74\145\162\151" => $id_materi, "\151\x64\137\x6d\141\160\145\x6c" => $id_mapel, "\x6a\x61\144\x77\141\x6c\x5f\x6d\141\164\x65\x72\x69" => $jadwal, "\x6a\x65\x6e\151\x73" => $jenis]; goto fs5gb; oGlTV: $id_materi = $this->input->post("\151\x64\x5f\x6d\x61\164\145\x72\151", true); goto yhGQl; UDCIN: $id_kelas = $this->input->post("\x69\x64\x5f\153\x65\x6c\x61\x73", true); goto nOchF; ozXpF: } public function hapusJadwal($id) { goto LpfsE; Hq8Vd: $this->db->where("\151\144\x5f\153\152\x6d", $id); goto NDqSt; t9nd4: $this->output_json($update); goto GECpG; LpfsE: $this->db->set("\x69\144\137\x6d\141\164\x65\x72\151", "\x30"); goto Hq8Vd; NDqSt: $update = $this->db->update("\x6b\x65\154\x61\163\x5f\x6a\141\144\x77\x61\x6c\137\155\141\x74\x65\x72\x69"); goto t9nd4; GECpG: } public function saveMateri() { goto hdhVi; o5J16: YmdOL: goto wCDa9; Bw6zU: $data["\165\160\144\141\x74\145\144\x5f\157\x6e"] = date("\131\x2d\x6d\x2d\144\40\x48\72\151\x3a\x73"); goto PZaJH; pTMgo: TMh5v: goto mrx27; v37NH: $tp = $this->dashboard->getTahunActive(); goto JqTyM; xX9K7: $saved = $this->master->update("\153\x65\x6c\x61\x73\x5f\x6d\141\164\x65\162\x69", $data, "\151\x64\x5f\x6d\141\164\145\162\x69", $id_materi); goto fx6BT; guZhg: JFSYS: goto DYVDQ; a5uUS: goto CcLA0; goto guZhg; wmYwt: $dom->loadHTML($isi_materi); goto HZX8A; cZGlt: $data["\x63\162\x65\141\x74\145\x64\x5f\157\156"] = date("\131\x2d\155\55\144\x20\110\x3a\x69\72\x73"); goto QvhfE; eIfiE: $result["\163\x74\141\x74\x75\163"] = $saved; goto fx3lq; JqTyM: $smt = $this->dashboard->getSemesterActive(); goto zNJFZ; QvhfE: $data["\165\160\144\x61\x74\145\144\x5f\157\156"] = date("\x59\55\x6d\55\x64\40\110\72\151\72\163"); goto zGgd7; El9Yk: $i = 0; goto bxGB2; iyKeW: foreach ($images as $image) { goto T6kSt; T6kSt: $base64_image_string = $image->getAttribute("\x73\x72\x63"); goto WvL9z; xW1IA: if (!($extension == "\152\160\x65\x67")) { goto y9mEU; } goto U5z2z; pi7aY: goto ut6Ux; goto s56qY; nWjdX: ut6Ux: goto ExavR; v7wcl: $output_file = ''; goto cBuTF; fAlbs: file_put_contents("\x2e\x2f\165\x70\x6c\x6f\141\x64\163\x2f\x6d\x61\x74\x65\162\151\x2f" . $output_file, base64_decode($data)); goto Fxsog; KdAJ8: $data = $splited[1]; goto A_Zyg; s56qY: PpW0M: goto cStso; U5z2z: $extension = "\x6a\x70\x67"; goto RdJat; RdJat: y9mEU: goto o6wYl; o6wYl: $output_file = "\x69\155\x67\x5f" . date("\131\155\144\x48\x69\163") . $numimg . "\x2e" . $extension; goto K2JUg; nyFwT: $numimg++; goto pi7aY; VmiSI: $extension = $mime_split[1]; goto xW1IA; kdzn8: $mime_split = explode("\57", $mime_split_without_base64[0], 2); goto v7wcl; M9CZ5: $mime = $splited[0]; goto KdAJ8; yujjz: $splited = explode("\x2c", substr($base64_image_string, 5), 2); goto M9CZ5; A_Zyg: $mime_split_without_base64 = explode("\x3b", $mime, 2); goto kdzn8; vtKRB: $image->setAttribute("\163\x72\x63", $pathUpload . $forReplace[1]); goto nWjdX; cStso: $pathUpload = "\165\x70\154\x6f\x61\x64\x73"; goto C2XSD; WvL9z: if (strpos($base64_image_string, "\150\164\x74\x70") !== false) { goto PpW0M; } goto yujjz; Fxsog: $image->setAttribute("\163\x72\143", "\x75\160\x6c\x6f\141\x64\x73\57\x6d\141\164\x65\x72\x69\57" . $output_file); goto nyFwT; K2JUg: nkcKz: goto fAlbs; ExavR: MDej1: goto Ay1ZG; C2XSD: $forReplace = explode($pathUpload, $base64_image_string); goto vtKRB; cBuTF: if (!(count($mime_split) == 2)) { goto nkcKz; } goto VmiSI; Ay1ZG: } goto D53H7; qPlnf: $this->logging->saveLog(3, "\155\145\x6d\142\x75\x61\164\40\155\141\164\x65\162\151"); goto pTMgo; lT2Xx: $dom = new DOMDocument(); goto wmYwt; oAdV6: $attach = json_decode($this->input->post("\141\x74\164\x61\x63\150", true)); goto aJi2o; mrx27: $this->output_json($result); goto j0XD5; QdFVT: $result["\x6d\145\x73\x73\141\x67\145"] = "\115\141\164\145\x72\x69\40\x62\145\x72\x68\141\163\x69\x6c\x20\144\x69\x62\165\x61\x74"; goto qPlnf; Jg9Zn: $id_kelas[] = $this->input->post("\x6b\145\x6c\x61\x73\x5b" . $i . "\135", true); goto b3Jhi; fx3lq: $result["\155\145\163\x73\141\147\x65"] = "\115\141\164\x65\x72\x69\40\142\x65\162\150\141\x73\151\x6c\x20\144\x69\x62\x75\x61\164"; goto hfmbE; DYVDQ: $isi_materi = $this->input->post("\151\163\x69\137\x6d\x61\164\145\162\x69", false); goto lT2Xx; vF7J6: $result["\x6d\x65\163\x73\141\147\x65"] = "\x4d\141\164\145\x72\x69\40\142\x65\162\x68\141\x73\x69\154\x20\144\x69\x75\x70\x64\141\x74\145"; goto R1TS4; YBtlJ: $cek_materi = $this->kelas->getMateriKelasById($id_materi, $jenis); goto ul8Sw; RqWeh: $isi = preg_replace("\43\x5c\x73\50\151\x64\x7c\x63\154\x61\x73\163\x29\75\x22\x5b\x5e\42\x5d\x2b\x22\x23", '', $isi); goto v37NH; PZaJH: $saved = $this->master->create("\153\145\154\x61\163\137\x6d\x61\164\x65\x72\151", $data); goto lfAMp; SpTh4: if (!($i < $kelas)) { goto JFSYS; } goto Jg9Zn; ul8Sw: if ($cek_materi->id_tp == $tp->id_tp && $cek_materi->id_smt == $smt->id_smt) { goto DiXBp; } goto cZGlt; ekhe8: goto sPhZR; goto aFaw3; SBhw6: foreach ($attach as $at) { goto XFdgu; XFdgu: if (!($at->name != null)) { goto jnvHL; } goto Ex6bV; Ex6bV: $src_file[] = ["\x73\162\x63" => $at->src, "\163\151\x7a\x65" => $at->size, "\x74\171\160\145" => $at->type, "\x6e\141\155\145" => $at->name]; goto PI2f9; C70j0: tTCXQ: goto dVg2j; PI2f9: jnvHL: goto C70j0; dVg2j: } goto o5J16; lfAMp: $result["\162\145\163\x75\154\164\137\151\x64"] = $this->db->insert_id(); goto cKz9p; rGUK1: $data["\143\x72\145\141\164\x65\144\137\157\156"] = date("\x59\x2d\x6d\x2d\x64\x20\x48\x3a\151\x3a\x73"); goto Bw6zU; hdhVi: $jenis = $this->input->post("\x6a\145\156\151\163", true); goto O2s7b; FW34u: sPhZR: goto PjIGz; O2s7b: $id_materi = $this->input->post("\x69\x64\137\x6d\141\164\145\x72\x69", true); goto yTlMI; zGgd7: $saved = $this->master->create("\x6b\145\154\x61\x73\x5f\155\x61\164\x65\x72\x69", $data); goto eIfiE; t6t_E: $isi = $dom->saveHTML(); goto RqWeh; bxGB2: CcLA0: goto SpTh4; fvQaR: $numimg = 1; goto iyKeW; PjIGz: goto TMh5v; goto EMa2P; fx6BT: $result["\x73\164\x61\x74\x75\163"] = $saved; goto vF7J6; Ecsy4: if ($id_materi === '') { goto KaK9w; } goto YBtlJ; aJi2o: $src_file = []; goto SBhw6; b3Jhi: dmS9C: goto e7r58; R1TS4: $this->logging->saveLog(4, "\155\145\156\x67\145\x64\151\x74\x20\155\x61\x74\x65\162\151"); goto FW34u; Zxkro: $data["\x75\x70\144\141\x74\x65\x64\x5f\x6f\156"] = date("\x59\55\x6d\55\x64\40\x48\x3a\151\72\163"); goto sZA2U; sZA2U: $data["\151\144\x5f\155\141\x74\145\162\151"] = $id_materi; goto xX9K7; e7r58: $i++; goto a5uUS; EMa2P: KaK9w: goto rGUK1; zNJFZ: $data = ["\152\145\156\151\163" => $jenis, "\x69\144\137\164\160" => $tp->id_tp, "\x69\144\x5f\163\x6d\x74" => $smt->id_smt, "\153\x6f\x64\145\137\155\x61\164\145\x72\151" => $this->input->post("\x6b\157\x64\x65\x5f\x6d\141\164\x65\x72\151", true), "\x69\144\137\x67\165\162\x75" => $this->input->post("\x67\165\x72\165", true), "\x69\x64\137\155\141\x70\x65\x6c" => $this->input->post("\155\141\160\x65\x6c", true), "\152\x75\144\165\154\137\x6d\x61\164\x65\x72\151" => $this->input->post("\x6a\x75\144\165\154", true), "\151\163\x69\x5f\x6d\141\164\x65\162\x69" => $isi, "\x6d\x61\x74\x65\x72\151\137\x6b\x65\154\141\x73" => serialize($id_kelas), "\146\151\154\145" => serialize($src_file)]; goto Ecsy4; wCDa9: $id_kelas = []; goto El9Yk; aFaw3: DiXBp: goto Zxkro; yTlMI: $kelas = count($this->input->post("\153\145\154\x61\163", true)); goto oAdV6; cKz9p: $result["\x73\x74\x61\x74\x75\x73"] = $saved; goto QdFVT; D53H7: zXoka: goto t6t_E; hfmbE: $this->logging->saveLog(3, "\x6d\x65\155\142\x75\x61\x74\x20\155\141\164\x65\x72\x69"); goto ekhe8; HZX8A: $images = $dom->getElementsByTagName("\151\155\x67"); goto fvQaR; j0XD5: } public function copyMateri($id_materi, $jenis) { goto d0wxj; WupWd: $this->logging->saveLog(3, "\155\x65\x6d\142\165\x61\x74\40\x6d\141\164\x65\x72\x69"); goto OjIbw; PuMl2: $materi = $this->kelas->getMateriKelasById($id_materi, $jenis); goto oK3hC; d0wxj: $tp = $this->dashboard->getTahunActive(); goto cnyvT; cnyvT: $smt = $this->dashboard->getSemesterActive(); goto PuMl2; OjIbw: $this->output_json($result); goto h_E1o; D12Rq: $result = $this->master->create("\x6b\145\x6c\x61\x73\137\155\x61\164\x65\x72\x69", $data); goto WupWd; oK3hC: $data = ["\x6a\145\x6e\x69\x73" => $jenis, "\151\x64\137\x74\160" => $tp->id_tp, "\x69\x64\137\x73\155\x74" => $smt->id_smt, "\153\x6f\x64\x65\x5f\155\141\164\x65\x72\x69" => $materi->kode_materi, "\x69\144\x5f\x67\x75\x72\165" => $materi->id_guru, "\x69\144\x5f\x6d\x61\160\x65\x6c" => $materi->id_mapel == null ? 0 : $materi->id_mapel, "\152\165\x64\x75\154\137\155\141\x74\145\x72\x69" => $materi->judul_materi, "\151\163\x69\137\155\x61\x74\145\162\x69" => $materi->isi_materi, "\x6d\x61\164\145\x72\x69\137\153\x65\154\141\x73" => $materi->materi_kelas, "\146\x69\154\x65" => $materi->file, "\143\x72\x65\141\x74\x65\x64\137\157\156" => date("\x59\55\x6d\x2d\x64\40\110\x3a\151\x3a\x73"), "\x75\160\144\x61\164\x65\x64\137\157\x6e" => date("\x59\55\155\x2d\x64\40\110\72\151\72\x73")]; goto D12Rq; h_E1o: } public function aktifkanMateri() { goto bVGVN; Do5lI: $this->db->set("\163\164\x61\164\x75\x73", $stat); goto OD9QX; OD9QX: $this->db->where("\151\x64\137\155\141\x74\x65\x72\151", $id); goto dM8ZC; ry2Lb: $id = $this->input->post("\x69\x64\137\x6d\141\x74\x65\162\151", true); goto Qz2dp; bVGVN: $method = $this->input->post("\x6d\145\x74\x68\157\x64", true); goto ry2Lb; GgQwP: $this->logging->saveLog(3, "\155\x65\x6e\147\x61\x6b\x74\x69\146\153\x61\156\40\155\x61\x74\145\x72\x69"); goto A4r0i; dM8ZC: $this->db->update("\153\145\x6c\141\x73\137\155\x61\x74\x65\162\151"); goto GgQwP; Qz2dp: $stat = $method == "\61" ? "\60" : "\61"; goto Do5lI; A4r0i: $this->output_json(["\163\164\141\164\x75\163" => true]); goto u2Wz4; u2Wz4: } public function hapusMateri() { goto D4uTz; xnBPR: RMBtx: goto U6ZSH; Lp8jR: if (!$this->master->delete("\153\x65\154\x61\163\x5f\x6a\141\144\x77\x61\x6c\137\x6d\x61\x74\x65\x72\151", $id, "\151\144\137\155\x61\164\x65\x72\151")) { goto RMBtx; } goto FWsF8; U6ZSH: ufoTG: goto KhZIL; vPoXH: $this->output_json(["\163\x74\x61\x74\165\x73" => true]); goto xnBPR; nActK: if (!$this->master->delete("\153\x65\x6c\141\163\x5f\155\141\164\x65\x72\151", $id, "\x69\144\x5f\x6d\x61\164\145\162\x69")) { goto ufoTG; } goto Lp8jR; FWsF8: $this->logging->saveLog(5, "\155\x65\x6e\147\x68\141\160\165\163\40\155\x61\164\145\162\151"); goto vPoXH; D4uTz: $id = $this->input->post("\x69\144\x5f\x6d\x61\x74\145\162\151", true); goto nActK; KhZIL: } public function deleteAllMateri() { goto IgN1x; M3Glk: $this->output_json(["\x73\164\x61\x74\165\x73" => true]); goto kaJMi; IgN1x: $ids = json_decode($this->input->post("\x69\x64\163", true)); goto X8fr9; RdL76: $this->logging->saveLog(5, "\x6d\145\x6e\x67\150\141\160\165\163\x20\155\x61\164\145\162\151"); goto f0eM3; kaJMi: OjNAU: goto FiEKB; bz0GC: if (!$this->master->delete("\153\145\x6c\x61\163\137\152\141\x64\167\141\x6c\137\155\141\164\145\162\x69", $ids, "\x69\x64\x5f\155\141\164\145\x72\151")) { goto KZn0K; } goto RdL76; X8fr9: if (!$this->master->delete("\x6b\x65\x6c\141\x73\137\155\141\164\145\162\151", $ids, "\151\144\137\x6d\x61\x74\145\162\151")) { goto OjNAU; } goto bz0GC; f0eM3: KZn0K: goto M3Glk; FiEKB: } function uploadFile() { goto Bdcl5; croc2: goto sdwa0; goto xINv7; THYJ1: $data["\163\164\141\x74\165\x73"] = true; goto croc2; BfYHh: $data["\x73\x69\172\145"] = $_FILES["\146\151\x6c\145\137\165\160\x6c\157\x61\x64\163"]["\x73\x69\x7a\145"]; goto GWmTi; bP9EV: $this->output_json($data); goto m5fpH; GWmTi: JQk2C: goto bP9EV; bGX2A: $result = $this->upload->data(); goto MTHAp; bB5ek: $data["\163\162\143"] = $this->upload->display_errors(); goto w9ZXC; Bdcl5: $max_size = $this->input->post("\155\x61\x78\55\163\151\x7a\145", true); goto K0KJF; BNe7g: $data["\163\x74\141\x74\x75\x73"] = false; goto bB5ek; AaLoE: $data["\146\151\x6c\x65\x6e\141\155\145"] = pathinfo($result["\146\x69\154\x65\x5f\156\x61\155\145"], PATHINFO_FILENAME); goto THYJ1; VTDub: $config["\x75\160\154\157\141\x64\137\160\141\x74\150"] = "\56\x2f\165\x70\x6c\x6f\141\144\163\x2f\155\x61\x74\145\x72\151\x2f"; goto jJKu1; FWH3u: $config["\155\141\x78\x5f\163\151\x7a\x65"] = $max_size; goto A1c3G; uEIsk: $data["\164\x79\x70\x65"] = $_FILES["\146\x69\x6c\145\137\165\x70\154\157\x61\144\163"]["\164\171\x70\x65"]; goto BfYHh; jJKu1: $config["\141\154\x6c\157\167\x65\x64\x5f\x74\171\160\145\x73"] = "\152\160\147\x7c\x6a\x70\145\147\174\x70\x6e\x67\x7c\x67\151\146\x7c\x6d\160\x65\x67\174\155\160\147\174\x6d\160\x65\147\63\174\155\x70\63\174\167\141\166\174\x77\x61\166\145\174\x6d\x70\64\174\141\x76\x69\x7c\x64\x6f\143\174\x64\x6f\x63\170\174\x78\x6c\163\174\170\x6c\163\x78\174\x70\x70\164\x7c\x70\160\164\170\x7c\143\163\x76\174\x70\144\x66\174\x72\x74\x66\174\164\170\164"; goto FWH3u; A1c3G: $config["\157\x76\145\162\x77\x72\151\164\x65"] = TRUE; goto RXLAx; K0KJF: if (!isset($_FILES["\146\x69\x6c\145\137\165\160\x6c\157\x61\x64\163"]["\156\x61\155\x65"])) { goto JQk2C; } goto VTDub; RXLAx: $this->upload->initialize($config); goto FlceM; xINv7: PgpyE: goto BNe7g; FlceM: if (!$this->upload->do_upload("\146\151\x6c\x65\137\165\x70\154\x6f\x61\x64\x73")) { goto PgpyE; } goto bGX2A; MTHAp: $data["\x73\x72\143"] = "\165\x70\154\x6f\x61\144\x73\x2f\155\141\164\145\x72\151\57" . $result["\x66\151\x6c\x65\x5f\x6e\x61\x6d\x65"]; goto AaLoE; w9ZXC: sdwa0: goto uEIsk; m5fpH: } function deleteFile() { goto Th1n3; L85R2: echo "\106\x69\x6c\x65\40\104\x65\154\145\164\145\40\123\x75\143\143\x65\x73\x73\146\165\154\154\171"; goto anLpw; eZxEp: goto vjPQ8; goto M5FLl; Th1n3: $src = $this->input->post("\x73\x72\143"); goto PFUSi; PFUSi: if (unlink($src)) { goto ud6Ky; } goto u7tS3; anLpw: vjPQ8: goto SeE8u; M5FLl: ud6Ky: goto L85R2; u7tS3: echo "\x47\x61\x67\141\154"; goto eZxEp; SeE8u: } function getListDate($day, $month, $year) { goto YTPqs; YTPqs: $list = array(); goto BsuqM; WTF4p: array_push($list, date("\131\x2d\x6d\x2d\x64", $time)); goto HWy0D; g5Hbo: $day_of_week = date("\116", $time); goto hEmIx; JyV0r: NmDju: goto U4FcJ; i5NoB: return $list; goto uw0JH; hEmIx: if (!(date("\155", $time) == $month && $day_of_week == $day)) { goto ttJMz; } goto WTF4p; HWy0D: ttJMz: goto JyV0r; MwF4Q: $d = 1; goto IO5lT; U4FcJ: $d++; goto wZ6JC; E23Ks: if (!($d <= $numdays)) { goto DooGb; } goto G70Jo; wZ6JC: goto CbPSr; goto FM1nb; BsuqM: $numdays = cal_days_in_month(CAL_GREGORIAN, $month, $year); goto MwF4Q; IO5lT: CbPSr: goto E23Ks; FM1nb: DooGb: goto i5NoB; G70Jo: $time = mktime(12, 0, 0, $month, $d, $year); goto g5Hbo; uw0JH: } }
