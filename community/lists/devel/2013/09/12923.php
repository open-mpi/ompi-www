<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 05:22:47 2013" -->
<!-- isoreceived="20130918092247" -->
<!-- sent="Wed, 18 Sep 2013 09:22:39 +0000" -->
<!-- isosent="20130918092239" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8B6B34_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2A6FB2C0-0942-46C3-AA73-5F33A7077E72_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 05:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12924.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2013, at 9:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; 1. sm doesn't work between spawned processes. So you must have another network enabled.
</span><br>

<br>
I know :-).  I have tcp available as well (OMPI will abort if you only run with sm,self because the comm_spawn will fail with unreachable errors -- I just tested/proved this to myself).
<br>

<br>
<span class="quotelev1">&gt; 2. Don't use the test case attached to my email, I left an xterm based spawn and the debugging. It can't work without xterm support. Instead try using the test case from the trunk, the one committed by Ralph.
</span><br>

<br>
I didn't see any &quot;xterm&quot; strings in there, but ok.  :-)  I ran with orte/test/mpi/intercomm_create.c, and that hangs for me as well:
<br>

<br>
-----
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
<br>
b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
<br>
b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
<br>
b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 6]
<br>
b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 7]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
[hang]
<br>
-----
<br>

<br>
Similarly, on my Mac, it hangs with no output:
<br>

<br>
-----
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
<br>
&#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
<br>
[hang]
<br>
-----
<br>

<br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2013, at 07:53 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I build the SVN trunk (r29201) on 64 bit linux, your attached test case hangs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev2">&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev2">&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev2">&gt;&gt; b: MPI_Intercomm_create( intra, 0, intra, MPI_COMM_NULL, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev2">&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt; a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
</span><br>
<span class="quotelev2">&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
</span><br>
<span class="quotelev2">&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
</span><br>
<span class="quotelev2">&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
</span><br>
<span class="quotelev2">&gt;&gt; c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
</span><br>
<span class="quotelev2">&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On my Mac, it hangs without printing anything:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc intercomm_create.c -o intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 intercomm_create   
</span><br>
<span class="quotelev2">&gt;&gt; [hang]
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 18, 2013, at 1:48 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a quick (and definitively not the cleanest) patch that addresses the MPI_Intercomm issue at the MPI level. It should be applied after removal of 29166.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also added the corrected test case stressing the corner cases by doing barriers at every inter-comm creation and doing a clean disconnect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12924.php">Siegmar Gross: "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
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
