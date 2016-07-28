<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 20:22:11 2007" -->
<!-- isoreceived="20071004002211" -->
<!-- sent="Wed, 03 Oct 2007 20:22:17 -0400" -->
<!-- isosent="20071004002217" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_Reduce/MPI_Comm_split?" -->
<!-- id="47043239.2020504_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1188579101.9969.123.camel_at_nb-sbrighi.cineca.it" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 20:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4150.php">Tim Prins: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marco,
<br>
<p>Thanks for the report, and sorry for the delayed response. I can 
<br>
replicate a problem using your test code, but it does not segfault for 
<br>
me (although I am using a different version of Open MPI).
<br>
<p>I filed a bug on this so (hopefully) out collective gurus will look at 
<br>
it soon. You will receive email updates about the bug. Also, it is here:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1158">https://svn.open-mpi.org/trac/ompi/ticket/1158</a>
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Marco Sbrighi wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.2.2 over OFED 1.1 on an 680 nodes dual Opteron dual
</span><br>
<span class="quotelev1">&gt; core Linux cluster. Of course, with Infiniband interconnect. 
</span><br>
<span class="quotelev1">&gt; During the execution of big jobs (greater than 128 processes) I've
</span><br>
<span class="quotelev1">&gt; experimented slow down in performances and deadlock in collective MPI
</span><br>
<span class="quotelev1">&gt; operations. The job processes terminates often issuing &quot;RETRY EXCEEDED
</span><br>
<span class="quotelev1">&gt; ERROR&quot;, of course if the  btl_openib_ib_timeout is properly set.  
</span><br>
<span class="quotelev1">&gt; Yes, this kind of error seems to be related to the fabric, but more or
</span><br>
<span class="quotelev1">&gt; less half of the MPI processes are incurring in timeout..... 
</span><br>
<span class="quotelev1">&gt; In order to do a better investigation on that behaviour, I've tried to
</span><br>
<span class="quotelev1">&gt; do some &quot;constrained&quot; tests using SKaMPI, but it is quite difficult to
</span><br>
<span class="quotelev1">&gt; insulate a single collective operation using SKaMPI. In fact despite the
</span><br>
<span class="quotelev1">&gt; SKaMPI script can contain only a request for (say) a Reduce, with many
</span><br>
<span class="quotelev1">&gt; communicator sizes, the SKaMPI code will make also a lot of bcast,
</span><br>
<span class="quotelev1">&gt; alltoall etc. by itself.
</span><br>
<span class="quotelev1">&gt; So I've tried to use an hand made piece of code, in order to do &quot;only&quot; a
</span><br>
<span class="quotelev1">&gt; repeated collective operation at a time.
</span><br>
<span class="quotelev1">&gt; The code is attached to this message, the file is named
</span><br>
<span class="quotelev1">&gt; collect_noparms.c.
</span><br>
<span class="quotelev1">&gt; What is happened when I've tried to run this code is reported here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 011 - 011 - 039 NOOT START
</span><br>
<span class="quotelev1">&gt; 000 - 000 of 38 - 655360  0.000000
</span><br>
<span class="quotelev1">&gt; [node1049:11804] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [node1049:11804] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [node1049:11804] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [node1049:11804] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; 035 - 035 - 039 NOOT START
</span><br>
<span class="quotelev1">&gt; 000 - 000 of 38 - 786432  0.000000
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 0] /lib64/tls/libpthread.so.0 [0x2a964db420]
</span><br>
<span class="quotelev1">&gt; 000 - 000 of 38 - 917504  0.000000
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 1] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a9573fa18]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 2] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a9573f639]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 3] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_btl_sm_send+0x122) [0x2a9573f5e1]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 4] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957acac6]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 5] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_pml_ob1_send_request_start_copy+0x303) [0x2a957ace52]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 6] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957a2788]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 7] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0 [0x2a957a251c]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 8] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(mca_pml_ob1_send+0x2e2) [0x2a957a2d9e]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [ 9] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_generic+0x651) [0x2a95751621]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [10] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_intra_pipeline+0x176) [0x2a95751bff]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [11] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(ompi_coll_tuned_reduce_intra_dec_fixed+0x3f4) [0x2a957475f6]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [12] /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0(PMPI_Reduce+0x3a6) [0x2a9570a076]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [13] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x(reduce+0x3e) [0x404e64]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [14] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x(main+0x620) [0x404c8e]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [15] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x2a966004bb]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] [16] /bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x [0x40448a]
</span><br>
<span class="quotelev1">&gt; [node1049:11804] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .......
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the behaviour is the same, more or less identical, using either
</span><br>
<span class="quotelev1">&gt; Infiniband or Gigabit interconnect. If I use another MPI implementation
</span><br>
<span class="quotelev1">&gt; (say MVAPICH), all goes right.
</span><br>
<span class="quotelev1">&gt; Then I've compiled both my code and Open MPI using gcc 3.4.4 with
</span><br>
<span class="quotelev1">&gt; bounds-checking, compiler debugging flags, without OMPI memory
</span><br>
<span class="quotelev1">&gt; manager ... the behaviour is identical but now I've the line were the
</span><br>
<span class="quotelev1">&gt; SIGSEGV is trapped:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; gdb collect_noparms_bc.x core.11580
</span><br>
<span class="quotelev1">&gt; GNU gdb Red Hat Linux (6.3.0.0-1.96rh)
</span><br>
<span class="quotelev1">&gt; Copyright 2004 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; GDB is free software, covered by the GNU General Public License, and you are
</span><br>
<span class="quotelev1">&gt; welcome to change it and/or distribute copies of it under certain conditions.
</span><br>
<span class="quotelev1">&gt; Type &quot;show copying&quot; to see the conditions.
</span><br>
<span class="quotelev1">&gt; There is absolutely no warranty for GDB.  Type &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;...Using host libthread_db library &quot;/lib64/tls/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; warning: core file may not match specified executable file.
</span><br>
<span class="quotelev1">&gt; Core was generated by `/bcx/usercin/asm0/mpptools/mpitools/debug/src/collect_noparms_bc.x'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-rte.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-pal.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /cineca/prod/openmpi/1.2.2/mr/gnu3.4-bc_no_memory_mgr_dbg/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/local/ofed/lib64/libibverbs.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/ofed/lib64/libibverbs.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/librt.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/librt.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/lib64/libnuma.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/lib64/libnuma.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libnsl.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libnsl.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libutil.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libutil.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libm.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libm.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libdl.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libdl.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libpthread.so.0...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/tls/libc.so.6...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/tls/libc.so.6
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/lib64/libsysfs.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/lib64/libsysfs.so.1
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/ld-linux-x86-64.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/ld-linux-x86-64.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libnss_files.so.2...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libnss_files.so.2
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/local/ofed/lib64/infiniband/ipathverbs.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/ofed/lib64/infiniband/ipathverbs.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /usr/local/ofed/lib64/infiniband/mthca.so...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /usr/local/ofed/lib64/infiniband/mthca.so
</span><br>
<span class="quotelev1">&gt; Reading symbols from /lib64/libgcc_s.so.1...done.
</span><br>
<span class="quotelev1">&gt; Loaded symbols for /lib64/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a9573fa18 in ompi_cb_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x0)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_circular_buffer_fifo.h:370
</span><br>
<span class="quotelev1">&gt; 370         h_ptr=fifo-&gt;head;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000002a9573fa18 in ompi_cb_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x0)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_circular_buffer_fifo.h:370
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a9573f639 in ompi_fifo_write_to_head_same_base_addr (data=0x2a96f7df80, fifo=0x2a96e476a0, fifo_allocator=0x674100)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/class/ompi_fifo.h:312
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a9573f5e1 in mca_btl_sm_send (btl=0x2a95923440, endpoint=0x6e9670, descriptor=0x2a96f7df80, tag=1 '\001')
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/btl/sm/btl_sm.c:894
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a957acac6 in mca_bml_base_send (bml_btl=0x67fc00, des=0x2a96f7df80, tag=1 '\001')
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/bml/bml.h:283
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a957ace52 in mca_pml_ob1_send_request_start_copy (sendreq=0x594080, bml_btl=0x67fc00, size=1024)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.c:565
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a957a2788 in mca_pml_ob1_send_request_start_btl (sendreq=0x594080, bml_btl=0x67fc00)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.h:278
</span><br>
<span class="quotelev1">&gt; #6  0x0000002a957a251c in mca_pml_ob1_send_request_start (sendreq=0x594080)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_sendreq.h:345
</span><br>
<span class="quotelev1">&gt; #7  0x0000002a957a2d9e in mca_pml_ob1_send (buf=0x7b8400, count=256, datatype=0x51b8b0, dst=37, tag=-21,
</span><br>
<span class="quotelev1">&gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x521c00) at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/pml/ob1/pml_ob1_isend.c:103
</span><br>
<span class="quotelev1">&gt; #8  0x0000002a95751621 in ompi_coll_tuned_reduce_generic (sendbuf=0x7b8000, recvbuf=0x8b9000, original_count=32512,
</span><br>
<span class="quotelev1">&gt;     datatype=0x51b8b0, op=0x51ba40, root=0, comm=0x521c00, tree=0x520b00, count_by_segment=256)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_reduce.c:187
</span><br>
<span class="quotelev1">&gt; #9  0x0000002a95751bff in ompi_coll_tuned_reduce_intra_pipeline (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0,
</span><br>
<span class="quotelev1">&gt;     op=0x51ba40, root=0, comm=0x521c00, segsize=1024)
</span><br>
<span class="quotelev1">&gt;     at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_reduce.c:255
</span><br>
<span class="quotelev1">&gt; #10 0x0000002a957475f6 in ompi_coll_tuned_reduce_intra_dec_fixed (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0,
</span><br>
<span class="quotelev1">&gt;     op=0x51ba40, root=0, comm=0x521c00) at /cineca/prod/build/mpich/openmpi-1.2.2/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:353
</span><br>
<span class="quotelev1">&gt; #11 0x0000002a9570a076 in PMPI_Reduce (sendbuf=0x7b8000, recvbuf=0x8b9000, count=32768, datatype=0x51b8b0, op=0x51ba40, root=0,
</span><br>
<span class="quotelev1">&gt;     comm=0x521c00) at preduce.c:96
</span><br>
<span class="quotelev1">&gt; #12 0x0000000000404e64 in reduce (comm=0x521c00, count=32768) at collect_noparms.c:248
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000404c8e in main (argc=1, argv=0x7fbffff308) at collect_noparms.c:187
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this bug is not related to my performance slowdown in collective
</span><br>
<span class="quotelev1">&gt; operations but ..... something seems to be wrong at an higher level in
</span><br>
<span class="quotelev1">&gt; MCA framework ..... 
</span><br>
<span class="quotelev1">&gt; Is there someone able to reproduce a similar bug? 
</span><br>
<span class="quotelev1">&gt; Is there someone having performance slowdown in collective operations
</span><br>
<span class="quotelev1">&gt; with big jobs using OFED 1.1 over InfiniBand interconnect? 
</span><br>
<span class="quotelev1">&gt; Does I need some further btl or coll tuning? (I've tried with SRQ but
</span><br>
<span class="quotelev1">&gt; that doesn't resolve my problems).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marco 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4150.php">Tim Prins: "Re: [OMPI users] problem with 'orted'"</a>
<li><strong>Previous message:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/08/3968.php">Marco Sbrighi: "[OMPI users] Bug in MPI_Reduce/MPI_Comm_split?"</a>
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
