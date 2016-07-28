<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 10:11:35 2009" -->
<!-- isoreceived="20090319141135" -->
<!-- sent="Thu, 19 Mar 2009 10:10:42 -0400" -->
<!-- isosent="20090319141042" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="49C25262.6000406_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87vdq51ust.fsf_at_liv.ac.uk" -->
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
<strong>Date:</strong> 2009-03-19 10:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/19/09 09:55, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Prentice Bisbal &lt;prentice_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just installed OpenMPI 1.3 with tight integration for SGE. Version
</span><br>
<span class="quotelev2">&gt;&gt; 1.2.8 was working just fine for several months in the same arrangement.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now that I've upgraded to 1.3, I get the following errors in my standard
</span><br>
<span class="quotelev2">&gt;&gt; error file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions-prent
</span><br>
<span class="quotelev2">&gt;&gt; ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed with
</span><br>
<span class="quotelev2">&gt;&gt; errno=2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has this been addressed, or does it need an actual bug report?  I assume
</span><br>
<span class="quotelev1">&gt; it's orthogonal to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1783">https://svn.open-mpi.org/trac/ompi/ticket/1783</a>,
</span><br>
<span class="quotelev1">&gt; mentioned later in the thread.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It turns out they are related.  We only get these errors when we 
<br>
daemonize the orteds.  The fix for this is in the trunk and it will be 
<br>
in 1.3.2 (but it is not in 1.3.1 or 1.3.0).
<br>
<p>You can workaround this in 1.3.0 and 1.3.1 with this parameter:
<br>
<p>--mca orte_leave_session_attached 1
<br>
<p>This will prevent the daemonizing and the mca_common_sm_mmap_init error 
<br>
should go away.  I will also add this to the existing bug report.
<br>
<p>Rolf
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>In reply to:</strong> <a href="8510.php">Dave Love: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Reply:</strong> <a href="8513.php">Ralph Castain: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
