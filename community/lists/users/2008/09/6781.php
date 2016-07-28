<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 18:30:44 2008" -->
<!-- isoreceived="20080929223044" -->
<!-- sent="Mon, 29 Sep 2008 17:30:18 -0500" -->
<!-- isosent="20080929223018" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809292230.m8TMUX5L022765_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9995_1222726289_m8TMBNsZ017785_6878D750-6FD8-448C-93CC-128 21576682D_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-09-29 18:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 12:10 AM 9/30/2008 +0200, you wrote:
<br>
<p><span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;Can you please try this jobscript instead:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;#!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;set | grep PBS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;/path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;All should be handled by Open MPI automatically. With the &quot;set&quot;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;bash
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;command you will get a list with all defined variables for further
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;-- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;There is nothing in -o nor -e output.  I had to kill the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I checked torque log, it shows (/var/spool/torque/server_logs):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;into default, state 1 hop 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;mpiblastn.sh, queue = default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;command new
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Modified at request of Scheduler_at_xxx.xxx.xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;deleted at request of zhu_at_xxx.xxx.xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;from default, state EXITING
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;command term
</span><br>
<span class="quotelev3">&gt;&gt;&gt;09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;attempt to connect from 172.16.100.1:1021 (address not trusted -  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;check entry in server_priv/nodes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;As you blank out some addresses: have the nodes and the headnode one  
</span><br>
<span class="quotelev1">&gt;or two network cards installed? All the names like node001 et al. are  
</span><br>
<span class="quotelev1">&gt;known on neach node by the correct address? I.e. 172.16.100.1 = node001?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- Reuti
</span><br>
<p>There should be no problem in this regard -- the set up is by a 
<br>
commercial company. I can ssh from any node to any node (passwdless).
<br>
<p>Zhiliang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6780.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6782.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
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
