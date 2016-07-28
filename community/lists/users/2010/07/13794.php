<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 08:23:28 2010" -->
<!-- isoreceived="20100727122328" -->
<!-- sent="Tue, 27 Jul 2010 13:23:22 +0100" -->
<!-- isosent="20100727122322" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="20100727122322.GA46442_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 08:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13795.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13793.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 27, 2010 at 08:11:39AM -0400, Jeff Squyres wrote:
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
<p>*quote*
<br>
kind (x) has type default integer and value equal to the kind
<br>
type parameter value of x.
<br>
*end quote*
<br>
<p>p. 161 from Metcalf et al (2007) Fortran 95/2003 explained.
<br>
<p>% cat tmp.f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program z
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: dp = kind(1.d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(kind=dp) :: inside(5), outside(5)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)dp
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end program z
<br>
% g95 -L/usr/local/lib tmp.f90
<br>
% ./a.out
<br>
&nbsp;8
<br>
% 
<br>
<p>Kind 8 is (on most arch) 8-byte real, i.e. typically
<br>
double precision.
<br>
<p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13795.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13793.php">Terry Frankcombe: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13792.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13799.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
