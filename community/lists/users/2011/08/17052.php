<?
$subject_val = "Re: [OMPI users] scaling issue beyond 1024 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 11 12:51:44 2011" -->
<!-- isoreceived="20110811165144" -->
<!-- sent="Thu, 11 Aug 2011 12:51:38 -0400" -->
<!-- isosent="20110811165138" -->
<!-- name="CB" -->
<!-- email="cbalways_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling issue beyond 1024 processes" -->
<!-- id="CAOAHkMhQQo+yj3Vsxn2-K-NguBZcbWSQjiuNuo81-nbDPBogmg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F191F690-2A8B-422E-81E2-7E73664B2D7B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling issue beyond 1024 processes<br>
<strong>From:</strong> CB (<em>cbalways_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-11 12:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17053.php">Yen, Joseph: "[OMPI users] An MPI performance related question..."</a>
<li><strong>Previous message:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17049.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The job was dispatched by SGE scheduler but the mpi hello binary never gets
<br>
executed on compute nodes.  It appears that the OpenMPI orted is waiting for
<br>
something as shown below:
<br>
<p>Master node:
<br>
<p>&nbsp;4465 ?        Sl     0:05 /usr/local/sge/latest/bin/lx26-amd64/sge_execd
<br>
&nbsp;4677 ?        S      0:00  \_ sge_shepherd-296 -bg
<br>
&nbsp;4679 ?        Ss     0:00      \_ /bin/bash ./sge_jsb.sh
<br>
&nbsp;4681 ?        S      0:00          \_ mpirun -np 3097 ./hello_openmpi.exe
<br>
&nbsp;4682 ?        Sl     0:02              \_
<br>
/usr/local/sge/latest/bin/lx26-amd64/qrsh -inherit -nostdin -V x-01-00-a
<br>
orted -mca ess env -mca orte_ess_jobid 662831104 -mca orte_ess_vpid 1 -mca
<br>
orte_ess_num_procs 130 --hnp-uri &quot;662831104.0;tcp://xxx.xx.4.8:39025&quot;
<br>
&nbsp;4683 ?        Sl     0:01              \_
<br>
/usr/local/sge/latest/bin/lx26-amd64/qrsh -inherit -nostdin -V x-01-06-b
<br>
orted -mca ess env -mca orte_ess_jobid 662831104 -mca orte_ess_vpid 2 -mca
<br>
orte_ess_num_procs 130 --hnp-uri &quot;662831104.0;tcp://xxx.xx.4.8:39025&quot;
<br>
... &lt;cut the ramining process&gt; ...
<br>
<p>===
<br>
<p>A client compute node:
<br>
<p>&nbsp;6290 ?        Sl     0:05 /usr/local/sge/latest/bin/lx26-amd64/sge_execd
<br>
&nbsp;6793 ?        Sl     0:00  \_ sge_shepherd-296 -bg
<br>
&nbsp;6794 ?        Ss     0:00      \_
<br>
/usr/local/sge/latest/utilbin/lx26-amd64/qrsh_starter
<br>
/var/spool/sge/62u5/x-01-00-a/active_jobs/296.1/1.x-01-00-a
<br>
&nbsp;6801 ?        S      0:00          \_ orted -mca ess env -mca
<br>
orte_ess_jobid 662831104 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 130
<br>
--hnp-uri 662831104.0;tcp://xxx.xx.4.8:39025
<br>
<p>- Chansup
<br>
<p>On Wed, Aug 10, 2011 at 4:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When you say &quot;stuck&quot;, what actually happens?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2011, at 2:09 PM, CB wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I was able to run MPI hello world example up to 3096 processes across
</span><br>
<span class="quotelev1">&gt; 129 nodes (24 cores per node).
</span><br>
<span class="quotelev1">&gt; However, it seems to get stuck with 3097 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions for troubleshooting?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; - Chansup
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 9, 2011 at 2:02 PM, CB &lt;cbalways_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, you are right. Those nodes were still pointing to an old version.
</span><br>
<span class="quotelev2">&gt;&gt; I'll check the installation on all nodes and try to run it again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - Chansup
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 9, 2011 at 1:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That error makes no sense - line 335 is just a variable declaration. Sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you are not picking up a different version on that node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 9, 2011, at 11:37 AM, CB wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Currently I'm having trouble to scale an MPI job beyond a certain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So I'm running an MPI hello example to test beyond 1024 but it failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the following error with 2048 processes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It worked fine with 1024 processes.  I have enough file descriptor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limit (65536) defined for each process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I appreciate if anyone gives me any suggestions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm running (Open MPI) 1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-01-06-a:25989] [[37568,0],69] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inadequate space in file base/odls_base_default_fns.c at line 335
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-01-06-b:09532] [[37568,0],74] ORTE_ERROR_LOG: Data unpack had
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inadequate space in file base/odls_base_default_fns.c at line 335
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] Failing at address: 0x6c
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 0] /lib64/libpthread.so.0 [0x310860ee90]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x230)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbe0c5010]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0 [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 3] mpirun [0x403bbe]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0 [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0x99)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbde50e49]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_trigger_event+0x42)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbe0a7ca2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_app_report_launch+0x22d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbe0c500d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0 [0x7f0dbde5c8f8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0x99)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbde50e49]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x23d)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x7f0dbe0c5ddd]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/MPI/openmpi-1.4.3/lib/openmpi/mca_plm_rsh.so [0x7f0dbd41d679]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [12] mpirun [0x40373f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [13] mpirun [0x402a1c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [14] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x3107e1ea2d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] [15] mpirun [0x402939]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-03-20-b:23316] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-01-06-a:25989] [[37568,0],69]-[[37568,0],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [x-01-06-b:09532] [[37568,0],74]-[[37568,0],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ./sge_jsb.sh: line 9: 23316 Segmentation fault      (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np $NSLOTS ./hello_openmpi.exe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17053.php">Yen, Joseph: "[OMPI users] An MPI performance related question..."</a>
<li><strong>Previous message:</strong> <a href="17051.php">Jeff Squyres: "Re: [OMPI users] Open MPI via SSH noob issue"</a>
<li><strong>In reply to:</strong> <a href="17049.php">Ralph Castain: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
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
