<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 17:05:49 2008" -->
<!-- isoreceived="20080726210549" -->
<!-- sent="Sat, 26 Jul 2008 17:05:42 -0400" -->
<!-- isosent="20080726210542" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="1306179F-5071-41B8-B2A2-B8CA06C256E8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B9627303-B6E5-4B7B-A6E9-3522006DBC4F_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-26 17:05:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4442.php">Lenny Verkhovsky: "[OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've committed r19045 that should finally fix the problem.  Ugh.
<br>
<p><p>On Jul 26, 2008, at 8:48 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Tim pointed out to me on IM that this was a trunk build, not a v1.3  
</span><br>
<span class="quotelev1">&gt; build (he's going to update the script to make this error message a  
</span><br>
<span class="quotelev1">&gt; bit more obvious).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm checking into this failure now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 25, 2008, at 10:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can find no reason why this failed.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can manually run &quot;make dist&quot; on the v1.3 tree successfully, and  
</span><br>
<span class="quotelev2">&gt;&gt; there weren't any changes to 1.3 mpi/Makefile.am in the last 24  
</span><br>
<span class="quotelev2">&gt;&gt; hours.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did eddie run out of disk space or something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 25, 2008, at 9:32 PM, MPI Team wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     make distcheck
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start time: Fri Jul 25 21:25:23 EDT 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End time:   Fri Jul 25 21:32:33 EDT 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-checkpoint'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-clean'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-ps'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orte-restart'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orted'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/orterun'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte/tools/wrappers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list='include datatype debuggers etc mpi mca/common  mca/allocator  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/bml mca/btl mca/coll mca/crcp mca/dpm mca/io mca/mpool mca/mtl  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/osc mca/pml mca/pubsub mca/rcache mca/topo mca/common/sm mca/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; common/mx mca/common/portals  mca/allocator/basic mca/allocator/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bucket mca/bml/r2 mca/btl/self mca/btl/sm mca/btl/elan mca/btl/gm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/btl/mx mca/btl/ofud mca/btl/openib mca/btl/portals mca/btl/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sctp mca/btl/tcp mca/btl/udapl mca/coll/basic mca/coll/hierarch  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/coll/inter mca/coll/self mca/coll/sm mca/coll/tuned mca/crcp/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coord mca/dpm/orte mca/io/romio mca/mpool/rdma mca/mpool/sm mca/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtl/mx mca/mtl/portals mca/mtl/psm mca/osc/pt2pt mca/osc/rdma mca/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml/cm mca/pml/ob1 mca/pml/crcpw mca/pml/dr mca/pml/v mca/pubsub/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte mca/rcache/vma mca/topo/unity contrib/vt tools/ompi_info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools/wrappers tools/ortetools tools/ompi-server'; for subdir in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $list; do \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if test &quot;$subdir&quot; = .; then :; else \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  test -d &quot;/home/mpiteam/openmpi/nightly-tarball-build-root/trunk/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  || /bin/mkdir -p &quot;/home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root/trunk/create-r19043/ompi/openmpi-1.4a1r19043/ompi/$subdir&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  || exit 1; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/openmpi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4a1r19043/ompi &amp;&amp; pwd`; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  top_distdir=`CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd /home/mpiteam/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/nightly-tarball-build-root/trunk/create-r19043/ompi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4a1r19043 &amp;&amp; pwd`; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (cd $subdir &amp;&amp; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    make  \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      top_distdir=&quot;$top_distdir&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      distdir=&quot;$distdir/$subdir&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	am__remove_distdir=: \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	am__skip_length_check=: \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      distdir) \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    || exit 1; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fi; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ../.. &amp;&amp; /bin/sh /home/mpiteam/openmpi/nightly-tarball-build- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; root/trunk/create-r19043/ompi/config/missing --run autoheader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f stamp-h3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; touch ompi_config.h.in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/datatype'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/debuggers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/etc'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** No rule to make target `distdir'.  Stop.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi/mpi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [distdir] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/mpiteam/openmpi/nightly-tarball- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build-root/trunk/create-r19043/ompi/ompi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [distdir] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4442.php">Lenny Verkhovsky: "[OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="4440.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
