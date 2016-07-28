<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 17:13:32 2015" -->
<!-- isoreceived="20150625211332" -->
<!-- sent="Thu, 25 Jun 2015 21:12:43 +0000" -->
<!-- isosent="20150625211243" -->
<!-- name="Leiter, Kenneth W CIV USARMY ARL (US)" -->
<!-- email="kenneth.w.leiter2.civ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="3338D43B4B3406468B642ACE86F41E7E3AEA0924_at_ucolhpks.easf.csd.disa.mil" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="19437422-8844-4D2B-8194-CAF171B7A1A6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted segmentation fault in pmix on master<br>
<strong>From:</strong> Leiter, Kenneth W CIV USARMY ARL (US) (<em>kenneth.w.leiter2.civ_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 17:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>In reply to:</strong> <a href="27114.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I had some time this afternoon to work on this problem further and discovered some more info.
<br>
<p>I used valgrind to attach to orted and collected logs of valgrind output.
<br>
<p>I get many uninitialized value errors in pmix_server_process_msgs.c beginning at line 378. It appears that reply is never allocated. If I add &quot;reply = OBJ_NEW(opal_buffer_t);&quot; before filling reply, I get rid of those errors from valgrind. Whether that is the correct fix I do not know.
<br>
<p>Unfortunately this doesn't solve my problem crashing orted. I now consistently get a single error detected by valgrind:
<br>
<p><p>==29602== Process terminating with default action of signal 11 (SIGSEGV): dumping core
<br>
<p>==29602==  Access not within mapped region at address 0x48
<br>
<p>==29602==    at 0x4E6E2FA: orte_util_print_name_args (name_fns.c:142)
<br>
<p>==29602==    by 0xCABE394: orte_rml_oob_send_buffer_nb (rml_oob_send.c:269)
<br>
<p>==29602==    by 0x4ED621E: pmix_server_process_message (pmix_server_process_msgs.c:421)
<br>
<p>==29602==    by 0x4EC2606: pmix_server_recv_handler (pmix_server_sendrecv.c:446)
<br>
<p>==29602==    by 0x528D31C: opal_libevent2022_event_base_loop (event.c:1321)
<br>
<p>==29602==    by 0x4EA3142: orte_daemon (orted_main.c:864)
<br>
<p>==29602==    by 0x401073: main (orted.c:60)
<br>
<p><span class="quotelev1">&gt;From the core file I get from orted - I see that req-&gt;proxy is Null in pmix_server_process_msgs.c:421 . How this arises, I do not know.
</span><br>
<p>Thanks,
<br>
Ken Leiter
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Thursday, June 11, 2015 4:27 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] orted segmentation fault in pmix on master
<br>
<p>Yeah, I&#146;d put my money on a race condition under that scenario. I don&#146;t have anything that large I can test on, but I&#146;ll see what I can do
<br>
<p>On Jun 11, 2015, at 1:17 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt; wrote:
<br>
<p>Yes, each parent launches ten children and no other parents participate in that spawn (i.e. the spawn uses MPI_COMM_SELF as the communicator).
<br>
<p>No threading.
<br>
<p>I am using the example from: <a href="https://github.com/bfroehle/mpi4py/tree/master/demo/spawning">https://github.com/bfroehle/mpi4py/tree/master/demo/spawning</a>
<br>
<p>In lieu of my actual application which has a lot more moving parts.
<br>
<p>After rerunning many times, it sometimes completes successfully and othertimes seg faults the daemon.
<br>
<p>- Ken
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: Thursday, June 11, 2015 4:09 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] orted segmentation fault in pmix on master
<br>
<p>So to be clear: each parent launches 10 children, and no other parents participate in that spawn?
<br>
<p>And there is no threading in the app, yes?
<br>
<p><p>On Jun 11, 2015, at 12:53 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt; wrote:
<br>
<p>Howard,
<br>
<p>I do not run into a problem when I have one parent spawning many children (tested up to 100 children ranks), but am seeing the problem when I have, for example, 8 parents launching 10 children each.
<br>
<p>- Ken
<br>
________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Howard Pritchard [hppritcha_at_[hidden]&lt;mailto:hppritcha_at_[hidden]&gt;]
<br>
Sent: Thursday, June 11, 2015 2:36 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] orted segmentation fault in pmix on master
<br>
<p>Hi Ken,
<br>
<p>Could you post the output of your ompi_info?
<br>
<p>I have PrgEnv-gnu/5.2.56 and gcc/4.9.2 loaded in my env on nersc system.  Following configure line:
<br>
<p>./configure --enable-mpi-java --prefix=my_favorite_install_location
<br>
<p>The general rule of thumb on cray's with master (not with older versions though) is you should be able to
<br>
do a ./configure (install location) and you're ready to go, no need for complicated platform files, etc.
<br>
to just build vanilla.
<br>
<p>As you're probably guessing, I'm going to say it works for me, at least up to 68 slave ranks.
<br>
<p>I do notice there's some glitch with the mapping of the ranks though.  The binding logic seems
<br>
to think there's oversubscription of cores even when there should not be.  I had to use the
<br>
<p>--bind-to none
<br>
<p>option on the command line once I asked for more than 22 slave ranks.  edison system has
<br>
has 24 cores/node.
<br>
<p>Howard
<br>
<p><p><p>2015-06-11 12:10 GMT-06:00 Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt;:
<br>
I will try on a non-cray machine as well.
<br>
<p>- Ken
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Howard Pritchard
<br>
Sent: Thursday, June 11, 2015 12:21 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] orted segmentation fault in pmix on master
<br>
<p>Hello Ken,
<br>
<p>Could you give the details of the allocation request (qsub args) as well as the mpirun command line args? I'm trying to reproduce on the nersc system.
<br>
<p>It would be interesting if you have access to a similar size non-cray cluster if you get the same problems.
<br>
<p>Howard
<br>
<p><p>2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; &gt;:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don&#146;t have a Cray, but let me see if I can reproduce this on something else
<br>
<p><span class="quotelev1">        &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:kenneth.w.leiter2.civ_at_[hidden]&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; Hello,
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; I am attempting to use the openmpi development master for a code that uses
</span><br>
<span class="quotelev1">        &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray XC40 at the
</span><br>
<span class="quotelev1">        &gt; Army Research Laboratory. After reading through the mailing list I came to
</span><br>
<span class="quotelev1">        &gt; the conclusion that the master branch is the only hope for getting this to
</span><br>
<span class="quotelev1">        &gt; work on the newer Cray machines.
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; To test I am using the cpi-master.c cpi-worker.c example. The test works
</span><br>
<span class="quotelev1">        &gt; when executing on a small number of processors, five or less, but begins to
</span><br>
<span class="quotelev1">        &gt; fail with segmentation faults in orted when using more processors. Even with
</span><br>
<span class="quotelev1">        &gt; five or fewer processors, I am spreading the computation to more than one
</span><br>
<span class="quotelev1">        &gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; I get a core file from orted and have the seg fault tracked down to
</span><br>
<span class="quotelev1">        &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have tried
</span><br>
<span class="quotelev1">        &gt; reading the code to understand how this happens, but am unsure. I do see
</span><br>
<span class="quotelev1">        &gt; that in the if statement where I take the else branch, the other branch
</span><br>
<span class="quotelev1">        &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no such check is
</span><br>
<span class="quotelev1">        &gt; done the the else branch.
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; I have debug output dumped for the failing runs. I can provide the output
</span><br>
<span class="quotelev1">        &gt; along with ompi_info output and config.log to anyone who is interested.
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; - Ken Leiter
</span><br>
<span class="quotelev1">        &gt;
</span><br>
<span class="quotelev1">        &gt; _______________________________________________
</span><br>
<span class="quotelev1">        &gt; users mailing list
</span><br>
<span class="quotelev1">        &gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">        &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">        &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]&lt;mailto:users_at_[hidden]&gt; &lt;mailto:users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27103.php">http://www.open-mpi.org/community/lists/users/2015/06/27103.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27110.php">http://www.open-mpi.org/community/lists/users/2015/06/27110.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27113.php">http://www.open-mpi.org/community/lists/users/2015/06/27113.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Previous message:</strong> <a href="27194.php">Fedele Stabile: "Re: [OMPI users] hybrid programming and OpenMPI compilation"</a>
<li><strong>In reply to:</strong> <a href="27114.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>Reply:</strong> <a href="27196.php">Ralph Castain: "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
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
