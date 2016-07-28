<?
$subject_val = "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 19:46:17 2011" -->
<!-- isoreceived="20110714234617" -->
<!-- sent="Thu, 14 Jul 2011 19:46:09 -0400" -->
<!-- isosent="20110714234609" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI &amp;amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)" -->
<!-- id="2BC5F5B7-0B81-4014-BE36-A902F64D1484_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALh_qWPN+AF+YfuVLBPTafrLvHLW8RF_JyQXKc0KH0swsy+oEg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 19:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Reply:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looping in the users mailing list so that Ralph and Oracle can comment...
<br>
<p><p>On Jul 14, 2011, at 2:34 PM, Rayson Ho wrote:
<br>
<p><span class="quotelev1">&gt; (CC'ing Jeff from the Open-MPI project...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 14, 2011 at 1:35 PM, Tad Kollar &lt;tad.kollar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; As I thought more about it, I was afraid that might be the case, but hoped
</span><br>
<span class="quotelev2">&gt;&gt; sge_shepherd would do some magic for tightly-integrated jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To SGE, if each of the tasks is not started by sge_shepherd, then the
</span><br>
<span class="quotelev1">&gt; only option is to set the binding mask to the allocation, which in
</span><br>
<span class="quotelev1">&gt; your original case, was the whole system (48 CPUs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're running OpenMPI 1.5.3 if that makes a difference. Do you know of
</span><br>
<span class="quotelev2">&gt;&gt; anyone using an MVAPICH2 1.6 pe that can handle binding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just downloaded Open MPI 1.5.4a and grep'ed the source, looks like
</span><br>
<span class="quotelev1">&gt; it is not looking at the SGE_BINDING env variable that is set by SGE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The serial case worked (its affinity list was '0' instead of '0-47'), so at
</span><br>
<span class="quotelev2">&gt;&gt; least we know that's in good shape :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please also submit a few more jobs and see if the new hwloc code is
</span><br>
<span class="quotelev1">&gt; able to handle multiple jobs running on your AMD MC server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My ultimate goal is for affinity support to be enabled and scheduled
</span><br>
<span class="quotelev2">&gt;&gt; automatically for all MPI users, i.e. without them having to do any more
</span><br>
<span class="quotelev2">&gt;&gt; than they would for a no-affinity job (otherwise I have a feeling most of
</span><br>
<span class="quotelev2">&gt;&gt; them would just ignore it). What do you think it will take to get to that
</span><br>
<span class="quotelev2">&gt;&gt; point?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's my goal since 2008...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started a mail thread, &quot;processor affinity -- OpenMPI / batchsystem
</span><br>
<span class="quotelev1">&gt; integration&quot; to the Open MPI list in 2008. And in 2009, the conclusion
</span><br>
<span class="quotelev1">&gt; was that Sun was saying that the binding info is set in the
</span><br>
<span class="quotelev1">&gt; environment and Open MPI would perform the binding itself (so I
</span><br>
<span class="quotelev1">&gt; assumed that was done):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/10/10938.php">http://www.open-mpi.org/community/lists/users/2009/10/10938.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Revisiting the presentation (see: job2core.pdf link at the above URL),
</span><br>
<span class="quotelev1">&gt; Sun's variable name is $SUNW_MP_BIND, so it is most likely Sun Cluster
</span><br>
<span class="quotelev1">&gt; Toolkit implementation specific rather than a feature in Open MPI --
</span><br>
<span class="quotelev1">&gt; and looking at the Open MPI code I don't see SUNW_MP_BIND referenced
</span><br>
<span class="quotelev1">&gt; anywhere.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe it is a matter of integrating the thread binding support
</span><br>
<span class="quotelev1">&gt; between the 2 -- both SGE &amp; Open MPI support thread binding. The
</span><br>
<span class="quotelev1">&gt; harder part is to handle cross node binding as SGE binds threads
</span><br>
<span class="quotelev1">&gt; locally only (not directly controlled by qmaster) -- may be a call to
</span><br>
<span class="quotelev1">&gt; &quot;qstat -cb -j &lt;job id&gt;&quot; would do the trick, and the info is parsed and
</span><br>
<span class="quotelev1">&gt; passed to mpirun via the &quot;--rankfile&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4">http://www.open-mpi.org/faq/?category=tuning#using-paffinity-v1.4</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Tad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16921.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16919.php">dave fournier: "[OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
<li><strong>Reply:</strong> <a href="16931.php">Ralph Castain: "Re: [OMPI users] Open MPI &amp; Grid Engine/Grid Scheduler thread binding (was: New loadcheck)"</a>
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
