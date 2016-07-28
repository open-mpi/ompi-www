<?
$subject_val = "Re: [OMPI devel] [torquedev] Communication between Torque and MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 09:55:16 2011" -->
<!-- isoreceived="20110825135516" -->
<!-- sent="Thu, 25 Aug 2011 07:55:09 -0600" -->
<!-- isosent="20110825135509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [torquedev] Communication between Torque and MPI" -->
<!-- id="85759651-65A8-433C-8BF7-D7819AD33E56_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201108252235.37921.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [torquedev] Communication between Torque and MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 09:55:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an FYI: there are two other places where OMPI touches Torque. The code in orte/mca/ras/tm reads the Torque allocation, and the code in orte/mca/ess/tm lets the daemons obtain startup info when launched under Torque.
<br>
<p><p>On Aug 25, 2011, at 6:35 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 25 Aug 2011 09:07:48 PM Jayavant Patil wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hiya,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is anybody having a tutorial or reference pages
</span><br>
<span class="quotelev2">&gt;&gt; explaining about the communication between Torque
</span><br>
<span class="quotelev2">&gt;&gt; and MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open-MPI uses the PBS Task Manager (TM) API to talk to
</span><br>
<span class="quotelev1">&gt; Torque pbs_mom's.  If you have the Torque manual pages
</span><br>
<span class="quotelev1">&gt; installed you can &quot;man tm&quot; to see the docs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code in Open-MPI that launches jobs is in the code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $openmpi/orte/mca/plm/tm/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps!
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
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
<li><strong>Next message:</strong> <a href="9697.php">Edgar Gabriel: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9695.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9694.php">Chris Samuel: "Re: [OMPI devel] [torquedev] Communication between Torque and MPI"</a>
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
