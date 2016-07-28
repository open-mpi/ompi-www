<?
$subject_val = "Re: [OMPI users] mpirun and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 23:41:41 2016" -->
<!-- isoreceived="20160608034141" -->
<!-- sent="Tue, 7 Jun 2016 20:41:37 -0700" -->
<!-- isosent="20160608034137" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun and Torque" -->
<!-- id="B48D8438-CCD8-4061-A637-544593A213CF_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="ce03ba14-86e9-e56c-9de9-626acf4e1977_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun and Torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 23:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>In reply to:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that mpirun will not direct-launch the applications under Torque. This is done for wireup support - if/when Torque natively supports PMIx, then we could revisit that design.
<br>
<p>Gilles: the benefit is two-fold:
<br>
<p>* Torque has direct visibility of the application procs. When we launch via orted, Torque only sees the orted&#146;s and has no idea what is actually going on. This can be an issue for accounting, but also generally causes confusion over qsub options vs what mpirun does
<br>
<p>* one less daemon running on the node =&gt; less jitter and performance impact on the app
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Jun 7, 2016, at 5:49 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iirc, and under torque when Open MPI is configure'd with --with -tm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (this is the default, so assuming your torque headers/libs can be found, you do not even have to specify --with-tm), mpirun does tm_spawn the orted daemon on all nodes except the current one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then mpirun and orted will fork and exec sleep 60.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i do not think it is possible to have mpirun tm_spawn sleep 60.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generally speaking, mpirun is used to run MPI apps, and some wiring is needed to correctly initialize MPI, hence the need for orted daemons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; direct launch is an option, but it does require some kind of support from the batch manager.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for example, under slurm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun --resv-ports a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (i do not think that is possible any more though)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; srun --mpi={pmi,pmi2,pmix(?)} a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but i am not aware of a PMIx server inside torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out of curiosity, what would be the benefit of tm_spawn the tasks (sleep 60) instead or orted ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/8/2016 9:01 AM, Ken Nielson wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi version 1.10.2 with Torque 6.0.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I launch a job with the following syntax:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      qsub -L tasks=2:lprocs=2:maxtpn=1 -I
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This starts an interactive job which is using two nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I then use mpirun as follows from the command line of the interactive job.
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;      mpirun -np 4 sleep 60
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I would like to see happen is a call made to tm_spawn for each sleep for each node. That would be two per node. Instead I get a single tm_spawn request which launches mpirun and mpirun launches the two sleep processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a command line to direct mpi run to call tm_spawn for each count in np?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://www.adaptivecomputing.com/">http://www.adaptivecomputing.com/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;<a href="http://twitter.com/AdaptiveMoab">http://twitter.com/AdaptiveMoab</a>&gt;   &lt;<a href="http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits">http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits</a>&gt;   &lt;<a href="http://www.youtube.com/adaptivecomputing">http://www.youtube.com/adaptivecomputing</a>&gt;   &lt;<a href="https://plus.google.com/u/0/102155039310685515037/posts">https://plus.google.com/u/0/102155039310685515037/posts</a>&gt;   &lt;<a href="http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts">http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts</a>&gt;                                                             &lt;<a href="http://www.adaptivecomputing.com/feed">http://www.adaptivecomputing.com/feed</a>&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; Ken Nielson Sr. Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; +1 801.717.3700 office    +1 801.717.3738 fax
</span><br>
<span class="quotelev2">&gt;&gt; 1712 S. East Bay Blvd, Suite 300     Provo, UT 84606 
</span><br>
<span class="quotelev2">&gt;&gt;  &lt;<a href="http://www.adaptivecomputing.com/">http://www.adaptivecomputing.com/</a>&gt;www.adaptivecomputing.com &lt;<a href="http://www.adaptivecomputing.com/">http://www.adaptivecomputing.com/</a>&gt;	
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29397.php">http://www.open-mpi.org/community/lists/users/2016/06/29397.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/06/29397.php">http://www.open-mpi.org/community/lists/users/2016/06/29397.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29398.php">http://www.open-mpi.org/community/lists/users/2016/06/29398.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29400.php">Maxim Reshetnyak: "[OMPI users] hybrid MPI/OpenMP C++ code without acceleration in OpenMP mode"</a>
<li><strong>Previous message:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>In reply to:</strong> <a href="29398.php">Gilles Gouaillardet: "Re: [OMPI users] mpirun and Torque"</a>
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
