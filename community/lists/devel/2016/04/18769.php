<?
$subject_val = "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 09:13:37 2016" -->
<!-- isoreceived="20160415131337" -->
<!-- sent="Fri, 15 Apr 2016 13:13:35 +0000" -->
<!-- isosent="20160415131335" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()" -->
<!-- id="A2FCEFFF-6871-4B39-8346-8E605A3EAF0F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20160415214922.32a0f280cecfd4b3ebafca7e_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-15 09:13:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2016, at 8:49 AM, Kawashima, Takahiro &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just checked MPICH 3.2, and they *do* include MPI_SIZEOF interfaces for CHARACTER and LOGICAL, but they are missing many of the other MPI_SIZEOF interfaces that we have in OMPI.  Meaning: OMPI and MPICH already diverge wildly on MPI_SIZEOF.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And OMPI 1.6 also had MPI_SIZEOF interfaces for CHARACTER and LOGICAL.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="https://github.com/open-mpi/ompi-release/blob/v1.6/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh#L27">https://github.com/open-mpi/ompi-release/blob/v1.6/ompi/mpi/f90/scripts/mpi_sizeof.f90.sh#L27</a>
</span><br>
<p>Fair point.
<br>
<p>Doing a little spelunking through git history, I can't find a reason cited as to why <a href="https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c">https://github.com/open-mpi/ompi/commit/d7eaca83fac0d9783d40cac17e71c2b090437a8c</a> removed the support for CHARACTER and LOGICAL in the mpif.h and use mpi interfaces.
<br>
<p>However, it does look like when we added the use mpi_f08 interface (<a href="https://github.com/open-mpi/ompi/commit/253444c6d0cb105ce6d4e9fb81da42dbb8904d18">https://github.com/open-mpi/ompi/commit/253444c6d0cb105ce6d4e9fb81da42dbb8904d18</a>), we *only* added interfaces for the numeric types -- we did not add interfaces for CHARACTER and LOGICAL (although no reason was cited in the commit logs as to why).
<br>
<p>Here's what I'm guessing happened:
<br>
<p>- When Craig and I were writing the mpi_f08 stuff, we saw the same definition for MPI_SIZEOF that I cited earlier: only numeric types
<br>
- So we only wrote interfaces for the numeric types for mpi_f08
<br>
- When the MPI_SIZEOF stuff was later totally revamped, we kept the &quot;only numeric types&quot; philosophy
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
<li><strong>Next message:</strong> <a href="18770.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>Previous message:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<li><strong>In reply to:</strong> <a href="18767.php">Kawashima, Takahiro: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18768.php">DERBEY, NADIA: "Re: [OMPI devel] Missing support for 2 types in MPI_Sizeof()"</a>
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
