<?
$subject_val = "Re: [OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 10:57:10 2011" -->
<!-- isoreceived="20110818145710" -->
<!-- sent="Thu, 18 Aug 2011 10:57:06 -0400" -->
<!-- isosent="20110818145706" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="b2fa73eced6c8475a711358ff1ff1fac.squirrel_at_webmail.eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E4D123E.4060401_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Errhandler_fatal_c failure<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 10:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked in a fix (I hope). I think the problem was that the errmgr
<br>
was removing children from the list of odls children without using the
<br>
mutex to prevent race conditions. Let me know if the MTT is still having
<br>
problems tomorrow.
<br>
<p>Wes
<br>
<p><span class="quotelev1">&gt; I am seeing the intel test suite tests MPI_Errhandler_fatal_c and
</span><br>
<span class="quotelev1">&gt; MPI_Errhandler_fatal_f fail with an oob failure quite a bit  I have not
</span><br>
<span class="quotelev1">&gt; seen this test failing under MTT until the epoch code was added.  So I
</span><br>
<span class="quotelev1">&gt; have a suspicion the epoch code might be at fault.  Could someone
</span><br>
<span class="quotelev1">&gt; familiar with the epoch changes (Wesley) take a look at this failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note this intermittently fails but fails for me more times than not.
</span><br>
<span class="quotelev1">&gt; Attached is a log file of a run that succeeds followed by the failing
</span><br>
<span class="quotelev1">&gt; run.  The piece of concern are the messages involving
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv and below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9670.php">TERRY DONTJE: "[OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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
