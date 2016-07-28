<?
$subject_val = "[OMPI users] a question about [MPI]IO on systems without network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 05:34:54 2010" -->
<!-- isoreceived="20100929093454" -->
<!-- sent="Wed, 29 Sep 2010 11:34:49 +0200" -->
<!-- isosent="20100929093449" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] a question about [MPI]IO on systems without network filesystem" -->
<!-- id="4CA30839.2050805_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] a question about [MPI]IO on systems without network filesystem<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 05:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14353.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developer,
<br>
<p>We have a question about the possibility to use MPI IO (and possible 
<br>
regular I/O) on clusters which does *not* have a common filesystem 
<br>
(network filesystem) on all nodes.
<br>
<p>A common filesystem is mainly NOT a hard precondition to use OpenMPI:
<br>
<a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
<br>
<p><p>Say, we have a (diskless? equipped with very small disks?) cluster, on 
<br>
which only one node have access to a filesystem.
<br>
<p>Is it possible to configure/run OpenMPI in a such way, that only _one_ 
<br>
process (e.g. master) performs real disk I/O, and other processes sends 
<br>
the data to the master which works as an agent?
<br>
<p>Of course this would impacts the performance, because all data must be 
<br>
send over network, and the master may became a bottleneck. But is such 
<br>
scenario - IO of all processes bundled to one  process - practicable at all?
<br>
<p><p>Best wishes
<br>
Paul
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14352/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14353.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14356.php">jody: "Re: [OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<li><strong>Reply:</strong> <a href="14360.php">Terry Frankcombe: "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem"</a>
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
