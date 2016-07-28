<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 12:25:25 2007" -->
<!-- isoreceived="20070830162525" -->
<!-- sent="Thu, 30 Aug 2007 12:25:16 -0400" -->
<!-- isosent="20070830162516" -->
<!-- name="Terry.Dontje_at_[hidden]" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="46D6EF6C.5090805_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1188488571.7923.90.camel_at_exponential.lanl.gov" -->
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
<strong>From:</strong> <a href="mailto:Terry.Dontje_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20SM%20BTL%20hang%20issue"><em>Terry.Dontje_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-08-30 12:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Li-Ta Lo wrote:
<br>
<p><span class="quotelev1">&gt;On Wed, 2007-08-29 at 14:06 -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;hmmm, interesting since my version doesn't abort at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some problem with fortran compiler/language binding? My C translation 
</span><br>
<span class="quotelev1">&gt;doesn't have any problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[ollie_at_exponential ~]$ mpirun -np 4 a.out 10
</span><br>
<span class="quotelev1">&gt;Target duration (seconds): 10.000000, #of msgs: 50331, usec per msg:
</span><br>
<span class="quotelev1">&gt;198.684707
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Did you oversubscribe?  I found np=10 on a 8 core system clogged things 
<br>
up sufficiently.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt;Ollie
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;    double duration = 10, endtime;
</span><br>
<span class="quotelev1">&gt;    long nmsgs = 1;
</span><br>
<span class="quotelev1">&gt;    int keep_going = 1, rank, size;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    if (size == 1) {
</span><br>
<span class="quotelev1">&gt;	fprintf(stderr, &quot;Need at least 2 processes\n&quot;);
</span><br>
<span class="quotelev1">&gt;    } else if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;	duration = strtod(argv[1], NULL);
</span><br>
<span class="quotelev1">&gt;	endtime = MPI_Wtime() + duration;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	do {
</span><br>
<span class="quotelev1">&gt;	    MPI_Send(&amp;keep_going, 1, MPI_INT, 1, 0x11, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;	    nmsgs += 1;
</span><br>
<span class="quotelev1">&gt;	} while (MPI_Wtime() &lt; endtime);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	keep_going = 0;
</span><br>
<span class="quotelev1">&gt;	MPI_Send(&amp;keep_going, 1, MPI_INT, 1, 0x11, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	fprintf(stderr, &quot;Target duration (seconds): %f, #of msgs: %d, usec per msg: %f\n&quot;,
</span><br>
<span class="quotelev1">&gt;		duration, nmsgs, 1.0e6*duration/nmsgs);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;	do {
</span><br>
<span class="quotelev1">&gt;	    MPI_Recv(&amp;keep_going, 1, MPI_INT, rank-1, 0x11, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	    if (rank == (size-1))
</span><br>
<span class="quotelev1">&gt;		continue;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	    MPI_Send(&amp;keep_going, 1, MPI_INT, rank+1, 0x11, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;	} while (keep_going);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2272.php">Andrew Friedley: "Re: [OMPI devel] UD BTL alltoall hangs"</a>
<li><strong>In reply to:</strong> <a href="2271.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Reply:</strong> <a href="2274.php">Li-Ta Lo: "Re: [OMPI devel] SM BTL hang issue"</a>
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
