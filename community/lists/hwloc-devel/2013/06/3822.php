<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 12:22:14 2013" -->
<!-- isoreceived="20130621162214" -->
<!-- sent="Fri, 21 Jun 2013 18:22:07 +0200" -->
<!-- isosent="20130621162207" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="51C47DAF.2000701_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBTz2hA-tVDyX-qptZkx4j+L8pBhcfozEnEFW=iC_hx4eA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo --top<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 12:22:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Maybe in reply to:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/06/2013 17:59, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this would be useful feature for me and I believe also for others!
</span><br>
<span class="quotelev1">&gt; Currently
</span><br>
<p>The attached patch puts Misc object in Orange. See how I modified
<br>
lstopo.c, you'll see what you have to do. I can easily add the same
<br>
check to other types.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_misc_object_by_cpuset
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is quite dump. BTW, would it be possible to display the Misc objects
</span><br>
<span class="quotelev1">&gt; in the order they were added? Inspecting XML file
</span><br>
<span class="quotelev1">&gt; =&gt; hwloc_topology_insert_misc_object_by_cpuset will sort the objects
</span><br>
<p>They are sorted by name from I see in the code, I don't remember why.
<br>
Quick guess would be that we need a deterministic order, and sorting by
<br>
name is one choice.
<br>
Anyway you should change your Misc object names by adding 0 characters
<br>
as prefix, it should work.
<br>
<p><span class="quotelev1">&gt; =&gt;hwloc_topology_insert_misc_object_by_parent does NOT sort the object
</span><br>
<span class="quotelev1">&gt; but XML is not parsable by lstopo
</span><br>
<p>I need to dig into that.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3822/colormisc.patch">colormisc.patch</a>
</ul>
<!-- attachment="colormisc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3823.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Previous message:</strong> <a href="3821.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>Maybe in reply to:</strong> <a href="3807.php">Jiri Hladky: "[hwloc-devel] lstopo --top"</a>
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
