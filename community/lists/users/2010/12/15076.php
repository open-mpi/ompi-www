<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 16:00:03 2010" -->
<!-- isoreceived="20101210210003" -->
<!-- sent="Fri, 10 Dec 2010 13:59:54 -0700" -->
<!-- isosent="20101210205954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on	a	single machine?" -->
<!-- id="8DAFDB95-83BC-4EDC-B66A-4EE54F110CB9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E1PR9Vh-0005D1-7p_at_mendel.bio.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 15:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - guess I had misunderstood. Yes, if all you want is the local rank of your own process, then this will work.
<br>
<p>My suggestion was if you wanted the list of local procs, or to know the local rank of your peers.
<br>
<p><p>On Dec 10, 2010, at 1:24 PM, David Mathog wrote:
<br>
<p><span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For a much simpler approach you could also use these two environment
</span><br>
<span class="quotelev1">&gt; variables, this is on my current system which is 1.5 based, YMMV of course.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is simpler.  It works on OMPI 1.4.3 too:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat &gt;/usr/common/bin/dumpev.sh &lt;&lt;EOD
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev1">&gt; EOD
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --host monkey01 --mca plm_rsh_agent rsh
</span><br>
<span class="quotelev1">&gt; /usr/common/bin/dumpenv.sh | grep LOCAL_RANK
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=0
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=1
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=2
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
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
<li><strong>Next message:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
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
