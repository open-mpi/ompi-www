<?
$subject_val = "Re: [OMPI users] Issue with Profiling Fortran code";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  6 08:33:20 2008" -->
<!-- isoreceived="20081206133320" -->
<!-- sent="Sat, 6 Dec 2008 08:33:11 -0500" -->
<!-- isosent="20081206133311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue with Profiling Fortran code" -->
<!-- id="D6F6E4A9-8FD1-4131-9232-BAE83886F7B8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4355178.2146661228521537834.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue with Profiling Fortran code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-06 08:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2008, at 6:58 PM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt; AFAIK, all known/popular MPI implemention's fortran binding
</span><br>
<span class="quotelev1">&gt; layer is implemented with C MPI functions, including
</span><br>
<span class="quotelev1">&gt; MPICH2 and OpenMPI.   If MPICH2's fortran layer was implemented
</span><br>
<span class="quotelev1">&gt; the way you said, typical profiling tools including MPE will
</span><br>
<span class="quotelev1">&gt; fail to work with fortran applications.
</span><br>
<p><p>FWIW, NEC's MPI has their Fortran functions directly call back-end  
<br>
functionality (vs. calling the C MPI API).  We've considered doing  
<br>
this for at least some key Fortran MPI API functions in Open MPI as  
<br>
well.  Specifically, have MPI_SEND [Fortran] directly call the back- 
<br>
end sending functionality rather than calling MPI_Send [C] or  
<br>
PMPI_Send [C].
<br>
<p>Hence, I don't think it's a good assumption to rely on (that the MPI  
<br>
Fortran API always calls the [P]MPI C API).
<br>
<p>I think one of George's middle points is the most relevant here: those  
<br>
who are interested in this stuff should definitely participate in the  
<br>
MPI Forum's Tools group:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools">https://svn.mpi-forum.org/trac/mpi-forum-web/wiki/MPI3Tools</a>
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
<li><strong>Next message:</strong> <a href="7436.php">Максим Чусовлянов: "Re: [OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="7434.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7432.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7433.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
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
