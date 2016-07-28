<?
$subject_val = "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 23:06:27 2016" -->
<!-- isoreceived="20160511030627" -->
<!-- sent="Wed, 11 May 2016 03:06:25 +0000" -->
<!-- isosent="20160511030625" -->
<!-- name="lzfneu" -->
<!-- email="lzfneu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="BLU181-W72D27D954E7EFA5B4DE969AD720_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="BLU181-W8955DB432A5A3D2624E0CDAD710_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.<br>
<strong>From:</strong> lzfneu (<em>lzfneu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 23:06:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29166.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>In reply to:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and all,
<br>
Thanks for your respond, but the problems is not solved.
<br>
My system is fedora20 64-bit with openmpi-1.8.4 package installed in my laptop. 
<br>
The mpirun command just run in my single laptop which disconnect to the internet and  I also performe the following command to find mpirun path and add it to .bashcr file. However, the results with no effect. 
<br>
[user_at_localhost ~]$ which mpirun/usr/lib64/openmpi/bin/mpirun
<br>
Any idea and thanks in advance!
<br>

<br>
Subject: Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.
<br>
From: Ralph Castain (rhc_at_[hidden])
<br>
Date: 2016-05-10 14:43:39Next message: Orion Poplawski: &quot;Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled&quot;Previous message: Gus Correa: &quot;Re: [OMPI users] No core dump in some cases&quot;In reply to: lzfneu: &quot;[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.&quot;This usually indicates that the remote process is using a different OMPI 
<br>
version. You might check to ensure that the paths on the remote nodes are 
<br>
correct. 
<br>
From: lzfneu_at_[hidden]
<br>
To: users_at_[hidden]
<br>
CC: lzfneu_at_[hidden]
<br>
Subject: Question about mpirun mca_oob_tcp_recv_handler error.
<br>
Date: Tue, 10 May 2016 15:46:45 +0000
<br>

<br>
<p><p><p>Hi everyone,
<br>

<br>
I have a problem to consult you, when I cd to the /examples folder contained in the openmpi-1.8.4 package, and test the hello_c example program with mpirun command errors occured: 
<br>

<br>
Here are the command and the error messages in details:
<br>
[user_at_localhost examples]$ mpirun -np 2 hello_c
<br>
[localhost.localdomain:06965] [[52154,0],0] mca_oob_tcp_recv_handler: invalid message type: 14
<br>
[localhost.localdomain:06965] [[52154,0],0] mca_oob_tcp_recv_handler: invalid message type: 14
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>

<br>
&nbsp;&nbsp;Process name: [[52154,1],0]
<br>
&nbsp;&nbsp;Exit code:    65
<br>
--------------------------------------------------------------------------
<br>
&nbsp;
<br>
The problem was not occured before, but in recently when i execute 
<br>
every progams by using the mpirun command, the error message is reproducible. I 
<br>
don't know why.
<br>
Could you please help me and thanks in advance !
<br>

<br>
Zhefu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29167/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29166.php">Gilles Gouaillardet: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>In reply to:</strong> <a href="29156.php">lzfneu: "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29168.php">Gilles Gouaillardet: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
