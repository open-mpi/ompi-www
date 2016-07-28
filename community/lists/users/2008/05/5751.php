<?
$subject_val = "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 14:25:53 2008" -->
<!-- isoreceived="20080529182553" -->
<!-- sent="Thu, 29 May 2008 11:25:40 -0700" -->
<!-- isosent="20080529182540" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque" -->
<!-- id="df8c8a6d0805291125qc37f205t26c272be99632ae0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2D17220-4ABD-4437-AF47-A3B582C275B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 14:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5750.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have verified that maui is killing the job.  I actually ran into
<br>
this with another user all of a sudden.  I don't know why its only
<br>
effecting a few currently.  Here's the maui log extract for a current
<br>
run of this users' program:
<br>
<p>-----------
<br>
[root_at_aeolus log]# grep 2120 *
<br>
maui.log:05/29 09:01:45 INFO:     job '2118' loaded:   1   patton
<br>
patton   1800       Idle   0 1212076905   [NONE] [NONE] [NONE] &gt;=
<br>
0 &gt;=      0 [NONE] 1212076905
<br>
maui.log:05/29 09:23:40 INFO:     job '2119' loaded:   1   patton
<br>
patton   1800       Idle   0 1212078218   [NONE] [NONE] [NONE] &gt;=
<br>
0 &gt;=      0 [NONE] 1212078220
<br>
maui.log:05/29 09:26:19 MPBSJobLoad(2120,2120.aeolus.eecs.wsu.edu,J,TaskList,0)
<br>
maui.log:05/29 09:26:19 MReqCreate(2120,SrcRQ,DstRQ,DoCreate)
<br>
maui.log:05/29 09:26:19 MJobSetCreds(2120,patton,patton,)
<br>
maui.log:05/29 09:26:19 INFO:     default QOS for job 2120 set to
<br>
DEFAULT(0) (P:DEFAULT,U:[NONE],G:[NONE],A:[NONE],C:[NONE])
<br>
maui.log:05/29 09:26:19 INFO:     default QOS for job 2120 set to
<br>
DEFAULT(0) (P:DEFAULT,U:[NONE],G:[NONE],A:[NONE],C:[NONE])
<br>
maui.log:05/29 09:26:19 INFO:     default QOS for job 2120 set to
<br>
DEFAULT(0) (P:DEFAULT,U:[NONE],G:[NONE],A:[NONE],C:[NONE])
<br>
maui.log:05/29 09:26:19 INFO:     job '2120' loaded:   1   patton
<br>
patton   1800       Idle   0 1212078378   [NONE] [NONE] [NONE] &gt;=
<br>
0 &gt;=      0 [NONE] 1212078379
<br>
maui.log:05/29 09:26:19 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:26:19 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:26:19 INFO:     8 feasible tasks found for job
<br>
2120:0 in partition DEFAULT (1 Needed)
<br>
maui.log:05/29 09:26:19 INFO:     1 requested hostlist tasks allocated
<br>
for job 2120 (0 remain)
<br>
maui.log:05/29 09:26:19 MJobStart(2120)
<br>
maui.log:05/29 09:26:19 MJobDistributeTasks(2120,base,NodeList,TaskMap)
<br>
maui.log:05/29 09:26:19 MAMAllocJReserve(2120,RIndex,ErrMsg)
<br>
maui.log:05/29 09:26:19 MRMJobStart(2120,Msg,SC)
<br>
maui.log:05/29 09:26:19 MPBSJobStart(2120,base,Msg,SC)
<br>
maui.log:05/29 09:26:19
<br>
MPBSJobModify(2120,Resource_List,Resource,compute-0-0.local)
<br>
maui.log:05/29 09:26:19 MPBSJobModify(2120,Resource_List,Resource,1)
<br>
maui.log:05/29 09:26:19 INFO:     job '2120' successfully started
<br>
maui.log:05/29 09:26:19 MStatUpdateActiveJobUsage(2120)
<br>
maui.log:05/29 09:26:19 MResJCreate(2120,MNodeList,00:00:00,ActiveJob,Res)
<br>
maui.log:05/29 09:26:19 INFO:     starting job '2120'
<br>
maui.log:05/29 09:26:50 INFO:     node compute-0-0.local has joblist
<br>
'0/2120.aeolus.eecs.wsu.edu'
<br>
maui.log:05/29 09:26:50 INFO:     job 2120 adds 1 processors per task
<br>
to node compute-0-0.local (1)
<br>
maui.log:05/29 09:26:50 MPBSJobUpdate(2120,2120.aeolus.eecs.wsu.edu,TaskList,0)
<br>
maui.log:05/29 09:26:50 MStatUpdateActiveJobUsage(2120)
<br>
maui.log:05/29 09:26:50 MResDestroy(2120)
<br>
maui.log:05/29 09:26:50 MResChargeAllocation(2120,2)
<br>
maui.log:05/29 09:26:50 MResJCreate(2120,MNodeList,-00:00:31,ActiveJob,Res)
<br>
maui.log:05/29 09:26:50 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:26:50 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:27:21 INFO:     node compute-0-0.local has joblist
<br>
'0/2120.aeolus.eecs.wsu.edu'
<br>
maui.log:05/29 09:27:21 INFO:     job 2120 adds 1 processors per task
<br>
to node compute-0-0.local (1)
<br>
maui.log:05/29 09:27:21 MPBSJobUpdate(2120,2120.aeolus.eecs.wsu.edu,TaskList,0)
<br>
maui.log:05/29 09:27:21 MStatUpdateActiveJobUsage(2120)
<br>
maui.log:05/29 09:27:21 MResDestroy(2120)
<br>
maui.log:05/29 09:27:21 MResChargeAllocation(2120,2)
<br>
maui.log:05/29 09:27:21 MResJCreate(2120,MNodeList,-00:01:02,ActiveJob,Res)
<br>
maui.log:05/29 09:27:21 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:27:21 INFO:     job '2120' Priority:        1
<br>
maui.log:05/29 09:27:21 INFO:     job 2120 exceeds requested proc
<br>
limit (3.72 &gt; 1.00)
<br>
maui.log:05/29 09:27:21 MSysRegEvent(JOBRESVIOLATION:  job '2120' in
<br>
state 'Running' has exceeded PROC resource limit (372 &gt; 100) (action
<br>
CANCEL will be taken)  job start time: Thu May 29 09:26:19
<br>
maui.log:05/29 09:27:21 MRMJobCancel(2120,job violates resource
<br>
utilization policies,SC)
<br>
maui.log:05/29 09:27:21 MPBSJobCancel(2120,base,CMsg,Msg,job violates
<br>
resource utilization policies)
<br>
maui.log:05/29 09:27:21 INFO:     job '2120' successfully cancelled
<br>
maui.log:05/29 09:27:27 INFO:     active PBS job 2120 has been removed
<br>
from the queue.  assuming successful completion
<br>
maui.log:05/29 09:27:27 MJobProcessCompleted(2120)
<br>
maui.log:05/29 09:27:27 MAMAllocJDebit(A,2120,SC,ErrMsg)
<br>
maui.log:05/29 09:27:27 INFO:     job '              2120' completed.
<br>
QueueTime:      1  RunTime:     62  Accuracy:  3.44  XFactor:  0.04
<br>
maui.log:05/29 09:27:27 INFO:     job '2120' completed  X: 0.035000
<br>
T: 62  PS: 62  A: 0.034444
<br>
maui.log:05/29 09:27:27 MJobSendFB(2120)
<br>
maui.log:05/29 09:27:27 INFO:     job usage sent for job '2120'
<br>
maui.log:05/29 09:27:27 MJobRemove(2120)
<br>
maui.log:05/29 09:27:27 MResDestroy(2120)
<br>
maui.log:05/29 09:27:27 MResChargeAllocation(2120,2)
<br>
maui.log:05/29 09:27:27 MJobDestroy(2120)
<br>
maui.log:05/29 09:42:54 INFO:     job '2121' loaded:   1 sledburg
<br>
sledburg   1800       Idle   0 1212079373   [NONE] [NONE] [NONE] &gt;=
<br>
&nbsp;&nbsp;0 &gt;=      0 [NONE] 1212079374
<br>
maui.log:05/29 09:43:34 INFO:     job '2122' loaded:   1 sledburg
<br>
sledburg   1800       Idle   0 1212079413   [NONE] [NONE] [NONE] &gt;=
<br>
&nbsp;&nbsp;0 &gt;=      0 [NONE] 1212079414
<br>
[root_at_aeolus log]#
<br>
------------------------------
<br>
<p>Any thoughts?
<br>
<p>Thank you.
<br>
<p>On Wed, May 28, 2008 at 5:21 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; (I'm not a subscriber to the torqueusers or mauiusers lists -- I'm not
</span><br>
<span class="quotelev1">&gt; sure my post will get through)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if Jan's idea has merit -- if Torque is killing the job for
</span><br>
<span class="quotelev1">&gt; some other reason (i.e., not wallclock).  The message printed by
</span><br>
<span class="quotelev1">&gt; mpirun (&quot;mpirun: killing job...&quot;) is *only* displayed if mpirun
</span><br>
<span class="quotelev1">&gt; receives a SIGINT or SIGTERM.  So perhaps some other resource limit is
</span><br>
<span class="quotelev1">&gt; being reached...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to have Torque log if it is killing a job for some
</span><br>
<span class="quotelev1">&gt; reason?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2008, at 7:02 PM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yep.  Wall time is no where near violation (dies about 2 minutes into
</span><br>
<span class="quotelev2">&gt;&gt; a 30 minute allocation).  I did a ulimit -a through qsub and direct on
</span><br>
<span class="quotelev2">&gt;&gt; the node (as the same user in both cases), and the results were
</span><br>
<span class="quotelev2">&gt;&gt; identical (most items were unlimited).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any other ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Jim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 27, 2008 at 9:25 AM, Jan Ploski &lt;Jan.Ploski_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This suggestion is rather trivial, but since you have not mentioned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything in this area:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you sure that the job is not exceeding resource limits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (walltime -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enforced by TORQUE, or rlimits such as memory - enforced by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but they could be set differently in TORQUE and your manual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invocations of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jan Ploski
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Previous message:</strong> <a href="5750.php">Andreas Sch&#228;fer: "Re: [OMPI users] Help: Program Terminated"</a>
<li><strong>In reply to:</strong> <a href="5744.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<li><strong>Reply:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
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
