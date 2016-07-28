<?
$subject_val = "Re: [OMPI users] testsome returns negative indices";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 12:01:59 2014" -->
<!-- isoreceived="20140321160159" -->
<!-- sent="Fri, 21 Mar 2014 09:01:55 -0700" -->
<!-- isosent="20140321160155" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices" -->
<!-- id="1395417715.15734.6.camel_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C33DC13E-6F34-48C3-8B44-E5651A9420FA_at_cisco.com" -->
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
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 12:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2014-03-21 at 14:11 +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Is that C or R code?
</span><br>
C.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's R, I think the next step would be to check the R wrapper for MPI_Testsome and see what is actually being returned by OMPI in C before it gets converted to R.  I'm afraid I don't know R, so I can't really comment on the syntax / correctness of your code snipit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's C -- which I don't think it is, but it *could* be...? -- I would need to understand your syntax in calling MPI_Testsome better; e.g., what's &amp;INTEGER(foo)[x]?
</span><br>
allocVector(INTSXP, countn+1) allocates an R vector of integers.
<br>
INTEGER(indices) returns the data portion of that structure, where the
<br>
actual integers go.  The &amp;...[0] get the address of the first location.
<br>
PROTECT keeps things from being garbage-collected by R.
<br>
<p>The allocation of indices is a cheat: the first location is used for the
<br>
outcount, and the following locations get the actual indices.
<br>
<p>status is a pointer to an array of MPI status objects,
<br>
<p>The indices should be small integers, shouldn't they?  I'm also getting
<br>
some large values back.
<br>
<p>Ross
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2014, at 8:39 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Testsome seems to have returned successfully, with a positive outcount, and yet given me a negative index, -4432.  Can anyone help me understand what's going on?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The call is from R, and so there might be a translation issue.  My first thought was that it might be 32 vs 64 bit integers, but both OMPI and R seem to be using the C int type for the integers.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's the inner call:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; SEXP mpi_testsome(SEXP sexp_count){
</span><br>
<span class="quotelev2">&gt; &gt;        int countn=INTEGER(sexp_count)[0];
</span><br>
<span class="quotelev2">&gt; &gt;                SEXP indices;
</span><br>
<span class="quotelev2">&gt; &gt;                PROTECT (indices = allocVector(INTSXP, countn+1));
</span><br>
<span class="quotelev2">&gt; &gt;        mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev2">&gt; &gt;                &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev2">&gt; &gt;                UNPROTECT(1);
</span><br>
<span class="quotelev2">&gt; &gt;        return indices;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; SEXP is an R structure.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OMPI 1.7.4.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ross Boylan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Previous message:</strong> <a href="23920.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help building/installing a working Open MPI 1.7.4 on OS X 10.9.2 with Free PGI Fortran"</a>
<li><strong>In reply to:</strong> <a href="23917.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
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
