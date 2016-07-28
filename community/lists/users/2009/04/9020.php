<?
$subject_val = "[OMPI users] [Fwd: mpi alltoall memory requirement]";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 03:13:30 2009" -->
<!-- isoreceived="20090422071330" -->
<!-- sent="Wed, 22 Apr 2009 12:40:01 +0530" -->
<!-- isosent="20090422071001" -->
<!-- name="vkm" -->
<!-- email="viral.vkm_at_[hidden]" -->
<!-- subject="[OMPI users] [Fwd: mpi alltoall memory requirement]" -->
<!-- id="49EEC2C9.305_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] [Fwd: mpi alltoall memory requirement]<br>
<strong>From:</strong> vkm (<em>viral.vkm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 03:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9021.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am running MPI alltoall test on my 8nodes cluster. They all have 
<br>
24core cpus.
<br>
So total number of processes that I am running is 8*24=192. In summary, 
<br>
alltoall test on 8nodes and 24 processes per node.
<br>
<p>But, my test consumes all RAM and swap space memory. However, if I count 
<br>
required memory then calculation comes up as below.
<br>
<p>Alltoall test runs max upto 4M datasizes. Each proc will have ONE 
<br>
sendbuf and ONE recvbuf for all remaining 191 processes to talk(and one 
<br>
to talk to itself).
<br>
<p>So, on one node one process will need 192*4M = 768M memory for sendbuf. 
<br>
Now, one one node there are in fact 24 process running. So on one node, 
<br>
in total, I need 768M *24 = 18432M = ~18G for sendbuf
<br>
<p>The same amount of memory required for recvbuf. So at the least each 
<br>
node should have 36GB of memory.
<br>
<p>Am I calculating right ? Please correct.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9021.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>Reply:</strong> <a href="9022.php">Ashley Pittman: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
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
