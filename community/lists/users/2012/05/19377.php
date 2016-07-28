<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 21:13:21 2012" -->
<!-- isoreceived="20120525011321" -->
<!-- sent="Thu, 24 May 2012 21:13:16 -0400" -->
<!-- isosent="20120525011316" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="92B5EB8D-544B-4B1D-B50E-DE9B16850D1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwBeUVZL-iBNWhWBE91uGN8otT2oUs1Zabr6aE_RDyro7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 21:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2012, at 11:57 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; The standard says this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Within each group, all processes provide the same recvcounts
</span><br>
<span class="quotelev1">&gt; argument, and provide input vectors of  sum_i^n recvcounts[i] elements
</span><br>
<span class="quotelev1">&gt; stored in the send buffers, where n is the size of the group&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I read &quot; Within each group, ... where n is the size of the group&quot;
</span><br>
<span class="quotelev1">&gt; as being the LOCAL group size.
</span><br>
<p>Actually, that seems like a direct contradiction with the prior sentence: 
<br>
<p>If comm is an intercommunicator, then the result of the reduction of the data provided by processes in one group (group A) is scattered among processes in the other group (group B), and vice versa.
<br>
<p>It looks like the implementors of 2 implementations agree that recvcounts should be the size of the remote group.  Sounds like this needs to be brought up in front of the Forum...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19378.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>In reply to:</strong> <a href="19373.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19379.php">Dave Goodell: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
