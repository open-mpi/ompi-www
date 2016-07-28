<?
$subject_val = "Re: [OMPI users] orted segmentation fault in pmix on master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 17:20:36 2015" -->
<!-- isoreceived="20150625212036" -->
<!-- sent="Thu, 25 Jun 2015 14:20:32 -0700" -->
<!-- isosent="20150625212032" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted segmentation fault in pmix on master" -->
<!-- id="CAMD57oeF5HddW=u3S785skQz+_z4wQ60Xrwzz4LNXGy0_uyLQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3338D43B4B3406468B642ACE86F41E7E3AEA0924_at_ucolhpks.easf.csd.disa.mil" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-25 17:20:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27195.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27195.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ken
<br>
<p>I haven't forgotten you. We've been meeting this week, which has limited my
<br>
time, but I am working on a replacement for that entire code block that
<br>
should resolve the problem. Hope to have it soon.
<br>
<p>Ralph
<br>
<p><p>On Thu, Jun 25, 2015 at 2:12 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;
<br>
kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I had some time this afternoon to work on this problem further and
</span><br>
<span class="quotelev1">&gt; discovered some more info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I used valgrind to attach to orted and collected logs of valgrind
</span><br>
<span class="quotelev1">&gt; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I get many uninitialized value errors in pmix_server_process_msgs.c
</span><br>
<span class="quotelev1">&gt; beginning at line 378. It appears that reply is never allocated. If I add &quot;reply
</span><br>
<span class="quotelev1">&gt; = OBJ_NEW(opal_buffer_t);&quot; before filling reply, I get rid of those errors
</span><br>
<span class="quotelev1">&gt; from valgrind. Whether that is the correct fix I do not know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Unfortunately this doesn't solve my problem crashing orted. I now
</span><br>
<span class="quotelev1">&gt; consistently get a single error detected by valgrind:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ==29602== Process terminating with default action of signal 11
</span><br>
<span class="quotelev1">&gt; (SIGSEGV): dumping core
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==  Access not within mapped region at address 0x48
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    at 0x4E6E2FA: orte_util_print_name_args (name_fns.c:142)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0xCABE394: orte_rml_oob_send_buffer_nb (rml_oob_send.c:269)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0x4ED621E: pmix_server_process_message
</span><br>
<span class="quotelev1">&gt; (pmix_server_process_msgs.c:421)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0x4EC2606: pmix_server_recv_handler
</span><br>
<span class="quotelev1">&gt; (pmix_server_sendrecv.c:446)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0x528D31C: opal_libevent2022_event_base_loop (event.c:1321)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0x4EA3142: orte_daemon (orted_main.c:864)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==29602==    by 0x401073: main (orted.c:60)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From the core file I get from orted - I see that req-&gt;proxy is Null in
</span><br>
<span class="quotelev1">&gt; pmix_server_process_msgs.c:421 . How this arises, I do not know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt; Ken Leiter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 11, 2015 4:27 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yeah, I&#226;&#128;&#153;d put my money on a race condition under that scenario. I don&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; have anything that large I can test on, but I&#226;&#128;&#153;ll see what I can do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jun 11, 2015, at 1:17 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;
</span><br>
<span class="quotelev1">&gt; kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Yes, each parent launches ten children and no other parents participate
</span><br>
<span class="quotelev1">&gt; in that spawn (i.e. the spawn uses MPI_COMM_SELF as the communicator).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No threading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using the example from:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/bfroehle/mpi4py/tree/master/demo/spawning">https://github.com/bfroehle/mpi4py/tree/master/demo/spawning</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In lieu of my actual application which has a lot more moving parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  After rerunning many times, it sometimes completes successfully and
</span><br>
<span class="quotelev1">&gt; othertimes seg faults the daemon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 11, 2015 4:09 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So to be clear: each parent launches 10 children, and no other parents
</span><br>
<span class="quotelev1">&gt; participate in that spawn?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  And there is no threading in the app, yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Jun 11, 2015, at 12:53 PM, Leiter, Kenneth W CIV USARMY ARL (US) &lt;
</span><br>
<span class="quotelev1">&gt; kenneth.w.leiter2.civ_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I do not run into a problem when I have one parent spawning many
</span><br>
<span class="quotelev1">&gt; children (tested up to 100 children ranks), but am seeing the problem when
</span><br>
<span class="quotelev1">&gt; I have, for example, 8 parents launching 10 children each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Ken
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Howard Pritchard [
</span><br>
<span class="quotelev1">&gt; hppritcha_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, June 11, 2015 2:36 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi Ken,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Could you post the output of your ompi_info?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have PrgEnv-gnu/5.2.56 and gcc/4.9.2 loaded in my env on nersc
</span><br>
<span class="quotelev1">&gt; system.  Following configure line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --enable-mpi-java --prefix=my_favorite_install_location
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The general rule of thumb on cray's with master (not with older versions
</span><br>
<span class="quotelev1">&gt; though) is you should be able to
</span><br>
<span class="quotelev1">&gt; do a ./configure (install location) and you're ready to go, no need for
</span><br>
<span class="quotelev1">&gt; complicated platform files, etc.
</span><br>
<span class="quotelev1">&gt; to just build vanilla.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  As you're probably guessing, I'm going to say it works for me, at least
</span><br>
<span class="quotelev1">&gt; up to 68 slave ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I do notice there's some glitch with the mapping of the ranks though.
</span><br>
<span class="quotelev1">&gt; The binding logic seems
</span><br>
<span class="quotelev1">&gt; to think there's oversubscription of cores even when there should not be.
</span><br>
<span class="quotelev1">&gt; I had to use the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --bind-to none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  option on the command line once I asked for more than 22 slave ranks.
</span><br>
<span class="quotelev1">&gt;  edison system has
</span><br>
<span class="quotelev1">&gt; has 24 cores/node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-06-11 12:10 GMT-06:00 Leiter, Kenneth W CIV USARMY ARL (US) &lt;
</span><br>
<span class="quotelev1">&gt; kenneth.w.leiter2.civ_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will try on a non-cray machine as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Ken
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Howard
</span><br>
<span class="quotelev2">&gt;&gt; Pritchard
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, June 11, 2015 12:21 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] orted segmentation fault in pmix on master
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Ken,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you give the details of the allocation request (qsub args) as well
</span><br>
<span class="quotelev2">&gt;&gt; as the mpirun command line args? I'm trying to reproduce on the nersc
</span><br>
<span class="quotelev2">&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It would be interesting if you have access to a similar size non-cray
</span><br>
<span class="quotelev2">&gt;&gt; cluster if you get the same problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-06-11 9:13 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; rhc_at_[hidden]&gt; &gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I don&#226;&#128;&#153;t have a Cray, but let me see if I can reproduce this on
</span><br>
<span class="quotelev2">&gt;&gt; something else
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; On Jun 11, 2015, at 7:26 AM, Leiter, Kenneth W CIV USARMY ARL
</span><br>
<span class="quotelev2">&gt;&gt; (US) &lt;kenneth.w.leiter2.civ_at_[hidden]&lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; kenneth.w.leiter2.civ_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I am attempting to use the openmpi development master for a
</span><br>
<span class="quotelev2">&gt;&gt; code that uses
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; dynamic process management (i.e. MPI_Comm_spawn) on our Cray
</span><br>
<span class="quotelev2">&gt;&gt; XC40 at the
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Army Research Laboratory. After reading through the mailing
</span><br>
<span class="quotelev2">&gt;&gt; list I came to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; the conclusion that the master branch is the only hope for
</span><br>
<span class="quotelev2">&gt;&gt; getting this to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; work on the newer Cray machines.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; To test I am using the cpi-master.c cpi-worker.c example. The
</span><br>
<span class="quotelev2">&gt;&gt; test works
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; when executing on a small number of processors, five or less,
</span><br>
<span class="quotelev2">&gt;&gt; but begins to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; fail with segmentation faults in orted when using more
</span><br>
<span class="quotelev2">&gt;&gt; processors. Even with
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; five or fewer processors, I am spreading the computation to
</span><br>
<span class="quotelev2">&gt;&gt; more than one
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; node. I am using the cray ugni btl through the alps scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I get a core file from orted and have the seg fault tracked
</span><br>
<span class="quotelev2">&gt;&gt; down to
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; pmix_server_process_msgs.c:420 where req-&gt;proxy is NULL. I have
</span><br>
<span class="quotelev2">&gt;&gt; tried
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; reading the code to understand how this happens, but am unsure.
</span><br>
<span class="quotelev2">&gt;&gt; I do see
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; that in the if statement where I take the else branch, the
</span><br>
<span class="quotelev2">&gt;&gt; other branch
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; specifically checks &quot;if (NULL == req-&gt;proxy)&quot; - however, no
</span><br>
<span class="quotelev2">&gt;&gt; such check is
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; done the the else branch.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; I have debug output dumped for the failing runs. I can provide
</span><br>
<span class="quotelev2">&gt;&gt; the output
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; along with ompi_info output and config.log to anyone who is
</span><br>
<span class="quotelev2">&gt;&gt; interested.
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; - Ken Leiter
</span><br>
<span class="quotelev3">&gt;&gt;         &gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;         &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27094.php">http://www.open-mpi.org/community/lists/users/2015/06/27094.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27095.php">http://www.open-mpi.org/community/lists/users/2015/06/27095.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27103.php">http://www.open-mpi.org/community/lists/users/2015/06/27103.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27110.php">http://www.open-mpi.org/community/lists/users/2015/06/27110.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27113.php">http://www.open-mpi.org/community/lists/users/2015/06/27113.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27195.php">http://www.open-mpi.org/community/lists/users/2015/06/27195.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27196/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27197.php">Nick Radcliffe: "[OMPI users] Running with native ugni on a Cray XC"</a>
<li><strong>Previous message:</strong> <a href="27195.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<li><strong>In reply to:</strong> <a href="27195.php">Leiter, Kenneth W CIV USARMY ARL (US): "Re: [OMPI users] orted segmentation fault in pmix on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27099.php">Ray Sheppard: "[OMPI users] Undefined ompi_mpi_info_null issue"</a>
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
