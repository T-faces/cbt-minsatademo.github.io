<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\x53\x45\120\101\x54\110") or exit("\116\157\40\144\x69\x72\x65\143\x74\40\163\x63\x72\x69\x70\x74\40\141\143\x63\145\x73\x73\40\141\154\154\157\x77\x65\144"); class HasilUjian extends CI_Controller { public function __construct() { goto rb__n; rb__n: parent::__construct(); goto MOEcq; qYGX1: $this->load->model("\x55\x6a\151\141\156\x5f\155\x6f\x64\145\154", "\165\x6a\151\141\156"); goto COYOj; COYOj: $this->user = $this->ion_auth->user()->row(); goto Ks2fr; MOEcq: if ($this->ion_auth->logged_in()) { goto CRKM0; } goto a9Q1R; u694F: $this->load->model("\x4d\141\x73\x74\145\162\137\x6d\157\144\x65\154", "\155\141\163\x74\145\162"); goto qYGX1; gUKpV: CRKM0: goto hRAV8; a9Q1R: redirect("\x61\165\x74\150"); goto gUKpV; hRAV8: $this->load->library(["\144\x61\164\x61\x74\x61\x62\x6c\x65\x73"]); goto u694F; Ks2fr: } public function output_json($data, $encode = true) { goto wcQ73; umCkz: b65NG: goto mq8Zq; wcQ73: if (!$encode) { goto b65NG; } goto HcRs2; mq8Zq: $this->output->set_content_type("\141\x70\160\154\x69\143\141\x74\151\x6f\x6e\57\x6a\163\x6f\156")->set_output($data); goto lv5u4; HcRs2: $data = json_encode($data); goto umCkz; lv5u4: } public function data() { goto PYOwN; FXEGw: $nip_guru = $this->user->username; goto PUmu3; PUmu3: gDp2M: goto Tg0Z0; jaz2N: if (!$this->ion_auth->in_group("\x67\165\162\165")) { goto gDp2M; } goto FXEGw; Tg0Z0: $this->output_json($this->ujian->getHasilUjian($nip_guru), false); goto gvmUy; PYOwN: $nip_guru = null; goto jaz2N; gvmUy: } public function NilaiMhs($id) { $this->output_json($this->ujian->HslUjianById($id, true), false); } public function index() { goto aL5dV; UBUwx: $this->load->view("\x5f\164\x65\x6d\160\154\x61\x74\145\x73\57\x64\141\x73\150\x62\x6f\x61\162\x64\x2f\137\x66\x6f\157\164\x65\162\56\x70\150\x70"); goto pIgn7; aL5dV: $data = ["\165\163\145\162" => $this->user, "\152\165\x64\165\x6c" => "\x55\x6a\x69\x61\x6e", "\163\165\x62\152\165\144\165\x6c" => "\x48\x61\x73\x69\154\40\x55\152\151\x61\x6e"]; goto oJgLP; oJgLP: $this->load->view("\137\x74\x65\155\x70\154\141\x74\145\x73\57\144\141\163\150\x62\157\x61\x72\x64\x2f\x5f\x68\x65\x61\144\145\x72\x2e\x70\150\x70", $data); goto F2Ajo; F2Ajo: $this->load->view("\x75\x6a\151\x61\x6e\x2f\x68\x61\163\x69\154"); goto UBUwx; pIgn7: } public function detail($id) { goto tANx3; yua2x: $this->load->view("\x75\152\x69\x61\156\57\x64\145\x74\x61\151\x6c\x5f\x68\x61\163\x69\154"); goto ECNoL; SxSSp: $nilai = $this->ujian->bandingNilai($id); goto yKMrH; tANx3: $ujian = $this->ujian->getUjianById($id); goto SxSSp; yKMrH: $data = ["\165\x73\145\162" => $this->user, "\x6a\165\144\165\x6c" => "\125\x6a\151\141\156", "\x73\165\142\152\x75\144\165\154" => "\x44\145\164\x61\x69\154\x20\110\x61\163\x69\154\40\125\152\151\141\x6e", "\x75\152\x69\x61\x6e" => $ujian, "\156\151\154\141\151" => $nilai]; goto pQf0v; ECNoL: $this->load->view("\137\x74\145\155\x70\154\141\164\145\163\57\x64\141\x73\x68\142\x6f\x61\162\x64\x2f\137\x66\157\x6f\x74\x65\162\56\160\150\x70"); goto ixE49; pQf0v: $this->load->view("\x5f\164\145\155\160\154\x61\164\x65\x73\x2f\144\x61\x73\150\x62\157\141\162\144\x2f\137\x68\x65\x61\x64\145\162\56\160\x68\160", $data); goto yua2x; ixE49: } public function cetak($id) { goto yWZi2; yWZi2: $mhs = $this->ujian->getIdMahasiswa($this->user->username); goto Ic1dL; teg8C: $this->load->view("\x75\x6a\151\x61\156\x2f\143\145\x74\141\153", $data); goto bkDrk; bilbQ: $ujian = $this->ujian->getUjianById($id); goto H_Sx2; H_Sx2: $data = ["\x75\152\x69\141\x6e" => $ujian, "\150\x61\x73\x69\154" => $hasil, "\155\x68\x73" => $mhs]; goto teg8C; Ic1dL: $hasil = $this->ujian->HslUjian($id, $mhs->id_siswa)->row(); goto bilbQ; bkDrk: } public function cetak_detail($id) { goto XGj54; rdkbJ: $hasil = $this->ujian->HslUjianById($id)->result(); goto EMYfY; XGj54: $ujian = $this->ujian->getUjianById($id); goto VexIn; VexIn: $nilai = $this->ujian->bandingNilai($id); goto rdkbJ; EMYfY: $data = ["\x75\x6a\151\x61\x6e" => $ujian, "\156\151\154\141\x69" => $nilai, "\x68\x61\x73\x69\154" => $hasil]; goto uiEFQ; uiEFQ: $this->load->view("\165\x6a\151\141\x6e\x2f\x63\x65\x74\141\x6b\x5f\x64\145\164\141\151\154", $data); goto RoLf0; RoLf0: } }
