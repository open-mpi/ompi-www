<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 14:19:11 2012" -->
<!-- isoreceived="20120315181911" -->
<!-- sent="Thu, 15 Mar 2012 19:18:58 +0100" -->
<!-- isosent="20120315181858" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="61841D88-596A-4D9D-8BAC-42020FA89D09_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203151300330.31702_at_hogwarts.egr.duke.edu" -->
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
<strong>Date:</strong> 2012-03-15 14:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18788.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.03.2012 um 18:14 schrieb Joshua Baker-LePain:
<br>
<p><span class="quotelev1">&gt; On Thu, 15 Mar 2012 at 1:53pm, Reuti wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: In your example you also had the case 2 slots in the low priority queue, what is the actual setup in your cluster?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our actual setup is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o lab.q, slots=numprocs, load_thresholds=np_load_avg=1.5, labs (=SGE
</span><br>
<span class="quotelev1">&gt;   projects) limited by RQS to a number of slots equal to their &quot;share&quot; of
</span><br>
<span class="quotelev1">&gt;   the cluster, seq_no=0, priority=0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o long.q, slots=numprocs, load_thresholds=np_load_avg=0.9, seq_no=1,
</span><br>
<span class="quotelev1">&gt;   priority=19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o short.q, slots=numprocs, load_thresholds=np_load_avg=1.25, users
</span><br>
<span class="quotelev1">&gt;   limited by RQS to 200 slots, runtime limited to 30 minutes, seq_no=2,
</span><br>
<span class="quotelev1">&gt;   priority=10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Users are instructed to not select a queue when submitting jobs.  The theory is that even if non-contributing users have filled the cluster with long.q jobs, contributing users will still have instant access to &quot;their&quot; lab.q slots, overloading nodes with jobs running at a higher priority than the long.q jobs.  long.q jobs won't start on nodes full of lab.q jobs. And short.q is for quick, high priority jobs regardless of cluster status (the main use case being processing MRI data into images while a patient is physically in the scanner).
</span><br>
<p>Thx for posting the information. Avoiding to get slots from different queues isn't complex:
<br>
<p>1. Define each PE three times, like &quot;orte_lab&quot;, &quot;orte_long&quot; and &quot;orte_short&quot;. Attach the corresponding one to each queue and only this one, i.e. &quot;long.q&quot; gets &quot;orte_long&quot; etc.
<br>
<p>2. The `qsub` command needs to include a wildcard like &quot;-pe orte* 64&quot; instead of the plain &quot;orte&quot; which is used right now I guess.
<br>
<p>Once SGE selected a PE for the job, it will stay in this PE, and as the PE is attached to only one queue no foreign slots will be assigned any longer. Jobs may have to wait a little bit longer, as for now the slots are collected from all queues.
<br>
<p>NB: Do you use &quot;-R y&quot; and a set h_rt  to avoid starvation of parallel jobs already?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; The truth is our cluster is primarily used for, and thus SGE is tuned for, large numbers of serial jobs.  We do have *some* folks running parallel code, and it *is* starting to get to the point where I need to reconfigure things to make that part work better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="18790.php">Eugene Loh: "Re: [OMPI users] MPI_Testsome with incount=0, NULL array_of_indices and array_of_statuses causes MPI_ERR_ARG"</a>
<li><strong>Previous message:</strong> <a href="18788.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18784.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
