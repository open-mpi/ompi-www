<?
$subject_val = "[OMPI devel] 1.2.8 testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 13:34:16 2008" -->
<!-- isoreceived="20081013173416" -->
<!-- sent="Mon, 13 Oct 2008 13:34:10 -0400" -->
<!-- isosent="20081013173410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.2.8 testing" -->
<!-- id="CB3D8A0A-6722-4963-81E9-06DAA508777D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 1.2.8 testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 13:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version: looks good from Cisco.  If we can get one other  
<br>
confirmation, let's ship it.
<br>
<p>More details:  I have a very heterogenous cluster, which makes 1.2.x  
<br>
testing difficult with openib (there's a bug in the port matching  
<br>
logic that makes it not always work -- we decided a long time ago not  
<br>
to fix it).  So I have a lot of false failures in my 1.2.8rc1 MTT  
<br>
results.
<br>
<p>I went through and checked them and re-ran the failures manually that  
<br>
I found.  As result, the only real failures that I find are:
<br>
<p>1. various flavors of fortran bsend fail with the PGI compiler suite
<br>
&nbsp;&nbsp;&nbsp;--&gt; I'll take a good college swing at this one today and see if  
<br>
there's an obvious fix; it could be simply, since it appears to be a  
<br>
fortran-only failure.  Specifically, these fail:
<br>
<p>MPI_Bsend_init_rtoa_f
<br>
MPI_Bsend_rtoa_f
<br>
MPI_Ibsend_rtoa_f
<br>
MPI_Bsend_init_rtoa_f
<br>
MPI_Bsend_rtoa_f
<br>
MPI_Ibsend_rtoa_f
<br>
<p>And the _c versions of them all pass:
<br>
<p>MPI_Bsend_init_rtoa_c
<br>
MPI_Bsend_rtoa_c
<br>
MPI_Ibsend_rtoa_c
<br>
MPI_Bsend_init_rtoa_c
<br>
MPI_Bsend_rtoa_c
<br>
MPI_Ibsend_rtoa_c
<br>
<p>2. some variants of spawn, which also failed in my 1.2.7 testing (we  
<br>
agreed long ago not to fix these for v1.2.x)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Previous message:</strong> <a href="4757.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenIB BTL - removing btl_openib_ib_pkey_ix parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
<li><strong>Reply:</strong> <a href="4759.php">Jeff Squyres: "Re: [OMPI devel] 1.2.8 testing"</a>
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
