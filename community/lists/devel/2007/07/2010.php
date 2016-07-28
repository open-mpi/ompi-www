<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 09:53:22 2007" -->
<!-- isoreceived="20070726135322" -->
<!-- sent="Thu, 26 Jul 2007 07:53:14 -0600" -->
<!-- isosent="20070726135314" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="C2CE036A.A344%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A8A2AD.7050408_at_Sun.COM" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 09:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/26/07 7:33 AM, &quot;Rolf.Vandevaart_at_[hidden]&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Aurelien Bouteiller wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph and everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just want to make sure the proposed usecases does not break one of the
</span><br>
<span class="quotelev2">&gt;&gt; current open MPI feature I require. For FT purposes, I need to get some
</span><br>
<span class="quotelev2">&gt;&gt; specific hosts (lets say with a better MTBF). Those hosts are not part
</span><br>
<span class="quotelev2">&gt;&gt; of the MPI_COMM_WORLD but are used to deploy FT services (like event
</span><br>
<span class="quotelev2">&gt;&gt; loggers, checkpoint servers, etc). To enable collaboration between
</span><br>
<span class="quotelev2">&gt;&gt; computing nodes and those FT services, I use the usual MPI2 Dynamics
</span><br>
<span class="quotelev2">&gt;&gt; with MPI_Accept/Connect. This means that those different instances of
</span><br>
<span class="quotelev2">&gt;&gt; mpirun needs to share the same orte registry, so that they can establish
</span><br>
<span class="quotelev2">&gt;&gt; the MPI2 connect/accept trough the registered MPI_ports.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This background in place, my first concern is how the deployment maps to
</span><br>
<span class="quotelev2">&gt;&gt; the allocated resources. The nodes used to deploy FT services are
</span><br>
<span class="quotelev2">&gt;&gt; &quot;special&quot;. In typical usecase, I get machines with better MTFB, faster
</span><br>
<span class="quotelev2">&gt;&gt; or larger disks by requesting special properties to the resources
</span><br>
<span class="quotelev2">&gt;&gt; allocation manager. I don't want those to be mixed with regular nodes in
</span><br>
<span class="quotelev2">&gt;&gt; the resulting hostfile: these scarce resources should hold only FT
</span><br>
<span class="quotelev2">&gt;&gt; services, no computing processes. As I understand things, I don't see
</span><br>
<span class="quotelev2">&gt;&gt; any way to avoid mpirun to deploy application processes on my &quot;special&quot;
</span><br>
<span class="quotelev2">&gt;&gt; nodes if they are part of the same launch/allocation in your &quot;filtering&quot;
</span><br>
<span class="quotelev2">&gt;&gt; usecase. Currently I proceed to two different mpirun with a single orte
</span><br>
<span class="quotelev2">&gt;&gt; seed holding the registry. This way I get two different hostfiles, one
</span><br>
<span class="quotelev2">&gt;&gt; for computing nodes, one for FT services. I just want to make sure
</span><br>
<span class="quotelev2">&gt;&gt; everybody understood this requirement so that this feature does not
</span><br>
<span class="quotelev2">&gt;&gt; disappear in the brainstorming :]
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; With the use of resource managers, --host, and --hostfile this should
</span><br>
<span class="quotelev1">&gt; all be possible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'll try to keep this in mind as we implement the change....will have to see
<br>
if this ability really can be supported in the revision. I'll certainly let
<br>
you know if I run into a conflict.
<br>
<p><span class="quotelev2">&gt;&gt; Next requirement is the ability to add during runtime some nodes to the
</span><br>
<span class="quotelev2">&gt;&gt; initial pool. Because node may fail (but it is the same with comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; basically) , I might need some (lot of) spare nodes to replace failed
</span><br>
<span class="quotelev2">&gt;&gt; ones. As I do not want to request for twice as many nodes as I need
</span><br>
<span class="quotelev2">&gt;&gt; (after all, things could just go fine, why should I waste that many
</span><br>
<span class="quotelev2">&gt;&gt; computing resources for idle spares ?), I definitely want to be able to
</span><br>
<span class="quotelev2">&gt;&gt; allocate some new nodes to the pool of the already running machines. As
</span><br>
<span class="quotelev2">&gt;&gt; far as I understand, this is impossible to achieve with the usecase2 and
</span><br>
<span class="quotelev2">&gt;&gt; quite difficult in usecase1. In my opinion, having the ability to spawn
</span><br>
<span class="quotelev2">&gt;&gt; on nodes which are not part of the initial hostfile is a key feature
</span><br>
<span class="quotelev2">&gt;&gt; (and not only for FT purposes).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I am looking for more detail into the above issue.   What
</span><br>
<span class="quotelev1">&gt; resource manager are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideally, we would prefer not to support this.  Any nodes
</span><br>
<span class="quotelev1">&gt; that you run on, or hope to run on, would be designated
</span><br>
<span class="quotelev1">&gt; at the start.   For example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --host a,b,c,d,e,f,g
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This would cause the one process of the mpi job to start on host a.
</span><br>
<span class="quotelev1">&gt; Then, the mpi job has available to it the other hosts should it decide
</span><br>
<span class="quotelev1">&gt; later to start a job on them.  However no ORTE daemons would
</span><br>
<span class="quotelev1">&gt; be started on those nodes until calls to MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; occur.   So, the MPI job would not be consuming any resources
</span><br>
<span class="quotelev1">&gt; until called upon to.
</span><br>
<p>This has actually been the subject of multiple threads on the user list and
<br>
is considered a critical capability by some users and vendors. I believe
<br>
there is little problem in allowing those systems that can support it to
<br>
dynamically add nodes to ORTE via some API into the resource manager. At the
<br>
moment, none of the RMs support it, but LSF will (and TM at least may)
<br>
shortly do so, and some of their customers are depending upon it.
<br>
<p>The problem is that job startup could be delayed for significant time if all
<br>
hosts must be preallocated. Admittedly, this raises all kinds of issues
<br>
about how long the job could be stalled waiting for the new hosts. However,
<br>
as the other somewhat exhaustive threads have discussed, there are computing
<br>
models that can live with this uncertainty, and RMs that will provide async
<br>
callbacks to allow the rest of the app to continue working while waiting.
<br>
<p>Just my $0.00002 - again, this goes back to...are there use-cases and
<br>
customers to which Open MPI is simply going to say &quot;we won't support that&quot;?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I know there have been some extra discussions on this subject.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately it looks like I am not part of the list where it happened.
</span><br>
<span class="quotelev2">&gt;&gt; I hope those concerns have not been already discussed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you know, I am working on revamping the hostfile functionality to make it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work better with managed environments (at the moment, the two are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exclusive). The issue that we need to review is how we want the interaction
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to work, both for the initial launch and for comm_spawn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In talking with Jeff, we boiled it down to two options that I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flow-charted (see attached):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option 1: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager (e.g., SLURM). These nodes establish a base pool of nodes that can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be used by both the initial launch and any dynamic comm_spawn requests. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile and any -host info is then used to select nodes from within that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pool for use with the specific launch. The initial launch would use the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -hostfile or -host command line option to provide that info - comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would use the MPI_Info fields to provide similar info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This mode has the advantage of allowing a user to obtain a large allocation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then designate hosts within the pool for use by an initial application,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and separately designate (via another hostfile or -host spec) another set of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; those hosts from the pool to support a comm_spawn'd child job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If no resource managed nodes are found, then the hostfile and -host options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would provide the list of hosts to be used. Again, comm_spawn'd jobs would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be able to specify their own hostfile and -host nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The negative to this option is complexity - in the absence of a managed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation, I either have to deal with hostfile/dash-host allocations in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happening in RMAPS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option 2: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager, and then filter those using the command line hostfile and -host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options to establish our base pool. Any spawn commands (both the initial one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thus, comm_spawn is restricted to using hosts from that initial pool.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We could possibly extend this option by only using the hostfile in our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial filter. In other words, let the hostfile downselect the resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager's allocation for the initial launch. Any -host options on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line would only apply to the hosts used to launch the initial
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application. Any comm_spawn would use the hostfile-filtered pool of hosts.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The advantage here is simplicity. The disadvantage lies in flexibility for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; supporting dynamic operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The major difference between these options really only impacts the initial
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pool of hosts to be used for launches, both the initial one and any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subsequent comm_spawns. Barring any commentary, I will implement option 1 as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this provides the maximum flexibility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts? Other options we should consider?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Previous message:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
