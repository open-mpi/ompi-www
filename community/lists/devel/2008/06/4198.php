<?
$subject_val = "[OMPI devel] warn when fork() used with openib btl?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 09:42:38 2008" -->
<!-- isoreceived="20080623134238" -->
<!-- sent="Mon, 23 Jun 2008 09:42:14 -0400" -->
<!-- isosent="20080623134214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] warn when fork() used with openib btl?" -->
<!-- id="E57D4BF0-3E99-454C-B45A-CE2D57FFC411_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] warn when fork() used with openib btl?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 09:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4199.php">Jeff Squyres: "[OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4224.php">Brad Benton: "Re: [OMPI devel] warn when fork() used with openib btl?"</a>
<li><strong>Reply:</strong> <a href="4224.php">Brad Benton: "Re: [OMPI devel] warn when fork() used with openib btl?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those who care about the openib BTL:
<br>
<p>What do you think about warning when fork() is used with the openib  
<br>
BTL?  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/1244">https://svn.open-mpi.org/trac/ompi/ticket/1244</a> for details.
<br>
<p>Rationale: Several Cisco customers have been bitten by not realizing  
<br>
that they had calls to system() in their MPI codes when switching away  
<br>
from older mVAPI-based stacks to OFED (the older Cisco/Topspin mVAPI  
<br>
stack was a bit more tolerable of fork()).  Newer kernels and OFED  
<br>
versions can handle fork() better, but I've still had spurious reports  
<br>
of MPI codes failing when system() was used (never had much chance to  
<br>
followup to see what was actually happening, though -- it *should*  
<br>
have worked...?).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4199.php">Jeff Squyres: "[OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4197.php">Adrian Knoth: "Re: [OMPI devel] multiple GigE interfaces..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4224.php">Brad Benton: "Re: [OMPI devel] warn when fork() used with openib btl?"</a>
<li><strong>Reply:</strong> <a href="4224.php">Brad Benton: "Re: [OMPI devel] warn when fork() used with openib btl?"</a>
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
