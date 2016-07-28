<?
$subject_val = "[OMPI users] Seg fault with PBS Pro 10.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 10:50:23 2010" -->
<!-- isoreceived="20100212155023" -->
<!-- sent="Fri, 12 Feb 2010 09:50:14 -0600" -->
<!-- isosent="20100212155014" -->
<!-- name="Repsher, Stephen J" -->
<!-- email="stephen.j.repsher_at_[hidden]" -->
<!-- subject="[OMPI users] Seg fault with PBS Pro 10.2" -->
<!-- id="F44D206478A0FF4A9FE422C463171D6626759A2B_at_XCH-MW-09V.mw.nos.boeing.com" -->
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
<strong>Subject:</strong> [OMPI users] Seg fault with PBS Pro 10.2<br>
<strong>From:</strong> Repsher, Stephen J (<em>stephen.j.repsher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 10:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having problems running Open MPI jobs under PBS Pro 10.2.  I've configured and built OpenMPI 1.4.1 with the Intel 11.1 compiler on Linux and with --with-tm support and the build runs fine.  I've also built with static libraries per the FAQ suggestion since libpbs is static.  However, my test application keep failing with a segmentation fault, but ONLY when trying to select more than 1 node.  Running on a single node withing PBS works fine.  Also, running outside of PBS vis ssh runs fine as well, even across multiple nodes.  OpenIB support is also enabled, but that doesn't seem to affect the error because I've also tried running with the --mca btl tcp,self flag and it still doesn't work.  Here is the error I'm getting:
<br>
<p>[n34:26892] *** Process received signal ***
<br>
[n34:26892] Signal: Segmentation fault (11)
<br>
[n34:26892] Signal code: Address not mapped (1)
<br>
[n34:26892] Failing at address: 0x3f
<br>
[n34:26892] [ 0] /lib64/libpthread.so.0 [0x7fc0309d6a90]
<br>
[n34:26892] [ 1] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(discui_+0x84) [0x476a50]
<br>
[n34:26892] [ 2] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(diswsi+0xc3) [0x474063]
<br>
[n34:26892] [ 3] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x471d0c]
<br>
[n34:26892] [ 4] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun(tm_init+0x1fe) [0x471ff8]
<br>
[n34:26892] [ 5] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x43f580]
<br>
[n34:26892] [ 6] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x413921]
<br>
[n34:26892] [ 7] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412b78]
<br>
[n34:26892] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x7fc03068d586]
<br>
[n34:26892] [ 9] /part0/apps/MPI/intel/openmpi-1.4.1/bin/pbs_mpirun [0x412ac9]
<br>
[n34:26892] *** End of error message ***
<br>
Segmentation fault
<br>
<p>(NOTE: pbs_mpirun = orterun, mpirun, etc.)
<br>
<p>Has anyone else seen errors like this within PBS?
<br>
<p>============================================
<br>
Steve Repsher
<br>
Boeing Defense, Space, &amp; Security - Rotorcraft
<br>
Aerodynamics/CFD
<br>
Phone: (610) 591-1510
<br>
Fax: (610) 591-6263
<br>
stephen.j.repsher_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Previous message:</strong> <a href="12076.php">Anton Starikov: "[OMPI users] Torque+BCLR+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
<li><strong>Reply:</strong> <a href="12078.php">Ralph Castain: "Re: [OMPI users] Seg fault with PBS Pro 10.2"</a>
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
