<?
$subject_val = "[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 21:39:53 2008" -->
<!-- isoreceived="20080724013953" -->
<!-- sent="Wed, 23 Jul 2008 18:39:44 -0700 (PDT)" -->
<!-- isosent="20080724013944" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)" -->
<!-- id="Pine.GSO.4.64.0807231838070.16047_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 21:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Using a very recent svn version (1.4a1r18899) I'm getting a non-terminating
<br>
condition if I use the sm btl with tcp,self or with openib,self.
<br>
The program is not finishing a reduce operation. It works if the sm btl
<br>
is left out.
<br>
<p>Using 2 4 core nodes.
<br>
Program is:
<br>
-----------------------------------------------------------------------------
<br>
/*
<br>
&nbsp;&nbsp;* Copyright (c) 2001-2002 The Trustees of Indiana University.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 1998-2001 University of Notre Dame.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;* Copyright (c) 1994-1998 The Ohio State University.
<br>
&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* This file is part of the LAM/MPI software package.  For license
<br>
&nbsp;&nbsp;* information, see the LICENSE file in the top level directory of the
<br>
&nbsp;&nbsp;* LAM/MPI source distribution.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $HEADER$
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* $Id: cpi.c,v 1.4 2002/11/23 04:06:58 jsquyres Exp $
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Portions taken from the MPICH distribution example cpi.c.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Example program to calculate the value of pi by integrating f(x) =
<br>
&nbsp;&nbsp;* 4 / (1 + x^2).
<br>
&nbsp;&nbsp;*/
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>/* Constant for how many values we'll estimate */
<br>
<p>#define NUM_ITERS 1000
<br>
<p><p>/* Prototype the function that we'll use below. */
<br>
<p>static double f(double);
<br>
<p><p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int iter, rank, size, i;
<br>
&nbsp;&nbsp;&nbsp;double PI25DT = 3.141592653589793238462643;
<br>
&nbsp;&nbsp;&nbsp;double mypi, pi, h, sum, x;
<br>
&nbsp;&nbsp;&nbsp;double startwtime = 0.0, endwtime;
<br>
&nbsp;&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;pid_t pid;
<br>
&nbsp;&nbsp;&nbsp;pid = getpid();
<br>
&nbsp;&nbsp;&nbsp;char foo[200];
<br>
<p>&nbsp;&nbsp;&nbsp;/* Normal MPI startup */
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>/*  if(rank == 7){ */
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
<br>
&nbsp;&nbsp;&nbsp;/* system(&quot;set&quot;); */
<br>
/*  sprintf(foo,&quot;%s %d&quot;,&quot;/tools/linux/bin/cpu -o -p &quot;,pid);
<br>
&nbsp;&nbsp;&nbsp;system(foo); */ 
<br>
/*  } */
<br>
<p>&nbsp;&nbsp;&nbsp;/* Do approximations for 1 to 100 points */
<br>
<p>&nbsp;&nbsp;&nbsp;/* sleep(5); */
<br>
&nbsp;&nbsp;&nbsp;for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h = 1.0 / (double) iter;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* A slightly better approach starts from large i and works back */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;startwtime = MPI_Wtime();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = rank + 1; i &lt;= iter; i += size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h * ((double) i - 0.5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += f(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = h * sum;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
/*    if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(MPI_IN_PLACE, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, NULL, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} */
<br>
<p>/*    if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iter, pi, fabs(pi - PI25DT));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endwtime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} */
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;/* All done */
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>static double
<br>
f(double a)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;return (4.0 / (1.0 + a * a));
<br>
} 
<br>
-----------------------------------------------------------------------------
<br>
A &quot;good&quot; non sm btl run (--mca btl tcp,self --mca opal_event_include select) gives
<br>
Process 1 of 8 on r4150_18
<br>
Process 3 of 8 on r4150_18
<br>
Process 5 of 8 on r4150_17
<br>
Process 4 of 8 on r4150_17
<br>
Process 7 of 8 on r4150_17
<br>
Process 6 of 8 on r4150_17
<br>
Process 0 of 8 on r4150_18
<br>
Process 2 of 8 on r4150_18
<br>
<p>A &quot;bad&quot; sm btl run (--mca btl sm,tcp,self --mca opal_event_include select)
<br>
When using gdb to attach a non-terminating process shows:
<br>
(gdb) where
<br>
#0  0x000000366d4c78d3 in __select_nocancel () from /lib64/libc.so.6
<br>
#1  0x00002aaaab076546 in select_dispatch (base=0x278bc00, arg=0x278bb50, tv=0x7fff8bd179a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../.././opal/event/select.c:176
<br>
#2  0x00002aaaab073308 in opal_event_base_loop (base=0x278bc00, flags=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../.././opal/event/event.c:803
<br>
#3  0x00002aaaab073004 in opal_event_loop (flags=2) at ../../.././opal/event/event.c:726
<br>
#4  0x00002aaaab0636a4 in opal_progress () at ../.././opal/runtime/opal_progress.c:189
<br>
#5  0x00002aaaaaaf9c23 in opal_condition_wait (c=0x2aaaaadd7bc0, m=0x2aaaaadd7c20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../.././opal/threads/condition.h:100
<br>
#6  0x00002aaaaaafa1bd in ompi_request_default_wait_all (count=1, requests=0x7fff8bd17b50,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;statuses=0x0) at ../.././ompi/request/req_wait.c:262
<br>
#7  0x00002aaaaf0f913e in ompi_coll_tuned_reduce_generic (sendbuf=0x7fff8bd180d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x7fff8bd180c8, original_count=1, datatype=0x6012b0, op=0x6016a0, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm=0x601440, module=0x2832610, tree=0x28331c0, count_by_segment=1, max_outstanding_reqs=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:168
<br>
#8  0x00002aaaaf0f9fcd in ompi_coll_tuned_reduce_intra_binomial (sendbuf=0x7fff8bd180d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0, root=0, comm=0x601440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module=0x2832610, segsize=0, max_outstanding_reqs=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:462
<br>
#9  0x00002aaaaf0ea075 in ompi_coll_tuned_reduce_intra_dec_fixed (sendbuf=0x7fff8bd180d0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0, root=0, comm=0x601440,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module=0x2832610) at ../../../../.././ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:389
<br>
#10 0x00002aaaaab41348 in PMPI_Reduce (sendbuf=0x7fff8bd180d0, recvbuf=0x7fff8bd180c8, count=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x6012b0, op=0x6016a0, root=0, comm=0x601440) at preduce.c:105
<br>
#11 0x0000000000400bc4 in main ()
<br>
<p>opal/event/select.c:176 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = select(sop-&gt;event_fds + 1, sop-&gt;event_readset_out,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sop-&gt;event_writeset_out, NULL, tv);
<br>
opal/event/event.c:803 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;res = evsel-&gt;dispatch(base, evbase, tv_p);
<br>
opal/event/event.c:726 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return event_base_loop(current_base, flags);
<br>
opal/runtime/opal_progress.c:189 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;events += opal_event_loop(opal_progress_event_flag);
<br>
opal/threads/condition.h:100 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (c-&gt;c_signaled == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress(); &lt;----------------------------------100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_CR_TEST_CHECKPOINT_READY_STALL();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
ompi/request/req_wait.c:262 is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (pending &gt; ompi_request_completed - start) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait(&amp;ompi_request_cond, &amp;ompi_request_lock); &lt;-----262
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I'll stop at this point.
<br>
If the default poll is used there's a similar non-terminating loop.
<br>
<p>Any ideas at this point?
<br>
<p>Regards,
<br>
Mostyn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6124.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6122.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
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
