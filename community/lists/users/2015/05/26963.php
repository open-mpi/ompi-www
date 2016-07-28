<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 07:25:44 2015" -->
<!-- isoreceived="20150528112544" -->
<!-- sent="Thu, 28 May 2015 13:25:40 +0200" -->
<!-- isosent="20150528112540" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="5566FB34.5080505_at_dkrz.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="DCD08767-D0CD-484E-93C7-F76C2F34B491_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-28 07:25:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/28/15 12:20, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Sounds like your pgcc compiler installation is busted.  You'll need to get that fixed to compile/install Open MPI.
</span><br>
<p>An alternative might be to use a system compiler (which is probably gcc or 
<br>
clang) for C and C++ and only use pgfortran for the Fortran parts of OpenMPI, 
<br>
i.e. try something like
<br>
<p>./configure CC=gcc CXX=g++ FC=pgf90 F77=pgf77 F90=pgf90 
<br>
--prefix=/opt/openmpi-1.8.5_pgf90
<br>
<p>Regards, Thomas Jahns
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26963/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26964.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
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
