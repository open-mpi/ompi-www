<?
$subject_val = "Re: [OMPI users] Condor and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 05:00:04 2011" -->
<!-- isoreceived="20110415090004" -->
<!-- sent="Fri, 15 Apr 2011 10:59:53 +0200" -->
<!-- isosent="20110415085953" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Condor and MPI" -->
<!-- id="F5A6286D-F5C0-45DB-8DFA-F1FF1CA9828B_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimvrPsL=cL3zJghDLhzrbnet3Fjww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Condor and MPI<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 04:59:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>In reply to:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Reply:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.04.2011 um 07:25 schrieb Asad Ali:
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; Yes. The entire job gets restarted. 
</span><br>
<p>maybe this is caused by a signal sent to the job by Condor, so that it gets terminated and as a result Condor restarts it. Can you trap the signals in your appliaction for a test?
<br>
<p><p><span class="quotelev1">&gt; If so, you had best talk to the Condor folks - it has nothing to do with Open MPI, but is due to a job control flag you are passing to Condor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have talked to them several times. But most of the cluster users are non-mpi users and thus they don't have much knowledge about the configuration of MPI with Condor.
</span><br>
<span class="quotelev1">&gt; If you know any person who uses Condor for running MPI jobs then please let me know.
</span><br>
<p>Is the use of Open MPI supported by Condor? In former times they had a special universe for MPICH(1) and only for an older version to run parallel jobs under Condor. Did this change?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Asad
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2011, at 6:37 PM, Asad Ali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using Condor to run my MPI jobs on a large cluster of nodes. The jobs run fine but after sometimes they automatically get restarted. What can be the reason?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Asad
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;A Bayesian is one who, vaguely expecting a horse, and catching a glimpse of a donkey, strongly believes he has seen a mule.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  &quot;A Bayesian is one who, vaguely expecting a horse, and catching a glimpse of a donkey, strongly believes he has seen a mule.&quot;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Previous message:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>In reply to:</strong> <a href="16253.php">Asad Ali: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Reply:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
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
