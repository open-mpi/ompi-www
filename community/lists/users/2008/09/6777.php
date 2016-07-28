<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:24:03 2008" -->
<!-- isoreceived="20080929212403" -->
<!-- sent="Mon, 29 Sep 2008 14:15:52 -0700" -->
<!-- isosent="20080929211552" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="F5FF317B-297F-4029-8001-356DA5348C2C_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809292112.m8TLCIWp030986_at_despam-11.iastate.edu" -->
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
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 17:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you may not have setup paswordless ssh between all  
<br>
your nodes.
<br>
<p>Doug Reeder
<br>
On Sep 29, 2008, at 2:12 PM, Zhiliang Hu wrote:
<br>
<p><span class="quotelev1">&gt; At 10:45 PM 9/29/2008 +0200, you wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 29.09.2008 um 22:33 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At 07:37 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Essentially the examples given on this web is no difference from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what I did.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I did this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  qsub -I -l nodes=7 mpiblastn.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you please try this jobscript instead:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set | grep PBS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All should be handled by Open MPI automatically. With the &quot;set&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command you will get a list with all defined variables for further
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is nothing in -o nor -e output.  I had to kill the job.
</span><br>
<span class="quotelev1">&gt; I checked torque log, it shows (/var/spool/torque/server_logs):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing  
</span><br>
<span class="quotelev1">&gt; into default, state 1 hop 1
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued  
</span><br>
<span class="quotelev1">&gt; at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name =  
</span><br>
<span class="quotelev1">&gt; mpiblastn.sh, queue = default
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev1">&gt; command new
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job  
</span><br>
<span class="quotelev1">&gt; Modified at request of Scheduler_at_xxx.xxx.xxx
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job deleted  
</span><br>
<span class="quotelev1">&gt; at request of zhu_at_xxx.xxx.xxx
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing  
</span><br>
<span class="quotelev1">&gt; from default, state EXITING
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev1">&gt; command term
</span><br>
<span class="quotelev1">&gt; 09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad  
</span><br>
<span class="quotelev1">&gt; attempt to connect from 172.16.100.1:1021 (address not trusted -  
</span><br>
<span class="quotelev1">&gt; check entry in server_priv/nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where the server_priv/nodes has:
</span><br>
<span class="quotelev1">&gt; node001 np=4
</span><br>
<span class="quotelev1">&gt; node002 np=4
</span><br>
<span class="quotelev1">&gt; node003 np=4
</span><br>
<span class="quotelev1">&gt; node004 np=4
</span><br>
<span class="quotelev1">&gt; node005 np=4
</span><br>
<span class="quotelev1">&gt; node006 np=4
</span><br>
<span class="quotelev1">&gt; node007 np=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which was set up by the vender.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is &quot;address not trusted&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhiliang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6778.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6776.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
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
