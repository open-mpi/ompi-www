<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 24 19:24:26 2006" -->
<!-- isoreceived="20060225002426" -->
<!-- sent="Fri, 24 Feb 2006 16:24:10 -0800" -->
<!-- isosent="20060225002410" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95" -->
<!-- id="20060225002410.GC2255_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43FF29D3.1010309_at_obspm.fr" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-24 19:24:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Xiaoning (David) Yang: "Re: [OMPI users] Run Open MPI on MAC OS"</a>
<li><strong>In reply to:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 24, 2006 at 04:44:19PM +0100, Benoit Semelin wrote:
<br>
<p><span class="quotelev1">&gt; Well I have actually tried with 2 different versions: 8.0.034 and 
</span><br>
<span class="quotelev1">&gt; 8.1.018. The config.log is attached (I hope this works on the mailing 
</span><br>
<span class="quotelev1">&gt; list...)
</span><br>
<p>Looks like ifort on your system is generating 32-bit .o files by
<br>
default.
<br>
<p>configure:20653: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:20660: $? = 0
<br>
configure:20670: ifort  conftestf.f conftest.o -o conftest  
<br>
ld: warning: i386:x86-64 architecture of input file `conftest.o' is incompatible with i386 output
<br>
<p>Rainer wrote:
<br>
<p><span class="quotelev2">&gt; &gt;PS: When compiling OpenMPI are You using a combination of gcc for C/C++ 
</span><br>
<span class="quotelev2">&gt; &gt;and ifort for Fortan compilation?
</span><br>
<span class="quotelev2">&gt; &gt;This will not work, as the compilers have different views on e.g. boolean 
</span><br>
<span class="quotelev2">&gt; &gt;variables and values, so parameter passing from Your code into OpenMPI 
</span><br>
<span class="quotelev2">&gt; &gt;will be botched up. Currently, You may only use C / Fortran Compiler from 
</span><br>
<span class="quotelev2">&gt; &gt;one vendor.
</span><br>
<p>That's kind of surprising, I don't know why you would want to require
<br>
that bool and LOGICAL have the same values. We (and Intel) both do
<br>
bool like g++ does, but we each do LOGICAL to match the history of our
<br>
Fortran compilers. I never imagined anyone would think these should be
<br>
the same.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0709.php">Allan Menezes: "[OMPI users] Ethernet bonding and Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0707.php">Xiaoning (David) Yang: "Re: [OMPI users] Run Open MPI on MAC OS"</a>
<li><strong>In reply to:</strong> <a href="0702.php">Benoit Semelin: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
<li><strong>Reply:</strong> <a href="0710.php">Brian Barrett: "Re: [OMPI users] Toubles with Open-mpi on AMD opteron with gfortran/g95"</a>
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
