<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 16:59:07 2014" -->
<!-- isoreceived="20140208215907" -->
<!-- sent="Sat, 8 Feb 2014 13:57:41 -0800" -->
<!-- isosent="20140208215741" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="B479798A-EA37-425D-9B5D-8656161D3921_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A71D0269-4AE0-4B3E-9711-1583E07718CF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 16:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Temporary workaround:  -mca btl ^vader
<br>
<p>On Feb 8, 2014, at 10:11 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry to say, some recent commit has broken the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rhc_at_bend002 examples]$ mpirun -n 3 ./hello_c
</span><br>
<span class="quotelev1">&gt; [bend001:22289] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bend001:22289] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [bend001:22289] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [bend001:22289] Failing at address: 0x7f354daaa000
</span><br>
<span class="quotelev1">&gt; [bend001:22290] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bend001:22290] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [bend001:22290] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [bend001:22290] Failing at address: 0x7fa819d81000
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 0] /lib64/libpthread.so.0[0x38e320f710]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 1] /lib64/libc.so.6[0x38e26845ad]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 2] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_btl_vader.so(+0x3b0b)[0x7f3549924b0b]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 3] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_btl_base_select+0x1cc)[0x7f354db62a21]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 4] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x27)[0x7f354a1cfc2c]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 5] [bend001:22290] [ 0] /lib64/libpthread.so.0[0x38e320f710]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 1] /lib64/libc.so.6[0x38e26845ad]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 2] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_btl_vader.so(+0x3b0b)[0x7fa815bfbb0b]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 3] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_bml_base_init+0xe2)[0x7f354db6189e]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 6] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_pml_ob1.so(+0x7cc3)[0x7f35492c3cc3]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 7] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_pml_base_select+0x29c)[0x7f354db88261]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 8] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(ompi_mpi_init+0x685)[0x7f354dafbc7b]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [ 9] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_btl_base_select+0x1cc)[0x7fa819e39a21]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 4] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x27)[0x7fa8164a6c2c]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 5] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_bml_base_init+0xe2)[0x7fa819e3889e]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 6] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_pml_ob1.so(+0x7cc3)[0x7fa81559acc3]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 7] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_pml_base_select+0x29c)[0x7fa819e5f261]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 8] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(MPI_Init+0x185)[0x7f354db2f156]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [10] ./hello_c[0x400806]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x38e261ed1d]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] [12] ./hello_c[0x400719]
</span><br>
<span class="quotelev1">&gt; [bend001:22289] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(ompi_mpi_init+0x685)[0x7fa819dd2c7b]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [ 9] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(MPI_Init+0x185)[0x7fa819e06156]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [10] ./hello_c[0x400806]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x38e261ed1d]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] [12] ./hello_c[0x400719]
</span><br>
<span class="quotelev1">&gt; [bend001:22290] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [bend001:22291] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [bend001:22291] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [bend001:22291] Signal code: Invalid permissions (2)
</span><br>
<span class="quotelev1">&gt; [bend001:22291] Failing at address: 0x7f498fc96000
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 0] /lib64/libpthread.so.0[0x38e320f710]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 1] /lib64/libc.so.6[0x38e26845ad]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 2] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_btl_vader.so(+0x3b0b)[0x7f498795db0b]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 3] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_btl_base_select+0x1cc)[0x7f498fd4ea21]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 4] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x27)[0x7f498c3bbc2c]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 5] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_bml_base_init+0xe2)[0x7f498fd4d89e]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 6] /home/common/openmpi/build/svn-trunk/lib/openmpi/mca_pml_ob1.so(+0x7cc3)[0x7f49872fccc3]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 7] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(mca_pml_base_select+0x29c)[0x7f498fd74261]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 8] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(ompi_mpi_init+0x685)[0x7f498fce7c7b]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [ 9] /home/common/openmpi/build/svn-trunk/lib/libmpi.so.0(MPI_Init+0x185)[0x7f498fd1b156]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [10] ./hello_c[0x400806]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x38e261ed1d]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] [12] ./hello_c[0x400719]
</span><br>
<span class="quotelev1">&gt; [bend001:22291] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 22289 on node bend001 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 3 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt; [rhc_at_bend002 examples]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan: can you please take a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14055/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14056.php">Paul Hargrove: "[OMPI devel] v1.7.4 REGRESSION: build failure w/ old OFED"</a>
<li><strong>Previous message:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14053.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
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
