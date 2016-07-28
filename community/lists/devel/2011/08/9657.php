<?
$subject_val = "Re: [OMPI devel] ibm/dynamic/loop_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 16:24:09 2011" -->
<!-- isoreceived="20110816202409" -->
<!-- sent="Tue, 16 Aug 2011 16:23:04 -0400" -->
<!-- isosent="20110816202304" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/dynamic/loop_spawn" -->
<!-- id="9C1AED37-D3BF-47F4-B2C1-5E5C86E3E3FF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E493F85.30305_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm/dynamic/loop_spawn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 16:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9658.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this a lot today on the call (and then some more afterwards). :-)
<br>
<p>I think there's 2 important points here.
<br>
<p>1. Ralph's original test was written with the intent of launching it with 1 process which would then do a series of local spawns.  Even doing a huge truckload of them, Ralph mentioned (on the phone to me today) that it only took about 15 seconds.
<br>
<p>2. My test -- i.e., the current one in the ibm test suite directory -- is more of a general &quot;beat on the ORTE/spawn system&quot; test.  I.e., just spawn/reap a bajillion times and ensure that it works.  I think that it still breaks openib, for example -- after you do a bunch of spawns, something runs out of resources (I don't remember the exact failure scenario).
<br>
<p><pre>
----
Ralph's opinion is that we don't need to test for #1 any more.  I don't think it would be bad to test for #1 any more, but the C code for such a test could be a bit smarter (i.e., only MCW rank 0 could COMM_SPAWN on COMM_SELF, and use a host info key of &quot;localhost&quot; to ensure spawning locally, while any other MCW procs could idle looping on while (!done) {sleep(1); MPI_Test(..., &amp;done); } so that they don't spin the CPU).
For #2, I don't disagree that Eugene's suggestions could make it a bit more robust.  After all, we only have so many hours for testing with so much equipment; one test that runs for hours and hours probably isn't useful.  You can imagine a bunch of ways to make that test more useful: take an argv[1] specifying the number of iterations, take an argv[1] that indicates a number of seconds to run the test, ensure that you only spawn on half the MCW processes and have the other half idle in a while(!done){...} loop, like mentioned above so that you can spawn on CPUs that aren't spinning tightly on MPI progress, ...etc.
On Aug 15, 2011, at 11:47 AM, Eugene Loh wrote:
&gt; This is a question about ompi-tests/ibm/dynamic.  Some of these tests (spawn, spawn_multiple, loop_spawn/child, and no-disconnect) exercise MPI_Comm_spawn* functionality.  Specifically, they spawn additional processes (beyond the initial mpirun launch) and therefore exert a different load on a test system than one might naively expect from the &quot;mpirun -np &lt;np&gt;&quot; command line.
&gt; 
&gt; One approach to testing is to have the test harness know characteristics about individual tests like this.  E.g., if I have only 8 processors and I don't want to oversubscribe, have the test harness know that particular tests should be launched with fewer processes.  On the other hand, building such generality into a test harness when changes would have to be so pervasive (subjective assessment) and so few tests require it may not make that much sense.
&gt; 
&gt; Another approach would be to manage oversubscription in the tests themselves.  E.g., for spawn.c, instead of spawning np new processes, do the following:
&gt; 
&gt; - idle np/2 of the processes
&gt; - have the remaining np/2 processes spawn np/2 new ones
&gt; 
&gt; (Okay, so that leaves open the possibility that the newly spawned processes might not appear on the same nodes where idled processes have &quot;made room&quot; for them.  Each solution seems loaded with shortcomings.)
&gt; 
&gt; Anyhow, I was interested in some feedback on this topic.  A very small number (1-4) of spawning tests are causing us lots of problems (undue complexity in the test harness as well as a bunch of our time for reasons I find difficult to explain succinctly).  We're inclined to modify the tests so that they're a little more social.  E.g., make decisions about how many of the launched processes should &quot;really&quot; be used, idling some fraction of the processes, and continuing the test only with the remaining fraction.
&gt; 
&gt; Comments?
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9658.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Eugene Loh: "[OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Reply:</strong> <a href="9684.php">Eugene Loh: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
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
