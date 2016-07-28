<?
$subject_val = "[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 17:01:06 2010" -->
<!-- isoreceived="20100920210106" -->
<!-- sent="Mon, 20 Sep 2010 17:00:59 -0400" -->
<!-- isosent="20100920210059" -->
<!-- name="Ethan Deneault" -->
<!-- email="edeneault_at_[hidden]" -->
<!-- subject="[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="4C97CB8B.6090506_at_ut.edu" -->
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
<strong>Subject:</strong> [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.<br>
<strong>From:</strong> Ethan Deneault (<em>edeneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 17:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I am running Scientific Linux 5.5, with OpenMPI 1.4 installed into the /usr/lib/openmpi/1.4-gcc/ 
<br>
directory. I know this is typically /opt/openmpi, but Red Hat does things differently. I have my 
<br>
PATH and LD_LIBRARY_PATH set correctly; because the test program does compile and run.
<br>
<p>The cluster consists of 10 Intel Pentium 4 diskless nodes. The master is a AMD x86_64 machine which 
<br>
serves the diskless node images and /home as an NFS mount. I compile all of my programs as 32-bit.
<br>
<p>My code is a simple hello world:
<br>
$ more test.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program test
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'node', rank, ': Hello world'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>If I run this program with:
<br>
<p>$ mpirun --machinefile testfile ./test.out
<br>
&nbsp;&nbsp;node           0 : Hello world
<br>
&nbsp;&nbsp;node           2 : Hello world
<br>
&nbsp;&nbsp;node           1 : Hello world
<br>
<p>This is the expected output. Here, testfile contains the master node: 'pleiades', and two slave 
<br>
nodes: 'taygeta' and 'm43'
<br>
<p>If I add another machine to testfile, say 'asterope', it hangs until I ctrl-c it. I have tried every 
<br>
machine, and as long as I do not include more than 3 hosts, the program will not hang.
<br>
<p>I have run the debug-daemons flag with it as well, and I don't see what is wrong specifically.
<br>
<p>Working output: pleiades (master) and 2 nodes.
<br>
<p>$ mpirun --debug-daemons --machinefile testfile ./test.out
<br>
Daemon was launched on m43 - beginning to initialize
<br>
Daemon was launched on taygeta - beginning to initialize
<br>
Daemon [[46344,0],2] checking in as pid 2140 on host m43
<br>
Daemon [[46344,0],2] not using static ports
<br>
[m43:02140] [[46344,0],2] orted: up and running - waiting for commands!
<br>
[pleiades:19178] [[46344,0],0] node[0].name pleiades daemon 0 arch ffca0200
<br>
[pleiades:19178] [[46344,0],0] node[1].name taygeta daemon 1 arch ffca0200
<br>
[pleiades:19178] [[46344,0],0] node[2].name m43 daemon 2 arch ffca0200
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received add_local_procs
<br>
[m43:02140] [[46344,0],2] node[0].name pleiades daemon 0 arch ffca0200
<br>
[m43:02140] [[46344,0],2] node[1].name taygeta daemon 1 arch ffca0200
<br>
[m43:02140] [[46344,0],2] node[2].name m43 daemon 2 arch ffca0200
<br>
[m43:02140] [[46344,0],2] orted_cmd: received add_local_procs
<br>
Daemon [[46344,0],1] checking in as pid 2317 on host taygeta
<br>
Daemon [[46344,0],1] not using static ports
<br>
[taygeta:02317] [[46344,0],1] orted: up and running - waiting for commands!
<br>
[taygeta:02317] [[46344,0],1] node[0].name pleiades daemon 0 arch ffca0200
<br>
[taygeta:02317] [[46344,0],1] node[1].name taygeta daemon 1 arch ffca0200
<br>
[taygeta:02317] [[46344,0],1] node[2].name m43 daemon 2 arch ffca0200
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received add_local_procs
<br>
[pleiades:19178] [[46344,0],0] orted_recv: received sync+nidmap from local proc [[46344,1],0]
<br>
[m43:02140] [[46344,0],2] orted_recv: received sync+nidmap from local proc [[46344,1],2]
<br>
[taygeta:02317] [[46344,0],1] orted_recv: received sync+nidmap from local proc [[46344,1],1]
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
<br>
[m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
<br>
[m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
<br>
&nbsp;&nbsp;node           0 : Hello world
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
&nbsp;&nbsp;node           2 : Hello world
<br>
&nbsp;&nbsp;node           1 : Hello world
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
<br>
[m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
<br>
[m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
<br>
[pleiades:19178] [[46344,0],0] orted_recv: received sync from local proc [[46344,1],0]
<br>
[m43:02140] [[46344,0],2] orted_recv: received sync from local proc [[46344,1],2]
<br>
[taygeta:02317] [[46344,0],1] orted_recv: received sync from local proc [[46344,1],1]
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received waitpid_fired cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received iof_complete cmd
<br>
[m43:02140] [[46344,0],2] orted_cmd: received waitpid_fired cmd
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received waitpid_fired cmd
<br>
[m43:02140] [[46344,0],2] orted_cmd: received iof_complete cmd
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received iof_complete cmd
<br>
[pleiades:19178] [[46344,0],0] orted_cmd: received exit
<br>
[taygeta:02317] [[46344,0],1] orted_cmd: received exit
<br>
[taygeta:02317] [[46344,0],1] orted: finalizing
<br>
[m43:02140] [[46344,0],2] orted_cmd: received exit
<br>
[m43:02140] [[46344,0],2] orted: finalizing
<br>
<p>Not working output: pleiades (master) and 3 nodes:
<br>
<p>$ mpirun --debug-daemons --machinefile testfile ./test.out
<br>
Daemon was launched on m43 - beginning to initialize
<br>
Daemon was launched on taygeta - beginning to initialize
<br>
Daemon was launched on asterope - beginning to initialize
<br>
Daemon [[46357,0],2] checking in as pid 2181 on host m43
<br>
Daemon [[46357,0],2] not using static ports
<br>
[m43:02181] [[46357,0],2] orted: up and running - waiting for commands!
<br>
Daemon [[46357,0],1] checking in as pid 2358 on host taygeta
<br>
Daemon [[46357,0],1] not using static ports
<br>
[taygeta:02358] [[46357,0],1] orted: up and running - waiting for commands!
<br>
[pleiades:19191] [[46357,0],0] node[0].name pleiades daemon 0 arch ffca0200
<br>
[pleiades:19191] [[46357,0],0] node[1].name taygeta daemon 1 arch ffca0200
<br>
[pleiades:19191] [[46357,0],0] node[2].name m43 daemon 2 arch ffca0200
<br>
[pleiades:19191] [[46357,0],0] node[3].name asterope daemon 3 arch ffca0200
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received add_local_procs
<br>
[taygeta:02358] [[46357,0],1] node[0].name pleiades daemon 0 arch ffca0200
<br>
[taygeta:02358] [[46357,0],1] node[1].name taygeta daemon 1 arch ffca0200
<br>
[m43:02181] [[46357,0],2] node[0].name pleiades daemon 0 arch ffca0200
<br>
[taygeta:02358] [[46357,0],1] node[2].name m43 daemon 2 arch ffca0200
<br>
[m43:02181] [[46357,0],2] node[1].name taygeta daemon 1 arch ffca0200
<br>
[m43:02181] [[46357,0],2] node[2].name m43 daemon 2 arch ffca0200
<br>
[m43:02181] [[46357,0],2] node[3].name asterope daemon 3 arch ffca0200
<br>
[m43:02181] [[46357,0],2] orted_cmd: received add_local_procs
<br>
[taygeta:02358] [[46357,0],1] node[3].name asterope daemon 3 arch ffca0200
<br>
[taygeta:02358] [[46357,0],1] orted_cmd: received add_local_procs
<br>
Daemon [[46357,0],3] checking in as pid 1965 on host asterope
<br>
Daemon [[46357,0],3] not using static ports
<br>
[asterope:01965] [[46357,0],3] orted: up and running - waiting for commands!
<br>
[pleiades:19191] [[46357,0],0] orted_recv: received sync+nidmap from local proc [[46357,1],0]
<br>
[m43:02181] [[46357,0],2] orted_recv: received sync+nidmap from local proc [[46357,1],2]
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
<br>
[m43:02181] [[46357,0],2] orted_cmd: received collective data cmd
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
<br>
<p>------------------
<br>
The output hangs here.
<br>
<p>After I kill the process, I get the following output:
<br>
------------------
<br>
<p>Killed by signal 2.
<br>
Killed by signal 2.
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 19194) died unexpectedly with status 255 while attempting
<br>
to launch so we are aborting.
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
mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
<br>
<p>Killed by signal 2.
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received waitpid_fired cmd
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received iof_complete cmd
<br>
[pleiades:19191] [[46357,0],0] orted_cmd: received exit
<br>
mpirun: clean termination accomplished
<br>
<p>I know that LD_LIBRARY_PATH is -not- to blame. /home/&lt;user&gt; is exported to each machine from the 
<br>
master, and each machine uses the same image (and thus the same paths). If there was a problem with 
<br>
the path, it would not run.
<br>
<p>Any insight would be appreciated.
<br>
<p>Thank you,
<br>
Ethan
<br>
<p><p><p><pre>
-- 
Dr. Ethan Deneault
Assistant Professor of Physics
SC-234
University of Tampa
Tampa, FL 33615
Office: (813) 257-3555
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
