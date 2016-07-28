<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 16 10:28:44 2007" -->
<!-- isoreceived="20070516142844" -->
<!-- sent="Wed, 16 May 2007 07:28:17 -0700" -->
<!-- isosent="20070516142817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux" -->
<!-- id="70027179-BD35-4DAA-B387-0771CF183296_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070516140853.GA18602_at_creus.mpi.zmaw.de" -->
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
<strong>Date:</strong> 2007-05-16 10:28:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3284.php">Tim Mattox: "[OMPI users] Open MPI v1.2.2"</a>
<li><strong>Previous message:</strong> <a href="3282.php">Luis Kornblueh: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>In reply to:</strong> <a href="3282.php">Luis Kornblueh: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2007, at 7:08 AM, Luis Kornblueh wrote:
<br>
<p><span class="quotelev1">&gt; well we currently try to change over to ofed.
</span><br>
<p>I think you'll be pleased with the results.  FWIW, you might want to  
<br>
try converting just a few nodes in your cluster and play with them to  
<br>
get some experience with the OFED stack.  There's new commands to  
<br>
learn, etc.  Do not try to run OMPI IB jobs that span both the mvapi  
<br>
and openib hosts, but note that one subnet manager can manage both  
<br>
MVAPI-based and OFED-based hosts.  So they can co-exist in your  
<br>
cluster while you're evaluating/learning/etc.
<br>
<p><span class="quotelev1">&gt; The same time we try to change
</span><br>
<span class="quotelev1">&gt; to openmpi-1.2.1 from openpi-1.2b3, unfortunately we get a SEGV in  
</span><br>
<span class="quotelev1">&gt; mpiexec ;-)
</span><br>
<p>Sorry for not replying earlier to your other post; the past 2 weeks  
<br>
have been a &quot;perfect storm&quot; for many of us on the OMPI team.  Euro  
<br>
PVM/MPI conference papers were due this past Monday, for example  
<br>
(among a bunch of other deadlines).  I will look into your prior mail  
<br>
today to see if I can figure out what's going on.
<br>
<p>FWIW, migrating to OFED should be an orthogonal issue to OMPI  
<br>
v1.2b3 / v1.2.1.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3284.php">Tim Mattox: "[OMPI users] Open MPI v1.2.2"</a>
<li><strong>Previous message:</strong> <a href="3282.php">Luis Kornblueh: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>In reply to:</strong> <a href="3282.php">Luis Kornblueh: "Re: [OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
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
