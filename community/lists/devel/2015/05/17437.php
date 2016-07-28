<?
$subject_val = "Re: [OMPI devel] smcuda higher exclusivity than anything else?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 16:11:28 2015" -->
<!-- isoreceived="20150520201128" -->
<!-- sent="Wed, 20 May 2015 20:11:25 +0000" -->
<!-- isosent="20150520201125" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] smcuda higher exclusivity than anything else?" -->
<!-- id="141339f451d2435991941de7fb05321c_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BBBCE19C-F107-412A-8260-9D5D845F52ED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] smcuda higher exclusivity than anything else?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 16:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few observations.
<br>
1. The smcuda btl is only built when --with-cuda is part of the configure line so folks who do not do this will not even have this btl and will never run into this issue.
<br>
2. The priority of the smcuda btl has been higher since Open MPI 1.7.5 (March 2014).  The idea is that if someone configured in CUDA-aware support, then they should not explicitly have to adjust the priority of the smcuda btl to get it selected.    
<br>
3. This issue popped up because I made a change in the smcuda btl between 1.8.4 and 1.8.5.  The change was that the btl_smcuda_max_send_size was bumped from 32k to 128K.  This had a positive effect when sending and receiving GPU buffers.  I knew it would somewhat negatively affect host memory transfers, but figured that was a fair tradeoff.  Based on this report, that may not have been the right decision.  If one runs with Open MPI 1.8.5 and sets --mca btl_smcuda_max_send_size 32768, then one sees the same performance as 1.8.4 and similar to what one gets with the sm btl.
<br>

<br>
Interesting idea to disqualify this BTL if there are no GPUs on the machine. 
<br>

<br>
Aurelien, would that seem like a good solution?
<br>

<br>
Rolf
<br>

<br>
PS: Unfortunately, the max_send_size value is used for both GPU and CPU transfers, and the optimal value for each is different.
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev1">&gt;Castain
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, May 20, 2015 3:25 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] smcuda higher exclusivity than anything else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Rolf - this doesn&#226;&#128;&#153;t sound right to me. I assume that smcuda is only supposed
</span><br>
<span class="quotelev1">&gt;to build if cuda support was found/requested, but if there are no cuda
</span><br>
<span class="quotelev1">&gt;adapters, then I would have thought it should disqualify itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can we do something about this for 1.8.6?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 20, 2015, at 11:14 AM, Aur&#195;&#169;lien Bouteiller &lt;bouteill_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was making basic performance measurements on our machine after
</span><br>
<span class="quotelev1">&gt;installing 1.8.5, the performance were looking bad. It turns out that the
</span><br>
<span class="quotelev1">&gt;smcuda btl has a higher exclusivity than both vader and sm, even on machines
</span><br>
<span class="quotelev1">&gt;with no nvidia adapters. Is there a strong reason why the default exclusivity is
</span><br>
<span class="quotelev1">&gt;set so high ? Of course it can be easily fixed with a couple of mca options, but
</span><br>
<span class="quotelev1">&gt;unsuspecting users that &#226;&#128;&#156;just run&#226;&#128;&#157; will experience 1/3 overhead across the
</span><br>
<span class="quotelev1">&gt;board for shared memory communication according to my measurements.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Side note: from my understanding of the smcuda component, performance
</span><br>
<span class="quotelev2">&gt;&gt; should be identical to the regular sm component (as long as no GPU
</span><br>
<span class="quotelev1">&gt;operation are required). This is not the case, there is some performance
</span><br>
<span class="quotelev1">&gt;penalty with smcuda compared to sm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Aur&#195;&#169;lien Bouteiller ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17435.php">http://www.open-mpi.org/community/lists/devel/2015/05/17435.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/devel/2015/05/17436.php
</span><br>

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
<li><strong>Next message:</strong> <a href="17438.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<li><strong>In reply to:</strong> <a href="17436.php">Ralph Castain: "Re: [OMPI devel] smcuda higher exclusivity than anything else?"</a>
<!-- nextthread="start" -->
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
