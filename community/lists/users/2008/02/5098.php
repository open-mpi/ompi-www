<?
$subject_val = "[OMPI users] OpenMPI on intel core 2 duo machine for parallel computation.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 17:32:42 2008" -->
<!-- isoreceived="20080228223242" -->
<!-- sent="Thu, 28 Feb 2008 16:32:35 -0600" -->
<!-- isosent="20080228223235" -->
<!-- name="Chembeti, Ramesh (S&amp;T-Student)" -->
<!-- email="rc2nf_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI on intel core 2 duo machine for parallel computation." -->
<!-- id="3142CF519A6B204896E248FD59CB7FB20E1A06_at_MST-VMAIL3.srv.mst.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation.<br>
<strong>From:</strong> Chembeti, Ramesh (S&amp;T-Student) (<em>rc2nf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 17:32:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Reply:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Reply:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am a graduate student working on molecular dynamic simulation. My professor/adviser is planning to buy Linux based clusters. But before that he wanted me to parallelize a serial code on molecular dynamic simulations and test it on a intelcore 2 duo machine with fedora 8 on it. I have parallelised my code in fortran 77 using MPI. I have installed OpenMPI and compiling the code using mpif77 -g -o code code.f and running it using 
<br>
mpirun -np 2 ./code. I have a couple of questions to ask you:
<br>
1. Is it possible to use a duo core or any multi core machine for parallel computations?
<br>
2. Is that a a right procedure to run a parallel job as explained above?(using mpif77 -g -o code code.f and running it using 
<br>
mpirun -np 2 ./code)
<br>
3. How do I know my code is being run on both the processors.(I am a chemical engineering student and new to computational aspects)
<br>
4. If what I have done is wrong can anyone please explain me how to do it?
<br>
<p>Here is my CPU details:
<br>
processor	: 0
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 15
<br>
model name	: Intel(R) Core(TM)2 Duo CPU     E6750  @ 2.66GHz
<br>
stepping	: 11
<br>
cpu MHz		: 2000.000
<br>
cache size	: 4096 KB
<br>
physical id	: 0
<br>
siblings	: 2
<br>
core id		: 0
<br>
cpu cores	: 2
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 10
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est tm2 ssse3 cx16 xtpr lahf_lm
<br>
bogomips	: 5322.87
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 36 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor	: 1
<br>
vendor_id	: GenuineIntel
<br>
cpu family	: 6
<br>
model		: 15
<br>
model name	: Intel(R) Core(TM)2 Duo CPU     E6750  @ 2.66GHz
<br>
stepping	: 11
<br>
cpu MHz		: 2000.000
<br>
cache size	: 4096 KB
<br>
physical id	: 0
<br>
siblings	: 2
<br>
core id		: 1
<br>
cpu cores	: 2
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 10
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall lm constant_tsc arch_perfmon pebs bts rep_good pni monitor ds_cpl vmx smx est tm2 ssse3 cx16 xtpr lahf_lm
<br>
bogomips	: 5319.97
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 36 bits physical, 48 bits virtual
<br>
power management:
<br>
<p><p>Thank you
<br>
Ramesh
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5097.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Reply:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>Reply:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
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
