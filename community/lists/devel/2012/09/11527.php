<?
$subject_val = "Re: [OMPI devel] 1.7 Branch Head Link Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 10:26:02 2012" -->
<!-- isoreceived="20120926142602" -->
<!-- sent="Wed, 26 Sep 2012 14:25:57 +0000" -->
<!-- isosent="20120926142557" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7 Branch Head Link Failure" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B111973FD_at_ECS-EXG-P-MB03.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C6C077E6-C4D6-4603-ADF6-C28B70987A26_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7 Branch Head Link Failure<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 10:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>In reply to:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff.
<br>
<p>Sam
<br>
<p>On Sep 26, 2012, at 12:03 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sam --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing a different failure, but only on machines with XRC.  Here's what I see (with a &quot;make -j 4&quot;, so there's a little out-of-order stuff below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll file a bug for ORNL/Mellanox.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_mca.c:24:
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/mca/common/ofacm/base.h:27:1: warning: &quot;HAVE_XRC&quot; redefined
</span><br>
<span class="quotelev1">&gt; In file included from bcol_iboffload_mca.c:18:
</span><br>
<span class="quotelev1">&gt; bcol_iboffload.h:50:1: warning: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt;  CC     bcol_iboffload_collfrag.lo
</span><br>
<span class="quotelev1">&gt;  CC     bcol_iboffload_task.lo
</span><br>
<span class="quotelev1">&gt;  CC     bcol_iboffload_component.lo
</span><br>
<span class="quotelev1">&gt;  CC     bcol_iboffload_barrier.lo
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c: In function 'iboffload_release_devices':
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c:302: error: implicit declaration of function 'ompi_ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c: In function 'iboffload_load_devices':
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c:321: error: implicit declaration of function 'ompi_ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c:321: warning: assignment makes pointer from integer without a cast
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_component.c:564:5: warning: &quot;OMPI_OPENFABRICS_HAVE_CONNECTX_XRC&quot; is not defined
</span><br>
<span class="quotelev1">&gt;  CC     bcol_iboffload_bcast.lo
</span><br>
<span class="quotelev1">&gt; make[2]: *** [bcol_iboffload_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_bcast.c: In function 'mca_bcol_iboffload_small_msg_bcast_progress':
</span><br>
<span class="quotelev1">&gt; bcol_iboffload_bcast.c:181: warning: unused variable 'i'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/jsquyres/svn/ompi-1.7/ompi/mca/bcol/iboffload'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/jsquyres/svn/ompi-1.7/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 26, 2012, at 1:04 AM, Gutierrez, Samuel K wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having trouble building the 1.7 branch head.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configure:
</span><br>
<span class="quotelev2">&gt;&gt; --with-platform=./contrib/platform/lanl/rr-class/optimized-panasas
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Link fails with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Creating mpi/man/man3/OpenMPI.3 man page...
</span><br>
<span class="quotelev2">&gt;&gt; CCLD   libmpi.la
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
</span><br>
<span class="quotelev2">&gt;&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looks like this may be due to multiple definitions of ib_address_t within:
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_xrc.h
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/common/ofacm/common_ofacm_xoob.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sam
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11528.php">Eugene Loh: "[OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>In reply to:</strong> <a href="11526.php">Jeff Squyres: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
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
