<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 21:16:50 2007" -->
<!-- isoreceived="20080101021650" -->
<!-- sent="Mon, 31 Dec 2007 19:17:13 -0700" -->
<!-- isosent="20080101021713" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot; { #include mpi.h }" -->
<!-- id="5FECA1D0-F966-4655-8AC2-0CD55946D3B9_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1199153565.14209.78.camel_at_doorstop.home.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-31 21:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4763.php">Adam C Powell IV: "[OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4763.php">Adam C Powell IV: "[OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 31, 2007, at 7:12 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build the Salom&#233; engineering simulation tool, and am
</span><br>
<span class="quotelev1">&gt; having trouble compiling with OpenMPI.  The full text of the error  
</span><br>
<span class="quotelev1">&gt; is at
</span><br>
<span class="quotelev1">&gt; <a href="http://lyre.mit.edu/~powell/salome-error">http://lyre.mit.edu/~powell/salome-error</a> .  The crux of the problem  
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev1">&gt; be reproduced by trying to compile a C++ file with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the end of mpi.h, the C++ headers get loaded while in extern C  
</span><br>
<span class="quotelev1">&gt; mode,
</span><br>
<span class="quotelev1">&gt; and the result is a vast list of errors.
</span><br>
<p>Yes, it will.  Similar to other external packages (like system  
<br>
headers), you absolutely should not include mpi.h from an extern &quot;C&quot;  
<br>
block.  It will fail, as you've noted.  The proper solution is to not  
<br>
be in an extern &quot;C&quot; block when including mpi.h.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4763.php">Adam C Powell IV: "[OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4763.php">Adam C Powell IV: "[OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4765.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
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
