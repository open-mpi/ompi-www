<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 15:11:11 2009" -->
<!-- isoreceived="20090612191111" -->
<!-- sent="Fri, 12 Jun 2009 12:11:03 -0700" -->
<!-- isosent="20090612191103" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="4A32A847.1030108_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0906121655310.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-12 15:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I managed to have a deadlock after a whole night, but not the same you 
</span><br>
<span class="quotelev1">&gt; have : after a quick analysis, process 0 seems to be blocked in the 
</span><br>
<span class="quotelev1">&gt; very first send through shared memory. Still maybe a bug, but not the 
</span><br>
<span class="quotelev1">&gt; same as yours IMO.
</span><br>
<p>Yes, that's the one Terry and I have tried to hunt down.  Kind of 
<br>
elusive.  Apparently, there is a race condition in sm start-up.  It 
<br>
*appears* as though a process (the lowest rank on a node?) computes 
<br>
offsets into shared memory using bad values and ends up with a FIFO 
<br>
pointer to the wrong spot.  Up through 1.3.1, this meant that OMPI would 
<br>
fail in add_procs()... Jeff and Terry have seen a couple of these.  With 
<br>
changes to sm in 1.3.2, the failure expresses itself differently... not 
<br>
until the first send (namely, first use of a remote FIFO).  At least 
<br>
that's my understanding.  George added some sync to the code to make it 
<br>
bulletproof.  But doesn't seem to have fixed the problem.  Sigh.
<br>
<p>Anyhow, I think you ran into a different but known yet not understood 
<br>
problem.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6229.php">Ralph Castain: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>Previous message:</strong> <a href="6227.php">Leo P.: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make &quot;CFLAGS=-pg -g&quot;)"</a>
<li><strong>In reply to:</strong> <a href="6226.php">Sylvain Jeaugey: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6214.php">Bogdan Costescu: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
