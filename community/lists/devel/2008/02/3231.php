<?
$subject_val = "Re: [OMPI devel] btl_openib_rnr_retry MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 13 00:59:56 2008" -->
<!-- isoreceived="20080213055956" -->
<!-- sent="Wed, 13 Feb 2008 07:59:48 +0200" -->
<!-- isosent="20080213055948" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib_rnr_retry MCA param" -->
<!-- id="20080213055947.GA6678_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ECF0089A-0783-426E-BEEF-C122120B50F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib_rnr_retry MCA param<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-13 00:59:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Previous message:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="3225.php">Jeff Squyres: "[OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 12, 2008 at 05:41:13PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I see that in the OOB CPC for the openib BTL, when setting up the send  
</span><br>
<span class="quotelev1">&gt; side of the QP, we set the rnr_retry value depending on whether the  
</span><br>
<span class="quotelev1">&gt; remote receive queue is a per-peer or SRQ:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - SRQ: btl_openib_rnr_retry MCA param value
</span><br>
<span class="quotelev1">&gt; - PP: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rationale given in a comment is that setting the RNR to 0 is a  
</span><br>
<span class="quotelev1">&gt; good way to find bugs in our flow control.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we really want this in production builds?  Or do we want 0 for  
</span><br>
<span class="quotelev1">&gt; developer builds and the same btl_openib_rnr_retry value for PP queues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
The comment is mine and IMO it should stay that way for production
<br>
builds. SW flow control either work or it doesn't and if it doesn't I
<br>
prefer to know about it immediately. Setting PP to some value greater
<br>
then 0 just delays the manifestation of the problem and in the case of
<br>
iWarp such possibility doesn't even exists.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3232.php">Gleb Natapov: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Previous message:</strong> <a href="3230.php">Ralph Castain: "Re: [OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>In reply to:</strong> <a href="3225.php">Jeff Squyres: "[OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3241.php">Jeff Squyres: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
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
