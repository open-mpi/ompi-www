<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 00:22:57 2012" -->
<!-- isoreceived="20120315042257" -->
<!-- sent="Thu, 15 Mar 2012 00:22:53 -0400 (EDT)" -->
<!-- isosent="20120315042253" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203150020290.23206_at_hogwarts.egr.duke.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C0179174-32E0-4699-8603-E38D3899E453_at_open-mpi.org" -->
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
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 00:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18775.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18775.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 14 Mar 2012 at 5:50pm, Ralph Castain wrote
<br>
<p><span class="quotelev1">&gt; On Mar 14, 2012, at 5:44 PM, Reuti wrote:
</span><br>
<p><span class="quotelev2">&gt;&gt; (I was just typing when Ralph's message came in: I can confirm this. To 
</span><br>
<span class="quotelev2">&gt;&gt; avoid it, it would mean for Open MPI to collect all lines from the 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile which are on the same machine. SGE creates entries for each 
</span><br>
<span class="quotelev2">&gt;&gt; queue/host pair in the machine file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmmm&#133;I can take a look at the allocator module and see why we aren't 
</span><br>
<span class="quotelev1">&gt; doing it. Would the host names be the same for the two queues?
</span><br>
<p>I can't speak authoritatively like Reuti can, but here's what a hostfile
<br>
looks like on my cluster (note that all our name resolution is done via 
<br>
/etc/hosts -- there's no DNS involved):
<br>
<p>iq103 8 lab.q_at_iq103 &lt;NULL&gt;
<br>
iq103 1 test.q_at_iq103 &lt;NULL&gt;
<br>
iq104 8 lab.q_at_iq104 &lt;NULL&gt;
<br>
iq104 1 test.q_at_iq104 &lt;NULL&gt;
<br>
opt221 2 lab.q_at_opt221 &lt;NULL&gt;
<br>
opt221 1 test.q_at_opt221 &lt;NULL&gt;
<br>
<p><span class="quotelev2">&gt;&gt; @Ralph: it could work if SGE would have a facility to request the 
</span><br>
<span class="quotelev2">&gt;&gt; desired queue in `qrsh -inherit ...`, because then the $TMPDIR would be 
</span><br>
<span class="quotelev2">&gt;&gt; unique for each orted again (assuming its using different ports for 
</span><br>
<span class="quotelev2">&gt;&gt; each).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gotcha! I suspect getting the allocator to handle this cleanly is the 
</span><br>
<span class="quotelev1">&gt; better solution, though.
</span><br>
<p>If I can help (testing patches, e.g.), let me know.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18775.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18775.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
