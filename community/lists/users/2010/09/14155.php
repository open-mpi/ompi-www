<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 18:11:44 2010" -->
<!-- isoreceived="20100901221144" -->
<!-- sent="Wed, 1 Sep 2010 23:11:07 +0100" -->
<!-- isosent="20100901221107" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="D0D3533C-14DB-4AF2-A26A-43DCE5629A9F_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1610F3C8-EFD7-4841-80A2-BD9E105A84BB_at_umich.edu" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 18:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14154.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14154.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
padb as a binary (it's a perl script) needs to exist on all nodes as it calls orterun on itself, try installing it to a shared directory or copying padb to /tmp on every node.
<br>
<p>To access the message queues padb needs a compiled helper program which is installed in $PREFIX/lib so I would recommend re-building padb giving it a prefix of a NFS shared directory.  I can help you more with this if required.
<br>
<p>Ashley,
<br>
<p>On 1 Sep 2010, at 23:01, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have ddt, but we do not have licenses to attach to the number of cores these jobs run at.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried padb,  but it fails, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh to root node for running MPI job:
</span><br>
<span class="quotelev1">&gt; /tmp/padb -Q -a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file util/comm/comm.c at line 62
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file orte-ps.c at line 799
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; einner: --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; einner: orterun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev1">&gt; einner: or execute an executable:
</span><br>
<span class="quotelev1">&gt; Unexpected EOF from Inner stdout (connecting)
</span><br>
<span class="quotelev1">&gt; Unexpected EOF from Inner stderr (connecting)
</span><br>
<span class="quotelev1">&gt; Unexpected exit from parallel command (state=connecting)
</span><br>
<span class="quotelev1">&gt; Bad exit code from parallel command (exit_code=131)
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14154.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14154.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14161.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
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
