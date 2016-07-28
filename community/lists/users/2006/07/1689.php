<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 28 13:05:47 2006" -->
<!-- isoreceived="20060728170547" -->
<!-- sent="Fri, 28 Jul 2006 13:05:28 -0400" -->
<!-- isosent="20060728170528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))" -->
<!-- id="C0EFBC18.BBB2%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44ABF3B9.5060909_at_fraka-mp.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-28 13:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1688.php">Jeff Squyres: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trolling through some really old messages that never got replies... :-(
<br>
<p>The behavior that you are seeing is happening as the result of a really long
<br>
discussion among the OMPI developers when we were writing the TCP device.
<br>
The problem is that there is ambiguity when connecting peers across TCP in
<br>
Open MPI.  Specifically, since OMPI can span multiple TCP networks, each MPI
<br>
process may be able to use multiple IP addresses to each to each other MPI
<br>
process (and vice versa).  So we have to try to figure out which IP
<br>
addresses can speak to which others.
<br>
<p>For example, say that you have a cluster with 16 nodes on a private ethernet
<br>
network.  One of these nodes doubles as the head node for the cluster and
<br>
therefore has 2 ethernet NICs -- one to the external network and one to the
<br>
internal cluster network.  But since 16 is a nice number, you also want to
<br>
use it for computation as well.  So when you mpirun spanning all 16 nodes,
<br>
OMPI has to figure out to *not* use the external NIC on the head node and
<br>
only use the internal NIC.
<br>
<p>TCP connections are only made upon demand which is why you only see this
<br>
behavior if two processes actually attempt to communicate via MPI (i.e.,
<br>
&quot;hello world&quot; with no sending/receiving works fine, but adding the
<br>
MPI_SEND/MPI_RECV makes it fail).
<br>
<p>We make connections by having all MPI processes exchange their IP
<br>
address(es) and port number(s) during MPI_INIT (via a common rendevouz
<br>
point, typically mpirun).  Then, whenever a connection is requested between
<br>
two processes, we apply a small set of rules to all pair combinations of IP
<br>
addresses of those processes:
<br>
<p>1. If the two IP addresses match after the subnet mask is applied, assume
<br>
that they are mutually routable and allow the connection
<br>
2. If the two IP addresses are public, assume that they are mutually
<br>
routable and allow the connection
<br>
3. Otherwise, the connection is disallowed (this is not an error -- we just
<br>
disallow this connection on the hope that some other device can be used to
<br>
make a connection).
<br>
<p>What is happening in your case is that you're falling through to #3 for all
<br>
IP address pair combinations and there is no other device that can reach
<br>
these processes.  Therefore OMPI thinks that it has no channel to reach the
<br>
remote process.  So it bails (in a horribly non-descriptive way :-( ).
<br>
<p>We actually have a very long comment about this in the TCP code and mention
<br>
that your scenario (lots of hosts in a single cluster with private addresses
<br>
and relatively narrow subnet masks, even though all addresses are, in fact,
<br>
routable to each other) is not currently supported -- and that we need to do
<br>
something &quot;better&quot;.  &quot;Better&quot; in this case probably means having a
<br>
configuration file that specifies what hosts are mutually routable when the
<br>
above rules don't work.  Do you have any suggestions on this front?
<br>
<p><p><p>On 7/5/06 1:15 PM, &quot;Frank Kahle&quot; &lt;openmpi-user_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A few clarifying questions:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is your netmask on these hosts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where is the MPI_ALLREDUCE in your app -- right away, or somewhere deep
</span><br>
<span class="quotelev2">&gt;&gt; within the application?  Can you replicate this with a simple MPI
</span><br>
<span class="quotelev2">&gt;&gt; application that essentially calls MPI_INIT, MPI_ALLREDUCE, and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FINALIZE?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you replicate this with a simple MPI app that does an MPI_SEND /
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RECV between two processes on the different subnets?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @ Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; netmask 255.255.255.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running a simple &quot;hello world&quot; yields no error on each subnet, but
</span><br>
<span class="quotelev1">&gt; running &quot;hello world&quot; on both subnets yields the error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Frank
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just in case you wanna check the source:
</span><br>
<span class="quotelev1">&gt; c    Fortran example hello_world
</span><br>
<span class="quotelev1">&gt;       program hello
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;       integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;       character*12 message
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       call MPI_INIT(ierror)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
</span><br>
<span class="quotelev1">&gt;       tag = 100
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       if (rank .eq. 0) then
</span><br>
<span class="quotelev1">&gt;         message = 'Hello, world'
</span><br>
<span class="quotelev1">&gt;         do i=1, size-1
</span><br>
<span class="quotelev1">&gt;           call MPI_SEND(message, 12, MPI_CHARACTER, i, tag,
</span><br>
<span class="quotelev1">&gt;      &amp;                  MPI_COMM_WORLD, ierror)
</span><br>
<span class="quotelev1">&gt;         enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       else
</span><br>
<span class="quotelev1">&gt;         call MPI_RECV(message, 12, MPI_CHARACTER, 0, tag,
</span><br>
<span class="quotelev1">&gt;      &amp;                MPI_COMM_WORLD, status, ierror)
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       print*, 'node', rank, ':', message
</span><br>
<span class="quotelev1">&gt;       call MPI_FINALIZE(ierror)
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or the full output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [powerbook:/Network/CFD/hello] motte% mpirun -d -np 5 --hostfile
</span><br>
<span class="quotelev1">&gt; ./hostfile /Network/CFD/hello/hello_world
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606]         universe default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606]         host powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606]         jobid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606]         procid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] top: openmpi-sessions-motte_at_powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/universe-setup.
</span><br>
<span class="quotelev1">&gt; txt
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: local csh: 1, local bash: 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: remote csh: 1, remote bash: 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted
</span><br>
<span class="quotelev1">&gt; --debug --bootproxy 1 --name &lt;template&gt; --num_procs 6 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename &lt;template&gt; --universe motte_at_powerbook.2-net:default-universe
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: launching on node Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: Powerbook.2-net is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: changing to directory /Users/motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: executing: orted --debug --bootproxy 1
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 6 --vpid_start 0 --nodename Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; --universe motte_at_powerbook.2-net:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607]         universe default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607]         host Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607]         jobid 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607]         procid 1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/0/1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] top: openmpi-sessions-motte_at_Powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: launching on node g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: g4d003.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d003.3-net
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.2 --num_procs 6 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename g4d003.3-net --universe
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] [0,0,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411]    host g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411]    procid 2
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/0/2
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] top: openmpi-sessions-motte_at_g4d003.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: launching on node g4d002.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: g4d002.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d002.3-net
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.3 --num_procs 6 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename g4d002.3-net --universe
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: launching on node g4d001.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: g4d001.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d001.3-net
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.4 --num_procs 6 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename g4d001.3-net --universe
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: launching on node G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: G5Dual.3-net is a REMOTE node
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; orted --debug --bootproxy 1 --name 0.0.5 --num_procs 6 --vpid_start 0
</span><br>
<span class="quotelev1">&gt; --nodename G5Dual.3-net --universe
</span><br>
<span class="quotelev1">&gt; motte_at_powerbook.2-net:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] [0,0,4] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336]    host g4d001.3-net
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336]    procid 4
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/0/4
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] top: openmpi-sessions-motte_at_g4d001.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] [0,0,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279]    host g4d002.3-net
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279]    procid 3
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/0/3
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] top: openmpi-sessions-motte_at_g4d002.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] [0,0,5] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434]    procid 5
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/0/5
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] [0,1,4] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613]         universe default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613]         user motte
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613]         host Powerbook.2-net
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613]         jobid 1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613]         procid 4
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/1/4
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] top: openmpi-sessions-motte_at_Powerbook.2-net_0
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436]    host G5Dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/1/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] top: openmpi-sessions-motte_at_G5Dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338]    host g4d001.3-net
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338]    procid 1
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/1/1
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] top: openmpi-sessions-motte_at_g4d001.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] [0,1,3] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413]    host g4d003.3-net
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413]    procid 3
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/1/3
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] top: openmpi-sessions-motte_at_g4d003.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] [0,1,2] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281]    user motte
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281]    host g4d002.3-net
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281]    procid 2
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/1/2
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] top: openmpi-sessions-motte_at_g4d002.3-net_0
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00606] Info: Setting up debugger process table for
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
<span class="quotelev1">&gt;   MPIR_proctable_size = 5
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, G5Dual.3-net,
</span><br>
<span class="quotelev1">&gt; /Network/CFD/hello/hello_world, 436)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, g4d001.3-net,
</span><br>
<span class="quotelev1">&gt; /Network/CFD/hello/hello_world, 338)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, g4d002.3-net,
</span><br>
<span class="quotelev1">&gt; /Network/CFD/hello/hello_world, 281)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (3, g4d003.3-net,
</span><br>
<span class="quotelev1">&gt; /Network/CFD/hello/hello_world, 413)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (4, Powerbook.2-net,
</span><br>
<span class="quotelev1">&gt; /Network/CFD/hello/hello_world, 613)
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00613] [0,1,4] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00338] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00413] [0,1,3] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00281] [0,1,2] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;  node           1 :Hello, world
</span><br>
<span class="quotelev1">&gt;  node           2 :Hello, world node           3 :Hello, world
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00436] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: powerbook.2-net
</span><br>
<span class="quotelev1">&gt; PID:  613
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d003.3-net
</span><br>
<span class="quotelev1">&gt; PID:  413
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g5dual.3-net
</span><br>
<span class="quotelev1">&gt; PID:  436
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d002.3-net
</span><br>
<span class="quotelev1">&gt; PID:  281
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d001.3-net
</span><br>
<span class="quotelev1">&gt; PID:  338
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found proc session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found proc session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found univ session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00434] sess_dir_finalize: found top session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_ABORTED)
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d002.3-net
</span><br>
<span class="quotelev1">&gt; PID:  281
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d002.3-net
</span><br>
<span class="quotelev1">&gt; PID:  281
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: found proc session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: found univ session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d002.3-net:00279] sess_dir_finalize: found top session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] sess_dir_finalize: univ session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] sess_dir_finalize: proc session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: powerbook.2-net
</span><br>
<span class="quotelev1">&gt; PID:  613
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: powerbook.2-net
</span><br>
<span class="quotelev1">&gt; PID:  613
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] sess_dir_finalize: found proc session dir empty
</span><br>
<span class="quotelev1">&gt; - deleting
</span><br>
<span class="quotelev1">&gt; [powerbook.2-net:00607] sess_dir_finalize: job session dir not empty -
</span><br>
<span class="quotelev1">&gt; leaving
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d001.3-net
</span><br>
<span class="quotelev1">&gt; PID:  338
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d001.3-net
</span><br>
<span class="quotelev1">&gt; PID:  338
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: found proc session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: found univ session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d001.3-net:00336] sess_dir_finalize: found top session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: univ session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d003.3-net
</span><br>
<span class="quotelev1">&gt; PID:  413
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: A process refused to die!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Host: g4d003.3-net
</span><br>
<span class="quotelev1">&gt; PID:  413
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This process may still be running and/or consuming resources.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_TERMINATED)
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: found proc session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: found job session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: found univ session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [g4d003.3-net:00411] sess_dir_finalize: found top session dir empty -
</span><br>
<span class="quotelev1">&gt; deleting
</span><br>
<span class="quotelev1">&gt; [powerbook:/Network/CFD/hello] motte%
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1690.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_send: writev failed with errno=110"</a>
<li><strong>Previous message:</strong> <a href="1688.php">Jeff Squyres: "Re: [OMPI users] Problem with Openmpi 1.1"</a>
<li><strong>In reply to:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
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
