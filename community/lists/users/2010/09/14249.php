<?
$subject_val = "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 23:10:58 2010" -->
<!-- isoreceived="20100921031058" -->
<!-- sent="Mon, 20 Sep 2010 23:06:50 -0400" -->
<!-- isosent="20100921030650" -->
<!-- name="ETHAN DENEAULT" -->
<!-- email="EDENEAULT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes." -->
<!-- id="B3661B00B8C67248BE7B2314008AA507309749_at_tia2003.spartans.ut" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimjJShJmU=8cifxKM6S_Md5DrppzqnpG=Tme0uT_at_mail.gmail.com" -->
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
<strong>From:</strong> ETHAN DENEAULT (<em>EDENEAULT_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 23:06:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14250.php">jody: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David, 
<br>
<p>I did try that after I sent the original mail, but the -np 4 flag doesn't fix the problem, the program still hangs. I've also double checked the iptables for the image and for the master node, and all ports are set to accept. 
<br>
<p>Cheers, 
<br>
Ethan
<br>
<p><pre>
--
Dr. Ethan Deneault
Assistant Professor of Physics
SC 234
University of Tampa
Tampa, FL 33606
-----Original Message-----
From: users-bounces_at_[hidden] on behalf of David Zhang
Sent: Mon 9/20/2010 9:58 PM
To: Open MPI Users
Subject: Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes.
 
I don't know if this will help, but try
mpirun --machinefile testfile -np 4 ./test.out
for running 4 processes
On Mon, Sep 20, 2010 at 3:00 PM, Ethan Deneault &lt;edeneault_at_[hidden]&gt; wrote:
&gt; All,
&gt;
&gt; I am running Scientific Linux 5.5, with OpenMPI 1.4 installed into the
&gt; /usr/lib/openmpi/1.4-gcc/ directory. I know this is typically /opt/openmpi,
&gt; but Red Hat does things differently. I have my PATH and LD_LIBRARY_PATH set
&gt; correctly; because the test program does compile and run.
&gt;
&gt; The cluster consists of 10 Intel Pentium 4 diskless nodes. The master is a
&gt; AMD x86_64 machine which serves the diskless node images and /home as an NFS
&gt; mount. I compile all of my programs as 32-bit.
&gt;
&gt; My code is a simple hello world:
&gt; $ more test.f
&gt;      program test
&gt;
&gt;      include 'mpif.h'
&gt;      integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
&gt;
&gt;      call MPI_INIT(ierror)
&gt;      call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
&gt;      call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
&gt;      print*, 'node', rank, ': Hello world'
&gt;      call MPI_FINALIZE(ierror)
&gt;      end
&gt;
&gt; If I run this program with:
&gt;
&gt; $ mpirun --machinefile testfile ./test.out
&gt;  node           0 : Hello world
&gt;  node           2 : Hello world
&gt;  node           1 : Hello world
&gt;
&gt; This is the expected output. Here, testfile contains the master node:
&gt; 'pleiades', and two slave nodes: 'taygeta' and 'm43'
&gt;
&gt; If I add another machine to testfile, say 'asterope', it hangs until I
&gt; ctrl-c it. I have tried every machine, and as long as I do not include more
&gt; than 3 hosts, the program will not hang.
&gt;
&gt; I have run the debug-daemons flag with it as well, and I don't see what is
&gt; wrong specifically.
&gt;
&gt; Working output: pleiades (master) and 2 nodes.
&gt;
&gt; $ mpirun --debug-daemons --machinefile testfile ./test.out
&gt; Daemon was launched on m43 - beginning to initialize
&gt; Daemon was launched on taygeta - beginning to initialize
&gt; Daemon [[46344,0],2] checking in as pid 2140 on host m43
&gt; Daemon [[46344,0],2] not using static ports
&gt; [m43:02140] [[46344,0],2] orted: up and running - waiting for commands!
&gt; [pleiades:19178] [[46344,0],0] node[0].name pleiades daemon 0 arch ffca0200
&gt; [pleiades:19178] [[46344,0],0] node[1].name taygeta daemon 1 arch ffca0200
&gt; [pleiades:19178] [[46344,0],0] node[2].name m43 daemon 2 arch ffca0200
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received add_local_procs
&gt; [m43:02140] [[46344,0],2] node[0].name pleiades daemon 0 arch ffca0200
&gt; [m43:02140] [[46344,0],2] node[1].name taygeta daemon 1 arch ffca0200
&gt; [m43:02140] [[46344,0],2] node[2].name m43 daemon 2 arch ffca0200
&gt; [m43:02140] [[46344,0],2] orted_cmd: received add_local_procs
&gt; Daemon [[46344,0],1] checking in as pid 2317 on host taygeta
&gt; Daemon [[46344,0],1] not using static ports
&gt; [taygeta:02317] [[46344,0],1] orted: up and running - waiting for commands!
&gt; [taygeta:02317] [[46344,0],1] node[0].name pleiades daemon 0 arch ffca0200
&gt; [taygeta:02317] [[46344,0],1] node[1].name taygeta daemon 1 arch ffca0200
&gt; [taygeta:02317] [[46344,0],1] node[2].name m43 daemon 2 arch ffca0200
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received add_local_procs
&gt; [pleiades:19178] [[46344,0],0] orted_recv: received sync+nidmap from local
&gt; proc [[46344,1],0]
&gt; [m43:02140] [[46344,0],2] orted_recv: received sync+nidmap from local proc
&gt; [[46344,1],2]
&gt; [taygeta:02317] [[46344,0],1] orted_recv: received sync+nidmap from local
&gt; proc [[46344,1],1]
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
&gt;  node           0 : Hello world
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt;  node           2 : Hello world
&gt;  node           1 : Hello world
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received collective data cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received message_local_procs
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received collective data cmd
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received message_local_procs
&gt; [m43:02140] [[46344,0],2] orted_cmd: received collective data cmd
&gt; [m43:02140] [[46344,0],2] orted_cmd: received message_local_procs
&gt; [pleiades:19178] [[46344,0],0] orted_recv: received sync from local proc
&gt; [[46344,1],0]
&gt; [m43:02140] [[46344,0],2] orted_recv: received sync from local proc
&gt; [[46344,1],2]
&gt; [taygeta:02317] [[46344,0],1] orted_recv: received sync from local proc
&gt; [[46344,1],1]
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received waitpid_fired cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received iof_complete cmd
&gt; [m43:02140] [[46344,0],2] orted_cmd: received waitpid_fired cmd
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received waitpid_fired cmd
&gt; [m43:02140] [[46344,0],2] orted_cmd: received iof_complete cmd
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received iof_complete cmd
&gt; [pleiades:19178] [[46344,0],0] orted_cmd: received exit
&gt; [taygeta:02317] [[46344,0],1] orted_cmd: received exit
&gt; [taygeta:02317] [[46344,0],1] orted: finalizing
&gt; [m43:02140] [[46344,0],2] orted_cmd: received exit
&gt; [m43:02140] [[46344,0],2] orted: finalizing
&gt;
&gt; Not working output: pleiades (master) and 3 nodes:
&gt;
&gt; $ mpirun --debug-daemons --machinefile testfile ./test.out
&gt; Daemon was launched on m43 - beginning to initialize
&gt; Daemon was launched on taygeta - beginning to initialize
&gt; Daemon was launched on asterope - beginning to initialize
&gt; Daemon [[46357,0],2] checking in as pid 2181 on host m43
&gt; Daemon [[46357,0],2] not using static ports
&gt; [m43:02181] [[46357,0],2] orted: up and running - waiting for commands!
&gt; Daemon [[46357,0],1] checking in as pid 2358 on host taygeta
&gt; Daemon [[46357,0],1] not using static ports
&gt; [taygeta:02358] [[46357,0],1] orted: up and running - waiting for commands!
&gt; [pleiades:19191] [[46357,0],0] node[0].name pleiades daemon 0 arch ffca0200
&gt; [pleiades:19191] [[46357,0],0] node[1].name taygeta daemon 1 arch ffca0200
&gt; [pleiades:19191] [[46357,0],0] node[2].name m43 daemon 2 arch ffca0200
&gt; [pleiades:19191] [[46357,0],0] node[3].name asterope daemon 3 arch ffca0200
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received add_local_procs
&gt; [taygeta:02358] [[46357,0],1] node[0].name pleiades daemon 0 arch ffca0200
&gt; [taygeta:02358] [[46357,0],1] node[1].name taygeta daemon 1 arch ffca0200
&gt; [m43:02181] [[46357,0],2] node[0].name pleiades daemon 0 arch ffca0200
&gt; [taygeta:02358] [[46357,0],1] node[2].name m43 daemon 2 arch ffca0200
&gt; [m43:02181] [[46357,0],2] node[1].name taygeta daemon 1 arch ffca0200
&gt; [m43:02181] [[46357,0],2] node[2].name m43 daemon 2 arch ffca0200
&gt; [m43:02181] [[46357,0],2] node[3].name asterope daemon 3 arch ffca0200
&gt; [m43:02181] [[46357,0],2] orted_cmd: received add_local_procs
&gt; [taygeta:02358] [[46357,0],1] node[3].name asterope daemon 3 arch ffca0200
&gt; [taygeta:02358] [[46357,0],1] orted_cmd: received add_local_procs
&gt; Daemon [[46357,0],3] checking in as pid 1965 on host asterope
&gt; Daemon [[46357,0],3] not using static ports
&gt; [asterope:01965] [[46357,0],3] orted: up and running - waiting for
&gt; commands!
&gt; [pleiades:19191] [[46357,0],0] orted_recv: received sync+nidmap from local
&gt; proc [[46357,1],0]
&gt; [m43:02181] [[46357,0],2] orted_recv: received sync+nidmap from local proc
&gt; [[46357,1],2]
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
&gt; [m43:02181] [[46357,0],2] orted_cmd: received collective data cmd
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received collective data cmd
&gt;
&gt; ------------------
&gt; The output hangs here.
&gt;
&gt; After I kill the process, I get the following output:
&gt; ------------------
&gt;
&gt; Killed by signal 2.
&gt; Killed by signal 2.
&gt; --------------------------------------------------------------------------
&gt; A daemon (pid 19194) died unexpectedly with status 255 while attempting
&gt; to launch so we are aborting.
&gt;
&gt; There may be more information reported by the environment (see above).
&gt;
&gt; This may be because the daemon was unable to find all the needed shared
&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
&gt; location of the shared libraries on the remote nodes and this will
&gt; automatically be forwarded to the remote nodes.
&gt; --------------------------------------------------------------------------
&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly
&gt; terminate
&gt;
&gt; Killed by signal 2.
&gt; --------------------------------------------------------------------------
&gt; mpirun noticed that the job aborted, but has no info as to the process
&gt; that caused that situation.
&gt; --------------------------------------------------------------------------
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received waitpid_fired cmd
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received iof_complete cmd
&gt; [pleiades:19191] [[46357,0],0] orted_cmd: received exit
&gt; mpirun: clean termination accomplished
&gt;
&gt; I know that LD_LIBRARY_PATH is -not- to blame. /home/&lt;user&gt; is exported to
&gt; each machine from the master, and each machine uses the same image (and thus
&gt; the same paths). If there was a problem with the path, it would not run.
&gt;
&gt; Any insight would be appreciated.
&gt;
&gt; Thank you,
&gt; Ethan
&gt;
&gt;
&gt;
&gt; --
&gt; Dr. Ethan Deneault
&gt; Assistant Professor of Physics
&gt; SC-234
&gt; University of Tampa
&gt; Tampa, FL 33615
&gt; Office: (813) 257-3555
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
-- 
David Zhang
University of California, San Diego

</pre>
<hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14249/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14250.php">jody: "Re: [OMPI users] Thread as MPI process"</a>
<li><strong>Previous message:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<li><strong>In reply to:</strong> <a href="14248.php">David Zhang: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14257.php">Prentice Bisbal: "Re: [OMPI users] Test Program works on 1, 2 or 3 nodes. Hangs on 4 or more nodes."</a>
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
