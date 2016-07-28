<?
$subject_val = "Re: [OMPI users] testsome returns negative indices [diagnosis]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 16:13:58 2014" -->
<!-- isoreceived="20140321201358" -->
<!-- sent="Fri, 21 Mar 2014 13:13:57 -0700" -->
<!-- isosent="20140321201357" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices [diagnosis]" -->
<!-- id="532C9D85.2020609_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="532C741F.6000406_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] testsome returns negative indices [diagnosis]<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 16:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Reply:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/21/2014 10:17 AM, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; On 3/21/2014 10:02 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So just to be clear, the C interface for MPI_Testsome is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Testsome(int incount, MPI_Request requests[],
</span><br>
<span class="quotelev2">&gt;&gt;                   int *outcount, int indices[],
</span><br>
<span class="quotelev2">&gt;&gt;                   MPI_Status statuses[]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And your R call is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpi_errhandler(MPI_Testsome(countn, request, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev2">&gt;&gt;                 &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm assuming request is an MPI_Request object.
</span><br>
<span class="quotelev1">&gt; It's a pointer to an array of such objects.
</span><br>
<span class="quotelev1">&gt; static MPI_Request *request;
</span><br>
<span class="quotelev1">&gt; request=(MPI_Request *)Calloc(REQUEST_MAXSIZE, MPI_Request);
</span><br>
<span class="quotelev2">&gt;&gt;    And integer(indices)[0] is where you want the outcount to go, and 
</span><br>
<span class="quotelev2">&gt;&gt; then integer(indices)[1] through [value_of_outcount] is where you 
</span><br>
<span class="quotelev2">&gt;&gt; want the indices to go, right?
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, then yes, that looks proper.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You'll probably need to look into what's happening in the R wrapper 
</span><br>
<span class="quotelev2">&gt;&gt; as to why you're not getting the right answers, sorry.
</span><br>
There was a problem in the R code that cause MPI_Request objects to be 
<br>
reused before the original request completed.
<br>
Things are working much better now, though some bugs remain (not 
<br>
necessarily related to MPI_Isend or Testsome).
<br>
<p>Just for the record, isend in Rmpi is unreliable because the objects 
<br>
being sent are subject to garbage collection (by R) before the send 
<br>
completes.  I am working on modifications to Rmpi to fix that.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and yes, the values in the indices[] array should be between 0 and 
</span><br>
<span class="quotelev2">&gt;&gt; (incount-1))
</span><br>
<span class="quotelev1">&gt; I'm getting increasingly suspicious that this could be an integer size 
</span><br>
<span class="quotelev1">&gt; mismatch, maybe from different compilation options.  I think R uses 32 
</span><br>
<span class="quotelev1">&gt; bits (even on 64 bit machines) and MPI uses 64, even though both have 
</span><br>
<span class="quotelev1">&gt; type int.  R defines
</span><br>
<span class="quotelev1">&gt; #define INTEGER(x)      ((int *) DATAPTR(x))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What should the integer size be for MPI on 64 bit architectures, 
</span><br>
<span class="quotelev1">&gt; specifically linux gcc (Debian 4.4.5-8) 4.4.5?
</span><br>
I think it's still 32 bits and the problems were elsewhere.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ross
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2014, at 12:01 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2014-03-21 at 14:11 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is that C or R code?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it's R, I think the next step would be to check the R wrapper 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for MPI_Testsome and see what is actually being returned by OMPI in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C before it gets converted to R.  I'm afraid I don't know R, so I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can't really comment on the syntax / correctness of your code snipit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it's C -- which I don't think it is, but it *could* be...? -- I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would need to understand your syntax in calling MPI_Testsome 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better; e.g., what's &amp;INTEGER(foo)[x]?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocVector(INTSXP, countn+1) allocates an R vector of integers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INTEGER(indices) returns the data portion of that structure, where the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actual integers go.  The &amp;...[0] get the address of the first location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PROTECT keeps things from being garbage-collected by R.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The allocation of indices is a cheat: the first location is used for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outcount, and the following locations get the actual indices.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status is a pointer to an array of MPI status objects,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The indices should be small integers, shouldn't they?  I'm also getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some large values back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ross
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 20, 2014, at 8:39 PM, Ross Boylan &lt;ross_at_[hidden]&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Testsome seems to have returned successfully, with a positive 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; outcount, and yet given me a negative index, -4432.  Can anyone 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help me understand what's going on?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The call is from R, and so there might be a translation issue.  My 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; first thought was that it might be 32 vs 64 bit integers, but both 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI and R seem to be using the C int type for the integers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's the inner call:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SEXP mpi_testsome(SEXP sexp_count){
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        int countn=INTEGER(sexp_count)[0];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                SEXP indices;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                PROTECT (indices = allocVector(INTSXP, countn+1));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        mpi_errhandler(MPI_Testsome(countn, request, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                UNPROTECT(1);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        return indices;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SEXP is an R structure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI 1.7.4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23931.php">Joshua Ladd: "Re: [OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="23929.php">Saliya Ekanayake: "Re: [OMPI users] OpenMPI + Hadoop"</a>
<li><strong>In reply to:</strong> <a href="23925.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Reply:</strong> <a href="23932.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
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
