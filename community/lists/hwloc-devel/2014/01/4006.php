<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - some initial code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  1 16:47:41 2014" -->
<!-- isoreceived="20140101214741" -->
<!-- sent="Wed, 1 Jan 2014 21:47:40 +0000" -->
<!-- isosent="20140101214740" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - some initial code" -->
<!-- id="52C48CFC.4030804_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52C48572.1040605_at_inria.fr" -->
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
<strong>Date:</strong> 2014-01-01 16:47:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/01/2014 21:15, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 01/01/2014 21:55, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; But Xen itself has none of this information directly. In all cases,
</span><br>
<span class="quotelev2">&gt;&gt; hwloc should defer to the native PCI method, which is why I
</span><br>
<span class="quotelev2">&gt;&gt; explciticly didn't exclude it. 
</span><br>
<span class="quotelev1">&gt; Ok good then!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I didn't test the code, I only compiled tested on a machine
</span><br>
<span class="quotelev1">&gt; without Xen but with patched Xen libs, and loading hwloc hit the error
</span><br>
<span class="quotelev1">&gt; path in instantiate()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>I tested the code insofar as running it repeatedly on my test box, and
<br>
finding a few of that larger/more interesting boxes in our test pool. 
<br>
As said at the root of this thread, the diagrams drawn match my
<br>
expectation of how the servers are supposedly laid out.
<br>
<p>At the moment, my list of activities is:
<br>
* See about getting plugins working (./configure is still wanting to
<br>
build Xen support in, rather than making it a plugin)
<br>
* Get NUMA memory and distances recorded (as the information is already
<br>
available)
<br>
* Get offline cpus working.
<br>
<p>I am in two minds about that patch to libxc.
<br>
<p>On the one hand, libxenctrl is a fairly lightweight library (no
<br>
dependencies), whose purpose is to be a thin wrapper to basic Xen
<br>
controls.  However, it explicitly has an unstable API which is free to
<br>
change in the future, and I can make no guarentee that the API of those
<br>
functions wont change (especially as I have a plan to remove the
<br>
ambiguity between online/offline cpus and their topology location).
<br>
<p>The other option which I discounted initially was to use libxenlight. 
<br>
libxl explicitly has a stable API (but unstable ABI).  It comes with a
<br>
host of dependencies (libxlutil, libxenstore, libxenguest, libyajl,
<br>
libuuid, libbz2, liblzma, libz off the top of my head, and probably more).
<br>
<p>Furthermore, libxc exported the information in the format I wanted to
<br>
consume it in, rather than libxl which translates it to a less useful
<br>
format as part of retrieving the information.
<br>
<p>As the Xen part of hwloc is going to be a plugin, using libxl might not
<br>
be so bad, and having a stable API would certainly be good (even if it
<br>
means doing a reverse transform on the information received from libxl).
<br>
<p>For the moment, I shall continue using libxc as it easier and already
<br>
working.
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Previous message:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>In reply to:</strong> <a href="4005.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4007.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
<li><strong>Reply:</strong> <a href="4011.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - some initial code"</a>
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
