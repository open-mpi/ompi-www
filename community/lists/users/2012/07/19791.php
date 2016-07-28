<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 18 10:56:14 2012" -->
<!-- isoreceived="20120718145614" -->
<!-- sent="Wed, 18 Jul 2012 14:56:10 +0000" -->
<!-- isosent="20120718145610" -->
<!-- name="Kumar, Sudhir" -->
<!-- email="kums_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="8A9547392E2EB443894AF275470DF5E31A32423D_at_hou150w8xmbx02.hou150.chevrontexaco.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AEB67BF5-6246-4C71-AD23-1D6F0B4FFB77_at_open-mpi.org" -->
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
<strong>From:</strong> Kumar, Sudhir (<em>kums_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-18 10:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19792.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19790.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>In reply to:</strong> <a href="19788.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Just wondering if Fortran90 bindings are available for OpemMPI 1.6 for windows
<br>
Thanks
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Wednesday, July 18, 2012 9:52 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
<br>
<p><p>On Jul 18, 2012, at 5:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for jumping in late -- as Ralph indicated, I'm at the Forum meeting this week, and that always introduces latency in to my mail replies...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. We're working on an issue with Open MPI behaving badly when running out of OpenFabrics registered memory.  This issue is somewhat forced because recent versions of OFED have artificially constrained the amount of registered memory available (e.g., in some cases, the system may default to only allowing 2GB of RAM being registrable, regardless of how much physical RAM you have).  This is the Big Issue we want to get fixed &quot;well enough&quot; before releasing 1.6.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Note that Open MPI doesn't bind processes unless you &quot;--bind-to-core&quot; (or the like).  The OS *usually* does a good job of keeping the processes where you want them, but you might want to use &quot;--bind-to-&lt;foo&gt;&quot; if you want guarantees.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. So do we have a bug in --num-sockets not working properly?
</span><br>
<p>It was never intended to be used this way - it was intended for systems where we couldn't detect the number of sockets. Perhaps something we should remove as the hwloc import option supersedes it? The returned error is puzzling in that no binding was being requested, but may reflect the system being confused as to the actual number of sockets in the node.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that in the nightly 1.6.x tarballs, you should be able to mpirun --report-bindings and get a prettyprint description of where processes ended up.  Specifically, 1.6.1's --report-bindings gives a much better message than it did in 1.6.0:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % mpirun --np 2 --bind-to-core --report-bindings uptime
</span><br>
<span class="quotelev1">&gt; [svbu-mpi059:13523] MCW rank 0 bound to socket 0[core 0]: [B . . . . . . .][. . . . . . . .]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi059:13523] MCW rank 1 bound to socket 0[core 1]: [. B . . . . . .][. . . . . . . .]
</span><br>
<span class="quotelev1">&gt; 05:25:28 up 11 days, 19:18,  1 user,  load average: 0.14, 0.05, 0.06
</span><br>
<span class="quotelev1">&gt; 05:25:28 up 11 days, 19:18,  1 user,  load average: 0.14, 0.05, 0.06
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the Open MPI extension OMPI_Affinity_str(3) man page for more information on the above output message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And 1.7's message will be better, because it will also show hyperthreads:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; % mpirun --np 2 --bind-to-core --report-bindings uptime
</span><br>
<span class="quotelev1">&gt; [svbu-mpi059:13589] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svbu-mpi059:13589] MCW rank 1 bound to socket 0[core 1[hwt 0-1]]: [../BB/../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; 05:27:54 up 11 days, 19:21,  1 user,  load average: 0.02, 0.04, 0.05
</span><br>
<span class="quotelev1">&gt; 05:27:54 up 11 days, 19:21,  1 user,  load average: 0.02, 0.04, 0.05
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2012, at 3:59 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!  I ran the command: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --slot-list 0-3 -np 4 --report-bindings $EXECUTABLE:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and this is the output of standard error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],0] to slot_list 0-3
</span><br>
<span class="quotelev2">&gt;&gt; [node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],1] to slot_list 0-3
</span><br>
<span class="quotelev2">&gt;&gt; [node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],2] to slot_list 0-3
</span><br>
<span class="quotelev2">&gt;&gt; [node50.cl.corp.com:15473] [[45030,0],0] odls:default:fork binding child [[45030,1],3] to slot_list 0-3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; top shows the first 3 cores are bound:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; top - 11:17:06 up 35 days,  1:03,  2 users,  load average: 3.15, 1.15, 0.41
</span><br>
<span class="quotelev2">&gt;&gt; Tasks: 453 total,   6 running, 446 sleeping,   1 stopped,   0 zombie
</span><br>
<span class="quotelev2">&gt;&gt; Cpu0  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu1  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu2  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu3  :100.0%us,  0.0%sy,  0.0%ni,  0.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu4  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu5  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu6  :  0.0%us,  0.3%sy,  0.0%ni, 99.7%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Cpu7  :  0.0%us,  0.0%sy,  0.0%ni,100.0%id,  0.0%wa,  0.0%hi,  0.0%si,  0.0%st
</span><br>
<span class="quotelev2">&gt;&gt; Mem:   8059116k total,  1577220k used,  6481896k free,    62020k buffers
</span><br>
<span class="quotelev2">&gt;&gt; Swap: 16787916k total,    61108k used, 16726808k free,   718036k cached
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For a multinode job, rankfile is needed:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.3</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate the suggestions and solution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2012, at 5:08 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or you could just do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --slot-list 0-3 -np 4 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That will put the four procs on the cpu numbers 0-3, which should all be on the first socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2012, at 3:23 PM, Dominik Goeddeke wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the &quot;old&quot; 1.4.x and 1.5.x, I achieved this by using rankfiles (see FAQ), and it worked very well. With these versions, --byslot etc. didn't work for me, I always needed the rankfiles. I haven't tried the overhauled &quot;convenience wrappers&quot; in 1.6 that you are using for this feature yet, but I see no reason why the &quot;old&quot; way should not work, although it requires some shell magic if rankfiles are to be generated automatically from e.g. PBS or SLURM node lists.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dominik
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 07/17/2012 12:13 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There are 2 physical processors, each with 4 cores (no hyperthreading).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I want to instruct openmpi to run only on the first processor, using 4 cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [hammond_at_node48 ~]$ cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.38
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.19
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processor : 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vendor_id : AuthenticAMD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family : 16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name : Quad-Core AMD Opteron(tm) Processor 2376
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stepping : 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu MHz : 2311.694
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache size : 512 KB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physical id : 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; siblings : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; core id : 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; apicid : 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial apicid : 7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpuid level : 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wp : yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bogomips : 4623.18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TLB size : 1024 4K pages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address sizes : 48 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; power management: ts ttp tm stc 100mhzsteps hwpstate
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 4:09 PM, Elken, Tom wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Anne,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help those trying to answer.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Tom
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, July 16, 2012 2:47 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I gather there are two sockets on this node? So the second cmd line is equivalent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to leaving &quot;num-sockets&quot; off of the cmd line?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I haven't tried what you are doing, so it is quite possible this is a bug.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Built the latest snapshot.  Still getting an error when trying to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on only one socket (see below):  Is there a workaround?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---- An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bind an MPI process to a unique processor.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---- mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Node: node65.cl.corp.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hostname node65.cl.corp.com node65.cl.corp.com node65.cl.corp.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; node65.cl.corp.com
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [hammond_at_node65 bin]$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff is at the MPI Forum this week, so his answers will be delayed. Last I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mike
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                  hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jun.-Prof. Dr. Dominik G&#246;ddeke
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hardware-orientierte Numerik f&#252;r gro&#223;e Systeme
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Institut f&#252;r Angewandte Mathematik (LS III)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fakult&#228;t f&#252;r Mathematik, Technische Universit&#228;t Dortmund
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.mathematik.tu-dortmund.de/~goeddeke">http://www.mathematik.tu-dortmund.de/~goeddeke</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel. +49-(0)231-755-7218  Fax +49-(0)231-755-5933
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent from my old-fashioned computer and not from a mobile device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I proudly boycott 24/7 availability.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anne M. Hammond - Systems / Network Administration - Tech-X Corp
</span><br>
<span class="quotelev2">&gt;&gt;                  hammond_at_txcorp.com 720-974-1840
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19792.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19790.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>In reply to:</strong> <a href="19788.php">Ralph Castain: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
