<?
$subject_val = "Re: [OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  7 03:54:09 2008" -->
<!-- isoreceived="20080807075409" -->
<!-- sent="Thu, 7 Aug 2008 09:54:01 +0200" -->
<!-- isosent="20080807075401" -->
<!-- name="Jan Ploski" -->
<!-- email="Jan.Ploski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heap profiling with OpenMPI" -->
<!-- id="OFEFCAA23A.8CCCB705-ONC125749E.002AFD57-C125749E.002B6627_at_offis.uni-oldenburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1218094060.5590.73.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jan Ploski (<em>Jan.Ploski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-07 03:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-bounces_at_[hidden] schrieb am 08/07/2008 09:27:39 AM:
<br>
<p><span class="quotelev1">&gt; I can't speak for Jeff, but my understanding of the changes for 1.3
</span><br>
<span class="quotelev1">&gt; should allow you to switch off the memory manager when running your
</span><br>
<span class="quotelev1">&gt; checks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me an obvious interim solution would be to have two versions
</span><br>
<span class="quotelev1">&gt; of OpenMPI installed, one with and one without the memory manager.  Use
</span><br>
<span class="quotelev1">&gt; one for debugging, and (if desired) the pinning-capable version for
</span><br>
<span class="quotelev1">&gt; production.
</span><br>
<p>This solution is good for our local cluster (where I am administrator), 
<br>
but it gets complicated for other Grid clusters where OpenMPI is installed 
<br>
by their respective admins from RPM and the Globus middleware has no idea 
<br>
about my private installations without hacking adapters. What I wanted to 
<br>
do specifically is to compare the variation in memory use of my app (WRF) 
<br>
in different clusters and with different MPI implementations to validate 
<br>
the prediction model I constructed in my local cluster.
<br>
<p>Regards,
<br>
Jan Ploski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6286.php">Terry Frankcombe: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6288.php">Jeff Squyres: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
