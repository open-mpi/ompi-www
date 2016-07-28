<?
$subject_val = "[OMPI devel] Known problems in 1.3.2 and trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 13:41:09 2009" -->
<!-- isoreceived="20090703174109" -->
<!-- sent="Fri, 3 Jul 2009 11:40:47 -0600" -->
<!-- isosent="20090703174047" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Known problems in 1.3.2 and trunk" -->
<!-- id="0E7070FE-3BBB-4ED0-8449-2D87DEA6810C_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Known problems in 1.3.2 and trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-03 13:40:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6380.php">Jeff Squyres: "[OMPI devel] review of r1302"</a>
<li><strong>Previous message:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>As has been reported, we (LANL) have been investigating a series of  
<br>
problems in the 1.3.2 release that continue to exist in the OMPI  
<br>
trunk. The recent shared memory work has helped alleviate some of  
<br>
these. However, while we had hoped that this work would solve  
<br>
everything, several problems persist. We are continuing to  
<br>
investigate, but since I have heard that others may be encountering  
<br>
similar problems, I thought it might be helpful if I presented the  
<br>
full situation to the extent possible.
<br>
<p>We are investigating two major problems that definitely appear at  
<br>
large scale, and even occasionally at scale sizes as small as 32  
<br>
procs. The problems may indeed be related, though that has not been  
<br>
proven:
<br>
<p>I. lockup of the IPoIB communication system due to kernel buffer  
<br>
overflow. We route all OOB messaging over the IPoIB network. The  
<br>
resource manager uses a completely different Ethernet, but the Panasas  
<br>
parallel file system also flows across IPoIB. OMPI's openib BTL is  
<br>
active, along with the sm BTL, but *not* the TCP BTL.
<br>
<p>The job launches without any problems and runs for some period of  
<br>
time. At some point, we suddenly receive error messages from the OOB  
<br>
indicating that connection retries have been exceeded. This happens  
<br>
with a single node, though the specific node appears random (i.e., it  
<br>
is not where mpirun is executing, nor any specific rank). All  
<br>
communication with that node subsequently fails. The error message is  
<br>
received from several processes, indicating that several ranks on  
<br>
different nodes are attempting to open a TCP connection to this node.
<br>
<p>When we investigate, we find that the kernel buffers for the IPoIB TCP  
<br>
stack are completely full and &quot;wedged&quot; - i.e., no communication can  
<br>
occur. Thus, all connection requests are being rejected.
<br>
<p>At question is the source of all these messages, and why they were not  
<br>
sent. Are they coming from OMPI, from the application, or from  
<br>
something in the system? Are they trying to go somewhere that is  
<br>
overloaded, unable to recv, or...?
<br>
<p>We don't know yet. What we do know is that the application is -not-  
<br>
generating any stdout/err messages, nor transferring any stdin. There  
<br>
could be connection handshakes flowing over the OOB in support of  
<br>
openib, but that shouldn't be overwhelming. However, there are no  
<br>
Panasas operations in effect either, making this all rather mysterious.
<br>
<p>We have a locally developed tool (called Loba) that can track the  
<br>
number of messages being sent by each rank, where they are intended to  
<br>
go, and their size. Currently the tool only does this for MPI  
<br>
communications, but I have asked that the tool be extended to cover  
<br>
the OOB. This will tell us if the message overload is somehow flowing  
<br>
through OMPI itself.  I will report on those findings as they become  
<br>
available, and file a ticket if we confirm that OMPI is the culprit.
<br>
<p><p>II. loss of communication that causes the resource manager to believe  
<br>
the node has failed. This smells somewhat similar to the above - an  
<br>
application runs for awhile, but then suddenly terminates because the  
<br>
RM does not receive a required heartbeat from one or more nodes. Since  
<br>
those heartbeats flow over TCP, our immediate thought was that this  
<br>
problem was most likely caused by the same issue as above.
<br>
<p>However, subsequent investigation doesn't appear to support that  
<br>
hypothesis. What we find is:
<br>
<p>1. one process on a node starts to run slow, falling further and  
<br>
further behind the others in terms of collective operations. Now this  
<br>
sounds like the shared memory problem, but we do -not- see memory  
<br>
usage build up in this case. Instead, the process just runs slow, and  
<br>
the job begins to slow down as a result.
<br>
<p>2. at some point, the RM aborts the job after failing to receive the  
<br>
heartbeat.
<br>
<p>Subsequent investigation reveals the following:
<br>
<p>1. the process that runs slow is ALWAYS located on the same core that  
<br>
the IB IRQ is using. Since we are using IB for the inter-node  
<br>
communication, this makes some sense. Unfortunately, IB appears to  
<br>
&quot;bind&quot; that IRQ to a single core, so the pain isn't shared - it only  
<br>
impacts a single process.
<br>
<p>2. the heartbeat doesn't utilize IPoIB, but is instead flowing over a  
<br>
separate Ethernet. However, the RM daemon on the node is not getting  
<br>
any cpu time, and thus cannot generate the heartbeat. The three  
<br>
processes (this is a 4-core system) other than the slow one are  
<br>
running the typical 99% usage, indicating they are polling hard  
<br>
waiting for a message to arrive. The &quot;slow&quot; process, however, is  
<br>
dragging along at a cpu usage of only ~10% by the time we crash -  
<br>
while it starts at 99%, it gradually drops as time progresses until  
<br>
hitting the crash point. We do not currently know -why- it loses cpu  
<br>
usage.
<br>
<p>Our best current guess is that, for some strange reason, the IB IRQ  
<br>
goes into hyper-mode and just fires like crazy. As a result, the  
<br>
process that shares that core loses its ability to process messages,  
<br>
and the RM daemon is blocked from running (why is still unknown) -  
<br>
thus causing the RM to believe the node has died and reboot the  
<br>
system. We don't know if this is being caused by the IB system getting  
<br>
flooded with messages (perhaps as in scenario I above), or some other  
<br>
reason.
<br>
<p><p>We are continuing to investigate these problems. Any thoughts are  
<br>
welcome - these have proven very, very hard to debug. Again, I offer  
<br>
this information in case others out there are seeing similar problems  
<br>
in the hope that this might help you recognize the problem, and that  
<br>
we might share in its solution.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6380.php">Jeff Squyres: "[OMPI devel] review of r1302"</a>
<li><strong>Previous message:</strong> <a href="6378.php">Eugene Loh: "Re: [OMPI devel] collectives / #1944 progress"</a>
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
