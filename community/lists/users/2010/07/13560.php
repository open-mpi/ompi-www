<?
$subject_val = "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 08:56:10 2010" -->
<!-- isoreceived="20100709125610" -->
<!-- sent="Fri, 9 Jul 2010 14:56:31 +0200" -->
<!-- isosent="20100709125631" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?" -->
<!-- id="20100709125631.GA28226_at_rei.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201007091439.14837.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 08:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13561.php">Miguel Rubio-Roy: "[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>Previous message:</strong> <a href="13559.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13559.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 14:39 Fri 09 Jul     , Peter Kjellstrom wrote:
<br>
<span class="quotelev1">&gt; 8x pci-express gen2 5GT/s should show figures like mine. If it's pci-express 
</span><br>
<span class="quotelev1">&gt; gen1 or gen2 2.5GT/s or 4x or if the IB only came up with two lanes then 1500 
</span><br>
<span class="quotelev1">&gt; is expected.
</span><br>
<p>lspci and ibv_devinfo tell me it's PCIe 2.0 x8 and InfiniBand 4x QDR
<br>
(active_width 4X, active_speed 10.0 Gbps), so I /should/ be able to
<br>
get about twice the throughput of what I'm currently seeing.
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13560/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13561.php">Miguel Rubio-Roy: "[OMPI users] Error while compiling openMPI 1.4.2 in Cygwin 1.7.5-1. Library missing?"</a>
<li><strong>Previous message:</strong> <a href="13559.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>In reply to:</strong> <a href="13559.php">Peter Kjellstrom: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
<li><strong>Reply:</strong> <a href="13654.php">Jeff Squyres: "Re: [OMPI users] Low Open MPI performance on InfiniBand and shared memory?"</a>
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
