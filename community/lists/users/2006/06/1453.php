<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 20 12:22:19 2006" -->
<!-- isoreceived="20060620162219" -->
<!-- sent="Tue, 20 Jun 2006 12:21:54 -0400" -->
<!-- isosent="20060620162154" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="DCEEBC84-D23D-4E44-850F-0E252689C1C7_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200606191215.22125.kyron_at_neuralbs.com" -->
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
<strong>Date:</strong> 2006-06-20 12:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 19, 2006, at 12:15 PM, Eric Thibodeau wrote:
<br>
<p><span class="quotelev1">&gt; I checked the thread with the same title as this e-mail and tried  
</span><br>
<span class="quotelev1">&gt; compiling openmpi-1.1b4r10418 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure CFLAGS=&quot;-mv8plus&quot; CXXFLAGS=&quot;-mv8plus&quot; FFLAGS=&quot;-mv8plus&quot;  
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-mv8plus&quot; --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
</span><br>
<span class="quotelev1">&gt; pretty-print-stacktrace
</span><br>
I put the incorrect flags in the error message - can you try again with:
<br>
<p><p>&nbsp;&nbsp;&nbsp;./configure CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9 FFLAGS=-mcpu=v9  
<br>
FCFLAGS=-mcpu=v9 --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
<br>
pretty-print-stacktrace
<br>
<p><p>and see if that helps?  By the way, I'm not sure if Solaris has the  
<br>
required support for the pretty-print stack trace feature.  It likely  
<br>
will print what signal caused the error, but will not actually print  
<br>
the stack trace.  It's enabled by default on Solaris, with this  
<br>
limited functionality (the option exists for platforms that have  
<br>
broken half-support for GNU libc's stack trace feature, and for users  
<br>
that don't like us registering a signal handler to do the work).
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
<li><strong>Next message:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1452.php">Michael Kluskens: "Re: [OMPI users] auto detect hosts"</a>
<li><strong>In reply to:</strong> <a href="1447.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1454.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
