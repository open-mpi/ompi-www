<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  6 09:39:21 2014" -->
<!-- isoreceived="20140106143921" -->
<!-- sent="Mon, 6 Jan 2014 14:31:39 +0000" -->
<!-- isosent="20140106143139" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52CABE4B.3050502_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52CAB95C.7010705_at_inria.fr" -->
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
<strong>Date:</strong> 2014-01-06 09:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/01/14 14:10, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a new patchset that fixes the remaining problems on my side.
</span><br>
<span class="quotelev1">&gt; 01 is basically the same I sent earlier.
</span><br>
<span class="quotelev1">&gt; 02 and 03 export two core functions to plugins
</span><br>
<span class="quotelev1">&gt; 04 is basically the same I sent earlier, without the hacky #include
</span><br>
<span class="quotelev1">&gt; &lt;private/private.h&gt; that was waiting for 02-03
</span><br>
<span class="quotelev1">&gt; 05 lets me check that topology-xen.c builds when libxen isn't available
</span><br>
<span class="quotelev1">&gt; (useful for regression testing all backends when changing internals,
</span><br>
<span class="quotelev1">&gt; used with &quot;make check -C tests/ports&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Xen component seems to work fine as a plugin. The Xen lib dependency
</span><br>
<span class="quotelev1">&gt; is only in the plugin:
</span><br>
<span class="quotelev1">&gt; $ ldd utils/.libs/lstopo | grep xen
</span><br>
<span class="quotelev1">&gt; $ ldd src/.libs/libhwloc.so | grep xen
</span><br>
<span class="quotelev1">&gt; $ ldd src/.libs/hwloc_xen.so | grep xen
</span><br>
<span class="quotelev1">&gt;     libxenctrl-4.3.so =&gt; /usr/lib/libxenctrl-4.3.so (0x00007f3de693c000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can try with
</span><br>
<span class="quotelev1">&gt;     make &amp;&amp; make install &amp;&amp; HWLOC_XEN=1 utils/lstopo
</span><br>
<span class="quotelev1">&gt; Add HWLOC_PLUGINS_VERBOSE for details about plugins being loaded. And
</span><br>
<span class="quotelev1">&gt; HWLOC_COMPONENTS_VERBOSE for details components being enabled or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple comments below.
</span><br>
<p>Fantastic thanks.
<br>
<p>I have a slightly improved version which does Numa node memory
<br>
annotations as well (in so far as Xen reports them, which currently
<br>
doesn't reflect reality - another bug raised against Xen)
<br>
<p>I shall merge these patches and my current WIP to make a &quot;xen hwloc v2&quot;
<br>
branch for review.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/01/2014 22:47, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, my list of activities is:
</span><br>
<span class="quotelev2">&gt;&gt; * See about getting plugins working (./configure is still wanting to
</span><br>
<span class="quotelev2">&gt;&gt; build Xen support in, rather than making it a plugin)
</span><br>
<span class="quotelev2">&gt;&gt; * Get NUMA memory and distances recorded (as the information is already
</span><br>
<span class="quotelev2">&gt;&gt; available)
</span><br>
<span class="quotelev2">&gt;&gt; * Get offline cpus working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am in two minds about that patch to libxc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the one hand, libxenctrl is a fairly lightweight library (no
</span><br>
<span class="quotelev2">&gt;&gt; dependencies), whose purpose is to be a thin wrapper to basic Xen
</span><br>
<span class="quotelev2">&gt;&gt; controls.  However, it explicitly has an unstable API which is free to
</span><br>
<span class="quotelev2">&gt;&gt; change in the future, and I can make no guarentee that the API of those
</span><br>
<span class="quotelev2">&gt;&gt; functions wont change (especially as I have a plan to remove the
</span><br>
<span class="quotelev2">&gt;&gt; ambiguity between online/offline cpus and their topology location).
</span><br>
<span class="quotelev1">&gt; Is there a #define that we check to easily detect which API is available
</span><br>
<span class="quotelev1">&gt; without having multiple API checks in configure?
</span><br>
<p>No, which is one of the pain-points for using it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other option which I discounted initially was to use libxenlight. 
</span><br>
<span class="quotelev2">&gt;&gt; libxl explicitly has a stable API (but unstable ABI).  It comes with a
</span><br>
<span class="quotelev2">&gt;&gt; host of dependencies (libxlutil, libxenstore, libxenguest, libyajl,
</span><br>
<span class="quotelev2">&gt;&gt; libuuid, libbz2, liblzma, libz off the top of my head, and probably more).
</span><br>
<span class="quotelev1">&gt; According to you, in reality, how often will libxl be installed on
</span><br>
<span class="quotelev1">&gt; existing platforms, compared to libxc?
</span><br>
<p>The available hypercalls in Xen are only present in versions of Xen
<br>
which also have libxl, so the answer should be 100% of the time. 
<br>
Whether libxl gets packaged properly is a different matter (I know that
<br>
debian is particularly crazy at the moment).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, libxc exported the information in the format I wanted to
</span><br>
<span class="quotelev2">&gt;&gt; consume it in, rather than libxl which translates it to a less useful
</span><br>
<span class="quotelev2">&gt;&gt; format as part of retrieving the information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As the Xen part of hwloc is going to be a plugin, using libxl might not
</span><br>
<span class="quotelev2">&gt;&gt; be so bad, and having a stable API would certainly be good (even if it
</span><br>
<span class="quotelev2">&gt;&gt; means doing a reverse transform on the information received from libxl).
</span><br>
<span class="quotelev1">&gt; We won't release hwloc v1.9 before a couple months. You can take some
</span><br>
<span class="quotelev1">&gt; time to decide. I don't have a strong feeling about this choice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>I will bring it up on xen-devel when post v2.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4013.php">Andrew Cooper: "[hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
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
