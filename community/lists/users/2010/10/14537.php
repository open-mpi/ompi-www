<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 12:57:07 2010" -->
<!-- isoreceived="20101021165707" -->
<!-- sent="Thu, 21 Oct 2010 11:57:01 -0500" -->
<!-- isosent="20101021165701" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTika39DisSnkDd=nKLHtcAFeaiTHcX2Y5PMGDzKV_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CC0550B.6050409_at_oracle.com" -->
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
<strong>Date:</strong> 2010-10-21 12:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hi, Eugene,
<br>
You said:
<br>
&quot; The bottom line here is that from a causal point of view it would seem
<br>
that B should not impact the timings.  Presumably, some other variable is
<br>
actually responsible here.&quot;
<br>
Could you explain it in more details for the second sentence. Thanks a lot.
<br>
<p>Linbao
<br>
<p>On Thu, Oct 21, 2010 at 9:58 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ah.  The original code snipit you sent was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev2">&gt;&gt; if(rank == master) t1 = clock();
</span><br>
<span class="quotelev2">&gt;&gt; &quot;code A&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev2">&gt;&gt; if(rank == master) t2 = clock();
</span><br>
<span class="quotelev2">&gt;&gt; &quot;code B&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Remember that the time that individual processes exit barrier is not
</span><br>
<span class="quotelev2">&gt;&gt; guaranteed to be uniform (indeed, it most likely *won't* be the same).  MPI
</span><br>
<span class="quotelev2">&gt;&gt; only guarantees that a process will not exit until after all processes have
</span><br>
<span class="quotelev2">&gt;&gt; entered.  So taking t2 after the barrier might be a bit misleading, and may
</span><br>
<span class="quotelev2">&gt;&gt; cause unexpected skew.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; The barrier exit times are not guaranteed to be uniform, but in practice
</span><br>
<span class="quotelev1">&gt; this style of timing is often the best (or only practical) tool one has for
</span><br>
<span class="quotelev1">&gt; measuring the collective performance of a group of processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Code B *probably* has no effect on time spent between t1 and t2.  But
</span><br>
<span class="quotelev2">&gt;&gt; extraneous effects might cause it to do so -- e.g., are you running in an
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribed scenario?  And so on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Right.  The bottom line here is that from a causal point of view it would
</span><br>
<span class="quotelev1">&gt; seem that B should not impact the timings.  Presumably, some other variable
</span><br>
<span class="quotelev1">&gt; is actually responsible here.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14536.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="14538.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
