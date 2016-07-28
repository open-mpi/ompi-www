<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 28 13:20:49 2007" -->
<!-- isoreceived="20070728172049" -->
<!-- sent="Sat, 28 Jul 2007 13:20:41 -0400" -->
<!-- isosent="20070728172041" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="D18839DD-DE68-4437-8E37-F53969038522_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1963AB27-6E41-40A8-B6A1-8E815556F362_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-28 13:20:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3790.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Can you disassemble this function (from gdb) and post the assembly  
<br>
code ? This might help us to see what's wrong there.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 28, 2007, at 8:42 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ricardo was generous to give me access to two configurations with the
</span><br>
<span class="quotelev1">&gt; Intel 10 compilers:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. 64 bit EMT64 desktop / server
</span><br>
<span class="quotelev1">&gt; 2. 32 bit centrino-based laptop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the 64 bit platform, both the 32 bit and 64 bit intel compilers
</span><br>
<span class="quotelev1">&gt; worked fine with Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the 32 bit platform, I was able to replicate the problem with a
</span><br>
<span class="quotelev1">&gt; trivial Open MPI application (even when I configured Open MPI --
</span><br>
<span class="quotelev1">&gt; without-memory-manager): mpicc segv's about 5 lines into the program
</span><br>
<span class="quotelev1">&gt; when it executes the following statement in opal/runtime/
</span><br>
<span class="quotelev1">&gt; opal_init.c:opal_util_init():
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if( ++opal_util_initialized != 1 ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes no sense; there is no reason there should be a segv on
</span><br>
<span class="quotelev1">&gt; this line.  opal_util_initialized is a global variable instantiated
</span><br>
<span class="quotelev1">&gt; in that file; it is not on the heap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My gut feeling is that this is a compiler bug.  I unfortunately do
</span><br>
<span class="quotelev1">&gt; not have the time to track this down any further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2007, at 10:05 AM, Andrea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you be a bit more specific than &quot;it dies&quot;? Are you talking  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpif90/mpif77, or your app?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry, tuspid me. When executing mpif90 or mpif77 I have a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfault and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't compile. I've tried both with or without input (i.e.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; giving it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something to compile or just executing it expecting to see the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; normal &quot;no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files given&quot; kind of message). The intel suite compiled openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've the same problem: when I try to run any mpi-command (like
</span><br>
<span class="quotelev2">&gt;&gt; mpicc, mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info, ...) I recive a &quot;Segmentation Fault&quot;. I've tried both
</span><br>
<span class="quotelev2">&gt;&gt; openMPI version
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.3 and version 1.2.4b0, but all I get is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ompi_info --all
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some info on my system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - GNU/Linux, 2.6.22 Kernel, Slackware 12.0
</span><br>
<span class="quotelev2">&gt;&gt;  - Genuine Intel(R) CPU, T2400  @ 1.83GHz GenuineIntel (Toshiba
</span><br>
<span class="quotelev2">&gt;&gt; A-100 Laptop)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  - Intel C Compiler 9.1.047
</span><br>
<span class="quotelev2">&gt;&gt;  - Intel Fortran Compiler 9.1.041
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The configure script options I've used are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     --prefix=/usr CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you need more info just tell me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for you attention.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3790.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3788.php">Jeff Squyres: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3737.php">Pak Lui: "Re: [OMPI users] sge qdel fails"</a>
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
