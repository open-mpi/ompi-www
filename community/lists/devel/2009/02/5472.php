<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:54:29 2009" -->
<!-- isoreceived="20090219125429" -->
<!-- sent="Thu, 19 Feb 2009 07:54:22 -0500" -->
<!-- isosent="20090219125422" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="A6D59DC9-4738-4F82-82A6-340C93879AD4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40902160614h14979d73r218970bbcede556f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bugs and unexpected values in returned errors classes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 07:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5471.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 16, 2009, at 9:14 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; After running my testsuite again and next looking at
</span><br>
<span class="quotelev1">&gt; &quot;ompi/mpi/c/comm_set_errhandler.c&quot;, I noticed that
</span><br>
<span class="quotelev1">&gt; MPI_Comm_set_errhandler() do return MPI_ERR_COMM when invalid
</span><br>
<span class="quotelev1">&gt; communicators are passed. IMHO, for the sake of consistency, you
</span><br>
<span class="quotelev1">&gt; should fix MPI_Comm_get_errhandler() to behave the same as the setter.
</span><br>
<span class="quotelev1">&gt; Would this rationale be enough?
</span><br>
<p><p>Looks like we're a bit all over the map:
<br>
<p>- comm_set_errhandler: mpi_err_comm
<br>
- comm_get_errhandler: mpi_err_arg
<br>
- file_set_errhandler: mpi_err_file
<br>
- file_get_errhandler: mpi_err_file
<br>
- win_set_errhandler: mpi_err_arg
<br>
- win_get_errhandler: mpi_err_arg
<br>
<p>I agree that it would be good to have these all be consistent.  Just  
<br>
to be sure: are you saying you'd prefer MPI_ERR_COMM|FILE|WIN for each  
<br>
of these (respectively), vs. all of them returning MPI_ERR_ARG?
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
<li><strong>Next message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5471.php">Terry Dontje: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5424.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Reply:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
