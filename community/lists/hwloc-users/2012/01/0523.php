<?
$subject_val = "[hwloc-users] removing old cpuset API?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 16:28:20 2012" -->
<!-- isoreceived="20120119212820" -->
<!-- sent="Thu, 19 Jan 2012 22:28:14 +0100" -->
<!-- isosent="20120119212814" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] removing old cpuset API?" -->
<!-- id="4F188AEE.1070702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] removing old cpuset API?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 16:28:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
<li><strong>Reply:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear hwloc users,
<br>
<p>The cpuset API (hwloc_cpuset_*) was replaced by the bitmap API
<br>
(hwloc_bitmap_*) in v1.1.0, back in december 2010. We kept backward
<br>
compatibility by #defin'ing the old API on top of the new one. So you
<br>
may stil use the old API in your application (but you would get
<br>
&quot;deprecated&quot; warning).
<br>
<p>Now, we're thinking of removing this compatiblity layer one day or
<br>
another. You would have to upgrade your application to the new API. If
<br>
your application must still work with old hwloc too, you may support
<br>
both API by #defin'ing the new API on top of the old one as explained at
<br>
the end of <a href="http://localhost/hwloc/projects/hwloc/doc/v1.3.1/a00010.php">http://localhost/hwloc/projects/hwloc/doc/v1.3.1/a00010.php</a>
<br>
<p>So, is anybody against removing the hwloc/cpuset.h compatibility layer
<br>
in the near future (not before v1.5, which may mean Spring 2012) and
<br>
letting application deal with this if they really need it?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
<li><strong>Previous message:</strong> <a href="0522.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
<li><strong>Reply:</strong> <a href="0524.php">ÁëÝîáíäñïò ÐáðáäïãéáííÜêçò: "Re: [hwloc-users] removing old cpuset API?"</a>
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
