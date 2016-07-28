<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 16:26:37 2005" -->
<!-- isoreceived="20050914212637" -->
<!-- sent="Wed, 14 Sep 2005 15:26:32 -0600" -->
<!-- isosent="20050914212632" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] attempt to override read-only MCA parameter &amp;quot;orte_infrastructure&amp;quot;" -->
<!-- id="20050914212632.GA27940_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.11857.1126730671.7020.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-14 16:26:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Jonathan Day: "[O-MPI users] Changes required to support the Broadcom SB1"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 14 Sep 2005 14:44:26 -0600
</span><br>
<span class="quotelev1">&gt; From: &quot;Tim S. Woodall&quot; &lt;twoodall_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] attempt to override read-only MCA	parameter
</span><br>
<span class="quotelev1">&gt; 	&quot;orte_infrastructure&quot;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;43288BAA.6050105_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Daryl,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe there is a problem w/ the latest version of the bproc launcher...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try running w/ the following to use an older version:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca pls_bproc_seed_priority 101 &lt;rest-of-args&gt;
</span><br>
<p>Tim, thanks for the suggestion.  Unfortunately I got the same warning but
<br>
this time the job did not complete; hung and then issued the following when
<br>
I &lt;Ctrl&gt;-C'd:
<br>
<p>&nbsp;&nbsp;&nbsp;[0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: readv failed with errno=104
<br>
<p>Daryl
<br>
<p><span class="quotelev1">&gt; This could also be set in your system default or local MCA
</span><br>
<span class="quotelev1">&gt; parameter file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<p>[[ snip ]]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Jonathan Day: "[O-MPI users] Changes required to support the Broadcom SB1"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
<li><strong>Maybe in reply to:</strong> <a href="0142.php">Daryl W. Grunau: "[O-MPI users] attempt to override read-only MCA parameter &quot;orte_infrastructure&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot;"</a>
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
