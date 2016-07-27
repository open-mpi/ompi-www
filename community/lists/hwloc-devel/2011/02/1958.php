<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 01:17:51 2011" -->
<!-- isoreceived="20110218061751" -->
<!-- sent="Fri, 18 Feb 2011 07:17:50 +0100" -->
<!-- isosent="20110218061750" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="4D5E0F0E.5010305_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E532626-3341-43C9-A738-A807869224EB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] get cpu where a process/thread is executing<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 01:17:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1957.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3177)"</a>
<li><strong>In reply to:</strong> <a href="1953.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/02/2011 23:52, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 17, 2011, at 5:37 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am waiting for this troll to settle down before pushing some related
</span><br>
<span class="quotelev2">&gt;&gt; changes (add a (cpubind?) support flag and a hwloc-bind option).
</span><br>
<span class="quotelev2">&gt;&gt; I agree that &quot;last&quot; is better than &quot;current&quot;. And I agree that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;lastcpuexec&quot; isn't perfect, but I didn't see anything better so far :)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; hwloc_get_heisenbind()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (you can't know your binding and location at the same time -- nyuk nyuk)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_cpu_location()
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This one has one advantage: if we add another function to return the
<br>
memory location, the name pattern will match (get_last_memory_location).
<br>
<p><span class="quotelev1">&gt; hwloc_get_last_cpu_locality()
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Could be misleading.
<br>
<p><span class="quotelev1">&gt; hwloc_get_last_known_cpuexec()
</span><br>
<span class="quotelev1">&gt; hwloc_get_last_seen_cpuexec()
</span><br>
<span class="quotelev1">&gt; hwloc_get_instant_cpuexec()
</span><br>
<span class="quotelev1">&gt; hwloc_get_cpuexec_now()
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>These are ok
<br>
<p><span class="quotelev1">&gt; hwloc_get_my_last_cpuexec()
</span><br>
<span class="quotelev1">&gt; ...?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Not &quot;my&quot; (we can do it for other processes too).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1959.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1957.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3177)"</a>
<li><strong>In reply to:</strong> <a href="1953.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
