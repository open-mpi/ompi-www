<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 21:58:48 2010" -->
<!-- isoreceived="20100921015848" -->
<!-- sent="Mon, 20 Sep 2010 19:58:23 -0600" -->
<!-- isosent="20100921015823" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="AANLkTimjJShJmU=8cifxKM6S_Md5DrppzqnpG=Tme0uT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C97CB8B.6090506_at_ut.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 21:58:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14246.php">Ethan Deneault: "[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if this will help, but try
<br>
mpirun --machinefile testfile -np 4 ./test.out
<br>
for running 4 processes
<br>
<p>On Mon, Sep 20, 2010 at 3:00 PM, Ethan Deneault &lt;edeneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running Scientific Linux 5.5, with OpenMPI 1.4 installed into the
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/1.4-gcc/ directory. I know this is typically /opt/openmpi,
</span><br>
<span class="quotelev1">&gt; but Red Hat does things differently. I have my PATH and LD_LIBRARY_PATH set
</span><br>
<span class="quotelev1">&gt; correctly; because the test program does compile and run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster consists of 10 Intel Pentium 4 diskless nodes. The master is a
</span><br>
<span class="quotelev1">&gt; AMD x86_64 machine which serves the diskless node images and /home as an NFS
</span><br>
<span class="quotelev1">&gt; mount. I compile all of my programs as 32-bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My code is a simple hello world:
</span><br>
<span class="quotelev1">&gt; $ more test.f
</span><br>
<span class="quotelev1">&gt;      program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;      integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call MPI_INIT(ierror)
</span><br>
<span class="quotelev1">&gt;      call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev1">&gt;      call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev1">&gt;      print*, 'node', rank, ': Hello world'
</span><br>
<span class="quotelev1">&gt;      call MPI_FINALIZE(ierror)
</span><br>
<span class="quotelev1">&gt;      end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run this program with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --machinefile testfile ./test.out
</span><br>
<span class="quotelev1">&gt;  node           0 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           2 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           1 : Hello world
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the expected output. Here, testfile contains the master node:
</span><br>
<span class="quotelev1">&gt; 'pleiades', and two slave nodes: 'taygeta' and 'm43'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I add another machine to testfile, say 'asterope', it hangs until I
</span><br>
<span class="quotelev1">&gt; ctrl-c it. I have tried every machine, and as long as I do not include more
</span><br>
<span class="quotelev1">&gt; than 3 hosts, the program will not hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run the debug-daemons flag with it as well, and I don't see what is
</span><br>
<span class="quotelev1">&gt; wrong specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Working output: pleiades (master) and 2 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --debug-daemons --machinefile testfile ./test.out
</span><br>
<span class="quotelev1">&gt; Daemon was launched on m43 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on taygeta - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[46344,0],2] checking in as pid 2140 on host m43
</span><br>
<span class="quotelev1">&gt; Daemon [[46344,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; Daemon [[46344,0],1] checking in as pid 2317 on host taygeta
</span><br>
<span class="quotelev1">&gt; Daemon [[46344,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_recv: received sync+nidmap from local
</span><br>
<span class="quotelev1">&gt; proc [[46344,1],0]
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_recv: received sync+nidmap from local proc
</span><br>
<span class="quotelev1">&gt; [[46344,1],2]
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_recv: received sync+nidmap from local
</span><br>
<span class="quotelev1">&gt; proc [[46344,1],1]
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt;  node           0 : Hello world
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt;  node           2 : Hello world
</span><br>
<span class="quotelev1">&gt;  node           1 : Hello world
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_recv: received sync from local proc
</span><br>
<span class="quotelev1">&gt; [[46344,1],0]
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_recv: received sync from local proc
</span><br>
<span class="quotelev1">&gt; [[46344,1],2]
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_recv: received sync from local proc
</span><br>
<span class="quotelev1">&gt; [[46344,1],1]
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [taygeta:02317] [[46344,0],1] orted: finalizing
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; [m43:02140] [[46344,0],2] orted: finalizing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not working output: pleiades (master) and 3 nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --debug-daemons --machinefile testfile ./test.out
</span><br>
<span class="quotelev1">&gt; Daemon was launched on m43 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on taygeta - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon was launched on asterope - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],2] checking in as pid 2181 on host m43
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],2] not using static ports
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],1] checking in as pid 2358 on host taygeta
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],1] not using static ports
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] node[3].name asterope daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] node[0].name pleiades daemon 0 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] node[1].name taygeta daemon 1 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] node[2].name m43 daemon 2 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] node[3].name asterope daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] node[3].name asterope daemon 3 arch ffca0200
</span><br>
<span class="quotelev1">&gt; [taygeta:02358] [[46357,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],3] checking in as pid 1965 on host asterope
</span><br>
<span class="quotelev1">&gt; Daemon [[46357,0],3] not using static ports
</span><br>
<span class="quotelev1">&gt; [asterope:01965] [[46357,0],3] orted: up and running - waiting for
</span><br>
<span class="quotelev1">&gt; commands!
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_recv: received sync+nidmap from local
</span><br>
<span class="quotelev1">&gt; proc [[46357,1],0]
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] orted_recv: received sync+nidmap from local proc
</span><br>
<span class="quotelev1">&gt; [[46357,1],2]
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [m43:02181] [[46357,0],2] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; The output hangs here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After I kill the process, I get the following output:
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 19194) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that LD_LIBRARY_PATH is -not- to blame. /home/&lt;user&gt; is exported to
</span><br>
<span class="quotelev1">&gt; each machine from the master, and each machine uses the same image (and thus
</span><br>
<span class="quotelev1">&gt; the same paths). If there was a problem with the path, it would not run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any insight would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Ethan Deneault
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Physics
</span><br>
<span class="quotelev1">&gt; SC-234
</span><br>
<span class="quotelev1">&gt; University of Tampa
</span><br>
<span class="quotelev1">&gt; Tampa, FL 33615
</span><br>
<span class="quotelev1">&gt; Office: (813) 257-3555
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14248/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Previous message:</strong> <a href="14247.php">Mikael Lavoie: "[OMPI users] Thread as MPI process"</a>
<li><strong>In reply to:</strong> <a href="14246.php">Ethan Deneault: "[OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>Reply:</strong> <a href="14249.php">ETHAN DENEAULT: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
