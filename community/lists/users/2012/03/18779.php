<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 08:53:51 2012" -->
<!-- isoreceived="20120315125351" -->
<!-- sent="Thu, 15 Mar 2012 13:53:34 +0100" -->
<!-- isosent="20120315125334" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="B8A38AF5-EA62-48C7-99B0-0BF50BEBBBD6_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="alpine.LRH.2.02.1203150020290.23206_at_hogwarts.egr.duke.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 08:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.03.2012 um 05:22 schrieb Joshua Baker-LePain:
<br>
<p><span class="quotelev1">&gt; On Wed, 14 Mar 2012 at 5:50pm, Ralph Castain wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 14, 2012, at 5:44 PM, Reuti wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I was just typing when Ralph's message came in: I can confirm this. To avoid it, it would mean for Open MPI to collect all lines from the hostfile which are on the same machine. SGE creates entries for each queue/host pair in the machine file).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#133;I can take a look at the allocator module and see why we aren't doing it. Would the host names be the same for the two queues?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't speak authoritatively like Reuti can, but here's what a hostfile
</span><br>
<span class="quotelev1">&gt; looks like on my cluster (note that all our name resolution is done via /etc/hosts -- there's no DNS involved):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iq103 8 lab.q_at_iq103 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; iq103 1 test.q_at_iq103 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; iq104 8 lab.q_at_iq104 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; iq104 1 test.q_at_iq104 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; opt221 2 lab.q_at_opt221 &lt;NULL&gt;
</span><br>
<span class="quotelev1">&gt; opt221 1 test.q_at_opt221 &lt;NULL&gt;
</span><br>
<p>Yes, exactly this needs to be parsed and adding up all entries therein for one and the same machine.
<br>
<p>If you need it instantly, it could be put in a wrapper for start_proc_args of the PE (and Open MPI compiled without SGE support), so that a custom build machinefile can be used. In this case the rsh resp. ssh call also needs to be caught.
<br>
<p>Often the opposite is desired in an SGE setup: tune it so that all slots are coming from one queue only.
<br>
<p>But I still wonder whether it is possible to tune your setup in a similar way: allow one slot more in the high priority queue (long,.q) in case it's a parallel job, with an RQS (assuming 8 cores with one core oversubscription):
<br>
<p>limit queues long.q pes * to slots=9
<br>
limit queues long.q to slots=8
<br>
<p>while you have an additonal short.q (the low priority queue) there with one slot. The overall limit is still set on an exechost level to 9. The PE is then only attached to long.q.
<br>
<p>-- Reuti
<br>
<p>PS: In your example you also had the case 2 slots in the low priority queue, what is the actual setup in your cluster?
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; @Ralph: it could work if SGE would have a facility to request the desired queue in `qrsh -inherit ...`, because then the $TMPDIR would be unique for each orted again (assuming its using different ports for each).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gotcha! I suspect getting the allocator to handle this cleanly is the better solution, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I can help (testing patches, e.g.), let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF_______________________________________________
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
<li><strong>Next message:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18780.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
