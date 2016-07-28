<?
$subject_val = "[OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 07:13:02 2008" -->
<!-- isoreceived="20080124121302" -->
<!-- sent="Thu, 24 Jan 2008 07:12:50 -0500" -->
<!-- isosent="20080124121250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="1308F317-D641-4CBE-A8B3-295414AE4BCC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801240213.m0O2DUXc031547_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: === CREATE FAILURE ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 07:12:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3031.php">Jeff Squyres: "[OMPI devel] more problems with v pml"</a>
<li><strong>Previous message:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aurelien --
<br>
<p>Can you fix please?  Last night's tests didn't run because of this  
<br>
failure.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: January 23, 2008 9:13:30 PM EST
</span><br>
<span class="quotelev1">&gt; To: testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: === CREATE FAILURE ===
</span><br>
<span class="quotelev1">&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       make -j 4 distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Wed Jan 23 21:00:08 EST 2008
</span><br>
<span class="quotelev1">&gt; End time:   Wed Jan 23 21:13:30 EST 2008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/mca/snapc/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/mca/snapc/full/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/allocator/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/allocator/basic/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/allocator/bucket/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/bml/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/ofud/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/sctp/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/inter/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/common/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/common/mx/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/crcp/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/crcp/coord/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/io/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mpool/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mpool/rdma/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mtl/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/osc/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/crcpw/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/mca/pml/v/vprotocol/Makefile
</span><br>
<span class="quotelev1">&gt; config.status: error: cannot find input file: ompi/mca/pml/v/ 
</span><br>
<span class="quotelev1">&gt; vprotocol/pessimist/Makefile.in
</span><br>
<span class="quotelev1">&gt; make: *** [distcheck] Error 1
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
<li><strong>Next message:</strong> <a href="3031.php">Jeff Squyres: "[OMPI devel] more problems with v pml"</a>
<li><strong>Previous message:</strong> <a href="3029.php">Ralph Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3034.php">George Bosilca: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
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
