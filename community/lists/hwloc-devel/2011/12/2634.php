<?
$subject_val = "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:25:31 2011" -->
<!-- isoreceived="20111214102531" -->
<!-- sent="Wed, 14 Dec 2011 11:25:25 +0100" -->
<!-- isosent="20111214102525" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning" -->
<!-- id="20111214102525.GQ4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1912951949.3970.1323856226662.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe in reply to:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 14 Dec 2011 10:50:26 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; In file included from /home/bgoglin/SOFT/hwloc/trunk/include/hwloc.h:49:0,
</span><br>
<span class="quotelev1">&gt;                  from ../../utils/lstopo.h:12,
</span><br>
<span class="quotelev1">&gt;                  from ../../utils/lstopo-color.c:11:
</span><br>
<span class="quotelev1">&gt; /home/bgoglin/SOFT/hwloc/trunk/build/include/hwloc/autogen/config.h:35:5: warning:
</span><br>
<span class="quotelev1">&gt; &quot;HWLOC_HAVE_ATTRIBUTE_UNUSED&quot; is not defined [-Wundef]
</span><br>
<p>Odd that I didn't get it. Anyway, the fix for #59 wasn't correct indeed.
<br>
Hopefully I've really fixed it in 4055 now.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2635.php">Samuel Thibault: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Maybe in reply to:</strong> <a href="2632.php">Brice Goglin: "[hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
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
