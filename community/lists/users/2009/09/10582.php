<?
$subject_val = "Re: [OMPI users] OpenMPI code snippet causes a dead loop";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  6 23:53:18 2009" -->
<!-- isoreceived="20090907035318" -->
<!-- sent="Mon, 7 Sep 2009 11:52:54 +0800" -->
<!-- isosent="20090907035254" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI code snippet causes a dead loop" -->
<!-- id="eafc0afe0909062052o45140d65x60175c31842e5a1_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="16600C38-FD6C-4B08-9F3D-AE983D213A49_at_cisco.com" -->
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
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-06 23:52:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
<li><strong>Previous message:</strong> <a href="10581.php">Shiqing Fan: "Re: [OMPI users] Fwd: vista+cygwin+openmpi"</a>
<li><strong>In reply to:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am sorry for the late reply. The original environment has be destroyed, so
<br>
I recompiled the OpenMPI r21948, and this problem still exists.
<br>
<p>The compiling gcc is 4.3.2, one server is Linux 2.6.24, and another is Linux
<br>
2.6.27, they are connected by ssh. BTW, other simple MPI program such as
<br>
matrix product by message passing run well between these two servers.
<br>
<p>Thanks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Wed, Sep 2, 2009 at 15:47, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am unable to replicate your problem with the code below -- can you be
</span><br>
<span class="quotelev1">&gt; more precise about your system details, Open MPI version, etc.?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2009, at 8:14 PM, Changsheng Jiang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi, I reinstalled openmpi to a svn snapshot version to fixed the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_File_open return 16 error, but the same code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;  int ret = MPI_File_open(
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_COMM_WORLD, &quot;temp&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_MODE_RDWR | MPI_MODE_CREATE,
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;  if (ret != MPI_SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;    fprintf(stderr, &quot;open file failed, code=%d\n&quot;, ret);
</span><br>
<span class="quotelev2">&gt;&gt;  } else {
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now will  cause a dead loop in both servers, attached gdb show
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) backtra
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00002b09384df253 in epoll_wait () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002b0937716abf in epoll_dispatch () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002b09377159fb in opal_event_base_loop () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b0937700f21 in opal_progress () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libopen-pal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002b093721d015 in ompi_request_default_wait_all () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002b093c8d5ac4 in
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local//lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002b0937210aa9 in ompi_comm_nextcid () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002b093720ebde in ompi_comm_dup () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00002b093722cd35 in PMPI_Comm_dup () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00002b093cf29db7 in mca_io_romio_dist_MPI_File_open () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local//lib/openmpi/mca_io_romio.so
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00002b09372501e7 in mca_io_base_file_select () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00002b093721717e in ompi_file_open () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00002b0937247405 in PMPI_File_open () from
</span><br>
<span class="quotelev2">&gt;&gt; /home/changsheng/local/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x0000000000400a78 in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How to fixed this problem, or any refer?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                                                     Changsheng Jiang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10583.php">Mallikarjuna Shastry: "[OMPI users] problem in using blcr"</a>
<li><strong>Previous message:</strong> <a href="10581.php">Shiqing Fan: "Re: [OMPI users] Fwd: vista+cygwin+openmpi"</a>
<li><strong>In reply to:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- nextthread="start" -->
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
