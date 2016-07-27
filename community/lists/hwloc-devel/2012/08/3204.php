<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 07:33:54 2012" -->
<!-- isoreceived="20120807113354" -->
<!-- sent="Tue, 7 Aug 2012 13:33:46 +0200" -->
<!-- isosent="20120807113346" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="20120807113346.GO5974_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5020FC06.9060007_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] backends and plugins<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 07:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3205.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4693)"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Christopher Samuel: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 07 Aug 2012 13:29:31 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 07/08/2012 13:06, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Aside from the main &quot;discover&quot; callback, backends may also define some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; callbacks to be invoked when new object are created. The main example is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Linux creating &quot;OS devices&quot; when a new &quot;PCI device&quot; is added by the PCI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; backend. CUDA could use that too to fill GPU PCI devices. This is not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; strictly needed since adding these devices could still be done later,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; once the PCI backend is done. We'll see.
</span><br>
<span class="quotelev2">&gt; &gt; This is a nifty idea.  Is the idea that callback can be registered to be fired when a specific PCI vendor / device ID are found?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure yet. Linux would use the callback for some classes of
</span><br>
<span class="quotelev1">&gt; devices. CUDA for some vendor ID. We could do the general case (all
</span><br>
<span class="quotelev1">&gt; object types) and have the callback check the device attribute, but it
</span><br>
<span class="quotelev1">&gt; could be overkill.
</span><br>
<p>I'd say it's actually simpler and shouldn't be too expensive.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3205.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4693)"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3212.php">Christopher Samuel: "Re: [hwloc-devel] backends and plugins"</a>
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
