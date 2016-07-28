<?
$subject_val = "Re: [hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 04:59:42 2011" -->
<!-- isoreceived="20110210095942" -->
<!-- sent="Thu, 10 Feb 2011 10:59:36 +0100" -->
<!-- isosent="20110210095936" -->
<!-- name="Hendryk Bockelmann" -->
<!-- email="bockelmann_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="4D53B708.50202_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110210094055.GA10546_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Hendryk Bockelmann (<em>bockelmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 04:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Samuel,
<br>
<p>thanx for the hint ... now I start my program with:
<br>
<p>&nbsp;&nbsp;&nbsp;hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;&nbsp;hwloc_topology_set_flags(topology,HWLOC_TOPOLOGY_FLAG_WHOLE_SYSTEM);
<br>
&nbsp;&nbsp;&nbsp;hwloc_topology_load(topology);
<br>
<p>and can access all information I need to rebind my MPI-tasks or to 
<br>
rearrange the MPI communicators.
<br>
<p>btw: are there any plans to fully support POWER6 and/or POWER7 running 
<br>
AIX6.1 for the future? Actually we can get the topology right but cache 
<br>
sizes are missing.
<br>
<p>Hendryk
<br>
<p>On 10/02/11 10:40, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hendryk Bockelmann, le Thu 10 Feb 2011 09:08:11 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On our clusters the job scheduler binds the MPI tasks, but it is not
</span><br>
<span class="quotelev2">&gt;&gt; always clear to which resources. So for us it would be great to know
</span><br>
<span class="quotelev2">&gt;&gt; where a task runs such that we might adopt the MPI communicators to
</span><br>
<span class="quotelev2">&gt;&gt; increase performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so get_cpubind should be enough to know what binding the job
</span><br>
<span class="quotelev1">&gt; scheduler does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe just a note on the hwloc output on the cluster: while on my locale
</span><br>
<span class="quotelev2">&gt;&gt; machine all MPI tasks are able to explore the whole topology, on the
</span><br>
<span class="quotelev2">&gt;&gt; cluster each task only sees itself, e.g. for task 7:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7:Machine#0(Backend=AIXOSName=AIXOSRelease=1OSVersion=6HostName=p191Architecture=00C83AC24C00),
</span><br>
<span class="quotelev2">&gt;&gt; cpuset: 0x0000c000
</span><br>
<span class="quotelev2">&gt;&gt; 7:  NUMANode#0, cpuset: 0x0000c000
</span><br>
<span class="quotelev2">&gt;&gt; 7:    L2Cache#0(0KB line=0), cpuset: 0x0000c000
</span><br>
<span class="quotelev2">&gt;&gt; 7:      Core#0, cpuset: 0x0000c000
</span><br>
<span class="quotelev2">&gt;&gt; 7:        PU, cpuset: 0x00004000
</span><br>
<span class="quotelev2">&gt;&gt; 7:        PU#0, cpuset: 0x00008000
</span><br>
<span class="quotelev2">&gt;&gt; 7:--&gt;  root_cpuset of process 7 is 0x0000c000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, because by default hwloc restricts itself to what you are allowed
</span><br>
<span class="quotelev1">&gt; to use anyway. To see more, use --whole-system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nevertheless, all MPI-tasks have different cpusets and since the nodes
</span><br>
<span class="quotelev2">&gt;&gt; are homogeneous one can guess the whole binding using the information of
</span><br>
<span class="quotelev2">&gt;&gt; lstopo and the HostName of each task. Perhaps you can tell me whether
</span><br>
<span class="quotelev2">&gt;&gt; such a restricted topology is due to hwloc or due to the fixed binding
</span><br>
<span class="quotelev2">&gt;&gt; by the job scheduler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's because by default hwloc follows the fixed binding :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0274/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0275.php">Samuel Thibault: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
