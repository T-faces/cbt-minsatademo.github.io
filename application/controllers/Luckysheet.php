<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\x45\120\x41\124\x48") or exit("\x4e\x6f\x20\144\151\162\145\143\164\x20\163\143\162\151\x70\164\x20\x61\143\x63\145\x73\x73\x20\x61\x6c\154\x6f\x77\x65\x64"); class Luckysheet extends CI_Controller { public function __construct() { goto uCOgH; ck3aD: show_error("\x48\x61\x6e\171\141\x20\x41\144\x6d\x69\156\151\163\164\162\x61\164\157\x72\40\171\141\156\x67\x20\144\151\x62\145\x72\x69\x20\x68\x61\x6b\x20\x75\156\164\x75\153\x20\155\145\x6e\147\x61\x6b\x73\x65\163\40\150\141\154\141\155\141\x6e\x20\x69\156\151\54\x20\74\x61\40\150\x72\145\146\x3d\42" . base_url("\144\x61\163\150\142\x6f\x61\162\x64") . "\42\76\113\145\x6d\142\141\x6c\x69\x20\153\145\40\155\145\156\x75\40\x61\x77\141\x6c\74\57\141\x3e", 403, "\x41\153\163\145\x73\40\x54\x65\x72\154\x61\162\141\x6e\147"); goto sa2kI; Tx40e: $this->load->model("\115\x61\x73\164\145\x72\x5f\155\157\x64\145\x6c", "\155\141\x73\164\145\162"); goto l4gJ1; QyPOo: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto GRmiB; } goto ck3aD; tBiR2: if (!$this->ion_auth->logged_in()) { goto DTx_j; } goto QyPOo; l4gJ1: $this->form_validation->set_error_delimiters('', ''); goto Ij3VO; ypQbX: $this->load->model("\104\x61\163\x68\142\157\141\x72\x64\x5f\155\157\144\145\154", "\144\141\163\150\x62\157\141\x72\x64"); goto sxMwE; s818s: $this->load->model("\x44\x72\157\160\x64\157\x77\x6e\x5f\155\157\144\x65\x6c", "\x64\x72\157\160\144\157\x77\x6e"); goto Tx40e; rKOOf: $this->load->library(["\x64\141\164\141\164\141\142\154\145\x73", "\x66\x6f\162\155\x5f\166\x61\154\x69\144\x61\164\x69\157\x6e"]); goto ypQbX; jbGwh: goto EGA33; goto nONL_; uCOgH: parent::__construct(); goto tBiR2; nONL_: DTx_j: goto saZlU; GVfsw: EGA33: goto rKOOf; sxMwE: $this->load->model("\122\141\160\x6f\162\137\x6d\157\x64\x65\154", "\x72\141\160\157\x72"); goto trvi_; sa2kI: GRmiB: goto jbGwh; trvi_: $this->load->model("\x4b\145\x6c\x61\x73\x5f\155\x6f\x64\145\154", "\x6b\145\154\x61\x73"); goto s818s; saZlU: redirect("\x61\x75\164\150"); goto GVfsw; Ij3VO: } public function output_json($data, $encode = true) { goto t74QC; L8lBo: FB9k7: goto zYXr9; t74QC: if (!$encode) { goto FB9k7; } goto picm8; picm8: $data = json_encode($data); goto L8lBo; zYXr9: $this->output->set_content_type("\x61\x70\160\x6c\x69\143\x61\x74\x69\x6f\156\x2f\152\x73\157\x6e")->set_output($data); goto TW78S; TW78S: } public function index() { goto EH0lh; VBGcF: $data["\164\160"] = $this->dashboard->getTahun(); goto IIGVX; poXVv: $tp = $this->dashboard->getTahunActive(); goto kVpCj; IIGVX: $data["\164\160\137\x61\143\x74\151\166\145"] = $tp; goto lmu2d; iLoUu: $data = ["\165\x73\145\162" => $user, "\x6a\x75\x64\165\x6c" => "\125\x73\145\162\x20\x4d\141\156\141\147\x65\x6d\x65\x6e\x74", "\163\x75\x62\x6a\x75\144\165\154" => "\x44\x61\x74\141\x20\x55\163\145\x72\x20\123\151\163\x77\x61", "\x73\x65\164\x74\x69\156\147" => $this->dashboard->getSetting()]; goto poXVv; B8Y5D: $data["\x67\165\x72\x75"] = $guru; goto SD3r3; ojrIb: $this->load->view("\x6d\145\155\x62\x65\162\x73\57\147\165\x72\165\x2f\154\165\x63\x6b\171\x76\151\145\x77"); goto Sxxp2; EH0lh: $user = $this->ion_auth->user()->row(); goto iLoUu; Sxxp2: $this->load->view("\x6d\145\155\x62\145\162\x73\57\x67\165\162\x75\x2f\164\145\155\160\154\141\x74\x65\163\57\x66\x6f\157\164\145\x72"); goto cSk04; lmu2d: $data["\x73\155\x74"] = $this->dashboard->getSemester(); goto rrcH5; n9e_i: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto B8Y5D; rrcH5: $data["\x73\x6d\164\137\x61\143\x74\151\x76\x65"] = $smt; goto n9e_i; SD3r3: $this->load->view("\x6d\x65\155\142\x65\162\x73\x2f\x67\165\x72\165\x2f\x74\145\x6d\x70\154\x61\x74\x65\163\x2f\x68\145\x61\144\x65\162", $data); goto ojrIb; kVpCj: $smt = $this->dashboard->getSemesterActive(); goto VBGcF; cSk04: } }
