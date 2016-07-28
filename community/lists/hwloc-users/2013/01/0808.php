<?
$subject_val = "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 13:26:46 2013" -->
<!-- isoreceived="20130115182646" -->
<!-- sent="Tue, 15 Jan 2013 19:26:30 +0100" -->
<!-- isosent="20130115182630" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074" -->
<!-- id="d4bd3967-8549-4cf4-b47b-c9c8a8059424_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="867980727.225008380.1358268414978.JavaMail.root_at_zimbra33-e6.priv.proxad.net" -->
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
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 13:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
Indeed, there's a big cgroup crash in 1.6.  Can you verify that 1.6.1rc2 works fine?
<br>
Thanks
<br>
Brice
<br>
<p><p><p>cessenat_at_[hidden] a &#195;&#169;crit&#194;&#160;:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When updating from 1.5.1 to 1.6 I get a segfault when inside a
</span><br>
<span class="quotelev1">&gt;cgroup/cpuset in collect_proc_cpuset, file topology.c line 1074.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It appears that an HWLOC_OBJ_CORE has a son who is it's
</span><br>
<span class="quotelev1">&gt;HWLOC_OBJ_GROUP's father !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ cat /proc/self/cgroup
</span><br>
<span class="quotelev1">&gt;2: cpuset: /slurm/test
</span><br>
<span class="quotelev1">&gt;1: freezer: /
</span><br>
<span class="quotelev1">&gt;$ lssubsys -m cpuset
</span><br>
<span class="quotelev1">&gt;cpuset /cgroup/cpuset
</span><br>
<span class="quotelev1">&gt;$ cat /cgroup/cpuset/slurm/test/cpuset.cpus
</span><br>
<span class="quotelev1">&gt;31
</span><br>
<span class="quotelev1">&gt;$ hwloc-1.6/bis/lstopo
</span><br>
<span class="quotelev1">&gt;Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;$ gdb...
</span><br>
<span class="quotelev1">&gt;Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt;#0 0x00007ffd758d225e in collect_proc_cpuset (obj=&lt;value opt out&gt;,
</span><br>
<span class="quotelev1">&gt;sys=0x1f4dba0) at topology.c: 1074
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The machine is made of bullx super-node S6010 (CEA Tera 100).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for your help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Olivier Cessenat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Previous message:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>In reply to:</strong> <a href="0807.php">cessenat_at_[hidden]: "[hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
<li><strong>Reply:</strong> <a href="0809.php">cessenat_at_[hidden]: "Re: [hwloc-users] Segmentation fault in collect_proc_cpuset, topology.c line 1074"</a>
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
