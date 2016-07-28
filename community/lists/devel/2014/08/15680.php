<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 18:15:32 2014" -->
<!-- isoreceived="20140821221532" -->
<!-- sent="Thu, 21 Aug 2014 15:15:11 -0700" -->
<!-- isosent="20140821221511" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="119544E7-412A-4696-B325-2282EA3BA198_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140821224943.71fa00ef_at_antares" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 18:15:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15679.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15679.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How odd - can you run it with --display-devel-map and send that along? It will give us a detailed statement of where it thinks everything should run.
<br>
<p><p>On Aug 21, 2014, at 2:49 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; One thing you might want to try: add this to your mpirun cmd line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --display-allocation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will tell you how many slots we think we've been given on your
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried that using 1.8.2rc4, this is what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        node2: slots=48 max_slots=48 slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I forgot to mention previously that mpirun runs all cores on localhost,
</span><br>
<span class="quotelev1">&gt; it is only when running on another host (--hostfile hosts) that the 32
</span><br>
<span class="quotelev1">&gt; proc cap is observed. I'm attaching a snapshot of the most recent run.
</span><br>
<span class="quotelev1">&gt; The job was invoked by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.8.2rc4/bin/mpirun -np 48 --hostfile hosts
</span><br>
<span class="quotelev1">&gt;  --display-allocation ./test.py &gt; test.std 2&gt; test.ste
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; test.ste contains the hwloc error I mentioned in my previous post:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object (L3 cpuset 0x000003f0) intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 760
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2014, at 12:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Starting early in the 1.7 series, we began to bind procs by default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to cores when -np &lt;= 2, and to sockets if np &gt; 2. Is it possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is what you are seeing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 21, 2014, at 12:45 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear devels,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have been trying out 1.8.2rcs recently and found a show-stopping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem on our cluster. Running any job with any number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors larger than 32 will always employ only 32 cores per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node (our nodes have 48 cores). We are seeing identical behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with 1.8.2rc4, 1.8.2rc2, and 1.8.1. Running identical programs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shows no such issues with version 1.6.5, where all 48 cores per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node are working. While our system is running torque/maui, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is evident by running mpirun directly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am attaching hwloc topology in case that helps -- I am aware of a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buggy bios code that trips hwloc, but I don't know if that might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be an issue or not. I am happy to help debugging if you can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provide me with guidance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andrej
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;cluster.output&gt;&lt;cluster.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15676.php">http://www.open-mpi.org/community/lists/devel/2014/08/15676.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15678.php">http://www.open-mpi.org/community/lists/devel/2014/08/15678.php</a>
</span><br>
<span class="quotelev1">&gt; &lt;htop.jpg&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15679.php">http://www.open-mpi.org/community/lists/devel/2014/08/15679.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15679.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15679.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15681.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
