<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 19 11:03:46 2005" -->
<!-- isoreceived="20050919160346" -->
<!-- sent="Mon, 19 Sep 2005 10:03:38 -0600" -->
<!-- isosent="20050919160338" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] attempt to override read-only MCA parameter &amp;quot;orte_infrastructure&amp;quot; - FIXED!" -->
<!-- id="20050919160338.GA24501_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.12162.1126818717.7020.users_at_open-mpi.org" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-19 11:03:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0147.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Reply:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Thu, 15 Sep 2005 15:11:50 -0600
</span><br>
<span class="quotelev1">&gt; From: &quot;Tim S. Woodall&quot; &lt;twoodall_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] attempt to override read-only MCA	parameter
</span><br>
<span class="quotelev1">&gt; 	&quot;orte_infrastructure&quot;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;4329E396.1060308_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daryl,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This should be fixed in svn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>Tim, the latest nightly fixes this - thanks!  Can I report another?  I
<br>
can't seem to specify -H|-host|--host &lt;arg0&gt;; mpirun seems to ignore the
<br>
argument:
<br>
<p>&nbsp;&nbsp;&nbsp;%  mpirun -np 2 -H 0,4 ./cpi
<br>
&nbsp;&nbsp;&nbsp;Process 0 on n0
<br>
&nbsp;&nbsp;&nbsp;Process 1 on n1
<br>
&nbsp;&nbsp;&nbsp;pi is approximately 3.1416009869231241, Error is 0.0000083333333309
<br>
&nbsp;&nbsp;&nbsp;wall clock time = 0.010952
<br>
<p>Am I specifying this wrong?
<br>
<p>Daryl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0147.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Reply:</strong> <a href="0149.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
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
