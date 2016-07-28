<?
$subject_val = "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 14:48:35 2015" -->
<!-- isoreceived="20151015184835" -->
<!-- sent="Thu, 15 Oct 2015 18:48:16 +0000" -->
<!-- isosent="20151015184816" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0" -->
<!-- id="901B6372-A904-4742-B012-DE2291BBB3F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4227B153F68A8F4AA6872B9C0DD73CD924DD3E9E_at_AEMAILMBX03.lenovo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 14:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph is our runtime guy; he can provide the definitive answers here.
<br>
<p>But first, can you try the latest v1.10.1 nightly snapshot tarball?  Some fixes have gone in since v1.10.0 has been released:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.10/">http://www.open-mpi.org/nightly/v1.10/</a>
<br>
<p><p><span class="quotelev1">&gt; On Oct 15, 2015, at 1:13 PM, Zhi Zhang &lt;zzhang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running the Intel MPI Benchmark (versions 3.2.3 and 4.1.0.109 were tried), running all benchmarks, and looping the test over and over, after a while, when the test is exiting (running MPI_Finalize), the test will hang. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the processes on the nodes are checked, one node will be running IMB-MPI1 still, and that process will be in zombie state.  The orted parent of that process is still running though.  This has been reproduced with multiple networks and transports, but most debug on this was done with Intel TrueScale IB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide more information if needed. Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27871.php">http://www.open-mpi.org/community/lists/users/2015/10/27871.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27902.php">Ralph Castain: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
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
