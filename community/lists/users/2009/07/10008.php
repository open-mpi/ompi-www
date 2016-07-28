<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 18 01:35:13 2009" -->
<!-- isoreceived="20090718053513" -->
<!-- sent="Sat, 18 Jul 2009 10:03:50 +0330 (IRST)" -->
<!-- isosent="20090718063350" -->
<!-- name="rahmani" -->
<!-- email="m_rahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="6296685.80571247898830323.JavaMail.root_at_mta.iut.ac.ir" -->
<!-- charset="utf-8" -->
<!-- inreplyto="000701ca074d$527f4870$f77dd950$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ifort and gfortran module<br>
<strong>From:</strong> rahmani (<em>m_rahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-18 02:33:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10009.php">Kartik: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>Previous message:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
you should compile openmpi with each pf intel and gfortran seperatly and install each of them in a separate location, and use mpi-selector to select one.
<br>
if don't use mpi selector, use full path of the compiler (for example /usr/local/openmpi/intel/bin/mpif90) and add the corresponding library to your LD_LIBRARY_PATH
<br>
Mahdi Rahmani
<br>
<p>----- Original Message -----
<br>
From: &quot;Jim Kress&quot; &lt;jimkress_58_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Saturday, July 18, 2009 5:43:20 AM (GMT+0330) Asia/Tehran
<br>
Subject: Re: [OMPI users] ifort and gfortran module
<br>
<p>Why not generate an ifort version with a prefix of &lt;directory you want for
<br>
openmpi&gt;_intel
<br>
And the gfortran version with a prefix of &lt;directory you want for
<br>
openmpi&gt;_gcc
<br>
<p>?
<br>
<p>That's what I do and then use mpi-selector to switch between versions as
<br>
required.
<br>
<p>Jim
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Martin Siegert
<br>
Sent: Friday, July 17, 2009 3:29 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] ifort and gfortran module
<br>
<p>Hi,
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10009.php">Kartik: "[OMPI users] OpenMPI.1.3.2 : PML add procs failed error while running with -mca btl openib, self, sm"</a>
<li><strong>Previous message:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10007.php">Jim Kress: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10012.php">Dave Love: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10017.php">Martin Siegert: "Re: [OMPI users] ifort and gfortran module"</a>
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
