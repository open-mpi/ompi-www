<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 15:34:46 2009" -->
<!-- isoreceived="20090504193446" -->
<!-- sent="Mon, 4 May 2009 13:34:40 -0600" -->
<!-- isosent="20090504193440" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="71d2d8cc0905041234m76eb5a9dx57a773997779db73_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905040728h2002f4d7s4c49219eee29e86f_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 15:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>In reply to:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...I'm afraid I can't replicate the problem. All seems to be working
<br>
just fine on the RHEL systems available to me. The procs indeed bind to the
<br>
specified processors in every case.
<br>
<p>rhc_at_odin ~/trunk]$ cat rankfile
<br>
rank 0=odin001 slot=0
<br>
rank 1=odin002 slot=1
<br>
<p>[rhc_at_odin mpi]$ mpirun -rf ../../../rankfile -n 2 --leave-session-attached
<br>
-mca paffinity_base_verbose 5 ./mpi_spin
<br>
[odin001.cs.indiana.edu:09297 &lt;<a href="http://odin001.cs.indiana.edu:9297/">http://odin001.cs.indiana.edu:9297/</a>&gt;]
<br>
paffinity slot assignment: slot_list == 0
<br>
[odin001.cs.indiana.edu:09297 &lt;<a href="http://odin001.cs.indiana.edu:9297/">http://odin001.cs.indiana.edu:9297/</a>&gt;]
<br>
paffinity slot assignment: rank 0 runs on cpu #0 (#0)
<br>
[odin002.cs.indiana.edu:13566] paffinity slot assignment: slot_list == 1
<br>
[odin002.cs.indiana.edu:13566] paffinity slot assignment: rank 1 runs on cpu
<br>
#1 (#1)
<br>
<p>Suspended
<br>
[rhc_at_odin mpi]$ ssh odin001
<br>
[rhc_at_odin001 ~]$ ps axo stat,user,psr,pid,pcpu,comm | grep rhc
<br>
S    rhc        0  9296  0.0 orted
<br>
RLl  rhc        0  9297  100 mpi_spin
<br>
<p>[rhc_at_odin mpi]$ ssh odin002
<br>
[rhc_at_odin002 ~]$ ps axo stat,user,psr,pid,pcpu,comm | grep rhc
<br>
S    rhc        0 13562  0.0 orted
<br>
RLl  rhc        1 13566  102 mpi_spin
<br>
<p><p>Not sure where to go from here...perhaps someone else can spot the problem?
<br>
Ralph
<br>
<p><p>On Mon, May 4, 2009 at 8:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, I didn't write any of that code - I was just fixing the
</span><br>
<span class="quotelev1">&gt; mapper so it would properly map the procs. From what I can tell, the proper
</span><br>
<span class="quotelev1">&gt; things are happening there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have to dig into the code that specifically deals with parsing the
</span><br>
<span class="quotelev1">&gt; results to bind the processes. Afraid that will take awhile longer - pretty
</span><br>
<span class="quotelev1">&gt; dark in that hole.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 4, 2009 at 8:04 AM, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, there are no more crashes with my &quot;crazy&quot; mpirun command. But the
</span><br>
<span class="quotelev2">&gt;&gt; paffinity feature seems to be broken. Indeed I am not able to pin my
</span><br>
<span class="quotelev2">&gt;&gt; processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simple test with a program using your plpa library :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% cat hostf
</span><br>
<span class="quotelev2">&gt;&gt; r011n006 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% cat rankf
</span><br>
<span class="quotelev2">&gt;&gt; rank 0=r011n006 slot=0   ----&gt; bind to CPU 0 , exact ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% /tmp/HALMPI/openmpi-1.4a/bin/mpirun --hostfile hostf --rankfile
</span><br>
<span class="quotelev2">&gt;&gt; rankf --wdir /tmp -n 1 a.out
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; PLPA Number of processors online: 4
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; PLPA Number of processor sockets: 2
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; PLPA Socket 0 (ID 0): 2 cores
</span><br>
<span class="quotelev1">&gt;&gt;  &gt;&gt;&gt; PLPA Socket 1 (ID 3): 2 cores
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ctrl+Z
</span><br>
<span class="quotelev2">&gt;&gt; r011n006%bg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% ps axo stat,user,psr,pid,pcpu,comm | grep gpignot
</span><br>
<span class="quotelev2">&gt;&gt; R+   gpignot    3  9271 97.8 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In fact whatever the slot number I put in my rankfile , a.out always runs
</span><br>
<span class="quotelev2">&gt;&gt; on the CPU 3. I was looking for it on CPU 0 accordind to my cpuinfo file
</span><br>
<span class="quotelev2">&gt;&gt; (see below)
</span><br>
<span class="quotelev2">&gt;&gt; The result is the same if I try another syntax (rank 0=r011n006 slot=0:0
</span><br>
<span class="quotelev2">&gt;&gt; bind to socket 0 - core 0  , exact ? )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Geoffroy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: I run on rhel5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux r011n006 2.6.18-92.1.1NOMAP32.el5 #1 SMP Sat Mar 15 01:46:39 CDT
</span><br>
<span class="quotelev2">&gt;&gt; 2008 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My configure is :
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure --prefix=/tmp/openmpi-1.4a --libdir='${exec_prefix}/lib64'
</span><br>
<span class="quotelev2">&gt;&gt; --disable-dlopen --disable-mpi-cxx --enable-heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; r011n006% cat /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 0
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 15
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx lm
</span><br>
<span class="quotelev2">&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 5323.68
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 1
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 15
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 3
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 0
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx lm
</span><br>
<span class="quotelev2">&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 2
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 15
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 0
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 1
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx lm
</span><br>
<span class="quotelev2">&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 5319.39
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; processor       : 3
</span><br>
<span class="quotelev2">&gt;&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev2">&gt;&gt; model           : 15
</span><br>
<span class="quotelev2">&gt;&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev2">&gt;&gt; stepping        : 6
</span><br>
<span class="quotelev2">&gt;&gt; cpu MHz         : 2660.007
</span><br>
<span class="quotelev2">&gt;&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev2">&gt;&gt; physical id     : 3
</span><br>
<span class="quotelev2">&gt;&gt; siblings        : 2
</span><br>
<span class="quotelev2">&gt;&gt; core id         : 1
</span><br>
<span class="quotelev2">&gt;&gt; cpu cores       : 2
</span><br>
<span class="quotelev2">&gt;&gt; fpu             : yes
</span><br>
<span class="quotelev2">&gt;&gt; fpu_exception   : yes
</span><br>
<span class="quotelev2">&gt;&gt; cpuid level     : 10
</span><br>
<span class="quotelev2">&gt;&gt; wp              : yes
</span><br>
<span class="quotelev2">&gt;&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca
</span><br>
<span class="quotelev2">&gt;&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall nx lm
</span><br>
<span class="quotelev2">&gt;&gt; constant_tsc pni monitor ds_cpl vmx est tm2 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev2">&gt;&gt; bogomips        : 5320.03
</span><br>
<span class="quotelev2">&gt;&gt; clflush size    : 64
</span><br>
<span class="quotelev2">&gt;&gt; cache_alignment : 64
</span><br>
<span class="quotelev2">&gt;&gt; address sizes   : 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev2">&gt;&gt; power management:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Mon, 4 May 2009 04:45:57 -0600
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;D01D7B16-4B47-46F3-AD41-D1A90B2E4927_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My apologies - I wasn't clear enough. You need a tarball from r21111
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or greater...such as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz">http://www.open-mpi.org/nightly/trunk/openmpi-1.4a1r21142.tar.gz</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 4, 2009, at 2:14 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi ,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I got the openmpi-1.4a1r21095.tar.gz tarball, but unfortunately my
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; command doesn't work
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; cat rankf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 0=node1 slot=*
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 1=node2 slot=*
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; cat hostf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; node1 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; node2 slots=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun  --rankfile rankf --hostfile hostf  --host node1 -n 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; hostname : --host node2 -n 1 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Error, invalid rank (1) in the rankfile (rankf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rmaps_rank_file.c at line 403
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; base/rmaps_base_map_job.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; base/plm_base_launch_support.c at line 86
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [r011n006:28986] [[45541,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; plm_rsh_module.c at line 1016
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ralph, could you tell me if my command syntax is correct or not ? if
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; not, give me the expected one ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2009/4/30 Geoffroy Pignot &lt;geopignot_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Immediately Sir !!! :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks again Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Geoffroy
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Message: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Date: Thu, 30 Apr 2009 06:45:39 -0600
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Message-ID:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        &lt;71d2d8cc0904300545v61a42fe1k50086d2704d0f7e6_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I believe this is fixed now in our development trunk - you can
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; download any
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; tarball starting from last night and give it a try, if you like. Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; feedback would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Apr 14, 2009, at 7:57 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ah now, I didn't say it -worked-, did I? :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Clearly a bug exists in the program. I'll try to take a look at it
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (if Lenny
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; doesn't get to it first), but it won't be until later in the week.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Apr 14, 2009, at 7:18 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I agree with you Ralph , and that 's what I expect from openmpi but my
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; second example shows that it's not working
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   r011n002 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   r011n003 slots=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  cat rankfile.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    rank 0=r011n002 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;    rank 1=r011n003 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ### CRASHED
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; process
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Message: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Date: Tue, 14 Apr 2009 06:55:58 -0600
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Message-ID: &lt;F6290ADA-A196-43F0-A853-CBCB802D8D9C_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;       DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The rankfile cuts across the entire job - it isn't applied on an
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; app_context basis. So the ranks in your rankfile must correspond to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the eventual rank of each process in the cmd line.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Unfortunately, that means you have to count ranks. In your case, you
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; only have four, so that makes life easier. Your rankfile would look
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; something like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 0=r001n001 slot=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 1=r001n002 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 2=r001n001 slot=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; rank 3=r001n002 slot=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HTH
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Apr 14, 2009, at 12:19 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I agree that my examples are not very clear. What I want to do is to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; launch a multiexes application (masters-slaves) and benefit from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; processor affinity.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Could you show me how to convert this command , using -rf option
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; (whatever the affinity is)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; mpirun -n 1 -host r001n001 master.x options1  : -n 1 -host r001n002
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; master.x options2 : -n 1 -host r001n001 slave.x options3 : -n 1 -
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; host r001n002 slave.x options4
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Thanks for your help
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Message: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Date: Sun, 12 Apr 2009 18:26:35 +0300
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Subject: Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;        &lt;453d39990904120826t2e1d1d33l7bb1fe3de65b5361_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; The first &quot;crash&quot; is OK, since your rankfile has ranks 0 and 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; defined,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; while n=1, which means only rank 0 is present and can be allocated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; NP must be &gt;= the largest rank in rankfile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; What exactly are you trying to do ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I tried to recreate your seqv but all I got was
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ~/work/svn/ompi/trunk/build_x86-64/install/bin/mpirun --hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; hostfile.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; -rf rankfile.0 -n 1 hostname : -rf rankfile.1 -n 1 hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [witch19:30798] mca: base: component_find: paffinity
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; &quot;mca_paffinity_linux&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; uses an MCA interface that is not recognized (component MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; v1.0.0 !=
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; supported MCA v2.0.0) -- ignored
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; It looks like opal_init failed for some reason; your parallel
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; process is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; environment problems. This failure appears to be an internal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; failure;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;  --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ../../orte/runtime/orte_init.c at line 78
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [witch19:30798] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ../../orte/orted/orted_main.c at line 344
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; A daemon (pid 11629) died unexpectedly with status 243 while
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; On 4/10/09, Geoffroy Pignot &lt;geopignot_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Hi ,
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; I am currently testing the process affinity capabilities of
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; openmpi and I
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; would like to know if the rankfile behaviour I will describe below
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; is normal
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; or not ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; cat hostfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; r011n002 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; r011n003 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rank 1=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 2  hostname ### OK
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; r011n002
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; r011n003
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; but
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -n 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; ### CRASHED
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Error, invalid rank (1) in the rankfile (rankfile.0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rmaps_rank_file.c at line 404
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; base/rmaps_base_map_job.c at line 87
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; base/plm_base_launch_support.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:25129] [[63976,0],0] ORTE_ERROR_LOG: Bad parameter in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; file
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; plm_rsh_module.c at line 985
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; A daemon (pid unknown) died unexpectedly on signal 1  while
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; attempting to
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; have the
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; orterun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; process
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; orterun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; *
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; It seems that the rankfile option is not propagted to the second
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; command
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; line ; there is no global understanding of the ranking inside a
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; command.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ##################################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Assuming that , I tried to provide a rankfile to each command
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; line:
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n002 slot=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; cat rankfile.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; rank 0=r011n003 slot=1
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; mpirun --hostfile hostfile.0 -rf rankfile.0 -n 1 hostname : -rf
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; rankfile.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; -n 1 hostname ### CRASHED
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; *[r011n002:28778] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] Failing at address: 0x34
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 0] [0xffffe600]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 0(orte_odls_base_default_get_add_procs_data+0x55d)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [0x5557decd]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; /tmp/HALMPI/openmpi-1.3.1/lib/libopen-rte.so.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 0(orte_plm_base_launch_apps+0x117)
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [0x555842a7]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 3] /tmp/HALMPI/openmpi-1.3.1/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; mca_plm_rsh.so
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [0x556098c0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 4] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [0x804aa27]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 5] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [0x804a022]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [0x9f1dec]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] [ 7] /tmp/HALMPI/openmpi-1.3.1/bin/orterun
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [0x8049f71]
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; [r011n002:28778] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Segmentation fault (core dumped)*
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; I hope that I've found a bug because it would be very important
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; for me to
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; have this kind of capabiliy .
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Launch a multiexe mpirun command line and be able to bind my exes
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; and
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; sockets together.
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Thanks in advance for your help
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt; &gt; &gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; End of users Digest, Vol 1202, Issue 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; **************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; End of users Digest, Vol 1218, Issue 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; **************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End of users Digest, Vol 1221, Issue 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; **************************************
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Previous message:</strong> <a href="9200.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable toopen/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>In reply to:</strong> <a href="9186.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9203.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
