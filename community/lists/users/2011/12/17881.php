<?
$subject_val = "[OMPI users] problem with multiple NICs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  1 03:55:03 2011" -->
<!-- isoreceived="20111201085503" -->
<!-- sent="Thu, 1 Dec 2011 17:54:59 +0900" -->
<!-- isosent="20111201085459" -->
<!-- name="Ki Hong Pae" -->
<!-- email="khpae1_at_[hidden]" -->
<!-- subject="[OMPI users] problem with multiple NICs" -->
<!-- id="CABz957OYWgCZpiFdX9_R86f1Zb1Gwh4MPh37s6BvtT=9Kbbvjg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problem with multiple NICs<br>
<strong>From:</strong> Ki Hong Pae (<em>khpae1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-01 03:54:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
having trouble with running a MPI program on a linux (centos 5.7) cluster.
<br>
my cluster has 16 nodes and 12 cpu cores for each node.
<br>
each node has 2 connections to a switch, eth0 and eth2.
<br>
ip addresses of the nodes are set as :
<br>
eth0 : 192.168.1.1/16
<br>
eth2 : 192.168.1.101/106
<br>
i would like to use eth2 for MPI communications.
<br>
<p>i tried to run a program as :
<br>
mpiexec --mca btl_tcp_if_include eth2 --mca btl_tcp_if_exclude lo,eth0
<br>
-hostfile hostfile -n 192 ./my_program
<br>
<p>the file 'hostfile' has lines such as:
<br>
node101 slots=12
<br>
...
<br>
<p>and /etc/hosts file has lines such as:
<br>
192.168.1.1 node001
<br>
...
<br>
192.168.1.101 node101
<br>
...
<br>
<p>but the program just simply hangs/stalls at MPI_Bcast(...) or
<br>
MPI_Barrier(...).
<br>
MPI_Init(), MPI_Comm_rank(), and MPI_Comm_size() report exact results.
<br>
<p>if the program is run when only the eth0 is set up (ifconfig eth2 down for
<br>
all nodes and use another hostfile that contains node001 - node016), it
<br>
runs just fine.
<br>
<p>any help would be appreciated.
<br>
thanks in advance.
<br>
<p>-- K. H. Pae
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17882.php">Igor Geier: "Re: [OMPI users] Open MPI and SLURM_CPUS_PER_TASK"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17880.php">Patrik Jonsson: "Re: [OMPI users] Asymmetric performance with nonblocking, multithreaded communications"</a>
<!-- nextthread="start" -->
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
