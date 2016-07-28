<?
$subject_val = "[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 19:59:33 2012" -->
<!-- isoreceived="20120913235933" -->
<!-- sent="Thu, 13 Sep 2012 16:59:28 -0700" -->
<!-- isosent="20120913235928" -->
<!-- name="William Au" -->
<!-- email="au_wai_chung_at_[hidden]" -->
<!-- subject="[OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6" -->
<!-- id="SNT134-W31361EE1C0C856C6047478D3910_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] hanging in ioctl in solaris 5.10 openmpi 1.6<br>
<strong>From:</strong> William Au (<em>au_wai_chung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 19:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>My simple test case hangs in solaris 5.10 in openmpi 1.6. It does not have
<br>
problem in linux. Also, if multiple processes run on the same machine,
<br>
it does not have problem too. I used debugger to see where it hanged, it
<br>
appear to be at 
<br>
&nbsp;242           res = ioctl(devpollop-&gt;dpfd, DP_POLL, &amp;dvp);
<br>
(dbx) where
<br>
current thread: t_at_1
<br>
&nbsp;&nbsp;[1] _ioctl(0x3, 0xd001, 0xffffffff95c00a80, 0xff, 0x1a4336, 0x0), at 0xfffffd7f fe7726da
<br>
=&gt;[2] devpoll_dispatch(base = ???, arg = ???, tv = ???) (optimized), at 0xfffffd7 fff1efb75 (line ~242) in &quot;devpoll.c&quot;
<br>
&nbsp;&nbsp;[3] opal_event_base_loop(base = ???, flags = ???) (optimized), at 0xfffffd7fff2 081aa (line ~838) in &quot;event.c&quot;
<br>
&nbsp;&nbsp;[4] opal_event_loop(flags = ???) (optimized), at 0xfffffd7fff207f99 (line ~766)  in &quot;event.c&quot;
<br>
&nbsp;&nbsp;[5] opal_progress() (optimized), at 0xfffffd7fff2590a3 (line ~189) in &quot;opal_pro gress.c&quot;
<br>
&nbsp;&nbsp;[6] mca_pml_ob1_recv(addr = ???, count = ???, datatype = ???, src = ???, tag = ???, comm = ???, status = ???) (optimized), at 0xfffffd7ffe19199b (line ~99) in &quot; condition.h&quot;
<br>
&nbsp;&nbsp;[7] PMPI_Recv(buf = ???, count = ???, type = ???, source = ???, tag = ???, comm  = ???, status = ???) (optimized), at 0xfffffd7ffeffedb2 (line ~78) in &quot;precv.c&quot;
<br>
&nbsp;&nbsp;[8] main(argc = 1, argv = 0xfffffd7fffdff0e8), line 43 in &quot;mpitest.c&quot;
<br>
<p><p>Here is my test program, any clue where I should be looking at? Thanks in advance.
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#define BUFSIZE 128
<br>
#define TAG 0
<br>
<p>int main(int argc, char *argv[])
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char idstr[32];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char buff[BUFSIZE];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status stat;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid); 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1;i&lt;numprocs;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buff, &quot;Data from id %d&quot;, myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buff, BUFSIZE, MPI_CHAR, i, TAG, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=1;i&lt;numprocs;i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buff, BUFSIZE, MPI_CHAR, i, TAG, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s:Received by id %d\n&quot;, buff, myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* receive from rank 0: */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buff, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD, &amp;stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(idstr, &quot;%s:Received by id %d:Data from id %d&quot;,buff, myid, myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send to rank 0: */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(idstr, BUFSIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize(); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Regards,
<br>
<p><p>William
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20211/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="20210.php">Ralph Castain: "Re: [OMPI users] how to submit parallel job with openmpi"</a>
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
