<?
$subject_val = "Re: [OMPI users] ERROR: too many MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 08:09:02 2011" -->
<!-- isoreceived="20111019120902" -->
<!-- sent="Wed, 19 Oct 2011 06:08:54 -0600" -->
<!-- isosent="20111019120854" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: too many MPI processes" -->
<!-- id="F30202F7-73AE-44CB-B263-C5D9D4BD9B5F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E9EBCCE.7050806_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: too many MPI processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 08:08:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<li><strong>In reply to:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Reply:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've never seen that error output before - is it coming from your program? It doesn't match anything from OMPI.
<br>
<p>On Oct 19, 2011, at 6:04 AM, Mathieu Westphal wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm extending a code currently working well on a server with some quadri-core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But for debugging purpose i want to execute it on my local computer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i use the command :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 6  -host local ./execFile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i get an :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i've tried other mpi programs, and the result is :
</span><br>
<span class="quotelev1">&gt; if i want more than 5 mpi processes with -np , i get one error for each one over 5, for example :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 9  -host local ./execFile
</span><br>
<span class="quotelev1">&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev1">&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev1">&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev1">&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess it correspond to each mpi processes who cannot be launched because of some kind of limitation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But i cannot find anything about it in documentation or on google.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MW
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS :
</span><br>
<span class="quotelev1">&gt; here is my /proc/cpuinfobash-4.2$ cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; processor    : 0
</span><br>
<span class="quotelev1">&gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family    : 6
</span><br>
<span class="quotelev1">&gt; model        : 23
</span><br>
<span class="quotelev1">&gt; model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
</span><br>
<span class="quotelev1">&gt; stepping    : 10
</span><br>
<span class="quotelev1">&gt; cpu MHz        : 1596.000
</span><br>
<span class="quotelev1">&gt; cache size    : 2048 KB
</span><br>
<span class="quotelev1">&gt; physical id    : 0
</span><br>
<span class="quotelev1">&gt; siblings    : 2
</span><br>
<span class="quotelev1">&gt; core id        : 0
</span><br>
<span class="quotelev1">&gt; cpu cores    : 2
</span><br>
<span class="quotelev1">&gt; apicid        : 0
</span><br>
<span class="quotelev1">&gt; initial apicid    : 0
</span><br>
<span class="quotelev1">&gt; fpu        : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception    : yes
</span><br>
<span class="quotelev1">&gt; cpuid level    : 13
</span><br>
<span class="quotelev1">&gt; wp        : yes
</span><br>
<span class="quotelev1">&gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts tpr_shadow vnmi flexpriority
</span><br>
<span class="quotelev1">&gt; bogomips    : 5851.63
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment    : 64
</span><br>
<span class="quotelev1">&gt; address sizes    : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; processor    : 1
</span><br>
<span class="quotelev1">&gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family    : 6
</span><br>
<span class="quotelev1">&gt; model        : 23
</span><br>
<span class="quotelev1">&gt; model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
</span><br>
<span class="quotelev1">&gt; stepping    : 10
</span><br>
<span class="quotelev1">&gt; cpu MHz        : 1596.000
</span><br>
<span class="quotelev1">&gt; cache size    : 2048 KB
</span><br>
<span class="quotelev1">&gt; physical id    : 0
</span><br>
<span class="quotelev1">&gt; siblings    : 2
</span><br>
<span class="quotelev1">&gt; core id        : 1
</span><br>
<span class="quotelev1">&gt; cpu cores    : 2
</span><br>
<span class="quotelev1">&gt; apicid        : 1
</span><br>
<span class="quotelev1">&gt; initial apicid    : 1
</span><br>
<span class="quotelev1">&gt; fpu        : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception    : yes
</span><br>
<span class="quotelev1">&gt; cpuid level    : 13
</span><br>
<span class="quotelev1">&gt; wp        : yes
</span><br>
<span class="quotelev1">&gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts tpr_shadow vnmi flexpriority
</span><br>
<span class="quotelev1">&gt; bogomips    : 5851.69
</span><br>
<span class="quotelev1">&gt; clflush size    : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment    : 64
</span><br>
<span class="quotelev1">&gt; address sizes    : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Previous message:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<li><strong>In reply to:</strong> <a href="17571.php">Mathieu Westphal: "[OMPI users] ERROR: too many MPI processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>Reply:</strong> <a href="17573.php">Mathieu Westphal: "Re: [OMPI users] ERROR: too many MPI processes"</a>
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
