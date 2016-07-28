<?
$subject_val = "Re: [OMPI users] qsub - mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 17:12:28 2008" -->
<!-- isoreceived="20080929211228" -->
<!-- sent="Mon, 29 Sep 2008 16:12:00 -0500" -->
<!-- isosent="20080929211200" -->
<!-- name="Zhiliang Hu" -->
<!-- email="zhu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub - mpirun problem" -->
<!-- id="200809292112.m8TLCIWp030986_at_despam-11.iastate.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="31399_1222721194_m8TKkVMS012588_6F99B227-4218-4584-84E1-EF 8CBECDB7F3_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2008-09-29 17:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 10:45 PM 9/29/2008 +0200, you wrote:
<br>
<span class="quotelev1">&gt;Am 29.09.2008 um 22:33 schrieb Zhiliang Hu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;At 07:37 PM 9/29/2008 +0200, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&quot;-l nodes=6:ppn=2&quot; is all I have to specify the node requests:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;this might help: <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Essentially the examples given on this web is no difference from  
</span><br>
<span class="quotelev2">&gt;&gt;what I did.
</span><br>
<span class="quotelev2">&gt;&gt;Only thing new is, I suppose &quot;qsub -I &quot; is for interactive mode.   
</span><br>
<span class="quotelev2">&gt;&gt;When I did this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  qsub -I -l nodes=7 mpiblastn.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;It hangs on &quot;qsub: waiting for job 798.nagrp2.ansci.iastate.edu to  
</span><br>
<span class="quotelev2">&gt;&gt;start&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;UNIX_PROMPT&gt; qsub -l nodes=6:ppn=2 /path/to/mpi_program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;where &quot;mpi_program&quot; is a file with one line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /path/to/mpirun -np 12 /path/to/my_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Can you please try this jobscript instead:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;#!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;set | grep PBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;/path/to/mpirun /path/to/my_program
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;All should be handled by Open MPI automatically. With the &quot;set&quot; bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;command you will get a list with all defined variables for further
</span><br>
<span class="quotelev3">&gt;&gt;&gt;analysis; and where you can check for the variables set by Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;-- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&quot;set | grep PBS&quot; part had nothing in output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Strange - you checked the .o end .e files of the job? - Reuti
</span><br>
<p>There is nothing in -o nor -e output.  I had to kill the job.
<br>
I checked torque log, it shows (/var/spool/torque/server_logs):
<br>
<p>09/29/2008 15:52:16;0100;PBS_Server;Job;799.xxx.xxx.xxx;enqueuing into default, state 1 hop 1
<br>
09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Queued at request of zhu_at_xxx.xxx.xxx, owner = zhu_at_xxx.xxx.xxx, job name = mpiblastn.sh, queue = default
<br>
09/29/2008 15:52:16;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent command new
<br>
09/29/2008 15:52:16;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job Modified at request of Scheduler_at_xxx.xxx.xxx
<br>
09/29/2008 15:52:27;0008;PBS_Server;Job;799.xxx.xxx.xxx;Job deleted at request of zhu_at_xxx.xxx.xxx
<br>
09/29/2008 15:52:27;0100;PBS_Server;Job;799.xxx.xxx.xxx;dequeuing from default, state EXITING
<br>
09/29/2008 15:52:27;0040;PBS_Server;Svr;xxx.xxx.xxx;Scheduler sent command term
<br>
09/29/2008 15:52:47;0001;PBS_Server;Svr;PBS_Server;is_request, bad attempt to connect from 172.16.100.1:1021 (address not trusted - check entry in server_priv/nodes)
<br>
<p>where the server_priv/nodes has:
<br>
node001 np=4
<br>
node002 np=4
<br>
node003 np=4
<br>
node004 np=4
<br>
node005 np=4
<br>
node006 np=4
<br>
node007 np=4
<br>
<p>which was set up by the vender.
<br>
<p>What is &quot;address not trusted&quot;?
<br>
<p>Zhiliang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6775.php">Reuti: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="6751.php">Zhiliang Hu: "[OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Reply:</strong> <a href="6777.php">Doug Reeder: "Re: [OMPI users] qsub - mpirun problem"</a>
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
