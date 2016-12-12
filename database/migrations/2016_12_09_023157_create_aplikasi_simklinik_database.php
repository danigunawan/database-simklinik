<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAplikasiSimklinikDatabase extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
         public function up()
         {
            
	    /**
	     * Table: akses
	     */
	    Schema::create('akses', function($table) {
                $table->increments('id');
                $table->string('otoritas', 100);
                $table->string('akses', 100);
                $table->string('fungsi', 100);
            });


	    /**
	     * Table: barang
	     */
	    Schema::create('barang', function($table) {
                $table->increments('id');
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->integer('harga_beli');
                $table->integer('harga_jual');
                $table->integer('harga_jual2');
                $table->integer('harga_jual3');
                $table->integer('harga_jual4')->nullable();
                $table->integer('harga_jual5')->nullable();
                $table->integer('harga_jual6')->nullable();
                $table->integer('harga_jual7')->nullable();
                $table->integer('stok_barang');
                $table->string('satuan', 50);
                $table->string('kategori', 100);
                $table->string('gudang', 100)->nullable();
                $table->string('status', 50);
                $table->string('suplier', 50);
                $table->string('stok_awal', 100)->nullable();
                $table->string('stok_opname', 100)->nullable();
                $table->string('foto', 100)->nullable();
                $table->integer('limit_stok');
                $table->integer('over_stok');
                $table->string('berkaitan_dgn_stok', 100);
                $table->string('jenis_barang', 100)->nullable();
                $table->string('tipe_barang', 100)->nullable();
                $table->string('golongan', 100)->nullable();
                $table->string('golongan_barang', 100)->nullable();
            });


	    /**
	     * Table: batal_detail_penjualan
	     */
	    Schema::create('batal_detail_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_meja', 100);
                $table->date('tanggal');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_barang');
                $table->integer('satuan');
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->integer('status');
                $table->integer('hpp');
                $table->integer('sisa');
                $table->integer('no_pesanan');
                $table->string('komentar', 100);
                $table->string('batal_detail_penjualan', 100);
            });


	    /**
	     * Table: batal_penjualan
	     */
	    Schema::create('batal_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_pelanggan', 100);
                $table->string('kode_meja', 100);
                $table->integer('total');
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('status', 100)->nullable();
                $table->integer('potongan');
                $table->integer('tax');
                $table->integer('sisa');
                $table->integer('kredit');
                $table->integer('total_hpp');
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->integer('no_pesanan');
                $table->string('keterangan_batal', 100)->nullable();
            });


	    /**
	     * Table: bed
	     */
	    Schema::create('bed', function($table) {
                $table->increments('id');
                $table->string('nama_kamar', 100)->nullable();
                $table->string('group_bed', 100)->nullable();
                $table->integer('tarif')->nullable();
                $table->integer('tarif_2')->nullable();
                $table->integer('tarif_3')->nullable();
                $table->integer('tarif_4')->nullable();
                $table->integer('tarif_5');
                $table->integer('tarif_6');
                $table->integer('tarif_7');
                $table->string('fasilitas', 100)->nullable();
                $table->string('status', 50)->nullable();
                $table->string('kode_bed', 100)->nullable();
                $table->string('kelas', 100)->nullable();
                $table->integer('jumlah_bed')->nullable();
                $table->integer('sisa_bed')->nullable();
            });


	    /**
	     * Table: bidang_lab
	     */
	    Schema::create('bidang_lab', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: cito
	     */
	    Schema::create('cito', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: daftar_akun
	     */
	    Schema::create('daftar_akun', function($table) {
                $table->increments('id');
                $table->string('kode_daftar_akun', 100);
                $table->string('nama_daftar_akun', 100);
                $table->string('grup_akun', 100);
                $table->string('kategori_akun', 100);
                $table->string('tipe_akun', 100);
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('waktu');
            });


	    /**
	     * Table: daftar_pajak
	     */
	    Schema::create('daftar_pajak', function($table) {
                $table->increments('id');
                $table->string('nama_pajak', 100);
                $table->string('deskripsi', 100);
                $table->integer('persen_pajak');
                $table->string('jenis_pajak', 100);
            });


	    /**
	     * Table: detail_item_keluar
	     */
	    Schema::create('detail_item_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('gudang_item_keluar', 100)->nullable();
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
            });


	    /**
	     * Table: detail_item_masuk
	     */
	    Schema::create('detail_item_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('gudang_item_masuk', 100)->nullable();
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->time('jam');
                $table->string('waktu');
            });


	    /**
	     * Table: detail_kas_keluar
	     */
	    Schema::create('detail_kas_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
            });


	    /**
	     * Table: detail_kas_masuk
	     */
	    Schema::create('detail_kas_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
            });


	    /**
	     * Table: detail_operasi
	     */
	    Schema::create('detail_operasi', function($table) {
                $table->increments('id_detail_operasi');
                $table->integer('id_sub_operasi');
                $table->string('nama_detail_operasi', 100);
                $table->integer('id_jabatan');
                $table->integer('jumlah_persentase');
                $table->integer('id_operasi');
            });


	    /**
	     * Table: detail_pembayaran_hutang
	     */
	    Schema::create('detail_pembayaran_hutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->string('no_faktur_pembelian', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('suplier', 100);
            });


	    /**
	     * Table: detail_pembayaran_piutang
	     */
	    Schema::create('detail_pembayaran_piutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->string('no_faktur_penjualan', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('kode_pelanggan', 100);
            });


	    /**
	     * Table: detail_pembelian
	     */
	    Schema::create('detail_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu');
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->string('jumlah_barang', 50);
                $table->string('satuan', 50);
                $table->integer('asal_satuan');
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('status', 100)->nullable();
                $table->integer('sisa');
            });


	    /**
	     * Table: detail_penjualan
	     */
	    Schema::create('detail_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('kode_meja', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->string('jumlah_barang', 50);
                $table->string('satuan', 50);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('status', 100)->nullable();
                $table->integer('hpp')->nullable();
                $table->integer('sisa');
                $table->integer('no_pesanan')->nullable();
                $table->string('komentar', 100)->nullable();
                $table->string('asal_satuan', 100);
                $table->string('no_reg', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
                $table->string('tipe_produk', 100)->nullable();
                $table->string('dosis', 100)->nullable();
                $table->string('lab', 25)->nullable();
            });


	    /**
	     * Table: detail_retur_pembelian
	     */
	    Schema::create('detail_retur_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->string('no_faktur_pembelian', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->string('satuan', 100);
                $table->string('asal_satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
            });


	    /**
	     * Table: detail_retur_penjualan
	     */
	    Schema::create('detail_retur_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->string('no_faktur_penjualan', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->string('satuan', 100);
                $table->string('asal_satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
            });


	    /**
	     * Table: detail_stok_opname
	     */
	    Schema::create('detail_stok_opname', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('awal', 100);
                $table->string('masuk', 100);
                $table->string('keluar', 100);
                $table->integer('stok_sekarang');
                $table->integer('fisik');
                $table->integer('selisih_fisik');
                $table->integer('selisih_harga');
                $table->integer('harga');
                $table->integer('hpp');
            });


	    /**
	     * Table: dokter
	     */
	    Schema::create('dokter', function($table) {
                $table->increments('id');
                $table->string('nama', 100)->nullable();
                $table->string('alamat', 100)->nullable();
                $table->string('nik', 50)->nullable();
                $table->string('tanggal_lahir', 100)->nullable();
                $table->string('no_hp', 100);
                $table->string('tempat_lahir', 100);
            });


	    /**
	     * Table: fee_faktur
	     */
	    Schema::create('fee_faktur', function($table) {
                $table->increments('id');
                $table->string('nama_petugas', 100);
                $table->integer('jumlah_prosentase');
                $table->integer('jumlah_uang');
                $table->string('user_buat', 100);
            });


	    /**
	     * Table: fee_produk
	     */
	    Schema::create('fee_produk', function($table) {
                $table->increments('id');
                $table->string('nama_petugas', 100);
                $table->string('kode_produk', 100);
                $table->string('nama_produk', 100);
                $table->integer('jumlah_prosentase');
                $table->integer('jumlah_uang');
                $table->string('user_buat', 100);
                $table->string('jabatan', 100)->nullable();
            });


	    /**
	     * Table: grup_akun
	     */
	    Schema::create('grup_akun', function($table) {
                $table->increments('id');
                $table->string('kode_grup_akun', 100);
                $table->string('nama_grup_akun', 100);
                $table->string('parent', 100);
                $table->string('kategori_akun', 100);
                $table->string('tipe_akun', 100);
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('waktu');
            });


	    /**
	     * Table: gudang
	     */
	    Schema::create('gudang', function($table) {
                $table->increments('id');
                $table->string('kode_gudang', 100);
                $table->string('nama_gudang', 100);
                $table->integer('default_set');
            });


	    /**
	     * Table: hak_otoritas
	     */
	    Schema::create('hak_otoritas', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: hapus_transaksi_db
	     */
	    Schema::create('hapus_transaksi_db', function($table) {
                $table->increments('id');
                $table->string('nama', 100)->nullable();
                $table->string('waktu')->nullable();
            });


	    /**
	     * Table: hasil_detail_operasi
	     */
	    Schema::create('hasil_detail_operasi', function($table) {
                $table->increments('id');
                $table->string('id_detail_operasi', 100);
                $table->string('id_user', 100);
                $table->string('id_sub_operasi', 100);
                $table->string('id_operasi', 100);
                $table->string('petugas_input', 100);
                $table->string('no_reg', 100);
                $table->string('waktu');
                $table->string('id_tbs_operasi', 100);
            });


	    /**
	     * Table: hasil_operasi
	     */
	    Schema::create('hasil_operasi', function($table) {
                $table->increments('id');
                $table->string('sub_operasi', 100);
                $table->string('petugas_input', 100);
                $table->string('harga_jual', 100);
                $table->string('no_reg', 100);
                $table->string('operasi', 100);
                $table->string('waktu');
            });


	    /**
	     * Table: history_detail_item_keluar
	     */
	    Schema::create('history_detail_item_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('gudang_item_keluar', 100)->nullable();
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->text('user_hapus');
            });


	    /**
	     * Table: history_detail_item_masuk
	     */
	    Schema::create('history_detail_item_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('gudang_item_masuk', 100)->nullable();
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->time('jam');
                $table->string('waktu');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_kas_keluar
	     */
	    Schema::create('history_detail_kas_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_kas_masuk
	     */
	    Schema::create('history_detail_kas_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100)->nullable();
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_pembayaran_hutang
	     */
	    Schema::create('history_detail_pembayaran_hutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->string('no_faktur_pembelian', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_pembayaran_piutang
	     */
	    Schema::create('history_detail_pembayaran_piutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->string('no_faktur_penjualan', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_pembelian
	     */
	    Schema::create('history_detail_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu');
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->string('jumlah_barang', 50);
                $table->string('satuan', 50);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('status', 100)->nullable();
                $table->integer('sisa');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_penjualan
	     */
	    Schema::create('history_detail_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('kode_meja', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->string('jumlah_barang', 50);
                $table->string('satuan', 50);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('status', 100)->nullable();
                $table->integer('hpp')->nullable();
                $table->integer('sisa');
                $table->integer('no_pesanan')->nullable();
                $table->string('komentar', 100)->nullable();
                $table->string('user_hapus', 100);
                $table->string('asal_satuan', 100)->nullable();
                $table->string('no_reg', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
                $table->string('tipe_produk', 100)->nullable();
                $table->string('dosis', 100)->nullable();
            });


	    /**
	     * Table: history_detail_retur_pembelian
	     */
	    Schema::create('history_detail_retur_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->string('no_faktur_pembelian', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_retur_penjualan
	     */
	    Schema::create('history_detail_retur_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->string('no_faktur_penjualan', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_detail_stok_opname
	     */
	    Schema::create('history_detail_stok_opname', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('awal', 100);
                $table->string('masuk', 100);
                $table->string('keluar', 100);
                $table->integer('stok_sekarang');
                $table->integer('fisik');
                $table->integer('selisih_fisik');
                $table->integer('selisih_harga');
                $table->integer('harga');
                $table->integer('hpp');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_item_keluar
	     */
	    Schema::create('history_item_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_item_masuk
	     */
	    Schema::create('history_item_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_jurnal_manual
	     */
	    Schema::create('history_jurnal_manual', function($table) {
                $table->increments('id');
                $table->string('nomor_jurnal', 100);
                $table->dateTime('waktu_jurnal');
                $table->string('keterangan_jurnal', 100)->nullable();
                $table->string('kode_akun_jurnal', 100);
                $table->integer('debit');
                $table->integer('kredit');
                $table->string('jenis_transaksi', 100);
                $table->string('no_faktur', 100);
                $table->integer('approved');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_kas_keluar
	     */
	    Schema::create('history_kas_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_editt', 100)->nullable();
                $table->datetime('waktu_edit', 100)->nullable();
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_kas_masuk
	     */
	    Schema::create('history_kas_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('waktu_edit', 100)->nullable();
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_kas_mutasi
	     */
	    Schema::create('history_kas_mutasi', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->datetime('waktu_edit', 100)->nullable();
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_pembayaran_hutang
	     */
	    Schema::create('history_pembayaran_hutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('dari_kas', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_pembayaran_piutang
	     */
	    Schema::create('history_pembayaran_piutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('dari_kas', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_pembelian
	     */
	    Schema::create('history_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('kode_gudang', 100)->nullable();
                $table->string('suplier', 50);
                $table->integer('total');
                $table->date('tanggal');
                $table->date('tanggal_jt')->nullable();
                $table->time('jam');
                $table->string('user', 50);
                $table->string('status', 100)->nullable();
                $table->integer('potongan')->nullable();
                $table->integer('tax')->nullable();
                $table->integer('sisa')->nullable();
                $table->integer('kredit');
                $table->integer('nilai_kredit');
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->string('status_beli_awal', 100);
                $table->string('ppn', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_penjualan
	     */
	    Schema::create('history_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('kode_gudang', 100)->nullable();
                $table->string('kode_pelanggan', 50);
                $table->string('kode_meja', 100)->nullable();
                $table->integer('total');
                $table->date('tanggal');
                $table->string('tanggal_jt', 100)->nullable();
                $table->time('jam');
                $table->string('user', 50);
                $table->string('sales', 100);
                $table->string('status', 100)->nullable();
                $table->integer('potongan');
                $table->integer('tax');
                $table->integer('sisa')->nullable();
                $table->integer('kredit')->nullable();
                $table->integer('nilai_kredit')->nullable();
                $table->integer('total_hpp')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->string('ppn', 100);
                $table->integer('no_pesanan')->nullable();
                $table->string('status_jual_awal', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('user_hapus', 100);
                $table->string('no_reg', 100)->nullable();
                $table->string('nama', 100)->nullable();
                $table->string('dokter', 100)->nullable();
                $table->string('penjamin', 100)->nullable();
                $table->string('no_resep', 100)->nullable();
                $table->string('resep_dokter', 100)->nullable();
                $table->string('apoteker', 100)->nullable();
                $table->string('perawat', 100)->nullable();
                $table->string('petugas_lain', 100)->nullable();
                $table->string('jenis_penjualan', 100)->nullable();
                $table->integer('biaya_admin')->nullable();
            });


	    /**
	     * Table: history_retur_pembelian
	     */
	    Schema::create('history_retur_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->date('tanggal')->nullable();
                $table->time('jam');
                $table->string('nama_barang', 100)->nullable();
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_buat', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->integer('sisa');
                $table->string('ppn', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_retur_penjualan
	     */
	    Schema::create('history_retur_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->date('tanggal')->nullable();
                $table->time('jam');
                $table->string('nama_barang', 100)->nullable();
                $table->string('kode_pelanggan', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_buat', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->integer('sisa');
                $table->string('ppn', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_stok_awal
	     */
	    Schema::create('history_stok_awal', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_awal');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('total');
                $table->string('gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('tanggal_edit', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: history_stok_opname
	     */
	    Schema::create('history_stok_opname', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('status', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total_selisih');
                $table->integer('hpp')->nullable();
                $table->string('user', 100);
                $table->string('user_hapus', 100);
            });


	    /**
	     * Table: hpp
	     */
	    Schema::create('hpp', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('tipe', 100);
                $table->string('kode_produk', 100);
                $table->integer('harga_satuan');
                $table->integer('jumlah_kuantitas');
                $table->integer('jumlah_nilai');
                $table->date('tanggal');
                $table->string('waktu');
                $table->integer('kuantitas_akhir');
                $table->integer('saldo_akhir');
            });


	    /**
	     * Table: hpp_barang
	     */
	    Schema::create('hpp_barang', function($table) {
                $table->increments('id');
                $table->string('kode_barang', 100);
                $table->integer('jumlah');
                $table->integer('harga');
                $table->date('tanggal');
            });


	    /**
	     * Table: hpp_keluar
	     */
	    Schema::create('hpp_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('no_faktur_hpp_masuk', 100);
                $table->string('kode_barang', 100);
                $table->string('jenis_transaksi', 100);
                $table->integer('jumlah_kuantitas');
                $table->integer('harga_unit');
                $table->integer('total_nilai');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu')->nullable();
                $table->integer('sisa_barang');
                $table->integer('jenis_hpp');
            });


	    /**
	     * Table: hpp_masuk
	     */
	    Schema::create('hpp_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('no_faktur_hpp_keluar', 100)->nullable();
                $table->string('no_faktur_hpp_masuk', 100)->nullable();
                $table->string('kode_barang', 100);
                $table->string('jenis_transaksi', 100);
                $table->integer('jumlah_kuantitas');
                $table->float('harga_unit');
                $table->integer('sisa_harga')->default(0);
                $table->integer('total_nilai');
                $table->integer('sisa');
                $table->integer('sisa_retur')->default(0);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('waktu')->nullable();
                $table->integer('jenis_hpp')->default("1");
            });


	    /**
	     * Table: icd
	     */
	    Schema::create('icd', function($table) {
                $table->string('ICD', 20);
                $table->string('Deskripsi', 250);
                $table->integer('DTD');
                $table->string('Deskripsi_ina', 250);
            });


	    /**
	     * Table: item_keluar
	     */
	    Schema::create('item_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
            });


	    /**
	     * Table: item_masuk
	     */
	    Schema::create('item_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
            });


	    /**
	     * Table: jabatan
	     */
	    Schema::create('jabatan', function($table) {
                $table->increments('id');
                $table->string('nama', 50);
                $table->string('wewenang', 100);
            });


	    /**
	     * Table: jasa_lab
	     */
	    Schema::create('jasa_lab', function($table) {
                $table->increments('id');
                $table->string('kode_lab', 100);
                $table->string('nama', 100);
                $table->integer('harga_1');
                $table->integer('harga_2');
                $table->integer('harga_3');
                $table->integer('harga_4');
                $table->integer('harga_5');
                $table->integer('harga_6');
                $table->integer('harga_7');
                $table->string('bidang', 100);
                $table->string('persiapan', 100)->nullable();
                $table->string('metode', 100)->nullable();
            });


	    /**
	     * Table: jenis
	     */
	    Schema::create('jenis', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: jurnal_trans
	     */
	    Schema::create('jurnal_trans', function($table) {
                $table->increments('id');
                $table->string('nomor_jurnal', 100);
                $table->dateTime('waktu_jurnal');
                $table->string('keterangan_jurnal', 100)->nullable();
                $table->string('kode_akun_jurnal', 100);
                $table->integer('debit');
                $table->integer('kredit');
                $table->string('jenis_transaksi', 100);
                $table->string('no_faktur', 100);
                $table->integer('approved');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
            });


	    /**
	     * Table: kartu_stok
	     */
	    Schema::create('kartu_stok', function($table) {
                $table->increments('id');
                $table->string('no_transaksi', 100);
                $table->string('kode_barang', 100);
                $table->date('tanggal');
                $table->string('tipe', 100);
                $table->integer('jumlah');
                $table->string('suplier_pelanggan', 100);
            });


	    /**
	     * Table: kas
	     */
	    Schema::create('kas', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
                $table->integer('jumlah');
                $table->string('status', 100)->nullable();
            });


	    /**
	     * Table: kas_keluar
	     */
	    Schema::create('kas_keluar', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->dateTime('waktu_edit')->nullable();
            });


	    /**
	     * Table: kas_masuk
	     */
	    Schema::create('kas_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('status_upload', 25)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->dateTime('waktu_edit')->nullable();
            });


	    /**
	     * Table: kas_mutasi
	     */
	    Schema::create('kas_mutasi', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('user_edit', 100)->nullable();
                $table->dateTime('waktu_edit')->nullable();
            });


	    /**
	     * Table: kategori
	     */
	    Schema::create('kategori', function($table) {
                $table->increments('id');
                $table->string('nama_kategori', 100);
            });


	    /**
	     * Table: kelas_kamar
	     */
	    Schema::create('kelas_kamar', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: laporan_fee_faktur
	     */
	    Schema::create('laporan_fee_faktur', function($table) {
                $table->increments('id');
                $table->string('nama_petugas', 100);
                $table->string('no_faktur', 100);
                $table->integer('jumlah_fee');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('status_bayar', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
                $table->string('no_reg', 100)->nullable();
            });


	    /**
	     * Table: laporan_fee_produk
	     */
	    Schema::create('laporan_fee_produk', function($table) {
                $table->increments('id');
                $table->string('nama_petugas', 100);
                $table->string('no_faktur', 100);
                $table->string('kode_produk', 100);
                $table->string('nama_produk', 100);
                $table->integer('jumlah_fee');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('status_bayar', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
                $table->string('no_reg', 100)->nullable();
            });


	    /**
	     * Table: meja
	     */
	    Schema::create('meja', function($table) {
                $table->increments('id');
                $table->string('kode_meja', 100);
                $table->string('nama_meja', 100);
                $table->string('kategori', 50);
                $table->string('status_pakai', 100);
            });


	    /**
	     * Table: nomor_faktur_jurnal
	     */
	    Schema::create('nomor_faktur_jurnal', function($table) {
                $table->increments('id');
                $table->string('no_faktur_jurnal', 100);
                $table->date('tanggal');
            });


	    /**
	     * Table: nomor_faktur_stok_awal
	     */
	    Schema::create('nomor_faktur_stok_awal', function($table) {
                $table->increments('id');
                $table->string('no_stok_awal', 100);
                $table->date('tanggal');
            });


	    /**
	     * Table: operasi
	     */
	    Schema::create('operasi', function($table) {
                $table->increments('id_operasi');
                $table->string('kode_operasi', 100);
                $table->string('nama_operasi', 100);
            });


	    /**
	     * Table: otoritas_item_keluar
	     */
	    Schema::create('otoritas_item_keluar', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('item_keluar_lihat')->default(0);
                $table->integer('item_keluar_tambah')->default(0);
                $table->integer('item_keluar_edit')->default(0);
                $table->integer('item_keluar_hapus')->default(0);

            });


	    /**
	     * Table: otoritas_item_masuk
	     */
	    Schema::create('otoritas_item_masuk', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('item_masuk_lihat')->default(0);
                $table->integer('item_masuk_tambah')->default(0);
                $table->integer('item_masuk_edit')->default(0);
                $table->integer('item_masuk_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_kas
	     */
	    Schema::create('otoritas_kas', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('kas_lihat')->default(0);
                $table->integer('kas_edit')->default(0);
                $table->integer('posisi_kas_lihat')->default(0);
            });


	    /**
	     * Table: otoritas_kas_keluar
	     */
	    Schema::create('otoritas_kas_keluar', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('kas_keluar_lihat')->default(0);
                $table->integer('kas_keluar_tambah')->default(0);
                $table->integer('kas_keluar_edit')->nullable();
                $table->integer('kas_keluar_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_kas_masuk
	     */
	    Schema::create('otoritas_kas_masuk', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('kas_masuk_lihat')->default(0);
                $table->integer('kas_masuk_tambah')->default(0);
                $table->integer('kas_masuk_edit')->default(0);
                $table->integer('kas_masuk_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_kas_mutasi
	     */
	    Schema::create('otoritas_kas_mutasi', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('kas_mutasi_lihat')->default(0);
                $table->integer('kas_mutasi_tambah')->default(0);
                $table->integer('kas_mutasi_edit')->default(0);
                $table->integer('kas_mutasi_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_laporan
	     */
	    Schema::create('otoritas_laporan', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('laporan_mutasi_stok_lihat')->default(0);
                $table->integer('akuntansi_lihat')->default(0);
                $table->integer('laporan_lihat')->default(0);
                $table->integer('buku_besar_lihat')->default(0);
                $table->integer('laporan_jurnal_lihat')->default(0);
                $table->integer('laporan_laba_kotor_lihat')->default(0);
                $table->integer('laporan_laba_rugi_lihat')->default(0);
                $table->integer('laporan_neraca_lihat')->default(0);
                $table->integer('transaksi_jurnal_manual_lihat')->default(0);
                $table->integer('transaksi_jurnal_manual_tambah')->default(0);
                $table->integer('transaksi_jurnal_manual_edit')->default(0);
                $table->integer('transaksi_jurnal_manual_hapus')->default(0);
                $table->integer('cash_flow_tanggal_lihat')->default(0);
                $table->integer('cash_flow_periode_lihat')->default(0);
                $table->integer('laporan_pemasukan_tanggal_lihat')->default(0);
                $table->integer('laporan_pemasukan_rekap_lihat')->default(0);
                $table->integer('laporan_pemasukan_periode_lihat')->default(0);
                $table->integer('laporan_pengeluaran_tanggal_lihat')->default(0);
                $table->integer('laporan_pengeluaran_rekap_lihat')->default(0);
                $table->integer('laporan_pengeluaran_periode_lihat')->default(0);
                $table->integer('laporan_komisi_produk_lihat')->default(0);
                $table->integer('laporan_komisi_faktur_lihat')->default(0);
                $table->integer('laporan_komisi_lihat')->default(0);
                $table->integer('laporan_pembelian_lihat')->default(0);
                $table->integer('laporan_hutang_beredar_lihat')->default(0);
                $table->integer('laporan_penjualan_lihat')->default(0);
                $table->integer('laporan_piutang_beredar_lihat')->default(0);
                $table->integer('laporan_retur_pembelian_lihat')->default(0);
                $table->integer('laporan_retur_penjualan_lihat')->default(0);
                $table->integer('laporan_pembayaran_hutang_lihat')->default(0);
                $table->integer('laporan_pembayaran_piutang_lihat')->default(0);
                $table->integer('laporan_kunjungan_rj')->default(0);
                $table->integer('laporan_kunjungan_ri')->nullable();
                $table->integer('laporan_kunjungan_ugd')->default(0);
            });


	    /**
	     * Table: otoritas_master_data
	     */
	    Schema::create('otoritas_master_data', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('master_data_lihat')->default(0);
                $table->integer('user_lihat')->default(0);
                $table->integer('user_tambah')->default(0);
                $table->integer('user_edit')->default(0);
                $table->integer('user_hapus')->default(0);
                $table->integer('satuan_lihat')->default(0);
                $table->integer('satuan_tambah')->default(0);
                $table->integer('satuan_edit')->default(0);
                $table->integer('satuan_hapus')->default(0);
                $table->integer('jabatan_lihat')->default(0);
                $table->integer('jabatan_tambah')->default(0);
                $table->integer('jabatan_edit')->default(0);
                $table->integer('jabatan_hapus')->default(0);
                $table->integer('suplier_lihat')->default(0);
                $table->integer('suplier_tambah')->default(0);
                $table->integer('suplier_edit')->default(0);
                $table->integer('suplier_hapus')->default(0);
                $table->integer('pelanggan_lihat')->default(0);
                $table->integer('pelanggan_tambah')->default(0);
                $table->integer('pelanggan_edit')->default(0);
                $table->integer('pelanggan_hapus')->default(0);
                $table->integer('item_lihat')->default(0);
                $table->integer('item_tambah')->default(0);
                $table->integer('item_edit')->default(0);
                $table->integer('item_hapus')->default(0);
                $table->integer('pemasukan_lihat')->default(0);
                $table->integer('pemasukan_tambah')->default(0);
                $table->integer('pemasukan_edit')->default(0);
                $table->integer('pemasukan_hapus')->default(0);
                $table->integer('pengeluaran_lihat')->default(0);
                $table->integer('pengeluaran_tambah')->default(0);
                $table->integer('pengeluaran_edit')->default(0);
                $table->integer('pengeluaran_hapus')->default(0);
                $table->integer('komisi_faktur_lihat')->default(0);
                $table->integer('komisi_faktur_tambah')->default(0);
                $table->integer('komisi_faktur_edit')->default(0);
                $table->integer('komisi_faktur_hapus')->default(0);
                $table->integer('komisi_produk_lihat')->default(0);
                $table->integer('komisi_produk_tambah')->default(0);
                $table->integer('komisi_produk_edit')->default(0);
                $table->integer('komisi_produk_hapus')->default(0);
                $table->integer('set_perusahaan_lihat')->default(0);
                $table->integer('set_perusahaan_edit')->default(0);
                $table->integer('set_diskon_tax_lihat')->default(0);
                $table->integer('set_diskon_tax_edit')->default(0);
                $table->integer('hak_otoritas_lihat')->default(0);
                $table->integer('hak_otoritas_tambah')->default(0);
                $table->integer('hak_otoritas_edit')->default(0);
                $table->integer('hak_otoritas_hapus')->default(0);
                $table->integer('kategori_lihat')->default(0);
                $table->integer('kategori_tambah')->default(0);
                $table->integer('kategori_edit')->default(0);
                $table->integer('kategori_hapus')->default(0);
                $table->integer('gudang_lihat')->default(0);
                $table->integer('gudang_tambah')->default(0);
                $table->integer('gudang_edit')->default(0);
                $table->integer('gudang_hapus')->default(0);
                $table->integer('grup_akun_lihat')->default(0);
                $table->integer('grup_akun_tambah')->default(0);
                $table->integer('grup_akun_edit')->default(0);
                $table->integer('grup_akun_hapus')->default(0);
                $table->integer('daftar_akun_lihat')->default(0);
                $table->integer('daftar_akun_tambah')->default(0);
                $table->integer('daftar_akun_edit')->default(0);
                $table->integer('daftar_akun_hapus')->default(0);
                $table->integer('set_akun_lihat')->default(0);
                $table->integer('daftar_pajak_lihat')->default(0);
                $table->integer('daftar_pajak_tambah')->default(0);
                $table->integer('daftar_pajak_edit')->default(0);
                $table->integer('daftar_pajak_hapus')->nullable();
                $table->integer('poli_lihat')->default(0);
                $table->integer('poli_tambah')->default(0);
                $table->integer('poli_edit')->default(0);
                $table->integer('poli_hapus')->default(0);
                $table->integer('kamar_lihat')->default(0);
                $table->integer('kamar_tambah')->default(0);
                $table->integer('kamar_edit')->nullable();
                $table->integer('kamar_hapus')->nullable();
                $table->integer('penjamin_lihat')->default(0);
                $table->integer('penjamin_tambah')->default(0);
                $table->integer('penjamin_edit')->default(0);
                $table->integer('penjamin_hapus')->default(0);
                $table->integer('perujuk_lihat')->default(0);
                $table->integer('perujuk_tambah')->default(0);
                $table->integer('perujuk_edit')->default(0);
                $table->integer('perujuk_hapus')->default(0);
                $table->integer('jenis_obat_lihat')->default(0);
                $table->integer('jenis_obat_tambah')->default(0);
                $table->integer('jenis_obat_edit')->default(0);
                $table->integer('jenis_obat_hapus')->default(0);
                $table->integer('kelas_kamar_lihat')->default(0);
                $table->integer('kelas_kamar_tambah')->default(0);
                $table->integer('kelas_kamar_edit')->default(0);
                $table->integer('kelas_kamar_hapus')->default(0);
                $table->integer('cito_lihat')->default(0);
                $table->integer('cito_tambah')->nullable();
                $table->integer('cito_edit')->default(0);
                $table->integer('cito_hapus')->default(0);
                $table->integer('operasi_lihat')->default(0);
                $table->integer('operasi_tambah')->default(0);
                $table->integer('operasi_edit')->default(0);
                $table->integer('operasi_hapus')->default(0);
                $table->integer('sub_operasi_lihat')->default(0);
                $table->integer('sub_operasi_tambah')->default(0);
                $table->integer('sub_operasi_edit')->default(0);
                $table->integer('sub_operasi_hapus')->default(0);
                $table->integer('detail_sub_operasi_lihat')->default(0);
                $table->integer('detail_sub_operasi_tambah')->default(0);
                $table->integer('detail_sub_operasi_edit')->default(0);
                $table->integer('detail_sub_operasi_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_pembayaran
	     */
	    Schema::create('otoritas_pembayaran', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('pembayaran_lihat')->default(0);
                $table->integer('pembayaran_hutang_lihat')->default(0);
                $table->integer('pembayaran_hutang_tambah')->default(0);
                $table->integer('pembayaran_hutang_edit')->default(0);
                $table->integer('pembayaran_hutang_hapus')->default(0);
                $table->integer('pembayaran_piutang_lihat')->default(0);
                $table->integer('pembayaran_piutang_tambah')->default(0);
                $table->integer('pembayaran_piutang_edit')->default(0);
                $table->integer('pembayaran_piutang_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_pembelian
	     */
	    Schema::create('otoritas_pembelian', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('pembelian_lihat')->default(0);
                $table->integer('pembelian_tambah')->default(0);
                $table->integer('pembelian_edit')->default(0);
                $table->integer('pembelian_hapus')->default(0);
                $table->integer('retur_pembelian_lihat')->default(0);
                $table->integer('retur_pembelian_tambah')->default(0);
                $table->integer('retur_pembelian_edit')->default(0);
                $table->integer('retur_pembelian_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_penjualan
	     */
	    Schema::create('otoritas_penjualan', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('penjualan_lihat')->default(0);
                $table->integer('penjualan_tambah')->default(0);
                $table->integer('penjualan_edit')->default(0);
                $table->integer('penjualan_hapus')->default(0);
                $table->integer('retur_lihat')->default(0);
                $table->integer('retur_penjualan_lihat')->default(0);
                $table->integer('retur_penjualan_tambah')->default(0);
                $table->integer('retur_penjualan_edit')->default(0);
                $table->integer('retur_penjualan_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_persediaan
	     */
	    Schema::create('otoritas_persediaan', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('persediaan_lihat')->default(0);
                $table->integer('kartu_stok_lihat')->default(0);
            });


	    /**
	     * Table: otoritas_registrasi
	     */
	    Schema::create('otoritas_registrasi', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('registrasi_lihat')->default(0);
                $table->integer('registrasi_rj_lihat')->default(0);
                $table->integer('registrasi_rj_tambah')->nullable();
                $table->integer('registrasi_rj_edit')->default(0);
                $table->integer('registrasi_rj_hapus')->default(0);
                $table->integer('registrasi_ri_lihat')->default(0);
                $table->integer('registrasi_ri_tambah')->default(0);
                $table->integer('registrasi_ri_edit')->default(0);
                $table->integer('registrasi_ri_hapus')->default(0);
                $table->integer('registrasi_ugd_lihat')->nullable();
                $table->integer('registrasi_ugd_tambah')->nullable();
                $table->integer('registrasi_ugd_edit')->default(0);
                $table->integer('registrasi_ugd_hapus')->nullable();
            });


	    /**
	     * Table: otoritas_rekam_medik
	     */
	    Schema::create('otoritas_rekam_medik', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('rekam_medik_lihat')->default(0);
                $table->integer('rekam_medik_rj_lihat')->default(0);
                $table->integer('rekam_medik_rj_tambah')->default(0);
                $table->integer('rekam_medik_rj_edit')->default(0);
                $table->integer('rekam_medik_rj_hapus')->default(0);
                $table->integer('rekam_medik_ri_lihat')->default(0);
                $table->integer('rekam_medik_ri_tambah')->default(0);
                $table->integer('rekam_medik_ri_edit')->default(0);
                $table->integer('rekam_medik_ri_hapus')->default(0);
                $table->integer('rekam_medik_ugd_lihat')->default(0);
                $table->integer('rekam_medik_ugd_tambah')->default(0);
                $table->integer('rekam_medik_ugd_edit')->default(0);
                $table->integer('rekam_medik_ugd_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_setting
	     */
	    Schema::create('otoritas_setting', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('setting_lihat')->default(0);
                $table->integer('setting_registrasi_lihat')->default(0);
                $table->integer('penetapan_petugas_lihat')->default(0);
                $table->integer('printer_lihat')->default(0);
            });


	    /**
	     * Table: otoritas_stok_awal
	     */
	    Schema::create('otoritas_stok_awal', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('stok_awal_lihat')->default(0);
                $table->integer('stok_awal_tambah')->default(0);
                $table->integer('stok_awal_edit')->default(0);
                $table->integer('stok_awal_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_stok_opname
	     */
	    Schema::create('otoritas_stok_opname', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('stok_opname_lihat')->default(0);
                $table->integer('stok_opname_tambah')->default(0);
                $table->integer('stok_opname_edit')->nullable();
                $table->integer('stok_opname_hapus')->default(0);
            });


	    /**
	     * Table: otoritas_transaksi_kas
	     */
	    Schema::create('otoritas_transaksi_kas', function($table) {
                $table->increments('id');
                $table->integer('id_otoritas')->unique();
                $table->integer('transaksi_kas_lihat')->default(0);
            });


	    /**
	     * Table: pelanggan
	     */
	    Schema::create('pelanggan', function($table) {
                $table->increments('id');
                $table->string('no_rm', 50)->nullable();
                $table->string('nama_pelanggan', 50)->nullable();
                $table->integer('kode_pelanggan')->nullable();
                $table->string('e_mail', 100)->nullable();
                $table->string('wilayah', 100)->nullable();
                $table->string('level_harga', 100)->nullable();
                $table->string('tempat_lahir', 50)->nullable();
                $table->date('tgl_lahir')->nullable();
                $table->string('umur', 50)->nullable();
                $table->string('alamat_sekarang', 100)->nullable();
                $table->string('alamat_ktp', 100)->nullable();
                $table->string('no_telp', 50)->nullable();
                $table->string('no_ktp', 50)->nullable();
                $table->string('nama_suamiortu', 50)->nullable();
                $table->string('pekerjaan_suamiortu', 50)->nullable();
                $table->string('nama_penanggungjawab', 50)->nullable();
                $table->string('hubungan_dengan_pasien', 50)->nullable();
                $table->string('alamat_penanggung', 50)->nullable();
                $table->string('no_hp_penanggung', 50)->nullable();
                $table->string('jenis_kelamin', 50)->nullable();
                $table->string('pendidikan_terakhir', 50)->nullable();
                $table->string('status_kawin', 50)->nullable();
                $table->string('agama', 50)->nullable();
                $table->string('penjamin', 50)->nullable();
                $table->string('gol_darah', 50)->nullable();
                $table->string('provinsi', 100)->nullable();
                $table->string('kabupaten', 100)->nullable();
                $table->string('kecamatan', 100)->nullable();
                $table->string('kelurahan', 100)->nullable();
                $table->date('tanggal')->nullable();
                $table->string('alergi', 100)->nullable();
                $table->string('no_kk', 100)->nullable();
                $table->string('nama_kk', 100)->nullable();
                $table->string('no_rm_lama', 100)->nullable();
            });


	    /**
	     * Table: pemasukan
	     */
	    Schema::create('pemasukan', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: pembayaran_hutang
	     */
	    Schema::create('pembayaran_hutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('dari_kas', 100);
            });


	    /**
	     * Table: pembayaran_piutang
	     */
	    Schema::create('pembayaran_piutang', function($table) {
                $table->increments('id');
                $table->string('no_faktur_pembayaran', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->string('user_buat', 100);
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('dari_kas', 100);
            });


	    /**
	     * Table: pembelian
	     */
	    Schema::create('pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('kode_gudang', 100)->nullable();
                $table->string('suplier', 50);
                $table->integer('total');
                $table->date('tanggal');
                $table->date('tanggal_jt')->nullable();
                $table->time('jam');
                $table->string('user', 50);
                $table->string('status', 100)->nullable();
                $table->integer('potongan')->nullable();
                $table->integer('tax')->nullable();
                $table->integer('sisa')->nullable();
                $table->integer('kredit');
                $table->integer('nilai_kredit');
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->string('status_beli_awal', 100);
                $table->string('ppn', 100);
            });


	    /**
	     * Table: penetapan_petugas
	     */
	    Schema::create('penetapan_petugas', function($table) {
                $table->increments('id');
                $table->string('nama_dokter', 100)->nullable();
                $table->string('nama_paramedik', 100)->nullable();
                $table->string('nama_farmasi', 100)->nullable();
            });


	    /**
	     * Table: pengeluaran
	     */
	    Schema::create('pengeluaran', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
            });


	    /**
	     * Table: penjamin
	     */
	    Schema::create('penjamin', function($table) {
                $table->increments('id');
                $table->string('nama', 50)->nullable();
                $table->text('alamat')->nullable();
                $table->string('no_telp', 100);
                $table->string('harga', 100);
                $table->text('cakupan_layanan')->nullable();
                $table->string('jatuh_tempo', 100)->nullable();
            });


	    /**
	     * Table: penjualan
	     */
	    Schema::create('penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 50);
                $table->string('no_reg', 100)->nullable();
                $table->string('nama', 100);
                $table->string('dokter', 100);
                $table->string('penjamin', 100);
                $table->string('no_resep', 100)->nullable();
                $table->string('resep_dokter', 100)->nullable();
                $table->string('analis', 100)->nullable();
                $table->string('apoteker', 100);
                $table->string('perawat', 100);
                $table->string('petugas_lain', 100)->nullable();
                $table->integer('biaya_admin');
                $table->string('kode_gudang', 100)->nullable();
                $table->string('kode_pelanggan', 50);
                $table->string('kode_meja', 100)->nullable();
                $table->integer('total');
                $table->date('tanggal');
                $table->date('tanggal_jt')->nullable();
                $table->time('jam');
                $table->string('user', 50);
                $table->string('sales', 100);
                $table->string('status', 100)->nullable();
                $table->integer('potongan');
                $table->integer('tax');
                $table->integer('sisa')->nullable();
                $table->integer('kredit')->nullable();
                $table->integer('nilai_kredit')->nullable();
                $table->integer('total_hpp')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->string('ppn', 100);
                $table->integer('no_pesanan')->nullable();
                $table->string('status_jual_awal', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->string('jenis_penjualan', 100);
                $table->string('petugas_edit', 100)->nullable();
                $table->dateTime('waktu_edit')->nullable();
            });


	    /**
	     * Table: perujuk
	     */
	    Schema::create('perujuk', function($table) {
                $table->increments('id');
                $table->string('nama', 100);
                $table->text('alamat');
                $table->string('no_telp', 100);
            });


	    /**
	     * Table: perusahaan
	     */
	    Schema::create('perusahaan', function($table) {
                $table->increments('id');
                $table->string('nama_perusahaan', 100);
                $table->string('alamat_perusahaan', 100);
                $table->string('singkatan_perusahaan', 100);
                $table->string('foto', 100);
                $table->string('no_telp', 25);
                $table->string('no_fax', 25);
            });


	    /**
	     * Table: poli
	     */
	    Schema::create('poli', function($table) {
                $table->increments('id');
                $table->string('nama', 100)->nullable();
            });


	    /**
	     * Table: registrasi
	     */
	    Schema::create('registrasi', function($table) {
                $table->increments('id');
                $table->string('no_reg', 255)->nullable();
                $table->string('no_rm', 255)->nullable();
                $table->string('nama_pasien', 100)->nullable();
                $table->string('alamat_pasien', 100)->nullable();
                $table->string('hp_pasien', 100)->nullable();
                $table->string('umur_pasien', 100)->nullable();
                $table->string('jenis_kelamin', 100)->nullable();
                $table->string('jenis_pasien', 100)->nullable();
                $table->string('penjamin', 100)->nullable();
                $table->date('tanggal')->nullable();
                $table->time('jam')->nullable();
                $table->date('tanggal_masuk')->nullable();
                $table->date('tanggal_keluar')->nullable();
                $table->string('kondisi', 100)->nullable();
                $table->string('pengantar_pasien', 100)->nullable();
                $table->string('nama_pengantar', 100)->nullable();
                $table->string('alamat_pengantar', 100)->nullable();
                $table->string('hp_pengantar', 100)->nullable();
                $table->string('hubungan_dengan_pasien', 100)->nullable();
                $table->string('penanggung_jawab', 100)->nullable();
                $table->string('alamat_penanggung_jawab', 100)->nullable();
                $table->string('hp_penanggung_jawab', 100)->nullable();
                $table->string('pekerjaan_penanggung_jawab', 100)->nullable();
                $table->string('status', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->string('dokter', 100)->nullable();
                $table->string('petugas', 100)->nullable();
                $table->string('bed', 100)->nullable();
                $table->string('group_bed', 100)->nullable();
                $table->string('menginap', 100)->nullable();
                $table->string('keadaan_pulang', 100)->nullable();
                $table->string('poli', 100)->nullable();
                $table->integer('no_urut')->nullable();
                $table->string('rujukan', 100)->nullable();
                $table->string('kelurahan', 100)->nullable();
                $table->string('kecamatan', 100)->nullable();
                $table->string('kabupaten', 100)->nullable();
                $table->string('provinsi', 100)->nullable();
                $table->string('dokter_jaga', 100)->nullable();
                $table->string('dokter_pengirim', 100)->nullable();
                $table->string('status_nikah', 100)->nullable();
                $table->string('pekerjaan_pasien', 100)->nullable();
                $table->string('gol_darah', 100)->nullable();
                $table->string('surat_jaminan', 100)->nullable();
                $table->string('alergi', 100)->nullable();
                $table->string('no_kk', 100)->nullable();
                $table->string('nama_kk', 100)->nullable();
                $table->string('eye', 100)->nullable();
                $table->string('verbal', 100)->nullable();
                $table->string('motorik', 100)->nullable();
                $table->string('petugas_lain', 100)->nullable();
            });


	    /**
	     * Table: rekam_medik
	     */
	    Schema::create('rekam_medik', function($table) {
                $table->increments('id');
                $table->string('no_reg', 100);
                $table->string('no_rm', 100);
                $table->string('nama', 100);
                $table->text('alamat');
                $table->string('umur', 100);
                $table->string('jenis_kelamin', 100);
                $table->string('sistole_distole', 100)->nullable();
                $table->string('suhu', 100)->nullable();
                $table->string('berat_badan', 100)->nullable();
                $table->string('tinggi_badan', 100)->nullable();
                $table->string('nadi', 100)->nullable();
                $table->string('respiratory', 100)->nullable();
                $table->string('poli', 100);
                $table->string('anamnesa', 100)->nullable();
                $table->string('pemeriksaan_fisik', 100)->nullable();
                $table->string('keadaan_umum', 100)->nullable();
                $table->string('kondisi_keluar', 100)->nullable();
                $table->string('kesadaran', 100)->nullable();
                $table->string('icd_utama', 100)->nullable();
                $table->string('icd_penyerta', 100)->nullable();
                $table->string('icd_komplikasi', 100)->nullable();
                $table->string('kode_utama', 100)->nullable();
                $table->string('kode_penyerta', 100)->nullable();
                $table->string('kode_penyerta_tambahan', 100)->nullable();
                $table->string('icd_penyerta_tambahan', 100)->nullable();
                $table->string('kode_komplikasi', 100)->nullable();
                $table->string('tanggal_periksa', 100);
                $table->time('jam');
                $table->string('dokter', 100);
                $table->string('kondisi', 100);
                $table->string('rujukan', 100);
                $table->string('alergi', 100)->nullable();
                $table->string('no_kk', 100)->nullable();
                $table->string('nama_kk', 100)->nullable();
                $table->string('status', 100)->nullable();
            });


	    /**
	     * Table: rekam_medik_inap
	     */
	    Schema::create('rekam_medik_inap', function($table) {
                $table->increments('id');
                $table->string('no_reg', 100);
                $table->string('no_rm', 100);
                $table->string('nama', 100);
                $table->text('alamat');
                $table->string('umur', 100);
                $table->string('jenis_kelamin', 100);
                $table->string('sistole_distole', 100)->nullable();
                $table->string('suhu', 100)->nullable();
                $table->string('berat_badan', 100)->nullable();
                $table->string('tinggi_badan', 100)->nullable();
                $table->string('nadi', 100)->nullable();
                $table->string('respiratory', 100)->nullable();
                $table->string('poli', 100);
                $table->string('anamnesa', 100)->nullable();
                $table->string('pemeriksaan_fisik', 100)->nullable();
                $table->string('keadaan_umum', 100)->nullable();
                $table->string('kondisi_keluar', 100)->nullable();
                $table->string('kesadaran', 100)->nullable();
                $table->string('icd_utama', 100)->nullable();
                $table->string('icd_penyerta', 100)->nullable();
                $table->string('icd_penyerta_tambahan', 100)->nullable();
                $table->string('icd_komplikasi', 100)->nullable();
                $table->string('kode_utama', 100)->nullable();
                $table->string('kode_penyerta', 100)->nullable();
                $table->string('kode_penyerta_tambahan', 100)->nullable();
                $table->string('kode_komplikasi', 100)->nullable();
                $table->date('tanggal_periksa');
                $table->time('jam');
                $table->string('dokter', 100);
                $table->string('kondisi', 100);
                $table->string('rujukan', 100);
                $table->string('dokter_penanggung_jawab', 100);
                $table->string('bed', 100);
                $table->string('alergi', 100)->nullable();
                $table->string('group_bed', 100)->nullable();
                $table->string('status', 100)->nullable();
            });


	    /**
	     * Table: rekam_medik_ugd
	     */
	    Schema::create('rekam_medik_ugd', function($table) {
                $table->increments('id');
                $table->string('no_reg', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
                $table->string('nama', 100)->nullable();
                $table->text('alamat')->nullable();
                $table->string('umur', 100)->nullable();
                $table->string('jenis_kelamin', 100)->nullable();
                $table->string('sistole_distole', 100)->nullable();
                $table->string('suhu', 100)->nullable();
                $table->string('berat_badan', 100)->nullable();
                $table->string('tinggi_badan', 100)->nullable();
                $table->string('nadi', 100)->nullable();
                $table->string('respiratory', 100)->nullable();
                $table->string('poli', 100)->nullable();
                $table->string('anamnesa', 100)->nullable();
                $table->string('pemeriksaan_fisik', 100)->nullable();
                $table->string('keadaan_umum', 100)->nullable();
                $table->string('kondisi_keluar', 100)->nullable();
                $table->string('kesadaran', 100)->nullable();
                $table->string('icd_utama', 100)->nullable();
                $table->string('icd_penyerta', 100)->nullable();
                $table->string('icd_penyerta_tambahan', 100)->nullable();
                $table->string('icd_komplikasi', 100)->nullable();
                $table->string('kode_utama', 100)->nullable();
                $table->string('kode_penyerta', 100)->nullable();
                $table->string('kode_penyerta_tambahan', 100)->nullable();
                $table->string('kode_komplikasi', 100)->nullable();
                $table->time('jam')->nullable();
                $table->date('tanggal')->nullable();
                $table->string('dokter', 100)->nullable();
                $table->string('kondisi', 100)->nullable();
                $table->string('rujukan', 100)->nullable();
                $table->string('pengantar', 100)->nullable();
                $table->string('alergi', 100)->nullable();
                $table->string('eye', 100)->nullable();
                $table->string('verbal', 100)->nullable();
                $table->string('motorik', 100)->nullable();
                $table->string('status', 100)->nullable();
            });


	    /**
	     * Table: retur_pembelian
	     */
	    Schema::create('retur_pembelian', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->date('tanggal')->nullable();
                $table->time('jam');
                $table->string('nama_barang', 100);
                $table->string('nama_suplier', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_buat', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->integer('sisa');
                $table->string('ppn', 100);
            });


	    /**
	     * Table: retur_penjualan
	     */
	    Schema::create('retur_penjualan', function($table) {
                $table->increments('id');
                $table->string('no_faktur_retur', 100);
                $table->date('tanggal')->nullable();
                $table->time('jam');
                $table->string('nama_barang', 100)->nullable();
                $table->string('kode_pelanggan', 100);
                $table->string('keterangan', 100)->nullable();
                $table->integer('total');
                $table->integer('potongan');
                $table->integer('tax');
                $table->string('user_buat', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
                $table->string('tanggal_edit')->nullable();
                $table->string('cara_bayar', 100);
                $table->integer('tunai');
                $table->integer('sisa');
                $table->string('ppn', 100);
            });


	    /**
	     * Table: satuan
	     */
	    Schema::create('satuan', function($table) {
                $table->increments('id');
                $table->string('nama', 50);
                $table->string('nama_cetak', 100);
                $table->string('dari_satuan', 100);
                $table->integer('qty');
            });


	    /**
	     * Table: satuan_konversi
	     */
	    Schema::create('satuan_konversi', function($table) {
                $table->increments('id');
                $table->string('id_satuan', 100);
                $table->string('id_produk', 100);
                $table->string('kode_produk', 100);
                $table->string('konversi', 100);
                $table->integer('harga_pokok');
            });


	    /**
	     * Table: setting_akun
	     */
	    Schema::create('setting_akun', function($table) {
                $table->increments('id');
                $table->string('persediaan', 100);
                $table->string('pajak', 100);
                $table->string('potongan', 100);
                $table->string('hutang', 100);
                $table->string('modal', 100);
                $table->string('kas', 100);
                $table->string('item_masuk', 100);
                $table->string('item_keluar', 100);
                $table->string('retur_penjualan', 100);
                $table->string('potongan_retur_jual', 100);
                $table->string('pajak_retur_jual', 100);
                $table->string('tunai_retur_jual', 100);
                $table->string('retur_pembelian', 100);
                $table->string('potongan_retur_beli', 100);
                $table->string('pajak_retur_beli', 100);
                $table->string('tunai_retur_beli', 100);
                $table->string('kredit_retur_beli', 100);
                $table->string('kredit_retur_jual', 100);
                $table->string('potongan_jual', 100);
                $table->string('pajak_jual', 100);
                $table->string('total_penjualan', 100);
                $table->string('pembayaran_kredit', 100);
                $table->string('komisi_sales', 100);
                $table->string('komisi_sales_retur_jual', 100);
                $table->string('hpp_penjualan', 100);
                $table->string('stok_awal', 100);
                $table->string('pengaturan_stok', 100);
                $table->string('pembayaran_tunai', 100);
                $table->string('potongan_hutang', 100);
                $table->string('potongan_piutang', 100);
                $table->string('prive', 100);
                $table->string('laba_ditahan', 100);
                $table->string('laba_tahun_berjalan', 100);
                $table->string('balancing', 100);
            });


	    /**
	     * Table: setting_bahasa
	     */
	    Schema::create('setting_bahasa', function($table) {
                $table->increments('id');
                $table->string('kata_asal', 100);
                $table->string('kata_ubah', 100);
            });


	    /**
	     * Table: setting_diskon_tax
	     */
	    Schema::create('setting_diskon_tax', function($table) {
                $table->increments('id');
                $table->integer('diskon_nominal');
                $table->integer('diskon_persen');
                $table->integer('tax');
            });


	    /**
	     * Table: setting_printer
	     */
	    Schema::create('setting_printer', function($table) {
                $table->increments('id');
                $table->string('nama_print', 100)->nullable();
                $table->string('status_print', 100)->nullable();
            });


	    /**
	     * Table: setting_registrasi
	     */
	    Schema::create('setting_registrasi', function($table) {
                $table->increments('id');
                $table->integer('tampil_ttv');
                $table->integer('tampil_data_pasien_umum');
            });


	    /**
	     * Table: setup_hasil
	     */
	    Schema::create('setup_hasil', function($table) {
                $table->increments('id');
                $table->string('text_hasil', 100);
                $table->string('nama_pemeriksaan', 100);
                $table->string('kelompok_pemeriksaan', 100)->nullable();
                $table->string('model_hitung', 100);
                $table->string('normal_lk', 100)->nullable();
                $table->string('normal_pr', 100)->nullable();
                $table->string('metode', 100)->nullable();
                $table->string('kategori_index', 100);
                $table->string('normal_lk2', 100)->nullable();
                $table->string('normal_pr2', 100)->nullable();
                $table->text('text_reference')->nullable();
                $table->string('satuan_nilai_normal', 100)->nullable();
            });


	    /**
	     * Table: status_print
	     */
	    Schema::create('status_print', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('tipe_produk', 100);
                $table->string('no_pesanan', 100);
                $table->string('status_print', 100)->nullable();
            });


	    /**
	     * Table: stok_awal
	     */
	    Schema::create('stok_awal', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_awal');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('total');
                $table->string('gudang', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
                $table->string('tanggal_edit', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
            });


	    /**
	     * Table: stok_opname
	     */
	    Schema::create('stok_opname', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100);
                $table->date('tanggal');
                $table->time('jam');
                $table->string('status', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->integer('total_selisih');
                $table->integer('hpp')->nullable();
                $table->string('user', 100);
            });


	    /**
	     * Table: sub_operasi
	     */
	    Schema::create('sub_operasi', function($table) {
                $table->increments('id_sub_operasi');
                $table->integer('id_kelas_kamar');
                $table->integer('id_cito');
                $table->integer('id_operasi');
                $table->integer('harga_jual');
            });


	    /**
	     * Table: suplier
	     */
	    Schema::create('suplier', function($table) {
                $table->increments('id');
                $table->string('nama', 50);
                $table->string('alamat', 50);
                $table->string('no_telp', 25);
            });


	    /**
	     * Table: tbs_detail_operasi
	     */
	    Schema::create('tbs_detail_operasi', function($table) {
                $table->increments('id');
                $table->string('id_detail_operasi', 100);
                $table->string('id_user', 100);
                $table->string('id_sub_operasi', 100);
                $table->string('id_operasi', 100);
                $table->string('waktu');
                $table->string('petugas_input', 100);
                $table->string('no_reg', 100);
                $table->string('session_id', 100);
                $table->string('id_tbs_operasi', 100);
            });


	    /**
	     * Table: tbs_fee_produk
	     */
	    Schema::create('tbs_fee_produk', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('nama_petugas', 100);
                $table->string('no_faktur', 100)->nullable();
                $table->string('kode_produk', 100);
                $table->string('nama_produk', 100);
                $table->integer('jumlah_fee');
                $table->date('tanggal');
                $table->string('waktu')->nullable();
                $table->time('jam');
                $table->string('no_reg', 100)->nullable();
                $table->string('no_rm', 100)->nullable();
            });


	    /**
	     * Table: tbs_item_keluar
	     */
	    Schema::create('tbs_item_keluar', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 100)->nullable();
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
            });


	    /**
	     * Table: tbs_item_masuk
	     */
	    Schema::create('tbs_item_masuk', function($table) {
                $table->increments('id');
                $table->string('no_faktur', 100)->nullable();
                $table->string('session_id', 100)->nullable();
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('subtotal');
            });


	    /**
	     * Table: tbs_jurnal
	     */
	    Schema::create('tbs_jurnal', function($table) {
                $table->increments('id');
                $table->string('session_id', 100);
                $table->string('kode_akun_jurnal', 100);
                $table->string('nama_akun_jurnal', 100);
                $table->integer('debit');
                $table->integer('kredit');
                $table->string('keterangan', 100)->nullable();
            });


	    /**
	     * Table: tbs_jurnal_trans
	     */
	    Schema::create('tbs_jurnal_trans', function($table) {
                $table->integer('id');
                $table->integer('no_jurnal');
                $table->integer('waktu_jurnal');
                $table->integer('ket_jurnal');
            });


	    /**
	     * Table: tbs_kas_keluar
	     */
	    Schema::create('tbs_kas_keluar', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
            });


	    /**
	     * Table: tbs_kas_masuk
	     */
	    Schema::create('tbs_kas_masuk', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 100)->nullable();
                $table->string('keterangan', 100)->nullable();
                $table->string('dari_akun', 100);
                $table->string('ke_akun', 100);
                $table->integer('jumlah');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('user', 100);
            });


	    /**
	     * Table: tbs_operasi
	     */
	    Schema::create('tbs_operasi', function($table) {
                $table->increments('id');
                $table->string('session_id', 100);
                $table->string('operasi', 100);
                $table->string('sub_operasi', 100);
                $table->string('petugas_input', 100);
                $table->string('waktu');
                $table->integer('harga_jual');
                $table->string('no_reg', 100);
                $table->integer('id_tbs_lama')->nullable();
            });


	    /**
	     * Table: tbs_pembayaran_hutang
	     */
	    Schema::create('tbs_pembayaran_hutang', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur_pembayaran', 100)->nullable();
                $table->string('no_faktur_pembelian', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('suplier', 100);
            });


	    /**
	     * Table: tbs_pembayaran_piutang
	     */
	    Schema::create('tbs_pembayaran_piutang', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur_pembayaran', 100)->nullable();
                $table->string('no_faktur_penjualan', 100);
                $table->date('tanggal');
                $table->date('tanggal_jt');
                $table->integer('kredit');
                $table->integer('potongan');
                $table->integer('total');
                $table->integer('jumlah_bayar');
                $table->string('kode_pelanggan', 100);
            });


	    /**
	     * Table: tbs_pembelian
	     */
	    Schema::create('tbs_pembelian', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 50)->nullable();
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->integer('jumlah_barang');
                $table->string('satuan', 50);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan')->nullable();
                $table->integer('tax')->nullable();
            });


	    /**
	     * Table: tbs_penjualan
	     */
	    Schema::create('tbs_penjualan', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 100)->nullable();
                $table->string('no_reg', 100);
                $table->string('kode_barang', 50);
                $table->string('nama_barang', 50);
                $table->integer('jumlah_barang');
                $table->string('satuan', 50);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
                $table->integer('hpp')->nullable();
                $table->string('foto', 100)->nullable();
                $table->integer('no_pesanan')->nullable();
                $table->string('komentar', 100)->nullable();
                $table->string('tipe_barang', 100);
                $table->string('dosis', 100)->nullable();
                $table->date('tanggal');
                $table->time('jam');
                $table->string('lab', 25)->nullable();
            });


	    /**
	     * Table: tbs_retur_pembelian
	     */
	    Schema::create('tbs_retur_pembelian', function($table) {
                $table->increments('id');
                $table->string('session_id', 100);
                $table->string('no_faktur_retur', 100);
                $table->string('no_faktur_pembelian', 100);
                $table->string('nama_barang', 100);
                $table->string('kode_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->string('satuan', 100);
                $table->string('satuan_beli', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
            });


	    /**
	     * Table: tbs_retur_penjualan
	     */
	    Schema::create('tbs_retur_penjualan', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur_retur', 100)->nullable();
                $table->string('no_faktur_penjualan', 100);
                $table->string('nama_barang', 100);
                $table->string('kode_barang', 100);
                $table->integer('jumlah_beli');
                $table->integer('jumlah_retur');
                $table->string('satuan', 100);
                $table->string('satuan_jual', 100);
                $table->integer('harga');
                $table->integer('subtotal');
                $table->integer('potongan');
                $table->integer('tax');
            });


	    /**
	     * Table: tbs_stok_awal
	     */
	    Schema::create('tbs_stok_awal', function($table) {
                $table->increments('id');
                $table->string('session_id', 100);
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->integer('jumlah_awal');
                $table->string('satuan', 100);
                $table->integer('harga');
                $table->integer('total');
                $table->date('tanggal');
                $table->time('jam');
                $table->string('tanggal_edit', 100)->nullable();
                $table->string('user_edit', 100)->nullable();
            });


	    /**
	     * Table: tbs_stok_opname
	     */
	    Schema::create('tbs_stok_opname', function($table) {
                $table->increments('id');
                $table->string('session_id', 100)->nullable();
                $table->string('no_faktur', 100);
                $table->string('kode_barang', 100);
                $table->string('nama_barang', 100);
                $table->string('satuan', 100);
                $table->integer('awal');
                $table->integer('masuk');
                $table->integer('keluar');
                $table->integer('stok_sekarang');
                $table->integer('fisik');
                $table->integer('selisih_fisik');
                $table->integer('selisih_harga');
                $table->integer('harga');
                $table->integer('hpp');
            });


	    /**
	     * Table: user
	     */
	    Schema::create('user', function($table) {
                $table->increments('id');
                $table->string('username', 50);
                $table->string('password', 150);
                $table->string('nama', 50);
                $table->string('alamat', 50);
                $table->string('jabatan', 50);
                $table->string('otoritas', 50);
                $table->string('status', 50);
                $table->string('status_sales', 100);
                $table->string('tipe', 100);
            });


         }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
         public function down()
         {
            
	            Schema::drop('akses');
	            Schema::drop('barang');
	            Schema::drop('batal_detail_penjualan');
	            Schema::drop('batal_penjualan');
	            Schema::drop('bed');
	            Schema::drop('bidang_lab');
	            Schema::drop('cito');
	            Schema::drop('daftar_akun');
	            Schema::drop('daftar_pajak');
	            Schema::drop('detail_item_keluar');
	            Schema::drop('detail_item_masuk');
	            Schema::drop('detail_kas_keluar');
	            Schema::drop('detail_kas_masuk');
	            Schema::drop('detail_operasi');
	            Schema::drop('detail_pembayaran_hutang');
	            Schema::drop('detail_pembayaran_piutang');
	            Schema::drop('detail_pembelian');
	            Schema::drop('detail_penjualan');
	            Schema::drop('detail_retur_pembelian');
	            Schema::drop('detail_retur_penjualan');
	            Schema::drop('detail_stok_opname');
	            Schema::drop('dokter');
	            Schema::drop('fee_faktur');
	            Schema::drop('fee_produk');
	            Schema::drop('grup_akun');
	            Schema::drop('gudang');
	            Schema::drop('hak_otoritas');
	            Schema::drop('hapus_transaksi_db');
	            Schema::drop('hasil_detail_operasi');
	            Schema::drop('hasil_operasi');
	            Schema::drop('history_detail_item_keluar');
	            Schema::drop('history_detail_item_masuk');
	            Schema::drop('history_detail_kas_keluar');
	            Schema::drop('history_detail_kas_masuk');
	            Schema::drop('history_detail_pembayaran_hutang');
	            Schema::drop('history_detail_pembayaran_piutang');
	            Schema::drop('history_detail_pembelian');
	            Schema::drop('history_detail_penjualan');
	            Schema::drop('history_detail_retur_pembelian');
	            Schema::drop('history_detail_retur_penjualan');
	            Schema::drop('history_detail_stok_opname');
	            Schema::drop('history_item_keluar');
	            Schema::drop('history_item_masuk');
	            Schema::drop('history_jurnal_manual');
	            Schema::drop('history_kas_keluar');
	            Schema::drop('history_kas_masuk');
	            Schema::drop('history_kas_mutasi');
	            Schema::drop('history_pembayaran_hutang');
	            Schema::drop('history_pembayaran_piutang');
	            Schema::drop('history_pembelian');
	            Schema::drop('history_penjualan');
	            Schema::drop('history_retur_pembelian');
	            Schema::drop('history_retur_penjualan');
	            Schema::drop('history_stok_awal');
	            Schema::drop('history_stok_opname');
	            Schema::drop('hpp');
	            Schema::drop('hpp_barang');
	            Schema::drop('hpp_keluar');
	            Schema::drop('hpp_masuk');
	            Schema::drop('icd');
	            Schema::drop('item_keluar');
	            Schema::drop('item_masuk');
	            Schema::drop('jabatan');
	            Schema::drop('jasa_lab');
	            Schema::drop('jenis');
	            Schema::drop('jurnal_trans');
	            Schema::drop('kartu_stok');
	            Schema::drop('kas');
	            Schema::drop('kas_keluar');
	            Schema::drop('kas_masuk');
	            Schema::drop('kas_mutasi');
	            Schema::drop('kategori');
	            Schema::drop('kelas_kamar');
	            Schema::drop('laporan_fee_faktur');
	            Schema::drop('laporan_fee_produk');
	            Schema::drop('meja');
	            Schema::drop('nomor_faktur_jurnal');
	            Schema::drop('nomor_faktur_stok_awal');
	            Schema::drop('operasi');
	            Schema::drop('otoritas_item_keluar');
	            Schema::drop('otoritas_item_masuk');
	            Schema::drop('otoritas_kas');
	            Schema::drop('otoritas_kas_keluar');
	            Schema::drop('otoritas_kas_masuk');
	            Schema::drop('otoritas_kas_mutasi');
	            Schema::drop('otoritas_laporan');
	            Schema::drop('otoritas_master_data');
	            Schema::drop('otoritas_pembayaran');
	            Schema::drop('otoritas_pembelian');
	            Schema::drop('otoritas_penjualan');
	            Schema::drop('otoritas_persediaan');
	            Schema::drop('otoritas_registrasi');
	            Schema::drop('otoritas_rekam_medik');
	            Schema::drop('otoritas_setting');
	            Schema::drop('otoritas_stok_awal');
	            Schema::drop('otoritas_stok_opname');
	            Schema::drop('otoritas_transaksi_kas');
	            Schema::drop('pelanggan');
	            Schema::drop('pemasukan');
	            Schema::drop('pembayaran_hutang');
	            Schema::drop('pembayaran_piutang');
	            Schema::drop('pembelian');
	            Schema::drop('penetapan_petugas');
	            Schema::drop('pengeluaran');
	            Schema::drop('penjamin');
	            Schema::drop('penjualan');
	            Schema::drop('perujuk');
	            Schema::drop('perusahaan');
	            Schema::drop('poli');
	            Schema::drop('registrasi');
	            Schema::drop('rekam_medik');
	            Schema::drop('rekam_medik_inap');
	            Schema::drop('rekam_medik_ugd');
	            Schema::drop('retur_pembelian');
	            Schema::drop('retur_penjualan');
	            Schema::drop('satuan');
	            Schema::drop('satuan_konversi');
	            Schema::drop('setting_akun');
	            Schema::drop('setting_bahasa');
	            Schema::drop('setting_diskon_tax');
	            Schema::drop('setting_printer');
	            Schema::drop('setting_registrasi');
	            Schema::drop('setup_hasil');
	            Schema::drop('status_print');
	            Schema::drop('stok_awal');
	            Schema::drop('stok_opname');
	            Schema::drop('sub_operasi');
	            Schema::drop('suplier');
	            Schema::drop('tbs_detail_operasi');
	            Schema::drop('tbs_fee_produk');
	            Schema::drop('tbs_item_keluar');
	            Schema::drop('tbs_item_masuk');
	            Schema::drop('tbs_jurnal');
	            Schema::drop('tbs_jurnal_trans');
	            Schema::drop('tbs_kas_keluar');
	            Schema::drop('tbs_kas_masuk');
	            Schema::drop('tbs_operasi');
	            Schema::drop('tbs_pembayaran_hutang');
	            Schema::drop('tbs_pembayaran_piutang');
	            Schema::drop('tbs_pembelian');
	            Schema::drop('tbs_penjualan');
	            Schema::drop('tbs_retur_pembelian');
	            Schema::drop('tbs_retur_penjualan');
	            Schema::drop('tbs_stok_awal');
	            Schema::drop('tbs_stok_opname');
	            Schema::drop('user');
         }

}