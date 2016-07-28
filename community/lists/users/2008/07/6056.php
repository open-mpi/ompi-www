<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:33:33 2008" -->
<!-- isoreceived="20080711143333" -->
<!-- sent="Fri, 11 Jul 2008 15:33:28 +0100" -->
<!-- isosent="20080711143328" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="1215786808.6514.31.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="C49CC3C6.E412%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 10:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6055.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="6054.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-07-11 at 08:01 -0600, Ralph H Castain wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; I believe this is partly what motivated the creation of the MPI envars - to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; create a vehicle that -would- be guaranteed stable for just these purposes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The concern was that users were doing things that accessed internal envars
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which we changed from version to version. The new envars will remain fixed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Absolutely, these are useful time and time again so should be part of
</span><br>
<span class="quotelev2">&gt; &gt; the API and hence stable.  Care to mention what they are and I'll add it
</span><br>
<span class="quotelev2">&gt; &gt; to my note as something to change when upgrading to 1.3 (we are looking
</span><br>
<span class="quotelev2">&gt; &gt; at testing a snapshot in the near future).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Surely:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_SIZE            #procs in the job
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_SIZE      #procs in this job that are sharing the node
</span><br>
<span class="quotelev1">&gt; OMPI_UNIVERSE_SIZE              total #slots allocated to this user
</span><br>
<span class="quotelev1">&gt;                                 (across all nodes)
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_RANK            proc's rank
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK      local rank on node - lowest rank'd proc on
</span><br>
<span class="quotelev1">&gt;                                 the node is given local_rank=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there are others that would be useful, now is definitely the time to
</span><br>
<span class="quotelev1">&gt; speak up!
</span><br>
<p>The only other one I'd like to see is some kind of global identifier for
<br>
the job but as far as I can see I don't believe that openmpi has such a
<br>
concept.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6055.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="6054.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6057.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
