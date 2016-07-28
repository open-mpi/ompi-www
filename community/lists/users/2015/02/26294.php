<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 12:51:42 2015" -->
<!-- isoreceived="20150205175142" -->
<!-- sent="Thu, 5 Feb 2015 09:51:38 -0800" -->
<!-- isosent="20150205175138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="6AB06406-CA84-425B-8534-88F6C4B6A4DD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+TA=9KCyH_C12MtO-hCRnRgQfr9Q2iga--F6Gu-JQ+FKFOuKw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-05 12:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26295.php">Tabrez Ali: "[OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I tracked this down - thanks for your patience! I have a fix pending review. You can track it here:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/179">https://github.com/open-mpi/ompi-release/pull/179</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/179">https://github.com/open-mpi/ompi-release/pull/179</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Feb 4, 2015, at 5:14 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, I simply commented out all the MPI_Info stuff, which you essentially did by passing a dummy argument.  I'm still not able to get it to succeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So here we go, my results defy logic.  I'm sure this could be my fault...I've only been an occasional user of OpenMPI and MPI in general over the years and I've never used MPI_Comm_spawn before this project. I tested simple_spawn like so:
</span><br>
<span class="quotelev1">&gt; mpicc simple_spawn.c -o simple_spawn
</span><br>
<span class="quotelev1">&gt; ./simple_spawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When my default hostfile points to a file that just lists localhost, this test completes successfully.  If it points to my hostfile with localhost and 5 remote hosts, here's the output:
</span><br>
<span class="quotelev1">&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ mpicc simple_spawn.c -o simple_spawn
</span><br>
<span class="quotelev1">&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./simple_spawn
</span><br>
<span class="quotelev1">&gt; [pid 5703] starting up!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 5703] about to spawn!
</span><br>
<span class="quotelev1">&gt; [lasarti:05703] [[14661,1],0] FORKING HNP: orted --hnp --set-sid --report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca ess_base_jobid 960823296
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fc185dcf340]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 1] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_compute_bindings+0x650)[0x7fc186033bb0]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 2] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x939)[0x7fc18602fb99]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 3] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7fc18577dcc4]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 4] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_daemon+0xdf8)[0x7fc186010438]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 5] orted(main+0x47)[0x400887]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 6] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fc185a1aec5]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 7] orted[0x4008db]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see from the message that this particular run IS from the latest snapshot, though the failure happens on v.1.8.4 as well.  I didn't bother installing the snapshot on the remote nodes though.  Should I do that?  It looked to me like this error happened well before we got to a remote node, so that's why I didn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 7:40 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I confess I am sorely puzzled. I replace the Info key with MPI_INFO_NULL, but still had to pass a bogus argument to master since you still have the Info_set code in there - otherwise, info_set segfaults due to a NULL argv[1]. Doing that (and replacing &quot;hostname&quot; with an MPI example code) makes everything work just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached one of our example comm_spawn codes that we test against - it also works fine with the current head of the 1.8 code base. I confess that some changes have been made since 1.8.4 was released, and it is entirely possible that this was a problem in 1.8.4 and has since been fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'd suggest trying with the nightly 1.8 tarball and seeing if it works for you. You can download it from here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> &lt;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 6:20 PM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Yes, I did.  I replaced the info argument of MPI_Comm_spawn with MPI_INFO_NULL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 5:54 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; When running your comm_spawn code, did you remove the Info key code? You wouldn't need to provide a hostfile or hosts any more, which is why it should resolve that problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that providing either hostfile or host as an Info key will cause the program to segfault - I'm woking on that issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 3:46 PM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Setting these environment variables did indeed change the way mpirun maps things, and I didn't have to specify a hostfile.  However, setting these for my MPI_Comm_spawn code still resulted in the same segmentation fault.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; If you add the following to your environment, you should run on multiple nodes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rmaps_base_mapping_policy=node
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first tells OMPI to map-by node. The second passes in your default hostfile so you don't need to specify it as an Info key.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know you've reproduced it.  I was experiencing this using both the hostfile and host key.  A simple comm_spawn was working for me as well, but it was only launching locally, and I'm pretty sure each node only has 4 slots given past behavior (the mpirun -np 8 example I gave in my first email launches on both hosts).  Is there a way to specify the hosts I want to launch on without the hostfile or host key so I can test remote launch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just constructed that as a basic example.  In my real use I'm launching something that calls MPI_Init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evan
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26292.php">http://www.open-mpi.org/community/lists/users/2015/02/26292.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26292.php">http://www.open-mpi.org/community/lists/users/2015/02/26292.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26295.php">Tabrez Ali: "[OMPI users] Signal code: Integer divide-by-zero"</a>
<li><strong>Previous message:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26292.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
