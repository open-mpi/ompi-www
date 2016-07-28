<?
$subject_val = "[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:39:35 2014" -->
<!-- isoreceived="20141003143935" -->
<!-- sent="Fri, 03 Oct 2014 10:39:37 -0400" -->
<!-- isosent="20141003143937" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9" -->
<!-- id="542EB529.3030709_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>Reply:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am trying to compile OpenMPI 1.8.3 with PGI 14.9 I am getting a severe 
<br>
errors here :
<br>
<p>1956 PGC-S-0039-Use of undeclared variable INT64_T 
<br>
(ompi_datatype_module.c: 278)
<br>
1957 PGC-S-0039-Use of undeclared variable AINT (ompi_datatype_module.c: 
<br>
278)
<br>
1958 PGC-S-0074-Non-constant expression in initializer 
<br>
(ompi_datatype_module.c: 278)
<br>
1959 PGC-W-0093-Type cast required for this conversion of constant 
<br>
(ompi_datatype_module.c: 278)
<br>
1960 PGC/x86-64 Linux 14.9-0: compilation completed with severe errors
<br>
1961 make[2]: *** [ompi_datatype_module.lo] Erreur 1
<br>
<p>Any idea what might be going on ?
<br>
<p>Attached is the output of my configure and make lines.
<br>
<p>Thanks,
<br>
<p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25445/config-make.log.tar.gz">config-make.log.tar.gz</a>
</ul>
<!-- attachment="config-make.log.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25444.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
<li><strong>Reply:</strong> <a href="25462.php">Maxime Boissonneault: "Re: [OMPI users] Compiling OpenMPI 1.8.3 with PGI 14.9"</a>
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
