<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 07:49:55 2007" -->
<!-- isoreceived="20070612114955" -->
<!-- sent="Tue, 12 Jun 2007 07:49:43 -0400" -->
<!-- isosent="20070612114943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 support not built with gfortran?" -->
<!-- id="45734222-D312-469A-8B47-81A5C6A6C439_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1181642180.6116.28.camel_at_fkpc167.phc.chalmers.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 07:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3470.php">Marcin Skoczylas: "[OMPI users] narrowly-scoped netmasks - any slution/walk-around?"</a>
<li><strong>In reply to:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 12, 2007, at 5:56 AM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I downloaded and configured v1.2.2 this morning on an Opteron cluster
</span><br>
<span class="quotelev2">&gt;&gt; using the following configure directives...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/share/apps CC=gcc CXX=g++ F77=g77 FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What does config.log say?  (Look for 'Fortran 90'.)  config.log should
</span><br>
<span class="quotelev1">&gt; be your first port of call when trying to debug build problems in any
</span><br>
<span class="quotelev1">&gt; &quot;configure&quot;-d project.
</span><br>
<p>Exactly.  OMPI's configure probably determined that it should not  
<br>
build the F90 bindings, so it didn't (hence, mpif90 is non- 
<br>
functional).  If I had to guess, it's because you specified both g77  
<br>
and gfortran.  When using gfortran, you should probably use it for  
<br>
both F77 and FC.  That will likely fix your problem.
<br>
<p>If it doesn't, please see this web page for more details on getting  
<br>
help:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Consider this a compile-time problem (because OMPI decided not to  
<br>
build the F90 bindings) and send all the information listed.  Thanks!
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
<li><strong>Next message:</strong> <a href="3472.php">Ralph H Castain: "Re: [OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3470.php">Marcin Skoczylas: "[OMPI users] narrowly-scoped netmasks - any slution/walk-around?"</a>
<li><strong>In reply to:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3475.php">Jeff Pummill: "Re: [OMPI users] f90 support not built with gfortran?"</a>
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
