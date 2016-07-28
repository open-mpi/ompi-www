<?
$subject_val = "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 04:50:00 2011" -->
<!-- isoreceived="20111214095000" -->
<!-- sent="Wed, 14 Dec 2011 10:49:50 +0100" -->
<!-- isosent="20111214094950" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning" -->
<!-- id="4EE8713E.7080602_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:49:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2631.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Maybe reply:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am seeing many warning like these since yesterday:
<br>
<p>In file included from /home/bgoglin/SOFT/hwloc/trunk/include/hwloc.h:49:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../utils/lstopo.h:12,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../utils/lstopo-color.c:11:
<br>
/home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:35:5: warning:
<br>
&quot;HWLOC_HAVE_ATTRIBUTE_UNUSED&quot; is not defined [-Wundef]
<br>
/home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:45:5: warning:
<br>
&quot;HWLOC_HAVE_ATTRIBUTE_MALLOC&quot; is not defined [-Wundef]
<br>
/home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:55:5: warning:
<br>
&quot;HWLOC_HAVE_ATTRIBUTE_CONST&quot; is not defined [-Wundef]
<br>
/home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:65:5: warning:
<br>
&quot;HWLOC_HAVE_ATTRIBUTE_PURE&quot; is not defined [-Wundef]
<br>
/home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:75:5: warning:
<br>
&quot;HWLOC_HAVE_ATTRIBUTE_DEPRECATED&quot; is not defined [-Wundef]
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2631.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Maybe reply:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
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
