<?
$subject_val = "Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 12:21:08 2015" -->
<!-- isoreceived="20150203172108" -->
<!-- sent="Tue, 3 Feb 2015 17:20:53 +0000" -->
<!-- isosent="20150203172053" -->
<!-- name="Burns, Andrew J CTR (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C337177D03DD_at_ucolhpkl.easf.csd.disa.mil" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BLU179-W29AB7EB01694A23FAF1508EA3D0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuring a code with MPI/OPENMPI (UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-03 12:20:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p>Make sure that you are also using icc and icpc in addition to ifort. GCC built code is not necessarily compatible with Intel build
<br>
code as GCC uses some custom symbols here and there.
<br>
<p>Andrew Burns
<br>
Lockheed Martin
<br>
Software Engineer
<br>
410-306-0409
<br>
ARL DSRC
<br>
andrew.j.burns2_at_[hidden]
<br>
andrew.j.burns35.ctr_at_[hidden]
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Elio Physics
<br>
Sent: Tuesday, February 03, 2015 12:14 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] configuring a code with MPI/OPENMPI
<br>
<p>Dear all,
<br>
<p>II am trying to configure a code  with mpi (for parallel processing)  to do some calculations so basically I type:
<br>
<p>./configure 
<br>
<p>and I get:
<br>
<p>configure: error: Fortran compiler does not provide iso_c_binding module. Use a more recent version or a different compiler
<br>
<p><p>which means that my GCC 4.1 compiler is too old to build the code (something i do not have control over..It is a cluster of the Uni
<br>
where I work). so I tried another compiler ifort:
<br>
<p>./configure  --enable-mpi=yes  FC=ifort
<br>
&nbsp;but now I get another error:
<br>
<p>&nbsp;==============================================================================
<br>
&nbsp;=== Multicore architecture support                                         ===
<br>
&nbsp;==============================================================================
<br>
<p>checking whether to enable OpenMP support... no checking whether to build MPI code... yes checking whether the C compiler supports
<br>
MPI... no checking whether the C++ compiler supports MPI... no checking whether the Fortran Compiler supports MPI... no checking
<br>
whether MPI is usable... no
<br>
configure: error: MPI support is broken - please fix your config parameters and/or MPI installation
<br>
<p>Agaiin, I tried ti give a path for the mpi compiler:
<br>
<p>&nbsp;./configure  --enable-mpi  --with-mpi-prefix=/usr FC=ifort
<br>
<p>WHICH APPARENTLY SOLVED THE PREVIOUS ERROR:
<br>
&nbsp;==============================================================================
<br>
&nbsp;=== Multicore architecture startup                                         ===
<br>
&nbsp;==============================================================================
<br>
<p>configure: Initializing MPI support
<br>
configure: looking for MPI in /usr
<br>
checking for a MPI C compiler... /usr/bin/mpicc checking for a MPI C++ compiler... /usr/bin/mpicxx checking for a MPI Fortran
<br>
compiler... /usr/bin/mpif90
<br>
configure: creating wrapper for MPI Fortran compiler
<br>
configure: GPU support disabled from command-line
<br>
&nbsp;
<br>
But stranegly enough got me back to the furst error although I am using ifort!!
<br>
<p>checking whether the Fortran compiler provides the iso_c_binding module... configure: error: Fortran compiler does not provide
<br>
iso_c_binding module. Use a more recent version or a different compiler
<br>
<p>so what is going on?? please can anyone help me on this..Thank youu
<br>
<p>Elio
<br>
University of Rondonia
<br>
Brazil
<br>
<p><p><p>Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26269/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>Previous message:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="26268.php">Elio Physics: "[OMPI users] configuring a code with MPI/OPENMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26270.php">Nick Papior Andersen: "Re: [OMPI users] configuring a code with MPI/OPENMPI"</a>
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
