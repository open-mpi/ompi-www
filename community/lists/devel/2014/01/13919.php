<?
$subject_val = "[OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 26 10:10:33 2014" -->
<!-- isoreceived="20140126151033" -->
<!-- sent="Sun, 26 Jan 2014 16:10:29 +0100" -->
<!-- isosent="20140126151029" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures" -->
<!-- id="A1D624EC-3E1B-4FF6-8817-ECC9F5FC2FE7_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-26 10:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13920.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] more f77 cruft"</a>
<li><strong>Previous message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13921.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13921.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I noticed two major issues on 32 bits machines. The first one is with the vader BTL and the second with the selection logic in basesmuma (bcol_basesmuma_bank_init_opti). Both versions are impacted: trunk and 1.7.
<br>
<p>If I turn off vader and boll via the MCA parameters everything runs just fine.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>../trunk/configure --enable-debug --disable-mpi-cxx --disable-mpi-fortran --disable-io-romio --enable-contrib-no-build=vt,libtrace --enable-mpirun-prefix-by-default
<br>
<p><p>- Vader generates a segfault for any application even with only 2 processes, so this should be pretty easy to track.
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
(gdb) bt
<br>
#0  0x00000000 in ?? ()
<br>
#1  0x00ae43b3 in mca_btl_vader_poll_fifo ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:394
<br>
#2  0x00ae444a in mca_btl_vader_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:421
<br>
#3  0x008fdb95 in opal_progress ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../trunk/opal/runtime/opal_progress.c:186
<br>
#4  0x001961bc in ompi_request_default_test_some (count=13, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requests=0xb1f01d48, outcount=0xb2afb2d0, indices=0xb1f01f60, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;statuses=0xb1f02178) at ../../trunk/ompi/request/req_test.c:316
<br>
#5  0x001def9a in PMPI_Testsome (incount=13, requests=0xb1f01d48, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;outcount=0xb2afb2d0, indices=0xb1f01f60, statuses=0xb1f02178)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ptestsome.c:81
<br>
<p><p><p><p>- basesmuma overwrite the memory. The results_array can&#146;t be released as the memory is corrupted. I did not have time to investigate too much but it looks like the pload_mgmt-&gt;data_bffs either too small or somehow data is stored outside its boundaries.
<br>
<p>*** glib detected *** /home/bosilca/unstable/dplasma/trunk/build/debug/dplasma/testing/testing_dpotrf: free(): invalid next size (fast): 0x081f0798 ***
<br>
<p>(gdb) bt
<br>
#0  0x00130424 in __kernel_vsyscall ()
<br>
#1  0x006bfb11 in raise () from /lib/libc.so.6
<br>
#2  0x006c13ea in abort () from /lib/libc.so.6
<br>
#3  0x006ff9d5 in __libc_message () from /lib/libc.so.6
<br>
#4  0x00705e31 in malloc_printerr () from /lib/libc.so.6
<br>
#5  0x00708571 in _int_free () from /lib/libc.so.6
<br>
#6  0x00c02d0e in bcol_basesmuma_bank_init_opti (ml_module=0x81dfe60, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bcol_module=0xb30b3008, reg_data=0x81e6698)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:472
<br>
#7  0x00b7035f in mca_coll_ml_register_bcols (ml_module=0x81dfe60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:513
<br>
#8  0x00b70651 in ml_module_memory_initialization (ml_module=0x81dfe60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:560
<br>
#9  0x00b733fd in ml_discover_hierarchy (ml_module=0x81dfe60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:1585
<br>
#10 0x00b7786e in mca_coll_ml_comm_query (comm=0x8127da0, priority=0xbfffe558)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:2998
<br>
#11 0x00202ea6 in query_2_0_0 (component=0xbc6500, comm=0x8127da0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=0xbfffe558, module=0xbfffe580)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:375
<br>
#12 0x00202e7f in query (component=0xbc6500, comm=0x8127da0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=0xbfffe558, module=0xbfffe580)
<br>
---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:358
<br>
#13 0x00202d9e in check_one_component (comm=0x8127da0, component=0xbc6500, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0xbfffe580)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:320
<br>
#14 0x00202bce in check_components (components=0x253d70, comm=0x8127da0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:284
<br>
#15 0x001fbbe1 in mca_coll_base_comm_select (comm=0x8127da0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:117
<br>
#16 0x0019872f in ompi_mpi_init (argc=7, argv=0xbfffee74, requested=0, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0xbfffe970) at ../../trunk/ompi/runtime/ompi_mpi_init.c:894
<br>
#17 0x001c9509 in PMPI_Init (argc=0xbfffe9c0, argv=0xbfffe9c4) at pinit.c:84
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13920.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] more f77 cruft"</a>
<li><strong>Previous message:</strong> <a href="13918.php">Ralph Castain: "Re: [OMPI devel] testing assignments/requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13921.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13921.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
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
