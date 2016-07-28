<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 11:50:52 2006" -->
<!-- isoreceived="20060426155052" -->
<!-- sent="Wed, 26 Apr 2006 11:50:39 -0400" -->
<!-- isosent="20060426155039" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704" -->
<!-- id="72B9F7FD-B0EB-4E6B-B7CE-806A9343D501_at_ieee.org" -->
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
<strong>Date:</strong> 2006-04-26 11:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">hpc_at_[hidden]: "[OMPI users] which is better: 64x1 or 32x2"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Developer Workshop : Wednesday and Thursday slides?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<li><strong>Reply:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI 1.2a1r9704
<br>
Summary: configure with --with-mpi-f90-size=large and then make.
<br>
<p>/bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file or  
<br>
directory
<br>
<p>I doubt this one is system specific
<br>
<pre>
---
my details:
Building OpenMPI 1.2a1r9704 with g95 (Apr 23 2006) on OS X 10.4.6 using
./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
size=large
Configures fine but make gives the error listed above.  However no  
error if I don't specify f90-size=large.
./scripts/mpi_allgather_f90.f90.sh /Users/mkluskens/Public/MPI/ 
OpenMPI/openmpi-1.2a1r9704/ompi/mpi/f90 &gt; mpi_allgather_f90.f90
/bin/sh: line 1: ./scripts/mpi_allgather_f90.f90.sh: No such file or  
directory
make[4]: *** [mpi_allgather_f90.f90] Error 127
make[3]: *** [all-recursive] Error 1
make[2]: *** [all-recursive] Error 1
make[1]: *** [all-recursive] Error 1
make: *** [all-recursive] Error 1
  mpi_allgather_f90.f90.sh does not exist in my configured and built  
Open MPI 1.1a3r9704 so I can't compare between the two.
I assume it should be generated into ompi/mpi/f90/scripts.
Config log attached

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1148/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1149.php">hpc_at_[hidden]: "[OMPI users] which is better: 64x1 or 32x2"</a>
<li><strong>Previous message:</strong> <a href="1147.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Developer Workshop : Wednesday and Thursday slides?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<li><strong>Reply:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
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
