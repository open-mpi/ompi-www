<?
$subject_val = "[OMPI devel] mpirun hostname hangs on trunk r26380?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 13:39:05 2012" -->
<!-- isoreceived="20120503173905" -->
<!-- sent="Thu, 03 May 2012 13:38:57 -0400" -->
<!-- isosent="20120503173857" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun hostname hangs on trunk r26380?" -->
<!-- id="4FA2C2B1.1080402_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun hostname hangs on trunk r26380?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 13:38:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Previous message:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Reply:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm hanging on the trunk, even with something as simple as &quot;mpirun 
<br>
hostname&quot;.  r26377 and earlier are fine, but r26381 is not.  Quickly 
<br>
looking at the putback log, r26380 seems to be the likely candidate.  
<br>
I'll look at this some more, but the hang is here (orterun.c):
<br>
<p>&nbsp;&nbsp;&nbsp;935       /* loop the event lib until an exit event is detected */
<br>
&nbsp;&nbsp;&nbsp;936       while (orte_event_base_active) {
<br>
&nbsp;&nbsp;&nbsp;937           opal_event_loop(orte_event_base, OPAL_EVLOOP_ONCE);
<br>
&nbsp;&nbsp;&nbsp;938       }
<br>
&nbsp;&nbsp;&nbsp;939
<br>
&nbsp;&nbsp;&nbsp;940    DONE:
<br>
<p>in case anyone recognizes the problem.  This is with Intel, Sun, or GCC 
<br>
compilers.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Previous message:</strong> <a href="10963.php">George Bosilca: "Re: [OMPI devel] Potential ob1 bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
<li><strong>Reply:</strong> <a href="10965.php">Ralph Castain: "Re: [OMPI devel] mpirun hostname hangs on trunk r26380?"</a>
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
