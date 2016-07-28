<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 16:10:32 2010" -->
<!-- isoreceived="20100909201032" -->
<!-- sent="Thu, 9 Sep 2010 22:10:26 +0200" -->
<!-- isosent="20100909201026" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="AANLkTinq+tjDYFMPMXxo8A0x=-18SqvGRjmwUVpb+JR5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20393AAE-9FF0-475D-B131-D357DFFA40CF_at_pittman.co.uk" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 16:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
@Ashley:
<br>
What is the exact semantics of an asynchronous barrier,
<br>
and is it part of the MPI specs?
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Thu, Sep 9, 2010 at 9:34 PM, Ashley Pittman &lt;ashley_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9 Sep 2010, at 17:00, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gabrielle's question, Ashley's recipe, and Dick Treutmann's cautionary words, may be part of a larger context of load balance, or not?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would Ashley's recipe of sporadic barriers be a silver bullet to
</span><br>
<span class="quotelev2">&gt;&gt; improve load imbalance problems, regardless of which collectives or
</span><br>
<span class="quotelev2">&gt;&gt; even point-to-point calls are in use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it only holds where there is no data dependency between some of the ranks, in particular if there are any non-rooted collectives in an iteration of your code then it cannot make any difference at all, likewise if you have a reduce followed by a barrier using the same root for example then you already have global synchronisation each iteration and it won't help. &#160;My feeling is that it applies to a significant minority of problems, certainly the phrase &quot;adding barriers can make codes faster&quot; should be textbook stuff if it isn't already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would sporadic barriers in the flux coupler &quot;shake up&quot; these delays?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't fully understand your description but it sounds like it might set the program back to a clean slate which would give you per-iteraion delays only rather than cumulative or worse delays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ashley: &#160;How did you get to the magic number of 25 iterations for the
</span><br>
<span class="quotelev2">&gt;&gt; sporadic barriers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Experience and finger in the air. &#160;The major factors in picking this number is the likelihood of a positives feedback cycle of delays happening, the delays these delays add and the cost of a barrier itself. &#160;Having too low a value will slightly reduce performance, having too high a value can drastically reduce performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a further item (because I like them) the asynchronous barrier is even better again if used properly, in the good case it doesn't cause any process to block ever so the cost is only that of the CPU cycles the code takes itself, in the bad case where it has to delay a rank then this tends to have a positive impact on performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would it be application/communicator pattern dependent?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Absolutely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14204.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14206.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
