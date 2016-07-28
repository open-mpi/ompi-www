<?
$subject_val = "[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 13:53:44 2015" -->
<!-- isoreceived="20150727175344" -->
<!-- sent="Mon, 27 Jul 2015 23:23:03 +0530" -->
<!-- isosent="20150727175303" -->
<!-- name="Dhirendra Kumar" -->
<!-- email="dhirendra.cub_at_[hidden]" -->
<!-- subject="[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5" -->
<!-- id="CANSz=01uR2=MHY6FoZ5J7z9ht1zByRhUFsRkyRWGkuaSMzpA1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5<br>
<strong>From:</strong> Dhirendra Kumar (<em>dhirendra.cub_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 13:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Previous message:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Friends,
<br>
<p>I am trying to compile open-mpi-1.8.4 from a source file on a linux cluster
<br>
with 8 nodes with following features-
<br>
[dkumar_at_weather ~]$ cat /proc/cpuinfo
<br>
processor       : 0
<br>
vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 45
<br>
model name      : Intel(R) Xeon(R) CPU E5-2609 0 @ 2.40GHz
<br>
stepping        : 7
<br>
cpu MHz         : 1200.000
<br>
cache size      : 10240 KB
<br>
physical id     : 0
<br>
siblings        : 4
<br>
core id         : 0
<br>
cpu cores       : 4
<br>
apicid          : 0
<br>
initial apicid  : 0
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 13
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov
<br>
pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx
<br>
pdpe1gb rdtscp lm constant_tsc arch_perfmon pebs bts rep_good xtopology
<br>
nonstop_tsc aperfmperf pni pclmulqdq dtes64 monitor ds_cpl vmx smx est tm2
<br>
ssse3 cx16 xtpr pdcm dca sse4_1 sse4_2 x2apic popcnt aes xsave avx lahf_lm
<br>
arat epb xsaveopt pln pts dts tpr_shadow vnmi flexpriority ept vpid
<br>
bogomips        : 4788.63
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 46 bits physical, 48 bits virtual
<br>
power management:
<br>
<p>......................................................................................
<br>
.......................................................................................
<br>
processor       : 7
<br>
.......................................................................................
<br>
<p>Please suggest me where to set the prefix, and other configure flags as I
<br>
want to compile it for RegCM-4.4.5.5 to run in parallel mode.
<br>
also if possible please suggest me how to proceed for the installation of
<br>
the hdf5 and netcdf dependencies for parallel run of the RegCM.
<br>
<p>Any help would be appreciated.
<br>
<p>Thanks and Regards
<br>
Dhirendra
<br>
<p><pre>
-- 
========================================
Dhirendra Kumar
UGC-JRF
School of Environmental Sciences, JNU
New Delhi (India)
Contact: +91 9910778043
Alternate email: dhirendra.cub_at_[hidden]
=========================================
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Previous message:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
