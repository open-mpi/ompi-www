<?
$subject_val = "Re: [hwloc-devel] How to get information about hwloc objects?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 17:14:43 2010" -->
<!-- isoreceived="20100712211443" -->
<!-- sent="Mon, 12 Jul 2010 23:12:30 +0200" -->
<!-- isosent="20100712211230" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] How to get information about hwloc objects?" -->
<!-- id="4C3B853E.1020606_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201007071417.17441.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] How to get information about hwloc objects?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 17:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1154.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/07/2010 14:17, Jirka Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; 1) I would suggest to rename --list to something more descriptive like
</span><br>
<span class="quotelev1">&gt; --info_about_relatives 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I don't like long names like that :) I currently vote for --intersect
<br>
here since this option list the indexes of all objects that intersect
<br>
the input within the given depth or type.
<br>
<p>--intersect &lt;type|depth&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find the list of objects of the given type or depth that intersect the CPU  set
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and  report  the  comma-separated list of their indexes instead of the cpu mask
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string.  This may be used for determining the list of objects  above  or  below
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the  input  objects.   When combined with --physical, the list is convenient to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pass to external tools such as taskset or numactl --physcpubind  or  --membind.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This  is  different  from --largest since the latter requires that all reported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objects are strictly included inside the input objects.
<br>
<p><p><span class="quotelev1">&gt; 2) I would rename --objects to something like
</span><br>
<span class="quotelev1">&gt; --info_about_nearest_ancestor
</span><br>
<span class="quotelev1">&gt; or perhaps just
</span><br>
<span class="quotelev1">&gt; --ancestor
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I currently vote for --largest (or something about
<br>
summarizing/synthetizing) since this option groups input objects and
<br>
summarizes them into larger ancestors.
<br>
<p>--largest Report the list of largest objects exactly included of the input objects.  None
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of  these  output  objects intersect each other, and the sum of them is exactly
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;equivalent to the input. No largest object is included in  the  input  This  is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different  from --intersect where reported objects may not be strictly included
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in the input.
<br>
<p><p><span class="quotelev1">&gt; You may consider to add option
</span><br>
<span class="quotelev1">&gt; --all_ancestors (or perhaps ancestors-tree or family-tree)
</span><br>
<span class="quotelev1">&gt; to list the full tree of ancestors objects
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This one might be better in hwloc-info (if we split it out of lstopo) or
<br>
lstopo.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1154.php">Jirka Hladky: "Re: [hwloc-devel] How to create a patch file?"</a>
<li><strong>Previous message:</strong> <a href="1152.php">Jirka Hladky: "Re: [hwloc-devel] hwloc on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Reply:</strong> <a href="1155.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
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
