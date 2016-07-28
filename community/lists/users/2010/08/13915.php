<?
$subject_val = "Re: [OMPI users] openMPI shared with NFS, but says different version";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  5 13:57:21 2010" -->
<!-- isoreceived="20100805175721" -->
<!-- sent="Thu, 5 Aug 2010 13:56:51 -0400" -->
<!-- isosent="20100805175651" -->
<!-- name="Cristobal Navarro" -->
<!-- email="axischire_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI shared with NFS, but says different version" -->
<!-- id="AANLkTimJvk66G7PJyko5wV4h9W7gBwiy95qWE+-GNVDa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C50B30D.2020006_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Cristobal Navarro (<em>axischire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-05 13:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i have good news.
<br>
<p>after updating to a newer kernel on ubuntu server nodes, sm is not a problem
<br>
anymore for the nehalem CPUs!!!
<br>
my older kernel, was
<br>
Linux 2.6.32-22-server #36-Ubuntu SMP Thu Jun 3 20:38:33 UTC 2010 x86_64
<br>
GNU/Linux
<br>
<p>and i upgraded to
<br>
Linux agua 2.6.32-24-server #39-Ubuntu SMP Wed Jul 28 06:21:40 UTC 2010
<br>
x86_64 GNU/Linux
<br>
<p>that solved everything.
<br>
Gus, maybe the problem you had with fedora can be solved in a similar way.
<br>
<p>we should keep this for the records.
<br>
<p>regards
<br>
Cristobal
<br>
<p><p><p><p><p><p>On Wed, Jul 28, 2010 at 6:45 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus
</span><br>
<span class="quotelev2">&gt;&gt; my kernel for all nodes is this one:
</span><br>
<span class="quotelev2">&gt;&gt; Linux 2.6.32-22-server #36-Ubuntu SMP Thu Jun 3 20:38:33 UTC 2010 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Kernel is not my league.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, it would be great if somebody clarified
</span><br>
<span class="quotelev1">&gt; for good these issues with Nehalem/Westmere, HT,
</span><br>
<span class="quotelev1">&gt; shared memory and what the kernel is doing,
</span><br>
<span class="quotelev1">&gt; or how to make the kernel do the right thing.
</span><br>
<span class="quotelev1">&gt; Maybe Intel could tell.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  at least for the moment i will use this configuration, at least for
</span><br>
<span class="quotelev2">&gt;&gt; deveplopment/testing  of the parallel programs.
</span><br>
<span class="quotelev2">&gt;&gt; lag is minimum :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; whenever i get another kernel update, i will test again to check if sm
</span><br>
<span class="quotelev2">&gt;&gt; works, would be good to know that suddenly another distribution supports
</span><br>
<span class="quotelev2">&gt;&gt; nehalem sm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best regards and thanks again
</span><br>
<span class="quotelev2">&gt;&gt; Cristobal
</span><br>
<span class="quotelev2">&gt;&gt; ps: guess what are the names of the other 2 nodes lol
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Acatenango (I said that before), and Pacaya.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe: Santa Maria, Santiaguito, Atitlan, Toliman, San Pedro,
</span><br>
<span class="quotelev1">&gt; Cerro de Oro ... too many volcanoes, and some are multithreaded ...
</span><br>
<span class="quotelev1">&gt; You need to buy more nodes!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 28, 2010 at 5:50 PM, Gus Correa &lt;gus_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Please, read my answer (way down the message) below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        On Wed, Jul 28, 2010 at 3:28 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               On Wed, Jul 28, 2010 at 11:09 AM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  In case you are not using full path name for
</span><br>
<span class="quotelev2">&gt;&gt;        mpiexec/mpirun,
</span><br>
<span class="quotelev2">&gt;&gt;                  what does &quot;which mpirun&quot; say?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               --&gt; $which mpirun
</span><br>
<span class="quotelev2">&gt;&gt;                    /opt/openmpi-1.4.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Often times this is a source of confusion, old
</span><br>
<span class="quotelev2">&gt;&gt;        versions may
</span><br>
<span class="quotelev2">&gt;&gt;                  be first on the PATH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Gus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               openMPI version problem is now gone, i can confirm that the
</span><br>
<span class="quotelev2">&gt;&gt;               version is consistent now :), thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           This is good news.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               however, i keep getting this kernel crash randomnly when i
</span><br>
<span class="quotelev2">&gt;&gt;               execute with -np higher than 5
</span><br>
<span class="quotelev2">&gt;&gt;               these are Xeons, with Hyperthreading On, is that a problem??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           The problem may be with Hyperthreading, maybe not.
</span><br>
<span class="quotelev2">&gt;&gt;           Which Xeons?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; they are not so old, not so new either
</span><br>
<span class="quotelev2">&gt;&gt;        fcluster_at_agua:~$ cat /proc/cpuinfo | more
</span><br>
<span class="quotelev2">&gt;&gt;        processor : 0
</span><br>
<span class="quotelev2">&gt;&gt;        vendor_id : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt;        cpu family : 6
</span><br>
<span class="quotelev2">&gt;&gt;        model : 26
</span><br>
<span class="quotelev2">&gt;&gt;        model name : Intel(R) Xeon(R) CPU           E5520  @ 2.27GHz
</span><br>
<span class="quotelev2">&gt;&gt;        stepping : 5
</span><br>
<span class="quotelev2">&gt;&gt;        cpu MHz : 1596.000
</span><br>
<span class="quotelev2">&gt;&gt;        cache size : 8192 KB
</span><br>
<span class="quotelev2">&gt;&gt;        physical id : 0
</span><br>
<span class="quotelev2">&gt;&gt;        siblings : 8
</span><br>
<span class="quotelev2">&gt;&gt;        core id : 0
</span><br>
<span class="quotelev2">&gt;&gt;        cpu cores : 4
</span><br>
<span class="quotelev2">&gt;&gt;        apicid : 0
</span><br>
<span class="quotelev2">&gt;&gt;        initial apicid : 0
</span><br>
<span class="quotelev2">&gt;&gt;        fpu : yes
</span><br>
<span class="quotelev2">&gt;&gt;        fpu_exception : yes
</span><br>
<span class="quotelev2">&gt;&gt;        cpuid level : 11
</span><br>
<span class="quotelev2">&gt;&gt;        wp : yes
</span><br>
<span class="quotelev2">&gt;&gt;        flags : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt;        cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss h
</span><br>
<span class="quotelev2">&gt;&gt;        t tm pbe syscall nx rdtscp lm constant_tsc arch_perfmon pebs bts
</span><br>
<span class="quotelev2">&gt;&gt;        rep_good xtopology nonstop_tsc aperfmperf pni dtes64 monitor ds_
</span><br>
<span class="quotelev2">&gt;&gt;        cpl vmx est tm2 ssse3 cx16 xtpr pdcm dca sse4_1 sse4_2 popcnt
</span><br>
<span class="quotelev2">&gt;&gt;        lahf_lm ida tpr_shadow vnmi flexpriority ept vpid
</span><br>
<span class="quotelev2">&gt;&gt;        bogomips : 4522.21
</span><br>
<span class="quotelev2">&gt;&gt;        clflush size : 64
</span><br>
<span class="quotelev2">&gt;&gt;        cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt;        address sizes : 40 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt;        power management:
</span><br>
<span class="quotelev2">&gt;&gt;        ...same for cpu1, 2, 3, ..., 15.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    AHA! Nehalems!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Here they are E5540, just a different clock speed, I suppose.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        information on how the cpu is distributed
</span><br>
<span class="quotelev2">&gt;&gt;        fcluster_at_agua:~$ lstopo
</span><br>
<span class="quotelev2">&gt;&gt;        System(7992MB)
</span><br>
<span class="quotelev2">&gt;&gt;         Socket#0 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev2">&gt;&gt;             P#0
</span><br>
<span class="quotelev2">&gt;&gt;             P#8
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev2">&gt;&gt;             P#2
</span><br>
<span class="quotelev2">&gt;&gt;             P#10
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev2">&gt;&gt;             P#4
</span><br>
<span class="quotelev2">&gt;&gt;             P#12
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev2">&gt;&gt;             P#6
</span><br>
<span class="quotelev2">&gt;&gt;             P#14
</span><br>
<span class="quotelev2">&gt;&gt;         Socket#1 + L3(8192KB)
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#0
</span><br>
<span class="quotelev2">&gt;&gt;             P#1
</span><br>
<span class="quotelev2">&gt;&gt;             P#9
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#1
</span><br>
<span class="quotelev2">&gt;&gt;             P#3
</span><br>
<span class="quotelev2">&gt;&gt;             P#11
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#2
</span><br>
<span class="quotelev2">&gt;&gt;             P#5
</span><br>
<span class="quotelev2">&gt;&gt;             P#13
</span><br>
<span class="quotelev2">&gt;&gt;           L2(256KB) + L1(32KB) + Core#3
</span><br>
<span class="quotelev2">&gt;&gt;             P#7
</span><br>
<span class="quotelev2">&gt;&gt;             P#15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    If I remember right, the old hyperthreading on old
</span><br>
<span class="quotelev2">&gt;&gt; Xeons was
</span><br>
<span class="quotelev2">&gt;&gt;           problematic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           OTOH, about 1-2 months ago I had trouble with OpenMPI on a
</span><br>
<span class="quotelev2">&gt;&gt;           relatively new Xeon Nehalem machine with (the new)
</span><br>
<span class="quotelev2">&gt;&gt; Hyperthreading
</span><br>
<span class="quotelev2">&gt;&gt;           turned on,
</span><br>
<span class="quotelev2">&gt;&gt;           and Fedora Core 13.
</span><br>
<span class="quotelev2">&gt;&gt;           The machine would hang with the OpenMPI connectivity example.
</span><br>
<span class="quotelev2">&gt;&gt;           I reported this to the list, you may find in the archives.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --i foudn the archives recently about an hour ago, was not sure
</span><br>
<span class="quotelev2">&gt;&gt;        if it was the same problem but i removed HT for testing with
</span><br>
<span class="quotelev2">&gt;&gt;        setting the online flag to 0 on the extra cpus showed with
</span><br>
<span class="quotelev2">&gt;&gt;        lstopo, unfortenately i also crashes, so HT may not be the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    It didn't fix the problem in our Nehalem machine here either,
</span><br>
<span class="quotelev2">&gt;&gt;    although it was FC13, and I don't know what OS and kernel you're using.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Apparently other people got everything (OpenMPI with HT on
</span><br>
<span class="quotelev2">&gt;&gt;        Nehalem)
</span><br>
<span class="quotelev2">&gt;&gt;           working in more stable distributions (CentOS, RHEL, etc).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           That problem was likely to be in the FC13 kernel,
</span><br>
<span class="quotelev2">&gt;&gt;           because even turning off HT I still had the machine hanging.
</span><br>
<span class="quotelev2">&gt;&gt;           Nothing worked with shared memory turned on,
</span><br>
<span class="quotelev2">&gt;&gt;           so I had to switch OpenMPI to use tcp instead,
</span><br>
<span class="quotelev2">&gt;&gt;           which is kind of ridiculous in a standalone machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; very interesting, sm can be the problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               im trying to locate the kernel error on logs, but after
</span><br>
<span class="quotelev2">&gt;&gt;               rebooting a crash, the error is not in the kern.log (neither
</span><br>
<span class="quotelev2">&gt;&gt;               kern.log.1).
</span><br>
<span class="quotelev2">&gt;&gt;               all i remember is that it starts with &quot;Kernel BUG...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               and somepart it mentions a certain CPU X, where that cpu
</span><br>
<span class="quotelev2">&gt;&gt;        can be
</span><br>
<span class="quotelev2">&gt;&gt;               any from 0 to 15 (im testing only in main node).  Someone
</span><br>
<span class="quotelev2">&gt;&gt;        knows
</span><br>
<span class="quotelev2">&gt;&gt;               where the log of kernel error could be?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           Have you tried to turn off hyperthreading?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        --&gt; yes, tried, same crashes.
</span><br>
<span class="quotelev2">&gt;&gt;                    In any case, depending on the application, it may not
</span><br>
<span class="quotelev2">&gt;&gt; help much
</span><br>
<span class="quotelev2">&gt;&gt;           performance to have HT on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           A more radical alternative is to try
</span><br>
<span class="quotelev2">&gt;&gt;           -mca btl tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;           in the mpirun command line.
</span><br>
<span class="quotelev2">&gt;&gt;           That is what worked in the case I mentioned above.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        wow!, this worked really :),  you pointed out the problem, it
</span><br>
<span class="quotelev2">&gt;&gt;        was shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Great news!
</span><br>
<span class="quotelev2">&gt;&gt;    That's exactly the problem we had here.
</span><br>
<span class="quotelev2">&gt;&gt;    Glad that the same solution worked for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Over a year ago another fellow reported the same problem on Nehalem,
</span><br>
<span class="quotelev2">&gt;&gt;    on the very early days of Nehalem.
</span><br>
<span class="quotelev2">&gt;&gt;    The thread should be in the archives.
</span><br>
<span class="quotelev2">&gt;&gt;    Somebody back then (Ralph, or Jeff, or other?)
</span><br>
<span class="quotelev2">&gt;&gt;    suggested that turning off &quot;sm&quot; might work.
</span><br>
<span class="quotelev2">&gt;&gt;    So, I take no credit for this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        i have 4 nodes, so anyways there will be node comunication, do
</span><br>
<span class="quotelev2">&gt;&gt;        you think i can rely on working with -mca btl tcp,self?? i dont
</span><br>
<span class="quotelev2">&gt;&gt;        mind small lag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Well, this may be it, short from reinstalling the OS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Some people reported everything works with OpenMPI+HT+sm in CentOS
</span><br>
<span class="quotelev2">&gt;&gt;    and RHEL, see the thread I mentioned in the archives from 1-2 months
</span><br>
<span class="quotelev2">&gt;&gt;    ago.
</span><br>
<span class="quotelev2">&gt;&gt;    I don't administer that machine, and didn't have the time to do OS
</span><br>
<span class="quotelev2">&gt;&gt;    reinstall either.
</span><br>
<span class="quotelev2">&gt;&gt;    So I left it with -mca btl tcp,self, and the user/machine owner
</span><br>
<span class="quotelev2">&gt;&gt;    is happy that he can run his programs right,
</span><br>
<span class="quotelev2">&gt;&gt;    and with a performance that he considers good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        i just have one more question, is this a problem of the ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;        server kernel?? from the Nehalem Cpus?? from openMPI (i dont
</span><br>
<span class="quotelev2">&gt;&gt;        think) ??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I don't have any idea.
</span><br>
<span class="quotelev2">&gt;&gt;    It may be a problem with some kernels, not sure.
</span><br>
<span class="quotelev2">&gt;&gt;    Which kernel do you have?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Ours was FC-13, maybe FC-12, I don't remember exactly.
</span><br>
<span class="quotelev2">&gt;&gt;    Currently that machine has kernel 2.6.33.6-147.fc13.x86_64 #1 SMP.
</span><br>
<span class="quotelev2">&gt;&gt;    However, it may have been a slightly older kernel when I installed
</span><br>
<span class="quotelev2">&gt;&gt;    OpenMPI there.
</span><br>
<span class="quotelev2">&gt;&gt;    It may have been 2.6.33.5-124.fc13.x86_64 or 2.6.32.14-127.fc12.x86_64.
</span><br>
<span class="quotelev2">&gt;&gt;    My colleague here updates the machines with yum,
</span><br>
<span class="quotelev2">&gt;&gt;    so it may have gotten a new kernel since then.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Our workhorse machines in the clusters that I take care
</span><br>
<span class="quotelev2">&gt;&gt;    of are AMD Opteron, never had this problem there.
</span><br>
<span class="quotelev2">&gt;&gt;    Maybe the kernels have yet to catch up with Nehalem,
</span><br>
<span class="quotelev2">&gt;&gt;    now Westmere, soon another one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        and on what depends that in the future, sm could be possible on
</span><br>
<span class="quotelev2">&gt;&gt;        the same configuration i have?? kernel update?.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    You may want to try CentOS or RHEL, but I can't guarantee the results.
</span><br>
<span class="quotelev2">&gt;&gt;    Somebody else in the list may have had the direct experience,
</span><br>
<span class="quotelev2">&gt;&gt;    and may speak out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    It may be worth the effort anyway.
</span><br>
<span class="quotelev2">&gt;&gt;    After all, intra-node communication should be
</span><br>
<span class="quotelev2">&gt;&gt;    running on shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;    Having to turn it off is outrageous.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    If you try another OS distribution,
</span><br>
<span class="quotelev2">&gt;&gt;    and if it works, please report the results back to the list:
</span><br>
<span class="quotelev2">&gt;&gt;    OS/distro, kernel, OpenMPI version, HT on or off,
</span><br>
<span class="quotelev2">&gt;&gt;    mca btl sm/tcp/self/etc choices, compilers, etc.
</span><br>
<span class="quotelev2">&gt;&gt;    This type of information is a real time saving for everybody.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks very much Gus, really!
</span><br>
<span class="quotelev2">&gt;&gt;        Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    My pleasure.
</span><br>
<span class="quotelev2">&gt;&gt;    Glad that there was a solution, even though not the best.
</span><br>
<span class="quotelev2">&gt;&gt;    Enjoy your cluster with vocano-named nodes!
</span><br>
<span class="quotelev2">&gt;&gt;    Have fun with OpenMPI and PETSc!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt;    Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt;    Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt;    ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           My $0.02
</span><br>
<span class="quotelev2">&gt;&gt;           Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  Cristobal Navarro wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      On Tue, Jul 27, 2010 at 7:29 PM, Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;&gt; &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:gus_at_[hidden]&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Hi Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Does it run only on the head node alone?
</span><br>
<span class="quotelev2">&gt;&gt;                         (Fuego? Agua? Acatenango?)
</span><br>
<span class="quotelev2">&gt;&gt;                         Try to put only the head node on the hostfile
</span><br>
<span class="quotelev2">&gt;&gt;        and execute
</span><br>
<span class="quotelev2">&gt;&gt;                      with mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --&gt; i will try only with the head node, and post
</span><br>
<span class="quotelev2">&gt;&gt;        results back
</span><br>
<span class="quotelev2">&gt;&gt;                         This may help sort out what is going on.
</span><br>
<span class="quotelev2">&gt;&gt;                         Hopefully it will run on the head node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Also, do you have Infinband connecting the nodes?
</span><br>
<span class="quotelev2">&gt;&gt;                         The error messages refer to the openib btl (i.e.
</span><br>
<span class="quotelev2">&gt;&gt;               Infiniband),
</span><br>
<span class="quotelev2">&gt;&gt;                         and complains of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      no we are just using normal network 100MBit/s ,
</span><br>
<span class="quotelev2">&gt;&gt;        since i
</span><br>
<span class="quotelev2">&gt;&gt;               am just
</span><br>
<span class="quotelev2">&gt;&gt;                      testing yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         &quot;perhaps a missing symbol, or compiled for a
</span><br>
<span class="quotelev2">&gt;&gt;        different
</span><br>
<span class="quotelev2">&gt;&gt;                         version of Open MPI?&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;                         It sounds as a mixup of versions/builds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --&gt; i agree, somewhere there must be the remains
</span><br>
<span class="quotelev2">&gt;&gt;        of the older
</span><br>
<span class="quotelev2">&gt;&gt;                      version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Did you configure/build OpenMPI from source, or
</span><br>
<span class="quotelev2">&gt;&gt; did
</span><br>
<span class="quotelev2">&gt;&gt;               you install
</span><br>
<span class="quotelev2">&gt;&gt;                         it with apt-get?
</span><br>
<span class="quotelev2">&gt;&gt;                         It may be easier/less confusing to install from
</span><br>
<span class="quotelev2">&gt;&gt;        source.
</span><br>
<span class="quotelev2">&gt;&gt;                         If you did, what configure options did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --&gt;i installed from source, ./configure
</span><br>
<span class="quotelev2">&gt;&gt;                      --prefix=/opt/openmpi-1.4.2 --with-sge --without-xgid
</span><br>
<span class="quotelev2">&gt;&gt;                      --disable--static
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Also, as for the OpenMPI runtime environment,
</span><br>
<span class="quotelev2">&gt;&gt;                         it is not enough to set it on
</span><br>
<span class="quotelev2">&gt;&gt;                         the command line, because it will be effective
</span><br>
<span class="quotelev2">&gt;&gt;        only on the
</span><br>
<span class="quotelev2">&gt;&gt;                      head node.
</span><br>
<span class="quotelev2">&gt;&gt;                         You need to either add them to the PATH and
</span><br>
<span class="quotelev2">&gt;&gt;               LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;                         on your .bashrc/.cshrc files (assuming these
</span><br>
<span class="quotelev2">&gt;&gt;        files and
</span><br>
<span class="quotelev2">&gt;&gt;               your home
</span><br>
<span class="quotelev2">&gt;&gt;                         directory are *also* shared with the nodes via
</span><br>
<span class="quotelev2">&gt;&gt;        NFS),
</span><br>
<span class="quotelev2">&gt;&gt;                         or use the --prefix option of mpiexec to point
</span><br>
<span class="quotelev2">&gt;&gt;        to the
</span><br>
<span class="quotelev2">&gt;&gt;               OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;                      main
</span><br>
<span class="quotelev2">&gt;&gt;                         directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      yes, all nodes have their PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;        set up
</span><br>
<span class="quotelev2">&gt;&gt;                      properly inside the login scripts ( .bashrc in my
</span><br>
<span class="quotelev2">&gt;&gt;        case  )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Needless to say, you need to check and ensure
</span><br>
<span class="quotelev2">&gt;&gt;        that the
</span><br>
<span class="quotelev2">&gt;&gt;               OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;                         directory (and maybe your home directory, and
</span><br>
<span class="quotelev2">&gt;&gt;        your work
</span><br>
<span class="quotelev2">&gt;&gt;                      directory)
</span><br>
<span class="quotelev2">&gt;&gt;                         is (are)
</span><br>
<span class="quotelev2">&gt;&gt;                         really mounted on the nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --&gt; yes, doublechecked that they are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      --&gt; thanks really!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         Update: i just reinstalled openMPI, with the same
</span><br>
<span class="quotelev2">&gt;&gt;               parameters,
</span><br>
<span class="quotelev2">&gt;&gt;                      and it
</span><br>
<span class="quotelev2">&gt;&gt;                         seems that the problem has gone, i couldnt test
</span><br>
<span class="quotelev2">&gt;&gt;               entirely but
</span><br>
<span class="quotelev2">&gt;&gt;                      when i
</span><br>
<span class="quotelev2">&gt;&gt;                         get back to lab ill confirm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      best regards! Cristobal
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                      users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                      users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                      <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                  users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                  users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;               users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;               users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;           users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;           users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;mailto:users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13915/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13916.php">John Hsu: "[OMPI users] deadlock in openmpi 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="13914.php">Eugene Loh: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Reply:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
