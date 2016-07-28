<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  1 22:26:00 2007" -->
<!-- isoreceived="20070402022600" -->
<!-- sent="Sun, 1 Apr 2007 22:25:54 -0400" -->
<!-- isosent="20070402022554" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests" -->
<!-- id="ea86ce220704011925w4dcfe0b0l51170de49d528a09_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 22:25:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/03/0288.php">Jeff Squyres: "[MTT users] MPI details: after_each_exec lesson learned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Reply:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Reply:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
I just checked the recent nightly MTT results and found two things of note,
<br>
one for the MTT community, the other for the OMPI developers.
<br>
<p>For both, see <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=143">http://www.open-mpi.org/mtt/reporter.php?do_redir=143</a>
<br>
for details of the failed MTT tests with the OMPI trunk at r14180.
<br>
<p>1) For MTT developers:
<br>
The MTT intel test suite is incorrectly seeing a failed MPI_Allgatherv_f
<br>
test as passed, yet is correctly detecting that the MPI_Allgatherv_c
<br>
test is failing.
<br>
The STDOUT from &quot;passed&quot; MPI_Allgatherv_f seems to indicate that the tests
<br>
actually failed in a similar way to the _c version, but MTT thinks it passed.
<br>
I've not had time to diagnose why MTT is missing this...  anyone else have
<br>
some spare cycles to look at this?
<br>
<p>2) For OMPI developers:
<br>
The MPI_Allgatherv_* tests are failing as of r14180 in all test conditions
<br>
on the IU machines, and others, yet this passed the night before on r14172.
<br>
<p>Looking at the svn log for r#'s r14173 thru r14180, I can narrow it down to
<br>
one of these changes as the culprit:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/14180">https://svn.open-mpi.org/trac/ompi/changeset/14180</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/14179">https://svn.open-mpi.org/trac/ompi/changeset/14179</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/14174">https://svn.open-mpi.org/trac/ompi/changeset/14174</a> (Not likely)
<br>
<p>My money is on the much larger r14180 changeset.
<br>
The other r#'s aren't culprits for obvious reasons.
<br>
<pre>
-- 
Tim Mattox - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/03/0288.php">Jeff Squyres: "[MTT users] MPI details: after_each_exec lesson learned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Reply:</strong> <a href="0290.php">Tim Prins: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Reply:</strong> <a href="0291.php">George Bosilca: "Re: [MTT users] [devel-core] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
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
