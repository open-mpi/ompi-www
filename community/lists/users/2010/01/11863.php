<?
$subject_val = "[OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 07:52:58 2010" -->
<!-- isoreceived="20100125125258" -->
<!-- sent="Mon, 25 Jan 2010 13:52:51 +0100" -->
<!-- isosent="20100125125251" -->
<!-- name="Rafael Arco Arredondo" -->
<!-- email="rafaarco_at_[hidden]" -->
<!-- subject="[OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="1264423971.25637.58.camel_at_boabdilmec" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Problems building Open MPI 1.4.1 with Pathscale<br>
<strong>From:</strong> Rafael Arco Arredondo (<em>rafaarco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 07:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello:
<br>
<p>I'm having some issues with Open MPI 1.4.1 and Pathscale compiler
<br>
(version 3.2). Open MPI builds successfully with the following configure
<br>
arguments:
<br>
<p>./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
<br>
--with-sge --enable-static CC=pathcc CXX=pathCC F77=pathf90 F90=pathf90
<br>
FC=pathf90
<br>
<p>(we have OpenFabrics 1.2 Infiniband drivers, by the way)
<br>
<p>However, applications hang on MPI_Init (or maybe MPI_Comm_rank or
<br>
MPI_Comm_size, a basic hello-world anyway doesn't print 'Hello World
<br>
from node...'). I tried running them with and without SGE. Same result.
<br>
<p>This hello-world works flawlessly when I build Open MPI with gcc:
<br>
<p>./configure --with-openib=/usr --with-openib-libdir=/usr/lib64
<br>
--with-sge --enable-static
<br>
<p>This successful execution runs in one machine only, so it shouldn't use
<br>
Infiniband, and it also works when several nodes are used.
<br>
<p>I was able to build previous versions of Open MPI with Pathscale (1.2.6
<br>
and 1.3.2, particularly). I tried building version 1.4.1 both with
<br>
Pathscale 3.2 and Pathscale 3.1. No difference.
<br>
<p>Any ideas?
<br>
<p>Thank you in advance,
<br>
<p>Rafa
<br>
<p><pre>
-- 
Rafael Arco Arredondo
Centro de Servicios de Inform&#195;&#161;tica y Redes de Comunicaciones
Universidad de Granada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11864.php">Manuel Prinz: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11862.php">Dave Love: "[OMPI users] ABI stabilization/versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="11873.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
