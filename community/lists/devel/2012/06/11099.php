<?
$subject_val = "Re: [OMPI devel] RFC: hide btl segment keys within btl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 12:42:19 2012" -->
<!-- isoreceived="20120614164219" -->
<!-- sent="Thu, 14 Jun 2012 12:42:14 -0400" -->
<!-- isosent="20120614164214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hide btl segment keys within btl" -->
<!-- id="D18FA5A6-9237-4AD8-875E-96E138D5009D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1206131044410.1211_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 12:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11098.php">Richard Graham: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like a good thing to me.  +1
<br>
<p>On Jun 13, 2012, at 12:58 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: hide btl segment keys from PML/OSC code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: As it stands new BTLs with larger segment keys (smcuda for example) require changes in both OSC/rdma as well as the PMLs. This RFC makes will make changes in segment keys transparent to all btl users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: The changes are very straight-forward so I am setting the timeout for this to June 22, 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where: See the attached patch or check out the bitbucket <a href="http://bitbucket.org/hjelmn/ompi-btl-interface-update">http://bitbucket.org/hjelmn/ompi-btl-interface-update</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the relevant PMLs/BTLs + OSC/rdma have been updated with the exception of btl/wv. I have also tested the following components:
</span><br>
<span class="quotelev1">&gt; - ob1
</span><br>
<span class="quotelev1">&gt; - csum
</span><br>
<span class="quotelev1">&gt; - bfo
</span><br>
<span class="quotelev1">&gt; - ugni (now works with MPI one-sides)
</span><br>
<span class="quotelev1">&gt; - sm
</span><br>
<span class="quotelev1">&gt; - vader
</span><br>
<span class="quotelev1">&gt; - openib (in progress)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian and Rolf, please take a look at your components and let me know if I screwed anything up.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11098.php">Richard Graham: "Re: [OMPI devel] Modex"</a>
<li><strong>In reply to:</strong> <a href="11097.php">Nathan Hjelm: "[OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11114.php">George Bosilca: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
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
