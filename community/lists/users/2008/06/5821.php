<?
$subject_val = "[OMPI users] libibverbs and openmpi 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 04:37:52 2008" -->
<!-- isoreceived="20080605083752" -->
<!-- sent="Thu, 05 Jun 2008 10:37:39 +0200" -->
<!-- isosent="20080605083739" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="[OMPI users] libibverbs and openmpi 1.2.6" -->
<!-- id="4847A5D3.5000007_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] libibverbs and openmpi 1.2.6<br>
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 04:37:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we have a some issues with the openmpi 1.2.6 and libibverbs.
<br>
<p>We have some machines with Infiniband and some without.
<br>
We compiled openmpi with IB support.
<br>
With OpenMPI 1.2.5 it was no problem running that version on the 
<br>
machines without IB.
<br>
However with 1.2.6 the library libibverbs is linked which doen't exist 
<br>
on some of the machines.
<br>
<p>Is there a way to get programs compiled on a IB machine running them on 
<br>
machines without IB? (remove the dependency to libibverbs from openmpi 
<br>
1.2.6)
<br>
<p><p>best regards,
<br>
Samuel
<br>
<p><pre>
-- 
Dipl.-Inform. Samuel Sarholz    -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication,
Seffenter Weg 23, 52074 Aachen (Germany), Office: 2.13
Tel: +49 241/80-24915 - Fax: +49 241/80-22134
mailto:sarholz_at_[hidden] www.rz.rwth-aachen.de

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5821/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Previous message:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
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
