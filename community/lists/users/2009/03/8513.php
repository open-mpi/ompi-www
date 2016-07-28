<?
$subject_val = "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 10:15:13 2009" -->
<!-- isoreceived="20090319141513" -->
<!-- sent="Thu, 19 Mar 2009 08:15:04 -0600" -->
<!-- isosent="20090319141504" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.3: mca_common_sm_mmap_init error" -->
<!-- id="ED777078-DCEF-40B0-8A84-EBFE0FFDA181_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49C25262.6000406_at_Sun.COM" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 10:15:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>In reply to:</strong> <a href="8511.php">Rolf Vandevaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or you can just add --leave-session-attached to your mpirun cmd line
<br>
<p><p>On Mar 19, 2009, at 8:10 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; On 03/19/09 09:55, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Prentice Bisbal &lt;prentice_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just installed OpenMPI 1.3 with tight integration for SGE. Version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2.8 was working just fine for several months in the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; arrangement.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now that I've upgraded to 1.3, I get the following errors in my  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_common_sm_mmap_init: open /tmp/968.1.all.q/openmpi-sessions- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ice_at_node09.aurora_0/21400/1/shared_mem_pool.node09.aurora failed  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errno=2
</span><br>
<span class="quotelev2">&gt;&gt; Has this been addressed, or does it need an actual bug report?  I  
</span><br>
<span class="quotelev2">&gt;&gt; assume
</span><br>
<span class="quotelev2">&gt;&gt; it's orthogonal to <a href="https://svn.open-mpi.org/trac/ompi/ticket/1783">https://svn.open-mpi.org/trac/ompi/ticket/1783</a>,
</span><br>
<span class="quotelev2">&gt;&gt; mentioned later in the thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It turns out they are related.  We only get these errors when we  
</span><br>
<span class="quotelev1">&gt; daemonize the orteds.  The fix for this is in the trunk and it will  
</span><br>
<span class="quotelev1">&gt; be in 1.3.2 (but it is not in 1.3.1 or 1.3.0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can workaround this in 1.3.0 and 1.3.1 with this parameter:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca orte_leave_session_attached 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will prevent the daemonizing and the mca_common_sm_mmap_init  
</span><br>
<span class="quotelev1">&gt; error should go away.  I will also add this to the existing bug  
</span><br>
<span class="quotelev1">&gt; report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<li><strong>Next message:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8512.php">Gary Draving: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>In reply to:</strong> <a href="8511.php">Rolf Vandevaart: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
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
