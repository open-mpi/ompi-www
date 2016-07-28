<?
$subject_val = "Re: [OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 20:58:59 2012" -->
<!-- isoreceived="20120209015859" -->
<!-- sent="Wed, 8 Feb 2012 20:58:52 -0500" -->
<!-- isosent="20120209015852" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread safety of the self btl" -->
<!-- id="C8881ECA-70BD-4FE0-9556-EC21C3F99646_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120209092731.02b4c6fd_at_Gantu.yeoh.info" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread safety of the self btl<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 20:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The self BTL is different from any other BTL. Any memcpy operation done by this BTL is automatically protected behind the matching logic, and therefore does not require extra thread safety protection. A mutex in the self BTL is mostly a copy/paste mistake.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Feb 8, 2012, at 17:57 , Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've noticed that the self btl does not do any locking. It has one
</span><br>
<span class="quotelev1">&gt; lock defined but its not actually used anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'm just wondering if that is an oversight or if there is a reason
</span><br>
<span class="quotelev1">&gt; that we know for sure that there will never be concurrent access
</span><br>
<span class="quotelev1">&gt; to that particular btl with threads enabled?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; cyeoh_at_[hidden]
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
<li><strong>Next message:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10346.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10348.php">Jeff Squyres: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Reply:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
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
