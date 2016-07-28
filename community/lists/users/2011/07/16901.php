<?
$subject_val = "[OMPI users] OpenMPI vs Intel Efficiency question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 19:45:12 2011" -->
<!-- isoreceived="20110712234512" -->
<!-- sent="Tue, 12 Jul 2011 18:45:10 -0500" -->
<!-- isosent="20110712234510" -->
<!-- name="Mohan, Ashwin" -->
<!-- email="ashmohan_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI vs Intel Efficiency question" -->
<!-- id="C47F8344CE6D9B459A06E351D9CF25C904227C72_at_POSTOFFICE.seas.wustl.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI vs Intel Efficiency question<br>
<strong>From:</strong> Mohan, Ashwin (<em>ashmohan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 19:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16902.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I noticed that the exact same code took 50% more time to run on OpenMPI
<br>
than Intel. I use the following syntax to compile and run:
<br>
Intel MPI Compiler: (Redhat Fedora Core release 3 (Heidelberg), Kernel
<br>
version: Linux 2.6.9-1.667smp x86_64**
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiicpc -o xxxx.cpp &lt;filename&gt; -lmpi
<br>
<p>OpenMPI 1.4.3: (Centos 5.5 w/ python 2.4.3, Kernel version: Linux
<br>
2.6.18-194.el5 x86_64)**
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiCC xxxx.cpp -o &lt;filename
<br>
<p>MPI run command: 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 4 &lt;filename&gt; 
<br>
<p><p>**Other hardware specs**
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;processor       : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vendor_id       : GenuineIntel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu family      : 15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;model           : 3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;model name      : Intel(R) Xeon(TM) CPU 3.60GHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stepping        : 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu MHz         : 3591.062
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cache size      : 1024 KB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;physical id     : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;siblings        : 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;core id         : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu cores       : 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;apicid          : 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fpu             : yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fpu_exception   : yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpuid level     : 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wp              : yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
<br>
pge mca cmov pat pse36    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall lmconstant_tsc
<br>
pni monitor ds_cpl est tm2   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cid xtpr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bogomips        : 7182.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;clflush size    : 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cache_alignment : 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;address sizes   : 36 bits physical, 48 bits virtual
<br>
&nbsp;&nbsp;&nbsp;&nbsp;power management:
<br>
<p>Can the issue of efficiency be deciphered from the above info? 
<br>
<p>Does the compiler flags have an effect on the efficiency of the
<br>
simulation. If so, what flags maybe useful to check to be included for
<br>
Open MPI. 
<br>
<p>Will including MPICH2 increase efficiency in running simulations using
<br>
OpenMPI?
<br>
<p>Thanks,
<br>
Ashwin.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16902.php">zhuangchao: "[OMPI users] a question about  network  connection  of  open-mpi"</a>
<li><strong>Previous message:</strong> <a href="16900.php">Paul Kapinos: "[OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Reply:</strong> <a href="16905.php">Tim Prince: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
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
