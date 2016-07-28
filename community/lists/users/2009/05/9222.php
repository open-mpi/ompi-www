<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:59:28 2009" -->
<!-- isoreceived="20090505135928" -->
<!-- sent="Tue, 05 May 2009 06:59:19 -0700" -->
<!-- isosent="20090505135919" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="4A004637.5030201_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A00410B.5000609_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9969.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Put more strongly, the &quot;correct&quot; (subjective term) way for an MPI 
</span><br>
<span class="quotelev1">&gt; implementation to bind processes is upon process creation and waiting 
</span><br>
<span class="quotelev1">&gt; until MPI_Init is &quot;wrong&quot;.  This point of view has nothing to do with 
</span><br>
<span class="quotelev1">&gt; asking the MPI implementation to support binding of non-MPI processes.
</span><br>
<p>I wanted to clarify my comment.  That notion of correct/wrong here is, 
<br>
as I indicated, quite subjective.  It reflects a particular point of 
<br>
view (the challenge of getting local memory on a NUMA node).  There is 
<br>
no &quot;standard&quot; to tell us what is right or wrong here.  An equally valid 
<br>
point of view is that users should not expect any MPI support (including 
<br>
for something as nonstandard as process binding) until MPI_Init has been 
<br>
called.  I was just trying to help Geoffroy make a case here:  why we 
<br>
might want to bind processes even if they don't call -- er, haven't yet 
<br>
called :^) -- MPI_Init.
<br>
<p>I've used another hack when using an MPI implementation whose binding 
<br>
support either doesn't exist or I don't know how to use it or I don't 
<br>
trust it.  Instead of launching the executables, I launch a process that 
<br>
looks like this (I'm typing this from memory, probably full of typos and 
<br>
not guaranteed to work):
<br>
<p>#!/bin/csh
<br>
set CPULIST = ( 47 23 19 8 43 12 )
<br>
@ me = $OMPI_COMM_WORLD_RANK + 1
<br>
pbind -b $CPULIST[$me] $$
<br>
./a.out
<br>
<p>I hope you get the idea.  Anyhow, it's a wrapper script that binds the 
<br>
process before launching the MPI executable.
<br>
<p>Mainly, just wanted to clarify that I wasn't saying unequivocally what 
<br>
was right/wrong here.  Only expressing one point of view to help 
<br>
represent Geoffroy's case.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9220.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/9969.php">Geoffroy Pignot: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
