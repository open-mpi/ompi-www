<?
$subject_val = "[OMPI users] problem with rankfile and openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  3 06:10:16 2012" -->
<!-- isoreceived="20121003101016" -->
<!-- sent="Wed, 3 Oct 2012 12:03:21 +0200 (CEST)" -->
<!-- isosent="20121003100321" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile and openmpi-1.6.2" -->
<!-- id="201210031003.q93A3LxQ020282_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile and openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-03 06:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20387.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20385.php">Syed Ahsan Ali: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to test process bindings with a rankfile in openmpi-1.6.2. Both
<br>
machines are dual-processor dual-core machines running Solaris 10 x86_64.
<br>
<p>tyr fd1026 138 cat host_sunpc0_1 
<br>
sunpc0 slots=4
<br>
sunpc1 slots=4
<br>
<p>tyr fd1026 139 cat rankfile 
<br>
rank 0=sunpc0 slot=0:0-1,1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p>tyr fd1026 140 mpiexec -rf rankfile hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>Is something wrong with my rankfile, must I add a hostfile, or is it a
<br>
bug? I get the following error when I add a hostfile. 
<br>
<p><p>tyr fd1026 141 mpiexec -hostfile host_sunpc0_1 -rf rankfile hostname
<br>
[tyr.informatik.hs-fulda.de:20227] [[27927,0],0] ORTE_ERROR_LOG:
<br>
&nbsp;&nbsp;Data unpack would read past end of buffer in file
<br>
&nbsp;&nbsp;../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c
<br>
&nbsp;&nbsp;at line 927
<br>
^Cmpiexec: abort is already in progress...hit ctrl-c again to forcibly
<br>
&nbsp;&nbsp;terminate
<br>
<p><p>I get the following outputs when I use Linux instead of Solaris
<br>
(same hardware).
<br>
<p>tyr fd1026 146 mpiexec -rf rankfile_linux hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>tyr fd1026 147 mpiexec -hostfile host_linpc0_1 -rf rankfile_linux hostname
<br>
[tyr.informatik.hs-fulda.de:20260] [[27952,0],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in 
<br>
file ../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c at line 927
<br>
[tyr:20260] *** Process received signal ***
<br>
[tyr:20260] Signal: Bus Error (10)
<br>
[tyr:20260] Signal code: Invalid address alignment (1)
<br>
[tyr:20260] Failing at address: 7463703a2f2f3129
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:opal_backtrace_print+0x14
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:0x335b48
<br>
/lib/sparcv9/libc.so.1:0xd88a4
<br>
/lib/sparcv9/libc.so.1:0xcc418
<br>
/lib/sparcv9/libc.so.1:0xcc624
<br>
/lib/sparcv9/libc.so.1:0x64394 [ Signal 2131043744 (?)]
<br>
/lib/sparcv9/libc.so.1:free+0x30
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4.0.0:orte_odls_base_default_construct_child
<br>
_list+0x20b8
<br>
/export2/prog/SunOS_sparc/openmpi-1.6.2_64_cc/lib64/openmpi/mca_odls_default.so:0x11c80
<br>
...
<br>
<p>&quot;tyr&quot; is a Sparc machine running Solaris 10. I get a similar error if
<br>
I run the command on a Linux machine.
<br>
<p>tyr fd1026 148 ssh linpc4
<br>
linpc4 fd1026 100  mpiexec -rf rankfile_linux hostname
<br>
--------------------------------------------------------------------------
<br>
All nodes which are allocated for this job are already filled.
<br>
--------------------------------------------------------------------------
<br>
<p>linpc4 fd1026 101 mpiexec -hostfile host_linpc0_1 -rf rankfile_linux hostname
<br>
[linpc4:08079] [[49559,0],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file 
<br>
../../../../openmpi-1.6.2/orte/mca/odls/base/odls_base_default_fns.c at line 927
<br>
[linpc4:08079] *** Process received signal ***
<br>
[linpc4:08079] Signal: Segmentation fault (11)
<br>
[linpc4:08079] Signal code: Address not mapped (1)
<br>
[linpc4:08079] Failing at address: 0x900306368
<br>
[linpc4:08079] [ 0] /lib64/libpthread.so.0(+0xfd00) [0x7fbe174bcd00]
<br>
[linpc4:08079] [ 1] /lib64/libc.so.6(cfree+0x14) [0x7fbe17197d24]
<br>
[linpc4:08079] [ 2] 
<br>
/usr/local/openmpi-1.6.2_64_cc/lib64/libopen-rte.so.4(orte_odls_base_default_construct_child_list+0x2091) 
<br>
[0x7fbe182e4d21]
<br>
[linpc4:08079] [ 3] /usr/local/openmpi-1.6.2_64_cc/lib64/openmpi/mca_odls_default.so(+0x10dba) [0x7fbe15415dba]
<br>
...
<br>
<p>Thank you very much for any suggestion in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20387.php">John Hearns: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<li><strong>Previous message:</strong> <a href="20385.php">Syed Ahsan Ali: "Re: [OMPI users] Need solution- nodes can't find the paths."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20390.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20396.php">Ralph Castain: "Re: [OMPI users] problem with rankfile and openmpi-1.6.2"</a>
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
