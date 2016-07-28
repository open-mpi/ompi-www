<?
$subject_val = "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 13 03:21:11 2015" -->
<!-- isoreceived="20150513072111" -->
<!-- sent="Wed, 13 May 2015 00:21:08 -0700" -->
<!-- isosent="20150513072108" -->
<!-- name="Rahul Yadav" -->
<!-- email="roborahul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="CAEB3Xu7R9C1Ce0c7-OZY-anbxPiYKAZKDb+0mdW5F9AjFtxugw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FC3FDE45-542B-4DF4-8CE6-1A950BC26FF1_at_open-mpi.org" -->
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
<strong>From:</strong> Rahul Yadav (<em>roborahul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-13 03:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get following output with verbose
<br>
<p>[JARVICENAE27:00654] mca: base: components_register: registering ras
<br>
components
<br>
[JARVICENAE27:00654] mca: base: components_register: found loaded component
<br>
loadleveler
<br>
[JARVICENAE27:00654] mca: base: components_register: component loadleveler
<br>
register function successful
<br>
[JARVICENAE27:00654] mca: base: components_register: found loaded component
<br>
simulator
<br>
[JARVICENAE27:00654] mca: base: components_register: component simulator
<br>
register function successful
<br>
[JARVICENAE27:00654] mca: base: components_register: found loaded component
<br>
slurm
<br>
[JARVICENAE27:00654] mca: base: components_register: component slurm
<br>
register function successful
<br>
[JARVICENAE27:00654] mca: base: components_open: opening ras components
<br>
[JARVICENAE27:00654] mca: base: components_open: found loaded component
<br>
loadleveler
<br>
[JARVICENAE27:00654] mca: base: components_open: component loadleveler open
<br>
function successful
<br>
[JARVICENAE27:00654] mca: base: components_open: found loaded component
<br>
simulator
<br>
[JARVICENAE27:00654] mca: base: components_open: found loaded component
<br>
slurm
<br>
[JARVICENAE27:00654] mca: base: components_open: component slurm open
<br>
function successful
<br>
[JARVICENAE27:00654] mca:base:select: Auto-selecting ras components
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Querying component
<br>
[loadleveler]
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
<br>
[loadleveler]. Query failed to return a module
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Querying component [simulator]
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
<br>
[simulator]. Query failed to return a module
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Querying component [slurm]
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) Skipping component [slurm].
<br>
Query failed to return a module
<br>
[JARVICENAE27:00654] mca:base:select:(  ras) No component selected!
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JARVICENAE27: slots=1 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.3.0.176: slots=1 max_slots=0 slots_inuse=0 state=UNKNOWN
<br>
<p>Also, I am not able to ssh to other machine from one machine in chroot
<br>
environment. Can that be a problem ?
<br>
<p>Thanks
<br>
Rahul
<br>
<p>On Thu, May 7, 2015 at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try adding &#226;&#128;&#148;mca ras_base_verbose 10 to your cmd line and let&#226;&#128;&#153;s see what it
</span><br>
<span class="quotelev1">&gt; thinks it is doing. Which OMPI version are you using - master?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 6, 2015, at 11:24 PM, Rahul Yadav &lt;roborahul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been trying to run MPI jobs (consisting of two different binaries,
</span><br>
<span class="quotelev1">&gt; one each ) in two nodes,  using hostfile option as following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1
</span><br>
<span class="quotelev1">&gt; /root/app2 : -n 1 --hostfile /root/host2 /root/backend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are doing this in chroot environment. We have set the HPCX env in
</span><br>
<span class="quotelev1">&gt; chroot'ed environment itself. /root/host1 and /root/host2 (inside chroot
</span><br>
<span class="quotelev1">&gt; env) contains IPs of two nodes respectively.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are getting following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot; all nodes which are allocated for this job are already filled &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However when we use chroot but don't use hostfile option (both processes
</span><br>
<span class="quotelev1">&gt; run in same node) OR we use hostfile option but outside chroot, it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone has any idea if chroot can cause above error and how to solve it ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26847.php">http://www.open-mpi.org/community/lists/users/2015/05/26847.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26859.php">Chaitra Kumar: "Re: [OMPI users] libnuma with openmpi"</a>
<li><strong>In reply to:</strong> <a href="26847.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
