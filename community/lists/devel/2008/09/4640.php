<?
$subject_val = "Re: [OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 12:36:56 2008" -->
<!-- isoreceived="20080909163656" -->
<!-- sent="Tue, 9 Sep 2008 12:36:49 -0400" -->
<!-- isosent="20080909163649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI ABI on Linux" -->
<!-- id="13BE0FC6-35E9-452D-9312-A4A7790AF958_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080909161455.GF23322_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI ABI on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 12:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2008, at 12:14 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I did promise the ABI working group that I would ask the OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; community
</span><br>
<span class="quotelev2">&gt;&gt; to see if anyone wanted to work with Intel on the proof of concept.
</span><br>
<span class="quotelev2">&gt;&gt; Let's put a finite end date on the CFP so that I can report back to  
</span><br>
<span class="quotelev2">&gt;&gt; them:
</span><br>
<span class="quotelev2">&gt;&gt; COB this Thursday, Oct 11, 2008.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sure you must mean September not October there.
</span><br>
<p>You are absolutely correct -- blah!  I meant this week's Thursday, as  
<br>
in: 2 days from now.
<br>
<p><span class="quotelev1">&gt; Are things like timeouts, latencies, and small-message sizes intended
</span><br>
<span class="quotelev1">&gt; as part of the ABI as well?
</span><br>
<p>No.  The main intent is to be able to compile your MPI app with one  
<br>
MPI and then (on Linux systems, at least) be able to change your  
<br>
LD_LIBRARY_PATH (or similar) and use a different MPI's libmpi.so.
<br>
<p><span class="quotelev1">&gt; IOW, is it expected to be possible to run
</span><br>
<span class="quotelev1">&gt; one process compiled with OpenMPI and one process with MPICH, and have
</span><br>
<span class="quotelev1">&gt; them communicate with each other?
</span><br>
<p><p>Nope; still looking for homogeneous MPI jobs (i.e., all one MPI  
<br>
implementation).
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
<li><strong>Next message:</strong> <a href="4641.php">Lenny Verkhovsky: "[OMPI devel] ticket #1469"</a>
<li><strong>Previous message:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
