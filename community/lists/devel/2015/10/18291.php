<?
$subject_val = "Re: [OMPI devel] Segv in MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 18:33:24 2015" -->
<!-- isoreceived="20151027223324" -->
<!-- sent="Tue, 27 Oct 2015 15:33:16 -0700" -->
<!-- isosent="20151027223316" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segv in MTT" -->
<!-- id="037D6DDB-8A54-443F-8DBA-E3F5BACA762C_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="E79D2F5C-1E0B-4DC1-8679-37C3E1C586C5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segv in MTT<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 18:33:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18292.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found the problem - fix coming shortly.
<br>
<p><p><span class="quotelev1">&gt; On Oct 27, 2015, at 12:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m seeing similar failures in the master from several collectives. Looking at the stack, here is what I see on all of them:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00007fe49931a5d7 in raise () from /usr/lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fe49931be08 in abort () from /usr/lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007fe49935ae07 in __libc_message () from /usr/lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007fe4993621fd in _int_free () from /usr/lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00007fe498cfec95 in opal_list_destruct (list=0x25b06d0) at class/opal_list.c:108
</span><br>
<span class="quotelev1">&gt; #5  0x00007fe48f0d0fb0 in opal_obj_run_destructors (object=0x25b06d0) at ../../../../opal/class/opal_object.h:460
</span><br>
<span class="quotelev1">&gt; #6  0x00007fe48f0d132a in mca_pml_ob1_comm_proc_destruct (proc=0x25b05a0) at pml_ob1_comm.c:42
</span><br>
<span class="quotelev1">&gt; #7  0x00007fe48f0d0fb0 in opal_obj_run_destructors (object=0x25b05a0) at ../../../../opal/class/opal_object.h:460
</span><br>
<span class="quotelev1">&gt; #8  0x00007fe48f0d17c7 in mca_pml_ob1_comm_destruct (comm=0x25a0b40) at pml_ob1_comm.c:71
</span><br>
<span class="quotelev1">&gt; #9  0x00007fe48f0cdcd5 in opal_obj_run_destructors (object=0x25a0b40) at ../../../../opal/class/opal_object.h:460
</span><br>
<span class="quotelev1">&gt; #10 0x00007fe48f0cfb05 in mca_pml_ob1_del_comm (comm=0x259db90) at pml_ob1.c:277
</span><br>
<span class="quotelev1">&gt; #11 0x00007fe4998ef19f in ompi_comm_destruct (comm=0x259db90) at communicator/comm_init.c:418
</span><br>
<span class="quotelev1">&gt; #12 0x00007fe4998efa02 in opal_obj_run_destructors (object=0x259db90) at ../opal/class/opal_object.h:460
</span><br>
<span class="quotelev1">&gt; #13 0x00007fe4998f2bed in ompi_comm_free (comm=0x7ffdb43a6940) at communicator/comm.c:1532
</span><br>
<span class="quotelev1">&gt; #14 0x00007fe49993c858 in PMPI_Comm_disconnect (comm=0x7ffdb43a6940) at pcomm_disconnect.c:75
</span><br>
<span class="quotelev1">&gt; #15 0x00000000004014a6 in main (argc=1, argv=0x7ffdb43a6a58) at ibarrier_inter.c:68
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with 16 procs on 2 nodes. Any ideas?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 12:32 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone have an idea of what this is all about?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Command: mpirun     --hostfile /home/common/hosts -np 16 --prefix /home/common/openmpi/build/foobar/ collective/alltoall_in_place 
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:00 0.00u 0.00s
</span><br>
<span class="quotelev2">&gt;&gt;    Test: alltoall_in_place, np=16, variant=1: Passed
</span><br>
<span class="quotelev2">&gt;&gt; *** Error in `collective/alltoallv_somezeros': free(): invalid pointer: 0x000000000127a180 ***
</span><br>
<span class="quotelev2">&gt;&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/libc.so.6(+0x7d1fd)[0x7f46e2fda1fd]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libopen-pal.so.0(+0x2cd05)[0x7f46e2976d05]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x6f74)[0x7f46dcefaf74]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x72ee)[0x7f46dcefb2ee]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x6f74)[0x7f46dcefaf74]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x76e8)[0x7f46dcefb6e8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x3c73)[0x7f46dcef7c73]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_del_comm+0xcf)[0x7f46dcef9acc]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libmpi.so.0(+0x2d1df)[0x7f46e35671df]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libmpi.so.0(+0x2b473)[0x7f46e3565473]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libmpi.so.0(ompi_comm_finalize+0x23f)[0x7f46e3566bbd]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libmpi.so.0(ompi_mpi_finalize+0x5fd)[0x7f46e3593df7]
</span><br>
<span class="quotelev2">&gt;&gt; /home/common/openmpi/build/foobar/lib/libmpi.so.0(PMPI_Finalize+0x59)[0x7f46e35bd6e5]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then I see a bunch of dump info, followed by:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Command: mpirun     --hostfile /home/common/hosts -np 16 --prefix /home/common/openmpi/build/foobar/ collective/alltoallv_somezeros 
</span><br>
<span class="quotelev2">&gt;&gt;    Elapsed:       00:00:01 0.00u 0.00s
</span><br>
<span class="quotelev2">&gt;&gt;    Test: alltoallv_somezeros, np=16, variant=1: Passed
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18291/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18292.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Previous message:</strong> <a href="18290.php">Paul Hargrove: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>In reply to:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
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
