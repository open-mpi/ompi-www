<?
$subject_val = "[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 07:42:02 2014" -->
<!-- isoreceived="20140724114202" -->
<!-- sent="Thu, 24 Jul 2014 13:41:47 +0200 (CEST)" -->
<!-- isosent="20140724114147" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="201407241141.s6OBflqu027876_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 07:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<li><strong>Previous message:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today I installed openmpi-1.8.2rc2 on my machines (Solaris 10 Sparc,
<br>
Solaris 10 x86_64, and openSUSE Linux 12.1 x86_64) with Sun C 5.12
<br>
and gcc-4.9.0. I still have the same problems which I reported
<br>
yesterday for openmpi-1.8.2rc2r32288.
<br>
<p><p>tyr hello_1 111 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2rc2
<br>
tyr hello_1 112 mpiexec -np 2 a.out 
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 2 running on tyr.informatik.hs-fulda.de
<br>
<p><p>Now 1 slave tasks are sending greetings.
<br>
<p>ld.so.1: a.out: fatal: relocation error: file 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/mca_pml_ob1.so: symbol alloca: 
<br>
referenced symbol not found
<br>
ld.so.1: a.out: fatal: relocation error: file 
<br>
/usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/mca_pml_ob1.so: symbol alloca: 
<br>
referenced symbol not found
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 27867 on node tyr exited on signal 
<br>
9 (Killed).
<br>
--------------------------------------------------------------------------
<br>
tyr hello_1 113 
<br>
<p><p><p>Everything works fine for an older version.
<br>
<p>tyr hello_1 108 ompi_info | grep MPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2a1r31804
<br>
tyr hello_1 109 mpicc hello_1_mpi.c 
<br>
tyr hello_1 110 mpiexec -np 2 a.out 
<br>
Process 1 of 2 running on tyr.informatik.hs-fulda.de
<br>
Process 0 of 2 running on tyr.informatik.hs-fulda.de
<br>
<p>Now 1 slave tasks are sending greetings.
<br>
<p>Greetings from task 1:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          136 characters
<br>
&nbsp;&nbsp;message:             
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  SunOS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           5.10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         sun4u
<br>
<p>tyr hello_1 111 
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<li><strong>Previous message:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
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
