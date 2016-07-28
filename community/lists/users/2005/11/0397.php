<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 12:10:40 2005" -->
<!-- isoreceived="20051128171040" -->
<!-- sent="Mon, 28 Nov 2005 12:10:22 -0500" -->
<!-- isosent="20051128171022" -->
<!-- name="John Ouellette" -->
<!-- email="ouellet_at_[hidden]" -->
<!-- subject="[O-MPI users] problems with bproc cluster" -->
<!-- id="200511281210.22482.ouellet_at_amnh.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> John Ouellette (<em>ouellet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 12:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0398.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Maybe reply:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having problems with getting code (specifically ASC FLASH) to run on our 
<br>
bproc-based cluster using Open-MPI.
<br>
<p>Our cluster is based on bproc 4.0.0.pre8 and Linux 2.6.9 (vanilla) and we're 
<br>
using Intel v9.0 compilers.  OpenMPI compiles without errors on this setup.
<br>
I've attached a compressed file containing the output of config.log, my 
<br>
machines file, and the output of ompi_info (the make.log file was too large 
<br>
and made the tar file 120KB -- larger than the 100KB limit on the mailing 
<br>
list).
<br>
<p>The problem I'm having is detailed in the 'log3.out' file, also contained in 
<br>
the attached tar file.  Specifically, when I run FLASH with the following 
<br>
command:
<br>
<p>mpirun --hostfile machines.openmpi -np 4 ./flash2
<br>
<p>I get a bzillion errors of the form:
<br>
<p>ORTE_ERROR_LOG: Not found in file rmgr_urm_component.c at line 190
<br>
<p>This eventually goes away and, just before the process dies, I also get many 
<br>
errors like this:
<br>
<p>demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file pls_bproc.c at line 582
<br>
[demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file pls_bproc.c at line 838
<br>
[demeter:27162] [0,0,0] ORTE_ERROR_LOG: Error in file rmgr_urm.c at line 177
<br>
<p>and complaints about not being able to find the file help_pls_bproc.txt, which 
<br>
actually does exist in the location where OpenMPI was installed.
<br>
<p>Any insight would be greatly appreciated.
<br>
John Ouellette
<br>
<p><p><pre>
-- 
+++++++++++++++++++++++++++++++++++
John Ouellette
Department of Astrophysics
American Museum of Natural History
Ph: 212-313-7919 Fax: 212-769-5007

</pre>
<hr>
<ul>
<li>application/x-tbz attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0397/openmpi.tar.bz2">openmpi.tar.bz2</a>
</ul>
<!-- attachment="openmpi.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0398.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Reply:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Maybe reply:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
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
