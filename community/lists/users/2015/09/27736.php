<?
$subject_val = "Re: [OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:37:51 2015" -->
<!-- isoreceived="20150930143751" -->
<!-- sent="Wed, 30 Sep 2015 14:37:48 +0000" -->
<!-- isosent="20150930143748" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="A263CC3B-8FFE-4F78-80B4-E0E7AD4D166C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="560BC8FA.5040709_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libfabric/usnic does not compile in 2.x<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 30, 2015, at 7:35 AM, Marcin Krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to compile the 2.x branch with libfabric support, but get this error during configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:100708: checking rdma/fi_ext_usnic.h presence
</span><br>
<span class="quotelev1">&gt; configure:100708: gcc -E -I/cluster/software/VERSIONS/openmpi.gnu.2.x/include -I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include conftest.c
</span><br>
<span class="quotelev1">&gt; conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; configure:100708: checking for rdma/fi_ext_usnic.h
</span><br>
<span class="quotelev1">&gt; configure:100708: result: no
</span><br>
<span class="quotelev1">&gt; configure:101253: checking if MCA component btl:usnic can compile
</span><br>
<span class="quotelev1">&gt; configure:101255: result: no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is correct - the file is not there. I have downloaded fresh libfabric-1.1.0.tar.bz2 and it does not have this file. Probably OpenMPI needs some updates?
</span><br>
<p>Don't worry -- some tests in configure are designed to fail.
<br>
<p>This one fails if you didn't install Cisco usNIC support in your libfabric installation.
<br>
<p>Specifically: when you build Cisco usNIC support in libfabric, libfabric will install fi_ext_usnic.h.  Open MPI looks for that file and says &quot;ah ha! libfabric has usNIC support, so I'll build the usnic BTL&quot; (there's other details, but that's the high-level description).
<br>
<p><span class="quotelev1">&gt; I am also wondering what is the state of libfabric support in OpenMPI nowadays. I have seen recent (March) presentation about it, so it seems to be an actively developed feature. Is this correct? It seemed from the presentation that there are benefits to this approach, but is it mature enough in OpenMPI, or it will yet take some time?
</span><br>
<p>Cisco's shipping Open MPI product is based on libfabric support; we're confident in its correctness and performance.  To slightly correct something Howard said: all that we/Cisco do is upstream in both the libfabric and Open MPI communities; building from source from both of those is fine.  We ship binaries, too, for customers who prefer not to build from source.  But they're built from the same source as is available on the communities.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27728.php">Marcin Krotkiewski: "[OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
