<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 20 01:28:41 2005" -->
<!-- isoreceived="20050720062841" -->
<!-- sent="Tue, 19 Jul 2005 23:26:46 -0700" -->
<!-- isosent="20050720062646" -->
<!-- name="Matt Leininger" -->
<!-- email="mlleinin_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="1121840806.6157.618.camel_at_localhost" -->
<!-- inreplyto="eabe48825536491c7f627ddec5f223a4_at_open-mpi.org" -->
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
<strong>From:</strong> Matt Leininger (<em>mlleinin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-20 01:26:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>In reply to:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2005-07-18 at 11:44 -0400, Jeff Squyres wrote:
<br>
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
&nbsp;&nbsp;Please keep in mind we need this to work for both MPI+OpenMP and MPI
<br>
+pthread hybrid apps.
<br>
<p>&nbsp;&nbsp;- Matt
<br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Edgar Gabriel: "Re:  collectives discussion @LANL"</a>
<li><strong>In reply to:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0037.php">Jeff Squyres: "Re:  processor affinity"</a>
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
