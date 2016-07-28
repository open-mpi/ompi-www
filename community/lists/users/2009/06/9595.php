<?
$subject_val = "[OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 11 06:19:04 2009" -->
<!-- isoreceived="20090611101904" -->
<!-- sent="Thu, 11 Jun 2009 12:19:00 +0200" -->
<!-- isosent="20090611101900" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications" -->
<!-- id="9b0da5ce0906110319k54380ber60b4a81939af7f60_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-11 06:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Previous message:</strong> <a href="9594.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Reply:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>After updating all my nodes to Open-MPI 1.3.2 (with
<br>
--enable-mpi-threads some of them fail to execute a simple MPI test
<br>
program - they seem to hang.
<br>
With --debug-daemons the application seems to execute (two line os
<br>
output) but hangs before returning:
<br>
<p>[jody_at_aplankton neander]$ mpirun -np 2 --host nano_06 --debug-daemons ./MPITest
<br>
Daemon was launched on nano_06 - beginning to initialize
<br>
Daemon [[44301,0],1] checking in as pid 5166 on host nano_06
<br>
Daemon [[44301,0],1] not using static ports
<br>
[nano_06:05166] [[44301,0],1] orted: up and running - waiting for commands!
<br>
[plankton:23859] [[44301,0],0] node[0].name plankton daemon 0 arch ffca0200
<br>
[plankton:23859] [[44301,0],0] node[1].name nano_06 daemon 1 arch ffca0200
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received add_local_procs
<br>
[nano_06:05166] [[44301,0],1] node[0].name plankton daemon 0 arch ffca0200
<br>
[nano_06:05166] [[44301,0],1] node[1].name nano_06 daemon 1 arch ffca0200
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received add_local_procs
<br>
[nano_06:05166] [[44301,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[44301,1],0]
<br>
[nano_06:05166] [[44301,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[44301,1],1]
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received message_local_procs
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received message_local_procs
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
<br>
[nano_06]I am #0/2
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[nano_06]I am #1/2
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23859] [[44301,0],0] orted_cmd: received message_local_procs
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received collective data cmd
<br>
[nano_06:05166] [[44301,0],1] orted_cmd: received message_local_procs
<br>
[nano_06:05166] [[44301,0],1] orted_recv: received sync from local
<br>
proc [[44301,1],1]
<br>
[nano_06:05166] [[44301,0],1] orted_recv: received sync from local
<br>
proc [[44301,1],0]
<br>
&nbsp;(Here it hangs)
<br>
<p>Some don't even get to execute:
<br>
[jody_at_plankton neander]$ mpirun -np 2 --host nano_01 --debug-daemons ./MPITest
<br>
Daemon was launched on nano_01 - beginning to initialize
<br>
Daemon [[44293,0],1] checking in as pid 5044 on host nano_01
<br>
Daemon [[44293,0],1] not using static ports
<br>
[nano_01:05044] [[44293,0],1] orted: up and running - waiting for commands!
<br>
[plankton:23867] [[44293,0],0] node[0].name plankton daemon 0 arch ffca0200
<br>
[plankton:23867] [[44293,0],0] node[1].name nano_01 daemon 1 arch ffca0200
<br>
[plankton:23867] [[44293,0],0] orted_cmd: received add_local_procs
<br>
[nano_01:05044] [[44293,0],1] node[0].name plankton daemon 0 arch ffca0200
<br>
[nano_01:05044] [[44293,0],1] node[1].name nano_01 daemon 1 arch ffca0200
<br>
[nano_01:05044] [[44293,0],1] orted_cmd: received add_local_procs
<br>
[nano_01:05044] [[44293,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[44293,1],0]
<br>
[nano_01:05044] [[44293,0],1] orted_cmd: received collective data cmd
<br>
&nbsp;(Here it hangs)
<br>
<p>When i call one of the bad nodes with only 1 processor and debug-daemons,
<br>
it works fine (output &amp; clean completion), but without debug-daemons it hangs.
<br>
But sometimes there is a crash (not always reproducible):
<br>
<p>[jody_at_plankton neander]$ mpirun -np 1 --host nano_04 --debug-daemons ./MPITest
<br>
Daemon was launched on nano_04 - beginning to initialize
<br>
Daemon [[44431,0],1] checking in as pid 5333 on host nano_04
<br>
Daemon [[44431,0],1] not using static ports
<br>
[plankton:23985] [[44431,0],0] node[0].name plankton daemon 0 arch ffca0200
<br>
[plankton:23985] [[44431,0],0] node[1].name nano_04 daemon 1 arch ffca0200
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received add_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted: up and running - waiting for commands!
<br>
[nano_04:05333] [[44431,0],1] node[0].name plankton daemon 0 arch ffca0200
<br>
[nano_04:05333] [[44431,0],1] node[1].name nano_04 daemon 1 arch ffca0200
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received add_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_recv: received sync+nidmap from
<br>
local proc [[44431,1],0]
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received collective data cmd
<br>
[nano_04]I am #0/1
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received collective data cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received message_local_procs
<br>
[nano_04:05333] [[44431,0],1] orted_recv: received sync from local
<br>
proc [[44431,1],0]
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received iof_complete cmd
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received waitpid_fired cmd
<br>
[plankton:23985] [[44431,0],0] orted_cmd: received exit
<br>
[nano_04:05333] [[44431,0],1] orted_cmd: received exit
<br>
[nano_04:05333] [[44431,0],1] orted: finalizing
<br>
[nano_04:05333] *** Process received signal ***
<br>
[nano_04:05333] Signal: Segmentation fault (11)
<br>
[nano_04:05333] Signal code: Address not mapped (1)
<br>
[nano_04:05333] Failing at address: 0xb7493e20
<br>
[nano_04:05333] [ 0] [0xffffe40c]
<br>
[nano_04:05333] [ 1]
<br>
/opt/openmpi/lib/libopen-pal.so.0(opal_event_loop+0x27) [0xb7e65417]
<br>
[nano_04:05333] [ 2]
<br>
/opt/openmpi/lib/libopen-pal.so.0(opal_event_dispatch+0x1e)
<br>
[0xb7e6543e]
<br>
[nano_04:05333] [ 3]
<br>
/opt/openmpi/lib/libopen-rte.so.0(orte_daemon+0x761) [0xb7ed3d71]
<br>
[nano_04:05333] [ 4] orted [0x80487b4]
<br>
[nano_04:05333] [ 5] /lib/libc.so.6(__libc_start_main+0xdc) [0xb7cc060c]
<br>
[nano_04:05333] [ 6] orted [0x8048691]
<br>
[nano_04:05333] *** End of error message ***
<br>
<p><p><p><p>Is that perhaps a consequence of configuring with --enable-mpi-threads
<br>
and --enable-progress-threads?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Previous message:</strong> <a href="9594.php">Fran&#231;ois Trahay: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
<li><strong>Reply:</strong> <a href="9596.php">jody: "Re: [OMPI users] After upgrading to 1.3.2 some nodes hang on MPI-Applications"</a>
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
