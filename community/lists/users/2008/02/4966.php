<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 15:16:50 2008" -->
<!-- isoreceived="20080204201650" -->
<!-- sent="Mon, 4 Feb 2008 14:16:30 -0600 (CST)" -->
<!-- isosent="20080204201630" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="Pine.LNX.4.64.0802041406570.2058_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="21250-64639_at_sneakemail.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 15:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now that this discussion has gone way off into the MPI standard woods :).
<br>
<p>Was your test using Open MPI 1.2.4 or 1.2.5 (the one with the segfault)? 
<br>
There was definitely a bug in 1.2.4 that could cause exactly the behavior 
<br>
you are describing when using the shared memory BTL, due to a silly 
<br>
delayed initialization bug/optimization.
<br>
<p>If you are using the OB1 PML (the default), you will still have the 
<br>
possibility of running the receiver out of memory if the unexpected queue 
<br>
grows without bounds.  I'll withold my opinion on what the standard says 
<br>
so that we can perhaps actually help you solve your problem and stay out 
<br>
of the weeds :).  Note however, that in general unexpected messages are a 
<br>
bad idea and thousands of them from one peer to another should be avoided 
<br>
at all costs -- this is just good MPI programming practice.
<br>
<p>Now, if you are using MX, you can replicate MPICH/MX's behavior (including 
<br>
the very slow part) by using the CM PML (--mca pml cm on the mpirun 
<br>
command line), which will use the MX library message matching and 
<br>
unexpected queue and therefore behave exactly like MPICH/MX.
<br>
<p>Brian
<br>
<p><p>On Sat, 2 Feb 2008, 8mj6tc902_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; That would make sense. I able to break OpenMPI by having Node A wait for
</span><br>
<span class="quotelev1">&gt; messages from Node B. Node B is in fact sleeping while Node C bombards
</span><br>
<span class="quotelev1">&gt; Node A with a few thousand messages. After a while Node B wakes up and
</span><br>
<span class="quotelev1">&gt; sends Node A the message it's been waiting on, but Node A has long since
</span><br>
<span class="quotelev1">&gt; been buried and seg faults. If I decrease the number of messages C is
</span><br>
<span class="quotelev1">&gt; sending, it works properly. This was on OpenMPI 1.2.4 (using I think the
</span><br>
<span class="quotelev1">&gt; SM BTL (might have been MX or TCP, but certainly not infiniband. I could
</span><br>
<span class="quotelev1">&gt; dig up the test and try again if anyone is seriously curious).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Trying the same test on MPICH/MX went very very slow (I don't think they
</span><br>
<span class="quotelev1">&gt; have any clever buffer management) but it didn't crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sacerdoti, Federico Federico.Sacerdoti-at-deshaw.com
</span><br>
<span class="quotelev1">&gt; |openmpi-users/Allow| wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am readying an openmpi 1.2.5 software stack for use with a
</span><br>
<span class="quotelev2">&gt;&gt; many-thousand core cluster. I have a question about sending small
</span><br>
<span class="quotelev2">&gt;&gt; messages that I hope can be answered on this list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was under the impression that if node A wants to send a small MPI
</span><br>
<span class="quotelev2">&gt;&gt; message to node B, it must have a credit to do so. The credit assures A
</span><br>
<span class="quotelev2">&gt;&gt; that B has enough buffer space to accept the message. Credits are
</span><br>
<span class="quotelev2">&gt;&gt; required by the mpi layer regardless of the BTL transport layer used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been told by a Voltaire tech that this is not so, the credits are
</span><br>
<span class="quotelev2">&gt;&gt; used by the infiniband transport layer to reliably send a message, and
</span><br>
<span class="quotelev2">&gt;&gt; is not an openmpi feature.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4949.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4983.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
