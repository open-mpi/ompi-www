<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 22:07:26 2006" -->
<!-- isoreceived="20061212030726" -->
<!-- sent="Mon, 11 Dec 2006 20:07:14 -0700" -->
<!-- isosent="20061212030714" -->
<!-- name="Maestas, Christopher Daniel" -->
<!-- email="cdmaest_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)" -->
<!-- id="347180497203A942A6AA82C85846CBC9034F60FC_at_ES23SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-12-11 22:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Sometimes we have users that like to do from within a single job (think
<br>
schedule within an job scheduler allocation):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mpiexec -n X myprog&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mpiexec -n Y myprog2&quot;
<br>
Does mpiexec within Open MPI keep track of the node list it is using if
<br>
it binds to a particular scheduler?
<br>
For example with 4 nodes (2ppn SMP):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mpiexec -n 2 myprog&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mpiexec -n 2 myprog2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;mpiexec -n 1 myprog3&quot;
<br>
And assume this is by-slot allocation we would have the following
<br>
allocation:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node1	- processor1 - myprog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- processor2 - myprog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node2	- processor1 - myprog2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- processor2 - myprog2
<br>
And for a by-node allocation:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node1 - processor1 - myprog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- processor2 - myprog2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node2 - processor1 - myprog
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- processor2 - myprog2
<br>
<p>I think this is possible using ssh cause it shouldn't really matter how
<br>
many times it spawns, but with something like torque it would get
<br>
restricted to a max process launch of 4.  We would want the third
<br>
mpiexec to block processes and eventually be run on the first available
<br>
node allocation that frees up from myprog or myprog2 ....
<br>
<p>For example for torque, we had to add the following to osc mpiexec:
<br>
<pre>
---
       Finally,  since only one mpiexec can be the master at a time, if
your code setup requires
       that mpiexec exit to get a result, you can start a &quot;dummy&quot;
mpiexec first  in  your  batch
       job:
             mpiexec -server
       It  runs  no tasks itself but handles the connections of other
transient mpiexec clients.
       It will shut down cleanly when the batch job exits or you may
kill the server explicitly.
       If  the server is killed with SIGTERM (or HUP or INT), it will
exit with a status of zero
       if there were no clients connected at the time.  If there were
still  clients  using  the
       server,  the server will kill all their tasks, disconnect from
the clients, and exit with
       status 1.
---
So a user ran:
	mpiexec -server
	mpiexec -n 2 myprog
	mpiexec -n 2 myprog2
And the server kept track of the allocation ... I would think that the
orted could do this? 
Sorry if this sounds confusing ... But I'm sure it will clear up with
any further responses I make. :-)
-cdm
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2348.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2346.php">Andrew J Caird: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Reply:</strong> <a href="2349.php">Ralph Castain: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10137.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
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
