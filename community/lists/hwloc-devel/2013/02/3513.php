<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 16:25:15 2013" -->
<!-- isoreceived="20130206212515" -->
<!-- sent="Wed, 06 Feb 2013 22:25:09 +0100" -->
<!-- isosent="20130206212509" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="5112CA35.4050400_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51129A7C.3020700_at_inria.fr" -->
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
<strong>Date:</strong> 2013-02-06 16:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3514.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3512.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3516.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3516.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/02/2013 19:01, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 06/02/2013 16:10, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2013, at 7:02 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just pushed Samuel's patch + the configury + one fix for object names.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code currently uses libpciaccess by default. pciutils is only used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when libpciaccess isn't available. 
</span><br>
<span class="quotelev2">&gt;&gt; I think that this will still result in many GPL-enabled hwlocs by default because libpci is installed on many distros by default, but libpciaccess is not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Check for libpciaccess.  If found, use it. STOP.
</span><br>
<span class="quotelev2">&gt;&gt; - If not found:
</span><br>
<span class="quotelev2">&gt;&gt;   - check for libpci.
</span><br>
<span class="quotelev2">&gt;&gt;   - if found, and if --enable-gpl-taint was specified, use it. STOP.
</span><br>
<span class="quotelev2">&gt;&gt;   - if not found, display the usual &quot;no pci support&quot; message at the end. STOP.
</span><br>
<span class="quotelev2">&gt;&gt;   - if found:
</span><br>
<span class="quotelev2">&gt;&gt;     - display the usual &quot;no pci support&quot; message at the end
</span><br>
<span class="quotelev2">&gt;&gt;     - but also display a big, bold, flashing message saying &quot;We can enable PCI support in one of two ways: 1) download/install libpciaccess (<a href="http://cgit.freedesktop.org/xorg/lib/libpciaccess/">http://cgit.freedesktop.org/xorg/lib/libpciaccess/</a>), or 2) pass --enable-gpl-taint to allow hwloc to use libpci, BUT BE AWARE THAT THIS MAKES THIS HWLOC BINARY AND EVERYTHING THAT IT LINKS TO BE GPL!&quot;
</span><br>
<span class="quotelev1">&gt; If &quot;configure --help&quot; and the big warning both say that enabling it
</span><br>
<span class="quotelev1">&gt; *may* taint as GPL, the option could just be &quot;--enable-libpci&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>See the attached patch.
<br>
<p>By the way, libpciaccess looks OK in a FreeBSD 9.1 VM. On NetBSD 6, the
<br>
only problem I see is that it doesn't find vendor/device names, but I am
<br>
far from being sure I have everything needed installed.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3513/enable_libpci.patch">enable_libpci.patch</a>
</ul>
<!-- attachment="enable_libpci.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3514.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3512.php">Samuel Thibault: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3516.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3516.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
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
