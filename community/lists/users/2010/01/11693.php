<?
$subject_val = "Re: [OMPI users] Dual quad core Opteron hangs on Bcast.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  5 11:31:47 2010" -->
<!-- isoreceived="20100105163147" -->
<!-- sent="Tue, 05 Jan 2010 11:33:30 -0500" -->
<!-- isosent="20100105163330" -->
<!-- name="Louis Rossi" -->
<!-- email="rossi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dual quad core Opteron hangs on Bcast." -->
<!-- id="4B4369DA.2050309_at_math.udel.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B4360EF.8050602_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Dual quad core Opteron hangs on Bcast.<br>
<strong>From:</strong> Louis Rossi (<em>rossi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-05 11:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11692.php">Leonardo Machado Moreira: "[OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eugene,
<br>
<p>&nbsp;&nbsp;&nbsp;I believe that r22335 did solve resolve the issue.  The problem was 
<br>
between my screen and my chair.  Last night, I reset my paths, but the 
<br>
directory was appended to the paths which had the old mpi directory 
<br>
information.  I think it was linking with the old libraries.  I'll try 
<br>
it in a production run, but it passed the simpler tests that the old 
<br>
library failed.  I'll post another note if it fails anywhere, but I am 
<br>
confident that the problem is resolved as you first thought.
<br>
<p>&nbsp;&nbsp;&nbsp;Best regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lou
<br>
<p>On 01/05/2010 10:55 AM, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Hmm, perhaps not so excellent.  It seems to me that 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4a1r22335 does have the fixes to trac 2043.  So, either the 
</span><br>
<span class="quotelev1">&gt; fixes are insufficient and/or you're experiencing a different 
</span><br>
<span class="quotelev1">&gt; problem.  I'll see if I can reproduce your problem, but I'm not 
</span><br>
<span class="quotelev1">&gt; confident here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Louis Rossi wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev2">&gt;&gt;   Excellent!  I could not find r22324.  I found r22335 on the openmpi 
</span><br>
<span class="quotelev2">&gt;&gt; download site (under nightly snapshots), but this did not solve the 
</span><br>
<span class="quotelev2">&gt;&gt; problem.  Any thoughts on where I can find it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 01/04/2010 09:53 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 01/04/2010 01:23 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) What about &quot;-mca coll_sync_barrier_before 100&quot;?  (The default 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may be 1000.  So, you can try various values less than 1000.  I'm 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggesting 100.)  Note that broadcast has somewhat one-way traffic 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flow, which can have some undesirable flow control issues.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) What about &quot;-mca btl_sm_num_fifos 16&quot;?  Default is 1.  If the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem is trac ticket 2043, then this suggestion can help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Louis Rossi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Thank you for replying so quickly.  You are right that there is a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory leak.  It's not the source of the problem, but I added a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; free(pMessage) to remove the issue.  (In my defense, I borrowed a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simple broadcast example off the web and wrapped it in a loop.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Anyway, the great news is that suggestion #2 solved the problem 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the example.  (At least it has not failed yet.  I'm exercising 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the solution on the original larger problem now.)  Suggestion #1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did not.  Should I post the resolution to the mailing list or is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this a well known solution?  I see this parameter listed under 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; performance tuning on the ompi site, but only in reference to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; congestion.  There is no comment that bcasts could hang.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Louis Rossi wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   OK.  You nailed it with suggestion #2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Lou
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Great.  Next time, go ahead and respond to the wider mail alias so 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that everyone learns that your particular problem was resolved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will update the trac ticket to point to this as another instance 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One signature of the problem is that GCC 4.4.0 or later exposes the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem, while earlier revs do not.  I can't tell for sure, but it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears to me that this condition is met with Fedora 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Our understanding of trac 2043 has recently improved immensely.  It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be great if you could confirm the fix.  The ticket is at 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2043">https://svn.open-mpi.org/trac/ompi/ticket/2043</a> .  r22324 should fix 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the problem.  If you could get that version, build with GCC 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (presumably 4.4.0 or more recent), then the workaround should no 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; longer be needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
&quot;Through nonaction, no action is left undone.&quot; --Lao Tzu
Louis F. Rossi				rossi_at_[hidden]
Department of Mathematical Sciences	<a href="http://www.math.udel.edu/~rossi">http://www.math.udel.edu/~rossi</a>
University of Delaware			(302) 831-1880 (voice)
Newark, DE 19716			(302) 831-4511 (fax)
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11693/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11694.php">chih lee: "Re: [OMPI users] Cannot get OpenMPI 1.3.3 to work with Torque 2.4.2"</a>
<li><strong>Previous message:</strong> <a href="11692.php">Leonardo Machado Moreira: "[OMPI users] How to test it"</a>
<li><strong>In reply to:</strong> <a href="11691.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
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
