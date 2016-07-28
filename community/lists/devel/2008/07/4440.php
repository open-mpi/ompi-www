<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 08:49:06 2008" -->
<!-- isoreceived="20080726124906" -->
<!-- sent="Sat, 26 Jul 2008 08:48:59 -0400" -->
<!-- isosent="20080726124859" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="B9627303-B6E5-4B7B-A6E9-3522006DBC4F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E23FBC64-4410-48C3-8138-29AF8C6BED1F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 08:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>In reply to:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim pointed out to me on IM that this was a trunk build, not a v1.3  
<br>
build (he's going to update the script to make this error message a  
<br>
bit more obvious).
<br>
<p>I'm checking into this failure now...
<br>
<p><p>On Jul 25, 2008, at 10:15 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I can find no reason why this failed.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can manually run &quot;make dist&quot; on the v1.3 tree successfully, and  
</span><br>
<span class="quotelev1">&gt; there weren't any changes to 1.3 mpi/Makefile.am in the last 24 hours.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did eddie run out of disk space or something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2008, at 9:32 PM, MPI Team wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev2">&gt;&gt;      make distcheck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Start time: Fri Jul 25 21:25:23 EDT 2008
</span><br>
<span class="quotelev2">&gt;&gt; End time:   Fri Jul 25 21:32:33 EDT 2008
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; list='include datatype debuggers etc mpi mca/common  mca/allocator  
</span><br>
<span class="quotelev2">&gt;&gt; mca/bml mca/btl mca/coll mca/crcp mca/dpm mca/io mca/mpool mca/mtl  
</span><br>
<span class="quotelev2">&gt;&gt; mca/osc mca/pml mca/pubsub mca/rcache mca/topo mca/common/sm mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; common/mx mca/common/portals  mca/allocator/basic mca/allocator/ 
</span><br>
<span class="quotelev2">&gt;&gt; bucket mca/bml/r2 mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm  
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/mx mca/btl/ofud mca/btl/openib mca/btl/portals mca/btl/sctp  
</span><br>
<span class="quotelev2">&gt;&gt; mca/btl/tcp mca/btl/udapl mca/coll/basic mca/coll/hierarch mca/coll/ 
</span><br>
<span class="quotelev2">&gt;&gt; inter mca/coll/self mca/coll/sm mca/coll/tuned mca/crcp/coord mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; dpm/orte mca/io/romio mca/mpool/rdma mca/mpool/sm mca/mtl/mx mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; mtl/portals mca/mtl/psm mca/osc/pt2pt mca/osc/rdma mca/pml/cm mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; pml/ob1 mca/pml/crcpw mca/pml/dr mca/pml/v mca/pubsub/orte mca/ 
</span><br>
<span class="quotelev2">&gt;&gt; rcache/vma mca/topo/unity contrib/vt tools/ompi_info tools/wrappers  
</span><br>
<span class="quotelev2">&gt;&gt; tools/ortetools tools/ompi-server'; for subdir in $list; do \
</span><br>
<span class="quotelev2">&gt;&gt; if test &quot;$subdir&quot; = .; then :; else \
</span><br>
<span class="quotelev2">&gt;&gt;   test -d &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev2">&gt;&gt; create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev2">&gt;&gt; root/trunk/create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   || exit 1; \
</span><br>
<span class="quotelev2">&gt;&gt;   distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/openmpi/ 
</span><br>
<span class="quotelev2">&gt;&gt; nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4a1r19043/ompi &amp;&amp; pwd`; \
</span><br>
<span class="quotelev2">&gt;&gt;   top_distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi/nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4a1r19043 &amp;&amp; pwd`; \
</span><br>
<span class="quotelev2">&gt;&gt;   (cd $subdir &amp;&amp; \
</span><br>
<span class="quotelev2">&gt;&gt;     make  \
</span><br>
<span class="quotelev2">&gt;&gt;       top_distdir=&quot;$top_distdir&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       distdir=&quot;$distdir/$subdir&quot; \
</span><br>
<span class="quotelev2">&gt;&gt; 	am__remove_distdir=: \
</span><br>
<span class="quotelev2">&gt;&gt; 	am__skip_length_check=: \
</span><br>
<span class="quotelev2">&gt;&gt;       distdir) \
</span><br>
<span class="quotelev2">&gt;&gt;     || exit 1; \
</span><br>
<span class="quotelev2">&gt;&gt; fi; \
</span><br>
<span class="quotelev2">&gt;&gt; done
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; cd ../.. &amp;&amp; /bin/sh /home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev2">&gt;&gt; root/trunk/create-r19043/ompi/config/missing --run autoheader
</span><br>
<span class="quotelev2">&gt;&gt; rm -f stamp-h3
</span><br>
<span class="quotelev2">&gt;&gt; touch ompi_config.h.in
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** No rule to make target `distdir'.  Stop.
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev2">&gt;&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [distdir] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt;&gt; Cyrador
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; testing mailing list
</span><br>
<span class="quotelev2">&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="4439.php">Jeff Squyres: "Re: [OMPI devel] some configury nits"</a>
<li><strong>In reply to:</strong> <a href="4437.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="4441.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
