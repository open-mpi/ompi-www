<?
$subject_val = "[OMPI devel] merging cpc3 -&gt; trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 08:57:46 2008" -->
<!-- isoreceived="20080501125746" -->
<!-- sent="Thu, 1 May 2008 08:57:34 -0400" -->
<!-- isosent="20080501125734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] merging cpc3 -&amp;gt; trunk" -->
<!-- id="7F4CBF17-4CE7-437C-AA08-D048FD0B4872_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] merging cpc3 -&gt; trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 08:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, we've fixed the problems that Pasha was seeing, and seem to be  
<br>
clear to bring the cpc3 work back to the trunk tonight.
<br>
<p>We will still have oob/xoob be the default -- ibcm and rdmacm will  
<br>
[currently] fire only if specifically requested because there's still  
<br>
a little work to do in these two cpc's before they're done.
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
<li><strong>Next message:</strong> <a href="3790.php">Lenny Verkhovsky: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>Previous message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
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
