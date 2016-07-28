<?
$subject_val = "[OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  8 09:19:53 2012" -->
<!-- isoreceived="20120808131953" -->
<!-- sent="Wed, 08 Aug 2012 15:19:48 +0200" -->
<!-- isosent="20120808131948" -->
<!-- name="ESCOBAR Juan" -->
<!-- email="Juan.Escobar_at_[hidden]" -->
<!-- subject="[OMPI users] Compilation of OpenMPI 1.5.4 &amp;amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ." -->
<!-- id="50226774.7040605_at_aero.obs-mip.fr" -->
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
<strong>Subject:</strong> [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  .<br>
<strong>From:</strong> ESCOBAR Juan (<em>Juan.Escobar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-08 09:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello .
<br>
<p>The 'warning print' statement introduced in the correction made since version 1.5.4 and 1.6.X on this script :
<br>
openmpi-1.6.1rc2/ompi/mpi/f90/scripts/mpi_scatterv_f90.f90.sh :
<br>
<p><span class="quotelev1">&gt;  print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendcounts and displs arguments! 
</span><br>
<p><p>generate a compilation error when compiling with PGI compiler ( last version 12.6 tested )
<br>
because the 'print' line if far to long for a 'standard/normed ' fortran compiler = 132 characters max  by lines .
<br>
<p>=&gt; splitting the 'print' line with &quot;&amp;&quot; solve the problem .
<br>
<p>Find the suggested script ( version 1.6.1rc2 ) in the mail
<br>
<p>A+
<br>
<p>Juan
<br>
<p><pre>
-- 
Juan ESCOBAR
Support MESONH
Laboratoire d'A&#233;rologie, O.M.P.
14 avenue Edouard Belin
31400 - TOULOUSE
Tel : +33 (0)5-61-33-27-49
Fax : +33 (0)5-61-33-27-90

</pre>
<hr>
<ul>
<li>application/x-shellscript attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19909/mpi_scatterv_f90.f90.sh">mpi_scatterv_f90.f90.sh</a>
</ul>
<!-- attachment="mpi_scatterv_f90.f90.sh" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Previous message:</strong> <a href="19908.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
<li><strong>Reply:</strong> <a href="19910.php">Jeff Squyres: "Re: [OMPI users] Compilation of OpenMPI 1.5.4 &amp; 1.6.X fail for PGI compiler , line to long for 'mpi_scatterv_f90.f90'  ."</a>
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
