<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 15:35:19 2010" -->
<!-- isoreceived="20100909193519" -->
<!-- sent="Thu, 9 Sep 2010 20:34:38 +0100" -->
<!-- isosent="20100909193438" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="20393AAE-9FF0-475D-B131-D357DFFA40CF_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C89049C.5050904_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-09-09 15:34:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9 Sep 2010, at 17:00, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hello All
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gabrielle's question, Ashley's recipe, and Dick Treutmann's cautionary words, may be part of a larger context of load balance, or not?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would Ashley's recipe of sporadic barriers be a silver bullet to
</span><br>
<span class="quotelev1">&gt; improve load imbalance problems, regardless of which collectives or
</span><br>
<span class="quotelev1">&gt; even point-to-point calls are in use?
</span><br>
<p>No, it only holds where there is no data dependency between some of the ranks, in particular if there are any non-rooted collectives in an iteration of your code then it cannot make any difference at all, likewise if you have a reduce followed by a barrier using the same root for example then you already have global synchronisation each iteration and it won't help.  My feeling is that it applies to a significant minority of problems, certainly the phrase &quot;adding barriers can make codes faster&quot; should be textbook stuff if it isn't already.
<br>
<p><span class="quotelev1">&gt; Would sporadic barriers in the flux coupler &quot;shake up&quot; these delays?
</span><br>
<p>I don't fully understand your description but it sounds like it might set the program back to a clean slate which would give you per-iteraion delays only rather than cumulative or worse delays.
<br>
<p><span class="quotelev1">&gt; Ashley:  How did you get to the magic number of 25 iterations for the
</span><br>
<span class="quotelev1">&gt; sporadic barriers?
</span><br>
<p>Experience and finger in the air.  The major factors in picking this number is the likelihood of a positives feedback cycle of delays happening, the delays these delays add and the cost of a barrier itself.  Having too low a value will slightly reduce performance, having too high a value can drastically reduce performance.
<br>
<p>As a further item (because I like them) the asynchronous barrier is even better again if used properly, in the good case it doesn't cause any process to block ever so the cost is only that of the CPU cycles the code takes itself, in the bad case where it has to delay a rank then this tends to have a positive impact on performance.
<br>
<p><span class="quotelev1">&gt; Would it be application/communicator pattern dependent?
</span><br>
<p>Absolutely.
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
<li><strong>Next message:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14203.php">Eugene Loh: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14199.php">Gus Correa: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14205.php">jody: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14207.php">Richard Treumann: "Re: [OMPI users] MPI_Reduce performance"</a>
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
