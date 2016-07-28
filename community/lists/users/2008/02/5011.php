<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 12:06:29 2008" -->
<!-- isoreceived="20080208170629" -->
<!-- sent="Fri, 8 Feb 2008 12:06:07 -0500" -->
<!-- isosent="20080208170607" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern	&amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="91E76EF8-7BB6-496D-9EE2-07B307719146_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1202429036.3476.32.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 12:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2008, at 7:03 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; But then, why wouldn't programs expect to be able to include C headers
</span><br>
<span class="quotelev1">&gt; in a C++ extern C block?
</span><br>
<p>But that's exactly the issue: mpi.h is not a C header.  It is mandated  
<br>
by the MPI standard to be both a C and a C++ header file.  We (Open  
<br>
MPI) can't change the filename or the languages where it can be used.
<br>
<p><span class="quotelev1">&gt; Or rather, why shouldn't they be able to do so
</span><br>
<span class="quotelev1">&gt; with mpi.h -- or hdf5.h, which isn't mpi.h
</span><br>
<p>Both mpi.h and hdf5.h do the right things with regards to extern  
<br>
&quot;C&quot; {}.  So they are C++-safe.
<br>
<p><span class="quotelev1">&gt; -- when numerous other C
</span><br>
<span class="quotelev1">&gt; header files allow it, possibly including other MPI implementations?
</span><br>
<p>Are you sure of that?  It is my [possibly flawed] understanding that  
<br>
HDF5 can be compiled with or without MPI support.  If that is right,  
<br>
it is therefore possible that Salome has been developed/tested/used  
<br>
with serial HDF5, and this issue never came up.
<br>
<p>Can you get Salome to compile with an HDF5 that was built with support  
<br>
for another MPI implementation?
<br>
<p><span class="quotelev1">&gt; After all, it's called mpi.h not mpi.hh or .hxx or mpi_cxx.h, right?
</span><br>
<span class="quotelev1">&gt; And isn't the patched version cleaner, in that it separates the C and
</span><br>
<span class="quotelev1">&gt; C++ prototypes into different #ifdef/#define regions?
</span><br>
<p><p>My objection to your patch is twofold:
<br>
<p>1. OMPI is not doing anything wrong, and I'm reluctant to &quot;fix&quot;  
<br>
something that is not wrong without a very good reason.  To be blunt:  
<br>
one open source application that is coded wrong (and can easily be  
<br>
fixed) is not a very good reason, IMHO.
<br>
<p>2. Your patch still requires the application to use an OMPI-specific  
<br>
#define.  That doesn't seem like a good idea.
<br>
<p>Put differently: from your description, Salome is a non-conformant MPI  
<br>
application and therefore may or may not work with any given MPI.   
<br>
Instead of having each MPI that Salome (HDF5) fails to compile with  
<br>
provide a workaround, the [much] more portable solution is to have  
<br>
Salome fix their #includes.  This will allow Salome to compile against  
<br>
any MPI implementation.
<br>
<p>I'm clearly not the only OMPI developer, though, so if the community  
<br>
decides to accept your patch, I certainly won't prevent anyone from  
<br>
doing so.  These are just my opinions.  :-)
<br>
<p>Have you talked to the Salome developers?  Wouldn't an upstream fix  
<br>
alleviate the need for you to put in an Open MPI-specific patch (or  
<br>
any patch at all)?  Alternatively, have you talked to the HDF5  
<br>
maintainers to see if they can remove &lt;mpi.h&gt; from their public header  
<br>
files?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5012.php">Hsieh, Pei-Ying (MED US): "[OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="5015.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with	extern	&quot;C&quot;	{	#include mpi.h }"</a>
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
