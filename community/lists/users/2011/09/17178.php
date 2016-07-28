<?
$subject_val = "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 14:07:39 2011" -->
<!-- isoreceived="20110907180739" -->
<!-- sent="Wed, 7 Sep 2011 14:07:34 -0400" -->
<!-- isosent="20110907180734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&amp;quot; (-26) instead of &amp;quot;Success&amp;quot;" -->
<!-- id="DE07FF1B-B347-4A9E-9221-260D99C60E00_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E67CE0A.4000903_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 14:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2011, at 4:03 PM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; By the way, I solved the problem by invoking MPI_Comm_disconnect on the inter-communicator I receive from the spawning task (MPI_Finalize is not enough). This makes the spawned tasks to close the parent communicator and terminate.
</span><br>
<p>This is correct MPI behavior.
<br>
<p>Just having spawned processes call Finalize is not sufficient, because they are still &quot;connected&quot; to the parent(s) who spawned them, meaning that you can eventually run out of resources.
<br>
<p>Having your children disconnect before finalizing is definitely a good idea.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17179.php">Ed Blosch: "Re: [OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
<li><strong>In reply to:</strong> <a href="17177.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn error: Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot;"</a>
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
