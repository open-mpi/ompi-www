<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 10:44:05 2005" -->
<!-- isoreceived="20050718154405" -->
<!-- sent="Mon, 18 Jul 2005 11:44:02 -0400" -->
<!-- isosent="20050718154402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="eabe48825536491c7f627ddec5f223a4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42DBC5D6.30700_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 10:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">Ralph Castain: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent.  Seems like several people have thought of this at the same 
<br>
time (I was pinged about this by the IB vendors).
<br>
<p>I know that others on the team have more experience in this area than I 
<br>
do, so I personally welcome all information.  I've read a few papers on 
<br>
the topic (general/simplified consensus: memory and process affinity is 
<br>
good), but would appreciate any pointers to more material.
<br>
<p>After the theory, however, we need to decide on an implementation 
<br>
strategy.  As Rich mentioned, we can do this all via MCA parameters, or 
<br>
perhaps via MPI_Info or MPI attributes.  Although I'm not sure how much 
<br>
of this can be set ahead of time and what needs to be done on a 
<br>
per-thread basis, I'm assuming that each thread will need to make some 
<br>
kind of function call (if MPI is going to handle it, then it will need 
<br>
to be an MPI function call that triggers some magic under the covers).
<br>
<p>Any advice here from the Open MP community would also be appreciated...
<br>
<p><p>On Jul 18, 2005, at 11:08 AM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; We have currently Barbara Chapman from the University of Houston as a
</span><br>
<span class="quotelev1">&gt; guest scientist here at Stuttgart. Most of you might now, that Barbara
</span><br>
<span class="quotelev1">&gt; is working on compiler design and OpenMP issues. This afternoon she
</span><br>
<span class="quotelev1">&gt; dropped in my office and asked me, whether the Open MPI group has
</span><br>
<span class="quotelev1">&gt; thought/discussed processor affinity issues up to now (which we just 
</span><br>
<span class="quotelev1">&gt; did
</span><br>
<span class="quotelev1">&gt; :-) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, I just wanted to point out, that various people from the OpenMP
</span><br>
<span class="quotelev1">&gt; community have been working/are still working on this issue, and that 
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; might be interesting to exchange information and maybe coordinate the
</span><br>
<span class="quotelev1">&gt; approaches. I cc'ed Barbara therefore also on this email...
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">Ralph Castain: "Re:  collectives discussion @LANL"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Edgar Gabriel: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
<li><strong>Reply:</strong> <a href="0036.php">Matt Leininger: "Re:  processor affinity"</a>
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
