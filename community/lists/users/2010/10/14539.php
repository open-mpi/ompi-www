<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 13:27:01 2010" -->
<!-- isoreceived="20101021172701" -->
<!-- sent="Thu, 21 Oct 2010 12:26:56 -0500" -->
<!-- isosent="20101021172656" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTi=dCR0MsAH1QXHmstj0H_yGEK=5i+_Bq2WPc+FJ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CC07321.3020409_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about MPI_Barrier<br>
<strong>From:</strong> Storm Zhang (<em>stormzhg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-21 13:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14540.php">christophe petit: "[OMPI users] try to understand heat equation 2D mpi version"</a>
<li><strong>Previous message:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got it. You're right, it might not related to MPI. I need to figure out
<br>
what's the possible reason for it.
<br>
Again, thanks for your help.
<br>
<p>Linbao
<br>
<p>On Thu, Oct 21, 2010 at 12:06 PM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  My main point was that, while what Jeff said about the short-comings of
</span><br>
<span class="quotelev1">&gt; calling timers after Barriers was true, I wanted to come in defense of this
</span><br>
<span class="quotelev1">&gt; timing strategy.  Otherwise, I was just agreeing with him that it seems
</span><br>
<span class="quotelev1">&gt; implausible that commenting out B should influence the timing of A, but I'm
</span><br>
<span class="quotelev1">&gt; equally clueless what that real issue is.  I have seen cases where the
</span><br>
<span class="quotelev1">&gt; presence or absence of code that isn't executed can influence timings
</span><br>
<span class="quotelev1">&gt; (perhaps because code will come out of the instruction cache differently),
</span><br>
<span class="quotelev1">&gt; but all that is speculation.  It's all a guess that what you're really
</span><br>
<span class="quotelev1">&gt; seeing isn't really MPI related at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, Eugene, You said:
</span><br>
<span class="quotelev1">&gt; &quot; The bottom line here is that from a causal point of view it would seem
</span><br>
<span class="quotelev1">&gt; that B should not impact the timings.  Presumably, some other variable is
</span><br>
<span class="quotelev1">&gt; actually responsible here.&quot;  Could you explain it in more details for the
</span><br>
<span class="quotelev1">&gt; second sentence. Thanks a lot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 21, 2010 at 9:58 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if(rank == master) t1 = clock();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;code A&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if(rank == master) t2 = clock();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;code B&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remember that the time that individual processes exit barrier is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guaranteed to be uniform (indeed, it most likely *won't* be the same).  MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only guarantees that a process will not exit until after all processes have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entered.  So taking t2 after the barrier might be a bit misleading, and may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause unexpected skew.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The barrier exit times are not guaranteed to be uniform, but in practice
</span><br>
<span class="quotelev2">&gt;&gt; this style of timing is often the best (or only practical) tool one has for
</span><br>
<span class="quotelev2">&gt;&gt; measuring the collective performance of a group of processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Code B *probably* has no effect on time spent between t1 and t2.  But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extraneous effects might cause it to do so -- e.g., are you running in an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscribed scenario?  And so on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Right.  The bottom line here is that from a causal point of view it would
</span><br>
<span class="quotelev2">&gt;&gt; seem that B should not impact the timings.  Presumably, some other variable
</span><br>
<span class="quotelev2">&gt;&gt; is actually responsible here.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14540.php">christophe petit: "[OMPI users] try to understand heat equation 2D mpi version"</a>
<li><strong>Previous message:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
