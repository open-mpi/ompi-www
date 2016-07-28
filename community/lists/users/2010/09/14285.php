<?
$subject_val = "Re: [OMPI users] BTL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 21:10:03 2010" -->
<!-- isoreceived="20100923011003" -->
<!-- sent="Wed, 22 Sep 2010 21:09:57 -0400" -->
<!-- isosent="20100923010957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BTL layer" -->
<!-- id="59780461-BC79-4328-BBF5-97BDD86CE3F0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinTWA-qcGGc1JrLqnHyZtFXEhwL4k6nkJcNnAvT_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BTL layer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 21:09:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>In reply to:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 1:53 PM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and.. what about RDMA? It works only with point-to-point or also with collectives?
</span><br>
<p>When collectives use the point-to-point sends (e.g., they effectively invoke MPI_SEND as part of MPI_BCAST, for example), that will do all the same things that MPI_SEND does: eager sends for short messages, striping across multiple devices, using RDMA when appropriate, etc.
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
<li><strong>Next message:</strong> <a href="14286.php">Rafael Arco Arredondo: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<li><strong>In reply to:</strong> <a href="14284.php">Gabriele Fatigati: "Re: [OMPI users] BTL layer"</a>
<!-- nextthread="start" -->
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
