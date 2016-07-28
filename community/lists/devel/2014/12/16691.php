<?
$subject_val = "[OMPI devel] BUG in ADIOI_NFS_WriteStrided";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 11:50:55 2014" -->
<!-- isoreceived="20141219165055" -->
<!-- sent="Fri, 19 Dec 2014 11:50:45 -0500" -->
<!-- isosent="20141219165045" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] BUG in ADIOI_NFS_WriteStrided" -->
<!-- id="54945765.2080708_at_giref.ulaval.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] BUG in ADIOI_NFS_WriteStrided<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 11:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16690.php">Dave Goodell (dgoodell): "[OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I encountered a new bug while testing our collective MPI I/O 
<br>
functionnalities over NFS.  This is not a big issue for us, but I think 
<br>
someone should have a look at it.
<br>
<p>While running at 3 processes, we have this error on rank #0 and rank #2, 
<br>
knowing that rank #1 have nothing to write (0 length size) on this 
<br>
particular PMPI_File_write_all_begin call:
<br>
<p><p>==19211== Syscall param write(buf) points to uninitialised byte(s)
<br>
==19211==    at 0x10CB739D: ??? (in /lib64/libpthread-2.17.so)
<br>
==19211==    by 0x27438431: ADIOI_NFS_WriteStrided (ad_nfs_write.c:645)
<br>
==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl (ad_write_coll.c:159)
<br>
==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
<br>
==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin 
<br>
(write_allb.c:44)
<br>
==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin 
<br>
(io_romio_file_write.c:264)
<br>
==19211==    by 0x12126520: PMPI_File_write_all_begin 
<br>
(pfile_write_all_begin.c:74)
<br>
==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long, 
<br>
PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;, 
<br>
FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned 
<br>
long, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4E9A67: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4C79A2: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4961AD: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==  Address 0x295af060 is 144 bytes inside a block of size 
<br>
524,288 alloc'd
<br>
==19211==    at 0x4C2C27B: malloc (in 
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
<br>
==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl (ad_write_coll.c:159)
<br>
==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
<br>
==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin 
<br>
(write_allb.c:44)
<br>
==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin 
<br>
(io_romio_file_write.c:264)
<br>
==19211==    by 0x12126520: PMPI_File_write_all_begin 
<br>
(pfile_write_all_begin.c:74)
<br>
==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long, 
<br>
PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;, 
<br>
FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned 
<br>
long, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4E9A67: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4C79A2: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4961AD: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==  Uninitialised value was created by a heap allocation
<br>
==19211==    at 0x4C2C27B: malloc (in 
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
<br>
==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
<br>
==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl (ad_write_coll.c:159)
<br>
==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
<br>
==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin 
<br>
(write_allb.c:44)
<br>
==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin 
<br>
(io_romio_file_write.c:264)
<br>
==19211==    by 0x12126520: PMPI_File_write_all_begin 
<br>
(pfile_write_all_begin.c:74)
<br>
==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long, 
<br>
PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;, 
<br>
FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned 
<br>
long, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4E9A67: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4C79A2: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==    by 0x4961AD: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==19211==
<br>
<p>Can't tell if it is a big issue or not, but I thought I should mention 
<br>
it to the list....
<br>
<p>We run without this valgrind  error when I use my local disk partition 
<br>
instead of an nfs parition or if I run with only 1 process  (which 
<br>
always have something to write for each PMPI_File_write_all_begin) and 
<br>
write to an nfs partition.
<br>
<p>Using openmpi-1.8.4rc3 compiled in &quot;debug&quot; mode:
<br>
<p>ompi_info -all :
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>
<br>
config.log:
<br>
<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16690.php">Dave Goodell (dgoodell): "[OMPI devel] Git security vulnerability, please upgrade Windows &amp; OS X Git clients"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
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
