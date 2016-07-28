<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 21:26:17 2007" -->
<!-- isoreceived="20080101022617" -->
<!-- sent="Mon, 31 Dec 2007 21:26:03 -0500" -->
<!-- isosent="20080101022603" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot; {	#include mpi.h }" -->
<!-- id="1199154363.14209.84.camel_at_doorstop.home.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5FECA1D0-F966-4655-8AC2-0CD55946D3B9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-12-31 21:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-12-31 at 19:17 -0700, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Dec 31, 2007, at 7:12 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to build the Salom&#233; engineering simulation tool, and am
</span><br>
<span class="quotelev2">&gt; &gt; having trouble compiling with OpenMPI.  The full text of the error  
</span><br>
<span class="quotelev2">&gt; &gt; is at
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://lyre.mit.edu/~powell/salome-error">http://lyre.mit.edu/~powell/salome-error</a> .  The crux of the problem  
</span><br>
<span class="quotelev2">&gt; &gt; can
</span><br>
<span class="quotelev2">&gt; &gt; be reproduced by trying to compile a C++ file with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; extern &quot;C&quot;
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At the end of mpi.h, the C++ headers get loaded while in extern C  
</span><br>
<span class="quotelev2">&gt; &gt; mode,
</span><br>
<span class="quotelev2">&gt; &gt; and the result is a vast list of errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it will.  Similar to other external packages (like system  
</span><br>
<span class="quotelev1">&gt; headers), you absolutely should not include mpi.h from an extern &quot;C&quot;  
</span><br>
<span class="quotelev1">&gt; block.  It will fail, as you've noted.  The proper solution is to not  
</span><br>
<span class="quotelev1">&gt; be in an extern &quot;C&quot; block when including mpi.h.
</span><br>
<p>Okay, fair enough for this test example.
<br>
<p>But the Salom&#233; case is more complicated:
<br>
extern &quot;C&quot;
<br>
{
<br>
#include &lt;hdf5.h&gt;
<br>
}
<br>
What to do here?  The hdf5 prototypes must be in an extern &quot;C&quot; block,
<br>
but hdf5.h #includes a file which #includes mpi.h...
<br>
<p>Thanks for the quick reply!
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
<li><strong>Next message:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4764.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; { #include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="4766.php">Brian Barrett: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot; {	#include mpi.h }"</a>
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
