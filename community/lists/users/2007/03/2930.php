<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 27 12:18:17 2007" -->
<!-- isoreceived="20070327161817" -->
<!-- sent="Tue, 27 Mar 2007 12:18:08 -0400" -->
<!-- isosent="20070327161808" -->
<!-- name="Justin Bronder" -->
<!-- email="jsbronder_at_[hidden]" -->
<!-- subject="[OMPI users] Open-MPI 1.2 and GM" -->
<!-- id="20070327161808.GC12441_at_serac.cold-front.ath.cx" -->
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
<strong>From:</strong> Justin Bronder (<em>jsbronder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-27 12:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2931.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Reply:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having a user who requires some of the features of gfortran in 4.1.2, I
<br>
recently began building a new image.  The issue is that &quot;-mca btl gm&quot; fails
<br>
while &quot;-mca mtl gm&quot; works.  I have not yet done any benchmarking, as I was
<br>
wondering if the move to mtl is part of the upgrade.  Below are the packages
<br>
I rebuilt.
<br>
<p>Kernel 2.6.16.27 -&gt; 2.6.20.1
<br>
Gcc 4.1.1 -&gt; 4.1.2
<br>
GM Drivers 2.0.26 -&gt; 2.0.26 (with patches for newer kernels)
<br>
OpenMPI 1.1.4 -&gt; 1.2
<br>
<p><p>The following works as expected:
<br>
/usr/local/ompi-gnu/bin/mpirun -np 4 -mca mtl gm --host node84,node83 ./xhpl
<br>
<p>The following fails:
<br>
/usr/local/ompi-gnu/bin/mpirun -np 4 -mca btl gm --host node84,node83 ./xhpl
<br>
<p>I've attached gziped files as suggested on the &quot;Getting Help&quot; section of the
<br>
website and the output from the failed mpirun.  Both nodes are known good
<br>
Myrinet nodes, using FMA to map.
<br>
<p><p>Thanks in advance,
<br>
<p><pre>
-- 
Justin Bronder
Advanced Computing Research Lab
University of Maine, Orono
20 Godfrey Dr
Orono, ME 04473
www.clusters.umaine.edu



</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2930/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2930/ompi_info.gz">ompi_info.gz</a>
</ul>
<!-- attachment="ompi_info.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2930/error_output">error_output</a>
</ul>
<!-- attachment="error_output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2931.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>Previous message:</strong> <a href="2929.php">de Almeida, Valmor F.: "Re: [OMPI users] very long linking time with mixed-language libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
<li><strong>Reply:</strong> <a href="2933.php">George Bosilca: "Re: [OMPI users] Open-MPI 1.2 and GM"</a>
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
