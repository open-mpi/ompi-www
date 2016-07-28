<?
$subject_val = "Re: [OMPI users] Condor and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 01:25:56 2011" -->
<!-- isoreceived="20110415052556" -->
<!-- sent="Fri, 15 Apr 2011 17:25:50 +1200" -->
<!-- isosent="20110415052550" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Condor and MPI" -->
<!-- id="BANLkTimvrPsL=cL3zJghDLhzrbnet3Fjww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="028324D3-C218-4E39-9EF3-BA5EE3303F8A_at_open-mpi.org" -->
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
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 01:25:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>Previous message:</strong> <a href="16252.php">Derrick LIN: "[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>In reply to:</strong> <a href="16251.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Reply:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thank you for your reply.
<br>
<p>On Fri, Apr 15, 2011 at 1:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not much we can say with that little info. :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you using Open MPI? If so, what version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes. The version is  mpirun (Open MPI) 1.2.7rc2.
<br>
<p><p><p><span class="quotelev1">&gt; When you say the job gets restarted, do you mean that Condor restarts the
</span><br>
<span class="quotelev1">&gt; entire MPI job?
</span><br>
<p><p>Yes. The entire job gets restarted.
<br>
<p><p><span class="quotelev1">&gt; If so, you had best talk to the Condor folks - it has nothing to do with
</span><br>
<span class="quotelev1">&gt; Open MPI, but is due to a job control flag you are passing to Condor.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have talked to them several times. But most of the cluster users are
<br>
non-mpi users and thus they don't have much knowledge about the
<br>
configuration of MPI with Condor.
<br>
If you know any person who uses Condor for running MPI jobs then please let
<br>
me know.
<br>
<p>Cheers,
<br>
<p>Asad
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev2">&gt; &gt; I am using Condor to run my MPI jobs on a large cluster of nodes. The
</span><br>
<span class="quotelev1">&gt; jobs run fine but after sometimes they automatically get restarted. What can
</span><br>
<span class="quotelev1">&gt; be the reason?
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
<span class="quotelev2">&gt; &gt;  &quot;A Bayesian is one who, vaguely expecting a horse, and catching a
</span><br>
<span class="quotelev1">&gt; glimpse of a donkey, strongly believes he has seen a mule.&quot;
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
<p><p><p><pre>
-- 
 &quot;A Bayesian is one who, vaguely expecting a horse, and catching a glimpse
of a donkey, strongly believes he has seen a mule.&quot;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16253/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16254.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>Previous message:</strong> <a href="16252.php">Derrick LIN: "[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed)"</a>
<li><strong>In reply to:</strong> <a href="16251.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
<li><strong>Reply:</strong> <a href="16255.php">Reuti: "Re: [OMPI users] Condor and MPI"</a>
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
