<?
$subject_val = "[OMPI users] Cannot launch slots on more than 2 remote machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 15:24:25 2011" -->
<!-- isoreceived="20110328192425" -->
<!-- sent="Mon, 28 Mar 2011 15:24:19 -0400" -->
<!-- isosent="20110328192419" -->
<!-- name="Igor" -->
<!-- email="nightonearth_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot launch slots on more than 2 remote machines" -->
<!-- id="AANLkTimD3TdjwfKNfm6tNcjy9oY62WjEWCzHS1JQ80m1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Cannot launch slots on more than 2 remote machines<br>
<strong>From:</strong> Igor (<em>nightonearth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 15:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>Previous message:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>Reply:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>First off, complete MPI newbie here. I have installed
<br>
openmpi-1.4.3-1.fc13.i686 on an IBM blade cluster running Fedora. I
<br>
can open as many slots as I want on remote machines, as long as I only
<br>
connect to two machines (doesn't matter which two).
<br>
<p>For example, I run my mpi task from &quot;cluster&quot; and if my hostfile is:
<br>
<p>cluster slots=1 max-slots=1
<br>
cluster3 slots=1
<br>
cluster5 slots=1
<br>
cluster1 slots=1
<br>
<p>If I now run:
<br>
[username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun -np 3 --hostfile
<br>
/home/username/.mpi_hostfile hostname
<br>
<p>The output is
<br>
cluster.mydomain.ca
<br>
cluster3.mydomain.ca
<br>
cluster5.mydomain.ca
<br>
<p>If I run:
<br>
[username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun -np 4 --hostfile
<br>
/home/username/.mpi_hostfile hostname
<br>
I expect to see:
<br>
cluster.mydomain.ca
<br>
cluster3.mydomain.ca
<br>
cluster5.mydomain.ca
<br>
cluster1.mydomain.ca
<br>
<p>Instead, I see the same output as when running 3 processes (-np 3),
<br>
and the task hangs.
<br>
<p>Below is the output when I run mpirun with --debug-daemons tag. The
<br>
same behaviour is seen, the process hangs when &quot;-np 4&quot; is requested:
<br>
<p>################################
<br>
[username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun --debug-daemons -np
<br>
3 --hostfile /home/username/.mpi_hostfile hostname
<br>
Daemon was launched on cluster3.mydomain.ca - beginning to initialize
<br>
Daemon was launched on cluster5.mydomain.ca - beginning to initialize
<br>
Daemon [[12927,0],1] checking in as pid 3096 on host cluster3.mydomain.ca
<br>
Daemon [[12927,0],1] not using static ports
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted: up and running -
<br>
waiting for commands!
<br>
Daemon [[12927,0],2] checking in as pid 11301 on host cluster5.mydomain.ca
<br>
Daemon [[12927,0],2] not using static ports
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted: up and running -
<br>
waiting for commands!
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] node[1].name cluster3 daemon
<br>
1 arch ffca0200
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] node[2].name cluster5 daemon
<br>
2 arch ffca0200
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] node[3].name cluster1 daemon
<br>
INVALID arch ffca0200
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received add_local_procs
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] node[1].name cluster3
<br>
daemon 1 arch ffca0200
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] node[2].name cluster5
<br>
daemon 2 arch ffca0200
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] node[3].name cluster1
<br>
daemon INVALID arch ffca0200
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] node[1].name cluster3
<br>
daemon 1 arch ffca0200
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] node[2].name cluster5
<br>
daemon 2 arch ffca0200
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] node[3].name cluster1
<br>
daemon INVALID arch ffca0200
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received add_local_procs
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received add_local_procs
<br>
cluster.mydomain.ca
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received waitpid_fired cmd
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received iof_complete cmd
<br>
cluster3.mydomain.ca
<br>
cluster5.mydomain.ca
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received waitpid_fired cmd
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received waitpid_fired cmd
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received iof_complete cmd
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received iof_complete cmd
<br>
[cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received exit
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received exit
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received exit
<br>
[cluster3.mydomain.ca:03096] [[12927,0],1] orted: finalizing
<br>
[cluster5.mydomain.ca:11301] [[12927,0],2] orted: finalizing
<br>
<p>################################
<br>
[username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun --debug-daemons -np
<br>
4 --hostfile /home/username/.mpi_hostfile hostname
<br>
Daemon was launched on cluster5.mydomain.ca - beginning to initialize
<br>
Daemon was launched on cluster3.mydomain.ca - beginning to initialize
<br>
Daemon [[12919,0],2] checking in as pid 11325 on host cluster5.mydomain.ca
<br>
Daemon [[12919,0],2] not using static ports
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] orted: up and running -
<br>
waiting for commands!
<br>
Daemon was launched on cluster1.mydomain.ca - beginning to initialize
<br>
Daemon [[12919,0],1] checking in as pid 3120 on host cluster3.mydomain.ca
<br>
Daemon [[12919,0],1] not using static ports
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] orted: up and running -
<br>
waiting for commands!
<br>
Daemon [[12919,0],3] checking in as pid 5623 on host cluster1.mydomain.ca
<br>
Daemon [[12919,0],3] not using static ports
<br>
[cluster1.mydomain.ca:05623] [[12919,0],3] orted: up and running -
<br>
waiting for commands!
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] node[1].name cluster3 daemon
<br>
1 arch ffca0200
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] node[2].name cluster5 daemon
<br>
2 arch ffca0200
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] node[3].name cluster1 daemon
<br>
3 arch ffca0200
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received add_local_procs
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] node[1].name cluster3
<br>
daemon 1 arch ffca0200
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] node[2].name cluster5
<br>
daemon 2 arch ffca0200
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] node[3].name cluster1
<br>
daemon 3 arch ffca0200
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] node[0].name cluster daemon
<br>
0 arch ffca0200
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] node[1].name cluster3
<br>
daemon 1 arch ffca0200
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] node[2].name cluster5
<br>
daemon 2 arch ffca0200
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] node[3].name cluster1
<br>
daemon 3 arch ffca0200
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received add_local_procs
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received add_local_procs
<br>
cluster.mydomain.ca
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received waitpid_fired cmd
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received iof_complete cmd
<br>
cluster3.mydomain.ca
<br>
cluster5.mydomain.ca
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received waitpid_fired cmd
<br>
[cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received iof_complete cmd
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received waitpid_fired cmd
<br>
[cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received iof_complete cmd
<br>
&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;THE PROCESS HANGS HERE&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
<br>
^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
Killed by signal 2.
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 12288) died unexpectedly with status 255 while attempting
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
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
[cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received exit
<br>
mpirun: clean termination accomplished
<br>
<p>################################
<br>
<p>Notes:
<br>
1. Passwordless ssh login between all cluster# machines works fine.
<br>
2. It doesn't matter which two machines I specify in .mpi_hostfile. I
<br>
can always connect to 1 or 2 of them, and get the freeze when I try 3
<br>
or more.
<br>
3. I installed Open MPI using the yum installer of Fedora. By default,
<br>
it chose /usr/lib/openmpi/ as the install directory, instead of the
<br>
/opt/openmpi-... that is mentioned throughout the Open MPI FAQ. I
<br>
can't imagine that to be a problem...
<br>
4. Supplying PATH and LD_LIBRARY_PATH: The Open MPI FAQ says
<br>
&quot;specifying the absolute pathname to mpirun is equivalent to using the
<br>
--prefix argument&quot;, so that's what I chose, after reading all the
<br>
scaremongering about modifying LD_LIBRARY_PATH :) Adding
<br>
&quot;/usr/lib/openmpi/lib&quot; to the otherwise empty LD_LIBRARY_PATH produces
<br>
same results.
<br>
<p>Can someone suggest a possible solution or at least a direction in
<br>
which I should continue my troubleshooting?
<br>
<p><pre>
-- 
Thank you all for your time,
Igor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>Previous message:</strong> <a href="16036.php">Gretchen: "Re: [OMPI users] gadget2 infiniband openmpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>Reply:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
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
