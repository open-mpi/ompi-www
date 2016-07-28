<?
$subject_val = "[OMPI devel] -npersocket in 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 16:32:05 2012" -->
<!-- isoreceived="20121107213205" -->
<!-- sent="Thu, 08 Nov 2012 08:32:24 +1100" -->
<!-- isosent="20121107213224" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI devel] -npersocket in 1.6" -->
<!-- id="509AD368.2010501_at_anu.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] -npersocket in 1.6<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-07 16:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11764.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<li><strong>Reply:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There appears to have been a change in the behaviour of -npersocket from
<br>
1.4.3 to 1.6.x (tested with 1.6.2). Below is what I see on a pair of dual
<br>
quad-core socket Nehalem nodes running under PBS.  Is this expected?
<br>
<p>Thanks
<br>
David
<br>
<p><p>[dbs900_at_v482 ~/MPI]$ mpirun -V
<br>
mpirun (Open MPI) 1.4.3
<br>
...
<br>
[dbs900_at_v482 ~/MPI]$ mpirun --report-bindings -npersocket 3 -np 12 ./numa143
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],0] to socket 0 cpus 0001
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],1] to socket 0 cpus 0002
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],2] to socket 0 cpus 0004
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],3] to socket 1 cpus 0010
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],4] to socket 1 cpus 0020
<br>
[v482:03367] [[64945,0],0] odls:default:fork binding child [[64945,1],5] to socket 1 cpus 0040
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],6] to socket 0 cpus 0001
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],7] to socket 0 cpus 0002
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],8] to socket 0 cpus 0004
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],9] to socket 1 cpus 0010
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],10] to socket 1 cpus 0020
<br>
[v483:31768] [[64945,0],1] odls:default:fork binding child [[64945,1],11] to socket 1 cpus 0040
<br>
...
<br>
<p>[dbs900_at_v482 ~/MPI]$ mpirun -V
<br>
mpirun (Open MPI) 1.6.2
<br>
...
<br>
[dbs900_at_v482 ~/MPI]$ mpirun --report-bindings -npersocket 3 -np 12 ./numa162
<br>
--------------------------------------------------------------------------
<br>
Your job has requested a conflicting number of processes for the
<br>
application:
<br>
<p>App: ./numa162
<br>
number of procs:  12
<br>
<p>This is more processes than we can launch under the following
<br>
additional directives and conditions:
<br>
<p>number of sockets:   0
<br>
npersocket:   3
<br>
<p>Please revise the conflict and try again.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11766.php">Vishwanath Venkatesan: "Re: [OMPI devel] ROMIO code in OMPI"</a>
<li><strong>Previous message:</strong> <a href="11764.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27573 - trunk/ompi/mca/pml/v"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
<li><strong>Reply:</strong> <a href="11770.php">Ralph Castain: "Re: [OMPI devel] -npersocket in 1.6"</a>
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
