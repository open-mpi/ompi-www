<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 24 11:39:11 2007" -->
<!-- isoreceived="20070724153911" -->
<!-- sent="Tue, 24 Jul 2007 09:39:00 -0600" -->
<!-- isosent="20070724153900" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Hostfiles - yet again" -->
<!-- id="C2CB7936.A265%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-24 11:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>As you know, I am working on revamping the hostfile functionality to make it
<br>
work better with managed environments (at the moment, the two are
<br>
exclusive). The issue that we need to review is how we want the interaction
<br>
to work, both for the initial launch and for comm_spawn.
<br>
<p>In talking with Jeff, we boiled it down to two options that I have
<br>
flow-charted (see attached):
<br>
<p>Option 1: in this mode, we read any allocated nodes provided by a resource
<br>
manager (e.g., SLURM). These nodes establish a base pool of nodes that can
<br>
be used by both the initial launch and any dynamic comm_spawn requests. The
<br>
hostfile and any -host info is then used to select nodes from within that
<br>
pool for use with the specific launch. The initial launch would use the
<br>
-hostfile or -host command line option to provide that info - comm_spawn
<br>
would use the MPI_Info fields to provide similar info.
<br>
<p>This mode has the advantage of allowing a user to obtain a large allocation,
<br>
and then designate hosts within the pool for use by an initial application,
<br>
and separately designate (via another hostfile or -host spec) another set of
<br>
those hosts from the pool to support a comm_spawn'd child job.
<br>
<p>If no resource managed nodes are found, then the hostfile and -host options
<br>
would provide the list of hosts to be used. Again, comm_spawn'd jobs would
<br>
be able to specify their own hostfile and -host nodes.
<br>
<p>The negative to this option is complexity - in the absence of a managed
<br>
allocation, I either have to deal with hostfile/dash-host allocations in the
<br>
RAS and then again in RMAPS, or I have &quot;allocation-like&quot; functionality
<br>
happening in RMAPS.
<br>
<p><p>Option 2: in this mode, we read any allocated nodes provided by a resource
<br>
manager, and then filter those using the command line hostfile and -host
<br>
options to establish our base pool. Any spawn commands (both the initial one
<br>
and comm_spawn'd child jobs) would utilize this filtered pool of nodes.
<br>
Thus, comm_spawn is restricted to using hosts from that initial pool.
<br>
<p>We could possibly extend this option by only using the hostfile in our
<br>
initial filter. In other words, let the hostfile downselect the resource
<br>
manager's allocation for the initial launch. Any -host options on the
<br>
command line would only apply to the hosts used to launch the initial
<br>
application. Any comm_spawn would use the hostfile-filtered pool of hosts.
<br>
<p>The advantage here is simplicity. The disadvantage lies in flexibility for
<br>
supporting dynamic operations.
<br>
<p><p>The major difference between these options really only impacts the initial
<br>
pool of hosts to be used for launches, both the initial one and any
<br>
subsequent comm_spawns. Barring any commentary, I will implement option 1 as
<br>
this provides the maximum flexibility.
<br>
<p>Any thoughts? Other options we should consider?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>
<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1986/hostfile.pdf">hostfile.pdf</a>
</ul>
<!-- attachment="hostfile.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">Lisandro Dalcin: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [Open MPI] #1101: MPI_ALLOC_MEM with 0 size must be valid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Reply:</strong> <a href="1998.php">Aurelien Bouteiller: "Re: [OMPI devel] Hostfiles - yet again"</a>
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
