<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 16:29:36 2015" -->
<!-- isoreceived="20150206212936" -->
<!-- sent="Fri, 6 Feb 2015 13:29:32 -0800" -->
<!-- isosent="20150206212932" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="8BBFD645-51D1-4005-B143-2C505786F8E9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+TA=9KAr2-Wpc7ofVCOrBbQEBKEHFk3bH7RaQ__zWOkXFHMNQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-06 16:29:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Previous message:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that's a bit of a problem. The issue is that we tie a specific build to its prefix, which means we expect to find the OMPI binaries in that location. So you are supposed to set your path etc to point to the actual installation, not an abstraction.
<br>
<p>There are some ways to work around it (e.g., to handle relocation) using OPAL_PREFIX in your environment, but I honestly don't recall the details of how to make that work as it isn't something we generally recommend.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2015, at 12:12 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for addressing this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried downloading your fork from that pull request and the seg fault appears to be gone.  However I didn't install it on my remote machine before testing, and I got this error: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash: /opt/ompi-release-cmr-singlespawn/bin/orted: No such file or directory (along with the usual complaints about ORTE not being able to start one of the daemons).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both machines I have openmpi installed to a directory in /opt, and /opt/openmpi is a symlink to whatever installation I want to use...then my paths point to the symlink.  I went to the remote machine and simply changed the name of the directory to match the other one and I just got a version mismatch error...a much more expected error. I'm not familiar with OMPI source, but does this have to do with the prefix issue you mentioned in the pull request? Should it handle symlinks?  Apologies if I'm misguided.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 5, 2015 at 9:51 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, I tracked this down - thanks for your patience! I have a fix pending review. You can track it here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/179">https://github.com/open-mpi/ompi-release/pull/179</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/179">https://github.com/open-mpi/ompi-release/pull/179</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 4, 2015, at 5:14 PM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, I simply commented out all the MPI_Info stuff, which you essentially did by passing a dummy argument.  I'm still not able to get it to succeed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So here we go, my results defy logic.  I'm sure this could be my fault...I've only been an occasional user of OpenMPI and MPI in general over the years and I've never used MPI_Comm_spawn before this project. I tested simple_spawn like so:
</span><br>
<span class="quotelev2">&gt;&gt; mpicc simple_spawn.c -o simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; ./simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When my default hostfile points to a file that just lists localhost, this test completes successfully.  If it points to my hostfile with localhost and 5 remote hosts, here's the output:
</span><br>
<span class="quotelev2">&gt;&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ mpicc simple_spawn.c -o simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./simple_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [pid 5703] starting up!
</span><br>
<span class="quotelev2">&gt;&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev2">&gt;&gt; Parent [pid 5703] about to spawn!
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05703] [[14661,1],0] FORKING HNP: orted --hnp --set-sid --report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca ess_base_jobid 960823296
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fc185dcf340]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 1] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_compute_bindings+0x650)[0x7fc186033bb0]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 2] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x939)[0x7fc18602fb99]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 3] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7fc18577dcc4]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 4] /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_daemon+0xdf8)[0x7fc186010438]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 5] orted(main+0x47)[0x400887]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 6] /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fc185a1aec5]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] [ 7] orted[0x4008db]
</span><br>
<span class="quotelev2">&gt;&gt; [lasarti:05705] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can see from the message that this particular run IS from the latest snapshot, though the failure happens on v.1.8.4 as well.  I didn't bother installing the snapshot on the remote nodes though.  Should I do that?  It looked to me like this error happened well before we got to a remote node, so that's why I didn't.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Evan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 7:40 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I confess I am sorely puzzled. I replace the Info key with MPI_INFO_NULL, but still had to pass a bogus argument to master since you still have the Info_set code in there - otherwise, info_set segfaults due to a NULL argv[1]. Doing that (and replacing &quot;hostname&quot; with an MPI example code) makes everything work just fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've attached one of our example comm_spawn codes that we test against - it also works fine with the current head of the 1.8 code base. I confess that some changes have been made since 1.8.4 was released, and it is entirely possible that this was a problem in 1.8.4 and has since been fixed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'd suggest trying with the nightly 1.8 tarball and seeing if it works for you. You can download it from here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> &lt;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 6:20 PM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I did.  I replaced the info argument of MPI_Comm_spawn with MPI_INFO_NULL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 5:54 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When running your comm_spawn code, did you remove the Info key code? You wouldn't need to provide a hostfile or hosts any more, which is why it should resolve that problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I agree that providing either hostfile or host as an Info key will cause the program to segfault - I'm woking on that issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 3:46 PM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Setting these environment variables did indeed change the way mpirun maps things, and I didn't have to specify a hostfile.  However, setting these for my MPI_Comm_spawn code still resulted in the same segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Evan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you add the following to your environment, you should run on multiple nodes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_rmaps_base_mapping_policy=node
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first tells OMPI to map-by node. The second passes in your default hostfile so you don't need to specify it as an Info key.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden] &lt;mailto:evan.samanas_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Good to know you've reproduced it.  I was experiencing this using both the hostfile and host key.  A simple comm_spawn was working for me as well, but it was only launching locally, and I'm pretty sure each node only has 4 slots given past behavior (the mpirun -np 8 example I gave in my first email launches on both hosts).  Is there a way to specify the hosts I want to launch on without the hostfile or host key so I can test remote launch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just constructed that as a basic example.  In my real use I'm launching something that calls MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Evan
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
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26292.php">http://www.open-mpi.org/community/lists/users/2015/02/26292.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26292.php">http://www.open-mpi.org/community/lists/users/2015/02/26292.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26294.php">http://www.open-mpi.org/community/lists/users/2015/02/26294.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26294.php">http://www.open-mpi.org/community/lists/users/2015/02/26294.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26302.php">http://www.open-mpi.org/community/lists/users/2015/02/26302.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26304.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segfault in mpi-java"</a>
<li><strong>Previous message:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>In reply to:</strong> <a href="26302.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
