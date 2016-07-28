<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 10:30:09 2013" -->
<!-- isoreceived="20130723143009" -->
<!-- sent="Tue, 23 Jul 2013 10:30:01 -0400" -->
<!-- isosent="20130723143001" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51EE9369.50504_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F745082_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 10:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/23/2013 06:56 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; With this embedded mechanism, we're calling hwloc's configury with
</span><br>
<span class="quotelev1">&gt; the moral equivalent of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --disable-cairo --disable-libxml2 --enable-xml
</span><br>
<span class="quotelev1">&gt; --with-hwloc-symbol-prefix=opal_hwloc152_ --enable-embedded-mode
</span><br>
<p>I configured hwloc-1.4.3 with :
<br>
<p>./configure \
<br>
&nbsp;&nbsp;--prefix=/opt/hwloc-1.4.3 \
<br>
&nbsp;&nbsp;--disable-cairo \
<br>
&nbsp;&nbsp;--disable-libxml2
<br>
<p>I'm left off --with-hwloc-symbol-prefix=opal_hwloc152_ because there
<br>
seems to be no way to tell openmpi-1.6.5 about this name mangling.
<br>
<p>I left off --enable-embedded-mode because with this option nothing is
<br>
installed.
<br>
<p>I left off --enable-xml because configure warns :
<br>
<p>configure: WARNING: unrecognized options: --enable-xml
<br>
<p>I configured openmpi-1.6.5 with :
<br>
<p>./configure \
<br>
&nbsp;&nbsp;--prefix=/opt/openmpi-1.6.5_hwloc-1.4.3 \
<br>
&nbsp;&nbsp;--with-hwloc=/opt/hwloc-1.4.3
<br>
<p>I built my simple program with :
<br>
<p>/opt/openmpi-1.6.5_hwloc-1.4.3/bin/mpicc -g \
<br>
&nbsp;&nbsp;-o mpi_simple mpi_simple.c
<br>
<p>and I ran it with :
<br>
<p>/opt/openmpi-1.6.5_hwloc-1.4.3/bin/mpirun -n 1 mpi_simple
<br>
<p>and got as output &quot;my rank is 0 of 1&quot;.
<br>
<p>So this the _only_ openmpi build configured with the&quot;--with-hwloc=&quot;
<br>
option that has worked.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22366/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22367.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Previous message:</strong> <a href="22365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22360.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
