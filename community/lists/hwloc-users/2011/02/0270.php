<?
$subject_val = "Re: [hwloc-users] Problem getting cpuset of MPI task";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 11:06:39 2011" -->
<!-- isoreceived="20110209160639" -->
<!-- sent="Wed, 9 Feb 2011 17:06:34 +0100" -->
<!-- isosent="20110209160634" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Problem getting cpuset of MPI task" -->
<!-- id="20110209160634.GC22625_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1155899923.1835395.1297267063884.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-02-09 11:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe in reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hendryk Bockelmann, le Wed 09 Feb 2011 16:57:43 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Since I am new to hwloc there might be a misunderstanding from my side, 
</span><br>
<span class="quotelev1">&gt; but I have a problem getting the cpuset of MPI tasks.
</span><br>
<p><span class="quotelev1">&gt;    /* get native cpuset of this process */
</span><br>
<span class="quotelev1">&gt;    cpuset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev1">&gt;    hwloc_get_cpubind(topology, cpuset, 0);
</span><br>
<p>get_cpubind gives where the threads are bound, not where they are
<br>
actually running. If you haven't bound them yourself, the default is no
<br>
binding, i.e. all CPUs are allowed, thus a full mask, that's why you get
<br>
0xf for all of them.
<br>
<p><span class="quotelev1">&gt;    hwloc_bitmap_singlify(cpuset);
</span><br>
<p>Singlify is just an operation on the resulting cpu mask, taking the
<br>
first of them. That's why you end up with just 0x1.
<br>
<p>Adding a function that returns where threads are actually running is on
<br>
the TODO list for hwloc 1.2.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Previous message:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<li><strong>Maybe in reply to:</strong> <a href="0269.php">Hendryk Bockelmann: "[hwloc-users] Problem getting cpuset of MPI task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0271.php">Brice Goglin: "Re: [hwloc-users] Problem getting cpuset of MPI task"</a>
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
