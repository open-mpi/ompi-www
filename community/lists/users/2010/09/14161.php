<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  2 09:47:07 2010" -->
<!-- isoreceived="20100902134707" -->
<!-- sent="Thu, 2 Sep 2010 09:47:00 -0400" -->
<!-- isosent="20100902134700" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="28D30688-3FD1-499A-9377-32C4F82344CE_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D0D3533C-14DB-4AF2-A26A-43DCE5629A9F_at_pittman.co.uk" -->
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
<strong>Date:</strong> 2010-09-02 09:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah ok, I put it there just because the user couldn't read that from my home space, and never even thought of that.  gahhh.
<br>
<p>Thanks,
<br>
<p>BTW I tried joining the padb mailing list.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Sep 1, 2010, at 6:11 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; padb as a binary (it's a perl script) needs to exist on all nodes as it calls orterun on itself, try installing it to a shared directory or copying padb to /tmp on every node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To access the message queues padb needs a compiled helper program which is installed in $PREFIX/lib so I would recommend re-building padb giving it a prefix of a NFS shared directory.  I can help you more with this if required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1 Sep 2010, at 23:01, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have ddt, but we do not have licenses to attach to the number of cores these jobs run at.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried padb,  but it fails, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ssh to root node for running MPI job:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/padb -Q -a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file util/comm/comm.c at line 62
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0] ORTE_ERROR_LOG: Unreachable in file orte-ps.c at line 799
</span><br>
<span class="quotelev2">&gt;&gt; [nyx0862.engin.umich.edu:25054] [[22211,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev2">&gt;&gt; einner: --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; einner: orterun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev2">&gt;&gt; einner: or execute an executable:
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected EOF from Inner stdout (connecting)
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected EOF from Inner stderr (connecting)
</span><br>
<span class="quotelev2">&gt;&gt; Unexpected exit from parallel command (state=connecting)
</span><br>
<span class="quotelev2">&gt;&gt; Bad exit code from parallel command (exit_code=131)
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
<li><strong>Next message:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>In reply to:</strong> <a href="14155.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Reply:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
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
