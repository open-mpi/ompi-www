<?
$subject_val = "[OMPI users] fork() warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 08:17:50 2012" -->
<!-- isoreceived="20120516121750" -->
<!-- sent="Wed, 16 May 2012 13:17:45 +0100" -->
<!-- isosent="20120516121745" -->
<!-- name="Jim Maas" -->
<!-- email="j.maas_at_[hidden]" -->
<!-- subject="[OMPI users] fork() warning message" -->
<!-- id="4FB39AE9.6020201_at_uea.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] fork() warning message<br>
<strong>From:</strong> Jim Maas (<em>j.maas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 08:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
<li><strong>Reply:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting the following error with a new version of R, using Rmpi and 
<br>
a few other modules.  I've already had a couple of good suggestions from 
<br>
this group about how to diagnose the cause of the fork error using 
<br>
&quot;strace&quot; but we don't have it on our LSF Linux cluster.  This is my 
<br>
first use of R/mpi/parallel etc so am a bit naive.  Also the code I'm 
<br>
running involves random number generation so will always give slightly 
<br>
different answers.
<br>
<p>My normal routine is to :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a) try the code with a small number of iterations on my own 
<br>
Linux/R/open-mpi   pc using 8 cores, then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) make the job bigger and run it to the cluster.
<br>
<p>I only get the warning on the cluster which suggests that it caused by 
<br>
something related to R and/or Rmpi and/or LSF and/or open MPI  ???
<br>
<p>Could someone suggest some rigorous R test-code that I could run on my 
<br>
pc,  ok if it takes some time, and then rerun it on cluster to confirm 
<br>
that I get the same results, and thus the warning in inconsequential?
<br>
<p>Thanks
<br>
<p>Jim
<br>
<p>=========================
<br>
<p>An MPI process has executed an operation involving a call to the
<br>
&quot;fork()&quot; system call to create a child process.  Open MPI is currently
<br>
operating in a condition that could result in memory corruption or
<br>
other system errors; your MPI job may hang, crash, or produce silent
<br>
data corruption.  The use of fork() (or system() or other calls that
<br>
create child processes) is strongly discouraged.
<br>
<p>The process that invoked fork was:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Local host:          cn159.private.dns.zone (PID 12792)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD rank: 7
<br>
<p>If you are*absolutely sure*  that your application will successfully
<br>
and correctly survive a call to fork(), you may disable this warning
<br>
by setting the mpi_warn_on_fork MCA parameter to 0.
<br>
<p><p><pre>
-- 
Dr. Jim Maas
University of East Anglia
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="19292.php">Rohan Deshpande: "[OMPI users] MPI - memory sharing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
<li><strong>Reply:</strong> <a href="19295.php">Ralph Castain: "Re: [OMPI users] fork() warning message"</a>
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
