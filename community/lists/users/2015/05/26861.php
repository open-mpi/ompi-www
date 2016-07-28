<?
$subject_val = "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 11:03:01 2015" -->
<!-- isoreceived="20150513150301" -->
<!-- sent="Wed, 13 May 2015 08:02:56 -0700" -->
<!-- isosent="20150513150256" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="26ACAE6F-E77B-42F4-AE1B-B54C2BB6B164_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEB3Xu7R9C1Ce0c7-OZY-anbxPiYKAZKDb+0mdW5F9AjFtxugw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-13 11:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26862.php">Damien: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, so we see two nodes have been allocated:
<br>
<p>1. JARVICENAE27 - appears to be the node where mpirun is running
<br>
<p>2. 10.3.0.176
<br>
<p>Does that match what you expected?
<br>
<p>If you cannot ssh (without a password) between machines, then we will not be able to run.
<br>
<p><p><span class="quotelev1">&gt; On May 13, 2015, at 12:21 AM, Rahul Yadav &lt;roborahul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get following output with verbose
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: registering ras components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded component loadleveler
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component loadleveler register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded component simulator
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component simulator register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component loadleveler
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: component loadleveler open function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component simulator
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component [loadleveler]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component [simulator]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component [simulator]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) No component selected!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        JARVICENAE27: slots=1 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;        10.3.0.176 &lt;<a href="http://10.3.0.176/">http://10.3.0.176/</a>&gt;: slots=1 max_slots=0 slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I am not able to ssh to other machine from one machine in chroot environment. Can that be a problem ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, May 7, 2015 at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Try adding &#226;&#128;&#148;mca ras_base_verbose 10 to your cmd line and let&#226;&#128;&#153;s see what it thinks it is doing. Which OMPI version are you using - master?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2015, at 11:24 PM, Rahul Yadav &lt;roborahul_at_[hidden] &lt;mailto:roborahul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have been trying to run MPI jobs (consisting of two different binaries, one each ) in two nodes,  using hostfile option as following
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1 /root/app2 : -n 1 --hostfile /root/host2 /root/backend
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are doing this in chroot environment. We have set the HPCX env in chroot'ed environment itself. /root/host1 and /root/host2 (inside chroot env) contains IPs of two nodes respectively.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are getting following error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot; all nodes which are allocated for this job are already filled &quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However when we use chroot but don't use hostfile option (both processes run in same node) OR we use hostfile option but outside chroot, it works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone has any idea if chroot can cause above error and how to solve it ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Rahul
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26847.php">http://www.open-mpi.org/community/lists/users/2015/05/26847.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26847.php">http://www.open-mpi.org/community/lists/users/2015/05/26847.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26860.php">http://www.open-mpi.org/community/lists/users/2015/05/26860.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26862.php">Damien: "Re: [OMPI users] OpenMPI on Windows without Cygwin"</a>
<li><strong>Previous message:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="26860.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
