<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 13:01:38 2013" -->
<!-- isoreceived="20130206180138" -->
<!-- sent="Wed, 06 Feb 2013 19:01:32 +0100" -->
<!-- isosent="20130206180132" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="51129A7C.3020700_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC9888_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-02-06 13:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3512.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3513.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3513.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/02/2013 16:10, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 6, 2013, at 7:02 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just pushed Samuel's patch + the configury + one fix for object names.
</span><br>
<span class="quotelev2">&gt;&gt; The code currently uses libpciaccess by default. pciutils is only used
</span><br>
<span class="quotelev2">&gt;&gt; when libpciaccess isn't available. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this will still result in many GPL-enabled hwlocs by default because libpci is installed on many distros by default, but libpciaccess is not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Check for libpciaccess.  If found, use it. STOP.
</span><br>
<span class="quotelev1">&gt; - If not found:
</span><br>
<span class="quotelev1">&gt;   - check for libpci.
</span><br>
<span class="quotelev1">&gt;   - if found, and if --enable-gpl-taint was specified, use it. STOP.
</span><br>
<span class="quotelev1">&gt;   - if not found, display the usual &quot;no pci support&quot; message at the end. STOP.
</span><br>
<span class="quotelev1">&gt;   - if found:
</span><br>
<span class="quotelev1">&gt;     - display the usual &quot;no pci support&quot; message at the end
</span><br>
<span class="quotelev1">&gt;     - but also display a big, bold, flashing message saying &quot;We can enable PCI support in one of two ways: 1) download/install libpciaccess (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), or 2) pass --enable-gpl-taint to allow hwloc to use libpci, BUT BE AWARE THAT THIS MAKES THIS HWLOC BINARY AND EVERYTHING THAT IT LINKS TO BE GPL!&quot;
</span><br>
<p>If &quot;configure --help&quot; and the big warning both say that enabling it
<br>
*may* taint as GPL, the option could just be &quot;--enable-libpci&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3512.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3513.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3513.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
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
