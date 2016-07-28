<?
$subject_val = "[OMPI users] a question about mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 02:44:31 2011" -->
<!-- isoreceived="20110707064431" -->
<!-- sent="Thu, 7 Jul 2011 14:44:22 +0800" -->
<!-- isosent="20110707064422" -->
<!-- name="zhuangchao" -->
<!-- email="freeoser_at_[hidden]" -->
<!-- subject="[OMPI users] a question about mpirun" -->
<!-- id="201107071444220719467_at_163.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] a question about mpirun<br>
<strong>From:</strong> zhuangchao (<em>freeoser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 02:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>Previous message:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>Reply:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello all :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I  installed  the openmpi-1.4.3  on redhat as the following step :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  ./configure  --prefix=/data1/cluster/openmpi 
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  make
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.  make  install
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;And  I   compiled  the  examples  of  openmpi-1.4.3  as the following step :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. make
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then  I   run   the example :  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./mpirun  -np 1  /tmp/openmpi-1.4.3/examples/ring_c 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I  get  the following  error :
<br>
<p>-----------------------------------------------------------------------------
<br>
It seems that there is no lamd running on the host node1.
<br>
This indicates that the LAM/MPI runtime environment is not operating.
<br>
The LAM/MPI runtime environment is necessary for MPI programs to run
<br>
(the MPI program tired to invoke the &quot;MPI_Init&quot; function).
<br>
<p>Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
<br>
environment.  See the LAM/MPI documentation for how to invoke
<br>
&quot;lamboot&quot; across multiple machines.
<br>
-----------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I   run openmpi , but  I  get  the error from lam-mpi .  why ?      Can  you  help me ? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you !    
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>Previous message:</strong> <a href="16841.php">Ralph Castain: "Re: [OMPI users] Error using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
<li><strong>Reply:</strong> <a href="16843.php">jody: "Re: [OMPI users] a question about mpirun"</a>
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
