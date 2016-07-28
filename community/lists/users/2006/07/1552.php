<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 13:14:29 2006" -->
<!-- isoreceived="20060705171429" -->
<!-- sent="Wed, 05 Jul 2006 19:15:37 +0200" -->
<!-- isosent="20060705171537" -->
<!-- name="Frank Kahle" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))" -->
<!-- id="44ABF3B9.5060909_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.13.1151856005.7376.users_at_open-mpi.org" -->
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
<strong>From:</strong> Frank Kahle (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 13:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1553.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>Reply:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; A few clarifying questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is your netmask on these hosts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where is the MPI_ALLREDUCE in your app -- right away, or somewhere deep
</span><br>
<span class="quotelev1">&gt; within the application?  Can you replicate this with a simple MPI
</span><br>
<span class="quotelev1">&gt; application that essentially calls MPI_INIT, MPI_ALLREDUCE, and
</span><br>
<span class="quotelev1">&gt; MPI_FINALIZE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you replicate this with a simple MPI app that does an MPI_SEND /
</span><br>
<span class="quotelev1">&gt; MPI_RECV between two processes on the different subnets?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>@ Jeff,
<br>
<p>netmask 255.255.255.0
<br>
<p>Running a simple &quot;hello world&quot; yields no error on each subnet, but 
<br>
running &quot;hello world&quot; on both subnets yields the error
<br>
<p>[g5dual.3-net:00436] *** An error occurred in MPI_Send
<br>
[g5dual.3-net:00436] *** on communicator MPI_COMM_WORLD
<br>
[g5dual.3-net:00436] *** MPI_ERR_INTERN: internal error
<br>
[g5dual.3-net:00436] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Hope this helps!
<br>
<p>Frank
<br>
<p><p>Just in case you wanna check the source:
<br>
c    Fortran example hello_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer rank, size, ierror, tag, status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*12 message
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tag = 100
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;message = 'Hello, world'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1, size-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(message, 12, MPI_CHARACTER, i, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                  MPI_COMM_WORLD, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV(message, 12, MPI_CHARACTER, 0, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                MPI_COMM_WORLD, status, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'node', rank, ':', message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p><p>or the full output:
<br>
<p>[powerbook:/Network/CFD/hello] motte% mpirun -d -np 5 --hostfile 
<br>
./hostfile /Network/CFD/hello/hello_world
<br>
[powerbook.2-net:00606] [0,0,0] setting up session dir with
<br>
[powerbook.2-net:00606]         universe default-universe
<br>
[powerbook.2-net:00606]         user motte
<br>
[powerbook.2-net:00606]         host powerbook.2-net
<br>
[powerbook.2-net:00606]         jobid 0
<br>
[powerbook.2-net:00606]         procid 0
<br>
[powerbook.2-net:00606] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/0/0
<br>
[powerbook.2-net:00606] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/0
<br>
[powerbook.2-net:00606] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe
<br>
[powerbook.2-net:00606] top: openmpi-sessions-motte_at_powerbook.2-net_0
<br>
[powerbook.2-net:00606] tmp: /tmp
<br>
[powerbook.2-net:00606] [0,0,0] contact_file 
<br>
/tmp/openmpi-sessions-motte_at_powerbook.2-net_0/default-universe/universe-setup.txt
<br>
[powerbook.2-net:00606] [0,0,0] wrote setup file
<br>
[powerbook.2-net:00606] pls:rsh: local csh: 1, local bash: 0
<br>
[powerbook.2-net:00606] pls:rsh: assuming same remote shell as local shell
<br>
[powerbook.2-net:00606] pls:rsh: remote csh: 1, remote bash: 0
<br>
[powerbook.2-net:00606] pls:rsh: final template argv:
<br>
[powerbook.2-net:00606] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted 
<br>
--debug --bootproxy 1 --name &lt;template&gt; --num_procs 6 --vpid_start 0 
<br>
--nodename &lt;template&gt; --universe motte_at_powerbook.2-net:default-universe 
<br>
--nsreplica &quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[powerbook.2-net:00606] pls:rsh: launching on node Powerbook.2-net
<br>
[powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting 
<br>
mpi_yield_when_idle to 0
<br>
[powerbook.2-net:00606] pls:rsh: Powerbook.2-net is a LOCAL node
<br>
[powerbook.2-net:00606] pls:rsh: changing to directory /Users/motte
<br>
[powerbook.2-net:00606] pls:rsh: executing: orted --debug --bootproxy 1 
<br>
--name 0.0.1 --num_procs 6 --vpid_start 0 --nodename Powerbook.2-net 
<br>
--universe motte_at_powerbook.2-net:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[powerbook.2-net:00607] [0,0,1] setting up session dir with
<br>
[powerbook.2-net:00607]         universe default-universe
<br>
[powerbook.2-net:00607]         user motte
<br>
[powerbook.2-net:00607]         host Powerbook.2-net
<br>
[powerbook.2-net:00607]         jobid 0
<br>
[powerbook.2-net:00607]         procid 1
<br>
[powerbook.2-net:00607] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/0/1
<br>
[powerbook.2-net:00607] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/0
<br>
[powerbook.2-net:00607] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
<br>
[powerbook.2-net:00607] top: openmpi-sessions-motte_at_Powerbook.2-net_0
<br>
[powerbook.2-net:00607] tmp: /tmp
<br>
[powerbook.2-net:00606] pls:rsh: launching on node g4d003.3-net
<br>
[powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting 
<br>
mpi_yield_when_idle to 0
<br>
[powerbook.2-net:00606] pls:rsh: g4d003.3-net is a REMOTE node
<br>
[powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d003.3-net 
<br>
orted --debug --bootproxy 1 --name 0.0.2 --num_procs 6 --vpid_start 0 
<br>
--nodename g4d003.3-net --universe 
<br>
motte_at_powerbook.2-net:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[g4d003.3-net:00411] [0,0,2] setting up session dir with
<br>
[g4d003.3-net:00411]    universe default-universe
<br>
[g4d003.3-net:00411]    user motte
<br>
[g4d003.3-net:00411]    host g4d003.3-net
<br>
[g4d003.3-net:00411]    jobid 0
<br>
[g4d003.3-net:00411]    procid 2
<br>
[g4d003.3-net:00411] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/0/2
<br>
[g4d003.3-net:00411] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/0
<br>
[g4d003.3-net:00411] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe
<br>
[g4d003.3-net:00411] top: openmpi-sessions-motte_at_g4d003.3-net_0
<br>
[g4d003.3-net:00411] tmp: /tmp
<br>
[powerbook.2-net:00606] pls:rsh: launching on node g4d002.3-net
<br>
[powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting 
<br>
mpi_yield_when_idle to 0
<br>
[powerbook.2-net:00606] pls:rsh: g4d002.3-net is a REMOTE node
<br>
[powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d002.3-net 
<br>
orted --debug --bootproxy 1 --name 0.0.3 --num_procs 6 --vpid_start 0 
<br>
--nodename g4d002.3-net --universe 
<br>
motte_at_powerbook.2-net:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[powerbook.2-net:00606] pls:rsh: launching on node g4d001.3-net
<br>
[powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting 
<br>
mpi_yield_when_idle to 0
<br>
[powerbook.2-net:00606] pls:rsh: g4d001.3-net is a REMOTE node
<br>
[powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh g4d001.3-net 
<br>
orted --debug --bootproxy 1 --name 0.0.4 --num_procs 6 --vpid_start 0 
<br>
--nodename g4d001.3-net --universe 
<br>
motte_at_powerbook.2-net:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[powerbook.2-net:00606] pls:rsh: launching on node G5Dual.3-net
<br>
[powerbook.2-net:00606] pls:rsh: not oversubscribed -- setting 
<br>
mpi_yield_when_idle to 0
<br>
[powerbook.2-net:00606] pls:rsh: G5Dual.3-net is a REMOTE node
<br>
[powerbook.2-net:00606] pls:rsh: executing: /usr/bin/ssh G5Dual.3-net 
<br>
orted --debug --bootproxy 1 --name 0.0.5 --num_procs 6 --vpid_start 0 
<br>
--nodename G5Dual.3-net --universe 
<br>
motte_at_powerbook.2-net:default-universe --nsreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --gprreplica 
<br>
&quot;0.0.0;tcp://192.168.2.3:49443&quot; --mpi-call-yield 0
<br>
[g4d001.3-net:00336] [0,0,4] setting up session dir with
<br>
[g4d001.3-net:00336]    universe default-universe
<br>
[g4d001.3-net:00336]    user motte
<br>
[g4d001.3-net:00336]    host g4d001.3-net
<br>
[g4d001.3-net:00336]    jobid 0
<br>
[g4d001.3-net:00336]    procid 4
<br>
[g4d001.3-net:00336] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/0/4
<br>
[g4d001.3-net:00336] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/0
<br>
[g4d001.3-net:00336] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe
<br>
[g4d001.3-net:00336] top: openmpi-sessions-motte_at_g4d001.3-net_0
<br>
[g4d001.3-net:00336] tmp: /tmp
<br>
[g4d002.3-net:00279] [0,0,3] setting up session dir with
<br>
[g4d002.3-net:00279]    universe default-universe
<br>
[g4d002.3-net:00279]    user motte
<br>
[g4d002.3-net:00279]    host g4d002.3-net
<br>
[g4d002.3-net:00279]    jobid 0
<br>
[g4d002.3-net:00279]    procid 3
<br>
[g4d002.3-net:00279] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/0/3
<br>
[g4d002.3-net:00279] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/0
<br>
[g4d002.3-net:00279] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe
<br>
[g4d002.3-net:00279] top: openmpi-sessions-motte_at_g4d002.3-net_0
<br>
[g4d002.3-net:00279] tmp: /tmp
<br>
[g5dual.3-net:00434] [0,0,5] setting up session dir with
<br>
[g5dual.3-net:00434]    universe default-universe
<br>
[g5dual.3-net:00434]    user motte
<br>
[g5dual.3-net:00434]    host G5Dual.3-net
<br>
[g5dual.3-net:00434]    jobid 0
<br>
[g5dual.3-net:00434]    procid 5
<br>
[g5dual.3-net:00434] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/0/5
<br>
[g5dual.3-net:00434] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/0
<br>
[g5dual.3-net:00434] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe
<br>
[g5dual.3-net:00434] top: openmpi-sessions-motte_at_G5Dual.3-net_0
<br>
[g5dual.3-net:00434] tmp: /tmp
<br>
[powerbook.2-net:00613] [0,1,4] setting up session dir with
<br>
[powerbook.2-net:00613]         universe default-universe
<br>
[powerbook.2-net:00613]         user motte
<br>
[powerbook.2-net:00613]         host Powerbook.2-net
<br>
[powerbook.2-net:00613]         jobid 1
<br>
[powerbook.2-net:00613]         procid 4
<br>
[powerbook.2-net:00613] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/1/4
<br>
[powerbook.2-net:00613] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe/1
<br>
[powerbook.2-net:00613] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_Powerbook.2-net_0/default-universe
<br>
[powerbook.2-net:00613] top: openmpi-sessions-motte_at_Powerbook.2-net_0
<br>
[powerbook.2-net:00613] tmp: /tmp
<br>
[g5dual.3-net:00436] [0,1,0] setting up session dir with
<br>
[g5dual.3-net:00436]    universe default-universe
<br>
[g5dual.3-net:00436]    user motte
<br>
[g5dual.3-net:00436]    host G5Dual.3-net
<br>
[g5dual.3-net:00436]    jobid 1
<br>
[g5dual.3-net:00436]    procid 0
<br>
[g5dual.3-net:00436] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/1/0
<br>
[g5dual.3-net:00436] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe/1
<br>
[g5dual.3-net:00436] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_G5Dual.3-net_0/default-universe
<br>
[g5dual.3-net:00436] top: openmpi-sessions-motte_at_G5Dual.3-net_0
<br>
[g5dual.3-net:00436] tmp: /tmp
<br>
[g4d001.3-net:00338] [0,1,1] setting up session dir with
<br>
[g4d001.3-net:00338]    universe default-universe
<br>
[g4d001.3-net:00338]    user motte
<br>
[g4d001.3-net:00338]    host g4d001.3-net
<br>
[g4d001.3-net:00338]    jobid 1
<br>
[g4d001.3-net:00338]    procid 1
<br>
[g4d001.3-net:00338] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/1/1
<br>
[g4d001.3-net:00338] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe/1
<br>
[g4d001.3-net:00338] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d001.3-net_0/default-universe
<br>
[g4d001.3-net:00338] top: openmpi-sessions-motte_at_g4d001.3-net_0
<br>
[g4d001.3-net:00338] tmp: /tmp
<br>
[g4d003.3-net:00413] [0,1,3] setting up session dir with
<br>
[g4d003.3-net:00413]    universe default-universe
<br>
[g4d003.3-net:00413]    user motte
<br>
[g4d003.3-net:00413]    host g4d003.3-net
<br>
[g4d003.3-net:00413]    jobid 1
<br>
[g4d003.3-net:00413]    procid 3
<br>
[g4d003.3-net:00413] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/1/3
<br>
[g4d003.3-net:00413] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe/1
<br>
[g4d003.3-net:00413] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d003.3-net_0/default-universe
<br>
[g4d003.3-net:00413] top: openmpi-sessions-motte_at_g4d003.3-net_0
<br>
[g4d003.3-net:00413] tmp: /tmp
<br>
[g4d002.3-net:00281] [0,1,2] setting up session dir with
<br>
[g4d002.3-net:00281]    universe default-universe
<br>
[g4d002.3-net:00281]    user motte
<br>
[g4d002.3-net:00281]    host g4d002.3-net
<br>
[g4d002.3-net:00281]    jobid 1
<br>
[g4d002.3-net:00281]    procid 2
<br>
[g4d002.3-net:00281] procdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/1/2
<br>
[g4d002.3-net:00281] jobdir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe/1
<br>
[g4d002.3-net:00281] unidir: 
<br>
/tmp/openmpi-sessions-motte_at_g4d002.3-net_0/default-universe
<br>
[g4d002.3-net:00281] top: openmpi-sessions-motte_at_g4d002.3-net_0
<br>
[g4d002.3-net:00281] tmp: /tmp
<br>
[powerbook.2-net:00606] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[powerbook.2-net:00606] Info: Setting up debugger process table for 
<br>
applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 5
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, G5Dual.3-net, 
<br>
/Network/CFD/hello/hello_world, 436)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, g4d001.3-net, 
<br>
/Network/CFD/hello/hello_world, 338)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (2, g4d002.3-net, 
<br>
/Network/CFD/hello/hello_world, 281)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (3, g4d003.3-net, 
<br>
/Network/CFD/hello/hello_world, 413)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (4, Powerbook.2-net, 
<br>
/Network/CFD/hello/hello_world, 613)
<br>
[powerbook.2-net:00613] [0,1,4] ompi_mpi_init completed
<br>
[g4d001.3-net:00338] [0,1,1] ompi_mpi_init completed
<br>
[g5dual.3-net:00436] [0,1,0] ompi_mpi_init completed
<br>
[g4d003.3-net:00413] [0,1,3] ompi_mpi_init completed
<br>
[g4d002.3-net:00281] [0,1,2] ompi_mpi_init completed
<br>
&nbsp;node           1 :Hello, world
<br>
&nbsp;node           2 :Hello, world node           3 :Hello, world
<br>
[g5dual.3-net:00436] *** An error occurred in MPI_Send
<br>
<p>[g5dual.3-net:00436] *** on communicator MPI_COMM_WORLD
<br>
[g5dual.3-net:00436] *** MPI_ERR_INTERN: internal error
<br>
[g5dual.3-net:00436] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: powerbook.2-net
<br>
PID:  613
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d003.3-net
<br>
PID:  413
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g5dual.3-net
<br>
PID:  436
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d002.3-net
<br>
PID:  281
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d001.3-net
<br>
PID:  338
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
[g5dual.3-net:00434] sess_dir_finalize: found proc session dir empty - 
<br>
deleting
<br>
[g5dual.3-net:00434] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g5dual.3-net:00434] sess_dir_finalize: univ session dir not empty - leaving
<br>
[powerbook.2-net:00607] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[g5dual.3-net:00434] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[g4d003.3-net:00411] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[g4d001.3-net:00336] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[g5dual.3-net:00434] sess_dir_finalize: job session dir not empty - leaving
<br>
[g5dual.3-net:00434] sess_dir_finalize: found proc session dir empty - 
<br>
deleting
<br>
[g5dual.3-net:00434] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g5dual.3-net:00434] sess_dir_finalize: found univ session dir empty - 
<br>
deleting
<br>
[g5dual.3-net:00434] sess_dir_finalize: found top session dir empty - 
<br>
deleting
<br>
[g4d002.3-net:00279] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_ABORTED)
<br>
[g4d002.3-net:00279] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d002.3-net:00279] sess_dir_finalize: univ session dir not empty - leaving
<br>
[g4d002.3-net:00279] sess_dir_finalize: proc session dir not empty - leaving
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d002.3-net
<br>
PID:  281
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d002.3-net
<br>
PID:  281
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
[g4d002.3-net:00279] sess_dir_finalize: found proc session dir empty - 
<br>
deleting
<br>
[g4d002.3-net:00279] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d002.3-net:00279] sess_dir_finalize: found univ session dir empty - 
<br>
deleting
<br>
[g4d002.3-net:00279] sess_dir_finalize: found top session dir empty - 
<br>
deleting
<br>
[powerbook.2-net:00607] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[powerbook.2-net:00607] sess_dir_finalize: univ session dir not empty - 
<br>
leaving
<br>
[powerbook.2-net:00607] sess_dir_finalize: proc session dir not empty - 
<br>
leaving
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: powerbook.2-net
<br>
PID:  613
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: powerbook.2-net
<br>
PID:  613
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
[powerbook.2-net:00607] sess_dir_finalize: found proc session dir empty 
<br>
- deleting
<br>
[powerbook.2-net:00607] sess_dir_finalize: job session dir not empty - 
<br>
leaving
<br>
[g4d001.3-net:00336] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d001.3-net:00336] sess_dir_finalize: univ session dir not empty - leaving
<br>
[g4d001.3-net:00336] sess_dir_finalize: proc session dir not empty - leaving
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d001.3-net
<br>
PID:  338
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d001.3-net
<br>
PID:  338
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
[g4d001.3-net:00336] sess_dir_finalize: found proc session dir empty - 
<br>
deleting
<br>
[g4d001.3-net:00336] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d001.3-net:00336] sess_dir_finalize: found univ session dir empty - 
<br>
deleting
<br>
[g4d001.3-net:00336] sess_dir_finalize: found top session dir empty - 
<br>
deleting
<br>
[g4d003.3-net:00411] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d003.3-net:00411] sess_dir_finalize: univ session dir not empty - leaving
<br>
[g4d003.3-net:00411] sess_dir_finalize: proc session dir not empty - leaving
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d003.3-net
<br>
PID:  413
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: A process refused to die!
<br>
<p>Host: g4d003.3-net
<br>
PID:  413
<br>
<p>This process may still be running and/or consuming resources.
<br>
--------------------------------------------------------------------------
<br>
1 process killed (possibly by Open MPI)
<br>
[g4d003.3-net:00411] orted: job_state_callback(jobid = 1, state = 
<br>
ORTE_PROC_STATE_TERMINATED)
<br>
[g4d003.3-net:00411] sess_dir_finalize: found proc session dir empty - 
<br>
deleting
<br>
[g4d003.3-net:00411] sess_dir_finalize: found job session dir empty - 
<br>
deleting
<br>
[g4d003.3-net:00411] sess_dir_finalize: found univ session dir empty - 
<br>
deleting
<br>
[g4d003.3-net:00411] sess_dir_finalize: found top session dir empty - 
<br>
deleting
<br>
[powerbook:/Network/CFD/hello] motte%
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1553.php">s anwar: "[OMPI users] MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="1551.php">Brian Barrett: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>Reply:</strong> <a href="1689.php">Jeff Squyres: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
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
