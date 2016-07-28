<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 11:48:38 2005" -->
<!-- isoreceived="20050718164838" -->
<!-- sent="Mon, 18 Jul 2005 11:48:30 -0500" -->
<!-- isosent="20050718164830" -->
<!-- name="bmchapman_at_[hidden]" -->
<!-- email="bmchapman_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="410-220057118164830782_at_earthlink.net" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto=" processor affinity" -->
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
<strong>From:</strong> <a href="mailto:bmchapman_at_[hidden]?Subject=Re:%20%20processor%20affinity"><em>bmchapman_at_[hidden]</em></a><br>
<strong>Date:</strong> 2005-07-18 11:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>Previous message:</strong> <a href="0025.php">Tim S. Woodall: "Re:  collectives discussion @LANL"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks to Edgar for copying me on this: it sounds like I asked at the right
<br>
time. There were some OpenMP-internal discussions on this a couple of years
<br>
ago, and a straw proposal, but at that time there was no obvious interest
<br>
on the MPI side. So we'd have to go back and look at the ideas that came up
<br>
at the time.
<br>
Barbara 
<br>
<p><span class="quotelev1">&gt; [Original Message]
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Barbara Chapman &lt;chapman_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: 7/18/2005 10:44:15 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI devel] processor affinity
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Excellent.  Seems like several people have thought of this at the same 
</span><br>
<span class="quotelev1">&gt; time (I was pinged about this by the IB vendors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that others on the team have more experience in this area than I 
</span><br>
<span class="quotelev1">&gt; do, so I personally welcome all information.  I've read a few papers on 
</span><br>
<span class="quotelev1">&gt; the topic (general/simplified consensus: memory and process affinity is 
</span><br>
<span class="quotelev1">&gt; good), but would appreciate any pointers to more material.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After the theory, however, we need to decide on an implementation 
</span><br>
<span class="quotelev1">&gt; strategy.  As Rich mentioned, we can do this all via MCA parameters, or 
</span><br>
<span class="quotelev1">&gt; perhaps via MPI_Info or MPI attributes.  Although I'm not sure how much 
</span><br>
<span class="quotelev1">&gt; of this can be set ahead of time and what needs to be done on a 
</span><br>
<span class="quotelev1">&gt; per-thread basis, I'm assuming that each thread will need to make some 
</span><br>
<span class="quotelev1">&gt; kind of function call (if MPI is going to handle it, then it will need 
</span><br>
<span class="quotelev1">&gt; to be an MPI function call that triggers some magic under the covers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice here from the Open MP community would also be appreciated...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2005, at 11:08 AM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have currently Barbara Chapman from the University of Houston as a
</span><br>
<span class="quotelev2">&gt; &gt; guest scientist here at Stuttgart. Most of you might now, that Barbara
</span><br>
<span class="quotelev2">&gt; &gt; is working on compiler design and OpenMP issues. This afternoon she
</span><br>
<span class="quotelev2">&gt; &gt; dropped in my office and asked me, whether the Open MPI group has
</span><br>
<span class="quotelev2">&gt; &gt; thought/discussed processor affinity issues up to now (which we just 
</span><br>
<span class="quotelev2">&gt; &gt; did
</span><br>
<span class="quotelev2">&gt; &gt; :-) ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I just wanted to point out, that various people from the OpenMP
</span><br>
<span class="quotelev2">&gt; &gt; community have been working/are still working on this issue, and that 
</span><br>
<span class="quotelev2">&gt; &gt; it
</span><br>
<span class="quotelev2">&gt; &gt; might be interesting to exchange information and maybe coordinate the
</span><br>
<span class="quotelev2">&gt; &gt; approaches. I cc'ed Barbara therefore also on this email...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>Previous message:</strong> <a href="0025.php">Tim S. Woodall: "Re:  collectives discussion @LANL"</a>
<li><strong>Maybe in reply to:</strong> <a href="0001.php">Rich L. Graham: "Re:  processor affinity"</a>
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
