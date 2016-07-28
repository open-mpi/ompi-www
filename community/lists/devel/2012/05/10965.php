<?
$subject_val = "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 14:01:03 2012" -->
<!-- isoreceived="20120503180103" -->
<!-- sent="Thu, 3 May 2012 12:00:54 -0600" -->
<!-- isosent="20120503180054" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun hostname hangs on trunk r26380?" -->
<!-- id="F4BB8DA9-EF51-447A-B884-8345542EDCEB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FA2C2B1.1080402_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpirun hostname hangs on trunk r26380?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 14:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10966.php">Rudakov Sergey: "[OMPI devel] Build MPI applications with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>In reply to:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - worked fine on multi-node systems, but not when running only local. Sorry about that...
<br>
<p>On May 3, 2012, at 11:38 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm hanging on the trunk, even with something as simple as &quot;mpirun hostname&quot;.  r26377 and earlier are fine, but r26381 is not.  Quickly looking at the putback log, r26380 seems to be the likely candidate.  I'll look at this some more, but the hang is here (orterun.c):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  935       /* loop the event lib until an exit event is detected */
</span><br>
<span class="quotelev1">&gt;  936       while (orte_event_base_active) {
</span><br>
<span class="quotelev1">&gt;  937           opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
</span><br>
<span class="quotelev1">&gt;  938       }
</span><br>
<span class="quotelev1">&gt;  939
</span><br>
<span class="quotelev1">&gt;  940    DONE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in case anyone recognizes the problem.  This is with Intel, Sun, or GCC compilers.
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
<li><strong>Next message:</strong> <a href="10966.php">Rudakov Sergey: "[OMPI devel] Build MPI applications with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>In reply to:</strong> <a href="10964.php">Eugene Loh: "[OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
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
