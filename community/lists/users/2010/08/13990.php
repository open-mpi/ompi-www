<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 09:33:08 2010" -->
<!-- isoreceived="20100812133308" -->
<!-- sent="Thu, 12 Aug 2010 09:32:46 -0400" -->
<!-- isosent="20100812133246" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="OF85783F48.8399816E-ON8525777D.00494716-8525777D.004A696E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="882595.83882.qm_at_web50802.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 09:32:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>Previous message:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You said  &quot;separate MPI  applications doing 1 to &gt; N broadcasts over PVM&quot;. 
<br>
&nbsp;You do not mean you are using pvm_bcast though - right?
<br>
<p>If these N MPI applications are so independent that you could run one at a 
<br>
time or run them on N different clusters and still get the result you want 
<br>
(not the time to solution) then I cannot imagine how there could be cross 
<br>
talk. 
<br>
<p>I have been assuming that when you describe this as an NxN problem, you 
<br>
mean there is some desired interaction among the N MPI worlds. 
<br>
<p>If I have misunderstood and the N MPI worlds stared with N mpirun 
<br>
operations under PVM are each semantically independent of the other (N-1) 
<br>
then I am totally at a loss for an explanation.
<br>
<p>&nbsp;
<br>
Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 08/11/2010 08:59:16 PM:
<br>
<p><span class="quotelev1">&gt; [image removed] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolph Pullen 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 08/11/2010 09:01 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I (a single user) am running N separate MPI  applications doing 1 to
</span><br>
<span class="quotelev1">&gt; N broadcasts over PVM, each MPI application is started on each 
</span><br>
<span class="quotelev1">&gt; machine simultaneously by PVM - the reasons are back in the post 
</span><br>
history.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that they somehow collide - yes I know this should 
</span><br>
<span class="quotelev1">&gt; not happen, the question is why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Wed, 11/8/10, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Richard Treumann &lt;treumann_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Wednesday, 11 August, 2010, 11:34 PM
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Randolf 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am confused about using multiple, concurrent mpirun operations. 
</span><br>
<span class="quotelev1">&gt; If there are M uses of mpirun and each starts N tasks (carried out 
</span><br>
<span class="quotelev1">&gt; under pvm or any other way) I would expect you to have M completely 
</span><br>
<span class="quotelev1">&gt; independent MPI jobs with N tasks (processes) each.  You could have 
</span><br>
<span class="quotelev1">&gt; some root in each of the M MPI jobs do an MPI_Bcast to the other 
</span><br>
<span class="quotelev1">&gt; N-1) in that job but there is no way in MPI (without using 
</span><br>
<span class="quotelev1">&gt; accept.connect) to get tasks of job 0 to give data to tasks of jobs 
</span><br>
1-(m-1). 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With M uses of mpirun, you have M worlds that are forever isolated 
</span><br>
<span class="quotelev1">&gt; from the other M-1 worlds (again, unless you do accept/connect) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In what sense are you treating this as an single MxN application? 
</span><br>
<span class="quotelev1">&gt; ( I use M &amp; N to keep them distinct. I assume if M == N, we have your 
</span><br>
case) 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann  -  MPI Team 
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13990/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13991.php">Price, Brian M (N-KCI): "[OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>Previous message:</strong> <a href="13989.php">Shiqing Fan: "Re: [OMPI users] How to program with openmpi under MFC?"</a>
<li><strong>In reply to:</strong> <a href="13978.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13993.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
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
