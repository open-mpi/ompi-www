<?
$subject_val = "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 14:16:43 2014" -->
<!-- isoreceived="20141219191643" -->
<!-- sent="Fri, 19 Dec 2014 12:16:41 -0700" -->
<!-- isosent="20141219191641" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided" -->
<!-- id="CAF1Cqj7WB4OOyP4j9iWhQ1Ro5FofkiZmT4WB6-aLZ4p_HsG96w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54945765.2080708_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 14:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>In reply to:</strong> <a href="16691.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Eric,
<br>
<p>Does your app also work with MPICH?  The romio in Open MPI is getting a bit
<br>
old, so it would be useful to know if you see the same valgrind error using
<br>
a recent MPICH.
<br>
<p>Howard
<br>
<p><p>2014-12-19 9:50 GMT-07:00 Eric Chamberland &lt;Eric.Chamberland_at_[hidden]
<br>
<span class="quotelev1">&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I encountered a new bug while testing our collective MPI I/O
</span><br>
<span class="quotelev1">&gt; functionnalities over NFS.  This is not a big issue for us, but I think
</span><br>
<span class="quotelev1">&gt; someone should have a look at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While running at 3 processes, we have this error on rank #0 and rank #2,
</span><br>
<span class="quotelev1">&gt; knowing that rank #1 have nothing to write (0 length size) on this
</span><br>
<span class="quotelev1">&gt; particular PMPI_File_write_all_begin call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==19211== Syscall param write(buf) points to uninitialised byte(s)
</span><br>
<span class="quotelev1">&gt; ==19211==    at 0x10CB739D: ??? (in /lib64/libpthread-2.17.so)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27438431: ADIOI_NFS_WriteStrided (ad_nfs_write.c:645)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt; (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin
</span><br>
<span class="quotelev1">&gt; (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; PAIO::
</span><br>
<span class="quotelev1">&gt; ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
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
<span class="quotelev1">&gt; long, std::string const&amp;) (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4E9A67: GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage
</span><br>
<span class="quotelev1">&gt; const&amp;) (in /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4C79A2: GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4961AD: main (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==  Address 0x295af060 is 144 bytes inside a block of size 524,288
</span><br>
<span class="quotelev1">&gt; alloc'd
</span><br>
<span class="quotelev1">&gt; ==19211==    at 0x4C2C27B: malloc (in /usr/lib64/valgrind/vgpreload_
</span><br>
<span class="quotelev1">&gt; memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt; (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin
</span><br>
<span class="quotelev1">&gt; (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; PAIO::
</span><br>
<span class="quotelev1">&gt; ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
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
<span class="quotelev1">&gt; long, std::string const&amp;) (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4E9A67: GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage
</span><br>
<span class="quotelev1">&gt; const&amp;) (in /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4C79A2: GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4961AD: main (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==  Uninitialised value was created by a heap allocation
</span><br>
<span class="quotelev1">&gt; ==19211==    at 0x4C2C27B: malloc (in /usr/lib64/valgrind/vgpreload_
</span><br>
<span class="quotelev1">&gt; memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2745E78E: ADIOI_Malloc_fn (malloc.c:50)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2743757C: ADIOI_NFS_WriteStrided (ad_nfs_write.c:497)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27451963: ADIOI_GEN_WriteStridedColl
</span><br>
<span class="quotelev1">&gt; (ad_write_coll.c:159)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x274321BD: MPIOI_File_write_all_begin (write_allb.c:114)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x27431DBF: mca_io_romio_dist_MPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (write_allb.c:44)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x2742A367: mca_io_romio_file_write_all_begin
</span><br>
<span class="quotelev1">&gt; (io_romio_file_write.c:264)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x12126520: PMPI_File_write_all_begin
</span><br>
<span class="quotelev1">&gt; (pfile_write_all_begin.c:74)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4D7CFB: SYEnveloppeMessage&lt;std::string&gt; PAIO::
</span><br>
<span class="quotelev1">&gt; ecritureIndexeParBlocMPI&lt;PAIOType&lt;double&gt;, PtrPorteurConst&lt;Arete, Arete&gt;,
</span><br>
<span class="quotelev1">&gt; FunctorCopieInfosSurDansVectPAType&lt;PAIOType&lt;double&gt;,
</span><br>
<span class="quotelev1">&gt; std::vector&lt;InfoSur&lt;double, Arete&gt;*, std::allocator&lt;InfoSur&lt;double,
</span><br>
<span class="quotelev1">&gt; Arete&gt;*&gt; &gt; const&gt;, FunctorAccesseurPorteurLocal&lt;PtrPorteurConst&lt;Arete,
</span><br>
<span class="quotelev1">&gt; Arete&gt; &gt; &gt;(PAGroupeProcessus&amp;, ompi_file_t*, long long,
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
<span class="quotelev1">&gt; long, std::string const&amp;) (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4E9A67: GISLectureEcriture&lt;double&gt;::visiteMaillage(Maillage
</span><br>
<span class="quotelev1">&gt; const&amp;) (in /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4C79A2: GISLectureEcriture&lt;double&gt;::ecritGISMPI(std::string,
</span><br>
<span class="quotelev1">&gt; GroupeInfoSur&lt;double&gt; const&amp;, std::string const&amp;) (in
</span><br>
<span class="quotelev1">&gt; /home/mefpp_ericc/GIREF/bin/Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==    by 0x4961AD: main (in /home/mefpp_ericc/GIREF/bin/
</span><br>
<span class="quotelev1">&gt; Test.LectureEcritureGISMPI.opt)
</span><br>
<span class="quotelev1">&gt; ==19211==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't tell if it is a big issue or not, but I thought I should mention it
</span><br>
<span class="quotelev1">&gt; to the list....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We run without this valgrind  error when I use my local disk partition
</span><br>
<span class="quotelev1">&gt; instead of an nfs parition or if I run with only 1 process  (which always
</span><br>
<span class="quotelev1">&gt; have something to write for each PMPI_File_write_all_begin) and write to an
</span><br>
<span class="quotelev1">&gt; nfs partition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using openmpi-1.8.4rc3 compiled in &quot;debug&quot; mode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info -all :
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/ompi_info.all.184rc3.txt.gz</a>
</span><br>
<span class="quotelev1">&gt; config.log:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184rc3.log.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/">http://www.open-mpi.org/community/lists/devel/2014/12/</a>
</span><br>
<span class="quotelev1">&gt; 16691.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16696/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16695.php">Joshua Ladd: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>In reply to:</strong> <a href="16691.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Reply:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
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
