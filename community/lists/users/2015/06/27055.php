<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 01:59:04 2015" -->
<!-- isoreceived="20150609055904" -->
<!-- sent="Tue, 09 Jun 2015 14:58:59 +0900" -->
<!-- isosent="20150609055859" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="557680A3.2070906_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5575C75D.4020402_at_att.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI on Raspberry Pi 2<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-09 01:58:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27054.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>In reply to:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>dmb is available only on ARMv7 (Pi 2)
<br>
<p>if i remember correctly, you are building Open MPI on ARMv7 as well (Pi 2),
<br>
so this is not a cross compilation issue.
<br>
<p>if you configure with -march=armv7, the relevant log is
<br>
libtool: compile:  gcc -std=gnu99 -DHAVE_CONFIG_H -I. 
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include 
<br>
-I../../oshmem/include 
<br>
-I../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen 
<br>
-I../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -I../.. 
<br>
-I/work/pi/src/openmpi-1.8.5/opal/mca/hwloc/hwloc191/hwloc/include 
<br>
-I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent 
<br>
-I/work/pi/src/openmpi-1.8.5/opal/mca/event/libevent2021/libevent/include -march=armv7 
<br>
-MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  
<br>
-fPIC -DPIC -o .libs/atomic-asm.o^M
<br>
atomic-asm.S:1:0: error: target CPU does not support ARM mode
<br>
<p>which is very puzzling ...
<br>
<p>can you confirm
<br>
1) you are not cross compiling
<br>
2) your gcc can generate code for armv7 ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p><p>On 6/9/2015 1:48 AM, Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry - I was traveling for a week and didn't have to the RPi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What happens if you don't supply CCASFLAGS at all?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from &quot;make&quot; is below. It died when it tried to compile
</span><br>
<span class="quotelev1">&gt; atomic-local. It says the processor doesn't support ARM mode &quot;dmb&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ make
</span><br>
<span class="quotelev1">&gt; Making all in config
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/config'
</span><br>
<span class="quotelev1">&gt; Making all in contrib
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev1">&gt; make[1]: Nothing to be done for 'all'.
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/contrib'
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev1">&gt;   CC       asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:86: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:91: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:107: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:112: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:115: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:130: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `ldrexd r4,r5,[r0]'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:135: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `dmb'
</span><br>
<span class="quotelev1">&gt; atomic-asm.S:136: Error: selected processor does not support ARM mode 
</span><br>
<span class="quotelev1">&gt; `strexd r1,r6,r7,[r0]'
</span><br>
<span class="quotelev1">&gt; Makefile:1608: recipe for target 'atomic-asm.lo' failed
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
</span><br>
<span class="quotelev1">&gt; Makefile:2149: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
</span><br>
<span class="quotelev1">&gt; Makefile:1698: recipe for target 'all-recursive' failed
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27050.php">http://www.open-mpi.org/community/lists/users/2015/06/27050.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27056.php">Siegmar Gross: "[OMPI users] building openmpi-v1.10-dev-59-g4e9cea6 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27054.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>In reply to:</strong> <a href="27050.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27058.php">Jeff Layton: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
