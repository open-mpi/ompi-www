<?
$subject_val = "Re: [OMPI users] basic questions about compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 11:34:17 2013" -->
<!-- isoreceived="20130522153417" -->
<!-- sent="Wed, 22 May 2013 17:34:12 +0200" -->
<!-- isosent="20130522153412" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] basic questions about compiling OpenMPI" -->
<!-- id="519CE574.4050809_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0C9F2791_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] basic questions about compiling OpenMPI<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 11:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21947.php">Nathan Hjelm: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21945.php">Blosch, Edwin L: "[OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/22/13 17:08, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt; Apologies for not exploring the FAQ first.
</span><br>
<p>No comments =)
<br>
<p><p><p><span class="quotelev1">&gt; If I want to use Intel or PGI compilers but link against the OpenMPI that ships with RedHat Enterprise Linux 6 (compiled with g++ I presume), are there any issues to watch out for, during linking?
</span><br>
<p>At least, the Fortran-90 bindings (&quot;use mpi&quot;) won't work at all (they're 
<br>
compiler-dependent.
<br>
<p>So, our way is to compile a version of Open MPI with each compiler. I think this 
<br>
is recommended.
<br>
<p>Note also that the version of Open MPI shipped with Linux is usuallu a bit dusty.
<br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21948/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21949.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21947.php">Nathan Hjelm: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21945.php">Blosch, Edwin L: "[OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
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
