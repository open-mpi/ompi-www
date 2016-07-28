<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 13:56:55 2005" -->
<!-- isoreceived="20050718185655" -->
<!-- sent="Mon, 18 Jul 2005 12:56:09 -0600" -->
<!-- isosent="20050718185609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  July meeting" -->
<!-- id="1121712969.5123.79.camel_at_culveroot.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5dc3bb0198c046581884dc286879c286_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 13:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Jeff
<br>
<p>Couple of things you might want to add:
<br>
<p>1. RedStorm design - what are we going to do about the RTE?
<br>
<p>2. Multi-cell RTE - I've been working on this (finally set it aside to
<br>
complete the scalable startup stuff first), but it is complex and might
<br>
merit some discussion with those interested.
<br>
<p><p>On Mon, 2005-07-18 at 09:34, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Here's the topics that I have for the July meeting (did I miss 
</span><br>
<span class="quotelev1">&gt; anything?).  I don't really have a schedule -- only some things need to 
</span><br>
<span class="quotelev1">&gt; assigned times (e.g., the collectives meeting(s)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - All: Current status, future plans/goals (presentation from each
</span><br>
<span class="quotelev1">&gt;    organization)
</span><br>
<span class="quotelev1">&gt;    - Jeff: IU
</span><br>
<span class="quotelev1">&gt;    - Tim: LANL
</span><br>
<span class="quotelev1">&gt;    - Ralph: ORTE
</span><br>
<span class="quotelev1">&gt;    - Rainer: HLRS
</span><br>
<span class="quotelev1">&gt;    - George: UTK
</span><br>
<span class="quotelev1">&gt; - All, Tim: overview of PML/BTL interface and design
</span><br>
<span class="quotelev1">&gt;    - Retire teg/PTL?
</span><br>
<span class="quotelev1">&gt; - All: SC, Euro PVM/MPI, LACSI planning
</span><br>
<span class="quotelev1">&gt; - All, Brian: what you need to know about the new configure.m4 system
</span><br>
<span class="quotelev1">&gt; - All, Jeff: build system changes
</span><br>
<span class="quotelev1">&gt; - All: discussion of others coming into the tree (e.g., IB vendors)
</span><br>
<span class="quotelev1">&gt; - All: processor/memory affinity
</span><br>
<span class="quotelev1">&gt; - All: project split issues
</span><br>
<span class="quotelev1">&gt;    - tools in wrong trees (abstraction issues)
</span><br>
<span class="quotelev1">&gt;    - wrapper compilers for ORTE/OPAL?
</span><br>
<span class="quotelev1">&gt;    - #include files
</span><br>
<span class="quotelev1">&gt;    - any final cleanup moving between opal/orte/ompi trees
</span><br>
<span class="quotelev1">&gt; - All: MCA issues
</span><br>
<span class="quotelev1">&gt;    - Framework hiding / re-entrance (e.g., ompi_info)
</span><br>
<span class="quotelev1">&gt;    - How to have multiple PML's without re-initializing BTLs/PTLs?
</span><br>
<span class="quotelev1">&gt;    - Better guidelines for framework/component &quot;open&quot; calls
</span><br>
<span class="quotelev1">&gt;    - Separate function for framework/component MCA parameter 
</span><br>
<span class="quotelev1">&gt; registration?
</span><br>
<span class="quotelev1">&gt;    - Frameworks as DSOs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Jeff, Ralph: simplifying GPR access (if possible)
</span><br>
<span class="quotelev1">&gt; - Red Storm sub-group: current status and future plans
</span><br>
<span class="quotelev1">&gt; - One-sided sub-group: current status, SC plans, future plans
</span><br>
<span class="quotelev1">&gt; - Fault tolerance sub-group:
</span><br>
<span class="quotelev1">&gt;    - Integrating LAM-style coordinated, synchronous checkpointing
</span><br>
<span class="quotelev1">&gt;    - How to do other kinds of checkpointing (e.g., FT-MPI, MPICH-V, etc.)
</span><br>
<span class="quotelev1">&gt; - Collectives sub-group (including Access Grid participants):
</span><br>
<span class="quotelev1">&gt;    - New framework (coll v2)
</span><br>
<span class="quotelev1">&gt;    - Using btl's
</span><br>
<span class="quotelev1">&gt;    - Striping
</span><br>
<span class="quotelev1">&gt;    - Non-blocking collectives
</span><br>
<span class="quotelev1">&gt;    - ...?
</span><br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
<li><strong>Previous message:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
<li><strong>In reply to:</strong> <a href="0022.php">Jeff Squyres: "July meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0030.php">Jeff Squyres: "Re:  July meeting"</a>
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
