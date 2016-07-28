<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 18:23:59 2012" -->
<!-- isoreceived="20120716222359" -->
<!-- sent="Tue, 17 Jul 2012 00:23:50 +0200" -->
<!-- isosent="20120716222350" -->
<!-- name="Dominik Goeddeke" -->
<!-- email="dominik.goeddeke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="50049476.5050702_at_math.tu-dortmund.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EDFA87CB-EEC8-46C4-BFCB-5D2CFBCA048B_at_txcorp.com" -->
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
<strong>From:</strong> Dominik Goeddeke (<em>dominik.goeddeke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-16 18:23:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
in the &quot;old&quot; 1.4.x and 1.5.x, I achieved this by using rankfiles (see 
<br>
FAQ), and it worked very well. With these versions, --byslot etc. didn't 
<br>
work for me, I always needed the rankfiles. I haven't tried the 
<br>
overhauled &quot;convenience wrappers&quot; in 1.6 that you are using for this 
<br>
feature yet, but I see no reason why the &quot;old&quot; way should not work, 
<br>
although it requires some shell magic if rankfiles are to be generated 
<br>
automatically from e.g. PBS or SLURM node lists.
<br>
<p>Dominik
<br>
<p>On 07/17/2012 12:13 AM, Anne M. Hammond wrote:
<br>
<span class="quotelev1">&gt; There are 2 physical processors, each with 4 cores (no hyperthreading).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to instruct openmpi to run only on the first processor, using 4 
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hammond_at_node48 ~]$ cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; processor: 0
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 0
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 0
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 0
</span><br>
<span class="quotelev1">&gt; initial apicid: 0
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.38
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 1
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 0
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 1
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 1
</span><br>
<span class="quotelev1">&gt; initial apicid: 1
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.17
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 2
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 0
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 2
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 2
</span><br>
<span class="quotelev1">&gt; initial apicid: 2
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.19
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 3
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 0
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 3
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 3
</span><br>
<span class="quotelev1">&gt; initial apicid: 3
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.16
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 4
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 1
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 0
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 4
</span><br>
<span class="quotelev1">&gt; initial apicid: 4
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.16
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 5
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 1
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 1
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 5
</span><br>
<span class="quotelev1">&gt; initial apicid: 5
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.16
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 6
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 1
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 2
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 6
</span><br>
<span class="quotelev1">&gt; initial apicid: 6
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.17
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor: 7
</span><br>
<span class="quotelev1">&gt; vendor_id: AuthenticAMD
</span><br>
<span class="quotelev1">&gt; cpu family: 16
</span><br>
<span class="quotelev1">&gt; model: 4
</span><br>
<span class="quotelev1">&gt; model name: Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt; stepping: 2
</span><br>
<span class="quotelev1">&gt; cpu MHz: 2311.694
</span><br>
<span class="quotelev1">&gt; cache size: 512 KB
</span><br>
<span class="quotelev1">&gt; physical id: 1
</span><br>
<span class="quotelev1">&gt; siblings: 4
</span><br>
<span class="quotelev1">&gt; core id: 3
</span><br>
<span class="quotelev1">&gt; cpu cores: 4
</span><br>
<span class="quotelev1">&gt; apicid: 7
</span><br>
<span class="quotelev1">&gt; initial apicid: 7
</span><br>
<span class="quotelev1">&gt; fpu: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception: yes
</span><br>
<span class="quotelev1">&gt; cpuid level: 5
</span><br>
<span class="quotelev1">&gt; wp: yes
</span><br>
<span class="quotelev1">&gt; flags: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat 
</span><br>
<span class="quotelev1">&gt; pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
</span><br>
<span class="quotelev1">&gt; pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc 
</span><br>
<span class="quotelev1">&gt; extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic 
</span><br>
<span class="quotelev1">&gt; cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt 
</span><br>
<span class="quotelev1">&gt; lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt; bogomips: 4623.18
</span><br>
<span class="quotelev1">&gt; TLB size: 1024 4K pages
</span><br>
<span class="quotelev1">&gt; clflush size: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment: 64
</span><br>
<span class="quotelev1">&gt; address sizes: 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2012, at 4:09 PM, Elken, Tom wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anne,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help 
</span><br>
<span class="quotelev2">&gt;&gt; those trying to answer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Tom
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, July 16, 2012 2:47 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I gather there are two sockets on this node? So the second cmd line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is equivalent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to leaving &quot;num-sockets&quot; off of the cmd line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't tried what you are doing, so it is quite possible this is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Built the latest snapshot.  Still getting an error when trying to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on only one socket (see below):  Is there a workaround?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bind an MPI process to a unique processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node: node65.cl.corp.com &lt;<a href="http://node65.cl.corp.com">http://node65.cl.corp.com</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostname node65.cl.corp.com &lt;<a href="http://node65.cl.corp.com">http://node65.cl.corp.com</a>&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node65.cl.corp.com &lt;<a href="http://node65.cl.corp.com">http://node65.cl.corp.com</a>&gt; node65.cl.corp.com 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://node65.cl.corp.com">http://node65.cl.corp.com</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node65.cl.corp.com &lt;<a href="http://node65.cl.corp.com">http://node65.cl.corp.com</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff is at the MPI Forum this week, so his answers will be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; delayed. Last I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be available ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mike
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev1">&gt;                   hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jun.-Prof. Dr. Dominik G&#246;ddeke
Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
Institut f&#252;r Angewandte Mathematik (LS III)
Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
<a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
--
Sent from my old-fashioned computer and not from a mobile device.
I proudly boycott 24/7 availability.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19775.php">Anne M. Hammond: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19777.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
