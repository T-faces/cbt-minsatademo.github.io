<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Cbttoken extends CI_Controller { public function __construct() { goto UOdAA; F95Of: $this->form_validation->set_error_delimiters('', ''); goto Rwd7t; UOdAA: parent::__construct(); goto v6Lt_; URaty: redirect("\x61\x75\164\x68"); goto SnCCU; QJqks: if (!$this->ion_auth->logged_in()) { goto mjzNA; } goto ibJxC; YZOAE: mjzNA: goto URaty; SnCCU: QA1Tw: goto h3vu_; f9Bbn: $this->load->model("\x4c\x6f\x67\137\155\157\x64\x65\x6c", "\154\x6f\147\147\151\x6e\x67"); goto F95Of; sC6CM: $this->load->model("\x4d\x61\x73\x74\x65\x72\137\155\157\x64\145\154", "\x6d\x61\163\164\145\162"); goto q1uhF; ibJxC: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\x75\162\165"))) { goto UFSeQ; } goto qo39k; ooBDX: UFSeQ: goto pSOuL; pSOuL: goto QA1Tw; goto YZOAE; q1uhF: $this->load->model("\104\141\x73\x68\142\x6f\x61\x72\x64\x5f\155\157\x64\145\154", "\144\141\163\x68\142\157\141\x72\144"); goto kDfRf; v6Lt_: $this->load->dbforge(); goto QJqks; qo39k: show_error("\110\x61\156\171\x61\40\x41\144\x6d\x69\x6e\151\163\x74\162\141\x74\x6f\162\40\x79\141\x6e\x67\x20\x64\151\142\x65\x72\151\x20\150\x61\x6b\40\x75\156\x74\165\153\x20\155\x65\156\x67\x61\x6b\x73\145\163\x20\x68\141\x6c\141\x6d\141\x6e\40\x69\156\x69\x2c\40\74\x61\40\x68\x72\x65\146\75\42" . base_url("\x64\x61\x73\x68\142\x6f\141\162\x64") . "\x22\76\x4b\x65\155\142\x61\x6c\x69\40\153\145\40\155\x65\x6e\165\40\x61\167\141\x6c\x3c\57\x61\76", 403, "\x41\153\163\145\x73\x20\x54\145\x72\x6c\x61\x72\x61\156\147"); goto ooBDX; kDfRf: $this->load->model("\103\142\x74\137\x6d\157\144\x65\154", "\x63\142\164"); goto f9Bbn; h3vu_: $this->load->library(["\x64\141\164\x61\164\141\142\x6c\x65\163", "\x66\x6f\x72\x6d\x5f\x76\141\154\x69\x64\141\164\151\x6f\x6e"]); goto sC6CM; Rwd7t: } public function output_json($data, $encode = true) { goto BgCPM; IhN2N: $this->output->set_content_type("\141\x70\160\x6c\151\143\141\164\151\x6f\x6e\x2f\152\x73\157\156")->set_output($data); goto PRy_S; BgCPM: if (!$encode) { goto FW9zV; } goto oTJKN; oTJKN: $data = json_encode($data); goto MP5tD; MP5tD: FW9zV: goto IhN2N; PRy_S: } public function index() { goto ACKmJ; tdGdH: $data["\x67\165\x72\165"] = $guru; goto afW77; S3K2s: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto tdGdH; eXWFn: $this->load->view("\x5f\164\145\x6d\x70\154\x61\164\145\x73\x2f\144\141\x73\x68\142\x6f\x61\x72\144\57\x5f\146\x6f\157\164\x65\162"); goto cl3Kc; Xhy6o: $data = ["\x75\163\145\x72" => $user, "\x6a\165\x64\x75\154" => "\124\x6f\x6b\145\156\40\x55\x6a\x69\x61\156", "\163\x75\142\152\165\x64\x75\x6c" => "\124\157\x6b\145\156", "\x73\145\x74\x74\151\156\x67" => $this->dashboard->getSetting()]; goto gAAjP; E03Ql: $this->load->view("\x5f\164\x65\x6d\160\154\x61\164\145\x73\57\144\141\163\150\142\x6f\x61\x72\x64\57\x5f\x68\x65\x61\144\x65\x72", $data); goto Lz0z_; oupkw: if ($this->ion_auth->is_admin()) { goto mdD1T; } goto S3K2s; Hkp34: $data["\x74\x70\x5f\141\x63\x74\151\x76\145"] = $tp; goto SJRu2; gAAjP: $tp = $this->master->getTahunActive(); goto EWzEg; Q68RH: $tkn["\x74\x6f\x6b\145\156"] = ''; goto N2LDY; Enpil: $data["\163\x6d\164\137\x61\x63\x74\151\166\x65"] = $smt; goto kiuWp; QgU2Z: $tkn["\x6a\x61\x72\x61\x6b"] = "\x31"; goto UQUlq; n2pYC: $data["\164\160"] = $this->dashboard->getTahun(); goto Hkp34; UQUlq: $tkn["\x65\154\141\x70\x73\x65\x64"] = "\x30\60\72\x30\x30\72\60\x30"; goto Kd6U3; qxR_a: $this->load->view("\x6d\145\155\142\145\x72\x73\57\147\x75\x72\165\x2f\x63\142\x74\x2f\164\x6f\153\145\x6e\57\144\141\164\141"); goto X26Xx; ACKmJ: $user = $this->ion_auth->user()->row(); goto Xhy6o; Kd6U3: $data["\164\157\153\x65\156"] = $token != null ? $token : json_decode(json_encode($tkn)); goto oupkw; SJRu2: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto Enpil; EWzEg: $smt = $this->master->getSemesterActive(); goto n2pYC; X26Xx: $this->load->view("\155\145\155\142\145\162\x73\x2f\x67\x75\162\x75\x2f\x74\x65\155\x70\154\141\x74\x65\x73\x2f\146\x6f\157\x74\145\x72"); goto keBpV; Lz0z_: $this->load->view("\x63\x62\164\57\x74\157\x6b\145\156\x2f\x64\141\164\x61"); goto eXWFn; o3NB_: $data["\160\x72\x6f\146\151\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto E03Ql; P65MS: mdD1T: goto o3NB_; keBpV: goto mR7tM; goto P65MS; N2LDY: $tkn["\x61\165\164\x6f"] = "\x30"; goto QgU2Z; afW77: $this->load->view("\155\145\155\x62\x65\162\x73\x2f\147\165\162\165\x2f\164\145\x6d\160\154\x61\x74\145\163\57\150\x65\141\x64\145\x72", $data); goto qxR_a; kiuWp: $token = $this->cbt->getToken(); goto Q68RH; cl3Kc: mR7tM: goto UWYOt; UWYOt: } public function generateToken() { goto qCcY1; qCcY1: $post_token = json_decode($this->input->get("\144\x61\164\x61")); goto SFdyj; CDGFd: $total_minutes += $diff->i; goto lQ2KA; xyhHH: $new = $this->createNewToken(); goto mk7VT; eySZB: $total_minutes = $diff->days * 24 * 60; goto ECnpA; lQ2KA: if (!($total_minutes >= $post_token->jarak)) { goto Tj0sP; } goto pvh6I; xRvb8: $post_token->updated = $updated; goto hkTNE; hkTNE: $this->cbt->saveToken($post_token); goto HRRGH; ECnpA: $total_minutes += $diff->h * 60; goto CDGFd; TvP3Z: $updated = date("\131\x2d\155\x2d\144\40\x48\x3a\151\x3a\x73"); goto c05uB; W96iC: $this->output_json($token); goto OZyMP; yUunF: $token->now = $updated; goto W96iC; QbECM: goto CfvBt; goto ebFAa; ebFAa: YjRPZ: goto xyhHH; xbaQJ: $this->cbt->saveToken($post_token); goto VYLdt; c05uB: if ($force == "\61") { goto YjRPZ; } goto TvKLf; HRRGH: CfvBt: goto POT2m; TvKLf: $mulai = new DateTime($token->updated); goto HaZAQ; MoE61: $post_token->token = $new; goto cl942; onL0o: $token = $this->cbt->getToken(); goto TvP3Z; SFdyj: $force = $this->input->get("\x66\x6f\x72\x63\x65"); goto onL0o; pvh6I: $new = $this->createNewToken(); goto MoE61; VYLdt: Tj0sP: goto QbECM; cl942: $post_token->updated = $updated; goto xbaQJ; HaZAQ: $diff = $mulai->diff(new DateTime()); goto eySZB; POT2m: $token = $this->cbt->getToken(); goto yUunF; mk7VT: $post_token->token = $new; goto xRvb8; OZyMP: } public function loadToken() { goto FKS4B; Q8BN8: $this->output_json($data); goto GVdi4; dw3Vi: jpqkr: goto P_ht4; ybYcH: $data["\164\157\153\x65\156"] = ''; goto kVObh; u9Qw9: $data["\x65\x6c\141\x70\163\x65\144"] = "\x30\x30\x3a\60\60\72\60\60"; goto Q8BN8; tvIwx: $token->now = date("\x59\55\155\55\144\x20\110\x3a\151\72\163"); goto kC0fB; OJB3S: PmcFS: goto ybYcH; FKS4B: $dataflds = $this->db->field_data("\x63\x62\x74\x5f\x74\x6f\153\x65\x6e"); goto YfyEB; FMK1W: if ($token == null) { goto PmcFS; } goto tvIwx; YfyEB: $table_changed = false; goto H2eXa; kVObh: $data["\141\x75\x74\157"] = "\60"; goto u9Qw9; kC0fB: $this->output_json($token); goto k9f4r; k9f4r: goto qg5Z6; goto OJB3S; GVdi4: qg5Z6: goto T2dRP; H2eXa: foreach ($dataflds as $fild) { goto NVgLb; y3lZy: jGQTp: goto a5Z_j; d_TJc: nBZvJ: goto EL8sh; NVgLb: if (!($fild->name == "\x75\x70\x64\x61\x74\145\x64")) { goto Fgpyd; } goto D6KC_; LP9Jz: $table_changed = $this->dbforge->modify_column("\x63\142\x74\137\x74\x6f\x6b\x65\x6e", $field); goto y3lZy; A1Z7P: $field = ["\x75\x70\x64\141\164\145\144" => array("\x74\x79\160\x65" => "\126\101\x52\x43\110\x41\x52", "\x63\x6f\x6e\x73\164\162\x61\151\156\x74" => 20, "\144\145\x66\x61\x75\154\x74" => '')]; goto LP9Jz; D6KC_: if (!($fild->type != "\x76\x61\x72\x63\150\x61\x72")) { goto jGQTp; } goto A1Z7P; a5Z_j: Fgpyd: goto d_TJc; EL8sh: } goto dw3Vi; P_ht4: $token = $this->cbt->getToken(); goto FMK1W; T2dRP: } private function createNewToken() { goto m5Jav; nntwM: $input_length = strlen($chars); goto BMVTz; OohPq: $i = 0; goto JlmKK; cCFzu: BAxfT: goto O8ntP; kRp49: $random_character = $chars[mt_rand(0, $input_length - 1)]; goto GRExq; scXGh: nfhN7: goto OF_1w; O8ntP: $i++; goto zsnuA; GRExq: $new_token .= $random_character; goto cCFzu; zsnuA: goto R44cT; goto scXGh; m5Jav: $chars = "\101\102\103\104\105\106\107\110\111\x4a\113\x4c\115\x4e\117\x50\x51\122\x53\124\125\x56\127\x58\x59\x5a"; goto nntwM; OF_1w: return $new_token; goto YaR0S; BMVTz: $new_token = ''; goto OohPq; YeKW2: if (!($i < 6)) { goto nfhN7; } goto kRp49; JlmKK: R44cT: goto YeKW2; YaR0S: } }
