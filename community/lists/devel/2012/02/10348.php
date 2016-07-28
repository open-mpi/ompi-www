<?
$subject_val = "Re: [OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 21:00:49 2012" -->
<!-- isoreceived="20120209020049" -->
<!-- sent="Wed, 8 Feb 2012 21:00:44 -0500" -->
<!-- isosent="20120209020044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread safety of the self btl" -->
<!-- id="A872EE26-BCEF-45C3-AEB1-130EA24C0C72_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8881ECA-70BD-4FE0-9556-EC21C3F99646_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 21:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10349.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2012, at 8:58 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The self BTL is different from any other BTL. Any memcpy operation done by this BTL is automatically protected behind the matching logic, and therefore does not require extra thread safety protection. A mutex in the self BTL is mostly a copy/paste mistake.
</span><br>
<p>I like George's answer better than mine.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10349.php">George Bosilca: "Re: [OMPI devel] RFC: Java MPI bindings"</a>
<li><strong>Previous message:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10350.php">Christopher Yeoh: "Re: [OMPI devel] thread safety of the self btl"</a>
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
