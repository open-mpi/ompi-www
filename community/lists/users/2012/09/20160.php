<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 15:18:52 2012" -->
<!-- isoreceived="20120908191852" -->
<!-- sent="Sat, 8 Sep 2012 15:18:47 -0400" -->
<!-- isosent="20120908191847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012" -->
<!-- id="200AD156-CF5E-43DC-B92F-911CB03B526B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="503E3442.8030907_at_cfa.harvard.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 15:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did this ever get a followup?  If not...
<br>
<p>We've seen problems with specific versions of the Intel compiler that randomly set fault in strange places.  The only solution was the upgrade the Intel compiler to the latest version in that series.
<br>
<p><p>On Aug 29, 2012, at 11:24 AM, Paul Edmon wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build OpenMPI 1.6.1 with Intel Cluster Studio 2012 for use on our cluster however I'm running into a bit of a problem.  The OpenMPI itself builds fine as does the code I'm testing with. However when I try to run on more than about 16 processors the run seg faults and when I turn on traceback it seems to point to this call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CALL MPI_INIT_THREAD(MPI_THREAD_FUNNELED, provided, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a pretty standard call. Even stranger when I use a different version of the Intel Compiler 12.0.3 20110309 it doesn't have any problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The version of the Intel compiler in Intel Cluster Studio 2012 is 12.1.0 20110811.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does any one have any thoughts about this error?  I've tried turning off any optimization to no avail.  I even tried turned on debug mode for OpenMPI but I can't get any thing more specific as to why it is failing.  I even tried compiling Intel MPI Benchmark, which failed in a similar way, which indicates that its a problem specifically with the interaction of MPI and the intel compiler and not the code I was working with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul Edmon-
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Previous message:</strong> <a href="20159.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20056.php">Paul Edmon: "[OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
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
