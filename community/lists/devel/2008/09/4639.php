<?
$subject_val = "Re: [OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 12:15:01 2008" -->
<!-- isoreceived="20080909161501" -->
<!-- sent="Tue, 9 Sep 2008 18:14:55 +0200" -->
<!-- isosent="20080909161455" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI ABI on Linux" -->
<!-- id="20080909161455.GF23322_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="960A6088-C7E9-4391-9AFF-38CBC4A85BFA_at_cisco.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 12:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Jeff Squyres wrote on Tue, Sep 09, 2008 at 03:07:24PM CEST:
<br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2008, at 6:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 9, 2008, at 2:45 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An MPI ABI will have to be versioned in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same way that the API is versioned.  You can have an ABI version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for each API version though, I guess.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is correct.  My first statement wasn't entirely correct --  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;unrelated&quot; is probably not quite the correct word.  Each ABI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version will be tied to a specific API version.  What I was trying  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to say is that an implementation can be claim to be API compliant,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; even if it's not ABI compliant.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; And of course the MPI C++ ABI will require specifying a C++ ABI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (which, for Windows, means specifying the compiler and possibly its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; major release number used), but this is venturing off into details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not just Windows, right?
</span><br>
<p>No, but at least on some other systems there is no confusion about which
<br>
C++ ABI to pick.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Ditto for Fortran.
</span><br>
<p>Of course.  The devil is in the details.
<br>
<p><span class="quotelev1">&gt; I did promise the ABI working group that I would ask the OMPI community 
</span><br>
<span class="quotelev1">&gt; to see if anyone wanted to work with Intel on the proof of concept.  
</span><br>
<span class="quotelev1">&gt; Let's put a finite end date on the CFP so that I can report back to them: 
</span><br>
<span class="quotelev1">&gt; COB this Thursday, Oct 11, 2008.
</span><br>
<p>I'm sure you must mean September not October there.
<br>
<p>Are things like timeouts, latencies, and small-message sizes intended
<br>
as part of the ABI as well?  IOW, is it expected to be possible to run
<br>
one process compiled with OpenMPI and one process with MPICH, and have
<br>
them communicate with each other?
<br>
<p>Cheers,
<br>
Ralf, ready be told that I have no idea what I'm talking about ;-)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4640.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
