<?
$subject_val = "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 17:33:10 2009" -->
<!-- isoreceived="20090115223310" -->
<!-- sent="Thu, 15 Jan 2009 14:36:50 -0800" -->
<!-- isosent="20090115223650" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()" -->
<!-- id="496FBA82.8070406_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28715CAF-04C3-454D-AE37-F0D36275CAE7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-15 17:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5213.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5211.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.  For my edification:  are such trivial changes deserving of 
<br>
RFCs?  Perfect for RFCs?  Good for RFCs while I'm still getting my feet 
<br>
wet, but unnecessary once I get the hang of things?
<br>
<p>1.4 was poor counting on my part:  1.3+1=1.4.  The new math.  I guess 
<br>
actually 1.3+1=1.3.1.  I'm fine with 1.3.1.  It's a small, safe change.  
<br>
The sooner the better.  But, I'm open to expert opinion.
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ditto; kill it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I marginally prefer 1.4 because it really doesn't affect anything in  
</span><br>
<span class="quotelev1">&gt; the now-more-or-less-static 1.3 series, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 15, 2009, at 5:01 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Absolutely! Why wait until the 1.4 while we can have that in the  
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.1...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 15, 2009, at 16:39 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't know what scope of changes require RFCs, but here's a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trivial change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RFC: Eliminate opal_round_up_to_nearest_pow2().
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5213.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5211.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5209.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>Reply:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
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
