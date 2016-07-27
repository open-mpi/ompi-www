<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 01:10:01 2013" -->
<!-- isoreceived="20130206061001" -->
<!-- sent="Wed, 06 Feb 2013 07:09:54 +0100" -->
<!-- isosent="20130206060954" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="5111F3B2.1060206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130206005518.GI6146_at_type.wlan.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 01:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3503.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3501.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3500.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3504.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3504.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3514.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/02/2013 01:55, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres), le Wed 06 Feb 2013 01:41:21 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2013, at 3:50 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres (jsquyres), le Tue 05 Feb 2013 22:52:01 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was just pointed out to me that libpci is licensed under the GPL (not the LGPL).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm told that we could use libpciaccess instead, which is BSD.
</span><br>
<span class="quotelev2">&gt;&gt; That would be great -- is it easily available?
</span><br>
<span class="quotelev1">&gt; Yes. I've made a quick port, it does work. libpciaccess is however a
</span><br>
<span class="quotelev1">&gt; bit buggy (it doesn't find my nvidia card for instance), and does not
</span><br>
<span class="quotelev1">&gt; support finding capabilities (but we can do this by hand).
</span><br>
<p>Hmmm, all this licensing mess is likely my fault. I don't remember if I
<br>
checked the pciutils licence when I started the port...
<br>
<p>I looked at pciaccess a couple years ago because pciutils wasn't
<br>
available on darwin. The early conclusion was that it didn't support
<br>
bridges, but that doesn't seem true: your patch finds everything on my
<br>
laptop (Intel based including link speed). pcidev-&gt;name isn't set but
<br>
that looks easy to fix.
<br>
<p>My experience with Xorg package maintenance didn't make me trust that
<br>
sort of upstream much :/ But I may still have commit access there if we
<br>
need to fix some bugs :)
<br>
<p>Any idea why it doesn't find your nvidia card? I didn't find anything in
<br>
google except some ugly Xorg-related problems. I hop it's not related to
<br>
the drm kernel drivers doing some initialization before libpciaccess can
<br>
find the card.
<br>
<p>By the way, the contamination should be limited to the libpci plugin
<br>
when plugins are enabled.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3503.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3501.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3500.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3504.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3504.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3514.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
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
