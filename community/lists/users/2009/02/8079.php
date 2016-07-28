<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 17 11:32:30 2009" -->
<!-- isoreceived="20090217163230" -->
<!-- sent="Tue, 17 Feb 2009 11:32:05 -0500" -->
<!-- isosent="20090217163205" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="499AE685.4070209_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090217161849.GA2038_at_yakko.bartol.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.3: mca_common_sm_mmap_init error<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-17 11:32:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/17/09 11:18, Daniel De Marco wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Reuti &lt;reuti_at_[hidden]&gt; [02/02/2009 03:43]:
</span><br>
<span class="quotelev2">&gt;&gt; But despite the fact that SGE's qrsh is used automatically, more
</span><br>
<span class="quotelev2">&gt;&gt; severe is the fact, that on the slave nodes the orted daemons will be
</span><br>
<span class="quotelev2">&gt;&gt; pushed into daemonland and no longer be bound to the sge_shepherd:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  3173     1 /usr/sge/bin/lx24-x86/sge_execd
</span><br>
<span class="quotelev2">&gt;&gt;  3431     1 orted --daemonize -mca ess env -mca orte_ess_jobid 81199104 
</span><br>
<span class="quotelev2">&gt;&gt; -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 811
</span><br>
<span class="quotelev2">&gt;&gt;  3432  3431  \_ /home/reuti/mpihello
</span><br>
<span class="quotelev2">&gt;&gt;  3433  3431  \_ /home/reuti/mpihello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does anyone know a workaround for this problem? has it been fixed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Daniel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>There is a ticket for this.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1783">https://svn.open-mpi.org/trac/ompi/ticket/1783</a>
<br>
<p>I am working on it.  I do not have a workaround.  I had a fix but ran 
<br>
into some issues with getting the -notify flag to work right with a 
<br>
non-daemonized orted.
<br>
<p>Fix will come soon to trunk, and to 1.3.2 soon thereafter.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8078.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="8080.php">Daniel De Marco: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
