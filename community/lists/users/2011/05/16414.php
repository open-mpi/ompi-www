<?
$subject_val = "Re: [OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 15:40:17 2011" -->
<!-- isoreceived="20110502194017" -->
<!-- sent="Mon, 2 May 2011 15:40:02 -0400" -->
<!-- isosent="20110502194002" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="F01AC6C3A39C43FDBB943D8AB68FC305_at_ce.ufl.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DBEFCF1.4000004_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 15:40:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16423.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16423.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached the typical error message I've been getting. This is from a
<br>
run I initiated this morning. The first few lines or so are related to the
<br>
LS-DYNA program and are just there to let you know its running successfully
<br>
for an hour and a half.
<br>
<p>&nbsp;
<br>
<p>What's interesting is this doesn't happen on every job I run, and will recur
<br>
for the same simulation. For instance, Simulation A will run for 40 hours,
<br>
and complete successfully. Simulation B will run for 6 hours, and die from
<br>
an error. Any further attempts to run simulation B will always end from an
<br>
error. This makes me think there is some kind of bad calculation happening
<br>
that OpenMPI doesn't know how to handle, or LS-DYNA doesn't know how to pass
<br>
to OpenMPI. On the other hand, this particular simulation is one of those
<br>
&quot;benchmarks&quot; and everyone runs it. I should not be getting errors from the
<br>
FE code itself. Odd. I think I'll try this as an SMP job as well as an MPP
<br>
job over a single node and see if the issue continues. That way I can figure
<br>
out if its OpenMPI related or FE code related, but as I mentioned, I don't
<br>
think it is FE code related since others have successfully run this
<br>
particular benchmarking simulation.
<br>
<p>&nbsp;
<br>
<p>Error Message:
<br>
<p>&nbsp;Parallel execution with     56 MPP proc
<br>
<p>&nbsp;NLQ used/max               152/   152
<br>
<p>&nbsp;Start time   05/02/2011 10:02:20  
<br>
<p>&nbsp;End time     05/02/2011 11:24:46  
<br>
<p>&nbsp;Elapsed time    4946 seconds(  1 hours 22 min. 26 sec.) for    9293 cycles
<br>
<p>&nbsp;
<br>
<p>&nbsp;E r r o r   t e r m i n a t i o n
<br>
<p>--------------------------------------------------------------------------
<br>
<p>MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
<br>
<p>with errorcode -1525207032.
<br>
<p>&nbsp;
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
<p>You may or may not see output from other processes, depending on
<br>
<p>exactly when Open MPI kills them.
<br>
<p>--------------------------------------------------------------------------
<br>
<p>connect to address xx.xxx.xx.xxx port 544: Connection refused
<br>
<p>connect to address xx.xxx.xx.xxx port 544: Connection refused
<br>
<p>trying normal rsh (/usr/bin/rsh)
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun has exited due to process rank 0 with PID 24488 on
<br>
<p>node allision exiting without calling &quot;finalize&quot;. This may
<br>
<p>have caused other processes in the application to be
<br>
<p>terminated by signals sent by mpirun (as reported here).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Robert Walters
<br>
<p>&nbsp;&nbsp;_____  
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Terry Dontje
<br>
Sent: Monday, May 02, 2011 2:50 PM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OpenMPI LS-DYNA Connection refused
<br>
<p>&nbsp;
<br>
<p>On 05/02/2011 02:04 PM, Robert Walters wrote: 
<br>
<p>Terry,
<br>
<p>&nbsp;
<br>
<p>I was under the impression that all connections are made because of the
<br>
nature of the program that OpenMPI is invoking. LS-DYNA is a finite element
<br>
solver and for any given simulation I run, the cores on each node must
<br>
constantly communicate with one another to check for various occurrences
<br>
(contact with various pieces/parts, updating nodal coordinates, etc.).
<br>
<p>&nbsp;
<br>
<p>You might be right, the connections might have been established but the
<br>
error message you state (connection refused) seems out of place if the
<br>
connection was already established.
<br>
<p>Was there more error messages from OMPI other than &quot;connection refused&quot;?  If
<br>
so could you possibly provide that output to us, maybe it will give us a
<br>
hint where in the library things are messing up.
<br>
<p><p><p>I've run the program using --mca mpi_preconnect_mpi 1 and the simulation has
<br>
started itself up successfully which I think means that the mpi_preconnect
<br>
passed since all of the child processes have started up on each individual
<br>
node. Thanks for the suggestion though, it's a good place to start.
<br>
<p>Yeah, it possibly could be telling if things do work with this setting.
<br>
<p><p><p>&nbsp;
<br>
<p>I've been worried (though I have no basis for it) that messages may be
<br>
getting queued up and hitting some kind of ceiling or timeout. As a finite
<br>
element code, I think the communication occurs on a large scale. Lots of
<br>
very small packets going back and forth quickly. A few studies have been
<br>
done by the High Performance Computing Advisory Council
<br>
(<a href="http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf">http://www.hpcadvisorycouncil.com/pdf/LS-DYNA%20_analysis.pdf</a>) and they've
<br>
suggested that LS-DYNA communicates at very, very high rates (Not sure but
<br>
from pg.15 of that document they're suggesting hundreds of millions of
<br>
messages in only a few hours). Is there any kind of buffer or queue that
<br>
OpenMPI develops if messages are created too quickly? Does it dispatch them
<br>
immediately or does it attempt to apply some kind of traffic flow control?
<br>
<p>The queuing really depends on what type of calls the application is making.
<br>
If it is doing blocking sends then I wouldn't expect too much queuing
<br>
happening using the tcp btl.  As far as traffic flow control is concerned I
<br>
believe the tcp btl doesn't do any for the most part and lets tcp handle
<br>
that.  Maybe someone else on the list could chime in if I am wrong here.
<br>
<p>In the past I have seen where lots of traffic on the network and to a
<br>
particular node has cause some connections not to be established.  But I
<br>
don't know of any outstanding issue with such issues right now.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
 
 
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16414/image001.gif" alt="image001.gif">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16415.php">Jim Kusznir: "[OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<li><strong>Previous message:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16413.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16423.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16423.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16424.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
