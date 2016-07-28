<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 22:01:10 2007" -->
<!-- isoreceived="20080101030110" -->
<!-- sent="Mon, 31 Dec 2007 20:01:26 -0700" -->
<!-- isosent="20080101030126" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot; {	#include mpi.h }" -->
<!-- id="621903E2-C45C-4D3D-BCF2-44C28C0C2084_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1199154363.14209.84.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 22:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 31, 2007, at 7:26 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; Okay, fair enough for this test example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But the Salom&#233; case is more complicated:
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #include &lt;hdf5.h&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; What to do here?  The hdf5 prototypes must be in an extern &quot;C&quot; block,
</span><br>
<span class="quotelev1">&gt; but hdf5.h #includes a file which #includes mpi.h...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the quick reply!
</span><br>
<p>Yeah, this is a complicated example, mostly because HDF5 should  
<br>
really be covering this problem for you.  I think your only option at  
<br>
that point would be to use the #define to not include the C++ code.
<br>
<p>The problem is that the MPI standard *requires* mpi.h to include both  
<br>
the C and C++ interface declarations if you're using C++.  There's no  
<br>
way for the preprocessor to determine whether there's a currently  
<br>
active extern &quot;C&quot; block, so there's really not much we can do.  Best  
<br>
hope would be to get the HDF5 guys to properly protect their code  
<br>
from C++...
<br>
<p><p>Brian
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4767.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
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
