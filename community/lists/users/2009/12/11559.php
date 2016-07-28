<?
$subject_val = "Re: [OMPI users] error performing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 19:56:22 2009" -->
<!-- isoreceived="20091217005622" -->
<!-- sent="Wed, 16 Dec 2009 17:56:13 -0700" -->
<!-- isosent="20091217005613" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error performing MPI_Comm_spawn" -->
<!-- id="FF682400-F801-4624-BC47-F7B84DD2A14C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6546e7be0912160443x5dc22c93xe059ec5e1ebd09fd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error performing MPI_Comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 19:56:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>In reply to:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11564.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11564.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah crumb - I found the problem. Sigh.
<br>
<p>I actually fixed this in the trunk over 5 months ago when the problem first surfaced in my own testing, but it never came across to the stable release branch. The problem is that we weren't serializing the comm_spawn requests, and so the launch system gets confused over what has and hasn't completed launch. That's why it works fine on the trunk.
<br>
<p>I'm creating the 1.4 patch right now. Thanks for catching this. Old brain completely forgot until I started tracking the commit history and found my own footprints!
<br>
<p>Ralph
<br>
<p>On Dec 16, 2009, at 5:43 AM, Marcia Cristina Cera wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am afraid I have been a little hasty!
</span><br>
<span class="quotelev1">&gt; I remake my tests with more care and I got the same error also with the 1.3.3 :-/
</span><br>
<span class="quotelev1">&gt; but in such version the error happens after some successful executions... because of that I did not realize before!
</span><br>
<span class="quotelev1">&gt; Furthermore, I increased the number of levels of the tree (that means have more concurrently dynamic process creations in the lower levels) and I never arrive to execute without error, unless I add the delay. 
</span><br>
<span class="quotelev1">&gt; Perhaps the problem might even be a race condition :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I test with LAM/MPI 7.1.4 and in a first moment it works fine. I have work with LAM for years, but I migrate o OpenMP last year once LAM will be discontinued... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that I can continue the development of my application adding the delay, while I wait for a release... and I leave the performance tests to be made in the future :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you again Ralph,
</span><br>
<span class="quotelev1">&gt; m&#225;rcia.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 16, 2009 at 2:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Okay, I can replicate this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: your  test program works fine with the OMPI trunk and 1.3.3. It only has a problem with 1.4. Since I can replicate it on multiple machines every single time, I don't think it is actually a race condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think someone made a change to the 1.4 branch that created a failure mode :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will have to get back to you on this - may take awhile, and won't be in the 1.4.1 release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the replicator!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 8:35 AM, Marcia Cristina Cera wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will use the 1.3.3 for now... 
</span><br>
<span class="quotelev2">&gt;&gt; while waiting for a future fix release that break this race condiction.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; m&#225;rcia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Dec 15, 2009 at 12:58 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks to me like it is a race condition, and the timing between 1.3.3 and 1.4 is just enough to trip it. I can break the race, but it will have to be in a future fix release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Meantime, your best bet is to either stick with 1.3.3 or add the delay.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2009, at 5:51 AM, Marcia Cristina Cera wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I intend to develop an application using the MPI_Comm_spawn to create dynamically new MPI tasks (or processes). 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The structure of the program is like a tree: each node creates 2 new ones until reaches a predefined number of levels.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I developed a small program to explain my problem as can be seen in attachment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- start.c: launches (through MPI_Comm_spawn, in which the argv has the level value) the root of the tree (a ch_rec program). Afterward spawn, a message is sent to  child and the process block in an MPI_Recv.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- ch_rec.c: gets its level value and receives the parent message, then if its level is less than a predefined limit, it will creates 2 children: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - set the level value;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - spawn 1 child;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - send a message;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - call an MPI_Irecv;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - repeat the 4 previous steps for the second child;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         - call an MPI_Waitany waiting for children returns.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When children messages are received, the process send a message to its parent and call MPI_Finalize.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the openmpi-1.3.3 version the program runs as expected but with openmpi-1.4 I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 1 start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent sent: level 0 (pid:4279)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; level = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parent sent: level 1 (pid:4281)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [xiru-8.portoalegre.grenoble.grid5000.fr:04278] [[42824,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 758
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error happens when my program try to launch the second child immediately after the first spawn call. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my tests I try to put an sleep of 2 second between the first and the second spawn, and then the program runs as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some one can help me with this version 1.4 bug? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m&#225;rcia.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;spawn-problem.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11560.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="11558.php">Jeff Squyres: "Re: [OMPI users] [visit-developers] /usr/bin/ld: cannot find-lrdmacm on 9184"</a>
<li><strong>In reply to:</strong> <a href="11555.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11564.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11564.php">Marcia Cristina Cera: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
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
