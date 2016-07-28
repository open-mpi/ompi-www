<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 17:28:16 2007" -->
<!-- isoreceived="20070426212816" -->
<!-- sent="Thu, 26 Apr 2007 14:28:09 -0700" -->
<!-- isosent="20070426212809" -->
<!-- name="Jiming Jin" -->
<!-- email="JimingJin_at_[hidden]" -->
<!-- subject="[OMPI users] Compile WRFV2.2 with OpenMPI" -->
<!-- id="07423467-D1C9-4DE4-A08D-B01D299671F4_at_lbl.gov" -->
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
<strong>From:</strong> Jiming Jin (<em>JimingJin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 17:28:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3156.php">Götz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users:
<br>
<p>&nbsp;&nbsp;I have been trying to use the intel ifort and icc compilers to  
<br>
compile an atmospheric model called the Weather Research &amp;  
<br>
Forecasting model (WRFV2.2) on a Linux Cluster (x86_64) using Open- 
<br>
MPI v1.2 that were also compiled with INTEL ICC.   However, I got a  
<br>
lot of error messages as follows when compiling WRF.
<br>
/data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(788):  
<br>
error: expected an identifier
<br>
&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC  MPI_Fint MPI_Comm_c2f(MPI_Comm comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(802):  
<br>
error: &quot;MPI_Comm&quot; has already been declared in the current scope
<br>
&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC  MPI_Comm MPI_Comm_f2c(MPI_Fint comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(804):  
<br>
error: function &quot;MPI_Comm&quot; is not a type name
<br>
&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC  int MPI_Comm_free(MPI_Comm *comm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(805):  
<br>
error: function &quot;MPI_Comm&quot; is not a type name
<br>
&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC  int MPI_Comm_get_attr(MPI_Comm comm, int comm_keyval,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
/data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(807):  
<br>
error: function &quot;MPI_Comm&quot; is not a type name
<br>
&nbsp;&nbsp;&nbsp;OMPI_DECLSPEC  int MPI_Comm_get_errhandler(MPI_Comm comm,  
<br>
MPI_Errhandler *erhandler);
<br>
<p>I would highly appreciate it if someone could give me suggestions on  
<br>
how to fix the problem.
<br>
<p>Jiming
<br>
------------------------------------------
<br>
Jiming Jin, PhD
<br>
Earth Sciences Division
<br>
Lawrence Berkeley National Lab
<br>
One Cyclotron Road, Mail-Stop 90-1116
<br>
Berkeley, CA 94720
<br>
Tel: 510-486-7551
<br>
Fax: 510-486-5686
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3156.php">Götz Waschk: "[OMPI users] Problem running hpcc with a threaded BLAS"</a>
<li><strong>Previous message:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
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
