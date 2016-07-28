<?
$subject_val = "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 11 12:16:08 2011" -->
<!-- isoreceived="20111211171608" -->
<!-- sent="Sun, 11 Dec 2011 18:16:02 +0100" -->
<!-- isosent="20111211171602" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?" -->
<!-- id="20111211171602.GA22492_at_neuromancer.fritz.box" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="000601ccb7fb$df24d8b0$9d6e8a10$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-11 12:16:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17926.php">christophe petit: "[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR"</a>
<li><strong>In reply to:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>on an SMP box threaded codes CAN always be faster than their MPI
<br>
equivalents. One reason why MPI sometimes turns out to be faster is
<br>
that with MPI every process actually initializes its own
<br>
data. Therefore it'll end up in the NUMA domain to which the core
<br>
running that process belongs. A lot of threaded codes are not NUMA
<br>
aware. So, for instance the initialization is done sequentially
<br>
(because it may not take a lot of time), and Linux' first touch policy
<br>
makes all memory pages belong to a single domain. In essence, those
<br>
codes will use just a single memory controller (and its bandwidth).
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p>On 11:56 Sun 11 Dec     , MM wrote:
<br>
<span class="quotelev1">&gt; I guess, on a multicore machine, openmp/pthread code will always run faster
</span><br>
<span class="quotelev1">&gt; than MPI code on the same box, even if the MPI implementation is efficient
</span><br>
<span class="quotelev1">&gt; and uses a shared memory tool whereby the data is actually shared across the
</span><br>
<span class="quotelev1">&gt; different process, though it's in a different way than it is shared across
</span><br>
<span class="quotelev1">&gt; the threads in the same process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be curious to see some timing comparisons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of amjad ali
</span><br>
<span class="quotelev1">&gt; Sent: 10 December 2011 20:22
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] How to justify the use MPI codes on multicore
</span><br>
<span class="quotelev1">&gt; systems/PCs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I developed my MPI based parallel code for clusters, but now I use it on
</span><br>
<span class="quotelev1">&gt; multicore/manycore computers (PCs) as well. How to justify (in some
</span><br>
<span class="quotelev1">&gt; thesis/publication) the use of a distributed memory code (in MPI) on a
</span><br>
<span class="quotelev1">&gt; shared memory (multicore) machine. I guess to explain two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) Plan is to use several hunderds processes in future. So MPI like stuff
</span><br>
<span class="quotelev1">&gt; is necessary. To maintain code uniformity and save cost/time for developing
</span><br>
<span class="quotelev1">&gt; shared memory solution (using OpenMP, pthreads etc), I use the same MPI code
</span><br>
<span class="quotelev1">&gt; on shared memory systems (like multicore PCs). MPI based codes give
</span><br>
<span class="quotelev1">&gt; reasonable performance on multicore PCs, if not the best.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) The latest MPI implementations are intelligent enough that they use some
</span><br>
<span class="quotelev1">&gt; efficient mechanism while executing MPI based codes on shared memory
</span><br>
<span class="quotelev1">&gt; (multicore) machines.  (please tell me any reference to quote this fact).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please help me in formally justifying this and comment/modify above two
</span><br>
<span class="quotelev1">&gt; justifications. Better if I you can suggent me to quote some reference of
</span><br>
<span class="quotelev1">&gt; any suitable publication in this regard. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Amjad Ali
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17927/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17926.php">christophe petit: "[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR"</a>
<li><strong>In reply to:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17928.php">Tim Prince: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
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
