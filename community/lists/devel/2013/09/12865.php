<?
$subject_val = "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 10:51:48 2013" -->
<!-- isoreceived="20130904145148" -->
<!-- sent="Wed, 4 Sep 2013 14:51:24 +0000" -->
<!-- isosent="20130904145124" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F867C65_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="85CC2F05-8E3E-4705-A6DC-6983F9A5705F_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20%	slowed than with mpirun<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 10:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12866.php">Kawashima, Takahiro: "[OMPI devel] [bugs] OSC-related datatype bugs"</a>
<li><strong>Previous message:</strong> <a href="12864.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2013, at 4:33 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You can confirm that the slowdown happen during the MPI initialization stages by profiling the application (especially the MPI_Init call).
</span><br>
<p>You can also try just launching &quot;MPI hello world&quot; (i.e., examples/hello_c.c).  It just calls MPI_INIT / MPI_FINALIZE.
<br>
<p>Additionally, you might want to try launching the ring program, too (examples/ring_c.c).  That program sends a small message around in a ring, which forces some MPI communication to occur, and therefore does at least some level of setup in the BTLs, etc. (remember: most BTLs are lazy-connect, so they don't actually do anything until the first send.  So a simple &quot;ring&quot; program sets up *some* BTL connections, but not nearly all of them).
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
<li><strong>Next message:</strong> <a href="12866.php">Kawashima, Takahiro: "[OMPI devel] [bugs] OSC-related datatype bugs"</a>
<li><strong>Previous message:</strong> <a href="12864.php">Ralph Castain: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>In reply to:</strong> <a href="12860.php">George Bosilca: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12867.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
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
