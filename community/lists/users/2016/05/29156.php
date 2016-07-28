<?
$subject_val = "[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 11:46:55 2016" -->
<!-- isoreceived="20160510154655" -->
<!-- sent="Tue, 10 May 2016 15:46:45 +0000" -->
<!-- isosent="20160510154645" -->
<!-- name="lzfneu" -->
<!-- email="lzfneu_at_[hidden]" -->
<!-- subject="[OMPI users] Question about mpirun mca_oob_tcp_recv_handler error." -->
<!-- id="BLU181-W8955DB432A5A3D2624E0CDAD710_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error.<br>
<strong>From:</strong> lzfneu (<em>lzfneu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 11:46:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Reply:</strong> <a href="29167.php">lzfneu: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
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
