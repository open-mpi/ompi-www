<?
$subject_val = "[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 16 09:49:07 2012" -->
<!-- isoreceived="20121016134907" -->
<!-- sent="Tue, 16 Oct 2012 06:48:59 -0700" -->
<!-- isosent="20121016134859" -->
<!-- name="Anup Rao" -->
<!-- email="ARao_at_[hidden]" -->
<!-- subject="[OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5" -->
<!-- id="82891153429E1C408B3913DD1DF607977A51EDE415_at_spudnik-ex.spudnikinc.com" -->
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
<strong>Subject:</strong> [OMPI users] Building openmpi 1.6.2 using yocto based toolchain for ARMv5<br>
<strong>From:</strong> Anup Rao (<em>ARao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-16 09:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20494.php">Brian Budge: "[OMPI users] singleton spawn regression"</a>
<li><strong>Previous message:</strong> <a href="20492.php">Valentin Clement: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am attempting to build openmpi 1.6.2 using a customized toolchain built using yocto for an ARMv5 target.
<br>
I build with the following commands with the toolchain in my path
<br>
<p>CFLAGS=-march=armv5
<br>
./configure --host=arm-prysm-linux-gnueabi --build=i686-pc-linux-gnu CFLAGS=-march=armv5
<br>
<p>However, the build halts after a few minutes with the following error :
<br>
<p>rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:32: Error: selected processor does not support ARM mode `ldrex r3,[r0]'
<br>
atomic-asm.S:35: Error: selected processor does not support ARM mode `strex r12,r2,[r0]'
<br>
atomic-asm.S:49: Error: selected processor does not support ARM mode `ldrex r3,[r0]'
<br>
atomic-asm.S:52: Error: selected processor does not support ARM mode `strex r12,r2,[r0]'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:67: Error: selected processor does not support ARM mode `ldrex r3,[r0]'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:71: Error: selected processor does not support ARM mode `strex r12,r2,[r0]'
<br>
atomic-asm.S:86: Error: selected processor does not support ARM mode `ldrex r2,[r0]'
<br>
atomic-asm.S:88: Error: selected processor does not support ARM mode `strex r3,r2,[r0]'
<br>
atomic-asm.S:100: Error: selected processor does not support ARM mode `ldrex r2,[r0]'
<br>
atomic-asm.S:102: Error: selected processor does not support ARM mode `strex r3,r2,[r0]'
<br>
<p>Kindly guide me.
<br>
<p>Regards,
<br>
Anup
<br>
<p>________________________________
<br>
CONFIDENTIAL COMMUNICATION -- The information in this e-mail (including any attachments) is confidential and proprietary to PRYSM, INC. and intended only for the sole use of the intended recipient. If you have received this communication in error, then any review, dissemination, distribution, or copying of this message is strictly prohibited, and please permanently delete this message (including any copies of this e-mail and any attachments thereto) and notify us immediately by return e-mail or by forwarding this email to Susan Kent at skent_at_prysm.com.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20494.php">Brian Budge: "[OMPI users] singleton spawn regression"</a>
<li><strong>Previous message:</strong> <a href="20492.php">Valentin Clement: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
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
