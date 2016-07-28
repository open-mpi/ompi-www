<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 21:53:01 2011" -->
<!-- isoreceived="20110325015301" -->
<!-- sent="Thu, 24 Mar 2011 18:52:23 -0700" -->
<!-- isosent="20110325015223" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="4D8BF557.6000106_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="163D7DD0-67D7-4D14-AD13-8B2C540BA2E9_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 21:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Silas,
<br>
<p>FYI: openmpi-1.4.1 is in the package repo for NetBSD 5.1.  So, you might 
<br>
not need to build from scratch at all, depending on your desired use.
<br>
<p>Jeff,
<br>
<p>When available (remember that unlike Linux /proc might not be mounted by 
<br>
default) the /proc/cpuinfo and /proc/meminfo on NetBSD 5.1 are (nearly?) 
<br>
identical to the Linux ones.  See below for an example.
<br>
<p>To &quot;prefetch&quot; the next logical question:
<br>
On a FreeBSD 8.1 system I find that /proc exists but does not contain 
<br>
cpuinfo or meminfo
<br>
On a OpenBSD 4.8 system I find that there is no /proc
<br>
<p>-Paul
<br>
<p>-bash-4.1$ uname -a
<br>
NetBSD netbsd5-amd64.xen 5.1 NetBSD 5.1 (XEN3_DOMU) #0: Sat Nov  6 
<br>
13:17:16 UTC 2010  
<br>
builds_at_[hidden]:/home/builds/ab/netbsd-5-1-RELEASE/amd64/201011061943Z-obj/home/builds/ab/netbsd-5-1-RELEASE/src/sys/arch/amd64/compile/XEN3_DOMU 
<br>
amd64
<br>
-bash-4.1$ cat /proc/cpuinfo
<br>
processor       : 0
<br>
vendor_id       : GenuineIntel
<br>
cpu family      : 6
<br>
model           : 7
<br>
model name      : Intel(R) Xeon(R) CPU           E5410  @ 2.33GHz
<br>
stepping        : 6
<br>
cpu MHz         : 2333.42
<br>
fdiv_bug        : no
<br>
fpu             : yes
<br>
fpu_exception   : yes
<br>
cpuid level     : 10
<br>
wp              : no
<br>
flags           : fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge 
<br>
mca cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm syscall 
<br>
mmxext fxsr_opt rdtscp lm 3dnow recovery longrun lrti cxmmx cyrix_arr 
<br>
centaur_mcr constant_tsc pni monitor ds_cpi vmx est tm2 cx16
<br>
<p>-bash-4.1$ cat /proc/meminfo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total:    used:    free:  shared: buffers: cached:
<br>
Mem:  1031933952 796835840 235098112        0 542756864 555749376
<br>
Swap: 134213632        0 134213632
<br>
MemTotal:   1007748 kB
<br>
MemFree:     229588 kB
<br>
MemShared:        0 kB
<br>
Buffers:     530036 kB
<br>
Cached:      542724 kB
<br>
SwapTotal:   131068 kB
<br>
SwapFree:    131068 kB
<br>
<p><p>On 3/24/2011 6:07 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Is the data the same in /proc between NetBSD and Linux?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're currently looking in /proc/cpuinfo and /proc/meminfo for some specific key / data pairs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 24, 2011, at 2:29 PM, Silas Silva wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello there,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI for educational reasons.  It works pretty fine under
</span><br>
<span class="quotelev2">&gt;&gt; GNU/Linux.  I have both compiled it and downloaded it from the package
</span><br>
<span class="quotelev2">&gt;&gt; management system with no problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I have trying to use it in other Unix systems as well.  In these
</span><br>
<span class="quotelev2">&gt;&gt; systems /proc (NetBSD for instance) is by default unmounted, so
</span><br>
<span class="quotelev2">&gt;&gt; ./configure script cannot stat /proc/cpuinfo (although it does exist in
</span><br>
<span class="quotelev2">&gt;&gt; NetBSD if you manually mount /proc).  In the case it cannot stat
</span><br>
<span class="quotelev2">&gt;&gt; /proc/cpuinfo, it just silently ignores compilation of
</span><br>
<span class="quotelev2">&gt;&gt; mca_sysinfo_linux.{so,la}.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this behaviour correct?  Or it would be be a better idea that
</span><br>
<span class="quotelev2">&gt;&gt; configure script fail with a &quot;please check /proc/cpuinfo or specify
</span><br>
<span class="quotelev2">&gt;&gt; --dont-build-sysinfo-linux&quot;-like message?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Silas Silva
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
