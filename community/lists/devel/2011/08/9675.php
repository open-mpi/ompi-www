<?
$subject_val = "Re: [OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 14:58:28 2011" -->
<!-- isoreceived="20110818185828" -->
<!-- sent="Thu, 18 Aug 2011 14:58:29 -0400" -->
<!-- isosent="20110818185829" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="4E4D60D5.5020703_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F09084CB-9D9D-49CB-A37D-C8F2BE68B570_at_eecs.utk.edu" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 14:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9676.php">Jeff Squyres: "[OMPI devel] 1.5.4 is ready"</a>
<li><strong>Previous message:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9678.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9678.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/18/2011 2:32 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test succeeded in both of your runs.
</span><br>
Not really.  Granted the test aborted  in both cases however the case 
<br>
you show below has further issues while the orte is trying to clean 
<br>
things up.  It certainly is not what I would call friendly.  But that is 
<br>
besides the point, the issue is orte is having  issues with 
<br>
MPI_Errhandler_fatal_c test IMO and it looks like you have seen the same 
<br>
failure prior to the epoch changes.  Fair enough, I'll go back to the 
<br>
drawing board and see if I can narrow this down.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; However, I rolled back before the epoch change (24814) and the output is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Errhandler_fatal test
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): This test will abort after printing the results message
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): If it does not, then a f.a.i.l.u.r.e will be noted
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] *** reported by process [766095392769,139869904961537]
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] *** on communicator MPI COMMUNICATOR 3 DUP FROM 0
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] *** MPI_ERR_RANK: invalid rank
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16098] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; MPITEST_results: MPI_Errhandler_fatal all tests PASSED (4)
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16096] [[24280,0],0]-[[24280,1],3] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16096] 3 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [dancer.eecs.utk.edu:16096] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see it is identical to the output in your test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2011, at 12:29 , TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just ran MPI_Errhandler_fatal_c with r25063 and it still fails.  Everything is the same except I don't see the &quot;readv failed..&quot; message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have your tried to run this code yourself?  It is pretty simple and fails with one node using np=4.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 8/18/2011 10:57 AM, Wesley Bland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just checked in a fix (I hope). I think the problem was that the errmgr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was removing children from the list of odls children without using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mutex to prevent race conditions. Let me know if the MTT is still having
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems tomorrow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am seeing the intel test suite tests MPI_Errhandler_fatal_c and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Errhandler_fatal_f fail with an oob failure quite a bit  I have not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seen this test failing under MTT until the epoch code was added.  So I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have a suspicion the epoch code might be at fault.  Could someone
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; familiar with the epoch changes (Wesley) take a look at this failure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note this intermittently fails but fails for me more times than not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Attached is a log file of a run that succeeds followed by the failing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run.  The piece of concern are the messages involving
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_oob_tcp_msg_recv and below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9675/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9676.php">Jeff Squyres: "[OMPI devel] 1.5.4 is ready"</a>
<li><strong>Previous message:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9678.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9678.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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
