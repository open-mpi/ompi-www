<?
$subject_val = "[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 13 19:56:45 2009" -->
<!-- isoreceived="20091114005645" -->
<!-- sent="Sat, 14 Nov 2009 01:56:40 +0100" -->
<!-- isosent="20091114005640" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc on ARM [Was: hwloc at SC09]" -->
<!-- id="20091114005640.GE4863_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1258055831.8456.134.camel_at_alpha" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-13 19:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1342)"</a>
<li><strong>Previous message:</strong> <a href="0395.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1339)"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Ashley Pittman: "Re: [hwloc-devel] hwloc at SC09"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Ashley Pittman: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0426.php">Ashley Pittman: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman, le Thu 12 Nov 2009 19:57:11 +0000, a &#233;crit :
<br>
<span class="quotelev1">&gt; That didn't go so well actually, this is on a NSLU2 arm machine with
</span><br>
<span class="quotelev1">&gt; 32Mb of ram running debian etch so hardly your target market!
</span><br>
<p>I've just tried on my mips router with 13MB and it works fine there :)
<br>
<p><span class="quotelev1">&gt; hwloc_obj_snprintf (string=0xbedd4b48 &quot;\001&quot;, size=256, 
</span><br>
<span class="quotelev1">&gt;     topology=&lt;value optimized out&gt;, l=0x0, _indexprefix=0x4009bdd8 &quot;#&quot;, 
</span><br>
<span class="quotelev1">&gt;     verbose=1) at traversal.c:177
</span><br>
<span class="quotelev1">&gt; 177	  hwloc_obj_type_t type = l-&gt;type;
</span><br>
<p>So at some point the traversal ends up with a NULL pointer, weird.  What
<br>
would be useful is output after passing --enable-debug to ./configure .
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0397.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1342)"</a>
<li><strong>Previous message:</strong> <a href="0395.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1339)"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Ashley Pittman: "Re: [hwloc-devel] hwloc at SC09"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0426.php">Ashley Pittman: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
<li><strong>Reply:</strong> <a href="0426.php">Ashley Pittman: "Re: [hwloc-devel] hwloc on ARM [Was: hwloc at SC09]"</a>
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
