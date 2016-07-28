<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 18:01:38 2010" -->
<!-- isoreceived="20100901220138" -->
<!-- sent="Wed, 1 Sep 2010 18:01:32 -0400" -->
<!-- isosent="20100901220132" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="1610F3C8-EFD7-4841-80A2-BD9E105A84BB_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="022B2694-7A97-4241-9CE1-D757528CC370_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] simplest way to check message queues<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 18:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have ddt, but we do not have licenses to attach to the number of cores these jobs run at.
<br>
<p>I tried padb,  but it fails, 
<br>
<p>Example:
<br>
<p>ssh to root node for running MPI job:
<br>
/tmp/padb -Q -a
<br>
<p>[nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
<br>
[nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file util/comm/comm.c at line 62
<br>
[nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file orte-ps.c at line 799
<br>
[nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
<br>
einner: --------------------------------------------------------------------------
<br>
einner: orterun was unable to launch the specified application as it could not access
<br>
einner: or execute an executable:
<br>
Unexpected EOF from Inner stdout (connecting)
<br>
Unexpected EOF from Inner stderr (connecting)
<br>
Unexpected exit from parallel command (state=connecting)
<br>
Bad exit code from parallel command (exit_code=131)
<br>
<p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Sep 1, 2010, at 5:32 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1 Sep 2010, at 21:13, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a code for a user (namd if anyone cares)  that on a specific case will lock up,  a quick ltrace shows the processes doing Iprobes over and over, so this makes me think that a process someplace is blocking on communication.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is the best way to look at message queues? To see what process is stuck and to drill into.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only three programs I know which can do this are TotalView, DDT and Padb.  Totalview and DDT are graphical parallel debuggers and are commercial projects, Padb is a command-line tool and is open-source
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley (padb developer)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman, Bath, UK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Padb - A parallel job inspection tool for cluster computing
</span><br>
<span class="quotelev1">&gt; <a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14153.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
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
