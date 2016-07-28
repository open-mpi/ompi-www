<?
$subject_val = "Re: [OMPI users] Help om Openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 31 06:43:57 2010" -->
<!-- isoreceived="20100331104357" -->
<!-- sent="Wed, 31 Mar 2010 05:43:52 -0500" -->
<!-- isosent="20100331104352" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help om Openmpi" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705674C_at_XMB-RCD-205.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Help om Openmpi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help om Openmpi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-31 06:43:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12495.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12488.php">Huynh Thuc Cuoc: "[OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12541.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you need to install open mpi on all nodes and you need to be able to login to each node without being prompted for a password. 
<br>

<br>
Also, not that v1.2.7 is pretty ancient. If you're juist starting with open mpi, can you upgrade to the latest version? 
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
Sent: Wed Mar 31 03:39:08 2010
<br>
Subject: [OMPI users] Help om Openmpi 
<br>

<br>

<br>
Dear all,
<br>
I had install my cluster which the configuration as following:
<br>
- headnode : 
<br>
&nbsp;&nbsp;+ linux CenOS 5.4, 4 CPUs, 3G RAM
<br>
&nbsp;&nbsp;+ sun gridengine sge6.0u12. The headnode is admin and submit node too.
<br>
&nbsp;&nbsp;+ Openmpi 1.2.9. In the installation openmpi :.configure --prefix=/opt/openmpi --with-sge ...Processes complilation and make was fine.
<br>
&nbsp;&nbsp;+ I have 2 others nodes which confg. are: 4 CPU, 1 G RAM and on which run sgeexecd.
<br>
Testing for SGE on headnode and nodes by qsub was fine.
<br>
When testing openmpi with as folowing:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 4 --hostfile myhosts hello_cxx
<br>
Hello, world!  I am 0 of 4
<br>
Hello, world!  I am 1 of 4
<br>
Hello, world!  I am 3 of 4
<br>
Hello, world!  I am 2 of 4
<br>
[guser1_at_ioitg2 examples]$ 
<br>

<br>
The openmpi runs well.
<br>
My file myhosts:
<br>
ioitg2.ioit-grid.ac.vn slots=4
<br>
node1.ioit-grid.ac.vn slots=4
<br>
node2.ioit-grid.ac.vn slots=4
<br>

<br>
Now for more processes:
<br>
[guser1_at_ioitg2 examples]$ /opt/openmpi/bin/mpirun -np 6 --hostfile myhosts hello_cxx
<br>
guser1_at_[hidden]'s password: 
<br>
--------------------------------------------------------------------------
<br>
Failed to find the following executable:
<br>

<br>
Host:       node1.ioit-grid.ac.vn
<br>
Executable: hello_cxx
<br>

<br>
Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that job rank 0 with PID 19164 on node ioitg2.ioit-grid.ac.vn exited on signal 15 (Terminated). 
<br>
3 additional processes aborted (not shown)
<br>
[guser1_at_ioitg2 examples]$ 
<br>

<br>
This is error massage. I was login on node1 successful.
<br>

<br>
PLS, Help me. What problems I have 9installation, configurations, ...). Have I install openmpi on all nodes ?
<br>

<br>
Thank you very much and I am waitting your helps.
<br>

<br>

<br>

<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12495.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12493.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12488.php">Huynh Thuc Cuoc: "[OMPI users] Help om Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12521.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/04/12541.php">Huynh Thuc Cuoc: "Re: [OMPI users] Help om Openmpi"</a>
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
