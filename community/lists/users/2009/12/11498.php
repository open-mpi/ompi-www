<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 10:20:38 2009" -->
<!-- isoreceived="20091210152038" -->
<!-- sent="Thu, 10 Dec 2009 10:20:32 -0500" -->
<!-- isosent="20091210152032" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI with PGI compilers" -->
<!-- id="D31423FE-B73E-48F9-862E-CAD3721A90D7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBD9F8A4-A619-4D89-91FD-EA167EDBD66B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI with PGI compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-10 10:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 9, 2009, at 4:36 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; That's the commit message for r22273.  Also see the commit message for r22274 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/22274">https://svn.open-mpi.org/trac/ompi/changeset/22274</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: the fix is now in the SVN trunk; it hasn't migrated over to the v1.4 and v1.5 branches yet.  It's an autogen.sh fix -- you should be able to download autogen.sh from our SVN trunk and run it on your 1.4 tree.
</span><br>
<p>Actually, I was wrong.  You *can't* just take the SVN trunk's autogen.sh and use it with a v1.4 tarball (for various uninteresting reasons).
<br>
<p>Given that we haven't moved this patch to the v1.4 branch yet (i.e., it's not yet in a nightly v1.4 tarball), probably the easiest thing to do is to apply the attached patch to a v1.4 tarball.  I tried it with my PGI 10.0 install and it seems to work.  So -- forget everything about autogen.sh and just apply the attached patch.
<br>
<p>Sorry for the confusion!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11498/pgi-v14.patch">pgi-v14.patch</a>
</ul>
<!-- attachment="pgi-v14.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11499.php">Mark Bolstad: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11497.php">Ashley Pittman: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>In reply to:</strong> <a href="11486.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="11502.php">Joshua Bernstein: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
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
