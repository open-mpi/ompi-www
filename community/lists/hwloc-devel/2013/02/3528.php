<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 09:53:13 2013" -->
<!-- isoreceived="20130209145313" -->
<!-- sent="Sat, 09 Feb 2013 15:53:07 +0100" -->
<!-- isosent="20130209145307" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="511662D3.1060407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CCFF2B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-02-09 09:53:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3529.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/02/2013 15:48, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 6, 2013, at 1:01 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Check for libpciaccess.  If found, use it. STOP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - If not found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - check for libpci.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - if found, and if --enable-gpl-taint was specified, use it. STOP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - if not found, display the usual &quot;no pci support&quot; message at the end. STOP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - if found:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - display the usual &quot;no pci support&quot; message at the end
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - but also display a big, bold, flashing message saying &quot;We can enable PCI support in one of two ways: 1) download/install libpciaccess (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), or 2) pass --enable-gpl-taint to allow hwloc to use libpci, BUT BE AWARE THAT THIS MAKES THIS HWLOC BINARY AND EVERYTHING THAT IT LINKS TO BE GPL!&quot;
</span><br>
<span class="quotelev2">&gt;&gt; If &quot;configure --help&quot; and the big warning both say that enabling it
</span><br>
<span class="quotelev2">&gt;&gt; *may* taint as GPL, the option could just be &quot;--enable-libpci&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds ok to me (sorry for the delay in replying; I was traveling Friday).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you use the rest of the above scheme?
</span><br>
<p>I think the only difference is when passing --enable-libpci while
<br>
pciaccess is available. Above says &quot;use libpciaccess&quot;. My code uses
<br>
&quot;libpci&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3529.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3525.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
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
