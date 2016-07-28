<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 28 16:20:12 2005" -->
<!-- isoreceived="20050928212012" -->
<!-- sent="Wed, 28 Sep 2005 16:20:10 -0500" -->
<!-- isosent="20050928212010" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] more information on my overflow problem" -->
<!-- id="1E57A9B1-4690-49AC-B6E0-D38DF1BA9FE7_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F20142C930_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-28 16:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0161.php">Borenstein, Bernard S: "[O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Previous message:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 28, 2005, at 3:46 PM, Borenstein, Bernard S wrote:
<br>
<span class="quotelev1">&gt; I posted an issue with the Nasa Overflow 1.8 code and have traced  
</span><br>
<span class="quotelev1">&gt; it further to a program failure in the malloc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; areas of the code (data in these areas gets corrupted).  Overflow  
</span><br>
<span class="quotelev1">&gt; is mostly fortran, but since it is an old program,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it uses some c routines to do dynamic memory allocation.  I&#146;m still  
</span><br>
<span class="quotelev1">&gt; tracing down the problem, but could you enlighten me as to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how OPENMPI does the malloc_hooks and intercepts memory allocation  
</span><br>
<span class="quotelev1">&gt; calls to run on a linux myrinet cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any easy way to debug what is happening?? I&#146;m using brute  
</span><br>
<span class="quotelev1">&gt; force to track it down.
</span><br>
<p>Right now, the malloc_hooks aren't doing much of anything by  
<br>
default.  We're seeing some issues with Myrinet that look like they  
<br>
are in the GM transport layer itself.  You might want to hold off for  
<br>
a couple of days until we get that straightened out, then try a new  
<br>
build of Open MPI.  But right now, I'd stay away from Myrinet/GM on  
<br>
Open MPI.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/10/0161.php">Borenstein, Bernard S: "[O-MPI users] Continued problems with Nasa Overflow code"</a>
<li><strong>Previous message:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
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
