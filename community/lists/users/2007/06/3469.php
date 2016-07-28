<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 05:56:26 2007" -->
<!-- isoreceived="20070612095626" -->
<!-- sent="Tue, 12 Jun 2007 11:56:20 +0200" -->
<!-- isosent="20070612095620" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 support not built with gfortran?" -->
<!-- id="1181642180.6116.28.camel_at_fkpc167.phc.chalmers.se" -->
<!-- inreplyto="466D81FE.20307_at_uark.edu" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 05:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3470.php">Marcin Skoczylas: "[OMPI users] narrowly-scoped netmasks - any slution/walk-around?"</a>
<li><strong>Previous message:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3455.php">Jeff Pummill: "[OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2007-06-11 at 12:10 -0500, Jeff Pummill wrote:
<br>
<span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I downloaded and configured v1.2.2 this morning on an Opteron cluster
</span><br>
<span class="quotelev1">&gt; using the following configure directives...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/share/apps CC=gcc CXX=g++ F77=g77 FC=gfortran
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 
</span><br>
<p><p>What does config.log say?  (Look for 'Fortran 90'.)  config.log should
<br>
be your first port of call when trying to debug build problems in any
<br>
&quot;configure&quot;-d project.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3470.php">Marcin Skoczylas: "[OMPI users] narrowly-scoped netmasks - any slution/walk-around?"</a>
<li><strong>Previous message:</strong> <a href="3468.php">George Bosilca: "Re: [OMPI users] TCP connection errors"</a>
<li><strong>In reply to:</strong> <a href="3455.php">Jeff Pummill: "[OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3471.php">Jeff Squyres: "Re: [OMPI users] f90 support not built with gfortran?"</a>
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
