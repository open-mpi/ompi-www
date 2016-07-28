<?
$subject_val = "Re: [OMPI devel] Fwd: === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 24 16:16:04 2008" -->
<!-- isoreceived="20080124211604" -->
<!-- sent="Thu, 24 Jan 2008 16:15:48 -0500" -->
<!-- isosent="20080124211548" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: === CREATE FAILURE ===" -->
<!-- id="4BC1A583-848D-4987-8D9D-88063982C04C_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0801241442400.5937_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: === CREATE FAILURE ===<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-24 16:15:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3039.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3037.php">Brian W. Barrett: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I'll change the filenames.
<br>
<p>Aurelien
<br>
<p>Le 24 janv. 08 &#224; 15:43, Brian W. Barrett a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Automake forces v7 mode so that Solaris tar can untar the tarball,  
</span><br>
<span class="quotelev1">&gt; IIRC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 24 Jan 2008, Aur&#195;&#169;lien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to posix, tar should not limit the file name length. Only
</span><br>
<span class="quotelev2">&gt;&gt; the v7 implementation of tar is limited to 99 characters. GNU tar has
</span><br>
<span class="quotelev2">&gt;&gt; never been limited in the number of characters file names can have.
</span><br>
<span class="quotelev2">&gt;&gt; You should check with tar --help that tar on your machine defaults to
</span><br>
<span class="quotelev2">&gt;&gt; format=gnu or format=posix. If it defaults to format=v7 I am curious
</span><br>
<span class="quotelev2">&gt;&gt; why. Are you using solaris ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 24 janv. 08 &#195;  15:18, Jeff Squyres a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to replicate and getting a lot of these:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pessimist/vprotocol_pessimist_sender_based.c: file name is too long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (max 99); not dumped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar: openmpi-1.3a1r17212M/ompi/mca/pml/v/vprotocol/mca/vprotocol/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pessimist/vprotocol_pessimist_component.c: file name is too long  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (max
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 99); not dumped
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll bet that this is the real problem.  GNU tar on linux defaults  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 99 characters max, and the _component.c filename is 102, for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you shorten your names?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2008, at 3:02 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We cannot reproduce this one. A simple &quot;make checkdist&quot; exit long
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before doing anything in the ompi directory. It is difficult to see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where exactly it fails, but it is somewhere in the opal  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suspect the new carto framework ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 24, 2008, at 7:12 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Aurelien --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you fix please?  Last night's tests didn't run because of this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: MPI Team &lt;mpiteam_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Date: January 23, 2008 9:13:30 PM EST
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: === CREATE FAILURE ===
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Reply-To: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   make -j 4 distcheck
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Start time: Wed Jan 23 21:00:08 EST 2008
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; End time:   Wed Jan 23 21:13:30 EST 2008
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating orte/mca/snapc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating orte/mca/snapc/full/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/allocator/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/allocator/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/allocator/bucket/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/bml/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/bml/r2/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/gm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/ofud/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/openib/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/sctp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/tcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/btl/udapl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/basic/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/inter/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/self/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/coll/tuned/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/common/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/common/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/common/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/common/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/crcp/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/crcp/coord/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/io/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/io/romio/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mpool/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mpool/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mpool/sm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mtl/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mtl/mx/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mtl/portals/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/mtl/psm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/osc/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/osc/pt2pt/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/osc/rdma/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/cm/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/crcpw/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/dr/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/ob1/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: creating ompi/mca/pml/v/vprotocol/Makefile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; config.status: error: cannot find input file: ompi/mca/pml/v/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; vprotocol/pessimist/Makefile.in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [distcheck] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Previous message:</strong> <a href="3039.php">Jeff Squyres: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>In reply to:</strong> <a href="3037.php">Brian W. Barrett: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
<li><strong>Reply:</strong> <a href="3041.php">Paul H. Hargrove: "Re: [OMPI devel] Fwd: === CREATE FAILURE ==="</a>
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
