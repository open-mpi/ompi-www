<?
$subject_val = "Re: [OMPI users] mpirun and Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 20:49:27 2016" -->
<!-- isoreceived="20160608004927" -->
<!-- sent="Wed, 8 Jun 2016 09:49:24 +0900" -->
<!-- isosent="20160608004924" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun and Torque" -->
<!-- id="ce03ba14-86e9-e56c-9de9-626acf4e1977_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADvLK3dG3dU=e+W8++c3niQk68AzegVWfdwjrM_1EJzL+ziKNA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-07 20:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<li><strong>In reply to:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Reply:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ken,
<br>
<p><p>iirc, and under torque when Open MPI is configure'd with --with -tm
<br>
<p>(this is the default, so assuming your torque headers/libs can be found, 
<br>
you do not even have to specify --with-tm), mpirun does tm_spawn the 
<br>
orted daemon on all nodes except the current one.
<br>
<p>then mpirun and orted will fork and exec sleep 60.
<br>
<p><p>i do not think it is possible to have mpirun tm_spawn sleep 60.
<br>
<p><p>generally speaking, mpirun is used to run MPI apps, and some wiring is 
<br>
needed to correctly initialize MPI, hence the need for orted daemons.
<br>
<p><p>direct launch is an option, but it does require some kind of support 
<br>
from the batch manager.
<br>
<p>for example, under slurm
<br>
<p>srun --resv-ports a.out
<br>
<p>(i do not think that is possible any more though)
<br>
<p>or
<br>
<p>srun --mpi={pmi,pmi2,pmix(?)} a.out
<br>
<p><p>but i am not aware of a PMIx server inside torque.
<br>
<p><p><p>out of curiosity, what would be the benefit of tm_spawn the tasks (sleep 
<br>
60) instead or orted ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 6/8/2016 9:01 AM, Ken Nielson wrote:
<br>
<span class="quotelev1">&gt; I am using openmpi version 1.10.2 with Torque 6.0.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I launch a job with the following syntax:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      qsub -L tasks=2:lprocs=2:maxtpn=1 -I
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This starts an interactive job which is using two nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then use mpirun as follows from the command line of the interactive job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4 sleep 60
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I would like to see happen is a call made to tm_spawn for each 
</span><br>
<span class="quotelev1">&gt; sleep for each node. That would be two per node. Instead I get a 
</span><br>
<span class="quotelev1">&gt; single tm_spawn request which launches mpirun and mpirun launches the 
</span><br>
<span class="quotelev1">&gt; two sleep processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a command line to direct mpi run to call tm_spawn for each 
</span><br>
<span class="quotelev1">&gt; count in np?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; Adaptive Computing &lt;<a href="http://www.adaptivecomputing.com">http://www.adaptivecomputing.com</a>&gt;
</span><br>
<span class="quotelev1">&gt; Twitter &lt;<a href="http://twitter.com/AdaptiveMoab">http://twitter.com/AdaptiveMoab</a>&gt; LinkedIn 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits">http://www.linkedin.com/company/448673?goback=.fcs_GLHD_adaptive+computing_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits</a>&gt; 
</span><br>
<span class="quotelev1">&gt; YouTube &lt;<a href="http://www.youtube.com/adaptivecomputing">http://www.youtube.com/adaptivecomputing</a>&gt; GooglePlus 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://plus.google.com/u/0/102155039310685515037/posts">https://plus.google.com/u/0/102155039310685515037/posts</a>&gt; Facebook 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts">http://www.facebook.com/pages/Adaptive-Computing/314449798572695?fref=ts</a>&gt; 
</span><br>
<span class="quotelev1">&gt; RSS &lt;<a href="http://www.adaptivecomputing.com/feed">http://www.adaptivecomputing.com/feed</a>&gt; 	
</span><br>
<span class="quotelev1">&gt; Ken Nielson Sr. Software Engineer
</span><br>
<span class="quotelev1">&gt; +1 801.717.3700 office +1 801.717.3738 fax
</span><br>
<span class="quotelev1">&gt; 1712 S. East Bay Blvd, Suite 300 Provo, UT 84606
</span><br>
<span class="quotelev1">&gt; www.adaptivecomputing.com &lt;<a href="http://www.adaptivecomputing.com">http://www.adaptivecomputing.com</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29397.php">http://www.open-mpi.org/community/lists/users/2016/06/29397.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Previous message:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<li><strong>In reply to:</strong> <a href="29397.php">Ken Nielson: "[OMPI users] mpirun and Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
<li><strong>Reply:</strong> <a href="29399.php">Ralph Castain: "Re: [OMPI users] mpirun and Torque"</a>
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
