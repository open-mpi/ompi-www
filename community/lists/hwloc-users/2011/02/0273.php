<?
$subject_val = "Re: [hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 04:41:01 2011" -->
<!-- isoreceived="20110210094101" -->
<!-- sent="Thu, 10 Feb 2011 10:40:55 +0100" -->
<!-- isosent="20110210094055" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="20110210094055.GA10546_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1849536018.162.1297325291605.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Problem getting cpuset of MPI task<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 04:40:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe in reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Hendryk Bockelmann, le Thu 10 Feb 2011 09:08:11 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On our clusters the job scheduler binds the MPI tasks, but it is not 
</span><br>
<span class="quotelev1">&gt; always clear to which resources. So for us it would be great to know 
</span><br>
<span class="quotelev1">&gt; where a task runs such that we might adopt the MPI communicators to 
</span><br>
<span class="quotelev1">&gt; increase performance.
</span><br>
<p>Ok, so get_cpubind should be enough to know what binding the job
<br>
scheduler does.
<br>
<p><span class="quotelev1">&gt; Maybe just a note on the hwloc output on the cluster: while on my locale 
</span><br>
<span class="quotelev1">&gt; machine all MPI tasks are able to explore the whole topology, on the 
</span><br>
<span class="quotelev1">&gt; cluster each task only sees itself, e.g. for task 7:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 7:Machine#0(Backend=AIXOSName=AIXOSRelease=1OSVersion=6HostName=p191Architecture=00C83AC24C00), 
</span><br>
<span class="quotelev1">&gt; cpuset: 0x0000c000
</span><br>
<span class="quotelev1">&gt; 7:  NUMANode#0, cpuset: 0x0000c000
</span><br>
<span class="quotelev1">&gt; 7:    L2Cache#0(0KB line=0), cpuset: 0x0000c000
</span><br>
<span class="quotelev1">&gt; 7:      Core#0, cpuset: 0x0000c000
</span><br>
<span class="quotelev1">&gt; 7:        PU, cpuset: 0x00004000
</span><br>
<span class="quotelev1">&gt; 7:        PU#0, cpuset: 0x00008000
</span><br>
<span class="quotelev1">&gt; 7:--&gt; root_cpuset of process 7 is 0x0000c000
</span><br>
<p>Yes, because by default hwloc restricts itself to what you are allowed
<br>
to use anyway. To see more, use --whole-system.
<br>
<p><span class="quotelev1">&gt; Nevertheless, all MPI-tasks have different cpusets and since the nodes 
</span><br>
<span class="quotelev1">&gt; are homogeneous one can guess the whole binding using the information of 
</span><br>
<span class="quotelev1">&gt; lstopo and the HostName of each task. Perhaps you can tell me whether 
</span><br>
<span class="quotelev1">&gt; such a restricted topology is due to hwloc or due to the fixed binding 
</span><br>
<span class="quotelev1">&gt; by the job scheduler?
</span><br>
<p>It's because by default hwloc follows the fixed binding :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0272.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe in reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Reply:</strong> <a href="0274.php">Hendryk Bockelmann: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
