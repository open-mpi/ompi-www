<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 11:34:23 2011" -->
<!-- isoreceived="20110705153423" -->
<!-- sent="Tue, 5 Jul 2011 09:34:12 -0600" -->
<!-- isosent="20110705153412" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="199FBD6C-7015-405A-83EF-EF20A5E31E1A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E12F251.450.229D3F46_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 11:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16822.php">Rodrigo Oliveira: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>In reply to:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me get this straight. You are executing mpirun from inside a c-shell script, launching onto nodes where you will by default be running bash. The param I gave you should support that mode - it basically tells OMPI to probe the remote node to discover what shell it will run under there, and then formats the orted cmd line accordingly. If that isn't working (and it almost never gets used, so may have bit-rotted), then your only option is to convert the c-shell to bash.
<br>
<p>However, you are saying that the app you are asking us to run is a c-shell script??? Have you included the !/bin/csh directive in the top of that file so the system will automatically exec it using csh?
<br>
<p>Note that the orted comes alive and running prior to your &quot;app&quot; being executed, so the fact that your &quot;app&quot; is a c-shell script is irrelevant.
<br>
<p><p>On Jul 5, 2011, at 9:15 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph.
</span><br>
<span class="quotelev1">&gt; Your information is very deep and detailed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried with your suggestion to set &quot;&quot;-mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_assume_same_shell 0&quot;, it still does not work though. My 
</span><br>
<span class="quotelev1">&gt; situation is that we start a c-shell script from bash shell, which in 
</span><br>
<span class="quotelev1">&gt; turn invokes mpirun to other slave nodes. These slave nodes have 
</span><br>
<span class="quotelev1">&gt; bash login shell by default, and mpirun will execute another c-shell 
</span><br>
<span class="quotelev1">&gt; script on each node, will these mess thing up a little bit and related 
</span><br>
<span class="quotelev1">&gt; to the orted missing message?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2011, at 3:52 PM, yanyg_at_[hidden] wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked a little deeper into this. I keep forgetting that we changed 
</span><br>
<span class="quotelev1">&gt; our default settings a few years ago. In the dim past, OMPI would 
</span><br>
<span class="quotelev1">&gt; always probe the remote node to find out what shell it was using, 
</span><br>
<span class="quotelev1">&gt; and then use the proper command syntax for that shell. However, 
</span><br>
<span class="quotelev1">&gt; people complained about the extra time during launch, and very 
</span><br>
<span class="quotelev1">&gt; very few people actually used mis-matched shells.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we changed the setting the other way to default to assuming the 
</span><br>
<span class="quotelev1">&gt; remote shell is the same as the local one. For those like yourself 
</span><br>
<span class="quotelev1">&gt; that actually do have a mismatch, we left a parameter you can set 
</span><br>
<span class="quotelev1">&gt; to override that assumption. Just add &quot;-mca 
</span><br>
<span class="quotelev1">&gt; plm_rsh_assume_same_shell 0&quot; to your mpirun cmd line and it 
</span><br>
<span class="quotelev1">&gt; should resolve the problem. 
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
<li><strong>Next message:</strong> <a href="16822.php">Rodrigo Oliveira: "Re: [OMPI users] Problems with Mpi Accept - ORTE_ERROR_LOG"</a>
<li><strong>Previous message:</strong> <a href="16820.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>In reply to:</strong> <a href="16818.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16855.php">yanyg_at_[hidden]: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
