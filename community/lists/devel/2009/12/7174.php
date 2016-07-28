<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 19:48:06 2009" -->
<!-- isoreceived="20091202004806" -->
<!-- sent="Tue, 1 Dec 2009 19:48:00 -0500" -->
<!-- isosent="20091202004800" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="6CC502C7-84F9-4D92-81BA-9811E551C657_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F98DE2BB-23CD-4D6D-918B-C8AA3E2EAC25_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-01 19:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>In reply to:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2009, at 5:52 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; So perhaps it can become a param in the downcall to the MCA base  
</span><br>
<span class="quotelev1">&gt; as to whether the priority params should be automatically  
</span><br>
<span class="quotelev1">&gt; registered...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can live with that, though I again question why anything needs to  
</span><br>
<span class="quotelev1">&gt; be automatically registered. It sounds like we were lazy, and so now  
</span><br>
<span class="quotelev1">&gt; we have things happening automatically that can confuse people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>That pretty well sums it up.  :-)
<br>
<p><span class="quotelev1">&gt; Question: if the system automatically registers a priority param,  
</span><br>
<span class="quotelev1">&gt; and someone sets a priority with it, then what happens when the  
</span><br>
<span class="quotelev1">&gt; component returns a different (possibly hardwired) value? Does MCA  
</span><br>
<span class="quotelev1">&gt; base ignore what was set and use what was returned? I assume that is  
</span><br>
<span class="quotelev1">&gt; the case...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>If the component re-registers a priority param with a new default  
<br>
value, that new default becomes *the* default (overwriting the prior  
<br>
default value that was registered).
<br>
<p>Is that what you're asking?
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
<li><strong>Next message:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7173.php">Jeff Squyres: "Re: [OMPI devel] MPI_Graph_create"</a>
<li><strong>In reply to:</strong> <a href="7171.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7175.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
