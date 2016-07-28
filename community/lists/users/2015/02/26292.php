<?
$subject_val = "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 20:14:47 2015" -->
<!-- isoreceived="20150205011447" -->
<!-- sent="Wed, 4 Feb 2015 17:14:46 -0800" -->
<!-- isosent="20150205011446" -->
<!-- name="Evan Samanas" -->
<!-- email="evan.samanas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="CA+TA=9KCyH_C12MtO-hCRnRgQfr9Q2iga--F6Gu-JQ+FKFOuKw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57of3QtkxkRHycX18xhxGdZAedbVit5uHiB0758HsjVaZaA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-04 20:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26287.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, I simply commented out all the MPI_Info stuff, which you
<br>
essentially did by passing a dummy argument.  I'm still not able to get it
<br>
to succeed.
<br>
<p>So here we go, my results defy logic.  I'm sure this could be my
<br>
fault...I've only been an occasional user of OpenMPI and MPI in general
<br>
over the years and I've never used MPI_Comm_spawn before this project. I
<br>
tested simple_spawn like so:
<br>
mpicc simple_spawn.c -o simple_spawn
<br>
./simple_spawn
<br>
<p>When my default hostfile points to a file that just lists localhost, this
<br>
test completes successfully.  If it points to my hostfile with localhost
<br>
and 5 remote hosts, here's the output:
<br>
evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ mpicc simple_spawn.c -o
<br>
simple_spawn
<br>
evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./simple_spawn
<br>
[pid 5703] starting up!
<br>
0 completed MPI_Init
<br>
Parent [pid 5703] about to spawn!
<br>
[lasarti:05703] [[14661,1],0] FORKING HNP: orted --hnp --set-sid
<br>
--report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca
<br>
ess_base_jobid 960823296
<br>
[lasarti:05705] *** Process received signal ***
<br>
[lasarti:05705] Signal: Segmentation fault (11)
<br>
[lasarti:05705] Signal code: Address not mapped (1)
<br>
[lasarti:05705] Failing at address: (nil)
<br>
[lasarti:05705] [ 0]
<br>
/lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7fc185dcf340]
<br>
[lasarti:05705] [ 1]
<br>
/opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_compute_bindings+0x650)[0x7fc186033bb0]
<br>
[lasarti:05705] [ 2]
<br>
/opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x939)[0x7fc18602fb99]
<br>
[lasarti:05705] [ 3]
<br>
/opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7fc18577dcc4]
<br>
[lasarti:05705] [ 4]
<br>
/opt/openmpi-v1.8.4-54-g07f735a/lib/libopen-rte.so.7(orte_daemon+0xdf8)[0x7fc186010438]
<br>
[lasarti:05705] [ 5] orted(main+0x47)[0x400887]
<br>
[lasarti:05705] [ 6]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7fc185a1aec5]
<br>
[lasarti:05705] [ 7] orted[0x4008db]
<br>
[lasarti:05705] *** End of error message ***
<br>
<p>You can see from the message that this particular run IS from the latest
<br>
snapshot, though the failure happens on v.1.8.4 as well.  I didn't bother
<br>
installing the snapshot on the remote nodes though.  Should I do that?  It
<br>
looked to me like this error happened well before we got to a remote node,
<br>
so that's why I didn't.
<br>
<p>Your thoughts?
<br>
<p>Evan
<br>
<p><p><p>On Tue, Feb 3, 2015 at 7:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I confess I am sorely puzzled. I replace the Info key with MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt; but still had to pass a bogus argument to master since you still have the
</span><br>
<span class="quotelev1">&gt; Info_set code in there - otherwise, info_set segfaults due to a NULL
</span><br>
<span class="quotelev1">&gt; argv[1]. Doing that (and replacing &quot;hostname&quot; with an MPI example code)
</span><br>
<span class="quotelev1">&gt; makes everything work just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attached one of our example comm_spawn codes that we test against -
</span><br>
<span class="quotelev1">&gt; it also works fine with the current head of the 1.8 code base. I confess
</span><br>
<span class="quotelev1">&gt; that some changes have been made since 1.8.4 was released, and it is
</span><br>
<span class="quotelev1">&gt; entirely possible that this was a problem in 1.8.4 and has since been fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I'd suggest trying with the nightly 1.8 tarball and seeing if it works
</span><br>
<span class="quotelev1">&gt; for you. You can download it from here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
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
<span class="quotelev1">&gt; On Tue, Feb 3, 2015 at 6:20 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I did.  I replaced the info argument of MPI_Comm_spawn with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INFO_NULL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Feb 3, 2015 at 5:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running your comm_spawn code, did you remove the Info key code? You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wouldn't need to provide a hostfile or hosts any more, which is why it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should resolve that problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree that providing either hostfile or host as an Info key will cause
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program to segfault - I'm woking on that issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 3, 2015 at 3:46 PM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting these environment variables did indeed change the way mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maps things, and I didn't have to specify a hostfile.  However, setting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these for my MPI_Comm_spawn code still resulted in the same segmentation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fault.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Evan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Feb 3, 2015 at 10:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you add the following to your environment, you should run on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; multiple nodes:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_MCA_rmaps_base_mapping_policy=node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_MCA_orte_default_hostfile=&lt;your hostfile&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The first tells OMPI to map-by node. The second passes in your default
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile so you don't need to specify it as an Info key.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Feb 3, 2015 at 9:23 AM, Evan Samanas &lt;evan.samanas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Good to know you've reproduced it.  I was experiencing this using
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; both the hostfile and host key.  A simple comm_spawn was working for me as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; well, but it was only launching locally, and I'm pretty sure each node only
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; has 4 slots given past behavior (the mpirun -np 8 example I gave in my
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; first email launches on both hosts).  Is there a way to specify the hosts I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; want to launch on without the hostfile or host key so I can test remote
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; launch?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And to the &quot;hostname&quot; response...no wonder it was hanging!  I just
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; constructed that as a basic example.  In my real use I'm launching
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; something that calls MPI_Init.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Evan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">http://www.open-mpi.org/community/lists/users/2015/02/26271.php</a>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26272.php">http://www.open-mpi.org/community/lists/users/2015/02/26272.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26281.php">http://www.open-mpi.org/community/lists/users/2015/02/26281.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26285.php">http://www.open-mpi.org/community/lists/users/2015/02/26285.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26286.php">http://www.open-mpi.org/community/lists/users/2015/02/26286.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26287.php">http://www.open-mpi.org/community/lists/users/2015/02/26287.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26293.php">Burns, Andrew J CTR (US): "Re: [OMPI users] prob in running two mpi merged program	(UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="26291.php">Muhammad Ashfaqur Rahman: "Re: [OMPI users] prob in running two mpi merged program (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="26287.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="26294.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
