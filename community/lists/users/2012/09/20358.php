<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 28 16:56:34 2012" -->
<!-- isoreceived="20120928205634" -->
<!-- sent="Fri, 28 Sep 2012 16:56:11 -0400" -->
<!-- isosent="20120928205611" -->
<!-- name="Paul Edmon" -->
<!-- email="pedmon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012" -->
<!-- id="50660EEB.9080703_at_cfa.harvard.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="504BB19C.1020904_at_cfa.harvard.edu" -->
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
<strong>Date:</strong> 2012-09-28 16:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20359.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>In reply to:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resolution to this.  Upgrading to OpenMPI 1.6.2 and getting Intel 
<br>
Cluster Studio 2013 did the trick.
<br>
<p>-Paul Edmon-
<br>
<p>On 9/8/2012 4:59 PM, Paul Edmon wrote:
<br>
<span class="quotelev1">&gt; Interesting. I figured that might be the case.  I will have to contact 
</span><br>
<span class="quotelev1">&gt; Intel and find out if we can get a newer version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul Edmon-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/8/2012 3:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Did this ever get a followup?  If not...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've seen problems with specific versions of the Intel compiler that 
</span><br>
<span class="quotelev2">&gt;&gt; randomly set fault in strange places.  The only solution was the 
</span><br>
<span class="quotelev2">&gt;&gt; upgrade the Intel compiler to the latest version in that series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2012, at 11:24 AM, Paul Edmon wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to build OpenMPI 1.6.1 with Intel Cluster Studio 2012 for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use on our cluster however I'm running into a bit of a problem.  The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI itself builds fine as does the code I'm testing with. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However when I try to run on more than about 16 processors the run 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seg faults and when I turn on traceback it seems to point to this call:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CALL MPI_INIT_THREAD(MPI_THREAD_FUNNELED, provided, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a pretty standard call. Even stranger when I use a different 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version of the Intel Compiler 12.0.3 20110309 it doesn't have any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The version of the Intel compiler in Intel Cluster Studio 2012 is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 12.1.0 20110811.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does any one have any thoughts about this error?  I've tried turning 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; off any optimization to no avail.  I even tried turned on debug mode 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for OpenMPI but I can't get any thing more specific as to why it is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failing.  I even tried compiling Intel MPI Benchmark, which failed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in a similar way, which indicates that its a problem specifically 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the interaction of MPI and the intel compiler and not the code 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was working with.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul Edmon-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20359.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.6.2"</a>
<li><strong>Previous message:</strong> <a href="20357.php">Mark Dixon: "[OMPI users] Mellanox MLX4_EVENT_TYPE_SRQ_LIMIT kernel messages"</a>
<li><strong>In reply to:</strong> <a href="20161.php">Paul Edmon: "Re: [OMPI users] OpenMPI 1.6.1 with Intel Cluster Studio 2012"</a>
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
