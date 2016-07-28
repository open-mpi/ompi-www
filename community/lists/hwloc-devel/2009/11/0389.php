<?
$subject_val = "Re: [hwloc-devel] towards PLPA-like API in 1.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 13:41:36 2009" -->
<!-- isoreceived="20091112184136" -->
<!-- sent="Thu, 12 Nov 2009 19:41:23 +0100" -->
<!-- isosent="20091112184123" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] towards PLPA-like API in 1.0" -->
<!-- id="4AFC56D3.5030605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="19B840D6-400D-4BD7-BD2A-C8540CF1FEE5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] towards PLPA-like API in 1.0<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 13:41:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Brice Goglin: "[hwloc-devel] hwloc at SC09"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; Well, the list of good ideas will be very short then :) Most remaining
</span><br>
<span class="quotelev2">&gt;&gt; functions are about manipulating core and socket ids, we don't need that
</span><br>
<span class="quotelev2">&gt;&gt; at all in hwloc anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, having a &quot;simple&quot; API like that might be a Good Thing...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., just be able to bind to a specific thread/core/socket with a
</span><br>
<span class="quotelev1">&gt; minimum fuss/muss. Even if such an API would be mainly syntactic sugar
</span><br>
<span class="quotelev1">&gt; for other hwloc functionality -- there definitely is something to be
</span><br>
<span class="quotelev1">&gt; said for &quot;make the simple things simple&quot;.  It will definitely (IMNSHO)
</span><br>
<span class="quotelev1">&gt; extend hwloc's reach into a larger class of applications.  Meaning:
</span><br>
<span class="quotelev1">&gt; there are a variety of hard-coded apps out there that we'll never see;
</span><br>
<span class="quotelev1">&gt; apps that run on specific servers for specific purposes, where the
</span><br>
<span class="quotelev1">&gt; developers hard code in there &quot;bind to cores 1-4&quot; or &quot;bind to sockets
</span><br>
<span class="quotelev1">&gt; 1,3&quot; because they already know the setup and this app is not intended
</span><br>
<span class="quotelev1">&gt; to be portable.
</span><br>
<p>Oh sorry, I wasn't clear. I am not against a socket+core API [1]. What I
<br>
find useless with hwloc is using the physical/OS ids. hwloc/plpa.h uses
<br>
obj-&gt;os_index everywhere, while os_index is meaningless excep at the
<br>
PROC level (when binding). If you want the second core in the second
<br>
socket, you don't care about their physical/OS indexes (which are often
<br>
non-consecutive, repeating, ...), you just want to use logical indexes.
<br>
OS/physical indexes change all the time anyway (when upgrading the BIOS,
<br>
the kernel, ...).
<br>
<p><span class="quotelev1">&gt; It may be useful to have the API be extensible;
</span><br>
<p>I don't see how you could be extensible without being close the generic
<br>
hwloc API.
<br>
<p><span class="quotelev1">&gt; one thing I have heard rumors about coming in the not-distant future
</span><br>
<span class="quotelev1">&gt; is the concept of &quot;boards&quot; (multiple motherboards in a single box). 
</span><br>
<span class="quotelev1">&gt; I.e., socket IDs may be repeated; they are differentiated by board
</span><br>
<span class="quotelev1">&gt; number.
</span><br>
<p>Actually, we've seen many strange things like this in the non-x86 world.
<br>
It doesn't look very different from Bull's QBBs or SGI Blades in large
<br>
Itanium machines :)
<br>
<p>Brice
<br>
<p>[1] But we'll have to choose between socket+core and NUMA+core (often
<br>
similar but not always), and maybe other useful basic setups.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0390.php">Brice Goglin: "[hwloc-devel] hwloc at SC09"</a>
<li><strong>Previous message:</strong> <a href="0388.php">Samuel Thibault: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<li><strong>In reply to:</strong> <a href="0387.php">Jeff Squyres: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0419.php">Brice Goglin: "Re: [hwloc-devel] towards PLPA-like API in 1.0"</a>
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
