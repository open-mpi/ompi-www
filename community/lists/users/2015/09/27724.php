<?
$subject_val = "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 06:19:56 2015" -->
<!-- isoreceived="20150930101956" -->
<!-- sent="Wed, 30 Sep 2015 11:19:55 +0100" -->
<!-- isosent="20150930101955" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?" -->
<!-- id="874micxl84.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="20150928175832.GB2128_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 06:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I would like to add that you may want to play with the value and see
</span><br>
<span class="quotelev1">&gt; what works for your applications. Most applications should be using
</span><br>
<span class="quotelev1">&gt; malloc or similar functions to allocate large memory regions in the heap
</span><br>
<span class="quotelev1">&gt; and not on the stack.
</span><br>
<p>It's long been a Fortran optimization to stack-allocate arrays (from the
<br>
days of all-the-world's-a-VAX when loads of code broke that assumed SAVE
<br>
attributes).  It's an FAQ here for the intel compiler and well-optimized
<br>
gfortran, and there are other good reasons for large stacks compared
<br>
with the 10MB-ish default.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Previous message:</strong> <a href="27723.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27700.php">Nathan Hjelm: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>Reply:</strong> <a href="27735.php">Grigory Shamov: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
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
