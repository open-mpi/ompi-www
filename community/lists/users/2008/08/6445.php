<?
$subject_val = "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 10:34:56 2008" -->
<!-- isoreceived="20080829143456" -->
<!-- sent="Fri, 29 Aug 2008 10:34:39 -0400" -->
<!-- isosent="20080829143439" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)" -->
<!-- id="48B808FF.50402_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.0808181524490.26136_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-29 10:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6446.php">Paul Kapinos: "[OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have submitted a ticket on this issue.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1468">https://svn.open-mpi.org/trac/ompi/ticket/1468</a>
<br>
<p>Rolf
<br>
<p>On 08/18/08 18:27, Mostyn Lewis wrote:
<br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm glad you changed the scheduling and my program seems to work.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, to stress it a bit more I changed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define NUM_ITERS 1000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define NUM_ITERS 100000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it glues up at around ~30k
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please try it and see.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regads,
</span><br>
<span class="quotelev1">&gt; Mostyn
</span><br>
<span class="quotelev1">&gt; Mostyn,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was a problem with the SM BTL. Please upgrade to at least 19315 
</span><br>
<span class="quotelev1">&gt; and [hopefully] your application will run to completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2008, at 3:39 AM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using a very recent svn version (1.4a1r18899) I'm getting a 
</span><br>
<span class="quotelev2">&gt;&gt; non-terminating
</span><br>
<span class="quotelev2">&gt;&gt; condition if I use the sm btl with tcp,self or with openib,self.
</span><br>
<span class="quotelev2">&gt;&gt; The program is not finishing a reduce operation. It works if the sm btl
</span><br>
<span class="quotelev2">&gt;&gt; is left out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using 2 4 core nodes.
</span><br>
<span class="quotelev2">&gt;&gt; Program is:
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 2001-2002 The Trustees of Indiana University.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 1998-2001 University of Notre Dame.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; * Copyright (c) 1994-1998 The Ohio State University.
</span><br>
<span class="quotelev2">&gt;&gt; *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * This file is part of the LAM/MPI software package.  For license
</span><br>
<span class="quotelev2">&gt;&gt; * information, see the LICENSE file in the top level directory of the
</span><br>
<span class="quotelev2">&gt;&gt; * LAM/MPI source distribution.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * $HEADER$
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * $Id: cpi.c,v 1.4 2002/11/23 04:06:58 jsquyres Exp $
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Portions taken from the MPICH distribution example cpi.c.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * Example program to calculate the value of pi by integrating f(x) =
</span><br>
<span class="quotelev2">&gt;&gt; * 4 / (1 + x^2).
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Constant for how many values we'll estimate */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define NUM_ITERS 1000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* Prototype the function that we'll use below. */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static double f(double);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  int iter, rank, size, i;
</span><br>
<span class="quotelev2">&gt;&gt;  double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev2">&gt;&gt;  double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev2">&gt;&gt;  double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev2">&gt;&gt;  int namelen;
</span><br>
<span class="quotelev2">&gt;&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;  pid_t pid;
</span><br>
<span class="quotelev2">&gt;&gt;  pid = getpid();
</span><br>
<span class="quotelev2">&gt;&gt;  char foo[200];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* Normal MPI startup */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*  if(rank == 7){ */
</span><br>
<span class="quotelev2">&gt;&gt;  printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;  /* system(&quot;set&quot;); */
</span><br>
<span class="quotelev2">&gt;&gt; /*  sprintf(foo,&quot;%s %d&quot;,&quot;/tools/linux/bin/cpu -o -p &quot;,pid);
</span><br>
<span class="quotelev2">&gt;&gt;  system(foo); */ /*  } */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* Do approximations for 1 to 100 points */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* sleep(5); */
</span><br>
<span class="quotelev2">&gt;&gt;  for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
</span><br>
<span class="quotelev2">&gt;&gt;    h = 1.0 / (double) iter;
</span><br>
<span class="quotelev2">&gt;&gt;    sum = 0.0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    /* A slightly better approach starts from large i and works back */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if (rank == 0)
</span><br>
<span class="quotelev2">&gt;&gt;      startwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for (i = rank + 1; i &lt;= iter; i += size) {
</span><br>
<span class="quotelev2">&gt;&gt;      x = h * ((double) i - 0.5);
</span><br>
<span class="quotelev2">&gt;&gt;      sum += f(x);
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    mypi = h * sum;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; /*    if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Reduce(MPI_IN_PLACE, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Reduce(&amp;mypi, NULL, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    } */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*    if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;             iter, pi, fabs(pi - PI25DT));
</span><br>
<span class="quotelev2">&gt;&gt;      endwtime = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
</span><br>
<span class="quotelev2">&gt;&gt;      fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;    } */
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /* All done */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static double
</span><br>
<span class="quotelev2">&gt;&gt; f(double a)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;  return (4.0 / (1.0 + a * a));
</span><br>
<span class="quotelev2">&gt;&gt; } 
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;good&quot; non sm btl run (--mca btl tcp,self --mca opal_event_include 
</span><br>
<span class="quotelev2">&gt;&gt; select) gives
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 8 on r4150_18
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 of 8 on r4150_18
</span><br>
<span class="quotelev2">&gt;&gt; Process 5 of 8 on r4150_17
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 of 8 on r4150_17
</span><br>
<span class="quotelev2">&gt;&gt; Process 7 of 8 on r4150_17
</span><br>
<span class="quotelev2">&gt;&gt; Process 6 of 8 on r4150_17
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 8 on r4150_18
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 of 8 on r4150_18
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A &quot;bad&quot; sm btl run (--mca btl sm,tcp,self --mca opal_event_include 
</span><br>
<span class="quotelev2">&gt;&gt; select)
</span><br>
<span class="quotelev2">&gt;&gt; When using gdb to attach a non-terminating process shows:
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) where
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x000000366d4c78d3 in __select_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002aaaab076546 in select_dispatch (base=0x278bc00, 
</span><br>
<span class="quotelev2">&gt;&gt; arg=0x278bb50, tv=0x7fff8bd179a0)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../.././opal/event/select.c:176
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002aaaab073308 in opal_event_base_loop (base=0x278bc00, flags=2)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../.././opal/event/event.c:803
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002aaaab073004 in opal_event_loop (flags=2) at 
</span><br>
<span class="quotelev2">&gt;&gt; ../../.././opal/event/event.c:726
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002aaaab0636a4 in opal_progress () at 
</span><br>
<span class="quotelev2">&gt;&gt; ../.././opal/runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002aaaaaaf9c23 in opal_condition_wait (c=0x2aaaaadd7bc0, 
</span><br>
<span class="quotelev2">&gt;&gt; m=0x2aaaaadd7c20)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../.././opal/threads/condition.h:100
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002aaaaaafa1bd in ompi_request_default_wait_all (count=1, 
</span><br>
<span class="quotelev2">&gt;&gt; requests=0x7fff8bd17b50,
</span><br>
<span class="quotelev2">&gt;&gt;    statuses=0x0) at ../.././ompi/request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002aaaaf0f913e in ompi_coll_tuned_reduce_generic 
</span><br>
<span class="quotelev2">&gt;&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev2">&gt;&gt;    recvbuf=0x7fff8bd180c8, original_count=1, datatype=0x6012b0, 
</span><br>
<span class="quotelev2">&gt;&gt; op=0x6016a0, root=0,
</span><br>
<span class="quotelev2">&gt;&gt;    comm=0x601440, module=0x2832610, tree=0x28331c0, 
</span><br>
<span class="quotelev2">&gt;&gt; count_by_segment=1, max_outstanding_reqs=0)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:168
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00002aaaaf0f9fcd in ompi_coll_tuned_reduce_intra_binomial 
</span><br>
<span class="quotelev2">&gt;&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev2">&gt;&gt;    recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0, 
</span><br>
<span class="quotelev2">&gt;&gt; root=0, comm=0x601440,
</span><br>
<span class="quotelev2">&gt;&gt;    module=0x2832610, segsize=0, max_outstanding_reqs=0)
</span><br>
<span class="quotelev2">&gt;&gt;    at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:462
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00002aaaaf0ea075 in ompi_coll_tuned_reduce_intra_dec_fixed 
</span><br>
<span class="quotelev2">&gt;&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev2">&gt;&gt;    recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0, 
</span><br>
<span class="quotelev2">&gt;&gt; root=0, comm=0x601440,
</span><br>
<span class="quotelev2">&gt;&gt;    module=0x2832610) at 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../.././ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:389
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00002aaaaab41348 in PMPI_Reduce (sendbuf=0x7fff8bd180d0, 
</span><br>
<span class="quotelev2">&gt;&gt; recvbuf=0x7fff8bd180c8, count=1,
</span><br>
<span class="quotelev2">&gt;&gt;    datatype=0x6012b0, op=0x6016a0, root=0, comm=0x601440) at 
</span><br>
<span class="quotelev2">&gt;&gt; preduce.c:105
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x0000000000400bc4 in main ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/select.c:176 is:
</span><br>
<span class="quotelev2">&gt;&gt;        res = select(sop-&gt;event_fds + 1, sop-&gt;event_readset_out,
</span><br>
<span class="quotelev2">&gt;&gt;            sop-&gt;event_writeset_out, NULL, tv);
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/event.c:803 is:
</span><br>
<span class="quotelev2">&gt;&gt;        res = evsel-&gt;dispatch(base, evbase, tv_p);
</span><br>
<span class="quotelev2">&gt;&gt; opal/event/event.c:726 is:
</span><br>
<span class="quotelev2">&gt;&gt;        return event_base_loop(current_base, flags);
</span><br>
<span class="quotelev2">&gt;&gt; opal/runtime/opal_progress.c:189 is:
</span><br>
<span class="quotelev2">&gt;&gt;                events += opal_event_loop(opal_progress_event_flag);
</span><br>
<span class="quotelev2">&gt;&gt; opal/threads/condition.h:100 is:
</span><br>
<span class="quotelev2">&gt;&gt;        while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;            opal_progress(); &lt;----------------------------------100
</span><br>
<span class="quotelev2">&gt;&gt;            OPAL_CR_TEST_CHECKPOINT_READY_STALL();
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt; ompi/request/req_wait.c:262 is:
</span><br>
<span class="quotelev2">&gt;&gt;            while (pending &gt; ompi_request_completed - start) {
</span><br>
<span class="quotelev2">&gt;&gt;                opal_condition_wait(&amp;ompi_request_cond, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;ompi_request_lock); &lt;-----262
</span><br>
<span class="quotelev2">&gt;&gt;            }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll stop at this point.
</span><br>
<span class="quotelev2">&gt;&gt; If the default poll is used there's a similar non-terminating loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas at this point?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mostyn
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6446.php">Paul Kapinos: "[OMPI users] Problems with compilig of OpenMPI 1.2.7"</a>
<li><strong>Previous message:</strong> <a href="6444.php">Adam C Powell IV: "Re: [OMPI users] How to get started?"</a>
<li><strong>In reply to:</strong> <a href="6384.php">Mostyn Lewis: "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)"</a>
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
