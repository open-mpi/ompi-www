<?
$subject_val = "Re: [OMPI users] mpiblast only run in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 06:42:28 2010" -->
<!-- isoreceived="20100401104228" -->
<!-- sent="Thu, 1 Apr 2010 05:42:19 -0500" -->
<!-- isosent="20100401104219" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast only run in one node" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056751_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] mpiblast only run in one node" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 06:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12505.php">NovA: "[OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>Previous message:</strong> <a href="12503.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="12502.php">longbow leo: "[OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12513.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Reply:</strong> <a href="12513.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running your job inside a torque job? If you don't, open mpi will not have a hostlist and will assume that it should launch everything on the localhost. 
<br>

<br>
If you are launching inside a torque job, ensure that ompi was build with torque support properly - run
<br>

<br>
ompi_info | grep tm
<br>

<br>
If you see 1 or more tm plugins listed, ompi has torque support. 
<br>

<br>
Finally, make sure you're using the right mpicc and mpirun, etc. 
<br>

<br>
-jms 
<br>
Sent from my PDA. No type good.
<br>

<br>
________________________________
<br>

<br>
From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt; 
<br>
To: users_at_[hidden] &lt;users_at_[hidden]&gt; 
<br>
Sent: Thu Apr 01 02:07:08 2010
<br>
Subject: [OMPI users] mpiblast only run in one node 
<br>

<br>

<br>
Hi, 
<br>

<br>
I've installed Torque/Maui, Open MPI 1.4.1 and mpiBlast 1.6.0-beta1 in a linux Beowulf culster with 15 nodes (node1~15).
<br>

<br>
Open MPI, mpiBlast were installed and my home directory lies in a directory &quot;/data&quot; which was shared by all nodes.
<br>

<br>
Open Mpi was compiled with &quot;--with-tm&quot; to support Torque, and mpiBlast was compiled with &quot;--with-mpi&quot; to the directory where Open MPI installed.
<br>

<br>
When I run mpiBlast by mpirun in command line, like
<br>

<br>
node1 $ /data/open-mpi/bin/mpirun -np 34 /data/mpiblast/bin/mpiblast -p blastp -d nr -i test.faa -o test.out
<br>

<br>
I noticed all 34 mpiBlast processes run on node1 only.
<br>

<br>
This would not change if I submit job to Torque.
<br>

<br>
I've searched the mailing list archives but it seems won't help.
<br>

<br>
How to resolve this problem?
<br>

<br>
Any suggestion will be appreciated!
<br>

<br>

<br>
HZ Liu
<br>

<br>

<br>

<br>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-12504/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12505.php">NovA: "[OMPI users] openMPI-1.4.1 on Windows"</a>
<li><strong>Previous message:</strong> <a href="12503.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="12502.php">longbow leo: "[OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12513.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<li><strong>Reply:</strong> <a href="12513.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
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
