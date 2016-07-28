<?
$subject_val = "Re: [OMPI devel] MPI_Errhandler_fatal_c failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 18 11:03:32 2011" -->
<!-- isoreceived="20110818150332" -->
<!-- sent="Thu, 18 Aug 2011 09:03:25 -0600" -->
<!-- isosent="20110818150325" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Errhandler_fatal_c failure" -->
<!-- id="9FD0923D-6463-4764-8DAB-1ED796F71A39_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-18 11:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I doubt that will solve the problem. The issue is that procs are continuing to fail while you are trying to respond to the first one. Here is what happens:
<br>
<p>1. first proc fails, causing a &quot;connection failed&quot; error that gets reported to the orted errmgr.
<br>
<p>2. errmgr_orted starts trying to send &quot;proc failed&quot; notifications to the remaining procs
<br>
<p>3. next proc fails before the rml.send command in #2. OOB sees failure and removes that connection from its hash table.
<br>
<p>4. rml.send is issued, and fails because that connection is no longer in the OOB hash table.
<br>
<p>So the inherent problem has nothing to do with maintaining coherence in the child list - it has to do with the disconnect between what is happening in the errmgr and the oob.
<br>
<p><p>On Aug 18, 2011, at 8:57 AM, Wesley Bland wrote:
<br>
<p><span class="quotelev1">&gt; I just checked in a fix (I hope). I think the problem was that the errmgr
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
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>Previous message:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<li><strong>In reply to:</strong> <a href="9671.php">Wesley Bland: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9673.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Errhandler_fatal_c failure"</a>
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
