<?
$subject_val = "Re: [OMPI devel] RFC: hide btl segment keys within btl";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 18:39:15 2012" -->
<!-- isoreceived="20120618223915" -->
<!-- sent="Mon, 18 Jun 2012 16:39:10 -0600" -->
<!-- isosent="20120618223910" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hide btl segment keys within btl" -->
<!-- id="20120618223910.GC26817_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E866C4783_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: hide btl segment keys within btl<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 18:39:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf, I updated my bitbucket base on your and George's comments. Let me know if you find any more problems.
<br>
<p>-Nathan
<br>
<p>On Mon, Jun 18, 2012 at 10:18:20AM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Hi Nathan:
</span><br>
<span class="quotelev1">&gt; I downloaded and tried it out.  There were a few issues that I had to work through, but finally got things working.
</span><br>
<span class="quotelev1">&gt; Can you apply this patch to your changes prior to checking things in?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also would suggest configuring with --enable-picky as there are something like 10 warnings generated due to your changes.  And check for tabs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, I think it is good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt;On Behalf Of George Bosilca
</span><br>
<span class="quotelev2">&gt; &gt;Sent: Saturday, June 16, 2012 12:49 PM
</span><br>
<span class="quotelev2">&gt; &gt;To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt;Subject: Re: [OMPI devel] RFC: hide btl segment keys within btl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Looks good to me. I would add some checks regarding the number and size of
</span><br>
<span class="quotelev2">&gt; &gt;the segments and the allocated space (MCA_BTL_SEG_MAX_SIZE) to make
</span><br>
<span class="quotelev2">&gt; &gt;sure we never hit the corner case where there are too many segments
</span><br>
<span class="quotelev2">&gt; &gt;compared with the available space. And add a huge comment in the btl.h
</span><br>
<span class="quotelev2">&gt; &gt;about the fact that mca_btl_base_segment_t should be used with extreme
</span><br>
<span class="quotelev2">&gt; &gt;care.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Jun 14, 2012, at 18:42 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This sounds like a good thing to me.  +1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 13, 2012, at 12:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What: hide btl segment keys from PML/OSC code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Why: As it stands new BTLs with larger segment keys (smcuda for example)
</span><br>
<span class="quotelev2">&gt; &gt;require changes in both OSC/rdma as well as the PMLs. This RFC makes will
</span><br>
<span class="quotelev2">&gt; &gt;make changes in segment keys transparent to all btl users.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When: The changes are very straight-forward so I am setting the timeout
</span><br>
<span class="quotelev2">&gt; &gt;for this to June 22, 2012
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Where: See the attached patch or check out the bitbucket
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://bitbucket.org/hjelmn/ompi-btl-interface-update">http://bitbucket.org/hjelmn/ompi-btl-interface-update</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; All the relevant PMLs/BTLs + OSC/rdma have been updated with the
</span><br>
<span class="quotelev2">&gt; &gt;exception of btl/wv. I have also tested the following components:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - ob1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - csum
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - bfo
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - ugni (now works with MPI one-sides)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - sm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - vader
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - openib (in progress)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Brian and Rolf, please take a look at your components and let me know if I
</span><br>
<span class="quotelev2">&gt; &gt;screwed anything up.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; HPC-3, LANL
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="11122.php">George Bosilca: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>In reply to:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
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
