<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 25 15:55:14 2007" -->
<!-- isoreceived="20070725195514" -->
<!-- sent="Wed, 25 Jul 2007 15:51:20 -0400" -->
<!-- isosent="20070725195120" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="46A7A9B8.2050907_at_cs.utk.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C2CB7936.A265%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-25 15:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph and everyone,
<br>
<p>I just want to make sure the proposed usecases does not break one of the 
<br>
current open MPI feature I require. For FT purposes, I need to get some 
<br>
specific hosts (lets say with a better MTBF). Those hosts are not part 
<br>
of the MPI_COMM_WORLD but are used to deploy FT services (like event 
<br>
loggers, checkpoint servers, etc). To enable collaboration between 
<br>
computing nodes and those FT services, I use the usual MPI2 Dynamics 
<br>
with MPI_Accept/Connect. This means that those different instances of 
<br>
mpirun needs to share the same orte registry, so that they can establish 
<br>
the MPI2 connect/accept trough the registered MPI_ports.
<br>
<p>This background in place, my first concern is how the deployment maps to 
<br>
the allocated resources. The nodes used to deploy FT services are 
<br>
&quot;special&quot;. In typical usecase, I get machines with better MTFB, faster 
<br>
or larger disks by requesting special properties to the resources 
<br>
allocation manager. I don't want those to be mixed with regular nodes in 
<br>
the resulting hostfile: these scarce resources should hold only FT 
<br>
services, no computing processes. As I understand things, I don't see 
<br>
any way to avoid mpirun to deploy application processes on my &quot;special&quot; 
<br>
nodes if they are part of the same launch/allocation in your &quot;filtering&quot; 
<br>
usecase. Currently I proceed to two different mpirun with a single orte 
<br>
seed holding the registry. This way I get two different hostfiles, one 
<br>
for computing nodes, one for FT services. I just want to make sure 
<br>
everybody understood this requirement so that this feature does not 
<br>
disappear in the brainstorming :]
<br>
<p>Next requirement is the ability to add during runtime some nodes to the 
<br>
initial pool. Because node may fail (but it is the same with comm_spawn 
<br>
basically) , I might need some (lot of) spare nodes to replace failed 
<br>
ones. As I do not want to request for twice as many nodes as I need 
<br>
(after all, things could just go fine, why should I waste that many 
<br>
computing resources for idle spares ?), I definitely want to be able to 
<br>
allocate some new nodes to the pool of the already running machines. As 
<br>
far as I understand, this is impossible to achieve with the usecase2 and 
<br>
quite difficult in usecase1. In my opinion, having the ability to spawn 
<br>
on nodes which are not part of the initial hostfile is a key feature 
<br>
(and not only for FT purposes).
<br>
<p>I know there have been some extra discussions on this subject. 
<br>
Unfortunately it looks like I am not part of the list where it happened. 
<br>
I hope those concerns have not been already discussed.
<br>
<p>Aurelien
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you know, I am working on revamping the hostfile functionality to make it
</span><br>
<span class="quotelev1">&gt; work better with managed environments (at the moment, the two are
</span><br>
<span class="quotelev1">&gt; exclusive). The issue that we need to review is how we want the interaction
</span><br>
<span class="quotelev1">&gt; to work, both for the initial launch and for comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In talking with Jeff, we boiled it down to two options that I have
</span><br>
<span class="quotelev1">&gt; flow-charted (see attached):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option 1: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev1">&gt; manager (e.g., SLURM). These nodes establish a base pool of nodes that can
</span><br>
<span class="quotelev1">&gt; be used by both the initial launch and any dynamic comm_spawn requests. The
</span><br>
<span class="quotelev1">&gt; hostfile and any -host info is then used to select nodes from within that
</span><br>
<span class="quotelev1">&gt; pool for use with the specific launch. The initial launch would use the
</span><br>
<span class="quotelev1">&gt; -hostfile or -host command line option to provide that info - comm_spawn
</span><br>
<span class="quotelev1">&gt; would use the MPI_Info fields to provide similar info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This mode has the advantage of allowing a user to obtain a large allocation,
</span><br>
<span class="quotelev1">&gt; and then designate hosts within the pool for use by an initial application,
</span><br>
<span class="quotelev1">&gt; and separately designate (via another hostfile or -host spec) another set of
</span><br>
<span class="quotelev1">&gt; those hosts from the pool to support a comm_spawn'd child job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If no resource managed nodes are found, then the hostfile and -host options
</span><br>
<span class="quotelev1">&gt; would provide the list of hosts to be used. Again, comm_spawn'd jobs would
</span><br>
<span class="quotelev1">&gt; be able to specify their own hostfile and -host nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The negative to this option is complexity - in the absence of a managed
</span><br>
<span class="quotelev1">&gt; allocation, I either have to deal with hostfile/dash-host allocations in the
</span><br>
<span class="quotelev1">&gt; RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
</span><br>
<span class="quotelev1">&gt; happening in RMAPS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option 2: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev1">&gt; manager, and then filter those using the command line hostfile and -host
</span><br>
<span class="quotelev1">&gt; options to establish our base pool. Any spawn commands (both the initial one
</span><br>
<span class="quotelev1">&gt; and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
</span><br>
<span class="quotelev1">&gt; Thus, comm_spawn is restricted to using hosts from that initial pool.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We could possibly extend this option by only using the hostfile in our
</span><br>
<span class="quotelev1">&gt; initial filter. In other words, let the hostfile downselect the resource
</span><br>
<span class="quotelev1">&gt; manager's allocation for the initial launch. Any -host options on the
</span><br>
<span class="quotelev1">&gt; command line would only apply to the hosts used to launch the initial
</span><br>
<span class="quotelev1">&gt; application. Any comm_spawn would use the hostfile-filtered pool of hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The advantage here is simplicity. The disadvantage lies in flexibility for
</span><br>
<span class="quotelev1">&gt; supporting dynamic operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The major difference between these options really only impacts the initial
</span><br>
<span class="quotelev1">&gt; pool of hosts to be used for launches, both the initial one and any
</span><br>
<span class="quotelev1">&gt; subsequent comm_spawns. Barring any commentary, I will implement option 1 as
</span><br>
<span class="quotelev1">&gt; this provides the maximum flexibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts? Other options we should consider?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="1999.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="1997.php">Jeff Squyres: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>In reply to:</strong> <a href="1986.php">Ralph H Castain: "[OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
