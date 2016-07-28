<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 14:09:39 2005" -->
<!-- isoreceived="20051129190939" -->
<!-- sent="Tue, 29 Nov 2005 12:09:34 -0700" -->
<!-- isosent="20051129190934" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  MPI_Probe_tag_c mvapi hand" -->
<!-- id="D499EAE3-E50F-4EFA-A7B5-762CE78F15DF_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D841F8F5-EA0F-4E0C-9EB0-EB21CAF53441_at_lanl.gov" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 14:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can replicate this on thor with the trunk, this looks like a multi- 
<br>
nic issue, as we pass the test when I restrict open-mpi to use a  
<br>
single ib nic. I will dig into this further but should we consider  
<br>
the priority of multi-nic for the 1.0.1 release?
<br>
<p><p>Thanks,
<br>
<p>Galen
<br>
<p>On Nov 28, 2005, at 7:42 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev1">&gt; Hi Andrew,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not able to replicate this on odin with 16 nodes using the  
</span><br>
<span class="quotelev1">&gt; trunk or the v1.0 branch.  How many nodes where you running with?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 23, 2005, at 5:46 PM, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running the intel test suite against ompi revision r8247 (v1.0
</span><br>
<span class="quotelev2">&gt;&gt; branch), and the MPI_Probe_tag_c test is hanging on IU's thor  
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt; This only happens with using mvapi, and not with gm or tcp.  The hang
</span><br>
<span class="quotelev2">&gt;&gt; happens whether or not I use sm with mvapi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The processes appear to be spinning on the CPU, and a backtrace of  
</span><br>
<span class="quotelev2">&gt;&gt; one
</span><br>
<span class="quotelev2">&gt;&gt; of them looks like the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x40341754 in ioctl () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x404bbe99 in vip_ioctl_wrapper (ops=VIPKL_OPEN_HCA, pi=0x0,  
</span><br>
<span class="quotelev2">&gt;&gt; pi_sz=0,
</span><br>
<span class="quotelev2">&gt;&gt;      po=0x0, po_sz=0) at vipkl_sys_user.c:54
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x404bb886 in VIPKL_EQ_poll (usr_ctx=0x0, hca_hndl=0, vipkl_eq=0,
</span><br>
<span class="quotelev2">&gt;&gt;      eqe_p=0x40de3eb4) at vipkl_wrap_user.c:1676
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x404bc0e1 in eq_poll_thread (eq_pollt_ptr=0x81377f8) at  
</span><br>
<span class="quotelev2">&gt;&gt; hobul.c:320
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x4024aef6 in pthread_start_thread () from /lib/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x4034823a in clone () from /lib/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure this is useful - can someone else reproduce this?  If  
</span><br>
<span class="quotelev2">&gt;&gt; more
</span><br>
<span class="quotelev2">&gt;&gt; information is needed, let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0560.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
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
