<?
$subject_val = "Re: [OMPI users] odd network behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 22:08:22 2008" -->
<!-- isoreceived="20080118030822" -->
<!-- sent="Thu, 17 Jan 2008 22:08:10 -0500" -->
<!-- isosent="20080118030810" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] odd network behavior" -->
<!-- id="c84311bb0801171908v2120ecc1g24d4217ddda7ec6f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-17 22:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Previous message:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2008 7:54 PM, Mark Kosmowski &lt;mark.kosmowski_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt;
</span><br>
<p><p><span class="quotelev1">&gt;I'd posted a message earlier about intermittent hangs -- perhaps it's
</span><br>
<span class="quotelev1">&gt;the same issue. If you run a hundred instances or so of &quot;mpirun --np 6
</span><br>
<span class="quotelev1">&gt;--hostfile hostfile uptime&quot;, from SGT or PFC, do you notice any hangs?
</span><br>
<p><span class="quotelev1">&gt;Barry Rountree
</span><br>
<p>Barry:
<br>
<p>I read your thread and I do not think that the issues are the same.
<br>
You seem to get the correct output before the hang, I do not.  My
<br>
system either fails to give the expected output with a hang when
<br>
started from the LT node, or works correctly giving the proper output
<br>
and a graceful exit (i.e. no hang whatsoever) when started on one of
<br>
the other two nodes (SGT or PFC).
<br>
<p>I suspect that my issue is that both LT and SGT are connected to both
<br>
the internet and the dedicated cluster traffic gigabit switch, while
<br>
PFC is only connected to the dedicated cluster traffic gigabit switch.
<br>
&nbsp;However, this is the limit of my network diagnostic abilities,
<br>
especially since SGT can properly launch open MPI jobs.
<br>
<p>Mark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4848.php">Antoine Monmayrant: "[OMPI users] Using open-mpi app on a normal network"</a>
<li><strong>Previous message:</strong> <a href="4846.php">Rajesh Sudarsan: "Re: [OMPI users] MPI_Finalize segmentation fault with MPI_Intercomm_merge"</a>
<li><strong>In reply to:</strong> <a href="4840.php">Mark Kosmowski: "[OMPI users] odd network behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
<li><strong>Reply:</strong> <a href="4892.php">Tim Mattox: "Re: [OMPI users] odd network behavior"</a>
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
