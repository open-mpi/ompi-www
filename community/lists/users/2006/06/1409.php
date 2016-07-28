<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 14:13:55 2006" -->
<!-- isoreceived="20060613181355" -->
<!-- sent="Tue, 13 Jun 2006 14:13:48 -0400" -->
<!-- isosent="20060613181348" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="[OMPI users] orted not found in spawn job on remote node" -->
<!-- id="448F005C.8090901_at_Sun.COM" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 14:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1410.php">Brian Barrett: "Re: [OMPI users] pnetcdf and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1408.php">Ken Mighell: "[OMPI users] pnetcdf and OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I am not sure if it's a real issue or not, but I run a user program 
<br>
that calls MPI_Comm_spawn to launch on a remote node, the parent 
<br>
processes got launched via ssh with no problem, but when the child 
<br>
processes want to launch, I got a message saying that orted is not 
<br>
found. I've only set my --prefix when I run my spawn job.
<br>
<p>If I do the spawn job on local node only, it runs fine. And I can 
<br>
workaround the issue by manually setting the -mca pls_rsh_orted with the 
<br>
appropriate path.
<br>
<p>But the FAQ says I don't need to put my PATH or LD_LIBRARY_PATH if I 
<br>
have prefix, so shouldn't the prefix_dir be stashed away for the spawn 
<br>
child?
<br>
<p>======================
<br>
on node1, I do mpirun on remote host:
<br>
<p>% ./mpirun -np 4 -host node2 -prefix /ompi/trunk/builds/sparc32-g 
<br>
./mspawn2 -n 1 -C 5 -P 5
<br>
Password:
<br>
0: ./mspawn2: MPI_APPNUM = 1
<br>
2: ./mspawn2: MPI_APPNUM = 1
<br>
3: ./mspawn2: MPI_APPNUM = 1
<br>
1: ./mspawn2: MPI_APPNUM = 1
<br>
Password:
<br>
orted: Command not found.
<br>
^C^\Quit
<br>
<p><pre>
-- 
Thanks,
- Pak Lui
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1410.php">Brian Barrett: "Re: [OMPI users] pnetcdf and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1408.php">Ken Mighell: "[OMPI users] pnetcdf and OpenMPI"</a>
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
