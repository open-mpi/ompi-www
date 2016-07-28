<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 10:57:59 2008" -->
<!-- isoreceived="20080310145759" -->
<!-- sent="Mon, 10 Mar 2008 09:57:55 -0500" -->
<!-- isosent="20080310145755" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="47D54C73.60708_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54AC16EE-BB03-4638-BFF6-3ADB845C65DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 10:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 9, 2008, at 3:39 PM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 1. There was a discussion about this on openfabrics mailing list and  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; conclusion was that what Open MPI does is correct according to IB/ 
</span><br>
<span class="quotelev2">&gt;&gt; iWarp
</span><br>
<span class="quotelev2">&gt;&gt; spec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Is it possible to fix your FW to follow iWarp spec? Perhaps it is
</span><br>
<span class="quotelev2">&gt;&gt; possible to implement ibv_post_recv() so that it will not return  
</span><br>
<span class="quotelev2">&gt;&gt; before
</span><br>
<span class="quotelev2">&gt;&gt; post receive is processed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 3. I personally don't like the idea to add another layer of  
</span><br>
<span class="quotelev2">&gt;&gt; complexity to openib
</span><br>
<span class="quotelev2">&gt;&gt; BTL code just to work around HW that doesn't follow spec. If work  
</span><br>
<span class="quotelev2">&gt;&gt; around
</span><br>
<span class="quotelev2">&gt;&gt; is simple that is OK, but in this case it is not so simple and will  
</span><br>
<span class="quotelev2">&gt;&gt; add
</span><br>
<span class="quotelev2">&gt;&gt; code path that is rarely tested. A simple workaround for the problem  
</span><br>
<span class="quotelev2">&gt;&gt; may
</span><br>
<span class="quotelev2">&gt;&gt; be to not configure multiple QPs if HW has a bug (and we can extend  
</span><br>
<span class="quotelev2">&gt;&gt; ini
</span><br>
<span class="quotelev2">&gt;&gt; file to contain this info).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are all valid points.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In thinking about Gleb's proposal a bit more (extend the INI file  
</span><br>
<span class="quotelev1">&gt; syntax to accept per-HCA receive_queues values), it might be only  
</span><br>
<span class="quotelev1">&gt; somewhat less efficient (and a lot less code) than sending all flow  
</span><br>
<span class="quotelev1">&gt; control messages on the respective qp's anyway.  So let's explore the  
</span><br>
<span class="quotelev1">&gt; math...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;let's use multiple QP's for short messages&quot; scheme (a.k.a. BSRQ)  
</span><br>
<span class="quotelev1">&gt; was invented to get better registered memory utilization.  Pushing all  
</span><br>
<span class="quotelev1">&gt; the FC messages down to the QP with the smallest buffer size was a  
</span><br>
<span class="quotelev1">&gt; desirable side-effect that made registered memory utilization even  
</span><br>
<span class="quotelev1">&gt; better (because short FC messages were naturally on the QP with the  
</span><br>
<span class="quotelev1">&gt; smallest buffer size).  Specifically, today in openib/IB (SVN trunk),  
</span><br>
<span class="quotelev1">&gt; here's the default queue layout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pp: 256 buffers of size 128
</span><br>
<span class="quotelev1">&gt; srq: 256 buffers of size 4k
</span><br>
<span class="quotelev1">&gt; srq: 256 buffers of size 12k (eager limit)
</span><br>
<span class="quotelev1">&gt; srq: 256 buffers of size 64k (max send size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then we add 4 more buffers on the pp qp for flow control messages  
</span><br>
<span class="quotelev1">&gt; (since we only currently send FC messages for pp qp's).  Total  
</span><br>
<span class="quotelev1">&gt; registered memory for a job with 1 remote peer: (256+4)*128 + 256*4k +  
</span><br>
<span class="quotelev1">&gt; 256*12k + 256*64k = ~20M.  This is somewhat deceiving, because the  
</span><br>
<span class="quotelev1">&gt; total registered memory scales slowly with the number of procs in the  
</span><br>
<span class="quotelev1">&gt; job (e.g., with 2 remote peers, in only increases by 33k because we're  
</span><br>
<span class="quotelev1">&gt; using srq's).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With Gleb's proposals, you'd only have one pp qp, assumedly 64k (or  
</span><br>
<span class="quotelev1">&gt; whatever the max send size is):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pp: 256 buffers of size 64k (max send size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then add 4 more for flow control messages.  So total registered  
</span><br>
<span class="quotelev1">&gt; memory for a job with 1 remote peer: (256+4)*64k = ~17M.  But that  
</span><br>
<span class="quotelev1">&gt; figure is approximately a per-peer cost -- so a job with 2 remote  
</span><br>
<span class="quotelev1">&gt; peers would use ~34M of registered memory, etc.  This will [obviously]  
</span><br>
<span class="quotelev1">&gt; scale extremely poorly (and is one of the reasons that BSRQ exists).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I wonder if there's a compromise (assuming you can't fix  
</span><br>
<span class="quotelev1">&gt; ibv_post_recv() to not return until the buffers are actually  
</span><br>
<span class="quotelev1">&gt; available, which, I agree with Gleb, seems like the best fix).  Since  
</span><br>
<span class="quotelev1">&gt; we only use FC messages on pp qp's, why not make a &quot;you can only have  
</span><br>
<span class="quotelev1">&gt; 1 pp qp and it must be qp 0&quot; restriction for the Chelsio RNIC?  This  
</span><br>
<span class="quotelev1">&gt; fits nicely into our default receive_queues value, anyway.  That way,  
</span><br>
<span class="quotelev1">&gt; all FC messages will naturally go over qp 0 anyway (since that will be  
</span><br>
<span class="quotelev1">&gt; the only pp qp).  Then, the only problem you have to solve is sending  
</span><br>
<span class="quotelev1">&gt; the *initial* credits message at wireup time (to know when the receive  
</span><br>
<span class="quotelev1">&gt; buffers have actually been posted to the srq's).  Perhaps something  
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you can export an attribute from the RNIC that advertises that  
</span><br>
<span class="quotelev1">&gt; ibv_post_recv() works this way (so that OMPI can detect it at run time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. hide the extra wireup / initial credit coordination in the rdma cpc  
</span><br>
<span class="quotelev1">&gt; when this attribute is detected (or make an mca param / ini file param  
</span><br>
<span class="quotelev1">&gt; that specifically requests for this extra rdma cm cpc behavior (or not).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What would make this proposal moot is if the Chelsio RNIC can't do  
</span><br>
<span class="quotelev1">&gt; SRQs (I don't remember offhand).  If it can't (and you can't fix  
</span><br>
<span class="quotelev1">&gt; ibv_post_recv()), then you might as well do Gleb's &quot;just use one qp&quot;  
</span><br>
<span class="quotelev1">&gt; proposal.  You'll get lousy registered memory utilization, but the  
</span><br>
<span class="quotelev1">&gt; bigger problem you'll have is the scalability issues for large-peer- 
</span><br>
<span class="quotelev1">&gt; count jobs (e.g., using the values above, 17M of registered memory per  
</span><br>
<span class="quotelev1">&gt; peer; I assume you'll have to tune that down via .ini file params).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
This gen of the chelsio rnic doesn't support SRQs.
<br>
<p>I don't think we can fix post_recv to behave like we want.
<br>
<p>A single PP QP might be fine for now, and chelsio's next-gen part will 
<br>
support SRQs and not have this funky issue.
<br>
<p>But why use such a large buffer size for a single PP QP?  Why not use 
<br>
something around 16KB?
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3417.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Previous message:</strong> <a href="3415.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>In reply to:</strong> <a href="3412.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3418.php">Jeff Squyres: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
