<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 08:04:20 2010" -->
<!-- isoreceived="20101014120420" -->
<!-- sent="Thu, 14 Oct 2010 14:04:05 +0200" -->
<!-- isosent="20101014120405" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="8B0B161A-8FF3-4505-8D60-6382A2E402EC_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87iq15hvau.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 08:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 14.10.2010 um 13:23 schrieb Dave Love:
<br>
<p><span class="quotelev1">&gt; Reuti &lt;reuti_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With the default binding_instance set to &quot;set&quot; (the default) the
</span><br>
<span class="quotelev2">&gt;&gt; shepherd should bind the processes to cores already. With other types
</span><br>
<span class="quotelev2">&gt;&gt; of binding_instance these selected cores must be forward to the
</span><br>
<span class="quotelev2">&gt;&gt; application via an environment variable or in the hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question was specifically about SGE/OMPI tight integration; are you
</span><br>
<span class="quotelev1">&gt; actually doing binding successfully with that?  I think I read here that
</span><br>
<span class="quotelev1">&gt; the integration doesn't (yet?) deal with SGE core binding, and when we
</span><br>
<span class="quotelev1">&gt; turned on the SGE feature we got the OMPI tasks piled onto a single
</span><br>
<span class="quotelev1">&gt; core.  We quickly turned it off for MPI jobs when we realized what was
</span><br>
<span class="quotelev1">&gt; happening, and I didn't try to investigate further.
</span><br>
<p>what did you request in particular in `qsub -binding`? When you request `qsub -pe openmpi 2 -binding linear:1 ...` it would apply the core assignment per `qrsh`. Means, when you are staying on one machine only (because of &quot;$pe_slots&quot; for &quot;allocation_rule&quot;), you would indeed oversubscribe the core as Open MPI will then use threads (hence &quot;-binding linear:2&quot; should do in this case). But if the &quot;allocation_rule&quot; is set to the integer value &quot;1&quot; and you get for sure a core on another machine, then &quot;linear:1&quot; would be fine. Similar `qsub -pe openmpi 4 -binding linear:2 ...` when you have an &quot;allocation_rule&quot; of &quot;2&quot;.
<br>
<p>If in a similar scenario you get 4 cores on one and the same machine and SGE creates a cpuset of 4 cores, these 4 threads can nevertheless be scheduled to any granted core by the Linux scheduler kernel. It would be necssary to use another binding_instance &quot;env&quot; or &quot;pe&quot; to get the information of granted cores into the jobscript/hostfile and decide on your own how to forward this to Open MPI to have each thread also bound to a unique core too and avoid having them drifting around the cores in the cpuset.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; As this is only a hint to SGE and not a hard request, the user must
</span><br>
<span class="quotelev2">&gt;&gt; plan a little bit the allocation beforehand. Especially if you
</span><br>
<span class="quotelev2">&gt;&gt; oversubscribe a machine it won't work. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [It is documented that the binding isn't applied if the selected cores
</span><br>
<span class="quotelev1">&gt; are occupied.]
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
<li><strong>Next message:</strong> <a href="14463.php">Jeff Squyres: "Re: [OMPI users] How to time data transfers?"</a>
<li><strong>Previous message:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/11/14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
