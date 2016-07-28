<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 17:50:56 2010" -->
<!-- isoreceived="20100728215056" -->
<!-- sent="Wed, 28 Jul 2010 17:50:47 -0400" -->
<!-- isosent="20100728215047" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C50A637.80507_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTiksC=Xi7GkoYmQ3_yYm4GYt5hPONGL4zdo1C2-j_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI shared with NFS, but says different version<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 17:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Cristobal
<br>
<p>Please, read my answer (way down the message) below.
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 28, 2010 at 3:28 PM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa
</span><br>
<span class="quotelev1">&gt;         &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            In case you are not using full path name for mpiexec/mpirun,
</span><br>
<span class="quotelev1">&gt;            what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --&gt; $which mpirun
</span><br>
<span class="quotelev1">&gt;              /opt/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Often times this is a source of confusion, old versions may
</span><br>
<span class="quotelev1">&gt;            be first on the PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         openMPI version problem is now gone, i can confirm that the
</span><br>
<span class="quotelev1">&gt;         version is consistent now :), thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     This is good news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         however, i keep getting this kernel crash randomnly when i
</span><br>
<span class="quotelev1">&gt;         execute with -np higher than 5
</span><br>
<span class="quotelev1">&gt;         these are Xeons, with Hyperthreading On, is that a problem??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     The problem may be with Hyperthreading, maybe not.
</span><br>
<span class="quotelev1">&gt;     Which Xeons?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; they are not so old, not so new either
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ cat /proc/cpuinfo | more
</span><br>
<span class="quotelev1">&gt; processor : 0
</span><br>
<span class="quotelev1">&gt; vendor_id : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family : 6
</span><br>
<span class="quotelev1">&gt; model : 26
</span><br>
<span class="quotelev1">&gt; model name : Intel(R) Xeon(R) CPU           E5520  @ 2.27GHz
</span><br>
<span class="quotelev1">&gt; stepping : 5
</span><br>
<span class="quotelev1">&gt; cpu MHz : 1596.000
</span><br>
<span class="quotelev1">&gt; cache size : 8192 KB
</span><br>
<span class="quotelev1">&gt; physical id : 0
</span><br>
<span class="quotelev1">&gt; siblings : 8
</span><br>
<span class="quotelev1">&gt; core id : 0
</span><br>
<span class="quotelev1">&gt; cpu cores : 4
</span><br>
<span class="quotelev1">&gt; apicid : 0
</span><br>
<span class="quotelev1">&gt; initial apicid : 0
</span><br>
<span class="quotelev1">&gt; fpu : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception : yes
</span><br>
<span class="quotelev1">&gt; cpuid level : 11
</span><br>
<span class="quotelev1">&gt; wp : yes
</span><br>
<span class="quotelev1">&gt; flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov 
</span><br>
<span class="quotelev1">&gt; pat pse36 clflush dts acpi mmx fxsr sse sse2 ss h
</span><br>
<span class="quotelev1">&gt; t tm pbe syscall nx rdtscp lm constant_tsc arch_perfmon pebs bts 
</span><br>
<span class="quotelev1">&gt; rep_good xtopology nonstop_tsc aperfmperf pni dtes64 monitor ds_
</span><br>
<span class="quotelev1">&gt; cpl vmx est tm2 ssse3 cx16 xtpr pdcm dca sse4_1 sse4_2 popcnt lahf_lm 
</span><br>
<span class="quotelev1">&gt; ida tpr_shadow vnmi flexpriority ept vpid
</span><br>
<span class="quotelev1">&gt; bogomips : 4522.21
</span><br>
<span class="quotelev1">&gt; clflush size : 64
</span><br>
<span class="quotelev1">&gt; cache_alignment : 64
</span><br>
<span class="quotelev1">&gt; address sizes : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt; ...same for cpu1, 2, 3, ..., 15.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>AHA! Nehalems!
<br>
<p>Here they are E5540, just a different clock speed, I suppose.
<br>
<p><span class="quotelev1">&gt; information on how the cpu is distributed
</span><br>
<span class="quotelev1">&gt; fcluster_at_agua:~$ lstopo
</span><br>
<span class="quotelev1">&gt; System(7992MB)
</span><br>
<span class="quotelev1">&gt;   Socket#0 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev1">&gt;       P#0
</span><br>
<span class="quotelev1">&gt;       P#8
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev1">&gt;       P#2
</span><br>
<span class="quotelev1">&gt;       P#10
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev1">&gt;       P#4
</span><br>
<span class="quotelev1">&gt;       P#12
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev1">&gt;       P#6
</span><br>
<span class="quotelev1">&gt;       P#14
</span><br>
<span class="quotelev1">&gt;   Socket#1 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev1">&gt;       P#1
</span><br>
<span class="quotelev1">&gt;       P#9
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev1">&gt;       P#3
</span><br>
<span class="quotelev1">&gt;       P#11
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev1">&gt;       P#5
</span><br>
<span class="quotelev1">&gt;       P#13
</span><br>
<span class="quotelev1">&gt;     L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev1">&gt;       P#7
</span><br>
<span class="quotelev1">&gt;       P#15
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
<span class="quotelev1">&gt;     If I remember right, the old hyperthreading on old Xeons was
</span><br>
<span class="quotelev1">&gt;     problematic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     OTOH, about 1-2 months ago I had trouble with OpenMPI on a
</span><br>
<span class="quotelev1">&gt;     relatively new Xeon Nehalem machine with (the new) Hyperthreading
</span><br>
<span class="quotelev1">&gt;     turned on,
</span><br>
<span class="quotelev1">&gt;     and Fedora Core 13.
</span><br>
<span class="quotelev1">&gt;     The machine would hang with the OpenMPI connectivity example.
</span><br>
<span class="quotelev1">&gt;     I reported this to the list, you may find in the archives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --i foudn the archives recently about an hour ago, was not sure if it 
</span><br>
<span class="quotelev1">&gt; was the same problem but i removed HT for testing with setting the 
</span><br>
<span class="quotelev1">&gt; online flag to 0 on the extra cpus showed with lstopo, unfortenately i 
</span><br>
<span class="quotelev1">&gt; also crashes, so HT may not be the problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It didn't fix the problem in our Nehalem machine here either,
<br>
although it was FC13, and I don't know what OS and kernel you're using.
<br>
<p><span class="quotelev1">&gt;     Apparently other people got everything (OpenMPI with HT on Nehalem)
</span><br>
<span class="quotelev1">&gt;     working in more stable distributions (CentOS, RHEL, etc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     That problem was likely to be in the FC13 kernel,
</span><br>
<span class="quotelev1">&gt;     because even turning off HT I still had the machine hanging.
</span><br>
<span class="quotelev1">&gt;     Nothing worked with shared memory turned on,
</span><br>
<span class="quotelev1">&gt;     so I had to switch OpenMPI to use tcp instead,
</span><br>
<span class="quotelev1">&gt;     which is kind of ridiculous in a standalone machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; very interesting, sm can be the problem
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
<span class="quotelev1">&gt;         im trying to locate the kernel error on logs, but after
</span><br>
<span class="quotelev1">&gt;         rebooting a crash, the error is not in the kern.log (neither
</span><br>
<span class="quotelev1">&gt;         kern.log.1).
</span><br>
<span class="quotelev1">&gt;         all i remember is that it starts with &quot;Kernel BUG...&quot;
</span><br>
<span class="quotelev1">&gt;         and somepart it mentions a certain CPU X, where that cpu can be
</span><br>
<span class="quotelev1">&gt;         any from 0 to 15 (im testing only in main node).  Someone knows
</span><br>
<span class="quotelev1">&gt;         where the log of kernel error could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Have you tried to turn off hyperthreading?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --&gt; yes, tried, same crashes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     In any case, depending on the application, it may not help much
</span><br>
<span class="quotelev1">&gt;     performance to have HT on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     A more radical alternative is to try
</span><br>
<span class="quotelev1">&gt;     -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt;     in the mpirun command line.
</span><br>
<span class="quotelev1">&gt;     That is what worked in the case I mentioned above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wow!, this worked really :),  you pointed out the problem, it was shared 
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<p>Great news!
<br>
That's exactly the problem we had here.
<br>
Glad that the same solution worked for you.
<br>
<p>Over a year ago another fellow reported the same problem on Nehalem,
<br>
on the very early days of Nehalem.
<br>
The thread should be in the archives.
<br>
Somebody back then (Ralph, or Jeff, or other?)
<br>
suggested that turning off &quot;sm&quot; might work.
<br>
So, I take no credit for this.
<br>
<p><span class="quotelev1">&gt; i have 4 nodes, so anyways there will be node comunication, do you think 
</span><br>
<span class="quotelev1">&gt; i can rely on working with -mca btl tcp,self?? i dont mind small lag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Well, this may be it, short from reinstalling the OS.
<br>
<p>Some people reported everything works with OpenMPI+HT+sm in CentOS and 
<br>
RHEL, see the thread I mentioned in the archives from 1-2 months ago.
<br>
I don't administer that machine, and didn't have the time to do OS 
<br>
reinstall either.
<br>
So I left it with -mca btl tcp,self, and the user/machine owner
<br>
is happy that he can run his programs right,
<br>
and with a performance that he considers good.
<br>
<p><span class="quotelev1">&gt; i just have one more question, is this a problem of the ubuntu server 
</span><br>
<span class="quotelev1">&gt; kernel?? from the Nehalem Cpus?? from openMPI (i dont think) ?? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I don't have any idea.
<br>
It may be a problem with some kernels, not sure.
<br>
Which kernel do you have?
<br>
<p>Ours was FC-13, maybe FC-12, I don't remember exactly.
<br>
Currently that machine has kernel 2.6.33.6-147.fc13.x86_64 #1 SMP.
<br>
However, it may have been a slightly older kernel when I installed
<br>
OpenMPI there.
<br>
It may have been 2.6.33.5-124.fc13.x86_64 or 2.6.32.14-127.fc12.x86_64.
<br>
My colleague here updates the machines with yum,
<br>
so it may have gotten a new kernel since then.
<br>
<p>Our workhorse machines in the clusters that I take care
<br>
of are AMD Opteron, never had this problem there.
<br>
Maybe the kernels have yet to catch up with Nehalem,
<br>
now Westmere, soon another one.
<br>
<p><span class="quotelev1">&gt; and on what depends that in the future, sm could be possible on the same 
</span><br>
<span class="quotelev1">&gt; configuration i have?? kernel update?.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You may want to try CentOS or RHEL, but I can't guarantee the results.
<br>
Somebody else in the list may have had the direct experience,
<br>
and may speak out.
<br>
<p>It may be worth the effort anyway.
<br>
After all, intra-node communication should be
<br>
running on shared memory.
<br>
Having to turn it off is outrageous.
<br>
<p>If you try another OS distribution,
<br>
and if it works, please report the results back to the list:
<br>
OS/distro, kernel, OpenMPI version, HT on or off,
<br>
mca btl sm/tcp/self/etc choices, compilers, etc.
<br>
This type of information is a real time saving for everybody.
<br>
<p><p><span class="quotelev1">&gt; Thanks very much Gus, really!
</span><br>
<span class="quotelev1">&gt; Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>My pleasure.
<br>
Glad that there was a solution, even though not the best.
<br>
Enjoy your cluster with vocano-named nodes!
<br>
Have fun with OpenMPI and PETSc!
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     My $0.02
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;                &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt;                   (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt;                   Try to put only the head node on the hostfile and execute
</span><br>
<span class="quotelev1">&gt;                with mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; i will try only with the head node, and post results back
</span><br>
<span class="quotelev1">&gt;                   This may help sort out what is going on.
</span><br>
<span class="quotelev1">&gt;                   Hopefully it will run on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev1">&gt;                   The error messages refer to the openib btl (i.e.
</span><br>
<span class="quotelev1">&gt;         Infiniband),
</span><br>
<span class="quotelev1">&gt;                   and complains of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                no we are just using normal network 100MBit/s , since i
</span><br>
<span class="quotelev1">&gt;         am just
</span><br>
<span class="quotelev1">&gt;                testing yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   &quot;perhaps a missing symbol, or compiled for a different
</span><br>
<span class="quotelev1">&gt;                   version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt;                   It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; i agree, somewhere there must be the remains of the older
</span><br>
<span class="quotelev1">&gt;                version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Did you configure/build OpenMPI from source, or did
</span><br>
<span class="quotelev1">&gt;         you install
</span><br>
<span class="quotelev1">&gt;                   it with apt-get?
</span><br>
<span class="quotelev1">&gt;                   It may be easier/less confusing to install from source.
</span><br>
<span class="quotelev1">&gt;                   If you did, what configure options did you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt;i installed from source, ./configure
</span><br>
<span class="quotelev1">&gt;                --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
</span><br>
<span class="quotelev1">&gt;                --disable--static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev1">&gt;                   it is not enough to set it on
</span><br>
<span class="quotelev1">&gt;                   the command line, because it will be effective only on the
</span><br>
<span class="quotelev1">&gt;                head node.
</span><br>
<span class="quotelev1">&gt;                   You need to either add them to the PATH and
</span><br>
<span class="quotelev1">&gt;         LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                   on your .bashrc/.cshrc files (assuming these files and
</span><br>
<span class="quotelev1">&gt;         your home
</span><br>
<span class="quotelev1">&gt;                   directory are *also* shared with the nodes via NFS),
</span><br>
<span class="quotelev1">&gt;                   or use the --prefix option of mpiexec to point to the
</span><br>
<span class="quotelev1">&gt;         OpenMPI
</span><br>
<span class="quotelev1">&gt;                main
</span><br>
<span class="quotelev1">&gt;                   directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                yes, all nodes have their PATH and LD_LIBRARY_PATH set up
</span><br>
<span class="quotelev1">&gt;                properly inside the login scripts ( .bashrc in my case  )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Needless to say, you need to check and ensure that the
</span><br>
<span class="quotelev1">&gt;         OpenMPI
</span><br>
<span class="quotelev1">&gt;                   directory (and maybe your home directory, and your work
</span><br>
<span class="quotelev1">&gt;                directory)
</span><br>
<span class="quotelev1">&gt;                   is (are)
</span><br>
<span class="quotelev1">&gt;                   really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; thanks really!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Update: i just reinstalled openMPI, with the same
</span><br>
<span class="quotelev1">&gt;         parameters,
</span><br>
<span class="quotelev1">&gt;                and it
</span><br>
<span class="quotelev1">&gt;                   seems that the problem has gone, i couldnt test
</span><br>
<span class="quotelev1">&gt;         entirely but
</span><br>
<span class="quotelev1">&gt;                when i
</span><br>
<span class="quotelev1">&gt;                   get back to lab ill confirm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                best regards! Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;          ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                _______________________________________________
</span><br>
<span class="quotelev1">&gt;                users mailing list
</span><br>
<span class="quotelev1">&gt;                users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            _______________________________________________
</span><br>
<span class="quotelev1">&gt;            users mailing list
</span><br>
<span class="quotelev1">&gt;            users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13856.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
