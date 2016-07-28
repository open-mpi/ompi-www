<?
$subject_val = "Re: [OMPI users] Enable PMI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:40:40 2014" -->
<!-- isoreceived="20140516214040" -->
<!-- sent="Fri, 16 May 2014 21:40:39 +0000" -->
<!-- isosent="20140516214039" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Enable PMI build" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A8BDC55_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="824044AE-FC85-4BA7-ABEA-7380C8002C99_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Enable PMI build<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:40:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Previous message:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24512.php">Brock Palen: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Reply:</strong> <a href="24512.php">Brock Palen: "Re: [OMPI users] Enable PMI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
PMI != phi. If you want to build for phi you will have to make two builds. One for the host and one for the phi.
<br>
<p>Take a look in contrib/platform/lanl/darwin to get an idea of how to build for phi. The optimized-mic has most of what is needed to build a Phi version of Open MPI.
<br>
<p>I usually run:
<br>
<p>mkdir build-host ; cd build-host ; ../configure --prefix=path_to_host_build --with-platform=../contrib/platform/lanl/darwin/optimized ; make install
<br>
cd ../
<br>
mkdir build-pbi ; cd build-phi ; ../configure --prefix=path_to_phi_build --with-platform=..//contrib/platform/lanl/darwin/optimized-mic ; make install
<br>
<p><p>I then modify the share/openmpi/mpicc-wrapper-data.txt to add a section for -mmic and have it point to the phi build. This is a bit complicated but it works well since mpicc -mmic with then use the phi libraries. I can give you a sample modified wrapper if you like.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Brock Palen [brockp_at_[hidden]]
<br>
Sent: Friday, May 16, 2014 3:31 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Enable PMI build
<br>
<p>We are looking at enabling the use of OpenMPI on our Xeon Phis,
<br>
<p>One comment, i'm not sure that most users will know that pmi means phi,
<br>
&nbsp;&nbsp;--with-pmi(=DIR)        Build PMI support, optionally adding DIR to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;search path (default: no)
<br>
<p>how about:
<br>
&nbsp;&nbsp;--with-pmi(=DIR)        Build PMI support for the Xeon Phi/MIC, optionally adding DIR to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;search path (default: no)
<br>
<p><p>Second, digging in my mpss install I am not finding pmi.h or anything like that that searching the mailing list shows. We recently found that Intel made a lot of changes to the MPSS stack and this Phi stuff is very infantile at the moment so minimal (decent) documentation,  does anyone know what current package provides PMI  for the Xeon Phi?
<br>
<p>Thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>Previous message:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24426.php">Brock Palen: "[OMPI users] Enable PMI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24512.php">Brock Palen: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Reply:</strong> <a href="24512.php">Brock Palen: "Re: [OMPI users] Enable PMI build"</a>
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
