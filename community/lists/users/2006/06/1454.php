<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 20 17:06:52 2006" -->
<!-- isoreceived="20060620210652" -->
<!-- sent="Tue, 20 Jun 2006 17:06:39 -0400" -->
<!-- isosent="20060620210639" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="200606201706.39777.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DCEEBC84-D23D-4E44-850F-0E252689C1C7_at_open-mpi.org" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-20 17:06:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the pointer, it WORKS!! (yay)
<br>
<p>Le mardi 20 juin 2006 12:21, Brian Barrett a &#233;crit&#160;:
<br>
<span class="quotelev1">&gt; On Jun 19, 2006, at 12:15 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I checked the thread with the same title as this e-mail and tried  
</span><br>
<span class="quotelev2">&gt; &gt; compiling openmpi-1.1b4r10418 with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure CFLAGS=&quot;-mv8plus&quot; CXXFLAGS=&quot;-mv8plus&quot; FFLAGS=&quot;-mv8plus&quot;  
</span><br>
<span class="quotelev2">&gt; &gt; FCFLAGS=&quot;-mv8plus&quot; --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
</span><br>
<span class="quotelev2">&gt; &gt; pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt; I put the incorrect flags in the error message - can you try again with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9 FFLAGS=-mcpu=v9  
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-mcpu=v9 --prefix=$HOME/openmpi-SUN-`uname -r` --enable- 
</span><br>
<span class="quotelev1">&gt; pretty-print-stacktrace
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and see if that helps?  By the way, I'm not sure if Solaris has the  
</span><br>
<span class="quotelev1">&gt; required support for the pretty-print stack trace feature.  It likely  
</span><br>
<span class="quotelev1">&gt; will print what signal caused the error, but will not actually print  
</span><br>
<span class="quotelev1">&gt; the stack trace.  It's enabled by default on Solaris, with this  
</span><br>
<span class="quotelev1">&gt; limited functionality (the option exists for platforms that have  
</span><br>
<span class="quotelev1">&gt; broken half-support for GNU libc's stack trace feature, and for users  
</span><br>
<span class="quotelev1">&gt; that don't like us registering a signal handler to do the work).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Previous message:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>In reply to:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
