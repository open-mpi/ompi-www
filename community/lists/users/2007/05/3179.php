<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 06:55:19 2007" -->
<!-- isoreceived="20070502105519" -->
<!-- sent="Wed, 02 May 2007 12:55:11 +0200" -->
<!-- isosent="20070502105511" -->
<!-- name="Ole Holm Nielsen" -->
<!-- email="Ole.H.Nielsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="46386E0F.2050204_at_fysik.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C25DC57E.2ABF%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ole Holm Nielsen (<em>Ole.H.Nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 06:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; We would consider it a &quot;feature&quot; that OpenMPI is integrated with Torque. We
</span><br>
<span class="quotelev1">&gt; actually read the PBS_NODEFILE internally ourselves. I believe the problem
</span><br>
<span class="quotelev1">&gt; here is that specifying the &quot;machinefile&quot; prevents us from using that
</span><br>
<span class="quotelev1">&gt; Torque-integrated code and forces us down a different code path that doesn't
</span><br>
<span class="quotelev1">&gt; correctly interpret the PBS_NODEFILE format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We probably should consider your observation a &quot;bug&quot; - frankly, it wasn't
</span><br>
<span class="quotelev1">&gt; something anyone anticipated a user ever doing, so nobody I know of ever
</span><br>
<span class="quotelev1">&gt; tested it. I'd have to dig into the internals to understand how you wound up
</span><br>
<span class="quotelev1">&gt; in that particular error mode.
</span><br>
<p>I'd say that this behavior of mpirun under Torque TM should be considered as
<br>
a bug. Ideally, users should not have to design their scripts differently
<br>
according to whether the sysadmin decided to configure in TM or not.
<br>
Also, for interactive tests one doesn't have TM.  I think that mpirun just
<br>
ought to work no matter what...
<br>
<p>So I'd strongly propose that &quot;-machinefile&quot; should at least be tolerated
<br>
when mpirun executes under TM.  You might issue a warning about -machinefile
<br>
being ignored under TM, but the code should never bomb out, IMHO.
<br>
Such behavior would be much easier for users (and sysadmins :-) to
<br>
understand than the present situation.
<br>
<p>Thanks again,
<br>
Ole
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>Previous message:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3178.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
