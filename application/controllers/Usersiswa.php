<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\101\123\105\120\x41\124\110") or exit("\116\157\x20\x64\x69\162\x65\x63\164\40\x73\143\162\151\160\164\x20\141\143\143\x65\163\163\x20\x61\x6c\x6c\157\167\145\144"); class Usersiswa extends CI_Controller { public function __construct() { goto HNUT_; BLH2l: iUU34: goto mLnY4; tDVSa: redirect("\141\x75\164\150"); goto BLH2l; kuwNX: $this->form_validation->set_error_delimiters('', ''); goto BCXuK; OkCOA: $this->load->model("\125\x73\x65\162\163\x5f\155\157\x64\145\154", "\165\163\145\x72\x73"); goto Ua8Y0; HNUT_: parent::__construct(); goto JJq3Z; QFskl: $this->load->model("\x44\141\163\x68\x62\157\141\x72\x64\137\155\x6f\x64\x65\154", "\x64\x61\x73\150\x62\157\141\162\x64"); goto kuwNX; mLnY4: $this->load->library(["\144\x61\x74\141\164\141\x62\154\x65\163", "\x66\x6f\162\x6d\137\x76\x61\x6c\151\144\x61\164\151\157\156"]); goto OkCOA; Ua8Y0: $this->load->model("\115\x61\x73\164\x65\x72\x5f\155\x6f\144\x65\154", "\155\141\163\x74\x65\162"); goto QFskl; JJq3Z: if ($this->ion_auth->logged_in()) { goto iUU34; } goto tDVSa; BCXuK: } public function is_has_access() { goto w3kVZ; YRwdz: if (!(!$group === "\x61\x64\x6d\151\156" or !$group === "\147\x75\162\x75")) { goto NduKy; } goto jDeFz; Br5Yt: NduKy: goto PKJW4; w3kVZ: $user_id = $this->ion_auth->user()->row()->id; goto TN7WE; TN7WE: $group = $this->ion_auth->get_users_groups($user_id)->row()->name; goto YRwdz; jDeFz: show_error("\x48\141\156\171\141\x20\x41\144\155\151\156\x69\163\x74\162\x61\x74\x6f\162\x20\x79\141\x6e\x67\40\144\151\x62\x65\x72\151\40\150\x61\153\x20\165\156\164\x75\153\x20\155\x65\156\147\x61\153\163\x65\x73\x20\150\x61\x6c\141\155\x61\156\40\x69\156\x69\54\x20\x3c\x61\40\150\x72\145\x66\x3d\42" . base_url("\x64\x61\163\150\142\157\x61\162\x64") . "\42\x3e\x4b\145\155\142\141\x6c\x69\x20\x6b\145\x20\155\x65\156\x75\40\x61\167\x61\154\x3c\57\141\x3e", 403, "\x41\x6b\163\x65\163\40\124\x65\x72\x6c\x61\x72\x61\156\147"); goto Br5Yt; PKJW4: } public function output_json($data, $encode = true) { goto pgsmJ; L8c4r: $data = json_encode($data); goto s7eP5; weDqP: $this->output->set_content_type("\141\160\x70\x6c\151\x63\x61\x74\151\157\x6e\x2f\152\x73\x6f\156")->set_output($data); goto eklkX; s7eP5: S4jxo: goto weDqP; pgsmJ: if (!$encode) { goto S4jxo; } goto L8c4r; eklkX: } public function data() { goto m1NJr; m1NJr: $this->is_has_access(); goto PrNOp; wb_vC: $this->output_json($this->users->getUserSiswa($tp->id_tp, $smt->id_smt), false); goto CxgDi; PrNOp: $tp = $this->dashboard->getTahunActive(); goto gRKa4; gRKa4: $smt = $this->dashboard->getSemesterActive(); goto wb_vC; CxgDi: } public function index() { goto HDaVS; HDaVS: $this->is_has_access(); goto WhQoQ; cNLKt: $data = ["\165\163\145\x72" => $user, "\152\165\x64\x75\154" => "\125\163\145\162\x20\x4d\141\156\141\x67\145\155\145\156\164", "\163\165\x62\152\165\144\165\154" => "\104\141\x74\141\40\x55\x73\x65\162\40\123\151\163\x77\141", "\x70\162\157\x66\151\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\x74\151\x6e\147" => $this->dashboard->getSetting()]; goto D8QlQ; MBs61: $this->load->view("\x5f\x74\145\x6d\160\154\141\x74\145\163\x2f\144\x61\x73\x68\142\157\x61\162\x64\x2f\137\x66\157\x6f\x74\x65\162"); goto P293p; D8QlQ: $data["\x74\160"] = $this->dashboard->getTahun(); goto b8Y3b; WhQoQ: $user = $this->ion_auth->user()->row(); goto cNLKt; ikv6E: $this->load->view("\165\x73\145\162\x73\57\163\151\x73\x77\141\x2f\144\x61\x74\141"); goto MBs61; b8Y3b: $data["\164\160\137\x61\x63\x74\x69\x76\x65"] = $this->dashboard->getTahunActive(); goto ZDDrM; P9VYf: $this->load->view("\137\164\145\155\160\x6c\141\x74\x65\163\x2f\x64\x61\x73\x68\142\x6f\x61\162\x64\57\x5f\150\145\141\x64\x65\x72", $data); goto ikv6E; ZDDrM: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto lMe1e; lMe1e: $data["\x73\x6d\164\137\141\x63\x74\151\166\145"] = $this->dashboard->getSemesterActive(); goto P9VYf; P293p: } public function list() { goto JrA5K; wo7d3: $lists = $this->users->getUserSiswaPage($tp->id_tp, $smt->id_smt, $offset, $limit, $search); goto s_mCZ; s_mCZ: $data = ["\154\x69\x73\x74\163" => $lists, "\x74\x6f\164\x61\154" => $count_siswa, "\160\141\147\145\x73" => ceil($count_siswa / $limit), "\163\145\x61\162\143\150" => $search, "\x70\x65\x72\x70\141\x67\x65" => $limit]; goto yHZlt; JrA5K: $page = $this->input->post("\160\x61\x67\145", true); goto OFBqZ; yJ_Ed: $tp = $this->dashboard->getTahunActive(); goto MHzP5; MHzP5: $smt = $this->dashboard->getSemesterActive(); goto nOLLs; yHZlt: $this->output_json($data); goto WzsGX; nOLLs: $count_siswa = $this->users->getUserSiswaTotalPage($search); goto wo7d3; OFBqZ: $limit = $this->input->post("\x6c\151\x6d\x69\164", true); goto C7oV3; C7oV3: $search = $this->input->post("\x73\145\141\x72\x63\150", true); goto d9knp; d9knp: $offset = ($page - 1) * $limit; goto yJ_Ed; WzsGX: } private function registerSiswa($username, $password, $email, $additional_data, $group) { goto SC5uH; YdwPL: $data["\x73\x74\x61\x74\x75\163"] = true; goto zfjeA; nmF4h: sp23Y: goto CE_Mh; SC5uH: $reg = $this->ion_auth->register($username, $password, $email, $additional_data, $group); goto YdwPL; k6Zxe: $data["\x73\164\141\x74\x75\163"] = false; goto nmF4h; zfjeA: $data["\151\144"] = $reg; goto qJSvK; CE_Mh: return $data; goto DN064; qJSvK: if (!($reg == false)) { goto sp23Y; } goto k6Zxe; DN064: } private function aktifkan($siswa) { goto OEadv; IO_Ge: $additional_data = ["\146\151\x72\163\x74\x5f\x6e\141\155\x65" => $first_name, "\x6c\141\163\x74\137\x6e\141\x6d\145" => $last_name]; goto yyGDE; yyGDE: $group = array("\63"); goto r3rsv; uG_4g: if ($deleted) { goto f3VXb; } goto htBWe; evJmZ: $email = $siswa->nis . "\100\163\x69\x73\x77\141\56\143\157\x6d"; goto IO_Ge; S88Ed: goto yt1LV; goto a8b2n; f4_jr: kf_Ok: goto uG_4g; g2ke7: if (!($user_siswa != null)) { goto kf_Ok; } goto Yo3DW; Elflx: $data = ["\163\x74\x61\164\165\163" => $reg, "\155\x73\x67" => !$reg ? "\101\x6b\165\x6e\x20" . $siswa->nama . "\x20\147\x61\147\141\x6c\40\144\151\x61\x6b\x74\151\146\153\x61\156\x2e" : "\101\x6b\165\x6e\x20" . $siswa->nama . "\40\144\x69\141\x6b\x74\x69\146\x6b\141\x6e\x2e"]; goto dkmd_; A2yXi: $deleted = true; goto g2ke7; H17cc: $last_name = end($nama); goto lc2R8; dkmd_: yt1LV: goto w3JiP; vMR9I: $password = trim($siswa->password); goto evJmZ; OEadv: $nama = explode("\40", $siswa->nama); goto ejF65; Yo3DW: $deleted = $this->ion_auth->delete_user($user_siswa->id); goto f4_jr; a8b2n: f3VXb: goto IgL3i; htBWe: $data = ["\x73\x74\x61\x74\x75\x73" => false, "\x6d\163\x67" => "\101\x6b\x75\x6e\40\x73\x69\x73\x77\141\x20\164\151\x64\x61\153\40\x74\x65\x72\x73\x65\x64\151\141\x20\50\x73\165\x64\141\x68\40\144\x69\147\x75\x6e\x61\x6b\141\x6e\51\x2e"]; goto S88Ed; IgL3i: $reg = $this->registerSiswa($username, $password, $email, $additional_data, $group); goto Elflx; lc2R8: $username = trim($siswa->username); goto vMR9I; r3rsv: $user_siswa = $this->db->get_where("\x75\163\145\x72\163", "\145\x6d\141\x69\154\x3d\42" . $email . "\x22")->row(); goto A2yXi; w3JiP: return $data; goto Fuy7i; ejF65: $first_name = $nama[0]; goto H17cc; Fuy7i: } public function activate($id) { goto ABBTz; aU7DI: $data = $this->aktifkan($siswa); goto Ko2lq; ABBTz: $siswa = $this->users->getDataSiswa($id); goto aU7DI; Ko2lq: $this->output_json($data); goto uVe4E; uVe4E: } public function aktifkanSemua() { goto BIZz6; BIZz6: $siswaAktif = $this->users->getSiswaAktif(); goto bqOiE; LvEd_: $this->output_json($data); goto FBKjg; bqOiE: $jum = 0; goto goWwA; QhDN8: bwy0L: goto fJbmP; goWwA: foreach ($siswaAktif as $siswa) { goto f4pCw; rnNSi: HSzEn: goto QsLBg; l8cxy: $this->aktifkan($siswa); goto MfP8y; f4pCw: if (!($siswa->aktif == 0)) { goto dnwEj; } goto l8cxy; MfP8y: $jum += 1; goto TGmib; TGmib: dnwEj: goto rnNSi; QsLBg: } goto QhDN8; fJbmP: $data = ["\x73\164\x61\x74\x75\163" => true, "\152\x75\155\154\x61\x68" => $jum, "\155\x73\147" => $jum . "\40\163\151\x73\167\x61\x20\144\x69\141\x6b\164\x69\x66\153\x61\x6e\56"]; goto LvEd_; FBKjg: } private function nonaktifkan($user, $nama) { goto B26_s; Vtudz: $data = ["\163\x74\x61\164\165\x73" => false, "\x6d\x73\x67" => "\x59\157\x75\40\x6d\165\163\164\x20\142\145\x20\x61\156\40\141\x64\155\151\x6e\x69\x73\164\x72\x61\164\157\162\40\164\157\40\x76\x69\145\x77\40\164\150\151\163\x20\160\141\x67\x65\x2e"]; goto s4hpc; bF6bR: goto Yf_G4; goto jKFQt; B26_s: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto Kcu8x; } goto eQ9aJ; eQ9aJ: if ($this->ion_auth->logged_in() && $this->ion_auth->is_admin()) { goto yFqMj; } goto hXrD3; Xxe1V: goto D9Uo4; goto NnvBP; eLCQd: $data = ["\x73\164\x61\x74\x75\x73" => $deleted, "\x6d\x73\x67" => $deleted ? "\x53\151\163\167\x61\x20" . urldecode($nama) . "\40\x64\151\156\x6f\156\141\x6b\164\x69\146\153\141\156\x2e" : "\123\151\x73\167\x61\40" . urldecode($nama) . "\x20\147\x61\147\x61\154\40\144\x69\156\157\x6e\x61\x6b\x74\x69\x66\153\141\x6e\x2e"]; goto qv0yq; jKFQt: Kcu8x: goto Vtudz; s4hpc: Yf_G4: goto a41MO; MkiTK: $deleted = $this->ion_auth->delete_user($user->id); goto eLCQd; hXrD3: $data = ["\x73\x74\x61\164\165\x73" => false, "\x6d\x73\x67" => "\x41\156\x64\x61\40\142\x75\x6b\x61\156\x20\141\144\x6d\151\156\x2e"]; goto Xxe1V; a41MO: return $data; goto yA9Gm; qv0yq: D9Uo4: goto bF6bR; NnvBP: yFqMj: goto MkiTK; yA9Gm: } public function deactivate($username, $nama) { goto rGnHq; shMTU: $user = $this->users->getUsers($username); goto VJDiL; W1p0t: TKXbA: goto cHfU_; SoqKB: $this->output_json($data, true); goto EY3RJ; cHfU_: $data = ["\163\164\x61\x74\165\163" => false, "\155\x73\147" => "\131\x6f\x75\x20\155\165\163\x74\x20\x62\x65\40\x61\x6e\40\x61\144\155\x69\156\x69\163\x74\162\141\x74\157\162\40\x74\157\40\166\x69\x65\x77\40\x74\x68\151\x73\x20\x70\x61\x67\145\x2e"]; goto l2t8H; VJDiL: $data = $this->nonaktifkan($user, $nama); goto D62sK; l2t8H: ePstg: goto SoqKB; D62sK: goto ePstg; goto W1p0t; rGnHq: if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) { goto TKXbA; } goto shMTU; EY3RJ: } public function nonaktifkanSemua() { goto nAeet; C6ARj: $data = ["\x73\164\x61\164\165\x73" => true, "\152\x75\155\x6c\x61\x68" => $jum, "\x6d\163\147" => $jum . "\40\163\x69\163\x77\x61\x20\144\151\x6e\157\x6e\x61\x6b\x74\x69\146\x6b\x61\156\56"]; goto JlrN5; LOGb9: $jum = 0; goto V_EOt; JlrN5: $this->output_json($data); goto Zlsfz; V_EOt: foreach ($siswaAktif as $siswa) { goto FOztA; HsbZb: if ($del["\163\x74\141\164\x75\x73"]) { goto OKojx; } goto IONMC; KPHrw: H7bXq: goto o8icF; M8uw7: OKojx: goto fsKFb; IONMC: $this->output_json($del); goto YPnEQ; etGsv: bO6Q3: goto sFiEf; FOztA: if (!($siswa->aktif > 0)) { goto TscMS; } goto tirr9; YPnEQ: goto H7bXq; goto M8uw7; o8icF: TscMS: goto etGsv; tirr9: $del = $this->nonaktifkan($siswa, $siswa->nama); goto HsbZb; fsKFb: $jum += 1; goto KPHrw; sFiEf: } goto qM3mn; nAeet: $siswaAktif = $this->users->getSiswaAktif(); goto LOGb9; qM3mn: BUQD3: goto C6ARj; Zlsfz: } public function edit($id) { goto w7alH; w7alH: $tp = $this->dashboard->getTahunActive(); goto ebm7I; Kf8do: $this->load->view("\x6d\145\x6d\x62\x65\x72\163\x2f\x67\x75\162\x75\57\x74\145\155\x70\x6c\141\164\x65\163\57\x66\157\x6f\164\145\162"); goto hROY4; RTV6c: $this->load->view("\x75\x73\x65\162\x73\57\x73\151\x73\167\x61\57\145\144\x69\164"); goto Kf8do; GVgk0: $data = ["\x75\x73\145\x72" => $user, "\x6a\165\x64\x75\154" => "\x55\x73\145\x72\40\115\x61\x6e\141\147\x65\x6d\145\x6e\164", "\x73\165\142\x6a\x75\x64\165\x6c" => "\105\144\151\x74\40\104\x61\x74\141\x20\125\x73\145\162", "\x73\145\164\x74\x69\x6e\147" => $this->dashboard->getSetting()]; goto h99te; yjouk: $user = $this->ion_auth->user()->row(); goto GVgk0; hLLc7: $data["\x67\x75\x72\165"] = $guru; goto P9pd8; xDkfr: if ($this->ion_auth->is_admin()) { goto tK01R; } goto B2KOp; pTTuW: $data["\x74\x70"] = $this->dashboard->getTahun(); goto oCz27; y_bqK: $this->load->view("\x75\x73\x65\x72\x73\57\x73\x69\x73\167\141\57\x65\144\151\x74"); goto j43PO; HnvUH: $data["\x73\x6d\x74\137\x61\143\164\151\166\x65"] = $smt; goto xDkfr; B2KOp: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto hLLc7; P9pd8: $this->load->view("\155\x65\155\x62\145\x72\x73\x2f\x67\165\x72\x75\x2f\x74\145\155\160\154\141\164\145\x73\x2f\150\145\x61\144\145\162", $data); goto RTV6c; h99te: $data["\163\x69\163\167\x61"] = $siswa; goto pTTuW; ZQdbb: $this->load->view("\x5f\x74\145\x6d\160\154\x61\164\145\x73\x2f\144\141\163\150\142\x6f\x61\x72\144\x2f\x5f\150\x65\141\144\145\162", $data); goto y_bqK; FD2hK: $data["\163\x6d\x74"] = $this->dashboard->getSemester(); goto HnvUH; hROY4: goto ei9xs; goto z_OJv; orhos: $siswa = $this->master->getDataSiswaById($tp->id_tp, $smt->id_smt, $id); goto yjouk; ebm7I: $smt = $this->dashboard->getSemesterActive(); goto orhos; NKgPC: $data["\x70\x72\x6f\x66\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto ZQdbb; j43PO: $this->load->view("\x5f\164\x65\x6d\x70\154\141\x74\x65\x73\x2f\144\x61\163\150\142\x6f\141\x72\144\57\137\146\157\x6f\x74\145\x72"); goto Dq04f; Dq04f: ei9xs: goto lTyZt; z_OJv: tK01R: goto NKgPC; oCz27: $data["\164\160\x5f\141\143\164\x69\x76\x65"] = $tp; goto FD2hK; lTyZt: } public function update() { goto mVhQg; qUmeW: $newPass = $this->input->post("\156\x65\167", true); goto PDIUo; mVhQg: $id_siswa = $this->input->post("\x69\x64\x5f\163\x69\x73\167\141", true); goto jTwdy; jTwdy: $username = $this->input->post("\x75\x73\x65\162\x6e\141\155\x65", true); goto tl8J9; X2OM4: $this->form_validation->set_rules("\157\154\x64", "\120\x61\x73\x73\x77\157\x72\144\x20\x4c\141\x6d\x61", "\162\145\161\x75\x69\162\145\x64\174\x6e\x75\x6d\x65\162\151\x63\x7c\x74\x72\x69\155\174\155\x69\x6e\137\x6c\x65\x6e\x67\164\150\x5b\66\135"); goto rI1_Z; tl8J9: $oldPass = $this->input->post("\157\154\x64", true); goto qUmeW; rI1_Z: $this->form_validation->set_rules("\156\145\167", "\x50\141\x73\163\x77\157\x72\144\40\102\x61\162\165", "\162\x65\161\x75\151\x72\145\x64\174\x6e\165\x6d\145\162\x69\143\x7c\x74\162\x69\155\174\x6d\151\x6e\137\x6c\145\156\x67\164\x68\x5b\x36\x5d"); goto uK8gq; PDIUo: $this->form_validation->set_rules("\x75\x73\x65\162\156\141\x6d\x65", "\125\x73\145\162\156\x61\155\x65", "\162\x65\161\165\151\162\145\x64\x7c\156\165\155\145\162\x69\143\x7c\164\162\151\x6d\174\x6d\151\x6e\137\x6c\145\x6e\x67\x74\x68\133\66\x5d\174\x69\163\137\165\x6e\x69\x71\165\145\x5b\155\141\x73\x74\x65\x72\x5f\163\x69\163\x77\141\x2e\165\163\x65\162\156\x61\x6d\145\x5d"); goto X2OM4; uK8gq: } public function change_password() { goto V5cg3; FLvgT: goto vDnHI; goto AEgDD; V5cg3: $this->form_validation->set_rules("\x6f\154\x64", $this->lang->line("\x63\150\141\156\x67\x65\137\x70\x61\163\163\x77\x6f\x72\x64\x5f\x76\x61\154\151\144\141\x74\x69\x6f\156\137\x6f\154\x64\137\x70\141\163\x73\167\x6f\162\x64\137\154\x61\x62\145\154"), "\x72\145\161\x75\x69\x72\x65\144"); goto Q1Joa; YSl2G: goto hMWKh; goto lJEhm; Q1Joa: $this->form_validation->set_rules("\156\145\x77", $this->lang->line("\x63\x68\141\x6e\147\145\137\x70\141\163\163\167\x6f\162\x64\x5f\x76\141\x6c\x69\x64\141\164\x69\157\x6e\137\156\145\x77\137\160\x61\163\x73\167\157\x72\144\x5f\154\x61\x62\x65\x6c"), "\x72\x65\x71\165\151\x72\145\144\174\x6d\151\x6e\x5f\154\x65\156\147\x74\150\133" . $this->config->item("\x6d\151\156\137\160\141\163\163\x77\x6f\162\x64\x5f\x6c\x65\x6e\147\x74\150", "\x69\x6f\x6e\137\141\x75\x74\150") . "\135\174\x6d\141\164\143\150\x65\163\133\x6e\x65\167\x5f\143\x6f\156\x66\x69\162\155\x5d"); goto GOBm7; w9rJ9: $change = $this->ion_auth->change_password($identity, $this->input->post("\157\154\144"), $this->input->post("\156\145\167")); goto x3Wa3; bKy6X: hMWKh: goto FLvgT; AEgDD: ecubU: goto yeAJk; L8EjE: if ($this->form_validation->run() === FALSE) { goto ecubU; } goto MNUVa; lJEhm: rUPUX: goto jeMoG; jeMoG: $data["\163\164\141\x74\165\163"] = true; goto bKy6X; GOBm7: $this->form_validation->set_rules("\x6e\145\x77\x5f\143\x6f\156\x66\x69\162\155", $this->lang->line("\x63\150\141\x6e\147\145\137\160\141\163\163\167\x6f\162\x64\x5f\x76\141\x6c\x69\x64\x61\x74\151\157\x6e\137\x6e\x65\167\137\x70\x61\163\x73\x77\157\x72\x64\137\x63\x6f\x6e\x66\151\x72\155\137\154\141\x62\x65\x6c"), "\x72\x65\x71\x75\151\x72\145\x64"); goto L8EjE; KeH7V: $this->output_json($data); goto y1xfu; MNUVa: $identity = $this->session->userdata("\x69\144\145\x6e\164\151\164\x79"); goto w9rJ9; yeAJk: $data = ["\163\164\x61\164\165\163" => false, "\x65\x72\x72\157\162\x73" => ["\157\x6c\144" => form_error("\x6f\154\144"), "\x6e\x65\167" => form_error("\x6e\145\167"), "\156\x65\167\x5f\143\157\x6e\x66\151\x72\155" => form_error("\x6e\145\167\137\143\157\x6e\146\151\162\x6d")]]; goto UbbCp; UbbCp: vDnHI: goto KeH7V; u9jkY: $data = ["\x73\164\x61\x74\x75\163" => false, "\x6d\x73\147" => $this->ion_auth->errors()]; goto YSl2G; x3Wa3: if ($change) { goto rUPUX; } goto u9jkY; y1xfu: } public function delete($id) { goto potiS; potiS: $this->is_has_access(); goto lehY6; lehY6: $data["\163\x74\141\164\x75\163"] = $this->ion_auth->delete_user($id) ? true : false; goto Spl0q; Spl0q: $this->output_json($data); goto Z1B7i; Z1B7i: } private function hash_password($password) { goto w_pIb; K2jiZ: g8Eaz: goto JNWO2; w_pIb: if (!(empty($password) || strpos($password, "\0") !== FALSE || strlen($password) > 4096)) { goto g8Eaz; } goto ikILk; JNWO2: return password_hash($password, PASSWORD_BCRYPT); goto SCzXx; ikILk: return FALSE; goto K2jiZ; SCzXx: } }
