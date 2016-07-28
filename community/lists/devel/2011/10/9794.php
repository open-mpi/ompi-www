<?
$subject_val = "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  7 15:59:16 2011" -->
<!-- isoreceived="20111007195916" -->
<!-- sent="Fri, 07 Oct 2011 12:59:00 -0700" -->
<!-- isosent="20111007195900" -->
<!-- name="Alex Brick" -->
<!-- email="bricka_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package" -->
<!-- id="j2mfrp61s0gno2u1g56yteef.1318017371974_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package" -->
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
<strong>From:</strong> Alex Brick (<em>bricka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-07 15:59:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9793.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe in reply to:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9796.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9796.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we were trying to give some background on the project and use consistent branding.  Our package is called DMTCP,  which includes two components: DMTCP (a distributed checkpointer), and MTCP (a single process checkpointer, which can be used both standalone and internally by DMTCP).
<br>
<p>This RFC is for a CRS module that uses only the MTCP component.
<br>
<p><p>-- Alex
<br>
<p>Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt;From what I have seen during development, this RFC integrates the MTCP
</span><br>
<span class="quotelev1">&gt;single process checkpointer into the C/R infrastructure of Open MPI.
</span><br>
<span class="quotelev1">&gt;The MTCP component of the DMTCP project can be used in insolation,
</span><br>
<span class="quotelev1">&gt;which is what they are integrating. So they can use DMTCP to
</span><br>
<span class="quotelev1">&gt;checkpoint/restart an unmodified Open MPI, but only over certain
</span><br>
<span class="quotelev1">&gt;networks. By integrating the MTCP checkpointer as a CRS component they
</span><br>
<span class="quotelev1">&gt;use Open MPI to coordinate across processes, and gain support for a
</span><br>
<span class="quotelev1">&gt;larger number of networks (e.g., IB, MX).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Alex, does that sound about right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, Oct 6, 2011 at 4:33 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Alex,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like there is a mismatch between what you propose to achieve and the text in your RFC. You propose to add a new single-process checkpoint-restart mechanism (MTCP), to the ones already provided in Open MPI. However, most of the text in your RFC is about DMTCP, which is another layer on top of MTCP capable of checkpoint/restarting distributed application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would like to understand what this RFC is really about: MTCP or DMTCP?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2011, at 02:58 , Alex Brick wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Bring in the mtcp CRS component
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: Add support for the MTCP checkpoint/restart service
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: opal/mca/crs/mtcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Tuesday teleconf, 2011-10-18 (about 2 weeks from now)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is MTCP?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DMTCP (Distributed MultiThreaded CheckPointing, <a href="http://dmtcp.sourceforge.net">http://dmtcp.sourceforge.net</a>) is a mature open source (LGPL) checkpointing package that has been under development for seven years. It operates entirely in user space, with no kernel modules, or modifications to the target application. &#194;&#160;If used in the simplest possible way, it works as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dmtcp_checkpoint ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dmtcp_command --checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dmtcp_restart ckpt_a.out_*.dmtcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DMTCP is contagious. &#194;&#160;Any calls to fork(), pthread_create(), or &quot;ssh&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are recognized by DMTCP, and it maintains those threads, and local and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote processes under checkpoint control. &#194;&#160;At checkpoint time, it also
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generates a script, dmtcp_restart_script.sh, that can restart a distributed computation. &#194;&#160;As a sign of its maturity, it can also checkpoint Open MPI &quot;from on top&quot;: &#194;&#160;dmtcp_checkpoint mpirun hello_mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MTCP component of DMTCP is the single-process component. &#194;&#160;It is used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both internally by DMTCP as well as directly by users only interested in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpointing a single process. &#194;&#160;This second feature was used in order to develop an Open MPI module for the Open MPI checkpoint-restart service similar to BLCR, except that no kernel modules are required.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DMTCP is currently a Debian package (Debian testing), and is planned also for Fedora and openSuSe. &#194;&#160;These packages also provide the MTCP component for Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI MTCP integration implementation available at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;<a href="https://bitbucket.org/jsquyres/ompi-dmtcp2">https://bitbucket.org/jsquyres/ompi-dmtcp2</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The DMTCP parent project website is below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;<a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Distributed MultiThreaded CheckPointing (DMTCP) Project supports user-level, transparent checkpoint/restart of a variety of sequential and parallel programs. &#194;&#160;In Open MPI terms, this contribution is an alternative to the BLCR CRS module, meaning that users can use DMTCP to checkpoint their applications instead of BLCR.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MTCP component is currently restricted to supporting communication over sockets and shared memory. &#194;&#160;In an effort to support a wider range of networks (e.g., InfiniBand, Myrinet), they have created a CRS component to hook into Open MPI's checkpoint/restart infrastructure. The MTCP user-level checkpoint/restart service is the single process checkpoint kernel of the DMTCP project. &#194;&#160;The MTCP kernel is what is used in the mtcp CRS component.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres and Josh Hursey have been working with the DMTCP authors (based out of the US Northeastern University in Boston, MA, USA) for quite a while and feel that this component is ready to be brought into the Open MPI main line for inclusion in the 1.7.x series (and possibly the 1.5.x series?). &#194;&#160;The authors have submitted OMPI 3rd party contribution agreements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;Joshua Hursey
</span><br>
<span class="quotelev1">&gt;Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt;Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="9793.php">George Bosilca: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Maybe in reply to:</strong> <a href="9784.php">Alex Brick: "[OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9796.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Reply:</strong> <a href="9796.php">Jeff Squyres: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
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
