<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 09:27:17 2011" -->
<!-- isoreceived="20110509132717" -->
<!-- sent="Mon, 9 May 2011 06:27:14 -0700" -->
<!-- isosent="20110509132714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="DAB6927B-DFDB-485B-BAB9-0C36ED44DF93_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="125693.50520.qm_at_web121016.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] is there an equiv of iprove for bcast?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-09 09:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16488.php">Joe Vallino: "[OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 3, 2011, at 8:20 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Sorry, I meant to say:
</span><br>
<span class="quotelev1">&gt; - on each node there is 1 listener and 1 worker.
</span><br>
<span class="quotelev1">&gt; - all workers act together when any of the listeners send them a request.
</span><br>
<span class="quotelev1">&gt; - currently I must use an extra clearinghouse process to receive from any of the listeners and bcast to workers, this is unfortunate because of the potential scaling issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you have answered this in that I must wait for MPI-3's non-blocking collectives.
</span><br>
<p>Yes and no.  If each worker starts N non-blocking broadcasts just to be able to test for completion of any of them, you might end up consuming a bunch of resources for them (I'm *anticipating* that pending non-blocking collective requests maybe more heavyweight than pending non-blocking point-to-point requests).
<br>
<p>But then again, if N is small, it might not matter.
<br>
<p><span class="quotelev1">&gt; Can anyone suggest another way?  I don't like the serial clearinghouse approach.
</span><br>
<p>If you only have a few workers and/or the broadcast message is small and/or the broadcasts aren't frequent, then MPI's built-in broadcast algorithms might not offer much more optimization than doing your own with point-to-point mechanisms.  I don't usually recommend this, but it may be possible for your case.
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
<li><strong>Next message:</strong> <a href="16490.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16488.php">Joe Vallino: "[OMPI users] Request for F90 bindings for Windows Builds"</a>
<li><strong>In reply to:</strong> <a href="16440.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
