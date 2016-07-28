<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 16:28:17 2007" -->
<!-- isoreceived="20070726202817" -->
<!-- sent="Thu, 26 Jul 2007 16:24:24 -0400" -->
<!-- isosent="20070726202424" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="46A902F8.2030403_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C2CE4979.A377%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-26 16:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; After some investigation, I'm afraid that I have to report that this - as
</span><br>
<span class="quotelev1">&gt; far as I understand what you are doing - may no longer work in Open MPI in
</span><br>
<span class="quotelev1">&gt; the future (and I'm pretty sure isn't working in the trunk today except
</span><br>
<span class="quotelev1">&gt; [maybe] in the special case of hostfile - haven't verified that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To ensure we are correctly communicating, let me reiterate what I understand
</span><br>
<span class="quotelev1">&gt; you are doing:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Correct. Also consider that for my testing I use a batch scheduler that  
<br>
is not managed by orte right now and provide myself the hostfiles (This 
<br>
batch scheduler is named OAR and is in use on the grid5000 research 
<br>
facility in France).
<br>
<p><span class="quotelev1">&gt; This was caused by mpirun itself processing its local environment and then
</span><br>
<span class="quotelev1">&gt; &quot;pushing&quot; it into the global registry. Keeping everything separated causes a
</span><br>
<span class="quotelev1">&gt; bookkeeper's headache and many lines of code that we would like to
</span><br>
<span class="quotelev1">&gt; eliminate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I see the point. I Agree there is very few benefit at allowing users to 
<br>
have different local environments on different mpirun instances; while 
<br>
it should be a real pain to have a clean code managing this. For my sole 
<br>
usage, the app_context feature you described is a more elegant and 
<br>
equivalent way of spawning my FT services. I will switch to this right 
<br>
away.
<br>
<p>Still it might be of some use to be able to start different mpirun the 
<br>
same way you plan comm_spawn to work: sharing the same environment, but 
<br>
allowing for use of a different hostfile. The use case that comes in 
<br>
mind is &quot;grid&quot;, where different batch schedulers are in use on each 
<br>
clusters, so you can't gather a single hostfile. This is not a feature I 
<br>
would fight for, but I can imagine some people might find it useful.
<br>
<p>More important for me is the ability to refill the hostfile with fresh 
<br>
hosts when some of the original ones died. Allocating an huge amount of 
<br>
spares preventively is just not the correct way to go. On the side I am 
<br>
not sure  that even the best comm_spawn you discussed could be of some 
<br>
help in this case as I do not want the new nodes to go in a different 
<br>
COMM_WORLD. Finding a way to update the registry and all the orted to do 
<br>
so is a much larger issue than simple spawning and I have not been 
<br>
really thinking about it for now. Maybe we should discuss this issue 
<br>
separately.
<br>
<p>Aurelien
<br>
<span class="quotelev1">&gt; Please feel free to comment. If this is a big enough issue to a large enough
</span><br>
<span class="quotelev1">&gt; audience, then we can try to find a way to solve it (assuming Open MPI's
</span><br>
<span class="quotelev1">&gt; community decides to support it).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Next requirement is the ability to add during runtime some nodes to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initial pool. Because node may fail (but it is the same with comm_spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; basically) , I might need some (lot of) spare nodes to replace failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ones. As I do not want to request for twice as many nodes as I need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (after all, things could just go fine, why should I waste that many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computing resources for idle spares ?), I definitely want to be able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocate some new nodes to the pool of the already running machines. As
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; far as I understand, this is impossible to achieve with the usecase2 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quite difficult in usecase1. In my opinion, having the ability to spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on nodes which are not part of the initial hostfile is a key feature
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (and not only for FT purposes).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am looking for more detail into the above issue.   What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resource manager are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ideally, we would prefer not to support this.  Any nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you run on, or hope to run on, would be designated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the start.   For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 --host a,b,c,d,e,f,g
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This would cause the one process of the mpi job to start on host a.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then, the mpi job has available to it the other hosts should it decide
</span><br>
<span class="quotelev3">&gt;&gt;&gt; later to start a job on them.  However no ORTE daemons would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be started on those nodes until calls to MPI_Comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occur.   So, the MPI job would not be consuming any resources
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until called upon to.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This has actually been the subject of multiple threads on the user list and
</span><br>
<span class="quotelev2">&gt;&gt; is considered a critical capability by some users and vendors. I believe
</span><br>
<span class="quotelev2">&gt;&gt; there is little problem in allowing those systems that can support it to
</span><br>
<span class="quotelev2">&gt;&gt; dynamically add nodes to ORTE via some API into the resource manager. At the
</span><br>
<span class="quotelev2">&gt;&gt; moment, none of the RMs support it, but LSF will (and TM at least may)
</span><br>
<span class="quotelev2">&gt;&gt; shortly do so, and some of their customers are depending upon it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that job startup could be delayed for significant time if all
</span><br>
<span class="quotelev2">&gt;&gt; hosts must be preallocated. Admittedly, this raises all kinds of issues
</span><br>
<span class="quotelev2">&gt;&gt; about how long the job could be stalled waiting for the new hosts. However,
</span><br>
<span class="quotelev2">&gt;&gt; as the other somewhat exhaustive threads have discussed, there are computing
</span><br>
<span class="quotelev2">&gt;&gt; models that can live with this uncertainty, and RMs that will provide async
</span><br>
<span class="quotelev2">&gt;&gt; callbacks to allow the rest of the app to continue working while waiting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just my $0.00002 - again, this goes back to...are there use-cases and
</span><br>
<span class="quotelev2">&gt;&gt; customers to which Open MPI is simply going to say &quot;we won't support that&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I know there have been some extra discussions on this subject.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately it looks like I am not part of the list where it happened.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope those concerns have not been already discussed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As you know, I am working on revamping the hostfile functionality to make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; work better with managed environments (at the moment, the two are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exclusive). The issue that we need to review is how we want the interaction
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to work, both for the initial launch and for comm_spawn.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In talking with Jeff, we boiled it down to two options that I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; flow-charted (see attached):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Option 1: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manager (e.g., SLURM). These nodes establish a base pool of nodes that can
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be used by both the initial launch and any dynamic comm_spawn requests. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile and any -host info is then used to select nodes from within that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pool for use with the specific launch. The initial launch would use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -hostfile or -host command line option to provide that info - comm_spawn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would use the MPI_Info fields to provide similar info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This mode has the advantage of allowing a user to obtain a large
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and then designate hosts within the pool for use by an initial application,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and separately designate (via another hostfile or -host spec) another set
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; those hosts from the pool to support a comm_spawn'd child job.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If no resource managed nodes are found, then the hostfile and -host options
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; would provide the list of hosts to be used. Again, comm_spawn'd jobs would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be able to specify their own hostfile and -host nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The negative to this option is complexity - in the absence of a managed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocation, I either have to deal with hostfile/dash-host allocations in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happening in RMAPS.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Option 2: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manager, and then filter those using the command line hostfile and -host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; options to establish our base pool. Any spawn commands (both the initial
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thus, comm_spawn is restricted to using hosts from that initial pool.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We could possibly extend this option by only using the hostfile in our
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initial filter. In other words, let the hostfile downselect the resource
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; manager's allocation for the initial launch. Any -host options on the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command line would only apply to the hosts used to launch the initial
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application. Any comm_spawn would use the hostfile-filtered pool of hosts.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The advantage here is simplicity. The disadvantage lies in flexibility for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; supporting dynamic operations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The major difference between these options really only impacts the initial
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pool of hosts to be used for launches, both the initial one and any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subsequent comm_spawns. Barring any commentary, I will implement option 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this provides the maximum flexibility.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any thoughts? Other options we should consider?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2020.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2017.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2022.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
