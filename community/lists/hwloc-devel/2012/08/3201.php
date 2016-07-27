<?
$subject_val = "[hwloc-devel] backends and plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 05:03:05 2012" -->
<!-- isoreceived="20120807090305" -->
<!-- sent="Tue, 07 Aug 2012 11:02:59 +0200" -->
<!-- isosent="20120807090259" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] backends and plugins" -->
<!-- id="5020D9C3.3000708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] backends and plugins<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 05:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3200.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4687)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3212.php">Christopher Samuel: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Antoine Rougier finished his internship recently so here's a summary of
<br>
what he did in the &quot;backends&quot; branch. For the record, the goal of his
<br>
work was to explore how to change our backends into proper plugins so
<br>
that we can easily avoid hard dependencies between the hwloc core and
<br>
external libraries such as CUDA, libpci, ...
<br>
<p><p>He defined three types of backends:
<br>
* &quot;Base&quot; is a normal OS backend such as Linux/Solaris/... This guy
<br>
manages PU, Cores, Sockets, ... Only one of these can be used at the
<br>
same time.
<br>
* &quot;Additional&quot; is what is added to &quot;Base&quot; backends. This is libpci, and
<br>
things added inside PCI devices (CUDA, ...). Multiple of these may be
<br>
used at the same time. They are likely invoked sequentially after the
<br>
Base backend discovery.
<br>
* &quot;Global&quot; is a special case for XML, Synthetic and Custom, which
<br>
replaces both Base and Additional. It's not clear that this type will be
<br>
needed in the end, &quot;Base&quot; with a special flag to disable &quot;Additional&quot;
<br>
backends might be enough.
<br>
<p>During init(), all existing backends are placed on a list of &quot;available&quot;
<br>
backends. And a list of &quot;enabled&quot; backends is initialized to empty.
<br>
Between init() and load(), calling set_xml(), set_synthetic(),
<br>
set_fsroot(), ... will append some backends to the &quot;enabled&quot; list
<br>
(actually two lists, one for Base, one for Additional).
<br>
During load(), we check whether some Base backends are &quot;enabled&quot;.
<br>
Otherwise we enable the default one of the current OS. Then we actually
<br>
discover things using the (unique) enabled Base backend followed by all
<br>
enabled Additional backends.
<br>
<p><p><p>Aside from the main &quot;discover&quot; callback, backends may also define some
<br>
callbacks to be invoked when new object are created. The main example is
<br>
Linux creating &quot;OS devices&quot; when a new &quot;PCI device&quot; is added by the PCI
<br>
backend. CUDA could use that too to fill GPU PCI devices. This is not
<br>
strictly needed since adding these devices could still be done later,
<br>
once the PCI backend is done. We'll see.
<br>
<p>I'll work on putting all this in a branch soon.
<br>
<p><p><p>All this is about making interaction between backends nicer. Once this
<br>
is done, we'll be able to make actual plugins out of all this. One
<br>
problem that will come is that some backends are almost directly used
<br>
from outside the core. For instance exporting a topology to XML is a
<br>
public API call going down to XML plugin. lstopo and hwloc-ps using
<br>
Linux-specific tid_get_cpubind() calls causes similar problems.
<br>
<p>Instead of allowing random API calls into plugin internals, we could
<br>
keep these backends internal, i.e. not making them plugins. At least for
<br>
OS backends, it makes sense. &quot;synthetic&quot; and &quot;custom&quot; also have no
<br>
reason to be pluginified either, they depend on nothing.
<br>
<p>XML would like to be a plugin so that we stop depending on libxml2, but
<br>
we have an intermediate level to ease this. The main XML functions do
<br>
not depend on libxml2, they can remain internal and call either libxml2
<br>
or our minimalistic no-libxml2 support underneath. So we can keep the
<br>
common code and the minimalistic support internal, and only move the
<br>
libxml2-specific callbacks to a plugin.
<br>
<p>Summary of what plugins we could have in the end:
<br>
* for main backends:
<br>
&nbsp;&nbsp;+ internal: synthetic, xml-core, custom, linux, solaris, ...
<br>
&nbsp;&nbsp;+ plugins: pci, cuda, display, ...
<br>
* for &quot;low-level&quot; xml backends:
<br>
&nbsp;&nbsp;+ internal: minimalistic xml support
<br>
&nbsp;&nbsp;+ plugin: libxml2
<br>
* and maybe lstopo backends one day
<br>
&nbsp;&nbsp;+ internal: console, txt, fig, windows
<br>
&nbsp;&nbsp;+ plugin: cairo
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Previous message:</strong> <a href="3200.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.1rc1r4687)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3202.php">Jeff Squyres: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3212.php">Christopher Samuel: "Re: [hwloc-devel] backends and plugins"</a>
<li><strong>Reply:</strong> <a href="3214.php">Brice Goglin: "Re: [hwloc-devel] backends and plugins"</a>
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
