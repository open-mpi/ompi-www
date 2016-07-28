<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 21:42:31 2005" -->
<!-- isoreceived="20051129024231" -->
<!-- sent="Mon, 28 Nov 2005 19:42:25 -0700" -->
<!-- isosent="20051129024225" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re:  MPI_Probe_tag_c mvapi hand" -->
<!-- id="D841F8F5-EA0F-4E0C-9EB0-EB21CAF53441_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43850D71.9050402_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-28 21:42:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Jeff Squyres: "1.0.1rc4 is up"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>In reply to:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Reply:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andrew,
<br>
<p>I am not able to replicate this on odin with 16 nodes using the trunk  
<br>
or the v1.0 branch.  How many nodes where you running with?
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Nov 23, 2005, at 5:46 PM, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; I'm running the intel test suite against ompi revision r8247 (v1.0
</span><br>
<span class="quotelev1">&gt; branch), and the MPI_Probe_tag_c test is hanging on IU's thor cluster.
</span><br>
<span class="quotelev1">&gt; This only happens with using mvapi, and not with gm or tcp.  The hang
</span><br>
<span class="quotelev1">&gt; happens whether or not I use sm with mvapi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The processes appear to be spinning on the CPU, and a backtrace of one
</span><br>
<span class="quotelev1">&gt; of them looks like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x40341754 in ioctl () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x404bbe99 in vip_ioctl_wrapper (ops=VIPKL_OPEN_HCA, pi=0x0,  
</span><br>
<span class="quotelev1">&gt; pi_sz=0,
</span><br>
<span class="quotelev1">&gt;      po=0x0, po_sz=0) at vipkl_sys_user.c:54
</span><br>
<span class="quotelev1">&gt; #2  0x404bb886 in VIPKL_EQ_poll (usr_ctx=0x0, hca_hndl=0, vipkl_eq=0,
</span><br>
<span class="quotelev1">&gt;      eqe_p=0x40de3eb4) at vipkl_wrap_user.c:1676
</span><br>
<span class="quotelev1">&gt; #3  0x404bc0e1 in eq_poll_thread (eq_pollt_ptr=0x81377f8) at  
</span><br>
<span class="quotelev1">&gt; hobul.c:320
</span><br>
<span class="quotelev1">&gt; #4  0x4024aef6 in pthread_start_thread () from /lib/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #5  0x4034823a in clone () from /lib/libc.so.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure this is useful - can someone else reproduce this?  If  
</span><br>
<span class="quotelev1">&gt; more
</span><br>
<span class="quotelev1">&gt; information is needed, let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Jeff Squyres: "1.0.1rc4 is up"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Rainer Keller: "Re:  FORTRAN TRUE"</a>
<li><strong>In reply to:</strong> <a href="0549.php">Andrew Friedley: "MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Reply:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
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
