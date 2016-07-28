<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 13:51:23 2010" -->
<!-- isoreceived="20100908175123" -->
<!-- sent="Wed, 8 Sep 2010 18:50:44 +0100" -->
<!-- isosent="20100908175044" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="22690374-5437-4B5B-B966-1A54B522BA9B_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTim=N1Ho_2CRd+2ACBELhuqzgnanEPfpZAW1VZXu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 13:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 Sep 2010, at 10:21, Gabriele Fatigati wrote:
<br>
<span class="quotelev1">&gt; So, im my opinion, it is better put MPI_Barrier before any MPI_Reduce to mitigate &quot;asynchronous&quot; behaviour of MPI_Reduce in OpenMPI. I suspect the same for others collective communications. Someone can explaine me why MPI_reduce has this strange behaviour?
</span><br>
<p>There are many cases where where adding an explicit barrier before a call to reduce would be superfluous so the standard rightly says that it isn't needed and need not be performed.  As you've seen though there are also cases where it can help.  I'd be interested to know the effect if you only added a barrier before MPI_Reduce occasionally, perhaps every one or two hundred iterations, this can also have a beneficial effect as a barrier every iteration adds significant overhead.
<br>
<p>This is a textbook example of where the new asynchronous barrier could help, in theory it should have the effect of being able keep processes in sync without any additional overhead in the case that they are already well synchronised.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14188.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
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
