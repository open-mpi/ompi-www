<?
$subject_val = "Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 15:47:41 2010" -->
<!-- isoreceived="20100511194741" -->
<!-- sent="Tue, 11 May 2010 21:50:53 +0200" -->
<!-- isosent="20100511195053" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)" -->
<!-- id="4BE9B51D.6060305_at_lysator.liu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE99FB9.40805_at_lysator.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 15:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13021.php">Jeff Squyres: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>In reply to:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, the kernel is 2.6.32.12, not 2.6.32.2. And I forgot to mention
<br>
the system is CentOS 5.4.
<br>
<p>And further ... 25MB/s is after tweaking btl_sm_num_fifos=8 and
<br>
btl_sm_eager_limit=65536. Without those the rate is 9MB/s for 1MB
<br>
packets and 1.5MB/s for 10kB packets :-(
<br>
<p>On 05/11/2010 08:19 PM, Oskar Enoksson wrote:
<br>
<span class="quotelev1">&gt; I have a cluster with two Intel Xeon Nehalem E5520 CPU per server
</span><br>
<span class="quotelev1">&gt; (quad-core, 2.27GHz). The interconnect is 4xQDR Infiniband (Mellanox
</span><br>
<span class="quotelev1">&gt; ConnectX).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled and installed OpenMPI 1.4.2. The kernel is 2.6.32.2 and
</span><br>
<span class="quotelev1">&gt; I have compiled the kernel myself. I use gridengine 6.2u5. Openmpi was
</span><br>
<span class="quotelev1">&gt; compiled with &quot;--with-libnuma --with-sge.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that I get very bad performance unless I explicitly
</span><br>
<span class="quotelev1">&gt; exclude the &quot;sm&quot; btl and I can't figure out why. I have tried searching
</span><br>
<span class="quotelev1">&gt; the web and the OpenMPI mailing lists. I have seen reports about
</span><br>
<span class="quotelev1">&gt; non-optimal performance, but my results are far worse than any other
</span><br>
<span class="quotelev1">&gt; reports I have found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run the &quot;mpi_stress&quot; program with different packet lengths. I run on a
</span><br>
<span class="quotelev1">&gt; single server using 8 slots so that all eight cores on one server are
</span><br>
<span class="quotelev1">&gt; occupied.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use &quot;-mca btl self,openib&quot; I get pretty good results, between
</span><br>
<span class="quotelev1">&gt; 450MB/s and 700MB/s depending on the packet lengths. When I use &quot;-mca
</span><br>
<span class="quotelev1">&gt; btl self,sm&quot; or &quot;-mca btl self,sm,openib&quot; I just get 25MB/s to 30MB/s
</span><br>
<span class="quotelev1">&gt; for packet length 1MB. For 10kB packets the results are around 5MB/s.
</span><br>
<span class="quotelev1">&gt; things get abour 20% faster if I set &quot;-mca paffinity_alone 1&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is going on? Any hints? I thought these CPU's had excellent
</span><br>
<span class="quotelev1">&gt; SM-bandwidth over quickpath. I expected several GB/s.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hyperthreading is enabled, if that is relevant. The locked-memory limit
</span><br>
<span class="quotelev1">&gt; is 500MB and the stack limit is 64MB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help!
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; /Oskar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13021.php">Jeff Squyres: "Re: [OMPI users] PGI problems"</a>
<li><strong>Previous message:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
<li><strong>In reply to:</strong> <a href="13019.php">Oskar Enoksson: "[OMPI users] Very poor performance with btl sm on twin nehalem servers with Mellanox Technologies MT26428 (ConnectX)"</a>
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
