<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 02:50:13 2010" -->
<!-- isoreceived="20100227075013" -->
<!-- sent="Sat, 27 Feb 2010 00:50:04 -0700" -->
<!-- isosent="20100227075004" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="38FCDB56-52A2-4673-8945-0B64C547361D_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="b88e40561002260923l7411e7a3p15aceb28d7a76c96_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-02-27 02:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12174.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Previous message:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12169.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since another user was doing something that caused a similar problem, perhaps we are missing a key piece of info here. Are you launching one app_context across 128 nodes? Or are you launching 128 app_contexts, each on a separate node?
<br>
<p><p>On Feb 26, 2010, at 10:23 AM, Federico Golfr&#232; Andreasi wrote:
<br>
<p><span class="quotelev1">&gt; I'm doing some tests and it seems that is not able to do a spawn multiple with more than 128 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It just hold, with no error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think? What can I try to understand the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/2/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; No known limitations of which we are aware...the variables are all set to int32_t, so INT32_MAX would be the only limit I can imagine. In which case, you'll run out of memory long before you hit it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/2/26 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; HI !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; have you ever did some analysis to understand if there is a limitation in the number of nodes usable with OpenMPI-v1.4 ?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12174.php">Oliver Ford: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>Previous message:</strong> <a href="12172.php">Ralph Castain: "Re: [OMPI users] Segfault in mca_odls_default.so with &gt; ~100 process."</a>
<li><strong>In reply to:</strong> <a href="12169.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="12176.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
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
