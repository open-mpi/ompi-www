<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 09:29:48 2014" -->
<!-- isoreceived="20140902132948" -->
<!-- sent="Tue, 2 Sep 2014 13:29:46 +0000" -->
<!-- isosent="20140902132946" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="D02B225A.16A3F%rta_at_lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54058081.3070501_at_inria.fr" -->
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
<strong>Date:</strong> 2014-09-02 09:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
great, thanks Brice!
<br>
<p>From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
<br>
Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Date: Tue, 2 Sep 2014 10:32:01 +0200
<br>
To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [hwloc-users] setting memory bindings
<br>
<p>Hello,
<br>
<p>I am coming back on this thread to fix things before releasing v1.10.
<br>
<p>Regarding your question below, there's already an answer with hwloc_topology_get_support() which returns things like support-&gt;membind-&gt;replicate_membind (set to 0 or 1 depending on whether the policy is supported). However, there might be some cases where things are &quot;partially&quot; supported (we have seen some OS that only support CPU binding on specific sets of cores) so you still need to check the return value :)
<br>
<p>I will better document all this, and what happens in case of failure with and without the STRICT flag. And I'll see if I add a good example somewhere.
<br>
<p>Brice
<br>
<p><p><p>Le 19/08/2014 19:00, Aulwes, Rob a &#233;crit :
<br>
nope, no error.  is there a way to find out what policies are supported?  I would like to try 'replicate'.
<br>
<p>From: Brice Goglin &lt;Brice.Goglin_at_[hidden]&lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt;
<br>
Reply-To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Date: Tue, 19 Aug 2014 18:55:57 +0200
<br>
To: Hardware locality user list &lt;hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;&gt;
<br>
Subject: Re: [hwloc-users] setting memory bindings
<br>
<p>NEXTTOUCH isn't supported on Linux. I hope you'd get an error if you request it.
<br>
<p>Brice
<br>
<p><p><p>Le 19/08/2014 18:48, Aulwes, Rob a &#233;crit :
<br>
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
<p><p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1058.php</a>
<br>
<p>_______________________________________________ hwloc-users mailing list hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1059.php</a>
<br>
<p><p>_______________________________________________
<br>
hwloc-users mailing list
<br>
hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1060.php</a>
<br>
<p>_______________________________________________ hwloc-users mailing list hwloc-users_at_[hidden]&lt;mailto:hwloc-users_at_[hidden]&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a> Searchable archives: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/index.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/index.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
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
