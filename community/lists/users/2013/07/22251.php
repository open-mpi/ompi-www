<?
$subject_val = "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 10:17:23 2013" -->
<!-- isoreceived="20130705141723" -->
<!-- sent="Fri, 05 Jul 2013 09:17:15 -0500" -->
<!-- isosent="20130705141715" -->
<!-- name="Ed Blosch" -->
<!-- email="eblosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI" -->
<!-- id="786pe710kn25esepd7dhv6n8.1373033835574_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI<br>
<strong>From:</strong> Ed Blosch (<em>eblosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 10:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22252.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
<li><strong>Previous message:</strong> <a href="22250.php">Ralph Castain: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Compile with -traceback and -check all if using Intel. &#194;&#160; Otherwise find the right compiler options to check array bounds accesses and to dump a stack trace. Then compile debug and run that way. Assuming it fails, you probably will get good info on the source of the problem. If it doesn't fail then the compiler has a bug (not as rare as you might think).
<br>
<p>You need to look at the application output. Not the output from mpirun.
<br>
<p>Ed
<br>
<p><p>Sent via the Samsung Galaxy S&#226;&#132;&#162; III, an AT&amp;T 4G LTE smartphone
<br>
<p>-------- Original message --------
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Date:  
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Subject: Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault).	Trying to run a script that uses Open MPI 
<br>
&nbsp;
<br>
Well, it's telling you that your program segfaulted - so I'd start with that, perhaps looking for any core it might have dropped.
<br>
<p>On Jul 4, 2013, at 8:36 PM, Rick White &lt;raw937_at_[hidden]&gt; wrote:
<br>
<p>Hello, 
<br>
<p>I have this error:
<br>
mpiexec noticed that process rank 1 with PID 16087 on node server exited on signal 11 (Segmentation fault)
<br>
<p>Wondering how to fix it?
<br>
<p>Cheers and many thanks
<br>
Rick
<br>
<p><pre>
-- 
Richard Allen White III M.S.
PhD Candidate - Suttle Lab
Department of Microbiology &amp; Immunology
The University of British Columbia 
Vancouver, BC, Canada
cell.&#194;&#160; 604-440-5150 
<a href="http://www.ocgy.ubc.ca/~suttle/">http://www.ocgy.ubc.ca/~suttle/</a> 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22252.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
<li><strong>Previous message:</strong> <a href="22250.php">Ralph Castain: "Re: [OMPI users] Open MPI exited on signal 11 (Segmentation fault). Trying to run a script that uses Open MPI"</a>
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
