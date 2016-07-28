<?
$subject_val = "Re: [OMPI users] Running on crashing nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 27 22:53:19 2010" -->
<!-- isoreceived="20100928025319" -->
<!-- sent="Mon, 27 Sep 2010 19:53:15 -0700 (PDT)" -->
<!-- isosent="20100928025315" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on crashing nodes" -->
<!-- id="183090.89129.qm_at_web50803.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="E6B2C526-4EAA-4869-82C2-8E4697BCB61C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on crashing nodes<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-27 22:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have have&#160;successfully&#160;used a perl program to start mpirun and record its PIDThe monitor can then watch the output from MPI and terminate the mpirun command with a series of kills or something if it is having trouble.
<br>
<p>One method of doing this is to prefix all legal output from your MPI program with a known short string, if the monitor does not see this string prefixed on a line, it can terminate MPI, check available nodes and recast the job&#160;accordingly
<br>
Hope this helps,Randolph
<br>
--- On Fri, 24/9/10, Joshua Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p>From: Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Running on crashing nodes
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Friday, 24 September, 2010, 10:18 PM
<br>
<p>As one of the Open MPI developers actively working on the MPI layer stabilization/recover feature set, I don't think we can give you a specific timeframe for availability, especially availability in a stable release. Once the initial functionality is finished, we will open it up for user testing by making a public branch available. After addressing the concerns highlighted by public testing, we will attempt to work this feature into the mainline trunk and eventual release.
<br>
<p>Unfortunately it is difficult to assess the time needed to go through these development stages. What I can tell you is that the work to this point on the MPI layer is looking promising, and that as soon as we feel that the code is ready we will make it available to the public for further testing.
<br>
<p>-- Josh
<br>
<p>On Sep 24, 2010, at 3:37 AM, Andrei Fokau wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, could you tell us when this functionality will be available in the stable version? A rough estimate will be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 01:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; In a word, no. If a node crashes, OMPI will abort the currently-running job if it had processes on that node. There is no current ability to &quot;ride-thru&quot; such an event.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, there is work being done to support &quot;ride-thru&quot;. Most of that is in the current developer's code trunk, and more is coming, but I wouldn't consider it production-quality just yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, the code that does what you specify below is done and works. It is recovery of the MPI job itself (collectives, lost messages, etc.) that remains to be completed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 23, 2010 at 7:22 AM, Andrei Fokau &lt;andrei.fokau_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our cluster has a number of nodes which have high probability to crash, so it happens quite often that calculations stop due to one node getting down. May be you know if it is possible to block the crashed nodes during run-time when running with OpenMPI? I am asking about principal possibility to program such behavior. Does OpenMPI allow such dynamic checking? The scheme I am curious about is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. A code starts its tasks via mpirun on several nodes
</span><br>
<span class="quotelev1">&gt; 2. At some moment one node gets down
</span><br>
<span class="quotelev1">&gt; 3. The code realizes that the node is down (the results are lost) and excludes it from the list of nodes to run its tasks on
</span><br>
<span class="quotelev1">&gt; 4. At later moment the user restarts the crashed node
</span><br>
<span class="quotelev1">&gt; 5. The code notices that the node is up again, and puts it back to the list of active nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andrei
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14350/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14351.php">Nysal Jan: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="14349.php">Tim Prince: "Re: [OMPI users] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="14318.php">Joshua Hursey: "Re: [OMPI users] Running on crashing nodes"</a>
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
