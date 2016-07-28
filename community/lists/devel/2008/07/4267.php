<?
$subject_val = "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 11:02:18 2008" -->
<!-- isoreceived="20080703150218" -->
<!-- sent="Thu, 3 Jul 2008 11:02:14 -0400 (EDT)" -->
<!-- isosent="20080703150214" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default" -->
<!-- id="Pine.LNX.4.64.0807031059580.32717_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DAE6CC43-E302-4320-B4CB-16360ECE6A37_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 11:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Previous message:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as we don't go back to libptmalloc2 linked into libmpi, I don't 
<br>
have strong objections.
<br>
<p><p>Brian
<br>
<p><p>On Thu, 3 Jul 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: make mpi_leave_pinned=1 by default when a BTL is used that would 
</span><br>
<span class="quotelev1">&gt; benefit from it (when possible; 0 when not, obviously)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Several reasons:
</span><br>
<span class="quotelev1">&gt; - we continually get beat up because of &quot;lower performance&quot; on benchmarks by 
</span><br>
<span class="quotelev1">&gt; default (I get beat up, at least ;-) )
</span><br>
<span class="quotelev1">&gt; - ptmalloc is no longer compiled in user apps by default, but mallopt may be 
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<span class="quotelev1">&gt; - ptmalloc has been linked in on many platforms by default for a long time
</span><br>
<span class="quotelev1">&gt; - our ptmalloc settings were such that memory was rarely returned to the OS 
</span><br>
<span class="quotelev1">&gt; -- quite similar to mallopt
</span><br>
<span class="quotelev1">&gt; - very few people have complained about the above policy
</span><br>
<span class="quotelev1">&gt; - therefore, it may be ok to mallopt by default if there is a device in the 
</span><br>
<span class="quotelev1">&gt; run that would benefit from it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: openib BTL, MPI runtime directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: before v1.3 ships
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Fri, July 11, 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming that this topic will generate a fair amount of conversation. 
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm basically getting tired of people complaining that OMPI has lower default 
</span><br>
<span class="quotelev1">&gt; benchmark performance on OpenFabrics networks.  I don't mind explaining the 
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned flag; what I do mind is that customers and users who refuse 
</span><br>
<span class="quotelev1">&gt; to use it (which is at least sort of understandable).  I also mind that other 
</span><br>
<span class="quotelev1">&gt; MPI implementations (sometimes knowingly) compare Open MPI without 
</span><br>
<span class="quotelev1">&gt; leave_pinned to their implementations with leave_pinned.  Explaining it after 
</span><br>
<span class="quotelev1">&gt; the fact is never quite as compelling when there is a big poster on a show 
</span><br>
<span class="quotelev1">&gt; floor showing MPI XYZ with great ping pong performance and OMPI with lousy 
</span><br>
<span class="quotelev1">&gt; ping pong performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - OMPI is the only MPI that doesn't do the &quot;leave pinned&quot; trick by default on 
</span><br>
<span class="quotelev1">&gt; OpenFabrics networks
</span><br>
<span class="quotelev1">&gt; - I know that pingpong benchmarks are meaningless.  Customers and users don't 
</span><br>
<span class="quotelev1">&gt; care.  We cannot move this mountain.
</span><br>
<span class="quotelev1">&gt; - I know that leave_pinned is frequently meaningless to real apps (although 
</span><br>
<span class="quotelev1">&gt; Torsten likes to argue otherwise -- and he's got at least some real-world 
</span><br>
<span class="quotelev1">&gt; data points that show otherwise :-) ).
</span><br>
<span class="quotelev1">&gt; - I know that it's only OpenFabrics networks that require this setting and 
</span><br>
<span class="quotelev1">&gt; that many people think OpenFabrics is broken because of this.  Let's leave 
</span><br>
<span class="quotelev1">&gt; such religious arguments at the door; I'm not happy we have to do it either, 
</span><br>
<span class="quotelev1">&gt; but that's not the issue here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my proposal is to enable mpi_leave_pinned by default:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - if there's a BTL in the app that would benefit (i.e., openib).  This would 
</span><br>
<span class="quotelev1">&gt; likely entail adding some clever callback from the openib BTL init, or 
</span><br>
<span class="quotelev1">&gt; somesuch (I have not thought this through yet).
</span><br>
<span class="quotelev1">&gt; - mallopt or ptmalloc is available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Previous message:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4265.php">Jeff Squyres: "[OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
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
