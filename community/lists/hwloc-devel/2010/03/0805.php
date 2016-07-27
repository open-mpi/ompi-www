<?
$subject_val = "[hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 10:47:21 2010" -->
<!-- isoreceived="20100326144721" -->
<!-- sent="Fri, 26 Mar 2010 10:47:15 -0400" -->
<!-- isosent="20100326144715" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Strange difference" -->
<!-- id="50882089-0D6B-4FF3-8BDA-264429AF3C57_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] Strange difference<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 10:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0804.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0808.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Maybe reply:</strong> <a href="0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output of &quot;lstopo -l&quot; is different than &quot;lstopo -l -v&quot; -- is that intentional?
<br>
<p>This is in RHEL5.4, trunk HEAD (r1851).
<br>
<p>-----
<br>
[7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l 
<br>
Machine (3945MB)
<br>
&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (2048KB) + L1 #0 (16KB) + Core #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #1 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (2048KB) + L1 #1 (16KB) + Core #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #3 (phys=6)
<br>
&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (2048KB) + L1 #2 (16KB) + Core #2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #4 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (2048KB) + L1 #3 (16KB) + Core #3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #6 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #7 (phys=7)
<br>
-----
<br>
<p>-----
<br>
[7:45] svbu-mpi:~/svn/hwloc % ./utils/lstopo -l -v
<br>
Machine (phys=0 local=4039640KB total=4039640KB)
<br>
&nbsp;&nbsp;Socket #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #0 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #0 (16KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #1 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #1 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #1 (16KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #3 (phys=6)
<br>
&nbsp;&nbsp;Socket #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #2 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #2 (16KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #4 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #5 (phys=5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #3 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #3 (16KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #3 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #6 (phys=3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #7 (phys=7)
<br>
depth 0:	1 Machine (type #1)
<br>
&nbsp;depth 1:	2 Sockets (type #3)
<br>
&nbsp;&nbsp;depth 2:	4 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;depth 3:	4 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:	4 Cores (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:	8 Procs (type #6)
<br>
-----
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
<li><strong>Next message:</strong> <a href="0806.php">Samuel Thibault: "Re: [hwloc-devel] Attribute unsed not regognized"</a>
<li><strong>Previous message:</strong> <a href="0804.php">Jeff Squyres: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0807.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Reply:</strong> <a href="0808.php">Samuel Thibault: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Maybe reply:</strong> <a href="0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
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
