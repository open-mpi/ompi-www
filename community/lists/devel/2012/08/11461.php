<?
$subject_val = "Re: [OMPI devel] trunk broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 10:53:07 2012" -->
<!-- isoreceived="20120830145307" -->
<!-- sent="Thu, 30 Aug 2012 07:53:00 -0700" -->
<!-- isosent="20120830145300" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk broken?" -->
<!-- id="E98013A5-2094-4ABA-9352-80D28FB70378_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="503F7DB5.4050005_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk broken?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 10:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11460.php">Eugene Loh: "[OMPI devel] trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="11460.php">Eugene Loh: "[OMPI devel] trunk broken?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we know - been fixed.
<br>
<p><p>On Aug 30, 2012, at 7:50 AM, Eugene Loh &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Trunk broken?  Last night, Oracle's MTT trunk runs all came up empty handed.  E.g.,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [ 0] [0xffffe600]
</span><br>
<span class="quotelev1">&gt; [ 1] /lib/libc.so.6(strlen+0x33) [0x3fa0a3]
</span><br>
<span class="quotelev1">&gt; [ 2] /lib/libc.so.6(__strdup+0x25) [0x3f9de5]
</span><br>
<span class="quotelev1">&gt; [ 3] .../lib/openmpi/mca_db_hash.so [0xf7bbdd34]
</span><br>
<span class="quotelev1">&gt; [ 4] .../lib/libmpi.so.0(orte_util_decode_pidmap+0x5f4) [0xf7e46654]
</span><br>
<span class="quotelev1">&gt; [ 5] .../lib/libmpi.so.0(orte_util_nidmap_init+0x1b4) [0xf7e46d54]
</span><br>
<span class="quotelev1">&gt; [ 6] .../lib/openmpi/mca_ess_env.so [0xf7bc4f62]
</span><br>
<span class="quotelev1">&gt; [ 7] .../lib/libmpi.so.0(orte_init+0x160) [0xf7e2d250]
</span><br>
<span class="quotelev1">&gt; [ 8] .../lib/libmpi.so.0(ompi_mpi_init+0x163) [0xf7de2133]
</span><br>
<span class="quotelev1">&gt; [ 9] .../lib/libmpi.so.0(MPI_Init+0x13f) [0xf7dfb6df]
</span><br>
<span class="quotelev1">&gt; [10] ./c_ring [0x8048759]
</span><br>
<span class="quotelev1">&gt; [11] /lib/libc.so.6(__libc_start_main+0xdc) [0x3a0dec]
</span><br>
<span class="quotelev1">&gt; [12] ./c_ring [0x80486a1]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; r27182.  The previous night, with r27175, ran fine.  Quick peek at 27178 seems fine (I think).
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11462.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27161 - trunk/orte/mca/grpcomm/base"</a>
<li><strong>Previous message:</strong> <a href="11460.php">Eugene Loh: "[OMPI devel] trunk broken?"</a>
<li><strong>In reply to:</strong> <a href="11460.php">Eugene Loh: "[OMPI devel] trunk broken?"</a>
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
