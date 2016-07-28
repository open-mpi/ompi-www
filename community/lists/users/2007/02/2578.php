<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  1 14:41:19 2007" -->
<!-- isoreceived="20070201194119" -->
<!-- sent="Thu, 1 Feb 2007 14:41:08 -0500" -->
<!-- isosent="20070201194108" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX" -->
<!-- id="A1B3C5DA-EFEC-4F4E-B8FE-CB6E85A970FE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45BF8A7F.4050000_at_informatik.uni-halle.de" -->
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
<strong>Date:</strong> 2007-02-01 14:41:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>Previous message:</strong> <a href="2577.php">Alex Tumanov: "[OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2571.php">Bert Wesarg: "[OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 30, 2007, at 1:12 PM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; I see the extern definitions in mpi.h for ompi_mpi_2cplex and
</span><br>
<span class="quotelev1">&gt; ompi_mpi_2dblcplex, but no #define for MPI_2COMPLEX and  
</span><br>
<span class="quotelev1">&gt; MPI_2DOUBLE_COMPLEX.
</span><br>
<p>You are exactly right, sir!
<br>
<p>We had the internal machinery for those types, but never added the  
<br>
Fortran or C constants (in mpif.h and mpi.h, respectively) to access  
<br>
them.
<br>
<p>I just committed the fix to the trunk; it should be included in the  
<br>
upcoming v1.2 release.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/13432">https://svn.open-mpi.org/trac/ompi/changeset/13432</a>
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
<li><strong>Next message:</strong> <a href="2579.php">Jeff Squyres: "Re: [OMPI users] OpenMPI sucks CPU when doing nothing"</a>
<li><strong>Previous message:</strong> <a href="2577.php">Alex Tumanov: "[OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2571.php">Bert Wesarg: "[OMPI users] no MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX"</a>
<!-- nextthread="start" -->
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
