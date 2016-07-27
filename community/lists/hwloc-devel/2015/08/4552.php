<?
$subject_val = "Re: [hwloc-devel] hwloc on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 12:23:54 2015" -->
<!-- isoreceived="20150817162354" -->
<!-- sent="Mon, 17 Aug 2015 18:23:50 +0200" -->
<!-- isosent="20150817162350" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc on Windows?" -->
<!-- id="55D20A96.3000006_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6B86B7F2A4026246AA81BA1ABF9756906A7A5D55_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2015-08-17 12:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
autoconf/configure just put it with other in the main autogen/config.h file:
<br>
include/private/autogen/config.h:#define HWLOC_VERSION &quot;2.0.0a1-git&quot;
<br>
include/private/autogen/config.h:#define PACKAGE_VERSION &quot;2.0.0a1-git&quot;
<br>
include/private/autogen/config.h:#define VERSION &quot;2.0.0a1-git&quot;
<br>
<p>Brice
<br>
<p><p><p>Le 17/08/2015 17:39, Tannenbaum, Barry M a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can give me a clue where HWLOC_VERSION is **supposed** to be
</span><br>
<span class="quotelev1">&gt; defined, I&#146;ll run through and at least get rid of the annoying
</span><br>
<span class="quotelev1">&gt; warnings that Visual Studio is spewing. Things like size conversion
</span><br>
<span class="quotelev1">&gt; warnings and signed/unsigned mismatches.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -        Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Brice Goglin
</span><br>
<span class="quotelev1">&gt; *Sent:* Saturday, August 15, 2015 2:46 AM
</span><br>
<span class="quotelev1">&gt; *To:* hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-devel] hwloc on Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 14/08/2015 23:44, Tannenbaum, Barry M a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I&#146;m trying to build/use hwloc on Windows.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The first question is does hwloc do anything to explore the
</span><br>
<span class="quotelev1">&gt;     storage devices on a Windows system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not yet. If I remember correctly, the main issue for I/O devices on
</span><br>
<span class="quotelev1">&gt; Windows is that PCI locality is available since Windows 8 (or
</span><br>
<span class="quotelev1">&gt; something &quot;recent&quot; I don't have). We have had
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/issues/108">https://github.com/open-mpi/hwloc/issues/108</a> open for a while but
</span><br>
<span class="quotelev1">&gt; couldn't really look at it.
</span><br>
<span class="quotelev1">&gt; If you have patches, we'll be happy to integrate them, assuming we
</span><br>
<span class="quotelev1">&gt; don't need very recent windows releases :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The second question is how do you build hwloc on Windows? I&#146;m
</span><br>
<span class="quotelev1">&gt;     building with Cygwin and Visual Studio 2013. I managed to coerce
</span><br>
<span class="quotelev1">&gt;     the configuration script to run, but when I tried to issue the
</span><br>
<span class="quotelev1">&gt;     &#147;make&#148; command, it bombed out, starting with a message from cl
</span><br>
<span class="quotelev1">&gt;     that it didn&#146;t know the &#147;-g&#148; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how to solve this BUT I recently found that hwloc 1.11
</span><br>
<span class="quotelev1">&gt; was being added to the cygwin distribution.
</span><br>
<span class="quotelev1">&gt;   <a href="https://cygwin.com/ml/cygwin/2015-06/msg00418.html">https://cygwin.com/ml/cygwin/2015-06/msg00418.html</a>
</span><br>
<span class="quotelev1">&gt; Could this help?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Trying to use the Visual Studio project provided, I got a pile of
</span><br>
<span class="quotelev1">&gt;     warnings, and then errors looking for definitions of HWLOC_VERSION.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfornately, we have no way to automatize the testing of these files,
</span><br>
<span class="quotelev1">&gt; and they get outdated quickly. They were written for 1.9. Since 1.10,
</span><br>
<span class="quotelev1">&gt; we use HWLOC_VERSION instead of VERSION everywhere in the code, so I
</span><br>
<span class="quotelev1">&gt; guess the project files should be updated to define HWLOC_VERSION as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Obviously I&#146;m doing this wrong. Can someone suggest how to build
</span><br>
<span class="quotelev1">&gt;     hwloc on Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like you're not doing anything wrong. You're just unlucky, being
</span><br>
<span class="quotelev1">&gt; one of the very few people that tries to build recent releases :/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4551.php">http://www.open-mpi.org/community/lists/hwloc-devel/2015/08/4551.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Previous message:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>In reply to:</strong> <a href="4551.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
<li><strong>Reply:</strong> <a href="4553.php">Tannenbaum, Barry M: "Re: [hwloc-devel] hwloc on Windows?"</a>
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
