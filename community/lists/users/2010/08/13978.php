<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 20:59:21 2010" -->
<!-- isoreceived="20100812005921" -->
<!-- sent="Wed, 11 Aug 2010 17:59:16 -0700 (PDT)" -->
<!-- isosent="20100812005916" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="882595.83882.qm_at_web50802.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="OF423F416C.E0BE6D46-ON8525777C.0049417F-8525777C.004A8D1C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 20:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13979.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I (a single user) am running N separate MPI&#160; applications doing 1 to N broadcasts over PVM, each MPI application is started on each machine simultaneously by PVM - the reasons are back in the post history.
<br>
<p>The problem is that they somehow collide - yes I know this should not happen, the question is why.
<br>
<p>--- On Wed, 11/8/10, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
<br>
<p>From: Richard Treumann &lt;treumann_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Wednesday, 11 August, 2010, 11:34 PM
<br>
<p><p>Randolf 

<br>
<p>I am confused about using multiple,
concurrent mpirun operations. &#160;If there are M uses of mpirun and each
starts N tasks (carried out under pvm or any other way) I would expect
you to have M completely independent MPI jobs with N tasks (processes)
each. &#160;You could have some root in each of the M MPI jobs do an MPI_Bcast
to the other N-1) in that job but there is no way in MPI (without using
accept.connect) to get tasks of job 0 to give data to tasks of jobs 1-(m-1).

<br>
<p>With M uses of mpirun, you have M worlds
that are forever isolated from the other M-1 worlds (again, unless you
do accept/connect)

<br>
<p>In what sense are you treating this
as an single MxN application? &#160; ( I use M &amp; N to keep them distinct.
I assume if M == N, we have your case)

<br>
<p><p>Dick Treumann &#160;- &#160;MPI Team
&#160; &#160; &#160; &#160; &#160; 
<br>
<p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13978/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13979.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13977.php">Eugene Loh: "Re: [OMPI users] Hyper-thread architecture effect on MPI jobs"</a>
<li><strong>In reply to:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
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
