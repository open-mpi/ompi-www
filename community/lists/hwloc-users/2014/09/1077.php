<?
$subject_val = "Re: [hwloc-users] setting memory bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 12:45:44 2014" -->
<!-- isoreceived="20140915164544" -->
<!-- sent="Mon, 15 Sep 2014 18:45:43 +0200" -->
<!-- isosent="20140915164543" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] setting memory bindings" -->
<!-- id="541717B7.7080203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="490923A666B75F48B14718E0440C4C733B5A097C_at_ECS-EXG-P-MB01.win.lanl.gov" -->
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
<strong>Date:</strong> 2014-09-15 12:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1076.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1076.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This function is only available in master, not in v1.9. Its
<br>
implementation can be copied from
<br>
<a href="https://github.com/open-mpi/hwloc/blob/master/include/hwloc/helper.h#L565">https://github.com/open-mpi/hwloc/blob/master/include/hwloc/helper.h#L565</a>
<br>
<p>Brice
<br>
<p><p><p>Le 15/09/2014 18:40, Aulwes, Rob a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried one of your examples, but I got the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error: identifier &quot;hwloc_get_numanode_obj_by_os_index&quot; is undefined
</span><br>
<span class="quotelev1">&gt;   obj = hwloc_get_numanode_obj_by_os_index(topology, i);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using version 1.9.1.  Did you recently add
</span><br>
<span class="quotelev1">&gt; hwloc_get_numanode_obj_by_os_index?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* hwloc-users [hwloc-users-bounces_at_[hidden]] on behalf of
</span><br>
<span class="quotelev1">&gt; Brice Goglin [Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, September 04, 2014 6:25 AM
</span><br>
<span class="quotelev1">&gt; *To:* hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [hwloc-users] setting memory bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added a new doc/examples/ repository to better show how to use
</span><br>
<span class="quotelev1">&gt; bitmaps, cpu and memory binding etc.
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/hwloc/tree/master/doc/examples">https://github.com/open-mpi/hwloc/tree/master/doc/examples</a>
</span><br>
<span class="quotelev1">&gt; If you see anything missing, don't hesitate to ask.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 19/08/2014 19:10, Aulwes, Rob a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; ok, in the meantime, is there a way to manually 'replicate'?  That
</span><br>
<span class="quotelev2">&gt;&gt; is, if I allocate a node, I would like to find out which NUMA domain
</span><br>
<span class="quotelev2">&gt;&gt; it resides in, and then allocate replicates to other domains.  Are
</span><br>
<span class="quotelev2">&gt;&gt; there example codes that show how to use the bitmaps for this?  I've
</span><br>
<span class="quotelev2">&gt;&gt; been unsuccessful in finding example codes that illustrate the
</span><br>
<span class="quotelev2">&gt;&gt; bitmaps.  Did I miss it in any doc?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1076.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1076.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1078.php">Siegmar Gross: "[hwloc-users] problem with X11 using Solaris"</a>
<li><strong>Previous message:</strong> <a href="1076.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<li><strong>In reply to:</strong> <a href="1076.php">Aulwes, Rob: "Re: [hwloc-users] setting memory bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1067.php">Brice Goglin: "Re: [hwloc-users] setting memory bindings"</a>
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
