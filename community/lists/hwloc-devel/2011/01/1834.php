<?
$subject_val = "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 15:15:06 2011" -->
<!-- isoreceived="20110118201506" -->
<!-- sent="Tue, 18 Jan 2011 21:14:59 +0100" -->
<!-- isosent="20110118201459" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux" -->
<!-- id="4D35F4C3.4010007_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1295375909.2218.223.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 15:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>In reply to:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/01/2011 19:38, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; max_os_index = 512, HWLOC_BITS_PER_LONG = 64, rounding gives
</span><br>
<span class="quotelev1">&gt; max_os_index = 576.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also saw the same behaviour on a much smaller machine (usual 2-socket
</span><br>
<span class="quotelev1">&gt; Nehalem-EP). CONFIG_NODES_SHIFT is not found in /proc/config.gz.
</span><br>
<span class="quotelev1">&gt; max_os_index = 64, HWLOC_BITS_PER_LONG = 64, rounding gives max_os_index
</span><br>
<span class="quotelev1">&gt; = 128.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps. BK
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>Ok thanks. Your patch is correct because we already guarantee that
<br>
max_os_index is a multiple of BITS_PER_LONG. I will add a comment and
<br>
debug assert about this. This will go into 1.1.1.
<br>
<p>Thanks a lot.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1835.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>In reply to:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
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
