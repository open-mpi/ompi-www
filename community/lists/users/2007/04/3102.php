<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 05:19:12 2007" -->
<!-- isoreceived="20070420091912" -->
<!-- sent="Fri, 20 Apr 2007 10:19:00 +0100" -->
<!-- isosent="20070420091900" -->
<!-- name="Keith Refson" -->
<!-- email="Keith.lists_at_[hidden]" -->
<!-- subject="[OMPI users] local QP operation err" -->
<!-- id="46288584.7070905_at_ntlworld.com" -->
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
<strong>From:</strong> Keith Refson (<em>Keith.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 05:19:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3103.php">Bas van der Vlies: "[OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI list,
<br>
<p>I'm running into a problem with openmpi 1.2 where a MPI program is crashing with
<br>
<p>local QP operation err (QPN 380404, WQE @ 00000583, CQN 040085, index 1147949)
<br>
&nbsp;&nbsp;[ 0] 00380404
<br>
&nbsp;&nbsp;[ 4] 00000000
<br>
&nbsp;&nbsp;[ 8] 00000000
<br>
&nbsp;&nbsp;[ c] 00000000
<br>
&nbsp;&nbsp;[10] 026f0000
<br>
&nbsp;&nbsp;[14] 00000000
<br>
&nbsp;&nbsp;[18] 00000583
<br>
&nbsp;&nbsp;[1c] ff000000
<br>
[0,1,0][btl_openib_component.c:1195:btl_openib_component_progress] from n0001.yquem to: n0002.yquem
<br>
error polling HP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id 42714736 opcode 0
<br>
<p>Can someone interpret this for me or suggest how to obtain any more
<br>
useful information?  My guess is that the cause is running out of
<br>
buffer space.  If so is this a bug or limit in open-mpi?
<br>
<p>The machine is a dual 2.66GHz Xeon cluster with Infiniband.
<br>
<p>Some background: The error occurs in a test case I run widely for a
<br>
large electronic structure code, and is in the routine that gathers a
<br>
large quantity of data from all of the processors in the run into the
<br>
root node to write an output file.  Each processor MPI_Send()s a
<br>
number of blocks of data to root, which MPI_Recv()s in nested loops
<br>
over blocks and remote nodes.
<br>
<p>We have had problems in the past with the volume of data overwhelming
<br>
other MPI implementations' buffer cache space during this step, and in
<br>
response to this there is a synchronization step which causes the
<br>
remote nodes to wait on a blocking recv for a &quot;go ahead and send&quot;
<br>
message from root.  Using this the number of data blocks (messages)
<br>
sent at once can be controlled.
<br>
<p>With the default of 32 at once, running on 16 nodes (so with
<br>
potentially 15x32 480 outstanding messages at a time) the crash
<br>
occurs.  Restricting the number of blocks/node to 16 (ie 240
<br>
pending messages) gives a successful run with no crash.
<br>
<p>Version 1.2 of openmpi seems better than 1.1.5 in this respect, which
<br>
always crashes on the 16-node run even with only 1 message sent at
<br>
once from each processor.  For some reason ompi 1.1.5 gives a better
<br>
traceback too....
<br>
<p>local QP operation err (QPN 180408, WQE @ 00000703, CQN 140085, index 1309215)
<br>
&nbsp;&nbsp;[ 0] 00180408
<br>
&nbsp;&nbsp;[ 4] 00000000
<br>
&nbsp;&nbsp;[ 8] 00000000
<br>
&nbsp;&nbsp;[ c] 00000000
<br>
&nbsp;&nbsp;[10] 026f0000
<br>
&nbsp;&nbsp;[14] 00000000
<br>
&nbsp;&nbsp;[18] 00000703
<br>
&nbsp;&nbsp;[1c] ff000000
<br>
[0,1,0][btl_openib_component.c:897:mca_btl_openib_component_progress] from n0001.yquem to:
<br>
n0002.yquem error polling HP CQ with status LOCAL QP OPERATION ERROR status number 2 for wr_id
<br>
40618448 opcode 0
<br>
Signal:6 info.si_errno:0(Success) si_code:-6()
<br>
[0] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libopal.so.0 [0x2a95fc404c]
<br>
[1] func:/lib64/tls/libpthread.so.0 [0x2a95a12430]
<br>
[2] func:/lib64/tls/libc.so.6(gsignal+0x3d) [0x2a965d421d]
<br>
[3] func:/lib64/tls/libc.so.6(abort+0xfe) [0x2a965d5a1e]
<br>
[4]
<br>
func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libmpi.so.0(mca_btl_openib_component_progress+0x751)
<br>
[0x2a95be09d3]
<br>
[5] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libmpi.so.0(mca_bml_r2_progress+0x3a)
<br>
[0x2a95bd48fc]
<br>
[6] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libopal.so.0(opal_progress+0x80) [0x2a95faaa06]
<br>
[7] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libmpi.so.0(mca_pml_ob1_recv+0x329)
<br>
[0x2a95c2e679]
<br>
[8] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libmpi.so.0(PMPI_Recv+0x22e) [0x2a95bbdbd2]
<br>
[9] func:/data/software/x86_64/open-mpi/1.1.5-intel/lib/libmpi.so.0(pmpi_recv_+0xd9) [0x2a95bcfbdd]
<br>
[10] func:/home/krefson/bin/castep-4.1b(comms_mp_comms_recv_integer_+0x45) [0x10e5ae9]
<br>
...
<br>
<p><p><p>I'd appreciate an opinion on whether the problem is in OpenMPI or not and
<br>
what's the best way to proceed.
<br>
<p>Keith Refson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3103.php">Bas van der Vlies: "[OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>Previous message:</strong> <a href="3101.php">Harald Servat: "Re: [OMPI users] peruse MSG_ARRIVED events lost"</a>
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
