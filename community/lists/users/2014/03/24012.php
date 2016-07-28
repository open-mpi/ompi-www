<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 20:24:15 2014" -->
<!-- isoreceived="20140328002415" -->
<!-- sent="Fri, 28 Mar 2014 01:24:04 +0100" -->
<!-- isosent="20140328002404" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="2E1AEC2F-1A42-4349-A5F5-D4F56383CFDE_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87eh1n6yex.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 20:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.03.2014 um 23:59 schrieb Dave Love:
<br>
<p><span class="quotelev1">&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do all of them have an internal bookkeeping of granted cores to slots
</span><br>
<span class="quotelev2">&gt;&gt; - i.e. not only the number of scheduled slots per job per node, but
</span><br>
<span class="quotelev2">&gt;&gt; also which core was granted to which job? Does Open MPI read this
</span><br>
<span class="quotelev2">&gt;&gt; information would be the next question then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI works with the bindings it's handed via orted (if the processes are
</span><br>
<span class="quotelev1">&gt; started that way).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My understanding is that Torque delegates to OpenMPI the process placement and binding (beyond the list of nodes/cpus available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can't/doesn't torque start the MPI processes itself?  Otherwise, yes,
</span><br>
<span class="quotelev1">&gt; since orted gets the binding.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that OpenPBS behaves the same as Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM and SGE/OGE *probably* have pretty much the same behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; SGE/OGE: no, any binding request is only a soft request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand that.  Does it mean the system-specific &quot;strict&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;non-strict&quot; binding in hwloc, in which case I don't see how UGE can do
</span><br>
<span class="quotelev1">&gt; anything different?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; UGE: here you can request a hard binding. But I have no clue whether this information is read by Open MPI too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If in doubt: use only complete nodes for each job (which is often done
</span><br>
<span class="quotelev2">&gt;&gt; for massively parallel jobs anyway).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's no need with a recent SGE.  All our jobs get core bindings --
</span><br>
<span class="quotelev1">&gt; unless they use all the cores, since binding them all is equivalent to
</span><br>
<span class="quotelev1">&gt; binding none -- and OMPI inherits them.  See
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt; for the
</span><br>
<span class="quotelev1">&gt; SGE+OMPI configuration.
</span><br>
<p>To avoid any misunderstanding I first discuss this last paragraph. I read <a href="http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation">http://www.slideshare.net/jsquyres/open-mpi-explorations-in-process-affinity-eurompi13-presentation</a> which was posted on this list yesterday. And so I would phrase it: mapping to all is like mapping to none. And as they are only mapped, the kernel scheduler is free to move them around inside this set of (granted) cores.
<br>
<p>But maybe I got it wrong.
<br>
<p>-- Reuti
<br>
<p><p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24013.php">Ralph Castain: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23994.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
