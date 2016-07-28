<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 07:06:25 2012" -->
<!-- isoreceived="20120807110625" -->
<!-- sent="Tue, 7 Aug 2012 07:06:20 -0400" -->
<!-- isosent="20120807110620" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="FA2140A7-5F1D-4246-9C47-7A7D11E23DC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5020D9C3.3000708_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 07:06:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 7, 2012, at 5:02 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Antoine Rougier finished his internship recently so here's a summary of
</span><br>
<span class="quotelev1">&gt; what he did in the &quot;backends&quot; branch. For the record, the goal of his
</span><br>
<span class="quotelev1">&gt; work was to explore how to change our backends into proper plugins so
</span><br>
<span class="quotelev1">&gt; that we can easily avoid hard dependencies between the hwloc core and
</span><br>
<span class="quotelev1">&gt; external libraries such as CUDA, libpci, ...
</span><br>
<p>In general, this sounds most excellent.  Some specific comments, below.
<br>
<p><span class="quotelev1">&gt; Aside from the main &quot;discover&quot; callback, backends may also define some
</span><br>
<span class="quotelev1">&gt; callbacks to be invoked when new object are created. The main example is
</span><br>
<span class="quotelev1">&gt; Linux creating &quot;OS devices&quot; when a new &quot;PCI device&quot; is added by the PCI
</span><br>
<span class="quotelev1">&gt; backend. CUDA could use that too to fill GPU PCI devices. This is not
</span><br>
<span class="quotelev1">&gt; strictly needed since adding these devices could still be done later,
</span><br>
<span class="quotelev1">&gt; once the PCI backend is done. We'll see.
</span><br>
<p>This is a nifty idea.  Is the idea that callback can be registered to be fired when a specific PCI vendor / device ID are found?
<br>
<p><span class="quotelev1">&gt; All this is about making interaction between backends nicer. Once this
</span><br>
<span class="quotelev1">&gt; is done, we'll be able to make actual plugins out of all this. One
</span><br>
<span class="quotelev1">&gt; problem that will come is that some backends are almost directly used
</span><br>
<span class="quotelev1">&gt; from outside the core. For instance exporting a topology to XML is a
</span><br>
<span class="quotelev1">&gt; public API call going down to XML plugin. lstopo and hwloc-ps using
</span><br>
<span class="quotelev1">&gt; Linux-specific tid_get_cpubind() calls causes similar problems.
</span><br>
<p>Another possibility is deprecating the old functions and making new functions, like hwloc_export_topo_to_file(..., HWLOC_FILE_FORMAT_XML), or something like that.  I.e., call a dispatch routine before the actual back-end routine -- this would preserve the abstraction/plugin barrier. (you mention another viable possibility below, too -- I mention this one only for completeness)
<br>
<p>I don't know if that's attractive or not, but I offer the possibility.  :-)
<br>
<p><span class="quotelev1">&gt; Instead of allowing random API calls into plugin internals, we could
</span><br>
<span class="quotelev1">&gt; keep these backends internal, i.e. not making them plugins. At least for
</span><br>
<span class="quotelev1">&gt; OS backends, it makes sense. &quot;synthetic&quot; and &quot;custom&quot; also have no
</span><br>
<span class="quotelev1">&gt; reason to be pluginified either, they depend on nothing.
</span><br>
<p>It might be nice to view all plugins as the same -- regardless of whether they are internal (i.e., part of libhwloc) or external (i.e., a standalone DSO).  That way, the majority of the core code doesn't have to know/care whether plugins are internal or external.
<br>
<p>It would also allow slurping external plugins to be internal, which will be fairly important for embedded mode.  A specific case which has come up for this multiple times is when higher-level MPI bindings packages (e.g., Python) dlopen libmpi into a private namespace.  When OMPI then tries to dlopen its own DSO/external plugins, they can't find the symbols in libmpi that they depend on (because libmpi is in a private namespace).  Hence, OMPI has to be built in a slurp-all-plugins-to-be-internal mode to support such configurations.
<br>
<p>As such, we'll need hwloc to also support this slurp-all-plugins-to-be-internal kind of mode, too.
<br>
<p>I can help with the build mojo for this, if desired.
<br>
<p><span class="quotelev1">&gt; XML would like to be a plugin so that we stop depending on libxml2, but
</span><br>
<span class="quotelev1">&gt; we have an intermediate level to ease this. The main XML functions do
</span><br>
<span class="quotelev1">&gt; not depend on libxml2, they can remain internal and call either libxml2
</span><br>
<span class="quotelev1">&gt; or our minimalistic no-libxml2 support underneath. So we can keep the
</span><br>
<span class="quotelev1">&gt; common code and the minimalistic support internal, and only move the
</span><br>
<span class="quotelev1">&gt; libxml2-specific callbacks to a plugin.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of what plugins we could have in the end:
</span><br>
<span class="quotelev1">&gt; * for main backends:
</span><br>
<span class="quotelev1">&gt;  + internal: synthetic, xml-core, custom, linux, solaris, ...
</span><br>
<span class="quotelev1">&gt;  + plugins: pci, cuda, display, ...
</span><br>
<span class="quotelev1">&gt; * for &quot;low-level&quot; xml backends:
</span><br>
<span class="quotelev1">&gt;  + internal: minimalistic xml support
</span><br>
<span class="quotelev1">&gt;  + plugin: libxml2
</span><br>
<span class="quotelev1">&gt; * and maybe lstopo backends one day
</span><br>
<span class="quotelev1">&gt;  + internal: console, txt, fig, windows
</span><br>
<span class="quotelev1">&gt;  + plugin: cairo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<li><strong>In reply to:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3203.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
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
