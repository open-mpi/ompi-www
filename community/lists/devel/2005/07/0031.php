<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 14:16:59 2005" -->
<!-- isoreceived="20050718191659" -->
<!-- sent="Mon, 18 Jul 2005 15:16:56 -0400" -->
<!-- isosent="20050718191656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  July meeting" -->
<!-- id="1639b9c525c12f04634805c63be4a3d8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C70256E2-BA7D-4668-BA01-331784AD1233_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 14:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0032.php">George Bosilca: "Re:  OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Added.
<br>
<p>I've now got:
<br>
<p>- ORTE sub group:
<br>
&nbsp;&nbsp;&nbsp;- simplifying GPR access (if possible)
<br>
&nbsp;&nbsp;&nbsp;- multi-cell RTE
<br>
&nbsp;&nbsp;&nbsp;- external perspective from Eclipse guys
<br>
<p>Since you and Ralph are not core OMPI developers and not the focus of 
<br>
the rest of the meeting, let's coordinate offline and come up with a 
<br>
time (and location?) for this.
<br>
<p><p><p>On Jul 18, 2005, at 2:58 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Would you be interested in an external tool perspective on orte?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2005, at 9:34 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the topics that I have for the July meeting (did I miss
</span><br>
<span class="quotelev2">&gt;&gt; anything?).  I don't really have a schedule -- only some things
</span><br>
<span class="quotelev2">&gt;&gt; need to
</span><br>
<span class="quotelev2">&gt;&gt; assigned times (e.g., the collectives meeting(s)).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - All: Current status, future plans/goals (presentation from each
</span><br>
<span class="quotelev2">&gt;&gt;    organization)
</span><br>
<span class="quotelev2">&gt;&gt;    - Jeff: IU
</span><br>
<span class="quotelev2">&gt;&gt;    - Tim: LANL
</span><br>
<span class="quotelev2">&gt;&gt;    - Ralph: ORTE
</span><br>
<span class="quotelev2">&gt;&gt;    - Rainer: HLRS
</span><br>
<span class="quotelev2">&gt;&gt;    - George: UTK
</span><br>
<span class="quotelev2">&gt;&gt; - All, Tim: overview of PML/BTL interface and design
</span><br>
<span class="quotelev2">&gt;&gt;    - Retire teg/PTL?
</span><br>
<span class="quotelev2">&gt;&gt; - All: SC, Euro PVM/MPI, LACSI planning
</span><br>
<span class="quotelev2">&gt;&gt; - All, Brian: what you need to know about the new configure.m4 system
</span><br>
<span class="quotelev2">&gt;&gt; - All, Jeff: build system changes
</span><br>
<span class="quotelev2">&gt;&gt; - All: discussion of others coming into the tree (e.g., IB vendors)
</span><br>
<span class="quotelev2">&gt;&gt; - All: processor/memory affinity
</span><br>
<span class="quotelev2">&gt;&gt; - All: project split issues
</span><br>
<span class="quotelev2">&gt;&gt;    - tools in wrong trees (abstraction issues)
</span><br>
<span class="quotelev2">&gt;&gt;    - wrapper compilers for ORTE/OPAL?
</span><br>
<span class="quotelev2">&gt;&gt;    - #include files
</span><br>
<span class="quotelev2">&gt;&gt;    - any final cleanup moving between opal/orte/ompi trees
</span><br>
<span class="quotelev2">&gt;&gt; - All: MCA issues
</span><br>
<span class="quotelev2">&gt;&gt;    - Framework hiding / re-entrance (e.g., ompi_info)
</span><br>
<span class="quotelev2">&gt;&gt;    - How to have multiple PML's without re-initializing BTLs/PTLs?
</span><br>
<span class="quotelev2">&gt;&gt;    - Better guidelines for framework/component &quot;open&quot; calls
</span><br>
<span class="quotelev2">&gt;&gt;    - Separate function for framework/component MCA parameter
</span><br>
<span class="quotelev2">&gt;&gt; registration?
</span><br>
<span class="quotelev2">&gt;&gt;    - Frameworks as DSOs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Jeff, Ralph: simplifying GPR access (if possible)
</span><br>
<span class="quotelev2">&gt;&gt; - Red Storm sub-group: current status and future plans
</span><br>
<span class="quotelev2">&gt;&gt; - One-sided sub-group: current status, SC plans, future plans
</span><br>
<span class="quotelev2">&gt;&gt; - Fault tolerance sub-group:
</span><br>
<span class="quotelev2">&gt;&gt;    - Integrating LAM-style coordinated, synchronous checkpointing
</span><br>
<span class="quotelev2">&gt;&gt;    - How to do other kinds of checkpointing (e.g., FT-MPI, MPICH-V,
</span><br>
<span class="quotelev2">&gt;&gt; etc.)
</span><br>
<span class="quotelev2">&gt;&gt; - Collectives sub-group (including Access Grid participants):
</span><br>
<span class="quotelev2">&gt;&gt;    - New framework (coll v2)
</span><br>
<span class="quotelev2">&gt;&gt;    - Using btl's
</span><br>
<span class="quotelev2">&gt;&gt;    - Striping
</span><br>
<span class="quotelev2">&gt;&gt;    - Non-blocking collectives
</span><br>
<span class="quotelev2">&gt;&gt;    - ...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0032.php">George Bosilca: "Re:  OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
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
