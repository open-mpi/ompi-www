<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 19 12:15:36 2006" -->
<!-- isoreceived="20060619161536" -->
<!-- sent="Mon, 19 Jun 2006 12:15:22 -0400" -->
<!-- isosent="20060619161522" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Installing OpenMPI on a solaris" -->
<!-- id="200606191215.22125.kyron_at_neuralbs.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Installing OpenMPI on a solaris" -->
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
<strong>Date:</strong> 2006-06-19 12:15:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1448.php">Michael Kluskens: "[OMPI users] MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="1446.php">Owen Stampflee: "[OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I checked the thread with the same title as this e-mail and tried compiling openmpi-1.1b4r10418 with:
<br>
<p>./configure CFLAGS=&quot;-mv8plus&quot; CXXFLAGS=&quot;-mv8plus&quot; FFLAGS=&quot;-mv8plus&quot; FCFLAGS=&quot;-mv8plus&quot; --prefix=$HOME/openmpi-SUN-`uname -r` --enable-pretty-print-stacktrace 
<br>
<p>but I keep getting:
<br>
<p>*** Assembler
<br>
checking for BSD-compatible nm... /usr/ccs/bin/nm -p
<br>
checking for fgrep... fgrep
<br>
checking whether to enable smp locks... yes
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... no
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... #
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... no
<br>
checking if have Sparc v8+/v9 support... no
<br>
configure: WARNING: Sparc v8 target is not supported in this release of Open MPI.
<br>
configure: WARNING: You must specify the target architecture v8plus
<br>
configure: WARNING: (cc: -xarch=v8plus, gcc: -mv8plus) for CFLAGS, CCXXFLAGS,
<br>
configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in32 bit mode on
<br>
configure: WARNING: Sparc processors
<br>
configure: error: Can not continue.
<br>
<p>Is Sparc support put aside for the moment or am-I doing something wrong?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
Eric Thibodeau
Neural Bucket Solutions Inc.
T. (514) 736-1436
C. (514) 710-0517
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1448.php">Michael Kluskens: "[OMPI users] MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="1446.php">Owen Stampflee: "[OMPI users] Error polling HP CQ on linux ppc64 w/Infiniband"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0653.php">Xiaoning (David) Yang: "[OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Reply:</strong> <a href="1453.php">Brian Barrett: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
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
