<?
$subject_val = "[OMPI users] Max number of processes per host for an OMPI run?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 10:10:12 2013" -->
<!-- isoreceived="20130910141012" -->
<!-- sent="Tue, 10 Sep 2013 16:10:08 +0200" -->
<!-- isosent="20130910141008" -->
<!-- name="Francesco Simula" -->
<!-- email="francesco.simula_at_[hidden]" -->
<!-- subject="[OMPI users] Max number of processes per host for an OMPI run?" -->
<!-- id="d3f2d54785c6c2a9294936a1fa622f6f_at_roma1.infn.it" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Max number of processes per host for an OMPI run?<br>
<strong>From:</strong> Francesco Simula (<em>francesco.simula_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 10:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear forum,
<br>
<p>I probably must apologize in advance for the very basic question but I 
<br>
wasn't able to find an answer elsewhere:
<br>
how do I find the maximum number of processes that can be concurrently 
<br>
instantiated by mpirun on one single host of a cluster?
<br>
<p>If I launch (on an CentOS 6.3 cluster with quad-core dual Xeons nodes, 
<br>
equipped with OpenMPI 1.5.4 and IB HCAs but I think this latter is of no 
<br>
consequence):
<br>
<p>[cut]
<br>
mpirun -np 250 -host q012 hostname
<br>
[/cut]
<br>
<p>I expect and obtain 250 rows of:
<br>
[cut]
<br>
q012.qng
<br>
[/cut]
<br>
<p>The same for 251, 252, 253 and 254 BUT not for 255, when it returns:
<br>
<p>[cut]
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered 
<br>
an error
<br>
on node q012. More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
[/cut]
<br>
<p>I know that 250 processes is quite an oversubscription for a single 
<br>
node that has no more than 8 real cores but I wanted to see the actual 
<br>
degradation of performances instead of a crash.
<br>
<p>Which hard limit (in OpenMPI or in the system) am I hitting for not 
<br>
being able to run 255 MPI processes on one single host?
<br>
<p>The output of ulimit -a for the user is:
<br>
<p>[cut]
<br>
ulimit -a
<br>
core file size          (blocks, -c) 1000000
<br>
data seg size           (kbytes, -d) unlimited
<br>
scheduling priority             (-e) 0
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 95054
<br>
max locked memory       (kbytes, -l) unlimited
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
real-time priority              (-r) 0
<br>
stack size              (kbytes, -s) 100000
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 1024
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
[/cut]
<br>
<p>Many thanks,
<br>
Francesco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22636.php">Ralph Castain: "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Reply:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
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
