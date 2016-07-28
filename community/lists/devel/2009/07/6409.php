<?
$subject_val = "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 15 07:10:20 2009" -->
<!-- isoreceived="20090715111020" -->
<!-- sent="Wed, 15 Jul 2009 05:10:05 -0600" -->
<!-- isosent="20090715111005" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support" -->
<!-- id="5856BCA0-9733-4731-A637-5046C9E172BD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1811778173.596161247639291478.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-15 07:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6408.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. No, we don't take PLPA cpu sets into account when  
<br>
retrieving the allocation.
<br>
<p>Just to be clear: from an OMPI perspective, I don't think this is an  
<br>
issue of binding, but rather an issue of allocation. If we knew we had  
<br>
been allocated only a certain number of cores on a node, then we would  
<br>
only map that many procs to the node. When we subsequently &quot;bind&quot;, we  
<br>
should then bind those procs to the correct cores (I think).
<br>
<p>Could you check this? You can run a trivial job using the -npernode x  
<br>
option, where x matched the #cores you were allocated on the nodes.
<br>
<p>If you do this, do we bind to the correct cores?
<br>
<p>If we do, then that would confirm that we just aren't picking up the  
<br>
right number of cores allocated to us. If it is wrong, then this is a  
<br>
PLPA issue where it isn't binding to the right core.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Jul 15, 2009, at 12:28 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure if this is a OpenMPI query or a PLPA query,
</span><br>
<span class="quotelev1">&gt; but given that PLPA seems to have some support for it
</span><br>
<span class="quotelev1">&gt; already I thought I'd start here. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We run a quad core Opteron cluster with Torque 2.3.x
</span><br>
<span class="quotelev1">&gt; which uses the kernels cpuset support to constrain
</span><br>
<span class="quotelev1">&gt; a job to just the cores it has been allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we are seeing occasionally that where a job
</span><br>
<span class="quotelev1">&gt; has been allocated multiple cores on the same node we
</span><br>
<span class="quotelev1">&gt; get two compute bound MPI processes in the job scheduled
</span><br>
<span class="quotelev1">&gt; onto the same core (obviously a kernel issue).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So CPU affinity would be an obvious solution, but it
</span><br>
<span class="quotelev1">&gt; needs to be done with reference to the cores that are
</span><br>
<span class="quotelev1">&gt; available to it in its cpuset.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This information is already retrievable by PLPA (for
</span><br>
<span class="quotelev1">&gt; instance &quot;plpa-taskset -cp $$&quot; will retrieve the cores
</span><br>
<span class="quotelev1">&gt; allocated to the shell you run the command from) but
</span><br>
<span class="quotelev1">&gt; I'm not sure if OpenMPI makes use of this when binding
</span><br>
<span class="quotelev1">&gt; CPUs using the linux paffinity MCA parameter ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our testing (with 1.3.2) seems to show it doesn't, and
</span><br>
<span class="quotelev1">&gt; I don't think there are any significant differences with
</span><br>
<span class="quotelev1">&gt; the snapshots in 1.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I correct in this ?  If so, are there any plans to
</span><br>
<span class="quotelev1">&gt; make it do this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt; The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt; P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6410.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6408.php">Matthias Jurenz: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>In reply to:</strong> <a href="6406.php">Chris Samuel: "[OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6412.php">Chris Samuel: "Re: [OMPI devel] OpenMPI, PLPA and Linux cpuset/cgroup support"</a>
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
