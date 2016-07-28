<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 17 11:24:08 2013" -->
<!-- isoreceived="20131217162408" -->
<!-- sent="Tue, 17 Dec 2013 09:24:08 -0700" -->
<!-- isosent="20131217162408" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="20131217162407.GC41700_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EC019B87-8DC7-4AE2-93E7-0F5ADFC74BA0_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-17 11:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 17, 2013 at 11:16:48AM -0500, Noam Bernstein wrote:
<br>
<span class="quotelev1">&gt; On Dec 17, 2013, at 11:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you binding the procs? We don't bind by default (this will change in 1.7.4), and binding can play a significant role when comparing across kernels.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; add &quot;--bind-to-core&quot; to your cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've previously always used mpi_paffinity_alone=1, and the new behavior
</span><br>
<span class="quotelev1">&gt; seems to be independent of whether or not I use it.  I'll try bind-to-core.
</span><br>
<p>That would be the problem. That variable no longer exists in 1.7.4 and
<br>
has been replaced by hwloc_base_binding_policy. --bind-to core is an
<br>
alias of -mca hwloc_base_binding_policy core.
<br>
<p><span class="quotelev1">&gt; One more possible clue.  I haven't done a full test, but for one
</span><br>
<span class="quotelev1">&gt; particular setup (newer nodes, single node so presumably using
</span><br>
<span class="quotelev1">&gt; sm), there are apparently two ways to fix the problem:
</span><br>
<span class="quotelev1">&gt; 1. go back to the previous kernel, but stick with openmpi 1.7.3
</span><br>
<span class="quotelev1">&gt; 2. stick with the new kernel, but go back to openmpi 1.6.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it appears to be some interaction between the new kernel and 1.7.3 that
</span><br>
<span class="quotelev1">&gt; isn't present with 1.6.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We specifically switched to 1.7.3 because of a bug in 1.6.4 (lock up in some 
</span><br>
<span class="quotelev1">&gt; collective communication), but now I'm wondering whether I should just test
</span><br>
<span class="quotelev1">&gt; 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 									Noam
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23211/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23212.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
