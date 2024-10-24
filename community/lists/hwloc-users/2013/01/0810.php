<?
$subject_val = "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 12:56:58 2013" -->
<!-- isoreceived="20130116175658" -->
<!-- sent="Wed, 16 Jan 2013 18:56:52 +0100" -->
<!-- isosent="20130116175652" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074" -->
<!-- id="50F6E9E4.1000902_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1969604909.229016624.1358358561007.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 12:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please send the tarball generated by hwloc-gather-topology in hwloc 1.5
<br>
Thanks
<br>
Brice
<br>
<p><p><p>Le 16/01/2013 18:49, cessenat_at_[hidden] a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately it fails as well.
</span><br>
<span class="quotelev1">&gt; Failure happens when the proc involved is not proc number 0 of the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; Olivier Cessenat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Mail original -----
</span><br>
<span class="quotelev1">&gt; De: &quot;Brice Goglin&quot; &lt;brice.goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#195;&#128;: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;, cessenat_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169;: Mardi 15 Janvier 2013 19:26:30
</span><br>
<span class="quotelev1">&gt; Objet: Re: [hwloc-users] Segmentation fault in collect_proc_cpuset,	topology.c line 1074
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello 
</span><br>
<span class="quotelev1">&gt; Indeed, there's a big cgroup crash in 1.6. Can you verify that 1.6.1rc2 works fine? 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; Brice 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cessenat_at_[hidden] a &#195;&#169;crit : 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When updating from 1.5.1 to 1.6 I get a segfault when inside a 
</span><br>
<span class="quotelev1">&gt; cgroup/cpuset in collect_proc_cpuset, file topology.c line 1074. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that an HWLOC_OBJ_CORE has a son who is it's HWLOC_OBJ_GROUP's father ! 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /proc/self/cgroup 
</span><br>
<span class="quotelev1">&gt; 2: cpuset: /slurm/test 
</span><br>
<span class="quotelev1">&gt; 1: freezer: / 
</span><br>
<span class="quotelev1">&gt; $ lssubsys -m cpuset 
</span><br>
<span class="quotelev1">&gt; cpuset /cgroup/cpuset 
</span><br>
<span class="quotelev1">&gt; $ cat /cgroup/cpuset/slurm/test/cpuset.cpus 
</span><br>
<span class="quotelev1">&gt; 31 
</span><br>
<span class="quotelev1">&gt; $ hwloc-1.6/bis/lstopo 
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped) 
</span><br>
<span class="quotelev1">&gt; $ gdb... 
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault. 
</span><br>
<span class="quotelev1">&gt; #0 0x00007ffd758d225e in collect_proc_cpuset (obj=&lt;value opt out&gt;, sys=0x1f4dba0) at topology.c: 1074 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The machine is made of bullx super-node S6010 (CEA Tera 100). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier Cessenat. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list 
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0811.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
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
