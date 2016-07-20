<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 12:56:00 2014" -->
<!-- isoreceived="20140819165600" -->
<!-- sent="Tue, 19 Aug 2014 18:55:57 +0200" -->
<!-- isosent="20140819165557" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="53F3819D.2010902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D018DB39.1669E%rta_at_lanl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-19 12:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
NEXTTOUCH isn't supported on Linux. I hope you'd get an error if you
<br>
request it.
<br>
<p>Brice
<br>
<p><p><p>Le 19/08/2014 18:48, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   p = hwloc_alloc_membind_policy(_topo, cnt * sizeof (T),
</span><br>
<span class="quotelev1">&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   p = hwloc_alloc_membind_nodeset(_topo, cnt * sizeof (T),
</span><br>
<span class="quotelev1">&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                   p = hwloc_alloc(_topo, cnt * sizeof (T));
</span><br>
<span class="quotelev1">&gt;   hwloc_set_area_membind_nodeset(_topo, p, cnt * sizeof (T),
</span><br>
<span class="quotelev1">&gt;                                        
</span><br>
<span class="quotelev1">&gt;  mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mem_nodeset = hwloc_topology_get_complete_nodeset(_topo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 19 Aug 2014 18:44:05 +0200
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 19/08/2014 18:38, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to write a custom C++ allocator that wraps hwloc calls.
</span><br>
<span class="quotelev2">&gt;&gt;  I've tried using various hwloc_alloc* functions to set the memory
</span><br>
<span class="quotelev2">&gt;&gt; bindings, but when I call hwloc_get_area_membind_nodeset to verify, I
</span><br>
<span class="quotelev2">&gt;&gt; don't get the same policy I passed to alloc.  Are there example codes
</span><br>
<span class="quotelev2">&gt;&gt; that show how to set memory bindings?  More generally, are there
</span><br>
<span class="quotelev2">&gt;&gt; example codes that help illustrate how to use hwloc API?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,Rob Aulwes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your problem may be related to the fact that same policies are
</span><br>
<span class="quotelev1">&gt; identical on some operating systems. For instance DEFAULT and
</span><br>
<span class="quotelev1">&gt; FIRST_TOUCH are often identical. What did you set and what did you get
</span><br>
<span class="quotelev1">&gt; back?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are many examples in the tests subdirectory, in
</span><br>
<span class="quotelev1">&gt; doc/hwloc-helloc.c and in hwloc/helper.h and hwloc/inline.h, but I
</span><br>
<span class="quotelev1">&gt; don't think we have much about the membind API, and this API isn't a
</span><br>
<span class="quotelev1">&gt; easy one unfortunately (given the variety of existing policies and
</span><br>
<span class="quotelev1">&gt; operating systems).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ hwloc-users mailing
</span><br>
<span class="quotelev1">&gt; list hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>&gt; Link to
</span><br>
<span class="quotelev1">&gt; this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1058.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
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
