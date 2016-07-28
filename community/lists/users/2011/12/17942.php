<?
$subject_val = "Re: [OMPI users] Specifying GPU on mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 15:49:46 2011" -->
<!-- isoreceived="20111212204946" -->
<!-- sent="Mon, 12 Dec 2011 21:49:40 +0100" -->
<!-- isosent="20111212204940" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying GPU on mpi" -->
<!-- id="20111212204940.GA27750_at_rei.informatik.uni-erlangen.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4EE667B9.4070902_at_icecube.wisc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying GPU on mpi<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 15:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Reply:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Erin,
<br>
<p>uhm, I don't think this is related to MPI as MPI is completely
<br>
orthogonal to GPU programming. MPI doesn't even know about GPUs. Just
<br>
select the GPU like you weren't using MPI at all.
<br>
<p>HTH
<br>
-Andreas
<br>
<p><p>On 14:44 Mon 12 Dec     , Erin Rasmussen wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have multiple GPUs on a node in my cluster and am trying to run some 
</span><br>
<span class="quotelev1">&gt; benchmarks on the system. However, since my department is in research 
</span><br>
<span class="quotelev1">&gt; and has a job system set up, I can only take one GPU offline to test 
</span><br>
<span class="quotelev1">&gt; until I are sure I know what I are doing. My problem is trying to set up 
</span><br>
<span class="quotelev1">&gt; the mpirun command to specify a single GPU. I understand how to use 
</span><br>
<span class="quotelev1">&gt; mpirun to run programs on specific processors on different nodes, but 
</span><br>
<span class="quotelev1">&gt; the GPUs show up as devices and not processors. How do I set up my 
</span><br>
<span class="quotelev1">&gt; mpirun command to use a specific GPU, or is that even possible?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17942/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Previous message:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17941.php">Erin Rasmussen: "[OMPI users] Specifying GPU on mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>Reply:</strong> <a href="17943.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
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
