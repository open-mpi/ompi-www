<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 17:52:54 2011" -->
<!-- isoreceived="20110217225254" -->
<!-- sent="Thu, 17 Feb 2011 17:52:50 -0500" -->
<!-- isosent="20110217225250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="1E532626-3341-43C9-A738-A807869224EB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5DA313.4060209_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 17:52:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2011, at 5:37 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I am waiting for this troll to settle down before pushing some related
</span><br>
<span class="quotelev1">&gt; changes (add a (cpubind?) support flag and a hwloc-bind option).
</span><br>
<span class="quotelev1">&gt; I agree that &quot;last&quot; is better than &quot;current&quot;. And I agree that
</span><br>
<span class="quotelev1">&gt; &quot;lastcpuexec&quot; isn't perfect, but I didn't see anything better so far :)
</span><br>
<p>hwloc_get_heisenbind()
<br>
<p>(you can't know your binding and location at the same time -- nyuk nyuk)
<br>
<p>hwloc_get_last_cpu_location()
<br>
hwloc_get_last_cpu_locality()
<br>
hwloc_get_last_known_cpuexec()
<br>
hwloc_get_last_seen_cpuexec()
<br>
hwloc_get_instant_cpuexec()
<br>
hwloc_get_cpuexec_now()
<br>
hwloc_get_my_last_cpuexec()
<br>
...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1952.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1958.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
