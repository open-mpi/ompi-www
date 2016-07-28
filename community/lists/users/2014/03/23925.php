<?
$subject_val = "Re: [OMPI users] testsome returns negative indices";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 13:17:20 2014" -->
<!-- isoreceived="20140321171720" -->
<!-- sent="Fri, 21 Mar 2014 10:17:19 -0700" -->
<!-- isosent="20140321171719" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testsome returns negative indices" -->
<!-- id="532C741F.6000406_at_biostat.ucsf.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="59B4BADC-B275-4A7A-BE35-1705BB10064F_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-21 13:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23926.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23924.php">George Bosilca: "[OMPI users] EuroMPI/ASIA 2014: CFP"</a>
<li><strong>In reply to:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Reply:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/21/2014 10:02 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; So just to be clear, the C interface for MPI_Testsome is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Testsome(int incount, MPI_Request requests[],
</span><br>
<span class="quotelev1">&gt;                   int *outcount, int indices[],
</span><br>
<span class="quotelev1">&gt;                   MPI_Status statuses[]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And your R call is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev1">&gt;                 &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm assuming request is an MPI_Request object.
</span><br>
It's a pointer to an array of such objects.
<br>
static MPI_Request *request;
<br>
request=(MPI_Request *)Calloc(REQUEST_MAXSIZE, MPI_Request);
<br>
<span class="quotelev1">&gt;    And integer(indices)[0] is where you want the outcount to go, and then integer(indices)[1] through [value_of_outcount] is where you want the indices to go, right?
</span><br>
Yes.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, then yes, that looks proper.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll probably need to look into what's happening in the R wrapper as to why you're not getting the right answers, sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and yes, the values in the indices[] array should be between 0 and (incount-1))
</span><br>
I'm getting increasingly suspicious that this could be an integer size 
<br>
mismatch, maybe from different compilation options.  I think R uses 32 
<br>
bits (even on 64 bit machines) and MPI uses 64, even though both have 
<br>
type int.  R defines
<br>
#define INTEGER(x)      ((int *) DATAPTR(x))
<br>
<p>What should the integer size be for MPI on 64 bit architectures, 
<br>
specifically linux gcc (Debian 4.4.5-8) 4.4.5?
<br>
<p>Ross
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2014, at 12:01 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 2014-03-21 at 14:11 +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that C or R code?
</span><br>
<span class="quotelev2">&gt;&gt; C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it's R, I think the next step would be to check the R wrapper for MPI_Testsome and see what is actually being returned by OMPI in C before it gets converted to R.  I'm afraid I don't know R, so I can't really comment on the syntax / correctness of your code snipit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If it's C -- which I don't think it is, but it *could* be...? -- I would need to understand your syntax in calling MPI_Testsome better; e.g., what's &amp;INTEGER(foo)[x]?
</span><br>
<span class="quotelev2">&gt;&gt; allocVector(INTSXP, countn+1) allocates an R vector of integers.
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER(indices) returns the data portion of that structure, where the
</span><br>
<span class="quotelev2">&gt;&gt; actual integers go.  The &amp;...[0] get the address of the first location.
</span><br>
<span class="quotelev2">&gt;&gt; PROTECT keeps things from being garbage-collected by R.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The allocation of indices is a cheat: the first location is used for the
</span><br>
<span class="quotelev2">&gt;&gt; outcount, and the following locations get the actual indices.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; status is a pointer to an array of MPI status objects,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The indices should be small integers, shouldn't they?  I'm also getting
</span><br>
<span class="quotelev2">&gt;&gt; some large values back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ross
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 20, 2014, at 8:39 PM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Testsome seems to have returned successfully, with a positive outcount, and yet given me a negative index, -4432.  Can anyone help me understand what's going on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The call is from R, and so there might be a translation issue.  My first thought was that it might be 32 vs 64 bit integers, but both OMPI and R seem to be using the C int type for the integers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the inner call:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SEXP mpi_testsome(SEXP sexp_count){
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        int countn=INTEGER(sexp_count)[0];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                SEXP indices;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                PROTECT (indices = allocVector(INTSXP, countn+1));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        mpi_errhandler(MPI_Testsome(countn, request, &amp;INTEGER(indices)[0],
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                &amp;INTEGER(indices)[1], status));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                UNPROTECT(1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        return indices;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SEXP is an R structure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI 1.7.4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23926.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23924.php">George Bosilca: "[OMPI users] EuroMPI/ASIA 2014: CFP"</a>
<li><strong>In reply to:</strong> <a href="23922.php">Jeff Squyres (jsquyres): "Re: [OMPI users] testsome returns negative indices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
<li><strong>Reply:</strong> <a href="23930.php">Ross Boylan: "Re: [OMPI users] testsome returns negative indices [diagnosis]"</a>
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
