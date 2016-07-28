<?
$subject_val = "[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  2 13:21:30 2011" -->
<!-- isoreceived="20111202182130" -->
<!-- sent="Fri, 02 Dec 2011 19:21:23 +0100" -->
<!-- isosent="20111202182123" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?" -->
<!-- id="4ED91723.4020205_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-02 13:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17885.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17883.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
<p>OFED 1.5.4 will contain DAPL 2.0.34.
<br>
<p>I tried to compile the newest release of Open MPI (1.5.4) with this DAPL 
<br>
release and I was not successful.
<br>
<p>Configuring with --with-udapl=/path/to/2.0.34/dapl
<br>
got the error &quot;/path/to/2.0.34/dapl/include/dat/udat.h not found&quot;
<br>
Looking into include dir: there is no 'dat' subdir but 'dat2'.
<br>
<p>Just for fun I also tried to move 'dat2' to 'dat' back (dirty hack I 
<br>
know :-) - the configure stage was then successful but the compilation 
<br>
failed. The header seem to be really changed, not just moved.
<br>
<p>The question: are the Open MPI developer aware of this changes, and when 
<br>
a version of Open MPI will be available with support for DAPL 2.0.34?
<br>
<p>(Background: we have some trouble with Intel MPI and current DAPL which 
<br>
we do not have with DAPL 2.0.34, so our dream is to update as soon as 
<br>
possible)
<br>
<p>Best wishes and an nice weekend,
<br>
<p>Paul
<br>
<p><p><p><p><p><p><a href="http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes">http://www.openfabrics.org/downloads/OFED/release_notes/OFED_1.5.4_release_notes</a>
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17884/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17885.php">Jeff Squyres: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Previous message:</strong> <a href="17883.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>Reply:</strong> <a href="17889.php">Jeff Squyres: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
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
