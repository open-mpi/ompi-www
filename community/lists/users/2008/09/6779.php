<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:51:26 2008" -->
<!-- isoreceived="20080929215126" -->
<!-- sent="Mon, 29 Sep 2008 17:51:19 -0400" -->
<!-- isosent="20080929215119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="1C65C6FA-0737-419D-AFB3-1D998E2314B1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809292130.m8TLUrDv004298_at_despam-11.iastate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub - mpirun problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 17:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
References: &lt;200809290102.m8T12ic5022727_at_[hidden]&gt; &lt;5118_1222651029_m8T1H7c9014112_297D3668-BBFA-480C-8AA3-4DFE9A7DC71F_at_[hidden]&gt; &lt;200809290207.m8T27hg6030500_at_[hidden]&gt; &lt;19464_1222702229_m8TFURSA024528_A4205240-A331-4854-B32C-BFB27B24DF76_at_cisco.c&gt; &lt;200809291541.m8TFfQiH010787_at_[hidden]&gt; &lt;22576_1222703352_m8TFn8wB024921_BD4E4429-86D4-465A-993D-71F35DC36B23_at_cisco.c&gt; &lt;200809291627.m8TGRmxd023553_at_[hidden]&gt; &lt;12253_1222707367_m8TGu5XA015179_04150996-1DF4-439E-AB65-A6DC37B9B2F0_at_staff.u&gt; &lt;200809291706.m8TH66I0032720_at_[hidden]&gt; &lt;8951_1222709874_m8THbqlR017868_7B53C0FE-9368-4509-990F-0B05B82FF93B_at_staff.un&gt; &lt;200809292033.m8TKXr60021132_at_[hidden]&gt; &lt;31399_1222721194_m8TKkVMS012588_6F99B227-4218-4584-84E1-EF8CBECDB7F3_at_staff.u&gt; &lt;200809292112.m8TLCIWp030986_at_[hidden]&gt; &lt;31433_1222723468_m8TLOPGp010573_F5FF317B-297F-4029-8001-356DA5348C2C_at_rain.or&gt; &lt;200809292130.m8TLUrDv004298_at_[hidden]&gt;<br>
<p>X-Mailer: Apple Mail (2.929.2)
<br>
Return-Path: jsquyres_at_[hidden]
<br>
X-OriginalArrivalTime: 29 Sep 2008 21:51:21.0482 (UTC) FILETIME=[82A41EA0:01C9227D]
<br>
<p>It sounds like your Torque is not setup properly if the job never  
<br>
started.
<br>
<p>You probably want to take the conversation back to the Torque list...  
<br>
this unfortunately is not the right place to get Torque help.
<br>
<p>Sorry!
<br>
<p><p><p>On Sep 29, 2008, at 5:30 PM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; At 02:15 PM 9/29/2008 -0700, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like you may not have setup paswordless ssh between all
</span><br>
<span class="quotelev2">&gt;&gt; your nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not the case.  paswordless ssh is set up and it works fine.
</span><br>
<span class="quotelev1">&gt; -- that's how I can do &quot;mpirun -np 6 -machinefiles ......&quot; fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2008, at 2:12 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At 10:45 PM 9/29/2008 +0200, you wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 29.09.2008 um 22:33 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; At 07:37 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Essentially the examples given on this web is no difference from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what I did.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I did this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; qsub -I -l nodes=7 mpiblastn.sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you please try this jobscript instead:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; set | grep PBS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; All should be handled by Open MPI automatically. With the &quot;set&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bash
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command you will get a list with all defined variables for  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; further
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; analysis; and where you can check for the variables set by  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Torque.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is nothing in -o nor -e output.  I had to kill the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked torque log, it shows (/var/spool/torque/server_logs):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into default, state 1 hop 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiblastn.sh, queue = default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified at request of Scheduler_at_xxx.xxx.xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job deleted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at request of zhu_at_xxx.xxx.xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from default, state EXITING
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command term
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attempt to connect from 172.16.100.1:1021 (address not trusted -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check entry in server_priv/nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the server_priv/nodes has:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node001 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node002 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node003 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node004 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node005 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node006 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node007 np=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which was set up by the vender.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is &quot;address not trusted&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhiliang
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
