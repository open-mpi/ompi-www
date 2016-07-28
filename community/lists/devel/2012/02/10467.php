<?
$subject_val = "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 00:33:34 2012" -->
<!-- isoreceived="20120217053334" -->
<!-- sent="Thu, 16 Feb 2012 21:33:22 -0800" -->
<!-- isosent="20120217053322" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch" -->
<!-- id="4F3DE6A2.8040909_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 00:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Reply:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've tried to build from both the 1.5 and trunk nightly tarballs 
<br>
configured with &quot;--enable-ft=cr --with-blcr=XXXX&quot; .
<br>
I am using Intel compilers on Linux/x86.
<br>
<p>The trunk was fine, but on the 1.5 branch I see the build fail with:
<br>
<span class="quotelev1">&gt; Making all in mca/btl/sm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1/BLD/ompi/mca/btl/sm'
</span><br>
<span class="quotelev1">&gt;   CC     mca_btl_sm_la-btl_sm.lo
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1107): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;           if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev1">&gt;                                            ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1113): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;               opal_crs_base_metadata_write_token(NULL, 
</span><br>
<span class="quotelev1">&gt; CRS_METADATA_TOUCH, mca_btl_sm_component.mmap_file-&gt;map_path);
</span><br>
<span class="quotelev1">&gt;                                                                                                 
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1121): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;               if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev1">&gt;                                                ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1125): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(mca_btl_sm_component.mmap_file-&gt;map_path, 
</span><br>
<span class="quotelev1">&gt; false);
</span><br>
<span class="quotelev1">&gt;                                                                     ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1134): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;           if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev1">&gt;                                            ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1144): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(mca_btl_sm_component.mmap_file-&gt;map_path, 
</span><br>
<span class="quotelev1">&gt; false);
</span><br>
<span class="quotelev1">&gt;                                                                 ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for 
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c 
</span><br>
<span class="quotelev1">&gt; (code 2)
</span><br>
<p>Pushing past that error with &quot;make -k&quot; yields a similar problem in 
<br>
mpool/sm as well:
<br>
<p><span class="quotelev1">&gt; Making all in mca/mpool/sm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1/BLD/ompi/mca/mpool/sm'
</span><br>
<span class="quotelev1">&gt;   CC     mpool_sm_module.lo
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(146): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev1">&gt;                   unlink(sm_module-&gt;sm_common_mmap-&gt;map_path);
</span><br>
<span class="quotelev1">&gt;                                     ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(183): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev1">&gt;               if (NULL != self_sm_module-&gt;sm_common_mmap) {
</span><br>
<span class="quotelev1">&gt;                                           ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(184): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(self_sm_module-&gt;sm_common_mmap-&gt;map_path, 
</span><br>
<span class="quotelev1">&gt; false);
</span><br>
<span class="quotelev1">&gt;                                                                ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(198): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev1">&gt;           if (NULL != self_sm_module-&gt;sm_common_mmap) {
</span><br>
<span class="quotelev1">&gt;                                       ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(199): 
</span><br>
<span class="quotelev1">&gt; error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt; opal_crs_base_cleanup_append(self_sm_module-&gt;sm_common_mmap-&gt;map_path, 
</span><br>
<span class="quotelev1">&gt; false);
</span><br>
<span class="quotelev1">&gt;                                                            ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for 
</span><br>
<span class="quotelev1">&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c 
</span><br>
<span class="quotelev1">&gt; (code 2)
</span><br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10468.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10466.php">George Bosilca: "Re: [OMPI devel] btl/gm build broken on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Reply:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
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
