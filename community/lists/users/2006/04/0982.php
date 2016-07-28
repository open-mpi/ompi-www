<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr  8 14:52:32 2006" -->
<!-- isoreceived="20060408185232" -->
<!-- sent="Sat, 8 Apr 2006 14:52:18 -0400" -->
<!-- isosent="20060408185218" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Torque error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FB045_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI and Torque error" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-08 14:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Prakash Velayutham [mailto:Prakash.Velayutham_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, April 08, 2006 2:45 PM
</span><br>
<span class="quotelev1">&gt; To: Jeff Squyres (jsquyres); users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI and Torque error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden] 04/08/06 7:10 AM &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I am also curious as to why this would not work -- I was not under the
</span><br>
<span class="quotelev1">&gt; impression that tm_init() would fail from a non 
</span><br>
<span class="quotelev1">&gt; mother-superior node...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What others say is that it will fail this way inside a Open MPI job as
</span><br>
<span class="quotelev1">&gt; Open MPI's RTE is taking the only TM connection available. But the
</span><br>
<p>Note that Open RTE does not hold a TM connection open because of the
<br>
one-TM-connection-per-MOM restriction (which was only recently
<br>
alleviated with Garrick's patch).  Open RTE's TM support opens a TM
<br>
connection, does its thing, and then closes the connection.
<br>
<p><span class="quotelev1">&gt; strange thing is that it works from Mother Superior without Garrick's
</span><br>
<span class="quotelev1">&gt; patch (actually, regardless of the patch, the behaviour is 
</span><br>
<span class="quotelev1">&gt; the same, but
</span><br>
<span class="quotelev1">&gt; I have not rigorously tested the patch in itself, so cannot comment
</span><br>
<span class="quotelev1">&gt; about that), which I think should have failed according to the above
</span><br>
<span class="quotelev1">&gt; contention.
</span><br>
<p>Based on my explanation above, the behavior you have observed makes
<br>
sense.
<br>
<p><span class="quotelev1">&gt; FWIW: It has been our experience with both Torque and the various
</span><br>
<span class="quotelev1">&gt; flavors of PBS that you can repeatedly call tm_init() and 
</span><br>
<span class="quotelev1">&gt; tm_finalize()
</span><br>
<span class="quotelev1">&gt; within a single process, so I would be surprised if that was 
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt; Indeed, I'd have to double check, but I'm pretty sure that our MPI
</span><br>
<span class="quotelev1">&gt; processes do not call tm_init() (I believe that only mpirun does).
</span><br>
<p>&nbsp;
<br>
<span class="quotelev1">&gt; But I am running my code using mpirun, so is this expected 
</span><br>
<span class="quotelev1">&gt; behaviour? I
</span><br>
<span class="quotelev1">&gt; am attaching my simple code below:
</span><br>
<p>Yes.  What I am saying is that only Open MPI's mpirun invokes tm_init()
<br>
-- the MPI processes do not invoke tm_init().  Hence, there is no
<br>
possibility of a TM connection contention from the MPI processes.
<br>
<p>Even if you launch an MPI process on the same node as mpirun, there are
<br>
synchronization points that guarantee that MPI_INIT will not complete
<br>
until the TM connections from mpirun have completed and been
<br>
tm_finalized().
<br>
<p>This is why I, too, am curious as to why your tm_init() is failing.  You
<br>
might have to dive a bit deeper in the TM library to figure it out.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0983.php">john casu: "Re: [OMPI users] MPI_Allreduce error in 1.0.1 and 1.0.2rc1"</a>
<li><strong>Previous message:</strong> <a href="0981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI and Torque error"</a>
<li><strong>Maybe in reply to:</strong> <a href="0949.php">Prakash Velayutham: "[OMPI users] Open MPI and Torque error"</a>
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
