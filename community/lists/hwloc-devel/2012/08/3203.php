<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 07:29:15 2012" -->
<!-- isoreceived="20120807112915" -->
<!-- sent="Tue, 07 Aug 2012 13:29:10 +0200" -->
<!-- isosent="20120807112910" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="5020FC06.9060007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA2140A7-5F1D-4246-9C47-7A7D11E23DC4_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 07:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/08/2012 13:06, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; Aside from the main &quot;discover&quot; callback, backends may also define some
</span><br>
<span class="quotelev2">&gt;&gt; callbacks to be invoked when new object are created. The main example is
</span><br>
<span class="quotelev2">&gt;&gt; Linux creating &quot;OS devices&quot; when a new &quot;PCI device&quot; is added by the PCI
</span><br>
<span class="quotelev2">&gt;&gt; backend. CUDA could use that too to fill GPU PCI devices. This is not
</span><br>
<span class="quotelev2">&gt;&gt; strictly needed since adding these devices could still be done later,
</span><br>
<span class="quotelev2">&gt;&gt; once the PCI backend is done. We'll see.
</span><br>
<span class="quotelev1">&gt; This is a nifty idea.  Is the idea that callback can be registered to be fired when a specific PCI vendor / device ID are found?
</span><br>
<p>I am not sure yet. Linux would use the callback for some classes of
<br>
devices. CUDA for some vendor ID. We could do the general case (all
<br>
object types) and have the callback check the device attribute, but it
<br>
could be overkill.
<br>
<p><span class="quotelev2">&gt;&gt; Instead of allowing random API calls into plugin internals, we could
</span><br>
<span class="quotelev2">&gt;&gt; keep these backends internal, i.e. not making them plugins. At least for
</span><br>
<span class="quotelev2">&gt;&gt; OS backends, it makes sense. &quot;synthetic&quot; and &quot;custom&quot; also have no
</span><br>
<span class="quotelev2">&gt;&gt; reason to be pluginified either, they depend on nothing.
</span><br>
<span class="quotelev1">&gt; It might be nice to view all plugins as the same -- regardless of whether they are internal (i.e., part of libhwloc) or external (i.e., a standalone DSO).  That way, the majority of the core code doesn't have to know/care whether plugins are internal or external.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would also allow slurping external plugins to be internal, which will be fairly important for embedded mode.  A specific case which has come up for this multiple times is when higher-level MPI bindings packages (e.g., Python) dlopen libmpi into a private namespace.  When OMPI then tries to dlopen its own DSO/external plugins, they can't find the symbols in libmpi that they depend on (because libmpi is in a private namespace).  Hence, OMPI has to be built in a slurp-all-plugins-to-be-internal mode to support such configurations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As such, we'll need hwloc to also support this slurp-all-plugins-to-be-internal kind of mode, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can help with the build mojo for this, if desired.
</span><br>
<p>I don't enough about all this so we'll your help for sure :) We'll see
<br>
once backends are cleaned up.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3204.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
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
