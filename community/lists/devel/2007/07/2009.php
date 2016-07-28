<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 09:33:40 2007" -->
<!-- isoreceived="20070726133340" -->
<!-- sent="Thu, 26 Jul 2007 09:33:33 -0400" -->
<!-- isosent="20070726133333" -->
<!-- name="Rolf.Vandevaart_at_[hidden]" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="46A8A2AD.7050408_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46A7A9B8.2050907_at_cs.utk.edu" -->
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
<strong>From:</strong> <a href="mailto:Rolf.Vandevaart_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Hostfiles%20-%20yet%20again"><em>Rolf.Vandevaart_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-07-26 09:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt;Hi Ralph and everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I just want to make sure the proposed usecases does not break one of the 
</span><br>
<span class="quotelev1">&gt;current open MPI feature I require. For FT purposes, I need to get some 
</span><br>
<span class="quotelev1">&gt;specific hosts (lets say with a better MTBF). Those hosts are not part 
</span><br>
<span class="quotelev1">&gt;of the MPI_COMM_WORLD but are used to deploy FT services (like event 
</span><br>
<span class="quotelev1">&gt;loggers, checkpoint servers, etc). To enable collaboration between 
</span><br>
<span class="quotelev1">&gt;computing nodes and those FT services, I use the usual MPI2 Dynamics 
</span><br>
<span class="quotelev1">&gt;with MPI_Accept/Connect. This means that those different instances of 
</span><br>
<span class="quotelev1">&gt;mpirun needs to share the same orte registry, so that they can establish 
</span><br>
<span class="quotelev1">&gt;the MPI2 connect/accept trough the registered MPI_ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This background in place, my first concern is how the deployment maps to 
</span><br>
<span class="quotelev1">&gt;the allocated resources. The nodes used to deploy FT services are 
</span><br>
<span class="quotelev1">&gt;&quot;special&quot;. In typical usecase, I get machines with better MTFB, faster 
</span><br>
<span class="quotelev1">&gt;or larger disks by requesting special properties to the resources 
</span><br>
<span class="quotelev1">&gt;allocation manager. I don't want those to be mixed with regular nodes in 
</span><br>
<span class="quotelev1">&gt;the resulting hostfile: these scarce resources should hold only FT 
</span><br>
<span class="quotelev1">&gt;services, no computing processes. As I understand things, I don't see 
</span><br>
<span class="quotelev1">&gt;any way to avoid mpirun to deploy application processes on my &quot;special&quot; 
</span><br>
<span class="quotelev1">&gt;nodes if they are part of the same launch/allocation in your &quot;filtering&quot; 
</span><br>
<span class="quotelev1">&gt;usecase. Currently I proceed to two different mpirun with a single orte 
</span><br>
<span class="quotelev1">&gt;seed holding the registry. This way I get two different hostfiles, one 
</span><br>
<span class="quotelev1">&gt;for computing nodes, one for FT services. I just want to make sure 
</span><br>
<span class="quotelev1">&gt;everybody understood this requirement so that this feature does not 
</span><br>
<span class="quotelev1">&gt;disappear in the brainstorming :]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
With the use of resource managers, --host, and --hostfile this should
<br>
all be possible.
<br>
<p><span class="quotelev1">&gt;Next requirement is the ability to add during runtime some nodes to the 
</span><br>
<span class="quotelev1">&gt;initial pool. Because node may fail (but it is the same with comm_spawn 
</span><br>
<span class="quotelev1">&gt;basically) , I might need some (lot of) spare nodes to replace failed 
</span><br>
<span class="quotelev1">&gt;ones. As I do not want to request for twice as many nodes as I need 
</span><br>
<span class="quotelev1">&gt;(after all, things could just go fine, why should I waste that many 
</span><br>
<span class="quotelev1">&gt;computing resources for idle spares ?), I definitely want to be able to 
</span><br>
<span class="quotelev1">&gt;allocate some new nodes to the pool of the already running machines. As 
</span><br>
<span class="quotelev1">&gt;far as I understand, this is impossible to achieve with the usecase2 and 
</span><br>
<span class="quotelev1">&gt;quite difficult in usecase1. In my opinion, having the ability to spawn 
</span><br>
<span class="quotelev1">&gt;on nodes which are not part of the initial hostfile is a key feature 
</span><br>
<span class="quotelev1">&gt;(and not only for FT purposes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am looking for more detail into the above issue.   What
<br>
resource manager are you using?
<br>
<p>Ideally, we would prefer not to support this.  Any nodes
<br>
that you run on, or hope to run on, would be designated
<br>
at the start.   For example:
<br>
<p>mpirun -np 1 --host a,b,c,d,e,f,g
<br>
<p>This would cause the one process of the mpi job to start on host a. 
<br>
Then, the mpi job has available to it the other hosts should it decide
<br>
later to start a job on them.  However no ORTE daemons would
<br>
be started on those nodes until calls to MPI_Comm_spawn
<br>
occur.   So, the MPI job would not be consuming any resources
<br>
until called upon to.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;I know there have been some extra discussions on this subject. 
</span><br>
<span class="quotelev1">&gt;Unfortunately it looks like I am not part of the list where it happened. 
</span><br>
<span class="quotelev1">&gt;I hope those concerns have not been already discussed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Yo all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;As you know, I am working on revamping the hostfile functionality to make it
</span><br>
<span class="quotelev2">&gt;&gt;work better with managed environments (at the moment, the two are
</span><br>
<span class="quotelev2">&gt;&gt;exclusive). The issue that we need to review is how we want the interaction
</span><br>
<span class="quotelev2">&gt;&gt;to work, both for the initial launch and for comm_spawn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In talking with Jeff, we boiled it down to two options that I have
</span><br>
<span class="quotelev2">&gt;&gt;flow-charted (see attached):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Option 1: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev2">&gt;&gt;manager (e.g., SLURM). These nodes establish a base pool of nodes that can
</span><br>
<span class="quotelev2">&gt;&gt;be used by both the initial launch and any dynamic comm_spawn requests. The
</span><br>
<span class="quotelev2">&gt;&gt;hostfile and any -host info is then used to select nodes from within that
</span><br>
<span class="quotelev2">&gt;&gt;pool for use with the specific launch. The initial launch would use the
</span><br>
<span class="quotelev2">&gt;&gt;-hostfile or -host command line option to provide that info - comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt;would use the MPI_Info fields to provide similar info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This mode has the advantage of allowing a user to obtain a large allocation,
</span><br>
<span class="quotelev2">&gt;&gt;and then designate hosts within the pool for use by an initial application,
</span><br>
<span class="quotelev2">&gt;&gt;and separately designate (via another hostfile or -host spec) another set of
</span><br>
<span class="quotelev2">&gt;&gt;those hosts from the pool to support a comm_spawn'd child job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;If no resource managed nodes are found, then the hostfile and -host options
</span><br>
<span class="quotelev2">&gt;&gt;would provide the list of hosts to be used. Again, comm_spawn'd jobs would
</span><br>
<span class="quotelev2">&gt;&gt;be able to specify their own hostfile and -host nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The negative to this option is complexity - in the absence of a managed
</span><br>
<span class="quotelev2">&gt;&gt;allocation, I either have to deal with hostfile/dash-host allocations in the
</span><br>
<span class="quotelev2">&gt;&gt;RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
</span><br>
<span class="quotelev2">&gt;&gt;happening in RMAPS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Option 2: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev2">&gt;&gt;manager, and then filter those using the command line hostfile and -host
</span><br>
<span class="quotelev2">&gt;&gt;options to establish our base pool. Any spawn commands (both the initial one
</span><br>
<span class="quotelev2">&gt;&gt;and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
</span><br>
<span class="quotelev2">&gt;&gt;Thus, comm_spawn is restricted to using hosts from that initial pool.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We could possibly extend this option by only using the hostfile in our
</span><br>
<span class="quotelev2">&gt;&gt;initial filter. In other words, let the hostfile downselect the resource
</span><br>
<span class="quotelev2">&gt;&gt;manager's allocation for the initial launch. Any -host options on the
</span><br>
<span class="quotelev2">&gt;&gt;command line would only apply to the hosts used to launch the initial
</span><br>
<span class="quotelev2">&gt;&gt;application. Any comm_spawn would use the hostfile-filtered pool of hosts.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The advantage here is simplicity. The disadvantage lies in flexibility for
</span><br>
<span class="quotelev2">&gt;&gt;supporting dynamic operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The major difference between these options really only impacts the initial
</span><br>
<span class="quotelev2">&gt;&gt;pool of hosts to be used for launches, both the initial one and any
</span><br>
<span class="quotelev2">&gt;&gt;subsequent comm_spawns. Barring any commentary, I will implement option 1 as
</span><br>
<span class="quotelev2">&gt;&gt;this provides the maximum flexibility.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any thoughts? Other options we should consider?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks
</span><br>
<span class="quotelev2">&gt;&gt;Ralph
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
