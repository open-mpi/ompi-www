<?
$subject_val = "Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 10:57:28 2012" -->
<!-- isoreceived="20121205155728" -->
<!-- sent="Wed, 5 Dec 2012 07:57:24 -0800" -->
<!-- isosent="20121205155724" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program" -->
<!-- id="CANjXV696J7jTVQuuNgF6+PssO4hoNJ_CXc_VRc6SL8e3KuBqGw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="73b832f0.ac85.13b6acb42aa.Coremail.yin_zhao_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-05 10:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20879.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>In reply to:</strong> <a href="20879.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you build openmpi with multithreading enabled?
<br>
<p>If not then that could be the problem.
<br>
<p>&nbsp;&nbsp;Brian
<br>
On Dec 5, 2012 3:20 AM, &quot;&#232;&#181;&#181;&#229;&#141;&#176;&quot; &lt;yin_zhao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a MPI_Isend/MPI_Recv problem in  a multi-thread program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the program:
</span><br>
<span class="quotelev1">&gt; *    The first machine* has one thread does some computation and call *
</span><br>
<span class="quotelev1">&gt; MPI_Isend *to send buffer to the second machine, and another thread is
</span><br>
<span class="quotelev1">&gt; always trying to*MPI_Recv* data from the second machine. And the first
</span><br>
<span class="quotelev1">&gt; thread will *MPI_Wait *its last *MPI_Isend *to complete before call *
</span><br>
<span class="quotelev1">&gt; MPI_Isend *again.
</span><br>
<span class="quotelev1">&gt; *    The second machine* does the exact same thing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then I got the result that :
</span><br>
<span class="quotelev1">&gt; *The first machine*:
</span><br>
<span class="quotelev1">&gt;     Thread* 0* : *MPI_Isend *data to *the second machine* successfully.
</span><br>
<span class="quotelev1">&gt; but blocked in *MPI_Wait *be! cause last *MPI_Isend *did not complete.
</span><br>
<span class="quotelev1">&gt;     Thread* 1* : try to *MPI_Recv* data from* the second machine*, but no
</span><br>
<span class="quotelev1">&gt; data and it blocked.
</span><br>
<span class="quotelev1">&gt; *The second machine*:
</span><br>
<span class="quotelev1">&gt;     Thread* 0* : *MPI_Isend *data to the first machine successfully. but
</span><br>
<span class="quotelev1">&gt; blocked in *MPI_Wait *because last *MPI_Isend *did not complete.
</span><br>
<span class="quotelev1">&gt;     Thread* 1* : try to *MPI_Recv* data from *the first machine*, but no
</span><br>
<span class="quotelev1">&gt; data and it blocked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas?   I appreciated it very much, because I have
</span><br>
<span class="quotelev1">&gt; tracked the problem for two days but no progress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eason Zhao
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20881.php">Konz, Jeffrey (SSA Solution Centers): "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Previous message:</strong> <a href="20879.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
<li><strong>In reply to:</strong> <a href="20879.php">&#213;&#212;&#211;&#161;: "[OMPI users] MPI_Isend/MPI_Recv problem in a multi-thread program"</a>
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
