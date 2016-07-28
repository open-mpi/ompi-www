<?
$subject_val = "Re: [OMPI users] testsome returns negative indices";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 13:02:52 2014" -->
<!-- isoreceived="20140321170252" -->
<!-- sent="Fri, 21 Mar 2014 17:02:46 +0000" -->
<!-- isosent="20140321170246" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices" -->
<!-- id="59B4BADC-B275-4A7A-BE35-1705BB10064F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1395417715.15734.6.camel_at_localhost" -->
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
<strong>Date:</strong> 2014-03-21 13:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23923.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So just to be clear, the C interface for MPI_Testsome is:
<br>
<p>int MPI_Testsome(int incount, MPI_Request requests[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int *outcount, int indices[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status statuses[]);
<br>
<p>And your R call is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;INTEGER(indices)[1], status));
<br>
<p>I'm assuming request is an MPI_Request object.  And integer(indices)[0] is where you want the outcount to go, and then integer(indices)[1] through [value_of_outcount] is where you want the indices to go, right?
<br>
<p>If so, then yes, that looks proper.
<br>
<p>You'll probably need to look into what's happening in the R wrapper as to why you're not getting the right answers, sorry.
<br>
<p>(and yes, the values in the indices[] array should be between 0 and (incount-1))
<br>
<p><p>On Mar 21, 2014, at 12:01 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2014-03-21 at 14:11 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is that C or R code?
</span><br>
<span class="quotelev1">&gt; C.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it's R, I think the next step would be to check the R wrapper for MPI_Testsome and see what is actually being returned by OMPI in C before it gets converted to R.  I'm afraid I don't know R, so I can't really comment on the syntax / correctness of your code snipit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If it's C -- which I don't think it is, but it *could* be...? -- I would need to understand your syntax in calling MPI_Testsome better; e.g., what's &amp;INTEGER(foo)[x]?
</span><br>
<span class="quotelev1">&gt; allocVector(INTSXP, countn+1) allocates an R vector of integers.
</span><br>
<span class="quotelev1">&gt; INTEGER(indices) returns the data portion of that structure, where the
</span><br>
<span class="quotelev1">&gt; actual integers go.  The &amp;...[0] get the address of the first location.
</span><br>
<span class="quotelev1">&gt; PROTECT keeps things from being garbage-collected by R.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The allocation of indices is a cheat: the first location is used for the
</span><br>
<span class="quotelev1">&gt; outcount, and the following locations get the actual indices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; status is a pointer to an array of MPI status objects,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The indices should be small integers, shouldn't they?  I'm also getting
</span><br>
<span class="quotelev1">&gt; some large values back.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2014, at 8:39 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Testsome seems to have returned successfully, with a positive outcount, and yet given me a negative index, -4432.  Can anyone help me understand what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The call is from R, and so there might be a translation issue.  My first thought was that it might be 32 vs 64 bit integers, but both OMPI and R seem to be using the C int type for the integers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the inner call:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SEXP mpi_testsome(SEXP sexp_count){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       int countn=INTEGER(sexp_count)[0];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               SEXP indices;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               PROTECT (indices = allocVector(INTSXP, countn+1));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               UNPROTECT(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       return indices;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SEXP is an R structure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI 1.7.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="23923.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fwd: problem for multiple clusters using mpirun"</a>
<li><strong>Previous message:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>In reply to:</strong> <a href="23921.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<li><strong>Reply:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
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
