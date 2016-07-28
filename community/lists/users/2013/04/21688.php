<?
$subject_val = "Re: [OMPI users] cannot build 32-bit openmpi-1.7 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 12:42:22 2013" -->
<!-- isoreceived="20130405164222" -->
<!-- sent="Fri, 05 Apr 2013 18:42:16 +0200" -->
<!-- isosent="20130405164216" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot build 32-bit openmpi-1.7 on Linux" -->
<!-- id="515EFEE8.3030508_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201304051556.r35FuFQ2006433_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] cannot build 32-bit openmpi-1.7 on Linux<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 12:42:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<li><strong>In reply to:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe with 99%prob this is not an Open MPI issue, but an issue of the used 
<br>
fortran compiler (PPFC) itself.
<br>
<p>You can verify this by going to the build subdir ('Entering directory...') and 
<br>
trying to find out _what command was called_. If your compiler crashes again, 
<br>
build a reproducer and send it to the compiler developer team :o)
<br>
<p>Best
<br>
Paul Kapinos
<br>
<p>On 04/05/13 17:56, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt;    PPFC     mpi-f08.lo
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.7/ompi/mpi/fortran/use-mpi-f08/mpi-f08.F90&quot;, Line = 1,
</span><br>
<span class="quotelev1">&gt; Column = 1: INTERNAL: Interrupt: Segmentation fault
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21688/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21689.php">Eric Chamberland: "[OMPI users] assert in opal_datatype_is_contiguous_memory_layout"</a>
<li><strong>Previous message:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
<li><strong>In reply to:</strong> <a href="21687.php">Siegmar Gross: "[OMPI users] cannot build 32-bit openmpi-1.7 on Linux"</a>
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
