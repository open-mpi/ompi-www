<?
$subject_val = "[OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 12:25:40 2008" -->
<!-- isoreceived="20080616162540" -->
<!-- sent="Mon, 16 Jun 2008 10:25:25 -0600" -->
<!-- isosent="20080616162525" -->
<!-- name="Weirs, V Gregory" -->
<!-- email="vgweirs_at_[hidden]" -->
<!-- subject="[OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="C47BF017.5D40%vgweirs_at_sandia.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C47BEF21.5D39%vgweirs_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] gfortran bindings apparently not built on mac os leopard<br>
<strong>From:</strong> Weirs, V Gregory (<em>vgweirs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 12:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5886.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Maybe reply:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having trouble building mpif77/mpif90 with gfortran on Mac OS 10.5. Or maybe just running. The configure, make all, and make install seemed to go just fine, finding my gfortran and apparently using it, but the scripts mpif77 and mpif90 give the error that my openmpi was not built with fortran bindings. Mpicc and mpicxx don't give this error.  Ompi_info says the f77 and f90 bindings were built.
<br>
<p>I know that OS X 10.5 comes with openmpi mpicc and mpicxx installed, but not fortran bindings, and I was careful to put the openmpi I built first in the path.
<br>
<p>Some run output (mpif77 -version, ompi_info), config.log, configure.log, make.out, make-install.out are in the attached tarball.
<br>
<p>Any clues?
<br>
<p>Thanks,
<br>
Greg
<br>
<p><p><pre>
--
V. Gregory Weirs
Sandia National Laboratories                vgweirs_at_[hidden]
P.O.Box 5800, MS 0378                        phone: 505 845 2032
Albuquerque, NM 87185-0378              fax: 505 284 0154
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5883/dig.tar.gz__size_212754__creation-date_">dig.tar.gz</a>
</ul>
<!-- attachment="dig.tar.gz__size_212754__creation-date_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5882.php">pat.o'bryant_at_[hidden]: "[OMPI users] Application Context and OpenMPI 1.2.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5884.php">David Gunter: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5885.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5886.php">Doug Reeder: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Maybe reply:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
