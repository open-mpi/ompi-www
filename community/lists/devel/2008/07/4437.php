<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 22:15:25 2008" -->
<!-- isoreceived="20080726021525" -->
<!-- sent="Fri, 25 Jul 2008 22:15:19 -0400" -->
<!-- isosent="20080726021519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="E23FBC64-4410-48C3-8138-29AF8C6BED1F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200807260132.m6Q1WYtW030196_at_eddie.osl.iu.edu" -->
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
<strong>Date:</strong> 2008-07-25 22:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
<li><strong>Previous message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can find no reason why this failed.  :-(
<br>
<p>I can manually run &quot;make dist&quot; on the v1.3 tree successfully, and  
<br>
there weren't any changes to 1.3 mpi/Makefile.am in the last 24 hours.
<br>
<p>Did eddie run out of disk space or something?
<br>
<p><p><p>On Jul 25, 2008, at 9:32 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Fri Jul 25 21:25:23 EDT 2008
</span><br>
<span class="quotelev1">&gt; End time:   Fri Jul 25 21:32:33 EDT 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/orte'
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; list='include datatype debuggers etc mpi mca/common  mca/allocator  
</span><br>
<span class="quotelev1">&gt; mca/bml mca/btl mca/coll mca/crcp mca/dpm mca/io mca/mpool mca/mtl  
</span><br>
<span class="quotelev1">&gt; mca/osc mca/pml mca/pubsub mca/rcache mca/topo mca/common/sm mca/ 
</span><br>
<span class="quotelev1">&gt; common/mx mca/common/portals  mca/allocator/basic mca/allocator/ 
</span><br>
<span class="quotelev1">&gt; bucket mca/bml/r2 mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm  
</span><br>
<span class="quotelev1">&gt; mca/btl/mx mca/btl/ofud mca/btl/openib mca/btl/portals mca/btl/sctp  
</span><br>
<span class="quotelev1">&gt; mca/btl/tcp mca/btl/udapl mca/coll/basic mca/coll/hierarch mca/coll/ 
</span><br>
<span class="quotelev1">&gt; inter mca/coll/self mca/coll/sm mca/coll/tuned mca/crcp/coord mca/ 
</span><br>
<span class="quotelev1">&gt; dpm/orte mca/io/romio mca/mpool/rdma mca/mpool/sm mca/mtl/mx mca/mtl/ 
</span><br>
<span class="quotelev1">&gt; portals mca/mtl/psm mca/osc/pt2pt mca/osc/rdma mca/pml/cm mca/pml/ 
</span><br>
<span class="quotelev1">&gt; ob1 mca/pml/crcpw mca/pml/dr mca/pml/v mca/pubsub/orte mca/rcache/ 
</span><br>
<span class="quotelev1">&gt; vma mca/topo/unity contrib/vt tools/ompi_info tools/wrappers tools/ 
</span><br>
<span class="quotelev1">&gt; ortetools tools/ompi-server'; for subdir in $list; do \
</span><br>
<span class="quotelev1">&gt;  if test &quot;$subdir&quot; = .; then :; else \
</span><br>
<span class="quotelev1">&gt;    test -d &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev1">&gt; create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt;    || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev1">&gt; root/trunk/create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt;    || exit 1; \
</span><br>
<span class="quotelev1">&gt;    distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/openmpi/ 
</span><br>
<span class="quotelev1">&gt; nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4a1r19043/ompi &amp;&amp; pwd`; \
</span><br>
<span class="quotelev1">&gt;    top_distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/ 
</span><br>
<span class="quotelev1">&gt; openmpi/nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4a1r19043 &amp;&amp; pwd`; \
</span><br>
<span class="quotelev1">&gt;    (cd $subdir &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;      make  \
</span><br>
<span class="quotelev1">&gt;        top_distdir=&quot;$top_distdir&quot; \
</span><br>
<span class="quotelev1">&gt;        distdir=&quot;$distdir/$subdir&quot; \
</span><br>
<span class="quotelev1">&gt; 	am__remove_distdir=: \
</span><br>
<span class="quotelev1">&gt; 	am__skip_length_check=: \
</span><br>
<span class="quotelev1">&gt;        distdir) \
</span><br>
<span class="quotelev1">&gt;      || exit 1; \
</span><br>
<span class="quotelev1">&gt;  fi; \
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt; cd ../.. &amp;&amp; /bin/sh /home/mpiteam/openmpi/nightly-tarball-build-root/ 
</span><br>
<span class="quotelev1">&gt; trunk/create-r19043/ompi/config/missing --run autoheader
</span><br>
<span class="quotelev1">&gt; rm -f stamp-h3
</span><br>
<span class="quotelev1">&gt; touch ompi_config.h.in
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[2]: *** No rule to make target `distdir'.  Stop.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev1">&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [distdir] Error 1
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<li><strong>Next message:</strong> <a href="4438.php">Ralf Wildenhues: "[OMPI devel] some configury nits"</a>
<li><strong>Previous message:</strong> <a href="4436.php">Jeff Squyres: "Re: [OMPI devel] Need v1.3 RM ruling (was: Help on building	openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;)"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
