<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 09:36:58 2009" -->
<!-- isoreceived="20090519133658" -->
<!-- sent="Tue, 19 May 2009 09:36:52 -0400" -->
<!-- isosent="20090519133652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="9E91F002-1B21-4EB0-913B-59BF02F41B04_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3EC0681A-AD4B-40BF-BBB6-EC8FFC0130B4_at_nrl.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 09:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 9:13 AM, Noam Bernstein wrote:
<br>
<p><span class="quotelev1">&gt; The MPI code isn't calling fork or system.  The serial code is calling
</span><br>
<span class="quotelev1">&gt; system(&quot;mpirun cp2k.popt&quot;). That runs to completion, processes the
</span><br>
<span class="quotelev1">&gt; output files, and calls system(&quot;mpirun cp2k.popt&quot;) again, and so on.
</span><br>
<span class="quotelev1">&gt; Is that in fact likely to be a problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>No, that should not be a problem.  Calling system() to launch mpirun  
<br>
from a non-MPI application should be fine.
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
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
<li><strong>Next message:</strong> <a href="9384.php">Roman Martonak: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9382.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>In reply to:</strong> <a href="9380.php">Noam Bernstein: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
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
