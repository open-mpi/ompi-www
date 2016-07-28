<?
$subject_val = "Re: [OMPI users] MPI_Barrier() consuming CPU cycles";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 19:53:40 2009" -->
<!-- isoreceived="20091205005340" -->
<!-- sent="Fri, 4 Dec 2009 17:53:16 -0700" -->
<!-- isosent="20091205005316" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier() consuming CPU cycles" -->
<!-- id="dcf611bd0912041653j593378c2r14cff37069f33fc3_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="99793218-2690-45C7-8E79-988E6502EC86_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Barrier() consuming CPU cycles<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 19:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11434.php">Zheng Li: "[OMPI users] Tons of warnings in running my first openmpi job"</a>
<li><strong>Previous message:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>In reply to:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks for the explanation. Yes, some of the earlier discussion where in
<br>
fact very useful. In general I found this list to be very helpful, my thanks
<br>
to everyone here who is helping people like me out.
<br>
<p>The suggestion to use messages and non-blocking receives with MPI_Test()
<br>
proved just what we needed for another portion of the code, the one where
<br>
the rank 0 front-end use MPI_Comm_spawn() to launch the other codes. Maybe
<br>
we can cook up something similar for the rank &gt; 0 front-ends. The same
<br>
principle should work.
<br>
<p>We just wanted to voice our experience with MPI_Barrier() on this list so
<br>
that maybe in the future someone will work on implementing MPI_Barrier()
<br>
differently.
<br>
<p>nick
<br>
<p><p><p>On Fri, Dec 4, 2009 at 17:37, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 4, 2009, at 6:54 PM, Nicolas Bock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; in our code we use a very short front-end program to drive a larger set
</span><br>
<span class="quotelev1">&gt; of codes that do our calculations. Right in the beginning of the front-end,
</span><br>
<span class="quotelev1">&gt; we have an if() statement such that only the rank 0 front-end does
</span><br>
<span class="quotelev1">&gt; something, and the other ranks go right away to an MPI_Barrier() statement,
</span><br>
<span class="quotelev1">&gt; waiting for the rank 0 front-end to finish. The rank 0 front-end then goes
</span><br>
<span class="quotelev1">&gt; ahead and does its thing by calling the other codes with MPI_Comm_spawn().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We noticed that the rank &gt; 0 copies of the front-end consume a lot of CPU
</span><br>
<span class="quotelev1">&gt; while they are waiting at the MPI_Barrier(). This is obviously not what we
</span><br>
<span class="quotelev1">&gt; had intended. From previous discussion on this list I understand that the
</span><br>
<span class="quotelev1">&gt; CPU consumption stems from the aggressive polling frequency of the
</span><br>
<span class="quotelev1">&gt; MPI_Barrier() function. While I understand that there are a lot of
</span><br>
<span class="quotelev1">&gt; situations where a high polling frequency in MPI_Barrier() is useful, the
</span><br>
<span class="quotelev1">&gt; situation we are in is not one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is our master and slave programming model such an unusual way of using
</span><br>
<span class="quotelev1">&gt; MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Define &quot;unusual&quot;.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI applications tend to be home-grown and very specific to individual
</span><br>
<span class="quotelev1">&gt; problems that they are trying to solve.  *Most* MPI applications are trying
</span><br>
<span class="quotelev1">&gt; to get the lowest latency (perhaps it's more accurate to say &quot;the most
</span><br>
<span class="quotelev1">&gt; discussed/cited MPI applications&quot;).  As such, we designed Open MPI to get
</span><br>
<span class="quotelev1">&gt; that lowest latency -- and that's by polling.  :-\  I can't speak for other
</span><br>
<span class="quotelev1">&gt; MPI implementations, but I believe that most of them will do similar things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some users don't necessarily want rock-bottom latency; they want features
</span><br>
<span class="quotelev1">&gt; like what you want (e.g., true blocking in MPI blocking functions).  At the
</span><br>
<span class="quotelev1">&gt; moment, Open MPI doesn't cater to those requirements.  We've had a lot of
</span><br>
<span class="quotelev1">&gt; discussions over the years on this specific feature and we have some pretty
</span><br>
<span class="quotelev1">&gt; good ideas how to do it.  But the priority of this hasn't really ever
</span><br>
<span class="quotelev1">&gt; percolated up high enough for someone to start actually working on it.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I wouldn't characterize your application as &quot;unusual&quot; -- *every* MPI app
</span><br>
<span class="quotelev1">&gt; is unusual.  I would say that your requirement for not consuming CPU while
</span><br>
<span class="quotelev1">&gt; in a blocking MPI function is in the minority.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There were a few suggestions posted earlier today on how to be creative and
</span><br>
<span class="quotelev1">&gt; get around these implementation artifacts -- perhaps they might be useful to
</span><br>
<span class="quotelev1">&gt; you...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11434.php">Zheng Li: "[OMPI users] Tons of warnings in running my first openmpi job"</a>
<li><strong>Previous message:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
<li><strong>In reply to:</strong> <a href="11432.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier() consuming CPU cycles"</a>
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
