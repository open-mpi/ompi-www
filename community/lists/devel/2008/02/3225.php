<?
$subject_val = "[OMPI devel] btl_openib_rnr_retry MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 17:41:29 2008" -->
<!-- isoreceived="20080212224129" -->
<!-- sent="Tue, 12 Feb 2008 17:41:13 -0500" -->
<!-- isosent="20080212224113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] btl_openib_rnr_retry MCA param" -->
<!-- id="ECF0089A-0783-426E-BEEF-C122120B50F9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] btl_openib_rnr_retry MCA param<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 17:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3224.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see that in the OOB CPC for the openib BTL, when setting up the send  
<br>
side of the QP, we set the rnr_retry value depending on whether the  
<br>
remote receive queue is a per-peer or SRQ:
<br>
<p>- SRQ: btl_openib_rnr_retry MCA param value
<br>
- PP: 0
<br>
<p>The rationale given in a comment is that setting the RNR to 0 is a  
<br>
good way to find bugs in our flow control.
<br>
<p>Do we really want this in production builds?  Or do we want 0 for  
<br>
developer builds and the same btl_openib_rnr_retry value for PP queues?
<br>
<p>Or should we offer a finer-grained control, such as:
<br>
<p>- btl_openib_rnr_retry_pp: value to use for per-peer q's, -1=use the  
<br>
default
<br>
- btl_openib_rnr_retry_srq: value to use for srq's, -1=use the default
<br>
- btl_openib_rnr_retry: value to use as the default for _pp and _srq
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3224.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>Reply:</strong> <a href="3231.php">Gleb Natapov: "Re: [OMPI devel] btl_openib_rnr_retry MCA param"</a>
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
