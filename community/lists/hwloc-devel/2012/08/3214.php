<?
$subject_val = "Re: [hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 21 12:49:25 2012" -->
<!-- isoreceived="20120821164925" -->
<!-- sent="Tue, 21 Aug 2012 18:49:07 +0200" -->
<!-- isosent="20120821164907" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] backends and plugins" -->
<!-- id="5033BC03.6020903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-21 12:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3213.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4731)"</a>
<li><strong>In reply to:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I implemented most of this in the component branch. The changes in the
<br>
core look heavy but it's not too bad in the end.
<br>
<p><p>Now, each old backend registers a &quot;component&quot; that can be instantiated
<br>
into a &quot;backend&quot; structure depending on the topology configuration. By
<br>
default, you get your OS backend and the PCI backend. But you could also
<br>
get a XML backend instead for instance. Each backend may contain a
<br>
discover() callback (doing the main discovery, e.g. initial discovery
<br>
through the OS) and a notify_new_object() callback to react when
<br>
somebody else discovers something (currently only used by Linux to add
<br>
OS devices when the PCI backend adds PCI devices).
<br>
<p>The list of components to create is defined by configure, depending on
<br>
the OS, available libraries, and on plugin configuration.
<br>
<p><p>There are two types of plugins. &quot;core&quot; (for the above
<br>
&quot;components/backends&quot;) and &quot;xml&quot; (for libxml2 and nolibxml
<br>
implementations behind the XML backend). At configure time, we can ask
<br>
to build some components as plugins. Only &quot;core-libpci&quot; and &quot;xml-libxml&quot;
<br>
for now (others do not depend on any external lib). Those components
<br>
will be installed in $(libdir)/hwloc and loaded in topology_init().
<br>
<p>Plugin are entirely disabled by default (even the core support is
<br>
disabled) so it shouldn't break much. Testing with and without plugins
<br>
didn't show any problem so far.
<br>
<p><p>Things to improve:
<br>
1) We load plugins and list existing components once per topology. We
<br>
should do it only once per process. But that requires some locking in
<br>
case multiple topologies are loaded simultaneously, which means we need
<br>
thread-safety. Do we want pthread_mutex() for this?
<br>
2) Some internal functions are now exported to plugins. Do we want a
<br>
special namespace? &quot;hwloc__&quot; instead of &quot;hwloc_&quot;? Is there anyway to
<br>
make them visibile to plugins but not to applications?
<br>
3) I currently use the system libltdl. People usually ask libtool to
<br>
copy it's libtldl implementation inside the project source at autogen to
<br>
make sure it's compatible/working. So we won't have libltdl in SVN,
<br>
we'll have it in tarballs, and we'll build it (with a sub-configure) if
<br>
plugins are enabled. Is anybody against this?
<br>
<p>Brice
<br>
<p><p><p><p>Le 07/08/2012 11:02, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Antoine Rougier finished his internship recently so here's a summary of
</span><br>
<span class="quotelev1">&gt; what he did in the &quot;backends&quot; branch. For the record, the goal of his
</span><br>
<span class="quotelev1">&gt; work was to explore how to change our backends into proper plugins so
</span><br>
<span class="quotelev1">&gt; that we can easily avoid hard dependencies between the hwloc core and
</span><br>
<span class="quotelev1">&gt; external libraries such as CUDA, libpci, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; He defined three types of backends:
</span><br>
<span class="quotelev1">&gt; * &quot;Base&quot; is a normal OS backend such as Linux/Solaris/... This guy
</span><br>
<span class="quotelev1">&gt; manages PU, Cores, Sockets, ... Only one of these can be used at the
</span><br>
<span class="quotelev1">&gt; same time.
</span><br>
<span class="quotelev1">&gt; * &quot;Additional&quot; is what is added to &quot;Base&quot; backends. This is libpci, and
</span><br>
<span class="quotelev1">&gt; things added inside PCI devices (CUDA, ...). Multiple of these may be
</span><br>
<span class="quotelev1">&gt; used at the same time. They are likely invoked sequentially after the
</span><br>
<span class="quotelev1">&gt; Base backend discovery.
</span><br>
<span class="quotelev1">&gt; * &quot;Global&quot; is a special case for XML, Synthetic and Custom, which
</span><br>
<span class="quotelev1">&gt; replaces both Base and Additional. It's not clear that this type will be
</span><br>
<span class="quotelev1">&gt; needed in the end, &quot;Base&quot; with a special flag to disable &quot;Additional&quot;
</span><br>
<span class="quotelev1">&gt; backends might be enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During init(), all existing backends are placed on a list of &quot;available&quot;
</span><br>
<span class="quotelev1">&gt; backends. And a list of &quot;enabled&quot; backends is initialized to empty.
</span><br>
<span class="quotelev1">&gt; Between init() and load(), calling set_xml(), set_synthetic(),
</span><br>
<span class="quotelev1">&gt; set_fsroot(), ... will append some backends to the &quot;enabled&quot; list
</span><br>
<span class="quotelev1">&gt; (actually two lists, one for Base, one for Additional).
</span><br>
<span class="quotelev1">&gt; During load(), we check whether some Base backends are &quot;enabled&quot;.
</span><br>
<span class="quotelev1">&gt; Otherwise we enable the default one of the current OS. Then we actually
</span><br>
<span class="quotelev1">&gt; discover things using the (unique) enabled Base backend followed by all
</span><br>
<span class="quotelev1">&gt; enabled Additional backends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aside from the main &quot;discover&quot; callback, backends may also define some
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll work on putting all this in a branch soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All this is about making interaction between backends nicer. Once this
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of allowing random API calls into plugin internals, we could
</span><br>
<span class="quotelev1">&gt; keep these backends internal, i.e. not making them plugins. At least for
</span><br>
<span class="quotelev1">&gt; OS backends, it makes sense. &quot;synthetic&quot; and &quot;custom&quot; also have no
</span><br>
<span class="quotelev1">&gt; reason to be pluginified either, they depend on nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; XML would like to be a plugin so that we stop depending on libxml2, but
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
<span class="quotelev1">&gt;   + internal: synthetic, xml-core, custom, linux, solaris, ...
</span><br>
<span class="quotelev1">&gt;   + plugins: pci, cuda, display, ...
</span><br>
<span class="quotelev1">&gt; * for &quot;low-level&quot; xml backends:
</span><br>
<span class="quotelev1">&gt;   + internal: minimalistic xml support
</span><br>
<span class="quotelev1">&gt;   + plugin: libxml2
</span><br>
<span class="quotelev1">&gt; * and maybe lstopo backends one day
</span><br>
<span class="quotelev1">&gt;   + internal: console, txt, fig, windows
</span><br>
<span class="quotelev1">&gt;   + plugin: cairo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3213.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4731)"</a>
<li><strong>In reply to:</strong> <a href="3201.php">Brice Goglin: "[hwloc-devel] backends and plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3215.php">Samuel Thibault: "Re: [hwloc-devel] backends and plugins"</a>
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
