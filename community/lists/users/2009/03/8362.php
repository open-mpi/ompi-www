<?
$subject_val = "Re: [OMPI users] on-the-fly nodes liberation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 09:28:32 2009" -->
<!-- isoreceived="20090309132832" -->
<!-- sent="Mon, 9 Mar 2009 14:28:27 +0100" -->
<!-- isosent="20090309132827" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="Re: [OMPI users] on-the-fly nodes liberation" -->
<!-- id="6546e7be0903090628u7b7ae89o2cd65b3ca117b732_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="29069B92-7F8E-4DBB-8EF0-9CB36CEAFA9E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] on-the-fly nodes liberation<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 09:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8363.php">Sangamesh B: "[OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Previous message:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In fact I am running my dynamic or malleable MPI application as a single
<br>
job, which is able to increase and decrease its  amount of nodes/processors
<br>
at runtime. I am using the OAR resource manager to launch and provide
<br>
resource availability information to the application.
<br>
<p>My question concern in know if there is a safety way to stop some orted
<br>
deamon without affect the remain processes of my dynamic application.
<br>
According to Ralph answer, it is currently impossible.
<br>
<p>thank for your help.
<br>
m&#225;rcia
<br>
<p><p>On Mon, Mar 9, 2009 at 1:56 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 09.03.2009 um 13:28 schrieb Marcia Cristina Cera:- Show quoted text -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  May I sign one orted daemon to finish its execution on-the-fly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Context: I intend to use OpenMPI in a dynamic resource environment as I
</span><br>
<span class="quotelev2">&gt;&gt; did with LAM/MPI helped by lamgrow and lamshrink commands.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To perform grow operations (increase the amount of nodes/resources
</span><br>
<span class="quotelev2">&gt;&gt; on-the-fly) OpenMPI enable an incremental resource utilization. All nodes
</span><br>
<span class="quotelev2">&gt;&gt; that can be used are listed in the hostifile file (inform as mpirun
</span><br>
<span class="quotelev2">&gt;&gt; parameter) and according to they are firstly used through MPI_Comm_spawn one
</span><br>
<span class="quotelev2">&gt;&gt; orded daemon is created in each node. According to some first tests, this
</span><br>
<span class="quotelev2">&gt;&gt; feature is enough to satisfy our goals.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the other hand, performing shrink operations, we need to liberate nodes
</span><br>
<span class="quotelev2">&gt;&gt; to be eventually used by other application/jobs. In other words, we must
</span><br>
<span class="quotelev2">&gt;&gt; terminate all applications processes and also the orted daemon. In the
</span><br>
<span class="quotelev2">&gt;&gt; application side, the solution is easy once we can notify the processes (by
</span><br>
<span class="quotelev2">&gt;&gt; a message or signal) to safety finish its execution and perform
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize. In the orted side, we must finish its execution in the target
</span><br>
<span class="quotelev2">&gt;&gt; node and also update its status to 'INVALID'.
</span><br>
<span class="quotelev2">&gt;&gt; How may I do it? Is there a specific signal or procedure to this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how are you running your applications usually? This looks like you are
</span><br>
<span class="quotelev1">&gt; running all the jobs without any queuing system. If you had one, it would
</span><br>
<span class="quotelev1">&gt; mean to drain the nodes to exclude (if you want to have a graceful shutdown
</span><br>
<span class="quotelev1">&gt; of the already running jobs) and don't schedule any jobs to this node
</span><br>
<span class="quotelev1">&gt; further on. Or just kill all jobs running on this node which should be
</span><br>
<span class="quotelev1">&gt; excluded - of course, you might lose the computing time spent on this node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you in advance!
</span><br>
<span class="quotelev2">&gt;&gt; m&#225;rcia.
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
<span class="quotelev1">&gt; - Show quoted text -
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8362/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8363.php">Sangamesh B: "[OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>Previous message:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
<li><strong>In reply to:</strong> <a href="8361.php">Reuti: "Re: [OMPI users] on-the-fly nodes liberation"</a>
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
