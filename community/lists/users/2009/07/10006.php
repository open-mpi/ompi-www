<?
$subject_val = "[OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 15:29:00 2009" -->
<!-- isoreceived="20090717192900" -->
<!-- sent="Fri, 17 Jul 2009 12:28:55 -0700" -->
<!-- isosent="20090717192855" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="[OMPI users] ifort and gfortran module" -->
<!-- id="20090717192855.GA11520_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 15:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am wondering whether it is possible to support both the Intel
<br>
compiler ifort and gfortran within a single compiled version of
<br>
openmpi.
<br>
E.g.,
<br>
1. compile openmpi ifort as the Fortran compiler and install it
<br>
&nbsp;&nbsp;&nbsp;in /usr/local/openmpi-1.3.3
<br>
2. compile openmpi using gfortran, but do not install it; only
<br>
&nbsp;&nbsp;&nbsp;copy mpi.mod to /usr/local/openmpi-1.3.3/include/gfortran
<br>
<p>Is there a way to cause mpif90 to include
<br>
/usr/local/openmpi-1.3.3/include/gfortran
<br>
before including /usr/local/openmpi-1.3.3/include if OMPI_FC is
<br>
set to gfortran (more precisely if `basename $OMPI_FC` = gfortran)?
<br>
<p>Or is there another way of accomplishing this?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10005.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
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
