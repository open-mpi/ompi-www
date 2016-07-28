<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 09:52:06 2007" -->
<!-- isoreceived="20070306145206" -->
<!-- sent="Tue, 6 Mar 2007 09:51:41 -0500" -->
<!-- isosent="20070306145141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran90 interfaces--problem?" -->
<!-- id="247F7C76-AC6C-48AE-B5F8-C03D0A8B50DE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7DFA4448-7773-4C34-BD8E-1D3A665AD982_at_ieee.org" -->
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
<strong>Date:</strong> 2007-03-06 09:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Michael: "[OMPI users] Fortran90 interfaces--problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2759.php">흆e Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2759.php">흆e Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2007, at 9:50 AM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; I have discovered a problem with the Fortran90 interfaces for all
</span><br>
<span class="quotelev1">&gt; types of communication when one uses derived datatypes (I'm currently
</span><br>
<span class="quotelev1">&gt; using openmpi-1.3a1r13918 [for testing] and openmpi-1.1.2 [for
</span><br>
<span class="quotelev1">&gt; compatibility with an HPC system]), for example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_RECV(tsk,1,MPI_TASKSTATE,src,
</span><br>
<span class="quotelev1">&gt; 1,MPI_COMM_WORLD,MPI_STATUS_IGNORE,ier)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where tsk is a Fortran 90 structure and MPI_TASKSTATE has been
</span><br>
<span class="quotelev1">&gt; created by MPI_TYPE_CREATE_STRUCT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment I can't imagine a way to modify the OpenMPI interface
</span><br>
<span class="quotelev1">&gt; generation to work around this besides switching to --with-mpi-f90-
</span><br>
<span class="quotelev1">&gt; size=small.
</span><br>
<p>This is unfortunately a known problem -- not just with Open MPI, but  
<br>
with the F90 bindings specification in MPI.  :-(  Since there's no  
<br>
F90 equivalent of C's (void*), there's no way to pass a variable of  
<br>
arbitrary type through the MPI F90 bindings.  Hence, all we can do is  
<br>
define bindings for all the known types (i.e., various dimension  
<br>
sizes of the MPI types).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2758.php">Jeff Squyres: "Re: [OMPI users] BLACS tests fails on IPF"</a>
<li><strong>Previous message:</strong> <a href="2756.php">Jeff Squyres: "Re: [OMPI users] Current working directory issue"</a>
<li><strong>In reply to:</strong> <a href="2751.php">Michael: "[OMPI users] Fortran90 interfaces--problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2759.php">흆e Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
<li><strong>Reply:</strong> <a href="2759.php">흆e Sandgren: "Re: [OMPI users] Fortran90 interfaces--problem?"</a>
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
