<?
$subject_val = "[OMPI devel] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  6 10:04:53 2012" -->
<!-- isoreceived="20120706140453" -->
<!-- sent="Fri, 6 Jul 2012 14:04:48 +0000" -->
<!-- isosent="20120706140448" -->
<!-- name="Fluder, Eugene" -->
<!-- email="eugene.fluder_at_[hidden]" -->
<!-- subject="[OMPI devel] VampirTrace: time not increasing" -->
<!-- id="CC1C68C2.2881%eugene.fluder_at_mssm.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] VampirTrace: time not increasing<br>
<strong>From:</strong> Fluder, Eugene (<em>eugene.fluder_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-06 10:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got the following error running a VT enabled run of AMBER. This was reported in December of 2009  under almost identical conditions but the thread does not contain a resolution. I reran the test with VT_UNIFY=no and it completed normally. The same error occurred when I ran vtunify separately. Any help?
<br>
<p>Was this ever resolved?
<br>
<p>Gene
<br>
<p>[fludee01_at_node7-10 trace_noiox]$ vtunify 8 a
<br>
OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
<br>
&nbsp;time not increasing. (t= 99459634, p= 6)
<br>
vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 6]
<br>
OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
<br>
&nbsp;time not increasing. (t= 105413860, p= 5)
<br>
vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 5]
<br>
OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
<br>
&nbsp;time not increasing. (t= 103189146, p= 7)
<br>
vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 7]
<br>
OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
<br>
&nbsp;time not increasing. (t= 100509810, p= 8)
<br>
vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 8]
<br>
vtunify: An error occurred during unifying events - Terminating ...
<br>
<p>-- Eugene M Fluder, Jr, PhD
<br>
Computational Scientist
<br>
Scientific Computing
<br>
<p>The Mt. Sinai School of Medicine
<br>
One Gustave L. Levy Place, Box 1498
<br>
New York, NY 10029-6574
<br>
<p>T: 212 659 8608
<br>
F: 646 537 8660
<br>
E: eugene.fluder_at_[hidden]
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11243.php">TERRY DONTJE: "Re: [OMPI devel] openib max_cqe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="11245.php">Holger Mickler: "Re: [OMPI devel] VampirTrace: time not increasing"</a>
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
