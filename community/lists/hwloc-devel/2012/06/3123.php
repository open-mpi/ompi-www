<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 04:45:30 2012" -->
<!-- isoreceived="20120615084530" -->
<!-- sent="Fri, 15 Jun 2012 10:45:22 +0200" -->
<!-- isosent="20120615084522" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX" -->
<!-- id="4FDAF622.4070403_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FD6F99E.3090108_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 04:45:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3122.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4542)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/07/3158.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/07/3158.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Hendryk,
<br>
<p>I am re-adding hwloc-devel to CC since we have a non-trivial patch
<br>
attached and discussion below.
<br>
<p>I talked to your IBM contact and he was indeed able to help, thanks. So
<br>
there are indeed two different binding interfaces on AIX. hwloc only
<br>
support rsets, that's why we don't see binding made with the other
<br>
(older) interface (bindprocessor) in the XL OpenMP runtime. Fortunately,
<br>
both interfaces cannot be use in a contradictory way, so we just need to
<br>
fallback to the other interface when we find no rset binding.
<br>
<p>The attached patch is supposed to implement this. I didn't test all
<br>
cases (current/other process/thread) yet. Let me know if it works fine
<br>
in your MPI+OpenMP program.
<br>
<p>On set_cpubind() side, we should likely add some code to handle
<br>
conflicts with the older interface. If we get EPERM when setting a rset,
<br>
we should unbind with the old interface and try again. Unfortunately,
<br>
only the entire process can be unbound, single threads can't, from what
<br>
I understand. So we could get problems if the application binds multiple
<br>
threads with the old interface and then binds a single thread with
<br>
hwloc. But that'd be rare and bad anyway.
<br>
<p>What will remains is get_last_cpu_location() for anything but the
<br>
current thread. I don't see any way to implement this.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3123/aix.diff">aix.diff</a>
</ul>
<!-- attachment="aix.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3124.php">Rayson Ho: "[hwloc-devel] hwloc_cpuset_t to cgroups cpuset conversion"</a>
<li><strong>Previous message:</strong> <a href="3122.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4542)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/07/3158.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/07/3158.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
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
