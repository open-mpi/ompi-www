<?
$subject_val = "[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 13 06:53:15 2010" -->
<!-- isoreceived="20100513105315" -->
<!-- sent="Thu, 13 May 2010 12:56:33 +0200" -->
<!-- isosent="20100513105633" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="[OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed" -->
<!-- id="4BEBDAE1.7000301_at_lysator.liu.se" -->
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
<strong>Subject:</strong> [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-13 06:56:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Maybe reply:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for crossposting, I already posted this report to the users list,
<br>
but the developers list is probably more relevant.
<br>
<p>I have a cluster with two Intel Xeon Nehalem E5520 CPU per server
<br>
quad-core, 2.27GHz). The interconnect is 4xQDR Infiniband (Mellanox
<br>
ConnectX).
<br>
<p>I have compiled and installed OpenMPI 1.4.2. Openmpi was compiled with
<br>
&quot;--with-libnuma --with-sge using gcc 4.4 and &quot;-march=native -O3&quot;. The
<br>
kernel is 2.6.32.12 and I have compiled the kernel myself. The system is
<br>
Centos 5.4. I use gridengine 6.2u5. The OFED stack installed is 1.5.1.
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
occupied, just to see the loopback/shared memory performance.
<br>
<p>When I use &quot;-mca btl self,openib&quot; I get pretty good results, between
<br>
450MB/s and 700MB/s depending on the packet lengths. When I use &quot;-mca
<br>
btl self,sm&quot; or &quot;-mca btl self,sm,openib&quot; I just get 9MB/s for 1MB
<br>
packets and 1.5MB/s for 10kB packets. Following the FAQ I have tried
<br>
tweaking btl_sm_num_fifos=8 and btl_sm_eager_limit=65536 which improves
<br>
things to 30MB/s for 1MB packets and 5MB/s for 10kB packets. With
<br>
&quot;-mca_paffinity_alone=1&quot; I gain another 20% speedup.
<br>
<p>But still this is pretty louse. I had expected several GB/s. What is
<br>
going on? Any hints? I thought these CPU's had excellent SM-bandwidth
<br>
over quickpath.
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
<li><strong>Next message:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Previous message:</strong> <a href="7921.php">Abhishek Kulkarni: "Re: [OMPI devel] RFC 2/2: merge the OPAL SOS development branch into trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Reply:</strong> <a href="7923.php">Christopher Samuel: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>Maybe reply:</strong> <a href="7928.php">Oskar Enoksson: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
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
