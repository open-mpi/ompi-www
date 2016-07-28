<?
$subject_val = "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 12:48:31 2015" -->
<!-- isoreceived="20150608164831" -->
<!-- sent="Mon, 08 Jun 2015 12:48:29 -0400" -->
<!-- isosent="20150608164829" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="5575C75D.4020402_at_att.net" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6429AF2D-4C91-4FFF-833D-27E9B9064830_at_cisco.com" -->
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
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 12:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>In reply to:</strong> <a href="27012.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry - I was traveling for a week and didn't have to the RPi.
<br>
<p><span class="quotelev1">&gt; What happens if you don't supply CCASFLAGS at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The output from &quot;make&quot; is below. It died when it tried to compile
<br>
atomic-local. It says the processor doesn't support ARM mode &quot;dmb&quot;.
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<p><p><p>pi_at_raspberrypi /work/pi/src/openmpi-1.8.5 $ make
<br>
Making all in config
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/config'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/config'
<br>
Making all in contrib
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/contrib'
<br>
make[1]: Nothing to be done for 'all'.
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/contrib'
<br>
Making all in opal
<br>
make[1]: Entering directory '/work/pi/src/openmpi-1.8.5/opal'
<br>
Making all in include
<br>
make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make  all-am
<br>
make[3]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make[3]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/include'
<br>
Making all in asm
<br>
make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
<br>
&nbsp;&nbsp;&nbsp;CC       asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;&nbsp;CPPAS    atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:86: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:91: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
atomic-asm.S:107: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:112: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
atomic-asm.S:115: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:130: Error: selected processor does not support ARM mode 
<br>
`ldrexd r4,r5,[r0]'
<br>
atomic-asm.S:135: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:136: Error: selected processor does not support ARM mode 
<br>
`strexd r1,r6,r7,[r0]'
<br>
Makefile:1608: recipe for target 'atomic-asm.lo' failed
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal/asm'
<br>
Makefile:2149: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory '/work/pi/src/openmpi-1.8.5/opal'
<br>
Makefile:1698: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27051.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27049.php">Dave Goodell (dgoodell): "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>In reply to:</strong> <a href="27012.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="27055.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
