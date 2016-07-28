<?
$subject_val = "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 00:01:33 2011" -->
<!-- isoreceived="20110715040133" -->
<!-- sent="Thu, 14 Jul 2011 22:01:24 -0600" -->
<!-- isosent="20110715040124" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI &amp;amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)" -->
<!-- id="4779E8FF-B766-46A0-A9C9-1E03397C5CB3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2BC5F5B7-0B81-4014-BE36-A902F64D1484_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 00:01:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>Reply:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2011, at 5:46 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Looping in the users mailing list so that Ralph and Oracle can comment...
</span><br>
<p>Not entirely sure what I can contribute here, but I'll try - see below for some clarifications. I think the discussion here is based on some misunderstanding of how OMPI works.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 2:34 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (CC'ing Jeff from the Open-MPI project...)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 14, 2011 at 1:35 PM, Tad Kollar &lt;tad.kollar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I thought more about it, I was afraid that might be the case, but hoped
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sge_shepherd would do some magic for tightly-integrated jobs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To SGE, if each of the tasks is not started by sge_shepherd, then the
</span><br>
<span class="quotelev2">&gt;&gt; only option is to set the binding mask to the allocation, which in
</span><br>
<span class="quotelev2">&gt;&gt; your original case, was the whole system (48 CPUs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're running OpenMPI 1.5.3 if that makes a difference. Do you know of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone using an MVAPICH2 1.6 pe that can handle binding?
</span><br>
<p>OMPI uses its own binding scheme - we stick within the overall binding envelope given to us, but we don't use external bindings of individual procs. Reason is simple: SGE has no visibility into the MPI procs we spawn. All SGE sees is mpirun and the daemons (called orteds) we launch on each node, and so it can't provide a binding scheme for the MPI procs (it actually has no idea how many procs are on each node as OMPI's mapper can support a multitude of algorithms, all invisible to SGE).
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just downloaded Open MPI 1.5.4a and grep'ed the source, looks like
</span><br>
<span class="quotelev2">&gt;&gt; it is not looking at the SGE_BINDING env variable that is set by SGE.
</span><br>
<p>No, we don't. However, the orteds do check to see if they have been bound, and if so, to what processors. Those bindings are then used as an envelope limiting the processors we use to bind the procs we spawn.
<br>
<p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The serial case worked (its affinity list was '0' instead of '0-47'), so at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; least we know that's in good shape :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please also submit a few more jobs and see if the new hwloc code is
</span><br>
<span class="quotelev2">&gt;&gt; able to handle multiple jobs running on your AMD MC server.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My ultimate goal is for affinity support to be enabled and scheduled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically for all MPI users, i.e. without them having to do any more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than they would for a no-affinity job (otherwise I have a feeling most of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them would just ignore it). What do you think it will take to get to that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point?
</span><br>
<p>We tried to do this once - I set a default param to auto-bind processes. Major error. I was lynched by the MPI user community until we removed that param.
<br>
<p>Reason is simple: suppose you have MPI processes that launch threads. Remember, there is no thread-level binding out there - all the OS will let you do is bind at the process level. So now you bind someone's MPI process to some core(s), which forces all the threads from that process to stay within that binding....thereby potentially creating a horrendous thread-contention problem.
<br>
<p>It doesn't take threading to cause problems - some applications just don't work as well when bound. It's true that the benchmarks generally do, but they aren't representative of real applications.
<br>
<p>Bottom line: defaulting to binding processes was something the MPI community appears to have rejected, with reason. Might argue about whether or not they are correct, but that appears to be the consensus, and it is the position OMPI has adopted. User ignorance of when to bind and when not to bind is not a valid reason to impact everyone.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's my goal since 2008...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I started a mail thread, &quot;processor affinity -- OpenMPI / batchsystem
</span><br>
<span class="quotelev2">&gt;&gt; integration&quot; to the Open MPI list in 2008. And in 2009, the conclusion
</span><br>
<span class="quotelev2">&gt;&gt; was that Sun was saying that the binding info is set in the
</span><br>
<span class="quotelev2">&gt;&gt; environment and Open MPI would perform the binding itself (so I
</span><br>
<span class="quotelev2">&gt;&gt; assumed that was done):
</span><br>
<p>It is done - we just use OMPI's binding schemes and not the ones provided natively by SGE. Like I said above, SGE doesn't see the MPI procs and can't provide a binding pattern for them - so looking at the SUNW_MP_BIND envar is pointless.
<br>
<p><p><span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/10/10938.php">http://www.open-mpi.org/community/lists/users/2009/10/10938.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Revisiting the presentation (see: job2core.pdf link at the above URL),
</span><br>
<span class="quotelev2">&gt;&gt; Sun's variable name is $SUNW_MP_BIND, so it is most likely Sun Cluster
</span><br>
<span class="quotelev2">&gt;&gt; Toolkit implementation specific rather than a feature in Open MPI --
</span><br>
<span class="quotelev2">&gt;&gt; and looking at the Open MPI code I don't see SUNW_MP_BIND referenced
</span><br>
<span class="quotelev2">&gt;&gt; anywhere.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe it is a matter of integrating the thread binding support
</span><br>
<span class="quotelev2">&gt;&gt; between the 2 -- both SGE &amp; Open MPI support thread binding.
</span><br>
<p><p>I don't believe this is accurate - certainly OMPI doesn't support thread-level binding, and I haven't seen an OS that does yet. Might happen  someday...but I suspect you mean &quot;process&quot; and not &quot;thread&quot;.
<br>
<p><p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev2">&gt;&gt; The
</span><br>
<span class="quotelev2">&gt;&gt; harder part is to handle cross node binding as SGE binds threads
</span><br>
<span class="quotelev2">&gt;&gt; locally only (not directly controlled by qmaster) -- may be a call to
</span><br>
<span class="quotelev2">&gt;&gt; &quot;qstat -cb -j &lt;job id&gt;&quot; would do the trick, and the info is parsed and
</span><br>
<span class="quotelev2">&gt;&gt; passed to mpirun via the &quot;--rankfile&quot; option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tad
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="16932.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16920.php">Jeff Squyres: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
<li><strong>Reply:</strong> <a href="16934.php">Terry Dontje: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding"</a>
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
