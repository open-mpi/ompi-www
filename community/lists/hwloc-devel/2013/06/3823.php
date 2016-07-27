<?
$subject_val = "Re: [hwloc-devel] lstopo --top";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 06:19:31 2013" -->
<!-- isoreceived="20130624101931" -->
<!-- sent="Mon, 24 Jun 2013 12:19:25 +0200" -->
<!-- isosent="20130624101925" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo --top" -->
<!-- id="51C81D2D.7020307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBTsp+49s7_d9kg5ZAKi1i4eyNcxdK+JesPztZYxDqGS3Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-06-24 06:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3824.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5711)"</a>
<li><strong>Previous message:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3821.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3818.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/06/2013 17:50, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; I have now changed it to
</span><br>
<span class="quotelev1">&gt; hwloc_obj[0] = hwloc_get_first_largest_obj_inside_cpuset(topology,
</span><br>
<span class="quotelev1">&gt; cpuset);
</span><br>
<span class="quotelev1">&gt; hwloc_obj[1] = hwloc_obj[0]-&gt;parent;
</span><br>
<span class="quotelev1">&gt; and tried both
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_misc_object_by_parent (topology,  hwloc_obj[0],
</span><br>
<span class="quotelev1">&gt; data);
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_misc_object_by_parent (topology,  hwloc_obj[1],
</span><br>
<span class="quotelev1">&gt; data);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but lstopo will core dump with the XML file
</span><br>
<span class="quotelev1">&gt; $lstopo --input /tmp/a.xml 
</span><br>
<span class="quotelev1">&gt; lstopo: topology.c:1128: add_default_object_sets: Assertion
</span><br>
<span class="quotelev1">&gt; `obj-&gt;cpuset' failed.
</span><br>
<span class="quotelev1">&gt; Aborted (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Should be fixed with the attached patch (already applied to trunk and
<br>
stable branches).
<br>
Things were totally buggy, looks like you were the very first one to
<br>
play with this and XML :)
<br>
thanks
<br>
Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3823/fix_misc_by_parent.patch">fix_misc_by_parent.patch</a>
</ul>
<!-- attachment="fix_misc_by_parent.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3824.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5711)"</a>
<li><strong>Previous message:</strong> <a href="3822.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
<li><strong>In reply to:</strong> <a href="3821.php">Jiri Hladky: "Re: [hwloc-devel] lstopo --top"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3818.php">Brice Goglin: "Re: [hwloc-devel] lstopo --top"</a>
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
