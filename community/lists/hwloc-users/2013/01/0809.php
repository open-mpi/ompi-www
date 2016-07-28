<?
$subject_val = "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 12:49:33 2013" -->
<!-- isoreceived="20130116174933" -->
<!-- sent="Wed, 16 Jan 2013 18:49:21 +0100 (CET)" -->
<!-- isosent="20130116174921" -->
<!-- name="cessenat_at_[hidden]" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074" -->
<!-- id="1969604909.229016624.1358358561007.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="d4bd3967-8549-4cf4-b47b-c9c8a8059424_at_email.android.com" -->
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
<strong>From:</strong> <a href="mailto:cessenat_at_[hidden]?Subject=Re:%20[hwloc-users]%20Segmentation%20fault%20in%20collect_proc_cpuset,%20topology.c%20line%201074"><em>cessenat_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-01-16 12:49:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Unfortunately it fails as well.
<br>
Failure happens when the proc involved is not proc number 0 of the node.
<br>
<p>Cheers
<br>
Olivier Cessenat.
<br>
<p>----- Mail original -----
<br>
De: &quot;Brice Goglin&quot; &lt;brice.goglin_at_[hidden]&gt;
<br>
&#195;&#128;: &quot;Hardware locality user list&quot; &lt;hwloc-users_at_[hidden]&gt;, cessenat_at_[hidden]
<br>
Envoy&#195;&#169;: Mardi 15 Janvier 2013 19:26:30
<br>
Objet: Re: [hwloc-users] Segmentation fault in collect_proc_cpuset,	topology.c line 1074
<br>
<p>Hello 
<br>
Indeed, there's a big cgroup crash in 1.6. Can you verify that 1.6.1rc2 works fine? 
<br>
Thanks 
<br>
Brice 
<br>
<p><p><p><p>cessenat_at_[hidden] a &#195;&#169;crit : 
<br>
<p>Hello, 
<br>
<p>When updating from 1.5.1 to 1.6 I get a segfault when inside a 
<br>
cgroup/cpuset in collect_proc_cpuset, file topology.c line 1074. 
<br>
<p>It appears that an HWLOC_OBJ_CORE has a son who is it's HWLOC_OBJ_GROUP's father ! 
<br>
<p>$ cat /proc/self/cgroup 
<br>
2: cpuset: /slurm/test 
<br>
1: freezer: / 
<br>
$ lssubsys -m cpuset 
<br>
cpuset /cgroup/cpuset 
<br>
$ cat /cgroup/cpuset/slurm/test/cpuset.cpus 
<br>
31 
<br>
$ hwloc-1.6/bis/lstopo 
<br>
Segmentation fault (core dumped) 
<br>
$ gdb... 
<br>
Program terminated with signal 11, Segmentation fault. 
<br>
#0 0x00007ffd758d225e in collect_proc_cpuset (obj=&lt;value opt out&gt;, sys=0x1f4dba0) at topology.c: 1074 
<br>
<p>The machine is made of bullx super-node S6010 (CEA Tera 100). 
<br>
<p>Thanks for your help, 
<br>
<p>Olivier Cessenat. 
<br>
<p><p><p><p>hwloc-users mailing list 
<br>
hwloc-users_at_[hidden] 
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0810.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
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
