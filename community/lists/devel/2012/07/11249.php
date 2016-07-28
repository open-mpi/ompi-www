<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  non-blocking barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 11:06:18 2012" -->
<!-- isoreceived="20120706150618" -->
<!-- sent="Fri, 6 Jul 2012 15:05:55 +0000" -->
<!-- isosent="20120706150555" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  non-blocking barrier" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD23920200_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3D8F945A4E59E644AE9205E5CD3708E5057641CD_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  non-blocking barrier<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 11:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11247.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, there was a bug in the code.  Fixed now.
<br>
<p>Brian
<br>
<p>On 7/6/12 10:47 AM, &quot;Richard Graham&quot; &lt;richardg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Forget what I just posted - I looked at George's words, and not the code
</span><br>
<span class="quotelev1">&gt;- wait() is the synchronization point, so George's response is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;Behalf Of George Bosilca
</span><br>
<span class="quotelev1">&gt;Sent: Friday, July 06, 2012 2:48 AM
</span><br>
<span class="quotelev1">&gt;To: eugene.loh_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Cc: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] non-blocking barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;No, it is not right. With the ibarrier usage you're making below, the
</span><br>
<span class="quotelev1">&gt;output should be similar to the first case (all should leave at earlist
</span><br>
<span class="quotelev1">&gt;at 6.0). The ibarrier is still a synchronizing point, all processes MUST
</span><br>
<span class="quotelev1">&gt;reach it before anyone is allowed to leave.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;However, if you move the ibarrier on proc &lt; 2 before the sleep, the
</span><br>
<span class="quotelev1">&gt;output you got become possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 6, 2012, at 7:53, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either there is a problem with MPI_Ibarrier or I don't understand the
</span><br>
<span class="quotelev2">&gt;&gt;semantics.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The following example is with openmpi-1.9a1r26747.  (Thanks for the fix
</span><br>
<span class="quotelev2">&gt;&gt;in 26757.  I tried with that as well with same results.)  I get similar
</span><br>
<span class="quotelev2">&gt;&gt;results for different OSes, compilers, bitness, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; % cat ibarrier.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev2">&gt;&gt;    int i, me;
</span><br>
<span class="quotelev2">&gt;&gt;    double t0, t1, t2;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Request req;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    t0 = MPI_Wtime();              /* set &quot;time zero&quot; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if ( me &lt; 2 ) sleep(3);        /* two processes delay before hitting
</span><br>
<span class="quotelev2">&gt;&gt;barrier */
</span><br>
<span class="quotelev2">&gt;&gt;    t1 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;    t2 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    if ( me &lt; 2 ) sleep(3);        /* two processes delay before hitting
</span><br>
<span class="quotelev2">&gt;&gt;barrier */
</span><br>
<span class="quotelev2">&gt;&gt;    t1 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Ibarrier(MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Wait(&amp;req, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;    t2 = MPI_Wtime() - t0;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot;%d entered at %3.1lf and exited at %3.1lf\n&quot;, me, t1, t2);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;    return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -n 4 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 0 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 1 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 2 entered at 0.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 3 entered at 0.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 0 entered at 6.0 and exited at 6.0
</span><br>
<span class="quotelev2">&gt;&gt; 1 entered at 6.0 and exited at 6.0
</span><br>
<span class="quotelev2">&gt;&gt; 2 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 3 entered at 3.0 and exited at 3.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With the first barrier, no one leaves until the last process has
</span><br>
<span class="quotelev2">&gt;&gt;entered.  With the non-blocking barrier, two processes enter and leave
</span><br>
<span class="quotelev2">&gt;&gt;before the two laggards arrive at the barrier.  Is that right?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11250.php">Fluder, Eugene: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11248.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11247.php">Richard Graham: "Re: [OMPI devel] non-blocking barrier"</a>
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
