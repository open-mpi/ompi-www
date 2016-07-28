<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 10:01:18 2008" -->
<!-- isoreceived="20080711140118" -->
<!-- sent="Fri, 11 Jul 2008 08:01:10 -0600" -->
<!-- isosent="20080711140110" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="C49CC3C6.E412%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1215784233.6514.18.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Date:</strong> 2008-07-11 10:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6055.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/08 7:50 AM, &quot;Ashley Pittman&quot; &lt;apittman_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2008-07-11 at 07:42 -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 7/11/08 7:32 AM, &quot;Ashley Pittman&quot; &lt;apittman_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, 2008-07-11 at 07:20 -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This variable is only for internal use and has no applicability to a user.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically, it is used by the local daemon to tell an application process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; its
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank when launched.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that it disappears in v1.3...so I wouldn't recommend looking for it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there something you are trying to do with it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recently on this list I recommended somebody use it for their needs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/06/5983.php">http://www.open-mpi.org/community/lists/users/2008/06/5983.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah - yeah, that one slid by me. I'll address it directly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was quite surprised that openmpi didn't have a command option for this
</span><br>
<span class="quotelev1">&gt; actually, it's quite a common thing to use.
</span><br>
<p>Nobody asked... ;-)
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reason I ask: some folks wanted to know things like the MPI rank prior to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; calling MPI_Init, so we added a few MPI envar's that are available from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; beginning of process execution, if that is what you are looking for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's also essential for Valgrind support which can use it to name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logfiles according to rank using the --log-file=valgrind.out.%
</span><br>
<span class="quotelev3">&gt;&gt;&gt; q{OMPI_MCA_ns_nds_vpid} option.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, it won't hurt for now - but it won't work with 1.3 or beyond. It's
</span><br>
<span class="quotelev2">&gt;&gt; always risky to depend upon a code's internal variables as developers feel
</span><br>
<span class="quotelev2">&gt;&gt; free to change those as circumstances dictate since users aren't supposed to
</span><br>
<span class="quotelev2">&gt;&gt; be affected.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe this is partly what motivated the creation of the MPI envars - to
</span><br>
<span class="quotelev2">&gt;&gt; create a vehicle that -would- be guaranteed stable for just these purposes.
</span><br>
<span class="quotelev2">&gt;&gt; The concern was that users were doing things that accessed internal envars
</span><br>
<span class="quotelev2">&gt;&gt; which we changed from version to version. The new envars will remain fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Absolutely, these are useful time and time again so should be part of
</span><br>
<span class="quotelev1">&gt; the API and hence stable.  Care to mention what they are and I'll add it
</span><br>
<span class="quotelev1">&gt; to my note as something to change when upgrading to 1.3 (we are looking
</span><br>
<span class="quotelev1">&gt; at testing a snapshot in the near future).
</span><br>
<p>Surely:
<br>
<p>OMPI_COMM_WORLD_SIZE            #procs in the job
<br>
OMPI_COMM_WORLD_LOCAL_SIZE      #procs in this job that are sharing the node
<br>
OMPI_UNIVERSE_SIZE              total #slots allocated to this user
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(across all nodes)
<br>
OMPI_COMM_WORLD_RANK            proc's rank
<br>
OMPI_COMM_WORLD_LOCAL_RANK      local rank on node - lowest rank'd proc on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the node is given local_rank=0
<br>
<p>If there are others that would be useful, now is definitely the time to
<br>
speak up!
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
<li><strong>Next message:</strong> <a href="6055.php">Ashley Pittman: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6053.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>In reply to:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6056.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
