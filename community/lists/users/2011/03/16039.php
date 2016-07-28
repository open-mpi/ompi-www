<?
$subject_val = "Re: [OMPI users] Cannot launch slots on more than 2 remote machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 28 17:17:48 2011" -->
<!-- isoreceived="20110328211748" -->
<!-- sent="Mon, 28 Mar 2011 17:17:43 -0400" -->
<!-- isosent="20110328211743" -->
<!-- name="Igor" -->
<!-- email="nightonearth_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot launch slots on more than 2 remote machines" -->
<!-- id="AANLkTikw3_MP1JnwBjWq17DCj5iE1R8xPrEgX-ePz=r+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="821A4D94-E9A6-4914-896A-05A3B0CD7E17_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot launch slots on more than 2 remote machines<br>
<strong>From:</strong> Igor (<em>nightonearth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-28 17:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16040.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>In reply to:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your help! The issue is definitely the firewall. I
<br>
guess, since I don't plan on having any communication between &quot;slave&quot;
<br>
nodes of my cluster (SPMD with no cross-talk), and it is fairly small,
<br>
I'll stick with option 2 for now.
<br>
<p>On Mon, Mar 28, 2011 at 3:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It is hanging because your last nodes are not receiving the launch command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The daemons receive a message from mpirun telling them what to launch. That message is sent via a tree-like routing algorithm. So mpirun sends to the first two daemons, each of which relays it on to some number of daemons, each of which relays it to another number, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is happening here is that the first pair of daemons are not relaying the message on to the next layer. You can try a couple of things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. ensure that it is possible for a daemon on one node to open a TCP socket to any other node - i.e., that a daemon on cluster1 (for example) can open a socket to cluster5 and send a message across. You might have a firewall in the way, or some other prohibition blocking this connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. given the small size of the cluster, add &quot;-mca routed direct&quot; to your command line. This will tell mpirun to talk directly to each daemon. However, note that your job may still fail as the procs won't be able to open sockets to their peers to send MPI messages, if you use TCP for the MPI transport.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 28, 2011, at 1:24 PM, Igor wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First off, complete MPI newbie here. I have installed
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4.3-1.fc13.i686 on an IBM blade cluster running Fedora. I
</span><br>
<span class="quotelev2">&gt;&gt; can open as many slots as I want on remote machines, as long as I only
</span><br>
<span class="quotelev2">&gt;&gt; connect to two machines (doesn't matter which two).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example, I run my mpi task from &quot;cluster&quot; and if my hostfile is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cluster slots=1 max-slots=1
</span><br>
<span class="quotelev2">&gt;&gt; cluster3 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; cluster5 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; cluster1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I now run:
</span><br>
<span class="quotelev2">&gt;&gt; [username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun -np 3 --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; /home/username/.mpi_hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output is
</span><br>
<span class="quotelev2">&gt;&gt; cluster.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run:
</span><br>
<span class="quotelev2">&gt;&gt; [username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun -np 4 --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; /home/username/.mpi_hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt; I expect to see:
</span><br>
<span class="quotelev2">&gt;&gt; cluster.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster1.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead, I see the same output as when running 3 processes (-np 3),
</span><br>
<span class="quotelev2">&gt;&gt; and the task hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is the output when I run mpirun with --debug-daemons tag. The
</span><br>
<span class="quotelev2">&gt;&gt; same behaviour is seen, the process hangs when &quot;-np 4&quot; is requested:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt; [username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun --debug-daemons -np
</span><br>
<span class="quotelev2">&gt;&gt; 3 --hostfile /home/username/.mpi_hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster3.mydomain.ca - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster5.mydomain.ca - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12927,0],1] checking in as pid 3096 on host cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12927,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12927,0],2] checking in as pid 11301 on host cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12927,0],2] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] node[1].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] node[2].name cluster5 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] node[3].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; INVALID arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] node[1].name cluster3
</span><br>
<span class="quotelev2">&gt;&gt; daemon 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] node[2].name cluster5
</span><br>
<span class="quotelev2">&gt;&gt; daemon 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] node[3].name cluster1
</span><br>
<span class="quotelev2">&gt;&gt; daemon INVALID arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] node[1].name cluster3
</span><br>
<span class="quotelev2">&gt;&gt; daemon 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] node[2].name cluster5
</span><br>
<span class="quotelev2">&gt;&gt; daemon 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] node[3].name cluster1
</span><br>
<span class="quotelev2">&gt;&gt; daemon INVALID arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; cluster.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12279] [[12927,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03096] [[12927,0],1] orted: finalizing
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11301] [[12927,0],2] orted: finalizing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt; [username_at_cluster ~]$ /usr/lib/openmpi/bin/mpirun --debug-daemons -np
</span><br>
<span class="quotelev2">&gt;&gt; 4 --hostfile /home/username/.mpi_hostfile hostname
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster5.mydomain.ca - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster3.mydomain.ca - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],2] checking in as pid 11325 on host cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],2] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on cluster1.mydomain.ca - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],1] checking in as pid 3120 on host cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],3] checking in as pid 5623 on host cluster1.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[12919,0],3] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [cluster1.mydomain.ca:05623] [[12919,0],3] orted: up and running -
</span><br>
<span class="quotelev2">&gt;&gt; waiting for commands!
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] node[1].name cluster3 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] node[2].name cluster5 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] node[3].name cluster1 daemon
</span><br>
<span class="quotelev2">&gt;&gt; 3 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] node[1].name cluster3
</span><br>
<span class="quotelev2">&gt;&gt; daemon 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] node[2].name cluster5
</span><br>
<span class="quotelev2">&gt;&gt; daemon 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] node[3].name cluster1
</span><br>
<span class="quotelev2">&gt;&gt; daemon 3 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] node[0].name cluster daemon
</span><br>
<span class="quotelev2">&gt;&gt; 0 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] node[1].name cluster3
</span><br>
<span class="quotelev2">&gt;&gt; daemon 1 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] node[2].name cluster5
</span><br>
<span class="quotelev2">&gt;&gt; daemon 2 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] node[3].name cluster1
</span><br>
<span class="quotelev2">&gt;&gt; daemon 3 arch ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; cluster.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; cluster3.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; cluster5.mydomain.ca
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster3.mydomain.ca:03120] [[12919,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [cluster5.mydomain.ca:11325] [[12919,0],2] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;THE PROCESS HANGS HERE&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev2">&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev2">&gt;&gt; Killed by signal 2.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 12288) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [cluster.mydomain.ca:12287] [[12919,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Notes:
</span><br>
<span class="quotelev2">&gt;&gt; 1. Passwordless ssh login between all cluster# machines works fine.
</span><br>
<span class="quotelev2">&gt;&gt; 2. It doesn't matter which two machines I specify in .mpi_hostfile. I
</span><br>
<span class="quotelev2">&gt;&gt; can always connect to 1 or 2 of them, and get the freeze when I try 3
</span><br>
<span class="quotelev2">&gt;&gt; or more.
</span><br>
<span class="quotelev2">&gt;&gt; 3. I installed Open MPI using the yum installer of Fedora. By default,
</span><br>
<span class="quotelev2">&gt;&gt; it chose /usr/lib/openmpi/ as the install directory, instead of the
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-... that is mentioned throughout the Open MPI FAQ. I
</span><br>
<span class="quotelev2">&gt;&gt; can't imagine that to be a problem...
</span><br>
<span class="quotelev2">&gt;&gt; 4. Supplying PATH and LD_LIBRARY_PATH: The Open MPI FAQ says
</span><br>
<span class="quotelev2">&gt;&gt; &quot;specifying the absolute pathname to mpirun is equivalent to using the
</span><br>
<span class="quotelev2">&gt;&gt; --prefix argument&quot;, so that's what I chose, after reading all the
</span><br>
<span class="quotelev2">&gt;&gt; scaremongering about modifying LD_LIBRARY_PATH :) Adding
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/usr/lib/openmpi/lib&quot; to the otherwise empty LD_LIBRARY_PATH produces
</span><br>
<span class="quotelev2">&gt;&gt; same results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone suggest a possible solution or at least a direction in
</span><br>
<span class="quotelev2">&gt;&gt; which I should continue my troubleshooting?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you all for your time,
</span><br>
<span class="quotelev2">&gt;&gt; Igor
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
Regards,
Igor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16040.php">Gus Correa: "Re: [OMPI users] keyval parser: error 1	reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
<li><strong>In reply to:</strong> <a href="16038.php">Ralph Castain: "Re: [OMPI users] Cannot launch slots on more than 2 remote machines"</a>
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
