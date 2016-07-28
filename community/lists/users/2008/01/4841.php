<?
$subject_val = "Re: [OMPI users] odd network behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 00:16:38 2008" -->
<!-- isoreceived="20080116051638" -->
<!-- sent="Wed, 16 Jan 2008 00:15:34 -0500" -->
<!-- isosent="20080116051534" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] odd network behavior" -->
<!-- id="20080116051534.GB26584_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c84311bb0801151654n3d3eb7f5r9d5e19e8dcef4c5d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] odd network behavior<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-16 00:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 15, 2008 at 07:54:33PM -0500, Mark Kosmowski wrote:
<br>
<span class="quotelev1">&gt; Dear Open-MPI Community:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a 3 node cluster, each a dual opteron workstation running
</span><br>
<span class="quotelev1">&gt; OpenSUSE 10.1 64-bit.  The node names are LT, SGT and PFC.  When I
</span><br>
<span class="quotelev1">&gt; start an mpirun job from either SGT or PFC, things work as they are
</span><br>
<span class="quotelev1">&gt; supposed to.  However, if I start the same job from LT, the jobs hangs
</span><br>
<span class="quotelev1">&gt; at SGT - this was confirmed by mpirun --np 6 --hostfile &lt;correct
</span><br>
<span class="quotelev1">&gt; hostfile for the three nodes&gt; hostname, which gives only LT; LT; PFC;
</span><br>
<span class="quotelev1">&gt; PFC (and then hangs) when started from LT (this same command started
</span><br>
<span class="quotelev1">&gt; from either of the other nodes give two of each of the three hostnames
</span><br>
<span class="quotelev1">&gt; and terminates normally).  The nfs share drive is physically located
</span><br>
<span class="quotelev1">&gt; on LT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been using ssh to get to either SGT or PFC from a terminal
</span><br>
<span class="quotelev1">&gt; opened originally on LT to run jobs.  I can ssh from any node to any
</span><br>
<span class="quotelev1">&gt; other node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached a gzipped tar archive of the three ifconfig results
</span><br>
<span class="quotelev1">&gt; (for each node) and the results of ompi_info --all command as
</span><br>
<span class="quotelev1">&gt; requested in the &quot;Getting Help&quot; section.  I was unable to locate a
</span><br>
<span class="quotelev1">&gt; config.log file in the shared ompi directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any assistance on this matter would be appreciated,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark E. Kosmowski
</span><br>
<p>I'd posted a message earlier about intermittent hangs -- perhaps it's
<br>
the same issue.  If you run a hundred instances or so of &quot;mpirun --np 6
<br>
--hostfile hostfile uptime&quot;, from SGT or PFC, do you notice any hangs?
<br>
<p>Barry Rountree
<br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="4842.php">8mj6tc902_at_[hidden]: "Re: [OMPI users] mixed myrinet/non-myrinet nodes"</a>
<li><strong>Previous message:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4847.php">Mark Kosmowski: "Re: [OMPI users] odd network behavior"</a>
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
