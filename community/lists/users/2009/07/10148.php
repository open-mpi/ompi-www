<?
$subject_val = "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 15:36:36 2009" -->
<!-- isoreceived="20090730193636" -->
<!-- sent="Thu, 30 Jul 2009 13:36:22 -0600" -->
<!-- isosent="20090730193622" -->
<!-- name="Adams, Brian M" -->
<!-- email="briadam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="A0801CEC7AFED846978515099D145DA5153BD552B1_at_ES01SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75E90853-3094-413D-A9E8-036D9D2496BF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)<br>
<strong>From:</strong> Adams, Brian M (<em>briadam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 15:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10147.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10147.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, I wasn't aware of the relative indexing or sequential mapper capabilities.  I will check those out and report back if I still have a feature request. -- Brian
<br>
<p>________________________________
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Thursday, July 30, 2009 12:26 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)
<br>
<p><p>On Jul 30, 2009, at 11:49 AM, Adams, Brian M wrote:
<br>
<p>Apologies if I'm being confusing; I'm probably trying to get at atypical use cases.  M and N  need not correspond to the number of nodes/ppn nor ppn/nodes available.  By node vs. slot doesn't much matter, as long as in the end I don't oversubscribe any node.  By slot might be good for efficiency in some apps, but I can't make a general case for it.
<br>
<p>I think what you proposed offers some help in the case where N is an integer multiple of the number of available nodes, but perhaps not in other cases.  I must be missing something here, so instead of being fully general, perhaps consider a  specific case.  Suppose we have 4 nodes, 8 ppn (32 slots is I think the ompi language).  I might want to schedule, for example
<br>
<p>1. M=2 simultaneous N=16 processor jobs: Here I believe what you suggested will work since N is a multiple of the available number of nodes.  I could use either npernode 4 or just bynode and I think get the same result: an even distribution of tasks.  (similar applies to, e.g., 8x4, 4x8)
<br>
<p>Yes, agreed
<br>
<p><p>2. M=16 simultaneous N=2 processor jobs: it seems if I use bynode or npernode, I would end up with 16 processes on each of the first two nodes (similar applies to, e.g., 32x1 or 10x3).  Scheduling many small jobs is a common problem for us.
<br>
<p>3. M=3 simultaneous, N=10 processor jobs: I think we'd end up with this distribution (where A-D are nodes and 0-2 jobs)
<br>
<p>A 0 0 0 1 1 1 2 2 2
<br>
B 0 0 0 1 1 1 2 2 2
<br>
C 0 0   1 1   2 2
<br>
D 0 0   1 1   2 2
<br>
<p>where A and B are over-subscribed and there are more than the two unused slots I'd expect in the whole allocation.
<br>
<p>Again, I can manage all these via a script that partitions the machine files, just wondering which scenarios OpenMPI can manage.
<br>
<p><p>Have you looked at the relative indexing in 1.3.3? You could specify any of these in relative index terms, and have one &quot;hostfile&quot; that would support 16x2 operations. This would work then for any allocation.
<br>
<p>Your launch script could even just do it, something like this:
<br>
<p>mpirun -n 2 -host +n0:1,+n1:1 app
<br>
mpirun -n 2 -host +n0:2,+n1:2 app
<br>
<p>etc. Obviously, you could compute the relative indexing and just stick it in as required.
<br>
<p>Likewise, you could use the new &quot;seq&quot; (sequential) mapper to achieve any desired layout, again utilizing relative indexing to avoid having to create a special hostfile for each run.
<br>
<p>Note that in all cases, you can specify a -n N that will tell OMPI to only execute N processes, regardless of what is in the sequential mapper file or -host.
<br>
<p>If none of those work well, please let me know. I'm happy to create the required capability as I'm sure LANL will use it too (know of several similar cases here, but the current options seem okay for them).
<br>
<p>Thanks!
<br>
Brian
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, July 29, 2009 4:19 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Multiple mpiexec's within a job
<br>
(schedule within a scheduled machinefile/job allocation)
<br>
<p>Oh my - that does take me back a long way! :-)
<br>
<p>Do you need these processes to be mapped byslot (i.e., do you
<br>
care if the process ranks are sharing nodes)? If not, why not
<br>
add &quot;-bynode&quot; to your cmd line?
<br>
<p>Alternatively, given the mapping you want, just do
<br>
<p>mpirun -npernode 1 application.exe
<br>
<p>This would launch one copy on each of your N nodes. So if you
<br>
fork M times, you'll wind up with the exact pattern you
<br>
wanted. And, as each one exits, you could immediately launch
<br>
a replacement without worrying about oversubscription.
<br>
<p>Does that help?
<br>
Ralph
<br>
<p>PS. we dropped that &quot;persistent&quot; operation - caused way too
<br>
many problems with cleanup and other things. :-)
<br>
<p>On Jul 29, 2009, at 3:46 PM, Adams, Brian M wrote:
<br>
<p>Hi Ralph (all),
<br>
<p>I'm resurrecting this 2006 thread for a status check.  The
<br>
new 1.3.x
<br>
machinefile behavior is great (thanks!) -- I can use
<br>
machinefiles to
<br>
manage multiple simultaneous mpiruns within a single torque
<br>
allocation (where the hosts are a subset of $PBS_NODEFILE).
<br>
However, this requires some careful management of machinefiles.
<br>
<p>I'm curious if OpenMPI now directly supports the behavior I need,
<br>
described in general in the quote below.  Specifically,
<br>
given a single
<br>
PBS/Torque allocation of M*N processors, I will run a
<br>
serial program
<br>
that will fork M times.  Each of the M forked processes
<br>
calls 'mpirun -np N application.exe' and blocks until completion.
<br>
This seems akin to the case you described of &quot;mpiruns executed in
<br>
separate windows/prompts.&quot;
<br>
<p>What I'd like to see is the M processes &quot;tiled&quot; across the
<br>
available
<br>
slots, so all M*N processors are used.  What I see instead
<br>
appears at
<br>
face value to be the first N resources being oversubscribed M times.
<br>
<p>Also, when one of the forked processes returns, I'd like to
<br>
be able to
<br>
spawn another and have its mpirun schedule on the resources
<br>
freed by
<br>
the previous one that exited.  Is any of this possible?
<br>
<p>I tried starting an orted (1.3.3, roughly as you suggested
<br>
below), but
<br>
got this error:
<br>
<p>orted --daemonize
<br>
[gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
runtime/orte_init.c at line 125
<br>
<p>----------------------------------------------------------------------
<br>
---- It looks like orte_init failed for some reason; your parallel
<br>
process is likely to abort.  There are many reasons that a parallel
<br>
process can fail during orte_init; some of which are due to
<br>
configuration or environment problems.  This failure
<br>
appears to be an
<br>
internal failure; here's some additional information (which
<br>
may only
<br>
be relevant to an Open MPI developer):
<br>
<p>orte_ess_base_select failed
<br>
--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
<p>----------------------------------------------------------------------
<br>
---- [gy8:25871] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
<br>
found in file
<br>
orted/orted_main.c at line 323
<br>
<p>I spared the debugging info as I'm not even sure this is a correct
<br>
invocation...
<br>
<p>Thanks for any suggestions you can offer!
<br>
Brian
<br>
----------
<br>
Brian M. Adams, PhD (briadam_at_[hidden]&lt;mailto:briadam_at_[hidden]&gt;) Optimization and
<br>
Uncertainty
<br>
Quantification Sandia National Laboratories, Albuquerque, NM
<br>
<a href="http://www.sandia.gov/~briadam">http://www.sandia.gov/~briadam</a>
<br>
<p><p>From: Ralph Castain (rhc_at_[hidden])
<br>
Date: 2006-12-12 00:46:59
<br>
<p>Hi Chris
<br>
<p><p>Some of this is doable with today's code....and one of these
<br>
behaviors is not. :-(
<br>
<p><p>Open MPI/OpenRTE can be run in &quot;persistent&quot; mode - this allows
<br>
multiple jobs to share the same allocation. This works much as you
<br>
describe (syntax is slightly different, of
<br>
course!) - the first mpirun will map using whatever mode was
<br>
requested, then the next mpirun will map starting from where the
<br>
first one left off.
<br>
<p><p>I *believe* you can run each mpirun in the background.
<br>
However, I don't know if this has really been tested enough to
<br>
support such a claim. All testing that I know about to-date has
<br>
executed mpirun in the foreground - thus, your example
<br>
would execute
<br>
sequentially instead of in parallel.
<br>
<p><p>I know people have tested multiple mpirun's operating in parallel
<br>
within a single allocation (i.e., persistent mode) where
<br>
the mpiruns
<br>
are executed in separate windows/prompts.
<br>
So I suspect you could do something like you describe -
<br>
just haven't
<br>
personally verified it.
<br>
<p><p>Where we definitely differ is that Open MPI/RTE will *not* block
<br>
until resources are freed up from the prior mpiruns.
<br>
Instead, we will attempt to execute each mpirun immediately - and
<br>
will error out the one(s) that try to execute without sufficient
<br>
resources. I imagine we could provide the kind of &quot;flow
<br>
control&quot; you
<br>
describe, but I'm not sure when that might happen.
<br>
<p><p>I am (in my copious free time...haha) working on an &quot;orteboot&quot;
<br>
program that will startup a virtual machine to make the persistent
<br>
mode of operation a little easier. For now, though, you
<br>
can do it by:
<br>
<p><p>1. starting up the &quot;server&quot; using the following command:
<br>
orted --seed --persistent --scope public [--universe foo]
<br>
<p><p>2. do your mpirun commands. They will automagically find
<br>
the &quot;server&quot;
<br>
and connect to it. If you specified a universe name when
<br>
starting the
<br>
server, then you must specify the same universe name on
<br>
your mpirun
<br>
commands.
<br>
<p><p>When you are done, you will have to (unfortunately)
<br>
manually &quot;kill&quot;
<br>
the server and remove its session directory. I have a
<br>
program called
<br>
&quot;ortehalt&quot;
<br>
in the trunk that will do this cleanly for you, but it
<br>
isn't yet in
<br>
the release distributions. You are welcome to use it,
<br>
though, if you
<br>
are working with the trunk - I can't promise it is
<br>
bulletproof yet,
<br>
but it seems to be working.
<br>
<p><p>Ralph
<br>
<p><p>On 12/11/06 8:07 PM, &quot;Maestas, Christopher Daniel&quot;
<br>
&lt;cdmaest_at_[hidden]&gt;
<br>
wrote:
<br>
<p><p>Hello,
<br>
<p>Sometimes we have users that like to do from within a single job
<br>
(think schedule within an job scheduler allocation):
<br>
&quot;mpiexec -n X myprog&quot;
<br>
&quot;mpiexec -n Y myprog2&quot;
<br>
Does mpiexec within Open MPI keep track of the node list it
<br>
is using
<br>
if it binds to a particular scheduler?
<br>
For example with 4 nodes (2ppn SMP):
<br>
&quot;mpiexec -n 2 myprog&quot;
<br>
&quot;mpiexec -n 2 myprog2&quot;
<br>
&quot;mpiexec -n 1 myprog3&quot;
<br>
And assume this is by-slot allocation we would have the following
<br>
allocation:
<br>
node1 - processor1 - myprog
<br>
- processor2 - myprog
<br>
node2 - processor1 - myprog2
<br>
- processor2 - myprog2
<br>
And for a by-node allocation:
<br>
node1 - processor1 - myprog
<br>
- processor2 - myprog2
<br>
node2 - processor1 - myprog
<br>
- processor2 - myprog2
<br>
<p>I think this is possible using ssh cause it shouldn't
<br>
really matter
<br>
how many times it spawns, but with something like torque it
<br>
would get
<br>
restricted to a max process launch of 4. We would want the third
<br>
mpiexec to block processes and eventually be run on the first
<br>
available node allocation that frees up from myprog or
<br>
myprog2 ....
<br>
<p>For example for torque, we had to add the following to
<br>
osc mpiexec:
<br>
<pre>
---
Finally, since only one mpiexec can be the master at a
time, if your
code setup requires that mpiexec exit to get a result, you
can start a
&quot;dummy&quot;
mpiexec first in your batch
job:
mpiexec -server
It runs no tasks itself but handles the connections of
other transient
mpiexec clients.
It will shut down cleanly when the batch job exits or you
may kill the
server explicitly.
If the server is killed with SIGTERM (or HUP or INT), it
will exit
with a status of zero if there were no clients connected at
the time.
If there were still clients using the server, the server
will kill all
their tasks, disconnect from the clients, and exit with status 1.
---
So a user ran:
mpiexec -server
mpiexec -n 2 myprog
mpiexec -n 2 myprog2
And the server kept track of the allocation ... I would
think that the
orted could do this?
Sorry if this sounds confusing ... But I'm sure it will
clear up with
any further responses I make. :-) -cdm
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10148/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10147.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>In reply to:</strong> <a href="10147.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="10149.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
