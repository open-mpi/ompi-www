<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 21:49:19 2009" -->
<!-- isoreceived="20090505014919" -->
<!-- sent="Mon, 04 May 2009 21:49:10 -0400" -->
<!-- isosent="20090505014910" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="49FF9B16.4060308_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b4f9bf870905041300o6955e9acr6ac4660b26370d7b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 21:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9205.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and Geffroy
<br>
<p>I've been following this thread with a lot of interest.
<br>
Setting processor affinity and pin the processes to cores
<br>
was next on my &quot;TODO&quot; list, and I just started it.
<br>
<p>I tried to use three different versions of rankfile,
<br>
with OpenMPI 1.3.1 on a dual-socket quad-core
<br>
Opteron machine.
<br>
In all cases I've got errors similar to Geoffroy's.
<br>
<p>The mpiexec command line is:
<br>
<p>${MPIEXEC} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-prefix ${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np ${NP} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-rf my_rankfile \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl openib,sm,self \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca mpi_leave_pinned 0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca paffinity_base_verbose 5 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xhpl
<br>
<p><p>I use Torque, and I generate the rankfile programatically based
<br>
on the $PBS_NODEFILE.
<br>
<p>Here are three rank files I used:
<br>
<p>#1 rankfile (trying to associate slot=physical_id:core_id from 
<br>
/proc/cpuinfo)
<br>
[gus_at_monk hpl]$ more my_rankfile
<br>
rank 	   0=node24 	 slot=0:0
<br>
rank 	   1=node24 	 slot=0:1
<br>
rank 	   2=node24 	 slot=0:2
<br>
rank 	   3=node24 	 slot=0:3
<br>
rank 	   4=node24 	 slot=1:0
<br>
rank 	   5=node24 	 slot=1:1
<br>
rank 	   6=node24 	 slot=1:2
<br>
rank 	   7=node24 	 slot=1:3
<br>
<p><p>#2 rankfile (trying to associaate slot=processor from /proc/cpuinfo)
<br>
[gus_at_monk hpl]$ more my_rankfile
<br>
rank 	   0=node24 	 slot=0
<br>
rank 	   1=node24 	 slot=1
<br>
rank 	   2=node24 	 slot=2
<br>
rank 	   3=node24 	 slot=3
<br>
rank 	   4=node24 	 slot=4
<br>
rank 	   5=node24 	 slot=5
<br>
rank 	   6=node24 	 slot=6
<br>
rank 	   7=node24 	 slot=7
<br>
<p><p>#3 rankfile (Similar to #1 but with &quot;p&quot; that the FAQs say stands for 
<br>
&quot;physical&quot;)
<br>
[gus_at_monk hpl]$ more my_rankfile
<br>
rank 	   0=node24 	 slot=p0:0
<br>
rank 	   1=node24 	 slot=p0:1
<br>
rank 	   2=node24 	 slot=p0:2
<br>
rank 	   3=node24 	 slot=p0:3
<br>
rank 	   4=node24 	 slot=p1:0
<br>
rank 	   5=node24 	 slot=p1:1
<br>
rank 	   6=node24 	 slot=p1:2
<br>
rank 	   7=node24 	 slot=p1:3
<br>
<p>***
<br>
<p>In all cases I get this error (just like Geoffroy):
<br>
<p>******
<br>
<p>Rankfile claimed host node24 that was not allocated or oversubscribed 
<br>
it's slots
<br>
:
<br>
<p>--------------------------------------------------------------------------
<br>
[node24.cluster:23762] [[59468,0],0] ORTE_ERROR_LOG: Bad parameter in 
<br>
file ../..
<br>
/../../../orte/mca/rmaps/rank_file/rmaps_rank_file.c at line 108
<br>
[node24.cluster:23762] [[59468,0],0] ORTE_ERROR_LOG: Bad parameter in 
<br>
file ../..
<br>
/../../orte/mca/rmaps/base/rmaps_base_map_job.c at line 87
<br>
[node24.cluster:23762] [[59468,0],0] ORTE_ERROR_LOG: Bad parameter in 
<br>
file ../..
<br>
/../../orte/mca/plm/base/plm_base_launch_support.c at line 77
<br>
[node24.cluster:23762] [[59468,0],0] ORTE_ERROR_LOG: Bad parameter in 
<br>
file ../..
<br>
/../../../orte/mca/plm/tm/plm_tm_module.c at line 167
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>********
<br>
<p>I confess I am a bit confused about the nomenclature.
<br>
<p>What do you call CPU in the rankfile context?
<br>
How about slot, core, and socket?
<br>
<p>Linux keeps information about these items in /proc/cpuinfo,
<br>
in  /sys/devices/system/cpu,
<br>
and in /sys/devices/system/nodes.
<br>
However, the nomenclature is different from OpenMPI.
<br>
<p>How can one use that information to build a correct rankfile?
<br>
I read the mpiexec man page and the FAQs but I am still confused.
<br>
<p>Questions:
<br>
1) In the rankfile notation slot=cpu_num, is cpu-num the same as 
<br>
&quot;processor&quot; in /proc/cpuinfo, or is it the same as &quot;physical id&quot; in 
<br>
/proc/cpuinfo?
<br>
<p>2) In the rankfile notation slot=socket_num:core_num, is socket_num the
<br>
same as &quot;physical id&quot; in /proc/cpuinfo, or something else?
<br>
<p>3) Is core_num in the rankfile notation the same as &quot;core id&quot; or the 
<br>
same as &quot;processor&quot; in /proc/cpuinfo?
<br>
Or is it yet another thing?
<br>
<p>Geoffroy sent the /proc/cpuinfo of his
<br>
Intel dual-socket dual-core machine.
<br>
I enclose the one from my AMD dual-socket quad-core below.
<br>
The architectures (non-NUMA vs. NUMA) are different and so are the
<br>
numbering schemes:
<br>
<p>Geoffrey's numbers go like this (each column match a single core):
<br>
processor---0-1-2-3
<br>
physical-id-0-3-0-3  (alternating physical IDs)
<br>
core--------0-0-1-1
<br>
<p>Whereas my numbers go like this:
<br>
processor---0-1-2-3-4-5-6-7
<br>
physical-id-0-0-0-0-1-1-1-1 (physical IDs don't alternate)
<br>
core--------0-1-2-3-0-1-2-3
<br>
<p><p>So, first I think a clarification about the nomenclature would
<br>
really help us build meaningful rankfiles.
<br>
I suggest to relate the names in rankfile to those in /proc/cpuinfo,
<br>
if possible (or to /sys/devices/system/cpu or /sys/devices/system/nodes).
<br>
(Other OSs may use different names though.)
<br>
The tables above show that things can get confusing to the user,
<br>
if the connection between the two is not made.
<br>
<p>Second, as Ralph pointed out, there may be a bug to fix as well.
<br>
<p>****
<br>
<p>It would be great to have the rankfile functionality working.
<br>
However, the good news is that just setting processor affinity
<br>
works fine.
<br>
This is OK for now, since I am using the whole node.
<br>
The mpirun command line I used is :
<br>
<p>${MPIEXEC} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-prefix ${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np ${NP} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca mpi_paffinity_alone 1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca btl openib,sm,self \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca mpi_leave_pinned 0 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca paffinity_base_verbose 5 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xhpl
<br>
<p><p>Thank you,
<br>
Gus Correa
<br>
<p>################
<br>
<p>$ cat /proc/cpuinfo
<br>
processor	: 0
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 0
<br>
siblings	: 4
<br>
core id		: 0
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4625.83
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 1
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 0
<br>
siblings	: 4
<br>
core id		: 1
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4623.16
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 2
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 0
<br>
siblings	: 4
<br>
core id		: 2
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4623.16
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 3
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 0
<br>
siblings	: 4
<br>
core id		: 3
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4622.82
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 4
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 1
<br>
siblings	: 4
<br>
core id		: 0
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4623.15
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 5
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 1
<br>
siblings	: 4
<br>
core id		: 1
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4623.16
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 6
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 1
<br>
siblings	: 4
<br>
core id		: 2
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4622.83
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p>processor	: 7
<br>
vendor_id	: AuthenticAMD
<br>
cpu family	: 16
<br>
model		: 4
<br>
model name	: Quad-Core AMD Opteron(tm) Processor 2376
<br>
stepping	: 2
<br>
cpu MHz		: 800.000
<br>
cache size	: 512 KB
<br>
physical id	: 1
<br>
siblings	: 4
<br>
core id		: 3
<br>
cpu cores	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
<br>
pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt 
<br>
pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc pni cx16 popcnt lahf_lm 
<br>
cmp_legacy svm extapic cr8_legacy altmovcr8 abm sse4a misalignsse 
<br>
3dnowprefetch osvw
<br>
bogomips	: 4623.16
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate [8]
<br>
<p><p><p><p>Geoffroy Pignot wrote:
<br>
<span class="quotelev1">&gt; Hi Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your extra tests.  Before leaving , I just pointed out a 
</span><br>
<span class="quotelev1">&gt; problem coming from running plpa across different rh distribs (&lt;=&gt; 
</span><br>
<span class="quotelev1">&gt; different Linux kernels). Indeed, I configure and compile openmpi on 
</span><br>
<span class="quotelev1">&gt; rhel4 , then I run on rhel5. I think my problem comes from this 
</span><br>
<span class="quotelev1">&gt; approximation. I'll do few more tests tomorrow morning (France) and keep 
</span><br>
<span class="quotelev1">&gt; you inform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Geoffroy
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Message: 2
</span><br>
<span class="quotelev1">&gt;     Date: Mon, 4 May 2009 13:34:40 -0600
</span><br>
<span class="quotelev1">&gt;     From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt;     To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Message-ID:
</span><br>
<span class="quotelev1">&gt;            &lt;71d2d8cc0905041234m76eb5a9dx57a773997779db73_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:71d2d8cc0905041234m76eb5a9dx57a773997779db73_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hmmm...I'm afraid I can't replicate the problem. All seems to be working
</span><br>
<span class="quotelev1">&gt;     just fine on the RHEL systems available to me. The procs indeed bind
</span><br>
<span class="quotelev1">&gt;     to the
</span><br>
<span class="quotelev1">&gt;     specified processors in every case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     rhc_at_odin ~/trunk]$ cat rankfile
</span><br>
<span class="quotelev1">&gt;     rank 0=odin001 slot=0
</span><br>
<span class="quotelev1">&gt;     rank 1=odin002 slot=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     [rhc_at_odin mpi]$ mpirun -rf ../../../rankfile -n 2
</span><br>
<span class="quotelev1">&gt;     --leave-session-attached
</span><br>
<span class="quotelev1">&gt;     -mca paffinity_base_verbose 5 ./mpi_spin
</span><br>
<span class="quotelev1">&gt;     [odin001.cs.indiana.edu:09297 &lt;<a href="http://odin001.cs.indiana.edu:09297">http://odin001.cs.indiana.edu:09297</a>&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://odin001.cs.indiana.edu:9297/">http://odin001.cs.indiana.edu:9297/</a>&gt;]
</span><br>
<span class="quotelev1">&gt;     paffinity slot assignment: slot_list == 0
</span><br>
<span class="quotelev1">&gt;     [odin001.cs.indiana.edu:09297 &lt;<a href="http://odin001.cs.indiana.edu:09297">http://odin001.cs.indiana.edu:09297</a>&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;<a href="http://odin001.cs.indiana.edu:9297/">http://odin001.cs.indiana.edu:9297/</a>&gt;]
</span><br>
<span class="quotelev1">&gt;     paffinity slot assignment: rank 0 runs on cpu #0 (#0)
</span><br>
<span class="quotelev1">&gt;     [odin002.cs.indiana.edu:13566 &lt;<a href="http://odin002.cs.indiana.edu:13566">http://odin002.cs.indiana.edu:13566</a>&gt;]
</span><br>
<span class="quotelev1">&gt;     paffinity slot assignment: slot_list == 1
</span><br>
<span class="quotelev1">&gt;     [odin002.cs.indiana.edu:13566 &lt;<a href="http://odin002.cs.indiana.edu:13566">http://odin002.cs.indiana.edu:13566</a>&gt;]
</span><br>
<span class="quotelev1">&gt;     paffinity slot assignment: rank 1 runs on cpu
</span><br>
<span class="quotelev1">&gt;     #1 (#1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Suspended
</span><br>
<span class="quotelev1">&gt;     [rhc_at_odin mpi]$ ssh odin001
</span><br>
<span class="quotelev1">&gt;     [rhc_at_odin001 ~]$ ps axo stat,user,psr,pid,pcpu,comm | grep rhc
</span><br>
<span class="quotelev1">&gt;     S    rhc        0  9296  0.0 orted
</span><br>
<span class="quotelev1">&gt;     RLl  rhc        0  9297  100 mpi_spin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     [rhc_at_odin mpi]$ ssh odin002
</span><br>
<span class="quotelev1">&gt;     [rhc_at_odin002 ~]$ ps axo stat,user,psr,pid,pcpu,comm | grep rhc
</span><br>
<span class="quotelev1">&gt;     S    rhc        0 13562  0.0 orted
</span><br>
<span class="quotelev1">&gt;     RLl  rhc        1 13566  102 mpi_spin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Not sure where to go from here...perhaps someone else can spot the
</span><br>
<span class="quotelev1">&gt;     problem?
</span><br>
<span class="quotelev1">&gt;     Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On Mon, May 4, 2009 at 8:28 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt; Unfortunately, I didn't write any of that code - I was just
</span><br>
<span class="quotelev1">&gt;     fixing the
</span><br>
<span class="quotelev2">&gt;      &gt; mapper so it would properly map the procs. From what I can tell,
</span><br>
<span class="quotelev1">&gt;     the proper
</span><br>
<span class="quotelev2">&gt;      &gt; things are happening there.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; I'll have to dig into the code that specifically deals with
</span><br>
<span class="quotelev1">&gt;     parsing the
</span><br>
<span class="quotelev2">&gt;      &gt; results to bind the processes. Afraid that will take awhile
</span><br>
<span class="quotelev1">&gt;     longer - pretty
</span><br>
<span class="quotelev2">&gt;      &gt; dark in that hole.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On Mon, May 4, 2009 at 8:04 AM, Geoffroy Pignot
</span><br>
<span class="quotelev1">&gt;     &lt;geopignot_at_[hidden] &lt;mailto:geopignot_at_[hidden]&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; So, there are no more crashes with my &quot;crazy&quot; mpirun command.
</span><br>
<span class="quotelev1">&gt;     But the
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; paffinity feature seems to be broken. Indeed I am not able to pin my
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; processes.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Simple test with a program using your plpa library :
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% cat hostf
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006 slots=4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% cat rankf
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; rank 0=r011n006 slot=0   ----&gt; bind to CPU 0 , exact ?
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% /tmp/HALMPI/openmpi-1.4a/bin/mpirun --hostfile hostf
</span><br>
<span class="quotelev1">&gt;     --rankfile
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; rankf --wdir /tmp -n 1 a.out
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;  &gt;&gt;&gt; PLPA Number of processors online: 4
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;  &gt;&gt;&gt; PLPA Number of processor sockets: 2
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;  &gt;&gt;&gt; PLPA Socket 0 (ID 0): 2 cores
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;  &gt;&gt;&gt; PLPA Socket 1 (ID 3): 2 cores
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Ctrl+Z
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006%bg
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% ps axo stat,user,psr,pid,pcpu,comm | grep gpignot
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; R+   gpignot    3  9271 97.8 a.out
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; In fact whatever the slot number I put in my rankfile , a.out
</span><br>
<span class="quotelev1">&gt;     always runs
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; on the CPU 3. I was looking for it on CPU 0 accordind to my
</span><br>
<span class="quotelev1">&gt;     cpuinfo file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; (see below)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; The result is the same if I try another syntax (rank 0=r011n006
</span><br>
<span class="quotelev1">&gt;     slot=0:0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; bind to socket 0 - core 0  , exact ? )
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Geoffroy
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; PS: I run on rhel5
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% uname -a
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Linux r011n006 2.6.18-92.1.1NOMAP32.el5 #1 SMP Sat Mar 15
</span><br>
<span class="quotelev1">&gt;     01:46:39 CDT
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; 2008 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; My configure is :
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;  ./configure --prefix=/tmp/openmpi-1.4a
</span><br>
<span class="quotelev1">&gt;     --libdir='${exec_prefix}/lib64'
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; --disable-dlopen --disable-mpi-cxx --enable-heterogeneous
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; r011n006% cat /proc/cpuinfo
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; processor       : 0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; physical id     : 0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; core id         : 0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep
</span><br>
<span class="quotelev1">&gt;     mtrr pge mca
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm
</span><br>
<span class="quotelev1">&gt;     syscall nx lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; bogomips        : 5323.68
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; processor       : 1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; physical id     : 3
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; core id         : 0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep
</span><br>
<span class="quotelev1">&gt;     mtrr pge mca
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm
</span><br>
<span class="quotelev1">&gt;     syscall nx lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; processor       : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; physical id     : 0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; core id         : 1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep
</span><br>
<span class="quotelev1">&gt;     mtrr pge mca
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm
</span><br>
<span class="quotelev1">&gt;     syscall nx lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; bogomips        : 5319.39
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; processor       : 3
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model           : 15
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; stepping        : 6
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; physical id     : 3
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; siblings        : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; core id         : 1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu             : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; wp              : yes
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep
</span><br>
<span class="quotelev1">&gt;     mtrr pge mca
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm
</span><br>
<span class="quotelev1">&gt;     syscall nx lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; power management:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Date: Mon, 4 May 2009 04:45:57 -0600
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Message-ID: &lt;D01D7B16-4B47-46F3-AD41-D1A90B2E4927_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:D01D7B16-4B47-46F3-AD41-D1A90B2E4927_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;        DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; My apologies - I wasn't clear enough. You need a tarball from
</span><br>
<span class="quotelev1">&gt;     r21111
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; or greater...such as:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz</a>
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; HTH
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; On May 4, 2009, at 2:14 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Hi ,
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but
</span><br>
<span class="quotelev1">&gt;     unfortunately my
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; command doesn't work
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; cat rankf:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; cat hostf:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; node1 slots=2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; node2 slots=2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter
</span><br>
<span class="quotelev1">&gt;     in file
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter
</span><br>
<span class="quotelev1">&gt;     in file
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter
</span><br>
<span class="quotelev1">&gt;     in file
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter
</span><br>
<span class="quotelev1">&gt;     in file
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Ralph, could you tell me if my command syntax is correct or
</span><br>
<span class="quotelev1">&gt;     not ? if
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; not, give me the expected one ?
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Regards
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:geopignot_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Thanks again Ralph
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Message: 2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;      
</span><br>
<span class="quotelev1">&gt;      &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; I believe this is fixed now in our development trunk - you can
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; download any
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; tarball starting from last night and give it a try, if you
</span><br>
<span class="quotelev1">&gt;     like. Any
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; feedback would be appreciated.
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Clearly a bug exists in the program. I'll try to take a look
</span><br>
<span class="quotelev1">&gt;     at it
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; (if Lenny
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; doesn't get to it first), but it won't be until later in the
</span><br>
<span class="quotelev1">&gt;     week.
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; I agree with you Ralph , and that 's what I expect from
</span><br>
<span class="quotelev1">&gt;     openmpi but my
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; second example shows that it's not working
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;   r011n002 slots=4
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;   r011n003 slots=4
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;  cat rankfile.0
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;    rank 0=r011n002 slot=0
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;    rank 1=r011n003 slot=1
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; hostname
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; ### CRASHED
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; There may be more information reported by the environment
</span><br>
<span class="quotelev1">&gt;     (see
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; above).
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the
</span><br>
<span class="quotelev1">&gt;     needed
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; libraries on the remote node. You may set your
</span><br>
<span class="quotelev1">&gt;     LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and
</span><br>
<span class="quotelev1">&gt;     this will
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as
</span><br>
<span class="quotelev1">&gt;     to the
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; process
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Message: 4
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;       DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; app_context basis. So the ranks in your rankfile must
</span><br>
<span class="quotelev1">&gt;     correspond to
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Unfortunately, that means you have to count ranks. In your
</span><br>
<span class="quotelev1">&gt;     case, you
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; only have four, so that makes life easier. Your rankfile
</span><br>
<span class="quotelev1">&gt;     would look
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; something like this:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; HTH
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; I agree that my examples are not very clear. What I want to
</span><br>
<span class="quotelev1">&gt;     do is to
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; launch a multiexes application (masters-slaves) and benefit
</span><br>
<span class="quotelev1">&gt;     from the
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; processor affinity.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Could you show me how to convert this command , using -rf
</span><br>
<span class="quotelev1">&gt;     option
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host
</span><br>
<span class="quotelev1">&gt;     r001n002
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 :
</span><br>
<span class="quotelev1">&gt;     -n 1 -
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Thanks for your help
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:lenny.verkhovsky_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;      
</span><br>
<span class="quotelev1">&gt;      &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; defined,
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; while n=1, which means only rank 0 is present and can be
</span><br>
<span class="quotelev1">&gt;     allocated.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun
</span><br>
<span class="quotelev1">&gt;     --hostfile
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; hostfile.0
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; uses an MCA interface that is not recognized (component MCA
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; v1.0.0 !=
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; process is
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; likely to abort. There are many reasons that a parallel
</span><br>
<span class="quotelev1">&gt;     process can
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; fail during opal_init; some of which are due to
</span><br>
<span class="quotelev1">&gt;     configuration or
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; failure;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; here's some additional information (which may only be
</span><br>
<span class="quotelev1">&gt;     relevant to an
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;     found in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt;     found in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; attempting
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the
</span><br>
<span class="quotelev1">&gt;     needed
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your
</span><br>
<span class="quotelev1">&gt;     LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and
</span><br>
<span class="quotelev1">&gt;     this will
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:geopignot_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; openmpi and I
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; would like to know if the rankfile behaviour I will
</span><br>
<span class="quotelev1">&gt;     describe below
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; is normal
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     ##################################################################################
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2
</span><br>
<span class="quotelev1">&gt;      hostname ### OK
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     ##################################################################################
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; but
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;     : -n 1
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; hostname
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad
</span><br>
<span class="quotelev1">&gt;     parameter in
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; There may be more information reported by the environment
</span><br>
<span class="quotelev1">&gt;     (see
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; above).
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the
</span><br>
<span class="quotelev1">&gt;     needed
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; libraries on the remote node. You may set your
</span><br>
<span class="quotelev1">&gt;     LD_LIBRARY_PATH to
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and
</span><br>
<span class="quotelev1">&gt;     this will
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as
</span><br>
<span class="quotelev1">&gt;     to the
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; process
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; It seems that the rankfile option is not propagted to the
</span><br>
<span class="quotelev1">&gt;     second
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; command
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; line ; there is no global understanding of the ranking
</span><br>
<span class="quotelev1">&gt;     inside a
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; mpirun
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; command.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     ##################################################################################
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; line:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;     : -rf
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; rankfile.1
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [0x804a022]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; I hope that I've found a bug because it would be very
</span><br>
<span class="quotelev1">&gt;     important
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; for me to
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind
</span><br>
<span class="quotelev1">&gt;     my exes
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; and
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt; &gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; **************************************
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; **************************************
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; End of users Digest, Vol 1221, Issue 3
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev1">&gt;     -------------- next part --------------
</span><br>
<span class="quotelev1">&gt;     HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     ------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     End of users Digest, Vol 1221, Issue 17
</span><br>
<span class="quotelev1">&gt;     ***************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Previous message:</strong> <a href="9205.php">Vicente Puig: "Re: [OMPI users] How do I compile OpenMPI in Xcode 3.1"</a>
<li><strong>In reply to:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9207.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
