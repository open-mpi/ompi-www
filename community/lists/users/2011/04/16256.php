<?
$subject_val = "Re: [OMPI users] Condor and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 09:44:17 2011" -->
<!-- isoreceived="20110415134417" -->
<!-- sent="Fri, 15 Apr 2011 07:44:06 -0600" -->
<!-- isosent="20110415134406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Condor and MPI" -->
<!-- id="2C37B6DE-0CEF-4054-8E50-A1E9260FBE03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5A6286D-F5C0-45DB-8DFA-F1FF1CA9828B_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 09:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>In reply to:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2011, at 2:59 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 15.04.2011 um 07:25 schrieb Asad Ali:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. The entire job gets restarted. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; maybe this is caused by a signal sent to the job by Condor, so that it gets terminated and as a result Condor restarts it. Can you trap the signals in your appliaction for a test?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If so, you had best talk to the Condor folks - it has nothing to do with Open MPI, but is due to a job control flag you are passing to Condor.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have talked to them several times. But most of the cluster users are non-mpi users and thus they don't have much knowledge about the configuration of MPI with Condor.
</span><br>
<span class="quotelev2">&gt;&gt; If you know any person who uses Condor for running MPI jobs then please let me know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the use of Open MPI supported by Condor? In former times they had a special universe for MPICH(1) and only for an older version to run parallel jobs under Condor. Did this change?
</span><br>
<p>See <a href="https://bugzilla.redhat.com/show_bug.cgi?id=537232">https://bugzilla.redhat.com/show_bug.cgi?id=537232</a>
<br>
<p>At one time, it appears such a script existed. You might start with the one offered here, and/or check on the web for updates.
<br>
<p>I would also go to the Condor web site:
<br>
<p><a href="http://www.cs.wisc.edu/condor/">http://www.cs.wisc.edu/condor/</a>
<br>
<p>A search for &quot;openmpi&quot; revealed several presentations on how to make this work.
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Asad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 14, 2011, at 6:37 PM, Asad Ali wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using Condor to run my MPI jobs on a large cluster of nodes. The jobs run fine but after sometimes they automatically get restarted. What can be the reason?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Asad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;A Bayesian is one who, vaguely expecting a horse, and catching a glimpse of a donkey, strongly believes he has seen a mule.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;A Bayesian is one who, vaguely expecting a horse, and catching a glimpse of a donkey, strongly believes he has seen a mule.&quot;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>In reply to:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
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
