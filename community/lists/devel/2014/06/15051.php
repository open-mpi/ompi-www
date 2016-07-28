<?
$subject_val = "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 13:51:26 2014" -->
<!-- isoreceived="20140624175126" -->
<!-- sent="Tue, 24 Jun 2014 12:51:26 -0500" -->
<!-- isosent="20140624175126" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions" -->
<!-- id="CAMD57ofw9C2SwOX5mwQ_aWYOG4+t2A7_73gvTrsB_3ZK1eALrQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53A955B4.1050609_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 13:51:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles
<br>
<p>Had a chance to review this with folks here, and we think that having
<br>
oversubscribe automatically set overload makes some sense. However, we do
<br>
want to retain the ability to separately specify oversubscribe and overload
<br>
as well since these two terms don't mean quite the same thing.
<br>
<p>Our proposal, therefore, is to have the --oversubscribe flag set both the
<br>
--map-by :oversubscribe and --bind-to :overload-allowed properties. If
<br>
someone specifies both the --oversubscribe flag and a conflicting directive
<br>
for one or both of the individual properties, then we'll error out with a
<br>
&quot;bozo&quot; message.
<br>
<p>The use-cases you describe are (minus the crash) correct as the warning
<br>
only is emitted when you are overloaded (i.e., trying to bind to more cpus
<br>
than you have). So you won't get any warning when running on three nodes as
<br>
you have enough cpus for all the procs, etc.
<br>
<p>I'll investigate the crash once I get home and have access to a cluster
<br>
again. The problem likely has to do with not properly responding to the
<br>
failure to spawn.
<br>
<p><p>On Tue, Jun 24, 2014 at 5:40 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this issue is related to the failures reported by mtt on the trunk when
</span><br>
<span class="quotelev1">&gt; the ibm test suite invokes MPI_Comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my test bed is made of 3 (virtual) machines with 2 sockets and 8 cpus
</span><br>
<span class="quotelev1">&gt; per socket each.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i run on one host (without any batch manager)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --host slurm1 --oversubscribe --mca coll ^ml
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the test is a success with the following warning  :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        slurm2
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now if i run on three hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --host slurm1,slurm2,slurm3 --oversubscribe --mca coll ^ml
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the test is a success without any warning
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but now, if i run on two hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --host slurm1,slurm2 --oversubscribe --mca coll ^ml
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the test is a failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first, i get the following same warning :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;    Node:        slurm2
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; followed by a crash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] *** reported by process [2068512769,0]
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] *** MPI_ERR_SPAWN: could not spawn processes
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] *** MPI_ERRORS_ARE_FATAL (processes in this communicator
</span><br>
<span class="quotelev1">&gt; will now abort,
</span><br>
<span class="quotelev1">&gt; [slurm1:2482] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, i the following command works :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 16 --host slurm1,slurm2 --mca coll ^ml --bind-to none
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) what does the first message means ?
</span><br>
<span class="quotelev1">&gt;     is it a warning ? /* if yes, why does mpirun on two hosts fail ? */
</span><br>
<span class="quotelev1">&gt;     is it a fatal error ? /* if yes, why does mpirun on one host success
</span><br>
<span class="quotelev1">&gt; ? */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) generally speaking, and assuming the first message is a warning,
</span><br>
<span class="quotelev1">&gt; should --oversubscribe automatically set overload-allowed ?
</span><br>
<span class="quotelev1">&gt;     /* as far as i am concerned, that would be much more intuitive */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/06/15047.php">http://www.open-mpi.org/community/lists/devel/2014/06/15047.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15052.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>Previous message:</strong> <a href="15050.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] RFC: semantic change of opal_hwloc_base_get_relative_locality"</a>
<li><strong>In reply to:</strong> <a href="15047.php">Gilles Gouaillardet: "[OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
<li><strong>Reply:</strong> <a href="15053.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn fails under certain conditions"</a>
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
