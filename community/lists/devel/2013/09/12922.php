<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 03:33:57 2013" -->
<!-- isoreceived="20130918073357" -->
<!-- sent="Wed, 18 Sep 2013 09:33:55 +0200" -->
<!-- isosent="20130918073355" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="2A6FB2C0-0942-46C3-AA73-5F33A7077E72_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8B6213_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intercomm Merge<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 03:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12921.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12921.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2 things:
<br>
<p>1. sm doesn't work between spawned processes. So you must have another network enabled.
<br>
<p>2. Don't use the test case attached to my email, I left an xterm based spawn and the debugging. It can't work without xterm support. Instead try using the test case from the trunk, the one committed by Ralph.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Sep 18, 2013, at 07:53 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I build the SVN trunk (r29201) on 64 bit linux, your attached test case hangs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev1">&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev1">&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev1">&gt; [hang]
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On my Mac, it hangs without printing anything:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev1">&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create   
</span><br>
<span class="quotelev1">&gt; [hang]
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2013, at 1:48 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a quick (and definitively not the cleanest) patch that addresses the MPI_Intercomm issue at the MPI level. It should be applied after removal of 29166.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also added the corrected test case stressing the corner cases by doing barriers at every inter-comm creation and doing a clean disconnect.
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
<li><strong>Next message:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12921.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12921.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12923.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
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
