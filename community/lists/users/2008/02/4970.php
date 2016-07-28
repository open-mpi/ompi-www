<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 16:23:34 2008" -->
<!-- isoreceived="20080204212334" -->
<!-- sent="Mon, 4 Feb 2008 16:23:13 -0500" -->
<!-- isosent="20080204212313" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7C49_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080204202950.GH20614_at_ratbert.sandia.gov" -->
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
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 16:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To keep this out of the weeds, I have attached a program called &quot;bug3&quot;
<br>
that illustrates this problem on openmpi 1.2.5 using the openib BTL. In
<br>
bug3 process with rank 0 uses all available memory buffering
<br>
&quot;unexpected&quot; messages from its neighbors.
<br>
<p>Bug3 is a test-case derived from a real, scalable application (desmond
<br>
for molecular dynamics) that several experienced MPI developers have
<br>
worked on. Note the MPI_Send calls of processes N&gt;0 are *blocking*; the
<br>
openmpi silently sends them in the background and overwhelms process 0
<br>
due to lack of flow control.
<br>
<p>It may not be hard to change desmond to work around openmpi's small
<br>
message semantics, but a programmer should reasonably be allowed to
<br>
think a blocking send will block if the receiver cannot handle it yet.
<br>
<p>Federico
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Brightwell, Ronald
<br>
Sent: Monday, February 04, 2008 3:30 PM
<br>
To: Patrick Geoffray
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] openmpi credits for eager messages
<br>
<p><span class="quotelev2">&gt; &gt; I'm looking at a network where the number of endpoints is large
</span><br>
enough that
<br>
<span class="quotelev2">&gt; &gt; everybody can't have a credit to start with, and the &quot;offender&quot;
</span><br>
isn't any
<br>
<span class="quotelev2">&gt; &gt; single process, but rather a combination of processes doing N-to-1
</span><br>
where N
<br>
<span class="quotelev2">&gt; &gt; is sufficiently large.  I can't just tell one process to slow down.
</span><br>
I have
<br>
<span class="quotelev2">&gt; &gt; to tell them all to slow down and do it quickly...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you have N-&gt;1 patterns, then the hardware flow-control will
</span><br>
<span class="quotelev1">&gt; throttle the senders, or drop packets if there is no hardware
</span><br>
<span class="quotelev1">&gt; flow-control. If you don't have HOL blocking but the receiver does not
</span><br>
<span class="quotelev1">&gt; consume for any reasons (busy, sleeping, dead, whatever), then you can
</span><br>
<span class="quotelev1">&gt; still drop packets on the receiver (NIC, driver, thread) at a last
</span><br>
<span class="quotelev1">&gt; resort, this is what TCP does. The key is have exponential backoff (or
</span><br>
a
<br>
<span class="quotelev1">&gt; reasonably large resend timeout) to no continue the hammering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It costs nothing in the common case (unlike the credits approach), but
</span><br>
<span class="quotelev1">&gt; it does handle corner cases without affecting too much other nodes
</span><br>
<span class="quotelev1">&gt; (unlike hardware flow-control).
</span><br>
<p>Right.  For a sufficiently large number of endpoints, flow control has
<br>
to get
<br>
pushed out of MPI and down into the network, which is why I don't
<br>
necesarily
<br>
want an MPI that does flow control at the user-level.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you know all that. You are just being mean to your users because
</span><br>
you
<br>
<span class="quotelev1">&gt; can :-) The sick part is that I think I envy you...
</span><br>
<p>You know it :)
<br>
<p>-Ron
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4970/bug3.c">bug3.c</a>
</ul>
<!-- attachment="bug3.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
