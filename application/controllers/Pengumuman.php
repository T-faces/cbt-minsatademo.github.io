<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Pengumuman extends CI_Controller { public function __construct() { goto x6PJy; sAR9U: show_error("\110\x61\x6e\171\141\40\101\144\155\x69\156\x69\x73\164\x72\x61\x74\x6f\x72\40\x64\x61\x6e\40\147\165\162\x75\x20\171\x61\156\x67\40\144\x69\x62\145\162\151\x20\x68\141\153\40\x75\x6e\164\165\x6b\40\x6d\x65\156\147\141\153\x73\x65\x73\x20\x68\x61\x6c\141\155\x61\156\x20\151\156\x69\54\x20\74\x61\x20\150\162\x65\x66\75\x22" . base_url("\144\x61\163\150\x62\157\141\x72\144") . "\x22\76\113\x65\155\x62\x61\154\x69\x20\153\x65\x20\x6d\145\156\165\x20\x61\x77\x61\154\x3c\57\x61\76", 403, "\x41\153\x73\145\x73\x20\124\145\162\154\141\162\x61\156\147"); goto UQ90A; qumn7: $this->form_validation->set_error_delimiters('', ''); goto zaEFZ; mr9y0: eMhY1: goto JLb4i; JLb4i: redirect("\141\x75\164\x68"); goto TGf_Q; TGf_Q: jXXRn: goto mjBfY; x6PJy: parent::__construct(); goto QbYMF; lnKeI: goto jXXRn; goto mr9y0; UQ90A: B1eqM: goto lnKeI; sqeOJ: $this->load->model("\120\157\163\x74\x5f\155\157\144\145\x6c", "\160\157\x73\164"); goto qumn7; wTHmf: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto B1eqM; } goto sAR9U; mjBfY: $this->load->library(["\x64\141\164\x61\x74\141\x62\154\x65\163", "\146\157\162\155\x5f\x76\141\154\151\144\141\164\x69\157\x6e"]); goto ybcbu; meRmy: $this->load->model("\x44\x61\x73\150\x62\157\141\162\x64\137\155\x6f\144\145\x6c", "\x64\141\x73\150\x62\157\x61\162\144"); goto BE_vo; ybcbu: $this->load->model("\x4d\141\x73\164\145\162\137\155\157\144\145\154", "\x6d\141\x73\164\x65\162"); goto meRmy; MlHgW: $this->load->model("\104\162\157\160\x64\x6f\167\156\137\155\x6f\x64\145\x6c", "\144\162\157\160\144\157\167\156"); goto sqeOJ; QbYMF: if (!$this->ion_auth->logged_in()) { goto eMhY1; } goto wTHmf; BE_vo: $this->load->model("\x4b\145\x6c\141\163\x5f\x6d\x6f\x64\x65\154", "\153\x65\154\141\163"); goto MlHgW; zaEFZ: } public function output_json($data, $encode = true) { goto efA3l; FgTh8: $this->output->set_content_type("\x61\x70\160\x6c\151\x63\x61\x74\151\x6f\156\57\x6a\x73\157\156")->set_output($data); goto uV_aB; aauV3: $data = json_encode($data); goto FPDIv; FPDIv: z815J: goto FgTh8; efA3l: if (!$encode) { goto z815J; } goto aauV3; uV_aB: } public function index() { goto h9FFD; A1Ori: p2Y0K: goto ZcFQb; MuhwS: $data = ["\165\163\145\x72" => $user, "\x6a\x75\x64\x75\x6c" => "\120\145\156\147\165\155\165\155\141\x6e", "\x73\145\x74\164\x69\x6e\x67" => $this->dashboard->getSetting()]; goto JQoWL; GK1mu: $data["\x6b\145\154\141\163"] = $kelas; goto Grphg; CllnJ: $data["\x70\x65\x6e\x67\165\155\165\x6d\x61\156\163"] = $this->post->getPostUser(0); goto EDdIt; lu5zC: $this->load->view("\x6d\x65\x6d\142\145\x72\163\x2f\x67\x75\x72\165\x2f\x74\145\x6d\160\x6c\x61\164\x65\163\x2f\x68\x65\141\x64\x65\162", $data); goto Lgj0V; lxS3P: $data["\x70\145\x6e\147\165\155\x75\155\x61\x6e\x73"] = $this->post->getPostUser($guru->id_guru); goto lu5zC; JQoWL: $tp = $this->master->getTahunActive(); goto eiLy5; aeWXw: $data["\163\165\x62\x6a\165\x64\165\154"] = "\123\145\x6d\x75\x61\x20\x50\x65\156\147\x75\155\x75\x6d\x61\x6e"; goto YcOVZ; hIbJF: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto mD8NV; JXoNb: $kelas = $this->dropdown->getAllKeyKodeKelas($tp->id_tp, $smt->id_smt); goto GK1mu; EDdIt: $this->load->view("\x5f\x74\145\155\x70\154\x61\x74\x65\x73\x2f\144\x61\163\150\142\x6f\x61\x72\x64\x2f\137\150\145\141\144\145\162", $data); goto FSbl3; FSbl3: $this->load->view("\x70\x65\x6e\x67\165\x6d\x75\155\141\156\x2f\x64\141\x74\x61"); goto sGKUj; es_mS: if ($this->ion_auth->is_admin()) { goto cOzkJ; } goto QN4uI; I5zbw: $this->load->view("\155\x65\155\142\x65\x72\x73\57\x67\165\162\x75\57\x74\x65\155\160\154\x61\164\145\x73\57\x66\157\x6f\164\145\x72"); goto ujDJH; mD8NV: $data["\163\x6d\x74\137\x61\143\x74\151\x76\x65"] = $smt; goto iRDYK; nwezH: cOzkJ: goto aeWXw; y4l2L: $data["\x74\160\x5f\141\143\164\151\x76\145"] = $tp; goto hIbJF; sGKUj: $this->load->view("\137\x74\x65\x6d\160\x6c\141\x74\145\x73\57\144\x61\x73\x68\x62\x6f\x61\162\x64\x2f\x5f\146\157\x6f\164\x65\x72"); goto A1Ori; Lgj0V: $this->load->view("\x70\x65\x6e\x67\x75\x6d\165\x6d\x61\x6e\57\144\141\164\141"); goto I5zbw; kVdYJ: $data["\x74\160"] = $this->dashboard->getTahun(); goto y4l2L; h9FFD: $user = $this->ion_auth->user()->row(); goto MuhwS; YcOVZ: $data["\160\162\x6f\x66\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto CllnJ; Lcl0r: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto hZqh4; hZqh4: $data["\147\165\x72\x75"] = $guru; goto lxS3P; eiLy5: $smt = $this->master->getSemesterActive(); goto kVdYJ; Grphg: $data["\162\165\x6e\x6e\x69\x6e\x67\137\x74\x65\170\x74"] = $this->dashboard->getRunningText(); goto es_mS; ujDJH: goto p2Y0K; goto nwezH; QN4uI: $data["\163\165\142\x6a\165\x64\165\154"] = "\x50\x65\156\147\165\155\x75\x6d\x61\x6e\40\101\156\144\141"; goto Lcl0r; iRDYK: $data["\147\165\x72\x75\x73"] = $this->dropdown->getAllGuru(); goto JXoNb; ZcFQb: } public function kepada($kepada, $id_kepada = null) { goto DyQTB; BCW2u: $this->load->view("\155\145\x6d\142\145\162\163\57\x67\x75\162\x75\57\164\145\x6d\x70\154\141\x74\145\x73\x2f\146\x6f\x6f\x74\x65\x72"); goto g6G1x; IS7jO: $data["\164\160\x5f\x61\143\x74\x69\x76\145"] = $tp; goto IDrwF; FpjNt: if ($kepada === "\x73\x65\155\165\x61\137\147\x75\x72\165") { goto VAF3b; } goto VtZLK; nAyLi: zK6Qb: goto XzZNz; WGR7U: $data["\153\145\160\141\x64\x61"] = "\123\145\155\165\x61\x20\123\151\x73\167\x61"; goto bnXON; TDINo: $data["\x70\x72\157\146\x69\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto dnbLk; eKzUX: $kelas = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto lhhQA; DyQTB: $user = $this->ion_auth->user()->row(); goto tj2tz; aOkx6: $this->load->view("\x6d\x65\155\142\145\x72\163\57\147\x75\162\165\x2f\164\x65\x6d\160\x6c\x61\x74\x65\x73\57\x68\145\x61\x64\x65\x72", $data); goto UbGtT; imx23: $data["\x67\x75\162\x75\163"] = $this->dropdown->getAllGuru(); goto eKzUX; CqNfw: $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\164\x65\x73\57\144\141\163\x68\142\x6f\x61\x72\x64\x2f\x5f\146\x6f\157\x74\x65\x72"); goto nAyLi; SF2BN: if ($this->ion_auth->is_admin()) { goto wM4F9; } goto FQAUF; RIP0B: $data["\x6b\145\x70\141\144\x61"] = urldecode($kepada); goto Z_2XM; udeXL: $tp = $this->master->getTahunActive(); goto tC3P3; IsTen: $this->db->join("\x6d\141\x73\x74\145\162\x5f\147\165\162\x75\40\x62", "\x61\x2e\x64\x61\162\151\75\x62\56\x69\144\x5f\147\x75\x72\x75", "\154\x65\x66\164"); goto d43Lm; OxHjb: $data["\x63\x6f\x6d\x6d\x65\156\164\x73"] = $comments; goto JVxFe; o25Ww: hehHg: goto WGR7U; ZXmpX: $this->load->view("\x70\145\x6e\147\x75\155\x75\155\141\x6e\57\144\141\164\x61"); goto CqNfw; uSGYm: $data["\x6b\145\x70\x61\x64\x61"] = "\123\x65\155\x75\x61\x20\107\165\162\x75"; goto Fk8_5; BMpja: $pengumumans = $this->db->get()->result(); goto tZjbR; tC3P3: $smt = $this->master->getSemesterActive(); goto Lx1NS; FQAUF: $data["\147\165\x72\165"] = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto aOkx6; IDrwF: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto WDIlO; tZjbR: $comments = []; goto wxnYg; AvKbV: foreach ($pengumumans as $pengumuman) { goto yJBee; yJBee: $this->db->select("\141\x2e\x2a\x2c\x20\x62\x2e\156\x61\x6d\141\x5f\147\x75\162\x75\54\x20\142\56\x66\x6f\x74\x6f"); goto Ar9N6; l8Tww: $comment = $this->db->get()->result(); goto C2MLy; fppaJ: $this->db->where("\x61\x2e\x69\x64\x5f\x70\157\x73\164", $pengumuman->id_post); goto l8Tww; sEhHT: t1jUS: goto YN8DT; YOcjs: n63X3: goto R5EVn; R5EVn: $comments[$pengumuman->id_post] = $comment; goto sEhHT; bVKrR: $this->db->order_by("\x61\x2e\164\x61\x6e\x67\x67\x61\x6c", "\144\145\x73\x63"); goto fppaJ; Ar9N6: $this->db->from("\x70\x6f\x73\x74\137\143\157\155\155\x65\x6e\164\163\x20\x61"); goto gun1A; gun1A: $this->db->join("\155\x61\163\164\x65\162\x5f\x67\165\x72\x75\x20\x62", "\x61\x2e\144\141\x72\151\75\142\56\x69\144\x5f\147\x75\162\165", "\x6c\145\146\164"); goto bVKrR; C2MLy: foreach ($comment as $comm) { goto O2qt4; dbue5: $this->db->from("\x70\x6f\163\x74\137\x72\145\160\x6c\171\x20\141"); goto lTZpO; KBAuE: $this->db->where("\141\56\151\x64\137\143\157\155\x6d\145\156\164", $comm->id_comment); goto mTwG6; O2qt4: $this->db->select("\x61\56\x2a\54\40\x62\x2e\156\x61\155\141\x5f\x67\x75\x72\x75\54\40\142\x2e\146\157\164\157"); goto dbue5; mTwG6: $balasan[$pengumuman->id_post][$comm->id_comment] = $this->db->get()->result(); goto kfKzL; lTZpO: $this->db->join("\x6d\141\163\164\145\x72\x5f\147\x75\162\165\x20\142", "\141\x2e\x64\141\x72\x69\75\x62\x2e\151\144\137\x67\165\x72\x75", "\154\145\146\164"); goto FgWiB; FgWiB: $this->db->order_by("\141\x2e\x74\x61\x6e\147\x67\141\154", "\144\x65\163\x63"); goto KBAuE; kfKzL: P1IQa: goto ILXhr; ILXhr: } goto YOcjs; YN8DT: } goto yVyDH; bnXON: P7C2z: goto SF2BN; UbGtT: $this->load->view("\x70\x65\156\147\x75\155\x75\x6d\x61\156\x2f\144\141\164\x61"); goto BCW2u; d43Lm: $this->db->order_by("\x61\x2e\164\x61\156\x67\x67\141\154", "\144\x65\163\x63"); goto BMpja; H4vZf: $data["\160\x65\x6e\147\165\155\x75\x6d\x61\156\163"] = $pengumumans; goto OxHjb; WDIlO: $data["\x73\155\164\137\141\143\x74\x69\x76\x65"] = $smt; goto imx23; g6G1x: goto zK6Qb; goto Tk3HG; Lx1NS: $data["\x74\x70"] = $this->dashboard->getTahun(); goto IS7jO; Z_2XM: goto P7C2z; goto KPL7u; yVyDH: AVsU2: goto H4vZf; KPL7u: VAF3b: goto uSGYm; lhhQA: $data["\x6b\145\154\141\x73"] = $kelas; goto G7BhW; BpWBm: $this->db->from("\x70\x6f\x73\164\40\x61"); goto IsTen; G7BhW: $this->db->select("\141\56\x2a\x2c\40\x62\x2e\x6e\x61\x6d\141\137\x67\x75\162\165\54\40\142\x2e\x66\x6f\164\157"); goto BpWBm; Tk3HG: wM4F9: goto TDINo; dnbLk: $this->load->view("\x5f\x74\145\x6d\x70\154\141\164\145\163\x2f\144\141\163\x68\x62\x6f\141\162\x64\57\137\150\x65\141\x64\x65\x72", $data); goto ZXmpX; wxnYg: $balasan = []; goto AvKbV; JVxFe: $data["\x62\141\x6c\x61\163\141\x6e\x73"] = $balasan; goto FpjNt; VtZLK: if ($kepada === "\x73\145\x6d\165\x61\x5f\163\151\163\x77\141") { goto hehHg; } goto RIP0B; tj2tz: $data = ["\x75\163\x65\x72" => $user, "\152\x75\x64\165\154" => "\120\145\x6e\x67\x75\155\x75\x6d\141\156", "\163\165\x62\152\165\144\x75\154" => "\123\145\155\x75\141\40\x50\145\156\147\x75\155\165\155\x61\156", "\163\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto udeXL; Fk8_5: goto P7C2z; goto o25Ww; XzZNz: } public function getPost() { $post = $this->post->getPostForUser(null); $this->output_json($post); } public function getComment($id_post, $page) { goto aTu43; YZSLl: $this->db->from("\160\157\163\164\137\143\x6f\155\155\x65\x6e\x74\x73\40\141"); goto fDY9R; aTu43: $perPage = 5; goto eI09e; yeQWo: $this->db->limit($perPage, $offset); goto hHTrI; hHTrI: $comment = $this->db->get()->result(); goto azNs9; ANKxn: $this->db->order_by("\x61\x2e\164\141\156\x67\147\x61\x6c", "\x64\x65\163\x63"); goto zzguC; V_oFx: $this->db->join("\155\141\x73\x74\145\162\x5f\163\x69\163\167\141\40\x63", "\141\x2e\144\x61\162\x69\x3d\x63\x2e\x69\144\x5f\163\x69\x73\x77\141", "\154\x65\x66\164"); goto ANKxn; fDY9R: $this->db->join("\155\x61\x73\164\145\x72\x5f\x67\x75\162\165\x20\142", "\x61\56\144\141\162\x69\75\x62\56\x69\144\137\x67\x75\x72\x75", "\x6c\x65\146\164"); goto V_oFx; Zt6uz: $this->db->query("\123\105\x54\40\x53\121\114\137\102\x49\x47\137\x53\105\x4c\x45\103\124\123\x3d\61"); goto sX_yS; zzguC: $this->db->where("\x61\x2e\151\x64\x5f\x70\157\x73\164", $id_post); goto yeQWo; sX_yS: $this->db->select("\141\56\x2a\x2c\40\x62\x2e\x6e\x61\155\x61\137\x67\x75\x72\x75\x2c\x20\x62\x2e\x66\x6f\x74\x6f\54\x20\x63\x2e\156\x61\155\x61\40\141\x73\40\x6e\141\x6d\x61\137\163\151\163\167\141\54\40\x63\x2e\x66\x6f\x74\x6f\40\141\x73\40\x66\x6f\x74\157\137\x73\x69\163\167\141\54\40\50\x53\x45\x4c\x45\103\x54\40\x43\x4f\125\x4e\x54\50\x70\x6f\x73\164\x5f\x72\145\x70\154\x79\56\x69\144\x5f\x72\x65\x70\154\x79\x29\x20\x46\122\x4f\115\x20\x70\157\x73\164\x5f\x72\x65\160\x6c\171\x20\127\x48\105\122\105\40\x61\x2e\x69\144\137\x63\x6f\155\155\145\156\164\40\x3d\40\160\x6f\163\164\137\x72\x65\x70\x6c\171\x2e\151\144\137\143\x6f\x6d\155\145\156\164\51\40\x41\x53\40\152\x6d\154"); goto YZSLl; azNs9: $this->output_json($comment); goto QYD5z; eI09e: $offset = $page * $perPage; goto Zt6uz; QYD5z: } public function getReplies($id_comment, $page) { goto tL8Tz; wGJJu: $this->db->order_by("\x61\56\164\141\156\x67\x67\141\154", "\144\x65\163\143"); goto LBkav; durkZ: $this->db->from("\x70\157\x73\164\x5f\162\x65\x70\x6c\171\x20\141"); goto T0WuL; tL8Tz: $perPage = 5; goto WUqw5; woYI4: $this->db->select("\141\56\x2a\x2c\40\x62\56\156\141\155\141\137\x67\x75\162\165\x2c\x20\142\x2e\x66\x6f\164\x6f\x2c\x20\x63\56\x6e\141\x6d\x61\x20\x61\163\40\x6e\x61\155\x61\x5f\x73\x69\x73\167\141\x2c\40\x63\x2e\146\x6f\164\x6f\40\141\163\x20\146\x6f\164\x6f\x5f\x73\x69\x73\167\x61"); goto durkZ; LBkav: $this->db->where("\x61\x2e\x69\144\x5f\143\157\155\155\x65\156\x74", $id_comment); goto sgX03; WIIj5: $this->db->query("\x53\105\x54\x20\x53\x51\114\x5f\x42\x49\107\x5f\123\x45\x4c\105\103\x54\123\x3d\61"); goto woYI4; A0Z5N: $this->db->join("\155\141\x73\x74\x65\x72\x5f\163\151\163\x77\x61\x20\x63", "\141\56\x64\141\x72\x69\x3d\x63\56\151\x64\137\163\x69\x73\167\141", "\x6c\145\x66\164"); goto wGJJu; SwVPv: $this->output_json($replies); goto mI2wG; T0WuL: $this->db->join("\155\141\x73\x74\145\162\137\147\165\162\x75\40\142", "\141\x2e\x64\141\162\x69\75\x62\x2e\x69\144\137\147\165\162\x75", "\154\145\x66\164"); goto A0Z5N; WUqw5: $offset = $page * $perPage; goto WIIj5; sgX03: $this->db->limit($perPage, $offset); goto dxSWk; dxSWk: $replies = $this->db->get()->result(); goto SwVPv; mI2wG: } public function save() { goto grTRm; lleGv: $insert = $this->db->replace("\160\157\x73\164", $data); goto pGbQh; grTRm: $kepada = json_decode(json_encode($this->input->post("\153\x65\160\141\144\141\x5b\x5d", true))); goto ZJpP2; pGbQh: $this->output_json($insert); goto gsO5R; ZJpP2: $dari = $this->input->post("\144\x61\x72\151"); goto rmd7v; rmd7v: $data = ["\x6b\x65\160\x61\144\x61" => serialize($kepada), "\144\x61\162\151" => $dari, "\144\141\x72\151\x5f\147\162\x6f\x75\x70" => $dari == "\x30" ? "\x31" : "\62", "\x74\x65\x78\164" => $this->input->post("\164\x65\x78\x74"), "\164\141\156\x67\x67\141\x6c" => date("\131\55\x6d\55\x64\x20\x48\72\151\x3a\163"), "\165\x70\x64\141\164\x65\144" => date("\x59\x2d\155\x2d\x64\40\110\72\151\x3a\163")]; goto lleGv; gsO5R: } public function saveKomentar() { goto cxDQ0; kRw_w: $this->db->order_by("\141\x2e\x74\141\156\x67\x67\141\x6c", "\144\x65\163\143"); goto b3Xm9; Sp1f1: $this->output_json($comment); goto S18Yt; plQbQ: POH__: goto taeat; zl2Zt: $dari_group = 1; goto m5HEF; sBJC8: $this->db->join("\155\x61\x73\x74\145\162\x5f\147\x75\162\165\40\142", "\141\56\x64\141\x72\151\75\x62\x2e\x69\x64\137\147\x75\162\165", "\x6c\145\x66\x74"); goto jS4L0; XPs3K: $comment = $this->db->get()->result(); goto Sp1f1; m5HEF: if ($this->ion_auth->is_admin()) { goto POH__; } goto dvNdG; IQy7E: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto uEE1H; wj7Cp: $this->db->select("\141\56\x2a\x2c\x20\142\x2e\156\141\155\x61\x5f\147\x75\162\165\x2c\40\x62\56\146\157\x74\x6f\x2c\x20\143\56\x6e\x61\x6d\141\x20\x61\x73\40\x6e\141\155\x61\x5f\x73\151\163\167\141\x2c\x20\143\x2e\x66\157\x74\157\x20\x61\163\x20\x66\157\164\157\137\163\x69\x73\x77\141\x2c\x20\x28\123\105\x4c\105\x43\124\x20\103\x4f\125\x4e\x54\x28\x70\x6f\x73\164\137\x72\x65\160\x6c\171\x2e\151\144\137\x72\x65\160\x6c\171\x29\x20\106\122\117\x4d\40\x70\x6f\x73\164\x5f\162\145\x70\x6c\x79\40\x57\x48\x45\x52\x45\40\x61\56\151\x64\137\x63\x6f\x6d\155\145\x6e\164\40\75\40\160\157\x73\164\137\x72\x65\x70\x6c\x79\56\151\x64\x5f\x63\x6f\x6d\x6d\145\x6e\164\51\40\x41\123\40\x6a\x6d\x6c"); goto XzJaz; jqCEs: $id = $this->db->insert_id(); goto wUwxW; cxDQ0: $dari = "\60"; goto zl2Zt; taeat: $data = ["\151\144\137\x70\x6f\163\164" => $this->input->post("\x69\x64\x5f\x70\157\163\164"), "\144\141\162\151" => $dari, "\144\141\162\x69\x5f\147\162\x6f\x75\x70" => $dari_group, "\x74\x65\170\x74" => $this->input->post("\x74\145\x78\x74")]; goto zhaGY; b3Xm9: $this->db->where("\x61\x2e\151\144\x5f\143\157\155\155\145\x6e\164", $id); goto XPs3K; wMmOf: $dari_group = 2; goto plQbQ; wUwxW: $this->db->query("\x53\105\124\x20\x53\121\114\137\102\x49\x47\137\x53\105\114\105\x43\124\x53\75\61"); goto wj7Cp; uEE1H: $dari = $guru->id_guru; goto wMmOf; ESTI0: $smt = $this->master->getSemesterActive(); goto IQy7E; XzJaz: $this->db->from("\160\157\163\x74\x5f\143\157\155\x6d\x65\156\164\x73\40\x61"); goto sBJC8; jS4L0: $this->db->join("\155\x61\163\x74\x65\162\x5f\163\151\163\167\141\40\143", "\x61\x2e\x64\x61\162\151\x3d\x63\x2e\x69\x64\x5f\x73\151\163\167\141", "\x6c\x65\x66\164"); goto kRw_w; dvNdG: $user = $this->ion_auth->user()->row(); goto SGZkF; zhaGY: $insert = $this->db->replace("\x70\x6f\163\164\137\143\x6f\155\x6d\x65\156\164\163", $data); goto jqCEs; SGZkF: $tp = $this->master->getTahunActive(); goto ESTI0; S18Yt: } public function saveBalasan() { goto h_MSq; Z9aX4: $this->db->select("\141\x2e\52\54\40\x62\x2e\x6e\141\155\141\x5f\147\165\162\165\54\40\x62\56\146\x6f\164\x6f\54\x20\143\x2e\156\141\x6d\141\x20\141\163\40\x6e\x61\x6d\x61\137\x73\x69\163\x77\x61\54\40\143\x2e\x66\157\x74\x6f\40\x61\163\40\146\157\x74\x6f\137\x73\151\163\167\x61"); goto yeLPX; XEZWp: $id = $this->db->insert_id(); goto LQOPF; ZeoNi: $this->output_json($replies); goto IkZJx; lXakb: $smt = $this->master->getSemesterActive(); goto mNOE7; h_MSq: $dari = "\x30"; goto bsnDS; lPjI4: $this->db->join("\x6d\x61\163\164\x65\162\x5f\147\x75\162\x75\40\x62", "\x61\x2e\x64\x61\162\151\75\x62\x2e\x69\144\x5f\147\x75\x72\x75", "\x6c\145\146\x74"); goto WcvkC; HVhXu: $replies = $this->db->get()->result(); goto ZeoNi; kX6Ck: $user = $this->ion_auth->user()->row(); goto npws0; bsnDS: $dari_group = 1; goto kIxJT; XHAMG: $dari_group = 2; goto On2_B; A6EPv: $data = ["\x69\x64\137\143\x6f\x6d\155\x65\156\164" => $this->input->post("\x69\144\x5f\x63\x6f\x6d\x6d\145\156\x74"), "\x64\141\x72\151" => $dari, "\144\x61\162\151\137\147\162\x6f\165\x70" => $dari_group, "\x74\145\170\x74" => $this->input->post("\x74\145\x78\164")]; goto ftfmN; LQOPF: $this->db->query("\123\x45\x54\40\x53\121\114\137\x42\x49\107\x5f\x53\105\114\105\x43\124\x53\x3d\x31"); goto Z9aX4; mVPhA: $dari = $guru->id_guru; goto XHAMG; yeLPX: $this->db->from("\160\x6f\163\164\137\162\145\160\154\171\x20\x61"); goto lPjI4; WcvkC: $this->db->join("\155\141\163\x74\145\x72\137\x73\x69\163\167\141\40\x63", "\x61\x2e\144\x61\162\151\75\143\x2e\x69\x64\x5f\x73\x69\163\167\x61", "\x6c\x65\146\164"); goto n6lRs; oXTwR: $this->db->where("\x61\x2e\151\144\x5f\162\x65\160\x6c\x79", $id); goto HVhXu; On2_B: Ea5nj: goto A6EPv; n6lRs: $this->db->order_by("\x61\x2e\164\141\x6e\147\147\x61\154", "\x64\145\x73\143"); goto oXTwR; ftfmN: $insert = $this->db->replace("\160\x6f\163\164\x5f\162\145\160\154\x79", $data); goto XEZWp; kIxJT: if ($this->ion_auth->is_admin()) { goto Ea5nj; } goto kX6Ck; npws0: $tp = $this->master->getTahunActive(); goto lXakb; mNOE7: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto mVPhA; IkZJx: } public function hapusPost($id_post) { goto kVWO3; mjDHq: foreach ($comments as $comment) { goto Gn3g2; Y3XAA: $deleted["\142\141\154\x61\163\x61\156"] = $this->db->delete("\160\157\x73\x74\137\162\145\160\x6c\x79"); goto zrEYD; zrEYD: giRWw: goto s4sAJ; Gn3g2: $this->db->where("\151\x64\x5f\143\157\x6d\155\145\x6e\164", $comment->id_comment); goto Y3XAA; s4sAJ: } goto HXu8J; hvhjF: $this->output_json($deleted); goto RPcrg; ZJ6Ue: $comments = $this->post->getIdComments($id_post); goto mjDHq; BB2id: $deleted = $this->db->delete("\x70\157\163\164"); goto VCh4I; GiO6j: $this->db->trans_complete(); goto hvhjF; Al2zP: if (!$this->db->delete("\160\157\x73\164\x5f\x63\157\155\x6d\145\156\x74\163")) { goto U32zU; } goto AwumA; zdosg: $this->db->where("\x69\x64\x5f\160\x6f\163\164", $id_post); goto Al2zP; kVWO3: $this->db->trans_start(); goto ZJ6Ue; HXu8J: pxajm: goto zdosg; VCh4I: U32zU: goto GiO6j; AwumA: $this->db->where("\151\x64\137\x70\157\x73\x74", $id_post); goto BB2id; RPcrg: } public function hapusKomentar($id_comment) { goto m5F1G; UL2VS: $this->db->trans_complete(); goto L5pkh; jS2aJ: $this->db->where("\x69\144\137\x63\157\155\155\145\x6e\164", $id_comment); goto nQoAT; REd1K: $deleted["\x62\141\x6c\141\x73\x61\156"] = $this->db->delete("\x70\157\x73\164\x5f\x72\145\x70\154\x79"); goto UL2VS; RoIyG: $this->db->where("\151\x64\x5f\143\157\155\155\145\x6e\164", $id_comment); goto REd1K; L5pkh: $this->output_json($deleted); goto QlrQo; nQoAT: $deleted["\153\x6f\x6d\x65\156\164\141\x72"] = $this->db->delete("\160\157\x73\x74\x5f\x63\157\x6d\155\145\156\x74\x73"); goto RoIyG; m5F1G: $this->db->trans_start(); goto jS2aJ; QlrQo: } public function hapusBalasan($id_reply) { goto kHlw8; SeOaD: $this->output_json($deleted); goto SNLq5; kHlw8: $this->db->trans_start(); goto tmZv6; ptduK: $deleted["\x62\141\x6c\x61\163\x61\156"] = $this->db->delete("\160\x6f\x73\x74\x5f\x72\145\160\154\x79"); goto tVNpB; tVNpB: $this->db->trans_complete(); goto SeOaD; tmZv6: $this->db->where("\x69\x64\137\x72\x65\160\154\x79", $id_reply); goto ptduK; SNLq5: } public function getRunningText() { $data["\x72\x75\156\156\x69\156\x67\x5f\x74\x65\x78\x74"] = $this->dashboard->getRunningText(); $this->output_json($data); } public function saveRunningText() { goto Yh93m; Yh93m: $input = json_decode($this->input->post("\164\145\170\x74", true)); goto NzDaY; UP3Px: foreach ($input as $d) { goto oVc4l; TdJXQ: $update = $this->db->replace("\x72\165\156\x6e\x69\156\x67\x5f\x74\145\170\164", $data); goto twY6L; oVc4l: $data = ["\151\144\x5f\x74\145\170\x74" => $d->id_text, "\164\x65\x78\x74" => $d->text]; goto TdJXQ; AxuCx: OEptQ: goto un2F9; twY6L: array_push($updates, $update); goto AxuCx; un2F9: } goto XBUlm; db2Vm: $data["\x73\x74\141\x74\165\163"] = $updates; goto q9WYR; q9WYR: $this->output_json($data); goto cxtu1; XBUlm: Ey2Mi: goto db2Vm; NzDaY: $updates = []; goto UP3Px; cxtu1: } public function hapusRunningText($id) { goto xRylY; vpunh: $this->output_json($deleted); goto Jn4bI; NUtki: $deleted = $this->db->delete("\x72\165\156\156\x69\x6e\x67\137\164\x65\170\164"); goto vpunh; xRylY: $this->db->where("\x69\x64\x5f\164\145\170\164", $id); goto NUtki; Jn4bI: } }
