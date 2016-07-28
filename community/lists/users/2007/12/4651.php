<?
$subject_val = "[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 14:02:59 2007" -->
<!-- isoreceived="20071212190259" -->
<!-- sent="Wed, 12 Dec 2007 12:02:55 -0700" -->
<!-- isosent="20071212190255" -->
<!-- name="Alex Pletzer" -->
<!-- email="pletzer_at_[hidden]" -->
<!-- subject="[OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)" -->
<!-- id="4760305F.3070706_at_txcorp.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)<br>
<strong>From:</strong> Alex Pletzer (<em>pletzer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 14:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Previous message:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Reply:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm on a AMD64 box (Linux quartic.txcorp.com 2.6.19-1.2288.fc5 #1 SMP 
<br>
Sat Feb 10 14:59:35 EST 2007 x86_64 x86_64 x86_64 GNU/Linux) and 
<br>
compiled openmpi-1.2.4 using the Lahey-Fujitsu compiler (lfc). The 
<br>
compilation of openmpi went fine.
<br>
<p>&nbsp;&nbsp;$ ../configure --enable-mpi-f90 --enable-mpi-f77 --enable-mpi-cxx 
<br>
--prefix=/home/research/pletzer/local/x86_64/openmpi-1.2.4/ FC=lfc 
<br>
F77=lfc FCFLAGS=-O2 FFLAGS=-O2 --disable-shared --enable-static
<br>
<p>However, when compiling a test code with mpif90, I get the following error:
<br>
<p>[pletzer_at_quartic test]$ cat t.f90
<br>
program test
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;integer :: rank, size, ier
<br>
&nbsp;&nbsp;call mpi_init(ier)
<br>
&nbsp;&nbsp;call mpi_comm_rank(MPI_COMM_WORLD, rank, ier)
<br>
&nbsp;&nbsp;call mpi_comm_size(MPI_COMM_WORLD, size, ier)
<br>
&nbsp;&nbsp;print *,'rank ', rank, ' size ', size
<br>
&nbsp;&nbsp;call mpi_finalize(ier)
<br>
end program test
<br>
<p>[pletzer_at_quartic test]$ mpif90 t.f90
<br>
Encountered 0 errors, 0 warnings in file t.f90.
<br>
/home/research/pletzer/local/x86_64/openmpi-1.2.4//lib/libopen-pal.a(lt1-malloc.o): 
<br>
In function `ptmalloc_init':
<br>
malloc.c:(.text+0x4b71): undefined reference to `pthread_atfork'
<br>
[pletzer_at_quartic test]$
<br>
<p>I know this symbol is defined in
<br>
<p>[pletzer_at_quartic test]$ nm /usr/lib64/libpthread.a | grep pthread_atfork
<br>
..
<br>
0000000000000000 T pthread_atfork
<br>
<p>However linking with this library does not resolve the problem:
<br>
<p>[pletzer_at_quartic test]$ mpif90 t.f90 /usr/lib64/libpthread.a
<br>
Encountered 0 errors, 0 warnings in file t.f90.
<br>
/home/research/pletzer/local/x86_64/openmpi-1.2.4//lib/libopen-pal.a(lt1-malloc.o): 
<br>
In function `ptmalloc_init':
<br>
malloc.c:(.text+0x4b71): undefined reference to `pthread_atfork'
<br>
<p>Thanks for your help.
<br>
<p>--Alex
<br>
<p><pre>
-- 
Alexander Pletzer
Tech-X (p) 303 - 996 2031 (c) 609 235 6022 (f) 303 448 7756
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4652.php">Moreland, Kenneth: "Re: [OMPI users] Problems with GATHERV on one process"</a>
<li><strong>Previous message:</strong> <a href="4650.php">Michael: "[OMPI users] Dual ethernet &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Reply:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
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
