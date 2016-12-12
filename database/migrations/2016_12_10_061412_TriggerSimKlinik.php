<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TriggerSimKlinik extends Migration{

    public function up()
    {

        DB::unprepared('
            CREATE TRIGGER `delete_tbs_retur_jual` AFTER DELETE ON `retur_penjualan` FOR EACH ROW
                
                    DELETE FROM tbs_retur_penjualan WHERE no_faktur_retur = old.no_faktur_retur
                
        ');


        DB::unprepared('
           CREATE TRIGGER `hapus_data_detail_pembayaran_hutang` AFTER INSERT ON `history_detail_pembayaran_hutang` FOR EACH ROW
                
                DELETE FROM detail_pembayaran_hutang WHERE no_faktur_pembayaran = new.no_faktur_pembayaran
                
        ');
        
        DB::unprepared('   
           CREATE TRIGGER `hapus_data_detail_item_masuk` AFTER INSERT ON `history_detail_item_masuk` FOR EACH ROW
                
                DELETE FROM detail_item_masuk WHERE no_faktur = new.no_faktur
                
        ');
        
        DB::unprepared('   
           CREATE TRIGGER `hapus_data_detail_kas_masuk` AFTER INSERT ON `history_detail_kas_masuk` FOR EACH ROW
                
                DELETE FROM detail_kas_masuk WHERE no_faktur = new.no_faktur
                
        ');
         
        DB::unprepared('  
           CREATE TRIGGER `hapus_data_detail_kas_keluar` AFTER INSERT ON `history_detail_kas_keluar` FOR EACH ROW
                
                DELETE FROM detail_kas_keluar WHERE no_faktur = new.no_faktur
                
        ');
           
        DB::unprepared('
           CREATE TRIGGER `hapus_data_detail_pembelian` AFTER INSERT ON `history_detail_pembelian` FOR EACH ROW
            
                DELETE FROM detail_pembelian WHERE no_faktur = new.no_faktur
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_detail_penjualan` AFTER INSERT ON `history_detail_penjualan` FOR EACH ROW
            
                DELETE FROM detail_penjualan WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_detail_retur_pembelian` AFTER INSERT ON `history_detail_retur_pembelian` FOR EACH ROW
            
                DELETE FROM detail_retur_pembelian WHERE no_faktur_retur = new.no_faktur_retur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_detail_retur_penjualan` AFTER INSERT ON `history_detail_retur_penjualan` FOR EACH ROW
            
                DELETE FROM detail_retur_penjualan WHERE no_faktur_retur = new.no_faktur_retur
            
        ');

        DB::unprepared('    
           CREATE TRIGGER `hapus_data_detail_stok_opname` AFTER INSERT ON `history_detail_stok_opname` FOR EACH ROW
            
                DELETE FROM detail_stok_opname WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_item_keluar` AFTER INSERT ON `history_item_keluar` FOR EACH ROW
            
                DELETE FROM item_keluar WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_item_masuk` AFTER INSERT ON `history_item_masuk` FOR EACH ROW
            
                DELETE FROM item_masuk WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_kas_keluar` AFTER INSERT ON `history_kas_keluar` FOR EACH ROW
            
                DELETE FROM kas_keluar WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_kas_masuk` AFTER INSERT ON `history_kas_masuk` FOR EACH ROW
            
                DELETE FROM kas_masuk WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('  
           CREATE TRIGGER `hapus_data_kas_mutasi` AFTER INSERT ON `history_kas_mutasi` FOR EACH ROW
            
                DELETE FROM kas_mutasi WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_pembayaran_hutang` AFTER INSERT ON `history_pembayaran_hutang` FOR EACH ROW
            
                DELETE FROM pembayaran_hutang WHERE no_faktur_pembayaran = new.no_faktur_pembayaran
            
        ');

        DB::unprepared('    
           CREATE TRIGGER `hapus_data_pembayaran_piutang` AFTER INSERT ON `history_pembayaran_piutang` FOR EACH ROW
            
                DELETE FROM pembayaran_piutang WHERE no_faktur_pembayaran = new.no_faktur_pembayaran
            
        ');

        DB::unprepared('
           CREATE TRIGGER `hapus_data_pembelian` AFTER INSERT ON `history_pembelian` FOR EACH ROW
            
                DELETE FROM pembelian WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_penjualan` AFTER INSERT ON `history_penjualan` FOR EACH ROW
            
                DELETE FROM penjualan WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_retur_pembelian` AFTER INSERT ON `history_retur_pembelian` FOR EACH ROW
            
                DELETE FROM retur_pembelian WHERE no_faktur_retur = new.no_faktur_retur
            
        ');

         DB::unprepared('  
           CREATE TRIGGER `hapus_data_retur_penjualan` AFTER INSERT ON `history_retur_penjualan` FOR EACH ROW
            
                DELETE FROM retur_penjualan WHERE no_faktur_retur = new.no_faktur_retur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_stok_awal` AFTER INSERT ON `history_stok_awal` FOR EACH ROW
            
                DELETE FROM stok_awal WHERE no_faktur = new.no_faktur AND kode_barang = new.kode_barang
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_data_stok_opname` AFTER INSERT ON `history_stok_opname` FOR EACH ROW
            
                DELETE FROM stok_opname WHERE no_faktur = new.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_detail_item_keluar` AFTER DELETE ON `detail_item_keluar` FOR EACH ROW
            
                DELETE FROM hpp_keluar WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang;
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;
            
        ');

        DB::unprepared('  
           CREATE TRIGGER `hapus_detail_pembayaran_piutang` AFTER INSERT ON `history_detail_pembayaran_piutang` FOR EACH ROW
            
                DELETE FROM detail_pembayaran_piutang WHERE no_faktur_pembayaran = new.no_faktur_pembayaran
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_jurnal_stok_opname` AFTER DELETE ON `detail_stok_opname` FOR EACH ROW
                       
               DELETE FROM hpp_masuk WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang AND jumlah_kuantitas = sisa;               
               DELETE FROM hpp_keluar WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang;
               DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;        
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_keluar` AFTER DELETE ON `detail_penjualan` FOR EACH ROW
                      
               DELETE FROM hpp_keluar WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang;
               DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;           
           
        ');
        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_masuk_detail_item_masuk` AFTER DELETE ON `detail_item_masuk` FOR EACH ROW
                      
               DELETE FROM hpp_masuk WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang AND sisa = jumlah_kuantitas;           
               DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;           
           
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_masuk_pembelian` AFTER DELETE ON `detail_pembelian` FOR EACH ROW
                      
               DELETE FROM hpp_masuk WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang;
               DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;           
           
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_masuk_stok_awal` AFTER DELETE ON `stok_awal` FOR EACH ROW
        BEGIN
           declare jumlah_kredit int;
           
           DELETE FROM hpp_masuk WHERE no_faktur = old.no_faktur AND kode_barang = old.kode_barang;
           
           
           UPDATE jurnal_trans SET kredit = kredit - old.total WHERE no_faktur = old.no_faktur AND debit = 0;
           
           SET jumlah_kredit = (SELECT COUNT(*) FROM jurnal_trans WHERE no_faktur = old.no_faktur AND kredit = 0 AND debit = 0 );
           
           if (jumlah_kredit = 1) then
           
           DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur;
           
           else
           
           UPDATE jurnal_trans SET debit = debit - old.total WHERE no_faktur = old.no_faktur AND kredit = 0;
           end if;
        END
        ');

        DB::unprepared('    
           CREATE TRIGGER `hapus_hpp_retur_pembelian` AFTER DELETE ON `detail_retur_pembelian` FOR EACH ROW
                      
            DELETE FROM hpp_keluar WHERE no_faktur = old.no_faktur_retur AND kode_barang = old.kode_barang;
            DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur_retur;           
           
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_hpp_retur_penjualan` AFTER DELETE ON `detail_retur_penjualan` FOR EACH ROW
                      
            DELETE FROM hpp_masuk WHERE no_faktur = old.no_faktur_retur AND kode_barang = old.kode_barang AND jumlah_kuantitas = sisa;
            DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur_retur;           
           
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_kas_keluar` AFTER DELETE ON `detail_kas_keluar` FOR EACH ROW
            
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_kas_masuk` AFTER DELETE ON `detail_kas_masuk` FOR EACH ROW 
            
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_kas_mutasi` AFTER DELETE ON `kas_mutasi` FOR EACH ROW 
            
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_pembayaran_piutang` AFTER DELETE ON `pembayaran_piutang` FOR EACH ROW 
            
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur_pembayaran
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_trans` AFTER INSERT ON `history_jurnal_manual` FOR EACH ROW 
            
                DELETE FROM jurnal_trans WHERE nomor_jurnal = new.nomor_jurnal
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_jurnal_transaksi` AFTER DELETE ON `pembayaran_hutang` FOR EACH ROW 
                     
                DELETE FROM jurnal_trans WHERE no_faktur = old.no_faktur_pembayaran;
                DELETE FROM tbs_pembayaran_hutang WHERE no_faktur_pembayaran = old.no_faktur_pembayaran;           
            
        ');

        DB::unprepared('   
           CREATE TRIGGER `hapus_otoritas` AFTER DELETE ON `hak_otoritas` FOR EACH ROW
            
           BEGIN
                   DELETE FROM otoritas_item_keluar WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_item_masuk WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_kas WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_kas_masuk WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_kas_keluar WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_kas_masuk WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_kas_mutasi WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_laporan WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_master_data WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_pembayaran WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_pembelian WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_penjualan WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_stok_awal WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_stok_opname WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_persediaan WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_transaksi_kas WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_registrasi WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_rekam_medik WHERE id_otoritas = old.id;
                   DELETE FROM otoritas_setting WHERE id_otoritas = old.id;
            END
            
        ');
        DB::unprepared('    
           CREATE TRIGGER `hapus_tbs_retur_pembelian` AFTER DELETE ON `retur_pembelian` FOR EACH ROW
               
                    DELETE FROM tbs_retur_pembelian WHERE no_faktur_retur = old.no_faktur_retur
               
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `hpp_item_keluar` AFTER INSERT ON `detail_item_keluar` FOR EACH ROW
               BEGIN
                   declare jumlah_r int;
                   declare harga int;
                   declare subtotal int;
                   
                   declare jumlah_hpp_masuk int;
                   declare id_hpp_masuk int;
                   declare no_faktur_hpp_masukk varchar(100);
                   declare jumlah_masuk int;
                   declare id_hpp int;
                   declare sisa_harga_hppmasuk int;
                   
                   set jumlah_r = new.jumlah;
                   
                   while jumlah_r > 0 do 
                   
                   SET jumlah_hpp_masuk = (SELECT sisa FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   
                   SET id_hpp_masuk = (SELECT id FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   
                   SET no_faktur_hpp_masukk = (SELECT no_faktur FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   
                   SET harga = (SELECT harga_unit FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   
                   SET id_hpp = (SELECT id FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa_retur != 0 AND no_faktur_hpp_masuk = no_faktur_hpp_masukk ORDER BY id ASC LIMIT 1);
                   
                   
                   SET sisa_harga_hppmasuk = (SELECT sisa_harga FROM hpp_masuk WHERE no_faktur = no_faktur_hpp_masukk AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1); 
                   
                   set subtotal = jumlah_r * harga; 
                   
                   
                   if(jumlah_r = jumlah_hpp_masuk) then
                   
                   
                   set subtotal = (jumlah_r * harga) + sisa_harga_hppmasuk; 
                   
                   
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Item Keluar",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
                   
                   UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk;
                   
                   UPDATE hpp_masuk SET sisa_retur = sisa_retur - jumlah_r WHERE id = id_hpp AND kode_barang = new.kode_barang;
                   
                   
                   set jumlah_r = 0;
                   
                   
                   ELSEIF (jumlah_r > jumlah_hpp_masuk) then
                   
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Item Keluar",jumlah_hpp_masuk,harga,subtotal,new.tanggal,new.jam,jumlah_hpp_masuk);
                   UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk ;
                   
                   UPDATE hpp_masuk SET sisa_retur = sisa_retur - jumlah_r WHERE id = id_hpp AND kode_barang = new.kode_barang;
                   
                   set jumlah_r = jumlah_r - jumlah_hpp_masuk;
                   
                   
                   ELSEIF (jumlah_r < jumlah_hpp_masuk) then
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Item Keluar",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
                   UPDATE hpp_masuk SET sisa = sisa - jumlah_r WHERE id = id_hpp_masuk ;
                   
                   UPDATE hpp_masuk SET sisa_retur = sisa_retur - jumlah_r WHERE id = id_hpp AND kode_barang = new.kode_barang;
                   
                   set jumlah_r = 0;
                   
                   end if;
                   
                   
                   end while;               
              
              END 
               
        '); 
        
        DB::unprepared('
           CREATE TRIGGER `insert_hpp_masuk_detail_item_masuk` AFTER INSERT ON `detail_item_masuk` FOR EACH ROW
           BEGIN
           
           declare sisa_hpp int;
           
           
           SET sisa_hpp = (SELECT COUNT(*) FROM hpp_masuk WHERE kode_barang = new.kode_barang AND no_faktur = new.no_faktur); 
           
           if sisa_hpp = 0 then
           
           
           INSERT INTO hpp_masuk (no_faktur,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,sisa,tanggal,jam,waktu) VALUES(new.no_faktur,new.kode_barang,"Item Masuk",new.jumlah,new.harga,new.subtotal,new.jumlah,new.tanggal,new.jam,new.waktu);
           
           end if;
           
           END
           
        ');
          
        DB::unprepared('
           CREATE TRIGGER `insert_hpp_masuk_pembelian` AFTER INSERT ON `detail_pembelian` FOR EACH ROW
           
           BEGIN

           declare total_sub int;
           declare harga_barang float;
           declare sisa_harga int;
           declare harga_produk int;
           
           SET harga_barang = (new.subtotal - new.tax) / new.jumlah_barang;
           SET total_sub = harga_barang * new.jumlah_barang;
           SET harga_produk = (new.subtotal - new.tax) / new.jumlah_barang;
           SET sisa_harga = total_sub - (harga_produk * new.jumlah_barang);
           
           
           INSERT INTO hpp_masuk (no_faktur,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,sisa_harga,total_nilai,sisa,tanggal,jam,waktu) VALUES(new.no_faktur,new.kode_barang,"Pembelian",new.jumlah_barang,harga_barang,sisa_harga,total_sub,new.sisa,new.tanggal,new.jam,new.waktu);
           END
        ');
           
        DB::unprepared('
    
           CREATE TRIGGER `insert_hpp_masuk_stok_awal` AFTER INSERT ON `stok_awal` FOR EACH ROW
           
        BEGIN       
           declare jumlah_r int;
           
           set jumlah_r = new.jumlah_awal;
           
           
           INSERT INTO hpp_masuk (no_faktur,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa) VALUES (new.no_faktur,new.kode_barang,"Stok Awal",jumlah_r,new.harga,new.total,new.tanggal,new.jam,jumlah_r);
           
           UPDATE barang SET stok_awal = "ada" WHERE kode_barang = new.kode_barang;
           
           END
           
        ');
         
        DB::unprepared('  
           CREATE TRIGGER `insert_hpp_penjualan` AFTER INSERT ON `detail_penjualan` FOR EACH ROW
           BEGIN
           declare jumlah_r int;
           declare harga int;
           declare subtotal int;
           
           declare jumlah_hpp_masuk int;
           declare id_hpp_masuk int;
           declare no_faktur_hpp_masukk varchar(100);
           declare tipe_barang varchar(100);
           declare sisa_harga_hppmasuk int;
           
           SET tipe_barang = (SELECT berkaitan_dgn_stok FROM barang WHERE kode_barang = new.kode_barang);
           
           set jumlah_r = new.jumlah_barang;
           
           if (tipe_barang = "Barang") then
           
           while jumlah_r > 0 do 
           
           SET jumlah_hpp_masuk = (SELECT sisa FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
           
           SET id_hpp_masuk = (SELECT id FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
           
           SET no_faktur_hpp_masukk = (SELECT no_faktur FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
           
           SET harga = (SELECT harga_unit FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
           
           SET sisa_harga_hppmasuk = (SELECT sisa_harga FROM hpp_masuk WHERE no_faktur = no_faktur_hpp_masukk AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1); 
           
           set subtotal = jumlah_r * harga; 
           
           
           if(jumlah_r = jumlah_hpp_masuk) then
           
           set subtotal = (jumlah_r * harga) + sisa_harga_hppmasuk; 
           
           
           INSERT INTO hpp_keluar   (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Penjualan",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
           
           UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk;
           
           set jumlah_r = 0;
           
           ELSEIF (jumlah_r > jumlah_hpp_masuk) then
           
           INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Penjualan",jumlah_hpp_masuk,harga,subtotal,new.tanggal,new.jam,jumlah_hpp_masuk);
           
           UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk ;
           
           set jumlah_r = jumlah_r - jumlah_hpp_masuk;
           
           ELSEIF (jumlah_r < jumlah_hpp_masuk) then
           
           INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Penjualan",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
           
           UPDATE hpp_masuk SET sisa = sisa - jumlah_r WHERE id = id_hpp_masuk ;
           
           set jumlah_r = 0;
           
           end if;
           
           end while;
           
           end if;
           
           END
           
        ');

        DB::unprepared('
           
           CREATE TRIGGER `insert_hpp_retur_pembelian` AFTER INSERT ON `detail_retur_pembelian` FOR EACH ROW
           
           BEGIN
           
           declare jumlah_r int;
           declare harga int;
           declare subtotal int;
           declare sisa_hpp int;
           declare nomor_hpp_masuk varchar(100);
           declare sisa_harga_hppmasuk int;
           
           set jumlah_r = new.jumlah_retur;
           
           SET harga = (SELECT harga_unit FROM hpp_masuk WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1);
           
           SET sisa_hpp = (SELECT sisa FROM hpp_masuk WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1);
           
           SET sisa_harga_hppmasuk = (SELECT sisa_harga FROM hpp_masuk WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1); 
           
           set subtotal = harga * jumlah_r ;
           
           
           
           if(sisa_hpp = 0) then
           SET nomor_hpp_masuk = (SELECT no_faktur FROM hpp_masuk WHERE no_faktur_hpp_masuk = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1);
           
           
           UPDATE hpp_masuk SET sisa = sisa - jumlah_r WHERE no_faktur_hpp_masuk = new.no_faktur_pembelian AND kode_barang = new.kode_barang;
           
           
           
           ELSEIF (sisa_hpp > 0) then
           
           SET nomor_hpp_masuk = (SELECT no_faktur FROM hpp_masuk WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1);
           
           UPDATE hpp_masuk SET sisa = sisa - jumlah_r WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang;
           
           
           end if;
           
           
           SET sisa_hpp = (SELECT sisa FROM hpp_masuk WHERE no_faktur = new.no_faktur_pembelian AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1);
           
           
           if sisa_hpp = 0 then
           
           set subtotal = (harga * jumlah_r) + sisa_harga_hppmasuk ;
           
           else
           
           set subtotal = harga * jumlah_r;
           
           end if;
           
           INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur_retur,nomor_hpp_masuk,new.kode_barang,"Retur Pembelian",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
           
           END
           
           

          ');
           
          DB::unprepared(' 
           CREATE TRIGGER `insert_hpp_retur_penjualan` AFTER INSERT ON `detail_retur_penjualan` FOR EACH ROW
           BEGIN
           
           declare jumlah_r int;
           declare harga int;
           declare subtotal int;
           declare id_hpp int;
           declare jumlah_hpp int;
           declare nomor_hpp_masuk varchar(100);
           declare sisa_hpp int;
           
           SET sisa_hpp = (SELECT COUNT(*) FROM hpp_masuk WHERE kode_barang = new.kode_barang AND no_faktur = new.no_faktur_retur AND sisa != jumlah_kuantitas);
           
           set jumlah_r = new.jumlah_retur;
           
           if (sisa_hpp = 0) then
           
           while jumlah_r > 0 do
           
           
           SET nomor_hpp_masuk = (SELECT no_faktur_hpp_masuk FROM hpp_keluar WHERE no_faktur = new.no_faktur_penjualan AND kode_barang = new.kode_barang AND sisa_barang != 0 ORDER BY id ASC LIMIT 1);
           
           
           SET id_hpp = (SELECT id FROM hpp_keluar WHERE no_faktur = new.no_faktur_penjualan AND kode_barang = new.kode_barang AND sisa_barang != 0  ORDER BY id ASC LIMIT 1);
           
           SET jumlah_hpp = (SELECT sisa_barang FROM hpp_keluar WHERE kode_barang = new.kode_barang AND sisa_barang != 0 AND no_faktur = new.no_faktur_penjualan ORDER BY id ASC LIMIT 1);
           
           SET harga = (SELECT harga_unit FROM hpp_keluar WHERE no_faktur = new.no_faktur_penjualan AND kode_barang = new.kode_barang AND sisa_barang != 0 ORDER BY id ASC LIMIT 1);
           
           
           set subtotal = harga * jumlah_r;
           
           
           
           if(jumlah_r = jumlah_hpp) then
           
           
           INSERT INTO hpp_masuk (no_faktur,no_faktur_hpp_keluar, no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa) VALUES (new.no_faktur_retur,new.no_faktur_penjualan,nomor_hpp_masuk,new.kode_barang,"Retur Penjualan",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
           
           UPDATE hpp_keluar SET sisa_barang = 0 WHERE id = id_hpp;
           set jumlah_r = 0;
           
           
           ELSEIF (jumlah_r > jumlah_hpp) then
           
           
           INSERT INTO hpp_masuk (no_faktur,no_faktur_hpp_keluar,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa) VALUES (new.no_faktur_retur,new.no_faktur_penjualan,nomor_hpp_masuk,new.kode_barang,"Retur Penjualan",jumlah_hpp,harga,subtotal,new.tanggal,new.jam,jumlah_hpp);
           
           
           UPDATE hpp_keluar SET sisa_barang = 0 WHERE id = id_hpp ;
           
           
           
           set jumlah_r = jumlah_r - jumlah_hpp;
           
           
           
           ELSEIF (jumlah_r < jumlah_hpp) then
           
           
           
           INSERT INTO hpp_masuk (no_faktur,no_faktur_hpp_keluar,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa) VALUES (new.no_faktur_retur,new.no_faktur_penjualan,nomor_hpp_masuk,new.kode_barang,"Retur Penjualan",jumlah_r,harga,subtotal,new.tanggal,new.jam,jumlah_r);
           
           UPDATE hpp_keluar SET sisa_barang = sisa_barang - jumlah_r WHERE id = id_hpp;
           
           
           set jumlah_r = 0;
           
           
           end if;  
           
           end while;
           
           end if;
           
           END
           
         ');

        DB::unprepared('           
           CREATE TRIGGER `insert_hpp_stok_opname` AFTER INSERT ON `detail_stok_opname` FOR EACH ROW
               
               BEGIN
                   declare selisih_fisik int;
                   declare jumlah_hpp_masuk int;
                   declare id_hpp_masuk int;
                   declare no_faktur_hpp_masukk varchar(100);
                   declare jumlah_masuk int;
                   declare harga_hpp_masuk int;
                   declare subtotal_masuk int;
                   declare subtotal_hpp_keluar int;
                   declare sisa_harga_hppmasuk int;
                   declare sisa_hpp int;
                   declare jumlah_hpp int;
                   declare sisa_sebenarnya int;
                   
                   
                   SET sisa_hpp = (SELECT COUNT(*) FROM hpp_masuk WHERE kode_barang = new.kode_barang AND no_faktur = new.no_faktur); 
                   
                   SET jumlah_hpp = (SELECT jumlah_kuantitas FROM hpp_keluar WHERE kode_barang = new.kode_barang AND no_faktur_hpp_masuk = new.no_faktur); 
                   
                   
                   
                   set selisih_fisik = new.selisih_fisik;
                   
                   set subtotal_masuk = selisih_fisik * new.harga;
                   
                   set sisa_sebenarnya = selisih_fisik - jumlah_hpp;
                   
                   
                   if (selisih_fisik > 0) then
                   
                   if sisa_hpp = 0 then
                   
                   INSERT INTO hpp_masuk (no_faktur,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,sisa,tanggal,jam) VALUES(new.no_faktur,new.kode_barang,"Stok Opname",selisih_fisik,new.harga,subtotal_masuk,selisih_fisik,new.tanggal,new.jam);
                   
                   end if;
                   
                   
                   ELSEIF (selisih_fisik < 0) then 
                   
                   set selisih_fisik = selisih_fisik * -1;
                   
                   while selisih_fisik > 0 do 
                   
                   SET jumlah_hpp_masuk = (SELECT sisa FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   SET id_hpp_masuk = (SELECT id FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   SET no_faktur_hpp_masukk = (SELECT no_faktur FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   SET harga_hpp_masuk = (SELECT harga_unit FROM hpp_masuk WHERE kode_barang = new.kode_barang AND sisa != 0 ORDER BY id ASC LIMIT 1);
                   
                   SET sisa_harga_hppmasuk = (SELECT sisa_harga FROM hpp_masuk WHERE no_faktur = no_faktur_hpp_masukk AND kode_barang = new.kode_barang  ORDER BY id ASC LIMIT 1); 
                   
                   set subtotal_hpp_keluar = harga_hpp_masuk * selisih_fisik;
                   
                   
                   if(selisih_fisik = jumlah_hpp_masuk) then
                   set subtotal_hpp_keluar = (harga_hpp_masuk * selisih_fisik) + sisa_harga_hppmasuk;
                   
                   
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Stok Opname",selisih_fisik,harga_hpp_masuk,subtotal_hpp_keluar,new.tanggal,new.jam,selisih_fisik);
                   
                   UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk;
                   
                   
                   set selisih_fisik = 0;
                   
                   
                   ELSEIF (selisih_fisik > jumlah_hpp_masuk) then
                   
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Stok Opname",jumlah_hpp_masuk,harga_hpp_masuk,subtotal_hpp_keluar,new.tanggal,new.jam,jumlah_hpp_masuk);
                   UPDATE hpp_masuk SET sisa = 0 WHERE id = id_hpp_masuk ;
                   
                   set selisih_fisik = selisih_fisik - jumlah_hpp_masuk;
                   
                   
                   ELSEIF (selisih_fisik < jumlah_hpp_masuk) then
                   INSERT INTO hpp_keluar (no_faktur,no_faktur_hpp_masuk,kode_barang,jenis_transaksi,jumlah_kuantitas,harga_unit,total_nilai,tanggal,jam,sisa_barang) VALUES (new.no_faktur,no_faktur_hpp_masukk,new.kode_barang,"Stok Opname",selisih_fisik,harga_hpp_masuk,subtotal_hpp_keluar,new.tanggal,new.jam,selisih_fisik);
                   UPDATE hpp_masuk SET sisa = sisa - selisih_fisik WHERE id = id_hpp_masuk ;
                   
                   set selisih_fisik = 0;
                   
                   end if;
                   
                   end while;
                   
                   
                   end if;
               
               END
               
          ');

          DB::unprepared('
           
           CREATE TRIGGER `insert_otoritas` AFTER INSERT ON `hak_otoritas` FOR EACH ROW
           
           BEGIN
           INSERT INTO otoritas_item_keluar (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_item_masuk (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_kas (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_kas_masuk (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_kas_keluar (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_kas_mutasi (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_laporan (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_master_data (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_pembayaran (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_pembelian (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_penjualan (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_stok_awal (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_stok_opname (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_persediaan (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_transaksi_kas (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_registrasi (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_rekam_medik (id_otoritas) VALUES (new.id);
           INSERT INTO otoritas_setting (id_otoritas) VALUES (new.id);
           
           
           END

        ');

        DB::unprepared('           
           CREATE TRIGGER `update_hpp_masuk` AFTER DELETE ON `hpp_keluar` FOR EACH ROW
           
           
           
           UPDATE hpp_masuk SET sisa = sisa + old.jumlah_kuantitas WHERE no_faktur = old.no_faktur_hpp_masuk AND kode_barang = old.kode_barang;
           
           
           
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `update_hutang_pembelian` AFTER DELETE ON `detail_pembayaran_hutang` FOR EACH ROW
           
           
           
           UPDATE pembelian SET kredit = kredit + old.potongan + old.jumlah_bayar WHERE no_faktur = old.no_faktur_pembelian;
           
           UPDATE pembelian SET status = "Lunas" WHERE kredit = 0 AND no_faktur = old.no_faktur_pembelian;
           
           
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `update_jurnal` AFTER UPDATE ON `stok_awal` FOR EACH ROW
           
           
           UPDATE jurnal_trans SET kredit = kredit - old.total + new.total  WHERE no_faktur = new.no_faktur AND debit = 0;
           
           UPDATE jurnal_trans SET debit = debit - old.total + new.total  WHERE no_faktur = new.no_faktur AND kredit = 0;
           
           UPDATE hpp_masuk SET jumlah_kuantitas = new.jumlah_awal , sisa = new.jumlah_awal ,total_nilai = new.total WHERE no_faktur = new.no_faktur AND kode_barang = new.kode_barang;
           
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `update_pembelian_hutang_insert` AFTER INSERT ON `detail_pembayaran_hutang` FOR EACH ROW
           
           
           UPDATE pembelian SET kredit = kredit - new.jumlah_bayar - new.potongan WHERE no_faktur = new.no_faktur_pembelian;
           
           UPDATE pembelian SET status = "Lunas" WHERE kredit = 0 AND no_faktur = new.no_faktur_pembelian;
           
           UPDATE pembelian SET status = "Hutang" WHERE kredit > 0 AND no_faktur = new.no_faktur_pembelian;
           
           
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `update_penjualan_piutang` AFTER DELETE ON `detail_pembayaran_piutang` FOR EACH ROW
           
           
           
           UPDATE penjualan SET kredit = kredit + old.potongan + old.jumlah_bayar WHERE no_faktur = old.no_faktur_penjualan;
           
           UPDATE penjualan SET status = "Lunas" WHERE kredit = 0 AND no_faktur = old.no_faktur_penjualan;
           
           
        ');
         
         DB::unprepared('  
           CREATE TRIGGER `update_penjualan_piutang_insert` AFTER INSERT ON `detail_pembayaran_piutang` FOR EACH ROW
           
           
           UPDATE penjualan SET kredit = kredit - new.jumlah_bayar - new.potongan WHERE no_faktur = new.no_faktur_penjualan;
           
           UPDATE penjualan SET status = "Lunas" WHERE kredit = 0 AND no_faktur = new.no_faktur_penjualan;
           
           UPDATE penjualan SET status = "Piutang" WHERE kredit > 0 AND no_faktur = new.no_faktur_penjualan;
           
           
        ');



    }

    public function down()
    {
        DB::unprepared('DROP TRIGGER `delete_tbs_retur_jual`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_pembayaran_hutang`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_item_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_kas_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_kas_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_penjualan`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_retur_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_retur_penjualan`');
        DB::unprepared('DROP TRIGGER `hapus_data_detail_stok_opname`');
        DB::unprepared('DROP TRIGGER `hapus_data_item_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_data_item_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_data_kas_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_data_kas_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_data_kas_mutasi`');
        DB::unprepared('DROP TRIGGER `hapus_data_pembayaran_hutang`');
        DB::unprepared('DROP TRIGGER `hapus_data_pembayaran_piutang`');
        DB::unprepared('DROP TRIGGER `hapus_data_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_data_penjualan`');
        DB::unprepared('DROP TRIGGER `hapus_data_retur_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_data_retur_penjualan`');
        DB::unprepared('DROP TRIGGER `hapus_data_stok_awal`');
        DB::unprepared('DROP TRIGGER `hapus_data_stok_opname`');
        DB::unprepared('DROP TRIGGER `hapus_detail_item_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_detail_pembayaran_piutang`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_jurnal_stok_opname`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_masuk_detail_item_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_masuk_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_masuk_stok_awal`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_retur_pembelian`');
        DB::unprepared('DROP TRIGGER `hapus_hpp_retur_penjualan`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_kas_keluar`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_kas_masuk`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_kas_mutasi`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_pembayaran_piutang`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_trans`');
        DB::unprepared('DROP TRIGGER `hapus_jurnal_transaksi`');
        DB::unprepared('DROP TRIGGER `hapus_otoritas`');
        DB::unprepared('DROP TRIGGER `hapus_tbs_retur_pembelian`');
        DB::unprepared('DROP TRIGGER `hpp_item_keluar`');
        DB::unprepared('DROP TRIGGER `insert_hpp_masuk_detail_item_masuk`');
        DB::unprepared('DROP TRIGGER `insert_hpp_masuk_pembelian`');
        DB::unprepared('DROP TRIGGER `insert_hpp_masuk_stok_awal`');
        DB::unprepared('DROP TRIGGER `insert_hpp_penjualan`');
        DB::unprepared('DROP TRIGGER `insert_hpp_retur_pembelian`');
        DB::unprepared('DROP TRIGGER `insert_hpp_retur_penjualan`');
        DB::unprepared('DROP TRIGGER `insert_hpp_stok_opname`');
        DB::unprepared('DROP TRIGGER `insert_otoritas`');
        DB::unprepared('DROP TRIGGER `update_hpp_masuk`');
        DB::unprepared('DROP TRIGGER `update_hutang_pembelian`');
        DB::unprepared('DROP TRIGGER `update_jurnal`');
        DB::unprepared('DROP TRIGGER `update_pembelian_hutang_insert`');
        DB::unprepared('DROP TRIGGER `update_penjualan_piutang`');
        DB::unprepared('DROP TRIGGER `update_penjualan_piutang_insert`');
    }
}