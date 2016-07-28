<?
$subject_val = "Re: [OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 12:29:14 2011" -->
<!-- isoreceived="20110818162914" -->
<!-- sent="Thu, 18 Aug 2011 12:29:16 -0400" -->
<!-- isosent="20110818162916" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="4E4D3DDC.60507_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b2fa73eced6c8475a711358ff1ff1fac.squirrel_at_webmail.eecs.utk.edu" -->
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
<strong>Date:</strong> 2011-08-18 12:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just ran MPI_Errhandler_fatal_c with r25063 and it still fails.  
<br>
Everything is the same except I don't see the &quot;readv failed..&quot; message.
<br>
<p>Have your tried to run this code yourself?  It is pretty simple and 
<br>
fails with one node using np=4.
<br>
<p>--td
<br>
<p>On 8/18/2011 10:57 AM, Wesley Bland wrote:
<br>
<span class="quotelev1">&gt; I just checked in a fix (I hope). I think the problem was that the errmgr
</span><br>
<span class="quotelev1">&gt; was removing children from the list of odls children without using the
</span><br>
<span class="quotelev1">&gt; mutex to prevent race conditions. Let me know if the MTT is still having
</span><br>
<span class="quotelev1">&gt; problems tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing the intel test suite tests MPI_Errhandler_fatal_c and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Errhandler_fatal_f fail with an oob failure quite a bit  I have not
</span><br>
<span class="quotelev2">&gt;&gt; seen this test failing under MTT until the epoch code was added.  So I
</span><br>
<span class="quotelev2">&gt;&gt; have a suspicion the epoch code might be at fault.  Could someone
</span><br>
<span class="quotelev2">&gt;&gt; familiar with the epoch changes (Wesley) take a look at this failure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note this intermittently fails but fails for me more times than not.
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a log file of a run that succeeds followed by the failing
</span><br>
<span class="quotelev2">&gt;&gt; run.  The piece of concern are the messages involving
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_msg_recv and below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Oracle
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden]&lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-9673/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9672.php">Ralph Castain: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Reply:</strong> <a href="9674.php">George Bosilca: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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
