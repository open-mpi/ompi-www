<?
$subject_val = "[OMPI users] Question on MPI_Reduce_scatter limit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 19 19:50:21 2012" -->
<!-- isoreceived="20121019235021" -->
<!-- sent="Fri, 19 Oct 2012 16:50:15 -0700" -->
<!-- isosent="20121019235015" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] Question on MPI_Reduce_scatter limit" -->
<!-- id="SNT134-W206D88B9FBEEC69711867BD3750_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Question on MPI_Reduce_scatter limit<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-19 19:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am using openmpi 1.6 on linux. I have a question on MPI_Reduce_scatter.
<br>
<p>I try to see how large the data can push through MPI_Reduce_scatter using the
<br>
following code.
<br>
<p>size = (long) 1024*1024*1024*4;
<br>
for(k=1;k&lt;=16;++k) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bufsize = k*size/16;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;nproc;++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvCount[i] = bufsize/nproc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i=0;i&lt;bufsize;++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sbuf[i] = myid+1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;buffer size: %ld recvCount[0]:%d\n&quot;,bufsize,recvCount[0]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce_scatter(sbuf,rbuf,recvCount,MPI_LONG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i=0;i&lt;bufsize/nproc;++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rbuf[i] != nproc/2*(nproc+1)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;failed in %d&quot;,myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;done\n&quot;);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;ierr = MPI_Finalize();
<br>
<p><p>I used 4 processes and found that if 4 processes are in the same machine. It can
<br>
go through size = MAX_INT. However, if 4 processes are in 4 different machines,
<br>
it hangs at size=  1073741824.
<br>
<p><p>#0  0x000000337f6d3fc3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
#1  0x00002b1e9c45d4eb in epoll_dispatch (base=0xd08e940, arg=0xd08e800,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tv=&lt;value optimized out&gt;) at epoll.c:215
<br>
#2  0x00002b1e9c45f98a in opal_event_base_loop (base=0xd08e940,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags=&lt;value optimized out&gt;) at event.c:838
<br>
#3  0x00002b1e9c485809 in opal_progress () at runtime/opal_progress.c:189
<br>
#4  0x00002b1e9c3ccf05 in opal_condition_wait (req_ptr=0x7fffc4519fb0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;status=0x0) at ../opal/threads/condition.h:99
<br>
#5  ompi_request_wait_completion (req_ptr=0x7fffc4519fb0, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../ompi/request/request.h:377
<br>
#6  ompi_request_default_wait (req_ptr=0x7fffc4519fb0, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at request/req_wait.c:38
<br>
#7  0x00002b1ea0d60dda in ompi_coll_tuned_reduce_scatter_intra_ring (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sbuf=0x7fffc4519fb0, rbuf=0x2b1ea1384010, rcounts=0xd458e30,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dtype=0x601fa0, op=0x601790, comm=0x601390, module=0xd458a10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at coll_tuned_reduce_scatter.c:584
<br>
#8  0x00002b1ea0b4cd8c in mca_coll_sync_reduce_scatter (sbuf=0x2b26a1385010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rbuf=0x2b1ea1384010, rcounts=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dtype=&lt;value optimized out&gt;, op=&lt;value optimized out&gt;, comm=0x601390,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0xd458820) at coll_sync_reduce_scatter.c:46
<br>
#9  0x00002b1e9c3e7e51 in PMPI_Reduce_scatter (sendbuf=0x2b26a1385010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x2b1ea1384010, recvcounts=0xd458e30,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=&lt;value optimized out&gt;, op=0x601790, comm=0x601390)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at preduce_scatter.c:129
<br>
#10 0x0000000000400ddb in main (argc=1, argv=0x7fffc451a998)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at test_reduce_scatter.c:50
<br>
<p>Does openmpi 1.6 uses different mechanisms in reduce_scatter when communicate
<br>
within a machine and inter-machines?
<br>
<p>What is the limit of size of buffer to use reduce_scatter?
<br>
<p>Thanks for your attention.
<br>
<p>Regards,
<br>
<p>William
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20514.php">Rayson Ho: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<li><strong>Previous message:</strong> <a href="20512.php">Gus Correa: "Re: [OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
