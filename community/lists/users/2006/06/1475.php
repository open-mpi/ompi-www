<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 07:58:45 2006" -->
<!-- isoreceived="20060628115845" -->
<!-- sent="Wed, 28 Jun 2006 13:56:32 +0200" -->
<!-- isosent="20060628115632" -->
<!-- name="Frank" -->
<!-- email="openmpi-user_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error:	0), si_code:1(BUS_ADRALN) (Frank)" -->
<!-- id="44A26E70.8030903_at_fraka-mp.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.396.1151492176.3329.users_at_open-mpi.org" -->
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
<strong>From:</strong> Frank (<em>openmpi-user_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-28 07:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1474.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0) si_code:1(BUS_ADRALN)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>The very same error occured with openmpi-1.1rc2r10468, too.
<br>
<p>Yours,
<br>
Frank
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown error:	0)
</span><br>
<span class="quotelev1">&gt;       si_code:1(BUS_ADRALN) (Frank)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Jun 2006 12:53:14 +0200
</span><br>
<span class="quotelev1">&gt; From: Frank &lt;openmpi-user_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown
</span><br>
<span class="quotelev1">&gt; 	error:	0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;44A25F9A.3070800_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've recently updated to OpenMPI 1.1 on a few nodes and running into a 
</span><br>
<span class="quotelev1">&gt; problem that wasn't there with OpenMPI 1.0.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Submitting a job to the XGrid with OpenMPI 1.1 yields a Bus error that 
</span><br>
<span class="quotelev1">&gt; isn't there when not submitting the job to the XGrid:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794]    host g5dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] top: openmpi-sessions-motte_at_g5dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08794] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; Signal:10 info.si_errno:0(Unknown error: 0) si_code:1(BUS_ADRALN)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x10
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Bus error
</span><br>
<span class="quotelev1">&gt; [g5dual:/Network/CFD/MVH-1.0] motte%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When not xgrid-submitting the job with OpenMPI 1.1 everything is just fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] procdir: (null)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] jobdir: (null)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] top: openmpi-sessions-motte_at_g5dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] connect_uni: contact info read
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    tmpdir /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    universe default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    host g5dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/0/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] top: openmpi-sessions-motte_at_g5dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe-8957/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: local csh: 1, local bash: 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: remote csh: 1, remote bash: 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug 
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 --name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename 
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe motte_at_g5dual.3-net:default-universe-8957 
</span><br>
<span class="quotelev1">&gt; --nsreplica &quot;0.0.0;tcp://192.168.3.2:49281&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.3.2:49281&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: oversubscribed -- setting 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 1 (1 2)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: changing to directory /Users/motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] pls:rsh: executing: orted --debug --bootproxy 1 
</span><br>
<span class="quotelev1">&gt; --name 0.0.1 --num_procs 2 --vpid_start 0 --nodename localhost 
</span><br>
<span class="quotelev1">&gt; --universe motte_at_g5dual.3-net:default-universe-8957 --nsreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.3.2:49281&quot; --gprreplica 
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://192.168.3.2:49281&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958]    universe default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958]    host localhost
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958]    procid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/0/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] top: openmpi-sessions-motte_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08958] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962]    universe default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962]    host localhost
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962]    procid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] top: openmpi-sessions-motte_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960]    universe default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960]    host localhost
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_localhost_0/default-universe-8957
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] top: openmpi-sessions-motte_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08957] Info: Setting up debugger process table for 
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
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, localhost, ./vhone, 8960)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, localhost, ./vhone, 8962)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08960] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:08962] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Rest ommitted)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When xgrid-submitting the job with OpenMPI 1.0.2 there's no Bus error, 
</span><br>
<span class="quotelev1">&gt; either:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [g5dual:/Network/CFD/MVH-1.0] motte% mpirun -d -np 2 ./vhone
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497]    user motte
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497]    host g5dual.3-net
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497]    jobid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] top: openmpi-sessions-motte_at_g5dual.3-net_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] [0,0,0] contact_file 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-motte_at_g5dual.3-net_0/default-universe/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x1)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] [0,1,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507]    user nobody
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507]    host xgrid-node-1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507]    procid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe/1/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-1_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] top: openmpi-sessions-nobody_at_xgrid-node-1_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] [0,1,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509]    universe default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509]    user nobody
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509]    host xgrid-node-0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509]    jobid 1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509]    procid 0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] procdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1/0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] jobdir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe/1
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] unidir: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-nobody_at_xgrid-node-0_0/default-universe
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] top: openmpi-sessions-nobody_at_xgrid-node-0_0
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x3)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] Info: Setting up debugger process table for 
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
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, xgrid-node-1, ./vhone, 507)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, xgrid-node-0, ./vhone, 509)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00497] spawn: in job_state_callback(jobid = 1, state = 0x4)
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00507] [0,1,1] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt; [g5dual.3-net:00509] [0,1,0] ompi_mpi_init completed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Rest ommitted)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the steps I've done in order to upgrade to OpenMPI 1.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - sudo make uninstall (within the OpenMPI 1.0.2-directory tree)
</span><br>
<span class="quotelev1">&gt; - cd to OpenMPI 1.1-directory tree
</span><br>
<span class="quotelev1">&gt; - ./configure --prefix=/usr --with-xgrid
</span><br>
<span class="quotelev1">&gt; - sudo make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the ompi_info-output is of any help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [g5dual:/Network/CFD/MVH-1.0] motte% ompi_info
</span><br>
<span class="quotelev1">&gt;                 Open MPI: 1.1
</span><br>
<span class="quotelev1">&gt;    Open MPI SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                 Open RTE: 1.1
</span><br>
<span class="quotelev1">&gt;    Open RTE SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                     OPAL: 1.1
</span><br>
<span class="quotelev1">&gt;        OPAL SVN revision: r10477
</span><br>
<span class="quotelev1">&gt;                   Prefix: /usr
</span><br>
<span class="quotelev1">&gt;  Configured architecture: powerpc-apple-darwin8.7.0
</span><br>
<span class="quotelev1">&gt;            Configured by: admin
</span><br>
<span class="quotelev1">&gt;            Configured on: Wed Jun 28 10:55:12 CEST 2006
</span><br>
<span class="quotelev1">&gt;           Configure host: G5-Dual.local
</span><br>
<span class="quotelev1">&gt;                 Built by: root
</span><br>
<span class="quotelev1">&gt;                 Built on: Wed Jun 28 11:32:04 CEST 2006
</span><br>
<span class="quotelev1">&gt;               Built host: G5-Dual.local
</span><br>
<span class="quotelev1">&gt;               C bindings: yes
</span><br>
<span class="quotelev1">&gt;             C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;       Fortran77 bindings: yes (single underscore)
</span><br>
<span class="quotelev1">&gt;       Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt;  Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;               C compiler: gcc
</span><br>
<span class="quotelev1">&gt;      C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;             C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;    C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;       Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran77 compiler abs: /usr/local/bin/gfortran
</span><br>
<span class="quotelev1">&gt;       Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;   Fortran90 compiler abs: /usr/local/bin/gfortran
</span><br>
<span class="quotelev1">&gt;              C profiling: yes
</span><br>
<span class="quotelev1">&gt;            C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;      Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;   Internal debug support: no
</span><br>
<span class="quotelev1">&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;          libltdl support: yes
</span><br>
<span class="quotelev1">&gt;               MCA memory: darwin (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA timer: darwin (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;            MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: basic (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: hierarch (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA coll: tuned (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA io: romio (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA mpool: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA bml: r2 (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;               MCA rcache: rb (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: self (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA topo: unity (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA osc: pt2pt (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: null (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA gpr: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA iof: svc (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                   MCA ns: replica (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: localhost (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA ras: xgrid (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rds: resfile (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                 MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA rml: oob (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: fork (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: rsh (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: xgrid (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: env (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: pipe (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: seed (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;                  MCA sds: singleton (MCA v1.0, API v1.0, Component v1.1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enclosed you'll find the config.log.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours,
</span><br>
<span class="quotelev1">&gt; Frank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt; An embedded and charset-unspecified text was scrubbed...
</span><br>
<span class="quotelev1">&gt; Name: config.log
</span><br>
<span class="quotelev1">&gt; Url: <a href="http://www.open-mpi.org/MailArchives/users/attachments/20060628/a640acf1/config.pl">http://www.open-mpi.org/MailArchives/users/attachments/20060628/a640acf1/config.pl</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 317, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
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
<li><strong>Next message:</strong> <a href="1476.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1474.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0) si_code:1(BUS_ADRALN)"</a>
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
