<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 13:02:06 2010" -->
<!-- isoreceived="20100812170206" -->
<!-- sent="Thu, 12 Aug 2010 13:03:19 -0400" -->
<!-- isosent="20100812170319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="783EEBFF-4392-42D9-A650-C72F4912EB82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF85783F48.8399816E-ON8525777D.00494716-8525777D.004A696E_at_us.ibm.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 13:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13992.php">Ralph Castain: "Re: [OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>In reply to:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dick / all --
<br>
<p>I just had a phone call with Ralph Castain who has had some additional off-list mails with Randolph.  Apparently, none of us understand the model that is being used here.  There are also apparently some confidentiality issues involved such that it might be difficult to publicly state enough information to allow the open community to understand, diagnose, and fix the issue.  So I'm not quite sure how to proceed here -- I'm afraid that I don't have the time or resources for private problem resolution in an unorthodox situation like this.
<br>
<p>For example, I was under the impression that PVM was solely being used as a launcher.  This is apparently not the case -- the original code is a PVM job that has been modified to eventually call MPI_INIT.  I don't know how much more I can say on this open list.
<br>
<p>Hence, I'm throughly confused as to the model that is being used at this point.  I don't think I can offer any further help unless a small [non-PVM] example is provided to the community that can show the problem.
<br>
<p>I also asked a bunch of questions in a prior post that would be helpful to have answered before going further.
<br>
<p>Sorry!  :-(
<br>
<p><p><p>On Aug 12, 2010, at 9:32 AM, Richard Treumann wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You said  &quot;separate MPI  applications doing 1 to &gt; N broadcasts over PVM&quot;.  You do not mean you are using pvm_bcast though - right? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If these N MPI applications are so independent that you could run one at a time or run them on N different clusters and still get the result you want (not the time to solution) then I cannot imagine how there could be cross talk.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been assuming that when you describe this as an NxN problem, you mean there is some desired interaction among the N MPI worlds.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I have misunderstood and the N MPI worlds stared with N mpirun operations under PVM are each semantically independent of the other (N-1) then I am totally at a loss for an explanation. 
</span><br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 08/11/2010 08:59:16 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [image removed] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] MPI_Bcast issue 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Randolph Pullen 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; to: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 08/11/2010 09:01 PM 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sent by: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to Open MPI Users 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I (a single user) am running N separate MPI  applications doing 1 to
</span><br>
<span class="quotelev2">&gt; &gt; N broadcasts over PVM, each MPI application is started on each 
</span><br>
<span class="quotelev2">&gt; &gt; machine simultaneously by PVM - the reasons are back in the post history.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that they somehow collide - yes I know this should 
</span><br>
<span class="quotelev2">&gt; &gt; not happen, the question is why.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 11/8/10, Richard Treumann &lt;treumann_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Richard Treumann &lt;treumann_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_Bcast issue
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Received: Wednesday, 11 August, 2010, 11:34 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Randolf 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am confused about using multiple, concurrent mpirun operations.  
</span><br>
<span class="quotelev2">&gt; &gt; If there are M uses of mpirun and each starts N tasks (carried out 
</span><br>
<span class="quotelev2">&gt; &gt; under pvm or any other way) I would expect you to have M completely 
</span><br>
<span class="quotelev2">&gt; &gt; independent MPI jobs with N tasks (processes) each.  You could have 
</span><br>
<span class="quotelev2">&gt; &gt; some root in each of the M MPI jobs do an MPI_Bcast to the other 
</span><br>
<span class="quotelev2">&gt; &gt; N-1) in that job but there is no way in MPI (without using 
</span><br>
<span class="quotelev2">&gt; &gt; accept.connect) to get tasks of job 0 to give data to tasks of jobs 1-(m-1). 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; With M uses of mpirun, you have M worlds that are forever isolated 
</span><br>
<span class="quotelev2">&gt; &gt; from the other M-1 worlds (again, unless you do accept/connect) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In what sense are you treating this as an single MxN application?   
</span><br>
<span class="quotelev2">&gt; &gt; ( I use M &amp; N to keep them distinct. I assume if M == N, we have your case) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dick Treumann  -  MPI Team           
</span><br>
<span class="quotelev2">&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13994.php">Michael E. Thomadakis: "[OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<li><strong>Previous message:</strong> <a href="13992.php">Ralph Castain: "Re: [OMPI users] Separating output from multiple MPI processes"</a>
<li><strong>In reply to:</strong> <a href="13990.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
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
