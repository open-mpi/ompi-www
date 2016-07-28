<?
$subject_val = "Re: [OMPI users] is there an equiv of iprove for bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 22:14:23 2011" -->
<!-- isoreceived="20110511021423" -->
<!-- sent="Tue, 10 May 2011 19:14:13 -0700 (PDT)" -->
<!-- isosent="20110511021413" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] is there an equiv of iprove for bcast?" -->
<!-- id="677468.62340.qm_at_web121007.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DAB6927B-DFDB-485B-BAB9-0C36ED44DF93_at_cisco.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 22:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16489.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
The messages are small and frequent (they flash metadata across the cluster). &#160;The current approach works fine for small to medium clusters but I want it to be able to go big. &#160;Maybe up to several hundred or even a thousands of nodes.
<br>
<p>Its these larger deployments that concern me. &#160;The current scheme may see the clearinghouse become overloaded in a very large cluster.
<br>
<span class="quotelev1">&gt;From what you have &#160;said, a possible strategy may be to combine the listener and worker into a single process, using the non-blocking bcast just for that group, while each worker scanned its own port for an incoming request, which it would in turn bcast to its peers.
</span><br>
As you have indicated though, this would depend on the load the non-blocking bcast would cause. &#160;- At least the load would be fairly even over the cluster.
<br>
<p>--- On Mon, 9/5/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] is there an equiv of iprove for bcast?
<br>
To: randolph_pullen_at_[hidden]
<br>
Cc: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Monday, 9 May, 2011, 11:27 PM
<br>
<p>On May 3, 2011, at 8:20 PM, Randolph Pullen wrote:
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
<p>Yes and no.&#160; If each worker starts N non-blocking broadcasts just to be able to test for completion of any of them, you might end up consuming a bunch of resources for them (I'm *anticipating* that pending non-blocking collective requests maybe more heavyweight than pending non-blocking point-to-point requests).
<br>
<p>But then again, if N is small, it might not matter.
<br>
<p><span class="quotelev1">&gt; Can anyone suggest another way?&#160; I don't like the serial clearinghouse approach.
</span><br>
<p>If you only have a few workers and/or the broadcast message is small and/or the broadcasts aren't frequent, then MPI's built-in broadcast algorithms might not offer much more optimization than doing your own with point-to-point mechanisms.&#160; I don't usually recommend this, but it may be possible for your case.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16506.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16504.php">Tom Rosmond: "[OMPI users] Trouble with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="16489.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Reply:</strong> <a href="16511.php">Jeff Squyres: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
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
