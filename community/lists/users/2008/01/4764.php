<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  1 02:48:06 2008" -->
<!-- isoreceived="20080101074806" -->
<!-- sent="Tue, 01 Jan 2008 02:47:48 -0500" -->
<!-- isosent="20080101074748" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="1199173668.14209.90.camel_at_doorstop.home.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="621903E2-C45C-4D3D-BCF2-44C28C0C2084_at_open-mpi.org" -->
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
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-01 02:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4765.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="../../2007/12/4763.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="../../2007/12/4763.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4767.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4767.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-12-31 at 20:01 -0700, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Dec 31, 2007, at 7:26 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Okay, fair enough for this test example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But the Salom&#233; case is more complicated:
</span><br>
<span class="quotelev2">&gt; &gt; extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;hdf5.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; What to do here?  The hdf5 prototypes must be in an extern &quot;C&quot; block,
</span><br>
<span class="quotelev2">&gt; &gt; but hdf5.h #includes a file which #includes mpi.h...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the quick reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, this is a complicated example, mostly because HDF5 should  
</span><br>
<span class="quotelev1">&gt; really be covering this problem for you.  I think your only option at  
</span><br>
<span class="quotelev1">&gt; that point would be to use the #define to not include the C++ code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that the MPI standard *requires* mpi.h to include both  
</span><br>
<span class="quotelev1">&gt; the C and C++ interface declarations if you're using C++.  There's no  
</span><br>
<span class="quotelev1">&gt; way for the preprocessor to determine whether there's a currently  
</span><br>
<span class="quotelev1">&gt; active extern &quot;C&quot; block, so there's really not much we can do.  Best  
</span><br>
<span class="quotelev1">&gt; hope would be to get the HDF5 guys to properly protect their code  
</span><br>
<span class="quotelev1">&gt; from C++...
</span><br>
<p>Okay.  So in HDF5, since they call MPI from C, they're just using the C
<br>
interface, right?  So should they define OMPI_SKIP_MPICXX just in case
<br>
they're #included by C++ and using OpenMPI, or is there a more MPI
<br>
implementation-agnostic way to do it?
<br>
<p>Thanks again and happy new year!
<br>
<p>-Adam
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
<li><strong>Next message:</strong> <a href="4765.php">Krishna Chaitanya: "[OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="../../2007/12/4763.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="../../2007/12/4763.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4767.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4767.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
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
