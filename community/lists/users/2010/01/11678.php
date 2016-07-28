<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 05:17:38 2010" -->
<!-- isoreceived="20100104101738" -->
<!-- sent="Mon, 4 Jan 2010 12:17:33 +0200" -->
<!-- isosent="20100104101733" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="453d39991001040217r406de588j2bed8413ee8ae56f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B418964.9000402_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dual quad core Opteron hangs on Bcast.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 05:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11677.php">Andreas Kn&#252;pfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
have you tried IMB benchmark with Bcast,
<br>
I think the problem is in the app.
<br>
All ranks in the communicator should enter Bcast,
<br>
since you have
<br>
if (rank==0)
<br>
else state, not all of them enters the same flow.
<br>
&nbsp;&nbsp;if (iRank == 0)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;iLength = sizeof (acMessage);
<br>
&nbsp;&nbsp;MPI_Bcast (&amp;iLength, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Bcast (acMessage, iLength, MPI_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf (&quot;Process 0: Message sent\n&quot;);
<br>
&nbsp;}
<br>
&nbsp;&nbsp;else
<br>
&nbsp;{
<br>
&nbsp;&nbsp;MPI_Bcast (&amp;iLength, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;pMessage = (char *) malloc (iLength);
<br>
&nbsp;&nbsp;MPI_Bcast (pMessage, iLength, MPI_CHAR, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;printf (&quot;Process %d: %s\n&quot;, iRank, pMessage);
<br>
&nbsp;}
<br>
<p>Lenny.
<br>
<p>On Mon, Jan 4, 2010 at 8:23 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  If you're willing to try some stuff:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) What about &quot;-mca coll_sync_barrier_before 100&quot;?  (The default may be
</span><br>
<span class="quotelev1">&gt; 1000.  So, you can try various values less than 1000.  I'm suggesting 100.)
</span><br>
<span class="quotelev1">&gt; Note that broadcast has somewhat one-way traffic flow, which can have some
</span><br>
<span class="quotelev1">&gt; undesirable flow control issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) What about &quot;-mca btl_sm_num_fifos 16&quot;?  Default is 1.  If the problem is
</span><br>
<span class="quotelev1">&gt; trac ticket 2043, then this suggestion can help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.  There's a memory leak, right?  The receive buffer is being allocated
</span><br>
<span class="quotelev1">&gt; over and over again.  Might not be that closely related to the problem you
</span><br>
<span class="quotelev1">&gt; see here, but at a minimum it's bad style.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Louis Rossi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am having a problem with BCast hanging on a dual quad core Opteron (2382,
</span><br>
<span class="quotelev1">&gt; 2.6GHz, Quad Core, 4 x 512KB L2, 6MB L3 Cache) system running FC11 with
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.  The LD_LIBRARY_PATH and PATH variables are correctly set.  I
</span><br>
<span class="quotelev1">&gt; have used the FC11 rpm distribution of openmpi and built openmpi-1.4 locally
</span><br>
<span class="quotelev1">&gt; with the same results.  The problem was first observed in a larger reliable
</span><br>
<span class="quotelev1">&gt; CFD code, but I can create the problem with a simple demo code (attached).
</span><br>
<span class="quotelev1">&gt; The code attempts to execute 2000 pairs of broadcasts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hostfile contains a single line
</span><br>
<span class="quotelev1">&gt; &lt;machinename&gt; slots=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run it with 4 cores or fewer, the code will run fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run it with 5 cores or more, it will hang some of the time after
</span><br>
<span class="quotelev1">&gt; successfully executing several hundred broadcasts.  The number varies from
</span><br>
<span class="quotelev1">&gt; run to run.  The code usually finishes with 5 cores.  The probability of
</span><br>
<span class="quotelev1">&gt; hanging seems to increase with the number of nodes.  The syntax I use is
</span><br>
<span class="quotelev1">&gt; simple.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -machinefile hostfile -np 5 bcast_example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was some discussion of a similar problem on the user list, but I
</span><br>
<span class="quotelev1">&gt; could not find a resolution.  I have tried setting the processor affinity
</span><br>
<span class="quotelev1">&gt; (--mca mpi_paffinity_alone 1).  I have tried varying the broadcast algorithm
</span><br>
<span class="quotelev1">&gt; (--mca coll_tuned_bcast_algorithm 1-6).  I have also tried excluding (-mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_exclude) my eth1 interface (see ifconfig.txt attached) which is
</span><br>
<span class="quotelev1">&gt; not connected to anything.  None of these changed the outcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts or suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11677.php">Andreas Kn&#252;pfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>In reply to:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Reply:</strong> <a href="11679.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
