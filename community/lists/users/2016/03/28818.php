<?
$subject_val = "[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 10:11:01 2016" -->
<!-- isoreceived="20160324141101" -->
<!-- sent="Thu, 24 Mar 2016 15:10:57 +0100" -->
<!-- isosent="20160324141057" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="[OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE" -->
<!-- id="56F3F571.6060404_at_in.tum.de" -->
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
<strong>Subject:</strong> [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 10:10:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to run the attached program with OpenMPI. It works well with 
<br>
MPICH and Intel MPI but I get a deadlock when using OpenMPI.
<br>
I am using OpenMPI 1.10.0 with support for MPI_THREAD_MULTIPLE.
<br>
<p>It seems like ROMIO uses global locks in OpenMPI which is a problem if 
<br>
multiple threads want to do collective I/O.
<br>
<p>Any idea how one can get around this issue?
<br>
<p>Best regards,
<br>
Sebastian
<br>
<p><pre>
-- 
Sebastian Rettenberger, M.Sc.
Technische Universit&#195;&#164;t M&#195;&#188;nchen
Department of Informatics
Chair of Scientific Computing
Boltzmannstrasse 3, 85748 Garching, Germany
<a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28818/romio_test.cpp">romio_test.cpp</a>
</ul>
<!-- attachment="romio_test.cpp" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28818/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Previous message:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28819.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="28822.php">Jeff Hammond: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
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
