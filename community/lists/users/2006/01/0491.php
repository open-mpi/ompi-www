<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan  6 10:07:58 2006" -->
<!-- isoreceived="20060106150758" -->
<!-- sent="Fri, 6 Jan 2006 16:07:51 +0100 (MET)" -->
<!-- isosent="20060106150751" -->
<!-- name="Carsten Kutzner" -->
<!-- email="ckutzne_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.OSF.4.58.0601061600520.360918_at_gwdu70.gwdg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.62.0601060923140.23384_at_enterprise" -->
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
<strong>From:</strong> Carsten Kutzner (<em>ckutzne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-06 10:07:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 6 Jan 2006, Graham E Fagg wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Looks like the problem is somewhere in the tuned collectives?
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately I need a logfile with exactly those :(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Carsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope not. Carsten can you send me your configure line (not the whole
</span><br>
<span class="quotelev1">&gt; log) and any other things your set in your .mca conf file. Is this with
</span><br>
<span class="quotelev1">&gt; the changed (custom) decision function or the standard one??
</span><br>
<p>I get the problems with custom decision function as well as without. Today
<br>
I downloaded a clean tarball 1.1a1r8626 and changed nothing. I simply
<br>
configure with
<br>
<p>$ ./configure --prefix=/home/ckutzne/ompi1.1a1r8626-gcc331
<br>
<p>Then make all install and that's it. I both tried gcc3.3.1 and gcc4.0.2.
<br>
<p>Then I install MPE from mpe2.tar.gz with
<br>
&nbsp;./configure MPI_CC=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpicc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=/usr/bin/gcc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_F77=/home/ckutzne/ompi1.1a1r8626-gcc331/bin/mpif77 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=/usr/bin/gcc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/home/ckutzne/mpe2-ompi1.1a1r8626-gcc331
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make install
<br>
&nbsp;&nbsp;&nbsp;&nbsp;make installcheck --&gt; ok!
<br>
<p>I did not set anything in an .mca conf file (do I have to?)
<br>
<p>&nbsp;&nbsp;Carsten
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jeff Squyres: "Re: [O-MPI users] Open MPI and gfortran"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Jeff Squyres: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
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
