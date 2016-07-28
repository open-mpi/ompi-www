<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 09:10:31 2005" -->
<!-- isoreceived="20050809141031" -->
<!-- sent="Tue, 9 Aug 2005 10:10:29 -0400" -->
<!-- isosent="20050809141029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="af55523632460636b6a0c905f5995e80_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C016A13_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-09 09:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2005, at 9:48 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; Does r6774 has lot of changes that are related to 3rd generation 
</span><br>
<span class="quotelev1">&gt; point-to-point? I am trying to run some benchmark tests (ex: pallas) 
</span><br>
<span class="quotelev1">&gt; with Open MPI stack and just want to compare the performance figures 
</span><br>
<span class="quotelev1">&gt; with MVAPICH 095 and MVAPICH 092.
</span><br>
<p>Looking at the log, it looks like Tim fixed a few things to do with 
<br>
probe/iprobe, and Galen added the stuff to configure to Topspin's mvapi 
<br>
headers / libraries.  That's probably most of what would interest you 
<br>
(you can see the full log via the &quot;svn log&quot; command).
<br>
<p><span class="quotelev1">&gt; In order to use 3rd generation p2p communication, I have added the 
</span><br>
<span class="quotelev1">&gt; following line in the /openmpi/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pml=ob1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also exported (as double check) OMPI_MCA_pml=ob1.
</span><br>
<p>Note that you really only have to do one of those -- the file method is 
<br>
a good/easy way to set it an forget about it.  The environment variable 
<br>
way is also fine (and 100% equivalent to the file method), but needs to 
<br>
be set in every shell where you invoke mpirun.
<br>
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
<li><strong>Next message:</strong> <a href="0108.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0103.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0104.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
