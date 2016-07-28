<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 17:40:19 2009" -->
<!-- isoreceived="20091201224019" -->
<!-- sent="Tue, 1 Dec 2009 17:40:14 -0500" -->
<!-- isosent="20091201224014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="C2708F63-66B3-402B-845D-72C6D4143308_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2BEF776B-206F-435B-8E1F-91B202B92000_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 17:40:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2009, at 5:23 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; The only issue with that is it implies there is a param that can be  
</span><br>
<span class="quotelev1">&gt; adjusted - and there isn't. So it can confuse a user - or even a  
</span><br>
<span class="quotelev1">&gt; developer, as it did here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should think we wouldn't want MCA to automatically add any  
</span><br>
<span class="quotelev1">&gt; parameter. If the component doesn't register it, then it shouldn't  
</span><br>
<span class="quotelev1">&gt; exist. The MCA can just track a value without defining it as a  
</span><br>
<span class="quotelev1">&gt; visible param.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The original code came from long, long ago -- when every component did  
<br>
have a relevant priority (i.e., when priority was about the only way  
<br>
to choose which one was used).  Developers didn't want to register a  
<br>
&quot;foo_priority&quot; param for every single component, so we made it  
<br>
automatic.
<br>
<p>That doesn't necessarily fit anymore -- as Ralph said, priority isn't  
<br>
relevant for some frameworks.
<br>
<p>So perhaps it can become a param in the downcall to the MCA base as to  
<br>
whether the priority params should be automatically registered...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7169.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
