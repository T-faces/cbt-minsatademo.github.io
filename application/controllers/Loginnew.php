<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\x42\x41\x53\105\x50\x41\x54\x48") or exit("\x4e\157\40\x64\x69\162\145\143\164\x20\x73\143\162\151\x70\164\x20\x61\x63\143\145\x73\x73\x20\x61\154\154\x6f\167\x65\144"); class Loginnew extends CI_Controller { public function __construct() { goto F3N59; khJKA: goto Nl6Hg; goto ILo9p; gw5ed: Nl6Hg: goto g6m4b; i0Ofx: $this->form_validation->set_error_delimiters('', ''); goto OuiW5; fardY: $this->load->model("\104\141\x73\x68\142\x6f\x61\162\144\137\155\x6f\144\x65\x6c", "\x64\141\163\x68\142\x6f\x61\162\144"); goto i0Ofx; Mmd6l: sd91S: goto khJKA; ILo9p: AIfrc: goto ZyutB; F3N59: parent::__construct(); goto KJ0NL; aVlMM: show_error("\110\141\x6e\171\141\x20\x41\144\155\151\x6e\151\163\164\x72\x61\x74\x6f\x72\x20\x79\141\x6e\x67\x20\x64\151\x62\x65\162\x69\x20\150\x61\x6b\x20\165\156\164\x75\153\x20\155\145\156\x67\x61\153\x73\x65\x73\x20\x68\141\x6c\141\x6d\x61\156\x20\151\156\151\x2c\x20\74\141\x20\x68\x72\x65\146\x3d\x22" . base_url("\144\x61\163\150\142\x6f\141\x72\x64") . "\42\76\x4b\x65\155\x62\141\x6c\x69\40\x6b\145\40\155\145\x6e\x75\40\141\167\x61\154\x3c\x2f\141\76", 403, "\x41\153\163\145\163\40\124\x65\162\154\141\x72\141\156\147"); goto Mmd6l; ZyutB: redirect("\x61\x75\x74\x68"); goto gw5ed; KJ0NL: if (!$this->ion_auth->logged_in()) { goto AIfrc; } goto UEcSB; UEcSB: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\165\x72\165"))) { goto sd91S; } goto aVlMM; g6m4b: $this->load->library(["\x64\x61\164\x61\164\141\142\154\145\163", "\x66\x6f\x72\155\x5f\x76\141\x6c\x69\x64\141\164\151\x6f\x6e"]); goto fardY; OuiW5: } public function output_json($data, $encode = true) { goto iKHBA; iKHBA: if (!$encode) { goto MLa_k; } goto VguM3; VguM3: $data = json_encode($data); goto MB37n; HsAHR: $this->output->set_content_type("\141\160\160\x6c\x69\143\141\x74\151\x6f\x6e\x2f\152\163\157\x6e")->set_output($data); goto KB_2t; MB37n: MLa_k: goto HsAHR; KB_2t: } public function index() { goto B_uZF; fCek1: $data = ["\165\163\145\162" => $user, "\x6a\165\x64\x75\154" => "\125\x73\145\x72\x20\x4d\141\156\141\x67\145\155\145\156\164", "\x73\165\x62\x6a\x75\x64\x75\154" => "\104\141\164\141\40\x55\x73\x65\162\40\123\x69\x73\167\141", "\x73\145\x74\x74\151\x6e\x67" => $this->dashboard->getSetting()]; goto Y_62P; Y_62P: $tp = $this->dashboard->getTahunActive(); goto TextK; B_uZF: $user = $this->ion_auth->user()->row(); goto fCek1; TextK: $smt = $this->dashboard->getSemesterActive(); goto ZT5Vt; BCjkB: $data["\164\x70\x5f\x61\x63\x74\x69\166\x65"] = $tp; goto XhM5w; arMzg: $data["\x70\162\157\146\151\x6c\x65"] = $this->dashboard->getProfileAdmin($user->id); goto eH6qN; ZT5Vt: $data["\x74\160"] = $this->dashboard->getTahun(); goto BCjkB; eH6qN: $this->load->view("\x61\x75\x74\150\57\156\145\167\x5f\x6c\157\x67\151\x6e", $data); goto jicUx; zruNd: $data["\163\x6d\164\137\x61\x63\164\151\x76\x65"] = $smt; goto arMzg; XhM5w: $data["\x73\x6d\164"] = $this->dashboard->getSemester(); goto zruNd; jicUx: } }
