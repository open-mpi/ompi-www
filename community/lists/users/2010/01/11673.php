<?
$subject_val = "[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 00:49:15 2010" -->
<!-- isoreceived="20100104054915" -->
<!-- sent="Mon, 4 Jan 2010 00:49:10 -0500" -->
<!-- isosent="20100104054910" -->
<!-- name="chih lee" -->
<!-- email="chihlee0214_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2" -->
<!-- id="8abd09e1001032149p56c1364nd5295f363288a03_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2<br>
<strong>From:</strong> chih lee (<em>chihlee0214_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 00:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11672.php">Kritiraj Sajadah: "[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Reply:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Maybe reply:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I followed the instructions on the FAQ page to configure and compile openmpi
<br>
so that it should work with Torque.
<br>
./configure --with-tm=/usr/local --prefix=/usr/local
<br>
The option --disable-server was used to configure torque on the compute
<br>
nodes.
<br>
I got openmpi compiled without any error message on the head and compute
<br>
nodes.
<br>
<p>I can use
<br>
$ mpirun -np 2 --host node1,node2 a.out
<br>
to run parallel programs without any problem.
<br>
<p>However,  when I submit the following script with qsub
<br>
<p>____________________________________________________________________
<br>
#!/bin/sh
<br>
#
<br>
PBS -N Test
<br>
PBS -o /home2/user2/test.sh.o
<br>
PBS -l nodes=8
<br>
mpirun /home2/user2/a.out  # a.out simply prints out # of procs and its ID
<br>
____________________________________________________________________
<br>
<p>I got the following output and error messages.
<br>
<p>Output:
<br>
N. of procs = 1, proc ID = 0
<br>
<p>Error messages:
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 3: PBS: not found
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 4: PBS: not found
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 5: PBS: not found
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 6: PBS: not found
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 7: PBS: not found
<br>
/var/spool/torque/mom_priv/jobs/198.my_head_node.SC: 8: PBS: not found
<br>
<p>I'm new to OpenMPI and Torque. I really appreciate it if you can give me
<br>
some insights. Thanks!
<br>
<p>Best,
<br>
Steve
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11674.php">Louis Rossi: "[OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11672.php">Kritiraj Sajadah: "[OMPI users] Fw: Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Reply:</strong> <a href="11688.php">Ralph Castain: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Maybe reply:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
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
