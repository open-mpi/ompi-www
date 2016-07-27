<?
$subject_val = "Re: [hwloc-devel] hwloc on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 15 02:46:46 2015" -->
<!-- isoreceived="20150815064646" -->
<!-- sent="Sat, 15 Aug 2015 08:46:18 +0200" -->
<!-- isosent="20150815064618" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on Windows?" -->
<!-- id="55CEE03A.9070105_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6B86B7F2A4026246AA81BA1ABF9756906A79C465_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc on Windows?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-15 02:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4549.php">Tannenbaum, Barry M: "[hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Tannenbaum, Barry M: "[hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/08/2015 23:44, Tannenbaum, Barry M a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m trying to build/use hwloc on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first question is does hwloc do anything to explore the storage
</span><br>
<span class="quotelev1">&gt; devices on a Windows system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello
<br>
<p>Not yet. If I remember correctly, the main issue for I/O devices on
<br>
Windows is that PCI locality is available since Windows 8 (or something
<br>
&quot;recent&quot; I don't have). We have had
<br>
<a href="https://github.com/open-mpi/hwloc/issues/108">https://github.com/open-mpi/hwloc/issues/108</a> open for a while but
<br>
couldn't really look at it.
<br>
If you have patches, we'll be happy to integrate them, assuming we don't
<br>
need very recent windows releases :/
<br>
<p><span class="quotelev1">&gt; The second question is how do you build hwloc on Windows? I&#146;m building
</span><br>
<span class="quotelev1">&gt; with Cygwin and Visual Studio 2013. I managed to coerce the
</span><br>
<span class="quotelev1">&gt; configuration script to run, but when I tried to issue the &#147;make&#148;
</span><br>
<span class="quotelev1">&gt; command, it bombed out, starting with a message from cl that it didn&#146;t
</span><br>
<span class="quotelev1">&gt; know the &#147;-g&#148; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know how to solve this BUT I recently found that hwloc 1.11 was
<br>
being added to the cygwin distribution.
<br>
&nbsp;&nbsp;<a href="https://cygwin.com/ml/cygwin/2015-06/msg00418.html">https://cygwin.com/ml/cygwin/2015-06/msg00418.html</a>
<br>
Could this help?
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying to use the Visual Studio project provided, I got a pile of
</span><br>
<span class="quotelev1">&gt; warnings, and then errors looking for definitions of HWLOC_VERSION.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Unfornately, we have no way to automatize the testing of these files,
<br>
and they get outdated quickly. They were written for 1.9. Since 1.10, we
<br>
use HWLOC_VERSION instead of VERSION everywhere in the code, so I guess
<br>
the project files should be updated to define HWLOC_VERSION as well.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously I&#146;m doing this wrong. Can someone suggest how to build hwloc
</span><br>
<span class="quotelev1">&gt; on Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Looks like you're not doing anything wrong. You're just unlucky, being
<br>
one of the very few people that tries to build recent releases :/
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4549.php">Tannenbaum, Barry M: "[hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4549.php">Tannenbaum, Barry M: "[hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
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
