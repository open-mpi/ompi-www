<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  1 18:20:35 2006" -->
<!-- isoreceived="20060501222035" -->
<!-- sent="Mon, 1 May 2006 18:20:22 -0400" -->
<!-- isosent="20060501222022" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.0.2 configure problem" -->
<!-- id="9C4EB42D-6D6C-4C7E-AA25-F6E0D439BBB1_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-01 18:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1182.php">Jeffrey Fox: "[OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
checking if FORTRAN compiler supports integer(selected_int_kind 
<br>
(2))... yes
<br>
checking size of FORTRAN integer(selected_int_kind(2))... unknown
<br>
configure: WARNING: *** Problem running configure test!
<br>
configure: WARNING: *** See config.log for details.
<br>
configure: error: *** Cannot continue.
<br>
<p>Source code: openmpi-1.0.2 stable
<br>
OS X 10.4.5 with g95 (Apr 27 2006)
<br>
./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs
<br>
<p>I find this rather surprising given that I have been regularly  
<br>
building nightly snapshots of Open MPI 1.1 and 1.2 (the other bug is  
<br>
preventing me from using them at the moment till either I change my  
<br>
code or the bugs gets fixed).
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1181/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1182.php">Jeffrey Fox: "[OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1180.php">Michael Kluskens: "Re: [OMPI users] MPI_Intercomm_Merge -- Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="1185.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
<li><strong>Maybe reply:</strong> <a href="1201.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] openmpi-1.0.2 configure problem"</a>
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
