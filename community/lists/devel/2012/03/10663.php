<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 09:37:12 2012" -->
<!-- isoreceived="20120302143712" -->
<!-- sent="Fri, 2 Mar 2012 15:37:03 +0100" -->
<!-- isosent="20120302143703" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="201203021537.04156.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0E66311A-BFE2-4046-9F02-27AA2B883A5B_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-02 09:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 02 March 2012 14:58:45 Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you see my off-list mail to you yesterday about building with an
</span><br>
<span class="quotelev1">&gt; external copy of hwloc 1.4 to see if that helps?
</span><br>
Yes, I did - I answered as well. Our mail server seems to be something busy 
<br>
today...
<br>
<p>Just for the record: Using hwloc-1.4 makes no difference.
<br>
<p>Matthias
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt; To exclude a possible bug within the LSF component, I rebuilt Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; without support for LSF (--without-lsf).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an LSF job
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it's necessary to request at least the number of tasks/cores as used
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for the subsequent mpirun command. That was not the case - I forgot the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bsub's '-n' option to specify the number of task, so only *one*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; task/core was requested.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; misbehavior could not happen with it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the detection
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result as I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; get with Open MPI v1.5.x using mpi_yield_when_idle=0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2) regarding
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to the automatic performance mode selection.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Previous message:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>Reply:</strong> <a href="10664.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
