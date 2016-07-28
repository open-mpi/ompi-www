<?
$subject_val = "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 10:38:59 2014" -->
<!-- isoreceived="20140127153859" -->
<!-- sent="Mon, 27 Jan 2014 08:38:58 -0700" -->
<!-- isosent="20140127153858" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures" -->
<!-- id="20140127153858.GD24415_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A1D624EC-3E1B-4FF6-8817-ECC9F5FC2FE7_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 10:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13920.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] more f77 cruft"</a>
<li><strong>In reply to:</strong> <a href="13919.php">George Bosilca: "[OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This shouldn't be affecting 1.7.4 since neither the vader or coll/ml
<br>
updates have been moved yet. As for trunk I am working on a 32-bit fix
<br>
for vader and it should be in later today. I will have to track down
<br>
what is going wrong the basesmuma initialization.
<br>
<p>-Nathan
<br>
<p>On Sun, Jan 26, 2014 at 04:10:29PM +0100, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; I noticed two major issues on 32 bits machines. The first one is with the vader BTL and the second with the selection logic in basesmuma (bcol_basesmuma_bank_init_opti). Both versions are impacted: trunk and 1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I turn off vader and boll via the MCA parameters everything runs just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../trunk/configure --enable-debug --disable-mpi-cxx --disable-mpi-fortran --disable-io-romio --enable-contrib-no-build=vt,libtrace --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Vader generates a segfault for any application even with only 2 processes, so this should be pretty easy to track.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x00ae43b3 in mca_btl_vader_poll_fifo ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:394
</span><br>
<span class="quotelev1">&gt; #2  0x00ae444a in mca_btl_vader_component_progress ()
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/btl/vader/btl_vader_component.c:421
</span><br>
<span class="quotelev1">&gt; #3  0x008fdb95 in opal_progress ()
</span><br>
<span class="quotelev1">&gt;     at ../../trunk/opal/runtime/opal_progress.c:186
</span><br>
<span class="quotelev1">&gt; #4  0x001961bc in ompi_request_default_test_some (count=13, 
</span><br>
<span class="quotelev1">&gt;     requests=0xb1f01d48, outcount=0xb2afb2d0, indices=0xb1f01f60, 
</span><br>
<span class="quotelev1">&gt;     statuses=0xb1f02178) at ../../trunk/ompi/request/req_test.c:316
</span><br>
<span class="quotelev1">&gt; #5  0x001def9a in PMPI_Testsome (incount=13, requests=0xb1f01d48, 
</span><br>
<span class="quotelev1">&gt;     outcount=0xb2afb2d0, indices=0xb1f01f60, statuses=0xb1f02178)
</span><br>
<span class="quotelev1">&gt;     at ptestsome.c:81
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - basesmuma overwrite the memory. The results_array can&#226;&#128;&#153;t be released as the memory is corrupted. I did not have time to investigate too much but it looks like the pload_mgmt-&gt;data_bffs either too small or somehow data is stored outside its boundaries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** glib detected *** /home/bosilca/unstable/dplasma/trunk/build/debug/dplasma/testing/testing_dpotrf: free(): invalid next size (fast): 0x081f0798 ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00130424 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; #1  0x006bfb11 in raise () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x006c13ea in abort () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x006ff9d5 in __libc_message () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00705e31 in malloc_printerr () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x00708571 in _int_free () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #6  0x00c02d0e in bcol_basesmuma_bank_init_opti (ml_module=0x81dfe60, 
</span><br>
<span class="quotelev1">&gt;     bcol_module=0xb30b3008, reg_data=0x81e6698)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_buf_mgmt.c:472
</span><br>
<span class="quotelev1">&gt; #7  0x00b7035f in mca_coll_ml_register_bcols (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:513
</span><br>
<span class="quotelev1">&gt; #8  0x00b70651 in ml_module_memory_initialization (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:560
</span><br>
<span class="quotelev1">&gt; #9  0x00b733fd in ml_discover_hierarchy (ml_module=0x81dfe60)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:1585
</span><br>
<span class="quotelev1">&gt; #10 0x00b7786e in mca_coll_ml_comm_query (comm=0x8127da0, priority=0xbfffe558)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../trunk/ompi/mca/coll/ml/coll_ml_module.c:2998
</span><br>
<span class="quotelev1">&gt; #11 0x00202ea6 in query_2_0_0 (component=0xbc6500, comm=0x8127da0, 
</span><br>
<span class="quotelev1">&gt;     priority=0xbfffe558, module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt;     at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:375
</span><br>
<span class="quotelev1">&gt; #12 0x00202e7f in query (component=0xbc6500, comm=0x8127da0, 
</span><br>
<span class="quotelev1">&gt;     priority=0xbfffe558, module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt; ---Type &lt;return&gt; to continue, or q &lt;return&gt; to quit---
</span><br>
<span class="quotelev1">&gt;     at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:358
</span><br>
<span class="quotelev1">&gt; #13 0x00202d9e in check_one_component (comm=0x8127da0, component=0xbc6500, 
</span><br>
<span class="quotelev1">&gt;     module=0xbfffe580)
</span><br>
<span class="quotelev1">&gt;     at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:320
</span><br>
<span class="quotelev1">&gt; #14 0x00202bce in check_components (components=0x253d70, comm=0x8127da0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:284
</span><br>
<span class="quotelev1">&gt; #15 0x001fbbe1 in mca_coll_base_comm_select (comm=0x8127da0)
</span><br>
<span class="quotelev1">&gt;     at ../../../../trunk/ompi/mca/coll/base/coll_base_comm_select.c:117
</span><br>
<span class="quotelev1">&gt; #16 0x0019872f in ompi_mpi_init (argc=7, argv=0xbfffee74, requested=0, 
</span><br>
<span class="quotelev1">&gt;     provided=0xbfffe970) at ../../trunk/ompi/runtime/ompi_mpi_init.c:894
</span><br>
<span class="quotelev1">&gt; #17 0x001c9509 in PMPI_Init (argc=0xbfffe9c0, argv=0xbfffe9c4) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13921/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Previous message:</strong> <a href="13920.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] more f77 cruft"</a>
<li><strong>In reply to:</strong> <a href="13919.php">George Bosilca: "[OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
<li><strong>Reply:</strong> <a href="13922.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 (and trunk) breakages on 32bits architectures"</a>
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
