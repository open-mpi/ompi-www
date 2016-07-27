<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 05:00:07 2011" -->
<!-- isoreceived="20110301100007" -->
<!-- sent="Tue, 01 Mar 2011 11:00:02 +0100" -->
<!-- isosent="20110301100002" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="4D6CC3A2.6050206_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1298972805.21890.90.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 05:00:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/03/2011 10:46, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; To calculate topology-based pinning schemes and do process pinning (like
</span><br>
<span class="quotelev1">&gt; done e.g. by OpenMPI or MVAPICH2) this is too long, when every process
</span><br>
<span class="quotelev1">&gt; (MPI task) or thread loads the topology in parallel. But exporting an
</span><br>
<span class="quotelev1">&gt; XML topology and using this for this purpose is inaccepteable, when
</span><br>
<span class="quotelev1">&gt; Linux cpusets are used, because one needs the topology of a subset of
</span><br>
<span class="quotelev1">&gt; the machine depending on the caller context. What we currently do is to
</span><br>
<span class="quotelev1">&gt; let only one process per machine load the topology, and distribute the
</span><br>
<span class="quotelev1">&gt; essentials needed for pinning to the remaining processes.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>You can still export one XML file per cpuset and load the right one in
<br>
each process. If the batch scheduler creates the cpuset, my feeling is
<br>
that the batch scheduler should create the XML file at the same time,
<br>
and do something like export HWLOC_XMLFILE=mycpuset.xml when launching
<br>
processes.
<br>
<p>Also, in 1.2, we'll have a hwloc_topology_restrict() function which will
<br>
let you load the whole machine topology and then restrict it to whatever
<br>
part of it (a part is defined by a hwloc_cpuset_t). We'll need to make
<br>
sure that you'll have everything you need to get your cpuset's
<br>
hwloc_cpuset_t.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>In reply to:</strong> <a href="2026.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2028.php">Bernd Kallies: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2042.php">Brice Goglin: "[hwloc-devel] restrict branch"</a>
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
