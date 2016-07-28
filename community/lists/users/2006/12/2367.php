<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec 14 17:28:33 2006" -->
<!-- isoreceived="20061214222833" -->
<!-- sent="Thu, 14 Dec 2006 15:28:25 -0700" -->
<!-- isosent="20061214222825" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pgi compiler configure problems" -->
<!-- id="533ED717-C300-4A89-9316-84F773D5981B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061214204824.GM30568_at_sif.lsd.ornl.gov" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-14 17:28:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 14, 2006, at 1:48 PM, Michael Galloway wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Dec 14, 2006 at 02:01:54PM -0500, Michael Galloway wrote:
</span><br>
<span class="quotelev2">&gt;&gt; good day all, i've been trying to build ompi with the 6.2-X  
</span><br>
<span class="quotelev2">&gt;&gt; version of the pgi
</span><br>
<span class="quotelev2">&gt;&gt; compiler set (pgcc 6.2-4 64-bit target on x86-64 Linux). i've  
</span><br>
<span class="quotelev2">&gt;&gt; tried both 1.1.2 and
</span><br>
<span class="quotelev2">&gt;&gt; the current nightly build 1.1.3b2r12766, both fail with this error  
</span><br>
<span class="quotelev2">&gt;&gt; from configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev2">&gt;&gt; checking whether /opt/pgi/linux86-64/6.2/bin/pgf77 accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler works... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking /opt/pgi/linux86-64/6.2/bin/pgf77 external symbol  
</span><br>
<span class="quotelev2">&gt;&gt; convention... single underscore
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler supports LOGICAL... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran 77 LOGICAL... 4
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to LOGICAL... not found
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: Cannot continue
</span><br>
<p>It appears that this is being caused by a problem much earlier in the  
<br>
configure process.  For some reason I don't totally understand, the  
<br>
configure script is finding the size of shorts, ints, longs, long  
<br>
longs, void *s, etc. to be 2.  This is rather unexpected on a 64-bit  
<br>
machine, obviously.  In testing with PGI 6.1-3 on x86_64, it looks  
<br>
like the IPA option is causing this to occur -- if I remove the IPA  
<br>
option from the flags, configure runs properly.
<br>
<p>In my (somewhat humble) opinion, turning on such aggressive options  
<br>
is dangerous when compiling Open MPI (or most MPI implementations).   
<br>
With share memory and RDMA interconnects, assumptions compiler  
<br>
writers make when running at such high optimization setting are  
<br>
frequently not true for codes like Open MPI.  And the performance  
<br>
gain in compiling the MPI layer with such high optimizations is  
<br>
frequently near zero (that being said, there is a significant  
<br>
advantage to adding some optimization flags and not including  
<br>
debugging symbols in the MPI library if you don't need them).
<br>
<p>It should be safe to compile Open MPI without the IPA options and  
<br>
still use IPA when compiling your application.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Previous message:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>In reply to:</strong> <a href="2366.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
<li><strong>Reply:</strong> <a href="2368.php">Michael Galloway: "Re: [OMPI users] pgi compiler configure problems"</a>
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
