<?
$subject_val = "Re: [OMPI users] 3D domain decomposition with MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 05:41:53 2010" -->
<!-- isoreceived="20100311104153" -->
<!-- sent="Thu, 11 Mar 2010 11:44:37 +0100" -->
<!-- isosent="20100311104437" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 3D domain decomposition with MPI" -->
<!-- id="87k4tj2l4a.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B9862B7.5020402_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] 3D domain decomposition with MPI<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 05:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 10 Mar 2010 22:25:43 -0500, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ocean dynamics equations, at least in the codes I've seen,
</span><br>
<span class="quotelev1">&gt; normally use &quot;pencil&quot; decomposition, and are probably harder to
</span><br>
<span class="quotelev1">&gt; handle using 3D &quot;chunk&quot; decomposition (due to the asymmetry imposed by
</span><br>
<span class="quotelev1">&gt; gravity).
</span><br>
<p>There is also a lot to be said for the strength of coupling.  Ocean
<br>
codes do &quot;tridiagonal solves&quot; in columns, and these would no longer be
<br>
trivially cheap (in fact the structure of the code would need to change)
<br>
if the partition also broke up the vertical.  Since the domain is so
<br>
anisotropic and the coupling (at least aside from the barotropic mode)
<br>
is so much stronger in the vertical than the horizontal, it is good to
<br>
decompose with columns always kept together.  In a fully implicit code,
<br>
these column solves would quit being mandatory, but the availability of
<br>
a &quot;line smoother&quot; for multigrid still favors this type of decomposition.
<br>
<p>Also note that in domain decomposition algorithms (like additive
<br>
Schwarz, and balancing Neumann-Neumann), the asymptotics scale with the
<br>
maximum number of subdomains required to cross the domain, and/or with
<br>
the number of elements along the longest edge of a subdomain.  This
<br>
tends to favor partitioning in 3D, unless the physics/domain is
<br>
sufficiently anisotropic to overcome this preference.
<br>
<p>Also depending on Derek's application, he may want to use a library like
<br>
PETSc to handle the decomposition and updates.  Certainly this is true
<br>
if the application may ever need solvers; in my opinion, it is also true
<br>
unless this is a toy problem being used to learn MPI.  If you really
<br>
want to write this stuff yourself, it's still worth looking at the
<br>
discussion in PETSc user's manual.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>Previous message:</strong> <a href="12316.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12310.php">Eugene Loh: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
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
