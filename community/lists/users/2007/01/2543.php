<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 25 05:51:56 2007" -->
<!-- isoreceived="20070125105156" -->
<!-- sent="Thu, 25 Jan 2007 11:53:30 +0100" -->
<!-- isosent="20070125105330" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[OMPI users] MPI comparison on openib" -->
<!-- id="200701251153.34406.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-25 05:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Previous message:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>We have been busy this week comparing five different MPI-implementations on a 
<br>
small test cluster. Several notable differences have been observed but I will 
<br>
limit myself to one perticular test in this e-mail (64-rank Intel MPI 
<br>
Benchmark alltoall on 8 dual quad nodes).
<br>
<p>Lets start with the hardware and software conditions:
<br>
Hardware: 16 nodes (8 used for this test) each with two Clovertown cpus 
<br>
(X5355/2.66GHz, quad-core) and 16G RAM. Interconnected with IB 4x SDR on 
<br>
PCI-express (MT25208).
<br>
Software: Centos-4.3 x86_64 2.6.9-34.0.2smp with OFED-1.1 and intel compilers 
<br>
9.1.04x
<br>
<p>MPIs tested: OpenMPI-1.1.3b4, OpenMPI-1.2b3, MVAPICH-0.9.8, MVAPICH2-0.9.8 and 
<br>
ScaMPI-3.10.4 (ScaMPI is a commercial mpi from Scali).
<br>
<p>Main question to the OpenMPI developers: why does OpenMPI behave so badly 
<br>
between approx. 10 and 1000 bytes?
<br>
<p>Plot:
<br>
&nbsp;<a href="http://www.nsc.liu.se/~cap/all2all_64pe_clover.png">http://www.nsc.liu.se/~cap/all2all_64pe_clover.png</a>
<br>
Notes:
<br>
* The OpenMPI run tagged 'basic' was done with &quot;-mca coll self,sm,basic&quot; all 
<br>
other runs were done with whatever setting is the default.
<br>
* Both x- and y-axis is log scaled. The y-axis labels are a bit hard to read 
<br>
but the first &quot;5.0000&quot; is 50us, the 2nd 500us and so on.
<br>
<p>ompi_info:
<br>
&nbsp;<a href="http://www.nsc.liu.se/~cap/openmpi-1.1.3b4-intel91.info">http://www.nsc.liu.se/~cap/openmpi-1.1.3b4-intel91.info</a>
<br>
&nbsp;<a href="http://www.nsc.liu.se/~cap/openmpi-1.2b3-intel91.info">http://www.nsc.liu.se/~cap/openmpi-1.2b3-intel91.info</a>
<br>
<p>Best Regards,
<br>
&nbsp;Peter K
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m
  National Supercomputer Centre, Link&#246;ping Sweden

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2543/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2544.php">john.shin1_at_[hidden]: "[OMPI users] Trouble Building Open MPI on SGI"</a>
<li><strong>Previous message:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
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
