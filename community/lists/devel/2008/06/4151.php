<?
$subject_val = "Re: [OMPI devel] iprobe and opal_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 09:57:29 2008" -->
<!-- isoreceived="20080618135729" -->
<!-- sent="Wed, 18 Jun 2008 09:57:25 -0400 (EDT)" -->
<!-- isosent="20080618135725" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iprobe and opal_progress" -->
<!-- id="Pine.LNX.4.64.0806180956480.21120_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48591326.7020904_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] iprobe and opal_progress<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 09:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 18 Jun 2008, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we did that as a latency optimization...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George / Brian / Galen -- do you guys know/remember why this was done?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the surface, it looks like it would be ok to call progress and check 
</span><br>
<span class="quotelev2">&gt;&gt; again to see if it found the match.  Can anyone think of a deeper reason 
</span><br>
<span class="quotelev2">&gt;&gt; not to?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; If it is ok to check again, my next question is going to be how?  Because 
</span><br>
<span class="quotelev1">&gt; after looking at the code some more I found iprobe requests are not actually 
</span><br>
<span class="quotelev1">&gt; queued.  So can I just do another MCA_PML_OB1_RECV_REQUEST_START on the 
</span><br>
<span class="quotelev1">&gt; init'd IPROBE_REQUEST after the  call opal_progress to force a search on the 
</span><br>
<span class="quotelev1">&gt; unexpected queue or do I need to FINI the request and regenerate it again?
</span><br>
<p>I think you'd have to re-init the request at a minimum.  In other words, 
<br>
just always call opal_progres at the top of iprobe and be done :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>In reply to:</strong> <a href="4150.php">Terry Dontje: "Re: [OMPI devel] iprobe and opal_progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
<li><strong>Reply:</strong> <a href="4152.php">George Bosilca: "Re: [OMPI devel] iprobe and opal_progress"</a>
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
