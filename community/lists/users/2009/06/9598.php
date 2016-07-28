<?
$subject_val = "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 09:22:29 2009" -->
<!-- isoreceived="20090611132229" -->
<!-- sent="Thu, 11 Jun 2009 07:22:15 -0600" -->
<!-- isosent="20090611132215" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications" -->
<!-- id="A90A1318-189D-471C-B172-EB200A06C514_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0906110356h36879c2l24d04c29db78a458_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 09:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
<li><strong>In reply to:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's the --enable-progress-threads flag that causes the problem - we  
<br>
don't really support that yet. Maybe someday.
<br>
<p>Take that out and you should be okay, with the caveats expressed on  
<br>
the OMPI web site (i.e., not everything works with threads yet).
<br>
<p>On Jun 11, 2009, at 4:56 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; More info:
</span><br>
<span class="quotelev1">&gt; I checked and found that not all nodes are equal:
</span><br>
<span class="quotelev1">&gt; the ones that don't work have mpi-threads *and* progress-threads  
</span><br>
<span class="quotelev1">&gt; enabled,
</span><br>
<span class="quotelev1">&gt; whereas the ones that work have only mpi-threads enabled
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a problem when both thread-types are enabled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 11, 2009 at 12:19 PM, jody&lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After updating all my nodes to Open-MPI 1.3.2 (with
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads some of them fail to execute a simple MPI test
</span><br>
<span class="quotelev2">&gt;&gt; program - they seem to hang.
</span><br>
<span class="quotelev2">&gt;&gt; With --debug-daemons the application seems to execute (two line os
</span><br>
<span class="quotelev2">&gt;&gt; output) but hangs before returning:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_aplankton neander]$ mpirun -np 2 --host nano_06 --debug- 
</span><br>
<span class="quotelev2">&gt;&gt; daemons ./MPITest
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on nano_06 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44301,0],1] checking in as pid 5166 on host nano_06
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44301,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; commands!
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] node[1].name nano_06 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] node[1].name nano_06 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev2">&gt;&gt; local proc [[44301,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev2">&gt;&gt; local proc [[44301,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06]I am #0/2
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06]I am #1/2
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23859] [[44301,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_recv: received sync from local
</span><br>
<span class="quotelev2">&gt;&gt; proc [[44301,1],1]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_06:05166] [[44301,0],1] orted_recv: received sync from local
</span><br>
<span class="quotelev2">&gt;&gt; proc [[44301,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;  (Here it hangs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some don't even get to execute:
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_plankton neander]$ mpirun -np 2 --host nano_01 --debug- 
</span><br>
<span class="quotelev2">&gt;&gt; daemons ./MPITest
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on nano_01 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44293,0],1] checking in as pid 5044 on host nano_01
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44293,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; commands!
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23867] [[44293,0],0] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23867] [[44293,0],0] node[1].name nano_01 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23867] [[44293,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] node[1].name nano_01 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev2">&gt;&gt; local proc [[44293,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_01:05044] [[44293,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt;  (Here it hangs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i call one of the bad nodes with only 1 processor and debug- 
</span><br>
<span class="quotelev2">&gt;&gt; daemons,
</span><br>
<span class="quotelev2">&gt;&gt; it works fine (output &amp; clean completion), but without debug- 
</span><br>
<span class="quotelev2">&gt;&gt; daemons it hangs.
</span><br>
<span class="quotelev2">&gt;&gt; But sometimes there is a crash (not always reproducible):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [jody_at_plankton neander]$ mpirun -np 1 --host nano_04 --debug- 
</span><br>
<span class="quotelev2">&gt;&gt; daemons ./MPITest
</span><br>
<span class="quotelev2">&gt;&gt; Daemon was launched on nano_04 - beginning to initialize
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44431,0],1] checking in as pid 5333 on host nano_04
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [[44431,0],1] not using static ports
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] node[1].name nano_04 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted: up and running - waiting for  
</span><br>
<span class="quotelev2">&gt;&gt; commands!
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] node[0].name plankton daemon 0 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] node[1].name nano_04 daemon 1 arch  
</span><br>
<span class="quotelev2">&gt;&gt; ffca0200
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_recv: received sync+nidmap from
</span><br>
<span class="quotelev2">&gt;&gt; local proc [[44431,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04]I am #0/1
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received collective data  
</span><br>
<span class="quotelev2">&gt;&gt; cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received  
</span><br>
<span class="quotelev2">&gt;&gt; message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_recv: received sync from local
</span><br>
<span class="quotelev2">&gt;&gt; proc [[44431,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev2">&gt;&gt; [plankton:23985] [[44431,0],0] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted_cmd: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [[44431,0],1] orted: finalizing
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] Failing at address: 0xb7493e20
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 0] [0xffffe40c]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x27) [0xb7e65417]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/lib/libopen-pal.so.0(opal_event_dispatch+0x1e)
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7e6543e]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/lib/libopen-rte.so.0(orte_daemon+0x761) [0xb7ed3d71]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 4] orted [0x80487b4]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 5] /lib/libc.so.6(__libc_start_main+0xdc)  
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7cc060c]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] [ 6] orted [0x8048691]
</span><br>
<span class="quotelev2">&gt;&gt; [nano_04:05333] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that perhaps a consequence of configuring with --enable-mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; threads
</span><br>
<span class="quotelev2">&gt;&gt; and --enable-progress-threads?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9599.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<li><strong>Previous message:</strong> <a href="9597.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Problems with Open MPI/BLCR checkpoint/restart	routine."</a>
<li><strong>In reply to:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
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
