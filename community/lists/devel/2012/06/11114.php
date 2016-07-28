<?
$subject_val = "Re: [OMPI devel] RFC: hide btl segment keys within btl";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 16 12:49:31 2012" -->
<!-- isoreceived="20120616164931" -->
<!-- sent="Sat, 16 Jun 2012 18:49:25 +0200" -->
<!-- isosent="20120616164925" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hide btl segment keys within btl" -->
<!-- id="66E7F846-2B27-4439-943A-247701B0AACE_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D18FA5A6-9237-4AD8-875E-96E138D5009D_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-16 12:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11115.php">TERRY DONTJE: "[OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<li><strong>Previous message:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good to me. I would add some checks regarding the number and size of the segments and the allocated space (MCA_BTL_SEG_MAX_SIZE) to make sure we never hit the corner case where there are too many segments compared with the available space. And add a huge comment in the btl.h about the fact that mca_btl_base_segment_t should be used with extreme care.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 14, 2012, at 18:42 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This sounds like a good thing to me.  +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 12:58 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: hide btl segment keys from PML/OSC code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: As it stands new BTLs with larger segment keys (smcuda for example) require changes in both OSC/rdma as well as the PMLs. This RFC makes will make changes in segment keys transparent to all btl users.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: The changes are very straight-forward so I am setting the timeout for this to June 22, 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where: See the attached patch or check out the bitbucket <a href="http://bitbucket.org/hjelmn/ompi-btl-interface-update">http://bitbucket.org/hjelmn/ompi-btl-interface-update</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the relevant PMLs/BTLs + OSC/rdma have been updated with the exception of btl/wv. I have also tested the following components:
</span><br>
<span class="quotelev2">&gt;&gt; - ob1
</span><br>
<span class="quotelev2">&gt;&gt; - csum
</span><br>
<span class="quotelev2">&gt;&gt; - bfo
</span><br>
<span class="quotelev2">&gt;&gt; - ugni (now works with MPI one-sides)
</span><br>
<span class="quotelev2">&gt;&gt; - sm
</span><br>
<span class="quotelev2">&gt;&gt; - vader
</span><br>
<span class="quotelev2">&gt;&gt; - openib (in progress)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian and Rolf, please take a look at your components and let me know if I screwed anything up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11115.php">TERRY DONTJE: "[OMPI devel] openib Dynamic SL opensm-devel usage"</a>
<li><strong>Previous message:</strong> <a href="11113.php">Ralph Castain: "Re: [OMPI devel] RFC: Pineapple Runtime Interposition Project"</a>
<li><strong>In reply to:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11120.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
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
