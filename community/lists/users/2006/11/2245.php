<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 29 00:59:12 2006" -->
<!-- isoreceived="20061129055912" -->
<!-- sent="Tue, 28 Nov 2006 22:58:51 -0700" -->
<!-- isosent="20061129055851" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pernode request" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60CD_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Pernode request" -->
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
<strong>From:</strong> Maestas, Christopher Daniel (<em>cdmaest_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-29 00:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for the feedback.  Glad we are clearing these things up. :-)
<br>
<p>So here's what osc mpiexec is doing now:
<br>
<pre>
---
  -pernode : allocate only one process per compute node
  -npernode &lt;nprocs&gt; : allocate no more than &lt;nprocs&gt; processes per
compute node
---
&gt; Cdm&gt; I think I originally requested the -pernode feature. :-)  I've 
&gt; Cdm&gt; seen
&gt; one issue I know of ...
&gt; When used in the following manner:
&gt; ---
&gt; &quot;mpiexec -pernode -np N&quot; and if N is &gt; allocated nodes, it should 
&gt; error out and not proceed.  I need to update/learn to update the trac 
&gt; ticket on this.
&gt; ---
This is an incorrect usage - the &quot;pernode&quot; option is only intended to be
used without any specification of the number of processes. Pernode
instructs the system to spawn one process/node across the entire
allocation - we simply ignore any attempt to indicate the number of
processes.
I suppose I could check and error out if you specify the number of procs
AND --pernode. I would have to check the code, to be honest - I may
already be doing so. Just don't remember :-)
CDM&gt; I think I remember looking through the code here, and thinking that
app-&gt;num_procs needed to be compared to the
opal_list_get_size(&amp;master_node_list) given, but didn't dig into how
that got set -np when specified.  My intention is that we could do for
an N node job scheduled allocation such as torque:
---
&quot;mpiexec -pernode myprogram&quot;
&quot;mpiexec -np n -pernode myprogram&quot; where n &lt;= N
---
That is how I believe osc mpiexec is behaving.  I tested on 2 nodes and
saw this:
---
$ mpiexec -comm=none -pernode hostname
rv272
rv270
$ mpiexec -comm=none -pernode -np 1 hostname
rv272
$ mpiexec -comm=none -pernode -np 3 hostname
mpiexec: Error: constrain_nodes: argument -n specifies 3 processors, but
  only 2 available after processing -pernode flag.
---
This was my original intention of requesting -pernode in the first
place.  I apologize if I didn't provide this example as well.  :-)
Outside of a job scheduler I would think in that cause you would have
the following to launch commands do the same thing:
&quot;mpiexec -np n -pernode --machinefile=m myprogram &quot;
&quot;mpiexec -np n --bynode --machinefile=m&quot;
&quot;OMPI_MCA_rmaps_base_schedule_policy=node; mpiexec -np n --machinefile=m
myprogram&quot;
Here the nodes N is basically &quot;wc -l&quot; of the file m and n &lt;=N still
holds true when using -pernode.  It may prove difficult to check if
using -pernode, and check in w/ all orted's to see if they've already
launched the process on their nodes.  I think that would have to be done
if using -pernode though.  If it's too difficult simply error'ng out
when using -pernode and -np may be an easier choice for now. :-)  
...
&gt; Cdm&gt; it was more my hope that OSC mpiexec and Open MPI mpiexec options
&gt; would eventually merge into common options.  A guy can dream can't he?
&gt; ;-)
Guess that's up to the MPI folks on the team - from an RTE perspective,
I don't have an opinion either way.
CDM&gt; I would think that the mpiexec/orterun feature set could launch
other types of executables that weren't mpi based, so I wouldn't think
it would be just mpi spawning. :-)
For example:
	&quot;mpiexec -pernode hostname&quot;
Thanks,
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2246.php">Durga Choudhury: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2244.php">Brian W. Barrett: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2236.php">Maestas, Christopher Daniel: "[OMPI users] Pernode request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Reply:</strong> <a href="2253.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
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
