<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:11:00 2013" -->
<!-- isoreceived="20130206151100" -->
<!-- sent="Wed, 6 Feb 2013 15:10:55 +0000" -->
<!-- isosent="20130206151055" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CC9888_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5112706F.4070407_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 10:10:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2013, at 7:02 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just pushed Samuel's patch + the configury + one fix for object names.
</span><br>
<span class="quotelev1">&gt; The code currently uses libpciaccess by default. pciutils is only used
</span><br>
<span class="quotelev1">&gt; when libpciaccess isn't available. 
</span><br>
<p><p>I think that this will still result in many GPL-enabled hwlocs by default because libpci is installed on many distros by default, but libpciaccess is not.
<br>
<p>How about:
<br>
<p>- Check for libpciaccess.  If found, use it. STOP.
<br>
- If not found:
<br>
&nbsp;&nbsp;- check for libpci.
<br>
&nbsp;&nbsp;- if found, and if --enable-gpl-taint was specified, use it. STOP.
<br>
&nbsp;&nbsp;- if not found, display the usual &quot;no pci support&quot; message at the end. STOP.
<br>
&nbsp;&nbsp;- if found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- display the usual &quot;no pci support&quot; message at the end
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- but also display a big, bold, flashing message saying &quot;We can enable PCI support in one of two ways: 1) download/install libpciaccess (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), or 2) pass --enable-gpl-taint to allow hwloc to use libpci, BUT BE AWARE THAT THIS MAKES THIS HWLOC BINARY AND EVERYTHING THAT IT LINKS TO BE GPL!&quot;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3507.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3507.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3509.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
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
