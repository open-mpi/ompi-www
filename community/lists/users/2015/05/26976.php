<?
$subject_val = "[OMPI users] Building OpenMPI on Raspberry Pi 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 08:11:17 2015" -->
<!-- isoreceived="20150529121117" -->
<!-- sent="Fri, 29 May 2015 08:11:12 -0400" -->
<!-- isosent="20150529121112" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI on Raspberry Pi 2" -->
<!-- id="55685760.90303_at_att.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI on Raspberry Pi 2<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 08:11:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good morning,
<br>
<p>I'm building OpenMPI from source on a Raspberry Pi 2 and
<br>
I've hit an error. The error is:
<br>
<p>make[2]: Entering directory '/work/pi/src/openmpi-1.8.5/opal/asm'
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
<p><p>I was doing some googling and I saw where I need to specify
<br>
CCFLAGS when I run configure but I want to make 100% sure
<br>
I have the right arguments. Can anyone help?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<p>P.S. I'd rather build OpenMPI from source rather than use the pre-built
<br>
packages in the Raspbian repository.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Reply:</strong> <a href="26977.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
