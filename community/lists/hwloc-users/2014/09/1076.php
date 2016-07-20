<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 12:40:23 2014" -->
<!-- isoreceived="20140915164023" -->
<!-- sent="Mon, 15 Sep 2014 16:40:21 +0000" -->
<!-- isosent="20140915164021" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="490923A666B75F48B14718E0440C4C733B5A097C_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54085A29.9060101_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] setting memory bindings<br>
<strong>From:</strong> Aulwes, Rob (<em>rta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-15 12:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1075.php">Hartmut Kaiser: "[hwloc-users] Hartmut Kaiser"</a>
<li><strong>In reply to:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice,
<br>
<p>I just tried one of your examples, but I got the error:
<br>
<p>error: identifier &quot;hwloc_get_numanode_obj_by_os_index&quot; is undefined
<br>
&nbsp;&nbsp;obj = hwloc_get_numanode_obj_by_os_index(topology, i);
<br>
<p>I'm using version 1.9.1.  Did you recently add hwloc_get_numanode_obj_by_os_index?
<br>
<p>Thanks,Rob
<br>
<p>________________________________
<br>
From: hwloc-users [hwloc-users-bounces_at_[hidden]] on behalf of Brice Goglin [Brice.Goglin_at_[hidden]]
<br>
Sent: Thursday, September 04, 2014 6:25 AM
<br>
To: hwloc-users_at_[hidden]
<br>
Subject: Re: [hwloc-users] setting memory bindings
<br>
<p>I added a new doc/examples/ repository to better show how to use bitmaps, cpu and memory binding etc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/hwloc/tree/master/doc/examples">https://github.com/open-mpi/hwloc/tree/master/doc/examples</a>
<br>
If you see anything missing, don't hesitate to ask.
<br>
<p>Brice
<br>
<p><p><p><p>Le 19/08/2014 19:10, Aulwes, Rob a &#233;crit :
<br>
ok, in the meantime, is there a way to manually 'replicate'?  That is, if I allocate a node, I would like to find out which NUMA domain it resides in, and then allocate replicates to other domains.  Are there example codes that show how to use the bitmaps for this?  I've been unsuccessful in finding example codes that illustrate the bitmaps.  Did I miss it in any doc?
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1075.php">Hartmut Kaiser: "[hwloc-users] Hartmut Kaiser"</a>
<li><strong>In reply to:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1077.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
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
