<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 19:04:06 2008" -->
<!-- isoreceived="20080208000406" -->
<!-- sent="Thu, 07 Feb 2008 19:03:56 -0500" -->
<!-- isosent="20080208000356" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern	&amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="1202429036.3476.32.camel_at_doorstop.home.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F98BA5C7-3C04-4A7A-8D74-CEC72C674FF4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 19:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-01-30 at 21:21 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 5:35 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With no reply in a couple of weeks, I'm wondering if my previous  
</span><br>
<span class="quotelev2">&gt; &gt; message
</span><br>
<span class="quotelev2">&gt; &gt; got dropped.  (Then again, my previous message was a couple of weeks
</span><br>
<span class="quotelev2">&gt; &gt; late in replying to its predecessor...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it didn't get dropped -- it was exactly your admission of low  
</span><br>
<span class="quotelev1">&gt; priority that had me put this issue as low priority as well.  :-)
</span><br>
<p>I understand.
<br>
<p><span class="quotelev2">&gt; &gt; I'm recommending a change to mpi.h which would let C headers  
</span><br>
<span class="quotelev2">&gt; &gt; included by
</span><br>
<span class="quotelev2">&gt; &gt; C++ programs do:
</span><br>
<span class="quotelev2">&gt; &gt; #define OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #undef OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev2">&gt; &gt; without preventing the C++ headers from being included at another  
</span><br>
<span class="quotelev2">&gt; &gt; time.
</span><br>
<span class="quotelev2">&gt; &gt; See below for the recommended change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I really don't think that's a good solution.  The real problem is that  
</span><br>
<span class="quotelev1">&gt; some of Salome's header files are doing things that they should not be  
</span><br>
<span class="quotelev1">&gt; doing (including a C++-safe header file inside extern &quot;C&quot; {}).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO, the real fix should be to fix the code that is doing the Wrong  
</span><br>
<span class="quotelev1">&gt; Thing.  I'm reluctant to provide a subtle workaround in our software  
</span><br>
<span class="quotelev1">&gt; that enables a Wrong Thing -- know what I mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I just downloaded HDF5 1.6.6 and I took a [quick] look: it does  
</span><br>
<span class="quotelev1">&gt; indeed look like HDF5's header files are C++-safe.  Specifically: they  
</span><br>
<span class="quotelev1">&gt; do not include &lt;mpi.h&gt; in an extern &quot;C&quot; block, and all of their  
</span><br>
<span class="quotelev1">&gt; declarations are within extern &quot;C&quot; blocks.  Hence, Salome should not  
</span><br>
<span class="quotelev1">&gt; be including &lt;hdf5.h&gt; inside of an extern &quot;C&quot; block because &lt;hdf5.h&gt;  
</span><br>
<span class="quotelev1">&gt; is already C++-safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should fix your problem, right?
</span><br>
<p>Sort of, though it will require a large patch to Salom&#233; to get around
<br>
this, vs. a small patch to OpenMPI to provide a simple workaround to
<br>
this class a problems.  Basically, I'll need to patch every .hh file to
<br>
make sure it #includes mpi.h or hdf5.h before #including any .h file
<br>
with an mpi.h or hdf5.h #include in it.
<br>
<p>Given that Salom&#233; does this, it must have worked with another MPI
<br>
implementation.  And that means that there is likely other software
<br>
which will try this.
<br>
<p>As I understand it, your only objection to the change now is &quot;programs
<br>
shouldn't be doing this&quot;, not &quot;this will break something&quot;.
<br>
<p>But then, why wouldn't programs expect to be able to include C headers
<br>
in a C++ extern C block?  Or rather, why shouldn't they be able to do so
<br>
with mpi.h -- or hdf5.h, which isn't mpi.h -- when numerous other C
<br>
header files allow it, possibly including other MPI implementations?
<br>
After all, it's called mpi.h not mpi.hh or .hxx or mpi_cxx.h, right?
<br>
And isn't the patched version cleaner, in that it separates the C and
<br>
C++ prototypes into different #ifdef/#define regions?
<br>
<p>Thanks for the reply, sorry about the delay in getting back to you.
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
<li><strong>Next message:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Previous message:</strong> <a href="5009.php">Jeff Squyres: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4930.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
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
