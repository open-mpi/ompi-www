<?
$subject_val = "[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 11:14:16 2010" -->
<!-- isoreceived="20101120161416" -->
<!-- sent="Sun, 21 Nov 2010 03:14:06 +1100" -->
<!-- isosent="20101120161406" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking" -->
<!-- id="4CE7F3CE.9040101_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 11:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Reply:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi folks,
<br>
<p>At SC10 this year there was an interesting tool presented
<br>
as a student paper called &quot;FlowChecker: Detecting Bugs in
<br>
MPI Libraries via Message Flow Checking&quot;.
<br>
<p><a href="http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352">http://sc10.supercomputing.org/schedule/event_detail.php?evid=pap352</a>
<br>
<p>Basically they instrument a program and derive &quot;intentions&quot;
<br>
from your MPI calls and the MPI standard and also trace the
<br>
data flow (including things like memcpy) and messages.Then
<br>
offline you run a correlator which compares what was meant
<br>
to happen and what did and tries to root cause the fault.
<br>
<p>They claim to have taken 5 random closed bugs from 3 different
<br>
MPI implementations (including 3 from Open-MPI) and been able
<br>
to detect all 5 and root-cause 4 of them (the one they missed
<br>
was a data type issue).
<br>
<p>The PDF of their paper is here:
<br>
<p><a href="http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf">http://www.cse.ohio-state.edu/~chenzhe/sc10-flowchecker.pdf</a>
<br>
<p>I've emailed them to see if the code is going to be available
<br>
as it could be quite a handy tool to have when trying to track
<br>
down issues like the one S&#233;bastien posted about.
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAkzn884ACgkQO2KABBYQAh+jAQCggP+izYq3rkSo1hPzADi2vCEI
<br>
z2QAmwX5oEYpgYYlc6ZWC3Pr3q1dBGp/
<br>
=2KB+
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Previous message:</strong> <a href="8687.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24047"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
<li><strong>Reply:</strong> <a href="8689.php">Sébastien Boisvert: "Re: [OMPI devel] FlowChecker: Detecting Bugs in MPI Libraries via Message Flow Checking"</a>
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
