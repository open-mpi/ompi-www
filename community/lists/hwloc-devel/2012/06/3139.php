<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 16:18:56 2012" -->
<!-- isoreceived="20120629201856" -->
<!-- sent="Fri, 29 Jun 2012 17:18:47 -0300" -->
<!-- isosent="20120629201847" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils" -->
<!-- id="20120629201847.GW27398_at_type.inf.ufrgs.br" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120629221008.14691lmmk8ynffkw_at_webmail.labri.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 16:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>In reply to:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 29 Jun 2012 22:10:30 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; --pid doesn't care about binding, it just changes things like cgroups
</span><br>
<p>Uh?  It's in there since a long time: lstopo-draw.c pu_draw():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (pid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_get_cpubind(topology, bind, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (bind &amp;&amp; hwloc_bitmap_isset(bind, level-&gt;os_index))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;methods-&gt;box(output, RUNNING_R_COLOR, RUNNING_G_COLOR, RUNNING_B_COLOR, depth, x, *retwidth, y, *retheight);
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>In reply to:</strong> <a href="3138.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3140.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
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
