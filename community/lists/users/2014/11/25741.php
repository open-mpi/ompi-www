<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 11 07:52:38 2014" -->
<!-- isoreceived="20141111125238" -->
<!-- sent="Tue, 11 Nov 2014 12:51:52 +0000" -->
<!-- isosent="20141111125152" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="814E6D361B66804FBF146E8AB57FE1CC2E32A628_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8E6FC616-4E1D-436F-A8C3-9069D6744068_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-11 07:51:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25740.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Reuti and Ralph
<br>

<br>
Below is the output of the run for openmpi 1.8.3 with this line
<br>

<br>
mpirun -np $NSLOTS --display-map --display-allocation --cpus-per-proc 1 $exe
<br>

<br>

<br>
master=cn6050
<br>
PE=orte
<br>
JOB_ID=2482923
<br>
Got 32 slots.
<br>
slots:
<br>
cn6050 16 par6.q_at_cn6050 &lt;NULL&gt;
<br>
cn6045 16 par6.q_at_cn6045 &lt;NULL&gt;
<br>
Tue Nov 11 12:37:37 GMT 2014
<br>

<br>
======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cn6050: slots=16 max_slots=0 slots_inuse=0 state=UP
<br>
=================================================================
<br>
Data for JOB [57374,1] offset 0
<br>

<br>
========================   JOB MAP   ========================
<br>

<br>
Data for node: cn6050  Num slots: 16   Max slots: 0    Num procs: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [57374,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [57374,1] App: 0 Process rank: 1
<br>

<br>
&#226;&#128;&#166;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [57374,1] App: 0 Process rank: 31
<br>

<br>

<br>
Also
<br>
ompi_info | grep grid
<br>
gives                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.8.3)
<br>
and
<br>
ompi_info | grep psm
<br>
gives                 MCA mtl: psm (MCA v2.0, API v2.0, Component v1.8.3)
<br>
because the intercoonect is TrueScale/QLogic
<br>

<br>
and
<br>

<br>
setenv OMPI_MCA_mtl &quot;psm&quot;
<br>

<br>
is set in the script. This is the PE
<br>

<br>
pe_name           orte
<br>
slots             4000
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>

<br>
Many thanks
<br>

<br>
Henk
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: 10 November 2014 05:07
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] oversubscription of slots with GridEngine
<br>

<br>
You might also add the &#226;&#128;&#148;display-allocation flag to mpirun so we can see what it thinks the allocation looks like. If there are only 16 slots on the node, it seems odd that OMPI would assign 32 procs to it unless it thinks there is only 1 node in the job, and oversubscription is allowed (which it won&#226;&#128;&#153;t be by default if it read the GE allocation)
<br>

<br>

<br>
On Nov 9, 2014, at 9:56 AM, Reuti &lt;reuti_at_[hidden]&lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
<br>

<br>
Hi,
<br>

<br>

<br>
Am 09.11.2014 um 18:20 schrieb SLIM H.A. &lt;h.a.slim_at_[hidden]&lt;mailto:h.a.slim_at_[hidden]&gt;&gt;:
<br>

<br>
We switched on hyper threading on our cluster with two eight core sockets per node (32 threads per node).
<br>

<br>
We configured  gridengine with 16 slots per node to allow the 16 extra threads for kernel process use but this apparently does not work. Printout of the gridengine hostfile shows that for a 32 slots job, 16 slots are placed on each of two nodes as expected. Including the openmpi --display-map option shows that all 32 processes are incorrectly  placed on the head node.
<br>

<br>
You mean the master node of the parallel job I assume.
<br>

<br>

<br>
Here is part of the output
<br>

<br>
master=cn6083
<br>
PE=orte
<br>

<br>
What allocation rule was defined for this PE - &quot;control_slave yes&quot; is set?
<br>

<br>

<br>
JOB_ID=2481793
<br>
Got 32 slots.
<br>
slots:
<br>
cn6083 16 par6.q_at_cn6083&lt;mailto:par6.q_at_cn6083&gt; &lt;NULL&gt;
<br>
cn6085 16 par6.q_at_cn6085&lt;mailto:par6.q_at_cn6085&gt; &lt;NULL&gt;
<br>
Sun Nov  9 16:50:59 GMT 2014
<br>
Data for JOB [44767,1] offset 0
<br>

<br>
========================   JOB MAP   ========================
<br>

<br>
Data for node: cn6083  Num slots: 16   Max slots: 0    Num procs: 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 1
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [44767,1] App: 0 Process rank: 31
<br>

<br>
=============================================================
<br>

<br>
I found some related mailings about a new warning in 1.8.2 about oversubscription and  I tried a few options to avoid the use of the extra threads for MPI tasks by openmpi without success, e.g. variants of
<br>

<br>
--cpus-per-proc 1
<br>
--bind-to-core
<br>

<br>
and some others. Gridengine treats hw threads as cores==slots (?) but the content of $PE_HOSTFILE suggests it distributes the slots sensibly  so it seems there is an option for openmpi required to get 16 cores per node?
<br>

<br>
Was Open MPI configured with --with-sge?
<br>

<br>
-- Reuti
<br>

<br>

<br>
I tried both 1.8.2, 1.8.3 and also 1.6.5.
<br>

<br>
Thanks for some clarification that anyone can give.
<br>

<br>
Henk
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25718.php">http://www.open-mpi.org/community/lists/users/2014/11/25718.php</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25719.php">http://www.open-mpi.org/community/lists/users/2014/11/25719.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25741/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Previous message:</strong> <a href="25740.php">Emmanuel Thom&#195;&#169;: "Re: [OMPI users] File-backed mmaped I/O and openib btl."</a>
<li><strong>In reply to:</strong> <a href="25720.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25747.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Reply:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
