<?
$subject_val = "Re: [OMPI users] Cannot run a job with more than 3 nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 04:01:28 2014" -->
<!-- isoreceived="20140312080128" -->
<!-- sent="Wed, 12 Mar 2014 09:01:18 +0100" -->
<!-- isosent="20140312080118" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run a job with more than 3 nodes" -->
<!-- id="AC8FDE94-C331-4C00-A7EE-86F469588D0E_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJTHAucKLyZisXHnEh7_rHtZ6HvHehscXy=9RU_iDm89NftRiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot run a job with more than 3 nodes<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 04:01:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23809.php">Victor: "[OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 12.03.2014 um 07:37 schrieb Victor:
<br>
<p><span class="quotelev1">&gt; I am using openmpi 1.7.4 on Ubuntu 12.04 x64 and I have a very odd problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 4 nodes, all of which are defined in the hostfile and in /etc/hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can log into each node using ssh and certificate method from the shell that is running the mpi job, by sing their name as defined in /etc/hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run an mpi job if I include only 3 nodes in the hostfile, for example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node3 slots=8 max-slots=8
</span><br>
<p>You are using an uppercase name here by intention - this is the one the host returns by `hostname`? Although it is allowed and should be mangled to lowercase resp. ignored for hostname resolution, I found that not all programs are doing it. Best is to use only lowercase characters is my experience.
<br>
<p>The same version of your Ubuntu Linux is installed on all machines?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; But if I add a fourth node into the hostfile eg:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get this error after attempting mpirun -np 32 --hostfile hostfile a.out:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname Node4: Name or service not known.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, I can log into Node4 using ssh from the same shell by using ssh Node4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also if I mix up the hostfile like this for example and place Node1 to the last spot:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error becomes 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname Node1: Name or service not known.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I then go back to the three node hostfile like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no error with three nodes even though both Node1 and Node4 &quot;cannot be found&quot; if they are present in a 4 node hostfile in the last spot. The last slot seems to be bugged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is going on? How do I fix this?
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
<li><strong>Next message:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23809.php">Victor: "[OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23813.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
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
