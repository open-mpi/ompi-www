<?
$subject_val = "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 02:31:02 2008" -->
<!-- isoreceived="20080414063102" -->
<!-- sent="Mon, 14 Apr 2008 08:30:45 +0200" -->
<!-- isosent="20080414063045" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale" -->
<!-- id="1208154645.31547.0.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="B1DD6344-7114-4D71-BE50-9C95670A3C94_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-14 02:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5391.php">Graham Jenkins: "[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Previous message:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 2008-04-13 at 08:00 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do you get the same error if you disable the memory handling in Open  
</span><br>
<span class="quotelev1">&gt; MPI?  You can configure OMPI with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      --disable-memory-manager
</span><br>
<p>Doesn't help, it still compiles ptmalloc2 and trying to turn off
<br>
ptmaloc2 during runtime doesn't help either.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5391.php">Graham Jenkins: "[OMPI users] Different Interfaces on Different Nodes .. OpenMPI 1.2.3, 1.2.4 .."</a>
<li><strong>Previous message:</strong> <a href="5389.php">Ralph Castain: "Re: [OMPI users] problems with hostfile when doing MPMD"</a>
<li><strong>In reply to:</strong> <a href="5385.php">Jeff Squyres: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
<li><strong>Reply:</strong> <a href="5393.php">Brian Barrett: "Re: [OMPI users] Problems using Intel MKL with OpenMPI and	Pathscale"</a>
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
