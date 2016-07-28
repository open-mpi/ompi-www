<?
$subject_val = "Re: [hwloc-users] GPU/NIC/CPU locality";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 29 09:28:44 2011" -->
<!-- isoreceived="20111129142844" -->
<!-- sent="Tue, 29 Nov 2011 09:28:38 -0500" -->
<!-- isosent="20111129142838" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] GPU/NIC/CPU locality" -->
<!-- id="B41330DB-A944-4CDA-8E2C-7B90EC8E25AD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F9D6E883-6974-45E8-9128-B41613B4D1C0_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] GPU/NIC/CPU locality<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-29 09:28:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2011, at 7:25 AM, Stefan Eilemann wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You are probably missing the libpci-devel package.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, that either doesn't exist or wasn't installed on Redhat. It works now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think messages of found/not found optional modules could be more prominent at the end of the configure process.
</span><br>
<p>FWIW, I've traditionally been against such things for two reasons:
<br>
<p>1. The information *was* displayed above (i.e., that pci-devel wasn't found/wasn't usable/whatever).  I realize that most people don't read the stdout of configure at all, but all the information you need is already there.
<br>
<p>2. A list of what will/will not be built at the end tends to grow lengthy such that it dilutes the value of repeating the information at the end.
<br>
<p>That being said, I can *somewhat* see the value of displaying a user-friendly &quot;PCI device support will not be built&quot; vs. the output of a configure test, which might be somewhat obscure.  However, in hwloc's case, the configure test output is pretty self-evident.  Examples:
<br>
<p>checking for PCI... no
<br>
checking pci/pci.h usability... no
<br>
checking pci/pci.h presence... no
<br>
checking for pci/pci.h... no
<br>
checking for LIBXML2... yes
<br>
checking for xmlNewDoc... yes
<br>
checking for final LIBXML2 support... yes
<br>
<p>A simple string search for &quot;pci&quot; and &quot;xml&quot; will find these lines in the configure output.  Assumedly, if you're building from source, you've likely got at least *some* experience and it shouldn't be unreasonable to ask you to go look in the output of configure.
<br>
<p>Don't get me wrong -- I'm not dead-set against a listing at the bottom.  I just find it redundant and somewhat of a maintenance hassle.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Previous message:</strong> <a href="0477.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>In reply to:</strong> <a href="0477.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
<li><strong>Reply:</strong> <a href="0479.php">Stefan Eilemann: "Re: [hwloc-users] GPU/NIC/CPU locality"</a>
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
