<?
$subject_val = "Re: [OMPI users] OpenMPI code snippet causes a dead loop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 03:47:23 2009" -->
<!-- isoreceived="20090902074723" -->
<!-- sent="Wed, 2 Sep 2009 10:47:18 +0300" -->
<!-- isosent="20090902074718" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI code snippet causes a dead loop" -->
<!-- id="16600C38-FD6C-4B08-9F3D-AE983D213A49_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="eafc0afe0908301014r7641b9adm7ef4ac1bdfd9357f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI code snippet causes a dead loop<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 03:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Previous message:</strong> <a href="10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10517.php">Changsheng Jiang: "[OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10582.php">Changsheng Jiang: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Reply:</strong> <a href="10582.php">Changsheng Jiang: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unable to replicate your problem with the code below -- can you  
<br>
be more precise about your system details, Open MPI version, etc.?
<br>
<p><p>On Aug 30, 2009, at 8:14 PM, Changsheng Jiang wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I reinstalled openmpi to a svn snapshot version to fixed the
</span><br>
<span class="quotelev1">&gt; MPI_File_open return 16 error, but the same code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;   MPI_File fh;
</span><br>
<span class="quotelev1">&gt;   MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;   int ret = MPI_File_open(
</span><br>
<span class="quotelev1">&gt;       MPI_COMM_WORLD, &quot;temp&quot;,
</span><br>
<span class="quotelev1">&gt;       MPI_MODE_RDWR | MPI_MODE_CREATE,
</span><br>
<span class="quotelev1">&gt;       MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;   if (ret != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;open file failed, code=%d\n&quot;, ret);
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now will  cause a dead loop in both servers, attached gdb show
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) backtra
</span><br>
<span class="quotelev1">&gt; #0  0x00002b09384df253 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b0937716abf in epoll_dispatch () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00002b09377159fb in opal_event_base_loop () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00002b0937700f21 in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #4  0x00002b093721d015 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x00002b093c8d5ac4 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev1">&gt; #6  0x00002b0937210aa9 in ompi_comm_nextcid () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #7  0x00002b093720ebde in ompi_comm_dup () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #8  0x00002b093722cd35 in PMPI_Comm_dup () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #9  0x00002b093cf29db7 in mca_io_romio_dist_MPI_File_open () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local//lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev1">&gt; #10 0x00002b09372501e7 in mca_io_base_file_select () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #11 0x00002b093721717e in ompi_file_open () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #12 0x00002b0937247405 in PMPI_File_open () from
</span><br>
<span class="quotelev1">&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000400a78 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How to fixed this problem, or any refer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                                      Changsheng Jiang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10551.php">Jeff Squyres: "Re: [OMPI users] build problems - undefined referenceto	`lt_libltdlc_LTX_preloaded_symbols and libtool install"</a>
<li><strong>Previous message:</strong> <a href="10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10517.php">Changsheng Jiang: "[OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10582.php">Changsheng Jiang: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Reply:</strong> <a href="10582.php">Changsheng Jiang: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
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
