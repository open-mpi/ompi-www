<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 17:49:48 2014" -->
<!-- isoreceived="20140821214948" -->
<!-- sent="Thu, 21 Aug 2014 22:49:43 +0100" -->
<!-- isosent="20140821214943" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140821224943.71fa00ef_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="011E9CF7-EFFC-4C77-9663-473D5F0B970A_at_open-mpi.org" -->
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
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 17:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for your reply!
<br>
<p><span class="quotelev1">&gt; One thing you might want to try: add this to your mpirun cmd line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --display-allocation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will tell you how many slots we think we've been given on your
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<p>I tried that using 1.8.2rc4, this is what I get:
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node2: slots=48 max_slots=48 slots_inuse=0 state=UNKNOWN
<br>
=================================================================
<br>
<p>I forgot to mention previously that mpirun runs all cores on localhost,
<br>
it is only when running on another host (--hostfile hosts) that the 32
<br>
proc cap is observed. I'm attaching a snapshot of the most recent run.
<br>
The job was invoked by:
<br>
<p>/usr/local/openmpi-1.8.2rc4/bin/mpirun -np 48 --hostfile hosts
<br>
&nbsp;&nbsp;--display-allocation ./test.py &gt; test.std 2&gt; test.ste
<br>
<p>test.ste contains the hwloc error I mentioned in my previous post:
<br>
<p>****************************************************************************
<br>
* hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object (L3 cpuset 0x000003f0) intersection without inclusion!
<br>
* Error occurred in topology.c line 760
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
<p>Hope this helps,
<br>
Andrej
<br>
<p><p><span class="quotelev1">&gt; On Aug 21, 2014, at 12:50 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Starting early in the 1.7 series, we began to bind procs by default
</span><br>
<span class="quotelev2">&gt; &gt; to cores when -np &lt;= 2, and to sockets if np &gt; 2. Is it possible
</span><br>
<span class="quotelev2">&gt; &gt; this is what you are seeing?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 21, 2014, at 12:45 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear devels,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have been trying out 1.8.2rcs recently and found a show-stopping
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem on our cluster. Running any job with any number of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors larger than 32 will always employ only 32 cores per
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node (our nodes have 48 cores). We are seeing identical behavior
</span><br>
<span class="quotelev3">&gt; &gt;&gt; with 1.8.2rc4, 1.8.2rc2, and 1.8.1. Running identical programs
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shows no such issues with version 1.6.5, where all 48 cores per
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node are working. While our system is running torque/maui, the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; problem is evident by running mpirun directly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am attaching hwloc topology in case that helps -- I am aware of a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; buggy bios code that trips hwloc, but I don't know if that might
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be an issue or not. I am happy to help debugging if you can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; provide me with guidance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Andrej
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;cluster.output&gt;&lt;cluster.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15676.php">http://www.open-mpi.org/community/lists/devel/2014/08/15676.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15678.php">http://www.open-mpi.org/community/lists/devel/2014/08/15678.php</a>
</span><br>
<p>
<br><hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-15679/htop.jpg" alt="htop.jpg">
<!-- attachment="htop.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15678.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15680.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
