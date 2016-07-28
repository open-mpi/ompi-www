<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 12:31:14 2013" -->
<!-- isoreceived="20130130173114" -->
<!-- sent="Wed, 30 Jan 2013 18:31:09 +0100" -->
<!-- isosent="20130130173109" -->
<!-- name="Jure Pe&#196;&#141;ar" -->
<!-- email="pegasus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="20130130183109.04122bb6.pegasus_at_nerv.eu.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20130130154802.GG99519_at_pantheralanlgov.local" -->
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
<strong>From:</strong> Jure Pe&#196;&#141;ar (<em>pegasus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 12:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12083.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 30 Jan 2013 08:48:02 -0700
<br>
Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try configuring with --with-platform=contrib/platform/lanl/cray_xe6/optimized-nopanasas . That might work. If it doesn't try the optimized-lustre file from the same directory in trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I used optimized-common. That fails with:
<br>
<p>mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data+0x0): multiple definition of `ib_address_t_class'
<br>
mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data+0x0): first defined here
<br>
<p>So I tried adding --enable-mca-static=btl:ugni,btl:self --enable-contrib-no-build=libnbc,vt to configure and got this:
<br>
&nbsp;CCLD     ompi_info
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mca_common_sm_fini'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list_compat'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list_compat'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_ep_destroy'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `mca_common_sm_init'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_module'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_endpoint_return'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_fini'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_ep_create'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_init'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ompi_common_ugni_endpoint_for_proc'
<br>
<p>Help?
<br>
<p><p><pre>
-- 
Jure Pe&#196;&#141;ar
<a href="http://jure.pecar.org">http://jure.pecar.org</a>
<a href="http://f5j.eu">http://f5j.eu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12080.php">KAWASHIMA Takahiro: "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12078.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12082.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="12083.php">Nathan Hjelm: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
