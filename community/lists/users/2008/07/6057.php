<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:45:31 2008" -->
<!-- isoreceived="20080711144531" -->
<!-- sent="Fri, 11 Jul 2008 08:45:23 -0600" -->
<!-- isosent="20080711144523" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="C49CCE23.E42D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1215786808.6514.31.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:45:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6058.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/08 8:33 AM, &quot;Ashley Pittman&quot; &lt;apittman_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2008-07-11 at 08:01 -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe this is partly what motivated the creation of the MPI envars - to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; create a vehicle that -would- be guaranteed stable for just these purposes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The concern was that users were doing things that accessed internal envars
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which we changed from version to version. The new envars will remain fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Absolutely, these are useful time and time again so should be part of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the API and hence stable.  Care to mention what they are and I'll add it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to my note as something to change when upgrading to 1.3 (we are looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at testing a snapshot in the near future).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Surely:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_SIZE            #procs in the job
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE      #procs in this job that are sharing the node
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_UNIVERSE_SIZE              total #slots allocated to this user
</span><br>
<span class="quotelev2">&gt;&gt;                                 (across all nodes)
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_RANK            proc's rank
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK      local rank on node - lowest rank'd proc on
</span><br>
<span class="quotelev2">&gt;&gt;                                 the node is given local_rank=0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there are others that would be useful, now is definitely the time to
</span><br>
<span class="quotelev2">&gt;&gt; speak up!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only other one I'd like to see is some kind of global identifier for
</span><br>
<span class="quotelev1">&gt; the job but as far as I can see I don't believe that openmpi has such a
</span><br>
<span class="quotelev1">&gt; concept.
</span><br>
<p>Not really - of course, many environments have a jobid they assign at time
<br>
of allocation. We could create a unified identifier from that to ensure a
<br>
consistent name was always available, but the problem would be that not all
<br>
environments provide it (e.g., rsh). To guarantee that the variable would
<br>
always be there, we would have to make something up in those cases.
<br>
<p>&lt;shrug&gt; could easily be done I suppose - let me raise the question
<br>
internally and see the response.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley Pittman.
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
<li><strong>Next message:</strong> <a href="6058.php">Ashley Pittman: "Re: [OMPI users] Valgrind Functionality"</a>
<li><strong>Previous message:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
