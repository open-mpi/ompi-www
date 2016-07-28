<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul  2 07:56:05 2006" -->
<!-- isoreceived="20060702115605" -->
<!-- sent="Sun, 2 Jul 2006 07:55:50 -0400" -->
<!-- isosent="20060702115550" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB24235_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-02 07:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Maybe in reply to:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few clarifying questions:
<br>
<p>What is your netmask on these hosts?
<br>
<p>Where is the MPI_ALLREDUCE in your app -- right away, or somewhere deep
<br>
within the application?  Can you replicate this with a simple MPI
<br>
application that essentially calls MPI_INIT, MPI_ALLREDUCE, and
<br>
MPI_FINALIZE?
<br>
<p>Can you replicate this with a simple MPI app that does an MPI_SEND /
<br>
MPI_RECV between two processes on the different subnets?  
<br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of openmpi-user
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, July 02, 2006 7:20 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OS X, OpenMPI 1.1: An error occurred in 
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the nodes belong to different subnets the following 
</span><br>
<span class="quotelev1">&gt; error messages 
</span><br>
<span class="quotelev1">&gt; pop up:
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here hostfile sets up three nodes in two subnets (192.168.3.x and 
</span><br>
<span class="quotelev1">&gt; 192.168.2.x with mask 255.255.255.0). The 192.168.3.x-nodes are 
</span><br>
<span class="quotelev1">&gt; connected via Gigabit-Ethernet, the 192.168.2.x-nodes are 
</span><br>
<span class="quotelev1">&gt; connected via 
</span><br>
<span class="quotelev1">&gt; WLAN.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Frank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the full output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [powerbook:/Network/CFD/MVH-1.0] motte% mpirun -d -np 7 --hostfile 
</span><br>
<span class="quotelev1">&gt; ./hostfile /Network/CFD/MVH-1.0/vhone
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] top: openmpi-sessions-motte_at_powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] connect_uni: contact info read
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         host powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         jobid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821]         procid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; -20821/0/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe-20821/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] top: openmpi-sessions-motte_at_powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe
</span><br>
-20821/universe-setup.txt
<br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: local csh: 1, local bash: 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: assuming same remote shell 
</span><br>
<span class="quotelev1">&gt; as local shell
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: remote csh: 1, remote bash: 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted 
</span><br>
<span class="quotelev1">&gt; --debug --bootproxy 1 --name &lt;template&gt; --num_procs 4 --vpid_start 0 
</span><br>
<span class="quotelev1">&gt; --nodename &lt;template&gt; --universe 
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe-20821 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: launching on node Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: not oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: Powerbook.2-net is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: changing to directory /Users/motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: executing: orted --debug 
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 4 --vpid_start 0 --nodename Powerbook.2-net 
</span><br>
<span class="quotelev1">&gt; --universe motte_at_powerbook.2-net:default-universe-20821 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822]         universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822]         host Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822]         jobid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822]         procid 1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; -20821/0/1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe-20821/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] top: openmpi-sessions-motte_at_Powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20822] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: launching on node g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: not oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: g4d003.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: executing: /usr/bin/ssh g4d003.3-net 
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.2 --num_procs 4 --vpid_start 0 
</span><br>
<span class="quotelev1">&gt; --nodename g4d003.3-net --universe 
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe-20821 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: launching on node G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: not oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: G5Dual.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] pls:rsh: executing: /usr/bin/ssh G5Dual.3-net 
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.3 --num_procs 4 --vpid_start 0 
</span><br>
<span class="quotelev1">&gt; --nodename G5Dual.3-net --universe 
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe-20821 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:54609&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396]    host g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396]    procid 2
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/0/2
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] top: openmpi-sessions-motte_at_g4d003.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00396] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] [0,0,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938]    procid 3
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/0/3
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00938] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] [0,1,6] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826]         universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826]         host Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826]         jobid 1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826]         procid 6
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; -20821/1/6
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] top: openmpi-sessions-motte_at_Powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] [0,1,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946]    procid 3
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1/3
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942]    procid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] [0,1,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944]    procid 2
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1/2
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] [0,1,4] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398]    host g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398]    procid 4
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/1/4
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] top: openmpi-sessions-motte_at_g4d003.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] [0,1,5] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400]    universe default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400]    host g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400]    procid 5
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/1/5
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821/1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe-20821
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] top: openmpi-sessions-motte_at_g4d003.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] spawn: in job_state_callback(jobid = 
</span><br>
<span class="quotelev1">&gt; 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20821] Info: Setting up debugger process table for 
</span><br>
<span class="quotelev1">&gt; applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_gate = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_acquired_pre_main = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 7
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, G5Dual.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 940)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, G5Dual.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 942)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, G5Dual.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 944)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (3, G5Dual.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 946)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (4, g4d003.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 398)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (5, g4d003.3-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 400)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (6, Powerbook.2-net, 
</span><br>
<span class="quotelev1">&gt; /Network/CFD/MVH-1.0/vhone, 20826)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] [0,1,6] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00940] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00942] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00944] [0,1,2] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00946] [0,1,3] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00398] [0,1,4] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00400] [0,1,5] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:20826] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: powerbook.2-net
</span><br>
<span class="quotelev1">&gt; PID:  20826
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d003.3-net
</span><br>
<span class="quotelev1">&gt; PID:  398
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; (skipped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1526.php">Jack Howarth: "[OMPI users] open-mpi on MacOS X"</a>
<li><strong>Previous message:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
<li><strong>Maybe in reply to:</strong> <a href="1524.php">openmpi-user: "[OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on communicator MPI_COMM_WORLD"</a>
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
