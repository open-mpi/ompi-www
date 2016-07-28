<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 07:50:19 2012" -->
<!-- isoreceived="20120302125019" -->
<!-- sent="Fri, 2 Mar 2012 13:50:13 +0100" -->
<!-- isosent="20120302125013" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203021350.13670.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201202281336.56462.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] poor btl sm latency<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 07:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10623.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
SORRY, it was obviously a big mistake by me. :-(
<br>
<p>Open MPI 1.5.5 was built with LSF support, so when starting an LSF job it's 
<br>
necessary to request at least the number of tasks/cores as used for the 
<br>
subsequent mpirun command. That was not the case - I forgot the bsub's '-n' 
<br>
option to specify the number of task, so only *one* task/core was requested.
<br>
<p>Open MPI 1.4.5 was built *without* LSF support, so the supposed misbehavior 
<br>
could not happen with it.
<br>
<p>In short, there is no bug in Open MPI 1.5.x regarding to the detection of 
<br>
oversubscription. Sorry for any confusion!
<br>
<p>Matthias
<br>
<p>On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
<br>
<span class="quotelev1">&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result as I get
</span><br>
<span class="quotelev1">&gt; with Open MPI v1.5.x using mpi_yield_when_idle=0.
</span><br>
<span class="quotelev1">&gt; So I think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2) regarding to
</span><br>
<span class="quotelev1">&gt; the automatic performance mode selection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev1">&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cheers,
</span><br>
<span class="quotelev2">&gt; &gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10657.php">Alex Margolin: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10623.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10659.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
