<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 12:45:04 2012" -->
<!-- isoreceived="20120314164504" -->
<!-- sent="Wed, 14 Mar 2012 10:44:55 -0600" -->
<!-- isosent="20120314164455" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="C754BCF8-59CA-46FB-A64C-0FCFEFD54161_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="113FE270-0905-4136-B3EA-FE6B3AF20C9A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 12:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti
<br>
<p>I appreciate your help on this thread - I confess I'm puzzled by it. As you know, OMPI doesn't use SGE to launch the individual processes, nor does SGE even know they exist. All SGE is used for is to launch the OMPI daemons (orteds). This is done as a single qrsh call, so won't all the daemons wind up being executed against the same queue regardless of how many queues exist in the system?
<br>
<p>Given that the daemons then fork/exec the MPI processes (outside of qrsh), I would think they would inherit that nice setting as well, and so all the procs will be running at the same nice level too.
<br>
<p>As for TMPDIR, we don't forward that unless specifically directed to do so, which I didn't see on their cmd line.
<br>
<p><p>On Mar 14, 2012, at 2:33 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 14.03.2012 um 04:02 schrieb Joshua Baker-LePain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 13 Mar 2012 at 5:31pm, Ralph Castain wrote
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I have a Centos6 system myself, and I have no problems running OMPI on it (1.4 or 1.5). I can try building it the same way you do and see what happens.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can run as many threads as I like on a single system with no problems, even if those threads are running at different nice levels.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do they get different nice levels - you renice them? I would assume that all start at the same of the parent. In your test program you posted there are no threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem seems to arise when I'm both a) running across multiple machines and b) running threads at differing nice levels (which often happens as a result of our queueing setup).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This sounds like you are getting slots from different queues assigned to one and the same job. My experience: don't do it, unless you neeed it. The problem is, that SGE can't decide in its `qrsh -inherit ...` call, which queue is the correct one for the particular call. As a result all calls to a slave machine can end up in one and the same queue. Although this is not correct, it won't oversubscribe the node, as usually the overall slot amount is limited already and it's more a matter of names SGE sets for the environment of the job:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://arc.liv.ac.uk/trac/SGE/ticket/813">https://arc.liv.ac.uk/trac/SGE/ticket/813</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a result, the SGE set $TMPDIR can be different between the master of the parallel job and the slave as the name of the queue is part of $TMPDIR. When a wrong $TMPDIR is set on a node (by Open MPI's forwarding?), strange things can happen depending on the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you face the same if you stay in one and the same queue across the machines? If you want to limit the number of available PEs in your setup for the user, you could request a PE by a wildcard and once a PE is selected SGE will stay in this PE. Attaching each PE to only one queue allows this way to avoid the mixture of slots from different queues (orte1 PE =&gt; all.q, orte2 PE =&gt; extra.q and you request orte*).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't guarantee that the problem *never* happens when I run across multiple machines with all the threads un-niced, but I haven't been able to reproduce that at will like I can for the other case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev2">&gt;&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev2">&gt;&gt; UCSF
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
<li><strong>Next message:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18764.php">Patrik Jonsson: "[OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18760.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
