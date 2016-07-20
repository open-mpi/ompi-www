<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 04:32:04 2014" -->
<!-- isoreceived="20140902083204" -->
<!-- sent="Tue, 02 Sep 2014 10:32:01 +0200" -->
<!-- isosent="20140902083201" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="54058081.3070501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D018DE9C.166A9%rta_at_lanl.gov" -->
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
<strong>Date:</strong> 2014-09-02 04:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1066.php">Samuel Thibault: "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am coming back on this thread to fix things before releasing v1.10.
<br>
<p>Regarding your question below, there's already an answer with
<br>
hwloc_topology_get_support() which returns things like
<br>
support-&gt;membind-&gt;replicate_membind (set to 0 or 1 depending on whether
<br>
the policy is supported). However, there might be some cases where
<br>
things are &quot;partially&quot; supported (we have seen some OS that only support
<br>
CPU binding on specific sets of cores) so you still need to check the
<br>
return value :)
<br>
<p>I will better document all this, and what happens in case of failure
<br>
with and without the STRICT flag. And I'll see if I add a good example
<br>
somewhere.
<br>
<p>Brice
<br>
<p><p><p>Le 19/08/2014 19:00, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; nope, no error.  is there a way to find out what policies are
</span><br>
<span class="quotelev1">&gt; supported?  I would like to try 'replicate'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 19 Aug 2014 18:55:57 +0200
</span><br>
<span class="quotelev1">&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NEXTTOUCH isn't supported on Linux. I hope you'd get an error if you
</span><br>
<span class="quotelev1">&gt; request it.
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
<span class="quotelev1">&gt; Le 19/08/2014 18:48, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   p = hwloc_alloc_membind_policy(_topo, cnt * sizeof (T),
</span><br>
<span class="quotelev2">&gt;&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   p = hwloc_alloc_membind_nodeset(_topo, cnt * sizeof
</span><br>
<span class="quotelev2">&gt;&gt; (T),
</span><br>
<span class="quotelev2">&gt;&gt;                           mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   p = hwloc_alloc(_topo, cnt * sizeof (T));
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc_set_area_membind_nodeset(_topo, p, cnt * sizeof (T),
</span><br>
<span class="quotelev2">&gt;&gt;                                        
</span><br>
<span class="quotelev2">&gt;&gt;  mem_nodeset, HWLOC_MEMBIND_NEXTTOUCH, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mem_nodeset = hwloc_topology_get_complete_nodeset(_topo);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,Rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Brice Goglin &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 19 Aug 2014 18:44:05 +0200
</span><br>
<span class="quotelev2">&gt;&gt; To: Hardware locality user list &lt;hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 19/08/2014 18:38, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to write a custom C++ allocator that wraps hwloc calls.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I've tried using various hwloc_alloc* functions to set the memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bindings, but when I call hwloc_get_area_membind_nodeset to verify,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't get the same policy I passed to alloc.  Are there example
</span><br>
<span class="quotelev3">&gt;&gt;&gt; codes that show how to set memory bindings?  More generally, are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there example codes that help illustrate how to use hwloc API?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,Rob Aulwes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your problem may be related to the fact that same policies are
</span><br>
<span class="quotelev2">&gt;&gt; identical on some operating systems. For instance DEFAULT and
</span><br>
<span class="quotelev2">&gt;&gt; FIRST_TOUCH are often identical. What did you set and what did you
</span><br>
<span class="quotelev2">&gt;&gt; get back?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are many examples in the tests subdirectory, in
</span><br>
<span class="quotelev2">&gt;&gt; doc/hwloc-helloc.c and in hwloc/helper.h and hwloc/inline.h, but I
</span><br>
<span class="quotelev2">&gt;&gt; don't think we have much about the membind API, and this API isn't a
</span><br>
<span class="quotelev2">&gt;&gt; easy one unfortunately (given the variety of existing policies and
</span><br>
<span class="quotelev2">&gt;&gt; operating systems).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1067/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1066.php">Samuel Thibault: "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Reply:</strong> <a href="1068.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
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
