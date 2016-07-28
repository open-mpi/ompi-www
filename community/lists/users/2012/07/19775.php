<?
$subject_val = "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 16 18:12:50 2012" -->
<!-- isoreceived="20120716221250" -->
<!-- sent="Mon, 16 Jul 2012 16:13:35 -0600" -->
<!-- isosent="20120716221335" -->
<!-- name="Anne M. Hammond" -->
<!-- email="hammond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2" -->
<!-- id="EDFA87CB-EEC8-46C4-BFCB-5D2CFBCA048B_at_txcorp.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB710DCF191_at_FMSMSX108.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2012-07-16 18:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19774.php">Elken, Tom: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19774.php">Elken, Tom: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are 2 physical processors, each with 4 cores (no hyperthreading).
<br>
<p>I want to instruct openmpi to run only on the first processor, using 4 cores.
<br>
<p><p>[hammond_at_node48 ~]$ cat /proc/cpuinfo
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
cpu MHz		: 2311.694
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
apicid		: 0
<br>
initial apicid	: 0
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips	: 4623.38
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 1
<br>
initial apicid	: 1
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips	: 4623.17
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 2
<br>
initial apicid	: 2
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips	: 4623.19
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 3
<br>
initial apicid	: 3
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
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
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 4
<br>
initial apicid	: 4
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
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
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 5
<br>
initial apicid	: 5
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
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
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 6
<br>
initial apicid	: 6
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips	: 4623.17
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
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
cpu MHz		: 2311.694
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
apicid		: 7
<br>
initial apicid	: 7
<br>
fpu		: yes
<br>
fpu_exception	: yes
<br>
cpuid level	: 5
<br>
wp		: yes
<br>
flags		: fpu vme de pse tsc msr pae mce cx8 apic mtrr pge mca cmov pat pse36 clflush mmx fxsr sse sse2 ht syscall nx mmxext fxsr_opt pdpe1gb rdtscp lm 3dnowext 3dnow constant_tsc rep_good nonstop_tsc extd_apicid pni monitor cx16 popcnt lahf_lm cmp_legacy svm extapic cr8_legacy abm sse4a misalignsse 3dnowprefetch osvw ibs skinit wdt npt lbrv svm_lock nrip_save
<br>
bogomips	: 4623.18
<br>
TLB size	: 1024 4K pages
<br>
clflush size	: 64
<br>
cache_alignment	: 64
<br>
address sizes	: 48 bits physical, 48 bits virtual
<br>
power management: ts ttp tm stc 100mhzsteps hwpstate
<br>
<p><p>On Jul 16, 2012, at 4:09 PM, Elken, Tom wrote:
<br>
<p><span class="quotelev1">&gt; Anne,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; output from &quot;cat /proc/cpuinfo&quot; on your node &quot;hostname&quot;  may help those trying to answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, July 16, 2012 2:47 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I gather there are two sockets on this node? So the second cmd line is equivalent
</span><br>
<span class="quotelev2">&gt;&gt; to leaving &quot;num-sockets&quot; off of the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I haven't tried what you are doing, so it is quite possible this is a bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2012, at 1:49 PM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Built the latest snapshot.  Still getting an error when trying to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on only one socket (see below):  Is there a workaround?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 1 --npersocket 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- An invalid physical processor ID was returned when attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind an MPI process to a unique processor.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually means that you requested binding to more processors than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M).  Double check that you have enough unique processors for all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI processes that you are launching on this host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You job will now abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---- mpirun was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; encountered an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error name: Fatal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: node65.cl.corp.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 total processes failed to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hammond_at_node65 bin]$ ./mpirun -np 4 --num-sockets 2 --npersocket 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostname node65.cl.corp.com node65.cl.corp.com node65.cl.corp.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node65.cl.corp.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [hammond_at_node65 bin]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2012, at 12:56 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff is at the MPI Forum this week, so his answers will be delayed. Last I
</span><br>
<span class="quotelev2">&gt;&gt; heard, it was close, but no specific date has been set.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 16, 2012, at 11:49 AM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When is the expected date for the official 1.6.1 (or 1.6.2 ?) to be available ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mike
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 07/16/2012 01:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; You can get it here:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.6/">http://www.open-mpi.org/nightly/v1.6/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jul 16, 2012, at 10:22 AM, Anne M. Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For benchmarking, we would like to use openmpi with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --num-sockets 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This fails in 1.6, but Bug Report #3119 indicates it is changed in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.6.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is 1.6.1 or 1.6.2 available in tar.gz form?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anne
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt;                 hammond_at_txcorp.com 720-974-1840
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
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<p>Anne M. Hammond - Systems / Network Administration - Tech-X Corp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hammond_at_txcorp.com 720-974-1840
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19774.php">Elken, Tom: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>In reply to:</strong> <a href="19774.php">Elken, Tom: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Reply:</strong> <a href="19776.php">Dominik Goeddeke: "Re: [OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
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
