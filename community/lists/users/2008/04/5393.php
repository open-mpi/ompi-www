<?
$subject_val = "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 09:44:38 2008" -->
<!-- isoreceived="20080414134438" -->
<!-- sent="Mon, 14 Apr 2008 07:44:29 -0600" -->
<!-- isosent="20080414134429" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale" -->
<!-- id="4E9DC5E7-4ADA-462F-9C54-B5781B2FCFA7_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1208154645.31547.0.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-14 09:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5392.php">Ralph H Castain: "[OMPI users] FW:  problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5390.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2008, at 12:30 AM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; On Sun, 2008-04-13 at 08:00 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you get the same error if you disable the memory handling in Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI?  You can configure OMPI with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --disable-memory-manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doesn't help, it still compiles ptmalloc2 and trying to turn off
</span><br>
<span class="quotelev1">&gt; ptmaloc2 during runtime doesn't help either.
</span><br>
<p>Jeff had the option slightly wrong.  It's actually:
<br>
<p>&nbsp;&nbsp;&nbsp;--without-memory-manager
<br>
<p>Because this is a link time decision, during the memory manager code  
<br>
on / off at runtime won't change anything in terms of interfering with  
<br>
a compiler's own memory management code.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5394.php">Torje Henriksen: "Re: [OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5392.php">Ralph H Castain: "[OMPI users] FW:  problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5390.php">&#197;ke Sandgren: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
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
