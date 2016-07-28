<?
$subject_val = "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 09:40:04 2012" -->
<!-- isoreceived="20120709134004" -->
<!-- sent="Mon, 09 Jul 2012 15:39:57 +0200" -->
<!-- isosent="20120709133957" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX" -->
<!-- id="4FFADF2D.600_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FFA991E.10003_at_dkrz.de" -->
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
<strong>Date:</strong> 2012-07-09 09:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3159.php">Rayson Ho: "[hwloc-devel] graphics issues in the PDF docs"</a>
<li><strong>Previous message:</strong> <a href="3157.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4595)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/06/3123.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Hendryk, I committed this to trunk. I am now looking at
<br>
making *set*_cpubind better at changing old-style binding. We'll have
<br>
all this in hwloc v1.5 (hopefully by the end of the month).
<br>
Brice
<br>
<p><p><p><p>On 09/07/2012 10:41, Hendryk Bockelmann wrote:
<br>
<span class="quotelev1">&gt; Hello Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tested your patch with the nightly build
</span><br>
<span class="quotelev1">&gt; hwloc-1.5a1r4597.tar.gz on our POWER6 cluster for some OpenMP and some
</span><br>
<span class="quotelev1">&gt; hybrid code. In both cases the reported binding is exactly what I get
</span><br>
<span class="quotelev1">&gt; from the IBM tool and also exactly what it should look like (since I
</span><br>
<span class="quotelev1">&gt; asked the LoadLeveler to distribute my MPI tasks and OpenMP threads in
</span><br>
<span class="quotelev1">&gt; an unusual way).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far so good, thank you for the changed within hwloc. I will now use
</span><br>
<span class="quotelev1">&gt; the hwloc API to work on binding issues in some user codes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Hendryk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 15.06.2012 10:45, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Hendryk,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am re-adding hwloc-devel to CC since we have a non-trivial patch
</span><br>
<span class="quotelev2">&gt;&gt; attached and discussion below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I talked to your IBM contact and he was indeed able to help, thanks. So
</span><br>
<span class="quotelev2">&gt;&gt; there are indeed two different binding interfaces on AIX. hwloc only
</span><br>
<span class="quotelev2">&gt;&gt; support rsets, that's why we don't see binding made with the other
</span><br>
<span class="quotelev2">&gt;&gt; (older) interface (bindprocessor) in the XL OpenMP runtime. Fortunately,
</span><br>
<span class="quotelev2">&gt;&gt; both interfaces cannot be use in a contradictory way, so we just need to
</span><br>
<span class="quotelev2">&gt;&gt; fallback to the other interface when we find no rset binding.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch is supposed to implement this. I didn't test all
</span><br>
<span class="quotelev2">&gt;&gt; cases (current/other process/thread) yet. Let me know if it works fine
</span><br>
<span class="quotelev2">&gt;&gt; in your MPI+OpenMP program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On set_cpubind() side, we should likely add some code to handle
</span><br>
<span class="quotelev2">&gt;&gt; conflicts with the older interface. If we get EPERM when setting a rset,
</span><br>
<span class="quotelev2">&gt;&gt; we should unbind with the old interface and try again. Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; only the entire process can be unbound, single threads can't, from what
</span><br>
<span class="quotelev2">&gt;&gt; I understand. So we could get problems if the application binds multiple
</span><br>
<span class="quotelev2">&gt;&gt; threads with the old interface and then binds a single thread with
</span><br>
<span class="quotelev2">&gt;&gt; hwloc. But that'd be rare and bad anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What will remains is get_last_cpu_location() for anything but the
</span><br>
<span class="quotelev2">&gt;&gt; current thread. I don't see any way to implement this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3159.php">Rayson Ho: "[hwloc-devel] graphics issues in the PDF docs"</a>
<li><strong>Previous message:</strong> <a href="3157.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4595)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/06/3123.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-users] hwloc_get_last_cpu_location on AIX"</a>
<!-- nextthread="start" -->
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
