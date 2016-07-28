<?
$subject_val = "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 16:33:51 2011" -->
<!-- isoreceived="20111006203351" -->
<!-- sent="Thu, 6 Oct 2011 16:33:46 -0400" -->
<!-- isosent="20111006203346" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package" -->
<!-- id="4D8D29F2-9E33-49DB-98A2-851C916277E2_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E8D519E.80206_at_ccs.neu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 16:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>In reply to:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>It looks like there is a mismatch between what you propose to achieve and the text in your RFC. You propose to add a new single-process checkpoint-restart mechanism (MTCP), to the ones already provided in Open MPI. However, most of the text in your RFC is about DMTCP, which is another layer on top of MTCP capable of checkpoint/restarting distributed application. 
<br>
<p>I would like to understand what this RFC is really about: MTCP or DMTCP?
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Oct 6, 2011, at 02:58 , Alex Brick wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Bring in the mtcp CRS component
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Add support for the MTCP checkpoint/restart service
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/mca/crs/mtcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday teleconf, 2011-10-18 (about 2 weeks from now)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; What is MTCP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DMTCP (Distributed MultiThreaded CheckPointing, <a href="http://dmtcp.sourceforge.net">http://dmtcp.sourceforge.net</a>) is a mature open source (LGPL) checkpointing package that has been under development for seven years. It operates entirely in user space, with no kernel modules, or modifications to the target application.  If used in the simplest possible way, it works as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dmtcp_checkpoint ./a.out
</span><br>
<span class="quotelev1">&gt; dmtcp_command --checkpoint
</span><br>
<span class="quotelev1">&gt; dmtcp_restart ckpt_a.out_*.dmtcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DMTCP is contagious.  Any calls to fork(), pthread_create(), or &quot;ssh&quot;,
</span><br>
<span class="quotelev1">&gt; are recognized by DMTCP, and it maintains those threads, and local and
</span><br>
<span class="quotelev1">&gt; remote processes under checkpoint control.  At checkpoint time, it also
</span><br>
<span class="quotelev1">&gt; generates a script, dmtcp_restart_script.sh, that can restart a distributed computation.  As a sign of its maturity, it can also checkpoint Open MPI &quot;from on top&quot;:  dmtcp_checkpoint mpirun hello_mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MTCP component of DMTCP is the single-process component.  It is used
</span><br>
<span class="quotelev1">&gt; both internally by DMTCP as well as directly by users only interested in
</span><br>
<span class="quotelev1">&gt; checkpointing a single process.  This second feature was used in order to develop an Open MPI module for the Open MPI checkpoint-restart service similar to BLCR, except that no kernel modules are required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DMTCP is currently a Debian package (Debian testing), and is planned also for Fedora and openSuSe.  These packages also provide the MTCP component for Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI MTCP integration implementation available at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://bitbucket.org/jsquyres/ompi-dmtcp2">https://bitbucket.org/jsquyres/ompi-dmtcp2</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The DMTCP parent project website is below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The Distributed MultiThreaded CheckPointing (DMTCP) Project supports user-level, transparent checkpoint/restart of a variety of sequential and parallel programs.  In Open MPI terms, this contribution is an alternative to the BLCR CRS module, meaning that users can use DMTCP to checkpoint their applications instead of BLCR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MTCP component is currently restricted to supporting communication over sockets and shared memory.  In an effort to support a wider range of networks (e.g., InfiniBand, Myrinet), they have created a CRS component to hook into Open MPI's checkpoint/restart infrastructure. The MTCP user-level checkpoint/restart service is the single process checkpoint kernel of the DMTCP project.  The MTCP kernel is what is used in the mtcp CRS component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres and Josh Hursey have been working with the DMTCP authors (based out of the US Northeastern University in Boston, MA, USA) for quite a while and feel that this component is ready to be brought into the Open MPI main line for inclusion in the 1.7.x series (and possibly the 1.5.x series?).  The authors have submitted OMPI 3rd party contribution agreements.
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
<li><strong>Next message:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9788.php">Boehm, Swen: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>In reply to:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
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
