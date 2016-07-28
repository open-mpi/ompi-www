<?
$subject_val = "Re: [OMPI users] error performing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 10:36:18 2009" -->
<!-- isoreceived="20091215153618" -->
<!-- sent="Tue, 15 Dec 2009 13:35:53 -0200" -->
<!-- isosent="20091215153553" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error performing MPI_Comm_spawn" -->
<!-- id="6546e7be0912150735y779f6d59v5f2bf8cf10ec7bab_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E21D1CD-2773-49AA-B9EB-0EE7D8142B90_at_open-mpi.org" -->
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
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 10:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph
<br>
<p>I will use the 1.3.3 for now...
<br>
while waiting for a future fix release that break this race condiction.
<br>
<p>m&#225;rcia
<br>
<p>On Tue, Dec 15, 2009 at 12:58 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks to me like it is a race condition, and the timing between 1.3.3 and
</span><br>
<span class="quotelev1">&gt; 1.4 is just enough to trip it. I can break the race, but it will have to be
</span><br>
<span class="quotelev1">&gt; in a future fix release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meantime, your best bet is to either stick with 1.3.3 or add the delay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 5:51 AM, Marcia Cristina Cera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I intend to develop an application using the MPI_Comm_spawn to create
</span><br>
<span class="quotelev1">&gt; dynamically new MPI tasks (or processes).
</span><br>
<span class="quotelev1">&gt; The structure of the program is like a tree: each node creates 2 new ones
</span><br>
<span class="quotelev1">&gt; until reaches a predefined number of levels.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I developed a small program to explain my problem as can be seen in
</span><br>
<span class="quotelev1">&gt; attachment.
</span><br>
<span class="quotelev1">&gt; -- start.c: launches (through MPI_Comm_spawn, in which the argv has the
</span><br>
<span class="quotelev1">&gt; level value) the root of the tree (a ch_rec program). Afterward spawn, a
</span><br>
<span class="quotelev1">&gt; message is sent to  child and the process block in an MPI_Recv.
</span><br>
<span class="quotelev1">&gt; -- ch_rec.c: gets its level value and receives the parent message, then if
</span><br>
<span class="quotelev1">&gt; its level is less than a predefined limit, it will creates 2 children:
</span><br>
<span class="quotelev1">&gt;         - set the level value;
</span><br>
<span class="quotelev1">&gt;         - spawn 1 child;
</span><br>
<span class="quotelev1">&gt;         - send a message;
</span><br>
<span class="quotelev1">&gt;         - call an MPI_Irecv;
</span><br>
<span class="quotelev1">&gt;         - repeat the 4 previous steps for the second child;
</span><br>
<span class="quotelev1">&gt;         - call an MPI_Waitany waiting for children returns.
</span><br>
<span class="quotelev1">&gt; When children messages are received, the process send a message to its
</span><br>
<span class="quotelev1">&gt; parent and call MPI_Finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the openmpi-1.3.3 version the program runs as expected but with
</span><br>
<span class="quotelev1">&gt; openmpi-1.4 I get the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 start
</span><br>
<span class="quotelev1">&gt; level 0
</span><br>
<span class="quotelev1">&gt; level = 1
</span><br>
<span class="quotelev1">&gt; Parent sent: level 0 (pid:4279)
</span><br>
<span class="quotelev1">&gt; level = 2
</span><br>
<span class="quotelev1">&gt; Parent sent: level 1 (pid:4281)
</span><br>
<span class="quotelev1">&gt; [xiru-8.portoalegre.grenoble.grid5000.fr:04278] [[42824,0],0]
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 758
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error happens when my program try to launch the second child
</span><br>
<span class="quotelev1">&gt; immediately after the first spawn call.
</span><br>
<span class="quotelev1">&gt; In my tests I try to put an sleep of 2 second between the first and the
</span><br>
<span class="quotelev1">&gt; second spawn, and then the program runs as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some one can help me with this version 1.4 bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; m&#225;rcia.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;spawn-problem.tar.gz&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11542/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11543.php">Katz, Jacob: "Re: [OMPI users] How to detect a failure to start-up and MPI_Init()?"</a>
<li><strong>Previous message:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11552.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
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
