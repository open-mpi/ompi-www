<?
$subject_val = "Re: [OMPI users] probl&#232;me with MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 13:23:49 2011" -->
<!-- isoreceived="20111102172349" -->
<!-- sent="Wed, 2 Nov 2011 13:23:43 -0400" -->
<!-- isosent="20111102172343" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probl&amp;#232;me with MPI_FINALIZE" -->
<!-- id="58F27E10-CC1A-4591-A55C-61E64957D4CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjhau2raKoXVO=4GvP5oWKMeZxKeVa80-=n5T-7LsqWOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] probl&#232;me with MPI_FINALIZE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 13:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17670.php">bhimesh akula: "[OMPI users] Graph 500 execution time was increased by up to 11-fold over MPI"</a>
<li><strong>Previous message:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 2, 2011, at 10:34 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Any particular reason these calls don't nest? In some other HPC-like
</span><br>
<span class="quotelev1">&gt; paradigms (e.g. VSIPL) such calls are allowed to nest (i.e. only the
</span><br>
<span class="quotelev1">&gt; finalize() that matches the first init() will destroy allocated
</span><br>
<span class="quotelev1">&gt; resources.)
</span><br>
<p>I honestly don't remember the Forum's rationale for this; that's just the way it is.
<br>
<p>Brian Barrett and I have a proposal up for to the Forum for making it permissible to call INIT multiple times, etc.  We proposed it and it was generally well-accepted; we got some good feedback, so we need to revise the proposal and present it at the next meeting in January.  I guarantee that nothing will happen with our proposal before SC.  :-)
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
<li><strong>Next message:</strong> <a href="17670.php">bhimesh akula: "[OMPI users] Graph 500 execution time was increased by up to 11-fold over MPI"</a>
<li><strong>Previous message:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>In reply to:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
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
