<?
$subject_val = "Re: [OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:29:19 2010" -->
<!-- isoreceived="20100707142919" -->
<!-- sent="Wed, 7 Jul 2010 10:29:31 -0400" -->
<!-- isosent="20100707142931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="21A32A45-0039-4847-A456-ADA388B6E110_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C348D36.70905_at_ec-lyon.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] perhaps an openmpi bug, how best to identify?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 10:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2010, at 10:20 AM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; The (7 process) code runs correctly on my workstation using mpich2 (latest
</span><br>
<span class="quotelev1">&gt; stable version) &amp; ifort 11.1, using intel-mpi &amp; ifort 11.1, but 
</span><br>
<span class="quotelev1">&gt; randomly hangs the
</span><br>
<span class="quotelev1">&gt; computer (vanilla ubuntu 9.10 kernel v. 2.6.31 ) to the point where only
</span><br>
<span class="quotelev1">&gt; a magic
</span><br>
<span class="quotelev1">&gt; sysrq combination can &quot;save&quot; me (i.e. reboot), when using
</span><br>
<span class="quotelev1">&gt; - openmpi 1.4.2 compiled from source with gcc, ifort for mpif90
</span><br>
<span class="quotelev1">&gt; - clustertools v. 8.2.1c distribution from sun/oracle, also based on
</span><br>
<span class="quotelev1">&gt; openmpi 1.4.2, using sun f90
</span><br>
<span class="quotelev1">&gt;   for mpif90
</span><br>
<p>Yowza.  Open MPI is user space code, so it should never be able to hang the entire computer.  Open MPI and MPICH2 do implement things in very different ways, so it's quite possible that we trip entirely different code paths in the same linux kernel.
<br>
<p>Never say &quot;never&quot; -- it could well be an Open MPI bug.  But it smells like a kernel bug...
<br>
<p><span class="quotelev1">&gt; I am prepared to do some testing if that can help, but don't know the
</span><br>
<span class="quotelev1">&gt; best way to identify what's going on.
</span><br>
<span class="quotelev1">&gt; I have found no useful information in the syslog files.
</span><br>
<p>Is the machine totally hung?  Or is it just running really, really slowly?  Try leaving some kind of slowly-monitoring process running in the background and see if it keeps running (perhaps even more slowly than before) when the machine hangs.  E.g., something like a shell script that loops over sleeping for a second and then appending the output of &quot;date&quot; to a file.  Or something like that.
<br>
<p>My point: see if Open MPI went into some hyper-aggressive mode where it's (literally) stealing every available cycle and making the machine look hung.  You might even want to try running the OMPI procs at a low priority to see if it can help alleviate the &quot;steal all cycles&quot; mode (if that is, indeed, what is happening).
<br>
<p>If the machine is truly hung, then something else might be going on.  Do any kernel logs report anything?  Can you crank up your syslog to report *all* events, for example?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13501.php">Gabriele Fatigati: "Re: [OMPI users] Dynamic algorithms problem"</a>
<li><strong>Previous message:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13499.php">Olivier Marsden: "[OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
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
