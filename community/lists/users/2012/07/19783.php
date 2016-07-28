<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 17 16:59:10 2012" -->
<!-- isoreceived="20120717205910" -->
<!-- sent="Tue, 17 Jul 2012 14:59:54 -0600" -->
<!-- isosent="20120717205954" -->
<!-- name="Anne M. Hammond" -->
<!-- email="hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="E17E547F-8A7F-40E0-AD12-1C8F5A09355C_at_txcorp.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="697F25A3-0920-4D4B-A2E0-46B841C0577D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2<br>
<strong>From:</strong> Anne M. Hammond (<em>hammond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-17 16:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Previous message:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19787.php">Jeff Squyres: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19787.php">Jeff Squyres: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I ran the command: 
<br>
<p>mpirun --slot-list 0-3 -np 4 --report-bindings $EXECUTABLE:
<br>
<p>and this is the output of standard error:
<br>
<p>[node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],0] to slot_list 0-3
<br>
[node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],1] to slot_list 0-3
<br>
[node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],2] to slot_list 0-3
<br>
[node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],3] to slot_list 0-3
<br>
<p>top shows the first 3 cores are bound:
<br>
<p>top - 11:17:06 up 35 days,  1:03,  2 users,  load average: 3.15, 1.15, 0.41
<br>
Tasks: 453 total,   6 running, 446 sleeping,   1 stopped,   0 zombie
<br>
Cpu0  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu1  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu2  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu3  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu4  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu5  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu6  :  0.0%us,  0.3%sy,  0.0%ni, 99.7%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Cpu7  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
<br>
Mem:   8059116k total,  1577220k used,  6481896k free,    62020k buffers
<br>
Swap: 16787916k total,    61108k used, 16726808k free,   718036k cached
<br>
<p><p>For a multinode job, rankfile is needed:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3</a>
<br>
<p>Appreciate the suggestions and solution.
<br>
<p><p><p>On Jul 16, 2012, at 5:08 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Or you could just do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --slot-list 0-3 -np 4 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will put the four procs on the cpu numbers 0-3, which should all be on the first socket
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2012, at 3:23 PM, Dominik Goeddeke wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in the &quot;old&quot; 1.4.x and 1.5.x, I achieved this by using rankfiles (see FAQ), and it worked very well. With these versions, --byslot etc. didn't work for me, I always needed the rankfiles. I haven't tried the overhauled &quot;convenience wrappers&quot; in 1.6 that you are using for this feature yet, but I see no reason why the &quot;old&quot; way should not work, although it requires some shell magic if rankfiles are to be generated automatically from e.g. PBS or SLURM node lists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dominik
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 07/17/2012 12:13 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are 2 physical processors, each with 4 cores (no hyperthreading).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to instruct openmpi to run only on the first processor, using 4 cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hammond_at_node48 ~]$ cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor : 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core id : 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apicid : 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial apicid : 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bogomips : 4623.18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2012, at 4:09 PM, Elken, Tom wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anne,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help those trying to answer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Tom
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Monday, July 16, 2012 2:47 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I gather there are two sockets on this node? So the second cmd line is equivalent
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to leaving &quot;num-sockets&quot; off of the cmd line?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I haven't tried what you are doing, so it is quite possible this is a bug.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Built the latest snapshot.  Still getting an error when trying to run
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on only one socket (see below):  Is there a workaround?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---- An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bind an MPI process to a unique processor.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---- mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Node: node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hostname node65.cl.corp.com node65.cl.corp.com node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; node65.cl.corp.com
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff is at the MPI Forum this week, so his answers will be delayed. Last I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mike
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;                 hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev2">&gt;&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
</span><br>
<span class="quotelev2">&gt;&gt; Institut f&#252;r Angewandte Mathematik (LS III)
</span><br>
<span class="quotelev2">&gt;&gt; Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my old-fashioned computer and not from a mobile device.
</span><br>
<span class="quotelev2">&gt;&gt; I proudly boycott 24/7 availability.
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
<p>Anne M. Hammond - Systems / Network Administration - Tech-X Corp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hammond_at_txcorp.com 720-974-1840
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19783/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19784.php">Hongsheng Zhao: "[OMPI users] OMP_NUM_THREADS and MKL_NUM_THREADS."</a>
<li><strong>Previous message:</strong> <a href="19782.php">Maginot Junior: "Re: [OMPI users] Simple Doubt about MPI_Gather in C"</a>
<li><strong>In reply to:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19787.php">Jeff Squyres: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19787.php">Jeff Squyres: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
