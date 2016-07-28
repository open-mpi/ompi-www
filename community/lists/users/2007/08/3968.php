<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 31 12:54:39 2007" -->
<!-- isoreceived="20070831165439" -->
<!-- sent="Fri, 31 Aug 2007 18:51:43 +0200 (MEST)" -->
<!-- isosent="20070831165143" -->
<!-- name="Marco Sbrighi" -->
<!-- email="m.sbrighi_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?" -->
<!-- id="1188579101.9969.123.camel_at_nb-sbrighi.cineca.it" -->
<!-- charset="ANSI_X3.4-1968" -->
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
<strong>From:</strong> Marco Sbrighi (<em>m.sbrighi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-31 12:51:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Mauricio Vacas: "[OMPI users] MPI Migration"</a>
<li><strong>Previous message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I'm using Open MPI 1.2.2 over OFED 1.1 on an 680 nodes dual Opteron dual
<br>
core Linux cluster. Of course, with Infiniband interconnect. 
<br>
During the execution of big jobs (greater than 128 processes) I've
<br>
experimented slow down in performances and deadlock in collective MPI
<br>
operations. The job processes terminates often issuing &quot;RETRY EXCEEDED
<br>
ERROR&quot;, of course if the  btl_openib_ib_timeout is properly set.  
<br>
Yes, this kind of error seems to be related to the fabric, but more or
<br>
less half of the MPI processes are incurring in timeout..... 
<br>
In order to do a better investigation on that behaviour, I've tried to
<br>
do some &quot;constrained&quot; tests using SKaMPI, but it is quite difficult to
<br>
insulate a single collective operation using SKaMPI. In fact despite the
<br>
SKaMPI script can contain only a request for (say) a Reduce, with many
<br>
communicator sizes, the SKaMPI code will make also a lot of bcast,
<br>
alltoall etc. by itself.
<br>
So I've tried to use an hand made piece of code, in order to do &quot;only&quot; a
<br>
repeated collective operation at a time.
<br>
The code is attached to this message, the file is named
<br>
collect_noparms.c.
<br>
What is happened when I've tried to run this code is reported here:
<br>
<p>......
<br>
<p>011 - 011 - 039 NOOT START
<br>
000 - 000 of 38 - 655360  0.000000
<br>
[node1049:11804] *** Process received signal ***
<br>
[node1049:11804] Signal: Segmentation fault (11)
<br>
[node1049:11804] Signal code: Address not mapped (1)
<br>
[node1049:11804] Failing at address: 0x18
<br>
035 - 035 - 039 NOOT START
<br>
000 - 000 of 38 - 786432  0.000000
<br>
[node1049:11804] [ 0] /lib64/tls/libpthread.so.0 [0x2a964db420]
<br>
000 - 000 of 38 - 917504  0.000000
<br>
[node1049:11804] [ 1] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a9573fa18]
<br>
[node1049:11804] [ 2] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a9573f639]
<br>
[node1049:11804] [ 3] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_btl_sm_send+0x122) [0x2a9573f5e1]
<br>
[node1049:11804] [ 4] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957acac6]
<br>
[node1049:11804] [ 5] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_pml_ob1_send_request_start_copy+0x303) [0x2a957ace52]
<br>
[node1049:11804] [ 6] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957a2788]
<br>
[node1049:11804] [ 7] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957a251c]
<br>
[node1049:11804] [ 8] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_pml_ob1_send+0x2e2) [0x2a957a2d9e]
<br>
[node1049:11804] [ 9] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_generic+0x651) [0x2a95751621]
<br>
[node1049:11804] [10] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_intra_pipeline+0x176) [0x2a95751bff]
<br>
[node1049:11804] [11] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_intra_dec_fixed+0x3f4) [0x2a957475f6]
<br>
[node1049:11804] [12] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(PMPI_Reduce+0x3a6) [0x2a9570a076]
<br>
[node1049:11804] [13] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x(reduce+0x3e) [0x404e64]
<br>
[node1049:11804] [14] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x(main+0x620) [0x404c8e]
<br>
[node1049:11804] [15] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x2a966004bb]
<br>
[node1049:11804] [16] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x [0x40448a]
<br>
[node1049:11804] *** End of error message ***
<br>
<p>.......
<br>
<p>the behaviour is the same, more or less identical, using either
<br>
Infiniband or Gigabit interconnect. If I use another MPI implementation
<br>
(say MVAPICH), all goes right.
<br>
Then I've compiled both my code and Open MPI using gcc 3.4.4 with
<br>
bounds-checking, compiler debugging flags, without OMPI memory
<br>
manager ... the behaviour is identical but now I've the line were the
<br>
SIGSEGV is trapped:
<br>
<p><p>----------------------------------------------------------------------------------------------------------------
<br>
gdb collect_noparms_bc.x core.11580
<br>
GNU gdb Red Hat Linux (6.3.0.0-1.96rh)
<br>
Copyright 2004 Free Software Foundation, Inc.
<br>
GDB is free software, covered by the GNU General Public License, and you are
<br>
welcome to change it and/or distribute copies of it under certain conditions.
<br>
Type &quot;show copying&quot; to see the conditions.
<br>
There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;...Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
<br>
<p><p>warning: core file may not match specified executable file.
<br>
Core was generated by `/bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x'.
<br>
Program terminated with signal 11, Segmentation fault.
<br>
Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0...done.
<br>
Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0
<br>
Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-rte.so.0...done.
<br>
Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-rte.so.0
<br>
Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-pal.so.0...done.
<br>
Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-pal.so.0
<br>
Reading symbols from /usr/local/ofed/lib64/libibverbs.so.1...done.
<br>
Loaded symbols for /usr/local/ofed/lib64/libibverbs.so.1
<br>
Reading symbols from /lib64/tls/librt.so.1...done.
<br>
Loaded symbols for /lib64/tls/librt.so.1
<br>
Reading symbols from /usr/lib64/libnuma.so.1...done.
<br>
Loaded symbols for /usr/lib64/libnuma.so.1
<br>
Reading symbols from /lib64/libnsl.so.1...done.
<br>
Loaded symbols for /lib64/libnsl.so.1
<br>
Reading symbols from /lib64/libutil.so.1...done.
<br>
Loaded symbols for /lib64/libutil.so.1
<br>
Reading symbols from /lib64/tls/libm.so.6...done.
<br>
Loaded symbols for /lib64/tls/libm.so.6
<br>
Reading symbols from /lib64/libdl.so.2...done.
<br>
Loaded symbols for /lib64/libdl.so.2
<br>
Reading symbols from /lib64/tls/libpthread.so.0...done.
<br>
Loaded symbols for /lib64/tls/libpthread.so.0
<br>
Reading symbols from /lib64/tls/libc.so.6...done.
<br>
Loaded symbols for /lib64/tls/libc.so.6
<br>
Reading symbols from /usr/lib64/libsysfs.so.1...done.
<br>
Loaded symbols for /usr/lib64/libsysfs.so.1
<br>
Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
<br>
Loaded symbols for /lib64/ld-linux-x86-64.so.2
<br>
Reading symbols from /lib64/libnss_files.so.2...done.
<br>
Loaded symbols for /lib64/libnss_files.so.2
<br>
Reading symbols from /usr/local/ofed/lib64/infiniband/ipathverbs.so...done.
<br>
Loaded symbols for /usr/local/ofed/lib64/infiniband/ipathverbs.so
<br>
Reading symbols from /usr/local/ofed/lib64/infiniband/mthca.so...done.
<br>
Loaded symbols for /usr/local/ofed/lib64/infiniband/mthca.so
<br>
Reading symbols from /lib64/libgcc_s.so.1...done.
<br>
Loaded symbols for /lib64/libgcc_s.so.1
<br>
#0  0x0000002a9573fa18 in ompi_cb_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_circular_buffer_fifo.h:370
<br>
370         h_ptr=fifo-&gt;head;
<br>
(gdb) bt
<br>
#0  0x0000002a9573fa18 in ompi_cb_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_circular_buffer_fifo.h:370
<br>
#1  0x0000002a9573f639 in ompi_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x2a96e476a0, fifo_allocator=0x674100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_fifo.h:312
<br>
#2  0x0000002a9573f5e1 in mca_btl_sm_send (btl=0x2a95923440, endpoint=0x6e9670, descriptor=0x2a96f7df80, tag=1 '\001')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/btl/sm/btl_sm.c:894
<br>
#3  0x0000002a957acac6 in mca_bml_base_send (bml_btl=0x67fc00, des=0x2a96f7df80, tag=1 '\001')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/bml/bml.h:283
<br>
#4  0x0000002a957ace52 in mca_pml_ob1_send_request_start_copy (sendreq=0x594080, bml_btl=0x67fc00, size=1024)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.c:565
<br>
#5  0x0000002a957a2788 in mca_pml_ob1_send_request_start_btl (sendreq=0x594080, bml_btl=0x67fc00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.h:278
<br>
#6  0x0000002a957a251c in mca_pml_ob1_send_request_start (sendreq=0x594080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.h:345
<br>
#7  0x0000002a957a2d9e in mca_pml_ob1_send (buf=0x7b8400, count=256, datatype=0x51b8b0, dst=37, tag=-21,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x521c00) at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_isend.c:103
<br>
#8  0x0000002a95751621 in ompi_coll_tuned_reduce_generic (sendbuf=0x7b8000, recvbuf=0x8b9000, original_count=32512,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatype=0x51b8b0, op=0x51ba40, root=0, comm=0x521c00, tree=0x520b00, count_by_segment=256)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_reduce.c:187
<br>
#9  0x0000002a95751bff in ompi_coll_tuned_reduce_intra_pipeline (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;op=0x51ba40, root=0, comm=0x521c00, segsize=1024)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_reduce.c:255
<br>
#10 0x0000002a957475f6 in ompi_coll_tuned_reduce_intra_dec_fixed (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;op=0x51ba40, root=0, comm=0x521c00) at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:353
<br>
#11 0x0000002a9570a076 in PMPI_Reduce (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0, op=0x51ba40, root=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x521c00) at preduce.c:96
<br>
#12 0x0000000000404e64 in reduce (comm=0x521c00, count=32768) at collect_noparms.c:248
<br>
#13 0x0000000000404c8e in main (argc=1, argv=0x7fbffff308) at collect_noparms.c:187
<br>
(gdb) 
<br>
-----------------------------------------
<br>
<p><p>I think this bug is not related to my performance slowdown in collective
<br>
operations but ..... something seems to be wrong at an higher level in
<br>
MCA framework ..... 
<br>
Is there someone able to reproduce a similar bug? 
<br>
Is there someone having performance slowdown in collective operations
<br>
with big jobs using OFED 1.1 over InfiniBand interconnect? 
<br>
Does I need some further btl or coll tuning? (I've tried with SRQ but
<br>
that doesn't resolve my problems).  
<br>
<p><p>Marco 
<br>
<p><pre>
-- 
-----------------------------------------------------------------
 Marco Sbrighi  m.sbrighi_at_[hidden]
 HPC Group
 CINECA Interuniversity Computing Centre
 via Magnanelli, 6/3
 40033 Casalecchio di Reno (Bo) ITALY
 tel. 051 6171516

</pre>
<p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3968/collect_noparms.c__charset_ANSI_X3.4-1968">collect_noparms.c__charset_ANSI_X3.4-1968</a>
</ul>
<!-- attachment="collect_noparms.c__charset_ANSI_X3.4-1968" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3969.php">Mauricio Vacas: "[OMPI users] MPI Migration"</a>
<li><strong>Previous message:</strong> <a href="3967.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and Port Range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4149.php">Tim Prins: "Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
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
