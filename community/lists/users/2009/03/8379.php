<?
$subject_val = "[OMPI users] Upgrade from Open MPI 1.2 to 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 12:00:05 2009" -->
<!-- isoreceived="20090310160005" -->
<!-- sent="Tue, 10 Mar 2009 12:59:19 -0300" -->
<!-- isosent="20090310155919" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="[OMPI users] Upgrade from Open MPI 1.2 to 1.3" -->
<!-- id="49B68E57.8040500_at_ap.smu.ca" -->
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
<strong>Subject:</strong> [OMPI users] Upgrade from Open MPI 1.2 to 1.3<br>
<strong>From:</strong> Serge (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 11:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We have a number of applications built with Open MPI 1.2 in a shared 
<br>
multi-user environment. The Open MPI library upgrade has been always 
<br>
transparent and painless within the v1.2 branch. Now we would like to 
<br>
switch to Open MPI 1.3 as seamlessly. However, an application built with 
<br>
ompi v1.2 will not run with the 1.3 library; the typical error messages 
<br>
are given below. Apparently, the type ompi_communicator_t has changed.
<br>
<p>Symbol `ompi_mpi_comm_null' has different size in shared object, 
<br>
consider re-linking
<br>
Symbol `ompi_mpi_comm_world' has different size in shared object, 
<br>
consider re-linking
<br>
<p>Do I have to rebuild all the applications with Open MPI 1.3?
<br>
<p>Is there a better way to do a smooth upgrade?
<br>
<p>Thank you.
<br>
<p>= Serge
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8380.php">Mostyn Lewis: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>Previous message:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<li><strong>Reply:</strong> <a href="8386.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
