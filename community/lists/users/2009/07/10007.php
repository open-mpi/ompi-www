<?
$subject_val = "Re: [OMPI users] ifort and gfortran module";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 17 22:13:32 2009" -->
<!-- isoreceived="20090718021332" -->
<!-- sent="Fri, 17 Jul 2009 22:13:20 -0400" -->
<!-- isosent="20090718021320" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ifort and gfortran module" -->
<!-- id="000701ca074d$527f4870$f77dd950$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090717192855.GA11520_at_stikine.its.sfu.ca" -->
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
<strong>From:</strong> Jim Kress (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-17 22:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10006.php">Martin Siegert: "[OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10006.php">Martin Siegert: "[OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why not generate an ifort version with a prefix of &lt;directory you want for
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Previous message:</strong> <a href="10006.php">Martin Siegert: "[OMPI users] ifort and gfortran module"</a>
<li><strong>In reply to:</strong> <a href="10006.php">Martin Siegert: "[OMPI users] ifort and gfortran module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
<li><strong>Reply:</strong> <a href="10008.php">rahmani: "Re: [OMPI users] ifort and gfortran module"</a>
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
