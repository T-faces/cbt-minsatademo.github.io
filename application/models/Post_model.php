<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto U07rj; dYIXx: $this->db->join("\x6d\x61\163\164\x65\162\x5f\x67\x75\162\165\x20\142", "\141\x2e\144\x61\162\x69\x3d\x62\x2e\x69\144\137\147\165\162\x75", "\x6c\145\x66\164"); goto L0iWa; LB15W: $posts = $this->db->get()->result(); goto Fzid9; YQ1R4: $this->db->from("\160\x6f\x73\x74\40\x61"); goto dYIXx; g5gOw: $this->db->order_by("\x61\56\165\160\x64\x61\x74\145\x64", "\144\145\163\x63"); goto LB15W; Fzid9: return $posts; goto nZKFT; U07rj: $this->db->select("\141\56\52\54\x20\142\x2e\x6e\x61\x6d\x61\x5f\147\165\162\x75\54\40\142\x2e\x66\x6f\x74\x6f\54\x20\50\x53\105\x4c\x45\x43\x54\40\x43\117\x55\x4e\124\x28\160\157\x73\164\x5f\143\157\155\x6d\x65\156\164\x73\56\151\144\137\x63\x6f\x6d\155\145\x6e\164\x29\x20\106\122\x4f\x4d\x20\x70\157\x73\x74\137\143\157\155\x6d\x65\x6e\164\x73\40\127\x48\105\122\x45\x20\x61\x2e\x69\x64\x5f\160\157\x73\x74\40\75\40\x70\157\x73\x74\x5f\x63\157\x6d\155\x65\x6e\x74\x73\56\x69\144\137\x70\x6f\x73\164\51\40\101\x53\40\152\155\x6c"); goto YQ1R4; L0iWa: if (!($id_user != 0)) { goto CgbVT; } goto bBYX7; bBYX7: $this->db->where("\x61\56\144\x61\x72\151", $id_user); goto HsKAF; HsKAF: CgbVT: goto g5gOw; nZKFT: } public function getPostForUser($kepada, $kelas = null) { goto KNwo_; cP1qV: if (!($kepada != null)) { goto MaY1m; } goto Q94PW; XCzFj: $this->db->order_by("\141\56\165\x70\144\141\164\x65\x64", "\x64\145\163\x63"); goto rPklB; lxhMZ: MaY1m: goto XCzFj; GoAou: $this->db->from("\160\x6f\163\x74\40\141"); goto vWkKo; KNwo_: $this->db->select("\141\56\52\54\x20\x62\x2e\156\x61\155\x61\137\147\x75\x72\x75\x2c\40\142\x2e\x66\x6f\164\x6f\x2c\x20\x28\x53\x45\114\x45\x43\x54\x20\103\117\x55\116\x54\50\x70\157\163\164\x5f\143\x6f\x6d\x6d\x65\x6e\164\x73\x2e\151\144\137\143\x6f\155\155\x65\x6e\x74\x29\40\x46\x52\117\x4d\40\160\157\x73\x74\x5f\143\x6f\155\155\145\x6e\x74\x73\40\127\110\x45\122\x45\x20\x61\56\151\x64\137\160\x6f\x73\164\x20\75\x20\x70\157\163\x74\x5f\143\x6f\155\155\145\156\164\x73\56\x69\144\137\160\x6f\163\x74\x29\x20\x41\123\x20\x6a\x6d\x6c"); goto GoAou; rPklB: $posts = $this->db->get()->result(); goto odE78; vWkKo: $this->db->join("\x6d\x61\x73\x74\145\162\137\147\165\162\165\40\142", "\x61\x2e\144\x61\162\x69\75\x62\56\151\x64\137\x67\x75\x72\x75", "\x6c\x65\146\164"); goto cP1qV; Q94PW: $this->db->where("\x28\141\x2e\153\145\x70\x61\x64\x61\40\114\x49\113\x45\x20" . $kepada . "\51\x20\x4f\122\x20\x28\x61\x2e\153\x65\160\x61\144\141\40\114\111\x4b\x45\x20" . $kelas . "\x29"); goto lxhMZ; odE78: return $posts; goto iGfnt; iGfnt: } public function getIdComments($id_post) { goto SXqhQ; SXqhQ: $this->db->select("\x69\144\x5f\143\157\x6d\x6d\145\x6e\164"); goto UJiDv; NaXYd: return $ids; goto MU7n2; UJiDv: $this->db->where("\151\x64\137\x70\157\163\x74", $id_post); goto QBKPX; QBKPX: $ids = $this->db->get("\160\x6f\163\x74\137\143\157\155\x6d\x65\x6e\164\x73")->result(); goto NaXYd; MU7n2: } public function getIdReplies($id_comment) { goto EGJ03; wfJWy: $this->db->where("\151\144\x5f\143\157\155\155\x65\156\x74", $id_comment); goto Ce_nU; AGbKG: $this->db->where_in("\151\144\x5f\x63\157\x6d\155\145\x6e\164", $id_comment); goto xe8kX; oNr_j: wGXPC: goto AGbKG; EGJ03: $this->db->select("\151\x64\137\162\145\160\x6c\x79"); goto JD4yX; EdMck: return $ids; goto vMR82; Ce_nU: goto lEhwQ; goto oNr_j; GdtQV: $ids = $this->db->get("\x70\x6f\x73\164\137\162\x65\160\154\x79")->result(); goto EdMck; xe8kX: lEhwQ: goto GdtQV; JD4yX: if (is_array($id_comment)) { goto wGXPC; } goto wfJWy; vMR82: } }
