<?
$subject_val = "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 11:47:06 2013" -->
<!-- isoreceived="20130115164706" -->
<!-- sent="Tue, 15 Jan 2013 17:46:54 +0100 (CET)" -->
<!-- isosent="20130115164654" -->
<!-- name="cessenat_at_[hidden]" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074" -->
<!-- id="867980727.225008380.1358268414978.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="118488714.224942426.1358267253859.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
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
<strong>Subject:</strong> [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074<br>
<strong>From:</strong> <a href="mailto:cessenat_at_[hidden]?Subject=Re:%20[hwloc-users]%20Segmentation%20fault%20in%20collect_proc_cpuset,%20topology.c%20line%201074"><em>cessenat_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-01-15 11:46:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0806.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0806.php">Jeff Hammond: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0808.php">Brice Goglin: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
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
