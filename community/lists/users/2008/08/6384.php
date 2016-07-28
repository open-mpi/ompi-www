<?
$subject_val = "Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 18:27:37 2008" -->
<!-- isoreceived="20080818222737" -->
<!-- sent="Mon, 18 Aug 2008 15:27:32 -0700 (PDT)" -->
<!-- isosent="20080818222732" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)" -->
<!-- id="Pine.GSO.4.64.0808181524490.26136_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1787D53-A298-4D14-87DA-99236B394627_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continuous poll/select using btl sm (svn	1.4a1r18899)<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 18:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<li><strong>Reply:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>I'm glad you changed the scheduling and my program seems to work.
<br>
Thank you.
<br>
<p>However, to stress it a bit more I changed
<br>
<p>#define NUM_ITERS 1000
<br>
<p>to
<br>
<p>#define NUM_ITERS 100000
<br>
<p>and it glues up at around ~30k
<br>
<p>Please try it and see.
<br>
<p>Regads,
<br>
Mostyn
<br>
<p>

<p>
Mostyn,
<br>
<p>There was a problem with the SM BTL. Please upgrade to at least 19315  
<br>
and [hopefully] your application will run to completion.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 24, 2008, at 3:39 AM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using a very recent svn version (1.4a1r18899) I'm getting a non- 
</span><br>
<span class="quotelev1">&gt; terminating
</span><br>
<span class="quotelev1">&gt; condition if I use the sm btl with tcp,self or with openib,self.
</span><br>
<span class="quotelev1">&gt; The program is not finishing a reduce operation. It works if the sm  
</span><br>
<span class="quotelev1">&gt; btl
</span><br>
<span class="quotelev1">&gt; is left out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using 2 4 core nodes.
</span><br>
<span class="quotelev1">&gt; Program is:
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * Copyright (c) 2001-2002 The Trustees of Indiana University.
</span><br>
<span class="quotelev1">&gt; *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; * Copyright (c) 1998-2001 University of Notre Dame.
</span><br>
<span class="quotelev1">&gt; *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; * Copyright (c) 1994-1998 The Ohio State University.
</span><br>
<span class="quotelev1">&gt; *                         All rights reserved.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This file is part of the LAM/MPI software package.  For license
</span><br>
<span class="quotelev1">&gt; * information, see the LICENSE file in the top level directory of the
</span><br>
<span class="quotelev1">&gt; * LAM/MPI source distribution.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * $HEADER$
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * $Id: cpi.c,v 1.4 2002/11/23 04:06:58 jsquyres Exp $
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Portions taken from the MPICH distribution example cpi.c.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Example program to calculate the value of pi by integrating f(x) =
</span><br>
<span class="quotelev1">&gt; * 4 / (1 + x^2).
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Constant for how many values we'll estimate */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define NUM_ITERS 1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Prototype the function that we'll use below. */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static double f(double);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int iter, rank, size, i;
</span><br>
<span class="quotelev1">&gt;  double PI25DT = 3.141592653589793238462643;
</span><br>
<span class="quotelev1">&gt;  double mypi, pi, h, sum, x;
</span><br>
<span class="quotelev1">&gt;  double startwtime = 0.0, endwtime;
</span><br>
<span class="quotelev1">&gt;  int namelen;
</span><br>
<span class="quotelev1">&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;  pid_t pid;
</span><br>
<span class="quotelev1">&gt;  pid = getpid();
</span><br>
<span class="quotelev1">&gt;  char foo[200];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* Normal MPI startup */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*  if(rank == 7){ */
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
</span><br>
<span class="quotelev1">&gt;  /* system(&quot;set&quot;); */
</span><br>
<span class="quotelev1">&gt; /*  sprintf(foo,&quot;%s %d&quot;,&quot;/tools/linux/bin/cpu -o -p &quot;,pid);
</span><br>
<span class="quotelev1">&gt;  system(foo); */ /*  } */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* Do approximations for 1 to 100 points */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* sleep(5); */
</span><br>
<span class="quotelev1">&gt;  for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
</span><br>
<span class="quotelev1">&gt;    h = 1.0 / (double) iter;
</span><br>
<span class="quotelev1">&gt;    sum = 0.0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    /* A slightly better approach starts from large i and works back */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (rank == 0)
</span><br>
<span class="quotelev1">&gt;      startwtime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for (i = rank + 1; i &lt;= iter; i += size) {
</span><br>
<span class="quotelev1">&gt;      x = h * ((double) i - 0.5);
</span><br>
<span class="quotelev1">&gt;      sum += f(x);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    mypi = h * sum;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; /*    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;     MPI_Reduce(MPI_IN_PLACE, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;     MPI_Reduce(&amp;mypi, NULL, 1, MPI_DOUBLE, MPI_SUM, 0,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    } */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
</span><br>
<span class="quotelev1">&gt;             iter, pi, fabs(pi - PI25DT));
</span><br>
<span class="quotelev1">&gt;      endwtime = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;      printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
</span><br>
<span class="quotelev1">&gt;      fflush(stdout);
</span><br>
<span class="quotelev1">&gt;    } */
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /* All done */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static double
</span><br>
<span class="quotelev1">&gt; f(double a)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  return (4.0 / (1.0 + a * a));
</span><br>
<span class="quotelev1">&gt; }  
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A &quot;good&quot; non sm btl run (--mca btl tcp,self --mca opal_event_include  
</span><br>
<span class="quotelev1">&gt; select) gives
</span><br>
<span class="quotelev1">&gt; Process 1 of 8 on r4150_18
</span><br>
<span class="quotelev1">&gt; Process 3 of 8 on r4150_18
</span><br>
<span class="quotelev1">&gt; Process 5 of 8 on r4150_17
</span><br>
<span class="quotelev1">&gt; Process 4 of 8 on r4150_17
</span><br>
<span class="quotelev1">&gt; Process 7 of 8 on r4150_17
</span><br>
<span class="quotelev1">&gt; Process 6 of 8 on r4150_17
</span><br>
<span class="quotelev1">&gt; Process 0 of 8 on r4150_18
</span><br>
<span class="quotelev1">&gt; Process 2 of 8 on r4150_18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A &quot;bad&quot; sm btl run (--mca btl sm,tcp,self --mca opal_event_include  
</span><br>
<span class="quotelev1">&gt; select)
</span><br>
<span class="quotelev1">&gt; When using gdb to attach a non-terminating process shows:
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x000000366d4c78d3 in __select_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002aaaab076546 in select_dispatch (base=0x278bc00,  
</span><br>
<span class="quotelev1">&gt; arg=0x278bb50, tv=0x7fff8bd179a0)
</span><br>
<span class="quotelev1">&gt;    at ../../.././opal/event/select.c:176
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaaab073308 in opal_event_base_loop (base=0x278bc00,  
</span><br>
<span class="quotelev1">&gt; flags=2)
</span><br>
<span class="quotelev1">&gt;    at ../../.././opal/event/event.c:803
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaab073004 in opal_event_loop (flags=2) at ../../.././ 
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:726
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaaab0636a4 in opal_progress () at ../.././opal/runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00002aaaaaaf9c23 in opal_condition_wait (c=0x2aaaaadd7bc0,  
</span><br>
<span class="quotelev1">&gt; m=0x2aaaaadd7c20)
</span><br>
<span class="quotelev1">&gt;    at ../.././opal/threads/condition.h:100
</span><br>
<span class="quotelev1">&gt; #6  0x00002aaaaaafa1bd in ompi_request_default_wait_all (count=1,  
</span><br>
<span class="quotelev1">&gt; requests=0x7fff8bd17b50,
</span><br>
<span class="quotelev1">&gt;    statuses=0x0) at ../.././ompi/request/req_wait.c:262
</span><br>
<span class="quotelev1">&gt; #7  0x00002aaaaf0f913e in ompi_coll_tuned_reduce_generic  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev1">&gt;    recvbuf=0x7fff8bd180c8, original_count=1, datatype=0x6012b0,  
</span><br>
<span class="quotelev1">&gt; op=0x6016a0, root=0,
</span><br>
<span class="quotelev1">&gt;    comm=0x601440, module=0x2832610, tree=0x28331c0,  
</span><br>
<span class="quotelev1">&gt; count_by_segment=1, max_outstanding_reqs=0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:168
</span><br>
<span class="quotelev1">&gt; #8  0x00002aaaaf0f9fcd in ompi_coll_tuned_reduce_intra_binomial  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev1">&gt;    recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0,  
</span><br>
<span class="quotelev1">&gt; root=0, comm=0x601440,
</span><br>
<span class="quotelev1">&gt;    module=0x2832610, segsize=0, max_outstanding_reqs=0)
</span><br>
<span class="quotelev1">&gt;    at ../../../../.././ompi/mca/coll/tuned/coll_tuned_reduce.c:462
</span><br>
<span class="quotelev1">&gt; #9  0x00002aaaaf0ea075 in ompi_coll_tuned_reduce_intra_dec_fixed  
</span><br>
<span class="quotelev1">&gt; (sendbuf=0x7fff8bd180d0,
</span><br>
<span class="quotelev1">&gt;    recvbuf=0x7fff8bd180c8, count=1, datatype=0x6012b0, op=0x6016a0,  
</span><br>
<span class="quotelev1">&gt; root=0, comm=0x601440,
</span><br>
<span class="quotelev1">&gt;    module=0x2832610) at ../../../../.././ompi/mca/coll/tuned/ 
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c:389
</span><br>
<span class="quotelev1">&gt; #10 0x00002aaaaab41348 in PMPI_Reduce (sendbuf=0x7fff8bd180d0,  
</span><br>
<span class="quotelev1">&gt; recvbuf=0x7fff8bd180c8, count=1,
</span><br>
<span class="quotelev1">&gt;    datatype=0x6012b0, op=0x6016a0, root=0, comm=0x601440) at  
</span><br>
<span class="quotelev1">&gt; preduce.c:105
</span><br>
<span class="quotelev1">&gt; #11 0x0000000000400bc4 in main ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal/event/select.c:176 is:
</span><br>
<span class="quotelev1">&gt;        res = select(sop-&gt;event_fds + 1, sop-&gt;event_readset_out,
</span><br>
<span class="quotelev1">&gt;            sop-&gt;event_writeset_out, NULL, tv);
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:803 is:
</span><br>
<span class="quotelev1">&gt;        res = evsel-&gt;dispatch(base, evbase, tv_p);
</span><br>
<span class="quotelev1">&gt; opal/event/event.c:726 is:
</span><br>
<span class="quotelev1">&gt;        return event_base_loop(current_base, flags);
</span><br>
<span class="quotelev1">&gt; opal/runtime/opal_progress.c:189 is:
</span><br>
<span class="quotelev1">&gt;                events += opal_event_loop(opal_progress_event_flag);
</span><br>
<span class="quotelev1">&gt; opal/threads/condition.h:100 is:
</span><br>
<span class="quotelev1">&gt;        while (c-&gt;c_signaled == 0) {
</span><br>
<span class="quotelev1">&gt;            opal_progress(); &lt;----------------------------------100
</span><br>
<span class="quotelev1">&gt;            OPAL_CR_TEST_CHECKPOINT_READY_STALL();
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; ompi/request/req_wait.c:262 is:
</span><br>
<span class="quotelev1">&gt;            while (pending &gt; ompi_request_completed - start) {
</span><br>
<span class="quotelev1">&gt;                opal_condition_wait(&amp;ompi_request_cond,  
</span><br>
<span class="quotelev1">&gt; &amp;ompi_request_lock); &lt;-----262
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll stop at this point.
</span><br>
<span class="quotelev1">&gt; If the default poll is used there's a similar non-terminating loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas at this point?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mostyn
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
<p><p>
<br><p>
<p>
<br><p>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>APPLICATION/PKCS7-SIGNATURE attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6384/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6383.php">Dave Grote: "Re: [OMPI users] memory leak in alltoallw"</a>
<li><strong>In reply to:</strong> <a href="6375.php">George Bosilca: "Re: [OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
<li><strong>Reply:</strong> <a href="6445.php">Rolf Vandevaart: "Re: [OMPI users] Continuous poll/select using btl sm	(svn	1.4a1r18899)"</a>
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
