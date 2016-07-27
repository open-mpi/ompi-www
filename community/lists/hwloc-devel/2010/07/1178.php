<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 09:36:44 2010" -->
<!-- isoreceived="20100716133644" -->
<!-- sent="Fri, 16 Jul 2010 09:37:11 -0400" -->
<!-- isosent="20100716133711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="7DF5BBE9-A78E-409E-9A96-FDF549A2C985_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C291C6DB-BA87-4448-A0D1-78A8187182F3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 09:37:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2010, at 9:34 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0060bcb8 in strcmp () from /lib/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00498d7d in hwloc_look_linux (topology=0x8807008)
</span><br>
<span class="quotelev1">&gt;    at topology-linux.c:1805
</span><br>
<span class="quotelev1">&gt; #2  0x0048dd9c in hwloc_discover (topology=0x8807008) at topology.c:1423
</span><br>
<span class="quotelev1">&gt; #3  0x0048ed8e in hwloc_topology_load (topology=0x8807008) at topology.c:2005
</span><br>
<span class="quotelev1">&gt; #4  0x080489a4 in main () at hwloc_is_thissystem.c:34
</span><br>
<span class="quotelev1">&gt; (gdb) up
</span><br>
<span class="quotelev1">&gt; #1  0x00498d7d in hwloc_look_linux (topology=0x8807008)
</span><br>
<span class="quotelev1">&gt;    at topology-linux.c:1805
</span><br>
<span class="quotelev1">&gt; 1805	  if (!strcmp(topology-&gt;backend_params.sysfs.root_path, &quot;/&quot;))
</span><br>
<span class="quotelev1">&gt; (gdb) p topology-&gt;backend_params.sysfs
</span><br>
<span class="quotelev1">&gt; $1 = {root_path = 0x0, root_fd = -1}
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Need any other info?
</span><br>
<p>BTW, I get the same result even if I just run utils/lstopo.
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
<li><strong>Next message:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>In reply to:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
