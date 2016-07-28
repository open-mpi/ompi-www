<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  1 23:15:53 2007" -->
<!-- isoreceived="20070402031553" -->
<!-- sent="Sun, 1 Apr 2007 22:15:47 -0500" -->
<!-- isosent="20070402031547" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests" -->
<!-- id="200704012215.48488.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 23:15:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not an MTT developer, but I'll answer #1...
<br>
<p>MTT only looks at the return codes from the test programs that are ran. This 
<br>
is all well and good, but the problem is that some Intel tests return a 
<br>
meaningful value, and some don't. A while ago I went through and fixed all 
<br>
the c tests so that they return a meaningful value. But I don't know Fortran, 
<br>
so I did not even look at the Fortran versions of the tests. It appears that 
<br>
they are not returning a meaningful value, and that somebody needs to fix 
<br>
them.
<br>
<p>Tim
<br>
<p>On Sunday 01 April 2007 09:25 pm, Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; I just checked the recent nightly MTT results and found two things of note,
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
<span class="quotelev1">&gt; The MTT intel test suite is incorrectly seeing a failed MPI_Allgatherv_f
</span><br>
<span class="quotelev1">&gt; test as passed, yet is correctly detecting that the MPI_Allgatherv_c
</span><br>
<span class="quotelev1">&gt; test is failing.
</span><br>
<span class="quotelev1">&gt; The STDOUT from &quot;passed&quot; MPI_Allgatherv_f seems to indicate that the tests
</span><br>
<span class="quotelev1">&gt; actually failed in a similar way to the _c version, but MTT thinks it
</span><br>
<span class="quotelev1">&gt; passed. I've not had time to diagnose why MTT is missing this...  anyone
</span><br>
<span class="quotelev1">&gt; else have some spare cycles to look at this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) For OMPI developers:
</span><br>
<span class="quotelev1">&gt; The MPI_Allgatherv_* tests are failing as of r14180 in all test conditions
</span><br>
<span class="quotelev1">&gt; on the IU machines, and others, yet this passed the night before on r14172.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the svn log for r#'s r14173 thru r14180, I can narrow it down to
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>In reply to:</strong> <a href="0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
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
