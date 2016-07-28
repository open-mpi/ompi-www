<?
$subject_val = "Re: [OMPI users] Force mpirun to only run under gridengine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 18:13:36 2013" -->
<!-- isoreceived="20130604221336" -->
<!-- sent="Tue, 4 Jun 2013 15:13:30 -0700" -->
<!-- isosent="20130604221330" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Force mpirun to only run under gridengine" -->
<!-- id="CAMD57ofOY6z9===A3O0j1BjUp1Dxd5QQ+jJVwiuSQJwWCMheiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8A280533-C144-4AA7-A470-7FCEFF5976B0_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Force mpirun to only run under gridengine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 18:13:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22027.php">Murthy, Mahalakshmi (GE Global Research, consultant): "[OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22025.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="22024.php">Reuti: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, current releases do not have a way of prohibiting user-override of MCA
<br>
params, so a user could indeed circumvent the directive to require an
<br>
allocation. The original intent of the parameter was to close a hole that
<br>
allowed users to mistakenly overload the head node of a cluster by
<br>
forgetting to get an allocation prior to running the job. It was not
<br>
intended to stop someone from deliberately violating that rule.
<br>
<p>The devel trunk currently does contain the ability for a system admin to
<br>
specify parameters that cannot be overridden by the user. This helps the
<br>
situation, but a user could still build there own version of OMPI and
<br>
bypass those specifications.
<br>
<p>Bottom line: if a user is determined to violate the rule, there isn't much
<br>
we (the OMPI community) can do about it :-(
<br>
<p><p><p>On Tue, Jun 4, 2013 at 11:48 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Am 04.06.2013 um 20:38 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is an Mca param to require an allocation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this can be requested (or not) at execution time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even a decicated compilation with a builtin test of an allocation won't
</span><br>
<span class="quotelev1">&gt; give the intended effect, as someone could use his own compilation of Open
</span><br>
<span class="quotelev1">&gt; MPI in his home directory with his own options - even the binaries could
</span><br>
<span class="quotelev1">&gt; have been compiled on a different machine (hence putting a test there
</span><br>
<span class="quotelev1">&gt; inside also won't work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe a better way would be to check the running processes and remove
</span><br>
<span class="quotelev1">&gt; `mpiexec`s by a cronjob - unless some renames a copy of `mpiexec`...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my iPhone
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 4, 2013, at 11:18 AM, Orion Poplawski &lt;orion_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'd like to be able to force mpirun to require being run under a
</span><br>
<span class="quotelev1">&gt; gridengine environment.  Any ideas on how to achieve this, if possible?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Orion Poplawski
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22027.php">Murthy, Mahalakshmi (GE Global Research, consultant): "[OMPI users] openmpi-lsb_launch failed"</a>
<li><strong>Previous message:</strong> <a href="22025.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>In reply to:</strong> <a href="22024.php">Reuti: "Re: [OMPI users] Force mpirun to only run under gridengine"</a>
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
