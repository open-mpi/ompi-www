<?
$subject_val = "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 21:52:16 2014" -->
<!-- isoreceived="20141220025216" -->
<!-- sent="Fri, 19 Dec 2014 20:52:14 -0600" -->
<!-- isosent="20141220025214" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided" -->
<!-- id="5494E45E.2080404_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="54948BB3.8060501_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 21:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/19/2014 02:33 PM, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the bug is present also with MPICH-3.1.3...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, for discuss_at_[hidden] list readers, here is the valgrind output for
</span><br>
<span class="quotelev1">&gt; a bug revealed with valgrind (sorry, I didn't compiled MPICH in debug
</span><br>
<span class="quotelev1">&gt; mode),  reported to OpenMPI earlier today:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16691.php">http://www.open-mpi.org/community/lists/devel/2014/12/16691.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sorry for the &quot;duplicated&quot; report again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered a new bug while testing our collective MPI I/O
</span><br>
<span class="quotelev1">&gt; functionnalities over NFS.  This is not a big issue for us, but I think
</span><br>
<span class="quotelev1">&gt; someone should have a look at it.
</span><br>
<p>Please don't use NFS for MPI-IO.  ROMIO makes a best effort but there's 
<br>
no way to guarantee you won't corrupt a block of data (NFS clients are 
<br>
allowed to cache... arbitrarily, it seems).  There are so many good 
<br>
parallel file systems with saner consistency semantics .
<br>
<p>This looks like maybe a calloc would clean it right up.
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While running at 3 processes, we have this error on rank #0 and rank #2,
</span><br>
<span class="quotelev1">&gt; knowing that rank #1 have nothing to write (0 length size) on this
</span><br>
<span class="quotelev1">&gt; particular PMPI_File_write_all_begin call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==3434== Syscall param write(buf) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==3434==    at 0x108D0380: __write_nocancel (in /lib64/libpthread-2.17.so)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB9D46: ADIOI_NFS_WriteStrided (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt;
</span><br>
<span class="quotelev1">&gt; PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long,
</span><br>
<span class="quotelev1">&gt; PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned
</span><br>
<span class="quotelev1">&gt; long, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4DDBFE:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4BCB22:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x48E213: main (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==  Address 0x1a12cd10 is 224 bytes inside a block of size 524,448
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==3434==    at 0x4C2C27B: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DADA96: MPL_trmalloc (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DD9285: ADIOI_Malloc_fn (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB9AC8: ADIOI_NFS_WriteStrided (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt;
</span><br>
<span class="quotelev1">&gt; PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long,
</span><br>
<span class="quotelev1">&gt; PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned
</span><br>
<span class="quotelev1">&gt; long, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4DDBFE:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4BCB22:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x48E213: main (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==  Uninitialised value was created by a client request
</span><br>
<span class="quotelev1">&gt; ==3434==    at 0x11DADEE5: MPL_trmalloc (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DD9285: ADIOI_Malloc_fn (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB9AC8: ADIOI_NFS_WriteStrided (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DD264F: ADIOI_GEN_WriteStridedColl (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB5F8F: MPIOI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x11DB60F3: PMPI_File_write_all_begin (in
</span><br>
<span class="quotelev1">&gt; /opt/mpich-3.1.3/lib64/libmpi.so.12.0.4)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4CCAE6: SYEnveloppeMessage&lt;std::string&gt;
</span><br>
<span class="quotelev1">&gt; PAIO::ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt;, FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ADIOI_FileD*, long long,
</span><br>
<span class="quotelev1">&gt; PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;&amp;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt;&amp;, long, DistributionComposantes&amp;, long, unsigned long, unsigned
</span><br>
<span class="quotelev1">&gt; long, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4DDBFE:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x4BCB22:
</span><br>
<span class="quotelev1">&gt; GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==3434==    by 0x48E213: main (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't tell if it is a big issue or not, but I thought I should mention
</span><br>
<span class="quotelev1">&gt; it to the list....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We run without this valgrind  error when I use my local disk partition
</span><br>
<span class="quotelev1">&gt; instead of an nfs parition or if I run with only 1 process  (which
</span><br>
<span class="quotelev1">&gt; always have something to write for each PMPI_File_write_all_begin) and
</span><br>
<span class="quotelev1">&gt; write to an nfs partition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you guys thinked about unifying this part of code?  Making it a
</span><br>
<span class="quotelev1">&gt; sub-library? (please don't flame me... ;-) )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/19/2014 02:16 PM, Howard Pritchard wrote:
</span><br>
<span class="quotelev2">&gt;&gt; HI Eric,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does your app also work with MPICH?  The romio in Open MPI is getting a
</span><br>
<span class="quotelev2">&gt;&gt; bit old, so it would be useful to know if you see the same valgrind
</span><br>
<span class="quotelev2">&gt;&gt; error using a recent MPICH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-19 9:50 GMT-07:00 Eric Chamberland
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Eric.Chamberland_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Eric.Chamberland_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I encountered a new bug while testing our collective MPI I/O
</span><br>
<span class="quotelev2">&gt;&gt;     functionnalities over NFS.  This is not a big issue for us, but I
</span><br>
<span class="quotelev2">&gt;&gt;     think someone should have a look at it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     While running at 3 processes, we have this error on rank #0 and rank
</span><br>
<span class="quotelev2">&gt;&gt;     #2, knowing that rank #1 have nothing to write (0 length size) on
</span><br>
<span class="quotelev2">&gt;&gt;     this particular PMPI_File_write_all_begin call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211== Syscall param write(buf) points to uninitialised byte(s)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    at 0x10CB739D: ??? (in /lib64/libpthread-2.17.so
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://libpthread-2.17.so">http://libpthread-2.17.so</a>&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27438431: ADIOI_NFS_WriteStrided
</span><br>
<span class="quotelev2">&gt;&gt; (ad_nfs_write.c:645)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev2">&gt;&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev2">&gt;&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev2">&gt;&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev2">&gt;&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev2">&gt;&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==  Address 0x295af060 is 144 bytes inside a block of size
</span><br>
<span class="quotelev2">&gt;&gt;     524,288 alloc'd
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    at 0x4C2C27B: malloc (in
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/valgrind/vgpreload___memcheck-amd64-linux.so)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided
</span><br>
<span class="quotelev2">&gt;&gt; (ad_nfs_write.c:497)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev2">&gt;&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev2">&gt;&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev2">&gt;&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev2">&gt;&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev2">&gt;&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==  Uninitialised value was created by a heap allocation
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    at 0x4C2C27B: malloc (in
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/lib64/valgrind/vgpreload___memcheck-amd64-linux.so)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided
</span><br>
<span class="quotelev2">&gt;&gt; (ad_nfs_write.c:497)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev2">&gt;&gt;     (ad_write_coll.c:159)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x274321BD: MPIOI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (write_allb.c:114)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x27431DBF:
</span><br>
<span class="quotelev2">&gt;&gt;     mca_io_romio_dist_MPI_File___write_all_begin (write_allb.c:44)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x2742A367: mca_io_romio_file_write_all___begin
</span><br>
<span class="quotelev2">&gt;&gt;     (io_romio_file_write.c:264)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev2">&gt;&gt;     (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::__string&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     PAIO::__ecritureIndexeParBlocMPI&lt;__PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;      &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
</span><br>
<span class="quotelev2">&gt;&gt;     PtrPorteurConst&lt;Arete, Arete&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorCopieInfosSurDansVectPA__Type&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev2">&gt;&gt;     Arete&gt;*&gt; &gt; const&gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     FunctorAccesseurPorteurLocal&lt;__PtrPorteurConst&lt;Arete, Arete&gt; &gt;&amp;,
</span><br>
<span class="quotelev2">&gt;&gt;     long, DistributionComposantes&amp;, long, unsigned long, unsigned long,
</span><br>
<span class="quotelev2">&gt;&gt;     std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4E9A67:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__visiteMaillage(Maillage const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4C79A2:
</span><br>
<span class="quotelev2">&gt;&gt;     GISLectureEcriture&lt;double&gt;::__ecritGISMPI(std::string,
</span><br>
<span class="quotelev2">&gt;&gt;     GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==    by 0x4961AD: main (in
</span><br>
<span class="quotelev2">&gt;&gt;     /home/mefpp_ericc/GIREF/bin/__Test.LectureEcritureGISMPI.__opt)
</span><br>
<span class="quotelev2">&gt;&gt;     ==19211==
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Can't tell if it is a big issue or not, but I thought I should
</span><br>
<span class="quotelev2">&gt;&gt;     mention it to the list....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     We run without this valgrind  error when I use my local disk
</span><br>
<span class="quotelev2">&gt;&gt;     partition instead of an nfs parition or if I run with only 1
</span><br>
<span class="quotelev2">&gt;&gt;     process  (which always have something to write for each
</span><br>
<span class="quotelev2">&gt;&gt;     PMPI_File_write_all_begin) and write to an nfs partition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Using openmpi-1.8.4rc3 compiled in &quot;debug&quot; mode:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_info -all :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.giref.ulaval.ca/~__ericc/ompi_bug/ompi_info.all.__184rc3.txt.gz">http://www.giref.ulaval.ca/~__ericc/ompi_bug/ompi_info.all.__184rc3.txt.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     config.log:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.giref.ulaval.ca/~__ericc/ompi_bug/config.184rc3.__log.gz">http://www.giref.ulaval.ca/~__ericc/ompi_bug/config.184rc3.__log.gz</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Eric
</span><br>
<span class="quotelev2">&gt;&gt;     _________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/__mailman/listinfo.cgi/devel">http://www.open-mpi.org/__mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/__community/lists/devel/2014/12/__16691.php">http://www.open-mpi.org/__community/lists/devel/2014/12/__16691.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16691.php">http://www.open-mpi.org/community/lists/devel/2014/12/16691.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16703.php">George Bosilca: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16701.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16709.php">Eric Chamberland: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
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
