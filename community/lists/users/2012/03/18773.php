<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 19:31:59 2012" -->
<!-- isoreceived="20120314233159" -->
<!-- sent="Wed, 14 Mar 2012 17:31:51 -0600" -->
<!-- isosent="20120314233151" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="68785F4D-AAE9-4795-A487-903D7686BB6D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203141747510.31702_at_hogwarts.egr.duke.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 19:31:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something is very wrong - there can only be one orted on each node. Having two orteds on the same node for the same job guarantees that things will become confused and generally fail.
<br>
<p>I don't know enough SGE to advise you what's wrong with your job script, but it looks like OMPI thinks there are two completely different sets of nodes that are actually the same.
<br>
<p><p>On Mar 14, 2012, at 4:48 PM, Joshua Baker-LePain wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 14 Mar 2012 at 6:31pm, Reuti wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just tested with two different queues on two machines and a small mpihello and it is working as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point the narrative is getting very confused, even for me.  So I tried to find a clear cut case where I can change one thing to flip between &quot;it works&quot; and &quot;it doesn't&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case &quot;it works&quot;:
</span><br>
<span class="quotelev1">&gt; o Setup 2 queues -- lab.q and test.q.  Both run at priority 0.  lab.q has
</span><br>
<span class="quotelev1">&gt;   slots=cores on each host, test.q has 1 slot per host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Submit job via:
</span><br>
<span class="quotelev1">&gt;   qsub -q &quot;lab.q|test.q&quot; -l mem_free=150M -pe ompi 64 jobscript.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Job runs just fine.  Running 'ps aufx' on one of the nodes shows 2 orted
</span><br>
<span class="quotelev1">&gt;   processes, one with 4 children (the proceses running in the lab.q
</span><br>
<span class="quotelev1">&gt;   slots) and one with 1 child (the process running in the test.q slot),
</span><br>
<span class="quotelev1">&gt;   all happily running (caution: very long lines ahead):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sge       9673  0.0  0.0  14224  1204 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
</span><br>
<span class="quotelev1">&gt; root      9674  0.0  0.0  11272   892 ?        Ss   14:31   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev1">&gt; jlb       9677  0.0  0.0   8988   700 ?        S    14:31   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/1.opt95
</span><br>
<span class="quotelev1">&gt; jlb       9679  0.1  0.0  47932  2008 ?        S    14:31   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
</span><br>
<span class="quotelev1">&gt; jlb       9690 53.6  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb       9691 50.8  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb       9692 37.0  0.0 157376  3828 ?        R    14:31   0:01  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb       9693 49.2  0.0 157376  3824 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; sge       9675  0.0  0.0  14228  1208 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
</span><br>
<span class="quotelev1">&gt; root      9676  0.0  0.0  11268   888 ?        Ss   14:31   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev1">&gt; jlb       9678  0.0  0.0   8992   708 ?        S    14:31   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/2.opt95
</span><br>
<span class="quotelev1">&gt; jlb       9680  0.0  0.0  47932  2000 ?        S    14:31   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
</span><br>
<span class="quotelev1">&gt; jlb       9689 36.8  0.0  89776  3672 ?        R    14:31   0:01                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Case &quot;it doesn't&quot;:
</span><br>
<span class="quotelev1">&gt; o Take the above queue setup, and simply change test.q to have 2 slots
</span><br>
<span class="quotelev1">&gt;   per host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Submit job with the same qsub line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Job crashes.  I had 'ps aufx' running in a continuous loop on one of the
</span><br>
<span class="quotelev1">&gt;   nodes.  This was the last output which showed the job processes.  Note
</span><br>
<span class="quotelev1">&gt;   that the actually mpihello processes never got into the &quot;R&quot; state:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sge      12423  0.0  0.0  14224  1196 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
</span><br>
<span class="quotelev1">&gt; root     12425  0.0  0.0  11272   896 ?        Ss   14:41   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev1">&gt; jlb      12428  0.0  0.0   8988   700 ?        S    14:41   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/1.opt65
</span><br>
<span class="quotelev1">&gt; jlb      12430  0.0  0.0  47932  2016 ?        S    14:41   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
</span><br>
<span class="quotelev1">&gt; jlb      12798  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb      12799  2.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb      12800  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; sge      12436  0.0  0.0  14228  1208 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
</span><br>
<span class="quotelev1">&gt; root     12437  0.0  0.0  11268   884 ?        Ss   14:41   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev1">&gt; jlb      12439  0.0  0.0   8992   712 ?        S    14:41   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/2.opt65
</span><br>
<span class="quotelev1">&gt; jlb      12441  0.1  0.0  47932  2012 ?        S    14:41   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
</span><br>
<span class="quotelev1">&gt; jlb      12795  1.0  0.0 153100  3128 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; jlb      12796  2.0  0.0 153232  3752 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua: the Centos6 is the same on all nodes and the you recompiled the application with the actual version of the library? By &quot;threads&quot; you refer to &quot;processes&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the nodes are installed from the same kickstart file and kept fully
</span><br>
<span class="quotelev1">&gt; up to date.  And, yes, the application is compiled against the exact
</span><br>
<span class="quotelev1">&gt; library I'm running it with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again to all for looking at this.
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
<li><strong>Next message:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18771.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
