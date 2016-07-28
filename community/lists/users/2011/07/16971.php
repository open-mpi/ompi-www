<?
$subject_val = "[OMPI users] and the next one (3th today!) PGI+OpenMPI issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 12:13:42 2011" -->
<!-- isoreceived="20110722161342" -->
<!-- sent="Fri, 22 Jul 2011 18:13:38 +0200" -->
<!-- isosent="20110722161338" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] and the next one (3th today!) PGI+OpenMPI issue" -->
<!-- id="4E29A1B2.5020602_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] and the next one (3th today!) PGI+OpenMPI issue<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 12:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16970.php">Paul Kapinos: "[OMPI users] One more pgi+libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<li><strong>Reply:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
... just do almost the same thing: Try to install OpenMPI 1.4.3 using 
<br>
11.7 PGI Compiler on Scientific Linux 6.0. The same place, but other 
<br>
error message:
<br>
------------------------------------------------------------------------------
<br>
/usr/lib64/crt1.o: In function `_start':
<br>
(.text+0x20): undefined reference to `main'
<br>
gmake[2]: *** [libmpi_cxx.la] Error 2
<br>
gmake[2]: Leaving directory 
<br>
`/tmp/pk224850/linuxc2_11254/openmpi-1.4.3_linux64_pgi/ompi/mpi/cxx'
<br>
------------------------------------------------------------------------------
<br>
<p>and then the compilation aborted. Configure string below. With the 
<br>
Intel, gcc and Studio compiles, the very same installations were happily 
<br>
through.
<br>
<p>Maybe someone can give me a hint about this is an issue by openmpi, pgi 
<br>
or somehow else...
<br>
<p>Best wishes,
<br>
<p>Paul
<br>
<p>P.S.
<br>
<p>again, more logs downloadable:
<br>
<a href="https://gigamove.rz.rwth-aachen.de/d/id/WNk69nPr4w7svT">https://gigamove.rz.rwth-aachen.de/d/id/WNk69nPr4w7svT</a>
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16971/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16972.php">Ralph Castain: "Re: [OMPI users] Cofigure(?) problem building /1.5.3 on ScientificLinux6.0"</a>
<li><strong>Previous message:</strong> <a href="16970.php">Paul Kapinos: "[OMPI users] One more pgi+libtool issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
<li><strong>Reply:</strong> <a href="16977.php">Jeff Squyres: "Re: [OMPI users] and the next one (3th today!) PGI+OpenMPI issue"</a>
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
