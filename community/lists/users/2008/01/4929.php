<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 17:35:52 2008" -->
<!-- isoreceived="20080130223552" -->
<!-- sent="Wed, 30 Jan 2008 17:35:39 -0500" -->
<!-- isosent="20080130223539" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="1201732539.16306.59.camel_at_doorstop.home.net" -->
<!-- inreplyto="1200258171.3592.47.camel_at_doorstop.home.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 17:35:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4928.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>With no reply in a couple of weeks, I'm wondering if my previous message
<br>
got dropped.  (Then again, my previous message was a couple of weeks
<br>
late in replying to its predecessor...)
<br>
<p>I'm recommending a change to mpi.h which would let C headers included by
<br>
C++ programs do:
<br>
#define OMPI_SKIP_MPICXX
<br>
#include &lt;mpi.h&gt;
<br>
#undef OMPI_SKIP_MPICXX
<br>
without preventing the C++ headers from being included at another time.
<br>
See below for the recommended change.
<br>
<p>Cheers,
<br>
Adam
<br>
<p>On Sun, 2008-01-13 at 16:02 -0500, Adam C Powell IV wrote:
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry about the hiatus; I thought &quot;Great, my OMPI_SKIP_CXX hack works&quot;
</span><br>
<span class="quotelev1">&gt; and didn't check to see your reply, even though it came right away.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2008-01-01 at 11:07 -0700, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 1, 2008, at 12:47 AM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, 2007-12-31 at 20:01 -0700, Brian Barrett wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Yeah, this is a complicated example, mostly because HDF5 should
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; really be covering this problem for you.  I think your only option at
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; that point would be to use the #define to not include the C++ code.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The problem is that the MPI standard *requires* mpi.h to include both
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the C and C++ interface declarations if you're using C++.  There's no
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; way for the preprocessor to determine whether there's a currently
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; active extern &quot;C&quot; block, so there's really not much we can do.  Best
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; hope would be to get the HDF5 guys to properly protect their code
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from C++...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Okay.  So in HDF5, since they call MPI from C, they're just using  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the C
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interface, right?  So should they define OMPI_SKIP_MPICXX just in case
</span><br>
<span class="quotelev3">&gt; &gt; &gt; they're #included by C++ and using OpenMPI, or is there a more MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; implementation-agnostic way to do it?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, they should definitely not be disabling the C++bindings inside  
</span><br>
<span class="quotelev2">&gt; &gt; HDF5 -- that would be a situation worse than the current one.   
</span><br>
<span class="quotelev2">&gt; &gt; Consider the case where an application uses both HDF5 and the C++ MPI  
</span><br>
<span class="quotelev2">&gt; &gt; bindings.  It includes hdf5.h before mpi.h.  The hdf5.h includes  
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h, without the C++ bindings.  The application then includes mpi.h,  
</span><br>
<span class="quotelev2">&gt; &gt; wanting the C++ bindings.  But the multiple inclusion protection in  
</span><br>
<span class="quotelev2">&gt; &gt; mpi.h means nothing happens, so no C++ bindings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree, that would be a problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My comment about HDF5 was that it would be easiest if it protected its  
</span><br>
<span class="quotelev2">&gt; &gt; declarations with extern &quot;C&quot; when using C++.  This is what most  
</span><br>
<span class="quotelev2">&gt; &gt; packages that might be used with C++ do, and it works pretty well.   
</span><br>
<span class="quotelev2">&gt; &gt; I'd actually be surprised if modern versions of HDF5 didn't already do  
</span><br>
<span class="quotelev2">&gt; &gt; that.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now that it's not New Years eve, I thought of what's probably the  
</span><br>
<span class="quotelev2">&gt; &gt; easiest solution for you.  Just include mpi.h (outside your extern &quot;C&quot;  
</span><br>
<span class="quotelev2">&gt; &gt; block) before hdf5.h.  The multiple inclusion protection in mpi.h will  
</span><br>
<span class="quotelev2">&gt; &gt; mean that the preprocessor removes everything from the mpi.h that's  
</span><br>
<span class="quotelev2">&gt; &gt; included from hdf5.h.  So the extern &quot;C&quot; around the hdf5.h shouldn't  
</span><br>
<span class="quotelev2">&gt; &gt; be too much of a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That almost works.  But not quite. :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I put that in my C++ files or headers, that would be fine.
</span><br>
<span class="quotelev1">&gt; Unfortunately, the program I'm porting has:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A.h:
</span><br>
<span class="quotelev1">&gt; #include &lt;hdf5.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; B.hxx:
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; { #include &quot;A.h&quot; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And then C.hxx, D.cxx, etc. all include B.hxx, and E.h and F.c include
</span><br>
<span class="quotelev1">&gt; A.h.  So if I just add &quot;#include &lt;mpi.h&gt;&quot; to A.h before hdf5, I have the
</span><br>
<span class="quotelev1">&gt; same problem: #including &lt;mpi.h&gt; within an extern &quot;C&quot; block.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way to work around this is to patch B, C, D, E and F. Very bad.
</span><br>
<span class="quotelev1">&gt; It shouldn't have to be this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a way to make it work, but it requires a patch to OpenMPI mpi.h:
</span><br>
<span class="quotelev1">&gt; --- /usr/include/mpi/mpi.h~     2008-01-10 17:26:15.000000000 -0500
</span><br>
<span class="quotelev1">&gt; +++ /usr/include/mpi/mpi.h      2008-01-13 15:57:45.000000000 -0500
</span><br>
<span class="quotelev1">&gt; @@ -1770,6 +1770,8 @@
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +#endif /* OMPI_MPI_H */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Conditional MPI 2 C++ bindings support.  Include if:
</span><br>
<span class="quotelev1">&gt;   *   - The user does not explicitly request us to skip it (when a C++ compiler
</span><br>
<span class="quotelev1">&gt; @@ -1783,5 +1785,3 @@
</span><br>
<span class="quotelev1">&gt;  #include &quot;openmpi/ompi/mpi/cxx/mpicxx.h&quot;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -#endif /* OMPI_MPI_H */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then hdf5.h, or this app's A.h, or whoever, can do:
</span><br>
<span class="quotelev1">&gt; #define OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt; or &lt;hdf5.h&gt; or &lt;A.h&gt; etc.
</span><br>
<span class="quotelev1">&gt; #undef OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev1">&gt; and the C++ programs which include this will not miss their C++ headers,
</span><br>
<span class="quotelev1">&gt; because they won't be inside the OMPI_MPI_H #ifdef protection.  But they
</span><br>
<span class="quotelev1">&gt; also won't get them twice, because they'll be in the MPIPP_H #ifdef.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have any other ideas?  Or will this or something like it be
</span><br>
<span class="quotelev1">&gt; necessary to protect against arbitrarily nested #includes from C++
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; blocks, without stepping on the C++ prototypes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for your help,
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<pre>
-- 
GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
Engineering consulting with open source tools
<a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4928.php">Francisco Jes&#250;s Mart&#237;nez Serrano: "Re: [OMPI users] Question about MPI_Waitany"</a>
<li><strong>In reply to:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
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
