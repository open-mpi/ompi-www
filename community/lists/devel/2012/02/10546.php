<?
$subject_val = "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 16:32:05 2012" -->
<!-- isoreceived="20120221213205" -->
<!-- sent="Tue, 21 Feb 2012 13:31:51 -0800" -->
<!-- isosent="20120221213151" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8230A8CA_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1202211357570.11396_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 16:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I am OK with this.  
<br>
<p>Alternatively, you could have done something like is done in the TCP BTL where the payload and header are added together for the frag size?
<br>
To state more clearly, I was trying to say you could do something similar to what is done at line 1015 in btl_tcp_component.c and ended up with the same results?
<br>
<p>This is just making the payload buffer a different chunk of memory than the headers?
<br>
<p>I am just trying to understand the motivation for the change.
<br>
<p>I think the way you have it is more correct so we can support the case where someone specifies the header size and the payload size differently and expects the free list code to do the right thing.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, February 21, 2012 3:59 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] RFC: Allocate free list payload if free list isn't
</span><br>
<span class="quotelev1">&gt;specified
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Opps, screwed up the title. Should be: RFC: Allocate requested free list
</span><br>
<span class="quotelev1">&gt;payload even if an mpool isn't specified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Tue, 21 Feb 2012, Nathan Hjelm wro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What: Allocate free list payload even if a payload size is specified
</span><br>
<span class="quotelev2">&gt;&gt; even if no mpool is specified.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When: Thursday, Feb 23, 2012
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why: The current behavior is to ignore the payload size if no mpool is
</span><br>
<span class="quotelev2">&gt;&gt; specified. I see no reason why a payload buffer should't be allocated
</span><br>
<span class="quotelev2">&gt;&gt; in the no mpool case. Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patch is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Previous message:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10545.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>Reply:</strong> <a href="10547.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
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
