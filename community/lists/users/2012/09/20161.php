<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  8 16:59:28 2012" -->
<!-- isoreceived="20120908205928" -->
<!-- sent="Sat, 08 Sep 2012 16:59:08 -0400" -->
<!-- isosent="20120908205908" -->
<!-- name="Paul Edmon" -->
<!-- email="pedmon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012" -->
<!-- id="504BB19C.1020904_at_cfa.harvard.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200AD156-CF5E-43DC-B92F-911CB03B526B_at_cisco.com" -->
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
<strong>From:</strong> Paul Edmon (<em>pedmon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-08 16:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>In reply to:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting.  I figured that might be the case.  I will have to contact 
<br>
Intel and find out if we can get a newer version.
<br>
<p>Thanks.
<br>
<p>-Paul Edmon-
<br>
<p>On 9/8/2012 3:18 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Did this ever get a followup?  If not...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've seen problems with specific versions of the Intel compiler that randomly set fault in strange places.  The only solution was the upgrade the Intel compiler to the latest version in that series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2012, at 11:24 AM, Paul Edmon wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build OpenMPI 1.6.1 with Intel Cluster Studio 2012 for use on our cluster however I'm running into a bit of a problem.  The OpenMPI itself builds fine as does the code I'm testing with. However when I try to run on more than about 16 processors the run seg faults and when I turn on traceback it seems to point to this call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_INIT_THREAD(MPI_THREAD_FUNNELED, provided, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a pretty standard call. Even stranger when I use a different version of the Intel Compiler 12.0.3 20110309 it doesn't have any problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The version of the Intel compiler in Intel Cluster Studio 2012 is 12.1.0 20110811.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does any one have any thoughts about this error?  I've tried turning off any optimization to no avail.  I even tried turned on debug mode for OpenMPI but I can't get any thing more specific as to why it is failing.  I even tried compiling Intel MPI Benchmark, which failed in a similar way, which indicates that its a problem specifically with the interaction of MPI and the intel compiler and not the code I was working with.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul Edmon-
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20162.php">Yonghui: "Re: [OMPI users] MPI_Allreduce fail (minGW gfortran + OpenMPI 1.6.1)"</a>
<li><strong>Previous message:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>In reply to:</strong> <a href="20160.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<li><strong>Reply:</strong> <a href="20358.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
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
