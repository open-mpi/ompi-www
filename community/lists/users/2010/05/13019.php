<?
$subject_val = "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 14:16:28 2010" -->
<!-- isoreceived="20100511181628" -->
<!-- sent="Tue, 11 May 2010 20:19:37 +0200" -->
<!-- isosent="20100511181937" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)" -->
<!-- id="4BE99FB9.40805_at_lysator.liu.se" -->
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
<strong>Subject:</strong> [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 14:19:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Previous message:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Reply:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a cluster with two Intel Xeon Nehalem E5520 CPU per server
<br>
(quad-core, 2.27GHz). The interconnect is 4xQDR Infiniband (Mellanox
<br>
ConnectX).
<br>
<p>I have compiled and installed OpenMPI 1.4.2. The kernel is 2.6.32.2 and
<br>
I have compiled the kernel myself. I use gridengine 6.2u5. Openmpi was
<br>
compiled with &quot;--with-libnuma --with-sge.
<br>
<p>The problem is that I get very bad performance unless I explicitly
<br>
exclude the &quot;sm&quot; btl and I can't figure out why. I have tried searching
<br>
the web and the OpenMPI mailing lists. I have seen reports about
<br>
non-optimal performance, but my results are far worse than any other
<br>
reports I have found.
<br>
<p>I run the &quot;mpi_stress&quot; program with different packet lengths. I run on a
<br>
single server using 8 slots so that all eight cores on one server are
<br>
occupied.
<br>
<p>When I use &quot;-mca btl self,openib&quot; I get pretty good results, between
<br>
450MB/s and 700MB/s depending on the packet lengths. When I use &quot;-mca
<br>
btl self,sm&quot; or &quot;-mca btl self,sm,openib&quot; I just get 25MB/s to 30MB/s
<br>
for packet length 1MB. For 10kB packets the results are around 5MB/s.
<br>
things get abour 20% faster if I set &quot;-mca paffinity_alone 1&quot;.
<br>
<p>What is going on? Any hints? I thought these CPU's had excellent
<br>
SM-bandwidth over quickpath. I expected several GB/s.
<br>
<p>Hyperthreading is enabled, if that is relevant. The locked-memory limit
<br>
is 500MB and the stack limit is 64MB.
<br>
<p>Please help!
<br>
Thanks
<br>
/Oskar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Previous message:</strong> <a href="13018.php">Jeff Squyres: "Re: [OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>Reply:</strong> <a href="13020.php">Oskar Enoksson: "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
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
