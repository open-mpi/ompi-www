<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  5 04:02:29 2010" -->
<!-- isoreceived="20101005080229" -->
<!-- sent="Tue, 5 Oct 2010 09:02:22 +0100" -->
<!-- isosent="20101005080222" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="98EEC6C9-1508-41AF-B277-ED9A636AF90A_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.15.1286208004.4967.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-05 04:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14390.php">Eugene Loh: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks to me like your remote nodes aren't finding the orted executable. I suspect the problem is that you need to forward the path and ld_library_path tot he remove nodes. Use the mpirun -x option to do so.
</span><br>
<p><p>Hi, problem sorted.  It was actually caused by the system I currently use to create Linux cpusets on the execution nodes.  Grid Engine was trying to execv on the slave nodes, and not supplying an executable to run, since this is deferred to OpenMPI.  I've scrapped this system now in favour of the new SGE core binding feature.
<br>
<p>Thanks, sorry to waste people's time!
<br>
<p>Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Previous message:</strong> <a href="14390.php">Eugene Loh: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Maybe in reply to:</strong> <a href="14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
