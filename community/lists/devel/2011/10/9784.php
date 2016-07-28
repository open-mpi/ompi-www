<?
$subject_val = "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  6 02:59:04 2011" -->
<!-- isoreceived="20111006065904" -->
<!-- sent="Wed, 05 Oct 2011 23:58:38 -0700" -->
<!-- isosent="20111006065838" -->
<!-- name="Alex Brick" -->
<!-- email="bricka_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package" -->
<!-- id="4E8D519E.80206_at_ccs.neu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package<br>
<strong>From:</strong> Alex Brick (<em>bricka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-06 02:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9789.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe reply:</strong> <a href="9794.php">Alex Brick: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe reply:</strong> <a href="9797.php">Alex Brick: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Bring in the mtcp CRS component
<br>
<p>WHY: Add support for the MTCP checkpoint/restart service
<br>
<p>WHERE: opal/mca/crs/mtcp
<br>
<p>TIMEOUT: Tuesday teleconf, 2011-10-18 (about 2 weeks from now)
<br>
<p>-------------------------------------------
<br>
What is MTCP?
<br>
<p>DMTCP (Distributed MultiThreaded CheckPointing, 
<br>
<a href="http://dmtcp.sourceforge.net">http://dmtcp.sourceforge.net</a>) is a mature open source (LGPL) 
<br>
checkpointing package that has been under development for seven years. 
<br>
It operates entirely in user space, with no kernel modules, or 
<br>
modifications to the target application.  If used in the simplest 
<br>
possible way, it works as:
<br>
<p>&nbsp;&nbsp;dmtcp_checkpoint ./a.out
<br>
&nbsp;&nbsp;dmtcp_command --checkpoint
<br>
&nbsp;&nbsp;dmtcp_restart ckpt_a.out_*.dmtcp
<br>
<p>DMTCP is contagious.  Any calls to fork(), pthread_create(), or &quot;ssh&quot;,
<br>
are recognized by DMTCP, and it maintains those threads, and local and
<br>
remote processes under checkpoint control.  At checkpoint time, it also
<br>
generates a script, dmtcp_restart_script.sh, that can restart a 
<br>
distributed computation.  As a sign of its maturity, it can also 
<br>
checkpoint Open MPI &quot;from on top&quot;:  dmtcp_checkpoint mpirun hello_mpi
<br>
<p>The MTCP component of DMTCP is the single-process component.  It is used
<br>
both internally by DMTCP as well as directly by users only interested in
<br>
checkpointing a single process.  This second feature was used in order 
<br>
to develop an Open MPI module for the Open MPI checkpoint-restart 
<br>
service similar to BLCR, except that no kernel modules are required.
<br>
<p>DMTCP is currently a Debian package (Debian testing), and is planned 
<br>
also for Fedora and openSuSe.  These packages also provide the MTCP 
<br>
component for Open MPI.
<br>
<p>-------------------------------------------
<br>
More details:
<br>
<p>Open MPI MTCP integration implementation available at:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-dmtcp2">https://bitbucket.org/jsquyres/ompi-dmtcp2</a>
<br>
<p>The DMTCP parent project website is below:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
<br>
<p>The Distributed MultiThreaded CheckPointing (DMTCP) Project supports 
<br>
user-level, transparent checkpoint/restart of a variety of sequential 
<br>
and parallel programs.  In Open MPI terms, this contribution is an 
<br>
alternative to the BLCR CRS module, meaning that users can use DMTCP to 
<br>
checkpoint their applications instead of BLCR.
<br>
<p>The MTCP component is currently restricted to supporting communication 
<br>
over sockets and shared memory.  In an effort to support a wider range 
<br>
of networks (e.g., InfiniBand, Myrinet), they have created a CRS 
<br>
component to hook into Open MPI's checkpoint/restart infrastructure. 
<br>
The MTCP user-level checkpoint/restart service is the single process 
<br>
checkpoint kernel of the DMTCP project.  The MTCP kernel is what is used 
<br>
in the mtcp CRS component.
<br>
<p>Jeff Squyres and Josh Hursey have been working with the DMTCP authors 
<br>
(based out of the US Northeastern University in Boston, MA, USA) for 
<br>
quite a while and feel that this component is ready to be brought into 
<br>
the Open MPI main line for inclusion in the 1.7.x series (and possibly 
<br>
the 1.5.x series?).  The authors have submitted OMPI 3rd party 
<br>
contribution agreements.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9785.php">Boehm, Swen: "[OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9783.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25234"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9787.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9789.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe reply:</strong> <a href="9794.php">Alex Brick: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe reply:</strong> <a href="9797.php">Alex Brick: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
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
