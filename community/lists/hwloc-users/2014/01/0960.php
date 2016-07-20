<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 03:57:32 2014" -->
<!-- isoreceived="20140128085732" -->
<!-- sent="Tue, 28 Jan 2014 09:57:30 +0100" -->
<!-- isosent="20140128085730" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E770FA.7000309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AF1F7E95-D336-44BF-8580-BE10D8EC033E_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 03:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2014 09:46, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi, thanks for responding. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The CPUModel is definitely available on this machine. A 32 bit process
</span><br>
<span class="quotelev1">&gt; on the same machine correctly finds the model name using code that
</span><br>
<span class="quotelev1">&gt; calls the cpuid inline assembly to get it, and the machine itself is a
</span><br>
<span class="quotelev1">&gt; VM running on a Mac, and I get the same model name from the code on
</span><br>
<span class="quotelev1">&gt; Mac and on a Linux VM running on the same machine as well. It seems to
</span><br>
<span class="quotelev1">&gt; be an issue with the Windows port of hwloc, and possibly only with the
</span><br>
<span class="quotelev1">&gt; 64 bit version (I haven't tried the 32 bit version yet). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the prebuilt binary on Windows. I haven't tried (and I'm
</span><br>
<span class="quotelev1">&gt; not sure I want to try) building hwloc from source on Windows x64
</span><br>
<span class="quotelev1">&gt; using MSVC, but I have found out so far today that Microsoft makes
</span><br>
<span class="quotelev1">&gt; available a compiler intrinsic to get access to cpuid as a C function,
</span><br>
<span class="quotelev1">&gt; and that's supposed to allow you to do the same kind of cpuid call
</span><br>
<span class="quotelev1">&gt; work done previously as inline assembly. Perhaps someone out there is
</span><br>
<span class="quotelev1">&gt; more familiar with this specific functionality in hwloc and can fix
</span><br>
<span class="quotelev1">&gt; this for the 64 bit Windows build? I can take a stab at it, but like I
</span><br>
<span class="quotelev1">&gt; said, the biggest hwloc development I've done is setting a flag in the
</span><br>
<span class="quotelev1">&gt; configure script when I build on Unix.
</span><br>
<p>Building for MSVC might be hard right now but somebody is working at it
<br>
(and I have a vcxproj to check in my INBOX).
<br>
I will debug a bit more to see if it's actually a 64bit cpuid problem on
<br>
windows.
<br>
<p><span class="quotelev1">&gt; As a last question, where is the &quot;CPUModel&quot; documented about where it
</span><br>
<span class="quotelev1">&gt; would appear? I was looking for that but couldn't find it.
</span><br>
<p>There's a &quot;object attributes&quot; section in the doc. In the PDF, just look
<br>
for CPUModel. In the HTML, these sections are available from the
<br>
&quot;related pages&quot; tab.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0960/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0959.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
