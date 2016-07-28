<?
$subject_val = "[OMPI devel] BUG in ADIOI_NFS_WriteStrided";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 15:34:04 2014" -->
<!-- isoreceived="20141219203404" -->
<!-- sent="Fri, 19 Dec 2014 15:33:55 -0500" -->
<!-- isosent="20141219203355" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] BUG in ADIOI_NFS_WriteStrided" -->
<!-- id="54948BB3.8060501_at_giref.ulaval.ca" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAF1Cqj7WB4OOyP4j9iWhQ1Ro5FofkiZmT4WB6-aLZ4p_HsG96w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-19 15:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Howard,
<br>
<p>the bug is present also with MPICH-3.1.3...
<br>
<p>So, for discuss_at_[hidden] list readers, here is the valgrind output for 
<br>
a bug revealed with valgrind (sorry, I didn't compiled MPICH in debug 
<br>
mode),  reported to OpenMPI earlier today: 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16691.php">http://www.open-mpi.org/community/lists/devel/2014/12/16691.php</a>
<br>
<p>sorry for the &quot;duplicated&quot; report again.
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
<p>==3434== Syscall param write(buf) points to uninitialised byte(s)
<br>
==3434==    at 0x108D0380: __write_nocancel (in /lib64/libpthread-2.17.so)
<br>
==3434==    by 0x11DB9D46: ADIOI_NFS_WriteStrided (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long, 
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
==3434==    by 0x4DDBFE: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x4BCB22: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x48E213: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==  Address 0x1a12cd10 is 224 bytes inside a block of size 524,448 
<br>
alloc'd
<br>
==3434==    at 0x4C2C27B: malloc (in 
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==3434==    by 0x11DADA96: MPL_trmalloc (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DD9285: ADIOI_Malloc_fn (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB9AC8: ADIOI_NFS_WriteStrided (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long, 
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
==3434==    by 0x4DDBFE: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x4BCB22: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x48E213: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==  Uninitialised value was created by a client request
<br>
==3434==    at 0x11DADEE5: MPL_trmalloc (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DD9285: ADIOI_Malloc_fn (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB9AC8: ADIOI_NFS_WriteStrided (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in 
<br>
/opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
<br>
==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt; 
<br>
PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, 
<br>
Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;, 
<br>
std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double, 
<br>
Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete, 
<br>
Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long, 
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
==3434==    by 0x4DDBFE: 
<br>
GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x4BCB22: 
<br>
GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string, 
<br>
GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
<br>
==3434==    by 0x48E213: main (in 
<br>
/home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
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
<p>Have you guys thinked about unifying this part of code?  Making it a 
<br>
sub-library? (please don't flame me... ;-) )
<br>
<p>Anyway,
<br>
<p>thanks,
<br>
<p>Eric
<br>
<p><p>On 12/19/2014 02:16 PM, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; HI Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does your app also work with MPICH?  The romio in Open MPI is getting a
</span><br>
<span class="quotelev1">&gt; bit old, so it would be useful to know if you see the same valgrind
</span><br>
<span class="quotelev1">&gt; error using a recent MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-12-19 9:50 GMT-07:00 Eric Chamberland
</span><br>
<span class="quotelev1">&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I encountered a new bug while testing our collective MPI I/O
</span><br>
<span class="quotelev1">&gt;     functionnalities over NFS.  This is not a big issue for us, but I
</span><br>
<span class="quotelev1">&gt;     think someone should have a look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     While running at 3 processes, we have this error on rank #0 and rank
</span><br>
<span class="quotelev1">&gt;     #2, knowing that rank #1 have nothing to write (0 length size) on
</span><br>
<span class="quotelev1">&gt;     this particular PMPI_File_write_all_begin call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ==19211== Syscall param write(buf) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt;     ==19211==    at 0x10CB739D: ??? (in /lib64/libpthread-2.17.so
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://libpthread-2.17.so">http://libpthread-2.17.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27438431: ADIOI_NFS_WriteStrided (ad_nfs_write.c:645)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev1">&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev1">&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev1">&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev1">&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==  Address 0x295af060 is 144 bytes inside a block of size
</span><br>
<span class="quotelev1">&gt;     524,288 alloc'd
</span><br>
<span class="quotelev1">&gt;     ==19211==    at 0x4C2C27B: malloc (in
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/valgrind/vgpreload___memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev1">&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev1">&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev1">&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev1">&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==  Uninitialised value was created by a heap allocation
</span><br>
<span class="quotelev1">&gt;     ==19211==    at 0x4C2C27B: malloc (in
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/valgrind/vgpreload___memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev1">&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev1">&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev1">&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev1">&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev1">&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev1">&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev1">&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev1">&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev1">&gt;     ==19211==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can't tell if it is a big issue or not, but I thought I should
</span><br>
<span class="quotelev1">&gt;     mention it to the list....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We run without this valgrind  error when I use my local disk
</span><br>
<span class="quotelev1">&gt;     partition instead of an nfs parition or if I run with only 1
</span><br>
<span class="quotelev1">&gt;     process  (which always have something to write for each
</span><br>
<span class="quotelev1">&gt;     PMPI_File_write_all_begin) and write to an nfs partition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Using openmpi-1.8.4rc3 compiled in &quot;debug&quot; mode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ompi_info -all :
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.giref.ulaval.ca/~__ericc/ompi_bug/ompi_info.all.__184rc3.txt.gz">http://www.giref.ulaval.ca/~__ericc/ompi_bug/ompi_info.all.__184rc3.txt.gz</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;     config.log:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.giref.ulaval.ca/~__ericc/ompi_bug/config.184rc3.__log.gz">http://www.giref.ulaval.ca/~__ericc/ompi_bug/config.184rc3.__log.gz</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eric
</span><br>
<span class="quotelev1">&gt;     _________________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16691.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16691.php</a>
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16691.php">http://www.open-mpi.org/community/lists/devel/2014/12/16691.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
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
