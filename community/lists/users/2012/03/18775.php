<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 19:50:09 2012" -->
<!-- isoreceived="20120314235009" -->
<!-- sent="Wed, 14 Mar 2012 17:50:01 -0600" -->
<!-- isosent="20120314235001" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="C0179174-32E0-4699-8603-E38D3899E453_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AC2CBF8D-A0CF-46D6-8606-470B21D4DE42_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-03-14 19:50:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 14, 2012, at 5:44 PM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 14.03.2012 um 23:48 schrieb Joshua Baker-LePain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 14 Mar 2012 at 6:31pm, Reuti wrote
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just tested with two different queues on two machines and a small mpihello and it is working as expected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; At this point the narrative is getting very confused, even for me.  So I tried to find a clear cut case where I can change one thing to flip between &quot;it works&quot; and &quot;it doesn't&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case &quot;it works&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; o Setup 2 queues -- lab.q and test.q.  Both run at priority 0.  lab.q has
</span><br>
<span class="quotelev2">&gt;&gt;  slots=cores on each host, test.q has 1 slot per host.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; o Submit job via:
</span><br>
<span class="quotelev2">&gt;&gt;  qsub -q &quot;lab.q|test.q&quot; -l mem_free=150M -pe ompi 64 jobscript.sh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; o Job runs just fine.  Running 'ps aufx' on one of the nodes shows 2 orted
</span><br>
<span class="quotelev2">&gt;&gt;  processes, one with 4 children (the proceses running in the lab.q
</span><br>
<span class="quotelev2">&gt;&gt;  slots) and one with 1 child (the process running in the test.q slot),
</span><br>
<span class="quotelev2">&gt;&gt;  all happily running (caution: very long lines ahead):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sge       9673  0.0  0.0  14224  1204 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
</span><br>
<span class="quotelev2">&gt;&gt; root      9674  0.0  0.0  11272   892 ?        Ss   14:31   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which version of SGE are you using? The traditional rsh startup was replaced by the builtin startup some time ago (although it should still work).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9677  0.0  0.0   8988   700 ?        S    14:31   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/1.opt95
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9679  0.1  0.0  47932  2008 ?        S    14:31   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 5 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9690 53.6  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9691 50.8  0.0 157376  3832 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9692 37.0  0.0 157376  3828 ?        R    14:31   0:01  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9693 49.2  0.0 157376  3824 ?        R    14:31   0:02  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; sge       9675  0.0  0.0  14228  1208 ?        S    14:31   0:00  \_ sge_shepherd-6997934 -bg
</span><br>
<span class="quotelev2">&gt;&gt; root      9676  0.0  0.0  11268   888 ?        Ss   14:31   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9678  0.0  0.0   8992   708 ?        S    14:31   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt95/active_jobs/6997934.1/2.opt95
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9680  0.0  0.0  47932  2000 ?        S    14:31   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1517355008 -mca orte_ess_vpid 6 -mca orte_ess_num_procs 24 --hnp-uri 1517355008.0;tcp://172.19.12.104:47527
</span><br>
<span class="quotelev2">&gt;&gt; jlb       9689 36.8  0.0  89776  3672 ?        R    14:31   0:01                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe this shows already the problem: there are two `qrsh -inherit`, as Open MPI thinks these are different machines (I ran only with one slot on each host hence didn't get it first but can reproduce it now). But for SGE both may end up in the same queue overriding the openmpi-session in $TMPDIR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although it's running: you get all output? If I request 4 slots and get one from each queue on both machines the mpihello outputs only 3 lines: the &quot;Hello World from Node 3&quot; is always missing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I was just typing when Ralph's message came in: I can confirm this. To avoid it, it would mean for Open MPI to collect all lines from the hostfile which are on the same machine. SGE creates entries for each queue/host pair in the machine file).
</span><br>
<p>Hmmm&#133;I can take a look at the allocator module and see why we aren't doing it. Would the host names be the same for the two queues?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Ralph: it could work if SGE would have a facility to request the desired queue in `qrsh -inherit ...`, because then the $TMPDIR would be unique for each orted again (assuming its using different ports for each).
</span><br>
<p>Gotcha! I suspect getting the allocator to handle this cleanly is the better solution, though.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Case &quot;it doesn't&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; o Take the above queue setup, and simply change test.q to have 2 slots
</span><br>
<span class="quotelev2">&gt;&gt;  per host.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; o Submit job with the same qsub line.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; o Job crashes.  I had 'ps aufx' running in a continuous loop on one of the
</span><br>
<span class="quotelev2">&gt;&gt;  nodes.  This was the last output which showed the job processes.  Note
</span><br>
<span class="quotelev2">&gt;&gt;  that the actually mpihello processes never got into the &quot;R&quot; state:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sge      12423  0.0  0.0  14224  1196 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
</span><br>
<span class="quotelev2">&gt;&gt; root     12425  0.0  0.0  11272   896 ?        Ss   14:41   0:00  |   \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12428  0.0  0.0   8988   700 ?        S    14:41   0:00  |       \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/1.opt65
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12430  0.0  0.0  47932  2016 ?        S    14:41   0:00  |           \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 7 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12798  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12799  2.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12800  1.0  0.0 153244  3752 ?        S    14:41   0:00  |               \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; sge      12436  0.0  0.0  14228  1208 ?        S    14:41   0:00  \_ sge_shepherd-6997938 -bg
</span><br>
<span class="quotelev2">&gt;&gt; root     12437  0.0  0.0  11268   884 ?        Ss   14:41   0:00      \_ /ccpr1/sge6/utilbin/lx24-amd64/rshd -l
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12439  0.0  0.0   8992   712 ?        S    14:41   0:00          \_ /ccpr1/sge6/utilbin/lx24-amd64/qrsh_starter /var/spool/sge/opt65/active_jobs/6997938.1/2.opt65
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12441  0.1  0.0  47932  2012 ?        S    14:41   0:00              \_ orted -mca ess env -mca orte_ess_jobid 1468006400 -mca orte_ess_vpid 8 -mca orte_ess_num_procs 20 --hnp-uri 1468006400.0;tcp://172.19.12.104:39940
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12795  1.0  0.0 153100  3128 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev2">&gt;&gt; jlb      12796  2.0  0.0 153232  3752 ?        S    14:41   0:00                  \_ /netapp/sali/jlb/mybin/mpihello-long.ompi-1.4.3-debug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua: the Centos6 is the same on all nodes and the you recompiled the application with the actual version of the library? By &quot;threads&quot; you refer to &quot;processes&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All the nodes are installed from the same kickstart file and kept fully
</span><br>
<span class="quotelev2">&gt;&gt; up to date.  And, yes, the application is compiled against the exact
</span><br>
<span class="quotelev2">&gt;&gt; library I'm running it with.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks again to all for looking at this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev2">&gt;&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev2">&gt;&gt; UCSF
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
