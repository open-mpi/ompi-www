<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 19:00:06 2014" -->
<!-- isoreceived="20140327230006" -->
<!-- sent="Thu, 27 Mar 2014 22:59:18 +0000" -->
<!-- isosent="20140327225918" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="87eh1n6yex.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0CAC4E5C-139C-4CE4-9F1C-D383C0CBA35A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 18:59:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reuti &lt;reuti_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Do all of them have an internal bookkeeping of granted cores to slots
</span><br>
<span class="quotelev1">&gt; - i.e. not only the number of scheduled slots per job per node, but
</span><br>
<span class="quotelev1">&gt; also which core was granted to which job? Does Open MPI read this
</span><br>
<span class="quotelev1">&gt; information would be the next question then.
</span><br>
<p>OMPI works with the bindings it's handed via orted (if the processes are
<br>
started that way).
<br>
<p><span class="quotelev2">&gt;&gt; My understanding is that Torque delegates to OpenMPI the process placement and binding (beyond the list of nodes/cpus available for
</span><br>
<span class="quotelev2">&gt;&gt; the job).
</span><br>
<p>Can't/doesn't torque start the MPI processes itself?  Otherwise, yes,
<br>
since orted gets the binding.
<br>
<p><span class="quotelev2">&gt;&gt; My guess is that OpenPBS behaves the same as Torque.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SLURM and SGE/OGE *probably* have pretty much the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE/OGE: no, any binding request is only a soft request.
</span><br>
<p>I don't understand that.  Does it mean the system-specific &quot;strict&quot; and
<br>
&quot;non-strict&quot; binding in hwloc, in which case I don't see how UGE can do
<br>
anything different?
<br>
<p><span class="quotelev1">&gt; UGE: here you can request a hard binding. But I have no clue whether this information is read by Open MPI too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If in doubt: use only complete nodes for each job (which is often done
</span><br>
<span class="quotelev1">&gt; for massively parallel jobs anyway).
</span><br>
<p>There's no need with a recent SGE.  All our jobs get core bindings --
<br>
unless they use all the cores, since binding them all is equivalent to
<br>
binding none -- and OMPI inherits them.  See
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt; for the
<br>
SGE+OMPI configuration.
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24009.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>In reply to:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24012.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
