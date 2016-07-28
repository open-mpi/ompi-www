<?
$subject_val = "[OMPI users] Communicators in Fortran and C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 02:54:04 2008" -->
<!-- isoreceived="20080605065404" -->
<!-- sent="Thu, 05 Jun 2008 08:53:55 +0200" -->
<!-- isosent="20080605065355" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="[OMPI users] Communicators in Fortran and C" -->
<!-- id="48478D83.6080800_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Communicators in Fortran and C<br>
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 02:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>Maybe reply:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have problems running a Fortran program which is calling a C library 
<br>
with OpenMPI.
<br>
<p>The problem is that the Fortan part has a communicator which is passed 
<br>
to the C library.
<br>
And if I understand the headers right a communicator is an integer in 
<br>
fortran, but a struct on the C side of openmpi.
<br>
<p>Is there a way to translate/cast these communicators?
<br>
<p><p><p><p>best regards,
<br>
Samuel
<br>
<p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5820/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5821.php">Samuel Sarholz: "[OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
<li><strong>Maybe reply:</strong> <a href="5823.php">Terry Dontje: "Re: [OMPI users] Communicators in Fortran and C"</a>
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
