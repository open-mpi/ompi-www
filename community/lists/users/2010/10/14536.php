<?
$subject_val = "Re: [OMPI users] Question about MPI_Barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 12:53:41 2010" -->
<!-- isoreceived="20101021165341" -->
<!-- sent="Thu, 21 Oct 2010 11:53:35 -0500" -->
<!-- isosent="20101021165335" -->
<!-- name="Storm Zhang" -->
<!-- email="stormzhg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about MPI_Barrier" -->
<!-- id="AANLkTi=TwDC_kUURAkqq2TPhNaNtaetWX2aUiZb+8CK7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="16411702-D1C7-452A-98ED-20D138C0ABC7_at_cisco.com" -->
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
<strong>Date:</strong> 2010-10-21 12:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot.
<br>
<p>On Thu, Oct 21, 2010 at 9:21 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ah.  The original code snipit you sent was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt; if if(rank == master) t1 = clock();
</span><br>
<span class="quotelev1">&gt; &quot;code A&quot;;
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Barrier();
</span><br>
<span class="quotelev1">&gt; if if(rank == master) t2 = clock();
</span><br>
<span class="quotelev1">&gt; &quot;code B&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember that the time that individual processes exit barrier is not
</span><br>
<span class="quotelev1">&gt; guaranteed to be uniform (indeed, it most likely *won't* be the same).  MPI
</span><br>
<span class="quotelev1">&gt; only guarantees that a process will not exit until after all processes have
</span><br>
<span class="quotelev1">&gt; entered.  So taking t2 after the barrier might be a bit misleading, and may
</span><br>
<span class="quotelev1">&gt; cause unexpected skew.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, it makes sense but I have no idea how big the time difference for
<br>
running barrier function. I don't expect it big either since all our compute
<br>
nodes have same configuration.
<br>
<p><span class="quotelev1">&gt; Code B *probably* has no effect on time spent between t1 and t2.  But
</span><br>
<span class="quotelev1">&gt; extraneous effects might cause it to do so -- e.g., are you running in an
</span><br>
<span class="quotelev1">&gt; oversubscribed scenario?  And so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
No. We have 1024 nodes available and I'm using 500.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 21, 2010, at 9:24 AM, Storm Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for your reply. By commenting code B, I mean if I remove the
</span><br>
<span class="quotelev1">&gt; code B part, then the time spent on code A seems to run faster. I do have a
</span><br>
<span class="quotelev1">&gt; lot of communications in code B too. It involves 500 procs. I had thought
</span><br>
<span class="quotelev1">&gt; code B should have no effect on the time spent on code A if I use
</span><br>
<span class="quotelev1">&gt; MPI_Barrier.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Linbao
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Oct 21, 2010 at 5:17 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 20, 2010, at 5:51 PM, Storm Zhang wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to measure t2-t1 to see the time spent on the code A between
</span><br>
<span class="quotelev1">&gt; these two MPI_Barriers. I notice that if I comment code B, the time seems
</span><br>
<span class="quotelev1">&gt; much less the original time (almost half). How does it happen? What is a
</span><br>
<span class="quotelev1">&gt; possible reason for it? I have no idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what you're asking here -- do you mean that if you put some
</span><br>
<span class="quotelev1">&gt; comments in code B, it takes much less time than if you don't put comments?
</span><br>
<span class="quotelev1">&gt;  If so, then the comments have nothing to do with the execution run-time --
</span><br>
<span class="quotelev1">&gt; something else is going on that is causing the delay.  Some questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - how long does it take to execute code B -- microseconds, or seconds, or
</span><br>
<span class="quotelev1">&gt; ...?
</span><br>
<span class="quotelev2">&gt; &gt; - how many processes are involved?
</span><br>
<span class="quotelev2">&gt; &gt; - what are you doing in code B; is it communication intensive and/or do
</span><br>
<span class="quotelev1">&gt; you synchronize with other processes?
</span><br>
<span class="quotelev2">&gt; &gt; - are you doing your timings on otherwise-empty machines?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14537.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>Previous message:</strong> <a href="14535.php">Eugene Loh: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14531.php">Jeff Squyres: "Re: [OMPI users] Question about MPI_Barrier"</a>
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
