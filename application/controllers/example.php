$this->db->table('transaksi A')
->select('A.id_transaksi,B.nama_pelanggan,B.no_hp,A.tgl_masuk,A.tgl_selesai,A.status')
->join('pelanggan B', 'A.id_pelanggan = B.id_pelanggan')
->get();
Bayu — Yesterday at 8:27 PM
$this->db->select('A.id_trancsaksi,B.nama_pelanggan,B.no_hp,A.tgl_masuk,A.tgl_selesai,A.status')
->from('transaksi A')
->join('pelanggan B', 'A.id_pelanggan = B.id_pelanggan')
->where('id_transaksi', '$id";', FALSE)
->get();
$this->db->select_sum('total', 'totaltransaksi')
->where('id_transaksi', '$id";', FALSE)
->get('detail_transaksi');