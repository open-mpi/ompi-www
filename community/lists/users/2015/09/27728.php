<?
$subject_val = "[OMPI users] libfabric/usnic does not compile in 2.x";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 07:35:26 2015" -->
<!-- isoreceived="20150930113526" -->
<!-- sent="Wed, 30 Sep 2015 13:35:22 +0200" -->
<!-- isosent="20150930113522" -->
<!-- name="Marcin Krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="[OMPI users] libfabric/usnic does not compile in 2.x" -->
<!-- id="560BC8FA.5040709_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] libfabric/usnic does not compile in 2.x<br>
<strong>From:</strong> Marcin Krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 07:35:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to compile the 2.x branch with libfabric support, but get 
<br>
this error during configure:
<br>
<p>configure:100708: checking rdma/fi_ext_usnic.h presence
<br>
configure:100708: gcc -E 
<br>
-I/cluster/software/VERSIONS/openmpi.gnu.2.x/include 
<br>
-I/usit/abel/u1/marcink/software/ompi-release-2.x/opal/mca/hwloc/hwloc1110/hwloc/include 
<br>
conftest.c
<br>
conftest.c:688:31: fatal error: rdma/fi_ext_usnic.h: No such file or 
<br>
directory
<br>
[...]
<br>
configure:100708: checking for rdma/fi_ext_usnic.h
<br>
configure:100708: result: no
<br>
configure:101253: checking if MCA component btl:usnic can compile
<br>
configure:101255: result: no
<br>
<p>Which is correct - the file is not there. I have downloaded fresh 
<br>
libfabric-1.1.0.tar.bz2 and it does not have this file. Probably OpenMPI 
<br>
needs some updates?
<br>
<p>I am also wondering what is the state of libfabric support in OpenMPI 
<br>
nowadays. I have seen recent (March) presentation about it, so it seems 
<br>
to be an actively developed feature. Is this correct? It seemed from the 
<br>
presentation that there are benefits to this approach, but is it mature 
<br>
enough in OpenMPI, or it will yet take some time?
<br>
<p>Thanks!
<br>
<p>Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27729.php">Thomas Jahns: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27733.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Reply:</strong> <a href="27736.php">Jeff Squyres (jsquyres): "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
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
