<?
$subject_val = "Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 10:21:28 2015" -->
<!-- isoreceived="20150423142128" -->
<!-- sent="Thu, 23 Apr 2015 14:21:26 +0000" -->
<!-- isosent="20150423142126" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning" -->
<!-- id="B6108F02-1CCB-4CCC-A7CA-3046960B9797_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="8455ED68-5F76-4122-A2DF-2C4C554D870E_at_tacc.utexas.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions regarding MPI_T performance variables and	Collective tuning<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-23 10:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26764.php">Jerome Vienne: "[OMPI users] Questions regarding MPI_T performance variables and Collective tuning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 22, 2015, at 1:57 PM, Jerome Vienne &lt;viennej_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While looking at performance and control variables provided by the MPI_T interface, I was surprised by the impressive number of control variables (1,087 if I am right (with 1.8.4)) but I was also disappointed to see that I was able to get only 2 performance variables.
</span><br>

<br>
Yeah, those were mostly added as &quot;make sure we have the MPI_T Pvar stuff implemented correctly.&quot;
<br>

<br>
<span class="quotelev1">&gt; I would to know if you are planning to add more Performance variables like number of time an algorithm from a collective was called, or the number of buffer allocated/free etc&#226;&#128;&#166;
</span><br>

<br>
We're open to adding lots of them.  We're actually waiting for specific requests, to be honest.  Can you provide a specific list of pvars that you'd like to see?
<br>

<br>
We're also contemplating rolling our existing PERUSE implementation (i.e., a prior generation performance variable system) into the official MPI_T system.  It's not immediately clear how to do this, though -- PERUSE and MPI_T aren't 100% compatible.  So we've been loosely discussing how to do that (because we *do* have a bunch of MPI_t-performance-variable-like entities under our PERUSE).
<br>

<br>
<span class="quotelev1">&gt; Regarding collective tuning, I was wondering if you can recommend me a paper/presentation that will provide most of the details. I found some interesting posts (like this one: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25847.php">http://www.open-mpi.org/community/lists/users/2014/11/25847.php</a>) but I am looking for a paper/doc explaining the different modules (basic, tuned, self, hierarchical&#226;&#128;&#166;) and how to set dynamic rules 
</span><br>

<br>
George: can you provide insight here?
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
<li><strong>Next message:</strong> <a href="26772.php">Galloway, Jack D: "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>Previous message:</strong> <a href="26770.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Finalize not behaving correctly, orphaned processes"</a>
<li><strong>In reply to:</strong> <a href="26764.php">Jerome Vienne: "[OMPI users] Questions regarding MPI_T performance variables and Collective tuning"</a>
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
