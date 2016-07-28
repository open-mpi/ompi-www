<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 06:39:05 2007" -->
<!-- isoreceived="20070612103905" -->
<!-- sent="Tue, 12 Jun 2007 12:44:23 +0200" -->
<!-- isosent="20070612104423" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] narrowly-scoped netmasks - any slution/walk-around?" -->
<!-- id="466E7907.1040802_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 06:44:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Administrators changed our cluster network topology, and now it has 
<br>
narrowly-scoped netmasks for internal and outside part of the cluster. 
<br>
Of course my soft stopped working giving an error during MPI_Init, then 
<br>
I checked in the FAQ:
<br>
<p>How does Open MPI know which TCP addresses are routable to each other?
<br>
<p>These rules do /not/ cover the following cases:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* Running an MPI job that spans public and private networks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;* Running an MPI job that spans a bunch of private networks with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;narrowly-scoped netmasks, such as nodes that have IP addresses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;192.168.1.10 and 192.168.2.10 with netmasks of 255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i.e., the network fabric makes these two nodes be routable to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;each other, even though the netmask implies that they are on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;different subnets).
<br>
<p>So, it seems they changed network topology to unsupported configuration 
<br>
here... is there any walk-around of this situation?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greetings, Marcin
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Previous message:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
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
