<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 12:08:20 2007" -->
<!-- isoreceived="20070403160820" -->
<!-- sent="Tue, 3 Apr 2007 12:07:33 -0400" -->
<!-- isosent="20070403160733" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests" -->
<!-- id="B8BEEBB6-23A5-4ABD-B25C-246852DAABCD_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220704011925w4dcfe0b0l51170de49d528a09_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 12:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/05/0292.php">Jeff Squyres: "[MTT users] New version of MTT"</a>
<li><strong>Previous message:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI part is now solved (starting from revision 14202). The  
<br>
problem was the way we compute the true_lb and true_ub. This didn't  
<br>
affect us before simply because we didn't use this feature.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 1, 2007, at 10:25 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I just checked the recent nightly MTT results and found two things  
</span><br>
<span class="quotelev1">&gt; of note,
</span><br>
<span class="quotelev1">&gt; one for the MTT community, the other for the OMPI developers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For both, see <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=143">http://www.open-mpi.org/mtt/reporter.php?do_redir=143</a>
</span><br>
<span class="quotelev1">&gt; for details of the failed MTT tests with the OMPI trunk at r14180.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) For MTT developers:
</span><br>
<span class="quotelev1">&gt; The MTT intel test suite is incorrectly seeing a failed  
</span><br>
<span class="quotelev1">&gt; MPI_Allgatherv_f
</span><br>
<span class="quotelev1">&gt; test as passed, yet is correctly detecting that the MPI_Allgatherv_c
</span><br>
<span class="quotelev1">&gt; test is failing.
</span><br>
<span class="quotelev1">&gt; The STDOUT from &quot;passed&quot; MPI_Allgatherv_f seems to indicate that  
</span><br>
<span class="quotelev1">&gt; the tests
</span><br>
<span class="quotelev1">&gt; actually failed in a similar way to the _c version, but MTT thinks  
</span><br>
<span class="quotelev1">&gt; it passed.
</span><br>
<span class="quotelev1">&gt; I've not had time to diagnose why MTT is missing this...  anyone  
</span><br>
<span class="quotelev1">&gt; else have
</span><br>
<span class="quotelev1">&gt; some spare cycles to look at this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) For OMPI developers:
</span><br>
<span class="quotelev1">&gt; The MPI_Allgatherv_* tests are failing as of r14180 in all test  
</span><br>
<span class="quotelev1">&gt; conditions
</span><br>
<span class="quotelev1">&gt; on the IU machines, and others, yet this passed the night before on  
</span><br>
<span class="quotelev1">&gt; r14172.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the svn log for r#'s r14173 thru r14180, I can narrow it  
</span><br>
<span class="quotelev1">&gt; down to
</span><br>
<span class="quotelev1">&gt; one of these changes as the culprit:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/14180">https://svn.open-mpi.org/trac/ompi/changeset/14180</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/14179">https://svn.open-mpi.org/trac/ompi/changeset/14179</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/14174">https://svn.open-mpi.org/trac/ompi/changeset/14174</a> (Not likely)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My money is on the much larger r14180 changeset.
</span><br>
<span class="quotelev1">&gt; The other r#'s aren't culprits for obvious reasons.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel-core mailing list
</span><br>
<span class="quotelev1">&gt; devel-core_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel-core">http://www.open-mpi.org/mailman/listinfo.cgi/devel-core</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0291/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/05/0292.php">Jeff Squyres: "[MTT users] New version of MTT"</a>
<li><strong>Previous message:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
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
