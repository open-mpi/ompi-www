<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 10:50:05 2008" -->
<!-- isoreceived="20080205155005" -->
<!-- sent="Wed, 06 Feb 2008 00:49:00 +0900" -->
<!-- isosent="20080205154900" -->
<!-- name="8mj6tc902_at_[hidden]" -->
<!-- email="8mj6tc902_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="23363-77093_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="Pine.LNX.4.64.0802041406570.2058_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> <a href="mailto:8mj6tc902_at_[hidden]?Subject=Re:%20[OMPI%20users]%20openmpi%20credits%20for%20eager%20messages"><em>8mj6tc902_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-02-05 10:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4984.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4982.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow this sparked a much more heated discussion than I was expecting. I
<br>
was just commenting that the behaviour the original author (Federico
<br>
Sacerdoti) mentioned would explain something I observed in one of my
<br>
early trials of OpenMPI. But anyway, because it seems that quite a few
<br>
people were interested, I've attached a simplified version of the test I
<br>
was describing (with all the timing checks and some of the crazier
<br>
output removed).
<br>
<p>Now that I go back and retest this it turns out that it wasn't actually
<br>
a segfault that was killing it, but running out of memory as you and
<br>
others have predicted.
<br>
<p>Brian W. Barrett brbarret-at-open-mpi.org |openmpi-users/Allow| wrote:
<br>
<span class="quotelev1">&gt; Now that this discussion has gone way off into the MPI standard woods :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Was your test using Open MPI 1.2.4 or 1.2.5 (the one with the segfault)? 
</span><br>
<span class="quotelev1">&gt; There was definitely a bug in 1.2.4 that could cause exactly the behavior 
</span><br>
<span class="quotelev1">&gt; you are describing when using the shared memory BTL, due to a silly 
</span><br>
<span class="quotelev1">&gt; delayed initialization bug/optimization.
</span><br>
<p>I'm still using Open MPI 1.2.4 and actually the SM BTL seems to be the
<br>
hardest to break (I guess I'm dodging the bullet on that delayed
<br>
initialization bug you're referring to).
<br>
<p><span class="quotelev1">&gt; If you are using the OB1 PML (the default), you will still have the 
</span><br>
<span class="quotelev1">&gt; possibility of running the receiver out of memory if the unexpected queue 
</span><br>
<span class="quotelev1">&gt; grows without bounds.  I'll withold my opinion on what the standard says 
</span><br>
<span class="quotelev1">&gt; so that we can perhaps actually help you solve your problem and stay out 
</span><br>
<span class="quotelev1">&gt; of the weeds :).  Note however, that in general unexpected messages are a 
</span><br>
<span class="quotelev1">&gt; bad idea and thousands of them from one peer to another should be avoided 
</span><br>
<span class="quotelev1">&gt; at all costs -- this is just good MPI programming practice.
</span><br>
<p>Actually I was expecting to break something with this test. I just
<br>
wanted to find out where it broke. Lesson learned, I wrote my more
<br>
serious programs doing exactly that (no unexpected messages). I was just
<br>
surprised that the default Open MPI settings allowed me to flood the
<br>
system so easily whereas MPICH/MX still finished not matter what I threw
<br>
at it (albeit with terrible performance (in the bad cases)).
<br>
<p><span class="quotelev1">&gt; Now, if you are using MX, you can replicate MPICH/MX's behavior (including 
</span><br>
<span class="quotelev1">&gt; the very slow part) by using the CM PML (--mca pml cm on the mpirun 
</span><br>
<span class="quotelev1">&gt; command line), which will use the MX library message matching and 
</span><br>
<span class="quotelev1">&gt; unexpected queue and therefore behave exactly like MPICH/MX.
</span><br>
<p>That works exactly as you described, and it does indeed prevent memory
<br>
usage from going wild due to the unexpected messages.
<br>
<p>Thanks for your help! (and to the others for the educational discussion!)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, 2 Feb 2008, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That would make sense. I able to break OpenMPI by having Node A wait for
</span><br>
<span class="quotelev2">&gt;&gt; messages from Node B. Node B is in fact sleeping while Node C bombards
</span><br>
<span class="quotelev2">&gt;&gt; Node A with a few thousand messages. After a while Node B wakes up and
</span><br>
<span class="quotelev2">&gt;&gt; sends Node A the message it's been waiting on, but Node A has long since
</span><br>
<span class="quotelev2">&gt;&gt; been buried and seg faults. If I decrease the number of messages C is
</span><br>
<span class="quotelev2">&gt;&gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I think the
</span><br>
<span class="quotelev2">&gt;&gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I could
</span><br>
<span class="quotelev2">&gt;&gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying the same test on MPICH/MX went very very slow (I don't think they
</span><br>
<span class="quotelev2">&gt;&gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev2">&gt;&gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message to node B, it must have a credit to do so. The credit assures A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been told by a Voltaire tech that this is not so, the credits are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used by the infiniband transport layer to reliably send a message, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Federico
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]

</pre>
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4983/bad-example.cc">bad-example.cc</a>
</ul>
<!-- attachment="bad-example.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4984.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4982.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI piggyback mechanism"</a>
<li><strong>In reply to:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
