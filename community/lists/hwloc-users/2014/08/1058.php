<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 12:48:59 2014" -->
<!-- isoreceived="20140819164859" -->
<!-- sent="Tue, 19 Aug 2014 16:48:58 +0000" -->
<!-- isosent="20140819164858" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="D018DB39.1669E%rta_at_lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F37ED5.3080607_at_inria.fr" -->
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
<strong>Date:</strong> 2014-08-19 12:48:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1057.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I've tried:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = hwloc_alloc_membind_policy(_topo, cnt * sizeof (T),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
<br>
<p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = hwloc_alloc_membind_nodeset(_topo, cnt * sizeof (T),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
<br>
<p>and
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p = hwloc_alloc(_topo, cnt * sizeof (T));
<br>
&nbsp;&nbsp;hwloc_set_area_membind_nodeset(_topo, p, cnt * sizeof (T),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
<br>
<p>where
<br>
<p>mem_nodeset = hwloc_topology_get_complete_nodeset(_topo);
<br>
<p>Thanks,Rob
<br>
<p>From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
<br>
Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Date: Tue, 19 Aug 2014 18:44:05 +0200
<br>
To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [hwloc-users] setting memory bindings
<br>
<p>Le 19/08/2014 18:38, Aulwes, Rob a &#233;crit :
<br>
Hi,
<br>
<p>I'm trying to write a custom C++ allocator that wraps hwloc calls.  I've tried using various hwloc_alloc* functions to set the memory bindings, but when I call hwloc_get_area_membind_nodeset to verify, I don't get the same policy I passed to alloc.  Are there example codes that show how to set memory bindings?  More generally, are there example codes that help illustrate how to use hwloc API?
<br>
<p>Thanks,Rob Aulwes
<br>
<p><p>Hello
<br>
<p>Your problem may be related to the fact that same policies are identical on some operating systems. For instance DEFAULT and FIRST_TOUCH are often identical. What did you set and what did you get back?
<br>
<p>There are many examples in the tests subdirectory, in doc/hwloc-helloc.c and in hwloc/helper.h and hwloc/inline.h, but I don't think we have much about the membind API, and this API isn't a easy one unfortunately (given the variety of existing policies and operating systems).
<br>
<p>Brice
<br>
<p>_______________________________________________ hwloc-users mailing list hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1057.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1057.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1059.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
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
