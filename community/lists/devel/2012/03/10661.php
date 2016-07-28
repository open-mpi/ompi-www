<?
$subject_val = "Re: [OMPI devel] poor btl sm latency";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 08:59:45 2012" -->
<!-- isoreceived="20120302135945" -->
<!-- sent="Fri, 2 Mar 2012 08:59:41 -0500" -->
<!-- isosent="20120302135941" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] poor btl sm latency" -->
<!-- id="9E575919-BD5F-4DE9-BBE8-36B7815FE8E1_at_cisco.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 08:59:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10663.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah!  I just saw your ticket about how --with-hwloc=/path/to/install is broken in 1.5.5.  So -- let me go look in to that...
<br>
<p><p>On Mar 2, 2012, at 8:58 AM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ok.  Good that there's no oversubscription bug, at least.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you see my off-list mail to you yesterday about building with an external copy of hwloc 1.4 to see if that helps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2012, at 8:26 AM, Matthias Jurenz wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To exclude a possible bug within the LSF component, I rebuilt Open MPI without 
</span><br>
<span class="quotelev2">&gt;&gt; support for LSF (--without-lsf).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -&gt; It makes no difference - the latency is still bad: ~1.1us.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matthias
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 02 March 2012 13:50:13 Matthias Jurenz wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SORRY, it was obviously a big mistake by me. :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.5.5 was built with LSF support, so when starting an LSF job it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; necessary to request at least the number of tasks/cores as used for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subsequent mpirun command. That was not the case - I forgot the bsub's '-n'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option to specify the number of task, so only *one* task/core was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.4.5 was built *without* LSF support, so the supposed misbehavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could not happen with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In short, there is no bug in Open MPI 1.5.x regarding to the detection of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oversubscription. Sorry for any confusion!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday 28 February 2012 13:36:56 Matthias Jurenz wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When using Open MPI v1.4.5 I get ~1.1us. That's the same result as I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Open MPI v1.5.x using mpi_yield_when_idle=0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I think there is a bug in Open MPI (v1.5.4 and v1.5.5rc2) regarding to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the automatic performance mode selection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When enabling the degraded performance mode for Open MPI 1.4.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mpi_yield_when_idle=1) I get ~1.8us latencies.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthias
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tuesday 28 February 2012 06:20:28 Christopher Samuel wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 13/02/12 22:11, Matthias Jurenz wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do you have any idea? Please help!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you see the same bad latency in the old branch (1.4.5) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Chris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10662.php">Jeffrey Squyres: "Re: [OMPI devel] Replacing poll()"</a>
<li><strong>Previous message:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10660.php">Jeffrey Squyres: "Re: [OMPI devel] poor btl sm latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10663.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
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
