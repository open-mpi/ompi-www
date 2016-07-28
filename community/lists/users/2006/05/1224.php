<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 10 03:08:36 2006" -->
<!-- isoreceived="20060510070836" -->
<!-- sent="Wed, 10 May 2006 00:08:16 -0700 (PDT)" -->
<!-- isosent="20060510070816" -->
<!-- name="Mahesh Barve" -->
<!-- email="barvemahesh_at_[hidden]" -->
<!-- subject="[OMPI users] Orted Command Not found" -->
<!-- id="20060510070816.68915.qmail_at_web30704.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Mahesh Barve (<em>barvemahesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-10 03:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
<li><strong>Reply:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;I am trying to build a cluster with 2 nodes each
<br>
being a  dual processor xeon machine. I have installed
<br>
openMPI on one of the machines in /opt/open-mpi folder
<br>
and have kept the folder shared across the network
<br>
thru nfs mounted again in the same folder. 
<br>
&nbsp;Now I would like to run mpi code involving both 
<br>
machines.  I run the code with command 
<br>
&nbsp;mpirun --hostfile hostfile -np 2 a.out
<br>
where hostfile has ipaddresses of both the
<br>
machines(192.168.1.1(master node) and
<br>
192.168.1.2(slave node)). 
<br>
&nbsp;I get the error 
<br>
----------
<br>
orte: command not found 
<br>
&nbsp;ERROR : A daemon on node 192.166.1.2 failed to start
<br>
as expected 
<br>
&nbsp;ERROR : there may be more information available from
<br>
the remote shell (see above)
<br>
&nbsp;ERROR : the daemon exited unexpectedly with status
<br>
127
<br>
-----------
<br>
<p>Could you please let me know how to get over this
<br>
problem?
<br>
<p>awaiting your reply,
<br>
-Mahesh 
<br>
&nbsp;
<br>
<p>&nbsp;
<br>
<p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1225.php">Richard Wait: "Re: [OMPI users] Open MPI and MPICH"</a>
<li><strong>Previous message:</strong> <a href="1223.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] Open MPI 1.1a2 w/VAPI RHEL3 4-node Pallas Alltoall fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
<li><strong>Reply:</strong> <a href="1226.php">Brian Barrett: "Re: [OMPI users] Orted Command Not found"</a>
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
