<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 19:46:49 2005" -->
<!-- isoreceived="20051124004649" -->
<!-- sent="Wed, 23 Nov 2005 18:46:41 -0600" -->
<!-- isosent="20051124004641" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="MPI_Probe_tag_c mvapi hand" -->
<!-- id="43850D71.9050402_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 19:46:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Reply:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running the intel test suite against ompi revision r8247 (v1.0 
<br>
branch), and the MPI_Probe_tag_c test is hanging on IU's thor cluster. 
<br>
This only happens with using mvapi, and not with gm or tcp.  The hang 
<br>
happens whether or not I use sm with mvapi.
<br>
<p>The processes appear to be spinning on the CPU, and a backtrace of one 
<br>
of them looks like the following:
<br>
<p>(gdb) bt
<br>
#0  0x40341754 in ioctl () from /lib/libc.so.6
<br>
#1  0x404bbe99 in vip_ioctl_wrapper (ops=VIPKL_OPEN_HCA, pi=0x0, pi_sz=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;po=0x0, po_sz=0) at vipkl_sys_user.c:54
<br>
#2  0x404bb886 in VIPKL_EQ_poll (usr_ctx=0x0, hca_hndl=0, vipkl_eq=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eqe_p=0x40de3eb4) at vipkl_wrap_user.c:1676
<br>
#3  0x404bc0e1 in eq_poll_thread (eq_pollt_ptr=0x81377f8) at hobul.c:320
<br>
#4  0x4024aef6 in pthread_start_thread () from /lib/libpthread.so.0
<br>
#5  0x4034823a in clone () from /lib/libc.so.6
<br>
<p><p>I'm not sure this is useful - can someone else reproduce this?  If more 
<br>
information is needed, let me know.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Galen M. Shipman: "PGI configure failure.."</a>
<li><strong>Previous message:</strong> <a href="0548.php">George Bosilca: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Reply:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
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
