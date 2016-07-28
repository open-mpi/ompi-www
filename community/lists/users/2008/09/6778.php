<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:31:04 2008" -->
<!-- isoreceived="20080929213104" -->
<!-- sent="Mon, 29 Sep 2008 16:30:53 -0500" -->
<!-- isosent="20080929213053" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809292130.m8TLUrDv004298_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="31433_1222723468_m8TLOPGp010573_F5FF317B-297F-4029-8001-35 6DA5348C2C_at_rain.org" -->
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
<strong>From:</strong> Zhiliang Hu (<em>zhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 17:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 02:15 PM 9/29/2008 -0700, you wrote:
<br>
<span class="quotelev1">&gt;It sounds like you may not have setup paswordless ssh between all  
</span><br>
<span class="quotelev1">&gt;your nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Doug Reeder
</span><br>
<p>That's not the case.  paswordless ssh is set up and it works fine.
<br>
-- that's how I can do &quot;mpirun -np 6 -machinefiles ......&quot; fine.
<br>
<p>Zhiliang
<br>
<p><p><span class="quotelev1">&gt;On Sep 29, 2008, at 2:12 PM, Zhiliang Hu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;At 10:45 PM 9/29/2008 +0200, you wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Am 29.09.2008 um 22:33 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;At 07:37 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Essentially the examples given on this web is no difference from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;what I did.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;When I did this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qsub -I -l nodes=7 mpiblastn.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;start&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;/path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;Can you please try this jobscript instead:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;#!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;set | grep PBS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;/path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;All should be handled by Open MPI automatically. With the &quot;set&quot;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;bash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;command you will get a list with all defined variables for further
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;-- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;There is nothing in -o nor -e output.  I had to kill the job.
</span><br>
<span class="quotelev2">&gt;&gt;I checked torque log, it shows (/var/spool/torque/server_logs):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing  
</span><br>
<span class="quotelev2">&gt;&gt;into default, state 1 hop 1
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued  
</span><br>
<span class="quotelev2">&gt;&gt;at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name =  
</span><br>
<span class="quotelev2">&gt;&gt;mpiblastn.sh, queue = default
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev2">&gt;&gt;command new
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job  
</span><br>
<span class="quotelev2">&gt;&gt;Modified at request of Scheduler_at_xxx.xxx.xxx
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job deleted  
</span><br>
<span class="quotelev2">&gt;&gt;at request of zhu_at_xxx.xxx.xxx
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing  
</span><br>
<span class="quotelev2">&gt;&gt;from default, state EXITING
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev2">&gt;&gt;command term
</span><br>
<span class="quotelev2">&gt;&gt;09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad  
</span><br>
<span class="quotelev2">&gt;&gt;attempt to connect from 172.16.100.1:1021 (address not trusted -  
</span><br>
<span class="quotelev2">&gt;&gt;check entry in server_priv/nodes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;where the server_priv/nodes has:
</span><br>
<span class="quotelev2">&gt;&gt;node001 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node002 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node003 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node004 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node005 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node006 np=4
</span><br>
<span class="quotelev2">&gt;&gt;node007 np=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;which was set up by the vender.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What is &quot;address not trusted&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Zhiliang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6779.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
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
