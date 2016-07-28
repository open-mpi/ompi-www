<?
$subject_val = "[OMPI users] OpenMPI code snippet causes a dead loop";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 13:14:59 2009" -->
<!-- isoreceived="20090830171459" -->
<!-- sent="Mon, 31 Aug 2009 01:14:35 +0800" -->
<!-- isosent="20090830171435" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI code snippet causes a dead loop" -->
<!-- id="eafc0afe0908301014r7641b9adm7ef4ac1bdfd9357f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI code snippet causes a dead loop<br>
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-30 13:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10518.php">Lee Amy: "[OMPI users] Help: OFED Version problem"</a>
<li><strong>Previous message:</strong> <a href="10516.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I reinstalled openmpi to a svn snapshot version to fixed the
<br>
MPI_File_open return 16 error, but the same code
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;int ret = MPI_File_open(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &quot;temp&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_RDWR | MPI_MODE_CREATE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh);
<br>
&nbsp;&nbsp;if (ret != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;open file failed, code=%d\n&quot;, ret);
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>now will  cause a dead loop in both servers, attached gdb show
<br>
<p>(gdb) backtra
<br>
#0  0x00002b09384df253 in epoll_wait () from /lib/libc.so.6
<br>
#1  0x00002b0937716abf in epoll_dispatch () from
<br>
/home/changsheng/local/lib/libopen-pal.so.0
<br>
#2  0x00002b09377159fb in opal_event_base_loop () from
<br>
/home/changsheng/local/lib/libopen-pal.so.0
<br>
#3  0x00002b0937700f21 in opal_progress () from
<br>
/home/changsheng/local/lib/libopen-pal.so.0
<br>
#4  0x00002b093721d015 in ompi_request_default_wait_all () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#5  0x00002b093c8d5ac4 in
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling () from
<br>
/home/changsheng/local//lib/openmpi/mca_coll_tuned.so
<br>
#6  0x00002b0937210aa9 in ompi_comm_nextcid () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#7  0x00002b093720ebde in ompi_comm_dup () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#8  0x00002b093722cd35 in PMPI_Comm_dup () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#9  0x00002b093cf29db7 in mca_io_romio_dist_MPI_File_open () from
<br>
/home/changsheng/local//lib/openmpi/mca_io_romio.so
<br>
#10 0x00002b09372501e7 in mca_io_base_file_select () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#11 0x00002b093721717e in ompi_file_open () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#12 0x00002b0937247405 in PMPI_File_open () from
<br>
/home/changsheng/local/lib/libmpi.so.0
<br>
#13 0x0000000000400a78 in main ()
<br>
<p>How to fixed this problem, or any refer?
<br>
<p>Thanks.
<br>
<p>&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;Changsheng Jiang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10518.php">Lee Amy: "[OMPI users] Help: OFED Version problem"</a>
<li><strong>Previous message:</strong> <a href="10516.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
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
