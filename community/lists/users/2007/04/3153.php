<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 26 16:30:57 2007" -->
<!-- isoreceived="20070426203057" -->
<!-- sent="Thu, 26 Apr 2007 14:30:52 -0600" -->
<!-- isosent="20070426203052" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bproc problems" -->
<!-- id="75B7689B-D8C6-45E5-9156-C4BA79A4C73C_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070426160646.J8327_at_tequila.chem.utoronto.ca" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-26 16:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can eliminate the &quot;[n17:30019] odls_bproc: openpty failed, using  
<br>
pipes instead&quot; message by configuring OMPI with the --disable-pty- 
<br>
support flag, as there is a bug in BProc that causes that to happen.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-4: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory
On Apr 26, 2007, at 2:06 PM, Daniel Gruner wrote:
&gt; Hi
&gt;
&gt; I have been testing OpenMPI 1.2, and now 1.2.1, on several BProc-
&gt; based clusters, and I have found some problems/issues.  All my
&gt; clusters have standard ethernet interconnects, either 100Base/T or
&gt; Gigabit, on standard switches.
&gt;
&gt; The clusters are all running Clustermatic 5 (BProc 4.x), and range
&gt; from 32-bit Athlon, to 32-bit Xeon, to 64-bit Opteron.  In all cases
&gt; the same problems occur, identically.  I attach here the results
&gt; from &quot;ompi_info --all&quot; and the config.log, for my latest build on
&gt; an Opteron cluster, using the Pathscale compilers.  I had exactly
&gt; the same problems when using the vanilla GNU compilers.
&gt;
&gt; Now for a description of the problem:
&gt;
&gt; When running an mpi code (cpi.c, from the standard mpi examples, also
&gt; attached), using the mpirun defaults (e.g. -byslot), with a single
&gt; process:
&gt;
&gt; 	sonoma:dgruner{134}&gt; mpirun -n 1 ./cpip
&gt; 	[n17:30019] odls_bproc: openpty failed, using pipes instead
&gt; 	Process 0 on n17
&gt; 	pi is approximately 3.1415926544231341, Error is 0.0000000008333410
&gt; 	wall clock time = 0.000199
&gt;
&gt; However, if one tries to run more than one process, this bombs:
&gt;
&gt; 	sonoma:dgruner{134}&gt; mpirun -n 2 ./cpip
&gt; 	.
&gt; 	.
&gt; 	.
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	[n21:30029] OOB: Connection to HNP lost
&gt; 	.
&gt; 	. ad infinitum
&gt;
&gt; If one uses de option &quot;-bynode&quot;, things work:
&gt;
&gt; 	sonoma:dgruner{145}&gt; mpirun -bynode -n 2 ./cpip
&gt; 	[n17:30055] odls_bproc: openpty failed, using pipes instead
&gt; 	Process 0 on n17
&gt; 	Process 1 on n21
&gt; 	pi is approximately 3.1415926544231318, Error is 0.0000000008333387
&gt; 	wall clock time = 0.010375
&gt;
&gt;
&gt; Note that there is always the message about &quot;openpty failed, using  
&gt; pipes instead&quot;.
&gt;
&gt; If I run more processes (on my 3-node cluster, with 2 cpus per  
&gt; node), the
&gt; openpty message appears repeatedly for the first node:
&gt;
&gt; 	sonoma:dgruner{146}&gt; mpirun -bynode -n 6 ./cpip
&gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
&gt; 	[n17:30061] odls_bproc: openpty failed, using pipes instead
&gt; 	Process 0 on n17
&gt; 	Process 2 on n49
&gt; 	Process 1 on n21
&gt; 	Process 5 on n49
&gt; 	Process 3 on n17
&gt; 	Process 4 on n21
&gt; 	pi is approximately 3.1415926544231239, Error is 0.0000000008333307
&gt; 	wall clock time = 0.050332
&gt;
&gt;
&gt; Should I worry about the openpty failure?  I suspect that  
&gt; communications
&gt; may be slower this way.  Using the -byslot option always fails, so  
&gt; this
&gt; is a bug.  The same occurs for all the codes that I have tried,  
&gt; both simple
&gt; and complex.
&gt;
&gt; Thanks for your attention to this.
&gt; Regards,
&gt; Daniel
&gt; -- 
&gt;
&gt; Dr. Daniel Gruner                        dgruner_at_[hidden]
&gt; Dept. of Chemistry                       daniel.gruner_at_[hidden]
&gt; University of Toronto                    phone:  (416)-978-8689
&gt; 80 St. George Street                     fax:    (416)-978-5325
&gt; Toronto, ON  M5S 3H6, Canada             finger for PGP public key
&gt; &lt;cpi.c.gz&gt;
&gt; &lt;config.log.gz&gt;
&gt; &lt;ompiinfo.gz&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Daniel Gruner: "[OMPI users] bproc problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3154.php">gshipman: "Re: [OMPI users] bproc problems"</a>
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
