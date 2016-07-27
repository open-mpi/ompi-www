<?
$subject_val = "Re: [hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 01:12:43 2010" -->
<!-- isoreceived="20100312061243" -->
<!-- sent="Fri, 12 Mar 2010 07:12:37 +0100" -->
<!-- isosent="20100312061237" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] thread safety" -->
<!-- id="4B99DB55.7050205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21AB62D5-6D16-4594-BED6-187D85A40124_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] thread safety<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 01:12:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0743.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1823)"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 1. thread A calls hwloc_topology_init(&amp;a)
</span><br>
<span class="quotelev1">&gt; 2. thread A calls hwloc_topology_load(a)
</span><br>
<span class="quotelev1">&gt; 3. thread A launches thread B
</span><br>
<span class="quotelev1">&gt; 4. thread B calls hwloc_topology_get_*(a...)
</span><br>
<span class="quotelev1">&gt; 5. thread A calls hwloc_topology_load(a)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the one hand, you could say that an app would be dumb to do this.  But OTOH, if we say that hwloc is &quot;thread safe&quot;, it might be a reasonable expectation to assume that multiple threads can read/write topologies simultaneously and hwloc makes it safe.  It depends on exactly what you mean by &quot;thread safe&quot; (kinda like MPI's 4 different levels of thread support).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which do we want for hwloc?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't think we want to support this. If somebody really wants the
<br>
above, he wants two threads to work on different topologies, so he
<br>
should use two different topology variables.
<br>
<p>I guess we a thread-safety section in hwloc.doxy to document that all
<br>
topology modifiers (most of hwloc_topology_* functions, not all of them)
<br>
cannot run concurrently.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0743.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1823)"</a>
<li><strong>In reply to:</strong> <a href="0742.php">Jeff Squyres: "[hwloc-devel] thread safety"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0750.php">Jeff Squyres: "Re: [hwloc-devel] thread safety"</a>
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
