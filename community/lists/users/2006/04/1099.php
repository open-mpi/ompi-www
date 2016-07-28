<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 12:21:24 2006" -->
<!-- isoreceived="20060420162124" -->
<!-- sent="Thu, 20 Apr 2006 12:18:46 -0400" -->
<!-- isosent="20060420161846" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI-F90-CHECK macro needs to be updated?" -->
<!-- id="A7FE7275-C682-492A-B08C-7EB0EE9E137F_at_ieee.org" -->
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
<strong>Date:</strong> 2006-04-20 12:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">СоїЖ: "[OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Brian Barrett: "Re: [OMPI users] Configuration error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Maybe reply:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Getting warnings like:
<br>
<p>WARNING: *** Fortran 77 alignment for INTEGER (1) does not match
<br>
WARNING: *** Fortran 90 alignment for INTEGER (4)
<br>
WARNING: *** OMPI-F90-CHECK macro needs to be updated!
<br>
<p>same for LOGICAL, REAL, COMPLEX, INTEGER*2, INTEGER*4, INTEGER*8, etc.
<br>
<p>I believe these are new within the last week.
<br>
<p>The configure script is generating these warnings when building  
<br>
openmpi-1.1a3r9663 using g95 from April 19 on OS X 10.4.6.   
<br>
Configured with &quot;./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs&quot;
<br>
<p><p>

<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1099/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1099/config-output.txt.gz">config-output.txt.gz</a>
</ul>
<!-- attachment="config-output.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1100.php">СоїЖ: "[OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1098.php">Brian Barrett: "Re: [OMPI users] Configuration error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<li><strong>Maybe reply:</strong> <a href="1115.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
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
