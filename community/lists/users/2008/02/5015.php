<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 20:15:53 2008" -->
<!-- isoreceived="20080211011553" -->
<!-- sent="Sun, 10 Feb 2008 20:15:39 -0500" -->
<!-- isosent="20080211011539" -->
<!-- name="Adam C Powell IV" -->
<!-- email="hazelsct_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with	extern	&amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="1202692539.4869.110.camel_at_doorstop.home.net" -->
<!-- inreplyto="91E76EF8-7BB6-496D-9EE2-07B307719146_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }<br>
<strong>From:</strong> Adam C Powell IV (<em>hazelsct_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-10 20:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>In reply to:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-02-08 at 12:06 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 7, 2008, at 7:03 PM, Adam C Powell IV wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But then, why wouldn't programs expect to be able to include C headers
</span><br>
<span class="quotelev2">&gt; &gt; in a C++ extern C block?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But that's exactly the issue: mpi.h is not a C header.  It is mandated  
</span><br>
<span class="quotelev1">&gt; by the MPI standard to be both a C and a C++ header file.  We (Open  
</span><br>
<span class="quotelev1">&gt; MPI) can't change the filename or the languages where it can be used.
</span><br>
<p>Since this is part of the MPI standard, I can accept this logic.
<br>
<p><span class="quotelev2">&gt; &gt; Or rather, why shouldn't they be able to do so
</span><br>
<span class="quotelev2">&gt; &gt; with mpi.h -- or hdf5.h, which isn't mpi.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both mpi.h and hdf5.h do the right things with regards to extern  
</span><br>
<span class="quotelev1">&gt; &quot;C&quot; {}.  So they are C++-safe.
</span><br>
<p>As long as one doesn't #include them from within an extern &quot;C&quot; block.
<br>
<p><span class="quotelev2">&gt; &gt; -- when numerous other C
</span><br>
<span class="quotelev2">&gt; &gt; header files allow it, possibly including other MPI implementations?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you sure of that?  It is my [possibly flawed] understanding that  
</span><br>
<span class="quotelev1">&gt; HDF5 can be compiled with or without MPI support.  If that is right,  
</span><br>
<span class="quotelev1">&gt; it is therefore possible that Salome has been developed/tested/used  
</span><br>
<span class="quotelev1">&gt; with serial HDF5, and this issue never came up.
</span><br>
<p>Could be, but it also links with MPI, and several instances of &quot;#include
<br>
&lt;mpi.h&gt;&quot; occur within extern &quot;C&quot; blocks -- some of which specifically
<br>
surround these includes.  I have to believe that they've tested this
<br>
with some MPI implementation, and that it worked...
<br>
<p><span class="quotelev1">&gt; Can you get Salome to compile with an HDF5 that was built with support  
</span><br>
<span class="quotelev1">&gt; for another MPI implementation?
</span><br>
<p>Haven't tried, see above.
<br>
<p><span class="quotelev2">&gt; &gt; After all, it's called mpi.h not mpi.hh or .hxx or mpi_cxx.h, right?
</span><br>
<span class="quotelev2">&gt; &gt; And isn't the patched version cleaner, in that it separates the C and
</span><br>
<span class="quotelev2">&gt; &gt; C++ prototypes into different #ifdef/#define regions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My objection to your patch is twofold:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. OMPI is not doing anything wrong, and I'm reluctant to &quot;fix&quot;  
</span><br>
<span class="quotelev1">&gt; something that is not wrong without a very good reason.  To be blunt:  
</span><br>
<span class="quotelev1">&gt; one open source application that is coded wrong (and can easily be  
</span><br>
<span class="quotelev1">&gt; fixed) is not a very good reason, IMHO.
</span><br>
<p>Good point.
<br>
<p><span class="quotelev1">&gt; 2. Your patch still requires the application to use an OMPI-specific  
</span><br>
<span class="quotelev1">&gt; #define.  That doesn't seem like a good idea.
</span><br>
<p>You're right, this is perhaps the strongest argument against my patch.
<br>
<p><span class="quotelev1">&gt; Put differently: from your description, Salome is a non-conformant MPI  
</span><br>
<span class="quotelev1">&gt; application and therefore may or may not work with any given MPI.   
</span><br>
<span class="quotelev1">&gt; Instead of having each MPI that Salome (HDF5) fails to compile with  
</span><br>
<span class="quotelev1">&gt; provide a workaround, the [much] more portable solution is to have  
</span><br>
<span class="quotelev1">&gt; Salome fix their #includes.  This will allow Salome to compile against  
</span><br>
<span class="quotelev1">&gt; any MPI implementation.
</span><br>
<p>Indeed.  That is one of my (many) patches to Salome.  (Though very happy
<br>
with the resulting suite, I'm extremely disappointed with their build
<br>
system -- to the point where I can't see how they successfully built the
<br>
thing at all given the state of their code!)
<br>
<p><span class="quotelev1">&gt; I'm clearly not the only OMPI developer, though, so if the community  
</span><br>
<span class="quotelev1">&gt; decides to accept your patch, I certainly won't prevent anyone from  
</span><br>
<span class="quotelev1">&gt; doing so.  These are just my opinions.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you talked to the Salome developers?  Wouldn't an upstream fix  
</span><br>
<span class="quotelev1">&gt; alleviate the need for you to put in an Open MPI-specific patch (or  
</span><br>
<span class="quotelev1">&gt; any patch at all)?  Alternatively, have you talked to the HDF5  
</span><br>
<span class="quotelev1">&gt; maintainers to see if they can remove &lt;mpi.h&gt; from their public header  
</span><br>
<span class="quotelev1">&gt; files?
</span><br>
<p>I've tried to contact them in several ways, and heard nothing back...
<br>
So it seems I'll need to maintain my patch set out-of-tree for the time
<br>
being.
<br>
<p>Regards,
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
<li><strong>Next message:</strong> <a href="5016.php">Torje Henriksen: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="5014.php">Hsieh, Pei-Ying (MED US): "Re: [OMPI users] A beginer's question"</a>
<li><strong>In reply to:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
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
