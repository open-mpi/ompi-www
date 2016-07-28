<?
$subject_val = "[OMPI users] ERROR: too many MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 08:04:37 2011" -->
<!-- isoreceived="20111019120437" -->
<!-- sent="Wed, 19 Oct 2011 14:04:30 +0200" -->
<!-- isosent="20111019120430" -->
<!-- name="Mathieu Westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="[OMPI users] ERROR: too many MPI processes" -->
<!-- id="4E9EBCCE.7050806_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ERROR: too many MPI processes<br>
<strong>From:</strong> Mathieu Westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 08:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17570.php">Ralph Castain: "Re: [OMPI users] Running MPI program  using dropbear"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Reply:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm extending a code currently working well on a server with some 
<br>
quadri-core.
<br>
<p>But for debugging purpose i want to execute it on my local computer.
<br>
<p>When i use the command :
<br>
<p>mpirun -np 6  -host local ./execFile
<br>
<p>i get an :
<br>
<p>ERROR: too many MPI processes
<br>
<p><p>i've tried other mpi programs, and the result is :
<br>
if i want more than 5 mpi processes with -np , i get one error for each 
<br>
one over 5, for example :
<br>
<p>mpirun -np 9  -host local ./execFile
<br>
ERROR: too many MPI processes
<br>
ERROR: too many MPI processes
<br>
ERROR: too many MPI processes
<br>
ERROR: too many MPI processes
<br>
<p>I guess it correspond to each mpi processes who cannot be launched 
<br>
because of some kind of limitation.
<br>
<p>But i cannot find anything about it in documentation or on google.
<br>
<p><p><p>MW
<br>
<p><p><p><p>PS :
<br>
here is my /proc/cpuinfobash-4.2$ cat /proc/cpuinfo
<br>
processor    : 0
<br>
vendor_id    : GenuineIntel
<br>
cpu family    : 6
<br>
model        : 23
<br>
model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
<br>
stepping    : 10
<br>
cpu MHz        : 1596.000
<br>
cache size    : 2048 KB
<br>
physical id    : 0
<br>
siblings    : 2
<br>
core id        : 0
<br>
cpu cores    : 2
<br>
apicid        : 0
<br>
initial apicid    : 0
<br>
fpu        : yes
<br>
fpu_exception    : yes
<br>
cpuid level    : 13
<br>
wp        : yes
<br>
flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca 
<br>
cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall 
<br>
nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni 
<br>
dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts 
<br>
tpr_shadow vnmi flexpriority
<br>
bogomips    : 5851.63
<br>
clflush size    : 64
<br>
cache_alignment    : 64
<br>
address sizes    : 36 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>processor    : 1
<br>
vendor_id    : GenuineIntel
<br>
cpu family    : 6
<br>
model        : 23
<br>
model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
<br>
stepping    : 10
<br>
cpu MHz        : 1596.000
<br>
cache size    : 2048 KB
<br>
physical id    : 0
<br>
siblings    : 2
<br>
core id        : 1
<br>
cpu cores    : 2
<br>
apicid        : 1
<br>
initial apicid    : 1
<br>
fpu        : yes
<br>
fpu_exception    : yes
<br>
cpuid level    : 13
<br>
wp        : yes
<br>
flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca 
<br>
cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall 
<br>
nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni 
<br>
dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts 
<br>
tpr_shadow vnmi flexpriority
<br>
bogomips    : 5851.69
<br>
clflush size    : 64
<br>
cache_alignment    : 64
<br>
address sizes    : 36 bits physical, 48 bits virtual
<br>
power management:
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17570.php">Ralph Castain: "Re: [OMPI users] Running MPI program  using dropbear"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Reply:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
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
