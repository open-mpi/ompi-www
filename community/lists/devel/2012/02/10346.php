<?
$subject_val = "Re: [OMPI devel] thread safety of the self btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 19:37:17 2012" -->
<!-- isoreceived="20120209003717" -->
<!-- sent="Wed, 8 Feb 2012 19:37:12 -0500" -->
<!-- isosent="20120209003712" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread safety of the self btl" -->
<!-- id="AD93525B-97E1-4910-8801-4D8CD4BB7F9C_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 19:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2012, at 5:57 PM, Christopher Yeoh wrote:
<br>
<p><span class="quotelev1">&gt; I've noticed that the self btl does not do any locking. It has one
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
<p>Sounds like an oversight to me.
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
<li><strong>Next message:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
<li><strong>Previous message:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<li><strong>In reply to:</strong> <a href="10345.php">Christopher Yeoh: "[OMPI devel] thread safety of the self btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10347.php">George Bosilca: "Re: [OMPI devel] thread safety of the self btl"</a>
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
