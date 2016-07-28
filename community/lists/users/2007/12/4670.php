<?
$subject_val = "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 18:05:04 2007" -->
<!-- isoreceived="20071213230504" -->
<!-- sent="Thu, 13 Dec 2007 17:05:00 -0600 (CST)" -->
<!-- isosent="20071213230500" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)" -->
<!-- id="Pine.LNX.4.64.0712131701510.17526_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4760305F.3070706_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 18:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 12 Dec 2007, Alex Pletzer wrote:
<br>
<p><span class="quotelev1">&gt; I'm on a AMD64 box (Linux quartic.txcorp.com 2.6.19-1.2288.fc5 #1 SMP
</span><br>
<span class="quotelev1">&gt; Sat Feb 10 14:59:35 EST 2007 x86_64 x86_64 x86_64 GNU/Linux) and
</span><br>
<span class="quotelev1">&gt; compiled openmpi-1.2.4 using the Lahey-Fujitsu compiler (lfc). The
</span><br>
<span class="quotelev1">&gt; compilation of openmpi went fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ ../configure --enable-mpi-f90 --enable-mpi-f77 --enable-mpi-cxx
</span><br>
<span class="quotelev1">&gt; --prefix=/home/research/pletzer/local/x86_64/openmpi-1.2.4/ FC=lfc
</span><br>
<span class="quotelev1">&gt; F77=lfc FCFLAGS=-O2 FFLAGS=-O2 --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when compiling a test code with mpif90, I get the following error:
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; [pletzer_at_quartic test]$ mpif90 t.f90
</span><br>
<span class="quotelev1">&gt; Encountered 0 errors, 0 warnings in file t.f90.
</span><br>
<span class="quotelev1">&gt; /home/research/pletzer/local/x86_64/openmpi-1.2.4//lib/libopen-pal.a(lt1-malloc.o):
</span><br>
<span class="quotelev1">&gt; In function `ptmalloc_init':
</span><br>
<span class="quotelev1">&gt; malloc.c:(.text+0x4b71): undefined reference to `pthread_atfork'
</span><br>
<p>Open MPI only supports statically linking an application when the 
<br>
--without-memory-manager option is given to Open MPI's configure.  You can 
<br>
build Open MPI statically (ie, make a libmpi.a) without that option, but 
<br>
you can not statically link an application (ie, use libc.a) without it.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4671.php">Moreland, Kenneth: "[OMPI users] Bad behavior in Allgatherv when a count is 0"</a>
<li><strong>Previous message:</strong> <a href="4669.php">Brian W. Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4651.php">Alex Pletzer: "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
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
