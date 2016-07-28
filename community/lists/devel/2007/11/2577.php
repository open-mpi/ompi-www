<?
$subject_val = "Re: [OMPI devel] collective problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 23:27:53 2007" -->
<!-- isoreceived="20071108042753" -->
<!-- sent="Wed, 07 Nov 2007 23:27:47 -0500" -->
<!-- isosent="20071108042747" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] collective problems" -->
<!-- id="C357FA73.1841%gshipman_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C357F894.10654%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 23:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2578.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2575.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The lengths we go to avoid progress :-)
<br>
<p><p><p><p>On 11/7/07 10:19 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The real problem, as you and others have pointed out is the lack of
</span><br>
<span class="quotelev1">&gt; predictable time slices for the progress engine to do its work, when relying
</span><br>
<span class="quotelev1">&gt; on the ULP to make calls into the library...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/8/07 12:07 AM, &quot;Brian Barrett&quot; &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As it stands today, the problem is that we can inject things into the
</span><br>
<span class="quotelev2">&gt;&gt; BTL successfully that are not injected into the NIC (due to software
</span><br>
<span class="quotelev2">&gt;&gt; flow control).  Once a message is injected into the BTL, the PML marks
</span><br>
<span class="quotelev2">&gt;&gt; completion on the MPI request.  If it was a blocking send that got
</span><br>
<span class="quotelev2">&gt;&gt; marked as complete, but the message isn't injected into the NIC/NIC
</span><br>
<span class="quotelev2">&gt;&gt; library, and the user doesn't re-enter the MPI library for a
</span><br>
<span class="quotelev2">&gt;&gt; considerable amount of time, then we have a problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Personally, I'd rather just not mark MPI completion until a local
</span><br>
<span class="quotelev2">&gt;&gt; completion callback from the BTL.  But others don't like that idea, so
</span><br>
<span class="quotelev2">&gt;&gt; we came up with a way for back pressure from the BTL to say &quot;it's not
</span><br>
<span class="quotelev2">&gt;&gt; on the wire yet&quot;.  This is more complicated than just not marking MPI
</span><br>
<span class="quotelev2">&gt;&gt; completion early, but why would we do something that helps real apps
</span><br>
<span class="quotelev2">&gt;&gt; at the expense of benchmarks?  That would just be silly!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2007, at 7:56 PM, Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this mean that we don&#185;t have a queue to store btl level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; descriptors that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  are only partially complete ?  Do we do an all or nothing with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; respect to btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  level requests at this stage ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Seems to me like we want to mark things complete at the MPI level
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ASAP, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  that this proposal is not to do that &#173; is this correct ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/7/07 11:26 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 7, 2007, at 9:33 PM, Patrick Geoffray wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Remember that this is all in the context of Galen's proposal for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_send() to be able to return NOT_ON_WIRE -- meaning that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; was successful, but it has not yet been sent (e.g., openib BTL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; buffered it because it ran out of credits).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry if I miss something obvious, but why does the PML has to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aware
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of the flow control situation of the BTL ? If the BTL cannot send
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something right away for any reason, it should be the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; responsibility
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the BTL to buffer it and to progress on it later.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's currently the way it is.  But the BTL currently only has the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; option to say two things:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. &quot;ok, done!&quot; -- then the PML will think that the request is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. &quot;doh -- error!&quot; -- then the PML thinks that Something Bad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Happened(tm)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What we really need is for the BTL to have a third option:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. &quot;not done yet!&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So that the PML knows that the request is not yet done, but will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other things to progress while we're waiting for it to complete.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Without this, the openib BTL currently replies &quot;ok, done!&quot;, even when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it has only buffered a message (rather than actually sending it out).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This optimization works great (yeah, I know...) except for apps that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't dip into the MPI library frequently.  :-\
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="2578.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Patrick Geoffray: "Re: [OMPI devel] collective problems"</a>
<li><strong>In reply to:</strong> <a href="2575.php">Richard Graham: "Re: [OMPI devel] collective problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2579.php">Gleb Natapov: "Re: [OMPI devel] collective problems"</a>
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
