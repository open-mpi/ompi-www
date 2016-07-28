<?
$subject_val = "[OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 15:29:52 2012" -->
<!-- isoreceived="20121214202952" -->
<!-- sent="Fri, 14 Dec 2012 14:29:35 -0600" -->
<!-- isosent="20121214202935" -->
<!-- name="Daniel Davidson" -->
<!-- email="danield_at_[hidden]" -->
<!-- subject="[OMPI users] mpi problems/many cpus per node" -->
<!-- id="50CB8C2F.9010802_at_igb.uiuc.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpi problems/many cpus per node<br>
<strong>From:</strong> Daniel Davidson (<em>danield_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 15:29:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have had to cobble together two machines in our rocks cluster without 
<br>
using the standard installation, they have efi only bios on them and 
<br>
rocks doesnt like that, so it is the only workaround.
<br>
<p>Everything works great now, except for one thing.  MPI jobs (openmpi or 
<br>
mpich) fail when started from one of these nodes (via qsub or by logging 
<br>
in and running the command) if 24 or more processors are needed on 
<br>
another system.  However if the originator of the MPI job is the 
<br>
headnode or any of the preexisting compute nodes, it works fine.  Right 
<br>
now I am guessing ssh client or ulimit problems, but I cannot find any 
<br>
difference.  Any help would be greatly appreciated.
<br>
<p>compute-2-1 and compute-2-0 are the new nodes
<br>
<p>Examples:
<br>
<p>This works, prints 23 hostnames from each machine:
<br>
[root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -np 46 hostname
<br>
<p>This does not work, prints 24 hostnames for compute-2-1
<br>
[root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -np 48 hostname
<br>
<p>These both work, print 64 hostnames from each node
<br>
[root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -np 128 hostname
<br>
[root_at_compute-0-2 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host 
<br>
compute-2-0,compute-2-1 -np 128 hostname
<br>
<p>[root_at_compute-2-1 ~]# ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 16410016
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 4096
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) unlimited
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 1024
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p>[root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
<br>
Host *
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CheckHostIP             no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForwardX11              yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ForwardAgent            yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;StrictHostKeyChecking   no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UsePrivilegedPort       no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protocol                2,1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20953.php">Ralph Castain: "Re: [OMPI users] Problems with shared libraries while launching jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
