<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  2 09:57:34 2007" -->
<!-- isoreceived="20070502135734" -->
<!-- sent="Wed, 02 May 2007 15:57:27 +0200" -->
<!-- isosent="20070502135727" -->
<!-- name="Ole Holm Nielsen" -->
<!-- email="Ole.H.Nielsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="463898C7.20602_at_fysik.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C25DD6BA.2AC8%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-05-02 09:57:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Previous message:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thanks very much for your continued support:
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev2">&gt;&gt; I'd say that this behavior of mpirun under Torque TM should be considered as
</span><br>
<span class="quotelev2">&gt;&gt; a bug. Ideally, users should not have to design their scripts differently
</span><br>
<span class="quotelev2">&gt;&gt; according to whether the sysadmin decided to configure in TM or not.
</span><br>
<span class="quotelev2">&gt;&gt; Also, for interactive tests one doesn't have TM.  I think that mpirun just
</span><br>
<span class="quotelev2">&gt;&gt; ought to work no matter what...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In your prior notes, you indicated that you had in fact configured TM
</span><br>
<span class="quotelev1">&gt; support into OpenMPI. The issue, therefore, was that you were somehow
</span><br>
<span class="quotelev1">&gt; getting an error from TM indicating that the tm spawn command was unable to
</span><br>
<span class="quotelev1">&gt; launch our daemon on a specified node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your comment above, however, talks about the problem of NOT having TM
</span><br>
<span class="quotelev1">&gt; configured into OpenMPI, even though you are running on a Torque-based
</span><br>
<span class="quotelev1">&gt; system. This is a significantly different scenario - could you please
</span><br>
<span class="quotelev1">&gt; clarify?
</span><br>
<p>What I'm saying is that users should be able run the same script in different
<br>
environments, they being Torque or non-Torque, without having to change
<br>
the arguments to the mpirun command.  Maybe they submit batch jobs to
<br>
our Linux/Torque cluster, or maybe they run their scripts on their own
<br>
non-Torque workstation.  The sysadmin may also reserve a set of nodes in the
<br>
Linux cluster and log in interactively (without using Torque) for test
<br>
purposes, and in this case the very same mpirun executable file will not
<br>
use the TM interface.
<br>
<p>IMHO, it is highly desirable that the mpirun command is robust when being run
<br>
in different ways, i.e., mpirun should accept both -np and -machinefile
<br>
under all circumstances (but preferably print a warning message if it chooses
<br>
to ignore -machinefile).
<br>
<p><span class="quotelev1">&gt; BTW: We run interactive tests under TM all the time - there is no TM
</span><br>
<span class="quotelev1">&gt; requirement prohibiting you from this mode of operation. I would guess,
</span><br>
<span class="quotelev1">&gt; therefore, that this may be something your sysadmin has imposed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given your comment, however, I must ask: did you get an allocation for the
</span><br>
<span class="quotelev1">&gt; nodes in your PBS_NODEFILE prior to executing mpirun??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to know since your observed errors could easily be explained by an
</span><br>
<span class="quotelev1">&gt; attempt to execute on nodes that are not allocated to you. For example, if
</span><br>
<span class="quotelev1">&gt; you either used a PBS_NODEFILE from a prior (possibly batch) execution, or
</span><br>
<span class="quotelev1">&gt; created one yourself, Torque would refuse to execute on the specified nodes
</span><br>
<span class="quotelev1">&gt; since they aren't allocated to you - i.e., the system would refuse to
</span><br>
<span class="quotelev1">&gt; execute the specified executable on that node because you don't have
</span><br>
<span class="quotelev1">&gt; permission to do so.
</span><br>
<p>No no: The perfectly correct and sane Torque batch job reported previously in
<br>
this thread fails when you execute mpirun like this:
<br>
<p>/usr/local/openmpi-1.2.1-pgi/bin/mpirun -np 2 -machinefile $PBS_NODEFILE hello_c
<br>
[u126.dcsc.fysik.dtu.dk:11981] pls:tm: failed to poll for a spawned proc, return
<br>
status = 17002
<br>
[u126.dcsc.fysik.dtu.dk:11981] [0,0,0] ORTE_ERROR_LOG: In errno in file
<br>
rmgr_urm.c at line 462
<br>
[u126.dcsc.fysik.dtu.dk:11981] mpirun: spawn failed with errno=-11
<br>
<p>In this case the $PBS_NODEFILE is created for this job instance by Torque.
<br>
<p>The workaround is to omit the perfectly sensible (or at least not
<br>
incorrect :-) mpirun arguments &quot;-machinefile $PBS_NODEFILE&quot;.
<br>
<p><span class="quotelev1">&gt; In that case, we could improve the error message, but the system is actually
</span><br>
<span class="quotelev1">&gt; doing everything correctly.
</span><br>
<p>Indeed, except that the above error message is totally unintelligible.
<br>
There is no conflict in this job between &quot;-np 2&quot; which refers to 2 specific
<br>
nodes allocated by Torque, and &quot;-machinefile $PBS_NODEFILE&quot; which refers
<br>
to the very same 2 nodes allocated by Torque.  It is beyond me why the
<br>
redundant but consistent mpirun node information (in the case of being run
<br>
under TM control) would cause mpirun to fail as shown above.
<br>
<p>Thanks again,
<br>
Ole
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3183.php">Harald Servat: "[OMPI users] issues with peruse MSG_ARRIVED events"</a>
<li><strong>Previous message:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3181.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>Reply:</strong> <a href="3184.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
