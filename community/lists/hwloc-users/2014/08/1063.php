<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 13:26:19 2014" -->
<!-- isoreceived="20140819172619" -->
<!-- sent="Tue, 19 Aug 2014 19:26:17 +0200" -->
<!-- isosent="20140819172617" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="53F388B9.40609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D018E091.166AF%rta_at_lanl.gov" -->
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
<strong>Date:</strong> 2014-08-19 13:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1062.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have to pass HWLOC_MEMBIND_STRICT if you want an error code when the
<br>
policy isn't supported.
<br>
<p><p>Assuming you get the nodeset of your current binding with
<br>
get_area_membind_nodeset() in bindset, you can do something like this
<br>
(untested):
<br>
<p>hwloc_bitmap_t bindset, totalset, newset;
<br>
int i;
<br>
/* get the total nodeset and duplicate it before modifying it */
<br>
totalset = hwloc_bitmap_dup(hwloc_topology_get_topology_nodeset(topo));
<br>
/* get the current binding */
<br>
bindset = hwloc_bitmap_alloc();
<br>
hwloc_get_area_membind_nodeset(topology, ..., bindset, ...);
<br>
/* substract the nodeset where the buffer is already available */
<br>
hwloc_bitmap_andnot(totalset, totalset, bindset);
<br>
/* create a empty bitmap to play with inside the next loop */
<br>
newset = hwloc_bitmap_alloc();
<br>
/* iterate over remaining bits and alloc/bind there */
<br>
hwloc_bitmap_foreach_begin(i, totalset) {
<br>
&nbsp;&nbsp;&nbsp;hwloc_bitmap_only(newset, i);
<br>
&nbsp;&nbsp;&nbsp;p = hwloc_alloc_membind_nodeset(...., newset, ...);
<br>
}
<br>
hwloc_bitmap_free(totalset);
<br>
hwloc_bitmap_free(bindset);
<br>
hwloc_bitmap_free(newset);
<br>
<p>Brice
<br>
<p><p><p>Le 19/08/2014 19:10, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; ok, in the meantime, is there a way to manually 'replicate'?  That is,
</span><br>
<span class="quotelev1">&gt; if I allocate a node, I would like to find out which NUMA domain it
</span><br>
<span class="quotelev1">&gt; resides in, and then allocate replicates to other domains.  Are there
</span><br>
<span class="quotelev1">&gt; example codes that show how to use the bitmaps for this?  I've been
</span><br>
<span class="quotelev1">&gt; unsuccessful in finding example codes that illustrate the bitmaps.
</span><br>
<span class="quotelev1">&gt;  Did I miss it in any doc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the help!  Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 19 Aug 2014 19:03:56 +0200
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; REPLICATE isn't support either on Linux unfortunately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll look at clarifying the doc and/or returning an error and/or
</span><br>
<span class="quotelev1">&gt; adding a way to find out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 19/08/2014 19:00, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; nope, no error.  is there a way to find out what policies are
</span><br>
<span class="quotelev2">&gt;&gt; supported?  I would like to try 'replicate'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 19 Aug 2014 18:55:57 +0200
</span><br>
<span class="quotelev2">&gt;&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NEXTTOUCH isn't supported on Linux. I hope you'd get an error if you
</span><br>
<span class="quotelev2">&gt;&gt; request it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 19/08/2014 18:48, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   p = hwloc_alloc_membind_policy(_topo, cnt * sizeof
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (T),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   p = hwloc_alloc_membind_nodeset(_topo, cnt *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizeof (T),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   p = hwloc_alloc(_topo, cnt * sizeof (T));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   hwloc_set_area_membind_nodeset(_topo, p, cnt * sizeof (T),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                        
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mem_nodeset = hwloc_topology_get_complete_nodeset(_topo);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,Rob
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Tue, 19 Aug 2014 18:44:05 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 19/08/2014 18:38, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to write a custom C++ allocator that wraps hwloc calls.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I've tried using various hwloc_alloc* functions to set the memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bindings, but when I call hwloc_get_area_membind_nodeset to verify,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't get the same policy I passed to alloc.  Are there example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; codes that show how to set memory bindings?  More generally, are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there example codes that help illustrate how to use hwloc API?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,Rob Aulwes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your problem may be related to the fact that same policies are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; identical on some operating systems. For instance DEFAULT and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FIRST_TOUCH are often identical. What did you set and what did you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get back?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are many examples in the tests subdirectory, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doc/hwloc-helloc.c and in hwloc/helper.h and hwloc/inline.h, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't think we have much about the membind API, and this API isn't a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; easy one unfortunately (given the variety of existing policies and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operating systems).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ hwloc-users mailing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ hwloc-users mailing
</span><br>
<span class="quotelev2">&gt;&gt; list hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to this
</span><br>
<span class="quotelev2">&gt;&gt; post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1062.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1062.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1063.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1063.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1063/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1062.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1062.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1064.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
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
