<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 14 12:54:55 2006" -->
<!-- isoreceived="20060314175455" -->
<!-- sent="Tue, 14 Mar 2006 11:54:53 -0600" -->
<!-- isosent="20060314175453" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] comm_join and singleton init" -->
<!-- id="4417036D.2040003_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060314170551.GN27806_at_mcs.anl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-14 12:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
could you provide me a simple testcode for that? Comm_join and 
<br>
intercomm_merge should work, I would have a look at that...
<br>
<p>(separate answer to your second email is coming soon)
<br>
Thanks
<br>
Edgar
<br>
<p>Robert Latham wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got a bit of an odd bug here.  I've been playing around with MPI
</span><br>
<span class="quotelev1">&gt; process management routines and I notied the following behavior with
</span><br>
<span class="quotelev1">&gt; openmpi-1.0.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two processes (a and b), linked with ompi, but started independently
</span><br>
<span class="quotelev1">&gt; (no mpiexec, just started the programs directly).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - a and b: call MPI_Init
</span><br>
<span class="quotelev1">&gt; - a: open a unix network socket on 'fd'
</span><br>
<span class="quotelev1">&gt; - b: connect to a's socket
</span><br>
<span class="quotelev1">&gt; - a and b: call MPI_Comm_join over 'fd'
</span><br>
<span class="quotelev1">&gt; - a and b: call MPI_Intercomm_merge, get intracommunicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These steps all work fine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the odd part: a and b call MPI_Comm_rank and MPI_Comm_size over
</span><br>
<span class="quotelev1">&gt; the intracommunicator.  Both (correctly) think Comm_size is two, but
</span><br>
<span class="quotelev1">&gt; both also think (incorrectly) that they are rank 1.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Edgar Gabriel: "Re: [OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Robert Latham: "[OMPI users] MPI_Comm_connect and singleton init"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Robert Latham: "[OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Reply:</strong> <a href="0856.php">Edgar Gabriel: "Re: [OMPI users] comm_join and singleton init"</a>
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
