<?
$subject_val = "Re: [OMPI devel] 1.7 Branch Head Link Failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 26 02:03:49 2012" -->
<!-- isoreceived="20120926060349" -->
<!-- sent="Wed, 26 Sep 2012 08:03:48 +0200" -->
<!-- isosent="20120926060348" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7 Branch Head Link Failure" -->
<!-- id="C6C077E6-C4D6-4603-ADF6-C28B70987A26_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F7AEC0555CE39418857F909CEE0451B1118DC36_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-26 02:03:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Previous message:</strong> <a href="11525.php">Gutierrez, Samuel K: "[OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>In reply to:</strong> <a href="11525.php">Gutierrez, Samuel K: "[OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Reply:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sam --
<br>
<p>I'm seeing a different failure, but only on machines with XRC.  Here's what I see (with a &quot;make -j 4&quot;, so there's a little out-of-order stuff below).
<br>
<p>I'll file a bug for ORNL/Mellanox.
<br>
<p><pre>
----
In file included from bcol_iboffload_mca.c:24:
../../../../ompi/mca/common/ofacm/base.h:27:1: warning: &quot;HAVE_XRC&quot; redefined
In file included from bcol_iboffload_mca.c:18:
bcol_iboffload.h:50:1: warning: this is the location of the previous definition
  CC     bcol_iboffload_collfrag.lo
  CC     bcol_iboffload_task.lo
  CC     bcol_iboffload_component.lo
  CC     bcol_iboffload_barrier.lo
bcol_iboffload_component.c: In function 'iboffload_release_devices':
bcol_iboffload_component.c:302: error: implicit declaration of function 'ompi_ibv_free_device_list'
bcol_iboffload_component.c: In function 'iboffload_load_devices':
bcol_iboffload_component.c:321: error: implicit declaration of function 'ompi_ibv_get_device_list'
bcol_iboffload_component.c:321: warning: assignment makes pointer from integer without a cast
bcol_iboffload_component.c:564:5: warning: &quot;OMPI_OPENFABRICS_HAVE_CONNECTX_XRC&quot; is not defined
  CC     bcol_iboffload_bcast.lo
make[2]: *** [bcol_iboffload_component.lo] Error 1
make[2]: *** Waiting for unfinished jobs....
bcol_iboffload_bcast.c: In function 'mca_bcol_iboffload_small_msg_bcast_progress':
bcol_iboffload_bcast.c:181: warning: unused variable 'i'
make[2]: Leaving directory `/home/jsquyres/svn/ompi-1.7/ompi/mca/bcol/iboffload'
make[1]: *** [all-recursive] Error 1
make[1]: Leaving directory `/home/jsquyres/svn/ompi-1.7/ompi'
make: *** [all-recursive] Error 1
-----
On Sep 26, 2012, at 1:04 AM, Gutierrez, Samuel K wrote:
&gt; Hi,
&gt; 
&gt; I'm having trouble building the 1.7 branch head.
&gt; 
&gt; Configure:
&gt; --with-platform=./contrib/platform/lanl/rr-class/optimized-panasas
&gt; 
&gt; Link fails with:
&gt; 
&gt; Creating mpi/man/man3/OpenMPI.3 man page...
&gt;  CCLD   libmpi.la
&gt; mca/btl/openib/.libs/libmca_btl_openib.a(btl_openib_xrc.o):(.data.rel+0x0): multiple definition of `ib_address_t_class'
&gt; mca/common/ofacm/.libs/libmca_common_ofacm_noinst.a(common_ofacm_xoob.o):(.data.rel+0x0): first defined here
&gt; 
&gt; Looks like this may be due to multiple definitions of ib_address_t within:
&gt; ompi/mca/btl/openib/btl_openib_xrc.h
&gt; ompi/mca/common/ofacm/common_ofacm_xoob.h
&gt; 
&gt; Thanks,
&gt; 
&gt; Sam
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Previous message:</strong> <a href="11525.php">Gutierrez, Samuel K: "[OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>In reply to:</strong> <a href="11525.php">Gutierrez, Samuel K: "[OMPI devel] 1.7 Branch Head Link Failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
<li><strong>Reply:</strong> <a href="11527.php">Gutierrez, Samuel K: "Re: [OMPI devel] 1.7 Branch Head Link Failure"</a>
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
