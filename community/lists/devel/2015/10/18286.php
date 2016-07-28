<?
$subject_val = "[OMPI devel] Segv in MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 15:32:20 2015" -->
<!-- isoreceived="20151027193220" -->
<!-- sent="Tue, 27 Oct 2015 12:32:14 -0700" -->
<!-- isosent="20151027193214" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Segv in MTT" -->
<!-- id="203EA087-A82F-424D-86FC-54AF56C04528_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Segv in MTT<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 15:32:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Previous message:</strong> <a href="18285.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Reply:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Anyone have an idea of what this is all about?
<br>
<p><span class="quotelev2">&gt;&gt; Command: mpirun     --hostfile /home/common/hosts -np 16 --prefix /home/common/openmpi/build/foobar/ collective/alltoall_in_place 
</span><br>
&nbsp;&nbsp;&nbsp;Elapsed:       00:00:00 0.00u 0.00s
<br>
&nbsp;&nbsp;&nbsp;Test: alltoall_in_place, np=16, variant=1: Passed
<br>
*** Error in `collective/alltoallv_somezeros': free(): invalid pointer: 0x000000000127a180 ***
<br>
======= Backtrace: =========
<br>
/usr/lib64/libc.so.6(+0x7d1fd)[0x7f46e2fda1fd]
<br>
/home/common/openmpi/build/foobar/lib/libopen-pal.so.0(+0x2cd05)[0x7f46e2976d05]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x6f74)[0x7f46dcefaf74]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x72ee)[0x7f46dcefb2ee]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x6f74)[0x7f46dcefaf74]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x76e8)[0x7f46dcefb6e8]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(+0x3c73)[0x7f46dcef7c73]
<br>
/home/common/openmpi/build/foobar/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_del_comm+0xcf)[0x7f46dcef9acc]
<br>
/home/common/openmpi/build/foobar/lib/libmpi.so.0(+0x2d1df)[0x7f46e35671df]
<br>
/home/common/openmpi/build/foobar/lib/libmpi.so.0(+0x2b473)[0x7f46e3565473]
<br>
/home/common/openmpi/build/foobar/lib/libmpi.so.0(ompi_comm_finalize+0x23f)[0x7f46e3566bbd]
<br>
/home/common/openmpi/build/foobar/lib/libmpi.so.0(ompi_mpi_finalize+0x5fd)[0x7f46e3593df7]
<br>
/home/common/openmpi/build/foobar/lib/libmpi.so.0(PMPI_Finalize+0x59)[0x7f46e35bd6e5]
<br>
<p>Then I see a bunch of dump info, followed by:
<br>
<p><span class="quotelev2">&gt;&gt; Command: mpirun     --hostfile /home/common/hosts -np 16 --prefix /home/common/openmpi/build/foobar/ collective/alltoallv_somezeros 
</span><br>
&nbsp;&nbsp;&nbsp;Elapsed:       00:00:01 0.00u 0.00s
<br>
&nbsp;&nbsp;&nbsp;Test: alltoallv_somezeros, np=16, variant=1: Passed
<br>
<p><p><p>Ralph
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Previous message:</strong> <a href="18285.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>Reply:</strong> <a href="18287.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
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
