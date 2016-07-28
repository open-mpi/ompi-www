<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 22:01:58 2011" -->
<!-- isoreceived="20110325020158" -->
<!-- sent="Thu, 24 Mar 2011 20:01:48 -0600" -->
<!-- isosent="20110325020148" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="9385F041-09D7-4C1A-AB1D-C7A853527BE2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8BF557.6000106_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 22:01:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul - very illuminating!
<br>
<p>Looks to me like I'm okay for OpenBSD as I won't find /proc and so won't build the Linux module.
<br>
<p>I have a problem with FreeBSD because /proc exists, but I won't find what I'm looking for, so I'll have to add a test for that case and not-build when FreeBSD is detected.
<br>
<p>The &quot;not-mounted&quot; case for NetBSD is more problematic. For now, I think I'll just use the safe method and not-build if NetBSD is detected.
<br>
<p>Remember, folks - this is -not- system critical to running OMPI. At the moment, the info isn't really even used for an MPI job. In the future this will change, and so the build logic will become more important - but in that future, the &quot;sysinfo&quot; framework disappears and is merged with other functionality that already knows how to resolve this.
<br>
<p>So all we're trying to do here is help fill a temporary gap :-)
<br>
<p><p>On Mar 24, 2011, at 7:52 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Silas,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: openmpi-1.4.1 is in the package repo for NetBSD 5.1.  So, you might not need to build from scratch at all, depending on your desired use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When available (remember that unlike Linux /proc might not be mounted by default) the /proc/cpuinfo and /proc/meminfo on NetBSD 5.1 are (nearly?) identical to the Linux ones.  See below for an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To &quot;prefetch&quot; the next logical question:
</span><br>
<span class="quotelev1">&gt; On a FreeBSD 8.1 system I find that /proc exists but does not contain cpuinfo or meminfo
</span><br>
<span class="quotelev1">&gt; On a OpenBSD 4.8 system I find that there is no /proc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ uname -a
</span><br>
<span class="quotelev1">&gt; NetBSD netbsd5-amd64.xen 5.1 NetBSD 5.1 (XEN3_DOMU) #0: Sat Nov  6 13:17:16 UTC 2010  builds_at_[hidden]:/home/builds/ab/netbsd-5-1-RELEASE/amd64/201011061943Z-obj/home/builds/ab/netbsd-5-1-RELEASE/src/sys/arch/amd64/compile/XEN3_DOMU amd64
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ cat /proc/cpuinfo
</span><br>
<span class="quotelev1">&gt; processor       : 0
</span><br>
<span class="quotelev1">&gt; vendor_id       : GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt; model           : 7
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU           E5410  @ 2.33GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2333.42
</span><br>
<span class="quotelev1">&gt; fdiv_bug        : no
</span><br>
<span class="quotelev1">&gt; fpu             : yes
</span><br>
<span class="quotelev1">&gt; fpu_exception   : yes
</span><br>
<span class="quotelev1">&gt; cpuid level     : 10
</span><br>
<span class="quotelev1">&gt; wp              : no
</span><br>
<span class="quotelev1">&gt; flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall mmxext fxsr_opt rdtscp lm 3dnow recovery longrun lrti cxmmx cyrix_arr centaur_mcr constant_tsc pni monitor ds_cpi vmx est tm2 cx16
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash-4.1$ cat /proc/meminfo
</span><br>
<span class="quotelev1">&gt;        total:    used:    free:  shared: buffers: cached:
</span><br>
<span class="quotelev1">&gt; Mem:  1031933952 796835840 235098112        0 542756864 555749376
</span><br>
<span class="quotelev1">&gt; Swap: 134213632        0 134213632
</span><br>
<span class="quotelev1">&gt; MemTotal:   1007748 kB
</span><br>
<span class="quotelev1">&gt; MemFree:     229588 kB
</span><br>
<span class="quotelev1">&gt; MemShared:        0 kB
</span><br>
<span class="quotelev1">&gt; Buffers:     530036 kB
</span><br>
<span class="quotelev1">&gt; Cached:      542724 kB
</span><br>
<span class="quotelev1">&gt; SwapTotal:   131068 kB
</span><br>
<span class="quotelev1">&gt; SwapFree:    131068 kB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/24/2011 6:07 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is the data the same in /proc between NetBSD and Linux?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're currently looking in /proc/cpuinfo and /proc/meminfo for some specific key / data pairs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 24, 2011, at 2:29 PM, Silas Silva wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI for educational reasons.  It works pretty fine under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GNU/Linux.  I have both compiled it and downloaded it from the package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; management system with no problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I have trying to use it in other Unix systems as well.  In these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; systems /proc (NetBSD for instance) is by default unmounted, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure script cannot stat /proc/cpuinfo (although it does exist in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NetBSD if you manually mount /proc).  In the case it cannot stat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /proc/cpuinfo, it just silently ignores compilation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_sysinfo_linux.{so,la}.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this behaviour correct?  Or it would be be a better idea that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure script fail with a &quot;please check /proc/cpuinfo or specify
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --dont-build-sysinfo-linux&quot;-like message?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Silas Silva
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
