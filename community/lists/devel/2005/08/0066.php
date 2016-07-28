<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 14:56:04 2005" -->
<!-- isoreceived="20050802195604" -->
<!-- sent="Tue, 2 Aug 2005 15:55:57 -0400" -->
<!-- isosent="20050802195557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="processor affinity" -->
<!-- id="7650ddcb3a672ddca9ad7780a319461a_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-02 14:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0067.php">Ralph H. Castain: "New simplified registry API's"</a>
<li><strong>Previous message:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is one of the few topics that we didn't get to discuss last week.  
<br>
I think there are two main parts -- an easy part and a hard part.  :-)
<br>
<p>Easy part: the processor affinity framework and its interface
<br>
Hard part: how and when this framework is invoked in Open MPI
<br>
<p>Processor affinity framework ([potentially] easy part)
<br>
======================================================
<br>
<p>Framework name: paffinity
<br>
<p>Intent:
<br>
-------
<br>
<p>This is an extremely simple framework that is used to support the 
<br>
OS-specific API for placement of processes on processors.  It does 
<br>
*not* decide scheduling issues -- it is simply for assigning the 
<br>
current process it to a specific processor.  As such, the components 
<br>
are likely to be extremely short/simple -- there will likely be one 
<br>
component for each OS/API that we support (e.g., Linux, IRIX, etc.).  
<br>
As a direct consequence, there will likely only be one component that 
<br>
is useable on a given platform (making selection easy).
<br>
<p>Scheduling issues are discussed below (that's part of the hard part).
<br>
<p>Base interface:
<br>
---------------
<br>
<p>paffinity_base_open()
<br>
paffinity_base_select()
<br>
paffinity_base_close()
<br>
--&gt; same as most other framework open, select, and close calls.  
<br>
select() will use simple priority if multiple components report that 
<br>
they are selectable (an unlikely situation, but still...).
<br>
<p>Component interface:
<br>
--------------------
<br>
<p>component.open()
<br>
component.query()
<br>
component.close()
<br>
--&gt; same as most other component open, query, close calls
<br>
<p>component.init()
<br>
--&gt; initialization after selection
<br>
<p>component.get_num_processors()
<br>
--&gt; returns the number of processors on the machine that we can place 
<br>
processes on (e.g., 4 way SMP returns 4, for multi-core and/or 
<br>
hypertheaded processors, it'll be whatever we can component.set() a 
<br>
process on).  More specifically, this function returns the value N as 
<br>
described in the discussion of component.set(), below.
<br>
<p>component.set(id)
<br>
--&gt; set which [virtual] CPU ID to use (0 - N-1).  This may need to 
<br>
remap the virtual CPU ID to a real back-end CPU ID (however the 
<br>
back-end API works -- the front-end component interface presents CPUs 
<br>
with ID's 0 through N-1 to the rest of the OPAL/ORTE/OMPI code base).
<br>
<p>component.get()
<br>
--&gt; returns which [virtual, meaning 0-(N-1)] CPU ID this process is 
<br>
running on
<br>
<p>Location:
<br>
---------
<br>
<p>An argument can be made to put this framework in any of opal, orte, or 
<br>
ompi:
<br>
<p>- opal: it's OS/platform-dependent stuff, and that's exactly what opal 
<br>
is for
<br>
- orte: it's run-time stuff, and therefore should be in ORTE
<br>
- ompi: depending on the discussion below, this may only be used for 
<br>
MPI processes, and therefore belongs in the ompi tree
<br>
<p>All things being equal, I guess I would prefer it to be in opal, but 
<br>
could be swayed on this.
<br>
<p>How and when this framework is invoked
<br>
======================================
<br>
<p>This is the hard one -- given the simple framework above, we can easy 
<br>
assign any process to any processor, but how do we decide:
<br>
<p>a) which jobs to use processor affinity on?
<br>
b) how to assign which process to which processor?
<br>
<p>Let's tackle these in order:
<br>
<p>a) which jobs do we use processor affinity on?
<br>
<p>I'm of the mind that only MPI jobs will care about this (and therefore 
<br>
we should hide this early in MPI_INIT), but then again, ORTE may start 
<br>
heavily using non-MPI jobs (and therefore we may want to hide this 
<br>
early in orte_init()).  I don't really care, either way -- if we go 
<br>
with what we know today, then we should do this up at the top of 
<br>
MPI_INIT (ompi_mpi_init(), that is), probably right after orte_init().
<br>
<p>b) how do we assign a process to a given processor?
<br>
<p>There are multiple complications here, such as the fact that we are 
<br>
*not* the OS scheduler, nor the HPC batch scheduler.  So it may be 
<br>
possible that processes not from our ORTE job may be scheduled on the 
<br>
same node as us, and we may not know it.  Hence, if we just always 
<br>
start assigning [virtual] CPU ID's from 0, we could run into scenarios 
<br>
such as the following:
<br>
<p>- cluster of 2-way SMPs
<br>
- cluster is run by a batch scheduler
<br>
- scheduler assigns one process from an OMPI job to node A
<br>
- scheduler assigns one process from another OMPI job to node A
<br>
<p>In such a case, both OMPI jobs would assign themselves to CPU ID 0, 
<br>
which would be a Very Bad Thing.  Hence, I think we can really only use 
<br>
processor affinity in two cases:
<br>
<p>- when the scheduler system (bproc, slurm, pbs, whatever) tells us what 
<br>
CPU ID's we can use
<br>
- when the user tells us what CPU ID's we can use
<br>
<p>The first case is obvious -- we'll snarf in the information from the 
<br>
scheduler and use it to invoke the framework to assign us to a CPU 
<br>
(easy enough to add logic such that if multiple processes in a single 
<br>
job end up on the same node and the scheduler provides info about CPU 
<br>
ID's for each, we'll do the Right Things).
<br>
<p>This scheme *should* take care of the corner case where we would not 
<br>
want to use processor affinity if a node is oversubscribed -- a 
<br>
scheduler should not give us CPU ID info in that case.  But it's easy 
<br>
enough to add detection logic and avoid the use of paffinity in such a 
<br>
case.
<br>
<p>But I think that this raises the possibility of a paffinity scheduling 
<br>
framework.  Some code somewhere needs to determine the scheduling of 
<br>
processes to processors (e.g., reading information from a scheduler and 
<br>
then mapping that to calls to the paffinity framework) -- this code may 
<br>
well be scheduler-dependent (e.g., read some SLURM environment 
<br>
variables in the target job).  Hence, it may be worthwhile to have a 
<br>
separate framework that has a[nother] simple component interface, 
<br>
something like 
<br>
component.what_processor_should_this_process_be_bound_to()...?  This 
<br>
function could return either -1 (this process should not be bound to a 
<br>
processor) or some value &gt;= 0 indicating the virtual CPU ID that this 
<br>
process should be bound to.
<br>
<p>--&gt; Related question: do we know if any scheduler that provides 
<br>
specific CPU ID information?  AFAIK, BProc, SLURM, and PBS/Torque do 
<br>
not.  :-\
<br>
<p>For the second case, we can provide one or more MCA params to specify 
<br>
this kind of behavior (e.g., the common case will be to assume that we 
<br>
own the entire node and just start scheduling -- if not oversubscribed 
<br>
-- from virtual CPU ID 0).
<br>
<p>-----
<br>
<p>Comments?
<br>
<p>I would like to implement this within the next week or two, so timely 
<br>
comments would be appreciated (am happy to discuss higher bandwidth, 
<br>
such as a telephone, if it would help).  :-)
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
<li><strong>Next message:</strong> <a href="0067.php">Ralph H. Castain: "New simplified registry API's"</a>
<li><strong>Previous message:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
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
