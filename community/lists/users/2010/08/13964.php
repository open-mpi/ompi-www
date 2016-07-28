<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 17:58:05 2010" -->
<!-- isoreceived="20100810215805" -->
<!-- sent="Tue, 10 Aug 2010 17:57:56 -0400" -->
<!-- isosent="20100810215756" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="4C61CB64.7000102_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimJvk66G7PJyko5wV4h9W7gBwiy95qWE+-GNVDa_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-08-10 17:57:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Cristobal.
<br>
That is good news.
<br>
<p>Gus Correa
<br>
<p>Cristobal Navarro wrote:
<br>
<span class="quotelev1">&gt; i have good news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after updating to a newer kernel on ubuntu server nodes, sm is not a 
</span><br>
<span class="quotelev1">&gt; problem anymore for the nehalem CPUs!!!
</span><br>
<span class="quotelev1">&gt; my older kernel, was
</span><br>
<span class="quotelev1">&gt; Linux 2.6.32-22-server #36-Ubuntu SMP Thu Jun 3 20:38:33 UTC 2010 x86_64 
</span><br>
<span class="quotelev1">&gt; GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and i upgraded to
</span><br>
<span class="quotelev1">&gt; Linux agua 2.6.32-24-server #39-Ubuntu SMP Wed Jul 28 06:21:40 UTC 2010 
</span><br>
<span class="quotelev1">&gt; x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that solved everything.
</span><br>
<span class="quotelev1">&gt; Gus, maybe the problem you had with fedora can be solved in a similar way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we should keep this for the records.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; Cristobal
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
<span class="quotelev1">&gt; On Wed, Jul 28, 2010 at 6:45 PM, Gus Correa &lt;gus_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Gus
</span><br>
<span class="quotelev1">&gt;         my kernel for all nodes is this one:
</span><br>
<span class="quotelev1">&gt;         Linux 2.6.32-22-server #36-Ubuntu SMP Thu Jun 3 20:38:33 UTC
</span><br>
<span class="quotelev1">&gt;         2010 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Kernel is not my league.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     However, it would be great if somebody clarified
</span><br>
<span class="quotelev1">&gt;     for good these issues with Nehalem/Westmere, HT,
</span><br>
<span class="quotelev1">&gt;     shared memory and what the kernel is doing,
</span><br>
<span class="quotelev1">&gt;     or how to make the kernel do the right thing.
</span><br>
<span class="quotelev1">&gt;     Maybe Intel could tell.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         at least for the moment i will use this configuration, at least
</span><br>
<span class="quotelev1">&gt;         for deveplopment/testing  of the parallel programs.
</span><br>
<span class="quotelev1">&gt;         lag is minimum :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         whenever i get another kernel update, i will test again to check
</span><br>
<span class="quotelev1">&gt;         if sm works, would be good to know that suddenly another
</span><br>
<span class="quotelev1">&gt;         distribution supports nehalem sm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         best regards and thanks again
</span><br>
<span class="quotelev1">&gt;         Cristobal
</span><br>
<span class="quotelev1">&gt;         ps: guess what are the names of the other 2 nodes lol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Acatenango (I said that before), and Pacaya.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Maybe: Santa Maria, Santiaguito, Atitlan, Toliman, San Pedro,
</span><br>
<span class="quotelev1">&gt;     Cerro de Oro ... too many volcanoes, and some are multithreaded ...
</span><br>
<span class="quotelev1">&gt;     You need to buy more nodes!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         On Wed, Jul 28, 2010 at 5:50 PM, Gus Correa
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
<span class="quotelev1">&gt;            Please, read my answer (way down the message) below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                On Wed, Jul 28, 2010 at 3:28 PM, Gus Correa
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
<span class="quotelev1">&gt;                wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa
</span><br>
<span class="quotelev1">&gt;                       &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          In case you are not using full path name for
</span><br>
<span class="quotelev1">&gt;                mpiexec/mpirun,
</span><br>
<span class="quotelev1">&gt;                          what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       --&gt; $which mpirun
</span><br>
<span class="quotelev1">&gt;                            /opt/openmpi-1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          Often times this is a source of confusion, old
</span><br>
<span class="quotelev1">&gt;                versions may
</span><br>
<span class="quotelev1">&gt;                          be first on the PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          Gus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       openMPI version problem is now gone, i can confirm
</span><br>
<span class="quotelev1">&gt;         that the
</span><br>
<span class="quotelev1">&gt;                       version is consistent now :), thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   This is good news.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       however, i keep getting this kernel crash
</span><br>
<span class="quotelev1">&gt;         randomnly when i
</span><br>
<span class="quotelev1">&gt;                       execute with -np higher than 5
</span><br>
<span class="quotelev1">&gt;                       these are Xeons, with Hyperthreading On, is that a
</span><br>
<span class="quotelev1">&gt;         problem??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   The problem may be with Hyperthreading, maybe not.
</span><br>
<span class="quotelev1">&gt;                   Which Xeons?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; they are not so old, not so new either
</span><br>
<span class="quotelev1">&gt;                fcluster_at_agua:~$ cat /proc/cpuinfo | more
</span><br>
<span class="quotelev1">&gt;                processor : 0
</span><br>
<span class="quotelev1">&gt;                vendor_id : GenuineIntel
</span><br>
<span class="quotelev1">&gt;                cpu family : 6
</span><br>
<span class="quotelev1">&gt;                model : 26
</span><br>
<span class="quotelev1">&gt;                model name : Intel(R) Xeon(R) CPU           E5520  @ 2.27GHz
</span><br>
<span class="quotelev1">&gt;                stepping : 5
</span><br>
<span class="quotelev1">&gt;                cpu MHz : 1596.000
</span><br>
<span class="quotelev1">&gt;                cache size : 8192 KB
</span><br>
<span class="quotelev1">&gt;                physical id : 0
</span><br>
<span class="quotelev1">&gt;                siblings : 8
</span><br>
<span class="quotelev1">&gt;                core id : 0
</span><br>
<span class="quotelev1">&gt;                cpu cores : 4
</span><br>
<span class="quotelev1">&gt;                apicid : 0
</span><br>
<span class="quotelev1">&gt;                initial apicid : 0
</span><br>
<span class="quotelev1">&gt;                fpu : yes
</span><br>
<span class="quotelev1">&gt;                fpu_exception : yes
</span><br>
<span class="quotelev1">&gt;                cpuid level : 11
</span><br>
<span class="quotelev1">&gt;                wp : yes
</span><br>
<span class="quotelev1">&gt;                flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr
</span><br>
<span class="quotelev1">&gt;         pge mca
</span><br>
<span class="quotelev1">&gt;                cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss h
</span><br>
<span class="quotelev1">&gt;                t tm pbe syscall nx rdtscp lm constant_tsc arch_perfmon
</span><br>
<span class="quotelev1">&gt;         pebs bts
</span><br>
<span class="quotelev1">&gt;                rep_good xtopology nonstop_tsc aperfmperf pni dtes64
</span><br>
<span class="quotelev1">&gt;         monitor ds_
</span><br>
<span class="quotelev1">&gt;                cpl vmx est tm2 ssse3 cx16 xtpr pdcm dca sse4_1 sse4_2 popcnt
</span><br>
<span class="quotelev1">&gt;                lahf_lm ida tpr_shadow vnmi flexpriority ept vpid
</span><br>
<span class="quotelev1">&gt;                bogomips : 4522.21
</span><br>
<span class="quotelev1">&gt;                clflush size : 64
</span><br>
<span class="quotelev1">&gt;                cache_alignment : 64
</span><br>
<span class="quotelev1">&gt;                address sizes : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt;                power management:
</span><br>
<span class="quotelev1">&gt;                ...same for cpu1, 2, 3, ..., 15.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            AHA! Nehalems!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Here they are E5540, just a different clock speed, I suppose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                information on how the cpu is distributed
</span><br>
<span class="quotelev1">&gt;                fcluster_at_agua:~$ lstopo
</span><br>
<span class="quotelev1">&gt;                System(7992MB)
</span><br>
<span class="quotelev1">&gt;                 Socket#0 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev1">&gt;                     P#0
</span><br>
<span class="quotelev1">&gt;                     P#8
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev1">&gt;                     P#2
</span><br>
<span class="quotelev1">&gt;                     P#10
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev1">&gt;                     P#4
</span><br>
<span class="quotelev1">&gt;                     P#12
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev1">&gt;                     P#6
</span><br>
<span class="quotelev1">&gt;                     P#14
</span><br>
<span class="quotelev1">&gt;                 Socket#1 + L3(8192KB)
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev1">&gt;                     P#1
</span><br>
<span class="quotelev1">&gt;                     P#9
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev1">&gt;                     P#3
</span><br>
<span class="quotelev1">&gt;                     P#11
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev1">&gt;                     P#5
</span><br>
<span class="quotelev1">&gt;                     P#13
</span><br>
<span class="quotelev1">&gt;                   L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev1">&gt;                     P#7
</span><br>
<span class="quotelev1">&gt;                     P#15
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                            If I remember right, the old hyperthreading
</span><br>
<span class="quotelev1">&gt;         on old Xeons was
</span><br>
<span class="quotelev1">&gt;                   problematic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   OTOH, about 1-2 months ago I had trouble with OpenMPI on a
</span><br>
<span class="quotelev1">&gt;                   relatively new Xeon Nehalem machine with (the new)
</span><br>
<span class="quotelev1">&gt;         Hyperthreading
</span><br>
<span class="quotelev1">&gt;                   turned on,
</span><br>
<span class="quotelev1">&gt;                   and Fedora Core 13.
</span><br>
<span class="quotelev1">&gt;                   The machine would hang with the OpenMPI connectivity
</span><br>
<span class="quotelev1">&gt;         example.
</span><br>
<span class="quotelev1">&gt;                   I reported this to the list, you may find in the archives.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --i foudn the archives recently about an hour ago, was
</span><br>
<span class="quotelev1">&gt;         not sure
</span><br>
<span class="quotelev1">&gt;                if it was the same problem but i removed HT for testing with
</span><br>
<span class="quotelev1">&gt;                setting the online flag to 0 on the extra cpus showed with
</span><br>
<span class="quotelev1">&gt;                lstopo, unfortenately i also crashes, so HT may not be
</span><br>
<span class="quotelev1">&gt;         the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            It didn't fix the problem in our Nehalem machine here either,
</span><br>
<span class="quotelev1">&gt;            although it was FC13, and I don't know what OS and kernel
</span><br>
<span class="quotelev1">&gt;         you're using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Apparently other people got everything (OpenMPI with HT on
</span><br>
<span class="quotelev1">&gt;                Nehalem)
</span><br>
<span class="quotelev1">&gt;                   working in more stable distributions (CentOS, RHEL, etc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   That problem was likely to be in the FC13 kernel,
</span><br>
<span class="quotelev1">&gt;                   because even turning off HT I still had the machine
</span><br>
<span class="quotelev1">&gt;         hanging.
</span><br>
<span class="quotelev1">&gt;                   Nothing worked with shared memory turned on,
</span><br>
<span class="quotelev1">&gt;                   so I had to switch OpenMPI to use tcp instead,
</span><br>
<span class="quotelev1">&gt;                   which is kind of ridiculous in a standalone machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; very interesting, sm can be the problem
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       im trying to locate the kernel error on logs, but
</span><br>
<span class="quotelev1">&gt;         after
</span><br>
<span class="quotelev1">&gt;                       rebooting a crash, the error is not in the
</span><br>
<span class="quotelev1">&gt;         kern.log (neither
</span><br>
<span class="quotelev1">&gt;                       kern.log.1).
</span><br>
<span class="quotelev1">&gt;                       all i remember is that it starts with &quot;Kernel BUG...&quot;
</span><br>
<span class="quotelev1">&gt;                       and somepart it mentions a certain CPU X, where
</span><br>
<span class="quotelev1">&gt;         that cpu
</span><br>
<span class="quotelev1">&gt;                can be
</span><br>
<span class="quotelev1">&gt;                       any from 0 to 15 (im testing only in main node).
</span><br>
<span class="quotelev1">&gt;          Someone
</span><br>
<span class="quotelev1">&gt;                knows
</span><br>
<span class="quotelev1">&gt;                       where the log of kernel error could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   Have you tried to turn off hyperthreading?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                --&gt; yes, tried, same crashes.
</span><br>
<span class="quotelev1">&gt;                            In any case, depending on the application, it
</span><br>
<span class="quotelev1">&gt;         may not help much
</span><br>
<span class="quotelev1">&gt;                   performance to have HT on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   A more radical alternative is to try
</span><br>
<span class="quotelev1">&gt;                   -mca btl tcp,self
</span><br>
<span class="quotelev1">&gt;                   in the mpirun command line.
</span><br>
<span class="quotelev1">&gt;                   That is what worked in the case I mentioned above.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                wow!, this worked really :),  you pointed out the problem, it
</span><br>
<span class="quotelev1">&gt;                was shared memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Great news!
</span><br>
<span class="quotelev1">&gt;            That's exactly the problem we had here.
</span><br>
<span class="quotelev1">&gt;            Glad that the same solution worked for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Over a year ago another fellow reported the same problem on
</span><br>
<span class="quotelev1">&gt;         Nehalem,
</span><br>
<span class="quotelev1">&gt;            on the very early days of Nehalem.
</span><br>
<span class="quotelev1">&gt;            The thread should be in the archives.
</span><br>
<span class="quotelev1">&gt;            Somebody back then (Ralph, or Jeff, or other?)
</span><br>
<span class="quotelev1">&gt;            suggested that turning off &quot;sm&quot; might work.
</span><br>
<span class="quotelev1">&gt;            So, I take no credit for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                i have 4 nodes, so anyways there will be node
</span><br>
<span class="quotelev1">&gt;         comunication, do
</span><br>
<span class="quotelev1">&gt;                you think i can rely on working with -mca btl tcp,self??
</span><br>
<span class="quotelev1">&gt;         i dont
</span><br>
<span class="quotelev1">&gt;                mind small lag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Well, this may be it, short from reinstalling the OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Some people reported everything works with OpenMPI+HT+sm in
</span><br>
<span class="quotelev1">&gt;         CentOS
</span><br>
<span class="quotelev1">&gt;            and RHEL, see the thread I mentioned in the archives from 1-2
</span><br>
<span class="quotelev1">&gt;         months
</span><br>
<span class="quotelev1">&gt;            ago.
</span><br>
<span class="quotelev1">&gt;            I don't administer that machine, and didn't have the time to
</span><br>
<span class="quotelev1">&gt;         do OS
</span><br>
<span class="quotelev1">&gt;            reinstall either.
</span><br>
<span class="quotelev1">&gt;            So I left it with -mca btl tcp,self, and the user/machine owner
</span><br>
<span class="quotelev1">&gt;            is happy that he can run his programs right,
</span><br>
<span class="quotelev1">&gt;            and with a performance that he considers good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                i just have one more question, is this a problem of the
</span><br>
<span class="quotelev1">&gt;         ubuntu
</span><br>
<span class="quotelev1">&gt;                server kernel?? from the Nehalem Cpus?? from openMPI (i dont
</span><br>
<span class="quotelev1">&gt;                think) ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            I don't have any idea.
</span><br>
<span class="quotelev1">&gt;            It may be a problem with some kernels, not sure.
</span><br>
<span class="quotelev1">&gt;            Which kernel do you have?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Ours was FC-13, maybe FC-12, I don't remember exactly.
</span><br>
<span class="quotelev1">&gt;            Currently that machine has kernel 2.6.33.6-147.fc13.x86_64 #1
</span><br>
<span class="quotelev1">&gt;         SMP.
</span><br>
<span class="quotelev1">&gt;            However, it may have been a slightly older kernel when I
</span><br>
<span class="quotelev1">&gt;         installed
</span><br>
<span class="quotelev1">&gt;            OpenMPI there.
</span><br>
<span class="quotelev1">&gt;            It may have been 2.6.33.5-124.fc13.x86_64 or
</span><br>
<span class="quotelev1">&gt;         2.6.32.14-127.fc12.x86_64.
</span><br>
<span class="quotelev1">&gt;            My colleague here updates the machines with yum,
</span><br>
<span class="quotelev1">&gt;            so it may have gotten a new kernel since then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Our workhorse machines in the clusters that I take care
</span><br>
<span class="quotelev1">&gt;            of are AMD Opteron, never had this problem there.
</span><br>
<span class="quotelev1">&gt;            Maybe the kernels have yet to catch up with Nehalem,
</span><br>
<span class="quotelev1">&gt;            now Westmere, soon another one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                and on what depends that in the future, sm could be
</span><br>
<span class="quotelev1">&gt;         possible on
</span><br>
<span class="quotelev1">&gt;                the same configuration i have?? kernel update?.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            You may want to try CentOS or RHEL, but I can't guarantee the
</span><br>
<span class="quotelev1">&gt;         results.
</span><br>
<span class="quotelev1">&gt;            Somebody else in the list may have had the direct experience,
</span><br>
<span class="quotelev1">&gt;            and may speak out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            It may be worth the effort anyway.
</span><br>
<span class="quotelev1">&gt;            After all, intra-node communication should be
</span><br>
<span class="quotelev1">&gt;            running on shared memory.
</span><br>
<span class="quotelev1">&gt;            Having to turn it off is outrageous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            If you try another OS distribution,
</span><br>
<span class="quotelev1">&gt;            and if it works, please report the results back to the list:
</span><br>
<span class="quotelev1">&gt;            OS/distro, kernel, OpenMPI version, HT on or off,
</span><br>
<span class="quotelev1">&gt;            mca btl sm/tcp/self/etc choices, compilers, etc.
</span><br>
<span class="quotelev1">&gt;            This type of information is a real time saving for everybody.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                Thanks very much Gus, really!
</span><br>
<span class="quotelev1">&gt;                Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            My pleasure.
</span><br>
<span class="quotelev1">&gt;            Glad that there was a solution, even though not the best.
</span><br>
<span class="quotelev1">&gt;            Enjoy your cluster with vocano-named nodes!
</span><br>
<span class="quotelev1">&gt;            Have fun with OpenMPI and PETSc!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            Gus Correa
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;            Gustavo Correa
</span><br>
<span class="quotelev1">&gt;            Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt;            Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                
</span><br>
<span class="quotelev1">&gt;                   My $0.02
</span><br>
<span class="quotelev1">&gt;                   Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa
</span><br>
<span class="quotelev1">&gt;                              &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                              &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Hi Cristobal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Does it run only on the head node alone?
</span><br>
<span class="quotelev1">&gt;                                 (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev1">&gt;                                 Try to put only the head node on the
</span><br>
<span class="quotelev1">&gt;         hostfile
</span><br>
<span class="quotelev1">&gt;                and execute
</span><br>
<span class="quotelev1">&gt;                              with mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              --&gt; i will try only with the head node, and
</span><br>
<span class="quotelev1">&gt;         post
</span><br>
<span class="quotelev1">&gt;                results back
</span><br>
<span class="quotelev1">&gt;                                 This may help sort out what is going on.
</span><br>
<span class="quotelev1">&gt;                                 Hopefully it will run on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Also, do you have Infinband connecting
</span><br>
<span class="quotelev1">&gt;         the nodes?
</span><br>
<span class="quotelev1">&gt;                                 The error messages refer to the openib
</span><br>
<span class="quotelev1">&gt;         btl (i.e.
</span><br>
<span class="quotelev1">&gt;                       Infiniband),
</span><br>
<span class="quotelev1">&gt;                                 and complains of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              no we are just using normal network 100MBit/s ,
</span><br>
<span class="quotelev1">&gt;                since i
</span><br>
<span class="quotelev1">&gt;                       am just
</span><br>
<span class="quotelev1">&gt;                              testing yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 &quot;perhaps a missing symbol, or compiled for a
</span><br>
<span class="quotelev1">&gt;                different
</span><br>
<span class="quotelev1">&gt;                                 version of Open MPI?&quot;.
</span><br>
<span class="quotelev1">&gt;                                 It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              --&gt; i agree, somewhere there must be the
</span><br>
<span class="quotelev1">&gt;         remains
</span><br>
<span class="quotelev1">&gt;                of the older
</span><br>
<span class="quotelev1">&gt;                              version
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Did you configure/build OpenMPI from
</span><br>
<span class="quotelev1">&gt;         source, or did
</span><br>
<span class="quotelev1">&gt;                       you install
</span><br>
<span class="quotelev1">&gt;                                 it with apt-get?
</span><br>
<span class="quotelev1">&gt;                                 It may be easier/less confusing to
</span><br>
<span class="quotelev1">&gt;         install from
</span><br>
<span class="quotelev1">&gt;                source.
</span><br>
<span class="quotelev1">&gt;                                 If you did, what configure options did
</span><br>
<span class="quotelev1">&gt;         you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              --&gt;i installed from source, ./configure
</span><br>
<span class="quotelev1">&gt;                              --prefix=/opt/openmpi-1.4.2 --with-sge
</span><br>
<span class="quotelev1">&gt;         --without-xgid
</span><br>
<span class="quotelev1">&gt;                              --disable--static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Also, as for the OpenMPI runtime
</span><br>
<span class="quotelev1">&gt;         environment,
</span><br>
<span class="quotelev1">&gt;                                 it is not enough to set it on
</span><br>
<span class="quotelev1">&gt;                                 the command line, because it will be
</span><br>
<span class="quotelev1">&gt;         effective
</span><br>
<span class="quotelev1">&gt;                only on the
</span><br>
<span class="quotelev1">&gt;                              head node.
</span><br>
<span class="quotelev1">&gt;                                 You need to either add them to the PATH and
</span><br>
<span class="quotelev1">&gt;                       LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                                 on your .bashrc/.cshrc files (assuming these
</span><br>
<span class="quotelev1">&gt;                files and
</span><br>
<span class="quotelev1">&gt;                       your home
</span><br>
<span class="quotelev1">&gt;                                 directory are *also* shared with the
</span><br>
<span class="quotelev1">&gt;         nodes via
</span><br>
<span class="quotelev1">&gt;                NFS),
</span><br>
<span class="quotelev1">&gt;                                 or use the --prefix option of mpiexec to
</span><br>
<span class="quotelev1">&gt;         point
</span><br>
<span class="quotelev1">&gt;                to the
</span><br>
<span class="quotelev1">&gt;                       OpenMPI
</span><br>
<span class="quotelev1">&gt;                              main
</span><br>
<span class="quotelev1">&gt;                                 directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              yes, all nodes have their PATH and
</span><br>
<span class="quotelev1">&gt;         LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;                set up
</span><br>
<span class="quotelev1">&gt;                              properly inside the login scripts ( .bashrc
</span><br>
<span class="quotelev1">&gt;         in my
</span><br>
<span class="quotelev1">&gt;                case  )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Needless to say, you need to check and
</span><br>
<span class="quotelev1">&gt;         ensure
</span><br>
<span class="quotelev1">&gt;                that the
</span><br>
<span class="quotelev1">&gt;                       OpenMPI
</span><br>
<span class="quotelev1">&gt;                                 directory (and maybe your home
</span><br>
<span class="quotelev1">&gt;         directory, and
</span><br>
<span class="quotelev1">&gt;                your work
</span><br>
<span class="quotelev1">&gt;                              directory)
</span><br>
<span class="quotelev1">&gt;                                 is (are)
</span><br>
<span class="quotelev1">&gt;                                 really mounted on the nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 I hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              --&gt; thanks really!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                                 Update: i just reinstalled openMPI, with
</span><br>
<span class="quotelev1">&gt;         the same
</span><br>
<span class="quotelev1">&gt;                       parameters,
</span><br>
<span class="quotelev1">&gt;                              and it
</span><br>
<span class="quotelev1">&gt;                                 seems that the problem has gone, i
</span><br>
<span class="quotelev1">&gt;         couldnt test
</span><br>
<span class="quotelev1">&gt;                       entirely but
</span><br>
<span class="quotelev1">&gt;                              when i
</span><br>
<span class="quotelev1">&gt;                                 get back to lab ill confirm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                              best regards! Cristobal
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
<span class="quotelev1">&gt;                              _______________________________________________
</span><br>
<span class="quotelev1">&gt;                              users mailing list
</span><br>
<span class="quotelev1">&gt;                              users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                            
</span><br>
<span class="quotelev1">&gt;          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          _______________________________________________
</span><br>
<span class="quotelev1">&gt;                          users mailing list
</span><br>
<span class="quotelev1">&gt;                          users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                          <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt;                       _______________________________________________
</span><br>
<span class="quotelev1">&gt;                       users mailing list
</span><br>
<span class="quotelev1">&gt;                       users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   _______________________________________________
</span><br>
<span class="quotelev1">&gt;                   users mailing list
</span><br>
<span class="quotelev1">&gt;                   users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13963.php">David Akin: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>In reply to:</strong> <a href="13915.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
