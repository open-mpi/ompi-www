<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 15 07:53:50 2006" -->
<!-- isoreceived="20061215125350" -->
<!-- sent="Fri, 15 Dec 2006 07:53:42 -0500" -->
<!-- isosent="20061215125342" -->
<!-- name="Michael Galloway" -->
<!-- email="mgx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi compiler configure problems" -->
<!-- id="20061215125342.GC9804_at_sif.lsd.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533ED717-C300-4A89-9316-84F773D5981B_at_lanl.gov" -->
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
<strong>From:</strong> Michael Galloway (<em>mgx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 07:53:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 14, 2006 at 03:28:25PM -0700, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears that this is being caused by a problem much earlier in the  
</span><br>
<span class="quotelev1">&gt; configure process.  For some reason I don't totally understand, the  
</span><br>
<span class="quotelev1">&gt; configure script is finding the size of shorts, ints, longs, long  
</span><br>
<span class="quotelev1">&gt; longs, void *s, etc. to be 2.  This is rather unexpected on a 64-bit  
</span><br>
<span class="quotelev1">&gt; machine, obviously.  In testing with PGI 6.1-3 on x86_64, it looks  
</span><br>
<span class="quotelev1">&gt; like the IPA option is causing this to occur -- if I remove the IPA  
</span><br>
<span class="quotelev1">&gt; option from the flags, configure runs properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my (somewhat humble) opinion, turning on such aggressive options  
</span><br>
<span class="quotelev1">&gt; is dangerous when compiling Open MPI (or most MPI implementations).   
</span><br>
<span class="quotelev1">&gt; With share memory and RDMA interconnects, assumptions compiler  
</span><br>
<span class="quotelev1">&gt; writers make when running at such high optimization setting are  
</span><br>
<span class="quotelev1">&gt; frequently not true for codes like Open MPI.  And the performance  
</span><br>
<span class="quotelev1">&gt; gain in compiling the MPI layer with such high optimizations is  
</span><br>
<span class="quotelev1">&gt; frequently near zero (that being said, there is a significant  
</span><br>
<span class="quotelev1">&gt; advantage to adding some optimization flags and not including  
</span><br>
<span class="quotelev1">&gt; debugging symbols in the MPI library if you don't need them).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be safe to compile Open MPI without the IPA options and  
</span><br>
<span class="quotelev1">&gt; still use IPA when compiling your application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>brian, indeed that seems to have been the issue. thanks for the help!
<br>
<p>-- michael 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2369.php">Brian W. Barrett: "Re: [OMPI users] Multiple definition of `malloc' and other symbols when doing static builds with mpif90"</a>
<li><strong>Previous message:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2367.php">Brian W. Barrett: "Re: [OMPI users] pgi compiler configure problems"</a>
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
