<?
$subject_val = "Re: [OMPI users] testsome returns negative indices";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 10:11:05 2014" -->
<!-- isoreceived="20140321141105" -->
<!-- sent="Fri, 21 Mar 2014 14:11:03 +0000" -->
<!-- isosent="20140321141103" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices" -->
<!-- id="C33DC13E-6F34-48C3-8B44-E5651A9420FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="532B8A5F.9010403_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] testsome returns negative indices<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 10:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23916.php">Hamid Saeed: "[OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is that C or R code?
<br>
<p>If it's R, I think the next step would be to check the R wrapper for MPI_Testsome and see what is actually being returned by OMPI in C before it gets converted to R.  I'm afraid I don't know R, so I can't really comment on the syntax / correctness of your code snipit.
<br>
<p>If it's C -- which I don't think it is, but it *could* be...? -- I would need to understand your syntax in calling MPI_Testsome better; e.g., what's &amp;INTEGER(foo)[x]?
<br>
<p><p>On Mar 20, 2014, at 8:39 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; MPI_Testsome seems to have returned successfully, with a positive outcount, and yet given me a negative index, -4432.  Can anyone help me understand what's going on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The call is from R, and so there might be a translation issue.  My first thought was that it might be 32 vs 64 bit integers, but both OMPI and R seem to be using the C int type for the integers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the inner call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SEXP mpi_testsome(SEXP sexp_count){
</span><br>
<span class="quotelev1">&gt;        int countn=INTEGER(sexp_count)[0];
</span><br>
<span class="quotelev1">&gt;                SEXP indices;
</span><br>
<span class="quotelev1">&gt;                PROTECT (indices = allocVector(INTSXP, countn+1));
</span><br>
<span class="quotelev1">&gt;        mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev1">&gt;                &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev1">&gt;                UNPROTECT(1);
</span><br>
<span class="quotelev1">&gt;        return indices;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SEXP is an R structure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI 1.7.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross Boylan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23918.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23916.php">Hamid Saeed: "[OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>In reply to:</strong> <a href="23905.php">Ross Boylan: "[OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
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
