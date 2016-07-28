<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  6 15:12:57 2015" -->
<!-- isoreceived="20150206201257" -->
<!-- sent="Fri, 6 Feb 2015 12:12:56 -0800" -->
<!-- isosent="20150206201256" -->
<!-- name="Evan Samanas" -->
<!-- email="evan.samanas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CA+TA=9KAr2-Wpc7ofVCOrBbQEBKEHFk3bH7RaQ__zWOkXFHMNQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6AB06406-CA84-425B-8534-88F6C4B6A4DD_at_open-mpi.org" -->
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
<strong>From:</strong> Evan Samanas (<em>evan.samanas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-06 15:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26301.php">John Bray: "[OMPI users] Sample code using the more obscure MPI_Neighbor routines"</a>
<li><strong>In reply to:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for addressing this issue.
<br>
<p>I tried downloading your fork from that pull request and the seg fault
<br>
appears to be gone.  However I didn't install it on my remote machine
<br>
before testing, and I got this error:
<br>
<p>bash: /opt/ompi-release-cmr-singlespawn/bin/orted: No such file or
<br>
directory (along with the usual complaints about ORTE not being able to
<br>
start one of the daemons).
<br>
<p>On both machines I have openmpi installed to a directory in /opt, and
<br>
/opt/openmpi is a symlink to whatever installation I want to use...then my
<br>
paths point to the symlink.  I went to the remote machine and simply
<br>
changed the name of the directory to match the other one and I just got a
<br>
version mismatch error...a much more expected error. I'm not familiar with
<br>
OMPI source, but does this have to do with the prefix issue you mentioned
<br>
in the pull request? Should it handle symlinks?  Apologies if I'm misguided.
<br>
<p>Evan
<br>
<p>On Thu, Feb 5, 2015 at 9:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I tracked this down - thanks for your patience! I have a fix pending
</span><br>
<span class="quotelev1">&gt; review. You can track it here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-release/pull/179">https://github.com/open-mpi/ompi-release/pull/179</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 4, 2015, at 5:14 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, I simply commented out all the MPI_Info stuff, which you
</span><br>
<span class="quotelev1">&gt; essentially did by passing a dummy argument.  I'm still not able to get it
</span><br>
<span class="quotelev1">&gt; to succeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here we go, my results defy logic.  I'm sure this could be my
</span><br>
<span class="quotelev1">&gt; fault...I've only been an occasional user of OpenMPI and MPI in general
</span><br>
<span class="quotelev1">&gt; over the years and I've never used MPI_Comm_spawn before this project. I
</span><br>
<span class="quotelev1">&gt; tested simple_spawn like so:
</span><br>
<span class="quotelev1">&gt; mpicc simple_spawn.c -o simple_spawn
</span><br>
<span class="quotelev1">&gt; ./simple_spawn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When my default hostfile points to a file that just lists localhost, this
</span><br>
<span class="quotelev1">&gt; test completes successfully.  If it points to my hostfile with localhost
</span><br>
<span class="quotelev1">&gt; and 5 remote hosts, here's the output:
</span><br>
<span class="quotelev1">&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ mpicc simple_spawn.c -o
</span><br>
<span class="quotelev1">&gt; simple_spawn
</span><br>
<span class="quotelev1">&gt; evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./simple_spawn
</span><br>
<span class="quotelev1">&gt; [pid 5703] starting up!
</span><br>
<span class="quotelev1">&gt; 0 completed MPI_Init
</span><br>
<span class="quotelev1">&gt; Parent [pid 5703] about to spawn!
</span><br>
<span class="quotelev1">&gt; [lasarti:05703] [[14661,1],0] FORKING HNP: orted --hnp --set-sid
</span><br>
<span class="quotelev1">&gt; --report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca
</span><br>
<span class="quotelev1">&gt; ess_base_jobid 960823296
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fc185dcf340]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_compute_bindings+0x650)[0x7fc186033bb0]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x939)[0x7fc18602fb99]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7fc18577dcc4]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_daemon+0xdf8)[0x7fc186010438]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 5] orted(main+0x47)[0x400887]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 6]
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fc185a1aec5]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] [ 7] orted[0x4008db]
</span><br>
<span class="quotelev1">&gt; [lasarti:05705] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see from the message that this particular run IS from the latest
</span><br>
<span class="quotelev1">&gt; snapshot, though the failure happens on v.1.8.4 as well.  I didn't bother
</span><br>
<span class="quotelev1">&gt; installing the snapshot on the remote nodes though.  Should I do that?  It
</span><br>
<span class="quotelev1">&gt; looked to me like this error happened well before we got to a remote node,
</span><br>
<span class="quotelev1">&gt; so that's why I didn't.
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
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 7:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I confess I am sorely puzzled. I replace the Info key with MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt;&gt; but still had to pass a bogus argument to master since you still have the
</span><br>
<span class="quotelev2">&gt;&gt; Info_set code in there - otherwise, info_set segfaults due to a NULL
</span><br>
<span class="quotelev2">&gt;&gt; argv[1]. Doing that (and replacing &quot;hostname&quot; with an MPI example code)
</span><br>
<span class="quotelev2">&gt;&gt; makes everything work just fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've attached one of our example comm_spawn codes that we test against -
</span><br>
<span class="quotelev2">&gt;&gt; it also works fine with the current head of the 1.8 code base. I confess
</span><br>
<span class="quotelev2">&gt;&gt; that some changes have been made since 1.8.4 was released, and it is
</span><br>
<span class="quotelev2">&gt;&gt; entirely possible that this was a problem in 1.8.4 and has since been fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I'd suggest trying with the nightly 1.8 tarball and seeing if it works
</span><br>
<span class="quotelev2">&gt;&gt; for you. You can download it from here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
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
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 6:20 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, I did.  I replaced the info argument of MPI_Comm_spawn with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 3, 2015 at 5:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When running your comm_spawn code, did you remove the Info key code?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You wouldn't need to provide a hostfile or hosts any more, which is why it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should resolve that problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree that providing either hostfile or host as an Info key will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cause the program to segfault - I'm woking on that issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Feb 3, 2015 at 3:46 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting these environment variables did indeed change the way mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; maps things, and I didn't have to specify a hostfile.  However, setting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; these for my MPI_Comm_spawn code still resulted in the same segmentation
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fault.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Evan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Feb 3, 2015 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If you add the following to your environment, you should run on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; multiple nodes:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_rmaps_base_mapping_policy=node
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The first tells OMPI to map-by node. The second passes in your
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; default hostfile so you don't need to specify it as an Info key.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Good to know you've reproduced it.  I was experiencing this using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; both the hostfile and host key.  A simple comm_spawn was working for me as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; well, but it was only launching locally, and I'm pretty sure each node only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; has 4 slots given past behavior (the mpirun -np 8 example I gave in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; first email launches on both hosts).  Is there a way to specify the hosts I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; want to launch on without the hostfile or host key so I can test remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; launch?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; constructed that as a basic example.  In my real use I'm launching
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; something that calls MPI_Init.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Evan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26292.php">http://www.open-mpi.org/community/lists/users/2015/02/26292.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26294.php">http://www.open-mpi.org/community/lists/users/2015/02/26294.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Previous message:</strong> <a href="26301.php">John Bray: "[OMPI users] Sample code using the more obscure MPI_Neighbor routines"</a>
<li><strong>In reply to:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26303.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
