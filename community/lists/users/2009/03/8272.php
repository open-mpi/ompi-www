<?
$subject_val = "[OMPI users] Calculation stuck in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 05:22:11 2009" -->
<!-- isoreceived="20090303102211" -->
<!-- sent="Tue, 3 Mar 2009 11:22:06 +0100" -->
<!-- isosent="20090303102206" -->
<!-- name="Ondrej Marsalek" -->
<!-- email="ondrej.marsalek_at_[hidden]" -->
<!-- subject="[OMPI users] Calculation stuck in MPI" -->
<!-- id="97b6a4330903030222n4b6da31fxdbcc68c3ce518cb8_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Calculation stuck in MPI<br>
<strong>From:</strong> Ondrej Marsalek (<em>ondrej.marsalek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 05:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>Reply:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear everyone,
<br>
<p>I have a calculation (the CP2K program) using MPI over Infiniband and
<br>
it is stuck. All processes (16 on 4 nodes) are running, taking 100%
<br>
CPU. Attaching a debugger reveals this (only the end of the stack
<br>
shown here):
<br>
<p>(gdb) backtrace
<br>
#0  0x00002b3460916dbf in btl_openib_component_progress () from
<br>
/home/marsalek/opt/openmpi-1.3-intel/lib/openmpi/mca_btl_openib.so
<br>
#1  0x00002b345c22c778 in opal_progress () from
<br>
/home/marsalek/opt/openmpi-1.3-intel/lib/libopen-pal.so.0
<br>
#2  0x00002b345bd2d66d in ompi_request_default_wait_any () from
<br>
/home/marsalek/opt/openmpi-1.3-intel/lib/libmpi.so.0
<br>
#3  0x00002b345bd6021a in PMPI_Waitany () from
<br>
/home/marsalek/opt/openmpi-1.3-intel/lib/libmpi.so.0
<br>
#4  0x00002b345bae77f1 in pmpi_waitany__ () from
<br>
/home/marsalek/opt/openmpi-1.3-intel/lib/libmpi_f77.so.0
<br>
<p>It has survived a restart of the IB switch, unlike &quot;healthy&quot; runs. My
<br>
question is - is it obvious at what level the problem is? IB, Open
<br>
MPI, application?I would be glad to provide detailed information, if
<br>
anyone was willing to help. I want to work on this, but unfortunately
<br>
I am not sure where to begin.
<br>
<p>Best regards,
<br>
Ondrej Marsalek
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>Reply:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
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
