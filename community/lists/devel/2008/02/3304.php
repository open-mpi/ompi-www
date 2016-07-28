<?
$subject_val = "[OMPI devel] rankfile mapping RMAPS component.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 26 08:03:11 2008" -->
<!-- isoreceived="20080226130311" -->
<!-- sent="Tue, 26 Feb 2008 15:03:01 +0200" -->
<!-- isosent="20080226130301" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] rankfile mapping RMAPS component." -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14C2F_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> [OMPI devel] rankfile mapping RMAPS component.<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-26 08:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You can check Rankfile mapping component of RMAPS at
<br>
/tmp-public/rank_file/
<br>
<p>Notes:
<br>
1. 	This is based on rhc-step2b revision 17573
<br>
2. 	Used plpa1.1
<br>
3. 	if rankfile is present the priority of rankfile component of
<br>
RMAPS gets high value.
<br>
4. 	all unspecified by rankfile ranks are assigned using -byslot or
<br>
-bynode  policy. It's highly recommended to assign all ranks in rankfile
<br>
if this component is used.
<br>
5.	usage: mpirun -mca rmaps_rankfile_path rankfile ./app
<br>
6.	you can use -mca mpi_paffinity_debug 1 to check CPU binding.
<br>
7.	example:
<br>
<p>#cat hosfile
<br>
host1 
<br>
host2	
<br>
host3 
<br>
host4
<br>
<p>#cat rankfile
<br>
rank 1=host1 slot=1:0,1
<br>
rank 0=host2 slot=0:*
<br>
rank 2=host4 slot=1-2
<br>
rank 3=host3 slot=0:1,1:0-2
<br>
<p># mpirun -np 2 -hosfile hostfile -mca rmaps_rankfile_path rankfile ./app
<br>
<p><p>Explanation:
<br>
rank 1 will be bounded to host1, socket1 core0 and socket1 core1
<br>
rank 0 will be bounded to host2, socket0, all cores
<br>
rank 2 will be bounded to host4, CPU #1 and CPU #2
<br>
rank 3 will be bounded to host3, socket0 core1, socket1 core0, socket1
<br>
core1, socket1 core2.
<br>
<p><p>Important!!!
<br>
* There is a user's responsibility to provide the correct number of CPU,
<br>
Socket or Core to be bind to. 
<br>
* Also it's user's responsibility to provide correct hostname.
<br>
* There are machines with not sequential socket numbering.
<br>
* use cat /proc/cpuinfo to check CPU, socket and core numbering on your
<br>
machine.
<br>
* Example:
<br>
<p>processor       : 3			/*  CPU number */
<br>
vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 15
<br>
model name      : Intel(R) Xeon(R) CPU            5110  @ 1.60GHz
<br>
stepping        : 6
<br>
cpu MHz         : 1595.957
<br>
cache size      : 4096 KB
<br>
physical id     : 3			/* Socket id */
<br>
siblings        : 2
<br>
core id         : 1			/* Core id */
<br>
cpu cores       : 2
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 10
<br>
wp              : yes
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
<br>
mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall
<br>
nx lm constant_tsc pni monitor ds_cpl vmx tm2 cx16 xtpr dca lahf_lm
<br>
bogomips        : 3192.10
<br>
clflush size    : 64
<br>
cache_alignment : 64
<br>
address sizes   : 36 bits physical, 48 bits virtual
<br>
power management:
<br>
<p><p>Best Regards,
<br>
Lenny.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3305.php">Brad Benton: "[OMPI devel] Plan for merging latest ORTE into the trunk"</a>
<li><strong>Previous message:</strong> <a href="3303.php">Sharon Melamed: "Re: [OMPI devel] plpa"</a>
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
