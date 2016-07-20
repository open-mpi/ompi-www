<?
$subject_val = "Re: [hwloc-users] some questions about hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 28 10:03:51 2011" -->
<!-- isoreceived="20110128150351" -->
<!-- sent="Fri, 28 Jan 2011 16:03:45 +0100" -->
<!-- isosent="20110128150345" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] some questions about hwloc" -->
<!-- id="4D42DAD1.2040600_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTik2GUoT4SbyXvc-zaobnNSMx=8n+-zKJOgw4MTP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] some questions about hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-28 10:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0258.php">Samuel Thibault: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Reply:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2011 15:32, guillaume Arnal a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm beginner in using hwloc and I have some questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First: I'm looking for a way to find which core is using by the
</span><br>
<span class="quotelev1">&gt; current thread. (maybe with hwloc_get_thread_cpubind ??)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second: is there a way to set the number of core usable for the
</span><br>
<span class="quotelev1">&gt; current process ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your help.
</span><br>
<span class="quotelev1">&gt; Guillaume Arnal
</span><br>
<p>Hello,
<br>
<p>First, are you talking about cores for real (one core that may contain
<br>
multiple hyperthread), or are physical processors ok (those that you see
<br>
in /proc/cpuinfo) ?
<br>
<p>hwloc_get_thread_cpubind() returns the binding of a thread specified by
<br>
its Linux thread id number. For the current thread, you may also use
<br>
hwloc_get_cpubind() with flag HWLOC_CPUBIND_THREAD. Both give a cpuset
<br>
listing all physical processors where the thread is currently allowed to
<br>
run. Processes are not bound by default, so the cpuset would contain all
<br>
existing processors, even if your thread actually uses a single core.
<br>
<p>hwloc_cpuset_t cpuset = hwloc_bitmap_alloc();
<br>
hwloc_get_cpubind(topology, cpuset, HWLOC_CPUBIND_THREAD);
<br>
<p><p>Once you have a cpuset, you may get the corresponding cores with:
<br>
<p>hwloc_obj_t prev = NULL;
<br>
while ((prev = hwloc_get_next_obj_inside_cpuset_by_type(topology, cpuset, HWLOC_OBJ_CORE, prev)) != NULL)
<br>
&nbsp;&nbsp;&nbsp;/* do what you want with object core */
<br>
<p><p>If the thread is bound to a single physical processors, you can get its
<br>
physical id with:
<br>
<p>hwloc_bitmap_first(cpuset);
<br>
<p><p>If you want to force your current process to run on the 3rd core, you
<br>
can do something like:
<br>
<p>hwloc_obj_t core = hwloc_get_obj_by_type(topology, HWLOC_OBJ_CORE, 2);
<br>
hwloc_set_cpubind(topology, core-&gt;cpuset, HWLOC_CPUBIND_PROCESS);
<br>
<p><p>Hope this helps,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0258.php">Samuel Thibault: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Previous message:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<li><strong>In reply to:</strong> <a href="0256.php">guillaume Arnal: "[hwloc-users] some questions about hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
<li><strong>Reply:</strong> <a href="0265.php">guillaume Arnal: "Re: [hwloc-users] some questions about hwloc"</a>
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
