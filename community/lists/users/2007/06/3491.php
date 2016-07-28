<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 13 23:16:07 2007" -->
<!-- isoreceived="20070614031607" -->
<!-- sent="Wed, 13 Jun 2007 20:14:51 -0700" -->
<!-- isosent="20070614031451" -->
<!-- name="Julian Cummings" -->
<!-- email="cummings_at_[hidden]" -->
<!-- subject="Re: [OMPI users] C++ error: static object marked for destruction	more than once" -->
<!-- id="1181790891.5894.225.camel_at_valhalla.cacr.caltech.edu" -->
<!-- inreplyto="9EE2968C-A27C-4B03-9628-CB403F786D88_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-13 23:14:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-06-13 at 20:54 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 13, 2007, at 8:47 PM, Julian Cummings wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would recommend
</span><br>
<span class="quotelev2">&gt; &gt; that the OpenMPI configuration be modified to insert this flag (or  
</span><br>
<span class="quotelev2">&gt; &gt; some
</span><br>
<span class="quotelev2">&gt; &gt; equivalent) as an LCXXFLAGS or even an LDFLAGS component in the  
</span><br>
<span class="quotelev2">&gt; &gt; compiler
</span><br>
<span class="quotelev2">&gt; &gt; driver scripts whenever PGI is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've had debates about this internally.  There was pushabck from  
</span><br>
<span class="quotelev1">&gt; some of the developers that we don't want to handle every single  
</span><br>
<span class="quotelev1">&gt; compiler bug that's out there (there are many).  It can be a never- 
</span><br>
<span class="quotelev1">&gt; ending battle.  This is a big enough compiler bug, however (it spans  
</span><br>
<span class="quotelev1">&gt; the 6.2 and 7.0 PGI series) that if someone contributes a patch, we  
</span><br>
<span class="quotelev1">&gt; might be able to make a big enough case to fix it.  
</span><br>
<p>Clearly this is debatable, but if you examine the PGI compiler user
<br>
guide, I think you will see that this is a &quot;feature&quot; rather than a bug.
<br>
It does not flatly state this, but it strongly implies that any code
<br>
compiled with -fpic must be linked with -fpic in order to use the right
<br>
set of libraries because they are stored in separate directories.  This
<br>
is done on 64-bit Linux platforms in order to provide a separate memory
<br>
model for applications with data areas larger than 2 GB.  Since the
<br>
OpenMPI library code is built with -fpic, any code that links with it
<br>
should link with -fpic under the PGI compiler.
<br>
<p>By the way, I did some more testing and discovered that the critical PGI
<br>
compiler library is libstd.{so,a}.  If your application contains any C++
<br>
code compiled with -fpic, then you need to link with libstd.so in the
<br>
&quot;libso&quot; directory.
<br>
<p><span class="quotelev1">&gt; The functionality  
</span><br>
<span class="quotelev1">&gt; I'd like to see in such a patch is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - in the C++ section of configure, try to compile and run a simple C+ 
</span><br>
<span class="quotelev1">&gt; + (non-MPI) program
</span><br>
<span class="quotelev1">&gt; - if it works, fine
</span><br>
<span class="quotelev1">&gt; - if it doesn't work, try again but link it with -fpic
</span><br>
<span class="quotelev1">&gt; - if that works, then add -fpic to the C++ compiler wrapper flags
</span><br>
<p>Such a patch would not detect the problem we are discussing because it
<br>
is related to some static objects that are declared and used in the code
<br>
for libmpi_cxx.so.  I was able to trigger the error by compiling a
<br>
simple hello function that uses &lt;iostream&gt; into a shared object,
<br>
compiling a main program that calls the function by linking against the
<br>
shared object, and then running to run the trivial program.  So the test
<br>
program would have to take the form of linking against a small C++
<br>
library compiled with -fpic in order to catch this.
<br>
<p><span class="quotelev1">&gt; All with appropriate comments describing why this check is there (so  
</span><br>
<span class="quotelev1">&gt; that someone doesn't look at it in 6 months and wonder why the heck  
</span><br>
<span class="quotelev1">&gt; we're checking for that).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, you can easily modify the wrapper scripts to automatically put  
</span><br>
<span class="quotelev1">&gt; this flag in after Open MPI is installed (see <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
</span><br>
<span class="quotelev1">&gt; faq/?category=mpi-apps#override-wrappers-after-v1.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks, Julian C.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>Previous message:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<li><strong>In reply to:</strong> <a href="3490.php">Jeff Squyres: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3492.php">Luis Kornblueh: "Re: [OMPI users] C++ error: static object marked for destruction more than once"</a>
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
