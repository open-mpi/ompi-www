<?
$subject_val = "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 17:59:58 2012" -->
<!-- isoreceived="20120217225958" -->
<!-- sent="Fri, 17 Feb 2012 17:59:53 -0500" -->
<!-- isosent="20120217225953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch" -->
<!-- id="A07F34E4-D7E1-4930-82FC-F3DE8CB26334_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3DE6A2.8040909_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 17:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks -- I (think I) fixed in <a href="https://svn.open-mpi.org/trac/ompi/ticket/3020">https://svn.open-mpi.org/trac/ompi/ticket/3020</a>.
<br>
<p>I threw it to Josh and Samuel to review.
<br>
<p><p>On Feb 17, 2012, at 12:33 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I've tried to build from both the 1.5 and trunk nightly tarballs configured with &quot;--enable-ft=cr --with-blcr=XXXX&quot; .
</span><br>
<span class="quotelev1">&gt; I am using Intel compilers on Linux/x86.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The trunk was fine, but on the 1.5 branch I see the build fail with:
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/btl/sm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1/BLD/ompi/mca/btl/sm'
</span><br>
<span class="quotelev2">&gt;&gt;  CC     mca_btl_sm_la-btl_sm.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1107): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;          if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev2">&gt;&gt;                                           ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1113): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              opal_crs_base_metadata_write_token(NULL, CRS_METADATA_TOUCH, mca_btl_sm_component.mmap_file-&gt;map_path);
</span><br>
<span class="quotelev2">&gt;&gt;                                                                                                ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1121): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev2">&gt;&gt;                                               ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1125): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                  opal_crs_base_cleanup_append(mca_btl_sm_component.mmap_file-&gt;map_path, false);
</span><br>
<span class="quotelev2">&gt;&gt;                                                                    ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1134): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;          if( NULL != mca_btl_sm_component.mmap_file ) {
</span><br>
<span class="quotelev2">&gt;&gt;                                           ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c(1144): error: struct &quot;mca_btl_sm_component_t&quot; has no field &quot;mmap_file&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              opal_crs_base_cleanup_append(mca_btl_sm_component.mmap_file-&gt;map_path, false);
</span><br>
<span class="quotelev2">&gt;&gt;                                                                ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/btl/sm/btl_sm.c (code 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pushing past that error with &quot;make -k&quot; yields a similar problem in mpool/sm as well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Making all in mca/mpool/sm
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1/BLD/ompi/mca/mpool/sm'
</span><br>
<span class="quotelev2">&gt;&gt;  CC     mpool_sm_module.lo
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(146): error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                  unlink(sm_module-&gt;sm_common_mmap-&gt;map_path);
</span><br>
<span class="quotelev2">&gt;&gt;                                    ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(183): error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              if (NULL != self_sm_module-&gt;sm_common_mmap) {
</span><br>
<span class="quotelev2">&gt;&gt;                                          ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(184): error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                  opal_crs_base_cleanup_append(self_sm_module-&gt;sm_common_mmap-&gt;map_path, false);
</span><br>
<span class="quotelev2">&gt;&gt;                                                               ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(198): error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;          if (NULL != self_sm_module-&gt;sm_common_mmap) {
</span><br>
<span class="quotelev2">&gt;&gt;                                      ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c(199): error: struct &quot;mca_mpool_sm_module_t&quot; has no field &quot;sm_common_mmap&quot;
</span><br>
<span class="quotelev2">&gt;&gt;              opal_crs_base_cleanup_append(self_sm_module-&gt;sm_common_mmap-&gt;map_path, false);
</span><br>
<span class="quotelev2">&gt;&gt;                                                           ^
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for /home/pcp1/phargrov/OMPI/openmpi-1.5-latest-linux-x86-gm2-icc-8.1//openmpi-1.5-latest/ompi/mca/mpool/sm/mpool_sm_module.c (code 2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10487.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10467.php">Paul H. Hargrove: "[OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
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
