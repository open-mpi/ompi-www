<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 16:13:06 2007" -->
<!-- isoreceived="20070426201306" -->
<!-- sent="Thu, 26 Apr 2007 16:06:46 -0400" -->
<!-- isosent="20070426200646" -->
<!-- name="Daniel Gruner" -->
<!-- email="dgruner_at_[hidden]" -->
<!-- subject="[OMPI users] bproc problems" -->
<!-- id="20070426160646.J8327_at_tequila.chem.utoronto.ca" -->
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
<strong>From:</strong> Daniel Gruner (<em>dgruner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 16:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I have been testing OpenMPI 1.2, and now 1.2.1, on several BProc-
<br>
based clusters, and I have found some problems/issues.  All my
<br>
clusters have standard ethernet interconnects, either 100Base/T or
<br>
Gigabit, on standard switches.
<br>
<p>The clusters are all running Clustermatic 5 (BProc 4.x), and range
<br>
from 32-bit Athlon, to 32-bit Xeon, to 64-bit Opteron.  In all cases
<br>
the same problems occur, identically.  I attach here the results
<br>
from &quot;ompi_info --all&quot; and the config.log, for my latest build on
<br>
an Opteron cluster, using the Pathscale compilers.  I had exactly
<br>
the same problems when using the vanilla GNU compilers.
<br>
<p>Now for a description of the problem:
<br>
<p>When running an mpi code (cpi.c, from the standard mpi examples, also
<br>
attached), using the mpirun defaults (e.g. -byslot), with a single
<br>
process:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sonoma:dgruner{134}&gt; mpirun -n 1 ./cpip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n17:30019] odls_bproc: openpty failed, using pipes instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 0 on n17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pi is approximately 3.1415926544231341, Error is 0.0000000008333410
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wall clock time = 0.000199
<br>
<p>However, if one tries to run more than one process, this bombs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sonoma:dgruner{134}&gt; mpirun -n 2 ./cpip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n21:30029] OOB: Connection to HNP lost
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;. ad infinitum
<br>
<p>If one uses de option &quot;-bynode&quot;, things work:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sonoma:dgruner{145}&gt; mpirun -bynode -n 2 ./cpip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n17:30055] odls_bproc: openpty failed, using pipes instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 0 on n17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 1 on n21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pi is approximately 3.1415926544231318, Error is 0.0000000008333387
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wall clock time = 0.010375
<br>
<p><p>Note that there is always the message about &quot;openpty failed, using pipes instead&quot;.
<br>
<p>If I run more processes (on my 3-node cluster, with 2 cpus per node), the
<br>
openpty message appears repeatedly for the first node:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sonoma:dgruner{146}&gt; mpirun -bynode -n 6 ./cpip
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n17:30061] odls_bproc: openpty failed, using pipes instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[n17:30061] odls_bproc: openpty failed, using pipes instead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 0 on n17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 2 on n49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 1 on n21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 5 on n49
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 3 on n17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process 4 on n21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pi is approximately 3.1415926544231239, Error is 0.0000000008333307
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wall clock time = 0.050332
<br>
<p><p>Should I worry about the openpty failure?  I suspect that communications
<br>
may be slower this way.  Using the -byslot option always fails, so this
<br>
is a bug.  The same occurs for all the codes that I have tried, both simple
<br>
and complex.
<br>
<p>Thanks for your attention to this.
<br>
Regards,
<br>
Daniel
<br>
<pre>
-- 
Dr. Daniel Gruner                        dgruner_at_[hidden]
Dept. of Chemistry                       daniel.gruner_at_[hidden]
University of Toronto                    phone:  (416)-978-8689
80 St. George Street                     fax:    (416)-978-5325
Toronto, ON  M5S 3H6, Canada             finger for PGP public key



</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3152/cpi.c.gz">cpi.c.gz</a>
</ul>
<!-- attachment="cpi.c.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3152/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3152/ompiinfo.gz">ompiinfo.gz</a>
</ul>
<!-- attachment="ompiinfo.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3153.php">David Gunter: "Re: [OMPI users] bproc problems"</a>
<li><strong>Reply:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
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
