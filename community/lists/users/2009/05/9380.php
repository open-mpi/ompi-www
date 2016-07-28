<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:13:48 2009" -->
<!-- isoreceived="20090519131348" -->
<!-- sent="Tue, 19 May 2009 09:13:44 -0400" -->
<!-- isosent="20090519131344" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="3EC0681A-AD4B-40BF-BBB6-EC8FFC0130B4_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6FDB9035-F698-4AF6-A5B2-06E7E52BC259_at_cisco.com" -->
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
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 09:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 8:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; fork() support in OpenFabrics has always been dicey -- it can lead  
</span><br>
<span class="quotelev1">&gt; to random behavior like this.  Supposedly it works in a specific set  
</span><br>
<span class="quotelev1">&gt; of circumstances, but I don't have a recent enough kernel on my  
</span><br>
<span class="quotelev1">&gt; machines to test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's best not to use calls to system() if they can be avoided.   
</span><br>
<span class="quotelev1">&gt; Indeed, Open MPI v1.3.x will warn you if you create a child process  
</span><br>
<span class="quotelev1">&gt; after MPI_INIT when using OpenFabrics networks.
</span><br>
<p>The MPI code isn't calling fork or system.  The serial code is calling
<br>
system(&quot;mpirun cp2k.popt&quot;). That runs to completion, processes the
<br>
output files, and calls system(&quot;mpirun cp2k.popt&quot;) again, and so on.
<br>
Is that in fact likely to be a problem?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9381.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9379.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9383.php">Jeff Squyres: "Re: [OMPI users] CP2K mpi hang"</a>
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
