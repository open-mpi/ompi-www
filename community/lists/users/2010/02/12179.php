<?
$subject_val = "Re: [OMPI users] Number of processes and spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 09:57:21 2010" -->
<!-- isoreceived="20100227145721" -->
<!-- sent="Sat, 27 Feb 2010 07:57:11 -0700" -->
<!-- isosent="20100227145711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of processes and spawn" -->
<!-- id="B1DB62BB-5E7A-42D8-9ED9-46E2C1DEEEE0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="b88e40561002270547s75da2349rcdada31ba99c21_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-02-27 09:57:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12180.php">Hammad Siddiqi: "[OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12178.php">Rodolfo Chua: "[OMPI users] LAMMPS (openMPI)"</a>
<li><strong>In reply to:</strong> <a href="12176.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, thanks. It's the same problem as the other person encountered. Basically, it looks to OMPI as if you are launching &gt; 128 independent app contexts, and our arrays were limited to 128.
<br>
<p>He has provided a patch that I'll review (couple of things I'd rather change) and then apply to our developer's trunk. I would expect it to migrate over to the 1.4 release series at some point (can't guarantee which one).
<br>
<p><p>On Feb 27, 2010, at 6:47 AM, Federico Golfr&#232; Andreasi wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program is executed as one application on 129 cpus defined by the hostfile. 
</span><br>
<span class="quotelev1">&gt; Than rank 0, inside the code, execute another program with 129 cpus, with a one-to-one relation, rank0 of the spawined process runs on the same host of rank0 of the spawning one and so on...
</span><br>
<span class="quotelev1">&gt; Excuting the spawning program does not give any problem,
</span><br>
<span class="quotelev1">&gt; but in the moment of spawning (with more than 128 cpus) it holds. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you!
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
<span class="quotelev1">&gt; 2010/2/27 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Since another user was doing something that caused a similar problem, perhaps we are missing a key piece of info here. Are you launching one app_context across 128 nodes? Or are you launching 128 app_contexts, each on a separate node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 26, 2010, at 10:23 AM, Federico Golfr&#232; Andreasi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm doing some tests and it seems that is not able to do a spawn multiple with more than 128 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It just hold, with no error message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What do you think? What can I try to understand the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2010/2/26 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No known limitations of which we are aware...the variables are all set to int32_t, so INT32_MAX would be the only limit I can imagine. In which case, you'll run out of memory long before you hit it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2010/2/26 Federico Golfr&#232; Andreasi &lt;federico.golfre_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HI !
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; have you ever did some analysis to understand if there is a limitation in the number of nodes usable with OpenMPI-v1.4 ?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12180.php">Hammad Siddiqi: "[OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12178.php">Rodolfo Chua: "[OMPI users] LAMMPS (openMPI)"</a>
<li><strong>In reply to:</strong> <a href="12176.php">Federico Golfr&#232; Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12186.php">Federico Golfrè Andreasi: "Re: [OMPI users] Number of processes and spawn"</a>
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
