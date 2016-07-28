<?
$subject_val = "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:39:59 2009" -->
<!-- isoreceived="20090219163959" -->
<!-- sent="Thu, 19 Feb 2009 11:39:46 -0500" -->
<!-- isosent="20090219163946" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bugs and unexpected values in returned errors classes" -->
<!-- id="FF6B57B7-79D7-44FB-B808-6FBF5A45AF8A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40902190634v3c0e4f3dk53c2552c662e2565_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-19 11:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 19, 2009, at 9:34 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I agree that it would be good to have these all be consistent.   
</span><br>
<span class="quotelev2">&gt;&gt; Just to be
</span><br>
<span class="quotelev2">&gt;&gt; sure: are you saying you'd prefer MPI_ERR_COMM|FILE|WIN for each of  
</span><br>
<span class="quotelev2">&gt;&gt; these
</span><br>
<span class="quotelev2">&gt;&gt; (respectively), vs. all of them returning MPI_ERR_ARG?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I prefer the MPI_ERR_COMM|FILE|WIN if you pass the null handle to
</span><br>
<span class="quotelev1">&gt; the MPI_XXX_{get|set}_errhandler.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; Of course, remember that for
</span><br>
<span class="quotelev1">&gt; MPI_File, the rules are a bit different: MPI_FILE_NULL have to be
</span><br>
<span class="quotelev1">&gt; special-cased as it is a valid handle for this call...
</span><br>
<p>Yep -- that's already handled in the code.
<br>
<p><span class="quotelev1">&gt; OTOH, if you have a valid Com/File/Win handle, but you try to set
</span><br>
<span class="quotelev1">&gt; MPI_ERRHANDLER_NULL, then in all cases we should get MPI_ERR_ARG (as
</span><br>
<span class="quotelev1">&gt; MPI does not provide a dedicated error class for signaling invalid
</span><br>
<span class="quotelev1">&gt; Errhandler handles).
</span><br>
<p><p>Looks like we do this already.
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
<li><strong>Next message:</strong> <a href="5483.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5481.php">George Bosilca: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>In reply to:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7212.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
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
