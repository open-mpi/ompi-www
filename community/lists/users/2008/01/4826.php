<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 13 16:03:02 2008" -->
<!-- isoreceived="20080113210302" -->
<!-- sent="Sun, 13 Jan 2008 16:02:51 -0500" -->
<!-- isosent="20080113210251" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot; {	#include mpi.h }" -->
<!-- id="1200258171.3592.47.camel_at_doorstop.home.net" -->
<!-- inreplyto="3B012D66-DAFE-47AC-BD3A-2B01BD6E3083_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-13 16:02:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4827.php">Priya Natarajan: "[OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
<p>Sorry about the hiatus; I thought &quot;Great, my OMPI_SKIP_CXX hack works&quot;
<br>
and didn't check to see your reply, even though it came right away.
<br>
<p>On Tue, 2008-01-01 at 11:07 -0700, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Jan 1, 2008, at 12:47 AM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 2007-12-31 at 20:01 -0700, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yeah, this is a complicated example, mostly because HDF5 should
</span><br>
<span class="quotelev3">&gt; &gt;&gt; really be covering this problem for you.  I think your only option at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that point would be to use the #define to not include the C++ code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem is that the MPI standard *requires* mpi.h to include both
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the C and C++ interface declarations if you're using C++.  There's no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; way for the preprocessor to determine whether there's a currently
</span><br>
<span class="quotelev3">&gt; &gt;&gt; active extern &quot;C&quot; block, so there's really not much we can do.  Best
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hope would be to get the HDF5 guys to properly protect their code
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from C++...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Okay.  So in HDF5, since they call MPI from C, they're just using  
</span><br>
<span class="quotelev2">&gt; &gt; the C
</span><br>
<span class="quotelev2">&gt; &gt; interface, right?  So should they define OMPI_SKIP_MPICXX just in case
</span><br>
<span class="quotelev2">&gt; &gt; they're #included by C++ and using OpenMPI, or is there a more MPI
</span><br>
<span class="quotelev2">&gt; &gt; implementation-agnostic way to do it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, they should definitely not be disabling the C++bindings inside  
</span><br>
<span class="quotelev1">&gt; HDF5 -- that would be a situation worse than the current one.   
</span><br>
<span class="quotelev1">&gt; Consider the case where an application uses both HDF5 and the C++ MPI  
</span><br>
<span class="quotelev1">&gt; bindings.  It includes hdf5.h before mpi.h.  The hdf5.h includes  
</span><br>
<span class="quotelev1">&gt; mpi.h, without the C++ bindings.  The application then includes mpi.h,  
</span><br>
<span class="quotelev1">&gt; wanting the C++ bindings.  But the multiple inclusion protection in  
</span><br>
<span class="quotelev1">&gt; mpi.h means nothing happens, so no C++ bindings.
</span><br>
<p>I agree, that would be a problem...
<br>
<p><span class="quotelev1">&gt; My comment about HDF5 was that it would be easiest if it protected its  
</span><br>
<span class="quotelev1">&gt; declarations with extern &quot;C&quot; when using C++.  This is what most  
</span><br>
<span class="quotelev1">&gt; packages that might be used with C++ do, and it works pretty well.   
</span><br>
<span class="quotelev1">&gt; I'd actually be surprised if modern versions of HDF5 didn't already do  
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now that it's not New Years eve, I thought of what's probably the  
</span><br>
<span class="quotelev1">&gt; easiest solution for you.  Just include mpi.h (outside your extern &quot;C&quot;  
</span><br>
<span class="quotelev1">&gt; block) before hdf5.h.  The multiple inclusion protection in mpi.h will  
</span><br>
<span class="quotelev1">&gt; mean that the preprocessor removes everything from the mpi.h that's  
</span><br>
<span class="quotelev1">&gt; included from hdf5.h.  So the extern &quot;C&quot; around the hdf5.h shouldn't  
</span><br>
<span class="quotelev1">&gt; be too much of a problem.
</span><br>
<p>That almost works.  But not quite. :-(
<br>
<p>If I put that in my C++ files or headers, that would be fine.
<br>
Unfortunately, the program I'm porting has:
<br>
<p>A.h:
<br>
#include &lt;hdf5.h&gt;
<br>
<p>B.hxx:
<br>
extern &quot;C&quot; { #include &quot;A.h&quot; }
<br>
<p>And then C.hxx, D.cxx, etc. all include B.hxx, and E.h and F.c include
<br>
A.h.  So if I just add &quot;#include &lt;mpi.h&gt;&quot; to A.h before hdf5, I have the
<br>
same problem: #including &lt;mpi.h&gt; within an extern &quot;C&quot; block.
<br>
<p>The only way to work around this is to patch B, C, D, E and F. Very bad.
<br>
It shouldn't have to be this way.
<br>
<p>Here's a way to make it work, but it requires a patch to OpenMPI mpi.h:
<br>
--- /usr/include/mpi/mpi.h~     2008-01-10 17:26:15.000000000 -0500
<br>
+++ /usr/include/mpi/mpi.h      2008-01-13 15:57:45.000000000 -0500
<br>
@@ -1770,6 +1770,8 @@
<br>
&nbsp;}
<br>
&nbsp;#endif
<br>
<p>+#endif /* OMPI_MPI_H */
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Conditional MPI 2 C++ bindings support.  Include if:
<br>
&nbsp;&nbsp;*   - The user does not explicitly request us to skip it (when a C++ compiler
<br>
@@ -1783,5 +1785,3 @@
<br>
&nbsp;#include &quot;openmpi/ompi/mpi/cxx/mpicxx.h&quot;
<br>
&nbsp;#endif
<br>
&nbsp;#endif
<br>
-
<br>
-#endif /* OMPI_MPI_H */
<br>
<p>Then hdf5.h, or this app's A.h, or whoever, can do:
<br>
#define OMPI_SKIP_MPICXX
<br>
#include &lt;mpi.h&gt; or &lt;hdf5.h&gt; or &lt;A.h&gt; etc.
<br>
#undef OMPI_SKIP_MPICXX
<br>
and the C++ programs which include this will not miss their C++ headers,
<br>
because they won't be inside the OMPI_MPI_H #ifdef protection.  But they
<br>
also won't get them twice, because they'll be in the MPIPP_H #ifdef.
<br>
<p>Do you have any other ideas?  Or will this or something like it be
<br>
necessary to protect against arbitrarily nested #includes from C++
<br>
extern &quot;C&quot; blocks, without stepping on the C++ prototypes?
<br>
<p>Thanks again for your help,
<br>
-Adam
<br>
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
<li><strong>Next message:</strong> <a href="4827.php">Priya Natarajan: "[OMPI users] Open MPI and thread-safety"</a>
<li><strong>Previous message:</strong> <a href="4825.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4770.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
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
