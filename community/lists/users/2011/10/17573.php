<?
$subject_val = "Re: [OMPI users] ERROR: too many MPI processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 08:19:14 2011" -->
<!-- isoreceived="20111019121914" -->
<!-- sent="Wed, 19 Oct 2011 14:19:05 +0200" -->
<!-- isosent="20111019121905" -->
<!-- name="Mathieu Westphal" -->
<!-- email="mathieu.westphal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: too many MPI processes" -->
<!-- id="4E9EC039.9060802_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F30202F7-73AE-44CB-B263-C5D9D4BD9B5F_at_open-mpi.org" -->
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
<strong>From:</strong> Mathieu Westphal (<em>mathieu.westphal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 08:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>In reply to:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Right !
<br>
<p>that's the problem when you work on someone else code.
<br>
<p>Thanks
<br>
<p>MW
<br>
Le 19/10/2011 14:08, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I've never seen that error output before - is it coming from your program? It doesn't match anything from OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2011, at 6:04 AM, Mathieu Westphal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm extending a code currently working well on a server with some quadri-core.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But for debugging purpose i want to execute it on my local computer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i use the command :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 6  -host local ./execFile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i get an :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i've tried other mpi programs, and the result is :
</span><br>
<span class="quotelev2">&gt;&gt; if i want more than 5 mpi processes with -np , i get one error for each one over 5, for example :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 9  -host local ./execFile
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev2">&gt;&gt; ERROR: too many MPI processes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess it correspond to each mpi processes who cannot be launched because of some kind of limitation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i cannot find anything about it in documentation or on google.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MW
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS :
</span><br>
<span class="quotelev2">&gt;&gt; here is my /proc/cpuinfobash-4.2$ cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt;&gt; processor    : 0
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family    : 6
</span><br>
<span class="quotelev2">&gt;&gt; model        : 23
</span><br>
<span class="quotelev2">&gt;&gt; model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping    : 10
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz        : 1596.000
</span><br>
<span class="quotelev2">&gt;&gt; cache size    : 2048 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id    : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings    : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id        : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores    : 2
</span><br>
<span class="quotelev2">&gt;&gt; apicid        : 0
</span><br>
<span class="quotelev2">&gt;&gt; initial apicid    : 0
</span><br>
<span class="quotelev2">&gt;&gt; fpu        : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception    : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level    : 13
</span><br>
<span class="quotelev2">&gt;&gt; wp        : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts tpr_shadow vnmi flexpriority
</span><br>
<span class="quotelev2">&gt;&gt; bogomips    : 5851.63
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment    : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes    : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; processor    : 1
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id    : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family    : 6
</span><br>
<span class="quotelev2">&gt;&gt; model        : 23
</span><br>
<span class="quotelev2">&gt;&gt; model name    : Pentium(R) Dual-Core  CPU      E6500  @ 2.93GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping    : 10
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz        : 1596.000
</span><br>
<span class="quotelev2">&gt;&gt; cache size    : 2048 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id    : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings    : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id        : 1
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores    : 2
</span><br>
<span class="quotelev2">&gt;&gt; apicid        : 1
</span><br>
<span class="quotelev2">&gt;&gt; initial apicid    : 1
</span><br>
<span class="quotelev2">&gt;&gt; fpu        : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception    : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level    : 13
</span><br>
<span class="quotelev2">&gt;&gt; wp        : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags        : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe syscall nx lm constant_tsc arch_perfmon pebs bts rep_good nopl aperfmperf pni dtes64 monitor ds_cpl vmx est tm2 ssse3 cx16 xtpr pdcm xsave lahf_lm dts tpr_shadow vnmi flexpriority
</span><br>
<span class="quotelev2">&gt;&gt; bogomips    : 5851.69
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment    : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes    : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17574.php">Jorge Jaramillo: "[OMPI users] Application in a cluster"</a>
<li><strong>Previous message:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
<li><strong>In reply to:</strong> <a href="17572.php">Ralph Castain: "Re: [OMPI users] ERROR: too many MPI processes"</a>
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
