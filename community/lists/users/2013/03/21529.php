<?
$subject_val = "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 13 06:37:09 2013" -->
<!-- isoreceived="20130313103709" -->
<!-- sent="Wed, 13 Mar 2013 11:37:01 +0100" -->
<!-- isosent="20130313103701" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'" -->
<!-- id="7b1881dc-816c-4bf7-bdaf-d6ce54c5dab3_at_HUB1.rwth-ad.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A5117ABD18DE547BB3D3FE3D0CB3188322997_at_MBX4.rwth-ad.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-13 06:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AFAIK the GNU people change the Fotran Module syntax every time they get any 
<br>
chance for doing it :-(
<br>
<p>So openmpi compiled with  4.4.6 (sys-default for RHEL 6.x) definitely does not 
<br>
work with 4.5, 4.6, 4.7 versions of gfortran.
<br>
<p>Intel 'ifort' compiler build modules which are compatible from 11.x through 13.x 
<br>
versions.
<br>
<p>So, the recommended solution is to build an own  version of Open MPI with any 
<br>
compiler you use.
<br>
<p>Greetings,
<br>
Paul
<br>
<p><p>P.S. As Hristo said, changing the Fortran compiler vendor and using the 
<br>
precompiled Fortran header would never work: the syntax of these .mod files is 
<br>
not standatised at all.
<br>
<p>On 03/13/13 11:05, Iliev, Hristo wrote:
<br>
<span class="quotelev1">&gt; However, it works if for example you configure Open MPI with the system supplied
</span><br>
<span class="quotelev1">&gt; version of gfortran and then specify a later gfortran version, e.g.
</span><br>
<span class="quotelev1">&gt; OMPI_FC=gfortran-4.7 (unless the module format has changed in the meantime).
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21529/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Previous message:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>In reply to:</strong> <a href="21528.php">Iliev, Hristo: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
<li><strong>Reply:</strong> <a href="21530.php">Dominik Goeddeke: "Re: [OMPI users] bug in mpif90? OMPI_FC envvar does not work with 'use	mpi'"</a>
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
