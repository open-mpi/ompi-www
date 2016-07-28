<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 15:17:44 2014" -->
<!-- isoreceived="20140101201744" -->
<!-- sent="Wed, 01 Jan 2014 21:17:38 +0100" -->
<!-- isosent="20140101201738" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C477E2.4090404_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C464AF.9020204_at_citrix.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-01 15:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/01/2014 19:55, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; There's a little fix attached to improve error management in instantiate().
</span><br>
<span class="quotelev1">&gt; I considered that, but hwloc_debug() disappears in a non-debug build
</span><br>
<span class="quotelev1">&gt; from what I can tell, so a regular user would just see that they have
</span><br>
<span class="quotelev1">&gt; explicitly asked for Xen and it has been skipped over.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would be useful would be hwloc_warning()/error() which is
</span><br>
<span class="quotelev1">&gt; independent of --{en,dis}able-debug.
</span><br>
<p>Usually we just fprintf(stderr) when there are major errors, and
<br>
warnings are only hwloc_debug() :)
<br>
<p>Given that hwloc is used by other software as a library, doing assert()
<br>
in the discovery code isn't good. We could try to make
<br>
hwloc_topology_load() fail entirely if Xen discovery failed. I don't
<br>
think we ever do that anywhere currently. Other components fallback to
<br>
the default backend (which just creates PU based on the number of
<br>
processors returned by sysconf()).
<br>
<p>We could also have different behavior based HWLOC_XEN value. 1 means
<br>
&quot;try Xen or fallback&quot;, 2 means &quot;try Xen and abort() if failed&quot;. This
<br>
also comes back to what people will do with the Xen support. If only
<br>
admins use it to check the host topology in lstopo, calling assert()
<br>
maybe ok. If some libraries use hwloc and set HWLOC_XEN, we can't assert().
<br>
<p>By the way, if we want to avoid yet another hwloc env variable, we could
<br>
drop HWLOC_XEN, change the Xen priority to 0, and just set
<br>
HWLOC_COMPONENTS=xen to enable it.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; First of all, I have hacked at the m4, by copying surrounding code, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it now appears to work sanely for me, including --{en,dis}able-xen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure options.  I have no idea whether what I have done is appropriate.
</span><br>
<span class="quotelev2">&gt;&gt; The attach patch should extend your code to also support building the
</span><br>
<span class="quotelev2">&gt;&gt; xen component as a plugin so we don't enforce the libxen hard dependency
</span><br>
<span class="quotelev2">&gt;&gt; inside the main hwloc library.
</span><br>
<span class="quotelev1">&gt; I was under the impression that the m4 so far would silently drop
</span><br>
<span class="quotelev1">&gt; support for Xen if the library was no available and the user didn't
</span><br>
<span class="quotelev1">&gt; explicitly --enable-xen, or have I misunderstood something?
</span><br>
<p>The problem is for distribution packages, not for custom builds.
<br>
Packagers have to choose if Xen support is enabled or not. If they
<br>
enable it, the package will require xen libs to be installed, and some
<br>
users may complain when installing those if they don't care about Xen.
<br>
If they don't enable it, people that care about Xen will need a custom
<br>
build or a hwloc-xen package. With plugins, you can enable everything at
<br>
compile time, but Xen libs are required at run-time only if you want to
<br>
load the Xen plugin.
<br>
<p><span class="quotelev2">&gt;&gt; Regarding component flags, the usual way to exclude ALL other components
</span><br>
<span class="quotelev2">&gt;&gt; if to put ~0 instead of
</span><br>
<span class="quotelev2">&gt;&gt;     HWLOC_DISC_COMPONENT_TYPE_CPU | HWLOC_DISC_COMPONENT_TYPE_GLOBAL
</span><br>
<span class="quotelev1">&gt; I didn't want to exclude PCI devices, as dom0 does have an accurate view
</span><br>
<span class="quotelev1">&gt; of them.  (Only at the moment, cant associate them with numa nodes).
</span><br>
<p>Putting PCI in that list of flags means that you exclude any other
<br>
component that discovers PCI devices. But it doesn't prevent you from
<br>
adding PCI discovery in the Xen backend itself.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; What is the canonical way of stating that a certain PU is offline?  Xen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't really do offline cpus of its own accord at the moment but does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a hypercalls to explicitly online and offline cpus.  In the case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that one is offline, I suspect my current code will cause the PU to fall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out of the rest of the topology, rather than stay within it and marked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; differently.
</span><br>
<span class="quotelev2">&gt;&gt; What we do in topology-linux.c is we clear the corresponding bit from
</span><br>
<span class="quotelev2">&gt;&gt; the top-level online_cpuset hwloc_get_root_obj(topology)-&gt;cpuset
</span><br>
<span class="quotelev2">&gt;&gt; Then the core will propagate that everywhere at the end of the discovery.
</span><br>
<span class="quotelev1">&gt; Does that mean that hwloc_insert_object_by_cpuset() will work correctly
</span><br>
<span class="quotelev1">&gt; inserting an object with a bit set in cpuset which is clear in the root
</span><br>
<span class="quotelev1">&gt; online_cpuset
</span><br>
<p>I think that's what Linux does (even if it's hard to check in the
<br>
way-too-long code).
<br>
<p><span class="quotelev1">&gt;  or will I have to explicitly construct each
</span><br>
<span class="quotelev1">&gt; sock/node/core object with correct cpuset and online_cpuset information?
</span><br>
<p>I don't think we ever do that in any backend (fortunately). The core
<br>
takes care of propagating things up and down at the end of the discovery.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4002.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4004.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
