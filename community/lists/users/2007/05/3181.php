<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 07:48:46 2007" -->
<!-- isoreceived="20070502114846" -->
<!-- sent="Wed, 02 May 2007 05:48:42 -0600" -->
<!-- isosent="20070502114842" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="C25DD6BA.2AC8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46386E0F.2050204_at_fysik.dtu.dk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-02 07:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess I am now totally confused, so I will have to ask your patience with
<br>
a few questions.
<br>
<p><p>On 5/2/07 4:55 AM, &quot;Ole Holm Nielsen&quot; &lt;Ole.H.Nielsen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We would consider it a &quot;feature&quot; that OpenMPI is integrated with Torque. We
</span><br>
<span class="quotelev2">&gt;&gt; actually read the PBS_NODEFILE internally ourselves. I believe the problem
</span><br>
<span class="quotelev2">&gt;&gt; here is that specifying the &quot;machinefile&quot; prevents us from using that
</span><br>
<span class="quotelev2">&gt;&gt; Torque-integrated code and forces us down a different code path that doesn't
</span><br>
<span class="quotelev2">&gt;&gt; correctly interpret the PBS_NODEFILE format.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We probably should consider your observation a &quot;bug&quot; - frankly, it wasn't
</span><br>
<span class="quotelev2">&gt;&gt; something anyone anticipated a user ever doing, so nobody I know of ever
</span><br>
<span class="quotelev2">&gt;&gt; tested it. I'd have to dig into the internals to understand how you wound up
</span><br>
<span class="quotelev2">&gt;&gt; in that particular error mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd say that this behavior of mpirun under Torque TM should be considered as
</span><br>
<span class="quotelev1">&gt; a bug. Ideally, users should not have to design their scripts differently
</span><br>
<span class="quotelev1">&gt; according to whether the sysadmin decided to configure in TM or not.
</span><br>
<span class="quotelev1">&gt; Also, for interactive tests one doesn't have TM.  I think that mpirun just
</span><br>
<span class="quotelev1">&gt; ought to work no matter what...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>In your prior notes, you indicated that you had in fact configured TM
<br>
support into OpenMPI. The issue, therefore, was that you were somehow
<br>
getting an error from TM indicating that the tm spawn command was unable to
<br>
launch our daemon on a specified node.
<br>
<p>Your comment above, however, talks about the problem of NOT having TM
<br>
configured into OpenMPI, even though you are running on a Torque-based
<br>
system. This is a significantly different scenario - could you please
<br>
clarify?
<br>
<p>BTW: We run interactive tests under TM all the time - there is no TM
<br>
requirement prohibiting you from this mode of operation. I would guess,
<br>
therefore, that this may be something your sysadmin has imposed.
<br>
<p>Given your comment, however, I must ask: did you get an allocation for the
<br>
nodes in your PBS_NODEFILE prior to executing mpirun??
<br>
<p>I need to know since your observed errors could easily be explained by an
<br>
attempt to execute on nodes that are not allocated to you. For example, if
<br>
you either used a PBS_NODEFILE from a prior (possibly batch) execution, or
<br>
created one yourself, Torque would refuse to execute on the specified nodes
<br>
since they aren't allocated to you - i.e., the system would refuse to
<br>
execute the specified executable on that node because you don't have
<br>
permission to do so.
<br>
<p>In that case, we could improve the error message, but the system is actually
<br>
doing everything correctly.
<br>
<p>Appreciate the help in tracking this down.
<br>
<p><p><span class="quotelev1">&gt; So I'd strongly propose that &quot;-machinefile&quot; should at least be tolerated
</span><br>
<span class="quotelev1">&gt; when mpirun executes under TM.  You might issue a warning about -machinefile
</span><br>
<span class="quotelev1">&gt; being ignored under TM, but the code should never bomb out, IMHO.
</span><br>
<p>It didn't &quot;bomb&quot;, it simply printed an error message (perhaps to be
<br>
improved) and exited, which is (IMHO) correct behavior. ;-)
<br>
<p><span class="quotelev1">&gt; Such behavior would be much easier for users (and sysadmins :-) to
</span><br>
<span class="quotelev1">&gt; understand than the present situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<span class="quotelev1">&gt; Ole
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Previous message:</strong> <a href="3180.php">Andreas Kuntze: "Re: [OMPI users] openMPI over uDAPL doesn't work"</a>
<li><strong>In reply to:</strong> <a href="3179.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3182.php">Ole Holm Nielsen: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
