<?
$subject_val = "Re: [OMPI users] problem with rankfile and openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 09:42:12 2012" -->
<!-- isoreceived="20121003134212" -->
<!-- sent="Wed, 3 Oct 2012 06:42:04 -0700" -->
<!-- isosent="20121003134204" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile and openmpi-1.6.2" -->
<!-- id="4A124674-009D-40A6-A4CA-39C6058970F9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210031003.q93A3LxQ020282_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile and openmpi-1.6.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 09:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20386.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I filed a bug fix for this one. However, something you should note.
<br>
<p>If you fail to provide a &quot;-np N&quot; argument to mpiexec, we assume you want ALL all available slots filled. The rankfile will contain only those procs that you want specifically bound. The remaining procs will be unbound.
<br>
<p>So with your hostfile, we are going to run EIGHT processes, with ranks 0-3 located as specified in the rankfile.
<br>
<p>If that isn't what you want, then you should add -np 4 to your cmd line.
<br>
<p><p>On Oct 3, 2012, at 3:03 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to test process bindings with a rankfile in openmpi-1.6.2. Both
</span><br>
<span class="quotelev1">&gt; machines are dual-processor dual-core machines running Solaris 10 x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 138 cat host_sunpc0_1 
</span><br>
<span class="quotelev1">&gt; sunpc0 slots=4
</span><br>
<span class="quotelev1">&gt; sunpc1 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 139 cat rankfile 
</span><br>
<span class="quotelev1">&gt; rank 0=sunpc0 slot=0:0-1,1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 140 mpiexec -rf rankfile hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is something wrong with my rankfile, must I add a hostfile, or is it a
</span><br>
<span class="quotelev1">&gt; bug? I get the following error when I add a hostfile. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 141 mpiexec -hostfile host_sunpc0_1 -rf rankfile hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:20227] [[27927,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev1">&gt;  Data unpack would read past end of buffer in file
</span><br>
<span class="quotelev1">&gt;  ../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev1">&gt;  at line 927
</span><br>
<span class="quotelev1">&gt; ^Cmpiexec: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt;  terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following outputs when I use Linux instead of Solaris
</span><br>
<span class="quotelev1">&gt; (same hardware).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 146 mpiexec -rf rankfile_linux hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 147 mpiexec -hostfile host_linpc0_1 -rf rankfile_linux hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:20260] [[27952,0],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in 
</span><br>
<span class="quotelev1">&gt; file ../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c at line 927
</span><br>
<span class="quotelev1">&gt; [tyr:20260] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:20260] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:20260] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:20260] Failing at address: 7463703a2f2f3129
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:opal_backtrace_print+0x14
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:0x335b48
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd88a4
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc418
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc624
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0x64394 [ Signal 2131043744 (?)]
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:free+0x30
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:orte_odls_base_default_construct_child
</span><br>
<span class="quotelev1">&gt; _list+0x20b8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/openmpi/mca_odls_default.so:0x11c80
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;tyr&quot; is a Sparc machine running Solaris 10. I get a similar error if
</span><br>
<span class="quotelev1">&gt; I run the command on a Linux machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 148 ssh linpc4
</span><br>
<span class="quotelev1">&gt; linpc4 fd1026 100  mpiexec -rf rankfile_linux hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; All nodes which are allocated for this job are already filled.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; linpc4 fd1026 101 mpiexec -hostfile host_linpc0_1 -rf rankfile_linux hostname
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] [[49559,0],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c at line 927
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] Failing at address: 0x900306368
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] [ 0] /lib64/libpthread.so.0(+0xfd00) [0x7fbe174bcd00]
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] [ 1] /lib64/libc.so.6(cfree+0x14) [0x7fbe17197d24]
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] [ 2] 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4(orte_odls_base_default_construct_child_list+0x2091) 
</span><br>
<span class="quotelev1">&gt; [0x7fbe182e4d21]
</span><br>
<span class="quotelev1">&gt; [linpc4:08079] [ 3] /usr/local/openmpi-1.6.2_64_cc/lib64/openmpi/mca_odls_default.so(+0x10dba) [0x7fbe15415dba]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any suggestion in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="20397.php">Siegmar Gross: "Re: [OMPI users] one more problem with process bindings on openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20395.php">Siegmar Gross: "Re: [OMPI users] question to binding options in openmpi-1.6.2"</a>
<li><strong>In reply to:</strong> <a href="20386.php">Siegmar Gross: "[OMPI users] problem with rankfile and openmpi-1.6.2"</a>
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
