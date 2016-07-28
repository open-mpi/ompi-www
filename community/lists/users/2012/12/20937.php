<?
$subject_val = "[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 01:25:52 2012" -->
<!-- isoreceived="20121213062552" -->
<!-- sent="Thu, 13 Dec 2012 14:25:44 +0800" -->
<!-- isosent="20121213062544" -->
<!-- name="Ng Shi Wei" -->
<!-- email="nsw_1216_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot run MPI job across nodes using OpenMPI in F17" -->
<!-- id="COL122-W24336BF7BD93B48DC5EAB2FE4E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17<br>
<strong>From:</strong> Ng Shi Wei (<em>nsw_1216_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 01:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am new in Linux and clustering. I am setting up a Beowulf Cluster using several PCs according to this guide <a href="http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/">http://www.tldp.org/HOWTO/html_single/Beowulf-HOWTO/</a>.
<br>
<p>I have setup and configure accordingly except for NFS part. Because I am not requiring it for my application. I have set my ssh to login each other without password. I started with 2 nodes 1st. I can compile and run in my headnode using openmpi. But when I try to run my MPI application across nodes, there is nothing displaying. It just like hanging there.
<br>
<p>Headnode: master
<br>
client: slave4
<br>
<p>The command I used to mpirun across nodes is as below:
<br>
Code:mpirun -np 4 --host slave4 outputSince I not using NFS, so I installed OpenMPI in every nodes with same locations. 
<br>
<p>I wondering I missed out any configurations or not.
<br>
<p>Hope someone can help me out of this problem.
<br>
<p>Thanks in advance.
<br>
Best Regards,Shi Wei 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<li><strong>Previous message:</strong> <a href="20936.php">Jens Glaser: "Re: [OMPI users] Stream interactions in CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
<li><strong>Reply:</strong> <a href="20942.php">Ralph Castain: "Re: [OMPI users] Cannot run MPI job across nodes using OpenMPI in F17"</a>
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
