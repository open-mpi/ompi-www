<?
$subject_val = "[OMPI users] OpenMPI library conflicts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 04:31:36 2015" -->
<!-- isoreceived="20151204093136" -->
<!-- sent="Fri, 4 Dec 2015 10:31:30 +0100" -->
<!-- isosent="20151204093130" -->
<!-- name="Yilmaz, D." -->
<!-- email="d.yilmaz_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI library conflicts" -->
<!-- id="CAGWAij4a9HKhYyhOE8Pde-nLFN5u=WSxY76=AnQifkH1+GSuwQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI library conflicts<br>
<strong>From:</strong> Yilmaz, D. (<em>d.yilmaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-04 04:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
<li><strong>Previous message:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
<li><strong>Reply:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>If you are switching/rebulding the openmpi releases on your computer time
<br>
to time. Your latest openmpi build ( not the latest release) which you are
<br>
trying to install can not change the symbolic links of the openmpi
<br>
libraries in /usr/local/lib directory. After you built your the last
<br>
openmpi, the symbolic links of the library files may refer to the
<br>
previously installed openmpi libraries. These library conflicts may cause
<br>
segmentation faults on mpirun.
<br>
<p>FYI &amp; B.Regards,
<br>
Dogan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
<li><strong>Previous message:</strong> <a href="28130.php">Ralph Castain: "Re: [OMPI users] Open MPI not using parameters passed from PBS scheduler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
<li><strong>Reply:</strong> <a href="28132.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI library conflicts"</a>
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
