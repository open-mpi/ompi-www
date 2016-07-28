<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 08:39:49 2010" -->
<!-- isoreceived="20100226133949" -->
<!-- sent="Fri, 26 Feb 2010 06:39:44 -0700" -->
<!-- isosent="20100226133944" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="71d2d8cc1002260539s57e40de0h84d69307d639f587_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b88e40561002260110y74f4ebabhb59c30b9233aeac2_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 08:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12167.php">Tobias MÃ¼ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Previous message:</strong> <a href="12165.php">Oliver Ford: "[OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No known limitations of which we are aware...the variables are all set to
<br>
int32_t, so INT32_MAX would be the only limit I can imagine. In which case,
<br>
you'll run out of memory long before you hit it.
<br>
<p><p>2010/2/26 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; HI !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; have you ever did some analysis to understand if there is a limitation in
</span><br>
<span class="quotelev1">&gt; the number of nodes usable with OpenMPI-v1.4 ?
</span><br>
<span class="quotelev1">&gt; Using also the functions MPI_Comm_spawn o MPI_Comm_spawn_multiple.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    Federico
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12167.php">Tobias MÃ¼ller: "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Previous message:</strong> <a href="12165.php">Oliver Ford: "[OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12164.php">Federico Golfr&#232; Andreasi: "[OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12169.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
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
