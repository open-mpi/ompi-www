<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 08:43:07 2007" -->
<!-- isoreceived="20070728124307" -->
<!-- sent="Sat, 28 Jul 2007 08:42:44 -0400" -->
<!-- isosent="20070728124244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="1963AB27-6E41-40A8-B6A1-8E815556F362_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A4B5B1.8040304_at_yahoo.it" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-28 08:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>In reply to:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo was generous to give me access to two configurations with the  
<br>
Intel 10 compilers:
<br>
<p>1. 64 bit EMT64 desktop / server
<br>
2. 32 bit centrino-based laptop
<br>
<p>On the 64 bit platform, both the 32 bit and 64 bit intel compilers  
<br>
worked fine with Open MPI.
<br>
<p>On the 32 bit platform, I was able to replicate the problem with a  
<br>
trivial Open MPI application (even when I configured Open MPI -- 
<br>
without-memory-manager): mpicc segv's about 5 lines into the program  
<br>
when it executes the following statement in opal/runtime/ 
<br>
opal_init.c:opal_util_init():
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( ++opal_util_initialized != 1 ) {
<br>
<p>This makes no sense; there is no reason there should be a segv on  
<br>
this line.  opal_util_initialized is a global variable instantiated  
<br>
in that file; it is not on the heap.
<br>
<p>My gut feeling is that this is a compiler bug.  I unfortunately do  
<br>
not have the time to track this down any further.
<br>
<p><p><p>On Jul 23, 2007, at 10:05 AM, Andrea wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you be a bit more specific than &quot;it dies&quot;? Are you talking about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90/mpif77, or your app?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, tuspid me. When executing mpif90 or mpif77 I have a  
</span><br>
<span class="quotelev2">&gt;&gt; segfault and it
</span><br>
<span class="quotelev2">&gt;&gt; doesn't compile. I've tried both with or without input (i.e.,  
</span><br>
<span class="quotelev2">&gt;&gt; giving it
</span><br>
<span class="quotelev2">&gt;&gt; something to compile or just executing it expecting to see the  
</span><br>
<span class="quotelev2">&gt;&gt; normal &quot;no
</span><br>
<span class="quotelev2">&gt;&gt; files given&quot; kind of message). The intel suite compiled openmpi  
</span><br>
<span class="quotelev2">&gt;&gt; without
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've the same problem: when I try to run any mpi-command (like  
</span><br>
<span class="quotelev1">&gt; mpicc, mpirun,
</span><br>
<span class="quotelev1">&gt; ompi_info, ...) I recive a &quot;Segmentation Fault&quot;. I've tried both  
</span><br>
<span class="quotelev1">&gt; openMPI version
</span><br>
<span class="quotelev1">&gt; 1.2.3 and version 1.2.4b0, but all I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ompi_info --all
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some info on my system:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - GNU/Linux, 2.6.22 Kernel, Slackware 12.0
</span><br>
<span class="quotelev1">&gt;  - Genuine Intel(R) CPU, T2400  @ 1.83GHz GenuineIntel (Toshiba  
</span><br>
<span class="quotelev1">&gt; A-100 Laptop)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Intel C Compiler 9.1.047
</span><br>
<span class="quotelev1">&gt;  - Intel Fortran Compiler 9.1.041
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure script options I've used are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --prefix=/usr CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you need more info just tell me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for you attention.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3787.php">Jeff Squyres: "Re: [OMPI users] How to use multi TCP network"</a>
<li><strong>In reply to:</strong> <a href="3736.php">Andrea: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3789.php">George Bosilca: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
