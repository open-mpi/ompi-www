<?
$subject_val = "Re: [OMPI users] simplest way to check message queues";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  2 17:56:26 2010" -->
<!-- isoreceived="20100902215626" -->
<!-- sent="Thu, 2 Sep 2010 22:55:46 +0100" -->
<!-- isosent="20100902215546" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simplest way to check message queues" -->
<!-- id="913CCE60-F98B-4F09-A869-FB38806B608E_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="80E46978-D2EA-4A56-A408-02BDDE34B9C6_at_umich.edu" -->
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
<strong>Date:</strong> 2010-09-02 17:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2 Sep 2010, at 15:56, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Ashly still having trouble using padb with openmpi/1.4.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dianawon_at_nyx0862 ~]$ /home/software/rhel5/padb/3.0/padb -a -Q
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:30717] [[16608,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:30717] [[16608,0],0] ORTE_ERROR_LOG: Unreachable in file util/comm/comm.c at line 62
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:30717] [[16608,0],0] ORTE_ERROR_LOG: Unreachable in file orte-ps.c at line 799
</span><br>
<span class="quotelev1">&gt; [nyx0862.engin.umich.edu:30717] [[16608,0],0]-[[25542,0],0] oob-tcp: Communication retries exceeded.  Can not communicate with peer
</span><br>
<span class="quotelev1">&gt; No active jobs could be found for user 'dianawon'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job is running, I get this error running just orte-ps, 
</span><br>
<p>If orte-ps isn't running correctly then there is very little padb can do, if that is the case try using the &quot;mpirun&quot; resource manager interface rather than &quot;orte&quot;, this will cause padb to use the MPIR interface and try to get the information directly from the mpirun process before launching itself via pdsh.  It doesn't scale as well as the orte integration (pdsh runs out of file descriptors eventually) but is more generic and might get you to somewhere that works.  If your job spans more than 32 nodes you may need to set the FANOUT variable for pdsh to work.
<br>
<p>Ashley,
<br>
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
<li><strong>Next message:</strong> <a href="14164.php">Ashley Pittman: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>Previous message:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<li><strong>In reply to:</strong> <a href="14162.php">Brock Palen: "Re: [OMPI users] simplest way to check message queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14156.php">Jaison Mulerikkal: "Re: [OMPI users] simplest way to check message queues"</a>
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
