<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 09:32:23 2008" -->
<!-- isoreceived="20080711133223" -->
<!-- sent="Fri, 11 Jul 2008 14:32:16 +0100" -->
<!-- isosent="20080711133216" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="1215783136.6514.14.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="C49CBA2A.E3F4%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-07-11 09:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6047.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6047.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2008-07-11 at 07:20 -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; This variable is only for internal use and has no applicability to a user.
</span><br>
<span class="quotelev1">&gt; Basically, it is used by the local daemon to tell an application process its
</span><br>
<span class="quotelev1">&gt; rank when launched.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that it disappears in v1.3...so I wouldn't recommend looking for it. Is
</span><br>
<span class="quotelev1">&gt; there something you are trying to do with it?
</span><br>
<p>Recently on this list I recommended somebody use it for their needs.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2008/06/5983.php">http://www.open-mpi.org/community/lists/users/2008/06/5983.php</a>
<br>
<p><span class="quotelev1">&gt; Reason I ask: some folks wanted to know things like the MPI rank prior to
</span><br>
<span class="quotelev1">&gt; calling MPI_Init, so we added a few MPI envar's that are available from
</span><br>
<span class="quotelev1">&gt; beginning of process execution, if that is what you are looking for.
</span><br>
<p>It's also essential for Valgrind support which can use it to name
<br>
logfiles according to rank using the --log-file=valgrind.out.%
<br>
q{OMPI_MCA_ns_nds_vpid} option.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Previous message:</strong> <a href="6047.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6047.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6049.php">Ralph H Castain: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
