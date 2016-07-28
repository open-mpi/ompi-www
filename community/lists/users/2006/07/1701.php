<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 13:41:37 2006" -->
<!-- isoreceived="20060731174137" -->
<!-- sent="Mon, 31 Jul 2006 13:41:29 -0400" -->
<!-- isosent="20060731174129" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling MPI with pgf90" -->
<!-- id="04F8338E-B406-49DF-A349-FE11D55DABC6_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44CE39FB.90805_at_yahoo.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-31 13:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 31, 2006, at 1:12 PM, James McManus wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to compile MPI with pgf90. I use the following configure
</span><br>
<span class="quotelev1">&gt; settings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi F90=pgf90 F77=pgf77
</span><br>
<p>Besides the other issue about the wrong env. variable, if you have  
<br>
further trouble I'm using the following:
<br>
<p>./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90 FCFLAGS=- 
<br>
fastsse
<br>
<p><p>&quot;--with-gnu-ld &quot; might be important.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1700.php">Brian Barrett: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Reply:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
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
