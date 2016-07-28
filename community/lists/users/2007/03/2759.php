<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 10:23:38 2007" -->
<!-- isoreceived="20070306152338" -->
<!-- sent="Tue, 06 Mar 2007 16:23:30 +0100" -->
<!-- isosent="20070306152330" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran90 interfaces--problem?" -->
<!-- id="1173194610.31671.277.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="247F7C76-AC6C-48AE-B5F8-C03D0A8B50DE_at_cisco.com" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 10:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
<li><strong>Previous message:</strong> <a href="2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>In reply to:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2007-03-06 at 09:51 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 5, 2007, at 9:50 AM, Michael wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have discovered a problem with the Fortran90 interfaces for all
</span><br>
<span class="quotelev2">&gt; &gt; types of communication when one uses derived datatypes (I'm currently
</span><br>
<span class="quotelev2">&gt; &gt; using openmpi-1.3a1r13918 [for testing] and openmpi-1.1.2 [for
</span><br>
<span class="quotelev2">&gt; &gt; compatibility with an HPC system]), for example
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_RECV(tsk,1,MPI_TASKSTATE,src,
</span><br>
<span class="quotelev2">&gt; &gt; 1,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; where tsk is a Fortran 90 structure and MPI_TASKSTATE has been
</span><br>
<span class="quotelev2">&gt; &gt; created by MPI_TYPE_CREATE_STRUCT.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; At the moment I can't imagine a way to modify the OpenMPI interface
</span><br>
<span class="quotelev2">&gt; &gt; generation to work around this besides switching to --with-mpi-f90-
</span><br>
<span class="quotelev2">&gt; &gt; size=small.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is unfortunately a known problem -- not just with Open MPI, but  
</span><br>
<span class="quotelev1">&gt; with the F90 bindings specification in MPI.  :-(  Since there's no  
</span><br>
<span class="quotelev1">&gt; F90 equivalent of C's (void*), there's no way to pass a variable of  
</span><br>
<span class="quotelev1">&gt; arbitrary type through the MPI F90 bindings.  Hence, all we can do is  
</span><br>
<span class="quotelev1">&gt; define bindings for all the known types (i.e., various dimension  
</span><br>
<span class="quotelev1">&gt; sizes of the MPI types).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>What about the &quot;Fortran 2003 ISO_C_BINDING&quot; couldn't a C_LOC be used
<br>
here?
<br>
(I probably don't know what i'm talking about but i just saw a reference
<br>
to it.)
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
<li><strong>Next message:</strong> <a href="2760.php">Jeff Squyres: "Re: [OMPI users] performance question"</a>
<li><strong>Previous message:</strong> <a href="2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>In reply to:</strong> <a href="2757.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2761.php">Jeff Squyres: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
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
