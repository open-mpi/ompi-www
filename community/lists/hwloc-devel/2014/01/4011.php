<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 09:10:39 2014" -->
<!-- isoreceived="20140106141039" -->
<!-- sent="Mon, 06 Jan 2014 15:10:36 +0100" -->
<!-- isosent="20140106141036" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52CAB95C.7010705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C48CFC.4030804_at_citrix.com" -->
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
<strong>Date:</strong> 2014-01-06 09:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4010.php">Andrew Cooper: "Re: [hwloc-devel] [Xen-devel] Hwloc with Xen host topology"</a>
<li><strong>In reply to:</strong> <a href="4006.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Here's a new patchset that fixes the remaining problems on my side.
<br>
01 is basically the same I sent earlier.
<br>
02 and 03 export two core functions to plugins
<br>
04 is basically the same I sent earlier, without the hacky #include
<br>
&lt;private/private.h&gt; that was waiting for 02-03
<br>
05 lets me check that topology-xen.c builds when libxen isn't available
<br>
(useful for regression testing all backends when changing internals,
<br>
used with &quot;make check -C tests/ports&quot;)
<br>
<p>The Xen component seems to work fine as a plugin. The Xen lib dependency
<br>
is only in the plugin:
<br>
$ ldd utils/.libs/lstopo | grep xen
<br>
$ ldd src/.libs/libhwloc.so | grep xen
<br>
$ ldd src/.libs/hwloc_xen.so | grep xen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libxenctrl-4.3.so =&gt; /usr/lib/libxenctrl-4.3.so (0x00007f3de693c000)
<br>
<p>You can try with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make &amp;&amp; make install &amp;&amp; HWLOC_XEN=1 utils/lstopo
<br>
Add HWLOC_PLUGINS_VERBOSE for details about plugins being loaded. And
<br>
HWLOC_COMPONENTS_VERBOSE for details components being enabled or not.
<br>
<p><p>A couple comments below.
<br>
<p><p>Le 01/01/2014 22:47, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev1">&gt; At the moment, my list of activities is:
</span><br>
<span class="quotelev1">&gt; * See about getting plugins working (./configure is still wanting to
</span><br>
<span class="quotelev1">&gt; build Xen support in, rather than making it a plugin)
</span><br>
<span class="quotelev1">&gt; * Get NUMA memory and distances recorded (as the information is already
</span><br>
<span class="quotelev1">&gt; available)
</span><br>
<span class="quotelev1">&gt; * Get offline cpus working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am in two minds about that patch to libxc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the one hand, libxenctrl is a fairly lightweight library (no
</span><br>
<span class="quotelev1">&gt; dependencies), whose purpose is to be a thin wrapper to basic Xen
</span><br>
<span class="quotelev1">&gt; controls.  However, it explicitly has an unstable API which is free to
</span><br>
<span class="quotelev1">&gt; change in the future, and I can make no guarentee that the API of those
</span><br>
<span class="quotelev1">&gt; functions wont change (especially as I have a plan to remove the
</span><br>
<span class="quotelev1">&gt; ambiguity between online/offline cpus and their topology location).
</span><br>
<p>Is there a #define that we check to easily detect which API is available
<br>
without having multiple API checks in configure?
<br>
<p><span class="quotelev1">&gt; The other option which I discounted initially was to use libxenlight. 
</span><br>
<span class="quotelev1">&gt; libxl explicitly has a stable API (but unstable ABI).  It comes with a
</span><br>
<span class="quotelev1">&gt; host of dependencies (libxlutil, libxenstore, libxenguest, libyajl,
</span><br>
<span class="quotelev1">&gt; libuuid, libbz2, liblzma, libz off the top of my head, and probably more).
</span><br>
<p>According to you, in reality, how often will libxl be installed on
<br>
existing platforms, compared to libxc?
<br>
<p><span class="quotelev1">&gt; Furthermore, libxc exported the information in the format I wanted to
</span><br>
<span class="quotelev1">&gt; consume it in, rather than libxl which translates it to a less useful
</span><br>
<span class="quotelev1">&gt; format as part of retrieving the information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As the Xen part of hwloc is going to be a plugin, using libxl might not
</span><br>
<span class="quotelev1">&gt; be so bad, and having a stable API would certainly be good (even if it
</span><br>
<span class="quotelev1">&gt; means doing a reverse transform on the information received from libxl).
</span><br>
<p>We won't release hwloc v1.9 before a couple months. You can take some
<br>
time to decide. I don't have a strong feeling about this choice.
<br>
<p>Brice
<br>
<p><p>




<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4011/05-xen-cross-testing.patch">05-xen-cross-testing.patch</a>
</ul>
<!-- attachment="05-xen-cross-testing.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4011/04-xen-plugin.patch">04-xen-plugin.patch</a>
</ul>
<!-- attachment="04-xen-plugin.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4011/03-export_setup_pu_level.patch">03-export_setup_pu_level.patch</a>
</ul>
<!-- attachment="03-export_setup_pu_level.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4011/02-export_alloc_root_sets.patch">02-export_alloc_root_sets.patch</a>
</ul>
<!-- attachment="02-export_alloc_root_sets.patch" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4011/01-instantiate.patch">01-instantiate.patch</a>
</ul>
<!-- attachment="01-instantiate.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4010.php">Andrew Cooper: "Re: [hwloc-devel] [Xen-devel] Hwloc with Xen host topology"</a>
<li><strong>In reply to:</strong> <a href="4006.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4012.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
