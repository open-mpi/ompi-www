<?
$subject_val = "Re: [OMPI users] OpenMPI - compilation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 16 15:31:30 2007" -->
<!-- isoreceived="20071116203130" -->
<!-- sent="Fri, 16 Nov 2007 15:31:29 -0500 (EST)" -->
<!-- isosent="20071116203129" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI - compilation" -->
<!-- id="Pine.LNX.4.64.0711161528400.13737_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="473C70EF.50809_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI - compilation<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-16 15:31:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4487.php">Jeff Squyres: "[OMPI users] MPI-2.1: Getting the band back together"</a>
<li><strong>Previous message:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Nov 2007, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; I have seen situations where after installing Open MPI, the wrapper
</span><br>
<span class="quotelev1">&gt; compilers did not create any executables, and seemed to do nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was never able to figure out why the wrappers were broken, and
</span><br>
<span class="quotelev1">&gt; reinstalling Open MPI always seemed to make it work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I recall correctly, when this happened 'mpicc --showme' returned nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I only ever saw this on old versions of Open MPI, so I would
</span><br>
<span class="quotelev1">&gt; second Jeff in recommending an upgrade.
</span><br>
<p>There was a bug in the wrapper compilers for the v1.2 series of releases 
<br>
where if the data file describing what the wrapper compilers should do, it 
<br>
would silently exit (returning non-zero exit status, but silently).  This 
<br>
was &quot;not good&quot; and fixed in v1.2.  Generally, the underlying issue is 
<br>
either 1) an incomplete Open MPI installation or 2) the installation being 
<br>
moved from the prefix specified when configuring Open MPI.
<br>
<p>So, as others have said, upgrading will at least make the issues more 
<br>
obvious.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4487.php">Jeff Squyres: "[OMPI users] MPI-2.1: Getting the band back together"</a>
<li><strong>Previous message:</strong> <a href="4485.php">Aurelien Bouteiller: "Re: [OMPI users] Tmpdir work for first process only"</a>
<li><strong>In reply to:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
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
