<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 10:34:26 2005" -->
<!-- isoreceived="20050718153426" -->
<!-- sent="Mon, 18 Jul 2005 11:34:24 -0400" -->
<!-- isosent="20050718153424" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="July meeting" -->
<!-- id="5dc3bb0198c046581884dc286879c286_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-07-18 10:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Ralph Castain: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0028.php">Ralph Castain: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the topics that I have for the July meeting (did I miss 
<br>
anything?).  I don't really have a schedule -- only some things need to 
<br>
assigned times (e.g., the collectives meeting(s)).
<br>
<p>- All: Current status, future plans/goals (presentation from each
<br>
&nbsp;&nbsp;&nbsp;organization)
<br>
&nbsp;&nbsp;&nbsp;- Jeff: IU
<br>
&nbsp;&nbsp;&nbsp;- Tim: LANL
<br>
&nbsp;&nbsp;&nbsp;- Ralph: ORTE
<br>
&nbsp;&nbsp;&nbsp;- Rainer: HLRS
<br>
&nbsp;&nbsp;&nbsp;- George: UTK
<br>
- All, Tim: overview of PML/BTL interface and design
<br>
&nbsp;&nbsp;&nbsp;- Retire teg/PTL?
<br>
- All: SC, Euro PVM/MPI, LACSI planning
<br>
- All, Brian: what you need to know about the new configure.m4 system
<br>
- All, Jeff: build system changes
<br>
- All: discussion of others coming into the tree (e.g., IB vendors)
<br>
- All: processor/memory affinity
<br>
- All: project split issues
<br>
&nbsp;&nbsp;&nbsp;- tools in wrong trees (abstraction issues)
<br>
&nbsp;&nbsp;&nbsp;- wrapper compilers for ORTE/OPAL?
<br>
&nbsp;&nbsp;&nbsp;- #include files
<br>
&nbsp;&nbsp;&nbsp;- any final cleanup moving between opal/orte/ompi trees
<br>
- All: MCA issues
<br>
&nbsp;&nbsp;&nbsp;- Framework hiding / re-entrance (e.g., ompi_info)
<br>
&nbsp;&nbsp;&nbsp;- How to have multiple PML's without re-initializing BTLs/PTLs?
<br>
&nbsp;&nbsp;&nbsp;- Better guidelines for framework/component &quot;open&quot; calls
<br>
&nbsp;&nbsp;&nbsp;- Separate function for framework/component MCA parameter 
<br>
registration?
<br>
&nbsp;&nbsp;&nbsp;- Frameworks as DSOs
<br>
<p>- Jeff, Ralph: simplifying GPR access (if possible)
<br>
- Red Storm sub-group: current status and future plans
<br>
- One-sided sub-group: current status, SC plans, future plans
<br>
- Fault tolerance sub-group:
<br>
&nbsp;&nbsp;&nbsp;- Integrating LAM-style coordinated, synchronous checkpointing
<br>
&nbsp;&nbsp;&nbsp;- How to do other kinds of checkpointing (e.g., FT-MPI, MPICH-V, etc.)
<br>
- Collectives sub-group (including Access Grid participants):
<br>
&nbsp;&nbsp;&nbsp;- New framework (coll v2)
<br>
&nbsp;&nbsp;&nbsp;- Using btl's
<br>
&nbsp;&nbsp;&nbsp;- Striping
<br>
&nbsp;&nbsp;&nbsp;- Non-blocking collectives
<br>
&nbsp;&nbsp;&nbsp;- ...?
<br>
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
<li><strong>Next message:</strong> <a href="0023.php">Jeff Squyres: "Re:  processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Richard L. Graham: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Ralph Castain: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0028.php">Ralph Castain: "Re:  July meeting"</a>
<li><strong>Reply:</strong> <a href="0029.php">Greg Watson: "Re:  July meeting"</a>
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
