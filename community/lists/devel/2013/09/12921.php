<?
$subject_val = "Re: [OMPI devel] Intercomm Merge";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 01:53:41 2013" -->
<!-- isoreceived="20130918055341" -->
<!-- sent="Wed, 18 Sep 2013 05:53:40 +0000" -->
<!-- isosent="20130918055340" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intercomm Merge" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8B6213_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="46A81D25-4449-4823-B3C5-0334AEFDC5B5_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2013-09-18 01:53:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>

<br>
When I build the SVN trunk (r29201) on 64 bit linux, your attached test case hangs:
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
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
a: MPI_Intercomm_create( ab_intra, 0, ac_intra, 0, 201, &amp;inter) (0)
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 4]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 5]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 6]
<br>
c: MPI_Intercomm_create( MPI_COMM_WORLD, 0, intra, 0, 201, &amp;inter) [rank 7]
<br>
[hang]
<br>
-----
<br>

<br>
On my Mac, it hangs without printing anything:
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

<br>
On Sep 18, 2013, at 1:48 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Here is a quick (and definitively not the cleanest) patch that addresses the MPI_Intercomm issue at the MPI level. It should be applied after removal of 29166.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also added the corrected test case stressing the corner cases by doing barriers at every inter-comm creation and doing a clean disconnect.
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
<li><strong>Next message:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12920.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Reply:</strong> <a href="12922.php">George Bosilca: "Re: [OMPI devel] Intercomm Merge"</a>
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
