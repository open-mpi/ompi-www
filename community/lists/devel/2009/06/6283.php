<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 14:31:20 2009" -->
<!-- isoreceived="20090619183120" -->
<!-- sent="Fri, 19 Jun 2009 14:31:12 -0400" -->
<!-- isosent="20090619183112" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="4A3BD970.1010506_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20881D46-8F5A-45B3-81AF-EF6C79B10332_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_REAL16<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 14:31:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings David.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we should have a more explicit note about MPI_REAL16 support in 
</span><br>
<span class="quotelev1">&gt; the README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This issue has come up before; see 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1603">https://svn.open-mpi.org/trac/ompi/ticket/1603</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you read through that ticket, you'll see that I was unable to find a 
</span><br>
<span class="quotelev1">&gt; C equivalent type for REAL*16 with the Intel compilers.  This is what 
</span><br>
<span class="quotelev1">&gt; blocked us from making that work.  :-\  But then again, I haven't tried 
</span><br>
<span class="quotelev1">&gt; the test codes on that ticket with the Intel 11.0 compilers to see what 
</span><br>
<span class="quotelev1">&gt; would happen (last tests were with 10.something).  It *seems* to be a 
</span><br>
<span class="quotelev1">&gt; compiler issue, but I confess that we never had a high enough priority 
</span><br>
<span class="quotelev1">&gt; to follow through and figure it out completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have an Intel support contract, you might want to take some of 
</span><br>
<span class="quotelev1">&gt; the final observations on #1603 (e.g., the test codes I put near the 
</span><br>
<span class="quotelev1">&gt; end) and see what Intel has to say about it.  Perhaps we're doing 
</span><br>
<span class="quotelev1">&gt; something wrong...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hate to pass the buck here, but I unfortunately have a whole pile of 
</span><br>
<span class="quotelev1">&gt; higher-priority items that I need to work on...
</span><br>
<p>I can confirm that Intel 11.0 produces identical results to 10.something 
<br>
for you little test program posted with that ticket. I do have a support 
<br>
contract for Fortran only but we'll see what they say. I'll keep you posted.
<br>
<p>Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6284.php">Eugene Loh: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
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
