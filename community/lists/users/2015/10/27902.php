<?
$subject_val = "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 03:38:22 2015" -->
<!-- isoreceived="20151021073822" -->
<!-- sent="Wed, 21 Oct 2015 00:38:16 -0700" -->
<!-- isosent="20151021073816" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0" -->
<!-- id="58148295-C405-4FC1-8C72-2858DB0BD968_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="901B6372-A904-4742-B012-DE2291BBB3F4_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 03:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27903.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27901.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF @SC15"</a>
<li><strong>In reply to:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Zhi
<br>
<p>Any luck with the 1.10.1 nightly snapshot? Are these all being run as separate jobs (i.e., each test is executed in series using a separate mpirun)?
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Oct 15, 2015, at 11:48 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph is our runtime guy; he can provide the definitive answers here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But first, can you try the latest v1.10.1 nightly snapshot tarball?  Some fixes have gone in since v1.10.0 has been released:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/nightly/v1.10/">http://www.open-mpi.org/nightly/v1.10/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 15, 2015, at 1:13 PM, Zhi Zhang &lt;zzhang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When running the Intel MPI Benchmark (versions 3.2.3 and 4.1.0.109 were tried), running all benchmarks, and looping the test over and over, after a while, when the test is exiting (running MPI_Finalize), the test will hang. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When the processes on the nodes are checked, one node will be running IMB-MPI1 still, and that process will be in zombie state.  The orted parent of that process is still running though.  This has been reproduced with multiple networks and transports, but most debug on this was done with Intel TrueScale IB.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can provide more information if needed. Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image001.png&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27871.php">http://www.open-mpi.org/community/lists/users/2015/10/27871.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27875.php">http://www.open-mpi.org/community/lists/users/2015/10/27875.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27903.php">Daniel Letai: "Re: [OMPI users] display-map option in v1.8.8"</a>
<li><strong>Previous message:</strong> <a href="27901.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI State of the Union BOF @SC15"</a>
<li><strong>In reply to:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27922.php">Zhi Zhang: "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
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
