<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 14:26:38 2010" -->
<!-- isoreceived="20100104192638" -->
<!-- sent="Mon, 4 Jan 2010 11:26:30 -0800" -->
<!-- isosent="20100104192630" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="00D18773-FA68-4748-96D7-CEFEF1E7939E_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4184F0.3090205_at_math.udel.edu" -->
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
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 14:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
also, you can use -mca btl ^sm which, at least for me, actually gives better performance than does increasing fifos..
<br>
<p>Matt
<br>
<p>On Jan 3, 2010, at 10:04 PM, Louis Rossi wrote:
<br>
<p><span class="quotelev1">&gt; I am having a problem with BCast hanging on a dual quad core Opteron (2382, 2.6GHz, Quad Core, 4 x 512KB L2, 6MB L3 Cache) system running FC11 with openmpi-1.4.  The LD_LIBRARY_PATH and PATH variables are correctly set.  I have used the FC11 rpm distribution of openmpi and built openmpi-1.4 locally with the same results.  The problem was first observed in a larger reliable CFD code, but I can create the problem with a simple demo code (attached).  The code attempts to execute 2000 pairs of broadcasts.
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
<span class="quotelev1">&gt; If I run it with 5 cores or more, it will hang some of the time after successfully executing several hundred broadcasts.  The number varies from run to run.  The code usually finishes with 5 cores.  The probability of hanging seems to increase with the number of nodes.  The syntax I use is simple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -machinefile hostfile -np 5 bcast_example
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was some discussion of a similar problem on the user list, but I could not find a resolution.  I have tried setting the processor affinity (--mca mpi_paffinity_alone 1).  I have tried varying the broadcast algorithm (--mca coll_tuned_bcast_algorithm 1-6).  I have also tried excluding (-mca oob_tcp_if_exclude) my eth1 interface (see ifconfig.txt attached) which is not connected to anything.  None of these changed the outcome.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts or suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &quot;Through nonaction, no action is left undone.&quot; --Lao Tzu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Louis F. Rossi				rossi_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Department of Mathematical Sciences	<a href="http://www.math.udel.edu/~rossi">http://www.math.udel.edu/~rossi</a>
</span><br>
<span class="quotelev1">&gt; University of Delaware			(302) 831-1880 (voice)
</span><br>
<span class="quotelev1">&gt; Newark, DE 19716			(302) 831-4511 (fax)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;bcast_example.c.gz&gt;&lt;ompi_info.txt.gz&gt;&lt;ifconfig.txt.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Previous message:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>In reply to:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
