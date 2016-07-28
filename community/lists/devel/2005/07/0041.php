<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 22 08:35:25 2005" -->
<!-- isoreceived="20050722133525" -->
<!-- sent="Fri, 22 Jul 2005 09:35:22 -0400" -->
<!-- isosent="20050722133522" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="(REVISED) next week - schedule/list of topics" -->
<!-- id="d99f09f0a518ec93c930ff984de2fee2_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-07-22 08:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres: "bproc problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a few schedule/topic changes (noted with (*)).  The most notable  
<br>
of which is the ORTE/Red Storm meeting needs to move to 1pm Tuesday  
<br>
(Greg/Ralph -- this affects you).  So we'll start with Greg's stuff at  
<br>
1pm, and move on to Red Storm/ORTE after that.
<br>
<p>Here's the updated schedule:
<br>
<p>TUESDAY
<br>
--------
<br>
<p>- We're starting 8am at the Holiday Inn Express in the conference room.
<br>
<p>- We'll start off with status reports followed by a presentation of  
<br>
goals from each institution (see the list below).  Feel free to bring a  
<br>
few slides for your presentation, if it would help.  Aim for 10-15  
<br>
minutes max.
<br>
<p>(*) - 1pm, Greg and the ORTE/Red Storm will discuss Greg's perspective  
<br>
of ORTE (approx 30 minutes).  Then we'll move on to Red Storm and other  
<br>
general ORTE issues.
<br>
<p>- The rest of the day will be ad hoc discussion of the other agenda  
<br>
items and/or specific code issues (see below).
<br>
<p>WEDNESDAY
<br>
---------
<br>
<p>- Collective sub-group will convene at 8am at the ACL building (will  
<br>
probably need to arrive a bit earlier to get badges).  Access Grid  
<br>
starts at 8:30, goes until 11:30am.
<br>
<p>- Rest of group convenes at the Holiday Inn at 8am.  Ad hoc progression  
<br>
through the other agenda items and/or code issues.
<br>
<p>- Rich would like to invite everyone over for a cookout at his home on  
<br>
Wednesday evening.  Time TBD.
<br>
<p>THURSDAY
<br>
---------
<br>
<p>- Collective sub-group will convene at 8am at the ACL building (will  
<br>
probably need to arrive a bit earlier to get badges).  Access Grid  
<br>
starts at 8:30, goes until 11:30am.
<br>
<p>- Rest of group convenes at the Holiday Inn at 8am.  Ad hoc progression  
<br>
through the other agenda items and/or code issues.
<br>
<p>======================================================================== 
<br>
=========
<br>
<p>Random note: I motion that we skip the Tuesday teleconference the  
<br>
following week (2 August), since we'll all just have been together the  
<br>
previous week.
<br>
<p>======================================================================== 
<br>
=========
<br>
<p>Here's the full list of topics / sub-meetings:
<br>
<p>- All: Current status, future plans/goals (presentation from each
<br>
&nbsp;&nbsp;&nbsp;organization)
<br>
&nbsp;&nbsp;&nbsp;- Jeff: IU/subcontract
<br>
&nbsp;&nbsp;&nbsp;- Tim: LANL
<br>
&nbsp;&nbsp;&nbsp;- Rich: DOE
<br>
&nbsp;&nbsp;&nbsp;- Rainer: HLRS
<br>
&nbsp;&nbsp;&nbsp;- Graham: UTK/subcontract
<br>
- All, Tim: overview of PML/BTL interface and design
<br>
&nbsp;&nbsp;&nbsp;- Retire teg/PTL?
<br>
- All: SC, Euro PVM/MPI, LACSI planning
<br>
- All, Brian: what you need to know about the new configure.m4 system
<br>
- All: discussion of others coming into the tree (e.g., IB vendors)
<br>
- All: project split issues
<br>
&nbsp;&nbsp;&nbsp;- tools in wrong trees (abstraction issues)
<br>
&nbsp;&nbsp;&nbsp;- (*) need to move unit tests
<br>
&nbsp;&nbsp;&nbsp;- wrapper compilers for ORTE/OPAL?
<br>
&nbsp;&nbsp;&nbsp;- #include files
<br>
&nbsp;&nbsp;&nbsp;- any final cleanup moving between opal/orte/ompi trees
<br>
- All: processor/memory affinity
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
- All, Jeff: build system changes (lower priority than most other items)
<br>
- (*) Jeff, Sami: collectives pre-discussion (Tues morning)
<br>
<p>- ORTE sub group:
<br>
&nbsp;&nbsp;&nbsp;- external perspective from Eclipse guys
<br>
&nbsp;&nbsp;&nbsp;- simplifying GPR access
<br>
&nbsp;&nbsp;&nbsp;- multi-cell RTE
<br>
&nbsp;&nbsp;&nbsp;- (*) how to split ORTE and get stable drops only (personnel /  
<br>
resource issues)
<br>
- Red Storm sub-group:
<br>
&nbsp;&nbsp;&nbsp;- current status
<br>
&nbsp;&nbsp;&nbsp;- RTE design -- trial, error, and how to proceed
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
<li><strong>Next message:</strong> <a href="0042.php">Timothy B. Prins: "Re:  bproc problem"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Jeff Squyres: "bproc problem"</a>
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
