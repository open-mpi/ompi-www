<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 15:55:12 2014" -->
<!-- isoreceived="20140101205512" -->
<!-- sent="Wed, 1 Jan 2014 20:55:11 +0000" -->
<!-- isosent="20140101205511" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C480AF.70609_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C477E2.4090404_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - some initial code<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 15:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/01/2014 20:17, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 01/01/2014 19:55, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There's a little fix attached to improve error management in instantiate().
</span><br>
<span class="quotelev2">&gt;&gt; I considered that, but hwloc_debug() disappears in a non-debug build
</span><br>
<span class="quotelev2">&gt;&gt; from what I can tell, so a regular user would just see that they have
</span><br>
<span class="quotelev2">&gt;&gt; explicitly asked for Xen and it has been skipped over.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What would be useful would be hwloc_warning()/error() which is
</span><br>
<span class="quotelev2">&gt;&gt; independent of --{en,dis}able-debug.
</span><br>
<span class="quotelev1">&gt; Usually we just fprintf(stderr) when there are major errors, and
</span><br>
<span class="quotelev1">&gt; warnings are only hwloc_debug() :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that hwloc is used by other software as a library, doing assert()
</span><br>
<span class="quotelev1">&gt; in the discovery code isn't good. We could try to make
</span><br>
<span class="quotelev1">&gt; hwloc_topology_load() fail entirely if Xen discovery failed. I don't
</span><br>
<span class="quotelev1">&gt; think we ever do that anywhere currently. Other components fallback to
</span><br>
<span class="quotelev1">&gt; the default backend (which just creates PU based on the number of
</span><br>
<span class="quotelev1">&gt; processors returned by sysconf()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could also have different behavior based HWLOC_XEN value. 1 means
</span><br>
<span class="quotelev1">&gt; &quot;try Xen or fallback&quot;, 2 means &quot;try Xen and abort() if failed&quot;. This
</span><br>
<span class="quotelev1">&gt; also comes back to what people will do with the Xen support. If only
</span><br>
<span class="quotelev1">&gt; admins use it to check the host topology in lstopo, calling assert()
</span><br>
<span class="quotelev1">&gt; maybe ok. If some libraries use hwloc and set HWLOC_XEN, we can't assert().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, if we want to avoid yet another hwloc env variable, we could
</span><br>
<span class="quotelev1">&gt; drop HWLOC_XEN, change the Xen priority to 0, and just set
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS=xen to enable it.
</span><br>
<p>I will see whether I can make this work.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all, I have hacked at the m4, by copying surrounding code, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it now appears to work sanely for me, including --{en,dis}able-xen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure options.  I have no idea whether what I have done is appropriate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The attach patch should extend your code to also support building the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xen component as a plugin so we don't enforce the libxen hard dependency
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inside the main hwloc library.
</span><br>
<span class="quotelev2">&gt;&gt; I was under the impression that the m4 so far would silently drop
</span><br>
<span class="quotelev2">&gt;&gt; support for Xen if the library was no available and the user didn't
</span><br>
<span class="quotelev2">&gt;&gt; explicitly --enable-xen, or have I misunderstood something?
</span><br>
<span class="quotelev1">&gt; The problem is for distribution packages, not for custom builds.
</span><br>
<span class="quotelev1">&gt; Packagers have to choose if Xen support is enabled or not. If they
</span><br>
<span class="quotelev1">&gt; enable it, the package will require xen libs to be installed, and some
</span><br>
<span class="quotelev1">&gt; users may complain when installing those if they don't care about Xen.
</span><br>
<span class="quotelev1">&gt; If they don't enable it, people that care about Xen will need a custom
</span><br>
<span class="quotelev1">&gt; build or a hwloc-xen package. With plugins, you can enable everything at
</span><br>
<span class="quotelev1">&gt; compile time, but Xen libs are required at run-time only if you want to
</span><br>
<span class="quotelev1">&gt; load the Xen plugin.
</span><br>
<p>Oh yes - very good point.  In which case the Xen part of hwloc really
<br>
should be a plugin.  (Attempting to install libxenctrl into a regular
<br>
linux distro will almost certainly pull in Xen itself as well)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regarding component flags, the usual way to exclude ALL other components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if to put ~0 instead of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HWLOC_DISC_COMPONENT_TYPE_CPU | HWLOC_DISC_COMPONENT_TYPE_GLOBAL
</span><br>
<span class="quotelev2">&gt;&gt; I didn't want to exclude PCI devices, as dom0 does have an accurate view
</span><br>
<span class="quotelev2">&gt;&gt; of them.  (Only at the moment, cant associate them with numa nodes).
</span><br>
<span class="quotelev1">&gt; Putting PCI in that list of flags means that you exclude any other
</span><br>
<span class="quotelev1">&gt; component that discovers PCI devices. But it doesn't prevent you from
</span><br>
<span class="quotelev1">&gt; adding PCI discovery in the Xen backend itself.
</span><br>
<p>But Xen itself has none of this information directly.  In all cases,
<br>
hwloc should defer to the native PCI method, which is why I explciticly
<br>
didn't exclude it.
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; What is the canonical way of stating that a certain PU is offline?  Xen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't really do offline cpus of its own accord at the moment but does
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have a hypercalls to explicitly online and offline cpus.  In the case
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that one is offline, I suspect my current code will cause the PU to fall
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out of the rest of the topology, rather than stay within it and marked
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; differently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What we do in topology-linux.c is we clear the corresponding bit from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the top-level online_cpuset hwloc_get_root_obj(topology)-&gt;cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the core will propagate that everywhere at the end of the discovery.
</span><br>
<span class="quotelev2">&gt;&gt; Does that mean that hwloc_insert_object_by_cpuset() will work correctly
</span><br>
<span class="quotelev2">&gt;&gt; inserting an object with a bit set in cpuset which is clear in the root
</span><br>
<span class="quotelev2">&gt;&gt; online_cpuset
</span><br>
<span class="quotelev1">&gt; I think that's what Linux does (even if it's hard to check in the
</span><br>
<span class="quotelev1">&gt; way-too-long code).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  or will I have to explicitly construct each
</span><br>
<span class="quotelev2">&gt;&gt; sock/node/core object with correct cpuset and online_cpuset information?
</span><br>
<span class="quotelev1">&gt; I don't think we ever do that in any backend (fortunately). The core
</span><br>
<span class="quotelev1">&gt; takes care of propagating things up and down at the end of the discovery.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Cool - I shall also have a play with this.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4003.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
