<?
$subject_val = "[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 20 13:22:48 2010" -->
<!-- isoreceived="20100920172248" -->
<!-- sent="Mon, 20 Sep 2010 13:20:26 -0400" -->
<!-- isosent="20100920172026" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="[OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..." -->
<!-- id="5E9838FE224683419F586D9DF46A0E25B05422FBFA_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ...<br>
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-20 13:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14243.php">Matheus Bersot Siqueira Barros: "[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Reply:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I was not expecting things to work, and find that codes compiled using
<br>
OpenMPI 1.4.1 commands under SLES 10.2 produce the following message
<br>
when run under SLES11:
<br>
<p>mca: base: component_find: unable to open /share/apps/openmpi-intel/1.4.1/lib/openmpi/mca_btl_openib: perhaps a missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
<p>This file is in position and is NOT the result of a faulty mixed-release over-build
<br>
(things work great under SLES10.2).
<br>
<p>The message indicates that (as the default is to build OpenMPI dynamically
<br>
with share objects) in loading this required IB-related library there must
<br>
be a format incompatibility.   However, I find that if I force the use of GE with:
<br>
<p>-mca btl tcp,self
<br>
<p>things seem to run OK under SLES 11.
<br>
<p>Could someone add some detail here on what, if anything, I can expect to
<br>
work when we try to run old SLES 10.2 build OpenMPI 1.4.1 binaries under
<br>
SLES 11.   I would have thought NOTHING, but maybe that is not quite right.
<br>
<p>Perhaps we can run using GE under SLES 11 with the old binaries until I get
<br>
things recompiled (ugh!) under SLES 11?
<br>
<p>Thanks,
<br>
<p>Richard Walsh
<br>
Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
718-982-3319
<br>
612-382-4620
<br>
<p>Reason does give the heart pause;
<br>
As the heart gives reason fits.
<br>
<p>Yet, to live where reason always rules;
<br>
Is to kill one's heart with wits.
<br>
<p>Think green before you print this email.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14245.php">Ken Mighell: "[OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14243.php">Matheus Bersot Siqueira Barros: "[OMPI users] function fgets hangs a mpi program when it is used ompi-ps command"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
<li><strong>Reply:</strong> <a href="14277.php">Jeff Squyres: "Re: [OMPI users] Continued functionality across a SLES10 to SLES11 upgrade ..."</a>
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
