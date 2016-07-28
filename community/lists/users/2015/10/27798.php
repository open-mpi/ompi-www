<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 09:29:28 2015" -->
<!-- isoreceived="20151005132928" -->
<!-- sent="Mon, 5 Oct 2015 22:29:24 +0900" -->
<!-- isosent="20151005132924" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="CAAkFZ5vH8knu0TQjD_Qn6kcT2+9dEnYamAw_oWKbtvpAmm4w5A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56127319.1040004_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-05 09:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27799.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27797.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27797.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27799.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marcin,
<br>
<p>there is no need to pursue 1.10.0 since it is known to be broken for some
<br>
scenario.
<br>
<p>it would really help me if you could provide the logs I requested, so I can
<br>
reproduce the issue and make sure we both talk about the same scenario.
<br>
<p>imho, there is no legitimate reason to -map-by hwthread -bind-to core.
<br>
we might even want to issue a warning to tell the end user he might not be
<br>
doing what he expects.
<br>
<p>I will double check the warning about one task using all the cores if there
<br>
is only one core available.
<br>
there should be no warning at all in this case.
<br>
<p>I will give mote thoughts to the alternative suggested by Ralph.
<br>
imho, bad things will happen whatever the policy we choose if slurm
<br>
assigns more than one job per socket : most real world applications are
<br>
memory bound, and sharing a socket makes the performance very unpredictable
<br>
anyway, and regardless ompi binding policy.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, October 5, 2015, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have applied the patch to both 1.10.0 and 1.10.1rc1. For 1.10.0 it did
</span><br>
<span class="quotelev1">&gt; not help - I am not sure how much (if) you want pursue this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 1.10.1rc1 I was so far unable to reproduce any binding problems with
</span><br>
<span class="quotelev1">&gt; jobs of up to 128 tasks. Some cosmetic suggestions. The warning it all
</span><br>
<span class="quotelev1">&gt; started with says
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCW rank X is not bound (or bound to all available processors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. One thing I already mentioned is that this warning is only displayed
</span><br>
<span class="quotelev1">&gt; when using --report-bindings, and instead of printing the actual binding. I
</span><br>
<span class="quotelev1">&gt; would suggest moving the warning somewhere else (maybe the
</span><br>
<span class="quotelev1">&gt; bind_downwards/upwards functions?), and instead just show the binding in
</span><br>
<span class="quotelev1">&gt; question. It might be trivial for homogeneous allocations, but is
</span><br>
<span class="quotelev1">&gt; non-obvious with the type of SLURM jobs discussed. Also, seeing the warning
</span><br>
<span class="quotelev1">&gt; only on the condition that --report-bindings was used, especially if the
</span><br>
<span class="quotelev1">&gt; user specified binding policy manually, is IMHO wrong - OpenMPI should
</span><br>
<span class="quotelev1">&gt; notify about failure somehow instead of quietly binding to all cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Another question altogether is if the warning should exist at all
</span><br>
<span class="quotelev1">&gt; (instead of error, as proposed by Ralph). I still get that warning, even
</span><br>
<span class="quotelev1">&gt; with 1.10.1rc1, in situations, in which I think it should not be displayed.
</span><br>
<span class="quotelev1">&gt; In the simplest case the warning is printed when only 1 MPI task is running
</span><br>
<span class="quotelev1">&gt; on a node. Obviously the statement is correct since the task is using all
</span><br>
<span class="quotelev1">&gt; allocated CPUs, but its not useful. A more nontrivial case is when using
</span><br>
<span class="quotelev1">&gt; '--bind-to socket', and when all MPI ranks are allocated on only one
</span><br>
<span class="quotelev1">&gt; socket. Again, effectively all MPI ranks use all assigned cores and the
</span><br>
<span class="quotelev1">&gt; warning is technically speaking correct, but misleading. Instead, as
</span><br>
<span class="quotelev1">&gt; discussed in 1., it would be good to see the actual binding printed instead
</span><br>
<span class="quotelev1">&gt; of the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. When I specify '--map-by hwthread --bind-to core', then I get multiple
</span><br>
<span class="quotelev1">&gt; MPI processes bound to the same physical core without actually specifying
</span><br>
<span class="quotelev1">&gt; --oversubscribe. Just a question whether it should be like this, but maybe
</span><br>
<span class="quotelev1">&gt; yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/05/2015 11:00 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is okay, in general. I would only make one change: I would
</span><br>
<span class="quotelev1">&gt; only search for an alternative site if the binding policy wasn&#226;&#128;&#153;t set by the
</span><br>
<span class="quotelev1">&gt; user. If the user specifies a mapping/binding pattern, then we should error
</span><br>
<span class="quotelev1">&gt; out as we cannot meet it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that would result in a non-transparent behavior in certain cases.
</span><br>
<span class="quotelev1">&gt; By default mapping is done by socket, and OpenMPI could behave differently
</span><br>
<span class="quotelev1">&gt; if '--map-by socket' is explicitly supplied on the command line - i.e.,
</span><br>
<span class="quotelev1">&gt; error out in jobs like discussed. Is this a good idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Introducing an error here is also a bit tricky. Consider allocating 5 mpi
</span><br>
<span class="quotelev1">&gt; processes to 2 sockets. You would get an error in this type of distribution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; socket 0: 2 jobs
</span><br>
<span class="quotelev1">&gt; socket 1: 3 jobs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but not in this one
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; socket 0: 3 jobs
</span><br>
<span class="quotelev1">&gt; socket 1: 2 jobs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just because you start counting from socket 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did think of one alternative that might be worth considering. If we have
</span><br>
<span class="quotelev1">&gt; a hetero topology, then we know that things are going to be a little
</span><br>
<span class="quotelev1">&gt; unusual. In that case, we could just default to map-by core (or hwthread if
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;use-hwthread-cpus was given) and then things would be fine even in
</span><br>
<span class="quotelev1">&gt; non-symmetric topologies. Likewise, if we have a homogeneous topology, we
</span><br>
<span class="quotelev1">&gt; could just quickly check for symmetry on our base topology (the one we will
</span><br>
<span class="quotelev1">&gt; use for mapping) and default to map-by core if non-symmetric.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having different default options for different cases becomes difficult to
</span><br>
<span class="quotelev1">&gt; manage and understand. If I could vote, I would rather go for an
</span><br>
<span class="quotelev1">&gt; informative error. Or to switch to '--map-by core' as default for all cases
</span><br>
<span class="quotelev1">&gt; ;) (probably not gonna happen..)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removing support of '--map-by socket' altogether for this type of jobs is
</span><br>
<span class="quotelev1">&gt; likely OK - don't know. I personally like the new way it works - if there
</span><br>
<span class="quotelev1">&gt; are resources, use them. But if you end up removing this possibility it
</span><br>
<span class="quotelev1">&gt; would probably be good to put it into SLURM related doc and produce some
</span><br>
<span class="quotelev1">&gt; meaningful error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest it only because we otherwise wind up with some oddball hybrid
</span><br>
<span class="quotelev1">&gt; mapping scheme. In the case we have here, procs would be mapped by socket
</span><br>
<span class="quotelev1">&gt; except where we have an extra core, where they would look like they were
</span><br>
<span class="quotelev1">&gt; mapped by core. Impossible to predict how the app will react to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The alternative be a more predictable pattern - would it make more sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2015, at 1:13 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph and Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is a proof of concept for a fix (assert should be replaced with
</span><br>
<span class="quotelev1">&gt; proper error handling)
</span><br>
<span class="quotelev1">&gt; for v1.10 branch.
</span><br>
<span class="quotelev1">&gt; if you have any chance to test it, please let me know the results
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
<span class="quotelev1">&gt; On 10/5/2015 1:08 PM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, i'll see what i can do :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/5/2015 12:39 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would consider that a bug, myself - if there is some resource available,
</span><br>
<span class="quotelev1">&gt; we should use it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2015, at 5:42 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i ran a simple test with v1.10.1rc1 under a cpuset with
</span><br>
<span class="quotelev1">&gt; - one core (two threads 0,16) on socket 0
</span><br>
<span class="quotelev1">&gt; - two cores (two threads each 8,9,24,25) on socket 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 -bind-to core ./hello_c
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
<span class="quotelev1">&gt;    Node:        rapid
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
<span class="quotelev1">&gt; as you already pointed, default mapping is by socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so on one hand, we can consider this behavior is a feature :
</span><br>
<span class="quotelev1">&gt; we try to bind two processes to socket 0, so the --oversubscribe option is
</span><br>
<span class="quotelev1">&gt; required
</span><br>
<span class="quotelev1">&gt; (and it does what it should :
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 3 -bind-to core --oversubscribe -report-bindings ./hello_c
</span><br>
<span class="quotelev1">&gt; [rapid:16278] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [rapid:16278] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [rapid:16278] MCW rank 2 bound to socket 0[core 0[hwt 0-1]]:
</span><br>
<span class="quotelev1">&gt; [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 3, (Open MPI v1.10.1rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; gilles_at_rapid Distribution, ident: 1.10.1rc1, repo rev:
</span><br>
<span class="quotelev1">&gt; v1.10.0-84-g15ae63f, Oct 03, 2015, 128)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 3, (Open MPI v1.10.1rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; gilles_at_rapid Distribution, ident: 1.10.1rc1, repo rev:
</span><br>
<span class="quotelev1">&gt; v1.10.0-84-g15ae63f, Oct 03, 2015, 128)
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 3, (Open MPI v1.10.1rc1, package: Open MPI
</span><br>
<span class="quotelev1">&gt; gilles_at_rapid Distribution, ident: 1.10.1rc1, repo rev:
</span><br>
<span class="quotelev1">&gt; v1.10.0-84-g15ae63f, Oct 03, 2015, 128)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and on the other hand, we could consider ompi should be a bit smarter, and
</span><br>
<span class="quotelev1">&gt; uses socket 1 for task 2 since socket 0 is fully allocated and there is
</span><br>
<span class="quotelev1">&gt; room on socket 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph, any thoughts ? bug or feature ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you mentionned you had one failure with 1.10.1rc1 and -bind-to core
</span><br>
<span class="quotelev1">&gt; could you please send the full details (script, allocation and output)
</span><br>
<span class="quotelev1">&gt; in your slurm script, you can do
</span><br>
<span class="quotelev1">&gt; srun -N $SLURM_NNODES -n $SLURM_NNODES --cpu_bind=none -l grep
</span><br>
<span class="quotelev1">&gt; Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev1">&gt; before invoking mpirun
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
<span class="quotelev1">&gt; On 10/4/2015 11:55 PM, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I played a bit more and it seems that the problem results from
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; trg_obj = opal_hwloc_base_find_min_bound_target_under_obj()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; called in rmaps_base_binding.c / bind_downwards being wrong. I do not know
</span><br>
<span class="quotelev1">&gt; the reason, but I think I know when the problem happens (at least on
</span><br>
<span class="quotelev1">&gt; 1.10.1rc1). It seems that by default openmpi maps by socket. The error
</span><br>
<span class="quotelev1">&gt; happens when for a given compute node there is a different number of cores
</span><br>
<span class="quotelev1">&gt; used on each socket. Consider previously studied case (the debug outputs I
</span><br>
<span class="quotelev1">&gt; sent in last post). c1-8, which was source of error, has 5 mpi processes
</span><br>
<span class="quotelev1">&gt; assigned, and the cpuset is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0, 5, 9, 13, 14, 16, 21, 25, 29, 30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cores 0,5 are on socket 0, cores 9, 13, 14 are on socket 1. Binding
</span><br>
<span class="quotelev1">&gt; progresses correctly up to and including core 13 (see end of file
</span><br>
<span class="quotelev1">&gt; out.1.10.1rc2, before the error). That is 2 cores on socket 0, and 2 cores
</span><br>
<span class="quotelev1">&gt; on socket 1. Error is thrown when core 14 should be bound - extra core on
</span><br>
<span class="quotelev1">&gt; socket 1 with no corresponding core on socket 0. At that point the returned
</span><br>
<span class="quotelev1">&gt; trg_obj points to the first core on the node (os_index 0, socket 0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have submitted a few other jobs and I always had an error in such
</span><br>
<span class="quotelev1">&gt; situation. Moreover, if I now use --map-by core instead of socket, the
</span><br>
<span class="quotelev1">&gt; error is gone, and I get my expected binding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rank 0 @ compute-1-2.local  1, 17,
</span><br>
<span class="quotelev1">&gt; rank 1 @ compute-1-2.local  2, 18,
</span><br>
<span class="quotelev1">&gt; rank 2 @ compute-1-2.local  3, 19,
</span><br>
<span class="quotelev1">&gt; rank 3 @ compute-1-2.local  4, 20,
</span><br>
<span class="quotelev1">&gt; rank 4 @ compute-1-4.local  1, 17,
</span><br>
<span class="quotelev1">&gt; rank 5 @ compute-1-4.local  15, 31,
</span><br>
<span class="quotelev1">&gt; rank 6 @ compute-1-8.local  0, 16,
</span><br>
<span class="quotelev1">&gt; rank 7 @ compute-1-8.local  5, 21,
</span><br>
<span class="quotelev1">&gt; rank 8 @ compute-1-8.local  9, 25,
</span><br>
<span class="quotelev1">&gt; rank 9 @ compute-1-8.local  13, 29,
</span><br>
<span class="quotelev1">&gt; rank 10 @ compute-1-8.local  14, 30,
</span><br>
<span class="quotelev1">&gt; rank 11 @ compute-1-13.local  3, 19,
</span><br>
<span class="quotelev1">&gt; rank 12 @ compute-1-13.local  4, 20,
</span><br>
<span class="quotelev1">&gt; rank 13 @ compute-1-13.local  5, 21,
</span><br>
<span class="quotelev1">&gt; rank 14 @ compute-1-13.local  6, 22,
</span><br>
<span class="quotelev1">&gt; rank 15 @ compute-1-13.local  7, 23,
</span><br>
<span class="quotelev1">&gt; rank 16 @ compute-1-16.local  12, 28,
</span><br>
<span class="quotelev1">&gt; rank 17 @ compute-1-16.local  13, 29,
</span><br>
<span class="quotelev1">&gt; rank 18 @ compute-1-16.local  14, 30,
</span><br>
<span class="quotelev1">&gt; rank 19 @ compute-1-16.local  15, 31,
</span><br>
<span class="quotelev1">&gt; rank 20 @ compute-1-23.local  2, 18,
</span><br>
<span class="quotelev1">&gt; rank 29 @ compute-1-26.local  11, 27,
</span><br>
<span class="quotelev1">&gt; rank 21 @ compute-1-23.local  3, 19,
</span><br>
<span class="quotelev1">&gt; rank 30 @ compute-1-26.local  13, 29,
</span><br>
<span class="quotelev1">&gt; rank 22 @ compute-1-23.local  4, 20,
</span><br>
<span class="quotelev1">&gt; rank 31 @ compute-1-26.local  15, 31,
</span><br>
<span class="quotelev1">&gt; rank 23 @ compute-1-23.local  8, 24,
</span><br>
<span class="quotelev1">&gt; rank 27 @ compute-1-26.local  1, 17,
</span><br>
<span class="quotelev1">&gt; rank 24 @ compute-1-23.local  13, 29,
</span><br>
<span class="quotelev1">&gt; rank 28 @ compute-1-26.local  6, 22,
</span><br>
<span class="quotelev1">&gt; rank 25 @ compute-1-23.local  14, 30,
</span><br>
<span class="quotelev1">&gt; rank 26 @ compute-1-23.local  15, 31,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using --map-by core seems to fix the issue on 1.8.8, 1.10.0 and 1.10.1rc1.
</span><br>
<span class="quotelev1">&gt; However, there is still a difference in behavior between 1.10.1rc1 and
</span><br>
<span class="quotelev1">&gt; earlier versions. In the SLURM job described in last post, 1.10.1rc1 fails
</span><br>
<span class="quotelev1">&gt; to bind only in 1 case, while the earlier versions fail in 21 out of 32
</span><br>
<span class="quotelev1">&gt; cases. You mentioned there was a bug in hwloc. Not sure if it can explain
</span><br>
<span class="quotelev1">&gt; the difference in behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps to nail this down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/04/2015 09:55 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect ompi tries to bind to threads outside the cpuset.
</span><br>
<span class="quotelev1">&gt; this could be pretty similar to a previous issue when ompi tried to bind
</span><br>
<span class="quotelev1">&gt; to cores outside the cpuset.
</span><br>
<span class="quotelev1">&gt; /* when a core has more than one thread, would ompi assume all the threads
</span><br>
<span class="quotelev1">&gt; are available if the core is available ? */
</span><br>
<span class="quotelev1">&gt; I will investigate this from tomorrow
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
<span class="quotelev1">&gt; On Sunday, October 4, 2015, Ralph Castain &lt;
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks - please go ahead and release that allocation as I&#226;&#128;&#153;m not going to
</span><br>
<span class="quotelev2">&gt;&gt; get to this immediately. I&#226;&#128;&#153;ve got several hot irons in the fire right now,
</span><br>
<span class="quotelev2">&gt;&gt; and I&#226;&#128;&#153;m not sure when I&#226;&#128;&#153;ll get a chance to track this down.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles or anyone else who might have time - feel free to take a gander
</span><br>
<span class="quotelev2">&gt;&gt; and see if something pops out at you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 11:05 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Done. I have compiled 1.10.0 and 1.10.rc1 with --enable-debug and executed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca rmaps_base_verbose 10 --hetero-nodes --report-bindings
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In case of 1.10.rc1 I have also added :overload-allowed - output in a
</span><br>
<span class="quotelev2">&gt;&gt; separate file. This option did not make much difference for 1.10.0, so I
</span><br>
<span class="quotelev2">&gt;&gt; did not attach it here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First thing I noted for 1.10.0 are lines like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [login-0-1.local:03399] [[37945,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev2">&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] BITMAP
</span><br>
<span class="quotelev2">&gt;&gt; [login-0-1.local:03399] [[37945,0],0] PROC [[37945,1],27] ON c1-26 IS NOT
</span><br>
<span class="quotelev2">&gt;&gt; BOUND
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with an empty BITMAP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The SLURM environment is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set | grep SLURM
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOBID=12714491
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_CPUS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_ID=12714491
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_NUM_NODES=7
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_PARTITION=normal
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_MEM_PER_CPU=2048
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_NNODES=7
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_NODELIST='c1-[2,4,8,13,16,23,26]'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_NODE_ALIASES='(null)'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_NPROCS=32
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_NTASKS=32
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_SUBMIT_DIR=/cluster/home/marcink
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_SUBMIT_HOST=login-0-1.local
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_TASKS_PER_NODE='4,2,5(x2),4,7,5'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have submitted an interactive job on screen for 120 hours now to work
</span><br>
<span class="quotelev2">&gt;&gt; with one example, and not change it for every post :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you need anything else, let me know. I could introduce some
</span><br>
<span class="quotelev2">&gt;&gt; patch/printfs and recompile, if you need it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 07:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rats - just realized I have no way to test this as none of the machines I
</span><br>
<span class="quotelev2">&gt;&gt; can access are setup for cgroup-based multi-tenant. Is this a debug version
</span><br>
<span class="quotelev2">&gt;&gt; of OMPI? If not, can you rebuild OMPI with &#226;&#128;&#148;enable-debug?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then please run it with &#226;&#128;&#148;mca rmaps_base_verbose 10 and pass along the
</span><br>
<span class="quotelev2">&gt;&gt; output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 10:09 AM, Ralph Castain &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What version of slurm is this? I might try to debug it here. I&#226;&#128;&#153;m not sure
</span><br>
<span class="quotelev2">&gt;&gt; where the problem lies just yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 8:59 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output of lstopo. In short, (0,16) are core 0, (1,17) - core
</span><br>
<span class="quotelev2">&gt;&gt; 1 etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev2">&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#1 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#2 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#3 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#4 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#5 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#6 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#7 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#8 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#9 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#10 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#11 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#12 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#13 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#14 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;         PU L#15 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev2">&gt;&gt;           Net L#2 &quot;ib0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           OpenFabrics L#3 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 102b:0532
</span><br>
<span class="quotelev2">&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev2">&gt;&gt;         Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#1 (P#1 32GB) + Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#16 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#17 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#18 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#19 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#20 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#21 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#22 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#23 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#24 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#25 (P#28)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#26 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#27 (P#29)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#28 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#29 (P#30)
</span><br>
<span class="quotelev2">&gt;&gt;     L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#30 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;       PU L#31 (P#31)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 05:46 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe I&#226;&#128;&#153;m just misreading your HT map - that slurm nodelist syntax is a
</span><br>
<span class="quotelev2">&gt;&gt; new one to me, but they tend to change things around. Could you run lstopo
</span><br>
<span class="quotelev2">&gt;&gt; on one of those compute nodes and send the output?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m just suspicious because I&#226;&#128;&#153;m not seeing a clear pairing of HT numbers
</span><br>
<span class="quotelev2">&gt;&gt; in your output, but HT numbering is BIOS-specific and I may just not be
</span><br>
<span class="quotelev2">&gt;&gt; understanding your particular pattern. Our error message is clearly
</span><br>
<span class="quotelev2">&gt;&gt; indicating that we are seeing individual HTs (and not complete cores)
</span><br>
<span class="quotelev2">&gt;&gt; assigned, and I don&#226;&#128;&#153;t know the source of that confusion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2015, at 8:28 AM, marcin.krotkiewski &lt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; marcin.krotkiewski_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','marcin.krotkiewski_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/03/2015 04:38 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If mpirun isn&#226;&#128;&#153;t trying to do any binding, then you will of course get the
</span><br>
<span class="quotelev2">&gt;&gt; right mapping as we&#226;&#128;&#153;ll just inherit whatever we received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. I meant that whatever you received (what SLURM gives) is a correct
</span><br>
<span class="quotelev2">&gt;&gt; cpu map and assigns _whole_ CPUs, not a single HT to MPI processes. In the
</span><br>
<span class="quotelev2">&gt;&gt; case mentioned earlier openmpi should start 6 tasks on c1-30. If HT would
</span><br>
<span class="quotelev2">&gt;&gt; be treated as separate and independent cores, sched_getaffinity of an MPI
</span><br>
<span class="quotelev2">&gt;&gt; process started on c1-30 would return a map with 6 entries only. In my case
</span><br>
<span class="quotelev2">&gt;&gt; it returns a map with 12 entries - 2 for each core. So one  process is in
</span><br>
<span class="quotelev2">&gt;&gt; fact allocated both HTs, not only one. Is what I'm saying correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at your output, it&#226;&#128;&#153;s pretty clear that you are getting
</span><br>
<span class="quotelev2">&gt;&gt; independent HTs assigned and not full cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you mean? Is the above understanding wrong? I would expect that on
</span><br>
<span class="quotelev2">&gt;&gt; c1-30 with --bind-to core openmpi should bind to logical cores 0 and 16
</span><br>
<span class="quotelev2">&gt;&gt; (rank 0), 1 and 17 (rank 2) and so on. All those logical cores are
</span><br>
<span class="quotelev2">&gt;&gt; available in sched_getaffinity map, and there is twice as many logical
</span><br>
<span class="quotelev2">&gt;&gt; cores as there are MPI processes started on the node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that something in slurm has changed such that it detects that
</span><br>
<span class="quotelev2">&gt;&gt; HT has been enabled, and then begins treating the HTs as completely
</span><br>
<span class="quotelev2">&gt;&gt; independent cpus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try changing &#226;&#128;&#156;-bind-to core&#226;&#128;&#157; to &#226;&#128;&#156;-bind-to hwthread  -use-hwthread-cpus&#226;&#128;&#157;
</span><br>
<span class="quotelev2">&gt;&gt; and see if that works
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have and the binding is wrong. For example, I got this output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0,
</span><br>
<span class="quotelev2">&gt;&gt; rank 1 @ compute-1-30.local  16,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which means that two ranks have been bound to the same physical core
</span><br>
<span class="quotelev2">&gt;&gt; (logical cores 0 and 16 are two HTs of the same core). If I use --bind-to
</span><br>
<span class="quotelev2">&gt;&gt; core, I get the following correct binding
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; rank 0 @ compute-1-30.local  0, 16,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is many other ranks get bad binding with 'rank XXX is not
</span><br>
<span class="quotelev2">&gt;&gt; bound (or bound to all available processors)' warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I think I was not entirely correct saying that 1.10.1rc1 did not fix
</span><br>
<span class="quotelev2">&gt;&gt; things. It still might have improved something, but not everything.
</span><br>
<span class="quotelev2">&gt;&gt; Consider this job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_CPUS_PER_NODE='5,4,6,5(x2),7,5,9,5,7,6'
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_NODELIST='c8-[31,34],c9-[30-32,35-36],c10-[31-34]'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run 32 tasks as follows (with 1.10.1rc1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hetero-nodes --report-bindings --bind-to core -np 32 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27799.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27797.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>In reply to:</strong> <a href="27797.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27799.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
