<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 17:53:00 2009" -->
<!-- isoreceived="20091201225300" -->
<!-- sent="Tue, 1 Dec 2009 15:52:53 -0700" -->
<!-- isosent="20091201225253" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="F98DE2BB-23CD-4D6D-918B-C8AA3E2EAC25_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2708F63-66B3-402B-845D-72C6D4143308_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 17:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7174.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7174.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2009, at 3:40 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 1, 2009, at 5:23 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only issue with that is it implies there is a param that can be adjusted - and there isn't. So it can confuse a user - or even a developer, as it did here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should think we wouldn't want MCA to automatically add any parameter. If the component doesn't register it, then it shouldn't exist. The MCA can just track a value without defining it as a visible param.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; True?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original code came from long, long ago -- when every component did have a relevant priority (i.e., when priority was about the only way to choose which one was used).  Developers didn't want to register a &quot;foo_priority&quot; param for every single component, so we made it automatic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That doesn't necessarily fit anymore -- as Ralph said, priority isn't relevant for some frameworks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So perhaps it can become a param in the downcall to the MCA base as to whether the priority params should be automatically registered...?
</span><br>
<p>I can live with that, though I again question why anything needs to be automatically registered. It sounds like we were lazy, and so now we have things happening automatically that can confuse people.
<br>
<p>I think priority has become a bit of an issue whenever we are talking about single-selection frameworks. If a user sets a priority to some value (whatever it is), there is an expectation that this means the component will be selected. As we learned in ORTE, that isn't true, leading to a lot of confusion and explanation. This is why we removed priority from most ORTE frameworks, and instead tell people to directly define the component to be used with -mca frame module.
<br>
<p>So I'm willing to go through the ORTE frameworks and revise the downcalls to the MCA base. However, I think we may want to rethink the entire priority scheme to ensure we have what we need today (as opposed to what we wrote a long time ago).
<br>
<p>Question: if the system automatically registers a priority param, and someone sets a priority with it, then what happens when the component returns a different (possibly hardwired) value? Does MCA base ignore what was set and use what was returned? I assume that is the case...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7172.php">Chris Samuel: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>Previous message:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7170.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7174.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7174.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
