<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 13:38:58 2013" -->
<!-- isoreceived="20130130183858" -->
<!-- sent="Wed, 30 Jan 2013 11:38:54 -0700" -->
<!-- isosent="20130130183854" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="20130130183854.GI99519_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130130183109.04122bb6.pegasus_at_nerv.eu.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 13:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12084.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc3 released"</a>
<li><strong>Previous message:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12081.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11994.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Use the optimized-lustre. optimized-common is not intended to be used on its own.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 30, 2013 at 06:31:09PM +0100, Jure Pe??ar wrote:
<br>
<span class="quotelev1">&gt; On Wed, 30 Jan 2013 08:48:02 -0700
</span><br>
<span class="quotelev1">&gt; Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try configuring with --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas . That might work. If it doesn't try the optimized-lustre file from the same directory in trunk.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used optimized-common. That fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data+0x0): multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev1">&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data+0x0): first defined here
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I tried adding --enable-mca-static=btl:ugni,btl:self --enable-contrib-no-build=libnbc,vt to configure and got this:
</span><br>
<span class="quotelev1">&gt;  CCLD     ompi_info
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mca_common_sm_fini'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list_compat'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list_compat'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_ep_destroy'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `mca_common_sm_init'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_module'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_endpoint_return'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_fini'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_ep_create'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_init'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_endpoint_for_proc'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jure Pe??ar
</span><br>
<span class="quotelev1">&gt; <a href="http://jure.pecar.org">http://jure.pecar.org</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://f5j.eu">http://f5j.eu</a>
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
<li><strong>Next message:</strong> <a href="12084.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc3 released"</a>
<li><strong>Previous message:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>In reply to:</strong> <a href="12081.php">Jure Pe&#196;&#141;ar: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11994.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
