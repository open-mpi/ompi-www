<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 20:48:48 2007" -->
<!-- isoreceived="20070614004848" -->
<!-- sent="Wed, 13 Jun 2007 17:47:32 -0700" -->
<!-- isosent="20070614004732" -->
<!-- name="Julian Cummings" -->
<!-- email="cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction	more than once" -->
<!-- id="1181782052.5894.174.camel_at_valhalla.cacr.caltech.edu" -->
<!-- inreplyto="2005EA90-78FB-4B0B-9C0C-2399FA518950_at_cisco.com" -->
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
<strong>From:</strong> Julian Cummings (<em>cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-13 20:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3488.php">Corwell, Sophia: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>In reply to:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Wed, 2007-06-13 at 14:39 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 2:29 PM, Julian Cummings wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, I will give that a try and repost to the list if problems
</span><br>
<span class="quotelev2">&gt; &gt; remain.  I am kind of surprised that compiling with -fpic is not  
</span><br>
<span class="quotelev2">&gt; &gt; done by
</span><br>
<span class="quotelev2">&gt; &gt; default on a Linux system, since OpenMPI builds as a set of shared
</span><br>
<span class="quotelev2">&gt; &gt; library .so files.  Normally you want position-independent code in  
</span><br>
<span class="quotelev2">&gt; &gt; such
</span><br>
<span class="quotelev2">&gt; &gt; libraries so that, among other reasons, static objects are handled
</span><br>
<span class="quotelev2">&gt; &gt; properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's actually more subtle than that.  Open MPI itself is compiled  
</span><br>
<span class="quotelev1">&gt; with -fpic if necessary, of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's *your* code that has to be compiled with -fpic, which is odd /  
</span><br>
<span class="quotelev1">&gt; unusual / a bug in pgCC.
</span><br>
<p>Thank you for pointing this out.  I thought that the OpenMPI .so files
<br>
must be built with -fpic already.
<br>
<p>I did some quick tests with my little hello example that indicate that
<br>
the application code only needs to be *linked* with -fpic, not compiled
<br>
with it.  The -fpic flag on the mpicxx link line points the linker to a
<br>
PGI &quot;libso&quot; subdirectory that contains dynamic versions of the compiler
<br>
libraries.  In this case, probably libC.so is most important.  Anyway,
<br>
at least you do not have to potentially degrade the performance of the
<br>
application code by compiling all of it with -fpic.  I would recommend
<br>
that the OpenMPI configuration be modified to insert this flag (or some
<br>
equivalent) as an LCXXFLAGS or even an LDFLAGS component in the compiler
<br>
driver scripts whenever PGI is used.
<br>
<p>Regards, Julian C.
<br>
<p><pre>
-- 
Dr. Julian C. Cummings                       E-mail: cummings_at_[hidden]
California Institute of Technology           Phone:  626-395-2543
1200 E. California Blvd., Mail Code 158-79   Fax:    626-584-5917
Pasadena, CA 91125                           Office: 125 Powell-Booth
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3488.php">Corwell, Sophia: "Re: [OMPI users] Open MPI issue with Iprobe"</a>
<li><strong>In reply to:</strong> <a href="3487.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Reply:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
