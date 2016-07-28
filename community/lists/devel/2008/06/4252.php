<?
$subject_val = "Re: [OMPI devel] mtt IBM SPAWN error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 09:01:46 2008" -->
<!-- isoreceived="20080630130146" -->
<!-- sent="Mon, 30 Jun 2008 07:01:35 -0600" -->
<!-- isosent="20080630130135" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mtt IBM SPAWN error" -->
<!-- id="C48E354F.E0DD%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="453d39990806292338x33a66ac0n60ae87b5d568dc6a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mtt IBM SPAWN error<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 09:01:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That&#185;s correct &#173; and is precisely the behavior it should exhibit. The
<br>
reasons:
<br>
<p>1. when you specify &#173;host, we assume max_slots is infinite since you cannot
<br>
provide any info to the contrary. We therefore allow you to oversubscribe
<br>
the node to your heart&#185;s desire. However, note one problem: if your original
<br>
launch is only one proc, we will set it to be aggressive in terms of
<br>
yielding the processor. Your subsequent comm_spawn&#185;d procs will therefore
<br>
suffer degraded performance if they oversubscribe the node.
<br>
<p>Can&#185;t be helped - there is no way to pass enough info with -host for us to
<br>
do better.
<br>
<p><p>2. when you run with -hostfile, your hostfile is telling us to allow no more
<br>
than 4 procs on the node. You used three in your original launch, leaving
<br>
only one slot available. Since each of the procs in the IBM test attempts to
<br>
spawn another, your job will fail.
<br>
<p>We can always do more to improve the error messaging...
<br>
Ralph
<br>
<p><p>On 6/30/08 12:38 AM, &quot;Lenny Verkhovsky&quot; &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; trying to run mtt I failed to run IBM spawn test. It fails only when using
</span><br>
<span class="quotelev1">&gt; hostfile, and not when using host list.
</span><br>
<span class="quotelev1">&gt; ( OMPI from TRUNK )
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This is working :
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -H witch2 dynamic/spawn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This Fails:
</span><br>
<span class="quotelev1">&gt; # cat hostfile
</span><br>
<span class="quotelev1">&gt; witch2 slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt; #mpirun -np 3 -hostfile hostfile dynamic/spawn
</span><br>
<span class="quotelev1">&gt; [witch1:12392] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are not enough slots available in the system to satisfy the 3 slots
</span><br>
<span class="quotelev1">&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt;   dynamic/spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev1">&gt; for use.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [witch1:12392] 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Using hostfile1 also works
</span><br>
<span class="quotelev1">&gt; #cat hostfile1
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt; witch2
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="4253.php">Ralph H Castain: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>Previous message:</strong> <a href="4251.php">Lenny Verkhovsky: "Re: [OMPI devel] mtt IBM SPAWN error"</a>
<li><strong>In reply to:</strong> <a href="4250.php">Lenny Verkhovsky: "[OMPI devel] mtt IBM SPAWN error"</a>
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
