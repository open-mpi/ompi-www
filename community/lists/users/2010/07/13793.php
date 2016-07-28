<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 08:17:56 2010" -->
<!-- isoreceived="20100727121756" -->
<!-- sent="Tue, 27 Jul 2010 22:17:44 +1000" -->
<!-- isosent="20100727121744" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280233065.6370.187.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="D1F5425C-5F37-4A1B-B508-FC12F3805E08_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 08:17:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2010-07-27 at 08:11 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 26, 2010, at 11:06 PM, Hugo Gagnon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   8         integer, parameter :: dp = kind(1.d0)
</span><br>
<span class="quotelev2">&gt; &gt;   9         real(kind=dp) :: inside(5), outside(5)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not a fortran expert -- is kind(1.d0) really double precision?  According to <a href="http://gcc.gnu.org/onlinedocs/gcc-3.4.6/g77/Kind-Notation.html">http://gcc.gnu.org/onlinedocs/gcc-3.4.6/g77/Kind-Notation.html</a>, kind(2) is double precision (but that's for a different compiler, and I don't quite grok the &quot;.d0&quot; notation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Urgh!  Thank heavens gcc have moved away from that stupid idea.
<br>
<p>kind=8 is normally double precision (and is with gfortran).  kind(1.0d0)
<br>
is always double precision.
<br>
<p>The d (as opposed to e) means DP.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
