<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\x41\x53\x45\x50\x41\x54\110") or exit("\x4e\157\x20\x64\151\162\x65\x63\164\x20\x73\x63\162\151\x70\x74\40\x61\143\x63\145\163\x73\x20\x61\x6c\154\157\x77\145\x64"); class Migrate extends CI_Controller { public function index() { echo "\x43\157\x6e\164\x72\x6f\x6c\154\x65\162\x20\146\151\x6c\x65\40\x69\156\144\x65\x78\x20\x6d\x65\x74\x68\157\144\40\x72\165\x6e\56"; } public function CreateMigration($version = "\62\x30\62\x33\x30\x39\60\62\60\60\60\x30\60\x30") { goto Sa5kk; CuqhJ: if ($this->migration->current() === FALSE) { goto E1Wbu; } goto cvcIa; qb0lO: goto RWvld; goto HXzfo; Sa5kk: $this->load->library("\155\x69\147\x72\141\164\x69\x6f\156"); goto CuqhJ; bfQDd: show_error($this->migration->error_string()); goto u15Im; u15Im: RWvld: goto oVtcI; HXzfo: E1Wbu: goto bfQDd; cvcIa: echo "\x54\x68\x65\x20\155\x69\x67\162\x61\164\151\x6f\156\x20\x66\x69\x6c\145\x20\x68\141\163\40\145\170\x65\143\165\164\145\x64\40\x73\165\x63\x63\145\x73\163\x66\165\154\x6c\x79\x2e"; goto qb0lO; oVtcI: } public function undoMigration($version = NULL) { goto Ue8xx; TzHiK: if ($this->migration->version($penultimate)) { goto Psdy1; } goto hNHWl; wnskf: echo "\x54\x68\145\40\155\x69\147\162\141\164\151\x6f\156\x20\x68\x61\x73\x20\x62\145\x65\x6e\x20\162\x65\x76\145\162\x74\145\144\40\163\x75\x63\143\x65\163\163\x66\x75\154\x6c\x79\x2e"; goto SQatu; SQatu: exit; goto g3GJK; H46I6: goto ZG9z2; goto ON5UJ; mG99A: if (isset($version) && array_key_exists($version, $migrations) && $this->migration->version($version)) { goto T50b9; } goto SWcvP; YDbL5: $migrationKeys = array(); goto FYo5p; ON5UJ: T50b9: goto BARZB; ro3lr: $penultimate = sizeof($migrationKeys) == 1 ? 0 : $migrationKeys[sizeof($migrationKeys) - 2]; goto TzHiK; SWcvP: if (isset($version) && !array_key_exists($version, $migrations)) { goto IU1_5; } goto ro3lr; hNHWl: echo "\103\157\x75\x6c\144\x6e\134\342\200\x99\x74\x20\162\x6f\154\154\x20\x62\x61\x63\x6b\40\164\150\145\x20\155\151\x67\x72\141\x74\151\x6f\156\56"; goto K_oSI; dns0h: echo "\124\150\x65\40\x6d\x69\x67\162\x61\x74\151\157\156\x20\167\151\x74\x68\40\x73\145\154\x65\143\164\x65\x64\40\x76\x65\x72\163\x69\157\156\x20\x64\x6f\x65\163\156\342\200\x99\x74\40\x65\x78\x69\x73\164\56"; goto e2pU1; CkbYy: $migrations = $this->migration->find_migrations(); goto YDbL5; EWMNf: IU1_5: goto dns0h; erAnD: Psdy1: goto wnskf; g3GJK: LHeRh: goto H46I6; ad9fa: exit; goto l260w; Ue8xx: $this->load->library("\155\151\x67\x72\x61\x74\151\157\x6e"); goto CkbYy; BARZB: echo "\124\x68\x65\x20\155\x69\147\162\141\164\x69\157\156\40\167\x61\163\x20\x75\x6e\x64\x6f"; goto ad9fa; e2pU1: ZG9z2: goto IvhNq; l260w: goto ZG9z2; goto EWMNf; FYo5p: foreach ($migrations as $key => $migration) { $migrationKeys[] = $key; eluLL: } goto yticA; DMRbz: goto LHeRh; goto erAnD; K_oSI: exit; goto DMRbz; yticA: rkwn5: goto mG99A; IvhNq: } public function resetMigration() { goto hgesV; otTL7: exit; goto eJmLx; BWIgi: echo "\124\150\x65\x20\155\151\147\162\x61\x74\x69\157\156\x20\x77\141\x73\40\162\145\166\145\x72\x74\x20\164\157\40\164\x68\x65\40\166\x65\x72\163\151\157\156\x20\163\x65\x74\40\151\x6e\x20\x74\x68\x65\40\x63\157\156\x66\x69\x67\x20\146\x69\x6c\x65\x2e"; goto k1IO8; VKwlN: g5nxV: goto BWIgi; k1IO8: return TRUE; goto bUdbc; vtPnM: show_error($this->migration->error_string()); goto otTL7; bUdbc: uMCS6: goto Duvum; hgesV: $this->load->library("\155\151\147\162\x61\x74\151\x6f\156"); goto klFNa; klFNa: if ($this->migration->current() !== FALSE) { goto g5nxV; } goto xaA9x; eJmLx: goto uMCS6; goto VKwlN; xaA9x: echo "\103\x6f\165\x6c\144\x6e\134\xe2\x80\x99\164\x20\x72\145\x73\145\x74\40\x6d\x69\147\x72\141\164\x69\157\156\56"; goto vtPnM; Duvum: } function make_base() { $this->load->library("\143\151\x5f\x6d\x69\147\162\141\164\x69\x6f\156\x73\137\x67\x65\x6e\145\x72\141\164\x6f\x72\x2f\123\x71\154\x74\x6f\143\151"); $this->sqltoci->generate("\153\145\x6c\141\163\137\x6a\x61\144\x77\141\154\x5f\153\142\x6d"); } }
