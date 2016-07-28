<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 12:25:24 2007" -->
<!-- isoreceived="20070817162524" -->
<!-- sent="Fri, 17 Aug 2007 12:25:17 -0400" -->
<!-- isosent="20070817162517" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process termination problem" -->
<!-- id="6E431B82-DA8B-40E0-A652-900F45004AC8_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.tw5tk5aghvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 12:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3880.php">Brock Palen: "[OMPI users] fortran + pgi +pgi memory issues"</a>
<li><strong>Previous message:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<li><strong>In reply to:</strong> <a href="3874.php">Daniel Sp&#229;ngberg: "[OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3882.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3882.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard state that the correct way to abort/kill an MPI  
<br>
application is using the MPI_Abort function. Except, if you're doing  
<br>
some kind of fault tolerance stuff, there is no reason to end one of  
<br>
your MPI processes via exit.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2007, at 12:04 PM, Daniel Sp&#229;ngberg wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI user list members,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently having a user with an application where one of the
</span><br>
<span class="quotelev1">&gt; MPI-processes die, but the openmpi-system does not kill the rest of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the mpirun man page states the following I would expect it to  
</span><br>
<span class="quotelev1">&gt; take
</span><br>
<span class="quotelev1">&gt; care of killing the application if a process exits without calling
</span><br>
<span class="quotelev1">&gt; MPI_Finalize:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Process Termination / Signal Handling
</span><br>
<span class="quotelev1">&gt;         During  the run of an MPI application, if any rank dies  
</span><br>
<span class="quotelev1">&gt; abnormally
</span><br>
<span class="quotelev1">&gt; (either exiting before invoking MPI_FINALIZE, or dying as the
</span><br>
<span class="quotelev1">&gt;         result of a signal), mpirun will print out an error message  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; kill the rest of the MPI application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following test program demonstrates the behaviour (program  
</span><br>
<span class="quotelev1">&gt; hangs until
</span><br>
<span class="quotelev1">&gt; it is killed by the user or batch system):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define RANK_DEATH 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    sleep(10);
</span><br>
<span class="quotelev1">&gt;    if (rank==RANK_DEATH)
</span><br>
<span class="quotelev1">&gt;      exit(1);
</span><br>
<span class="quotelev1">&gt;    sleep(10);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested this on openmpi 1.2.1 as well as the latest stable  
</span><br>
<span class="quotelev1">&gt; 1.2.3. I
</span><br>
<span class="quotelev1">&gt; am on Linux x86_64.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a bug, or are there some flags I can use to force the  
</span><br>
<span class="quotelev1">&gt; mpirun (or
</span><br>
<span class="quotelev1">&gt; orted, or...) to kill the whole MPI program when this happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If one of the application processes die from a signal (I have  
</span><br>
<span class="quotelev1">&gt; tested SEGV
</span><br>
<span class="quotelev1">&gt; and FPE) rather than just exiting the whole application is indeed  
</span><br>
<span class="quotelev1">&gt; killed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3880.php">Brock Palen: "[OMPI users] fortran + pgi +pgi memory issues"</a>
<li><strong>Previous message:</strong> <a href="3878.php">Brock Palen: "[OMPI users] sepran package dead lock"</a>
<li><strong>In reply to:</strong> <a href="3874.php">Daniel Sp&#229;ngberg: "[OMPI users] Process termination problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3882.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3882.php">Daniel Spångberg: "Re: [OMPI users] Process termination problem"</a>
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
