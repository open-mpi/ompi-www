<?
$subject_val = "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 15 06:57:33 2011" -->
<!-- isoreceived="20110715105733" -->
<!-- sent="Fri, 15 Jul 2011 06:57:21 -0400" -->
<!-- isosent="20110715105721" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI &amp;amp; Grid Engine/Grid Scheduler thread binding" -->
<!-- id="4E201D11.1060000_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4779E8FF-B766-46A0-A9C9-1E03397C5CB3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-15 06:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's, hopefully, more useful info.  Note reading the job2core.pdf 
<br>
presentation, that was  mentioned earlier, more closely will also 
<br>
clarify a couple points (I've put those points inline below).
<br>
<p>On 7/15/2011 12:01 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Jul 14, 2011, at 5:46 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looping in the users mailing list so that Ralph and Oracle can comment...
</span><br>
<span class="quotelev1">&gt; Not entirely sure what I can contribute here, but I'll try - see below for some clarifications. I think the discussion here is based on some misunderstanding of how OMPI works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 14, 2011, at 2:34 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (CC'ing Jeff from the Open-MPI project...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 14, 2011 at 1:35 PM, Tad Kollar&lt;tad.kollar_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As I thought more about it, I was afraid that might be the case, but hoped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sge_shepherd would do some magic for tightly-integrated jobs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To SGE, if each of the tasks is not started by sge_shepherd, then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only option is to set the binding mask to the allocation, which in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your original case, was the whole system (48 CPUs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We're running OpenMPI 1.5.3 if that makes a difference. Do you know of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anyone using an MVAPICH2 1.6 pe that can handle binding?
</span><br>
<span class="quotelev1">&gt; OMPI uses its own binding scheme - we stick within the overall binding envelope given to us, but we don't use external bindings of individual procs. Reason is simple: SGE has no visibility into the MPI procs we spawn. All SGE sees is mpirun and the daemons (called orteds) we launch on each node, and so it can't provide a binding scheme for the MPI procs (it actually has no idea how many procs are on each node as OMPI's mapper can support a multitude of algorithms, all invisible to SGE).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
However, if one reads the job2core.pdf presentation on page 14 it talks 
<br>
about how SGE will pass a rankfile to Open MPI which is how SGE drives 
<br>
the binding it wants for an Open MPI job.
<br>
<span class="quotelev3">&gt;&gt;&gt; I just downloaded Open MPI 1.5.4a and grep'ed the source, looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is not looking at the SGE_BINDING env variable that is set by SGE.
</span><br>
<span class="quotelev1">&gt; No, we don't. However, the orteds do check to see if they have been bound, and if so, to what processors. Those bindings are then used as an envelope limiting the processors we use to bind the procs we spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I believe SGE_BINDING is an env-var to SGE that tells it what binding to 
<br>
use for the job and SGE will then, as mentioned above, generate a 
<br>
rankfile to be used by Open MPI.
<br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The serial case worked (its affinity list was '0' instead of '0-47'), so at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; least we know that's in good shape :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please also submit a few more jobs and see if the new hwloc code is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to handle multiple jobs running on your AMD MC server.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My ultimate goal is for affinity support to be enabled and scheduled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically for all MPI users, i.e. without them having to do any more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than they would for a no-affinity job (otherwise I have a feeling most of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them would just ignore it). What do you think it will take to get to that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; point?
</span><br>
<span class="quotelev1">&gt; We tried to do this once - I set a default param to auto-bind processes. Major error. I was lynched by the MPI user community until we removed that param.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason is simple: suppose you have MPI processes that launch threads. Remember, there is no thread-level binding out there - all the OS will let you do is bind at the process level. So now you bind someone's MPI process to some core(s), which forces all the threads from that process to stay within that binding....thereby potentially creating a horrendous thread-contention problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't take threading to cause problems - some applications just don't work as well when bound. It's true that the benchmarks generally do, but they aren't representative of real applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bottom line: defaulting to binding processes was something the MPI community appears to have rejected, with reason. Might argue about whether or not they are correct, but that appears to be the consensus, and it is the position OMPI has adopted. User ignorance of when to bind and when not to bind is not a valid reason to impact everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That's my goal since 2008...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I started a mail thread, &quot;processor affinity -- OpenMPI / batchsystem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integration&quot; to the Open MPI list in 2008. And in 2009, the conclusion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was that Sun was saying that the binding info is set in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment and Open MPI would perform the binding itself (so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assumed that was done):
</span><br>
<span class="quotelev1">&gt; It is done - we just use OMPI's binding schemes and not the ones provided natively by SGE. Like I said above, SGE doesn't see the MPI procs and can't provide a binding pattern for them - so looking at the SUNW_MP_BIND envar is pointless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Note SUNW_MP_BIND has *nothing* to do with  Open MPI but is a way that 
<br>
SGE feeds binding to OpenMP (note no &quot;I&quot;) applications.  So Ralph is 
<br>
right that this env-var is pointless from an Open MPI perspective.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/10/10938.php">http://www.open-mpi.org/community/lists/users/2009/10/10938.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Revisiting the presentation (see: job2core.pdf link at the above URL),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sun's variable name is $SUNW_MP_BIND, so it is most likely Sun Cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Toolkit implementation specific rather than a feature in Open MPI --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and looking at the Open MPI code I don't see SUNW_MP_BIND referenced
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anywhere.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe it is a matter of integrating the thread binding support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the 2 -- both SGE&amp;  Open MPI support thread binding.
</span><br>
First, Sun ClusterTools version 7 and above is directly based off of 
<br>
Open MPI.  Second, as mentioned before SUNW_MP_BIND is an env-var to 
<br>
control OpenMP binding not MPI binding (Open MPI or ClusterTools).
<br>
<span class="quotelev1">&gt; I don't believe this is accurate - certainly OMPI doesn't support thread-level binding, and I haven't seen an OS that does yet. Might happen  someday...but I suspect you mean &quot;process&quot; and not &quot;thread&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Someday my prince will come and we will have thread binding for 
<br>
everyone.  Well almost...
<br>
<p>--td
<br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; harder part is to handle cross node binding as SGE binds threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; locally only (not directly controlled by qmaster) -- may be a call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;qstat -cb -j&lt;job id&gt;&quot; would do the trick, and the info is parsed and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passed to mpirun via the &quot;--rankfile&quot; option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tad
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16934/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16935.php">Terry Dontje: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16933.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<!-- nextthread="start" -->
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
