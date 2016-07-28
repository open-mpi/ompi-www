<?
$subject_val = "[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 09:46:36 2009" -->
<!-- isoreceived="20091204144636" -->
<!-- sent="Fri, 4 Dec 2009 07:46:12 -0700" -->
<!-- isosent="20091204144612" -->
<!-- name="Nicolas Bock" -->
<!-- email="nicolasbock_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes" -->
<!-- id="dcf611bd0912040646o30cea884n344cc6efeb76f6fe_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes<br>
<strong>From:</strong> Nicolas Bock (<em>nicolasbock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 09:46:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI users] Corrupt documentation file in vampirtrace/opari"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>Reply:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>when I run the attached example, which spawns a &quot;slave&quot; process with
<br>
MPI_Comm_spawn(), I see the following:
<br>
<p>nbock    19911  0.0  0.0  53980  2288 pts/0    S+   07:42   0:00
<br>
/usr/local/openmpi-1.3.4-gcc-4.4.2/bin/mpirun -np 3 ./master
<br>
nbock    19912 92.1  0.0 158964  3868 pts/0    R+   07:42   0:23 ./master
<br>
nbock    19913  0.0  0.0 158960  3812 pts/0    S+   07:42   0:00 ./master
<br>
nbock    19914  0.0  0.0 158960  3800 pts/0    S+   07:42   0:00 ./master
<br>
nbock    19929 91.1  0.0 158964  3896 pts/0    R+   07:42   0:20 ./slave
<br>
arg1 arg2
<br>
nbock    19930 95.8  0.0 158964  3900 pts/0    R+   07:42   0:22 ./slave
<br>
arg1 arg2
<br>
nbock    19931 94.7  0.0 158964  3896 pts/0    R+   07:42   0:21 ./slave
<br>
arg1 arg2
<br>
<p>The third column is the CPU usage according to top. I notice 3 master
<br>
processes, which I attribute to the fact that MPI_Comm_spawn really fork()s
<br>
and then spawns, but that's my uneducated guess. What I don't understand is
<br>
why PID 19912 is using any CPU resources at all. It's supposed to be waiting
<br>
at the MPI_Barrier() for the slaves to finish. What is PID 19912 doing?
<br>
<p>Some more information:
<br>
<p>$ uname -a
<br>
Linux mujo 2.6.31-gentoo-r6 #2 SMP PREEMPT Fri Dec 4 07:08:07 MST 2009
<br>
x86_64 Intel(R) Core(TM)2 Quad CPU Q8200 @ 2.33GHz GenuineIntel GNU/Linux
<br>
<p>openmpi version 1.3.4
<br>
gcc version 4.4.2
<br>
<p>nick
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11409/master.c">master.c</a>
</ul>
<!-- attachment="master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11409/slave.c">slave.c</a>
</ul>
<!-- attachment="slave.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11408.php">Jeff Squyres: "Re: [OMPI users] Corrupt documentation file in vampirtrace/opari"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
<li><strong>Reply:</strong> <a href="11410.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for spawned processes"</a>
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
