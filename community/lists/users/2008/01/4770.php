<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 13:08:06 2008" -->
<!-- isoreceived="20080101180806" -->
<!-- sent="Tue, 1 Jan 2008 11:07:54 -0700" -->
<!-- isosent="20080101180754" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="3B012D66-DAFE-47AC-BD3A-2B01BD6E3083_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1199173668.14209.90.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 13:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 1, 2008, at 12:47 AM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2007-12-31 at 20:01 -0700, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, this is a complicated example, mostly because HDF5 should
</span><br>
<span class="quotelev2">&gt;&gt; really be covering this problem for you.  I think your only option at
</span><br>
<span class="quotelev2">&gt;&gt; that point would be to use the #define to not include the C++ code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that the MPI standard *requires* mpi.h to include both
</span><br>
<span class="quotelev2">&gt;&gt; the C and C++ interface declarations if you're using C++.  There's no
</span><br>
<span class="quotelev2">&gt;&gt; way for the preprocessor to determine whether there's a currently
</span><br>
<span class="quotelev2">&gt;&gt; active extern &quot;C&quot; block, so there's really not much we can do.  Best
</span><br>
<span class="quotelev2">&gt;&gt; hope would be to get the HDF5 guys to properly protect their code
</span><br>
<span class="quotelev2">&gt;&gt; from C++...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay.  So in HDF5, since they call MPI from C, they're just using  
</span><br>
<span class="quotelev1">&gt; the C
</span><br>
<span class="quotelev1">&gt; interface, right?  So should they define OMPI_SKIP_MPICXX just in case
</span><br>
<span class="quotelev1">&gt; they're #included by C++ and using OpenMPI, or is there a more MPI
</span><br>
<span class="quotelev1">&gt; implementation-agnostic way to do it?
</span><br>
<p><p>No, they should definitely not be disabling the C++bindings inside  
<br>
HDF5 -- that would be a situation worse than the current one.   
<br>
Consider the case where an application uses both HDF5 and the C++ MPI  
<br>
bindings.  It includes hdf5.h before mpi.h.  The hdf5.h includes  
<br>
mpi.h, without the C++ bindings.  The application then includes mpi.h,  
<br>
wanting the C++ bindings.  But the multiple inclusion protection in  
<br>
mpi.h means nothing happens, so no C++ bindings.
<br>
<p>My comment about HDF5 was that it would be easiest if it protected its  
<br>
declarations with extern &quot;C&quot; when using C++.  This is what most  
<br>
packages that might be used with C++ do, and it works pretty well.   
<br>
I'd actually be surprised if modern versions of HDF5 didn't already do  
<br>
that.
<br>
<p>Now that it's not New Years eve, I thought of what's probably the  
<br>
easiest solution for you.  Just include mpi.h (outside your extern &quot;C&quot;  
<br>
block) before hdf5.h.  The multiple inclusion protection in mpi.h will  
<br>
mean that the preprocessor removes everything from the mpi.h that's  
<br>
included from hdf5.h.  So the extern &quot;C&quot; around the hdf5.h shouldn't  
<br>
be too much of a problem.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4771.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4769.php">Jeff Pummill: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4826.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
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
