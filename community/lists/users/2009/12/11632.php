<?
$subject_val = "[OMPI users] VampirTrace: time not increasing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 10:22:08 2009" -->
<!-- isoreceived="20091222152208" -->
<!-- sent="Tue, 22 Dec 2009 17:21:21 +0200" -->
<!-- isosent="20091222152121" -->
<!-- name="Roman Cheplyaka" -->
<!-- email="roman.cheplyaka_at_[hidden]" -->
<!-- subject="[OMPI users] VampirTrace: time not increasing" -->
<!-- id="20091222152121.GA2839_at_roman.t-soft" -->
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
<strong>Subject:</strong> [OMPI users] VampirTrace: time not increasing<br>
<strong>From:</strong> Roman Cheplyaka (<em>roman.cheplyaka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 10:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got the following problem while trying to run vt-enabled HPL benchmark on a
<br>
single 8-core Linux node.
<br>
<p>OTF ERROR in function OTF_WBuffer_setTimeAndProcess, file: OTF_WBuffer.c, line: 308:
<br>
&nbsp;time not increasing. (t= 2995392288, p= 2)
<br>
vtunify: Error: Could not read events of OTF stream [namestub ./a__ufy.tmp id 1]
<br>
vtunify: An error occurred during unifying events - Terminating ...
<br>
<p>Sometimes instead of above message I get this:
<br>
<p>vtunify: vt_unify_events_hdlr.cc:37: int Handle_Enter(OTF_WStream*, uint64_t, uint32_t, uint32_t, uint32_t): Assertion `global_statetoken != 0' failed.
<br>
<p>A program is automatically instrumented (all I did was changing mpicc to
<br>
mpicc-vt), compiled and run with latest svn of Open MPI, command:
<br>
<p>mpirun -np 8 --mca btl self,sm hpl
<br>
<p>The same problem was with the latest release version.
<br>
<p>When I run it with less number of processes, it works fine.
<br>
<p>Any ideas?
<br>
<p><pre>
-- 
Roman I. Cheplyaka
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11633.php">Eugene Loh: "Re: [OMPI users] Program deadlocks, on simple send/recv loop"</a>
<li><strong>Previous message:</strong> <a href="11631.php">Ethan Mallove: "Re: [OMPI users] MTT -trivial :All tests are not getting passed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
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
