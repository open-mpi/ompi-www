<?
$subject_val = "[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 14:40:20 2014" -->
<!-- isoreceived="20141201194020" -->
<!-- sent="Mon, 1 Dec 2014 20:40:10 +0100" -->
<!-- isosent="20141201194010" -->
<!-- name="J&#246;rg Stiller" -->
<!-- email="joerg.stiller_at_[hidden]" -->
<!-- subject="[OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran" -->
<!-- id="AAB11989-783C-4396-A367-E8FCB86EFAED_at_tu-dresden.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Operators for MPI handles not correctly overloaded with Intel Fortran<br>
<strong>From:</strong> J&#246;rg Stiller (<em>joerg.stiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-01 14:40:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Previous message:</strong> <a href="25897.php">Dewan Ibtesham (Shafi): "[OMPI users] OpenMPI with blcr problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using the Open MPI 1.8.3 with gcc 4.9.2 and ifort 15.0.1 and the MPI_F08 module on Mac OS X 4.9.
<br>
With the latter, the == and /= operators are overloaded for MPI handles , e.g.
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_REQUEST_NULL /= MPI_REQUEST_NULL
<br>
<p>should work and give the result .false. With gfortran 4.9.2 all is fine, however, with ifort, the loader produces an error message like this:
<br>
<p>Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;_mpi_f08_types_mp_ompi_request_op_ne_&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_verifymeshintegrity_IP_verifysharedcomponents_ in libhispeet.a 
<br>
<p>When I looking in the gfortran-version of the dynamic library I get
<br>
<p>$ nm libmpi_usempif08.dylib |grep -i request
<br>
0000000000010aa2 T ___mpi_f08_types_MOD_ompi_request_op_eq
<br>
0000000000010912 T ___mpi_f08_types_MOD_ompi_request_op_ne
<br>
[snip]
<br>
<p>These are the module procedures which implement the overloaded operators.
<br>
In the ifort-version of the dynamic library are no such  entries, though the directory contains the module file, mpi_f08_types.mod, which defines the interfaces.
<br>
<p>Both versions were configured build with rather standard configuration:
<br>
<p>./configure --prefix=/opt/openmpi-gcc F77=gfortran-mp-4.9 FC=gfortran-mp-4.9
<br>
<p>and
<br>
<p>./configure --prefix=/opt/openmpi-intel F77=/opt/intel/composerxe/bin/ifort FC=/opt/intel/composerxe/bin/ifort
<br>
<p>I seems to be an error when building thr Open MPI librraies for ifort, but so far I have no clue how to fix.
<br>
<p>Thanks  for any helpful comments.
<br>
Joerg
<br>
<p><pre>
--
PD Dr.-Ing. habil. J&#246;rg Stiller
Privatdozent / senior lecturer
Technische Universit&#228;t Dresden
Institut f&#252;r Str&#246;mungsmechanik
01062 Dresden / GERMANY
Tel.: +49 351 463/38328
Fax: +49 351 463/38087
E-Mail:  joerg.stiller_at_[hidden]
<a href="http://tu-dresden.de/Members/joerg.stiller">http://tu-dresden.de/Members/joerg.stiller</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25899.php">Dewan Ibtesham (Shafi): "Re: [OMPI users] OpenMPI with blcr problem"</a>
<li><strong>Previous message:</strong> <a href="25897.php">Dewan Ibtesham (Shafi): "[OMPI users] OpenMPI with blcr problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
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
