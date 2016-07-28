<?
$subject_val = "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 19 17:27:18 2016" -->
<!-- isoreceived="20160219222718" -->
<!-- sent="Fri, 19 Feb 2016 14:27:15 -0800" -->
<!-- isosent="20160219222715" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris" -->
<!-- id="F4FD2326-FB42-44E5-A957-D3576381D4C4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87vb5kvb5e.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-19 17:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28555.php">Artur Malinowski: "[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Previous message:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just pushed a change that renamed the field - hopefully fixed now
<br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; On Feb 19, 2016, at 9:54 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a field from orte_iof_proc_t is named &quot;stdin&quot;
</span><br>
<span class="quotelev2">&gt;&gt; could stdin be #defined under the hood in Solaris ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's defined as &quot;(&amp;__iob[0])&quot; on Solaris 10; it's just #defined
</span><br>
<span class="quotelev1">&gt; differently by glibc.  See stdio.h(7posix).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28553.php">http://www.open-mpi.org/community/lists/users/2016/02/28553.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28555.php">Artur Malinowski: "[OMPI users] Nondeterministic SIGSEGV in MPI_Send to dynamically created processes"</a>
<li><strong>Previous message:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28553.php">Dave Love: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
<li><strong>Reply:</strong> <a href="28561.php">Siegmar Gross: "Re: [OMPI users] Error building openmpi-dev-3498-gdc4d3ed on Solaris"</a>
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
