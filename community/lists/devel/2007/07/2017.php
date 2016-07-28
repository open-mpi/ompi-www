<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 14:52:18 2007" -->
<!-- isoreceived="20070726185218" -->
<!-- sent="Thu, 26 Jul 2007 12:52:09 -0600" -->
<!-- isosent="20070726185209" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hostfiles - yet again" -->
<!-- id="C2CE4979.A377%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2CE036A.A344%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-26 14:52:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2023.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Aurelien
<br>
<p>Perhaps some bad news on this subject - see below.
<br>
<p><p>On 7/26/07 7:53 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/26/07 7:33 AM, &quot;Rolf.Vandevaart_at_[hidden]&quot; &lt;Rolf.Vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien Bouteiller wrote:
</span><br>
<p>&lt;snip&gt;
<br>
<span class="quotelev3">&gt;&gt;&gt; Currently I proceed to two different mpirun with a single orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seed holding the registry. This way I get two different hostfiles, one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for computing nodes, one for FT services. I just want to make sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everybody understood this requirement so that this feature does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disappear in the brainstorming :]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<p>After some investigation, I'm afraid that I have to report that this - as
<br>
far as I understand what you are doing - may no longer work in Open MPI in
<br>
the future (and I'm pretty sure isn't working in the trunk today except
<br>
[maybe] in the special case of hostfile - haven't verified that).
<br>
<p>To ensure we are correctly communicating, let me reiterate what I understand
<br>
you are doing:
<br>
<p>1. in one window, you start a persistent daemon. You then enter &quot;mpirun&quot; to
<br>
that command line, specifying a hostfile (let's call it &quot;foo&quot; for now) and
<br>
the universe used to start the persistent daemon. Thus, mpirun connects to
<br>
that universe and runs within it.
<br>
<p>2. in another window, you type &quot;mpirun&quot; to the command line, specifying a
<br>
different hostfile (&quot;bar&quot;) and again giving it the universe used to start
<br>
the persistent daemon. Thus, both mpiruns are being &quot;managed&quot; by the same
<br>
HNP (the persistent daemon).
<br>
<p>First, there are major issues here involving confusion over allocations and
<br>
synchronization between the lifetimes of the two jobs started in this
<br>
manner. You may not see those in hostfile-only use cases, but for managed
<br>
environments, this proved to cause undesirable confusion over process
<br>
placement and unexpected application failures. Accordingly, we have been
<br>
working to eliminate this usage (although the trunk will currently still
<br>
allow it in some cases).
<br>
<p>This was caused by mpirun itself processing its local environment and then
<br>
&quot;pushing&quot; it into the global registry. Keeping everything separated causes a
<br>
bookkeeper's headache and many lines of code that we would like to
<br>
eliminate.
<br>
<p>The current future design only processes allocations at the HNP itself.
<br>
Thus, the persistent daemon would only be capable of sensing its own local
<br>
allocation - it cannot see an allocation obtained in a separate
<br>
window/login. This unfortunately extends to hostfiles as well - the
<br>
persistent daemon can process the hostfile provided on its command line or
<br>
environment, but has no mechanism for reading another one.
<br>
<p>The exception to this is comm_spawn. Our current intent was to allow
<br>
comm_spawn to specify a hostfile that could be read by the HNP and used for
<br>
the child job. However, we are still discussing whether this hostfile should
<br>
be allowed to &quot;add&quot; nodes to the known available resources, or only specify
<br>
a subset of the already-known resource pool. I suspect we will opt for the
<br>
latter interpretation as we otherwise open an entirely different set of
<br>
complications.
<br>
<p>So I am not sure that you will be able to continue working this way. You may
<br>
have to start your regular application with the larger pool of resources,
<br>
specify the ones you want used for the application itself via -host, and
<br>
then &quot;comm_spawn&quot; your FT services on the other nodes using -host in that
<br>
launch. Alternatively, you could use the multiple app_context capability to
<br>
start it all from the command line:
<br>
<p>mpirun -hostfile big_pool -n 10 -host 1,2,3,4 application : -n 2 -host
<br>
99,100 ft_server
<br>
<p>Hope that helps explain things. As I hope I have indicated, I -think- you
<br>
will still be able to do what you described, but probably not the way you
<br>
have been doing it.
<br>
<p>Please feel free to comment. If this is a big enough issue to a large enough
<br>
audience, then we can try to find a way to solve it (assuming Open MPI's
<br>
community decides to support it).
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Next requirement is the ability to add during runtime some nodes to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial pool. Because node may fail (but it is the same with comm_spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically) , I might need some (lot of) spare nodes to replace failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ones. As I do not want to request for twice as many nodes as I need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (after all, things could just go fine, why should I waste that many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computing resources for idle spares ?), I definitely want to be able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocate some new nodes to the pool of the already running machines. As
</span><br>
<span class="quotelev3">&gt;&gt;&gt; far as I understand, this is impossible to achieve with the usecase2 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite difficult in usecase1. In my opinion, having the ability to spawn
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on nodes which are not part of the initial hostfile is a key feature
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and not only for FT purposes).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am looking for more detail into the above issue.   What
</span><br>
<span class="quotelev2">&gt;&gt; resource manager are you using?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ideally, we would prefer not to support this.  Any nodes
</span><br>
<span class="quotelev2">&gt;&gt; that you run on, or hope to run on, would be designated
</span><br>
<span class="quotelev2">&gt;&gt; at the start.   For example:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --host a,b,c,d,e,f,g
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would cause the one process of the mpi job to start on host a.
</span><br>
<span class="quotelev2">&gt;&gt; Then, the mpi job has available to it the other hosts should it decide
</span><br>
<span class="quotelev2">&gt;&gt; later to start a job on them.  However no ORTE daemons would
</span><br>
<span class="quotelev2">&gt;&gt; be started on those nodes until calls to MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; occur.   So, the MPI job would not be consuming any resources
</span><br>
<span class="quotelev2">&gt;&gt; until called upon to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has actually been the subject of multiple threads on the user list and
</span><br>
<span class="quotelev1">&gt; is considered a critical capability by some users and vendors. I believe
</span><br>
<span class="quotelev1">&gt; there is little problem in allowing those systems that can support it to
</span><br>
<span class="quotelev1">&gt; dynamically add nodes to ORTE via some API into the resource manager. At the
</span><br>
<span class="quotelev1">&gt; moment, none of the RMs support it, but LSF will (and TM at least may)
</span><br>
<span class="quotelev1">&gt; shortly do so, and some of their customers are depending upon it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that job startup could be delayed for significant time if all
</span><br>
<span class="quotelev1">&gt; hosts must be preallocated. Admittedly, this raises all kinds of issues
</span><br>
<span class="quotelev1">&gt; about how long the job could be stalled waiting for the new hosts. However,
</span><br>
<span class="quotelev1">&gt; as the other somewhat exhaustive threads have discussed, there are computing
</span><br>
<span class="quotelev1">&gt; models that can live with this uncertainty, and RMs that will provide async
</span><br>
<span class="quotelev1">&gt; callbacks to allow the rest of the app to continue working while waiting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just my $0.00002 - again, this goes back to...are there use-cases and
</span><br>
<span class="quotelev1">&gt; customers to which Open MPI is simply going to say &quot;we won't support that&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know there have been some extra discussions on this subject.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately it looks like I am not part of the list where it happened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope those concerns have not been already discussed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As you know, I am working on revamping the hostfile functionality to make
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work better with managed environments (at the moment, the two are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exclusive). The issue that we need to review is how we want the interaction
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to work, both for the initial launch and for comm_spawn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In talking with Jeff, we boiled it down to two options that I have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flow-charted (see attached):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Option 1: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager (e.g., SLURM). These nodes establish a base pool of nodes that can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be used by both the initial launch and any dynamic comm_spawn requests. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile and any -host info is then used to select nodes from within that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pool for use with the specific launch. The initial launch would use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -hostfile or -host command line option to provide that info - comm_spawn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would use the MPI_Info fields to provide similar info.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This mode has the advantage of allowing a user to obtain a large
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and then designate hosts within the pool for use by an initial application,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and separately designate (via another hostfile or -host spec) another set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; those hosts from the pool to support a comm_spawn'd child job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If no resource managed nodes are found, then the hostfile and -host options
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would provide the list of hosts to be used. Again, comm_spawn'd jobs would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be able to specify their own hostfile and -host nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The negative to this option is complexity - in the absence of a managed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation, I either have to deal with hostfile/dash-host allocations in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; happening in RMAPS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Option 2: in this mode, we read any allocated nodes provided by a resource
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager, and then filter those using the command line hostfile and -host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options to establish our base pool. Any spawn commands (both the initial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thus, comm_spawn is restricted to using hosts from that initial pool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We could possibly extend this option by only using the hostfile in our
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; initial filter. In other words, let the hostfile downselect the resource
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; manager's allocation for the initial launch. Any -host options on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command line would only apply to the hosts used to launch the initial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application. Any comm_spawn would use the hostfile-filtered pool of hosts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The advantage here is simplicity. The disadvantage lies in flexibility for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supporting dynamic operations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The major difference between these options really only impacts the initial
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pool of hosts to be used for launches, both the initial one and any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subsequent comm_spawns. Barring any commentary, I will implement option 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this provides the maximum flexibility.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any thoughts? Other options we should consider?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2018.php">Mohamad Chaarawi: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>Previous message:</strong> <a href="2016.php">Brian Barrett: "Re: [OMPI devel] [RFC] Sparse group implementation"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2021.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="2023.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
