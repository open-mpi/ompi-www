<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 12:23:06 2010" -->
<!-- isoreceived="20100226172306" -->
<!-- sent="Fri, 26 Feb 2010 18:23:01 +0100" -->
<!-- isosent="20100226172301" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="b88e40561002260923l7411e7a3p15aceb28d7a76c96_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc1002260539s57e40de0h84d69307d639f587_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of processes and spawn<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 12:23:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12170.php">Rodolfo Chua: "[OMPI users] openMPI (multiple CPUs)"</a>
<li><strong>Previous message:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>In reply to:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm doing some tests and it seems that is not able to do a spawn multiple
<br>
with more than 128 nodes.
<br>
<p>It just hold, with no error message.
<br>
<p>What do you think? What can I try to understand the problem.
<br>
<p>Thanks,
<br>
<p>Federico
<br>
<p><p><p><p>2010/2/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; No known limitations of which we are aware...the variables are all set to
</span><br>
<span class="quotelev1">&gt; int32_t, so INT32_MAX would be the only limit I can imagine. In which case,
</span><br>
<span class="quotelev1">&gt; you'll run out of memory long before you hit it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/2/26 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; have you ever did some analysis to understand if there is a limitation in
</span><br>
<span class="quotelev2">&gt;&gt; the number of nodes usable with OpenMPI-v1.4 ?
</span><br>
<span class="quotelev2">&gt;&gt; Using also the functions MPI_Comm_spawn o MPI_Comm_spawn_multiple.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    Federico
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12170.php">Rodolfo Chua: "[OMPI users] openMPI (multiple CPUs)"</a>
<li><strong>Previous message:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>In reply to:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12173.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
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
