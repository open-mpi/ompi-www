<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 18:58:28 2008" -->
<!-- isoreceived="20080929225828" -->
<!-- sent="Tue, 30 Sep 2008 00:58:19 +0200" -->
<!-- isosent="20080929225819" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="DD896D00-40F0-4491-9863-C846302181CE_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200809292230.m8TMUX5L022765_at_despam-11.iastate.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 18:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 30.09.2008 um 00:30 schrieb Zhiliang Hu:
<br>
<p><span class="quotelev1">&gt; At 12:10 AM 9/30/2008 +0200, you wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Can you please try this jobscript instead:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; set | grep PBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; All should be handled by Open MPI automatically. With the &quot;set&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; command you will get a list with all defined variables for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; further
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; analysis; and where you can check for the variables set by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is nothing in -o nor -e output.  I had to kill the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I checked torque log, it shows (/var/spool/torque/server_logs):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; into default, state 1 hop 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiblastn.sh, queue = default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified at request of Scheduler_at_xxx.xxx.xxx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deleted at request of zhu_at_xxx.xxx.xxx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from default, state EXITING
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command term
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempt to connect from 172.16.100.1:1021 (address not trusted -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check entry in server_priv/nodes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As you blank out some addresses: have the nodes and the headnode one
</span><br>
<span class="quotelev2">&gt;&gt; or two network cards installed? All the names like node001 et al. are
</span><br>
<span class="quotelev2">&gt;&gt; known on neach node by the correct address? I.e. 172.16.100.1 =  
</span><br>
<span class="quotelev2">&gt;&gt; node001?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There should be no problem in this regard -- the set up is by a
</span><br>
<span class="quotelev1">&gt; commercial company.
</span><br>
<p>Okay, then they should solve the problem as you paid for it.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="6781.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6784.php">Terry Frankcombe: "Re: [OMPI users] qsub - mpirun problem"</a>
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
