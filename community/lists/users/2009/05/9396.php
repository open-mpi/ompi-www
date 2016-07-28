<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 15:36:06 2009" -->
<!-- isoreceived="20090519193606" -->
<!-- sent="Tue, 19 May 2009 20:37:15 +0100" -->
<!-- isosent="20090519193715" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="1242761835.11942.14.camel_at_localhost.localdomain" -->
<!-- inreplyto="C57B36C4-15D4-430C-8CAA-494004C8E40B_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 15:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-05-19 at 14:01 -0400, Noam Bernstein wrote:
<br>
<p>I'm glad you got to the bottom of it.
<br>
<p><span class="quotelev1">&gt; With one of them, apparently, CP2K will silently go on if  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; file is missing,  but then lock up in an MPI call (maybe it leaves
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; variables  uninitialized, and then uses them in the call to the MPI  
</span><br>
<span class="quotelev1">&gt; function?).
</span><br>
<p>More likely it takes a different path through the code and ends up
<br>
making mis-matched collective calls across processes.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9397.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9395.php">Jeff Squyres: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>In reply to:</strong> <a href="9393.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9359.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
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
