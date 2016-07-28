<?
$subject_val = "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 21:21:31 2008" -->
<!-- isoreceived="20080131022131" -->
<!-- sent="Wed, 30 Jan 2008 21:21:07 -0500" -->
<!-- isosent="20080131022107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can't compile C++ program with extern &amp;quot;C&amp;quot;	{	#include mpi.h }" -->
<!-- id="F98BA5C7-3C04-4A7A-8D74-CEC72C674FF4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1201732539.16306.59.camel_at_doorstop.home.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 21:21:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Previous message:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2008, at 5:35 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; With no reply in a couple of weeks, I'm wondering if my previous  
</span><br>
<span class="quotelev1">&gt; message
</span><br>
<span class="quotelev1">&gt; got dropped.  (Then again, my previous message was a couple of weeks
</span><br>
<span class="quotelev1">&gt; late in replying to its predecessor...)
</span><br>
<p>No, it didn't get dropped -- it was exactly your admission of low  
<br>
priority that had me put this issue as low priority as well.  :-)
<br>
<p><span class="quotelev1">&gt; I'm recommending a change to mpi.h which would let C headers  
</span><br>
<span class="quotelev1">&gt; included by
</span><br>
<span class="quotelev1">&gt; C++ programs do:
</span><br>
<span class="quotelev1">&gt; #define OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #undef OMPI_SKIP_MPICXX
</span><br>
<span class="quotelev1">&gt; without preventing the C++ headers from being included at another  
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt; See below for the recommended change.
</span><br>
<p>I really don't think that's a good solution.  The real problem is that  
<br>
some of Salome's header files are doing things that they should not be  
<br>
doing (including a C++-safe header file inside extern &quot;C&quot; {}).
<br>
<p>IMHO, the real fix should be to fix the code that is doing the Wrong  
<br>
Thing.  I'm reluctant to provide a subtle workaround in our software  
<br>
that enables a Wrong Thing -- know what I mean?
<br>
<p>FWIW, I just downloaded HDF5 1.6.6 and I took a [quick] look: it does  
<br>
indeed look like HDF5's header files are C++-safe.  Specifically: they  
<br>
do not include &lt;mpi.h&gt; in an extern &quot;C&quot; block, and all of their  
<br>
declarations are within extern &quot;C&quot; blocks.  Hence, Salome should not  
<br>
be including &lt;hdf5.h&gt; inside of an extern &quot;C&quot; block because &lt;hdf5.h&gt;  
<br>
is already C++-safe.
<br>
<p>This should fix your problem, right?
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
<li><strong>Next message:</strong> <a href="4931.php">Jeff Squyres: "Re: [OMPI users] general problems with Open mpi and WRF"</a>
<li><strong>Previous message:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>In reply to:</strong> <a href="4929.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern &quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5010.php">Adam C Powell IV: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
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
