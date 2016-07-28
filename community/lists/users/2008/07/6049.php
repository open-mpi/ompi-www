<?
$subject_val = "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 09:42:16 2008" -->
<!-- isoreceived="20080711134216" -->
<!-- sent="Fri, 11 Jul 2008 07:42:05 -0600" -->
<!-- isosent="20080711134205" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable" -->
<!-- id="C49CBF4D.E403%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1215783136.6514.14.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Date:</strong> 2008-07-11 09:42:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6048.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6048.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/08 7:32 AM, &quot;Ashley Pittman&quot; &lt;apittman_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 2008-07-11 at 07:20 -0600, Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This variable is only for internal use and has no applicability to a user.
</span><br>
<span class="quotelev2">&gt;&gt; Basically, it is used by the local daemon to tell an application process its
</span><br>
<span class="quotelev2">&gt;&gt; rank when launched.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that it disappears in v1.3...so I wouldn't recommend looking for it. Is
</span><br>
<span class="quotelev2">&gt;&gt; there something you are trying to do with it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Recently on this list I recommended somebody use it for their needs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2008/06/5983.php">http://www.open-mpi.org/community/lists/users/2008/06/5983.php</a>
</span><br>
<p>Ah - yeah, that one slid by me. I'll address it directly.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reason I ask: some folks wanted to know things like the MPI rank prior to
</span><br>
<span class="quotelev2">&gt;&gt; calling MPI_Init, so we added a few MPI envar's that are available from
</span><br>
<span class="quotelev2">&gt;&gt; beginning of process execution, if that is what you are looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's also essential for Valgrind support which can use it to name
</span><br>
<span class="quotelev1">&gt; logfiles according to rank using the --log-file=valgrind.out.%
</span><br>
<span class="quotelev1">&gt; q{OMPI_MCA_ns_nds_vpid} option.
</span><br>
<p>Well, it won't hurt for now - but it won't work with 1.3 or beyond. It's
<br>
always risky to depend upon a code's internal variables as developers feel
<br>
free to change those as circumstances dictate since users aren't supposed to
<br>
be affected.
<br>
<p>I believe this is partly what motivated the creation of the MPI envars - to
<br>
create a vehicle that -would- be guaranteed stable for just these purposes.
<br>
The concern was that users were doing things that accessed internal envars
<br>
which we changed from version to version. The new envars will remain fixed.
<br>
<p>Of course, that only applies to 1.3 and beyond... ;-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley,
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
<li><strong>Next message:</strong> <a href="6050.php">Ralph H Castain: "Re: [OMPI users] Outputting rank and size for all outputs."</a>
<li><strong>Previous message:</strong> <a href="6048.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>In reply to:</strong> <a href="6048.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
<li><strong>Reply:</strong> <a href="6051.php">Ashley Pittman: "Re: [OMPI users] Query regarding OMPI_MCA_ns_nds_vpid env variable"</a>
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
