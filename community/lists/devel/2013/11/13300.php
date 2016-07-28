<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 17:44:53 2013" -->
<!-- isoreceived="20131121224453" -->
<!-- sent="Thu, 21 Nov 2013 17:44:51 -0500" -->
<!-- isosent="20131121224451" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect" -->
<!-- id="9C21F13F-57DD-4954-BF61-414FDBC5480A_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="528E533D.8080809_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 17:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; 3. Pasha moved the openib/connect to common/ofacm but excluded the rdmacm in that move.  Never changed openib to use ofacm/common.
</span><br>
<span class="quotelev2">&gt;&gt; Pasha: This is not entirely true.  I changed openib btl ~3 year ago before my departure from Mellanox.  (I sent link to the code earlier).
</span><br>
<span class="quotelev2">&gt;&gt; We (community) were not able to integrate the code because of &quot;first message&quot; issue in iWarp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hey Pasha,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can get rid of the &quot;first message&quot; code altogether.   If its easy for 
</span><br>
<span class="quotelev1">&gt; you to move the rdmacm into ofacm and get it to compile, then I could 
</span><br>
<span class="quotelev1">&gt; take if from there and test/fix any issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whatchathink?
</span><br>
<p>It definitely simplifies a lot of things (and cleans the code)!
<br>
Let me see how much work we have to do there. I don't have a lot of cycles, but I definitely may guide Mellanox team (or any other team :-) ).
<br>
<p>Best,
<br>
-Pasha<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>In reply to:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13272.php">Shamis, Pavel: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703	- in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
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
