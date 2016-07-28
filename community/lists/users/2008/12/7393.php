<?
$subject_val = "[OMPI users] Name Mangling";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 14:33:52 2008" -->
<!-- isoreceived="20081204193352" -->
<!-- sent="Thu, 04 Dec 2008 13:33:42 -0600" -->
<!-- isosent="20081204193342" -->
<!-- name="Elvedin Trnjanin" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="[OMPI users] Name Mangling" -->
<!-- id="49383096.2060603_at_umn.edu" -->
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
<strong>Subject:</strong> [OMPI users] Name Mangling<br>
<strong>From:</strong> Elvedin Trnjanin (<em>trnja001_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-04 14:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI users] MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<li><strong>Reply:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using OpenMPI 1.2.5 and PGI 7.1.5 compiler suite to get CLM 3.5 
<br>
working correctly. When compiling for OpenMPI, I encounter the following 
<br>
snippet of errors -
<br>
<p>areaMod.o(.text+0x98a0): In function `areamod_map_checkmap_':
<br>
: undefined reference to `mpi_reduce_'
<br>
areaMod.o(.text+0x9b6c): In function `areamod_map_checkmap_':
<br>
: undefined reference to `mpi_reduce_'
<br>
areaMod.o(.text+0x9c39): In function `areamod_map_checkmap_':
<br>
: undefined reference to `mpi_reduce_'
<br>
areaMod.o(.text+0x9ea2): more undefined references to `mpi_reduce_'
<br>
<p><p>When compiling for MPICH2, it works just fine. I assume this is going to lead to recompiling OpenMPI so I am wondering which PGI name mangling options to pass either the OpenMPI compile, or CLM compile to get the names in order?
<br>
<p>Thanks,
<br>
Elvedin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7394.php">V. Ram: "[OMPI users] Processor/core selection/affinity for large shared memory systems"</a>
<li><strong>Previous message:</strong> <a href="7392.php">Jeff Squyres: "Re: [OMPI users] MCA parameter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
<li><strong>Reply:</strong> <a href="7398.php">Jeff Squyres: "Re: [OMPI users] Name Mangling"</a>
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
