<?
$subject_val = "Re: [OMPI devel] Leopard problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 22:33:56 2008" -->
<!-- isoreceived="20080212033356" -->
<!-- sent="Mon, 11 Feb 2008 20:33:46 -0700" -->
<!-- isosent="20080212033346" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Leopard problems" -->
<!-- id="C3D661AA.45AC%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EE1CBC31-167F-4CA8-B662-54EA54FA09D6_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Leopard problems<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 22:33:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Ralph Castain: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a known problem with Leopard and Open MPI of all versions. We
<br>
haven't had time to chase it down yet - probably still a few weeks away.
<br>
<p>Ralph
<br>
<p><p><p>On 2/11/08 1:39 PM, &quot;Greg Watson&quot; &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I upgraded to MacOS X 10.5.1, I've been having problems running
</span><br>
<span class="quotelev1">&gt; MPI programs (using both 1.2.4 and 1.2.5). The symptoms are
</span><br>
<span class="quotelev1">&gt; intermittent (i.e. sometimes the application runs fine), and appear as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. One or more of the application processes die (I've see both one and
</span><br>
<span class="quotelev1">&gt; two processes die).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. (It appears) that the orted's associated with these application
</span><br>
<span class="quotelev1">&gt; process then spin continually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I see when I run &quot;mpirun -np 4 ./mpitest&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 12467   ??  Rs     1:26.52 orted --bootproxy 1 --name 0.0.1 --
</span><br>
<span class="quotelev1">&gt; num_procs 5 --vpid_start 0 --nodename node0 --universe
</span><br>
<span class="quotelev1">&gt; greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; 12468   ??  Rs     1:26.63 orted --bootproxy 1 --name 0.0.2 --
</span><br>
<span class="quotelev1">&gt; num_procs 5 --vpid_start 0 --nodename node1 --universe
</span><br>
<span class="quotelev1">&gt; greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; 12469   ??  Ss     0:00.04 orted --bootproxy 1 --name 0.0.3 --
</span><br>
<span class="quotelev1">&gt; num_procs 5 --vpid_start 0 --nodename node2 --universe
</span><br>
<span class="quotelev1">&gt; greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; 12470   ??  Ss     0:00.04 orted --bootproxy 1 --name 0.0.4 --
</span><br>
<span class="quotelev1">&gt; num_procs 5 --vpid_start 0 --nodename node3 --universe
</span><br>
<span class="quotelev1">&gt; greg_at_Jarrah.local:default-universe-12462 --nsreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --gprreplica &quot;0.0.0;tcp://
</span><br>
<span class="quotelev1">&gt; 10.0.1.200:56749;tcp://9.67.176.162:56749;tcp://
</span><br>
<span class="quotelev1">&gt; 10.37.129.2:56749;tcp://10.211.55.2:56749&quot; --set-sid
</span><br>
<span class="quotelev1">&gt; 12471   ??  S      0:00.05 ./mpitest
</span><br>
<span class="quotelev1">&gt; 12472   ??  S      0:00.05 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Killing the mpirun results in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 ./mpitest
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^ 
</span><br>
<span class="quotelev1">&gt; C 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun is in the process of killing a job, but has detected an
</span><br>
<span class="quotelev1">&gt; interruption (probably control-C).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is dangerous to interrupt mpirun while it is killing a job (proper
</span><br>
<span class="quotelev1">&gt; termination may not be guaranteed).  Hit control-C again within 1
</span><br>
<span class="quotelev1">&gt; second if you really want to kill mpirun immediately.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: forcibly killing job...
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: mpirun has exited before it received notification that all
</span><br>
<span class="quotelev1">&gt; started processes had terminated.  You should double check and ensure
</span><br>
<span class="quotelev1">&gt; that there are no runaway processes still executing.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point, the two spinning orted's are left running, and the only
</span><br>
<span class="quotelev1">&gt; way to kill them is with -9.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anyone else seeing this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Previous message:</strong> <a href="3189.php">Ralph Castain: "Re: [OMPI devel] 1.3 Release schedule and contents"</a>
<li><strong>In reply to:</strong> <a href="3185.php">Greg Watson: "[OMPI devel] Leopard problems"</a>
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
