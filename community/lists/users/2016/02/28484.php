<?
$subject_val = "[OMPI users] error openmpi check hdf5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 05:06:56 2016" -->
<!-- isoreceived="20160210100656" -->
<!-- sent="Wed, 10 Feb 2016 14:13:13 +0400" -->
<!-- isosent="20160210101313" -->
<!-- name="Delphine Ramalingom" -->
<!-- email="delphine.ramalingom_at_[hidden]" -->
<!-- subject="[OMPI users] error openmpi check hdf5" -->
<!-- id="56BB0D39.3060009_at_univ-reunion.fr" -->
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
<strong>Subject:</strong> [OMPI users] error openmpi check hdf5<br>
<strong>From:</strong> Delphine Ramalingom (<em>delphine.ramalingom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-10 05:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28485.php">Peter Wind: "[OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I try to compile a parallel version of hdf5.
<br>
I have error messages when I check with openmpi.
<br>
<p>Support on HDF5 told me that the errors seem related to the new ompio 
<br>
implementation inside
<br>
open MPI for MPI-I/O. He suggests that I talk to the OMPI mailing list 
<br>
to resolve  these errors.
<br>
<p>For information, my version of openmpi is : gcc (GCC) 4.8.2
<br>
mpicc --showme
<br>
gcc -I/programs/Compilateurs2/usr/include -pthread -Wl,-rpath 
<br>
-Wl,/programs/Compilateurs2/usr/lib -Wl,--enable-new-dtags 
<br>
-L/programs/Compilateurs2/usr/lib -lmpi
<br>
<p>Errors are :
<br>
<p>.../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
<br>
/programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
<br>
undefined symbol: ompi_io_ompio_decode_datatype
<br>
.../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
<br>
/programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
<br>
undefined symbol: ompi_io_ompio_decode_datatype
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
.../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
<br>
/programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
<br>
undefined symbol: ompi_io_ompio_set_aggregator_props
<br>
.../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
<br>
/programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
<br>
undefined symbol: ompi_io_ompio_set_aggregator_props
<br>
.../hdf5-1.8.16_gnu/testpar/.libs/t_mpi: symbol lookup error: 
<br>
/programs/Compilateurs2/usr/lib/openmpi/mca_fcoll_two_phase.so: 
<br>
undefined symbol: ompi_io_ompio_set_aggregator_props
<br>
<p><p>Thanks in advance for your help.
<br>
<p>Regards
<br>
Delphine
<br>
<p><pre>
-- 
&lt;<a href="http://www.univ-reunion.fr">http://www.univ-reunion.fr</a>&gt; *Delphine Ramalingom Barbary | Ing&#195;&#169;nieure 
en Calcul Scientifique *
Direction des Usages du Num&#195;&#169;rique (DUN)
Centre de D&#195;&#169;veloppement du Calcul Scientifique
TEL : 02 62 93 84 87- FAX : 02 62 93 81 06
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-28484/logouru.png" alt="logouru.png">
<!-- attachment="logouru.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28485.php">Peter Wind: "[OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28483.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
<li><strong>Reply:</strong> <a href="28489.php">Edgar Gabriel: "Re: [OMPI users] error openmpi check hdf5"</a>
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
