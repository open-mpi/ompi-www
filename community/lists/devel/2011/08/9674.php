<?
$subject_val = "Re: [OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 14:32:23 2011" -->
<!-- isoreceived="20110818183223" -->
<!-- sent="Thu, 18 Aug 2011 14:32:21 -0400" -->
<!-- isosent="20110818183221" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="F09084CB-9D9D-49CB-A37D-C8F2BE68B570_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E4D3DDC.60507_at_oracle.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 14:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9677.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>The test succeeded in both of your runs.
<br>
<p>However, I rolled back before the epoch change (24814) and the output is the following:
<br>
<p>MPITEST info  (0): Starting MPI_Errhandler_fatal test
<br>
MPITEST info  (0): This test will abort after printing the results message
<br>
MPITEST info  (0): If it does not, then a f.a.i.l.u.r.e will be noted
<br>
[dancer.eecs.utk.edu:16098] *** An error occurred in MPI_Send
<br>
[dancer.eecs.utk.edu:16098] *** reported by process [766095392769,139869904961537]
<br>
[dancer.eecs.utk.edu:16098] *** on communicator MPI COMMUNICATOR 3 DUP FROM 0
<br>
[dancer.eecs.utk.edu:16098] *** MPI_ERR_RANK: invalid rank
<br>
[dancer.eecs.utk.edu:16098] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[dancer.eecs.utk.edu:16098] ***    and potentially your MPI job)
<br>
MPITEST_results: MPI_Errhandler_fatal all tests PASSED (4)
<br>
[dancer.eecs.utk.edu:16096] [[24280,0],0]-[[24280,1],3] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
[dancer.eecs.utk.edu:16096] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[dancer.eecs.utk.edu:16096] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
<p>As you can see it is identical to the output in your test.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p>On Aug 18, 2011, at 12:29 , TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Just ran MPI_Errhandler_fatal_c with r25063 and it still fails.  Everything is the same except I don't see the &quot;readv failed..&quot; message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have your tried to run this code yourself?  It is pretty simple and fails with one node using np=4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/18/2011 10:57 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just checked in a fix (I hope). I think the problem was that the errmgr
</span><br>
<span class="quotelev2">&gt;&gt; was removing children from the list of odls children without using the
</span><br>
<span class="quotelev2">&gt;&gt; mutex to prevent race conditions. Let me know if the MTT is still having
</span><br>
<span class="quotelev2">&gt;&gt; problems tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am seeing the intel test suite tests MPI_Errhandler_fatal_c and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Errhandler_fatal_f fail with an oob failure quite a bit  I have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seen this test failing under MTT until the epoch code was added.  So I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a suspicion the epoch code might be at fault.  Could someone
</span><br>
<span class="quotelev3">&gt;&gt;&gt; familiar with the epoch changes (Wesley) take a look at this failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note this intermittently fails but fails for me more times than not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached is a log file of a run that succeeds followed by the failing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run.  The piece of concern are the messages involving
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_msg_recv and below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9675.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9677.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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
