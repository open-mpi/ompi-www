<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 14 14:06:30 2014" -->
<!-- isoreceived="20141214190630" -->
<!-- sent="Sun, 14 Dec 2014 14:06:27 -0500" -->
<!-- isosent="20141214190627" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close" -->
<!-- id="548DDFB3.5080905_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C4B50C63-0F08-480F-976A-B791C882D590_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-14 14:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25982.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Maybe reply:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I finally (thanks for fixing oversubscribing) tested with 1.8.4rc3 for 
<br>
my problem with collective MPI I/O.
<br>
<p>A problem still there.  In this 2 processes example, process rank 1 dies 
<br>
with segfault while process rank 0 wait indefinitely...
<br>
<p>Running with valgrind, I found these errors which may gives hints:
<br>
<p>*************************************************
<br>
Rank 1:
<br>
*************************************************
<br>
On process rank 1, without valgrind it ends with either a segmentation 
<br>
violation or memory corruption or invalide free without valgrind).
<br>
<p>But running with valgrind, it tells:
<br>
<p>==16715== Invalid write of size 2
<br>
==16715==    at 0x4C2E793: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
<br>
==16715==    by 0x1F60AA91: opal_convertor_unpack (opal_convertor.c:321)
<br>
==16715==    by 0x25AA8DD3: mca_pml_ob1_recv_frag_callback_match 
<br>
(pml_ob1_recvfrag.c:225)
<br>
==16715==    by 0x2544110C: mca_btl_vader_check_fboxes 
<br>
(btl_vader_fbox.h:220)
<br>
==16715==    by 0x25443577: mca_btl_vader_component_progress 
<br>
(btl_vader_component.c:695)
<br>
==16715==    by 0x1F5F0F27: opal_progress (opal_progress.c:207)
<br>
==16715==    by 0x1ACB40B3: opal_condition_wait (condition.h:93)
<br>
==16715==    by 0x1ACB4201: ompi_request_wait_completion (request.h:381)
<br>
==16715==    by 0x1ACB4305: ompi_request_default_wait (req_wait.c:39)
<br>
==16715==    by 0x26BA2FFB: ompi_coll_tuned_bcast_intra_generic 
<br>
(coll_tuned_bcast.c:254)
<br>
==16715==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial 
<br>
(coll_tuned_bcast.c:385)
<br>
==16715==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed 
<br>
(coll_tuned_decision_fixed.c:258)
<br>
==16715==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
<br>
==16715==    by 0x2FE1CC48: ADIOI_Shfp_fname (shfp_fname.c:67)
<br>
==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16715==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16715==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16715==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16715==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16715==  Address 0x32ef3e50 is 0 bytes after a block of size 256 alloc'd
<br>
==16715==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16715==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16715==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16715==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16715==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16715==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16715==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
...
<br>
...
<br>
==16715== Invalid write of size 1
<br>
==16715==    at 0x4C2E7BB: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
<br>
==16715==    by 0x1F60AA91: opal_convertor_unpack (opal_convertor.c:321)
<br>
==16715==    by 0x25AA8DD3: mca_pml_ob1_recv_frag_callback_match 
<br>
(pml_ob1_recvfrag.c:225)
<br>
==16715==    by 0x2544110C: mca_btl_vader_check_fboxes 
<br>
(btl_vader_fbox.h:220)
<br>
==16715==    by 0x25443577: mca_btl_vader_component_progress 
<br>
(btl_vader_component.c:695)
<br>
==16715==    by 0x1F5F0F27: opal_progress (opal_progress.c:207)
<br>
==16715==    by 0x1ACB40B3: opal_condition_wait (condition.h:93)
<br>
==16715==    by 0x1ACB4201: ompi_request_wait_completion (request.h:381)
<br>
==16715==    by 0x1ACB4305: ompi_request_default_wait (req_wait.c:39)
<br>
==16715==    by 0x26BA2FFB: ompi_coll_tuned_bcast_intra_generic 
<br>
(coll_tuned_bcast.c:254)
<br>
==16715==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial 
<br>
(coll_tuned_bcast.c:385)
<br>
==16715==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed 
<br>
(coll_tuned_decision_fixed.c:258)
<br>
==16715==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
<br>
==16715==    by 0x2FE1CC48: ADIOI_Shfp_fname (shfp_fname.c:67)
<br>
==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16715==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16715==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16715==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16715==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16715==  Address 0x32ef3e60 is 16 bytes after a block of size 256 alloc'd
<br>
==16715==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16715==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16715==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16715==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16715==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16715==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16715==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16715==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16715==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16715==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16715==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16715==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16715==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16715==
<br>
<p>*************************************************
<br>
Rank 0:
<br>
*************************************************
<br>
<p>==16714== Invalid read of size 1
<br>
==16714==    at 0x4C2CA74: __strrchr_sse42 (vg_replace_strmem.c:194)
<br>
==16714==    by 0x2FE1CAB7: ADIOI_Shfp_fname (shfp_fname.c:51)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==  Address 0x219377d0 is 0 bytes after a block of size 256 alloc'd
<br>
==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==
<br>
...
<br>
==16714== Invalid read of size 1
<br>
==16714==    at 0x4C2D034: strlen (vg_replace_strmem.c:412)
<br>
==16714==    by 0x2FE1CB81: ADIOI_Shfp_fname (shfp_fname.c:61)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==  Address 0x219377d0 is 0 bytes after a block of size 256 alloc'd
<br>
==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
...
<br>
==16714== Invalid read of size 2
<br>
==16714==    at 0x4C2E79E: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
<br>
==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
<br>
==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
<br>
==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare 
<br>
(pml_ob1_sendreq.c:620)
<br>
==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl 
<br>
(pml_ob1_sendreq.h:397)
<br>
==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq 
<br>
(pml_ob1_sendreq.h:460)
<br>
==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
<br>
==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic 
<br>
(coll_tuned_bcast.c:112)
<br>
==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial 
<br>
(coll_tuned_bcast.c:385)
<br>
==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed 
<br>
(coll_tuned_decision_fixed.c:258)
<br>
==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
<br>
==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==  Address 0x219377d0 is 0 bytes after a block of size 256 alloc'd
<br>
==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
...
<br>
==16714== Invalid read of size 2
<br>
==16714==    at 0x4C2E790: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
<br>
==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
<br>
==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
<br>
==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare 
<br>
(pml_ob1_sendreq.c:620)
<br>
==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl 
<br>
(pml_ob1_sendreq.h:397)
<br>
==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq 
<br>
(pml_ob1_sendreq.h:460)
<br>
==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
<br>
==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic 
<br>
(coll_tuned_bcast.c:112)
<br>
==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial 
<br>
(coll_tuned_bcast.c:385)
<br>
==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed 
<br>
(coll_tuned_decision_fixed.c:258)
<br>
==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
<br>
==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==  Address 0x219377d2 is 2 bytes after a block of size 256 alloc'd
<br>
==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
...
<br>
==16714== Invalid read of size 1
<br>
==16714==    at 0x4C2E7B8: memcpy@@GLIBC_2.14 (vg_replace_strmem.c:915)
<br>
==16714==    by 0x2543FADC: vader_prepare_src (btl_vader_module.c:590)
<br>
==16714==    by 0x25AB17AA: mca_bml_base_prepare_src (bml.h:341)
<br>
==16714==    by 0x25AB4207: mca_pml_ob1_send_request_start_prepare 
<br>
(pml_ob1_sendreq.c:620)
<br>
==16714==    by 0x25AA3519: mca_pml_ob1_send_request_start_btl 
<br>
(pml_ob1_sendreq.h:397)
<br>
==16714==    by 0x25AA3766: mca_pml_ob1_send_request_start_seq 
<br>
(pml_ob1_sendreq.h:460)
<br>
==16714==    by 0x25AA41E1: mca_pml_ob1_isend (pml_ob1_isend.c:171)
<br>
==16714==    by 0x26BA2AF5: ompi_coll_tuned_bcast_intra_generic 
<br>
(coll_tuned_bcast.c:112)
<br>
==16714==    by 0x26BA36F7: ompi_coll_tuned_bcast_intra_binomial 
<br>
(coll_tuned_bcast.c:385)
<br>
==16714==    by 0x26B94289: ompi_coll_tuned_bcast_intra_dec_fixed 
<br>
(coll_tuned_decision_fixed.c:258)
<br>
==16714==    by 0x1ACD55F2: PMPI_Bcast (pbcast.c:110)
<br>
==16714==    by 0x2FE1CBE5: ADIOI_Shfp_fname (shfp_fname.c:63)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
==16714==  Address 0x219377e0 is 16 bytes after a block of size 256 alloc'd
<br>
==16714==    at 0x4C2C5A4: malloc (vg_replace_malloc.c:296)
<br>
==16714==    by 0x2FE1C78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==16714==    by 0x2FE1C951: ADIOI_Shfp_fname (shfp_fname.c:25)
<br>
==16714==    by 0x2FDEB493: mca_io_romio_dist_MPI_File_open (open.c:177)
<br>
==16714==    by 0x2FDE3B0D: mca_io_romio_file_open (io_romio_file_open.c:40)
<br>
==16714==    by 0x1AD52344: module_init (io_base_file_select.c:455)
<br>
==16714==    by 0x1AD51DFA: mca_io_base_file_select 
<br>
(io_base_file_select.c:238)
<br>
==16714==    by 0x1ACA582F: ompi_file_open (file.c:130)
<br>
==16714==    by 0x1AD30DA3: PMPI_File_open (pfile_open.c:94)
<br>
==16714==    by 0x13F9B36F: PAIO::ouvreFichierMPIIO(PAGroupeProcessus&amp;, 
<br>
std::string const&amp;, int, ompi_file_t*&amp;, bool) (PAIO.cc:290)
<br>
==16714==    by 0xCA44252: 
<br>
GISLectureEcriture&lt;double&gt;::litGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt;&amp;, std::string&amp;) (GISLectureEcriture.icc:411)
<br>
==16714==    by 0xCA23F0D: Champ::importeParallele(std::string const&amp;) 
<br>
(Champ.cc:951)
<br>
==16714==    by 0x4D0DEE: main (Test.NormesEtProjectionChamp.cc:789)
<br>
...
<br>
<p><p>I have to precise that with MPICH 3.1.3, I can't reproduce the same bad 
<br>
behavior.
<br>
<p>Also, the segfault is not always there: running the same code with other 
<br>
inputs, gave me trouble-free results with or without valgrind.  I 
<br>
noticed the problem appears mors frequently with longer &quot;paths&quot;.
<br>
<p>Please, help!
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>ompi_info -all : 
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>
<br>
config.log: <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Previous message:</strong> <a href="25982.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/11/25867.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.6.5 &amp; 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25984.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Reply:</strong> <a href="25986.php">Eric Chamberland: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<li><strong>Maybe reply:</strong> <a href="26005.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI 1.8.4rc3, 1.6.5 and 1.6.3: segmentation violation in mca_io_romio_dist_MPI_File_close"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
