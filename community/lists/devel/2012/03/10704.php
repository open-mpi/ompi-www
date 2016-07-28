<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 16:53:06 2012" -->
<!-- isoreceived="20120309215306" -->
<!-- sent="Fri, 9 Mar 2012 13:52:59 -0800" -->
<!-- isosent="20120309215259" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8323A736_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203091218050.711_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 16:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10705.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10703.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10702.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10705.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Comment at bottom]
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Friday, March 09, 2012 2:23 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Fri, 9 Mar 2012, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 9, 2012, at 1:32 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An mpool that is aware of local processes lru's will solve the problem in
</span><br>
<span class="quotelev1">&gt;most cases (all that I have seen)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree -- don't let words in my emails make you think otherwise.  I think this
</span><br>
<span class="quotelev1">&gt;will fix &quot;most&quot; problems, but undoubtedly, some will still occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's your timeline for having this ready -- should it go to 1.5.5, or 1.6?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More specifically: if it's immanent, and can go to v1.5, then the openib
</span><br>
<span class="quotelev1">&gt;message is irrelevant and should not be used (and backed out of the trunk).  If
</span><br>
<span class="quotelev1">&gt;it's going to take a little bit, I'm ok leaving the message in v1.5.5 for now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I wrote the prototype yesterday (after finding that limiting the lru doesn't
</span><br>
<span class="quotelev1">&gt;work for uGNI-- @256 pes we could only register ~1400 item instead of the
</span><br>
<span class="quotelev1">&gt;3600 max we saw @128). I should have a version ready for review next week
</span><br>
<span class="quotelev1">&gt;and a final version by the end of the month.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;BTW, can anyone tell me why each mpool defines
</span><br>
<span class="quotelev1">&gt;mca_mpool_base_resources_t instead of defining
</span><br>
<span class="quotelev1">&gt;mca_mpool_blah_resources_t. The current design makes it impossible to
</span><br>
<span class="quotelev1">&gt;support more than one mpool in a btl. I can delete a bunch of code if I can
</span><br>
<span class="quotelev1">&gt;make a btl fall back on the rdma mpool if leave_pinned is not set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<p>I ran into this same issue about wanting to use more than one mpool in a btl.  I expected that there might be a base resource structure that was extended by each mpool.  I talked with Jeff and he told me (if I recall correctly) that the reason was because there was no common information in any of the mca_mpool_base_resources_t structures so there was no need to have a base structure.  I do not think there is any reason we cannot do it as you suggest.
<br>
<p>[The one other place I have seen it done like this in the library is the mca_btl_base_endpoint_t which is defined differently for each BTL]
<br>
<p>&nbsp;
<br>
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
<li><strong>Next message:</strong> <a href="10705.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>Previous message:</strong> <a href="10703.php">Shamis, Pavel: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<li><strong>In reply to:</strong> <a href="10702.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10705.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
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
