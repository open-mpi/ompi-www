<?
$subject_val = "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 09:14:34 2008" -->
<!-- isoreceived="20080310131434" -->
<!-- sent="Mon, 10 Mar 2008 08:14:24 -0500" -->
<!-- isosent="20080310131424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW" -->
<!-- id="54AC16EE-BB03-4638-BFF6-3ADB845C65DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080309203951.GB812_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-10 09:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3413.php">Jeff Squyres: "[OMPI devel] cisco weekend mtt failures"</a>
<li><strong>Previous message:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2008, at 3:39 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; 1. There was a discussion about this on openfabrics mailing list and  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; conclusion was that what Open MPI does is correct according to IB/ 
</span><br>
<span class="quotelev1">&gt; iWarp
</span><br>
<span class="quotelev1">&gt; spec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Is it possible to fix your FW to follow iWarp spec? Perhaps it is
</span><br>
<span class="quotelev1">&gt; possible to implement ibv_post_recv() so that it will not return  
</span><br>
<span class="quotelev1">&gt; before
</span><br>
<span class="quotelev1">&gt; post receive is processed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 3. I personally don't like the idea to add another layer of  
</span><br>
<span class="quotelev1">&gt; complexity to openib
</span><br>
<span class="quotelev1">&gt; BTL code just to work around HW that doesn't follow spec. If work  
</span><br>
<span class="quotelev1">&gt; around
</span><br>
<span class="quotelev1">&gt; is simple that is OK, but in this case it is not so simple and will  
</span><br>
<span class="quotelev1">&gt; add
</span><br>
<span class="quotelev1">&gt; code path that is rarely tested. A simple workaround for the problem  
</span><br>
<span class="quotelev1">&gt; may
</span><br>
<span class="quotelev1">&gt; be to not configure multiple QPs if HW has a bug (and we can extend  
</span><br>
<span class="quotelev1">&gt; ini
</span><br>
<span class="quotelev1">&gt; file to contain this info).
</span><br>
<p><p>These are all valid points.
<br>
<p>In thinking about Gleb's proposal a bit more (extend the INI file  
<br>
syntax to accept per-HCA receive_queues values), it might be only  
<br>
somewhat less efficient (and a lot less code) than sending all flow  
<br>
control messages on the respective qp's anyway.  So let's explore the  
<br>
math...
<br>
<p>The &quot;let's use multiple QP's for short messages&quot; scheme (a.k.a. BSRQ)  
<br>
was invented to get better registered memory utilization.  Pushing all  
<br>
the FC messages down to the QP with the smallest buffer size was a  
<br>
desirable side-effect that made registered memory utilization even  
<br>
better (because short FC messages were naturally on the QP with the  
<br>
smallest buffer size).  Specifically, today in openib/IB (SVN trunk),  
<br>
here's the default queue layout:
<br>
<p>pp: 256 buffers of size 128
<br>
srq: 256 buffers of size 4k
<br>
srq: 256 buffers of size 12k (eager limit)
<br>
srq: 256 buffers of size 64k (max send size)
<br>
<p>And then we add 4 more buffers on the pp qp for flow control messages  
<br>
(since we only currently send FC messages for pp qp's).  Total  
<br>
registered memory for a job with 1 remote peer: (256+4)*128 + 256*4k +  
<br>
256*12k + 256*64k = ~20M.  This is somewhat deceiving, because the  
<br>
total registered memory scales slowly with the number of procs in the  
<br>
job (e.g., with 2 remote peers, in only increases by 33k because we're  
<br>
using srq's).
<br>
<p>With Gleb's proposals, you'd only have one pp qp, assumedly 64k (or  
<br>
whatever the max send size is):
<br>
<p>pp: 256 buffers of size 64k (max send size)
<br>
<p>And then add 4 more for flow control messages.  So total registered  
<br>
memory for a job with 1 remote peer: (256+4)*64k = ~17M.  But that  
<br>
figure is approximately a per-peer cost -- so a job with 2 remote  
<br>
peers would use ~34M of registered memory, etc.  This will [obviously]  
<br>
scale extremely poorly (and is one of the reasons that BSRQ exists).
<br>
<p>However, I wonder if there's a compromise (assuming you can't fix  
<br>
ibv_post_recv() to not return until the buffers are actually  
<br>
available, which, I agree with Gleb, seems like the best fix).  Since  
<br>
we only use FC messages on pp qp's, why not make a &quot;you can only have  
<br>
1 pp qp and it must be qp 0&quot; restriction for the Chelsio RNIC?  This  
<br>
fits nicely into our default receive_queues value, anyway.  That way,  
<br>
all FC messages will naturally go over qp 0 anyway (since that will be  
<br>
the only pp qp).  Then, the only problem you have to solve is sending  
<br>
the *initial* credits message at wireup time (to know when the receive  
<br>
buffers have actually been posted to the srq's).  Perhaps something  
<br>
like this:
<br>
<p>1. you can export an attribute from the RNIC that advertises that  
<br>
ibv_post_recv() works this way (so that OMPI can detect it at run time)
<br>
<p>2. hide the extra wireup / initial credit coordination in the rdma cpc  
<br>
when this attribute is detected (or make an mca param / ini file param  
<br>
that specifically requests for this extra rdma cm cpc behavior (or not).
<br>
<p>What would make this proposal moot is if the Chelsio RNIC can't do  
<br>
SRQs (I don't remember offhand).  If it can't (and you can't fix  
<br>
ibv_post_recv()), then you might as well do Gleb's &quot;just use one qp&quot;  
<br>
proposal.  You'll get lousy registered memory utilization, but the  
<br>
bigger problem you'll have is the scalability issues for large-peer- 
<br>
count jobs (e.g., using the values above, 17M of registered memory per  
<br>
peer; I assume you'll have to tune that down via .ini file params).
<br>
<p>What about that?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3413.php">Jeff Squyres: "[OMPI devel] cisco weekend mtt failures"</a>
<li><strong>Previous message:</strong> <a href="3411.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Reduce the number of tests run by make check"</a>
<li><strong>In reply to:</strong> <a href="3410.php">Gleb Natapov: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
<li><strong>Reply:</strong> <a href="3416.php">Steve Wise: "Re: [OMPI devel] OMPI OpenIB Credit Schema breaks Chelsio HW"</a>
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
