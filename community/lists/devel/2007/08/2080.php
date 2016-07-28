<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  6 10:02:44 2007" -->
<!-- isoreceived="20070806140244" -->
<!-- sent="Mon, 6 Aug 2007 08:02:28 -0600" -->
<!-- isosent="20070806140228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem with system() call and openib - blocks send/recv" -->
<!-- id="49E50B8C-998C-4A91-9CBD-70147AEF3A12_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46B727D0.4070406_at_princeton.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-06 10:02:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Previous message:</strong> <a href="2079.php">Sven Stork: "[OMPI devel] using google-perftools for hunting memory leaks"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Bill Wichser: "[OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Reply:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bill --
<br>
<p>Check out <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a>.
<br>
<p>To my knowledge, RHEL4 has not yet received a hotfix that will allow  
<br>
fork() with OpenFabrics verbs applications when memory is still  
<br>
registered in the parent.
<br>
<p><p>On Aug 6, 2007, at 7:53 AM, Bill Wichser wrote:
<br>
<p><span class="quotelev1">&gt; We have run across an issue, probably more related to openib than  
</span><br>
<span class="quotelev1">&gt; to openmpi but don't know how to resolve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux kernel - 2.6.9-55.0.2.ELsmp x86_64
</span><br>
<span class="quotelev1">&gt; libibverbs-1.0.4-7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi - it doesn't matter - 1.1.5 and 1.2.3 both fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the sample code is run across IB nodes, using the IB  
</span><br>
<span class="quotelev1">&gt; interface, the receive just hangs whenever a system call is  
</span><br>
<span class="quotelev1">&gt; issued.  Removing this system call removes the hang.  Running  
</span><br>
<span class="quotelev1">&gt; across the nodes over TCP removes the hang.  Running on a single  
</span><br>
<span class="quotelev1">&gt; node removes the hang.  Only when using the IB interface do we have  
</span><br>
<span class="quotelev1">&gt; this hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the simple solution is &quot;don't do this&quot; but apparently something  
</span><br>
<span class="quotelev1">&gt; deeper is involved and who knows where it will pop up again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps - sample code compiled using mpicc, built with gcc.  You'll need  
</span><br>
<span class="quotelev1">&gt; a test.dat file for the system(&quot;cp&quot;) command.
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char All[4840];
</span><br>
<span class="quotelev1">&gt; int ThisTask;
</span><br>
<span class="quotelev1">&gt; int NTask;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int task;
</span><br>
<span class="quotelev1">&gt;   int nothing;
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   int errorFlag = 0;
</span><br>
<span class="quotelev1">&gt;   int sysstatus;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;ThisTask);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;NTask);
</span><br>
<span class="quotelev1">&gt; #if 1
</span><br>
<span class="quotelev1">&gt;   if(ThisTask == 0) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Task %d cmd run\n&quot;, ThisTask);
</span><br>
<span class="quotelev1">&gt;       sysstatus = system(
</span><br>
<span class="quotelev1">&gt;         &quot;cp test.dat test2.dat&quot;);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;Task %d cmd status %d\n&quot;, ThisTask, sysstatus);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;   if (ThisTask == 0) {
</span><br>
<span class="quotelev1">&gt;      sleep(60);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (ThisTask == 0) {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Task 0 Wait Loop START\n&quot;);
</span><br>
<span class="quotelev1">&gt;     for (task = 1; task &lt; NTask; task++) {
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Task %d Recv START\n&quot;, task);
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(&amp;nothing, sizeof(nothing), MPI_BYTE, task, 0,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                 &amp;status);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Task %d Recv END\n&quot;, task);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Task 0 Wait Loop END\n&quot;);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else {
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Task %d Send START\n&quot;, ThisTask);
</span><br>
<span class="quotelev1">&gt;     MPI_Send(&amp;nothing, sizeof(nothing), MPI_BYTE, 0, 0,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Task %d Send END\n&quot;, ThisTask);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Task %d Finalize START\n&quot;, ThisTask);
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();		/* clean up &amp; finalize MPI */
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Task %d Finalize END\n&quot;, ThisTask);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2081.php">Gleb Natapov: "Re: [OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<li><strong>Previous message:</strong> <a href="2079.php">Sven Stork: "[OMPI devel] using google-perftools for hunting memory leaks"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Bill Wichser: "[OMPI devel] problem with system() call and openib - blocks send/recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
<li><strong>Reply:</strong> <a href="2082.php">Bill Wichser: "Re: [OMPI devel] problem with system() call and openib - blocks	send/recv"</a>
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
