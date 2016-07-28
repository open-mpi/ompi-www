<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 18:48:56 2012" -->
<!-- isoreceived="20120314224856" -->
<!-- sent="Wed, 14 Mar 2012 18:48:51 -0400 (EDT)" -->
<!-- isosent="20120314224851" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203141747510.31702_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6F76D270-7B11-4B5A-9065-E44F57DD69BC_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-03-14 18:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 14 Mar 2012 at 6:31pm, Reuti wrote
<br>
<p><span class="quotelev1">&gt; I just tested with two different queues on two machines and a small 
</span><br>
<span class="quotelev1">&gt; mpihello and it is working as expected.
</span><br>
<p>At this point the narrative is getting very confused, even for me.  So I 
<br>
tried to find a clear cut case where I can change one thing to flip 
<br>
between &quot;it works&quot; and &quot;it doesn't&quot;:
<br>
<p>Case &quot;it works&quot;:
<br>
&nbsp;&nbsp;o Setup 2 queues -- lab.q and test.q.  Both run at priority 0.  lab.q has
<br>
&nbsp;&nbsp;&nbsp;&nbsp;slots=cores on each host, test.q has 1 slot per host.
<br>
<p>&nbsp;&nbsp;o Submit job via:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;qsub -q &quot;lab.q|test.q&quot; -l mem_free=150M -pe ompi 64 jobscript.sh
<br>
<p>&nbsp;&nbsp;o Job runs just fine.  Running 'ps aufx' on one of the nodes shows 2 orted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processes, one with 4 children (the proceses running in the lab.q
<br>
&nbsp;&nbsp;&nbsp;&nbsp;slots) and one with 1 child (the process running in the test.q slot),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all happily running (caution: very long lines ahead):
<br>
<p>sge       9673  0.0  0.0  14224  1204 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
<br>
root      9674  0.0  0.0  11272   892 ?        Ss   14:31   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
<br>
jlb       9677  0.0  0.0   8988   700 ?        S    14:31   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/1.opt95
<br>
jlb       9679  0.1  0.0  47932  2008 ?        S    14:31   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
<br>
jlb       9690 53.6  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb       9691 50.8  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb       9692 37.0  0.0 157376  3828 ?        R    14:31   0:01  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb       9693 49.2  0.0 157376  3824 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
sge       9675  0.0  0.0  14228  1208 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
<br>
root      9676  0.0  0.0  11268   888 ?        Ss   14:31   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
<br>
jlb       9678  0.0  0.0   8992   708 ?        S    14:31   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/2.opt95
<br>
jlb       9680  0.0  0.0  47932  2000 ?        S    14:31   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
<br>
jlb       9689 36.8  0.0  89776  3672 ?        R    14:31   0:01                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
<p>Case &quot;it doesn't&quot;:
<br>
&nbsp;&nbsp;o Take the above queue setup, and simply change test.q to have 2 slots
<br>
&nbsp;&nbsp;&nbsp;&nbsp;per host.
<br>
<p>&nbsp;&nbsp;o Submit job with the same qsub line.
<br>
<p>&nbsp;&nbsp;o Job crashes.  I had 'ps aufx' running in a continuous loop on one of the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodes.  This was the last output which showed the job processes.  Note
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that the actually mpihello processes never got into the &quot;R&quot; state:
<br>
<p>sge      12423  0.0  0.0  14224  1196 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
<br>
root     12425  0.0  0.0  11272   896 ?        Ss   14:41   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
<br>
jlb      12428  0.0  0.0   8988   700 ?        S    14:41   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/1.opt65
<br>
jlb      12430  0.0  0.0  47932  2016 ?        S    14:41   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
<br>
jlb      12798  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb      12799  2.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb      12800  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
sge      12436  0.0  0.0  14228  1208 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
<br>
root     12437  0.0  0.0  11268   884 ?        Ss   14:41   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
<br>
jlb      12439  0.0  0.0   8992   712 ?        S    14:41   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/2.opt65
<br>
jlb      12441  0.1  0.0  47932  2012 ?        S    14:41   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
<br>
jlb      12795  1.0  0.0 153100  3128 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
jlb      12796  2.0  0.0 153232  3752 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
<br>
<p><p><span class="quotelev1">&gt; Joshua: the Centos6 is the same on all nodes and the you recompiled the 
</span><br>
<span class="quotelev1">&gt; application with the actual version of the library? By &quot;threads&quot; you 
</span><br>
<span class="quotelev1">&gt; refer to &quot;processes&quot;?
</span><br>
<p>All the nodes are installed from the same kickstart file and kept fully
<br>
up to date.  And, yes, the application is compiled against the exact
<br>
library I'm running it with.
<br>
<p>Thanks again to all for looking at this.
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
<li><strong>Next message:</strong> <a href="18772.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18770.php">Jeffrey Squyres: "Re: [OMPI users] invalid write in opal_generic_simple_unpack"</a>
<li><strong>In reply to:</strong> <a href="18767.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18773.php">Ralph Castain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
