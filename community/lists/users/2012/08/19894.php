<?
$subject_val = "Re: [OMPI users] mpi.h incorrect format error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 11:18:49 2012" -->
<!-- isoreceived="20120806151849" -->
<!-- sent="Mon, 06 Aug 2012 11:18:33 -0700" -->
<!-- isosent="20120806181833" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi.h incorrect format error?" -->
<!-- id="50200A79.3070806_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="501FD642.6000801_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi.h incorrect format error?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 14:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<li><strong>In reply to:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 08/06/2012 07:35 AM, PattiMichelle wrote:
<br>
<span class="quotelev1">&gt; mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
</span><br>
<span class="quotelev1">&gt; -DMAX_HISTORY=25  -c buf_for_proc.c
</span><br>
You might need to examine the pre-processed source
<br>
&nbsp;&nbsp;(mpicc -E buf_for_proc.c &gt; buf_for_proc.i)
<br>
to see what went wrong in pre-processing at the point where the compiler 
<br>
(gcc?) complains.
<br>
I suppose you must have built mpicc yourself; you would need to assure 
<br>
that the mpicc on PATH is the one built with the C compiler on PATH.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<li><strong>In reply to:</strong> <a href="19893.php">PattiMichelle: "[OMPI users] mpi.h incorrect format error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
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
